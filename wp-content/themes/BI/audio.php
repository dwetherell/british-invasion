<?php
/*
Template Name: Audio Template
*/

$bg = 'page_background';
$params=array(
    'post_type' => $bg,
    'post_status' => 'publish');

$background = pods( 'page_background', $params );


?>

<?php include('includes/header.php'); ?>
<style type="text/css">
    .row{
        margin-top:40px;
        padding: 0 10px;
    }
    .play-pause {
        width: 50px !important;
    }
    .audiojs {
        width: 100%;
    }
    .audiojs  {
        display: table;
        margin: 0 auto;
    }
    .audiojs .scrubber {
        width: 50% !important;
    }


    .clickable{
        cursor: pointer;
    }

    .panel-heading span {
        margin-top: -20px;
        font-size: 15px;
    }
</style>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/BI/app/js/audiojs/audiojs/audio.min.js"></script>
<!--<link rel="stylesheet" href="<?php// echo get_site_url(); ?>/wp-content/themes/BI/app/js/audiojs/includes/index.css" media="screen">-->
<script>
    audiojs.events.ready(function() {
        audiojs.createAll();
    });
</script>

<body>


<?php include('includes/nav.php'); ?>


<div id="fh5co-main">
    <div class="fh5co-overlay-mobile"></div>
    <?php echo $background->field('page_background'); ?>


    <?php include('includes/audio.php'); ?>



    <?php include('includes/footer.php'); ?>
</body>
</html>

