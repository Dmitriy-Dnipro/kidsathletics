<?php get_header();?>

<?php 
    $lang = pll_current_language();
?>

<style>
    .schools_page__banner {
        background-image: url("<?php echo get_template_directory_uri();?>/images/page_contacts/banner_photo.jpg");
    }
</style>

<section class="page_banner schools_page__banner">
    <div class="container">
        <h2>
            перелік шкіл учасниць
        </h2>
    </div>
    <div class="home_banner__line">
        <div class="banner_line red"></div>
        <div class="banner_line blue"></div>
        <div class="banner_line green"></div>
        <div class="banner_line yellow"></div>
    </div>
</section>

<section class="coming_events coming_calendar">
    <div class="container">
        <!-- <div class="event_breadcrumbs">
            <?php the_breadcrumb(); ?>
        </div> -->
        <div class="calendar_event-filter">
            <h3 class="title">Контакти шкіл учасниць</h3>
            <div class="line_box">
                <div class="line red"></div>
                <div class="line blue"></div>
                <div class="line green"></div>
                <div class="line yellow"></div>
            </div>
            <p class="schools_region__title">Дніпропетровської області</p>
            <div class="calendar_event-filterBox">

                <div class="filter_region filter_item current_region filter-column filter-category">
                    <p class="category_name">Дн-ська обл.</p>
                </div>
                <div class="filter_city filter_item filter-column filter-category">
                    <?php $term = get_term_by( 'id', 48, 'schools-category');?>
                    <p class="category_name" data-parent="<?php echo $term->term_id;?>">м.Дніпро</p>
                </div>
                <div class="filter-region_city filter_item">
                    <ul class="filter_menu">
                        <li class="filter_show_submenu">
                            міста обл.
                            <ul class="filter_sub_menu">
                                <?php 
                                $catArr =   array(
                                    'taxonomy'     => 'schools-category',
                                    'child_of'     => 31,
                                    'hide_empty'   => 0
                                ); 
                                $cat = get_categories($catArr);
                             ?>
                                <?php 
                                foreach($cat as $child_cat){
                             ?>
                                <li class="category_name" data-parent="<?php echo $child_cat->parent;?>" data-id="<?php echo $child_cat->term_id;?>">
                                    <?php echo $child_cat->name;?>
                                </li>
                                <?}?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="filter-area-region filter_item">
                    <ul class="filter_menu">
                        <li class="filter_show_submenu">
                            райони обл.
                            <ul class="filter_sub_menu">
                                <?php 
                                $catArr =   array(
                                    'taxonomy'     => 'schools-category',
                                    'child_of'     => 39,
                                    'hide_empty'   => 0
                                ); 
                                $cat = get_categories($catArr);
                             ?>
                                <?php 
                                foreach($cat as $child_cat){
                             ?>
                                <li class="category_name" data-parent="<?php echo $child_cat->parent;?>" data-id="<?php echo $child_cat->term_id;?>">
                                    <?php echo $child_cat->name;?>
                                </li>
                                <?}?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="filter-area filter_item">
                    <ul class="filter_menu">
                        <li class="filter_show_submenu">
                            райони м.Дніпро
                            <ul class="filter_sub_menu">
                                <?php 
                                $catArr =   array(
                                    'taxonomy'     => 'schools-category',
                                    'child_of'     => 48,
                                    'hide_empty'   => 0
                                ); 
                                $cat = get_categories($catArr);
                             ?>
                                <?php 
                                foreach($cat as $child_cat){
                             ?>
                                <li class="category_name" data-parent="<?php echo $child_cat->parent;?>" data-id="<?php echo $child_cat->term_id;?>">
                                    <?php echo $child_cat->name;?>
                                </li>
                                <?}?>

                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    </div>
    <div>
        <div class="schools_block">
            <div class="container">
                <div class="schools_box">
                    <div class="schools_map">
                            <?php include (TEMPLATEPATH . '/images/map.svg'); ?>
                        <div class="school_number">
                            <div class="school_image">
                                <img src="<?php echo get_template_directory_uri();?>/images/win.jpg">
                            </div>
                            <div class="school_info">
                                <p class="school_info_name"></p>
                                <p class="school_info_site"></p>
                                <p class="school_info_phone"></p>
                            </div>
                        </div>
                    </div>
                    <div class="schools_scroll__box">
                    <div class="school_info">
                            <p class="school_region">Школи Дн-ської області</p>
                            <p class="school_city"></p>
                        </div>
                        <div class="school_slider">

                            <?php 
                            $schoolArr = array(
                                'post_type' => 'schools',
                                'numberposts' => -1,
                                'order' => 'ASC',
                           );
                           
                           $schools = get_posts($schoolArr);

                           foreach ($schools as $school) {
                               $school_adress = get_field("school_adress", $school->ID);
                               $school_site = get_field("school_site", $school->ID);
                               $school_mail = get_field("school_mail", $school->ID);
                               $school_phone = get_field("school_phone", $school->ID);

                            ?>
                            <div class="school_item" data-school="<?php the_field("school_region", $school->ID);?>">
                                <p class="school_name">
                                    <?php echo $school->post_title;?>
                                </p>
                                <?php if($school_adress){?>
                                <p class="school_adress"><span>Адреса:</span>
                                    <?php echo $school_adress;?>
                                </p>
                                <?}?>

                                <?php if($school_site){?>
                                <p class="school_site">Cайт: <a href="<?php echo $school_site;?>">
                                        <?php echo $school_site;?></a></p>
                                <?}?>

                                <?php if($school_mail){?>
                                <p class="school_site">Почта: <a href="mailto:<?php echo $school_mail;?>">
                                        <?php echo $school_mail;?></a></p>
                                <?}?>

                                <?php if($school_phone){?>
                                <p class="school_phone">
                                    Тел.: <a href="tel:<?php echo $school_phone;?>">
                                        <?php echo $school_phone;?></a>
                                </p>
                                <?}?>
                            </div>
                            <?}?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gellery_line__block">
        <div class="gellery_line red"></div>
        <div class="gellery_line blue"></div>
        <div class="gellery_line green"></div>
        <div class="gellery_line yellow"></div>
    </div>
