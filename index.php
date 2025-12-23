<?php
    $title = '銀座ブリススキンクリニック | 銀座・クチコミ評判の医療脱毛';
    $description = '銀座で医療脱毛するなら銀座一丁目駅徒歩2分の銀座ブリススキンクリニック。口コミで高評価！少ない回数・短い期間で完了する、熱量重視の医療脱毛です。';
    include(__DIR__.'/include/head_link.php');
?>
</head>
<body id="top">
<div class="bodyWrapper">

<?php include(__DIR__.'/include/header.php'); ?>

<main>
    <div id="top_fv">
        <div class="bg">
            <video src="/assets/img/top/fv.mp4" type="video/mp4" autoplay muted loop playsinline></video>
        </div>
        <div class="wrapper">
            <div class="txt1">脱毛<em>効果</em>は<br>照射<em>熱量</em>に比例する</div>
            <div class="txt2">EPILATION EFFECT<img src="/assets/img/top/proportional.png">THERMAL ENERGY</div>
        </div>
        <div class="panel">
            <div class="txt3"><span>科学的根拠に基づく</span><br><span>確かな医療脱毛を</span><br><span>提供する</span></div>
            <div class="txt4">銀座一丁目駅<br>徒歩１分</div>
            <h1 class="ttl"><img src="/assets/img/top/fv_logo.png" alt="モアナスキンクリニック"></h1>
        </div>
        <div class="scroll">SCROLL</div>
        <?php include(__DIR__.'/include/svg_waves.php'); ?>
    </div>
    <section id="msgArea">
        <div class="wrapper">
            <div class="h3a y">
                <div class="shine"></div>
                <h3 class="ttl">「抜けない格安脱毛は嫌だ…」<br>そんなお客様に選ばれています</h3>
            </div>
            <div class="txtBox">
                <img class="illust" src="/assets/img/top/msg_illust.png">
                <p class="msgTxt">脱毛効果は照射熱量で決まります。</p>
                <p class="msgTxt">熱量が多ければ抜けるし、<br>少なければ抜けません。</p>
                <p class="msgTxt">だから私たちは熱量にこだわります。</p>
                <p class="msgTxt">安全に施術可能な最大熱量を照射し、<br>少ない回数・短い期間で完了する、<br>総額が安い医療脱毛を提供します。</p>
            </div>
            <div class="box">
                <h4 class="box_head"><span class="txt1">8回以下の施術で</span><br><span class="line"><span class="txt2">91</span><span class="txt3">%が</span><span class="txt4">効果に満足</span></span></h4>
                <div class="enq_ttl1">～エクレアプロに関するアンケート～</div>
                <div class="enq_ttl2">満足するまでに要した施術回数</div>
                <img src="/assets/img/top/msg_graph.png">
            </div>
        </div>
        <?php include(__DIR__.'/include/svg_waves.php'); ?>
    </section>
    <section id="lplinkArea">
        <div class="wrapper">
            <a class="lplink" href="/features/lp1/">
                <picture>
                    <source type="image/webp" srcset="/assets/img/lplink.jpg.webp">
                    <img src="/assets/img/lplink.jpg">
                </picture>
            </a>
        </div>
    </section>
    <section id="knowArea">
        <div class="h2b y">
            <div class="filter"><?php include(__DIR__.'/include/svg_waves.php'); ?></div>
            <div class="icoWrap">
                <svg class="shadow"><use href="#shadow"/></svg>
                <img class="icon" src="/assets/img/icon_know.svg">
            </div>
            <div class="sub">初めての方へ</div>
            <h2 class="ttl">医療脱毛のイロハ</h2>
        </div>
        <div class="wrapper">
            <picture>
                <source type="image/webp" srcset="/assets/img/top/know_pic.png.webp">
                <img class="pic1" src="/assets/img/top/know_pic.png">
            </picture>
            <p class="txta">
                <em>脱毛選びに必要なのは知識</em>です。<br>
                ネットの真偽不明な情報に惑うことなく、「抜ける脱毛」を選ぶためには正しい知識が不可欠です。
            </p>
            <p class="txta">
                当サイトでは専門的な脱毛理論をやさしく・詳しく解説しています。<br>
                ぜひご覧いただき<em>「脱毛クリニックの良し悪しを判断する物差し」</em>を手に入れてください。
            </p>
            <ol class="panels">
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
                        <p class="txta">医療脱毛とは、医療レーザーで発毛組織を破壊する施術です。レーザーが毛にどのように作用して脱毛を実現するのか、その原理について詳しく解説します。</p>
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
                        <p class="txta">一度の施術ですべての毛がなくなるわけではありません。満足のいく脱毛効果を得るためには複数回の施術が必要です。どうして複数回の施術が必要なのか、その理由を解説します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_knowledge_reason']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/knowledge/reason"><div class="arw"></div>VIEW MORE</a>
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
                        <p class="txta">施術１回の脱毛効果はクリニックによってまったく違います。それは一体どうしてなのか…？一体どのような因子によって脱毛効果は決定するのか、詳しく解説します。</p>
                        <div class="linkWrap">
                            <div class="state"><?= isset($_COOKIE['read_knowledge_effect']) ? '閲覧済みです' : 'まだ読んでいません' ?></div>
                            <a class="link" href="/knowledge/effect"><div class="arw"></div>VIEW MORE</a>
                        </div>
                    </div>
                </li>
            </ol>
            <a class="btn y" href="/knowledge/">
                <div class="filter"><?php include(__DIR__.'/include/svg_waves.php'); ?></div>
                <div class="icoWrap"><div class="icon"></div></div>
                <div class="txt">すべての<br>イロハを見る</div>
                <div class="arw"></div>
            </a>
        </div>
    </section>
    <section id="featArea">
        <div class="h2b b">
            <div class="filter"><?php include(__DIR__.'/include/svg_waves.php'); ?></div>
            <div class="icoWrap">
                <svg class="shadow"><use href="#shadow"/></svg>
                <div class="icon shine"></div>
            </div>
            <div class="sub">当院をご検討中の方へ</div>
            <h2 class="ttl">ブリス医療脱毛の特長</h2>
        </div>
        <div class="wrapper">
            <div class="h3a b">
                <div class="shine"></div>
                <h3 class="ttl">私たちの医療脱毛コンセプト</h3>
            </div>
            <picture class="concept">
                <source type="image/webp" srcset="/assets/img/features/concept.png.webp">
                <img src="/assets/img/features/concept.png">
            </picture>
            <p class="txta">
                私たちは品質向上に挑み続けます。<br>
                より<em>“高い脱毛効果”を提供</em>できるよう、<br>
                より<em>“効果を落とさず痛みを低減”</em>できるよう、<br>
                お客様の声に耳を傾け、改善を続けます。<br>
                そして痛みが少ない、効果が高い脱毛を、わかりやすい<em>公正な価格表記</em>でご案内します。
            </p>
            <a class="lplink" href="/features/lp1/">
                <picture>
                    <source type="image/webp" srcset="/assets/img/lplink.jpg.webp">
                    <img src="/assets/img/lplink.jpg">
                </picture>
            </a>
            <ol class="panels">
                <li class="link_panel b <?= isset($_COOKIE['read_features_effect_Commitment']) ? 'read' : 'unread' ?>">
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
                <li class="link_panel b <?= isset($_COOKIE['read_features_pain_Commitment']) ? 'read' : 'unread' ?>">
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
                <li class="link_panel b <?= isset($_COOKIE['read_features_price_Commitment']) ? 'read' : 'unread' ?>">
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
            </ol>
            <a class="btn b" href="/features/">
                <div class="filter"><?php include(__DIR__.'/include/svg_waves.php'); ?></div>
                <div class="icoWrap"><div class="icon shine"></div></div>
                <div class="txt">すべての<br>特長を見る</div>
                <div class="arw"></div>
            </a>
        </div>
    </section>
    <section id="planArea">
        <div class="h2b r">
            <div class="filter"><?php include(__DIR__.'/include/svg_waves.php'); ?></div>
            <div class="icoWrap">
                <svg class="shadow"><use href="#shadow"/></svg>
                <img class="icon" src="/assets/img/icon_plan.svg">
            </div>
            <div class="sub">プランについて知りたい方へ</div>
            <h2 class="ttl">医療脱毛プランと<br>料金のご案内</h2>
        </div>
        <div class="wrapper">
            <div class="h3a r">
                <div class="shine"></div>
                <h3 class="ttl">全身脱毛／VIO脱毛／顔脱毛</h3>
            </div>
            <div class="panel body">
                <h4 class="head">全身脱毛 (首うなじなし)</h4>
                <div class="priceBox">
                    <div class="grp">
                        <div class="course">都度払い (1回)</div>
                        <div class="price"><span class="yen">&yen;</span><span class="num">23,000</span><span class="tax">税込</span></div>
                    </div>
                    <div class="grp">
                        <div class="course">5回コース</div>
                        <div class="price"><span class="yen">&yen;</span><span class="num">98,000</span><span class="tax">税込</span></div>
                        <div class="loan">医療ローン42回払い：<br>月&yen;3,000｜総額&yen;127,841</div>
                    </div>
                </div>
                <img class="pic" src="/assets/img/plan/p_w.png">
                <a class="btn r" href="/plan/body">
                    <div class="filter"><?php include(__DIR__.'/include/svg_waves.php'); ?></div>
                    <div class="icoWrap"><div class="icon"></div></div>
                    <div class="txt">全身脱毛の<br>ご案内はこちら</div>
                    <div class="arw"></div>
                </a>
            </div>
            <div class="panel vio">
                <h4 class="head">VIO脱毛</h4>
                <div class="priceBox">
                    <div class="grp">
                        <div class="course">都度払い (1回)</div>
                        <div class="price"><span class="yen">&yen;</span><span class="num">25,000</span><span class="tax">税込</span></div>
                    </div>
                    <div class="grp">
                        <div class="course">5回コース</div>
                        <div class="price"><span class="yen">&yen;</span><span class="num">100,000</span><span class="tax">税込</span></div>
                        <div class="loan">医療ローン43回払い：<br>月&yen;3,000｜総額&yen;131,175</div>
                    </div>
                </div>
                <img class="pic" src="/assets/img/plan/p_v.png">
                <a class="btn r" href="/plan/vio">
                    <div class="filter"><?php include(__DIR__.'/include/svg_waves.php'); ?></div>
                    <div class="icoWrap"><div class="icon"></div></div>
                    <div class="txt">VIO脱毛の<br>ご案内はこちら</div>
                    <div class="arw"></div>
                </a>
            </div>
            <div class="panel face">
                <h4 class="head">顔脱毛</h4>
                <div class="priceBox">
                    <div class="grp">
                        <div class="course">都度払い (1回)</div>
                        <div class="price"><span class="yen">&yen;</span><span class="num">20,000</span><span class="tax">税込</span></div>
                    </div>
                    <div class="grp">
                        <div class="course">5回コース</div>
                        <div class="price"><span class="yen">&yen;</span><span class="num">75,000</span><span class="tax">税込</span></div>
                        <div class="loan">医療ローン30回払い：<br>月&yen;3,000｜総額&yen;91,312</div>
                    </div>
                </div>
                <img class="pic" src="/assets/img/plan/p_f.png">
                <a class="btn r" href="/plan/face">
                    <div class="filter"><?php include(__DIR__.'/include/svg_waves.php'); ?></div>
                    <div class="icoWrap"><div class="icon"></div></div>
                    <div class="txt">顔脱毛の<br>ご案内はこちら</div>
                    <div class="arw"></div>
                </a>
            </div>
            <p class="note">
                ※ 価格はすべて税込みです。<br>
                ※ 自由診療のため保険適用外となります。<br>
                ※ 小鼻・眉毛上・唇周りの照射はオプションです。<br>
                　 詳しくは「<a href="/plan/face">顔脱毛のページ</a>」をご覧ください。
            </p>

            <div class="h3a r">
                <div class="shine"></div>
                <h3 class="ttl">その他パーツ／<br>全身・顔・VIO組み合わせ</h3>
            </div>
            <p class="txta">ワキのみ、肘下のみ、膝下のみなど、パーツ単品の料金は「<a href="/plan/price">医療脱毛の料金一覧</a>ページ」をご覧ください。<br><a href="/plan/price">医療脱毛の料金一覧</a>ページでは、「顔＋VIO」など、お得な組み合わせプランの料金もご案内しています。</p>
            <div class="link_detail">
                <p class="item"><span><a href="/plan/price">医療脱毛の料金一覧はこちら</a></span></p>
            </div>
        </div>
    </section>
