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
 <?php echo body_tag(array('id' => 'home', 'class' => @$bodyclass, 'home')); ?>
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
        <header role="banner">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>

            

            <img class="home-logo small-10" src="<?php echo img('DCLogo.svg', $dir='img'); ?>" alt="Logo for Digital Chicago">


            <div id="primary-nav" role="navigation" class="row menu-centered">
                <?php 
                    $navArray = array();
                    $navArray[] = array('label' => 'About', 'uri' => url('about'), 'class' => 'about nav-item');
                    $navArray[] = array('label' => 'Explore', 'uri' => url('exhibits?sort_field=random'), 'class' => 'exhibits nav-item');
                ?>
                <?php
                    echo nav($navArray)->addPageClassToLi()->setUlClass('vertical medium-horizontal menu');
                ?>
             </div>
        </header>

    <div id="content" class="row" role="main">

<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>


<div id="primary">
    <?php /* ?>
    <?php if ($homepageText = get_theme_option('Homepage Text')): ?>
        <p class="orientation columns "><?php echo $homepageText; ?></p>
    <?php endif; ?>
    */ ?>


    <div class="large-12 columns large-up-3 medium-up-2">       
        <?php $exhibits = get_records('Exhibit', array('sort_field'=>'random')); ?>
        <?php foreach($exhibits as $exhibit): ?>
            <div class="large-4 column column-block exhibit">
                <div class="circle-wrap">
                    <?php if ($exhibitImage = record_image($exhibit, 'square_thumbnail')): ?>
                        <?php echo $exhibitImage; ?>
                        <div class="info">
                            <?php if ($exhibitImageID = $exhibit->cover_image_file_id): ?>
                                <?php $coverFile = get_record_by_id('File', $exhibitImageID); ?>
                                <a href="<?php echo exhibit_builder_exhibit_uri($exhibit); ?>"><?php echo metadata($coverFile, 'display_title'); ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                </div>


                <?php //echo exhibit_builder_link_to_exhibit($exhibit,$exhibit->title, array('class' => 'featured-title')); ?>          
            </div>
        <?php endforeach; ?>
    </div>


</div><!-- end primary -->



<?php echo foot(); ?>
