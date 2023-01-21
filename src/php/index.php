<?php
$whitelist = array('127.0.0.1', '::1');
$ids_array;

if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
    // Localhost
    $ids_array = [14, 112, 135, 137, 139, 38, 43, 46, 10, 7];
} else {
    // Server
    $ids_array = [14, 112, 135, 137, 139, 38, 43, 46, 10, 7];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Rick Randy</title>
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon.svg" />
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header class="index-header">
        <a href="/">
            <h1>Rick Randy</h1>
        </a>
        <nav id="mainnav">
            <button id="hamburger" class="closed">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </button>
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
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
                <img alt="this is a picture of me" class="rick-header" src="<?php echo get_template_directory_uri(); ?>/images/rick_transparent_background.png" />

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
                <?php $header_query = new WP_Query(array("p" => $ids_array[165])); ?>
                <?php
                echo do_shortcode('[smartslider3 slider="3"]');
                ?>
            </div>

        </section>

        <section id="books-wrapper">
            <?php $books_query = new WP_Query(array("p" => $ids_array[1]));
            if ($books_query->have_posts()) :
                while ($books_query->have_posts()) : $books_query->the_post(); ?>
                    <h3 class="super-headline"><?php echo get_post_custom_values('super-headline')[0]; ?></h3>
                    <h2><?php the_title(); ?></h2>
                    <div class="display">
                        <div>
                            <h4 class="sub-heading"><?php echo get_post_custom_values('sub-heading')[0]; ?></h4>
                            <p><?php the_content(); ?></p>
                            <a class="button" href="#">Preorder</a>
                        </div>
                        <?php if (has_post_thumbnail()) { ?>
                            <img class="icon-wrapper">
                            <?php the_post_thumbnail(); ?>
                            </img>
                        <?php } ?>
                    </div>

                    <p class="small-books-sub-heading"><?php echo get_post_custom_values('small-books-sub-heading')[0]; ?></p>
                    <div class="three-books-display">
                        <?php $book_1 = new WP_Query(array("p" => $ids_array[2]));
                        if ($book_1->have_posts()) :
                            while ($book_1->have_posts()) : $book_1->the_post();
                                if (has_post_thumbnail()) { ?>
                                    <span class="icon-wrapper">
                                        <?php the_post_thumbnail(); ?>
                                    </span>
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php $book_2 = new WP_Query(array("p" => $ids_array[3]));
                        if ($book_2->have_posts()) :
                            while ($book_2->have_posts()) : $book_2->the_post();
                                if (has_post_thumbnail()) { ?>
                                    <span class="icon-wrapper">
                                        <?php the_post_thumbnail(); ?>
                                    </span>
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php $book_3 = new WP_Query(array("p" => $ids_array[3]));
                        if ($book_3->have_posts()) :
                            while ($book_3->have_posts()) : $book_3->the_post();
                                if (has_post_thumbnail()) { ?>
                                    <span class="icon-wrapper">
                                        <?php the_post_thumbnail(); ?>
                                    </span>
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <a class="button" href="#">Purchase now</a>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </section>
        <section id="business-consulting">
            <div class="succeed">
                <?php $succeed_query = new WP_Query(array("p" => $ids_array[5]));
                if ($succeed_query->have_posts()) :
                    while ($succeed_query->have_posts()) : $succeed_query->the_post(); ?>
                        <div>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <a class="button">Start now</a>
                        </div>
                        <?php if (has_post_thumbnail()) { ?>
                            <span class="icon-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </span>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="learning-together">
                <?php $learning_together_query = new WP_Query(array("p" => $ids_array[6]));
                if ($learning_together_query->have_posts()) :
                    while ($learning_together_query->have_posts()) : $learning_together_query->the_post();
                        if (has_post_thumbnail()) { ?>
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
            <?php $about_me_query = new WP_Query(array("p" => $ids_array[7]));
            if ($about_me_query->have_posts()) :
                while ($about_me_query->have_posts()) : $about_me_query->the_post();
                    if (has_post_thumbnail()) { ?>
                        <img alt="a picture of me with my dog, while climbing a mountain" src="<?php the_post_thumbnail(); ?> 
                    <?php } ?>
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <a class=" button">Make me part of your team</a>
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