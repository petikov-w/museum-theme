

<!--  ==================== Подключение слайдера ======================= -->
    <div class="swiper-container photo-report-slider">
        <div class="swiper-wrapper">
            <!-- Slides -->
	        <?php $images = get_attached_media('image');
	        $images_count=count($images);
	        foreach ( $images as $image) {
	            echo '<div class="swiper-slide"><img src="';
		        print_r($image->guid);
	            echo '"></div>';
	        }
	        ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
<!--  ==================== Подключение слайдера (конец) =============== -->
