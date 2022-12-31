<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick Randy</title>
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
                <li><a href="#workshops">Consulting</a></li>
                <li><a href="#about">Workshops</a></li>
                <li><a href="#news">Youtube</a></li>
            </ul>
        </nav>
        <div class='dreams'>
            <h2>making my dreams come true - and yours, too</h2>
            <h3>Hi, I'm Rick!</h3>
            <p>I’m a lot nicer than I look in this photo, I promise. 
                Glad you’ve found me - scroll down a bit and get to know me. It’ll be worth your while.</p>
            <a href="#" class="button">START NOW!</a>
        </div>
        <img alt="this is a picture of me" class="rick-header" src="<?php echo get_template_directory_uri();?>/images/rick_transparent_background.png"/>
        <div class="stats">
            <div>
                <p class="number">3</p>
                <p>books published</p>
            </div>
            <div>
                <p class="number">1M+</p>
                <p>copies sold</p>
            </div>
            <div>
                <p class="number">150</p>
                <p>thousand subscribers</p>
            </div>
            <div>
                <p class="number">14</p>
                <p>years of experience</p>
            </div>
        </div>
    </header>
    <section id='what_i_do'>
        <h2>here's some of the stuff I do.</h2>
        <div class="cards">
            <div class="card-1">
                <img alt="web development icon" src="<?php echo get_template_directory_uri();?>/images/web_development.svg"/>
                <h3>Web Development</h3>
            </div>
            <div class="card-2">
                <img alt="business consulting icon" src="<?php echo get_template_directory_uri();?>/images/consulting.svg"/>
                <h3>Business Consulting</h3>
            </div>
            <div class="card-3">
                <img alt="content creation icon" src="<?php echo get_template_directory_uri();?>/images/content_creation.svg"/>
                <h3>Content Creation</h3>
            </div>
        </div>
        <div class="cards-second-slide">
            <div class="card-4">
                <img alt="youtube content icon" src="<?php echo get_template_directory_uri();?>/images/youtube_content.svg"/>
                <h3>Youtube Content</h3>
            </div>
            <div class="card-5">
                <img alt="work and travel icon" src="<?php echo get_template_directory_uri();?>/images/work_and_travel.svg"/>
                <h3>Work and travel</h3>
            </div>
            <div class="card-6">
                <img alt="writing books icon" src="<?php echo get_template_directory_uri();?>/images/writing_books.svg"/>
                <h3>Writing Books</h3>
            </div>
        </div>
    </section>
    <section id="books-wrapper">
        <h3>Preorder my new book now</h3>
        <h2>JavaScript - The Apocalypse is coming</h2> 
        <div class="display">
            <div>
                <h4>Releasing the third book of my popular series ”Why you rightfully hate JavaScript!</h4>
                <p>Hey everyone! I am excited to announce that my new book is releasing in just a few weeks. 
                    I explore the potential dangers and consequences of this powerful programming language and its impact on the future of technology.
                    So don't wait - pre-order your copy now and get ready for the JavaScript apocalypse!</p>
                <a class="button" href="#">Preorder</a>
            </div>
            <img alt="the cover of my new book" src="<?php echo get_template_directory_uri();?>/images/book-3-desktop.svg"/>
        </div> 
        <p> Don't miss out - get the complete series now! </p>
        <div class="three-books-display">
            <img alt="the cover of the first book" src="<?php echo get_template_directory_uri();?>/images/book-1-desktop.svg">
            <img alt="the cover of the second book" src="<?php echo get_template_directory_uri();?>/images/book-2-desktop.svg">
            <img alt="the cover of the third (and new) book" src="<?php echo get_template_directory_uri();?>/images/book-3-small-desktop.svg">
        </div>
        <a class="button" href="#">Purchase now</a>
    </section>
    <footer></footer>
    <?php wp_footer(); ?>
</body>
</html>
