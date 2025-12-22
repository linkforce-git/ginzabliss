<?php
    if( ! isset( $epiPage ) ) $epiPage = true; // 脱毛に関する文章の出し分け（true:表示する、false:表示しない）
    if( ! isset( $linkToTop ) ) $linkToTop = false; // 電話番号の部分をトップへのリンクに変更（true:変更する、false:変更しない）
?>
    <section id="counsArea">
        <div class="bg"></div>
        <div class="wrapper">
            <div class="head">
                <div class="en">COUNSELING</div>
                <h2 class="jp"><span>無料カウンセリング</span><span>のご案内</span></h2>
            </div>
            <picture>
                <source type="image/webp" srcset="/assets/img/couns_pic.jpg.webp">
                <img class="pic" src="/assets/img/couns_pic.jpg">
            </picture>
<?php if( $epiPage ): ?>
            <div class="txtWrap">
                <h3 class="ttl1">無料カウンセリングとは？</h3>
                <p class="txta">医療脱毛について説明し、疑問や不安にお答えします。あなたの肌と脱毛目標を伺ったうえで、<em>あなたに必要な施術回数と効果の目安をご案内します。</em><br>所要時間は30分～1時間程度。カウンセリングは無料で、契約しないでお帰りの場合、費用は一切かかりません。無理な勧誘もございませんので安心してお越しください。</p>
            </div>
<?php endif; ?>
            <div class="btnWrap">
                <div class="ttl2">
                    <div class="icon"><img src="/assets/img/icon_calendar.svg"></div>
                    <h3 class="txt">24時間受付。WEB予約はこちら</h3>
                </div>
                <?php /* <a class="btn r" href="https://reservation.medical-force.com/c/c950ae3c1f524f10b649d40de1072856/reservations/new?menu_entrance_id=5cf3a3bd-8bf5-4f3a-8d81-3a30178480a8" target="_blank" rel="noopener"> */ ?>
                <label class="btn r" for="reserv_open">
                    <div class="filter"><?php include(__DIR__.'/svg_waves.php'); ?></div>
                    <div class="txt"><div class="tag">24時間WEB受付</div>無料カウンセリング予約</div>
                    <div class="arw"></div>
                </label>
                <?php /* </a> */ ?>
<?php if( $linkToTop ): ?>
                <div class="linkTop">
                    <h3 class="txt">当院についてもっと知りたい方</h3>

                    <a class="btn white" href="/">
                        <div class="txt">医療脱毛TOPへ</div>
                        <div class="arw"></div>
                    </a>
                </div>
<?php else: ?>
                <div class="ttl2">
                    <div class="icon"><img src="/assets/img/icon_tel.svg"></div>
                    <h3 class="txt">お電話でのご質問・ご予約はこちら</h3>
                </div>
                <div class="telBox">
                    <a class="link" href="tel:0120235118"><span class="tel">TEL.</span><span class="num">0120-235-118</span></a>
                    <p class="txt">受付：11：00～20：00　定休日：月曜・火曜</p>
                </div>
<?php endif; ?>
            </div>
        </div>
    </section>
<?php 
    // 変数リセット
    unset($linkToTop);
?>