<?php include(__DIR__.'/include/flowArea.php'); ?>
<?php include(__DIR__.'/include/counsArea.php'); ?>

<?php /*
 <section id="newsArea">
        <div class="wrapper">
            <div class="h2a">
                <div class="en">NEWS</div>
                <h2 class="jp">クリニックからのお知らせ</h2>
            </div>
            <div class="newsList">
                <div class="unit">
                    <div class="date">2024年12月23日</div>
                    <h3 class="ttl">ケミカルピーリングはじめました</h3>
                    <input type="checkbox" id="news02_open" class="news_open">
                    <div class="folder">
                        <p class="txt">
                            この度モアナスキンクリニックでケミカルピーリングの取り扱いをはじめました。<br>
                            ケミカルピーリングは肌の表⾯や⽑⽳に残った古い⾓質を取り除く美肌治療です。<br>
                            1回5,500円(税込)～となりますので、気になった方は下記詳細ページをご覧ください。
                        </p>
                        <p class="txt">
                            <a href="https://www.ginza-bliss-skin.medical-gl.com/plan/peeling">ケミカルピーリング</a><br>
                        </p>
                        <p class="txt">
                            ご予約は「無料カウンセリング予約」ボタンからできますので、お気軽にお問い合わせください。
                        </p>
                    </div>
                    <label class="btn_news_open" for="news02_open">MORE<span class="icon"></span></label>
                </div>
                <div class="unit">
                    <div class="date">2024年9月25日</div>
                    <h3 class="ttl">脱毛サロン・クリニック比較メディア脱毛ベストで「モアナスキンクリニック」が紹介されました！</h3>
                    <input type="checkbox" id="news01_open" class="news_open">
                    <div class="folder">
                        <p class="txt">
                            この度、モアナスキンクリニックが脱毛サロン・クリニック比較メディア「脱毛ベスト」に掲載いただきました。<br>
                            脱毛ベストは社員全員が脱毛サロン・クリニックに通っており、ユーザーから信頼されるコンテンツの発信を心がけているそうです。<br>
                            部位もVIO含む全身脱毛やヒゲ脱毛、脇脱毛など痛みが異なる部位を体験しているとのことです。<br>
                            脱毛ベストにモアナスキンクリニックが掲載しているページは以下なので是非見てみてください！
                        </p>
                        <p class="txt">
                            <a href="https://beautybest.jp/datsumo/vio-price" target="_blank" rel="noopener">VIO脱毛の値段に関する記事</a><br>
                            <a href="https://beautybest.jp/datsumo/dataumo-mottainai" target="_blank" rel="noopener">脱毛はお金がもったいない？に関する記事　</a><br>
                            <a href="https://beautybest.jp/datsumo/datsumo-counseling" target="_blank" rel="noopener">脱毛のカウンセリングに関する記事　</a><br>
                            <a href="https://beautybest.jp/datsumo/datsumo-price" target="_blank" rel="noopener">脱毛の値段に関する記事　</a><br>
                        </p>
                        <p class="txt">
                            掲載メディア：<a href="https://beautybest.jp/" target="_blank" rel="noopener">脱毛ベスト</a><br>
                        </p>
                    </div>
                    <label class="btn_news_open" for="news01_open">MORE<span class="icon"></span></label>
                </div>

<?php /*
                <div class="unit">
                    <div class="date">2023年2月8日</div>
                    <h3 class="ttl">家庭の便利帳さんで、痛みが少ない医療脱毛として紹介されました。</h3>
                    <input type="checkbox" id="news03_open" class="news_open">
                    <div class="folder">
                        <p class="txt">大阪江坂、天王寺エリアでのおすすめクリニックとして家庭の便利帳さまでご紹介頂きました。<br>蓄熱式の医療脱毛はまだまだ珍しいので、是非選択肢に入れてみてください。<br>江坂や三ノ宮では痛みの強い傾向のある男性の脱毛も行っております。<br>ヤグレーザーで痛みのために挫折した患者さまでもリラックスして施術することができます。</p>
                        <p class="txt">大阪 天王寺院：<a href="https://sentakusuki.com/da-osaka-tennouji/" target="_blank" rel="noopener">こちらをクリック</a><br>大阪 江坂院：<a href="https://sentakusuki.com/da-osaka-suita-esaka/" target="_blank" rel="noopener">こちらをクリック</a></p>
                    </div>
                    <label class="btn_news_open" for="news03_open">MORE<span class="icon"></span></label>
                </div>
                <input type="checkbox" id="newsAll_open" class="toggle_open">
                <div class="folder">
                    <div class="unit">
                        <div class="date">2023年2月8日</div>
                        <h3 class="ttl">家庭の便利帳さんで、痛みが少ない医療脱毛として紹介されました。</h3>
                        <input type="checkbox" id="news02_open" class="news_open">
                        <div class="folder">
                            <p class="txt">大阪江坂、天王寺エリアでのおすすめクリニックとして家庭の便利帳さまでご紹介頂きました。<br>蓄熱式の医療脱毛はまだまだ珍しいので、是非選択肢に入れてみてください。<br>江坂や三ノ宮では痛みの強い傾向のある男性の脱毛も行っております。<br>ヤグレーザーで痛みのために挫折した患者さまでもリラックスして施術することができます。</p>
                            <p class="txt">大阪 天王寺院：<a href="https://sentakusuki.com/da-osaka-tennouji/" target="_blank" rel="noopener">こちらをクリック</a><br>大阪 江坂院：<a href="https://sentakusuki.com/da-osaka-suita-esaka/" target="_blank" rel="noopener">こちらをクリック</a></p>
                        </div>
                        <label class="btn_news_open" for="news02_open">MORE<span class="icon"></span></label>
                    </div>
                    <div class="unit">
                        <div class="date">2023年2月8日</div>
                        <h3 class="ttl">家庭の便利帳さんで、痛みが少ない医療脱毛として紹介されました。</h3>
                        <input type="checkbox" id="news01_open" class="news_open">
                        <div class="folder">
                            <p class="txt">大阪江坂、天王寺エリアでのおすすめクリニックとして家庭の便利帳さまでご紹介頂きました。<br>蓄熱式の医療脱毛はまだまだ珍しいので、是非選択肢に入れてみてください。<br>江坂や三ノ宮では痛みの強い傾向のある男性の脱毛も行っております。<br>ヤグレーザーで痛みのために挫折した患者さまでもリラックスして施術することができます。</p>
                            <p class="txt">大阪 天王寺院：<a href="https://sentakusuki.com/da-osaka-tennouji/" target="_blank" rel="noopener">こちらをクリック</a><br>大阪 江坂院：<a href="https://sentakusuki.com/da-osaka-suita-esaka/" target="_blank" rel="noopener">こちらをクリック</a></p>
                        </div>
                        <label class="btn_news_open" for="news01_open">MORE<span class="icon"></span></label>
                    </div>
                </div>
                <label class="btn_toggle" for="newsAll_open">VIEW ALL<span class="icon"></span></label>
* ?>
            </div>
        </div>
    </section>
*/ ?>
</main>

<?php include(__DIR__.'/include/footer.php'); ?>

</div><!-- /.bodyWrapper -->

<?php include(__DIR__.'/include/foot_item.php'); ?>
