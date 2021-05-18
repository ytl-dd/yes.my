<?php get_header(); ?>

<?php 
    if ( have_posts() ) : 
        while ( have_posts() ) :
            the_post();
?>

<section class="dblock flexbox" id="main-content">
    <div class="centerize">
        <form data-drupal-form-fields="">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <br><br><p class="shoutout brand lg"><?php the_title(); ?></p><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col body-content">
                        <div class="media-ctnt-desc-hdr">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col center-text">
                        <br><br><a href="/media-centre" class="btn btn-primary">Return to media centre</a><br><br>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php 
        endwhile;
    endif;
?>

<style type="text/css">
    strong { font-weight: 700; }
    .body-content img {
        max-width: 100%;
        height: auto;
        margin:20px 0;
    }
</style>



<?php get_footer(); ?>