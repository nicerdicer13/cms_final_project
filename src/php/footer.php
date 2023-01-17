<?php
  $whitelist = array('127.0.0.1', '::1');
  $ids_array;

  if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
      // Localhost
      $ids_array = [109];
  } else {
      // Server
      $ids_array = [];  
  }
?>
<footer>
        <?php $header_query = new WP_Query(array('p' => $ids_array[0]));
            if ($header_query->have_posts()) :
                while ($header_query->have_posts()) : $header_query->the_post(); ?>
                    <div>
                        <h2> <?php the_title(); ?> </h2>
                        <?php the_content(); ?>
                        <span><?php echo get_post_custom_values('year')[0]; ?><span>
                    </div>
                    <div class="attributions">
                        <div>
                            <h3><?php echo get_post_custom_values('attributions-category')[0]?></h3>
                            <a href="<?php echo get_post_custom_values('attributions-link')[0]?>"><?php echo get_post_custom_values('attributions-link')[0]?></a>
                        </div>
                        <div>
                            <h3><?php echo get_post_custom_values('attributions-category')[1]?></h3>
                            <a href="<?php echo get_post_custom_values('attributions-link')[1]?>"><?php echo get_post_custom_values('attributions-link')[1]?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
    </footer>