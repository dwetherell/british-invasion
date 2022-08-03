<?php
/**
 * Created by PhpStorm.
 * User: dwetherell
 * Date: 9/1/16
 * Time: 8:39 PM
 */
$type = 'video';
$params=array(
    'post_type' => $type,
    'post_status' => 'publish');

$pods = pods( 'video', $params );


?>

<style type="text/css">
    .row{
        margin-top:40px;
        padding: 0 10px;
    }

    .clickable{
        cursor: pointer;
    }

    .panel-heading span {
        margin-top: -20px;
        font-size: 15px;
    }
    .videoWrapper {
        background-color: #000;
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        padding-top: 25px;
        height: 0;
    }
    .videoWrapper iframe {
        background-color: #000;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

</style>

<div id="fh5co-about" data-section="about">
<div class="container">
    <div class="row r-pb">
        <div class="col-md-8 col-md-offset-2 text-center section-heading animate-box">

            <h2 class="animate-box fadeInUp animated pageheaders"><?php echo get_the_title(); ?></h2>
            <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'content', 'page' );
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            endwhile;
            ?>
            <?php  while ($pods->fetch() ) { ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading audio-header">
                            <h2 class="panel-title"><?php echo $pods->field('video_name')?></h2>
                        </div>
                        <div class="videoWrapper">
                            <?php echo$pods->field('youtube_url'); ?>
                        </div>
                        <p><?php echo $pods->field('video_description')?></p>
                    </div>
            <?php     }  ?>

        </div>
    </div>

</div>
</div>

<script type="application/javascript">
    $(document).on('click', '.panel-heading span.clickable', function(e){
        var $this = $(this);
        if(!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    })
</script>







