<?php
/*Template Name: Главная страница*/

get_header();
?>


<?php 
    $banner_image = get_field("banner_image", $pot_id);
?>
<style>
    .home_banner {
        background-image: url("<?php echo $banner_image['url'];?>");
        position: relative;
    }
    .banner_overlay{
        position: absolute;
        width: 100%;
        height:100%;
        background: linear-gradient(240.86deg, rgba(0, 0, 0, 0.45) 0%, rgba(0, 0, 0, 0) 100%), url("<?php echo $banner_image['url'];?>"), url("<?php echo $banner_image['url'];?>"), #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.07);
        background-repeat: no-repeat;
        background-size:cover;
    }
    .banner_title__box{
        position: relative;
    }
</style>

<section class="home_banner">
    <div class="banner_overlay"></div>
    <div class="container">
        <div class="banner_title__box">
            <h2 class="banner__title">
                <?php echo get_field("banner_title", $post_id);?><br><span>
                <?php echo get_field("banner_subtitle" ,$post_id);?></span><br>
                <span>Здорова дитина - майбутнє країни!</span></h2>
        </div>
        <div class="home_banner__line">
            <div class="banner_line red"></div>
            <div class="banner_line blue"></div>
            <div class="banner_line green"></div>
            <div class="banner_line yellow"></div>
        </div>
</section>

<section class="coming_events bg_events">
    <div class="container">
        <h3 class="title">
            <?php echo get_field("events_title", $post_id);?>
        </h3>
        <div class="line_box">
            <div class="line red"></div>
            <div class="line blue"></div>
            <div class="line green"></div>
            <div class="line yellow"></div>
        </div>

        <p class="coming_events__text">
            <?php echo get_field("events_subtitle" ,$post_id);?>
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
            <a href="<?php echo get_field("events_btn_link", $post_id);?>" class="cocon-regular">
                <?php echo get_field("events_btn_name" ,$post_id);?></a>
        </div>
    </div>

</section>

