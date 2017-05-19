<?php
echo head(array(
    'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
    'bodyclass' => 'exhibits show'));
?>

<div id="exhibit-blocks" class="large-9 column">
<h1><span class="exhibit-page"><?php echo metadata('exhibit', 'title'); ?></span></h1>

<h2><span class="exhibit-page"><?php echo metadata('exhibit_page', 'title'); ?></span></h2>
<?php exhibit_builder_render_exhibit_page(); ?>
</div>

<div data-sticky-container class="large-3 column" id="sidebar-wrap">
<div data-sticky data-anchor="exhibit-blocks" id="sidebar">
    <div data-margin-top="2">
        <h5>Table of Contents</h5>
        <nav id="exhibit-pages">
            <?php echo exhibit_builder_page_tree($exhibit, $exhibit_page); ?>
        </nav>

        <div id="related-exhibits">
            <?php if ($exhibitTags = tag_string('exhibit', 'exhibits', ' ')): ?>
                <h5>Explore projects related to</h5>
                <p class="tags"><?php echo $exhibitTags; ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>

<?php echo foot(); ?>