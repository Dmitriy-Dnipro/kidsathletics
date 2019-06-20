<?php get_header(); ?>

<?php 
    $url_img = get_the_post_thumbnail_url();
?>

<style>
    .single_page__banner {
        background-image: url("<?php echo $url_img;?>");
    }
</style>



<section class="page_banner single_page__banner">
    <div class="container">
        <!-- <h2>
            <?php the_title();?>
        </h2> -->
    </div>
    <div class="home_banner__line">
        <div class="banner_line red"></div>
        <div class="banner_line blue"></div>
        <div class="banner_line green"></div>
        <div class="banner_line yellow"></div>
    </div>
</section>

<section class="single_page">
    <div class="container">
        <div class="event_breadcrumbs">
                <?php the_breadcrumb(); ?>
            </div>

            <?php 
                $results_school = get_field("results_school", $post_id);
                $results_site = get_field("results_site", $post_id);
                $results_phone = get_field("results_phone", $post_id);
            ?>

            <div class="single_page__row">
                <div class="single_page__content">
                    <h3 class="singe_page__title"><?php the_title();?></h3>
                    <?php if($results_school){?>
                        <p class="result_page__school"><?php echo $results_school;?></p>
                    <?}?>
                    <?php if($results_site){?>
                        <p class="result_page_site">Сайт: <a href="http://<?php echo $results_site;?>"><?php echo $results_site;?></a></p>
                    <?}?>
                    <?php if($results_phone){?>
                        <p class="result_page__phone">Тел.: <a href="tel:<?php echo $results_phone;?>"><?php echo $results_phone;?></a></p>
                    <?}?>

                    <div class="single_page__img">
                        <img src="<?php echo the_post_thumbnail_url();?>">
                    </div>
                    <div class="single_page__text">
                        <?php the_content();?>
                    </div>
                    <div class="results_page__download">
                        <?php 
                            $result_file = get_field("results_file", $post_id);
                        ?>
                        <p>Завантажити результат конкурса: <a href="<?php echo $result_file['url']; ?>" download><img src="<?php echo get_template_directory_uri();?>/images/page_document/download.png" alt="download"></a></p>
                    </div>
                </div>
                <div class="single_page__sidebar results_page">

                    <div class="single_sidebar__moreNews">
                        <h3>Iнші результати</h3> 
                    <div class="more_news__slider">
            
                        <?php
                            $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'category_name' => 'results',
                                    'order' => 'ASC'
                                                        );
                            $result_posts = get_posts($args);

                            foreach($result_posts as $result){
                                $result_school = get_field("results_school", $result->ID);
                                $result_site = get_field("results_site", $result->ID);
                                $result_phone = get_field("results_phone", $result->ID);
    
                            ?>
                            <div class="more_news__item">
                                <div class="news_item__img">
                                    <img src="<?php echo get_the_post_thumbnail_url($result->ID);?>">
                                </div>
                                <div class="news_item__title">
                                    <h4><?php echo $result->post_title;?></h4>
                                </div>
                                <div class="results_page__box">
                                    <?php if($result_school){?>
                                        <p class="result_page__school"><?php echo $result_school;?></p>
                                    <?}?>
                                    <?php if($result_site){?>
                                        <p class="result_page_site">Сайт: <a href="http://<?php echo $result_site;?>"><?php echo $result_site;?></a></p>
                                    <?}?>
                                    <?php if($result_phone){?>
                                        <p class="result_page__phone">Тел.: <a href="tel:<?php echo $result_phone;?>"><?php echo $result_phone;?></a></p>
                                    <?}?>
                                </div>
                                <div class="news_item__link">
                                    <a href="<?php echo get_the_permalink($result->ID);?>">читати більше</a>
                                </div>
                            </div>
                       <?}?>

                    </div>

                    </div>
                </div>
            </div>
    </div>
</section>

<?php get_footer();?>