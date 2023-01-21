<?php
$whitelist = array('127.0.0.1', '::1');
$ids_array;

if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
    // Localhost
    $ids_array = [53, 49, 51, 56, 59, 62, 65, 10, 7, 156];
} else {
    // Server
    $ids_array = [53, 49, 51, 56, 59, 62, 65, 10, 7, 172];
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rick Randy | Workshops</title>
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
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon.svg">
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
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </nav>
        <div class='workshop-header'>
            <?php
            $header_query = new WP_Query(array('p' => $ids_array[0]));
            if ($header_query->have_posts()) :
                while ($header_query->have_posts()) : $header_query->the_post(); ?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </header>
    <section class="w-flex-container">
        <div class="left-block">
            <?php
            $about_query = new WP_Query(array('p' => $ids_array[1]));
            if ($about_query->have_posts()) :
                while ($about_query->have_posts()) : $about_query->the_post(); ?>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="right-block">
            <?php
            $register_query = new WP_Query(array('p' => $ids_array[2]));
            if ($register_query->have_posts()) :
                while ($register_query->have_posts()) : $register_query->the_post(); ?>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <?php the_content(); ?>
                    <a href="#" class="button">Join Now</a>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>

    <section class="workshops-container">
        <div class="workshop-left">
            <?php
            $workshop_query = new WP_Query(array('p' => $ids_array[3]));
            if ($workshop_query->have_posts()) :
                while ($workshop_query->have_posts()) : $workshop_query->the_post(); ?>
                    <h4>Web Development, Self Employment</h4>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <?php the_content(); ?>
                    <a href="#" class="button">Sign up Now</a>
                    <?php if (has_post_thumbnail()) { ?>
                        <span class="workshop-image-right">
                            <?php the_post_thumbnail(); ?>
                        </span>
                    <?php } ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>

    <section class="workshops-container">
        <div class="workshop-right">
            <?php
            $workshop_query = new WP_Query(array('p' => $ids_array[4]));
            if ($workshop_query->have_posts()) :
                while ($workshop_query->have_posts()) : $workshop_query->the_post(); ?>
                    <h4>Starting a Business, Business Consulting</h4>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <?php the_content(); ?>
                    <a href="#" class="button">Sign up Now</a>
                    <?php if (has_post_thumbnail()) { ?>
                        <span class="workshop-image-right">
                            <?php the_post_thumbnail(); ?>
                        </span>
                    <?php } ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <section class="workshops-container">
        <div class="workshop-left">
            <?php
            $workshop_query = new WP_Query(array('p' => $ids_array[5]));
            if ($workshop_query->have_posts()) :
                while ($workshop_query->have_posts()) : $workshop_query->the_post(); ?>
                    <h4>Work and Travel, Self Employment</h4>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <?php the_content(); ?>
                    <a href="#" class="button">Sign up Now</a>
                    <?php if (has_post_thumbnail()) { ?>
                        <span class="workshop-image-right">
                            <?php the_post_thumbnail(); ?>
                        </span>
                    <?php } ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <section class="workshops-container">
        <div class="workshop-right">
            <?php
            $workshop_query = new WP_Query(array('p' => $ids_array[6]));
            if ($workshop_query->have_posts()) :
                while ($workshop_query->have_posts()) : $workshop_query->the_post(); ?>
                    <h4>Content Creation</h4>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <?php the_content(); ?>
                    <a href="#" class="button">Sign up Now</a>
                    <?php if (has_post_thumbnail()) { ?>
                        <span class="workshop-image-right">
                            <?php the_post_thumbnail(); ?>
                        </span>
                    <?php } ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>

    <section class="students-section">
        <div class="students-response">
            <?php $students_query = new WP_Query(array('p' => $ids_array[9]));
            if ($students_query->have_posts()) :
                while ($students_query->have_posts()) : $students_query->the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php if (has_post_thumbnail()) { ?>
                        <span class="quotation_mark">
                            <?php the_post_thumbnail(); ?>
                        </span>
                    <?php } ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>

    <img class="image-students" src="<?php echo get_template_directory_uri(); ?>/images/workshops-students-2.jpg" alt="Picture of students sitting on stairs">

    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>