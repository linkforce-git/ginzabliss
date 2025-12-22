<?php
    $title = 'ブリス医療脱毛の特長 | 銀座ブライトスキンクリニック';
    $description = 'コンセプトは「高い脱毛効果」「痛みの低減」「公正な価格表記」。私たちは品質向上に挑み続けます。｜銀座で医療脱毛するなら銀座一丁目駅徒歩2分の銀座ブリススキンクリニック';
    include(__DIR__.'/../include/head_link.php');
?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "TOP",
        "item": "https://www.moana-skin-clinic.com/"
    },{
        "@type": "ListItem",
        "position": 2,
        "name": "ブリス医療脱毛の特長",
        "item": "https://www.moana-skin-clinic.com/features/"
    }]
}
</script>
</head>
<body id="features">
<div class="bodyWrapper">

<?php include(__DIR__.'/../include/header.php'); ?>

<main>
    <div id="fv">
        <div class="bg">
            <video src="/assets/img/top/fv.mp4" type="video/mp4" autoplay muted loop playsinline></video>
        </div>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/"><img src="/assets/img/home.svg" alt="HOME"></a></li>
                <li>ブリス医療脱毛の特長</li>
            </ol>
        </nav>
        <div class="wrapper">
            <div class="sub">～当院をご検討中の方へ～</div>
            <h1 class="ttl">ブリス医療脱毛<br>の特長</h1>
        </div>
        <?php include(__DIR__.'/../include/svg_waves.php'); ?>
    </div>
    <section id="conceptArea">
        <div class="wrapper">
            <div class="h2a">
                <div class="en">CONCEPT</div>
                <h2 class="jp">私たちの<br>医療脱毛コンセプト</h2>
            </div>
            <picture class="concept">
                <source type="image/webp" srcset="/assets/img/features/concept.png.webp">
                <img src="/assets/img/features/concept.png">
            </picture>
            <p class="txta">
                私たちは品質向上に挑み続けます。<br>
                より<a href="#f1">1.高い脱毛効果を提供</a>できるよう、<br>
                より<a href="#f2">2.効果を落とさず痛みを低減</a>できるよう、<br>
                お客様の声に耳を傾け、改善を続けます。<br>
                そして痛みが少ない、効果が高い脱毛を、わかりやすい<a href="#f3">3.公正な価格表記</a>でご案内します。
            </p>
            <a class="lplink" href="/features/lp1/">
                <picture>
                    <source type="image/webp" srcset="/assets/img/lplink.jpg.webp">
                    <img src="/assets/img/lplink.jpg">
                </picture>
            </a>
        </div>
        <?php include(__DIR__.'/../include/svg_waves.php'); ?>
    </section>
    <section id="featuresArea">
        <div class="wrapper">
            <div class="h2a">
                <div class="en">FEATURES</div>
                <h2 class="jp">モアナのこだわり・特長</h2>
            </div>
            <ol>
                <li id="f1" class="link_panel b <?= isset($_COOKIE['read_features_effect_Commitment']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/features/panel_effect_Commitment.jpg.webp">
                        <img class="pic" src="/assets/img/features/panel_effect_Commitment.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>1</span><img src="/assets/img/slash.svg"><span>6</span></div>
                            <div class="ttl"><a href="/features/effect_Commitment">脱毛効果へのこだわり</a></div>
                        </div>
                        <p class="txta">脱毛効果に最も影響するのは「照射熱量」です。そして「レーザー波長」「照射方式」も効果に影響します。これら3つの効果決定因子に対する私たちのこだわりについてご紹介します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_features_effect_Commitment']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/features/effect_Commitment"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
                <li id="f2" class="link_panel b <?= isset($_COOKIE['read_features_pain_Commitment']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/features/panel_pain_Commitment.jpg.webp">
                        <img class="pic" src="/assets/img/features/panel_pain_Commitment.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>2</span><img src="/assets/img/slash.svg"><span>6</span></div>
                            <div class="ttl"><a href="/features/pain_Commitment">痛み低減へのこだわり</a></div>
                        </div>
                        <p class="txta">私たちの医療脱毛は驚くほど痛みがありません。むしろ気持ち良くていびきを掻いて眠ってしまうお客様もいるほどです。痛みを極限まで低減するための、私たちのこだわりをご紹介します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_features_pain_Commitment']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/features/pain_Commitment"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
                <li id="f3" class="link_panel b <?= isset($_COOKIE['read_features_price_Commitment']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/features/panel_price_Commitment.jpg.webp">
                        <img class="pic" src="/assets/img/features/panel_price_Commitment.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>3</span><img src="/assets/img/slash.svg"><span>6</span></div>
                            <div class="ttl"><a href="/features/price_Commitment">公正な価格表記への<br>こだわり</a></div>
                        </div>
                        <p class="txta">私たちは公正な価格表記に努めています。効果を落とした廉価なプランや部位を省いた全身プランなど、「広告用の釣りプラン」は用意しません。購入可能なプランのみを総額で表記します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_features_price_Commitment']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/features/price_Commitment"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
                <li class="link_panel b <?= isset($_COOKIE['read_features_machine']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/features/panel_machine.jpg.webp">
                        <img class="pic" src="/assets/img/features/panel_machine.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>4</span><img src="/assets/img/slash.svg"><span>6</span></div>
                            <div class="ttl"><a href="/features/machine">当院脱毛機の特長と<br>効果の違い</a></div>
                        </div>
                        <p class="txta">当院は、優れた熱量管理機能を搭載した「エクレアプロ（蓄熱式脱毛機）」を採用しています。その特長や、他機との効果の違いについて詳しく解説します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_features_machine']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/features/machine"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
                <li class="link_panel b <?= isset($_COOKIE['read_features_review']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/features/panel_review.jpg.webp">
                        <img class="pic" src="/assets/img/features/panel_review.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>5</span><img src="/assets/img/slash.svg"><span>6</span></div>
                            <div class="ttl"><a href="/features/review">お客様アンケート結果</a></div>
                        </div>
                        <p class="txta">お客様アンケートに基づく統計データを公開しています。施術効果、施術の痛み、予約の取りやすさなど、当院サービスを他のお客様がどのように評価しているのか、ぜひご覧になってください。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_features_review']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/features/review"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
                <li class="link_panel b <?= isset($_COOKIE['read_features_faq']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/features/panel_faq.jpg.webp">
                        <img class="pic" src="/assets/img/features/panel_faq.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>6</span><img src="/assets/img/slash.svg"><span>6</span></div>
                            <div class="ttl"><a href="/features/faq">当院サービスに関するQ&amp;A</a></div>
                        </div>
                        <p class="txta">クリニックの選択において気になるあれこれをQ&amp;A形式でまとめました。「シェービング代はかかるの？」「生理中でも脱毛できるの？」など様々な疑問に回答します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_features_faq']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/features/faq"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="h2a">
                <div class="en">PLAN</div>
                <h2 class="jp">医療脱毛プランと<br>料金のご案内</h2>
            </div>
            <ul class="link_list">
                <li><a href="/plan/body">全身脱毛プラン</a></li>
                <li><a href="/plan/vio">VIO脱毛プラン</a></li>
                <li><a href="/plan/face">顔脱毛プラン</a></li>
                <li><a href="/plan/price">医療脱毛の料金一覧</a></li>
            </ul>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="h2a">
                <div class="en">INTRODUCTION</div>
                <h2 class="jp">医療脱毛のイロハ</h2>
            </div>
            <ul class="link_list">
                <li><a href="/knowledge/principle">医療脱毛のしくみ</a></li>
                <li><a href="/knowledge/reason">何回も脱毛施術が必要な理由</a></li>
                <li><a href="/knowledge/guideline">医療脱毛の施術回数と効果</a></li>
                <li><a href="/knowledge/effect">脱毛効果を決定する3大因子</a></li>
                <li><a href="/knowledge/laser">医療脱毛レーザーの種類と効果の違い</a></li>
                <li><a href="/knowledge/type">熱破壊式と蓄熱式の違い</a></li>
                <li><a href="/knowledge/difference">エステ脱毛と医療脱毛の違い</a></li>
                <li><a href="/knowledge/risk">医療脱毛のリスク・副作用</a></li>
            </ul>
        </div>
    </section>
</main>

<?php include(__DIR__.'/../include/footer.php'); ?>

</div><!-- /.bodyWrapper -->

<?php include(__DIR__.'/../include/foot_item.php'); ?>
