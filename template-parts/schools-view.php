<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
    $catChild = htmlspecialchars(trim($_POST['cat']));
    $parent = htmlspecialchars(trim($_POST['parent']))
?>


<?php 

    if($catChild == '' && $parent != 48){?>
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
                <p class="school_region">Школи дн-ської області</p>
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
<?}else if($parent == 48){?>
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
                <p class="school_region">Школи дн-ської області</p>
                <p class="school_city"></p>
            </div>
            <div class="school_slider">
                <?php
                  $pages = get_posts(array(
                    'post_type' => 'schools',
                    'numberposts' => -1,
                    'tax_query' => array(
                     array(
                     'taxonomy' => 'schools-category',
                     'field' => 'id',
                      'terms' => $parent, 
                    )
                    )
                    ));
                        

                foreach ($pages as $val) {
                  $school_adress = get_field("school_adress", $val->ID);
                  $school_site = get_field("school_site", $val->ID);
                  $school_mail = get_field("school_mail", $val->ID);
                  $school_phone = get_field("school_phone", $val->ID);
                ?>
                <div class="school_item" data-school="<?php the_field("school_region", $val->ID);?>">
                    <p class="school_name">
                        <?php echo $val->post_title;?>
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
<?}else{?>
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
                <p class="school_region">Школи дн-ської області</p>
                <p class="school_city"></p>
            </div>
            <div class="school_slider">
                <?php
                  $pages = get_posts(array(
                    'post_type' => 'schools',
                    'numberposts' => -1,
                    'tax_query' => array(
                     array(
                     'taxonomy' => 'schools-category',
                     'field' => 'id',
                      'terms' => $catChild, 
                    )
                    )
                    ));
                        

                foreach ($pages as $val) {
                  $school_adress = get_field("school_adress", $val->ID);
                  $school_site = get_field("school_site", $val->ID);
                  $school_mail = get_field("school_mail", $val->ID);
                  $school_phone = get_field("school_phone", $val->ID);
                ?>
                <div class="school_item" data-school="<?php the_field("school_region", $val->ID);?>">
                    <p class="school_name">
                        <?php echo $val->post_title;?>
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

<?}?>

<script type="text/javascript">
    (function ($) {
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

        $('.filter-column').on('click', function () {
            $('.filter-column').removeClass('current_region');
            $(this).addClass('current_region');
        });

        $('.category_name').on("click", function() {
                $('.filter-column').removeClass('current_region');
        });

    })(jQuery)
</script>