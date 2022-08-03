<?php
/**
 * Created by PhpStorm.
 * User: dwetherell
 * Date: 8/30/16
 * Time: 11:03 PM
 */
?>

<div id="fh5co-header">
    <div class="container">
        <!-- Mobile Toggle Menu Button -->
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
        <div id="fh5co-logo">
            <a href="/"><img style="height: 50px" src="<?php echo get_site_url(); ?>/wp-content/themes/BI/app/images/logo.png"><span></span></a>
        </div>
        <nav id="fh5co-main-nav">
            <?php wp_nav_menu(array(
                'theme_location' => 'main-nav',
                'container' => false
            )); ?>
        </nav>
    </div>
</div>

