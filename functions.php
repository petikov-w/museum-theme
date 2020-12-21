<?php
if (! function_exists('museum_theme_setup')) :
    function museum_theme_setup() {
        // добавление миниатюр
        add_theme_support( 'post-thumbnails', array( 'post', 'event', 'education' ) );

               // добавление пользовательского логотипа
        add_theme_support( 'custom-logo', [
            'width'       => 163,
            'flex-height' => true,
            'header-text' => '',
            'unlink-homepage-logo' => false,
        ] );

	    if (function_exists('add_image_size')){
			add_image_size('main_slider_img',1200,680,true);
	    }
        // регистрация меню
        register_nav_menus( [
            'header_menu' => 'Меню в шапке',
            'footer_menu_1' => 'Меню в подвале 1',
	        'footer_menu_2' => 'Меню в подвале 2'
        ] );
    }
endif;

add_action( 'after_setup_theme', 'museum_theme_setup' );
// отключаем создание миниатюр файлов для указанных размеров
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'medium_large',
		'large',
		'1536x1536',
		'2048x2048',
	] );
}


// Регистрация областей для виджетов

function museum_theme_widgets_init() {

	register_sidebar(
		array(
			'name' => esc_html__('График работы', 'museum' ),
			'id' => 'footer-workschedule',
			'description' => esc_html__('Добавте график здесь', 'museum' ),
			'before_widget' => '<div id="%1$s" class="footer-text %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<span class="work-title">',
			'after_title' => '</span>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Контактная информация', 'museum' ),
			'id' => 'footer-contact-info',
			'description' => esc_html__('Добавте виджеты здесь', 'museum' ),
			'before_widget' => '<div id="%1$s" class="footer-text %2$s">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => '',
		)
	);

	// Сайдбар для вывода текствой информации copyright в подвале страницы
	register_sidebar(
		array(
			'name' => esc_html__('Текст в подвале левый', 'museum' ),
			'id' => 'footer-text-left',
			'description' => esc_html__('Добавте текст здесь', 'museum' ),
			'before_widget' => '<div id="%1$s" class="footer-text %2$s">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => '',
		)
	);
	register_sidebar(
		array(
			'name' => esc_html__('Текст в подвале правый', 'museum' ),
			'id' => 'footer-text-right',
			'description' => esc_html__('Добавте текст здесь', 'museum' ),
			'before_widget' => '<div id="%1$s" class="footer-text %2$s">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => '',
		)
	);
}

add_action( 'widgets_init', 'museum_theme_widgets_init' );

// подключаем стили и скрипты
function enqueue_museum_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'swiper-slider', get_template_directory_uri() . '/assets/css/swiper.min.css','style', time());
    wp_enqueue_style( 'museum-theme', get_template_directory_uri() . '/assets/css/style.css','style', time());
//    wp_enqueue_style( 'Playfair Display', '//fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap');
	wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap');

	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//code.jquery.com/jquery-3.5.1.min.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js','jquery',time(),true);
	wp_enqueue_script('myswiper', get_template_directory_uri() . '/assets/js/myswiper.js','swiper',time(),true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js','swiper',time(),true);
}

add_action( 'wp_enqueue_scripts', 'enqueue_museum_style' );

// отключаем строку для вызова админ панели вверху сайта
add_filter('show_admin_bar', '__return_false');

//<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
//<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
//		rel="stylesheet">


//================ Добавление  поля в customazer ==============================


function my_customize_register( $wp_customize ) {
	$wp_customize->add_setting('footer_logo', array(
		'default' => '',
		'sanitize_callback' => 'absint',
	));

	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_logo',
		array(
		'section' => 'title_tagline',
		'label' => 'Логотип для подвала сайта'
	)));

	$wp_customize->selective_refresh->add_partial('footer_logo', array(
		'selector' => '.footer-logo',
		'render_callback' => function() {
			$logo = get_theme_mod('footer_logo');
			$img = wp_get_attachment_image_src($logo, 'full');
			if ($img) {
				return '<img src="' . $img[0] . '" alt="">';
			} else {
				return '';
			}
		}
	));
}
add_action( 'customize_register', 'my_customize_register' );

//==========================================================================

// Регистрация новых типов записей
get_template_part( 'template-parts/function', 'register-post-types' );

// Регистрация новых таксономий
get_template_part( 'template-parts/function', 'register-taxonomy' );

// Регистрация нового виджета - График работы (workschedule)
get_template_part( 'template-parts/function', 'widget-workschedule' );

// Регистрация нового виджета - Список телефонов (listphone)
get_template_part( 'template-parts/function', 'widget-listphone' );

// Регистрация нового виджета - Социальные сети (socialnetwork)
get_template_part( 'template-parts/function', 'widget-socialnetwork' );

// Подключение функции "хлебных крошек"
get_template_part( 'template-parts/function', 'breadcrumbs' );

// Включение разрешения на использование шорткодов в текстовых виджетах
add_filter('widget_text','do_shortcode');

// Подключение моих шорткодов
get_template_part( 'template-parts/function', 'shortcodes' );

// Подключение моих функций работы с циклами WP_Query
get_template_part( 'template-parts/function', 'cycle-wp-query' );