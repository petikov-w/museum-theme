<?php
get_header();
$today = date('Ymd');

?>
<!--<div class="container">-->
    <section  class="hero">
        <div class="slider-wrapp">
            <div class="swiper-container section-slider">
                <div class="swiper-wrapper">
                    <?
                        $args_events = array(
//                            'tax_query' => [[
//		                            'taxonomy' => 'marker',
//		                            'field'    => 'slug',
//		                            'terms'    => 'dlya-slajdera'
//	                        ]],
	                        'post_type' => 'event',
	                        'meta_query' => array(
		                        'relation' => 'AND',
		                        array(
			                        'key'           => 'event_start_data',
			                        'compare'       => '<=',
			                        'value'         => $today,
			                        'type'          => 'DATE',
		                        ),
		                        array(
			                        'key'           => 'event_end_data',
			                        'compare'       => '>=',
			                        'value'         => $today,
			                        'type'          => 'DATE',
		                        )
	                        )
                        );
                       $count_i = cycle_wp_query_2($args_events, 'slide-main-page');
                    ?>
                </div>
                <div class="swiper-button_arrows">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button_arrows_num">
                        <span class="swiper-num-area">1/</span>
                        <span><?php echo $count_i;  ?></span>
                    </div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="poster">
        <div class="container">
            <h2>Афиша</h2>
            <div class="news-wrapp">
                <div class="product-tabs">
                    <div class="info">
                        <div class="info-header">
                            <div class="info-header-tab active">Текущие</div>
                            <div class="info-header-tab">Будущие</div>
                            <div class="info-header-tab">Предыдущие</div>
                        </div>
                        <div class="info-tabcontent fade">
                            <div class="grid-container">
	                            <?php
                                    $args_events = array(
                                        'post_type' => 'event',
                                        'meta_query' => array(
                                        'relation' => 'AND',
	                                    array(
		                                        'key'           => 'event_start_data',
		                                        'compare'       => '<=',
		                                        'value'         => $today,
		                                        'type'          => 'DATE',
	                                        ),
	                                    array(
		                                        'key'           => 'event_end_data',
		                                        'compare'       => '>=',
		                                        'value'         => $today,
		                                        'type'          => 'DATE',
	                                        )
                                        )
	                                 );

	                            cycle_wp_query_switch($args_events, 'main-poster');
	                            ?>
                            </div>
                        </div>
                        <div class="info-tabcontent fade">
                            <div class="grid-container">
			                    <?php
			                    $args_events = array(
				                    'post_type' => 'event',
				                    'meta_query' => array(
					                    array(
						                    'key'           => 'event_start_data',
						                    'compare'       => '>',
						                    'value'         => $today,
						                    'type'          => 'DATE',
					                    ),
				                    )
			                    );

			                    cycle_wp_query_switch($args_events, 'main-poster');
			                    ?>
                            </div>
                        </div>
                        <div class="info-tabcontent fade">
                            <div class="grid-container">
			                    <?php
			                    $args_events = array(
				                    'post_type' => 'event',
				                    'meta_query' => array(
					                    array(
						                    'key'           => 'event_end_data',
						                    'compare'       => '<',
						                    'value'         => $today,
						                    'type'          => 'DATE',
					                    )
				                    )
			                    );

			                    cycle_wp_query_switch($args_events, 'main-poster');
			                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="btn-wrapp">
                    <a href="<?php echo get_template_directory_uri() . '/poster/' ?>" class="slider-btn btn-white">Вся афиша</a>
                </div>
            </div>
<!--         </div>-->
    </section>





<!--</div>  <!-- / container -->-->


<?php
get_footer();
?>

