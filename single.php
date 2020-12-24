<?php get_header();
		if (get_post_type() == 'event') {
			get_template_part( 'template-parts/content', 'event' );
		}
get_footer();