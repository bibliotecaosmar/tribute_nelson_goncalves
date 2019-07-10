<?php get_header(); ?>

<div class="background-img"></div>

<div class="container">

  <div class="row cover-mirrored"></div>

  <div class="row">
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
    <div class="col-6"></div>
    <div class="col-6 pl-5 mt-3">

      <h3><?php the_title(); ?></h3>

      <?php the_content(); ?>

    </div>
  </div>

</div>

<?php get_footer(); ?>
