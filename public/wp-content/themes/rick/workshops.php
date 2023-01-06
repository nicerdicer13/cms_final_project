<?php require_once('wp-load.php');
?>
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
                <li><a href="/workshops.php">Workshops</a></li>
                <li><a href="#news">Youtube</a></li>
            </ul>
        </nav>
        <div class='dreams'>
            <h2>making my dreams come true - and yours, too</h2>
            <h3>Hi, I'm Ricks!</h3>
            <p>I’m a lot nicer than I look in this photo, I promise.
                Glad you’ve found me - scroll down a bit and get to know me. It’ll be worth your while.</p>
            <a href="#" class="button">START NOW!</a>
        </div>
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