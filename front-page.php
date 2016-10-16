<?php get_header(); ?>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Cursos ECTS</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( in_category( 'cursos-ects' ) ) : ?>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal<?php the_ID(); ?>" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <?php the_post_thumbnail($size='full', $attr=array('class' => 'img-responsive'));?>
                </a>
            </div>
            <?php endif; ?>
          <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        </div>
    </div>
</section>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php if ( in_category( 'cursos-ects' ) ) : ?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><?php the_title(); ?></h2>
                            <hr class="star-primary">
                            <?php the_post_thumbnail($size='full', $attr=array('class' => 'img-responsive'));?>
                            <?php the_content(); ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php endif; ?>
<?php endwhile; else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
