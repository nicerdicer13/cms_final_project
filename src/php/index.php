<?php
  $whitelist = array('127.0.0.1', '::1');
  $ids_array;

  if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
      // Localhost
      $ids_array = [14, 38, 43, 46];
  } else {
      // Server
      $ids_array = [];  
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick Randy</title>
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon.svg" />
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
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
                <li><a href="consulting">Consulting</a></li>
                <li><a href="workshops">Workshops</a></li>
                <li><a href="#business-consulting">Youtube</a></li>
            </ul>
        </nav>
            <?php
            $header_query = new WP_Query(array("p" => $ids_array[0]));
            if ($header_query->have_posts()) :
                while ($header_query->have_posts()) : $header_query->the_post();
                ?>
                <div class="dreams">
                    <h2><?php the_title(); ?></h2>
                    <h3>Hi, I'm Rick</h3>
                    <?php the_content(); ?>
                    <a href="#" class="button">START NOW!</a> 
                </div>
                <img alt="this is a picture of me" class="rick-header" src="<?php echo get_template_directory_uri(); ?>/images/rick_transparent_background.png"/>

                <div class="stats">
                    <div>
                        <p class="number"><?php echo get_post_custom_values('number')[0]; ?></p>
                        <p class="number-text"><?php echo get_post_custom_values('number-text')[0]; ?></p>
                    </div>
                    <div>
                        <p class="number"><?php echo get_post_custom_values('number')[1]; ?></p>
                        <p class="number-text"><?php echo get_post_custom_values('number-text')[1]; ?></p>
                    </div>
                    <div>
                        <p class="number"><?php echo get_post_custom_values('number')[2]; ?></p>
                        <p class="number-text"><?php echo get_post_custom_values('number-text')[2]; ?></p>
                    </div>
                    <div>
                        <p class="number"><?php echo get_post_custom_values('number')[3]; ?></p>
                        <p class="number-text"><?php echo get_post_custom_values('number-text')[3]; ?></p>
                    </div>
                </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
    </header>
    <main>
    <section id='what_i_do'>
        <h2>here's some of the stuff I do.</h2>
        <div class="cards">
            <?php 
                $counter = 1;
                $what_i_do_query = new WP_Query(array('category_name' => 'what-i-do', 'order' => 'ASC'));
                if ($what_i_do_query->have_posts()) :
                    while ($what_i_do_query->have_posts()) : $what_i_do_query->the_post(); ?>

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
                $what_i_do_second_slide_query = new WP_Query(array('category_name' => 'what-i-do-second-slide', 'order' => 'ASC'));
                if ($what_i_do_second_slide_query->have_posts()) :
                    while ($what_i_do_second_slide_query->have_posts()) : $what_i_do_second_slide_query->the_post(); ?>

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
    <section id="books-wrapper">
        <h3>Preorder my new book now</h3>
        <h2>JavaScript - The Apocalypse is coming</h2>
        <div class="display">
            <img class="book-phone" alt="the cover of my new book" src="<?php echo get_template_directory_uri(); ?>/images/book-3-phone.svg" />
            <div>
                <h4>Releasing the third book of my popular series ”Why you rightfully hate JavaScript!</h4>
                <p>Hey everyone! I am excited to announce that my new book is releasing in just a few weeks.
                    I explore the potential dangers and consequences of this powerful programming language and its impact on the future of technology.
                    So don't wait - pre-order your copy now and get ready for the JavaScript apocalypse!</p>
                <a class="button" href="#">Preorder</a>
            </div>
            <img class="book-desktop" alt="the cover of my new book" src="<?php echo get_template_directory_uri(); ?>/images/book-3-desktop.svg" />
        </div>
        <p> Don't miss out - get the complete series now! </p>
        <div class="three-books-display">
            <img class="book-desktop" alt="the cover of the first book" src="<?php echo get_template_directory_uri(); ?>/images/book-1-desktop.svg" />
            <img class="book-desktop" alt="the cover of the second book" src="<?php echo get_template_directory_uri(); ?>/images/book-2-desktop.svg" />
            <img class="book-desktop" alt="the cover of the third (and new) book" src="<?php echo get_template_directory_uri(); ?>/images/book-3-small-desktop.svg" />
            <img class="book-phone" alt="the cover of all three books" src="<?php echo get_template_directory_uri(); ?>/images/books-phone-trio.svg" />
        </div>
        <a class="button" href="#">Purchase now</a>
    </section>
    <section id="business-consulting">
        <div class="succeed">
            <?php $succeed_query = new WP_Query(array("p" => $ids_array[1])); 
                if ($succeed_query->have_posts()) :
                    while ($succeed_query->have_posts()) : $succeed_query->the_post();?>
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <a class="button">Start now</a>
                    </div>
                        <?php if (has_post_thumbnail()) {?>
                            <span class="icon-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </span>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </div>
        <div class="learning-together">
            <?php $learning_together_query = new WP_Query(array("p" => $ids_array[2])); 
                if ($learning_together_query->have_posts()) :
                    while ($learning_together_query->have_posts()) : $learning_together_query->the_post();
                        if (has_post_thumbnail()) {?>
                            <span class="icon-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </span>
                        <?php } ?>
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <a class="button">Start now</a>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <section id="about-me">
        <?php $about_me_query = new WP_Query(array("p" => $ids_array[3])); 
                if ($about_me_query->have_posts()) :
                    while ($about_me_query->have_posts()) : $about_me_query->the_post();
                        if (has_post_thumbnail()) {?>
                            <img alt="a picture of me with my dog, while climbing a mountain" src="<?php the_post_thumbnail();?> 
                    <?php } ?>
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <a class="button">Make me part of your team</a>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php wp_reset_postdata(); ?>
    </section>
</main>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>