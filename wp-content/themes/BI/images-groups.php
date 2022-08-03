<?php
/*
Template Name: Image Groups Template
*/

$type = 'image_group';
$params=array(
    'limit' => -1,
    'post_type' => $type,
    'post_status' => 'publish');

$pods = pods( 'image_group', $params );
$podsCount = $pods->total();


?>

<?php include('includes/header.php'); ?>
<body>


<?php include('includes/nav.php'); ?>


<div id="fh5co-main">
    <div class="fh5co-overlay-mobile"></div>




    <div id="fh5co-about" data-section="about">
        <div class="container">
            <div class="row r-pb">
                <div class=".col-sm-5 .col-md-6 col-md-8 col-md-offset-2 text-center section-heading">
                    <h2 class="animate-box fadeInUp animated pageheaders"><?php echo get_the_title(); ?></h2>
                </div>
            </div>
            <div class="row">
                <?php  while ($pods->fetch() ) { ?>
                    <?php
                    $ImageLink = $pods->field('image_page_link');
                    $imageObject = $pods->field('group_image');
                    $imageName = $pods->field('group_name');
                    $imageUrl = $imageObject['guid'];
                  ?>

                    <div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
                        <div class="img-grid">
                            <img src="<?php echo $imageUrl; ?>" alt="" class="img-responsive">
                            <!--data-target="#lightbox"-->
                            <a href="<?php echo get_site_url(); ?>/<?php echo $ImageLink['post_name'];?>" data-toggle="modal" >
                                <div>
                                    <h2 class="fh5co-title"><?php echo $imageName; ?></h2>
                                    <span class="fh5co-meta"><?php echo $pods->field('group_description'); ?></span>

                                </div>
                            </a>
                            <h2 class="fh5co-title" style="text-align: center"><?php echo $imageName; ?></h2>
                        </div>
                    </div>


                <?php     }  ?>



            </div>
        </div>
    </div>





    <?php include('includes/footer.php'); ?>




</body>
</html>

