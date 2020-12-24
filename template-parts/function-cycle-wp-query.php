<?php

function cycle_wp_query ($args_query, $content_block) {
	global $post; // Объявляем глобальную переменнную $post
	$query = new WP_Query($args_query);
	// проверяем есть ли посты в сформированном массиве $query
	if ( $query->have_posts() ) {
		// если есть запускаем цикл вывода постов
		while ( $query->have_posts() ) {
			$query->the_post();// устанавливаем данные
			get_template_part( 'template-parts/content', $content_block );
		}
	} else {
		?>
		<p>Постов не найдено</p>
		<?php
	}
	wp_reset_postdata(); // Сбрасываем $post
}


function cycle_wp_query_2 ($args_query, $content_block) {
	global $post; // Объявляем глобальную переменнную $post
	$query = new WP_Query($args_query);
	// проверяем есть ли посты в сформированном массиве $query
	if ( $query->have_posts() ) {
		$cnt=0;
		// если есть запускаем цикл вывода постов
		$result = $query->post_count;
		while ( $query->have_posts() ) {
			$query->the_post();// устанавливаем данные
			$cnt++;
			$_SESSION['count'] = $cnt;
			get_template_part( 'template-parts/content', $content_block );
		}
	} else {
		?>
        <p>Постов не найдено</p>
		<?php
	}
	wp_reset_postdata(); // Сбрасываем $post
    return $result;
}


function cycle_wp_query_switch ($args_query, $content_block) {
	global $post; // Объявляем глобальную переменнную $post
	$query = new WP_Query($args_query);
	// проверяем есть ли посты в сформированном массиве $query
	if ( $query->have_posts() ) {
		$cnt=0;
		// если есть запускаем цикл вывода постов
		while ( $query->have_posts() ) {
			$query->the_post();// устанавливаем данные
			$cnt++;
			$_SESSION['count'] = $cnt;
			get_template_part( 'template-parts/content', $content_block );
		}
	} else {
		?>
		<p>Постов не найдено</p>
		<?php
	}
	wp_reset_postdata(); // Сбрасываем $post
}


function cycle_wp_posts ($content_block) {
	global $post;
	if ( have_posts() ) {
		while ( have_posts() )
		{ the_post();
			get_template_part( 'template-parts/content', $content_block );
		} } else { ?>
		<p>Постов не найдено</p>
	<?php }
	wp_reset_postdata();
}


//==========================================================================

function event_data ($start_date, $end_date) {
	$array_month = [
		'1'  => 'января',
		'2'  => 'февраля',
		'3'  => 'марта',
		'4'  => 'апреля',
		'5'  => 'мая',
		'6'  => 'июня',
		'7'  => 'июля',
		'8'  => 'августа',
		'9'  => 'сентября',
		'10' => 'октября',
		'11' => 'ноября',
		'12' => 'декабря',
	];

	$start_bin = date_create( $start_date );
	$end_bin   = date_create( $end_date );

	if ( $start_bin == $end_bin ) {
		$result = date_format( $start_bin, 'j' ) .
		          ' ' . $array_month[ date_format( $start_bin, 'n' ) ] .
		          ' ' . date_format( $start_bin, 'Y' );
	};

	if ( $start_bin < $end_bin ) {
		$ds = date_parse( $start_date );
		$de = date_parse(  $end_date );
		if ( $ds['year'] < $de['year'] ) {
			$result = date_format( $start_bin, 'j' ) .
			          ' ' . $array_month[ date_format( $start_bin, 'n' ) ] .
                      ' ' . date_format( $start_bin, 'Y' ) . ' — ' .
			          ' ' . date_format( $end_bin, 'j' ) .
			          ' ' . $array_month[ date_format( $end_bin, 'n' ) ] .
			          ' ' . date_format( $end_bin, 'Y' );
		} else if ( $ds['year'] == $de['year'] ) {
            $result = date_format( $start_bin, 'j' ) .
            ' ' . $array_month[ date_format( $start_bin, 'n' ) ] .
            ' ' . ' — ' . date_format( $end_bin, 'j' ) .
            ' ' . $array_month[ date_format( $end_bin, 'n' ) ] .
            ' ' . date_format( $end_bin, 'Y' );
		}
	}
	return $result;
}

// Функция для отладки
function printss($source) {
	echo "<pre style='font-size: 16px; 
                      color: #f52e14;
                      font-weight: 500'>";
	print_r($source);
	echo "</pre>";
}
