<?php
// Вывод логотипа
// Получаю ссылку на изображение логотипа
$custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'footer_logo' ), 'full' );
$home_url = get_home_url();

if(has_custom_logo()){
	if(is_front_page() || is_home()) {
		// Если это главная страница, то логотип сайта выводится, как обычное изображение
		echo '<div class="logo-text"><img src="' . $custom_logo__url[0] . '" alt="logo">
                     <div class="logo-text-wrapp"><span>' . get_bloginfo('name') .
		     '</span><h3>' . get_bloginfo('description') . '</h3></div></div>';
	}
	else {
		// В других случаях изображение логотипа сайта выводится, как ссылка на главную страницу

		echo '<a href="'. $home_url . '"><div class="logo-text"><img src="' . $custom_logo__url[0] . '" alt="logo">
                     <div class="logo-text-wrapp"><span>' . get_bloginfo('name') .
		     '</span><h3>' . get_bloginfo('description') . '</h3></div></div></a>';
	}
}


//================================

//<a href="/" class="header-logo">
//  <?php
//  $header_logo = get_theme_mod('header_logo');
//  $img = wp_get_attachment_image_src($header_logo, 'full');
//  if ($img) :
//    ?>
<!--    <img src="--><?php //echo $img[0]; ?><!--" alt="">-->
<!--  --><?php //endif; ?>
<!--</a>-->