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



    <footer>
        <div>
            <h2>rick randy</h2>
            <p>This is a fictional project by Jason Kenny and Tanja Gruber,
                which was created in the course “Content Management Systems” for the bachelor course MultiMediaTechnology at the Salzburg University of Applied Sciences.</p>
            <span>2022/23</span>
        </div>
        <div class="attributions">
            <div>
                <h3>illustrations</h3>
                <a href="https://storyset.com">https://storyset.com</a>
            </div>
            <div>
                <h3>pictures of rick</h3>
                <a href="https://unsplash.com/@tilldaling">https://unsplash.com/@tilldaling</a>
            </div>

        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>