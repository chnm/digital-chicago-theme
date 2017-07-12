</div><!-- end content -->

<footer role="contentinfo" class="row">

    <div id="footer-content" class="center-div">

        <div class="footer-text large-8 column">
            <img class="large-1 show-for-large footer-logo" src="<?php echo img('DC_logo_light.png', $dir='img'); ?>" alt="Logo for Digital Chicago">
            <?php if($footerText = get_theme_option('Footer Text')): ?>
            <div id="custom-footer-text">
                <p><?php echo get_theme_option('Footer Text'); ?></p>
            </div>
            <?php endif; ?>
        </div>

        <div class="logos large-4 column">
            <img class="small-4 hide-for-large column" src="<?php echo img('DC_logo_light.png', $dir='img'); ?>" alt="Logo for Digital Chicago">
            <a href="http://www.lakeforest.edu/"><img class="large-3 small-4 column float-right" src="<?php echo img('logo@2x.png', $dir='img'); ?>" alt="Logo for Lake Forest College"></a>
            <a href="https://mellon.org/"><img class="large-5 small-4 column float-right" src="<?php echo img('mellon-logo.svg', $dir='img'); ?>" alt="Logo for the Mellon Foundation"></a>
        </div>
        <div class="social-media large-2 large-offset-10 medium-3 medium-offset-9 small-12 column">
            <a href="https://twitter.com/digital_chicago"><i class="fa sm-icon fa-twitter"></i></a>
            <a href="https://www.instagram.com/digitalchicago/"><i class="fa sm-icon fa-instagram"></i></a>
            <a href="https://www.facebook.com/LFCDigitalChicago"><i class="fa sm-icon fa-facebook"></i></a>
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
