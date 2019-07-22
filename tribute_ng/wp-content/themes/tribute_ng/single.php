<?php get_header(); ?>

<div class="background-img"></div>

<div class="container-fluid">

  <div class="fixed-top">

    <div class="row cover-mirrored align-items-end">

      <div class="col-6"></div>

      <div class="col-6 pl-5">

        <nav class="navbar navbar-expand-lg navbar-dark" role="navigation">

          <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            wp_nav_menu( array(
              'theme_location'    => 'principal',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>

          </div>

        </nav>

      </div>

    </div>

    <div class="row">

      <div class="col-2"></div>

      <div class="col-8 mt-5 ml-4 mr-5 pt-2">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

          <div class="bg-light pl-4 pr-4 pt-3 rounded">

            <h3 class="col mb-1"><?php the_title(); ?></h3>

            <p><?php the_content(); ?></p>

            <p class="text-muted">Publicado em: <span class="badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span></p>

          </div>

        <?php endwhile; ?>

        <?php else : get_404_template(); endif; ?>

      </div>

      <div class="col-2"></div>

    </div>

  </div>

</div>

<?php get_footer(); ?>
