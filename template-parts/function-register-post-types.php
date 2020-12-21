<?php
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'event', [
		'label'  => null,
		'labels' => [
			'name'               => __('События', 'museum' ), // основное название для типа записи
			'singular_name'      => __('Событие', 'museum' ), // название для одной записи этого типа
			'add_new'            => __('Добавить событие', 'museum' ), // для добавления новой записи
			'add_new_item'       => __('Добавление события', 'museum' ), // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => __('Редактирование события', 'museum' ), // для редактирования типа записи
			'new_item'           => __('Новое событие', 'museum' ), // текст новой записи
			'view_item'          => __('Смотреть событие', 'museum' ), // для просмотра записи этого типа.
			'search_items'       => __('Искать событие', 'museum' ), // для поиска по этим типам записи
			'not_found'          => __('Не найдено события', 'museum' ), // если в результате поиска ничего не было найдено
			'not_found_in_trash' => __('Не найдено в корзине', 'museum' ), // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => __('События', 'museum' ), // название меню
		],
		'description'         => __('Раздел с событиями', 'museum' ),
		'public'              => true,
		'publicly_queryable' => true,
		'show_ui'             => true, // зависит от public ******
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-customizer',
//		'menu_icon'           => 'dashicons-welcome-learn-more',
		'capability_type'   => 'post',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'education', [
		'label'  => null,
		'labels' => [
			'name'               => __('Образовательные программы', 'museum' ),
			'singular_name'      => __('Образовательная программа', 'museum' ),
			'add_new'            => __('Добавить образовательную программу', 'museum' ),
			'add_new_item'       => __('Добавление образовательной программы', 'museum' ),
			'edit_item'          => __('Редактирование образовательной программы', 'museum' ),
			'new_item'           => __('Новая образовательная программа', 'museum' ),
			'view_item'          => __('Смотреть образовательную программу', 'museum' ),
			'search_items'       => __('Искать образовательную программу', 'museum' ),
			'not_found'          => __('Не найдено образовательной программы', 'museum' ),
			'not_found_in_trash' => __('Не найдено в корзине', 'museum' ),
			'menu_name'          => __('Образовательные программы', 'museum' ),
		],
		'description'         => __('Раздел с образовательными программами', 'museum' ),
		'public'              => true,
		'publicly_queryable' => true,
		'show_ui'             => true, // зависит от public ******
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'capability_type'   => 'post',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );


}
