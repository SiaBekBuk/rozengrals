<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>

    <?php if (is_search()) { ?>
        <meta name="robots" content="noindex, nofollow"/>
    <?php } ?>

    <title>
        <?php
        if (function_exists('is_tag') && is_tag()) {
            single_tag_title("Tag Archive for &quot;");
            echo '&quot; - ';
        } elseif (is_archive()) {
            wp_title('');
            echo ' Archive - ';
        } elseif (is_search()) {
            echo 'Search for &quot;' . wp_specialchars($s) . '&quot; - ';
        } elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title('');
            echo ' - ';
        } elseif (is_404()) {
            echo 'Not Found - ';
        }
        if (is_home()) {
            bloginfo('name');
            echo ' - ';
            bloginfo('description');
        } else {
            bloginfo('name');
        }
        if ($paged > 1) {
            echo ' - page ' . $paged;
        }
        ?>
    </title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/CyrillicGoth/stylesheet.css" type="text/css"
          media="all"/>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/datetimepicker.css" type="text/css"
          media="all"/>

    <?php //if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_enqueue_script("jquery"); ?>

    <?php wp_head(); ?>

    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/scripts.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/bootstrap-datetimepicker.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page-wrap">
    <div id="top-shadow"></div>
    <div id="header">

        <div id="gerb-left"></div>
        <div id="gerb-right"></div>

        <a href="<?php echo get_option('home'); ?>/" id="main-logo-link">
            <div id="logo"></div>
        </a>

        <div id="main-picture">
            <div id="anno"></div>
        </div>
        <div id="langbar">

            <div id="flag-lv"></div>
            <div id="flag-ru"></div>
            <div id="flag-en"></div>
            <div id="flag-de"></div>
        </div>
        <div class="clearfix"></div>
        <div id="nav">
            <?php wp_nav_menu('menu=main'); ?>
        </div>
        <hr id="nav-hr"/>
    </div>