<section class="gallery_block">
    <div class="container">
        <h3 class="cocon-regular title">
            <?php echo get_field("gallery_title", $post_id);?>
        </h3>
        <div class="line_box">
            <div class="line red"></div>
            <div class="line blue"></div>
            <div class="line green"></div>
            <div class="line yellow"></div>
        </div>
        <p>
            <?php echo get_field("gallery_subtitle", $post_id);?>
        </p>
    </div>
    <div class="gallery_block__tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="image-tab" data-toggle="tab" href="#gallery_image" role="tab"
                    aria-controls="home" aria-selected="true"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M11.1147 8.07071L11.1147 8.0708L10.8872 9.04135C4.53695 10.2406 0.720185 12.2246 0.531479 12.3279C0.130069 12.5382 -0.125 12.9578 -0.125 13.4141V26.4549C-0.125 31.7484 4.17941 36.0611 9.48124 36.0611C10.1654 36.0611 10.7135 35.513 10.7135 34.8289C10.7135 34.1447 10.1654 33.5966 9.48124 33.5966C5.54772 33.5966 2.33948 30.3964 2.33948 26.4549V14.1917C3.71344 13.5703 7.17764 12.1744 12.1188 11.3228C12.6034 11.2404 12.9954 10.8664 13.1051 10.3913C13.1052 10.3913 13.1052 10.3912 13.1052 10.3911L13.5151 8.62832C13.5152 8.62828 13.5152 8.62824 13.5152 8.6282C13.9121 6.94541 15.3876 5.76379 17.1253 5.76379H22.8747C24.6045 5.76379 26.0879 6.93757 26.4848 8.62799C26.4848 8.62806 26.4848 8.62813 26.4848 8.6282L26.8947 10.3906C26.8947 10.3908 26.8948 10.391 26.8948 10.3912C27.0047 10.8756 27.3977 11.2407 27.8815 11.3228L27.9024 11.1996L27.8811 11.3228C32.8064 12.1744 36.2784 13.5704 37.6605 14.1919V26.4549C37.6605 30.3884 34.4603 33.5966 30.5188 33.5966C29.8346 33.5966 29.2865 34.1447 29.2865 34.8289C29.2865 35.513 29.8346 36.0611 30.5188 36.0611C35.8122 36.0611 40.125 31.7567 40.125 26.4549V13.4141C40.125 12.9594 39.8794 12.5387 39.468 12.3276C39.2731 12.2212 35.4575 10.2477 29.1128 9.04145L28.8853 8.07098C28.2324 5.26688 25.7625 3.29932 22.8747 3.29932H17.1253C14.2457 3.29932 11.7759 5.25864 11.1147 8.07071Z"
                                stroke="#BFD7D3" stroke-width="0.25" />
                            <path d="M7.06585 6.82133L7.06552 6.82141C5.75841 7.13379 4.46752 7.49556 3.23387 7.89855C2.58471 8.10893 2.23856 8.81195 2.44845 9.45073L2.44842 9.45074L2.44925 9.4531C2.63087 9.9707 3.11286 10.2995 3.62523 10.2995C3.75179 10.2995 3.88061 10.2814 4.01032 10.2353C5.17086 9.85121 6.38888 9.50789 7.63163 9.21354C8.29881 9.05806 8.69989 8.39108 8.54494 7.73454C8.38942 7.06737 7.7224 6.66631 7.06585 6.82133Z"
                                stroke="#BFD7D3" stroke-width="0.25" />
                            <path d="M20.0041 10.9517C12.9061 10.9517 7.13354 16.7243 7.13354 23.8222C7.13354 30.92 12.906 36.7009 20.0041 36.7009C27.102 36.7009 32.8746 30.9283 32.8746 23.8304C32.8746 16.7326 27.1021 10.9517 20.0041 10.9517ZM20.0041 34.2365C14.2663 34.2365 9.59802 29.5682 9.59802 23.8304C9.59802 18.0925 14.2664 13.4161 20.0041 13.4161C25.7419 13.4161 30.4101 18.0844 30.4101 23.8222C30.4101 29.5601 25.7418 34.2365 20.0041 34.2365Z"
                                stroke="#BFD7D3" stroke-width="0.25" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="40" height="40" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>Фото</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="video-tab" data-toggle="tab" href="#gallery_video" role="tab" aria-controls="profile"
                    aria-selected="false"><svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.2728 16.816L16.0051 11.533C15.7384 11.3396 15.3844 11.3105 15.092 11.4608C14.7974 11.6098 14.6133 11.9127 14.6133 12.2399V22.8025C14.6133 23.1333 14.7974 23.4349 15.092 23.584C15.2167 23.6469 15.3529 23.6783 15.4904 23.6783C15.6697 23.6783 15.8514 23.6213 16.0051 23.5083L23.2728 18.2299C23.5022 18.061 23.6362 17.8002 23.6362 17.523C23.6373 17.2411 23.4999 16.9814 23.2728 16.816Z" />
                        <path d="M17.5006 0.00195312C7.83368 0.00195312 0 7.83563 0 17.5025C0 27.1659 7.83368 34.9973 17.5006 34.9973C27.1652 34.9973 35 27.1648 35 17.5025C35.0012 7.83563 27.1652 0.00195312 17.5006 0.00195312ZM17.5006 32.0774C9.45027 32.0774 2.92336 25.554 2.92336 17.5025C2.92336 9.45455 9.45027 2.92299 17.5006 2.92299C25.5497 2.92299 32.0755 9.45338 32.0755 17.5025C32.0766 25.554 25.5497 32.0774 17.5006 32.0774Z" />
                    </svg>
                    Вiдео</a>
            </li>

        </ul>
        <div class="galleryTab_content">
            <div class="container">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="gallery_image" role="tabpanel" aria-labelledby="image-tab">
                        <div class="row">

                            <?
                            $galleryArray = array( 'post_type' => 'gallery', 'numberposts' => 6, 'order' => 'DESC', 'tax_query' => array(
                                array(
                                    'taxonomy' => 'gallery-category',
                                    'field' => 'id', 
                                    'terms' =>  9
                                )));
                            $galleryImage = get_posts( $galleryArray );
                           
                            foreach ($galleryImage  as  $gallery) {
                                $galleryPhoto = get_field("gallery_images", $gallery->ID);
                                $count = (count($galleryPhoto));
                            ?>

                            <div class="col-md-4">
                                <div class="gallery_item">
                                    <a href="<?php the_permalink($gallery->ID);?>">
                                        <div class="gallery_item__image">
                                            <div class="gallery_item_photo">
                                                <?php echo get_the_post_thumbnail( $gallery->ID, 'large'); ?>
                                            </div>
                                            <div class="gallery_item__text">
                                                <p>
                                                    <?php echo $gallery->post_title;?>
                                                </p>
                                            </div>
                                            <div class="gallery_itema_hover">
                                            <p><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0)">
                                                        <path d="M11.1147 8.07071L11.1147 8.0708L10.8872 9.04135C4.53695 10.2406 0.720185 12.2246 0.531479 12.3279C0.130069 12.5382 -0.125 12.9578 -0.125 13.4141V26.4549C-0.125 31.7484 4.17941 36.0611 9.48124 36.0611C10.1654 36.0611 10.7135 35.513 10.7135 34.8289C10.7135 34.1447 10.1654 33.5966 9.48124 33.5966C5.54772 33.5966 2.33948 30.3964 2.33948 26.4549V14.1917C3.71344 13.5703 7.17764 12.1744 12.1188 11.3228C12.6034 11.2404 12.9954 10.8664 13.1051 10.3913C13.1052 10.3913 13.1052 10.3912 13.1052 10.3911L13.5151 8.62832C13.5152 8.62828 13.5152 8.62824 13.5152 8.6282C13.9121 6.94541 15.3876 5.76379 17.1253 5.76379H22.8747C24.6045 5.76379 26.0879 6.93757 26.4848 8.62799C26.4848 8.62806 26.4848 8.62813 26.4848 8.6282L26.8947 10.3906C26.8947 10.3908 26.8948 10.391 26.8948 10.3912C27.0047 10.8756 27.3977 11.2407 27.8815 11.3228L27.9024 11.1996L27.8811 11.3228C32.8064 12.1744 36.2784 13.5704 37.6605 14.1919V26.4549C37.6605 30.3884 34.4603 33.5966 30.5188 33.5966C29.8346 33.5966 29.2865 34.1447 29.2865 34.8289C29.2865 35.513 29.8346 36.0611 30.5188 36.0611C35.8122 36.0611 40.125 31.7567 40.125 26.4549V13.4141C40.125 12.9594 39.8794 12.5387 39.468 12.3276C39.2731 12.2212 35.4575 10.2477 29.1128 9.04145L28.8853 8.07098C28.2324 5.26688 25.7625 3.29932 22.8747 3.29932H17.1253C14.2457 3.29932 11.7759 5.25864 11.1147 8.07071Z"
                                                            stroke="#BFD7D3" stroke-width="0.25" />
                                                        <path d="M7.06585 6.82133L7.06552 6.82141C5.75841 7.13379 4.46752 7.49556 3.23387 7.89855C2.58471 8.10893 2.23856 8.81195 2.44845 9.45073L2.44842 9.45074L2.44925 9.4531C2.63087 9.9707 3.11286 10.2995 3.62523 10.2995C3.75179 10.2995 3.88061 10.2814 4.01032 10.2353C5.17086 9.85121 6.38888 9.50789 7.63163 9.21354C8.29881 9.05806 8.69989 8.39108 8.54494 7.73454C8.38942 7.06737 7.7224 6.66631 7.06585 6.82133Z"
                                                            stroke="#BFD7D3" stroke-width="0.25" />
                                                        <path d="M20.0041 10.9517C12.9061 10.9517 7.13354 16.7243 7.13354 23.8222C7.13354 30.92 12.906 36.7009 20.0041 36.7009C27.102 36.7009 32.8746 30.9283 32.8746 23.8304C32.8746 16.7326 27.1021 10.9517 20.0041 10.9517ZM20.0041 34.2365C14.2663 34.2365 9.59802 29.5682 9.59802 23.8304C9.59802 18.0925 14.2664 13.4161 20.0041 13.4161C25.7419 13.4161 30.4101 18.0844 30.4101 23.8222C30.4101 29.5601 25.7418 34.2365 20.0041 34.2365Z"
                                                            stroke="#BFD7D3" stroke-width="0.25" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0">
                                                            <rect width="40" height="40" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <?php echo $count;?> фото</p>
                                        </div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <?}?>
                        </div>
                            <div class="gallery_link">
                                <a href="<?php home_url();?>/gallery-category/foto/" class="cocon-regular">
                                <?php echo get_field("gallery_btn_name", $post_id);?></a>
                            </div> 
                    </div>
                    
                    <div class="tab-pane fade" id="gallery_video" role="tabpanel" aria-labelledby="video-tab">
                    <!-- youtube -->
                    <div class="yotube_video__box main_video_box">
                        <?php 
                            $galleryVideo = array('post_type' => 'gallery', 'numberposts' => 4, 'order' => 'DESC', 'tax_query' => array(
                                array(
                                    'taxonomy' => 'gallery-category',
                                    'field' => 'id', 
                                    'terms' =>  8
                                )));
                                  $postVideo = get_posts($galleryVideo);
                                foreach($postVideo as $video){?>

                                <div class="video_box__item show_video_gallery">
                                    <div class="youtube-video" id="<?php echo get_field("gallery_link_youtube", $video->ID);?>">
                                        <div class="youtube_overlay"></div>
                                </div>
                                    <div class="video_box__item_line"></div>
                                    <div class="video_box__item_title">
                                        <img src="<?php echo get_template_directory_uri();?>/images/logo-video-title.png" alt="logo-video">
                                        <p><?php echo $video->post_title;?></p>
                                    </div>
                                </div>
                            <?}?>
                    </div>
                <!-- end  -->
                    <div class="gallery_link">
                        <a href="<?php home_url();?>/gallery-category/video/" class="cocon-regular">
                        в видеогалерею</a>
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
    </div>

    </div>
    </div>
