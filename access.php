<?php
    $title = 'アクセス・連絡先情報 | 銀座ブリススキンクリニック';
    $description = '銀座一丁目駅徒歩2分。当院の所在地・最寄駅・診療日についてご案内します。｜銀座で医療脱毛するなら銀座一丁目駅徒歩2分の銀座ブリススキンクリニック';
    include(__DIR__.'/include/head_link.php');
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
        "name": "アクセス・連絡先情報",
        "item": "https://www.ginza-bliss-skin.medical-gl.com/access"
    }]
}
</script>
</head>
<body id="access">
<div class="bodyWrapper">

<?php include(__DIR__.'/include/header.php'); ?>

<main>
    <div id="fv">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/"><img src="/assets/img/home.svg" alt="HOME"></a></li>
                <li>アクセス・連絡先情報</li>
            </ol>
        </nav>
        <div class="wrapper">
            <h1 class="ttl">アクセス・<br>連絡先情報</h1>
        </div>
        <?php include(__DIR__.'/include/svg_waves.php'); ?>
    </div>
    <section class="mainSec">
        <div class="wrapper">
            <div class="h2a">
                <div class="en">LOCATION</div>
                <h2 class="jp">MAP・所在地</h2>
            </div>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25929.291086759567!2d139.769781!3d35.673028!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b005aeaf8bf%3A0x3d161ebdfdae18c7!2zVk9SVOmKgOW6p2JyaWxsZXI!5e0!3m2!1sja!2sjp!4v1766386627151!5m2!1sja!2sjp" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p class="txta">〒104-0061<br>東京都中央区銀座1-14-6<br>VORT銀座briller　 6F</p>
        </div>
    </section>
    <section class="mainSec">
        <div class="wrapper">
            <div class="h2a">
                <div class="en">NEAREST STATION</div>
                <h2 class="jp">最寄り駅</h2>
            </div>
            <p class="txta">
                銀座一丁目駅10番出口　徒歩2分<br>
                宝町駅A3出口　徒歩4分<br>
                東銀座駅A8出口　徒歩4分
            </p>
        </div>
    </section>
    <section class="mainSec">
        <div class="wrapper">
            <div class="h2a">
                <div class="en">TELEPHONE NUMBER</div>
                <h2 class="jp">電話番号</h2>
            </div>
            <div class="telBox">
                <p class="link"><a href="tel:0300000000"><span class="tel">TEL.</span><span class="num">03-0000-0000</span></a></p>
                <p class="txta">
                    　受付　平日12：00～21：00<br>
                    土日祝　10：00～19：00<br>
                    休診日　木曜(祝日は除く)
                </p>
            </div>
        </div>
    </section>
    <section class="mainSec">
        <div class="wrapper">
            <div class="h2a">
                <div class="en">SCHEDULE</div>
                <h2 class="jp">診療日・診療時間</h2>
            </div>
            <div class="scBox">
                <table class="schedule">
                    <thead>
                        <tr>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th>土</th>
                            <th>日</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="open"></span></td>
                            <td><span class="open"></span></td>
                            <td><span class="open"></span></td>
                            <td><span class="close"></span></td>
                            <td><span class="open"></span></td>
                            <td><span class="open"></span></td>
                            <td><span class="open"></span></td>
                        </tr>
                    </tbody>
                </table>
                <p class="txta">
                    　受付　平日12：00～21：00<br>
                    土日祝　10：00～19：00<br>
                    休診日　木曜(祝日は除く)
                </p>
            </div>
        </div>
    </section>
</main>

<?php include(__DIR__.'/include/footer.php'); ?>

</div><!-- /.bodyWrapper -->

<?php include(__DIR__.'/include/foot_item.php'); ?>
