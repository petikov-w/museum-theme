<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
	<div class="pictures-wrapp_block">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('main_poster_img_s') ?></a>
		<a href="<?php echo get_the_permalink() ?>">
            <h4><?php the_title() ?></h4>
        </a>
		<span><?php echo event_data(get_field('event_start_data'), get_field('event_end_data')) ?></span>
	</div>
</div>