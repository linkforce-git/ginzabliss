<?php
// ajax判定
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')) {
	$ajax = true;
} else {
	$ajax = false;
}

// CSRF対策
session_start();
if (! isset($_POST["csrf_token"]) || $_POST["csrf_token"] !== $_SESSION['csrf_token']) {
	if( $ajax ) {
		echo "fail";
	} else {
		header('Location: ./');
	}
	exit;
}

require_once(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__.'/../include/common.php');
$common = new Common(); // 独自クラス

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



// POST取得
$data = array();
foreach ($_POST as $key => $val) {
	if( is_array($val) ) {
		$data[$key] = implode ( "、" , $val );
	} else {
	    $data[$key] = $val;
	}
}

// 受け渡し値の空チェック
if (empty($data)) {
	if( $ajax ) {
		echo "fail";
	} else {
	    header('Location: ./');
	}
    exit;
}


// メールコンフィグ読み込み
$ini_array = parse_ini_file(__DIR__.'/config/config.ini', true);


/*---------- メール送信 ----------*/
// ** 社内担当者向け **
	// iniファイル情報取得（adminmailセクション）
	$text = file_get_contents(__DIR__.'/config/admin_mail.txt'); // メールテンプレート読込
    $text = $common->replace_body($text, $data); // 変数など置換

	// インスタンス生成
	$mail = new PHPMailer(true);

	try {
		$mail = smtpSetting( $mail, $ini_array ); // SMTP設定
		$mail->CharSet = 'utf-8'; //日本語設定

		// メール本体
		$mail->setFrom( $ini_array['adminmail']['from'], $ini_array['adminmail']['from_name'] ); // 送信元
		$mail->Subject = $ini_array['adminmail']['subject'];  // 件名
		$mail->Body    = $text;  // 本文
		$mail->isHTML(true);   // HTML形式を指定

		// 送信先メールアドレスと名前
		$to = explode( ',', $ini_array['adminmail']['to'] );
		for ($i = 0; $i < count($to); $i++) {
			$mail->addAddress($to[$i]);
		}
		// CC
		if( !empty( $ini_array['adminmail']['cc'] ) ) {
			$cc = explode( ',', $ini_array['adminmail']['cc'] );
			for ($i = 0; $i < count($cc); $i++) {
				$mail->AddCC($cc[$i]);
			}
		}
		// BCC
		if( !empty( $ini_array['adminmail']['bcc'] ) ) {
			$bcc = explode( ',', $ini_array['adminmail']['bcc'] );
			for ($i = 0; $i < count($bcc); $i++) {
				$mail->AddBCC($bcc[$i]);
			}
		}
		
		// メール送信
		if( !$mail->send() ) {
			echo "メールの送信に失敗しました。";
			exit;
		}

	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		exit;
	}


// ** ユーザ向け **
	$text = file_get_contents(__DIR__.'/config/user_mail.txt'); // メールテンプレート読込
    $text = $common->replace_body($text, $data); // 変数など置換


	// clear all
	$mail->ClearAllRecipients(); 

	try {
		$mail = smtpSetting( $mail, $ini_array ); // SMTP設定
		$mail->CharSet = 'utf-8'; //日本語設定

		// メール本体
		$mail->setFrom( $ini_array['usermail']['from'], $ini_array['usermail']['from_name'] ); // 送信元
		$mail->Subject = $ini_array['usermail']['subject'];  // 件名
		$mail->Body    = $text;  // 本文
		$mail->isHTML(true);   // HTML形式を指定

		// 送信先メールアドレスと名前
		$mail->addAddress( $data['reserv_email'] );

/*
		// CC
		if( !empty( $ini_array['usermail']['cc'] ) ) {
			$cc = explode( ',', $ini_array['usermail']['cc'] );
			for ($i = 0; $i < count($cc); $i++) {
				$mail->AddCC($cc[$i]);
			}
		}
		// BCC
		if( !empty( $ini_array['usermail']['bcc'] ) ) {
			$bcc = explode( ',', $ini_array['usermail']['bcc'] );
			for ($i = 0; $i < count($cc); $i++) {
				$mail->AddBCC($bcc[$i]);
			}
		}
*/

		// メール送信
		if( !$mail->send() ) {
			echo "メールの送信に失敗しました。";
			exit;
		}

	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		exit;
	}

	// リターン
	if( $ajax ) {
		echo "success";
	} else {
		header('Location: ./thanks');
	}
	exit;


/*---------- smtp設定 ----------*/
// ** smtpセクションに記載がある場合のみ処理される **
function smtpSetting( $mail, $ini_array ) {
	if ( (! empty($ini_array['smtp']['host']) ) &&
	     (! empty($ini_array['smtp']['auth']) ) &&
	     (! empty($ini_array['smtp']['secure']) ) &&
	     (! empty($ini_array['smtp']['port']) ) &&
	     (! empty($ini_array['smtp']['user']) ) &&
	     (! empty($ini_array['smtp']['pass']) ) ) {

		$mail->isSMTP(); 
		$mail->Host = $ini_array['smtp']['host'];         // メールサーバ
		$mail->SMTPAuth = $ini_array['smtp']['auth'];     // SMTP認証を有効にする
		$mail->SMTPSecure =  $ini_array['smtp']['secure'];// 暗号化通信 (Gmail では使えます)
		$mail->Port = $ini_array['smtp']['port'];         // SMTPポート（25,　587 ...）
		$mail->Username = $ini_array['smtp']['user'];         // SMTP認証ユーザ
		$mail->Password = $ini_array['smtp']['pass'];         // SMTP認証パスワード
	}

	return $mail;
}
