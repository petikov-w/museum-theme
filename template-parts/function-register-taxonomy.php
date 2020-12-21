<?php

function add_new_taxonomies() {
	register_taxonomy('marker',
		array('event', 'education'),
		array(
			'hierarchical' => false,
			/* true - по типу рубрик, false - по типу меток,
			по умолчанию - false */
			'labels' => array(
				/* ярлыки, нужные при создании UI, можете
				не писать ничего, тогда будут использованы
				ярлыки по умолчанию */
				'name' => __('Метки', 'museum' ),
				'singular_name' => __('Метка', 'museum' ) ,
				'search_items' => __('Найти метку', 'museum' ) ,
				'all_items' => __('Все метки', 'museum' ),
				'edit_item' => __('Редактировать метку', 'museum' ),
				'update_item' => __('Изменить метку', 'museum' ),
				'add_new_item' => __('Добавить метку', 'museum' ),
				'new_item_name' => __('Название новоой метки', 'museum' ),
				'menu_name' => __('Метки', 'museum' )
			),
			'show_admin_column' => true,
			'public' => true,
			/* каждый может использовать таксономию, либо
			только администраторы, по умолчанию - true */
			'show_in_nav_menus' => true,
			/* добавить на страницу создания меню */
			'show_ui' => true,
			/* добавить интерфейс создания и редактирования */
			'show_tagcloud' => false,
			/* нужно ли разрешить облако тегов для этой таксономии */
			'query_var' => true,
			/* разрешено ли использование query_var, также можно
			указать строку, которая будет использоваться в качестве
			него, по умолчанию - имя таксономии */
			'rewrite' => array(
				/* настройки URL пермалинков */
				'slug' => 'marker', // ярлык
				'hierarchical' => false // разрешить вложенность

			),
		)
	);
}
add_action( 'init', 'add_new_taxonomies', 0 );