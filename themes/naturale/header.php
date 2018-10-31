<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>
  <header>
<!--navbar--> 
    <nav class="nav_position navbar navbar-expand-xl navbar-light  nav_color">
      <a class="navbar-brand" id="nav_ico" href="<?php bloginfo('http://186.64.118.50/~mpetorres/'); ?>/home/"><i class="fas fa-home"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
           <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
           <a class="nav-link" id="nav_font" href="<?php bloginfo('url'); ?>/terapias/">Terapias</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" id="nav_font" href="<?php bloginfo('url'); ?>/blog/">Blog</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" id="nav_font" href="<?php bloginfo('url'); ?>/noticias/">Noticias</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" id="nav_font" href="<?php bloginfo('url'); ?>/contacto/">Contacto</a>
          </li>
        </ul>
      </div>
    </nav>
<!--fin navbar-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/globulos.jpg" alt="First slide"> 
          <div class="carousel-caption d-none d-md-block">
            <h1 class="titulo">Terapias Complementarias</h1>
            <h4 class="titulo_2">Quilicura</h4>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/hierba.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="titulo">Terapias Complementarias</h1>
            <h4 class="titulo_2">Quilicura</h4>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/comida.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="titulo">Terapias Complementarias</h1>
            <h4 class="titulo_2">Quilicura</h4>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>