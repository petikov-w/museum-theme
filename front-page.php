<?php
get_header();
?>
<div class="container">
    <section  class="hero">
        <div class="slider-wrapp">
            <div class="swiper-container">
                <div class="swiper-wrapper section-slider">
<!--======================================================================================        -->
                <?php
                    $args_events = array(
                        'post_type' => 'event',
                    );
                    cycle_wp_query($args_events, 'slide-main-page');
                ?>
<!-- ================================================================================-->
                </div>
                <div class="swiper-button_arrows">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button_arrows_num">
                        <span class="swiper-num-area">1/</span>
                        <span>7</span>
                    </div>
                    <div class="swiper-button-next"></div>
                </div>

            </div>
        </div>
    </section>

</div>


<?php
get_footer();
?>

