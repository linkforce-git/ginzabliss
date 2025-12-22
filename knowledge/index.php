<?php
    $title = '【医師監修】医療脱毛のイロハ（脱毛初心者が知るべき基礎知識）|  天王寺・モアナスキンクリニック';
    $description = '脱毛選びに必要なのは知識です。専門的な脱毛理論を一般の方でもわかるようにやさしく・詳しく・丁寧に解説します。｜天王寺で医療脱毛するなら天王寺駅前１分のモアナスキンクリニック';
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
        "name": "医療脱毛のイロハ",
        "item": "https://www.moana-skin-clinic.com/knowledge/"
    }]
}
</script>
</head>
<body id="knowledge" class="knowledge">
<div class="bodyWrapper">

<?php include(__DIR__.'/../include/header.php'); ?>

<main>
    <div id="fv">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/"><img src="/assets/img/home.svg" alt="HOME"></a></li>
                <li>医療脱毛のイロハ</li>
            </ol>
        </nav>
        <div class="wrapper">
            <div class="sub">医療脱毛がはじめての方へ</div>
            <h1 class="ttlGrp">
                <span class="ttl">医療脱毛のイロハ</span>
                <span class="small">脱毛初心者が知るべき基礎知識</span>
            </h1>
        </div>
        <?php include(__DIR__.'/../include/svg_waves.php'); ?>
    </div>
    <section id="ncssryArea">
        <div class="wrapper">
            <div class="h2a">
                <div class="en">NECESSARY</div>
                <h2 class="jp">脱毛選びに<br>必要なのは知識です</h2>
            </div>
            <div class="listBox">
                <div class="head">後悔しないために<br>必要な知識とは？</div>
                <ul>
                    <li>脱毛原理（脱毛機序）</li>
                    <li>熱破壊式・蓄熱式の違い</li>
                    <li>脱毛レーザーの違い</li>
                    <li>照射熱量の重要性</li>
                    <li>エステ脱毛との原理の違い</li>
                </ul>
            </div>
            <p class="txta">脱毛選びに必要なのは知識です。ネットのステマに踊らされず、自分に合った「抜ける脱毛」を選ぶためには正しい知識が不可欠です。</p>
            <p class="txta">当サイトでは専門的な脱毛理論を一般の方でもわかるようにやさしく・詳しく・丁寧に解説しています。ぜひご覧いただき、「脱毛クリニックの良し悪しを判断する物差し」を手に入れてください。</p>
            <p class="txta">※以下の各ページを順にすべてお読みいただくことをお勧めします。</p>
        </div>
        <?php include(__DIR__.'/../include/svg_waves.php'); ?>
    </section>
    <section id="explainArea">
        <div class="wrapper">
            <div class="h2a">
                <div class="en">EXPLANATION</div>
                <h2 class="jp">医療脱毛のイロハ</h2>
            </div>
            <ol>
                <li class="link_panel y <?= isset($_COOKIE['read_knowledge_principle']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/knowledge/panel_principle.jpg.webp">
                        <img class="pic" src="/assets/img/knowledge/panel_principle.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>1</span><img src="/assets/img/slash.svg"><span>8</span></div>
                            <div class="ttl"><a href="/knowledge/principle">医療脱毛のしくみ</a></div>
                        </div>
                        <p class="txta">「医療脱毛ってどうして毛が抜けるんだろう？」そんな疑問にお答えします。<br>医療脱毛を実現しているのはレーザーの熱です。レーザーが毛にどのように作用して脱毛を実現するのか、その原理について解説します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_knowledge_principle']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/knowledge/principle"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
                <li class="link_panel y <?= isset($_COOKIE['read_knowledge_reason']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/knowledge/panel_reason.jpg.webp">
                        <img class="pic" src="/assets/img/knowledge/panel_reason.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>2</span><img src="/assets/img/slash.svg"><span>8</span></div>
                            <div class="ttl"><a href="/knowledge/reason">何回も脱毛施術が<br>必要な理由</a></div>
                        </div>
                        <p class="txta">一度の施術で毛がすべてなくなるわけではありません。満足のいく脱毛効果を得るためには、必ず複数回の施術が必要です。どうして複数回の施術が必要なのか、その理由について解説します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_knowledge_reason']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/knowledge/reason"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
                <li class="link_panel y <?= isset($_COOKIE['read_knowledge_guideline']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/knowledge/panel_guideline.jpg.webp">
                        <img class="pic" src="/assets/img/knowledge/panel_guideline.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>3</span><img src="/assets/img/slash.svg"><span>8</span></div>
                            <div class="ttl"><a href="/knowledge/guideline">医療脱毛の<br>施術回数と効果</a></div>
                        </div>
                        <p class="txta">施術部位別に、施術回数と効果の目安について説明します。一般値とされる目安に加え、当院症例における実績データ（顧客アンケ―トにより取得したデータ）も公開します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_knowledge_guideline']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/knowledge/guideline"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
                <li class="link_panel y <?= isset($_COOKIE['read_knowledge_effect']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/knowledge/panel_effect.jpg.webp">
                        <img class="pic" src="/assets/img/knowledge/panel_effect.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>4</span><img src="/assets/img/slash.svg"><span>8</span></div>
                            <div class="ttl"><a href="/knowledge/effect">脱毛効果を決定する<br>3大因子</a></div>
                        </div>
                        <p class="txta">脱毛効果はクリニックが使用する脱毛機や施術プロトコルによって大きく変わります。脱毛効果は一体どのようなロジックで決定するのか、脱毛効果を決定する3大因子について解説します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_knowledge_effect']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/knowledge/effect"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
                <li class="link_panel y <?= isset($_COOKIE['read_knowledge_laser']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/knowledge/panel_laser.jpg.webp">
                        <img class="pic" src="/assets/img/knowledge/panel_laser.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>5</span><img src="/assets/img/slash.svg"><span>8</span></div>
                            <div class="ttl"><a href="/knowledge/laser">医療脱毛レーザーの<br>種類と効果の違い</a></div>
                        </div>
                        <p class="txta">医療用脱毛機は様々な機種があり、脱毛機によって照射できるレーザーも違います。レーザーの種類は全部で3種類。3つのレーザーそれぞれの特性と効果の違いについて解説します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_knowledge_laser']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/knowledge/laser"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
                <li class="link_panel y <?= isset($_COOKIE['read_knowledge_type']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/knowledge/panel_type.jpg.webp">
                        <img class="pic" src="/assets/img/knowledge/panel_type.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>6</span><img src="/assets/img/slash.svg"><span>8</span></div>
                            <div class="ttl"><a href="/knowledge/type">熱破壊式と蓄熱式の違い</a></div>
                        </div>
                        <p class="txta">脱毛施術時レーザーの当て方は2種類あります。熱破壊式照射と蓄熱式照射の2種類です。当て方がどう違うのか、そして効果にどのような違いがあるのかを解説します。また、「蓄熱式は抜けない」というウワサの真相についても解説します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_knowledge_type']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/knowledge/type"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
                <li class="link_panel y <?= isset($_COOKIE['read_knowledge_difference']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/knowledge/panel_difference.jpg.webp">
                        <img class="pic" src="/assets/img/knowledge/panel_difference.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>7</span><img src="/assets/img/slash.svg"><span>8</span></div>
                            <div class="ttl"><a href="/knowledge/difference">エステ脱毛と<br>医療脱毛の違い</a></div>
                        </div>
                        <p class="txta">エステ脱毛に永久脱毛効果はありません。その理由はレーザーそのものの違いと照射熱量の違いにあります。エステ脱毛と医療脱毛はなにがどう違うのか、どうしてエステ脱毛は抜けないのか、詳しく解説します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_knowledge_difference']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/knowledge/difference"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
                <li class="link_panel y <?= isset($_COOKIE['read_knowledge_risk']) ? 'read' : 'unread' ?>">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/knowledge/panel_risk.jpg.webp">
                        <img class="pic" src="/assets/img/knowledge/panel_risk.jpg">
                    </picture>
                    <div class="inner">
                        <div class="head">
                            <div class="num"><span>8</span><img src="/assets/img/slash.svg"><span>8</span></div>
                            <div class="ttl"><a href="/knowledge/risk">医療脱毛の<br>リスク・副作用</a></div>
                        </div>
                        <p class="txta">医療脱毛にはリスク・副作用があります。どんなリスク・副作用があるのか詳しく解説します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_knowledge_risk']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/knowledge/risk"><div class="arw"></div>VIEW MORE</a>
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
    <section id="featuresArea">
        <div class="wrapper">
            <div class="h2a">
                <div class="en">FEATURES</div>
                <h2 class="jp">モアナ医療脱毛の特長</h2>
            </div>
            <a class="lplink" href="/features/lp1/">
                <picture>
                    <source type="image/webp" srcset="/assets/img/lplink.jpg.webp">
                    <img src="/assets/img/lplink.jpg">
                </picture>
            </a>
            <ul class="link_list">
                <li><a href="/features/effect_Commitment">脱毛効果へのこだわり</a></li>
                <li><a href="/features/pain_Commitment">痛み低減へのこだわり</a></li>
                <li><a href="/features/price_Commitment">公正な価格表記へのこだわり</a></li>
                <li><a href="/features/machine">当院脱毛機の特長と効果の違い</a></li>
                <li><a href="/features/review">お客様アンケート結果</a></li>
                <li><a href="/features/faq">当院サービスに関するQ&amp;A</a></li>
            </ul>
        </div>
    </section>
</main>

<?php include(__DIR__.'/../include/footer.php'); ?>

</div><!-- /.bodyWrapper -->

<?php include(__DIR__.'/../include/foot_item.php'); ?>
