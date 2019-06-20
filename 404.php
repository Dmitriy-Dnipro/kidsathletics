<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Children-athletics
 */

get_header();
?>

<section class="page_404">
	<div class="container">
		<div class="page_404__error">
			<p>404</p>
			<p>ой.. схоже щось пішло не так ;(</p>
			<p>Нажаль ми не можемо відобразити сторінку яку ви шукаете або її не існує. оновіть сторінку або спробуйте пізніше</p>
			<img src="<?php echo get_template_directory_uri();?>/images/404/people.png" alt="404">
			<div class="page_404_back__home">
				<a href="<?php echo home_url();?>">на головну</a>
			</div>
		</div>
		<div class="gellery_line__block">
            <div class="gellery_line red"></div>
            <div class="gellery_line blue"></div>
            <div class="gellery_line green"></div>
            <div class="gellery_line yellow"></div>
        </div>
		<div class="page_404__map">
			<h3 class="title map_title">Знайти нас на карті</h3>
				<?php the_field("contacts_google_map", 17);?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
