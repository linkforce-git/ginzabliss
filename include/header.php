<?php
    $pageId = empty( $pageId ) ? '' : $pageId; // トップページのみ
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm_id ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="fv">
    <div class="wrapper">
<?php if( empty($pageId) || ($pageId != "top") ): // トップページ以外で表示 ?>
        <a class="logo" href="/"><img src="/assets/img/logo.png" alt="銀座ブリススキンクリニック"></a>
        <p class="h_txt">銀座一丁目駅<br><span>徒歩2分</span></p>
<?php endif; ?>
        <label class="btn_menu" for="nav_gMenu">
            <span class="icon"><span class="shine y"></span><span class="shine b"></span><span class="shine r"></span></span>
            <span class="txt">MENU</span>
        </label>
    </div>
</header>
