</div><!-- end content -->

<footer role="contentinfo" class="row">

    <div id="footer-content" class="center-div">
        <div class="footer-text large-7 column">
            <?php if($footerText = get_theme_option('Footer Text')): ?>
            <div id="custom-footer-text">
                <p><?php echo get_theme_option('Footer Text'); ?></p>
            </div>
            <?php endif; ?>
        </div>

        <div class="logos large-5 column">
            <a href="http://www.lakeforest.edu/"><img class="large-3 column float-right" src="<?php echo img('logo@2x.png', $dir='img'); ?>" alt="Logo for Lake Forest College"></a>
            <a href="https://mellon.org/"><img class="large-5 column float-right" src="<?php echo img('mellon-logo.svg', $dir='img'); ?>" alt="Logo for the Mellon Foundation"></a>
        </div>


    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
        Omeka.skipNav();

    });
</script>
<script>
    jQuery(document).foundation()
</script>

</body>

</html>
