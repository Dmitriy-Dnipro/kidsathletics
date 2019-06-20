<?php get_header();
    $lang = pll_current_language();
?>

<style>
    .gallery_page__banner {
        background-image: url("<?php echo get_template_directory_uri();?>/images/page_about/glav_1_small.jpg");
        background-position-y: 32%;
    }
</style>

<section class="page_banner gallery_page__banner">
    <div class="container">
        <h2>
            <?php 
                single_term_title();
            ?>
        </h2>
    </div>
    <div class="home_banner__line">
        <div class="banner_line red"></div>
        <div class="banner_line blue"></div>
        <div class="banner_line green"></div>
        <div class="banner_line yellow"></div>
    </div>
</section>

<section class="gallery_page">
    <div class="container">
        <div class="event_breadcrumbs">
            <?php the_breadcrumb(); ?>
        </div>
        <h3 class="title">
        <?php 

             if($lang == 'uk'){
                echo 'Відеозвіт ФЛАДнО';

              }else{
                  echo '123';
              }
            ?>

        </h3>
        <div class="line_box">
            <div class="line red"></div>
            <div class="line blue"></div>
            <div class="line green"></div>
            <div class="line yellow"></div>
        </div>

        <div class="yotube_video__box">

        <?php 
            $galleryVideo = array('post_type' => 'gallery', 'numberposts' => -1, 'order' => 'DESC', 'tax_query' => array(
                array(
                    'taxonomy' => 'gallery-category',
                    'field' => 'id', 
                    'terms' =>  8
                )));
                $postVideo = get_posts($galleryVideo);
                foreach($postVideo as $video){?>

                <div class="video_box__item">
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

        <div class="show_more_gallery"><a>Показати бiльше</a></div>

        <div class="gallery_social">
            <h4>Більше відео можете переглянути у наших соцмережах</h4>
            <div class="gallery_social__link">
                <a href="#"><svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <radialGradient id="rg" r="150%" cx="30%" cy="107%">
                            <stop stop-color="#fdf497" offset="0" />
                            <stop stop-color="#fdf497" offset="0.05" />
                            <stop stop-color="#fd5949" offset="0.45" />
                            <stop stop-color="#d6249f" offset="0.6" />
                            <stop stop-color="#285AEB" offset="0.9" />
                        </radialGradient>
                        <path d="M36.4 13H15.6C14.17 13 13 14.17 13 15.6V36.4C13 37.83 14.17 39 15.6 39H36.4C37.83 39 39 37.83 39 36.4V15.6C39 14.17 37.83 13 36.4 13ZM26 20.8C28.86 20.8 31.2 23.14 31.2 26C31.2 28.86 28.86 31.2 26 31.2C23.14 31.2 20.8 28.86 20.8 26C20.8 23.14 23.14 20.8 26 20.8ZM16.25 36.4C15.86 36.4 15.6 36.14 15.6 35.75V24.7H18.33C18.2 25.09 18.2 25.61 18.2 26C18.2 30.29 21.71 33.8 26 33.8C30.29 33.8 33.8 30.29 33.8 26C33.8 25.61 33.8 25.09 33.67 24.7H36.4V35.75C36.4 36.14 36.14 36.4 35.75 36.4H16.25ZM36.4 18.85C36.4 19.24 36.14 19.5 35.75 19.5H33.15C32.76 19.5 32.5 19.24 32.5 18.85V16.25C32.5 15.86 32.76 15.6 33.15 15.6H35.75C36.14 15.6 36.4 15.86 36.4 16.25V18.85Z"
                            fill="#1C1C1C"></path>
                        <rect x="1.5" y="1.5" width="48" height="48" rx="8.5" stroke="#1C1C1C" stroke-width="3"></rect>
                    </svg></a>
                <a href="#"><svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.5105 13.0054L28.3923 13C24.8893 13 22.6254 15.5115 22.6254 19.3986V22.3488H19.4903C19.2194 22.3488 19 22.5863 19 22.8793V27.1537C19 27.4466 19.2196 27.6839 19.4903 27.6839H22.6254V38.4699C22.6254 38.7627 22.8448 39 23.1157 39H27.2061C27.4771 39 27.6964 38.7625 27.6964 38.4699V27.6839H31.3621C31.633 27.6839 31.8524 27.4466 31.8524 27.1537L31.8539 22.8793C31.8539 22.7386 31.8021 22.6039 31.7103 22.5044C31.6185 22.4048 31.4934 22.3488 31.3634 22.3488H27.6964V19.8479C27.6964 18.6459 27.9613 18.0357 29.4095 18.0357L31.51 18.0348C31.7806 18.0348 32 17.7974 32 17.5047V13.5356C32 13.2432 31.7809 13.006 31.5105 13.0054Z"
                            fill="#1C1C1C"></path>
                        <rect x="1.5" y="1.5" width="48" height="48" rx="8.5" stroke="#1C1C1C" stroke-width="3"></rect>
                    </svg>
                </a>
                <a href="#"><svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38.1721 26.4685C38.0368 25.8538 37.737 25.3382 37.2736 24.9217C36.8099 24.5052 36.2761 24.2603 35.6718 24.1874C33.7552 23.9791 30.8647 23.875 26.9998 23.875C23.1351 23.875 20.2497 23.9791 18.3434 24.1874C17.729 24.2603 17.1925 24.5052 16.734 24.9217C16.2756 25.3384 15.9735 25.854 15.8276 26.4685C15.5568 27.6771 15.4214 29.4999 15.4214 31.9375C15.4214 34.4166 15.5568 36.2396 15.8276 37.4064C15.9632 38.0207 16.2628 38.5367 16.7263 38.953C17.1898 39.3697 17.7237 39.6093 18.3278 39.6718C20.2447 39.8906 23.1354 40 26.9999 40C30.8642 40 33.7555 39.8906 35.6717 39.6718C36.276 39.6093 36.8071 39.3697 37.2657 38.953C37.7241 38.5367 38.0262 38.0207 38.1719 37.4064C38.4427 36.1978 38.5783 34.375 38.5783 31.9375C38.5783 29.4583 38.4427 27.6353 38.1721 26.4685ZM22.0314 28.047H20.3595V36.9374H18.7971V28.047H17.1564V26.5783H22.0314V28.047H22.0314ZM26.25 36.9374H24.8594V36.0935C24.2969 36.7291 23.7655 37.0468 23.2655 37.0468C22.7864 37.0468 22.4842 36.8539 22.3594 36.4686C22.2762 36.2186 22.2343 35.8382 22.2343 35.3279V29.2186H23.6249V34.9061C23.6249 35.2393 23.6302 35.4217 23.6407 35.453C23.6719 35.6718 23.7812 35.7811 23.9688 35.7811C24.25 35.7811 24.5471 35.5623 24.8595 35.1249V29.2186H26.2501V36.9374H26.25ZM31.5626 34.6248C31.5626 35.3852 31.5158 35.9064 31.4225 36.1877C31.2449 36.7603 30.8754 37.0468 30.313 37.0468C29.8129 37.0468 29.3287 36.7603 28.8596 36.1877V36.9376H27.4692V26.5783H28.8596V29.9689C29.3078 29.4067 29.792 29.1254 30.313 29.1254C30.8754 29.1254 31.2449 29.4171 31.4225 30.0004C31.5157 30.2711 31.5626 30.7867 31.5626 31.5472V34.6248ZM36.8439 33.3438H34.0471V34.7031C34.0471 35.4219 34.2865 35.7811 34.7657 35.7811C35.1093 35.7811 35.3179 35.5938 35.3907 35.2185C35.4113 35.1144 35.4219 34.7968 35.4219 34.2656H36.8438V34.4686C36.8438 34.9792 36.8331 35.2811 36.8125 35.3751C36.7815 35.656 36.6724 35.9373 36.4844 36.2186C36.1094 36.7707 35.5464 37.0468 34.7966 37.0468C34.0782 37.0468 33.5156 36.7811 33.1092 36.2501C32.8072 35.8646 32.6563 35.2604 32.6563 34.4375V31.7342C32.6563 30.9113 32.802 30.3071 33.0934 29.9217C33.4999 29.3905 34.0572 29.1249 34.7657 29.1249C35.4638 29.1249 36.0162 29.3905 36.4219 29.9217C36.7036 30.3071 36.8439 30.9113 36.8439 31.7342V33.3438Z"
                            fill="#1C1C1C"></path>
                        <path d="M29.5623 30.3906C29.3226 30.3906 29.0885 30.5056 28.8593 30.7345V35.4374C29.0885 35.6665 29.3226 35.781 29.5623 35.781C29.9684 35.781 30.172 35.4323 30.172 34.7341V31.4376C30.1719 30.7395 29.9688 30.3906 29.5623 30.3906Z"
                            fill="#1C1C1C"></path>
                        <path d="M34.7502 30.3906C34.2815 30.3906 34.0471 30.745 34.0471 31.4529V32.1717H35.4532V31.4529C35.4532 30.7446 35.2188 30.3906 34.7502 30.3906Z"
                            fill="#1C1C1C"></path>
                        <path d="M21.1255 18.2344V22.4689H22.6879V18.2344L24.5782 12H22.9845L21.9223 16.1094L20.8128 12H19.1566C19.4483 12.8751 19.7869 13.849 20.1723 14.9219C20.6619 16.3594 20.9795 17.4637 21.1255 18.2344Z"
                            fill="#1C1C1C"></path>
                        <path d="M26.672 22.5783C27.3908 22.5783 27.9427 22.3127 28.3281 21.7815C28.6199 21.396 28.7656 20.7814 28.7656 19.9377V17.2032C28.7656 16.37 28.6196 15.7605 28.3281 15.375C27.9427 14.8438 27.3908 14.5781 26.672 14.5781C25.9739 14.5781 25.4269 14.8438 25.0313 15.375C24.7397 15.7605 24.5939 16.37 24.5939 17.2032V19.9377C24.5939 20.7709 24.7396 21.3856 25.0313 21.7814C25.4271 22.3127 25.9738 22.5783 26.672 22.5783ZM26 16.9219C26 16.2031 26.224 15.8438 26.672 15.8438C27.12 15.8438 27.3438 16.2031 27.3438 16.9219V20.2031C27.3438 20.9325 27.12 21.2968 26.672 21.2968C26.224 21.2968 26 20.9323 26 20.2031V16.9219Z"
                            fill="#1C1C1C"></path>
                        <path d="M30.9684 22.5783C31.4896 22.5783 32.0262 22.2553 32.5781 21.6093V22.4687H34V14.6719H32.5781V20.625C32.2655 21.073 31.9689 21.2967 31.6872 21.2967C31.4996 21.2967 31.3902 21.1822 31.3591 20.953C31.3486 20.9322 31.3434 20.7497 31.3434 20.4061V14.6719H29.9215V20.8283C29.9215 21.3594 29.9635 21.7499 30.0466 22C30.1822 22.3855 30.4894 22.5783 30.9684 22.5783Z"
                            fill="#1C1C1C"></path>
                        <rect x="1.5" y="1.5" width="48" height="48" rx="8.5" stroke="#1C1C1C" stroke-width="3"></rect>
                    </svg></a>
            </div>
        </div>
    </div>
</section>


<script>
    (function ($) {
        /*show more gallery*/
        function loadGallery(count) {
            var galleryItems = $('.video_box__item');
            galleryItems.filter(':hidden').slice(0, count).fadeIn().css('display', 'block');
            var visibleGallery = galleryItems.filter(':visible').length;
            if (galleryItems.length === visibleGallery) {
                $('.show_more_gallery').hide();
            
            }
        }

            $('.show_more_gallery').on('click', function (e) {
                e.preventDefault();
                loadGallery(2);
            });

            loadGallery(6);
        /*end*/

    })(jQuery)
</script>

<?php get_footer();?>