$(function () {
    // company slider
    $(".company_slider").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    //partners slider
    $("#partners_slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        // autoplay: true,
        // autoplaySpeed: 4000,
        prevArrow: '<a id="prev" class="btn-partner-prew"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95263 8.46159 1.31946 8.07107 0.928936C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM49 7L1 7L1 9L49 9L49 7Z" fill="#168CF8"/></svg></a>',
        nextArrow: '<a id="next" class="btn-partner-next"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M48.7071 7.2929C49.0976 7.68342 49.0976 8.31659 48.7071 8.70711L42.3431 15.0711C41.9526 15.4616 41.3195 15.4616 40.9289 15.0711C40.5384 14.6805 40.5384 14.0474 40.9289 13.6569L46.5858 8L40.9289 2.34315C40.5384 1.95263 40.5384 1.31946 40.9289 0.928936C41.3195 0.538411 41.9526 0.538411 42.3431 0.928936L48.7071 7.2929ZM8.74228e-08 7L48 7L48 9L-8.74228e-08 9L8.74228e-08 7Z" fill="#168CF8"/></svg></a>',
        customPaging: function (slider, i) {
            var thumb = $(slider.$slides[i++]).data();
            return '<a class="partner_dots">' + '0' + i + '</a>';
        },
    });

    //event slider
    $("#event-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        // autoplay: true,
        // autoplaySpeed: 4000,
        prevArrow: '<a id="prev" class="btn-partner-prew"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95263 8.46159 1.31946 8.07107 0.928936C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM49 7L1 7L1 9L49 9L49 7Z" fill="#168CF8"/></svg></a>',
        nextArrow: '<a id="next" class="btn-partner-next"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M48.7071 7.2929C49.0976 7.68342 49.0976 8.31659 48.7071 8.70711L42.3431 15.0711C41.9526 15.4616 41.3195 15.4616 40.9289 15.0711C40.5384 14.6805 40.5384 14.0474 40.9289 13.6569L46.5858 8L40.9289 2.34315C40.5384 1.95263 40.5384 1.31946 40.9289 0.928936C41.3195 0.538411 41.9526 0.538411 42.3431 0.928936L48.7071 7.2929ZM8.74228e-08 7L48 7L48 9L-8.74228e-08 9L8.74228e-08 7Z" fill="#168CF8"/></svg></a>',
        customPaging: function (slider, i) {
            var thumb = $(slider.$slides[i++]).data();
            return '<a class="partner_dots">' + '0' + i + '</a>';
        },
    });

    //lastnews slider
    $(".lastNews_slider").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        vertical: true,
        dots: true,
        arrows: true,
        prevArrow: '<a id="prev" class="btn-news-prew"><svg width="36" height="2" viewBox="0 0 36 2" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="0.500122" y1="1.00195" x2="35.5001" y2="1.00195" stroke="#D0E5F7"/></svg>назад</a>',
        nextArrow: '<a id="next" class="btn-news-next">вперед<svg width="36" height="2" viewBox="0 0 36 2" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="0.500122" y1="1.00195" x2="35.5001" y2="1.00195" stroke="#D0E5F7"/></svg></a>',
        customPaging: function (slider, i) {
            var thumb = $(slider.$slides[i++]).data();
            return '<a class="news_dots">' + '0' + i + '</a>';
        },
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                vertical: false,
                dots: true,
                arrows: true
            }
        }, ]
    });

    /*slider cart events*/
    if (window.innerWidth < 1025) {
        $(".slider_events").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 790,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: '150px',
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: '20px'
                    }
                }
            ]

        });
    }
    /*end*/

    /*slider about team*/
    $(".about_team__slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<a id="prev" class="btn-about-prew"><svg width="49" height="30" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95263 8.46159 1.31946 8.07107 0.928936C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM49 7L1 7L1 9L49 9L49 7Z" fill="#168CF8"/></svg></a>',
        nextArrow: '<a id="next" class="btn-about-next"><svg width="49" height="30" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M48.7071 7.2929C49.0976 7.68342 49.0976 8.31659 48.7071 8.70711L42.3431 15.0711C41.9526 15.4616 41.3195 15.4616 40.9289 15.0711C40.5384 14.6805 40.5384 14.0474 40.9289 13.6569L46.5858 8L40.9289 2.34315C40.5384 1.95263 40.5384 1.31946 40.9289 0.928936C41.3195 0.538411 41.9526 0.538411 42.3431 0.928936L48.7071 7.2929ZM8.74228e-08 7L48 7L48 9L-8.74228e-08 9L8.74228e-08 7Z" fill="#168CF8"/></svg></a>',
        responsive: [{
                breakpoint: 1300,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true
                }
            }
        ]
    });
    /*end slider about team*/

    /*page_slider slider*/
    $(".partners_slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        prevArrow: '<a id="prev" class="btn-partnerPage-prew"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95263 8.46159 1.31946 8.07107 0.928936C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM49 7L1 7L1 9L49 9L49 7Z" fill="#168CF8"/></svg></a>',
        nextArrow: '<a id="next" class="btn-partnerPage-next"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M48.7071 7.2929C49.0976 7.68342 49.0976 8.31659 48.7071 8.70711L42.3431 15.0711C41.9526 15.4616 41.3195 15.4616 40.9289 15.0711C40.5384 14.6805 40.5384 14.0474 40.9289 13.6569L46.5858 8L40.9289 2.34315C40.5384 1.95263 40.5384 1.31946 40.9289 0.928936C41.3195 0.538411 41.9526 0.538411 42.3431 0.928936L48.7071 7.2929ZM8.74228e-08 7L48 7L48 9L-8.74228e-08 9L8.74228e-08 7Z" fill="#168CF8"/></svg></a>',
        customPaging: function (slider, i) {
            var thumb = $(slider.$slides[i++]).data();
            return '<a class="partner_page_dots">' + '0' + i + '</a>';
        },
    });

    $(".tablet_partners__slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        infinite: false,
        prevArrow: '<a id="prev" class="btn-partnerPage-prew"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95263 8.46159 1.31946 8.07107 0.928936C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM49 7L1 7L1 9L49 9L49 7Z" fill="#168CF8"/></svg></a>',
        nextArrow: '<a id="next" class="btn-partnerPage-next"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M48.7071 7.2929C49.0976 7.68342 49.0976 8.31659 48.7071 8.70711L42.3431 15.0711C41.9526 15.4616 41.3195 15.4616 40.9289 15.0711C40.5384 14.6805 40.5384 14.0474 40.9289 13.6569L46.5858 8L40.9289 2.34315C40.5384 1.95263 40.5384 1.31946 40.9289 0.928936C41.3195 0.538411 41.9526 0.538411 42.3431 0.928936L48.7071 7.2929ZM8.74228e-08 7L48 7L48 9L-8.74228e-08 9L8.74228e-08 7Z" fill="#168CF8"/></svg></a>',
        customPaging: function (slider, i) {
            var thumb = $(slider.$slides[i++]).data();
            return '<a class="partner_page_dots">' + '0' + i + '</a>';
        },
        responsive: [{
            breakpoint: 500,
            settings: "unslick",

        }, ]
    });

    /* end*/

    /*show more partners*/
    function loadPartners(count) {
        var items = $('.load_partners_box');

        items.filter(':hidden').slice(0, count).fadeIn().css('display', 'flex');
        var visible = items.filter(':visible').length;
        if (items.length === visible) {
            $('.partners_load_more').fadeOut('slow');
        }
    }
    $('.partners_load_more').on('click', function (e) {
        e.preventDefault();
        loadPartners(3);
    });
    loadPartners(3);
    /*end*/

    /*event page partners */
    $('.event_page__slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        asNavFor: '.event_page__nav',
        responsive: [{
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    $('.event_page__nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.event_page__slider',
        arrows: true,
        prevArrow: '<a id="prev" class="btn-event-prew"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95263 8.46159 1.31946 8.07107 0.928936C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM49 7L1 7L1 9L49 9L49 7Z" fill="#168CF8"/></svg></a>',
        nextArrow: '<a id="next" class="btn-event-next"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M48.7071 7.2929C49.0976 7.68342 49.0976 8.31659 48.7071 8.70711L42.3431 15.0711C41.9526 15.4616 41.3195 15.4616 40.9289 15.0711C40.5384 14.6805 40.5384 14.0474 40.9289 13.6569L46.5858 8L40.9289 2.34315C40.5384 1.95263 40.5384 1.31946 40.9289 0.928936C41.3195 0.538411 41.9526 0.538411 42.3431 0.928936L48.7071 7.2929ZM8.74228e-08 7L48 7L48 9L-8.74228e-08 9L8.74228e-08 7Z" fill="#168CF8"/></svg></a>',
        focusOnSelect: true,

    });

    $('.school').on("click", function (e) {
        e.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 1000);

    });
    /*end*/

    $('.burger_box').on('click', function () {
        $('#main_menu').toggleClass('open');
        $(this).toggleClass('open_menu');
        $('body').toggleClass('disable_scroll');
    });

    if (window.innerWidth < 415) {
        $('.menu-item-has-children').on('click', function (e) {

            var container = $('.main_menu__nav .sub-menu');
            $(this).find(container).slideToggle();
        });
    }

    /*load more posts*/
    $('.show_more_events').click(function () {
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page': current_page
        };
        $.ajax({
            url: ajaxurl,
            data: data,
            type: 'POST',
            success: function (data) {
                if (data) {
                    $('.show_more_events').text('Показати більше').before(data);
                    current_page++;
                    if (current_page == max_pages) $(".show_more_events").remove();
                } else {
                    $('.show_more_events').remove();
                }
            }
        });
    });
    /*end*/

    /* Добавляем нули в пагинацию*/
    var page = $(".page-numbers");
    page.each(function () {
        var pageText = $(this).text();
        if (pageText > 9) {
            $(this).prepend('');
        } else {
            $(this).prepend('0');
        }
    });
    /*end*/

    /*Отключаем стандартное поведение ссылок в меню*/
    $('a[href="https://kidsathleticsdnipro.com/uchasnikam/"], a[href="#"], a[href="https://kidsathleticsdnipro.com/pro-proekt/"]').on('click', function (e) {
          e.preventDefault();
    });
      /*end*/

    /*sidebar partners slider*/
    $(".sidebar_partners__row").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        //autoplay: true,
        //autoplaySpeed: 2000,
        prevArrow: '<a id="prev" class="btn-sidebar-prew"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.91419 0.59594C9.03806 0.478676 9.19289 0.420045 9.36321 0.420045C9.53354 0.420045 9.68837 0.478676 9.81224 0.59594C10.06 0.83047 10.06 1.21158 9.81224 1.44611L1.91556 8.92169L9.81224 16.3973C10.06 16.6318 10.06 17.0129 9.81224 17.2474C9.5645 17.482 9.16193 17.482 8.91419 17.2474L0.552993 9.34678C0.305253 9.11225 0.305253 8.73114 0.552993 8.49661L8.91419 0.59594Z" fill="#168CF8"/></svg></a>',
        nextArrow: '<a id="next" class="btn-sidebar-next"><svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.53894 0.595818C1.41507 0.478554 1.26023 0.419922 1.08991 0.419922C0.919589 0.419922 0.764752 0.478554 0.640882 0.595818C0.393143 0.830348 0.393143 1.21146 0.640882 1.44598L8.53757 8.92157L0.640883 16.3972C0.393145 16.6317 0.393145 17.0128 0.640883 17.2473C0.888623 17.4819 1.2912 17.4819 1.53894 17.2473L9.90013 9.34665C10.1479 9.11212 10.1479 8.73102 9.90013 8.49649L1.53894 0.595818Z" fill="#168CF8"/></svg></a>',

    });

    // сompetition slider
    $(".competition_slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        prevArrow: '<a id="prev" class="btn-competition-prew"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95263 8.46159 1.31946 8.07107 0.928936C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM49 7L1 7L1 9L49 9L49 7Z" fill="#168CF8"/></svg></a>',
        nextArrow: '<a id="next" class="btn-competition-next"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M48.7071 7.2929C49.0976 7.68342 49.0976 8.31659 48.7071 8.70711L42.3431 15.0711C41.9526 15.4616 41.3195 15.4616 40.9289 15.0711C40.5384 14.6805 40.5384 14.0474 40.9289 13.6569L46.5858 8L40.9289 2.34315C40.5384 1.95263 40.5384 1.31946 40.9289 0.928936C41.3195 0.538411 41.9526 0.538411 42.3431 0.928936L48.7071 7.2929ZM8.74228e-08 7L48 7L48 9L-8.74228e-08 9L8.74228e-08 7Z" fill="#168CF8"/></svg></a>',
        responsive: [{
            breakpoint: 600,
            settings:{
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                //infinite: true,
                centerPadding: '50px',
                variableWidth: true
            }
        }]
    });

    //competition post slider
    if(window.innerWidth < 1025)
    $(".competition_post_slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        //infinite: false,
        centerMode: true,
        centerPadding: '270px',
        responsive: [{
            breakpoint: 800,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '150px',
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '20px'
            }
        }
    ]
        
    });

    if (window.innerWidth < 415) {
        $(".more_news__slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '55px',
        });


    // страница конкурса "Показать больше"
    $(".conditions_load_more").on("click", function(){
        $(".conditions_step_2").fadeIn("slow");
        $(this).hide();
    });

        // сокращение текста
        $(".single_page__text").each(function () {
            var review_full = $(this).html();
            var review = review_full;
            if (review.length > 1330) {
                review = review.substring(0, 1330);
                $(this).html(review + '<div class="read_more"><svg width="41" height="18" viewBox="0 0 41 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M40.5759 1.9696C40.8586 1.74451 41 1.46313 41 1.15362C41 0.844115 40.8586 0.562741 40.5759 0.337643C40.0103 -0.112552 39.0914 -0.112552 38.5259 0.337643L20.5 14.6876L2.47414 0.337645C1.90862 -0.112551 0.989654 -0.112551 0.424137 0.337645C-0.14138 0.78784 -0.14138 1.51941 0.424137 1.9696L19.475 17.1637C20.0405 17.6139 20.9595 17.6139 21.525 17.1637L40.5759 1.9696Z"fill="#168CF8" /></svg></div>');
            }

            $(this).append('<div class="full_text" style="display: none;">' + review_full + '</div>');
        });

        $(".read_more").click(function () {
            $(this).parent().html($(this).parent().find(".full_text").html());
        });


    }
    /*end*/


    /*youtube play video*/
    $(".youtube-video").each(function () {
        $(this).css(
            "background-image",
            "url(https://i.ytimg.com/vi/" + this.id + "/maxresdefault.jpg)"
        );
        var icon =
            '<div class="play"><svg width="77" height="53" viewBox="0 0 77 53" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M73.7275 5.1325C71.6389 1.41725 69.3722 0.733875 64.757 0.474C60.1466 0.161188 48.5533 0.03125 38.5096 0.03125C28.4467 0.03125 16.8486 0.161188 12.243 0.469188C7.63744 0.733875 5.36594 1.41244 3.25806 5.1325C1.10687 8.84294 0 15.2339 0 26.4856C0 26.4952 0 26.5 0 26.5C0 26.5096 0 26.5144 0 26.5144V26.5241C0 37.7276 1.10687 44.1667 3.25806 47.8386C5.36594 51.5539 7.63262 52.2276 12.2382 52.5404C16.8486 52.8099 28.4467 52.9688 38.5096 52.9688C48.5533 52.9688 60.1466 52.8099 64.7618 52.5452C69.377 52.2324 71.6437 51.5587 73.7323 47.8434C75.9027 44.1715 77 37.7324 77 26.5289C77 26.5289 77 26.5144 77 26.5048C77 26.5048 77 26.4952 77 26.4904C77 15.2339 75.9027 8.84294 73.7275 5.1325ZM28.875 40.9375V12.0625L52.9375 26.5L28.875 40.9375Z" fill="white" fill-opacity="0.7"/></svg></div>';
        $(this).append(icon);
        $(document).delegate("#" + this.id, "click", function () {
            var iframe_url =
                "https://www.youtube.com/embed/" +
                this.id +
                "?autoplay=1&autohide=1&rel=0&amp;showinfo=0";
            if ($(this).data("params")) iframe_url += "&" + $(this).data("params");
            var iframe = $("<iframe/>", {
                frameborder: "0",
                src: iframe_url,
                width: "100%",
                height: "inherit",
                allowfullscreen: 1
            });
            $(this).html(iframe);
        });
    });
    /*end*/

    /*schools page slider*/
    $('.school_slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        vertical: true,
        arrows: true,
        prevArrow: '<a id="prev" class="school-prew"><svg width="31" height="28" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.635 23.009L14.6349 23.0089L1.68232 11.2881L1.68215 11.288C1.18792 10.8414 1.18798 10.1047 1.68232 9.65815C2.162 9.2249 2.93159 9.2249 3.41126 9.65815L15.4995 20.5766L27.5877 9.65815C28.0674 9.22489 28.837 9.22489 29.3167 9.65815C29.5592 9.87716 29.6875 10.1607 29.6875 10.4731C29.6875 10.7855 29.5592 11.069 29.3169 11.288L14.635 23.009ZM14.635 23.009C15.1147 23.4423 15.8843 23.4423 16.364 23.009L16.3641 23.0089M14.635 23.009L16.3641 23.0089M16.3641 23.0089L29.3167 11.2881L16.3641 23.0089Z" fill="#168CF8" stroke="#168CF8" stroke-width="0.5"/></svg></a>',
        nextArrow: '<a id="next" class="school-next"><svg width="31" height="28" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.635 23.009L14.6349 23.0089L1.68232 11.2881L1.68215 11.288C1.18792 10.8414 1.18798 10.1047 1.68232 9.65815C2.162 9.2249 2.93159 9.2249 3.41126 9.65815L15.4995 20.5766L27.5877 9.65815C28.0674 9.22489 28.837 9.22489 29.3167 9.65815C29.5592 9.87716 29.6875 10.1607 29.6875 10.4731C29.6875 10.7855 29.5592 11.069 29.3169 11.288L14.635 23.009ZM14.635 23.009C15.1147 23.4423 15.8843 23.4423 16.364 23.009L16.3641 23.0089M14.635 23.009L16.3641 23.0089M16.3641 23.0089L29.3167 11.2881L16.3641 23.0089Z" fill="#168CF8" stroke="#168CF8" stroke-width="0.5"/></svg></a>',
        responsive: [{
            breakpoint: 1100,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
    ]
    });
    /*end slider*/

});