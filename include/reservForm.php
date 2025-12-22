<input type="checkbox" id="reserv_open">
<div id="reserv_popup">
    <label class="bg" for="reserv_open"></label>
    <div class="wrapper">
        <label class="close hClose" for="reserv_open">CLOSE</label>
        <div class="formWrap">
            <div class="ttl">無料カウンセリング<br>お申込みフォーム</div>
            <form id="reserv_form" name="reserv_form" action="" method="">
                <dl class="formBox">
                    <!-- ↓第一希望（年月日、時間）↓ -->
                    <div class="formUnit">
                        <dt class="formUnitHead">第一希望日<span class="required">（必須）</span></dt>
                        <dd class="formUnitBody">
                            <div class="inputText inputText1 calendar">
                                <img src="/assets/img/form_calen.svg">
                                <input type="text" id="reserv_date1" name="reserv_date1" maxlength="20" placeholder="日付を選択 ▼" readonly="">
                            </div>
                            <div class="inputText inputText1 time">
                                <img src="/assets/img/form_time.svg">
                                <select id="reserv_time1" name="reserv_time1">
                                    <option value="" selected="">時間を選択 ▼</option>
                                    <option value="11:00～">11:00～</option>
                                    <option value="11:30～">11:30～</option>
                                    <option value="12:00～">12:00～</option>
                                    <option value="12:30～">12:30～</option>
                                    <option value="13:00～">13:00～</option>
                                    <option value="13:30～">13:30～</option>
                                    <option value="14:00～">14:00～</option>
                                    <option value="14:30～">14:30～</option>
                                    <option value="15:00～">15:00～</option>
                                    <option value="15:30～">15:30～</option>
                                    <option value="16:00～">16:00～</option>
                                    <option value="16:30～">16:30～</option>
                                    <option value="17:00～">17:00～</option>
                                    <option value="17:30～">17:30～</option>
                                    <option value="18:00～">18:00～</option>
                                    <option value="18:30～">18:30～</option>
                                    <option value="19:00～">19:00～</option>
                                </select>
                            </div>
                        </dd>
                    </div>
                    <!-- ↓第二希望（年月日、時間）↓ -->
                    <div class="formUnit">
                        <dt class="formUnitHead">第二希望日<span class="required">（必須）</span></dt>
                        <dd class="formUnitBody">
                            <div class="inputText inputText1 calendar">
                                <img src="/assets/img/form_calen.svg">
                                <input type="text" id="reserv_date2" name="reserv_date2" maxlength="20" placeholder="日付を選択 ▼" readonly="">
                            </div>
                            <div class="inputText inputText1 time">
                                <img src="/assets/img/form_time.svg">
                                <select id="reserv_time2" name="reserv_time2">
                                    <option value="" selected="">時間を選択 ▼</option>
                                    <option value="11:00～">11:00～</option>
                                    <option value="11:30～">11:30～</option>
                                    <option value="12:00～">12:00～</option>
                                    <option value="12:30～">12:30～</option>
                                    <option value="13:00～">13:00～</option>
                                    <option value="13:30～">13:30～</option>
                                    <option value="14:00～">14:00～</option>
                                    <option value="14:30～">14:30～</option>
                                    <option value="15:00～">15:00～</option>
                                    <option value="15:30～">15:30～</option>
                                    <option value="16:00～">16:00～</option>
                                    <option value="16:30～">16:30～</option>
                                    <option value="17:00～">17:00～</option>
                                    <option value="17:30～">17:30～</option>
                                    <option value="18:00～">18:00～</option>
                                    <option value="18:30～">18:30～</option>
                                    <option value="19:00～">19:00～</option>
                                </select>
                            </div>
                        </dd>
                    </div>

                    <!-- ↓氏名↓ -->
                    <div class="formUnit">
                        <dt class="formUnitHead">お名前<span class="required">（必須）</span></dt>
                        <dd class="formUnitBody">
                            <div class="inputText inputText1">
                                <input type="text" id="reserv_name" name="reserv_name" maxlength="20" autocomplete="name">
                            </div>
                        </dd>
                    </div>

                    <!-- ↓年齢↓ -->
                    <div class="formUnit">
                        <dt class="formUnitHead">年齢<span class="required">（必須）</span></dt>
                        <dd class="formUnitBody">
                            <div class="inputText inputText1 age">
                                <input type="text" id="reserv_age" name="reserv_age" maxlength="3" inputmode="numeric">
                            </div> 歳
                        </dd>
                    </div>

                    <!-- ↓メールアドレス↓ -->
                    <div class="formUnit">
                        <dt class="formUnitHead">メールアドレス<span class="required">（必須）</span></dt>
                        <dd class="formUnitBody">
                            <div class="inputText inputText1">
                                <input type="text" id="reserv_email" name="reserv_email" maxlength="50" autocomplete="email" inputmode="email">
                            </div>
                        </dd>
                    </div>

                    <!-- ↓電話番号↓ -->
                    <div class="formUnit">
                        <dt class="formUnitHead">電話番号<span class="required">（必須）</span></dt>
                        <dd class="formUnitBody">
                            <div class="inputText inputText1">
                                <input type="text" id="reserv_tel" name="reserv_tel" maxlength="20" autocomplete="tel" inputmode="tel">
                            </div>
                        </dd>
                    </div>

                    <!-- ↓希望の部位↓ -->
                    <div class="formUnit">
                        <dt class="formUnitHead">ご希望の部位はどこですか？</dt>
                        <dd class="formUnitBody">
                            <div class="checkBoxGrp">
                                <div class="inputCheck inputCheck2">
                                    <input id="reserv_request_body" type="checkbox" name="reserv_request[]" value="全身（顔・VIOを除く）">
                                    <label for="reserv_request_body">全身（顔・VIOを除く）</label>
                                </div>
                                <div class="inputCheck inputCheck2">
                                    <input id="reserv_request_nape" type="checkbox" name="reserv_request[]" value="うなじ">
                                    <label for="reserv_request_nape">うなじ</label>
                                </div>
                                <div class="inputCheck inputCheck2">
                                    <input id="reserv_request_face" type="checkbox" name="reserv_request[]" value="顔">
                                    <label for="reserv_request_face">顔</label>
                                </div>
                                <div class="inputCheck inputCheck2">
                                    <input id="reserv_request_vio" type="checkbox" name="reserv_request[]" value="VIO">
                                    <label for="reserv_request_vio">VIO</label>
                                </div>
                                <div class="inputCheck inputCheck2">
                                    <input id="reserv_request_parts" type="checkbox" name="reserv_request[]" value="脇／腕／足などのパーツ">
                                    <label for="reserv_request_parts">脇／腕／足などのパーツ</label>
                                </div>
                                <div class="inputCheck inputCheck2">
                                    <input id="reserv_request_peeling" type="checkbox" name="reserv_request[]" value="ケミカルピーリング">
                                    <label for="reserv_request_peeling">ケミカルピーリング</label>
                                </div>
                            </div>
                        </dd>
                    </div>

                    <!-- ↓当院へのご来院は初めてですか？↓ -->
                    <div class="formUnit">
                        <dt class="formUnitHead">当院へのご来院は初めてですか？</dt>
                        <dd class="formUnitBody">
                            <div class="checkBoxGrp">
                                <div class="inputCheck inputCheck3">
                                    <input id="reserv_first-1" type="radio" name="reserv_first" value="はい">
                                    <label for="reserv_first-1">はい</label>
                                </div>
                                <div class="inputCheck inputCheck3">
                                    <input id="reserv_first-2" type="radio" name="reserv_first" value="いいえ">
                                    <label for="reserv_first-2">いいえ</label>
                                </div>
                            </div>
                        </dd>
                    </div>
                </dl>
                <div class="privacyBox">
                    <div class="inputCheck inputCheck1">
                        <input type="checkbox" id="reserv_privacy" name="reserv_privacy" value="プライバシーポリシーに同意する" checked>
                        <label for="reserv_privacy"><a href="/privacy" target="_blank">プライバシーポリシー</a>に同意する</label>
                    </div>
                </div>
                <div id="btnReserv">予約を申し込む</div>
                <div class="note">※当院は女性専用のクリニックです</div>
                <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
            </form>
        </div>
        <div class="thanksWrap">
            <div class="grp1">
                <p class="txt">ご予約ありがとうございます</p>
                <p class="ttl">「第一希望日」で<br>ご予約が確定しました</p>
                <p class="txt">当日のご来院を心よりお待ちしています</p>
            </div>
            <div class="grp2">
                <div class="head">後日ご予約確定のメールを<br>お送りします</div>
                <p class="txt">ご予約確定した日程を改めてメールでお送りいたします。カウンセリングや当日施術を受けるにあたり重要な情報が書いてありますので、届きましたら必ずお読みいただきますようお願いいたします。</p>
                <div class="head">日程調整のご連絡をする場合が<br>ございます</div>
                <p class="txt">ご予約日程の調整のため、当院よりご連絡を差し上げることがございます。<br>その際は、<span class="tel">06-4703-5114</span>より発信しますので、ご対応くださいますようお願いいたします。もしご不在の場合はご登録いただいたメールアドレスにメールをお送りさせていただきます。<br>クリニックより不在着信がありましたら、メールをご確認するか折り返しのお電話をお願い申し上げます。</p>
            </div>
            <p class="ttl">それでは当日のご来院を<br>心よりお待ちしております。</p>
            <picture>
                <source type="image/webp" srcset="/assets/img/thanks.png.webp">
                <img class="pic" src="/assets/img/thanks.png">
            </picture>
            <img class="logo" src="/assets/img/logo.png" alt="モアナスキンクリニック">
            <label class="close" for="reserv_open">CLOSE</label>
        </div>
    </div>
</div>
