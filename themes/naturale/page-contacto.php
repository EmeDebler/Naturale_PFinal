<?php get_header(); ?>

  
  <div class="col-12 col-sm-12 text-center">
    <h1 class="font_title">Ubicación</h1>
     <hr color="DCFA57">
     
   <iframe class="img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.0808280862634!2d-70.73449348534719!3d-33.36895578079737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c0ddb38461cf%3A0x97999a3dbdb39e5b!2sMunicipalidad+de+Quilicura!5e0!3m2!1ses-419!2scl!4v1541136280481" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      
   
       
   <h1 class="text-center font_title">Contáctanos</h1>
     <hr color="DCFA57">
        <?php echo do_shortcode('[contact-form-7 id="39" title="Formulario de contacto 1"]') ?>
   </div>
<!--logo Quilicura-->
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 p-4 text-center">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.png" width="115" alt="">
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 p-4 text-center">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.png" width="99" alt="">
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 p-4 text-center">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_salud.png" alt=""> 
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-4"></div>
    </div>
  </div>
<?php get_footer(); ?>