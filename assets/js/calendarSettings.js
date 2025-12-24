$(function(){
    /* ********************************************
    //   カレンダー設定（jquery-ui用）
    /* ******************************************** */

    // 祝日情報取得
    let nationalHolidayTimeSet = new Set();
    $.get('https://holidays-jp.github.io/api/v1/date.json', function(dateJson){
        let holidaySet = Object.keys(dateJson);
        holidaySet.forEach(holiday => {
            let ymd = holiday.split('-');
            nationalHolidayTimeSet.add(new Date(ymd[0], ymd[1]-1, ymd[2]).getTime());
        });

        $("#reserv_date1").datepicker('destroy').datepicker(createCalendarOption('reserv_time1'));
        $("#reserv_date2").datepicker('destroy').datepicker(createCalendarOption('reserv_time2'));
    });
    // 祝日の判定（祝日ならtrueを返す）
    function isNationalHoliday(date) {
        if (nationalHolidayTimeSet.has(date.getTime())) return true;
        return false;
    }


    // 「銀座院」臨時休診日の設定
    let ginzaBusinessHolidayTimeSet = new Set();
    let ginzaBusinessHolidaySet = new Set([
        '2025-12-30',
        '2025-12-31',
        '2026-01-01',
        '2026-01-02',
        '2026-01-03',
    ]);
    ginzaBusinessHolidaySet.forEach(holiday => {
        let ymd = holiday.split('-');
        ginzaBusinessHolidayTimeSet.add(new Date(ymd[0], ymd[1]-1, ymd[2]).getTime());
    });

    // 「銀座院」臨時診療日の設定
    let ginzaWorkdayTimeSet = new Set();
    let ginzaWorkdaySet = new Set([
        '2024-10-06',
        '2024-10-20',
        '2024-10-27',
    ]);
    ginzaWorkdaySet.forEach(workday => {
        let ymd = workday.split('-');
        ginzaWorkdayTimeSet.add(new Date(ymd[0], ymd[1]-1, ymd[2]).getTime());
    });


    // 対象の営業時間の表示
    // クリニック選択による時間変更
    // .type1：銀座_火・金：12:00～20:00
    // .type2：銀座_土・日：10:00～18:00
    //
    // date：選択した日付け
    // reserv_time：
    function viewWorkingTime(date, reserv_time) {
        var dayOfWeek = date.getDay();  // 曜日（0:日、1:月、2:火、3:水、4:木、5:金、6:土）

        // 対象のSelectBox
        var selectBox = $('.'+reserv_time);

        // カレンダー時刻パターン3種
        const list1 = [ '12:00～', '12:30～',
                        '13:00～', '13:30～', '14:00～', '14:30～', '15:00～', '15:30～',
                        '16:00～', '16:30～', '17:00～', '17:30～', '18:00～', '18:30～',
                        '19:00～', '19:30～' ];
        const list2 = [ '10:00～', '10:30～', '11:00～', '11:30～', '12:00～', '12:30～',
                        '13:00～', '13:30～', '14:00～', '14:30～', '15:00～', '15:30～',
                        '16:00～', '16:30～', '17:00～', '17:30～' ];

        // 時刻を有効化
        $('.'+reserv_time).attr('disabled', false);

        if (( isNationalHoliday(date) ) || ( dayOfWeek === 0 ) || ( dayOfWeek === 6 )) {
            // 祝日、または土日
            changeSelectOption( selectBox, list2 ); // selectbox内のoptionを再生成
        } else {
            // 土日以外
            changeSelectOption( selectBox, list1 ); // selectbox内のoptionを再生成
        }


        return;
    }

    // Select内のOptionを再生成
    // ele：対象のセレクトボックス
    // list：埋め込むリストを配列で（textとvalは共通とする）
    function changeSelectOption( ele, list ) {
        var keys = Object.keys(list);
        ele.children('option').remove(); // select内のoptionをすべて削除

        /// option要素を生成＆追加
        ele.append($('<option>').text('時間を選択 ▼').val(''));
        $.each(list, function(i, value) {
            var option = $('<option>').text(value).val(value);
            ele.append(option);
        })
    }


    // 休診日の判定（休診日ならtrueを返す）
    // 上に記載のものから優先して決定される。
    function isBusinessHoliday(date) {
        // 個別指定した診療日
        if (ginzaWorkdayTimeSet.has(date.getTime())) return false;
        // 個別設定した臨時休診日
        if (ginzaBusinessHolidayTimeSet.has(date.getTime())) return true;
        // 祝日は営業日（祝日はfalseを返す）
        if (isNationalHoliday(date)) return false;
        // 曜日指定の休診日（0:日、1:月、2:火、3:水、4:木、5:金,6:土）
        if (date.getDay() === 4 ) return true;
        return false;
    }

    // カレンダーオプション作成
    // reserv_time：カレンダー日時紐づく時間（reserv_time1 or reserv_time2）
    function createCalendarOption(reserv_time) {
        let tmpDate = new Date();
        let today = new Date(tmpDate.getFullYear(), tmpDate.getMonth(), tmpDate.getDate());
        let workMinDate = 2; //2日後以降が選択可能
        // 2日後が休診日だったらその次の診療日まで日付を後ろにずらす
        for (let i = workMinDate; i <= workMinDate; i++) {
            tmpDate.setTime(today.getTime()); //今日の日付をセット
            tmpDate.setDate(tmpDate.getDate() + i); //i日後
            if (isBusinessHoliday(tmpDate)) {
                workMinDate++;
            }
        }

        // 基本オプション
        let option = {
            dateFormat: "yy年mm月dd日（D）",
            closeText: "閉じる",
            prevText: "&#x3C;前",
            nextText: "次&#x3E;",
            currentText: "今日",
            monthNames: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
            monthNamesShort: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
            dayNames: ["日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日"],
            dayNamesShort: ["日", "月", "火", "水", "木", "金", "土"],
            dayNamesMin: ["日", "月", "火", "水", "木", "金", "土"],
            weekHeader: "週",
            isRTL: false,
            showMonthAfterYear: true,
            yearSuffix: "年",
            //firstDay: 1, // 週の初めは月曜
            //showButtonPanel: true, // "今日"ボタン, "閉じる"ボタンを表示する
            minDate: workMinDate, // 2日後以降の営業日から選択可能
            //maxDate: workMinDate+60, // 翌々営業日から60日後まで選択可能
            maxDate: getNextMonth(),
            beforeShow: function() {
                setTimeout(function(){
                    $('.ui-datepicker').css('z-index', 10002);
                }, 0);
            },
            beforeShowDay: function(date) {
                return [!isBusinessHoliday(date)];
            },
            onSelect: function(dateText, inst) {
                // カレンダー選択年月日
                var date = $(this).datepicker('getDate'); // 選択年月日

                // 選択により営業時間を選択
                viewWorkingTime(date, reserv_time);
            },
        };

        return option;
    }

    // 翌月末を返す
    function getNextMonth() {
        var today = new Date(); // 本日
        today.setMonth(today.getMonth() + 2, 0); // 翌月末（=2ヶ月後の0日目）

        return today; // 翌月末を返す
    }

});
