<?php
/*
Template Name: Stage Template
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
                <div class="col-md-8 col-md-offset-2 text-center section-heading animate-box">


                    <h1 class="animate-box fadeInUp animated pageheaders"></h1>
                    <h3></h3>
                    <div class="animate-box fadeInUp animated">

                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', 'page' ); ?>
                        <?php endwhile; // end of the loop. ?>


                      <img style="width: 100%; height: auto;" src="<?php the_field('stage_plot_image'); ?>" alt="tester" />




                    </div>

                </div>
            </div>




        </div>
    </div>








    <?php include('includes/footer.php'); ?>
</body>
</html>

