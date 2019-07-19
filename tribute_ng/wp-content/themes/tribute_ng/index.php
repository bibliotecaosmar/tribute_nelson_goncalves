<?php get_header(); ?>

<div class="background-img"></div>

<div class="container">

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

        <div class="card bg-transparent" style="width: 27em;">
          <div class="card-body bg-transparent">
            <h5 class="card-title text-light">Card title</h5>
            <p class="card-text text-light">é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60.</p>

            <a href="#" class="btn btn-light border border-info rounded active">Go somewhere</a>

          </div>
        </div>

      </div>
    </div>

  </div>

</div>

<?php get_footer(); ?>