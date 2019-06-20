<?php 
/*Template Name: страница О нас*/
get_header();
?>

<style>
    .about_page__banner {
        background-image: url("<?php echo get_template_directory_uri();?>/images/page_about/glav_1_small.jpg");
        background-position-y: 32%;
    }
</style>

<section class="page_banner about_page__banner">
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

<section class="about_page">
    <div class="container">
        <div class="event_breadcrumbs">
            <?php the_breadcrumb(); ?>
        </div>
        <h3 class="title title_page__about"><?php the_field("about_title", $post_id);?></h3>
        <div class="line_box">
            <div class="line red"></div>
            <div class="line blue"></div>
            <div class="line green"></div>
            <div class="line yellow"></div>
        </div>

        <div class="about_description">
            <p><?php the_field("about_descr_1", $post_id); ?></p>
            <p><?php the_field("about_descr_2", $post_id);?></p>
        </div>
        <div class="about_list__box">
            <h5><?php the_field("about_sub_title", $post_id);?></h5>
            <ul>
                <li><?php the_field("about_list_1", $post_id);?></li>
                <li><?php the_field("about_list_2", $post_id);?></li>
                <li><?php the_field("about_list_3", $post_id);?></li>
                <li><?php the_field("about_list_4", $post_id);?></li>
            </ul>
        </div>
    </div>
</section>

<section class="about_team">
    <div class="container">
        <h3 class="title title_page__about"><?php the_field("about_team", $post_id);?></h3>
        <div class="line_box">
            <div class="line red"></div>
            <div class="line blue"></div>
            <div class="line green"></div>
            <div class="line yellow"></div>
        </div>
        <div class="about_team__slider">
            <?php 
                $team_list = get_field("about_team_cart", $post_id);
                foreach($team_list as $list){?>
                <div class="about_team__slide">
                    <div class="team_slide__content">
                        <div class="team_slide__img">
                            <div class="team_slide__overlay"></div>
                            <img src="<?php echo $list['about_team_cart_photo']['url'];?>" alt="<?php echo $list['about_team_cart_photo']['url'];?>">
                        </div>
                        <div class="team_slide__text">
                            <img src="<?php echo get_template_directory_uri();?>/images/page_about/slider/frame.png" alt="frame">
                            <h5><?php echo $list['about_team_cart_name'];?></h5>
                            <p><?php echo $list['about_team_cart_position'];?></p>
                        </div>
                    </div>
                </div>
            <?}?>

        </div>
    </div>
</section>

<?php get_footer();?>