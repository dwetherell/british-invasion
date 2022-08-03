<?php
/*
Template Name: BI Gallery Template
*/



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
                <div class="goBack" style="float: left; width: 100%">

                    <a href="<?php echo get_site_url(); ?>/image-groups">Back to Images </a>
                </div>

            </div>
            <div class="row">

                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'page' ); ?>
                <?php endwhile; // end of the loop. ?>


            </div>
        </div>
    </div>

<style type="text/css">
    .load_more_button4 {
        color: #fff !important;;
        background: #b70419 !important;

    }
    .load_more_button4:hover{
        color: #fff !important;;
        background: #b70419 !important;
    }

    </style>



    <?php include('includes/footer.php'); ?>




</body>
</html>

