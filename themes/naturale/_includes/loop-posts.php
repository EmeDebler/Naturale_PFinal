  	  <div class="col-md-4 mt-5 text-center">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('custom-size-blog', array('class' => 'img-fluid mb-3'));
      } else {
        echo '<img src="' . get_template_directory_uri() . '/assets/img/
massage-599532_1920-400x300.jpg" class="img-fluid mb-3"/>';
      } ?>
      <h4><?php the_title() ?></h4>
      <p><?php the_excerpt() ?></p>
      <a href="<?php echo get_permalink() ?>"><span class="main_ico_4 text-center"><i class="fas fa-chevron-circle-down"></i></span></a>
  </div>
    