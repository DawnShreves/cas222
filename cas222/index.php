<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Ace in the Hole</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
</head>
    
<body>
    
    <header>
        <img src="images/AITH_black_on_transparent_Impact.png" alt="Ace in the hole logo">
    </header>

        <nav>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="info.html.php">Event Info</a></li>
                <li><a href="register.html.php">Register</a></li>
                <li><a href="contact.html.php">Contact</a></li>
            </ul>
        </nav>

    <main>
        <div class="slideShow">
            <img class="aceSlides" src="images/ace6.jpg" style="width: 100%" alt="Trio of athletes">
            <img class="aceSlides" src="images/1.png" style="width: 100%" alt="Swimmers running into water">
            <img class="aceSlides" src="images/2.png" style="width: 100%" alt="Athlete on crutches">
            <img class="aceSlides" src="images/3.png" style="width: 100%" alt="Cyclists">
            <img class="aceSlides" src="images/4.png" style="width: 100%" alt="Girl running">
            <img class="aceSlides" src="images/5.png" style="width: 100%" alt="Swimmers running into water 2">
        </div>

        <button class="buttonLeft" onclick="plusDivs(-1)">&#10094;</button>
        <button class="buttonRight" onclick="plusDivs(1)">&#10095;</button>
        
        <h1>Event Schedule</h1>
    <section class="row">
        <aside class="column1">
            <img src="images/ace18.jpg" alt="Crowd of athletes." height="200px" width="300px">

            <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all
            shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for
            Every Body.</p>

        </aside>

        <aside class="column2">
            <ul>
                <h3>Saturday</h3>
                <li>7:00 AM - Long Course Triathlon</li>
                <li>7:30 AM - Olympic Triathlon</li>
                <li>7:15 AM - 10K</li>
                <li>7:15 AM - Half Marathon</li>
            </ul>
                <ul>
                    <h3>Sunday</h3>
                    <li>8:00 AM - Sprint Triathlon</li>
                    <li>8:20 AM - Try-a-Tri</li>
                    <li>12:00 PM - Splash n Dash</li>
                </ul>
            </aside>
    </section>

        <h1>About the Event</h1>
        <p class="about">The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running
            community. It has become a traditional destination race for athletes from across the nation.

            There is something for every level of athletic ability. The weekend includes a first timer triathlon,
            a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first
            race or come to compete to win, but make sure you come to have fun!</p>

        <section class="weather">
            <h1>Portland Weather</h1>
            <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-theme="dark" >
                Portland, OR, USA</a>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);
                js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}
                (document,'script','weatherwidget-io-js');
            </script>
        </section>

        <h1>Social Media</h1>
        <section class="socialFeed">

        <iframe class="fbFeed" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCas222Aceinthehole-110661963841617%2F&tabs=timeline&width=360&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>


        <a class="twitter-timeline" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw" width="400" height="300">
            Tweets by pcccas222</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </main>

    </section>


    <footer>
        <section>
            <p>Follow us in Facebook and Twitter!</p>
            <a class="social" href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" target="_blank"><img
                        src="images/fblogo.png"></a>
            <a class="social" href="https://twitter.com/pcccas222?lang=en" target="_blank"><img src="images/tlogo.png"></a>
        </section><br>
        <aside class="small">
            <small>Copyright©2020 By Dawn Shreves</small><br>
            <small>Ace in the Hole Multisport Event</small><br>
        </aside>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts/jquery.slicknav.js"></script>
    <script>$('.menu').slicknav();</script>
    <script src="scripts/slideShow.js"></script>
</body>
    
</html>