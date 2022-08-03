<?php
/**
 * Created by PhpStorm.
 * User: dwetherell
 * Date: 9/1/16
 * Time: 8:39 PM
 */
$bg = 'page_background';
$type = 'audio';
$params=array(
    'post_type' => $type,
    'post_status' => 'publish');

$pods = pods( 'audio', $params );
$background = pods( 'page_background', $bg );


?>



<div id="fh5co-about" data-section="about">
<div class="container">
    <div class="row r-pb">
        <div class="col-md-8 col-md-offset-2 text-center section-heading animate-box">
            <h2 class="animate-box fadeInUp animated pageheaders"><?php echo get_the_title(); ?></h2>
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

            <?php  while ($pods->fetch() ) { ?>
                <?php

                $audioObject = $pods->field('audio_file');
                $audioName = $pods->field('audio_name');
                $audioDescription = $pods->field('audio_description');
                $audioItem = $audioObject['guid'];
                $attr = array(
                    'src'      => $audioItem,
                    'loop'     => '',
                    'id'  =>     'audio-player',
                    'autoplay' => '',
                    'preload'  => 'none',
                    'class'   => 'wp-audio-shortcode',
                    'style'   => 'width: 100%; background-color: #000; color: #000'
                );?>

                <div class="row">
                    <h2>  <?php echo $audioName; ?></h2>
                    <p><?php echo $audioDescription; ?> </p>
                    <audio src="<?php echo $audioItem; ?>" preload="auto"></audio>

                </div>


            <?php     }  ?>

        </div>
    </div>
</div>

</div>



<script type="application/javascript">

    $(document).ready(function() {
        $('.icon-play-sign').click(function() {
            $(this).hide('slow');
            var start = $(this).data('start');
            var end = $(this).data('end');

            var audio = new Audio();
            var canPlayOgg = !!audio.canPlayType && audio.canPlayType('audio/ogg; codecs="vorbis"') !== "";

            var file = $('.entireclip > audio').attr('id');


            var baseUrl = "http://faulkner.lib.virginia.edu/static/audio/";
            baseUrl += canPlayOgg ? file + ".ogg" : file + '.mp3';
            baseUrl += "#t=" + start + "," + end;

            console.log(baseUrl);

            audio.setAttribute('src', baseUrl);
            audio.controls = true;
            audio.preload = 'auto';

            $(this).parent().append(audio);

            audio.play();

            console.log('start ', start);
            console.log('end ', end);

        });

    });


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








