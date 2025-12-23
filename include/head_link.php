<?php
    if ($_SERVER["HTTP_HOST"] === "www.ginza-bliss-skin.medical-gl.com") {
        $gtm_id = "GTM-5MGVZJGV"; // 本番
    } else {
        $gtm_id = "GTM-5TPFMRG"; // テスト
    }

    // フォームのCSRF対策
    session_start();
    if (!isset($_SESSION['csrf_token'])) {
        $token_byte = openssl_random_pseudo_bytes(16);
        $_SESSION['csrf_token'] = bin2hex($token_byte);
    }
    $csrf_token = $_SESSION['csrf_token'];
?>
<!DOCTYPE html>
<html lang="jp">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport-extra" content="min-width=390, max-width=768">
<script src="https://cdn.jsdelivr.net/npm/viewport-extra@2.1.4/dist/iife/viewport-extra.min.js" async></script>
<meta name="format-detection" content="telephone=no">
<title><?= $title ?></title>
<?php if (!empty($description)): ?>
<meta name="description" content="<?= $description ?>">
<?php endif; ?>
<link rel="icon" href="/favicon.png" type="image/png">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.0.1/dist/css/yakuhanmp_s.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300..700&family=EB+Garamond&family=Jost&family=Shippori+Mincho:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/assets/js/slick-1.8.1/slick.css"/>
<link rel="stylesheet" href="/assets/js/slick-1.8.1/slick-theme.css"/>
<link rel="stylesheet" href="/assets/js/jquery-ui-1.12.1/jquery-ui.min.css">
<link rel="stylesheet" href="/assets/css/all.min.css?date=20241220">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?= $gtm_id ?>');</script>
<!-- End Google Tag Manager -->

