<?php
/*
Template Name: Image Gallery Template
*/


if ($_GET) {
    $group = $_GET['group'];
}

$type = 'photos';
$params=array(
    'limit' => -1,
    'post_type' => $type,
    'post_status' => 'publish');

$pods = pods( 'photos', $params );
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
                    <h2 class="animate-box fadeInUp animated pageheaders"> </h2>

                </div>
            </div>
            <div class="row">
                <?php  while ($pods->fetch() ) {

                    $test = $pods->field('image_group');
                    $another = $test['post_title'];

                    $imageObject = $pods->field('image_path');
                    $imageUrl = $imageObject['guid'];
                    if ( $another == $group) {
                    ?>
                    <div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
                        <div class="img-grid">
                            <img src="<?php echo $imageUrl; ?>" alt="" class="img-responsive">
                            <!--data-target="#lightbox"-->
                        </div>
                    </div>

                    <?php     }  ?>
                <?php     }  ?>



            </div>
        </div>
    </div>





    <?php include('includes/footer.php'); ?>






</body>
</html>

