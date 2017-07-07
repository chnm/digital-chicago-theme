<?php
$pageTitle = __('Browse Items');
echo head(array('title' => $pageTitle, 'bodyclass' => 'items tags'));
?>

<h1><?php echo $pageTitle; ?></h1>

<nav class="navigation items-nav secondary-nav row">
    <?php echo public_nav_items()->addPageClassToLi()->setUlClass('horizontal menu')->setUlId(''); ?>
</nav>

<div>
    <?php echo tag_cloud($tags, 'items/browse'); ?>
</div>

<?php echo foot(); ?>
