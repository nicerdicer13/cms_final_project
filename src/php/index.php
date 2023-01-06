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
                <li><a href="#what_i_do">Consulting</a></li>
                <li><a href="workshops">Workshops</a></li>
                <li><a href="#business-consulting">Youtube</a></li>
            </ul>
        </nav>
        <div class='dreams'>
            <h2>making my dreams come true - and yours, too</h2>
            <h3>Hi, I'm Rick!</h3>
            <p>I’m a lot nicer than I look in this photo, I promise.
                Glad you’ve found me - scroll down a bit and get to know me. It’ll be worth your while.</p>
            <a href="#" class="button">START NOW!</a>
        </div>
        <img alt="this is a picture of me" class="rick-header" src="<?php echo get_template_directory_uri(); ?>/images/rick_transparent_background.png" />
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
                <img alt="web development icon" src="<?php echo get_template_directory_uri(); ?>/images/web_development.svg" />
                <h3>Web Development</h3>
            </div>
            <div class="card-2">
                <img alt="business consulting icon" src="<?php echo get_template_directory_uri(); ?>/images/consulting.svg" />
                <h3>Business Consulting</h3>
            </div>
            <div class="card-3">
                <img alt="content creation icon" src="<?php echo get_template_directory_uri(); ?>/images/content_creation.svg" />
                <h3>Content Creation</h3>
            </div>
        </div>
        <div class="cards-second-slide">
            <div class="card-4">
                <img alt="youtube content icon" src="<?php echo get_template_directory_uri(); ?>/images/youtube_content.svg" />
                <h3>Youtube Content</h3>
            </div>
            <div class="card-5">
                <img alt="work and travel icon" src="<?php echo get_template_directory_uri(); ?>/images/work_and_travel.svg" />
                <h3>Work and travel</h3>
            </div>
            <div class="card-6">
                <img alt="writing books icon" src="<?php echo get_template_directory_uri(); ?>/images/writing_books.svg" />
                <h3>Writing Books</h3>
            </div>
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
            <div>
                <h2>helping you succeed, one step at a time</h2>
                <p>I am an experienced business consultant with a burning passion to helping your ideas succeed.
                    I'm a firm believer that with the right guidance and support, anyone can achieve their goals and realize their full potential.
                    That's why I approach each of my clients with a personalized and easy-going style, taking the time to understand their unique needs and challenges.</p>
                <a class="button">Start now</a>
            </div>
            <img alt="a man metaphorically stepping up to the highest level - he is displayed standing on the highest step of stairs" src="<?php echo get_template_directory_uri(); ?>/images/helping-you-succeed.svg" />
        </div>
        <div class="learning-together">
            <img alt="a person teaching another person how to code" src="<?php echo get_template_directory_uri(); ?>/images/learning-together.svg" />
            <div>
                <h2>learning, growing and achieving together</h2>
                <p>I believe that everyone has the potential to achieve great things.
                    But sometimes, we all need a little guidance and support to help us unlock that potential and turn our dreams into reality.
                    Whether you want to start a business, become self employed or start a career in web development, I'm here to help.
                    Join me in one of my upcoming workshops and let's work together to achieve your goals.</p>
                <a class="button">Start now</a>
            </div>
        </div>
    </section>
    <section id="about-me">
        <img alt="a picture of me with my dog, while climbing a mountain" src="<?php echo get_template_directory_uri(); ?>/images/about-me.png" />
        <div>
            <h2>About me</h2>
            <p>I believe that new challenges are nothing to be scared of.
                They make life and business exciting.
                I’m all for creating something new and valuable.
                I am passionate about empowering people and companies.
                I’m purpose-driven and I thrive to find solutions that make sense in our ever-changing reality.
                I’m a connector with excellent interpersonal skills. I am a valuable team member, who is driven by creating positive connections. </p>
            <a class="button">Make me part of your team</a>
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