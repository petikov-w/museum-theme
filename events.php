<?php

/*
Template Name: Страница события
Template Post Type: page
*/
get_header()
?>

<div class="container">
    <?php if ( function_exists( 'the_breadcrumbs' ) ) the_breadcrumbs(); ?>
</div>

<section class="pictures">
	<div class="container">
		<div class="row">
            <?php
            $args_events = array(
                'post_type' => 'event',
            );
            cycle_wp_query_switch($args_events, 'all-poster');
            ?>
		</div>
	</div>
</section>

<?php
get_footer();