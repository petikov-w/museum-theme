<?php $cnt = $_SESSION['count'];

switch ($cnt) {
case '1':?>
    <div class="s">
        <div class="poster-wrapp_block">
            <a href="<?php echo get_the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url('main_poster_img_m'); ?>">
                <span><?php echo event_data(get_field('event_start_data'), get_field('event_end_data')) ?></span>
                <h4><?php the_title() ?></h4>
            </a>
        </div>
    </div>
<?php
	break;
case '2':?>
	<div class="e">
		<div class="poster-wrapp_block">
            <a href="<?php echo get_the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url('main_poster_img_m'); ?>">
                <span><?php echo event_data(get_field('event_start_data'), get_field('event_end_data')) ?></span>
                <h4><?php the_title() ?></h4>
            </a>
		</div>
	</div>
<?php
	break;
case '3':?>
	<div class="er">
		<div class="poster-wrapp_block">
            <a href="<?php echo get_the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url('main_poster_img_s'); ?>">
                <span><?php echo event_data(get_field('event_start_data'), get_field('event_end_data')) ?></span>
                <h4><?php the_title() ?></h4>
            </a>
		</div>
	</div>
<?php
	break;
case '4':?>
	<div class="t">
		<div class="poster-wrapp_block">
            <a href="<?php echo get_the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url('main_poster_img_b'); ?>">
                <span><?php echo event_data(get_field('event_start_data'), get_field('event_end_data')) ?></span>
                <h4><?php the_title() ?></h4>
            </a>
		</div>
	</div>
<?php
	break;
case '5':?>
	<div class="d">
		<div class="poster-wrapp_block">
            <a href="<?php echo get_the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url('main_poster_img_b'); ?>">
                <span><?php echo event_data(get_field('event_start_data'), get_field('event_end_data')) ?></span>
                <h4><?php the_title() ?></h4>
            </a>
		</div>
	</div>
<?php
	break;
case '6':?>
	<div class="g">
		<div class="poster-wrapp_block">
            <a href="<?php echo get_the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url('main_poster_img_s'); ?>">
                <span><?php echo event_data(get_field('event_start_data'), get_field('event_end_data')) ?></span>
                <h4><?php the_title() ?></h4>
            </a>
		</div>
	</div>
<?php break;

	default: break;
};?>



