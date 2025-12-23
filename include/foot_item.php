<div id="pcLayout">
    <div class="pcLeft">
        <div class="logoGrp">
            <a class="logo" href="/"><img src="/assets/img/logo.png" alt="銀座ブリススキンクリニック"></a>
            <p class="h_txt">銀座一丁目駅<br><span>徒歩2分</span></p>
        </div>
        <div class="btnWrap">
            <div class="ttl">
                <div class="icon calendar"></div>
                <h3 class="txt">24時間受付。WEB予約はこちら</h3>
            </div>
            <?php /* <a class="btn" href="https://reservation.medical-force.com/c/c950ae3c1f524f10b649d40de1072856/reservations/new?menu_entrance_id=5cf3a3bd-8bf5-4f3a-8d81-3a30178480a8" target="_blank" rel="noopener"> */ ?>
            <label class="btn" for="reserv_open">
                <div class="filter"><?php include(__DIR__.'/svg_waves.php'); ?></div>
                <div class="txt">無料カウンセリング予約</div>
                <div class="arw"></div>
            </label>
            <?php /* </a> */ ?>
            <div class="ttl">
                <div class="icon tel"></div>
                <h3 class="txt">お電話でのご質問・ご予約はこちら</h3>
            </div>
            <div class="telBox">
                <a class="link" href="tel:0300000000"><span class="tel">TEL.</span><span class="num">03-0000-0000</span></a>
                <p class="txt">受付：平日12：00～21：00<br>土日祝：10：00～19：00<br>休診日：木曜(祝日は除く)</p>
            </div>
        </div>
    </div>
    <div class="pcRight">
        <div class="qrcode">
            <p class="txt">スマホサイトは<br>こちら</p>
            <div class="box"><img src="/assets/img/pc/qrcode.svg"></div>
        </div>
        <p class="txt">ブリススキン特設ページ<br>2分でわかるブリスのすべて</p>
        <a class="lplink" href="/features/lp1/">
            <picture>
                <source type="image/webp" srcset="/assets/img/lplink.jpg.webp">
                <img src="/assets/img/lplink.jpg">
            </picture>
        </a>
    </div>
</div>

