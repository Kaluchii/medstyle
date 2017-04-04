/**
 * Created by KocaHocTpa on 10.02.2016.
 */

$(document).ready(function () {



    //=========================== Магия адаптивной верстки
    // Перестройка блоков контента на разных страницах на разных разрешениях
    function WindowSize() {
        //  Страница услуг
        if ($('article').data('page') == 'services') {
            if (($(window).width() <= '870') && ($(window).width() >= '600')) {
                $('.category-1-1').appendTo($('.first'));
                $('.category-1-2').appendTo($('.second'));
            } else if ($(window).width() >= '870') {
                $('.category-1-1').appendTo($('.editable'));
                $('.category-1-2').appendTo($('.editable'));
            }
        //  Страница "услуга"
        }/* else if ($('article').data('page') == 'service') {

            if($(window).width() < 1000) {
                $('.information-block .social-buttons').prependTo($('article.content[data-page=service]'));
                $('.information-block .all-product').prependTo($('article.content[data-page=service]'));
            }else{
                $('article.content .all-product:first-child').appendTo($('.information-block'));
                $('article.content .social-buttons').appendTo($('.information-block'));
            }

            if ($(window).width() <= '780') {
                $('.interest').each(function(i){
                    $(this).appendTo($('.col-1-2.int')).data('from',(i+1));
                });
            } else {
                $('.interest').each(function(i){
                    $(this).appendTo($('.fr-'+(i+1)));
                });
            }
        //  Вопросы и ответы
        }*/ else if ($('article').data('page') == 'question') {
            if ($(window).width() <= '700') {
                $('.tofirst').prependTo($('.grid.grid-pad.question-page'));
            } else {
                $('.tofirst').appendTo($('.grid.grid-pad.question-page'));
            }
        }
        //  Специалисты
        else if ($('article').data('page') == 'specialist') {
            if (($(window).width() >= '320') && ($(window).width() <= '700')) {
                $('div.photo').after($('.about-specialist'));
            } else {
                $('.about-specialist').appendTo($('.grid.grid-pad.specialist .col-1-2:last-child'));
            }
        }
        //  Тестирование
        else if ($('article').data('page') == 'testing') {
            if (($(window).width() >= '320') && ($(window).width() <= '550')) {
                $('button.prev').appendTo($('.btn-acp'));
                $('.center-top').html($('.stop-quest'))
            } else {
                $('button.prev').appendTo($('.old-acp'));
                $('.stop-quest').appendTo($('.btn-acp'));
            }
        //  Результат тестирования
        } else if ($('article').data('page') == 'recomend') {
            if (($(window).width() >= '320') && ($(window).width() <= '800')) {
                $('.text.append').appendTo($('.acp-after'));
                $('.testing-ans-bloks').appendTo($('.acp-after'));
                $('.gray').appendTo('.ret-1');
            } else {
                $('.gray').appendTo('.col-1-2.bookmark');
                $('.ret-1').html($('.text.append'));
                $('.testing-ans-bloks').appendTo($('.ret-2'));

            }
        //  Полезное
        } else if ($('article').data('page') == 'helpful') {
            var winWidth = $(window).width();
            var conWidth;
            col = 3;
            colwidth = 10;
            if (winWidth < 600) {
                col = 1;
                colwidth = 0;
            } else if (winWidth < 900) {
                col = 2;
                colwidth = 10
            } else if (winWidth < 1100) {
                col = 3;
                colwidth = 10
            }
            currentWidth = conWidth;

            $('.grid.grid-pad.helpful').BlocksIt({
                numOfCol: col,
                offsetX: colwidth,
                offsetY: 40,
                blockElement: '.poleznoe-block-item'
            });
        }
    }


    $(window).on('load resize', WindowSize);

    //========================== Вызов слайдера на главной и на странице услуга
    var menuTop = 0;
    $(window).on('load', function () {
        if ($('article').data('page') == 'index') {
            $('.slider').bxSlider({
                nextText: '<div class="right-slide"></div>',
                prevText: '<div class="left-slide"></div>',
                preventDefaultSwipeY: false,
                auto: true,
                speed: 1500,
                pause: 5000
            });

            $('.wrapper').addClass('gray-background');
        }
        menuTop = $('.header').outerHeight()+1;
    }).on('resize', function(){
        if( !$('.main-menu').hasClass('fixed') ){
            menuTop = $('.header').outerHeight()+1;
        }
    }).on('scroll', function(){
        if ($('article').data('page') == 'index') {
            if( $(window).scrollTop() >= menuTop ){
                $('.main-menu').addClass('fixed');
            }else {
                $('.main-menu').removeClass('fixed');
            }
        }
    });

    $(window).on('load', function () {
        if ($('article').data('page') == 'service') {
            $('.service_slider').bxSlider({
                nextText: '<div class="right-slide"></div>',
                prevText: '<div class="left-slide"></div>',
                auto: true,
                speed: 1500,
                pause: 4500
            });
        } else if ($('article').data('page') == 'stock') {
            $('.wrapper').addClass('gray-background');
        }
    });
    //========================== вызов меню на малых экранах
    $('.menu-button').on('click', function () {
        if( $(this).hasClass('active') ){
            $(this).removeClass('active').delay(1000);
        }else{
            $(this).addClass('active');
        }
        $('.popup-for-menu').slideToggle();
    });


    //=================================================  Вызов галлереи из всплывающего окна
    $('.gallery-slider a.photo').on('click', function () {
        // закрытие предыдущего всплывающего окна
        $('.mfp-close').click();
        // инициализация самой галлереи
        $('a.photo').magnificPopup({
            callbacks: {},
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1],
                tCounter: '%curr% из %total%'
            }
        });
        // возврат false что бы не было перехода по ссылке
        return false;
    });
    // Магия без которой при первом клике галлерея не работает
    $('.gallery-slider a.photo').click();
    $('.mfp-close').click();

    //==========================================================


    //=========================== Модальные окна
    $('.life-popup').magnificPopup({
        type: 'inline',
        midClick: true,
        callbacks: {}
    });
    $('.spec-cert').magnificPopup({
        type: 'inline',
        midClick: true,
        callbacks: {}
    });

    $('.techno').magnificPopup({
        type: 'inline',
        midClick: true,
        callbacks: {}
    });
    $('.consult-popup').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass ='mfp-zoom-in';
            }
        },
        midClick: true
    });
    $('.all_serv').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass ='mfp-zoom-in';
            }
        },
        midClick: true
    });
    $('.ask-me-popup').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass ='mfp-zoom-in';
            }
        },
        midClick: true
    });


    // ================== Вызов кастомных селектов


    $('select.input.popup_field').selectmenu({});

    // Вызов селекта в технологиях и вопросах и ответах - селект с переходом по ссылке
    $('select.all-techno').selectmenu({
        change: function () {
            if ($(this).val() != '' &&
                $(this).val() != window.location.pathname) {
                window.location = $(this).val();
            }
        }
    });
    // fix - Я не придумал другого способа сделать выпадающее меню такой же ширины как и инпут для этого предназначенный
    // селект в попапе "Запись на консультацию"
    $('.question-select .ui-selectmenu-button').on('click', function () {
        $('.ui-widget.ui-widget-content').css('width', $('.ui-selectmenu-button').outerWidth() + 'px');
        $('.ui-widget.ui-widget-content').css('height', 200 + 'px');
    });


    $('.ui-selectmenu-button').on('click', function () {
        $('.ui-widget.ui-widget-content').css('width', $('.ui-selectmenu-button').outerWidth() + 'px');
    });

    // Добавление в закладки

    function add_favorite(a) {
        title=document.title;
        url=document.location;
        try {
            // Internet Explorer
            window.external.AddFavorite(url, title);
        }
        catch (e) {
            try {
                // Mozilla
                window.sidebar.addPanel(title, url, "");
            }
            catch (e) {
                // Opera
                if (typeof(opera)=="object") {
                    a.rel="sidebar";
                    a.title=title;
                    a.url=url;
                    return true;
                }
                else {
                    // Unknown
                    alert('Нажмите Ctrl-D чтобы добавить страницу в закладки');
                }
            }
        }
        return false;
    }


    $('.bookmark.add').on('click',function(){
        add_favorite(this);
    });
    }

    );



$(window).on('resize', function () {
    if ($('article').data('page') == 'stock') {
        $('.col_1-3 .stock-item:even').prependTo();
    }
});