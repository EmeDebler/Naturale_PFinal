<?php get_header(); ?>
<main class="main_color">
  <div class="container">
    <div class="row">
<!--Articulo 1-->
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-4 img_color text-center">
         <h1 class="parrafo_1">Misión</h1>
         <hr color="DCFA57" width="500">
         <p class="parrafo_color">Nuestra página está enfocada en informar y prestar servicios de calidad en el área salud para nuestra comuna, aportando en terapias alternativas que sirven de apoyo para diferentes patologías todo bajo la asesoría de un equipo de especialistas certificados en el área de la medicina holística y sus ramas.</p>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-4 img_color text-center">
              <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zQB6THiHtPU" allowfullscreen></iframe>
              </div>
        </div>
        <hr color="DCFA57">
        </div>
<!--prueba icono-->
      <div class="col-12 col-sm-10 col-md-4 col-lg-4 text-center font_ico none"><h1>Consejos</h1>
        <a href="<?php bloginfo('url'); ?>/noticias/"><span class="main_ico pulse"><i class="fas fa-spa"></i></span></a> 
      </div>
      <div class="col-12 col-sm-10 col-md-4 col-lg-4 text-center font_ico_2"><h1>Contacto</h1>
        <a href="<?php bloginfo('url'); ?>/contacto/"><span class="main_ico_2 pulse_2"><i class="fas fa-headset"></i></span></a> 
      </div>
      <div class="col-12 col-sm-10 col-md-4 col-lg-4 text-center font_ico_3 none"><h1>Blog</h1>
       <a href="<?php bloginfo('url'); ?>/blog/"><span class="main_ico_3 pulse_3"><i class="fas fa-leaf"></i></span></a>  
     </div>
<!--Articulo 2-->
     <div class="col-12 col-sm-12 col-md-12 col-lg-12 pt-2 mt-2 img_color text-center">
    <hr color="DCFA57">
      <h1 class="parrafo_1">Terapias Complementarias/Alternativas (MCA)</h1>
    <hr color="DCFA57" width="500">
      <p class="parrafo_color">Las terapias complementarias son alternativas que pueden desempeñar alguna función en un programa de tratamiento integral diseñado por usted y el profesional de la salud que lo atiende.
        La eficacia de una terapia complementaria está respaldada por diversos estudios confiables.
      Por lo general, las terapias complementarias son indicadas por profesionales médicos con la finalidad de complementar a un tratamiento convencional.</p>
      <p class="parrafo_color">De acuerdo a la realidad país, y siguiendo la definición de la Colaboración Cochrane, se entiende como Medicinas Complementarias/Alternativas (MCA) a ..” un amplio dominio de recursos de sanación que incluye todos los sistemas, modalidades, prácticas de salud, teorías y creencias que los acompañan, diferentes a aquellas intrínsecas al sistema de salud políticamente dominante de una sociedad particular en un período histórico dado”. En otros términos se trata de un variado conjunto de teorías y prácticas diferentes a la medicina oficial, trasplantadas e insertas en una sociedad que “tradicionalmente” no ha practicado esa medicina. Las medicinas de nuestros pueblos originarios (medicina tradicional) no entran en esta definición.</p>
      <p class="parrafo_color">Otras prácticas aparentemente menos complejas son el Reiki, la aromoterapia, el quiromasaje, etc. Hoy en día se asume que todas las medicinas trabajan en forma complementaria, por lo cual a futuro se tiende a  hablar de una Medicina Integrativa.</p>

     <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-4 img_color text-center">
        <a href="<?php bloginfo('url'); ?>/terapias/"><span class="main_ico_4"><i class="fas fa-chevron-circle-down"></i></span></a>
     </div>
    <hr color="DCFA57">
     </div>
<!--Artículos-->

<section class="p-0" id="portfolio">
<div class="container img-fliud">
<h2 class="section-heading text-center p-2">Terapias Destacadas</h2>
<hr class="my-4" color="DCFA57">
<div class="row no-gutters popup-gallery">
  <?php 
    $arg = array(
      'post_type'  => 'articulo',
      'posts_per_page'  => 6  
    );

    $get_arg = new WP_Query( $arg );

    while ( $get_arg->have_posts() ) {
      $get_arg->the_post();
  ?>

   <div class="col-lg-4 col-sm-6">
    <a class="portfolio-box" href="<?php the_post_thumbnail_url( 'large' ) 
    ?>">
    <?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) );
     ?>
    <div class="portfolio-box-caption">
      <div class="portfolio-box-caption-content">
        <div class="project-category text-faded">
          <?php the_title() ?>
        </div>
        <div class="project-name">
        <?php the_content() ?>
        </div>
      </div>
    </div>
    </a>
   </div>

  <?php } wp_reset_postdata();
 ?>
</div>
</div>
</section>
<!--logo Quilicura-->
     <div class="col-12 col-sm-12 col-md-4 col-lg-4 p-4 text-center parrafo_color">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.png" width="115" alt="">
     </div>
     <div class="col-12 col-sm-12 col-md-4 col-lg-4 p-4 text-center parrafo_color">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.png" width="99" alt="">
     </div>
     <div class="col-12 col-sm-12 col-md-4 col-lg-4 p-4 text-center parrafo_color">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_salud.png" alt=""> 
     </div>
     <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-4 parrafo_color"></div>
    </div>
  </div>
</main>
<?php get_footer(); ?>