<?php $cnt = $_SESSION['count'];?>

<div class="info-tabcontent fade">
 <div class="grid-container">

 <?php
switch ($cnt) {
case '1':?>
<div class="s">
	<div class="poster-wrapp_block">
		<img src="<?php the_post_thumbnail_url('main_poster_img_m'); ?>">
		<h4><?php the_title() ?></h4>
<!--		<img src="img/post/1.png">-->
<!--		<span>20 августа — 30 сентября 2019</span>-->
<!--		<h4>Приглашаем посетить выставку «История жизни в лицах»</h4>-->
	</div>
<?php
	break;
case '2':?>
	<div class="e">
		<div class="poster-wrapp_block">
			<img src="<?php the_post_thumbnail_url('main_poster_img_m'); ?>">
			<h4><?php the_title() ?></h4>
<!--			<img src="img/post/1.png">-->
<!--			<span>20 августа — 30 сентября 2019</span>-->
<!--			<h4>Приглашаем посетить выставку «История жизни в лицах»</h4>-->
		</div>
	</div>
<?php
	break;
case '3':?>
	<div class="er">
		<div class="poster-wrapp_block">
			<img src="<?php the_post_thumbnail_url('main_poster_img_s'); ?>">
			<h4><?php the_title() ?></h4>
<!--			<img src="img/post/2.png">-->
<!--			<span>30 мая 2020</span>-->
<!--			<h4>5-я образовательная сессия проекта "Школа - мастерская аналитического-->
<!--				рисунка и скульптуры для юных художников"</h4>-->
		</div>
	</div>
<?php
	break;
case '4':?>
	<div class="t">
		<div class="poster-wrapp_block">
			<img src="<?php the_post_thumbnail_url('main_poster_img_b'); ?>">
			<h4><?php the_title() ?></h4>
<!--			<img src="img/post/3.png">-->
<!--			<span>22 июня 2020</span>-->
<!--			<h4>Добрый день, дорогие участники проекта!</h4>-->
		</div>
	</div>
<?php
	break;
case '5':?>
	<div class="d">
		<div class="poster-wrapp_block">
			<img src="<?php the_post_thumbnail_url('main_poster_img_b'); ?>">
			<h4><?php the_title() ?></h4>
<!--			<img src="img/post/3.png">-->
<!--			<span>22 июня 2020</span>-->
<!--			<h4>Добрый день, дорогие участники проекта!</h4>-->
		</div>
	</div>
<?php
	break;
case '6':?>
	<div class="g">
		<div class="poster-wrapp_block">
			<img src="<?php the_post_thumbnail_url('main_poster_img_s'); ?>">
			<h4><?php the_title() ?></h4>
<!--			<img src="img/post/2.png">-->
<!--			<span>30 мая 2020</span>-->
<!--			<h4>5-я образовательная сессия проекта "Школа - мастерская аналитического-->
<!--				рисунка и скульптуры для юных художников"</h4>-->
		</div>
	</div>
<?php break;

	default: break;
};?>
</div>
</div>





<!--<div class="s">-->
<!--    <div class="poster-wrapp_block">-->
<!--        <img src="img/post/1.png">-->
<!--        <span>20 августа — 30 сентября 2019</span>-->
<!--        <h4>Приглашаем посетить выставку «История жизни в лицах»</h4>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="e">-->
<!--    <div class="poster-wrapp_block">-->
<!--        <img src="img/post/1.png">-->
<!--        <span>20 августа — 30 сентября 2019</span>-->
<!--        <h4>Приглашаем посетить выставку «История жизни в лицах»</h4>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="er">-->
<!--    <div class="poster-wrapp_block">-->
<!--        <img src="img/post/2.png">-->
<!--        <span>30 мая 2020</span>-->
<!--        <h4>5-я образовательная сессия проекта "Школа - мастерская аналитического-->
<!--            рисунка и скульптуры для юных художников"</h4>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="t">-->
<!--    <div class="poster-wrapp_block">-->
<!--        <img src="img/post/3.png">-->
<!--        <span>22 июня 2020</span>-->
<!--        <h4>Добрый день, дорогие участники проекта!</h4>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="d">-->
<!--    <div class="poster-wrapp_block">-->
<!--        <img src="img/post/3.png">-->
<!--        <span>22 июня 2020</span>-->
<!--        <h4>Добрый день, дорогие участники проекта!</h4>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="g">-->
<!--    <div class="poster-wrapp_block">-->
<!--        <img src="img/post/2.png">-->
<!--        <span>30 мая 2020</span>-->
<!--        <h4>5-я образовательная сессия проекта "Школа - мастерская аналитического-->
<!--            рисунка и скульптуры для юных художников"</h4>-->
<!--    </div>-->
<!--</div>-->