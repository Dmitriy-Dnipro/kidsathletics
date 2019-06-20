<?php
/**
 * Children-athletics functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Children-athletics
 */

if ( ! function_exists( 'children_athletics_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function children_athletics_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Children-athletics, use a find and replace
		 * to change 'children-athletics' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'children-athletics', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_action('init', 'athletics_custom_post_type');
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'children-athletics' ),
			'header' => esc_html__( 'header',  'children-athletics'),
			'header-main' => esc_html__('header-main', 'children-athletics'),
			'footer' => esc_html__('footer', 'children-athletics'),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'children_athletics_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'children_athletics_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function children_athletics_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'children_athletics_content_width', 640 );
}
add_action( 'after_setup_theme', 'children_athletics_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function children_athletics_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'children-athletics' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'children-athletics' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'children_athletics_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function children_athletics_scripts() {
	$template = get_template_directory_uri();
	wp_enqueue_style( 'children-athletics-style', get_stylesheet_uri() );
	wp_enqueue_style('children-athletics-bootstrap', $template . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('children-athletics-slick', $template . '/assets/css/slick.css');
	wp_enqueue_style('children-athletics-slick-theme', $template . '/assets/css/slick-theme.css');
	wp_enqueue_style('children-athletics-reset', $template . '/assets/css/reset.css');
	wp_enqueue_style('children-athletics-ui-css', $template . '/assets/css/jquery-ui.min.css');
	wp_enqueue_style('children-athletics-fancybox-css', $template . '/assets/css/jquery.fancybox.min.css');
	wp_enqueue_style('children-athletics-main-style', $template . '/assets/css/main.css');
	wp_enqueue_script( 'children-athletics-jquery-lib', $template . '/assets/js/jquery-3.3.1.js', array(), '20151215', true );
	wp_enqueue_script( 'children-athletics-bootstrap', $template . '/assets/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'children-athletics-ui', $template . '/assets/js/jquery-ui.min.js', array(), '20151215', true );
	wp_enqueue_script( 'children-athletics-slick', $template . '/assets/js/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'children-athletics-fancybox', $template . '/assets/js/jquery.fancybox.min.js', array(), '20151215', true );
	wp_enqueue_script( 'children-athletics-control', $template . '/assets/js/control.js', array(), '20151215', true );
	wp_enqueue_script( 'children-athletics-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'children-athletics-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'children_athletics_scripts' );

add_filter('show_admin_bar', '__return_false');

/** 
 * Custom post type
 * */ 
 function athletics_custom_post_type(){
	register_post_type('gallery', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Галерея', // основное название для типа записи
			'singular_name'      => 'Галерея', // название для одной записи этого типа
			'add_new'            => 'Добавить новую галерею', // для добавления новой записи
			'add_new_item'       => 'Добавление галереи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование галереи', // для редактирования типа записи
			'new_item'           => 'Новая галерея', // текст новой записи
			'view_item'          => 'Смотреть галерею', // для просмотра записи этого типа.
			'search_items'       => 'Искать галерею', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине

		),
		'public'              => true,
		'show_ui'             => true, // зависит от public
		'menu_position'       => 28,
		'menu_icon'           => 'dashicons-format-gallery', 
		'supports'            => array('title','editor', 'thumbnail'),
		'has_archive'         => true,
	) );

		register_taxonomy('gallery-category', array('gallery'), array(
			'hierarchical'  => true,
			'labels' => array(
			'name'               => 'Категория галереи', // основное название для типа записи
			'singular_name'      => 'Категорию галереи', // название для одной записи этого типа
			'add_new'            => 'Найти категорию галереи', // для добавления новой записи
			'add_new_item'       => 'Добавить новую категорию галереи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать категорию галереи', // для редактирования типа записи
			'new_item'           => 'Новая категория галереи', // текст новой записи
			'view_item'          => 'Смотреть категорию  галереи', // для просмотра записи этого типа.
			'search_items'       => 'Искать категорию галареи', // для поиска по этим типам записи
		),
			'show_ui'       => true,
			'query_var'     => true,
			'show_admin_column' => true,

		));

		register_post_type('events', array(
			'label'  => null,
			'labels' => array(
				'name'               => 'Мероприятия', 
				'singular_name'      => 'Мероприятия', 
				'add_new'            => 'Добавить новое мероприятие', 
				'add_new_item'       => 'Добавление нового мероприятия', 
				'edit_item'          => 'Редактирование мероприятия', 
				'new_item'           => 'Новое мероприятие', 
				'view_item'          => 'Смотреть мероприятие', 
				'search_items'       => 'Искать мероприятие', 
				'not_found'          => 'Не найдено', 
				'not_found_in_trash' => 'Не найдено в корзине', 
	
			),
			'public'              => true,
			'show_ui'             => true, // зависит от public
			'menu_position'       => 27,
			'menu_icon'           => 'dashicons-calendar-alt', 
			'supports'            => array('title','editor', 'thumbnail'), 
		) );

		register_post_type('competitions', array(
			'label'  => null,
			'labels' => array(
				'name'               => 'Конкурсы', 
				'singular_name'      => 'Конкурсы', 
				'add_new'            => 'Добавить новый конкурс', 
				'add_new_item'       => 'Добавление нового конкурса', 
				'edit_item'          => 'Редактирование конкурса', 
				'new_item'           => 'Новый конкурс', 
				'view_item'          => 'Смотреть конкурс', 
				'search_items'       => 'Искать конкурс', 
				'not_found'          => 'Не найдено', 
				'not_found_in_trash' => 'Не найдено в корзине', 
	
			),
			'public'              => true,
			'show_ui'             => true, // зависит от public
			'menu_position'       => 27,
			'menu_icon'           => 'dashicons-awards', 
			'supports'            => array('title','editor', 'thumbnail'), 
		));

		register_post_type('schools', array(
			'label'  => null,
			'labels' => array(
				'name'               => 'Школы', // основное название для типа записи
				'singular_name'      => 'Школы', // название для одной записи этого типа
				'add_new'            => 'Добавить новую школу', // для добавления новой записи
				'add_new_item'       => 'Добавление школы', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование школы', // для редактирования типа записи
				'new_item'           => 'Новая школа', // текст новой записи
				'view_item'          => 'Смотреть школы', // для просмотра записи этого типа.
				'search_items'       => 'Искать школу', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
	
			),
			'public'              => true,
			'show_ui'             => true, // зависит от public
			'menu_position'       => 28,
			'menu_icon'           => 'dashicons-welcome-learn-more', 
			'supports'            => array('title','editor', 'thumbnail'),
			'has_archive'         => true,
		));
	
			register_taxonomy('schools-category', array('schools'), array(
				'hierarchical'  => true,
				'labels' => array(
				'name'               => 'Категория школ', // основное название для типа записи
				'singular_name'      => 'Категория школы', // название для одной записи этого типа
				'add_new'            => 'Найти категорию школы', // для добавления новой записи
				'add_new_item'       => 'Добавить новую категорию школ', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактировать категорию школ', // для редактирования типа записи
				'new_item'           => 'Новая категория школ', // текст новой записи
				'view_item'          => 'Смотреть категорию  школ', // для просмотра записи этого типа.
				'search_items'       => 'Искать категорию школ', // для поиска по этим типам записи
			),
				'show_ui'       => true,
				'query_var'     => true,
				'show_admin_column' => true,
	
			));
	
 }

function datepicker_init(){
	if(is_page(262)){
		wp_enqueue_script('run-datepicker', get_template_directory_uri() . '/assets/js/datepicker_init.js', array(), '20151215', true );
	}
}
add_action( 'wp_enqueue_scripts', 'datepicker_init' );



/**
 * Add automatic image sizes
 */
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size('preview_event', 362, 257);
}


/** 
 * More posts
 * */ 

function true_load_posts(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';

	$event =  new WP_Query( $args );?>
<div class="container">
	<?php
	if( $event->have_posts() ) :
		
		while( $event->have_posts() ): $event->the_post();
		$post_id = get_the_ID();
		$eventImage = get_field("events_image", $post_id);
		?>


	<div class="category_page__post">
		<div class="category_post__img">
			<?php the_post_thumbnail();?>
		</div>
		<div class="category_post__descrption">
			<div class="post_date"><svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M26.1083 9.75475V6.07708V5.67424C26.1083 3.56681 24.2483 1.84991 21.9373 1.7906V1.79109V2.72409V2.72497V3.66295V3.66481V4.1977C21.9373 5.56549 20.8246 6.67817 19.4571 6.67817C18.0895 6.67817 16.9768 5.56549 16.9768 4.1977V3.6523V2.71842V1.78455H9.94391V2.71842V3.6523V4.1977C9.94391 5.56549 8.83123 6.67817 7.46353 6.67817C6.09593 6.67817 4.98335 5.56549 4.98335 4.1977V3.67282V3.6696V2.72859V2.72771V1.79481V1.79383C2.7105 1.89007 0.892578 3.59124 0.892578 5.67375V6.07659V9.75426V22.7075C0.892578 25.0738 2.81827 26.9999 5.18472 26.9999H21.8159C24.1821 26.9999 26.1079 25.0738 26.1079 22.7075V9.75475H26.1083ZM24.2404 22.708C24.2404 24.045 23.1528 25.1322 21.8159 25.1322H5.18521C3.84839 25.1322 2.76092 24.045 2.76092 22.708V9.75475H24.2404V22.708Z"
					 fill="#168CF8" />
					<path d="M6.38477 1.07956V1.78451V2.71839V3.65227V4.19766C6.38477 4.79406 6.86792 5.27722 7.46432 5.27722C8.06053 5.27722 8.54388 4.79406 8.54388 4.19766V3.65227V2.71839V1.78451V1.07956C8.54398 0.483158 8.06063 0 7.46442 0C6.86792 0.000488532 6.38477 0.483647 6.38477 1.07956Z"
					 fill="#168CF8" />
					<path d="M19.4577 0.000488281C18.8613 0.000488281 18.3779 0.483647 18.3779 1.08005V1.785V2.71888V3.65275V4.19815C18.3779 4.79455 18.8612 5.27771 19.4577 5.27771C20.0542 5.27771 20.5375 4.79455 20.5375 4.19815V3.65227V2.71839V1.78451V1.07956C20.5367 0.483647 20.0538 0.000488281 19.4577 0.000488281Z"
					 fill="#168CF8" />
					<path d="M10.3757 22.6552C11.5934 22.6552 12.513 22.3151 13.1347 21.6347C13.7554 20.9544 14.0664 20.1655 14.0664 19.2681C14.0664 18.4144 13.8007 17.7413 13.2688 17.2489C13.1245 17.1166 12.9938 17.0107 12.8771 16.9324C12.6633 16.7883 12.6473 16.6853 12.8486 16.5293C12.9616 16.4413 13.0727 16.3351 13.1814 16.21C13.5521 15.7809 13.7375 15.2543 13.7375 14.6295C13.7375 13.7476 13.4277 13.0438 12.8062 12.5194C12.1846 11.995 11.3674 11.733 10.3542 11.733C9.80881 11.733 9.34822 11.7989 8.97293 11.9305C8.59784 12.0623 8.27433 12.2521 8.00124 12.5012C7.63592 12.8524 7.3681 13.2352 7.19712 13.6501C7.08475 13.9812 7.00669 14.3264 6.9636 14.6843C6.93282 14.9405 7.13644 15.1494 7.39409 15.1494H8.40594C8.66389 15.1494 8.86262 14.9388 8.90004 14.6834C8.94548 14.3733 9.04709 14.1115 9.2045 13.8986C9.43567 13.5867 9.79709 13.4303 10.2884 13.4303C10.7166 13.4303 11.048 13.557 11.2843 13.8107C11.5196 14.0642 11.6379 14.3934 11.6379 14.7983C11.6379 15.4231 11.4067 15.8376 10.9452 16.0423C10.7446 16.1334 10.4284 16.1931 9.99787 16.2219C9.74071 16.2383 9.53142 16.4489 9.53142 16.7062V17.2648C9.53142 17.5224 9.7412 17.7295 9.99885 17.7435C10.455 17.7678 10.8053 17.8293 11.0486 17.9291C11.6127 18.1635 11.8947 18.6295 11.8947 19.3263C11.8947 19.8535 11.7424 20.2566 11.4386 20.5375C11.1347 20.8179 10.7778 20.9579 10.3693 20.9579C9.7026 20.9579 9.2425 20.7021 8.98983 20.19C8.90727 20.0209 8.84982 19.8253 8.81719 19.6027C8.77977 19.3473 8.57664 19.1365 8.3183 19.1365H7.20376C6.94591 19.1365 6.74278 19.3454 6.77122 19.6017C6.84098 20.2347 7.00014 20.7623 7.24792 21.184C7.83211 22.165 8.87503 22.6552 10.3757 22.6552Z"
					 fill="#168CF8" />
					<path d="M16.179 15.0764H17.7399C17.9976 15.0764 18.2067 15.2853 18.2067 15.5434V21.9248C18.2067 22.1824 18.4161 22.3917 18.6737 22.3917H19.8763C20.1339 22.3917 20.3431 22.1823 20.3431 21.9248V12.2514C20.3431 11.9937 20.1338 11.7844 19.8763 11.7844H19.0686C18.811 11.7844 18.5985 11.8815 18.5738 11.9982C18.5606 12.0598 18.5433 12.13 18.521 12.2084C18.4289 12.5253 18.292 12.7789 18.1124 12.969C17.8497 13.2467 17.509 13.432 17.0909 13.5251C16.8958 13.5688 16.5912 13.604 16.178 13.6318C15.9208 13.6482 15.7119 13.8662 15.7119 14.1233V14.6085C15.7119 14.8672 15.9217 15.0764 16.179 15.0764Z"
					 fill="#168CF8" />
				</svg>
				<p>
					<?php echo get_the_date("d/m/Y"); ?>
				</p>
			</div>
			<div class="post_title">
				<h3><a href="<?php the_permalink(); ?>">
						<?php the_title();?></a></h3>
			</div>
			<div class="post_blackquote">
				<p>Любимые персонажи мультиков, сказок, фильмов или комиксов — беспроигрышный вариант...</p>
			</div>
			<div class="post_btn_more"><a href="<?php the_permalink(); ?>">читати більше</a></div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php die();
}
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

/**
 * Breadcrumbs 
 */  

 require get_template_directory() . '/inc/breadcrumbs.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}