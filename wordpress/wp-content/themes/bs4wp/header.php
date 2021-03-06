<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta <?php bloginfo('charset')?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">

  <?php wp_head() ?>
</head>

<body>

  <div class="container">
    <div class="row my-5 align-items-center">
      <div class="col-md-8 col-sm-12">
        <h1>Meu primeiro tema</h1>
        <p class="lead">Fiz com WordPress</p>
      </div>
      <div class="col-md-4 col-sm-12">
        <form>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="O que procura">
            <div class="input-group-append">
              <button class="btn btn-my-color-5" type="button">Buscar</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row">

      <div class="col mb-5">

        <nav class="navbar navbar-expand-lg navbar-dark bg-my-color-2 rounded" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
              aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
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