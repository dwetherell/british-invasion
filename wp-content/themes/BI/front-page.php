<?php
/*
Template Name: Home page
*/
$today = date('Y-m-d');
$relationShip = get_field('page_link_button');
$newParam = array(
    'limit' => 1,
    'orderby' => 'event_date ASC',
    'where'=>"event_date >= '$today'"
);

$newPods = pods( 'events', $newParam );


?>
<?php   $content = apply_filters('the_content', $post->post_content); ?>
<?php include('includes/header.php'); ?>
<body>


<?php include('includes/nav.php'); ?>


<div id="fh5co-main">
    <div class="fh5co-overlay-mobile"></div>
    <div id="fh5co-home" class="js-fullheight" data-section="home">



        <div class="flexslider">

            <div class="fh5co-overlay"></div>
            <div class="fh5co-text">
                <div class="container">
                    <div class="row text-center">
                        <h1 class="animate-box"><?php the_field('banner_title'); ?></h1>
                        <div class="fh5co-go animate-box">
                            <a href="#" class="js-fh5co-next">
                                <?php the_field('go_to_link_'); ?>
                                <span><i class="icon-arrow-down2"></i></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <ul class="slides">
                <picture>
                    <source srcset="<?php the_field('hero_image_mobile'); ?>" media="(max-width: 600px)">
                    <img srcset="<?php the_field('hero_image_large'); ?>" alt="">
                </picture>

                <!--<li style="background-image: url(wp-content/themes/BI/app/images/BI-Red-J-JPEG.jpg);"></li>-->
            </ul>

        </div>

    </div>


    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center section-heading">
                    <h1 class="animate-box"> <?php echo the_field('top_headline');?></h1>
                    <p class="fh5co-lead animate-box"><?php echo the_field('bottom_headline'); ?></p>

                    <!-- Start your code here -->
                    <?php  while ($newPods->fetch() ) {
                        ?>
                        <?php $newEventDate = $newPods->field('event_date');
                        $newEventDay = date('d', strtotime($newEventDate));
                        $newEventYear = date('Y', strtotime($newEventDate));
                        $newEventFullDay = date('l', strtotime($newEventDate));
                        $newEventMonth =  date('F', strtotime($newEventDate));
                        ?>
                        <div class="panel panel-default event animate-box">
                            <div class="panel-body">
                                <div class="rsvp col-xs-2 col-sm-2" style="background-color: #861628 !important">
                                    <?php echo $newEventFullDay ?>
                                    <?php echo $newEventMonth; ?>
                                    <?php echo $newEventDay; ?>
                                    <?php echo $newEventYear ?>

                                </div>
                                <div class="info col-sm-10">

                                    <h2 style="text-align: left"><?php echo $newPods->field('event_name');?></h2>
                                    <h6>Address: <?php echo $newPods->field('event_address');?></h6>
                                    <h6>Time:  <?php echo date("g:i a", strtotime($newPods->field('event_time'))); ;?></h6>
                                    <div style="text-align: left;">
                                        <p><?php echo $newPods->field('event_description'); ?></p>

                                        <p>For More information visit <a target="_blank" href="<?php echo $newPods->field('event_url');?>">Click here</a></p>
                                    </div>



                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <p class="animate-box">

                        <?php echo $content; ?>

                    <p class="animate-box"><a href="<?php echo get_site_url(); ?>/contact" class="btn btn-primary btn-lg"><?php echo the_field('link_button_name');?> </a></p>
                    <div class="fb-like animate-box" data-href="https://www.facebook.com/thebritishinvasionpage/"
                         data-width="200px" data-layout="button_count"
                         data-action="like" data-size="large" data-show-faces="true"
                         data-share="true">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php //include('includes/contact.php'); ?>

    <?php // include('includes/quotes.php'); ?>



    <?php include('includes/footer.php'); ?>
</body>
</html>

