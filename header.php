<!doctype html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Museum</title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open();?>
<header>
    <div class="container">
        <div class="header-top">
            <div class="row">
                <div class="col-xs-10 col-sm-12	col-md-12 col-lg-4">
                    <div class="logo-text">
                       <?php get_template_part( 'template-parts/content', 'header-logo' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>



