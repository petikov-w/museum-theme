
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6	col-md-6 col-lg-4">
	                <?php get_template_part( 'template-parts/content', 'footer-logo' ); ?>
            </div>
            <div class="col-xs-12 col-sm-6	col-md-6 col-lg-4">
                <div class="footer-menus">
	                <?php
	                wp_nav_menu( [
		                'theme_location'  => 'footer_menu_1',
		                'container'       => 'nav',
		                'container_class' => 'foot-c',
		                'menu_class'      => 'foot-m',
		                'depth'           => 0,
		                'echo'            => true,
	                ] );

	                wp_nav_menu( [
		                'theme_location'  => 'footer_menu_2',
		                'container'       => 'nav',
		                'menu_class'      => 'foot-m',
		                'depth'           => 0,
		                'echo'            => true,
	                ] );
	                ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12	col-md-12 col-lg-4">
                <div class="footer-block_wrapp">
                    <div class="footer-block">
	                    <?php dynamic_sidebar( 'footer-workschedule' ); ?>
                    </div>
                    <div class="footer-block">
	                    <?php dynamic_sidebar( 'footer-contact-info' ); ?>
<!--                            <div class="email-a">-->
<!--                                <svg width="23" height="22" class="icon email-icon">-->
<!--                                <use xlink:href="--><?php //echo get_template_directory_uri().
//                                                            '/assets/images/sprite.svg#email'?><!--">-->
<!--                                </use>-->
<!--                            </svg>-->
<!--                                 <a href="mailto:--><?php //echo get_field('email_address', 49) ?><!--" >--><?php //echo get_field('email_address', 49) ?><!--</a>-->
<!--                            </div>-->

<!--                        <div class="footer-socials">-->
<!--                            <div class="social-links">-->
<!--                                <a href="#"><img src="img/icons/vk-i.svg"></a>-->
<!--                                <a href="#"><img src="img/icons/facebook-i.svg"></a>-->
<!--                                <a href="#"><img src="img/icons/instagram-i.svg"></a>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <span><?php dynamic_sidebar( 'footer-text-left' ); ?></span>
            <span><?php dynamic_sidebar( 'footer-text-right' ); ?></span>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

	</body>
</html>