</section>

<section class="lastNews_block">
    <div class="container">
        <h3 class="cocon-regular title">
            <?php echo get_field("news_title", $post_id);?>
        </h3>
        <div class="line_box">
            <div class="line red"></div>
            <div class="line blue"></div>
            <div class="line green"></div>
            <div class="line yellow"></div>
        </div>

        <p>
            <?php echo get_field("news_subtitle", $post_id);?>
        </p>
    </div>
    <div class="lastNews_slider">

        <?php 
            $postArr = array('numberposts' => 3, 'order' => 'DESC', 'category' => 25);
            $postNews = get_posts( $postArr);
            
            foreach($postNews as $news){
             $newsCount++;
         ?>

        <div class="lastNews_slide">
            <div class="lastNews_slide__item">
                <div class="news_item__number">
                    <h4>0
                        <?php echo $newsCount;?>
                    </h4>
                </div>
                <div class="news_item__text">
                    <h6 class="news_subtitle">
                        <?php echo $news->post_title;?>
                    </h6>

                    <p class="news_date">
                        <?php echo get_the_date("d/m/Y", $news->ID); ?>
                    </p>
                    <div class="news_btn">
                        <a href="<?php the_permalink($news->ID); ?>">детальніше</a>
                    </div>
                </div>
                <div class="news_item__image">
                    <img src="<?php echo get_the_post_thumbnail_url($news->ID);?>">
                </div>
            </div>
            <a href="<?php echo get_field("news_btn_link", $post_id);?>">
                <?php echo get_field("news_btn_name", $post_id);?></a>
        </div>
        <?}?>

    </div>
