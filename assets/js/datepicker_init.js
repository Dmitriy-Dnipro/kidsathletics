var events = [];
$.when($.get("https://kidsathleticsdnipro.com/api/feed-events.json", function (data) {
    $.each(data, function (key, value) {
        var obj = {};
        obj['Title'] = value['title'];
        obj['Date'] = new Date(value['date']);
        obj['Image'] = value['image'];
        obj['Location'] = value['location'];
        obj['Href'] = value['link'];
        obj['Time'] = value['time'];
        obj['Front'] = value['frontDate'];
        obj['City'] = value['school'];
        obj['Region'] = value['filter-1'];
        obj['Town'] = value['filter-2'];
        obj['regionArea'] = value['filter-3'];
        obj['cityArea'] = value['filter-4'];
        obj['areaCity'] = value['filter-5'];
        events.push(obj);
    });

})).then(function () {
    $(".date").datepicker({
        monthNames: ['Сiчень', 'Лютий', 'Березень', 'Квiтень',
            'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень',
            'Жовтень', 'Листопад', 'Грудень'
        ],
        dayNamesMin: ['Нд', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
        firstDay: 1,
        
        beforeShowDay: function (date) {
            //var result = [true, '', null];
            var matching = jQuery.grep(events, function (event) {
                var nowDate = new Date();
                nowDate.setHours(0, 0, 0, 0);
                var nowDay = nowDate.getTime();
                var objDate = event.Date.getTime();

                if (objDate >= nowDay) {
                    return event.Date.valueOf() === date.valueOf();
                }
            });
   
            if (matching.length) {
                result = [true, 'highlight', null];
            } else {
                result = [false, 'disabled-date', null];
            }
            return result;
            
        },
        onSelect: function (dateText) {
            var date,
                selectedDate = new Date(dateText),
                count = 0,
                event = null;
            $(".date-content .date-slider").empty();
            $(".hide_block").hide();
            for (var i = 0; i < events.length && !events.title; i++) {
                date = events[i].Date;
                if (selectedDate.valueOf() === date.valueOf()) {
                    event = events[i];
                    count++;
                    var a = new Date(event.Date).toLocaleString('uk', {
                        day: 'numeric',
                        month: 'long',

                    });
                    var yearEvent = new Date(event.Date).toLocaleString('uk', {
                        year: 'numeric'
                    });

                    $('.calendar_event-title').html(`Заходи ${a}`);
                    $('.day_test').html(`${a}`);
                    $('.year_event').html(`${yearEvent}`);


                    $('.show_more_events, .show_more__posts').hide();

                    const cartTemplate =
                        `
                        <div class="col-md-4 filter" data-region="${event.Region}" data-city="${event.Town}"
                        data-cityArea="${event.cityArea}" data-areaCity="${event.areaCity}" data-regionArea="${event.regionArea}" ">
                        <div class="coming_events__box-item date-search">
                             <div class="box_item__img">
                                <img src="${event.Image}">
                            </div>
                                <h4 class="cocon-regular">${event.Title}</h4>
                            <div class="item_border">
                            <h5>${event.City}</h5>

                            <div class="box_column">
                                <div class="box_column-item">
                                    <p>Дата:</p>
                                    <p>${event.Front}</p>
                                </div>
                                <div class="box_column-item">
                                    <p>Початок:</p>
                                    <p>${event.Time}</p>
                                </div>
   
                            </div>
                            <div class="box_column-city">
                                <p>Місце проведення:</p>
                                <p>
                                    ${event.Location}
                                </p>
                            </div>
                            <div class="coming_events__button">
                                <a href="${event.Href}" class="cocon-regular">Детальніше</a>
                            </div>
                        </div>
                    </div>
                </div>
                    `;
                    $(".date-content .row").append(cartTemplate);
                    //$('.filter-column').removeClass('active-link');
                    $('.filter_sub_menu li').removeClass('active_li');
                    $(".filter-result").empty();

                    $(".column_date p span").html(`${count} заходiв`);

                }
            }
        }
    });

    
    var activeEvent = $('.highlight')['0'];
    var nextMonth = $('.ui-datepicker-next');
    if(activeEvent){
        activeEvent.click();
        console.log('true');
    }else{
        nextMonth.click();
       $('.highlight')['0'].click();
    }


    //end
});

$(function () {
    // работа с datepicker

    // $(document).on('click', '.ui-datepicker-prev, .ui-datepicker-next', function () {
    //     $(".column_date").empty();
    //     $(".ui-datepicker-title").clone().appendTo(".column_date");
    // });

    /*filter calendar events*/

    $('.filter-column').on('click', function () {
        $('.filter-column').removeClass('active-link');
        $('.filter_sub_menu li').removeClass('active_li');
        $(this).addClass('active-link');
        var attrBtn = $(this).data('item');
        $(".filter-result").empty();
        $(".filter").each(function () {
            $(this).hide();
            var region = $(this).data('region');
            var city = $(this).data('city');
            if (city == attrBtn) {
                $(this).show();
                $(this).clone().appendTo(".filter-result");
                $(this).hide();
            } else if (region == attrBtn) {
                $(this).show();
                $(this).clone().appendTo(".filter-result");
                $(this).hide();
            }
        })
    });

    $('.filter_sub_menu li').on("click", function () {
        $('.filter-column').removeClass('active-link');
        $('.filter_sub_menu li').removeClass('active_li');
        $('.filter-area-region, .filter-region_city, .filter-area').removeClass('show_filter_menu');
        $(this).addClass('active_li');
        var searchAttr = $(this).data('item');
        $(".filter-result").empty();
        $('.filter').each(function () {
            $(this).hide();
            var self = $(this);
            var cityArea = $(this).data('cityarea');
            var areaCity = $(this).data('areacity');
            var regionArea = $(this).data('regionarea');
            if (searchAttr == cityArea) {
                $(this).show();
                self.clone().appendTo(".filter-result");
                $(this).hide();
            } else if (searchAttr == areaCity) {
                $(this).show();
                self.clone().appendTo(".filter-result");
                $(this).hide();
            } else if (searchAttr == regionArea) {
                $(this).show();
                self.clone().appendTo(".filter-result");
                $(this).hide();
            }
        });
    });

    /*end filter calendar events*/


    /*open & close filter menu */
    $('.filter-area-region, .filter-region_city, .filter-area').on('click', function () {
        $(this).find('.filter_sub_menu').toggleClass('show_filter_menu');
        $(this).toggleClass('rotateArrow');
    });

    $(document).on('click', function (e) {
        var filter_block = $('.filter-area-region, .filter-region_city, .filter-area');
        if (!filter_block.is(e.target) && filter_block.has(e.target).length === 0) {
            filter_block.find('.filter_sub_menu').removeClass('show_filter_menu');
            filter_block.removeClass('rotateArrow');
        }
    });
    /*end*/

});