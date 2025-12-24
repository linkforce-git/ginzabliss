$(function(){
    /* ********************************************
    //   カレンダー設定（jquery-ui用）
    /* ******************************************** */
    let holidayTimeSet = new Set();
    let holidaySet = new Set([
        //'2024-02-27',
    ]);
    holidaySet.forEach(holiday => {
        let ymd = holiday.split('-');
        holidayTimeSet.add(new Date(ymd[0], ymd[1]-1, ymd[2]).getTime());
    });

    // 休診日の判定（休診日ならtrueを返す）
    function isHoliday(date) {
        // 個別設定した休診日
        if (holidayTimeSet.has(date.getTime())) return true;
        // 木曜日
        if (date.getDay() === 4) return true;
        // 年末年始
        if ((date.getMonth() === 11 && date.getDate() >= 30) || (date.getMonth() === 0 && date.getDate() <= 3)) return true;

        return false;
    }

    let tmpDate = new Date();
    let today = new Date(tmpDate.getFullYear(), tmpDate.getMonth(), tmpDate.getDate());
    let workMinDate = 2; //翌々営業日以降が選択可能（基本は2日後）
    // 2日後までに休診日があったらその分選択可能な日付を後ろにずらす
    for (let i = 1; i <= workMinDate; i++) {
        tmpDate.setTime(today.getTime()); //今日の日付をセット
        tmpDate.setDate(tmpDate.getDate() + i); //i日後
        if (isHoliday(tmpDate)) {
            workMinDate++;
        }
    }

    // カレンダーオプション
    createCalendarOption = {
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
        minDate: workMinDate, // 翌々営業日以降が選択可能
        maxDate: workMinDate+60, // 翌々営業日から60日後まで選択可能
        beforeShow: function() {
            setTimeout(function(){
                $('.ui-datepicker').css('z-index', 300);
            }, 0);
        },
        beforeShowDay: function(date) {
            return [!isHoliday(date)];
        },
        onSelect: function(dateText, inst) {
            $(this).valid();
        }
    };

});
