  <?php get_header(); ?>
   <h1 class="text-center font_title">Nuestro Blog</h1>
  <hr color="DCFA57">
<div class="container">
  <div class="row">
  	<?php 
  	$arg = array(
     'post_type'  => 'post',
     'posts_per_page' => -1
  	);

  	$get_arg = new WP_Query( $arg );

  	while ( $get_arg->have_posts() ) {
  		$get_arg->the_post();
  	?>
    <?php echo get_template_part('_includes/loop', 'posts'); ?>
    <?php }wp_reset_postdata();
     ?>
  </div>
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