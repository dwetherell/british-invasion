<?php
/**
 * Created by PhpStorm.
 * User: dwetherell
 * Date: 9/1/16
 * Time: 8:39 PM
 */
?>



<div id="fh5co-about" data-section="about">
    <div class="container">
        <div class="row r-pb">
            <div class="col-md-8 col-md-offset-2 text-center section-heading animate-box">


                <h1 class="animate-box fadeInUp animated pageheaders"><?php the_field('title'); ?></h1>
                <h3><?php the_field('sub_title'); ?></h3>
                <div class="animate-box fadeInUp animated">

                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'page' ); ?>
                <?php endwhile; // end of the loop. ?>
               </div>

            </div>
        </div>

        <!--<div class="row">
            <div class="col-md-6 animate-box">
                <div class="fh5co-text">
                    <h2>Rob Smith</h2>
                    <span class="fh5co-meta">Photographer, Video Editor</span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="fh5co-text">
                    <h2>Jean Smith</h2>
                    <span class="fh5co-meta">Photographer, Copy writer</span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
            </div>
        </div>-->
        <div class="col-md-8 col-md-offset-2 text-center section-heading animate-box">

        <?php the_field('body_bottom'); ?>



        </div>






    </div>
</div>
