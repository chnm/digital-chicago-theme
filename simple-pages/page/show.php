<?php
$bodyclass = 'page simple-page';
if ($is_home_page):
    $bodyclass .= ' simple-page-home';
endif;
echo head(array(
    'title' => metadata('simple_pages_page', 'title'),
    'bodyclass' => $bodyclass,
    'bodyid' => metadata('simple_pages_page', 'slug')
));
?>
<div id="primary" class="large-9 column">
    <?php if (!$is_home_page): ?>
    <!-- <h1><?php echo metadata('simple_pages_page', 'title'); ?></h1> -->
    <?php endif; ?>
    <?php
    $text = metadata('simple_pages_page', 'text', array('no_escape' => true));
    echo $this->shortcodes($text);
    ?>
</div>

<div class="large-3 column">
<nav data-sticky-container>
  <div data-sticky data-margin-top="2" data-anchor="primary">
    <ul class="menu vertical">
        <li><a href="#about">About</a></li>
        <li><a href="#contributor">Contributors</a></li>
        <li><a href="#permissions">Permissions & Rights</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    </div>
</nav>
</div>

<?php echo foot(); ?>