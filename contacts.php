<?php
/*
Template Name: Страница контакты
Template Post Type: page
*/

get_header();
?>

	<section class="section-dark">
		<div class="container">
			<?php if ( function_exists( 'the_breadcrumbs' ) ) the_breadcrumbs(); ?>
            <span class="title-page"><?php the_title() ?></span>

		</div>
	</section>


<?php
get_footer();

