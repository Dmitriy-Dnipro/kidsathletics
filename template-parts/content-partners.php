<?php
/*Template Name: Страница партнеров*/
get_header();
?>

<style>
    .partners_page__banner {
        background-image: url("<?php echo get_template_directory_uri();?>/images/page_about/glav_1_small.jpg");
        background-position-y: 32%;
    }
</style>

<section class="page_banner partners_page__banner">
    <div class="container">
        <h2>
            <?php the_title();?>
        </h2>
    </div>
    <div class="home_banner__line">
        <div class="banner_line red"></div>
        <div class="banner_line blue"></div>
        <div class="banner_line green"></div>
        <div class="banner_line yellow"></div>
    </div>
</section>

<section class="partners_page">
    <div class="container">
        <div class="event_breadcrumbs">
            <?php the_breadcrumb(); ?>
        </div>
        <h3 class="title document_page__title">
            <?php the_title();?>
        </h3>
        <div class="line_box">
            <div class="line red"></div>
            <div class="line blue"></div>
            <div class="line green"></div>
            <div class="line yellow"></div>
        </div>

        <div class="partners_slider hide_partners_block">
            <?php 
                $page_partners = get_field("page_partners", $post_id);
                
                if($page_partners){
                    foreach($page_partners as $partners){
                    ?>

            <!-- Первый слайд -->
            <div class="partners_slide">

                <?php if(!empty($partners['page_partners_logo1'])){?>
                <div class="partners_slide__box">
                    <div class="partners_slide_item">
                        <div class="partners_slide__img slide_box__width">
                            <img src="<?php echo $partners['page_partners_logo1']['url'];?>" alt="<?php echo $partners['page_partners_logo1']['alt'];?>">
                        </div>
                        
                        <div class="partners_slide__descr slide_box__width">
                            <p class="slide_descr__title">
                                <?php echo $partners['page_partners_title1'];?>
                            </p>
                            <p class="slide_descr__subtitle">
                                <?php echo $partners['page_partners_status1'];?>
                            </p>
                            <p class="slide_descr">
                                <?php echo $partners['page_partners_descr1'];?>
                            </p>
                            <a href="<?php echo $partners['page_partners_link1'];?>" class="slider_desrc__link">Дізнатись
                                більше ></a>
                        </div>

                        <div class="partners_slide__img slide_box__width">
                            <img src="<?php echo $partners['page_partners_logo2']['url'];?>" alt="<?php echo $partners['page_partners_logo2']['alt'];?>">
                        </div>
                    </div>

                    <div class="partners_slide_item">
                        <div class="partners_slide__descr slide_box__width">
                            <p class="slide_descr__title">
                                <?php echo $partners['page_partners_title3'];?>
                            </p>
                            <p class="slide_descr__subtitle">
                                <?php echo $partners['page_partners_status3'];?>
                            </p>
                            <p class="slide_descr">
                                <?php echo $partners['page_partners_descr3'];?>
                            </p>
                            <a href="<?php echo $partners['page_partners_link3'];?>" class="slider_desrc__link">Дізнатись
                                більше ></a>
                        </div>
                        <div class="partners_slide__img slide_box__width">
                            <img src="<?php echo $partners['page_partners_logo3']['url'];?>" alt="<?php echo $partners['page_partners_logo3']['alt'];?>">
                        </div>
                        <div class="partners_slide__descr slide_box__width">
                            <p class="slide_descr__title">
                                <?php echo $partners['page_partners_title2'];?>
                            </p>
                            <p class="slide_descr__subtitle">
                                <?php echo $partners['page_partners_status2'];?>
                            </p>
                            <p class="slide_descr">
                                <?php echo $partners['page_partners_descr2'];?>
                            </p>
                            <a href="<?php echo $partners['page_partners_link2'];?>" class="slider_desrc__link">Дізнатись
                                більше ></a>
                        </div>
                    </div>
                </div>
                <?}?>

                <?php
                    if(!empty($partners['page_partners_logo4'])){?>
                <div class="partners_slide__box">
                    <div class="partners_slide_item">
                        <div class="partners_slide__img slide_box__width">
                            <img src="<?php echo $partners['page_partners_logo4']['url'];?>" alt="<?php echo $partners['page_partners_logo4']['alt'];?>">
                        </div>
                        <div class="partners_slide__descr slide_box__width">
                            <p class="slide_descr__title">
                                <?php echo $partners['page_partners_title4'];?>
                            </p>
                            <p class="slide_descr__subtitle">
                                <?php echo $partners['page_partners_status4'];?>
                            </p>
                            <p class="slide_descr">
                                <?php echo $partners['page_partners_descr4'];?>
                            </p>
                            <a href="<?php echo $partners['page_partners_link4'];?>" class="slider_desrc__link">Дізнатись
                                більше ></a>
                        </div>
                        <div class="partners_slide__img slide_box__width">
                            <img src="<?php echo $partners['page_partners_logo5']['url'];?>" alt="<?php echo $partners['page_partners_logo5']['alt'];?>">
                        </div>
                    </div>

                    <div class="partners_slide_item">
                        <div class="partners_slide__descr slide_box__width">
                            <p class="slide_descr__title">
                                <?php echo $partners['page_partners_title6'];?>
                            </p>
                            <p class="slide_descr__subtitle">
                                <?php echo $partners['page_partners_status6'];?>
                            </p>
                            <p class="slide_descr">
                                <?php echo $partners['page_partners_descr6'];?>
                            </p>
                            <a href="<?php echo $partners['page_partners_link6'];?>" class="slider_desrc__link">Дізнатись
                                більше ></a>
                        </div>
                        <div class="partners_slide__img slide_box__width">
                            <img src="<?php echo $partners['page_partners_logo6']['url'];?>" alt="<?php echo $partners['page_partners_logo6']['alt'];?>">
                        </div>
                        <div class="partners_slide__descr slide_box__width">
                            <p class="slide_descr__title">
                                <?php echo $partners['page_partners_title5'];?>
                            </p>
                            <p class="slide_descr__subtitle">
                                <?php echo $partners['page_partners_status5'];?>
                            </p>
                            <p class="slide_descr">
                                <?php echo $partners['page_partners_descr5'];?>
                            </p>
                            <a href="<?php echo $partners['page_partners_link5'];?>" class="slider_desrc__link">Дізнатись
                                більше ></a>
                        </div>
                    </div>
                </div>
                <?}?>
            </div>
            <!-- Конец первого слайда -->
            <?}?>
            <?}else{
                echo '';
                }?>
        </div>

        <div class="tablet_partners__slider">
            <?php 
                $page_partner = get_field("page_partners", $post_id);
                foreach($page_partner as $partner){?>

            <div class="tablet_partners__slide">

                <?php if(!empty($partner['page_partners_logo1'])){?>
                <div class="tablet_partners_slide__box">
                    <div class="tablet_box__item1 load_partners_box">
                        <div class="tablet_item__img slide_box__width">
                            <img src="<?php echo $partner['page_partners_logo1']['url'];?>"
                                alt="<?php echo $partner['page_partners_logo1']['alt'];?>">
                        </div>
                        <div class="partners_slide__descr slide_box__width">
                            <p class="slide_descr__title"><?php echo $partner['page_partners_title1'];?></p>
                            <p class="slide_descr__subtitle"><?php echo $partner['page_partners_status1'];?></p>
                            <p class="slide_descr"><?php echo $partner['page_partners_descr1'];?></p>
                            <a href="<?php echo $partner['page_partners_link1'];?>" class="slider_desrc__link">Дізнатись більше ></a>
                        </div>
                    </div>
                    <?}?>

                    <?php if(!empty($partner['page_partners_logo2'])){?>
                    <div class="tablet_box__item2 load_partners_box">
                        <div class="partners_slide__descr slide_box__width">
                            <p class="slide_descr__title"><?php echo $partner['page_partners_title2'];?></p>
                            <p class="slide_descr__subtitle"><?php echo $partner['page_partners_status2'];?></p>
                            <p class="slide_descr"><?php echo $partner['page_partners_descr2'];?></p>
                            <a href="<?php echo $partner['page_partners_link2'];?>" class="slider_desrc__link">Дізнатись більше ></a>
                        </div>
                        <div class="tablet_item__img slide_box__width">
                            <img src="<?php echo $partner['page_partners_logo2']['url'];?>"
                                alt="<?php echo $partner['page_partners_logo2']['alt'];?>">
                        </div>
                    </div>
                </div>
                <?}?>

                <?php if(!empty($partner['page_partners_logo3'])){?>       
                <div class="tablet_partners_slide__box">
                    <div class="tablet_box__item1 load_partners_box">
                        <div class="tablet_item__img slide_box__width">
                            <img src="<?php echo $partner['page_partners_logo3']['url'];?>"
                                alt="<?php echo $partner['page_partners_logo3']['alt'];?>">
                        </div>
                        <div class="partners_slide__descr slide_box__width">
                            <p class="slide_descr__title"><?php echo $partner['page_partners_title3'];?></p>
                            <p class="slide_descr__subtitle"><?php echo $partner['page_partners_status3'];?></p>
                            <p class="slide_descr"><?php echo $partner['page_partners_descr3'];?>.</p>
                            <a href="<?php echo $partner['page_partners_link3'];?>" class="slider_desrc__link">Дізнатись більше ></a>
                        </div>
                    </div>
                    <?}?>

                    <?php if(!empty($partner['page_partners_logo4'])){?> 
                    <div class="tablet_box__item2 load_partners_box">
                        <div class="partners_slide__descr slide_box__width">
                            <p class="slide_descr__title"><?php echo $partner['page_partners_title4'];?></p>
                            <p class="slide_descr__subtitle"><?php echo $partner['page_partners_status4'];?></p>
                            <p class="slide_descr"><?php echo $partner['page_partners_descr4'];?></p>
                            <a href="<?php echo $partner['page_partners_link4'];?>" class="slider_desrc__link">Дізнатись більше ></a>
                        </div>
                        <div class="tablet_item__img slide_box__width">
                            <img src="<?php echo $partner['page_partners_logo4']['url'];?>"
                                alt="<?php echo $partner['page_partners_logo4']['alt'];?>">
                        </div>
                    </div>
                </div>
                <?}?>

                <?php if(!empty($partner['page_partners_logo5'])){?> 
                <div class="tablet_partners_slide__box">
                    <div class="tablet_box__item1 load_partners_box">
                        <div class="tablet_item__img slide_box__width">
                            <img src="<?php echo $partner['page_partners_logo5']['url'];?>"
                                alt="<?php echo $partner['page_partners_logo5']['alt'];?>">
                        </div>
                        <div class="partners_slide__descr slide_box__width">
                            <p class="slide_descr__title"><?php echo $partner['page_partners_title5'];?></p>
                            <p class="slide_descr__subtitle"><?php echo $partner['page_partners_status5'];?></p>
                            <p class="slide_descr"><?php echo $partner['page_partners_descr5'];?></p>
                            <a href="<?php echo $partner['page_partners_link5'];?>" class="slider_desrc__link">Дізнатись більше ></a>
                        </div>
                    </div>
                  <?}?>
                  
                  <?php if(!empty($partner['page_partners_logo6'])){?> 
                    <div class="tablet_box__item2 load_partners_box">
                        <div class="partners_slide__descr slide_box__width">
                            <p class="slide_descr__title"><?php echo $partner['page_partners_title6'];?></p>
                            <p class="slide_descr__subtitle"><?php echo $partner['page_partners_status6'];?></p>
                            <p class="slide_descr"><?php echo $partner['page_partners_descr6'];?></p>
                            <a href="<?php echo $partner['page_partners_link6'];?>" class="slider_desrc__link">Дізнатись більше ></a>
                        </div>
                        <div class="tablet_item__img slide_box__width">
                            <img src="<?php echo $partner['page_partners_logo6']['url'];?>"
                                alt="<?php echo $partner['page_partners_logo6']['alt'];?>">
                        </div>
                    </div>
                    <?}?>
                </div>
            </div>
            <?}?>


            <div class="partners_load_more" style="text-align: center; padding: 50px;">
                <svg width="41" height="18" viewBox="0 0 41 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M40.5759 1.9696C40.8586 1.74451 41 1.46313 41 1.15362C41 0.844115 40.8586 0.562741 40.5759 0.337643C40.0103 -0.112552 39.0914 -0.112552 38.5259 0.337643L20.5 14.6876L2.47414 0.337645C1.90862 -0.112551 0.989654 -0.112551 0.424137 0.337645C-0.14138 0.78784 -0.14138 1.51941 0.424137 1.9696L19.475 17.1637C20.0405 17.6139 20.9595 17.6139 21.525 17.1637L40.5759 1.9696Z"
                        fill="#168CF8" />
                </svg>
            </div>

        </div>
    </div>
</section>

<?php 
    get_footer();
?>