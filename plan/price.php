<?php
    $title = '医療脱毛の料金一覧 | 銀座ブリススキンクリニック';
    $description = '全身1回23,000円、VIO1回25,000円、顔1回20,000円。お得な組み合わせプラン・複数回プランの料金もご案内します。｜銀座で医療脱毛するなら銀座一丁目駅徒歩2分の銀座ブリススキンクリニック';
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
        "item": "https://www.ginza-bliss-skin.medical-gl.com/"
    },{
        "@type": "ListItem",
        "position": 2,
        "name": "医療脱毛の料金一覧",
        "item": "https://www.ginza-bliss-skin.medical-gl.com/plan/price"
    }]
}
</script>
</head>
<body id="price">
<div class="bodyWrapper">

<?php include(__DIR__.'/../include/header.php'); ?>

<main>
    <div id="fv">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/"><img src="/assets/img/home.svg" alt="HOME"></a></li>
                <li>医療脱毛の料金一覧</li>
            </ol>
        </nav>
        <div class="wrapper">
            <h1 class="ttl">医療脱毛の<br>料金一覧</h1>
        </div>
        <?php include(__DIR__.'/../include/svg_waves.php'); ?>
    </div>
    <section>
        <div class="h2b r">
            <div class="filter"><?php include(__DIR__.'/../include/svg_waves.php'); ?></div>
            <h2 class="ttl">全身・VIO・顔<br>の組み合わせ料金</h2>
        </div>
        <div class="wrapper">
            <div class="calc_head txta">希望部位をボタンで選んでください<br>（あり／なしを切り替えられます）</div>
            <div id="calculatorArea1" class="calculatorArea">
                <div class="calc_input">
                    <div class="parts">
                        <input type="checkbox" id="parts_1_w" value="w" data-calc-num="1" checked><label class="btn_parts" for="parts_1_w">全身</label>
                        <input type="checkbox" id="parts_1_n" value="n" data-calc-num="1"><label class="btn_parts" for="parts_1_n">うなじ</label>
                        <input type="checkbox" id="parts_1_v" value="v" data-calc-num="1"><label class="btn_parts" for="parts_1_v">VIO</label>
                        <input type="checkbox" id="parts_1_f" value="f" data-calc-num="1"><label class="btn_parts" for="parts_1_f">顔</label>
                    </div>
                </div>
                <div class="calc_output">
                    <div id="price_1_" class="empty">
                        <p class="txta">ご希望の施術部位を<br>選択してください</p>
                    </div>
                    <div id="price_1_w" class="active">
                        <h3 class="menuName">全身</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_w.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">23,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">98,000</span></div>
                                <div class="loan">医療ローン42回払い：<br>月&yen;3,000｜総額&yen;127,841</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">149,200</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,500｜総額&yen;214,102</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_n">
                        <h3 class="menuName">うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_n.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">15,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">62,500</span></div>
                                <div class="loan">医療ローン24回払い：<br>月&yen;3,000｜総額&yen;73,375</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">95,000</span></div>
                                <div class="loan">医療ローン41回払い：<br>月&yen;3,000｜総額&yen;123,238</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_v">
                        <h3 class="menuName">VIO</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_v.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">25,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">100,000</span></div>
                                <div class="loan">医療ローン43回払い：<br>月&yen;3,000｜総額&yen;131,175</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">152,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,600｜総額&yen;218,120</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_f">
                        <h3 class="menuName">顔</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_f.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">20,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">75,000</span></div>
                                <div class="loan">医療ローン30回払い：<br>月&yen;3,000｜総額&yen;91,312</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">114,000</span></div>
                                <div class="loan">医療ローン52回払い：<br>月&yen;3,000｜総額&yen;156,978</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_wn">
                        <h3 class="menuName">全身＋首うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wn.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">30,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">128,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,000｜総額&yen;183,680</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">194,800</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;4,600｜総額&yen;279,538</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_wv">
                        <h3 class="menuName">全身＋VIO</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wv.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">38,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">173,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;4,100｜総額&yen;248,255</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">263,200</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;6,200｜総額&yen;377,692</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_wf">
                        <h3 class="menuName">全身＋顔</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">35,500</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">160,500</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,800｜総額&yen;230,317</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">244,200</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;5,800｜総額&yen;350,427</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_nv">
                        <h3 class="menuName">VIO＋うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_nv.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">40,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">162,500</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,800｜総額&yen;233,187</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">247,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;5,900｜総額&yen;354,445</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_nf">
                        <h3 class="menuName">顔＋うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_nf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">35,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">137,500</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,200｜総額&yen;197,312</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">209,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;4,900｜総額&yen;299,915</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_vf">
                        <h3 class="menuName">VIO＋顔</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_vf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">45,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">175,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;4,100｜総額&yen;251,125</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">266,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;6,300｜総額&yen;381,710</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_wnv">
                        <h3 class="menuName">全身＋VIO＋うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wnv.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">45,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">203,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;4,800｜総額&yen;291,305</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">308,800</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;7,300｜総額&yen;443,128</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_wnf">
                        <h3 class="menuName">全身＋顔＋うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wnf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">42,500</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">190,500</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;4,500｜総額&yen;273,367</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">289,800</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;6,900｜総額&yen;415,863</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_wvf">
                        <h3 class="menuName">全身＋VIO＋顔</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wvf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">45,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">198,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;4,700｜総額&yen;284,130</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">301,200</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;7,200｜総額&yen;432,222</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_nvf">
                        <h3 class="menuName">VIO＋顔＋うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_nvf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">60,000</span></div>
                                <div class="loan">医療ローン23回払い：<br>月&yen;3,000｜総額&yen;70,005</div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">237,500</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;5,600｜総額&yen;340,812</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">361,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;8,600｜総額&yen;518,035</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_1_wnvf">
                        <h3 class="menuName">全身＋VIO＋顔＋うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wnvf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">52,000</span></div>
                                <div class="loan">医療ローン19回払い：<br>月&yen;3,100｜総額&yen;59,163</div>
                            </div>
                            <div class="grp">
                                <div class="course">5回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">228,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;5,400｜総額&yen;327,180</div>
                            </div>
                            <div class="grp">
                                <div class="course">8回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">346,800</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;8,200｜総額&yen;497,658</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="note">
                ※価格はすべて税込です。<br>
                ※自由診療のため保険適用外となります。<br>
                ※顔ご契約時、小鼻・眉毛上・唇周りの精密照射をご希望の際は別途「精密照射オプション（5,000円／回）」を併せてお申込みください。
            </p>

            <div class="h3a r">
                <div class="shine"></div>
                <h3 class="ttl">部位・目標別<br>推奨回数</h3>
            </div>
            <div class="timesBox">
                <h4 class="head body">全身脱毛</h4>
                <ul>
                    <li>
                        <div class="goal">ツルツルにしたい</div>
                        <div class="times"><span class="num">8</span>回以上</div>
                    </li>
                    <li>
                        <div>
                            <div class="goal">8割減目標</div>
                            <div class="note">(産毛以外ほぼない)</div>
                        </div>
                        <div class="times"><span class="num">5～8</span>回</div>
                    </li>
                    <li>
                        <div>
                            <div class="goal">5割減目標</div>
                            <div class="note">(自己処理を楽にしたい)</div>
                        </div>
                        <div class="times"><span class="num">5</span>回</div>
                    </li>
                </ul>
            </div>
            <div class="timesBox">
                <h4 class="head vio">VIO脱毛</h4>
                <ul>
                    <li>
                        <div class="goal">ハイジニーナ</div>
                        <div class="times"><span class="num">10</span>回以上</div>
                    </li>
                    <li>
                        <div class="goal">デザインシェイプ</div>
                        <div class="times"><span class="num">10</span>回以上</div>
                    </li>
                    <li>
                        <div>
                            <div class="goal">薄く細くしたい</div>
                            <div class="note">(5割減程度)</div>
                        </div>
                        <div class="times"><span class="num">5～8</span>回</div>
                    </li>
                </ul>
            </div>
            <div class="timesBox">
                <h4 class="head face">顔脱毛</h4>
                <ul>
                    <li>
                        <div class="goal">ツルツルにしたい</div>
                        <div class="times"><span class="num">10</span>回以上</div>
                    </li>
                    <li>
                        <div>
                            <div class="goal">8割減目標</div>
                            <div class="note">(産毛以外ほぼない)</div>
                        </div>
                        <div class="times"><span class="num">8～10</span>回</div>
                    </li>
                    <li>
                        <div>
                            <div class="goal">5割減目標</div>
                            <div class="note">(自己処理を楽にしたい)</div>
                        </div>
                        <div class="times"><span class="num">5</span>回</div>
                    </li>
                </ul>
            </div>
            <p class="txta">推奨回数は目安です。<br>お客様の毛質により推奨回数は変わります。カウンセラーが肌を拝見したうえで推奨回数をご提案しますので、まずはご来院ください。</p>

            <div class="h3a r">
                <div class="shine"></div>
                <h3 class="ttl">参考臨床データ①：<br>施術回数別の脱毛度</h3>
            </div>
            <div id="compareBody" class="compareUnit">
                <div class="item">
                    <figure class="box">
                        <figcaption class="cap">全身脱毛５回<br>施術後の抜け具合</figcaption>
                        <img src="/assets/img/plan/body/fig2.png">
                    </figure>
                </div>
                <div class="item">
                    <figure class="box">
                        <figcaption class="cap">全身脱毛８回<br>施術後の抜け具合</figcaption>
                        <img src="/assets/img/plan/body/fig3.png">
                    </figure>
                </div>
            </div>
            <div class="compareToggle">
                <div>5回／8回 データ比較</div>
                <div class="compareBtn active" data-target="compareBody" data-index="0">5回</div>
                <div class="compareBtn" data-target="compareBody" data-index="1">8回</div>
            </div>

            <div id="compareVio" class="compareUnit">
                <div class="item">
                    <figure class="box">
                        <figcaption class="cap">VIO脱毛５回<br>施術後の抜け具合</figcaption>
                        <img src="/assets/img/plan/vio/fig2.png">
                    </figure>
                </div>
                <div class="item">
                    <figure class="box">
                        <figcaption class="cap">VIO脱毛８回<br>施術後の抜け具合</figcaption>
                        <img src="/assets/img/plan/vio/fig3.png">
                    </figure>
                </div>
            </div>
            <div class="compareToggle">
                <div>5回／8回 データ比較</div>
                <div class="compareBtn active" data-target="compareVio" data-index="0">5回</div>
                <div class="compareBtn" data-target="compareVio" data-index="1">8回</div>
            </div>

            <div id="compareFace" class="compareUnit">
                <div class="item">
                    <figure class="box">
                        <figcaption class="cap">顔脱毛５回<br>施術後の抜け具合</figcaption>
                        <img src="/assets/img/plan/face/fig2.png">
                    </figure>
                </div>
                <div class="item">
                    <figure class="box">
                        <figcaption class="cap">顔脱毛８回<br>施術後の抜け具合</figcaption>
                        <img src="/assets/img/plan/face/fig3.png">
                    </figure>
                </div>
            </div>
            <div class="compareToggle">
                <div>5回／8回 データ比較</div>
                <div class="compareBtn active" data-target="compareFace" data-index="0">5回</div>
                <div class="compareBtn" data-target="compareFace" data-index="1">8回</div>
            </div>
        </div>
    </section>
    <section>
        <div class="h2b r">
            <div class="filter"><?php include(__DIR__.'/../include/svg_waves.php'); ?></div>
            <h2 class="ttl">全身・VIO・顔<br>コース終了後料金</h2>
        </div>
        <div class="wrapper">
            <div class="txta">コース終了後に追加施術を希望される場合の価格は「都度払い1回」の価格と同じです。</div>
            <div class="calc_head txta">希望部位をボタンで選んでください<br>（あり／なしを切り替えられます）</div>
            <div id="calculatorArea2" class="calculatorArea">
                <div class="calc_input">
                    <div class="parts">
                        <input type="checkbox" id="parts_2_w" value="w" data-calc-num="2" checked><label class="btn_parts" for="parts_2_w">全身</label>
                        <input type="checkbox" id="parts_2_n" value="n" data-calc-num="2"><label class="btn_parts" for="parts_2_n">うなじ</label>
                        <input type="checkbox" id="parts_2_v" value="v" data-calc-num="2"><label class="btn_parts" for="parts_2_v">VIO</label>
                        <input type="checkbox" id="parts_2_f" value="f" data-calc-num="2"><label class="btn_parts" for="parts_2_f">顔</label>
                    </div>
                </div>
                <div class="calc_output">
                    <div id="price_2_" class="empty">
                        <p class="txta">ご希望の施術部位を<br>選択してください</p>
                    </div>
                    <div id="price_2_w" class="active">
                        <h3 class="menuName">全身</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_w.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">23,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">46,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">69,000</span></div>
                                <div class="loan">医療ローン27回払い：<br>月&yen;3,000｜総額&yen;82,506</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_n">
                        <h3 class="menuName">うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_n.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">15,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">30,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">45,000</span></div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_v">
                        <h3 class="menuName">VIO</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_v.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">25,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">50,000</span></div>
                                <div class="loan">医療ローン18回払い：<br>月&yen;3,100｜総額&yen;56,525</div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">75,000</span></div>
                                <div class="loan">医療ローン30回払い：<br>月&yen;3,000｜総額&yen;91,312</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_f">
                        <h3 class="menuName">顔</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_f.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">20,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">40,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">60,000</span></div>
                                <div class="loan">医療ローン23回払い：<br>月&yen;3,000｜総額&yen;70,005</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_wn">
                        <h3 class="menuName">全身＋首うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wn.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">30,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">60,000</span></div>
                                <div class="loan">医療ローン23回払い：<br>月&yen;3,000｜総額&yen;70,005</div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">90,000</span></div>
                                <div class="loan">医療ローン38回払い：<br>月&yen;3,000｜総額&yen;114,795</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_wv">
                        <h3 class="menuName">全身＋VIO</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wv.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">38,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">76,000</span></div>
                                <div class="loan">医療ローン31回払い：<br>月&yen;3,000｜総額&yen;98,081</div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">114,000</span></div>
                                <div class="loan">医療ローン52回払い：<br>月&yen;3,000｜総額&yen;156,978</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_wf">
                        <h3 class="menuName">全身＋顔</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">35,500</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">71,000</span></div>
                                <div class="loan">医療ローン28回払い：<br>月&yen;3,000｜総額&yen;85,413</div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">106,500</span></div>
                                <div class="loan">医療ローン47回払い：<br>月&yen;3,000｜総額&yen;142,789</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_nv">
                        <h3 class="menuName">VIO＋うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_nv.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">40,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">80,000</span></div>
                                <div class="loan">医療ローン33回払い：<br>月&yen;3,000｜総額&yen;99,140</div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">120,000</span></div>
                                <div class="loan">医療ローン56回払い：<br>月&yen;3,000｜総額&yen;168,720</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_nf">
                        <h3 class="menuName">顔＋うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_nf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">35,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">70,000</span></div>
                                <div class="loan">医療ローン28回払い：<br>月&yen;3,000｜総額&yen;84,210</div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">105,000</span></div>
                                <div class="loan">医療ローン44回払い：<br>月&yen;3,000｜総額&yen;132,559</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_vf">
                        <h3 class="menuName">VIO＋顔</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_vf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">45,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">90,000</span></div>
                                <div class="loan">医療ローン38回払い：<br>月&yen;3,000｜総額&yen;114,795</div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">135,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,000｜総額&yen;193,725</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_wnv">
                        <h3 class="menuName">全身＋VIO＋うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wnv.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">45,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">90,000</span></div>
                                <div class="loan">医療ローン38回払い：<br>月&yen;3,000｜総額&yen;114,795</div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">135,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,000｜総額&yen;193,725</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_wnf">
                        <h3 class="menuName">全身＋顔＋うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wnf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">42,500</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">85,000</span></div>
                                <div class="loan">医療ローン35回払い：<br>月&yen;3,000｜総額&yen;106,568</div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">127,500</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,000｜総額&yen;182,962</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_wvf">
                        <h3 class="menuName">全身＋VIO＋顔</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wvf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">45,000</span></div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">90,000</span></div>
                                <div class="loan">医療ローン38回払い：<br>月&yen;3,000｜総額&yen;114,795</div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">135,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,000｜総額&yen;193,725</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_nvf">
                        <h3 class="menuName">VIO＋顔＋うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_nvf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">60,000</span></div>
                                <div class="loan">医療ローン23回払い：<br>月&yen;3,000｜総額&yen;70,005</div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">120,000</span></div>
                                <div class="loan">医療ローン56回払い：<br>月&yen;3,000｜総額&yen;168,720</div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">180,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;4,200｜総額&yen;258,300</div>
                            </div>
                        </div>
                    </div>
                    <div id="price_2_wnvf">
                        <h3 class="menuName">全身＋VIO＋顔＋うなじ</h3>
                        <div class="picBox">
                            <img class="pic" src="/assets/img/plan/p_wnvf.png">
                        </div>
                        <div class="priceBox">
                            <div class="grp">
                                <div class="course">1回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">52,000</span></div>
                                <div class="loan">医療ローン19回払い：<br>月&yen;3,100｜総額&yen;59,163</div>
                            </div>
                            <div class="grp">
                                <div class="course">2回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">104,000</span></div>
                                <div class="loan">医療ローン46回払い：<br>月&yen;3,000｜総額&yen;138,684</div>
                            </div>
                            <div class="grp">
                                <div class="course">3回</div>
                                <div class="price"><span class="yen">&yen;</span><span class="num">156,000</span></div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,700｜総額&yen;223,860</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="note">
                ※価格はすべて税込です。<br>
                ※自由診療のため保険適用外となります。
            </p>
        </div>
    </section>
    <section>
        <div class="h2b r">
            <div class="filter"><?php include(__DIR__.'/../include/svg_waves.php'); ?></div>
            <h2 class="ttl">パーツ料金一覧</h2>
        </div>
        <div class="wrapper">
            <div class="calc_head txta">ボタンを押して回数を切り替えられます</div>
            <div class="partsBox">
                <input type="radio" id="price_parts_1" name="price_parts" checked>
                <div class="priceList">
                    <label class="times times1" for="price_parts_1">1回</label>
                    <ul class="priceWrap">
                        <li>
                            <div>
                                <div class="partsName">顔</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">20,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">うなじ</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">15,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">胸部</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">15,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">背中</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">15,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">わき</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">6,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">両腕</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">15,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">腹部</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">15,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">腰ヒップ</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">15,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">VIO</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">25,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">両足</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">25,000</span><span class="tax">税込</span></div>
                        </li>
                    </ul>
                </div>
                <input type="radio" id="price_parts_5" name="price_parts">
                <div class="priceList">
                    <label class="times times2" for="price_parts_5">5回</label>
                    <ul class="priceWrap">
                        <li>
                            <div>
                                <div class="partsName">顔</div>
                                <div class="loan">医療ローン30回払い：<br>月&yen;3,000｜総額&yen;91,312</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">75,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">うなじ</div>
                                <div class="loan">医療ローン24回払い：<br>月&yen;3,000｜総額&yen;73,375</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">62,500</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">胸部</div>
                                <div class="loan">医療ローン24回払い：<br>月&yen;3,000｜総額&yen;73,375</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">62,500</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">背中</div>
                                <div class="loan">医療ローン24回払い：<br>月&yen;3,000｜総額&yen;73,375</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">62,500</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">わき</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">25,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">両腕</div>
                                <div class="loan">医療ローン24回払い：<br>月&yen;3,000｜総額&yen;73,375</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">62,500</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">腹部</div>
                                <div class="loan">医療ローン24回払い：<br>月&yen;3,000｜総額&yen;73,375</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">62,500</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">腰ヒップ</div>
                                <div class="loan">医療ローン24回払い：<br>月&yen;3,000｜総額&yen;73,375</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">62,500</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">VIO</div>
                                <div class="loan">医療ローン43回払い：<br>月&yen;3,000｜総額&yen;131,175</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">100,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">両足</div>
                                <div class="loan">医療ローン43回払い：<br>月&yen;3,000｜総額&yen;131,175</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">100,000</span><span class="tax">税込</span></div>
                        </li>
                    </ul>
                </div>
                <input type="radio" id="price_parts_8" name="price_parts">
                <div class="priceList">
                    <label class="times times3" for="price_parts_8">8回</label>
                    <ul class="priceWrap">
                        <li>
                            <div>
                                <div class="partsName">顔</div>
                                <div class="loan">医療ローン52回払い：<br>月&yen;3,000｜総額&yen;156,978</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">114,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">うなじ</div>
                                <div class="loan">医療ローン41回払い：<br>月&yen;3,000｜総額&yen;123,238</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">95,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">胸部</div>
                                <div class="loan">医療ローン41回払い：<br>月&yen;3,000｜総額&yen;123,238</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">95,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">背中</div>
                                <div class="loan">医療ローン41回払い：<br>月&yen;3,000｜総額&yen;123,238</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">95,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">わき</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">38,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">両腕</div>
                                <div class="loan">医療ローン41回払い：<br>月&yen;3,000｜総額&yen;123,238</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">95,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">腹部</div>
                                <div class="loan">医療ローン41回払い：<br>月&yen;3,000｜総額&yen;123,238</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">95,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">腰ヒップ</div>
                                <div class="loan">医療ローン41回払い：<br>月&yen;3,000｜総額&yen;123,238</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">95,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">VIO</div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,600｜総額&yen;218,120</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">152,000</span><span class="tax">税込</span></div>
                        </li>
                        <li>
                            <div>
                                <div class="partsName">両足</div>
                                <div class="loan">医療ローン60回払い：<br>月&yen;3,600｜総額&yen;218,120</div>
                            </div>
                            <div class="price"><span class="yen">&yen;</span><span class="num">152,000</span><span class="tax">税込</span></div>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="note">
                ※価格はすべて税込です。<br>
                ※自由診療のため保険適用外となります。
            </p>
        </div>
    </section>
    <section>
        <div class="h2b r">
            <div class="filter"><?php include(__DIR__.'/../include/svg_waves.php'); ?></div>
            <h2 class="ttl">費用はプラン料金のみ</h2>
        </div>
        <div class="wrapper">
            <p class="txta">費用は前述の「プラン料金」のみです。<br>他に費用は一切かかりません。<br>以下の費用はすべて費用に含まれています。</p>
            <div class="listBox">
                <div class="head">すべて無料</div>
                <ul>
                    <li>相談・カウンセリング</li>
                    <li>初診・再診</li>
                    <li>テスト照射</li>
                    <li>施術キャンセル・日程変更</li>
                    <li>剃り残しの剃毛</li>
                    <li>クリーム麻酔</li>
                    <li>保湿ジェル</li>
                    <li>炎症を抑える薬</li>
                    <li>クレンジング・化粧水</li>
                    <li>照射漏れ時の再照射</li>
                </ul>
            </div>
        </div>
    </section>
<?php include(__DIR__.'/../include/counsArea.php'); ?>
</main>

<?php include(__DIR__.'/../include/footer.php'); ?>

</div><!-- /.bodyWrapper -->

<?php include(__DIR__.'/../include/foot_item.php'); ?>
