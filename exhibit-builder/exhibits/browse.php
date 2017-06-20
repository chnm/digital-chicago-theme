<?php
$title = __('Browse Exhibits');
echo head(array('title' => $title, 'bodyclass' => 'exhibits browse'));
?>
<p class="orientation large-10 large-offset-1 columns">Explore our exhibits. <span class="show-for-medium">Use the tags below to filter them by subject</span></p>

<div class="tag-cloud align-spaced show-for-medium">
<?php $tags = get_records('Tag', array('type'=>'exhibit' )); ?>
<?php echo classed_tag_cloud($tags, 'exhibits/browse'); ?>
</div>
<div class="exhibits">
    <?php if (count($exhibits) > 0): ?>
    <?php $exhibitCount = 0; ?>
    <?php foreach (loop('exhibit') as $exhibit): ?>
        <?php $exhibitCount++; ?>
        <div class="row exhibit-row">
            <?php if ($exhibitImage = record_image($exhibit, 'square_thumbnail')): ?>
                <div class="large-3 column">
                    <?php echo exhibit_builder_link_to_exhibit($exhibit, $exhibitImage, array('class' => ' circle')); ?>
                </div>           
            <?php endif; ?>
            
            <div class="large-9 column">
                <h2><?php echo link_to_exhibit(); ?></h2>
            
                <?php if ($exhibitDescription = metadata($exhibit, 'description', array('no_escape' => true, 'snippet' => 300))): ?>
                    <div class="description"><?php echo $exhibitDescription; ?></div>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>

</div>

<?php echo pagination_links(); ?>

<?php else: ?>
<p><?php echo __('There are no exhibits available yet.'); ?></p>
<?php endif; ?>

<?php echo foot(); ?>