</section>

<!-- <section class="partners_block">
    <div class="container">
        <h3 class="title">
            <?php echo get_field("partners_title", $post_id);?>
        </h3>
        <div class="line_box">
            <div class="line red"></div>
            <div class="line blue"></div>
            <div class="line green"></div>
            <div class="line yellow"></div>
        </div>
        <div class="partners_block__slider">
            <div class="partners_slider__slide" id="partners_slider">
                <?php $gallery_partners = get_field("gallery_partners", $post_id);?>

                <div class="partners_slide">
                    <div class="slide_item">
                        <?php for($i = 0; $i <= 7; $i++){?>
                        <div class="slide_item__img">
                            <img src="<?php echo $gallery_partners[$i]['url'];?>" alt="<?php echo $gallery_partners[$i]['alt'];?>">
                        </div>
                        <?}?>
                    </div>

                    <div class="slide_itemMobile">
                        <?php for($j = 0; $j <= 5; $j++){?>
                        <div class="slide_itemMobile__img">
                            <img src="<?php echo $gallery_partners[$j]['url'];?>" alt="<?php echo $gallery_partners[$j]['alt'];?>">
                        </div>
                        <?}?>
                    </div>

                </div>
                <?php if(count($gallery_partners) > 8){?>
                <div class="partners_slide">
                    <div class="slide_item">
                        <?php for($i = 8; $i <= 15; $i++){?>

                        <div class="slide_item__img">
                            <img src="<?php echo $gallery_partners[$i]['url'];?>" alt="<?php echo $gallery_partners[$i]['alt'];?>">
                        </div>

                        <?}?>

                    </div>

                    <div class="slide_itemMobile">
                        <?php for($j = 6; $j <= 11; $j++){?>
                        <div class="slide_itemMobile__img">
                            <img src="<?php echo $gallery_partners[$j]['url'];?>" alt="<?php echo $gallery_partners[$j]['alt'];?>">
                        </div>
                        <?}?>
                    </div>
                </div>
                <?}?>
                <?php if(count($gallery_partners) > 16){?>
                <div class="partners_slide">
                    <div class="slide_item">
                        <?php for($i = 16; $i <= 23; $i++){?>
                        <div class="slide_item__img">
                            <img src="<?php echo $gallery_partners[$i]['url'];?>" alt="<?php echo $gallery_partners[$i]['alt'];?>">
                        </div>
                        <?}?>

                    </div>

                    <div class="slide_itemMobile">
                        <?php for($j = 12; $j <= 17; $j++){?>
                        <div class="slide_itemMobile__img">
                            <img src="<?php echo $gallery_partners[$j]['url'];?>" alt="<?php echo $gallery_partners[$j]['alt'];?>">
                        </div>
                        <?}?>
                    </div>

                </div>
             <?}?>

            </div>
        </div>
    </div>
</section> -->

<section class="partners_block">
    <div class="container">
        <h3 class="title">
            <?php echo get_field("partners_title", $post_id);?>
        </h3>
        <div class="line_box">
            <div class="line red"></div>
            <div class="line blue"></div>
            <div class="line green"></div>
            <div class="line yellow"></div>
        </div>

        <?php
            $gallery_partners = get_field("gallery_partners", $post_id);
        ?>
                
             <div class="event_page__slider">
             <?php foreach($gallery_partners as $event_partners){?>
                <div class="event_page_slide">
                    <img src="<?php echo  $event_partners['url']?>" alt="<?php echo $event_partners['alt']?>">
                </div>
                <?}?>
            </div>
        <div class="event_page__nav">
            <?php 
             $count = 0;
            foreach($gallery_partners as $count_nav){
                $count++;
            ?>
            <div class="nav-item">
                <?php if($count < 10){?>
                    0<?php echo $count;?>
                <?}else{
                    echo $count;
                }?>
            </div>
            <?}?>
        </div>
    </div>
</section>


<?php get_footer();?>