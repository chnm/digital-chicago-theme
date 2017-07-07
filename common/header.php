<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600" rel="stylesheet">

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php
    queue_css_file(array('iconfonts', 'foundation.min', 'style'));

    echo head_css();
    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('vendor/foundation.min'); ?>
    <?php queue_js_file('vendor/what-input'); ?>
    <?php queue_js_file('app'); ?>
    <?php echo head_js(); ?>
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
        <header role="banner">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>

            <div class="title-bar" data-responsive-toggle="primary-nav" data-hide-for="medium">
                <button class="menu-icon" type="button" data-toggle="primary-nav"></button>
                <div class="title-bar-title">Menu</div>
            </div>

            <div id="inner-logo-wrap" class="small-12 column show-for-small-only">
                <a href="<?php echo url(''); ?>"><img class="inner-logo" src="<?php echo img('DCLogo.svg', $dir='img'); ?>" alt="Logo for Digital Chicago"></a>
            </div>
            
            <div class="nav-wrap row">
                
             <div id="primary-nav" class="medium-12 column" role="navigation" class="top-bar">
                 <div class="top-bar-left medium-5">
                   <a href="<?php echo url(''); ?>" class="show-for-medium"><img class="inner-logo" src="<?php echo img('DCLogo.svg', $dir='img'); ?>" alt="Logo for Digital Chicago"></a>
                </div>

                <div class="top-bar-right medium-7">  
                    <?php 
                        $navArray = array();
                        $navArray[] = array('label' => 'About', 'uri' => url('about'), 'class' => 'about nav-item');
                        $navArray[] = array('label' => 'Explore', 'uri' => url('exhibits?sort_field=random'), 'class' => 'exhibits nav-item');
                                            ?>
                    <?php echo nav($navArray)->addPageClassToLi()->setUlClass('vertical medium-horizontal menu medium-5 large-4 large-offset-1 column')->setUlId('right-nav'); ?>
                 

                    <div id="search-container" role="search" class="medium-7 column right align-self-bottom">
                        <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
                        <?php echo search_form(array('show_advanced' => true)); ?>
                        <?php else: ?>
                        <?php echo search_form(); ?>
                        <?php endif; ?>
                    </div>
                </div>  
            </div>
            </div>
        </header>

    <div id="content" class="row" role="main">

<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>