<input type="radio" id="nav_close" name="nav_state" checked>
<input type="radio" id="nav_gMenu" name="nav_state">
<input type="radio" id="nav_float_knowledge" name="nav_state">
<input type="radio" id="nav_float_features" name="nav_state">
<input type="radio" id="nav_float_plan" name="nav_state">
<nav id="gMenu">
    <label class="bg" for="nav_close"></label>
    <div class="wrapper">
        <div class="mHead">
            <span class="icon"><span class="shine y"></span><span class="shine b"></span><span class="shine r"></span></span>
            <span class="txt">MENU</span>
        </div>
        <label class="hClose" for="nav_close">CLOSE</label>
        <div class="mBody">
            <div class="inner">
                <a class="topLink" href="/">
                    <div class="arw"></div>
                    <div class="txt">TOPページ</div>
                </a>
                <?php /* <a class="btn btn_reserv" href="https://reservation.medical-force.com/c/c950ae3c1f524f10b649d40de1072856/reservations/new?menu_entrance_id=5cf3a3bd-8bf5-4f3a-8d81-3a30178480a8" target="_blank" rel="noopener"> */ ?>
                <label class="btn btn_reserv" for="reserv_open">
                    <div class="filter"><?php include(__DIR__.'/svg_waves.php'); ?></div>
                    <div class="txt"><div class="tag">24時間WEB受付</div>無料カウンセリング予約</div>
                    <div class="arw"></div>
                </label>
                <?php /* </a> */ ?>
                <div class="menuWrap">
                    <div class="menuGrp" id="menu_knowledge">
                        <input type="checkbox" id="menu_knowledge_open" class="submenu_open">
                        <label class="menuHead" for="menu_knowledge_open">
                            <span class="icoWrap">
                                <svg class="shadow"><use href="#shadow"/></svg>
                                <span class="icon"></span>
                            </span>
                            <span class="txtWrap">
                                <span class="sub">初めての方へ</span>
                                <span class="ttl">医療脱毛のイロハ</span>
                            </span>
                            <span class="icon_toggle"></span>
                        </label>
                        <div class="folder">
                            <ul class="submenu">
                                <li class="link <?= isset($_COOKIE['read_knowledge_principle']) ? 'read' : 'unread' ?>">
                                    <a href="/knowledge/principle">
                                        <div class="ttl">医療脱毛のしくみ</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                                <li class="link <?= isset($_COOKIE['read_knowledge_reason']) ? 'read' : 'unread' ?>">
                                    <a href="/knowledge/reason">
                                        <div class="ttl">何回も脱毛施術が必要な理由</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                                <li class="link <?= isset($_COOKIE['read_knowledge_guideline']) ? 'read' : 'unread' ?>">
                                    <a href="/knowledge/guideline">
                                        <div class="ttl">医療脱毛の施術回数と効果</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                                <li class="link <?= isset($_COOKIE['read_knowledge_effect']) ? 'read' : 'unread' ?>">
                                    <a href="/knowledge/effect">
                                        <div class="ttl">脱毛効果を決定する3大因子</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                                <li class="link <?= isset($_COOKIE['read_knowledge_laser']) ? 'read' : 'unread' ?>">
                                    <a href="/knowledge/laser">
                                        <div class="ttl">医療脱毛レーザーの種類と効果の違い</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                                <li class="link <?= isset($_COOKIE['read_knowledge_type']) ? 'read' : 'unread' ?>">
                                    <a href="/knowledge/type">
                                        <div class="ttl">熱破壊式と蓄熱式の違い</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                                <li class="link <?= isset($_COOKIE['read_knowledge_difference']) ? 'read' : 'unread' ?>">
                                    <a href="/knowledge/difference">
                                        <div class="ttl">エステ脱毛と医療脱毛の違い</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                                <li class="link <?= isset($_COOKIE['read_knowledge_risk']) ? 'read' : 'unread' ?>">
                                    <a href="/knowledge/risk">
                                        <div class="ttl">医療脱毛のリスク・副作用</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menuGrp" id="menu_features">
                        <input type="checkbox" id="menu_features_open" class="submenu_open">
                        <label class="menuHead" for="menu_features_open">
                            <span class="icoWrap">
                                <svg class="shadow"><use href="#shadow"/></svg>
                                <span class="icon shine"></span>
                            </span>
                            <span class="txtWrap">
                                <span class="sub">当院をご検討中の方へ</span>
                                <span class="ttl">ブリス医療脱毛<br>の特長</span>
                            </span>
                            <span class="icon_toggle"></span>
                        </label>
                        <div class="folder">
                            <a class="lplink" href="/features/lp1/">
                                <picture>
                                    <source type="image/webp" srcset="/assets/img/lplink.jpg.webp">
                                    <img src="/assets/img/lplink.jpg">
                                </picture>
                            </a>
                            <ul class="submenu">
                                <li class="link <?= isset($_COOKIE['read_features_effect_Commitment']) ? 'read' : 'unread' ?>">
                                    <a href="/features/effect_Commitment">
                                        <div class="ttl">脱毛効果へのこだわり</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                                <li class="link <?= isset($_COOKIE['read_features_pain_Commitment']) ? 'read' : 'unread' ?>">
                                    <a href="/features/pain_Commitment">
                                        <div class="ttl">痛み低減へのこだわり</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                                <li class="link <?= isset($_COOKIE['read_features_price_Commitment']) ? 'read' : 'unread' ?>">
                                    <a href="/features/price_Commitment">
                                        <div class="ttl">公正な価格表記へのこだわり</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                                <li class="link <?= isset($_COOKIE['read_features_machine']) ? 'read' : 'unread' ?>">
                                    <a href="/features/machine">
                                        <div class="ttl">当院脱毛機の特長と効果の違い</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                                <li class="link <?= isset($_COOKIE['read_features_review']) ? 'read' : 'unread' ?>">
                                    <a href="/features/review">
                                        <div class="ttl">お客様アンケート結果</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                                <li class="link <?= isset($_COOKIE['read_features_faq']) ? 'read' : 'unread' ?>">
                                    <a href="/features/faq">
                                        <div class="ttl">当院サービスに関するQ&amp;A</div>
                                        <div class="arw"></div>
                                        <div class="state"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menuGrp" id="menu_plan">
                        <input type="checkbox" id="menu_plan_open" class="submenu_open">
                        <label class="menuHead" for="menu_plan_open">
                            <span class="icoWrap">
                                <svg class="shadow"><use href="#shadow"/></svg>
                                <span class="icon"></span>
                            </span>
                            <span class="txtWrap">
                                <span class="sub">プランについて知りたい方へ</span>
                                <span class="ttl">医療脱毛プランと<br>料金のご案内</span>
                            </span>
                            <span class="icon_toggle"></span>
                        </label>
                        <div class="folder">
                            <ul class="submenu">
                                <li class="link">
                                    <a href="/plan/body">
                                        <div class="ttl">全身脱毛プラン</div>
                                        <div class="arw"></div>
                                    </a>
                                </li>
                                <li class="link">
                                    <a href="/plan/vio">
                                        <div class="ttl">VIO脱毛プラン</div>
                                        <div class="arw"></div>
                                    </a>
                                </li>
                                <li class="link">
                                    <a href="/plan/face">
                                        <div class="ttl">顔脱毛プラン</div>
                                        <div class="arw"></div>
                                    </a>
                                </li>
                                <li class="link">
                                    <a href="/plan/price">
                                        <div class="ttl">医療脱毛の料金一覧</div>
                                        <div class="arw"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a class="other_btn" href="/access">
                    <div class="txt">アクセス・連絡先情報</div>
                    <div class="arw"></div>
                </a>
                <p class="other_link"><a href="/privacy">プライバシーポリシー</a></p>
                <label class="closeBtn bClose" for="nav_close">CLOSE</label>
            </div>
        </div>
    </div>
    <div id="floatBtn" class="hide">
        <label class="menuGrpBtn" for="nav_float_knowledge">
            <img class="icon" src="/assets/img/icon_know.svg">
            <span class="txt">脱毛<br>イロハ</span>
        </label>
        <label class="menuGrpBtn" for="nav_float_features">
            <div class="icon shine"></div>
            <span class="txt">ブリス<br>の特長</span>
        </label>
        <label class="menuGrpBtn" for="nav_float_plan">
            <img class="icon" src="/assets/img/icon_plan.svg">
            <span class="txt">プラン<br>と料金</span>
        </label>
        <label class="closeBtn" for="nav_close">CLOSE</label>
        <?php /* <a class="f_reserv" href="https://reservation.medical-force.com/c/c950ae3c1f524f10b649d40de1072856/reservations/new?menu_entrance_id=5cf3a3bd-8bf5-4f3a-8d81-3a30178480a8" target="_blank" rel="noopener">無料<span>カウンセリング</span>予約</a> */ ?>
        <label class="f_reserv" for="reserv_open">無料<span>カウンセリング</span>予約</label>
    </div>
</nav>

<svg style="display:none;">
    <symbol id="shadow" viewBox="0 0 51 65"><path d="M39.8701 0.129883C46.9964 7.25626 51 16.9217 51 26.9999C51 37.0782 46.9964 46.7436 39.8701 53.87C32.7437 60.9964 23.0782 64.9999 13 64.9999C6.71709 64.9999 0.5 63 0.5 63C0.5 63 22 64.5 35 44C48 23.5 39.8701 0.129883 39.8701 0.129883Z"/></symbol>
</svg>

<?php include_once(__DIR__.'/reservForm.php'); ?>

<script src="/assets/js/jquery-3.7.1.min.js"></script>
<script src="/assets/js/modernizr-custom.js"></script>
<script src="/assets/js/jquery.cookie.min.js"></script>
<script src="/assets/js/slick-1.8.1/slick.min.js"></script>
<script src="/assets/js/jquery-validation/jquery.validate.min.js"></script>
<script src="/assets/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="/assets/js/calendarSettings.min.js?date=20241212"></script>
<script src="/assets/js/common.min.js?date=20240501"></script>
</body>
</html>
