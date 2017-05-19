<?php
$title = __('Browse Exhibits');
echo head(array('title' => $title, 'bodyclass' => 'exhibits browse'));
?>
<h1>Explore</h1>

<p class="orientation large-10 large-offset-1 columns show-for-medium">Explore our exhibits. Use the tags below to filter them by subject</p>

<div class="tag-cloud align-spaced show-for-medium">
<?php $tags = get_records('Tag', array('type'=>'exhibit' )); ?>
<?php echo classed_tag_cloud($tags, 'exhibits/browse'); ?>
</div>
<div class="large-up-4">
    <?php if (count($exhibits) > 0): ?>
    <?php $exhibitCount = 0; ?>
    <?php foreach (loop('exhibit') as $exhibit): ?>
        <?php $exhibitCount++; ?>
        <div class="exhibit large-3 column column-block">
            <?php if ($exhibitImage = record_image($exhibit, 'square_thumbnail')): ?>
                <?php echo exhibit_builder_link_to_exhibit($exhibit, $exhibitImage, array('class' => ' circle')); ?>
            <?php endif; ?>

            <h2><?php echo link_to_exhibit(); ?></h2>
            
            <?php if ($exhibitDescription = metadata($exhibit, 'description', array('no_escape' => true, 'snippet' => 150))): ?>
                <div class="description"><?php echo $exhibitDescription; ?></div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

</div>

<?php echo pagination_links(); ?>

<?php else: ?>
<p><?php echo __('There are no exhibits available yet.'); ?></p>
<?php endif; ?>

<?php echo foot(); ?>
