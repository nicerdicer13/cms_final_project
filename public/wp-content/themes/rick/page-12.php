<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rick Randy | Workshops</title>
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
                <li><a href="#workshops">Consulting</a></li>
                <li><a href="#">Workshops</a></li>
                <li><a href="#news">Youtube</a></li>
            </ul>
        </nav>
        <div class='workshop-header'>
            <h2>learn from my experience. <br>don’t make the same mistakes I have.</h2>
            <div class="border"></div>
        </div>
    </header>
    <section class="w-flex-container">
        <div class="left-block">
            <h3>About My Workshops</h3>
            <p>Come join me for one of my workshops and learn from a self-employed web developer
                and business consultant! I offer a variety of workshops on topics such as web development,
                starting a business, business consulting, self employment, work and travel, and content creation.
                I'm passionate about what I do and love sharing my knowledge and experience with others.
            </p>
        </div>
        <div class="right-block">
            <h3>Register Today</h3>
            <p>Sign up for one of my workshops today and take the first step towards reaching your goals!</p>
            <a href="#" class="button">Join Now</a>
        </div>
    </section>

    <section class="workshops-container">
        <div class="workshop-left">
            <h4>Web Development, Self Employment</h4>
            <h3>Become part of the best community there is.</h3>
            <p>
                Are you tired of your dead-end job and ready to take control of your career?
                My workshop on web development and self employment is here to save the day!
                Sign up now and let's get started right away!
            </p>
            <a href="#" class="button">Sign up Now</a>
            <img alt="this is a picture of me" class="workshop-image-right" src="<?php echo get_template_directory_uri(); ?>/images/workshop_webdev.svg" />
        </div>
    </section>

    <section class="workshops-container">
        <div class="workshop-right">
            <h4>Starting a Business, Business Consulting</h4>
            <h3>Fulfill your dreams. Start today.</h3>
            <p>
                I am a business consultant with over 10 years of experience.
                I have a burning passion for helping others become their best.
                What are you waiting for?
            </p>
            <a href="#" class="button">Sign up Now</a>
            <img alt="this is a picture of me" class="workshop-image-right" src="<?php echo get_template_directory_uri(); ?>/images/workshop_consulting.svg" />
        </div>
    </section>
    <section class="workshops-container">
        <div class="workshop-left">
            <h4>Work and Travel, self Employment</h4>
            <h3>I’m living the dream. You can, too.</h3>
            <p>
                Travelling the world while working jobs I love has always been a dream.
                Well, except for when I was a kid and wanted to become a world-renowned scientist.
                Let me teach you my ways and enable you to live your dream.
            </p>
            <a href="#" class="button">Sign up Now</a>
            <img alt="this is a picture of me" class="workshop-image-right" src="<?php echo get_template_directory_uri(); ?>/images/workshop_travel.svg" />
        </div>
    </section>
    <section class="workshops-container">
        <div class="workshop-right">
            <h4>Content Creation</h4>
            <h3>Content creation is the job of the future.</h3>
            <p>
                People all over the world are consuming more digital content than ever before.
                This is amazing news, if you are striving to be a content creator!
                Let me show you how to start and keep growing.
            </p>
            <a href="#" class="button">Sign up Now</a>
            <img alt="this is a picture of me" class="workshop-image-right" src="<?php echo get_template_directory_uri(); ?>/images/workshop_content.svg" />
        </div>
    </section>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>