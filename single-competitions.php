<?php 
    get_header();
?>

<?php 
    $competition_single__banner = get_field("single_competition_banner", $post_id);
    $lang = pll_current_language();
?>

<style>
    .competition_single__banner {
        background-image: url("<?php echo $competition_single__banner['url'];?>");
    }
</style>

<section class="page_banner competition_single__banner">
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

<section class="competition_single__page competition_page">
    <div class="container">
        <div class="event_breadcrumbs">
            <?php the_breadcrumb(); ?>
        </div>
        <h3 class="title">
            <?php 
        if($lang == 'uk'){
          the_field("single_competition_text", $post_id);
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
        <div class="competition_single__text">
            <div class="competition_single__date">
                <p class="start">Cтарт:
                    <?php the_field("single_competition_date_start", $cart->ID);?>
                </p>
                <p class="end">Кінець:
                    <?php the_field("single_competition_date_end", $cart->ID);?>
                </p>
            </div>
            <p>
                <?php the_field("single_competition_descr", $post_id);?>
            </p>
        </div>
    </div>
</section>

<section class="competition_single__conditions">
    <h3 class="title">
        <?php 
            if($lang == 'uk'){
              the_field("single_competition_work_title", $post_id);
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
    <div class="conditions_steps">
        <div class="container">
            <div class="condition_steps__box">
                <?php 
                    $single_competition_work = get_field("single_competition_work", $post_id);
                ?>
                <div class="conditions_step_1 condition_step">
                    <ul>
                        <?php
                            for($i = 0; $i < 3; $i++){?>
                        <li><span>
                                <?php echo $i+1;?>.</span>
                            <?php echo $single_competition_work[$i]['single_competition_work_сriterion'];?>
                        </li>
                        <?}?>
                    </ul>
                </div>
                <div class="conditions_step_2 condition_step">
                    <ul>
                        <?php 
                        for($j = 3; $j < 6; $j++ ){?>
                        <li><span>
                                <?php echo $j+1;?>.</span>
                            <?php echo $single_competition_work[$j]['single_competition_work_сriterion'];?>
                        </li>
                        <?}?>
                    </ul>
                </div>
                <div class="conditions_load_more">
                    <svg width="41" height="18" viewBox="0 0 41 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40.5759 1.9696C40.8586 1.74451 41 1.46313 41 1.15362C41 0.844115 40.8586 0.562741 40.5759 0.337643C40.0103 -0.112552 39.0914 -0.112552 38.5259 0.337643L20.5 14.6876L2.47414 0.337645C1.90862 -0.112551 0.989654 -0.112551 0.424137 0.337645C-0.14138 0.78784 -0.14138 1.51941 0.424137 1.9696L19.475 17.1637C20.0405 17.6139 20.9595 17.6139 21.525 17.1637L40.5759 1.9696Z"
                            fill="#168CF8" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="competition_single__form">
    <div class="container">
        <h3 class="title">
            <?php 
                if($lang == 'uk'){
                    echo 'Прийми участь у конкурсі';
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
        <div class="competition_form">
            <?php echo do_shortcode('[contact-form-7 id="831" title="Форма на странице Конкурсов"]');?>
        </div>
        <div class="competition_form__text">
            <p>Більше інформації про конкурс та як прийняти участь можна дізнатися на нашій сторінці у <a href="#">facebook</a></p>
        </div>
    </div>
</section>

<?php 
    get_footer();
?>