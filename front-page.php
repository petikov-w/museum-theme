<?php
get_header();
?>
<div class="container">
    <section  class="hero">
        <div class="slider-wrapp">
            <div class="swiper-container section-slider">
                <div class="swiper-wrapper">
                    <?php
                        $args_events = array(
                            'post_type' => 'event',
                            'tax_query' => [[
		                            'taxonomy' => 'marker',
		                            'field'    => 'slug',
		                            'terms'    => 'dlya-slajdera'
	                        ]]
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
                                <div class="s">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/1.png">
                                        <span>20 августа — 30 сентября 2019</span>
                                        <h4>Приглашаем посетить выставку «История жизни в лицах»</h4>
                                    </div>
                                </div>
                                <div class="e">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/1.png">
                                        <span>20 августа — 30 сентября 2019</span>
                                        <h4>Приглашаем посетить выставку «История жизни в лицах»</h4>
                                    </div>
                                </div>
                                <div class="er">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/2.png">
                                        <span>30 мая 2020</span>
                                        <h4>5-я образовательная сессия проекта "Школа - мастерская аналитического
                                            рисунка и скульптуры для юных художников"</h4>
                                    </div>
                                </div>
                                <div class="t">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/3.png">
                                        <span>22 июня 2020</span>
                                        <h4>Добрый день, дорогие участники проекта!</h4>
                                    </div>
                                </div>
                                <div class="d">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/3.png">
                                        <span>22 июня 2020</span>
                                        <h4>Добрый день, дорогие участники проекта!</h4>
                                    </div>
                                </div>
                                <div class="g">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/2.png">
                                        <span>30 мая 2020</span>
                                        <h4>5-я образовательная сессия проекта "Школа - мастерская аналитического
                                            рисунка и скульптуры для юных художников"</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info-tabcontent fade">
                            <div class="grid-container">
                                <div class="s">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/1.png">
                                        <span>20 августа — 30 сентября 2019</span>
                                        <h4>Приглашаем посетить выставку «История жизни в лицах»</h4>
                                    </div>
                                </div>
                                <div class="e">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/1.png">
                                        <span>20 августа — 30 сентября 2019</span>
                                        <h4>Приглашаем посетить выставку «История жизни в лицах»</h4>
                                    </div>
                                </div>
                                <div class="er">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/2.png">
                                        <span>30 мая 2020</span>
                                        <h4>5-я образовательная сессия проекта "Школа - мастерская аналитического
                                            рисунка и скульптуры для юных художников"</h4>
                                    </div>
                                </div>
                                <div class="t">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/3.png">
                                        <span>22 июня 2020</span>
                                        <h4>Добрый день, дорогие участники проекта!</h4>
                                    </div>
                                </div>
                                <div class="d">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/3.png">
                                        <span>22 июня 2020</span>
                                        <h4>Добрый день, дорогие участники проекта!</h4>
                                    </div>
                                </div>
                                <div class="g">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/2.png">
                                        <span>30 мая 2020</span>
                                        <h4>5-я образовательная сессия проекта "Школа - мастерская аналитического
                                            рисунка и скульптуры для юных художников"</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info-tabcontent fade">
                            <div class="grid-container">
                                <div class="s">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/1.png">
                                        <span>20 августа — 30 сентября 2019</span>
                                        <h4>Приглашаем посетить выставку «История жизни в лицах»</h4>
                                    </div>
                                </div>
                                <div class="e">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/1.png">
                                        <span>20 августа — 30 сентября 2019</span>
                                        <h4>Приглашаем посетить выставку «История жизни в лицах»</h4>
                                    </div>
                                </div>
                                <div class="er">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/2.png">
                                        <span>30 мая 2020</span>
                                        <h4>5-я образовательная сессия проекта "Школа - мастерская аналитического
                                            рисунка и скульптуры для юных художников"</h4>
                                    </div>
                                </div>
                                <div class="t">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/3.png">
                                        <span>22 июня 2020</span>
                                        <h4>Добрый день, дорогие участники проекта!</h4>
                                    </div>
                                </div>
                                <div class="d">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/3.png">
                                        <span>22 июня 2020</span>
                                        <h4>Добрый день, дорогие участники проекта!</h4>
                                    </div>
                                </div>
                                <div class="g">
                                    <div class="poster-wrapp_block">
                                        <img src="img/post/2.png">
                                        <span>30 мая 2020</span>
                                        <h4>5-я образовательная сессия проекта "Школа - мастерская аналитического
                                            рисунка и скульптуры для юных художников"</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="btn-wrapp">
            <a href="#" class="slider-btn btn-white">Вся афиша</a>
        </div>
</div>
</section>





</div>  <!-- / container -->


<?php
get_footer();
?>

