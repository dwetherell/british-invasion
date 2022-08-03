<?php
/*
Template Name: Schedule page
*/
$today = date('Y-m-d');

$params = array(
    'limit' => -1,
    'orderby' => 'CAST(event_date as DATETIME) ASC',
    'where'=>"event_date >= '$today'"

);

$pods = pods( 'events', $params );




    ?>

<?php include('includes/header.php'); ?>
<body>


<?php include('includes/nav.php'); ?>


<div id="fh5co-main">
    <div class="fh5co-overlay-mobile"></div>


    <div id="fh5co-about" data-section="audio">

        <div class="container">
            <div class="row r-pb">
                <div class="col-md-8 col-md-offset-2 text-center section-heading">
                    <h2 class="animate-box fadeInUp animated pageheaders"><?php the_field('title'); ?></h2>
                    <div class="animate-box fadeInUp animated">
                        <?php
                        while ( have_posts() ) : the_post();
                            get_template_part( 'content', 'page' );
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        endwhile;
                        ?>
                    </div>
<?php
$redHeader = "background-color: #861628 !important";
$i = 0;
?>
<?php  while ($pods->fetch() ) { ?>
    <?php $eventDate = $pods->field('event_date');
                    $eventDay = date('d', strtotime($eventDate));
                    $eventYear = date('Y', strtotime($eventDate));
                    $eventFullDay = date('l', strtotime($eventDate));
                    $eventMonth =  date('F', strtotime($eventDate));
                    ?>
                    <div class="panel panel-default event animate-box">
                        <div class="panel-body">
                            <div class="rsvp col-xs-2 col-sm-2" style="<?php if($i == 0 ){ echo $redHeader;} ?>">
                                <?php echo $eventFullDay ?>
                                <?php echo $eventMonth; ?>
                                <?php echo $eventDay; ?>
                                <?php echo $eventYear ?>

                            </div>
                            <div class="info col-sm-10">

                                <h2 style="text-align: left"><?php echo $pods->field('event_name');?></h2>
                                <h6>Address: <?php echo $pods->field('event_address');?></h6>
                                <h6>Time: <?php echo date("g:i a", strtotime($pods->field('event_time'))); ;?> </h6>
                                <div style="text-align: left;">
                                    <p><?php echo $pods->field('event_description'); ?></p>

                                    <p>For More information visit <a target="_blank" href="<?php echo $pods->field('event_url');?>">Click here</a></p>
                                </div>



                            </div>
                        </div>
                    </div>
    <?php $i++  ?>
                    <?php     }  ?>

                </div>



            </div>
            </div>


        </div>
    </div>



    <?php include('includes/footer.php'); ?>
</body>
</html>

