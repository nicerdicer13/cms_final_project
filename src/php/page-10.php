<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <li><a href="#">Consulting</a></li>
                <li><a href="#workshops">Workshops</a></li>
                <li><a href="#news">Youtube</a></li>
            </ul>
        </nav>
        <div class='workshop-header'>
            <h2>consulting is a people business - it’s what I do best.</h2>
            <div class="border"></div>
        </div>
    </header>
    <section id="consulting-stats">
        <div>
            <h3>Awards won</h3>
            <p>7</p>
        </div>
        <div>
            <h3>Years of experience</h3>
            <p>12+</p>
        </div>
        <div>
            <h3>Projects</h3>
            <p>102</p>
        </div>
        <div>
            <h3>Clients</h3>
            <p>53</p>
        </div>
    </section>
    <section id="working-with-me">
        <div>
            <div class="section-1">
                <h2>What I bring to the table</h2>
                <ul>
                    <li>strong leadership skills</li>
                    <li>creativity</li>
                    <li>a burning passion</li>
                    <li>excellent problem solving skills</li>
                </ul>
            </div>
            <img alt="This is a person explaining something to another person and using statistics." class="img-section-1" src="<?php echo get_template_directory_uri(); ?>/images/what-i-bring-to-the-table.svg" />
        </div>
        <div>
            <img alt="This is a person consulting another person on how he can improve his business." class="img-section-2" src="<?php echo get_template_directory_uri(); ?>/images/working-with-me.svg" />
            <div class="section-2">
                <h2>What to expect when working with me</h2>
                <ul>
                    <li>expert advice on how your company can maximise strategy, increase profits, add value and resolve issues</li>
                    <li>development and implementation of strategies, which are adapted to the members of your company in order to improve performance</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="consulting-my-services">
        <h2>My services.</h2>
        <div>
            <div>
                <img alt="this is an icon with coins and a dollar sign" src="<?php echo get_template_directory_uri(); ?>/images/consulting-icon.svg" />
                <h3>Consulting</h3>
                <p>With a wealth of knowledge and experience, I am a trusted consultant who can help your business identify and overcome challenges, optimize your operations, and achieve your goals.</p>
            </div>
            <div>
                <img alt="this is an icon containing an arrow that points from one circle to a higher placed cicle" src="<?php echo get_template_directory_uri(); ?>/images/strategy-icon.svg" />
                <h3>Strategy</h3>
                <p>My consulting strategy is focused on understanding your business's unique needs and challenges, and providing customized solutions to help you reach your full potential.</p>
            </div>
            <div>
                <img alt="this is an icon of a yellow flag" src="<?php echo get_template_directory_uri(); ?>/images/mission-icon.svg" />
                <h3>Mission</h3>
                <p>My mission as a consultant is to empower your business to succeed by providing you with the knowledge, resources, and support you need to thrive in your industry.</p>
            </div>
            <div>
                <img alt="this is an icon of a diagram" src="<?php echo get_template_directory_uri(); ?>/images/investment-icon.svg" />
                <h3>Investment</h3>
                <p>My investment strategy in consulting is focused on building long-term partnerships your business and providing ongoing support to help you achieve their goals and reach their full potential.</p>
            </div>
        </div>
    </section>
    <section id='consulting-what-i-do'>
        <div class="cards">
            <div class="card-1">
                <img alt="web design icon" src="<?php echo get_template_directory_uri(); ?>/images/web-design-icon.svg" />
                <h3>Web Development</h3>
            </div>
            <div class="card-2">
                <img alt="development icon" src="<?php echo get_template_directory_uri(); ?>/images/development-icon.svg" />
                <h3>Business Consulting</h3>
            </div>
            <div class="card-3">
                <img alt="branding icon" src="<?php echo get_template_directory_uri(); ?>/images/branding-icon.svg" />
                <h3>Content Creation</h3>
            </div>
        </div>
        <div class="cards-second-slide">
            <div class="card-4">
                <img alt="social media icon" src="<?php echo get_template_directory_uri(); ?>/images/social-media-icon.svg" />
                <h3>Youtube Content</h3>
            </div>
            <div class="card-5">
                <img alt="strategy icon" src="<?php echo get_template_directory_uri(); ?>/images/strategy-icon-cards.svg" />
                <h3>Work and travel</h3>
            </div>
            <div class="card-6">
                <img alt="ecommerce icon" src="<?php echo get_template_directory_uri(); ?>/images/ecommerce-icon.svg" />
                <h3>Writing Books</h3>
            </div>
        </div>
    </section>
    <section id="unlock">
        <h2>Unlock your company's full potential. Contact me now.</h2>
        <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="12"]'); ?>
        </div>
    </section>
    
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>