<?php get_header(); ?>

<div class="container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

<?php
if (has_post_thumbnail() ){
	$img = get_the_post_thumbnail_url('', 'post-custom-size');
} else {
	$img = get_template_directory_uri() . '/assets/img/massage-599532_1920-400x300.jpg';
 }
 
 ?>

<div id="post-jumbotron" class="jumbotron p-5 md-3 text-center font_main" style="background-image: url('<?= $img ?>')">
    <h2><?php the_title() ?></h2>
    <p><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
</div>

<?php the_content(); ?>

<div class="text-center mb-5">
	<a href="blog"><span class="main_ico_4 text-center"><i class="fas fa-chevron-circle-left"></i></span></a>
</div>

<?php endwhile; endif; ?>

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