<?php
  $whitelist = array('127.0.0.1', '::1');
  $ids_array;

  if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
      // Localhost
      $ids_array = [73, 75, 77, 79, 82, 85, 88, 10, 7, 141];
  } else {
      // Server
      $ids_array = [];  
  }
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is a fictional project by Jason Kenny and Tanja Gruber, which was created in the course 
                                        “Content Management Systems” for the bachelor course MultiMediaTechnology at the Salzburg 
                                        University of Applied Sciences. Rick Randy is a super entertaining senior web developer with 
                                        150.000 followers on Youtube. He is the author of the beloved book series 
                                        'Why you rightfully hate JavaScript'.">
    <meta name="robots" content="index, follow"> 
    <meta property="og:title" content="Rick Randy">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Rick Randy is a fictional project by Jason Kenny and Tanja Gruber.">
    <meta property="og:locale" content="de_DE"> 
    <meta property="og:url" content="http://vm-alabaster.multimediatechnology.at/rick">  
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon.svg" />
    <?php wp_head(); ?>
</head>
<?php wp_body_open(); ?>

<body>
    <header>
        <a href="/">
            <h1>Rick Randy</h1>
        </a>
        <nav id="mainnav">
            <button id="hamburger" class="closed">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </button>
            <ul>
                <li><a href="<?php echo get_permalink($ids_array[7]); ?>">Consulting</a></li>
                <li><a href="<?php echo get_permalink($ids_array[8]); ?>">Workshops</a></li>
                <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Youtube</a></li>
            </ul>
        </nav>
        <div class='consulting-header'>
            <?php
                $header_query = new WP_Query(array('p' => $ids_array[0]));
                if ($header_query->have_posts()) :
                    while ($header_query->have_posts()) : $header_query->the_post(); ?>
                        <h2>
                            <?php the_title(); ?>
                    </h2>
        </div>
    </header>
    <section id="consulting-stats">
        <div>
            <h3 class="consulting-number-text"><?php echo get_post_custom_values('consulting-number-text')[3]; ?></h3>
            <p class="consulting-number"><?php echo get_post_custom_values('consulting-number')[3]; ?></p>
        </div>
        <div>
            <h3 class="consulting-number-text"><?php echo get_post_custom_values('consulting-number-text')[0]; ?></h3>
            <p class="consulting-number"><?php echo get_post_custom_values('consulting-number')[0]; ?></p>
        </div>
        <div>
            <h3 class="consulting-number-text"><?php echo get_post_custom_values('consulting-number-text')[1]; ?></h3>
            <p class="consulting-number"><?php echo get_post_custom_values('consulting-number')[1]; ?></p>
        </div>
        <div>
            <h3 class="consulting-number-text"><?php echo get_post_custom_values('consulting-number-text')[2]; ?></h3>
            <p class="consulting-number"><?php echo get_post_custom_values('consulting-number')[2]; ?></p>
        </div>
    </section>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <section id="working-with-me">
        <div class="section-1">
            <?php $working_with_me = new WP_Query(array("p" => $ids_array[1])); 
                if ($working_with_me->have_posts()) :
                    while ($working_with_me->have_posts()) : $working_with_me->the_post(); ?>
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                    <?php if (has_post_thumbnail()) {?>
                            <span class="img-section-1">
                                <?php the_post_thumbnail(); ?>
                            </span>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="section-2">
        <?php $working_with_me = new WP_Query(array("p" => $ids_array[2])); 
                if ($working_with_me->have_posts()) :
                    while ($working_with_me->have_posts()) : $working_with_me->the_post(); ?>
                    <?php if (has_post_thumbnail()) {?>
                        <span class="img-section-2">
                            <?php the_post_thumbnail(); ?>
                        </span>
                    <?php } ?>
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <section id="consulting-my-services">
        <h2 class="consulting-services-headline">My services.</h2>
        <div>
            <div class="consulting">
                <?php $consulting_query = new WP_Query(array("p" => $ids_array[3])); 
                    if ($consulting_query->have_posts()) :
                        while ($consulting_query->have_posts()) : $consulting_query->the_post(); ?>
                        <?php if (has_post_thumbnail()) {?>
                            <span class="icon-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </span>
                        <?php } ?>
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
            </div>
            <div class="strategy">
                <?php $consulting_query = new WP_Query(array("p" => $ids_array[4])); 
                    if ($consulting_query->have_posts()) :
                        while ($consulting_query->have_posts()) : $consulting_query->the_post(); ?>
                        <?php if (has_post_thumbnail()) {?>
                            <span class="icon-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </span>
                        <?php } ?>
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="mission">
                <?php $consulting_query = new WP_Query(array("p" => $ids_array[5])); 
                    if ($consulting_query->have_posts()) :
                        while ($consulting_query->have_posts()) : $consulting_query->the_post(); ?>
                        <?php if (has_post_thumbnail()) {?>
                            <span class="icon-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </span>
                        <?php } ?>
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
            </div>
            <div class="investment">
                <?php $consulting_query = new WP_Query(array("p" => $ids_array[6])); 
                    if ($consulting_query->have_posts()) :
                        while ($consulting_query->have_posts()) : $consulting_query->the_post(); ?>
                        <?php if (has_post_thumbnail()) {?>
                            <span class="icon-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </span>
                        <?php } ?>
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <section id='consulting-what-i-do'>
        <div class="what-i-do-image"></div>
        <div class="what-i-do-dark-background"></div>
        <div class="cards">
            <?php 
                $counter = 1;
                $consulting_what_i_do_query = new WP_Query(array('category_name' => 'consulting-what-i-do', 'order' => 'ASC'));
                if ($consulting_what_i_do_query->have_posts()) :
                    while ($consulting_what_i_do_query->have_posts()) : $consulting_what_i_do_query->the_post(); ?>

                    <div class="<?php echo "card-" . strval($counter) ?>">
                        <?php if (has_post_thumbnail()) {?>
                            <span class="icon-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </span>
                        <?php } ?>
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                    </div>
                    <?php $counter++ ?>
            <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </div>
        <div class="cards-second-slide">
            <?php 
                $second_slide_query = new WP_Query(array('category_name' => 'consulting-what-i-do-second-slide', 'order' => 'ASC'));
                if ($second_slide_query->have_posts()) :
                    while ($second_slide_query->have_posts()) : $second_slide_query->the_post(); ?>

                    <div class="<?php echo "card-" . strval($counter) ?>">
                        <?php if (has_post_thumbnail()) {?>
                            <span class="icon-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </span>
                        <?php } ?>
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                    </div>
                    <?php $counter++ ?>
            <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <section id="unlock">
        <?php $unlock_query = new WP_Query(array("p" => $ids_array[9]));
                if ($unlock_query->have_posts()) :
                    while ($unlock_query->have_posts()) : $unlock_query->the_post(); ?>
                        <h2><?php the_title();?></h2>
                     <?php endwhile; ?>
            <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="12"]'); ?>
        </div>
    </section>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>