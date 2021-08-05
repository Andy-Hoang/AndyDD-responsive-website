<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- mark this file as header -->
    <?php wp_head(); ?>
    <title>AndyDD</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>"
                    <?php if(is_front_page()) echo 'class="active"' ?>
                >Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog'); ?>"
                    <?php if(get_post_type()=='post') echo 'class="active"' ?>
                >Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects'); ?>"
                    <?php if(get_post_type()=='project') echo 'class="active"' ?>
                >Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about'); ?>"
                    <?php if(is_page('about')) echo 'class="active"' ?>
                >About</a>
            </li>
            <li>
                <div class="searchbox-slide-menu">
                    <?php get_search_form(); ?>
                </div>
            </li>
        </ul>
    </div>

    <!--NAV element-->  
    <nav>
        <div id="logo-img">
            <!--click on logo >> go to Home page -->
            <a href="<?php echo site_url(''); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo4.png" 
                alt="Andydd Logo">
            </a>
        </div>  
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <!-- give the correct the root url of website -->
                <a href="<?php echo site_url(''); ?>"
                    <?php if(is_front_page()) echo 'class="active"' ?>
                >Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog'); ?>"
                    <?php if(get_post_type()=='post') echo 'class="active"' ?>
                >Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects'); ?>"
                    <?php if(get_post_type()=='project') echo 'class="active"' ?>
                >Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about'); ?>"
                    <?php if(is_page('about')) echo 'class="active"' ?>
                >About</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
        <?php get_search_form(); ?>
    </div>

    <!-- to adjust the image Width lies within the Main (smaller - have padding -->
    <?php if(!is_front_page()) { ?>
        <main>
    <?php } ?>