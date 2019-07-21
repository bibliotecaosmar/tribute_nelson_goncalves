<?php get_header(); ?>

<div class="background-img bg"></div>

<div class="container-fluid">

  <div class="fixed-top">

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

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

          <div class="blog-post card bg-transparent" style="width: 27em;">

            <div class="card-body bg-transparent">

              <h5 class="card-title text-light">Cantor e Compositor</h5>

              <p class="card-text text-light">Esse é um micro texto: é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60.</p>

              <a href="<?php the_permalink(); ?>" class="btn btn-light text-dark">Continuar</a>

            </div>

          </div>

        <?php endwhile; ?>

        <?php else : get_404_template(); endif; ?>

        </div>

      </div>

  </div>

</div>

<?php get_footer(); ?>
