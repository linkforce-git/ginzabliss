$(function(){
    // 全体で使う変数
    let window_hsize = window.innerHeight;
    let scroll = $(window).scrollTop();
    let headerHide = false;

    // スクロールイベント
    $(window).scroll(function(){
        window_hsize = window.innerHeight;

        // ヘッダーの表示・非表示切り替え
        let newScroll = $(window).scrollTop();
        let newHeaderHide = ((newScroll >= scroll || newScroll < window_hsize) && newScroll >= 120);
        if (headerHide !== newHeaderHide) {
            if (newHeaderHide === true) {
                $('header').addClass('hide');
            } else {
                $('header').removeClass('hide');
            }
            headerHide = newHeaderHide;
        }
        scroll = newScroll;

        if (scroll >= window_hsize/2) {
            $('header').removeClass('fv');
        } else {
            $('header').addClass('fv');
        }

        // メニューの高さ調整
        $('#gMenu').css('height', window_hsize+'px');
        // フロートのメニューボタンの切り替え
        if (120 < scroll && scroll < $(document).outerHeight() - window_hsize - 50) {
            $('#floatBtn').removeClass('hide');
        } else {
            $('#floatBtn').addClass('hide');
            if (! $('#nav_gMenu').prop('checked')) {
                $('#nav_close').prop('checked', true);
            }
        }
    }).trigger('scroll');
    $(window).resize(function(){
        $(this).trigger('scroll');
    });

    // 訪問履歴の保存（Cookie付与）
    if (Modernizr.cookies && location.pathname.match(/^\/(knowledge|features)\/.+/)) {
        $(window).scroll(function(){
            if (window_hsize < scroll) {
                $.cookie('read'+location.pathname.replace(/\//g, '_'), '1', { expires: 365, path: '/' });
            }
        });
    }

    // スムーススクロール
    $('a[href^="#"]').click(function(){
        // 対象が開閉可能な要素なら、開いてからスクロールする
        if ($(this).is('[data-folder]')){
            $('#'+$(this).data('folder')+'_open').prop('checked', true);
        }
        let href = $(this).attr("href");
        let target = $(href == "#" || href == "" ? 'html' : href);
        let position = target.offset().top - 20;
        if (position < scroll) position -= 68;
        $("html, body").animate({scrollTop:position}, 500, "swing");
        return false;
    });

    // 折り畳み開閉時のスクロール位置調整
    if ($('.comment_open, .toggle_open').length) {
        $('.comment_open, .toggle_open').change(function(){
            let target = $('#'+$(this).attr("id").replace(/_open$/, ''));
            if (target.length) {
                let position = target.offset().top - 20;
                if (position < scroll) position -= 68;
                $("html, body").animate({scrollTop:position}, 300, "swing");
            }
        });
    }

    // ドラッグスクロールを有効化
    jQuery.prototype.mousedragscrollable = function() {
        let target;
        $(this).each(function(i, e){
            $(e).mousedown(function(event){
                event.preventDefault();
                target = $(e);
                $(e).data({
                    down: true,
                    move: false,
                    x: event.clientX,
                    y: event.clientY,
                    scrollleft: $(e).scrollLeft(),
                    scrolltop: $(e).scrollTop(),
                });
                return false;
            });
            $(e).click(function(event){
                if ($(e).data("move")) {
                    return false;
                }
            });
        });
        $(document).mousemove(function(event){
            if ($(target).data("down")) {
                event.preventDefault();
                let move_x = $(target).data("x") - event.clientX;
                let move_y = $(target).data("y") - event.clientY;
                if (move_x !== 0 || move_y !== 0) {
                    $(target).data("move", true);
                } else {
                    return;
                }
                $(target).scrollLeft($(target).data("scrollleft") + move_x);
                $(target).scrollTop($(target).data("scrolltop") + move_y);
                return false;
            }
        }).mouseup(function(event){
            $(target).data("down", false);
            return false;
        });
    };
    $('.dragScroll').mousedragscrollable();

    // 診療の流れ
    $('.flowList').slick({
        arrows: true,   //左右の矢印
        speed: 500, // スライドさせるスピード（ミリ秒）
        slidesToShow: 1, // 表示させるスライド数
        infinite: false, //スライドのループ
        autoplay: false,
        centerMode: true,
        centerPadding: "7.7%",
        dots: true,
        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
    });

    // 組み合わせ料金の切り替え
    $('.calculatorArea .calc_input .parts input').change(function(){
        let calcNum = $(this).data('calcNum');
        let epi_price = '';
        $('#calculatorArea'+calcNum+' .calc_input .parts input:checked').each(function(){
            epi_price += $(this).val();
        });
        $('[id^="price_'+calcNum+'_"]').removeClass('active');
        $('#price_'+calcNum+'_'+epi_price).addClass('active');
    });

    // 脱毛度比較
    $('.compareUnit').slick({
        arrows: true,   //左右の矢印
        speed: 500, // スライドさせるスピード（ミリ秒）
        slidesToShow: 1, // 表示させるスライド数
        infinite: false, //スライドのループ
        autoplay: false,
        centerMode: true,
        centerPadding: "3.85%",
        dots: false,
        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $(this).next('.compareToggle').children('.compareBtn').removeClass('active');
        $(this).next('.compareToggle').children('.compareBtn[data-index="'+nextSlide+'"]').addClass('active');
    });
    $('.compareBtn').click(function(){
        $('#'+$(this).data('target')).slick('slickGoTo', $(this).data('index'), false);
        $(this).parent().children('.compareBtn').removeClass('active');
        $(this).addClass('active');
    });


    /* ********************************************
    //   カレンダー（詳細は別ファイルで設定）
    /* ******************************************** */
    $('#reserv_date1, #reserv_date2').datepicker(createCalendarOption).blur();


    /* 
       予約申し込み（ポップアップ）
    */
    let reservForm = $("form#reserv_form");
    // バリデート
    let reservValidator = reservForm.validate({
        ignore: {},
        rules: {
            reserv_date1: {
                required: true,
            },
            reserv_time1: {
                required: true,
            },
            reserv_date2: {
                required: true,
            },
            reserv_time2: {
                required: true,
            },
            reserv_name: {
                required: true,
            },
            reserv_age: {
                required: true,
            },
            reserv_email: {
                required: true,
                email: true,
            },
            reserv_tel: {
                required: true,
                telnum: true,
            },
            'reserv_request[]': {
                required: true,
            },
            reserv_privacy: {
                required: true,
            },
        },
        messages: {
            reserv_date1: {
                required: "第一希望日を選択してください",
            },
            reserv_time1: {
                required: "第一希望日を選択してください",
            },
            reserv_date2: {
                required: "第二希望日を選択してください",
            },
            reserv_time2: {
                required: "第二希望日を選択してください",
            },
            reserv_name: {
                required: "お名前を入力してください",
            },
            reserv_age: {
                required: "年齢を入力してください",
            },
            reserv_email: {
                required: "メールアドレスを入力してください",
                email: "メールアドレスの形式で入力してください",
            },
            reserv_tel: {
                required: "電話番号を入力してください",
                telnum: "電話番号の形式で入力してください",
            },
            'reserv_request[]': {
                required: "ご希望の部位を選択してください",
            },
            reserv_privacy: {
                required: "プライバシーポリシーに同意が必要です",
            },
        },
        groups: {
            datetime1: "reserv_date1 reserv_time1",
            datetime2: "reserv_date2 reserv_time2",
        },
        errorPlacement: function(error, element){
            error.appendTo(element.parent().parent());
        }
    });
    // フォームサブミット
    $('#btnReserv').on('click',function(){
        if (reservForm.valid()) {
            let button = $('#btnReserv');
            // disabledの場合無効
            if (button.hasClass('disabled')) {
                console.log('button is disabled.');
                return;
            }
            // 送信
            $.ajax({
                url: '/reserv/send',
                type: 'post',
                data: reservForm.serialize(),
                timeout: 10000,  // 単位はミリ秒

                // 送信前
                beforeSend: function(xhr, settings) {
                    // ボタンを無効化し、二重送信を防止
                    button.addClass('disabled');
                },
                // 応答後
                complete: function(xhr, textStatus) {
                    // ボタンを有効化し、再送信を許可
                    button.removeClass('disabled');
                },

                // 通信成功時の処理
                success: function (result, textStatus, xhr) {
                    if (result === 'success') {
                        // GTM用仮想URL（フォームサンクス）
                        window.dataLayer = window.dataLayer || [];
                        dataLayer.push({'trackPageview': '/form/thanks', 'event': 'loadready'});

                        // 入力を消してサンクスを表示
                        $("#reserv_form")[0].reset();        // 入力値を初期化
                        $('#reserv_popup').addClass('thanks');

                    } else {
                        console.log(result);
                        alert('フォーム送信に失敗しました。時間をおいて再度実行してください。');
                    }
                },

                // 通信失敗時の処理
                error: function (xhr, textStatus, error) {
                    console.log('通信エラー');
                    console.log(xhr);
                    console.log(textStatus);
                    console.log(error);
                    alert('フォーム送信に失敗しました。時間をおいて再度実行してください。');
                }
            });
		} else {
            validateErrorScroll(); // validatreエラー時にスクロールする
        }
    });


    //全角ひらがな･カタカナのみ
    jQuery.validator.addMethod("kana", function(value, element) {
        return this.optional(element) || /^([ァ-ヶーぁ-ん]+)$/.test(value);
        }, "全角ひらがな･カタカナを入力してください"
    );

    //全角ひらがなのみ
    jQuery.validator.addMethod("hiragana", function(value, element) {
        return this.optional(element) || /^([ぁ-ん]+)$/.test(value);
        }, "全角ひらがなを入力してください"
    );

    //全角カタカナのみ
    jQuery.validator.addMethod("katakana", function(value, element) {
        return this.optional(element) || /^([ァ-ヶー]+)$/.test(value);
        }, "全角カタカナを入力してください"
    );

    //半角カタカナのみ
    jQuery.validator.addMethod("hankana", function(value, element) {
        return this.optional(element) || /^([ｧ-ﾝﾞﾟ]+)$/.test(value);
        }, "半角カタカナを入力してください"
    );

    //半角アルファベット（大文字･小文字）のみ
    jQuery.validator.addMethod("alphabet", function(value, element) {
        return this.optional(element) || /^([a-zA-z\s]+)$/.test(value);
        }, "半角英字を入力してください"
    );

    //半角アルファベット（大文字･小文字）もしくは数字のみ
    jQuery.validator.addMethod("alphanum", function(value, element) {
        return this.optional(element) || /^([a-zA-Z0-9]+)$/.test(value);
        }, "半角英数字を入力してください"
    );

    //郵便番号（例:012-3456）
    jQuery.validator.addMethod("postnum", function(value, element) {
//        return this.optional(element) || /^\d{3}\-\d{4}$/.test(value);
        return this.optional(element) || /^\d{3}\-\d{4}$|^[0-9]{7}$/.test(value);
        }, "郵便番号を入力してください（例:123-4567）"
    );

    //携帯番号（例:010-2345-6789）
    jQuery.validator.addMethod("mobilenum", function(value, element) {
        return this.optional(element) || /^0\d0-\d{4}-\d{4}$/.test(value);
        }, "携帯番号を入力してください（例:010-2345-6789）"
    );

    //電話番号（例:012-345-6789）
    jQuery.validator.addMethod("telnum", function(value, element) {
//        return this.optional(element) || /^[0-9-]{12}$/.test(value);
        return this.optional(element) || /^(0\d{1,4}[\s-]?\d{1,4}[\s-]?\d{4})$/.test(value);  //　日本のみ
//        return this.optional(element) || /^(?:\+?\d+-(?:\d+-)?)?\d+(?:-\d+){2}$|^\+?\d+$/.test(value);  // 国際番号含む
        }, "電話番号を入力してください（例:012-345-6789）"
    );

    // validatreエラー時にスクロールする
    function validateErrorScroll() {
        $.each($("form input, form select, form textarea"), function() {
            //エラーがあった場合トップへ
            if ($(this).hasClass('error')) {
                $("#reserv_popup .formWrap").animate({scrollTop : 0}, {queue : false});
                return false;
            }
        });
    }

    // GTM用仮想URL（フォームオープン）
    $('#reserv_open').change(function(){
        if ($(this).prop('checked')) {
            window.dataLayer = window.dataLayer || [];
            dataLayer.push({'trackPageview': '/form', 'event': 'loadready'});
        }
    });

    // フォーム選択・入力イベント発火（GTM用）
    $( 'input[type="radio"], input[type="checkbox"], select' ).change( function() {
        let name = $(this).attr("name");
        if (!name) return;
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'event': 'event',
            'category': 'form_event',
            'action': 'select',
            'label': name,
        });
    } );
    $( 'input[type="text"], input[type="number"], input[type="email"], input[type="tel"]' ).focus( function() {
        let name = $(this).attr("name");
        if (!name) return;
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'event': 'event',
            'category': 'form_event',
            'action': 'select',
            'label': name,
        });
    } );

});
