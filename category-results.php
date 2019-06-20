<?php get_header(); ?>

<style>
    .category_page__banner {
        background-image: url("<?php echo get_template_directory_uri();?>/images/page_contacts/banner_photo.jpg");
    }
</style>

<section class="page_banner category_page__banner">
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

<section class="category_page">
    <div class="container">
        <div class="event_breadcrumbs">
            <?php the_breadcrumb(); ?>
        </div>

        <div class="category_page__posts results_category">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'results',
                    'paged'	         => $paged
                );
                $catalog = new WP_Query( $args );
            

                if ( $catalog->have_posts() ) :
                    while ( $catalog->have_posts() ) : $catalog->the_post(); 
                        $post_id = get_the_ID();
            ?>

            <div class="category_page__post">
                <div class="category_post__img">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="category_post__descrption">
                    <div class="post_title">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                    </div>
                    <div class="results_category__box">
                        <p class="result_category__school"><?php the_field("results_school", $post_id);?></p>
                        <p class="result_category_site">Сайт: <a href="http://<?php the_field("results_site", $post_id);?>"><?php the_field("results_site", $post_id);?></a></p>
                        <p class="result_category__phone">Тел.: <a href="tel:<?php the_field("results_phone", $post_id);?>"><?php the_field("results_phone", $post_id);?></a></p>
                    </div>
                    
                    <div class="post_btn_more"><a href="<?php the_permalink(); ?>">читати більше</a></div> 
                </div>
            </div>
            <?php endwhile;
            endif; 
            
            ?>

        </div>

    </div>
</section>

<!-- Pagination -->
<div class="page_nav_category">
    <div class="container">
        <?php
    if (  $catalog->max_num_pages > 1 ){
    $GLOBALS['wp_query']->max_num_pages = $catalog->max_num_pages;
    if(!get_previous_posts_link()) {
        echo '<div class="prev_pagination"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95263 8.46159 1.31946 8.07107 0.928936C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM49 7L1 7L1 9L49 9L49 7Z" fill="#168CF8"/></svg></div>' ;
        } else {
        previous_posts_link('<div class="prev_pagination"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95263 8.46159 1.31946 8.07107 0.928936C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM49 7L1 7L1 9L49 9L49 7Z" fill="#168CF8"/></svg></div>');
        }
	the_posts_pagination(array(
		'type'=>'inline',
        'screen_reader_text' => __( ' ' ),
 		'end_size'     => 1,
        'mid_size'     => 1,
        'prev_text' => ' ',
        'next_text' => ' ',
		'add_args'     => false
    ));
    if(!get_next_posts_link()) {
        echo '<div class="next_pagination"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M48.7071 7.2929C49.0976 7.68342 49.0976 8.31659 48.7071 8.70711L42.3431 15.0711C41.9526 15.4616 41.3195 15.4616 40.9289 15.0711C40.5384 14.6805 40.5384 14.0474 40.9289 13.6569L46.5858 8L40.9289 2.34315C40.5384 1.95263 40.5384 1.31946 40.9289 0.928936C41.3195 0.538411 41.9526 0.538411 42.3431 0.928936L48.7071 7.2929ZM8.74228e-08 7L48 7L48 9L-8.74228e-08 9L8.74228e-08 7Z" fill="#168CF8"/></svg></div>';
        } else {
        next_posts_link('<div class="next_pagination"><svg width="49" height="16" viewBox="0 0 49 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M48.7071 7.2929C49.0976 7.68342 49.0976 8.31659 48.7071 8.70711L42.3431 15.0711C41.9526 15.4616 41.3195 15.4616 40.9289 15.0711C40.5384 14.6805 40.5384 14.0474 40.9289 13.6569L46.5858 8L40.9289 2.34315C40.5384 1.95263 40.5384 1.31946 40.9289 0.928936C41.3195 0.538411 41.9526 0.538411 42.3431 0.928936L48.7071 7.2929ZM8.74228e-08 7L48 7L48 9L-8.74228e-08 9L8.74228e-08 7Z" fill="#168CF8"/></svg></div>');
        }
    }
    ?>
    </div>
</div>
<?php  wp_reset_postdata(); ?>
<!-- End Pagination -->


<!-- ajax load posts -->
<?php if (  $catalog->max_num_pages > 1 ) : ?>
<script>
    var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
    var true_posts = '<?php echo serialize($catalog->query_vars); ?>';
    var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
    var max_pages = '<?php echo $catalog->max_num_pages; ?>';
</script>
<div class="show_more_events hide_posts_page">Показати більше</div>
<?php endif; ?>
<!-- end ajax load posts -->

<?php get_footer();?>