</section>

<section class="coming_events bg_events">
    <div class="container">
        <h3 class="title">
            Найближчі заходи           
        </h3>
        <div class="line_box">
            <div class="line red"></div>
            <div class="line blue"></div>
            <div class="line green"></div>
            <div class="line yellow"></div>
        </div>

        <p class="coming_events__text">
            <?php echo get_field("events_subtitle", 9);?>
        </p>
        <div class="coming_events__box">
            <div class="row slider_events">

                <?php 
                $eventsArr = array( 'post_type' => 'events', 'numberposts' => 3, 'order' => 'DESC');
                $events = get_posts($eventsArr);
                foreach($events as $event){
                    $eventsImage = get_field("events_image", $event->ID);
                ?>

                <div class="col-md-4">
                    <div class="coming_events__box-item">
                        <div class="box_item__img">
                            <img src="<?php echo $eventsImage['url'];?>" alt="<?php echo $eventsImage['alt'];?>">
                        </div>
                        <h4 class="cocon-regular">
                            <?php echo get_field("preview_evets_title", $event->ID);?>
                        </h4>
                        <div class="item_border">
                            <h5>
                                <?php echo get_field("events_school", $event->ID);?>
                            </h5>

                            <div class="box_column">
                                <div class="box_column-item">
                                    <p>Дата:</p>
                                    <p>
                                        <?php echo get_field("events_date", $event->ID);?>
                                    </p>
                                </div>
                                <div class="box_column-item">
                                    <p>Початок:</p>
                                    <p>
                                        <?php echo get_field("events_time", $event->ID);?>
                                    </p>
                                </div>
                            </div>
                            <div class="box_column-city">
                                <p>Місце проведення:</p>
                                <p>
                                    <?php echo get_field("events_location", $event->ID);?>
                                </p>
                            </div>
                            <div class="coming_events__button">
                                <a href="<?php the_permalink($event->ID);?>" class="cocon-regular">Детальніше</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?}?>
            </div>
        </div>
        <div class="coming_events__more">
            <a href="<?php echo get_field("events_btn_link", 9);?>" class="cocon-regular">
                <?php echo get_field("events_btn_name", 9);?></a>
        </div>
    </div>

</section>

<?php get_footer();?>


<script type="text/javascript">
    (function ($) {
        // ajax send
        $(function () {
            $(".category_name").click(function () {
                $('.category_name').removeClass('active_school_filter');
                $('.filter-column').removeClass('current_region');
                var city = $(this).text();
                var dataParent = $(this).data('parent');
                $(".schools_block").empty().html(
                    "<div style='text-align:center; padding:15vw;'><img src='<?php bloginfo('template_url') ?>/assets/css/ajax-loader.gif' /></div>"
                );
                $(this).addClass('active_school_filter');
                $(".schools_map").hide();
                var c = $(this).data('id');
                var p = $(this).data('parent');
                $.post(
                    "<?php bloginfo('template_url') ?>/template-parts/schools-view.php", {
                        cat: c,
                        parent: p
                    },
                    function (data) {
                        $(".schools_block").html(data);
                        $('.school_city').append(city);
                        if(dataParent == 31){
                            $('.school_region').empty().append('Школи мiст дн-ської областi');
                        }else if(dataParent == 39){
                            $('.school_region').empty().append('Школи районiв дн-ської областi'); 
                        }else if(dataParent == 48 && city !== 'м.Дніпро'){
                            $('.school_region').empty().append('Школи районiв м.Днiпра'); 
                        }else if(city == 'Днiп-ка область'){
                            $('.school_city').empty();
                        }
                    }
                );
            });
        });
        // acite mape path
        $('.school_item').on('click', function () {

            $('.school_item').removeClass('active_school');
            $(".school_image").hide();

            var school_name = $(this).find("p.school_name").html();
            var school_site = $(this).find("p.school_site").html();
            var school_phone = $(this).find("p.school_phone").html();

            $(".school_info_name").empty();
            $(".school_info_site").empty();
            $(".school_info_phone").empty();

            $(".school_info_name").append(school_name).hide().fadeIn(800);
            $(".school_info_site").append(school_site).hide().fadeIn(800);
            $(".school_info_phone").append(school_phone).hide().fadeIn(800);
            $(".school_image").fadeIn(800)

            $(this).addClass('active_school');
            var schoolData = $(this).data('school');
            $('.schools_map svg path').each(function () {
                $(this).removeClass('active');
                var svgData = $(this).data('sregion');
                if (schoolData == svgData) {
                    $(this).addClass('active');
                }
            });
        });
        // active menu
        $('.filter-column').on('click', function () {
            $('.filter-column').removeClass('current_region');
            $('.category_name').removeClass('active_school_filter');
            $(this).addClass('current_region');
        });

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


    })(jQuery)
</script>