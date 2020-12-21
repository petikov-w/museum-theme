          <?php $cnt = $_SESSION['count']; ?>
          
            <div class="swiper-slide esa" data-num="<?php echo $cnt; ?>">
                <img src="<?php the_post_thumbnail_url('main_slider_img'); ?>">
                <h1><?php the_title() ?></h1>
                <a href="#" class="slider-btn">Купить билет</a>
            </div>
