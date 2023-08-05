<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FORMULA 1</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
    <?php include('header.php'); ?>
        <header>
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <div class="slide first">
                    <img src="images/LeclercBahrain.jpg">
                </div>
                <div class="slide">
                    <img src="images/start-grid.jpg">
                </div>
                <div class="slide">
                    <img src="images/f1-raid-Spa-3-2-1024x683.jpg">
                </div>
                <div class="slide">
                    <img src="images/max-vertappen-924x600.jpg">
                </div>
            </div>
                <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;            
            if(counter > 4){
                counter = 1;
            }
        }, 5000);
    </script>
    </header>
    <div class="news">
        <div class="news-post">
                <div class="news-post_img">
                    <img class="sprintweek" src="images/itssprintweek.jpg">
                <div class="news-post_info">
                    <div class="news-post_date">
                        <span><strong>Sunday</strong></span>
                        <br>
                        <span>24 April 2022</span>
                    </div>
                    <h1 class="news-post_title">Sprint week</h1>
                    <p class="news-post_text">
                        Find out here how the sprint race will take place this Sunday.
                    </p>
                    <a href="sprintweek1.php" class="news-post_cta">Read more</a>
                </div>
            </div>
            </div>
            <div class="news-post">
                <div class="news-post_img">
                    <img src="images/binotto2.jpg">
                <div class="news-post_info">
                    <div class="news-post_date">
                        <span><strong>Thursday</strong></span>
                        <br>
                        <span>14 April 2022</span>
                    </div>
                    <h1 class="news-post_title">Ferrari</h1>
                    <p class="news-post_text">
                    Binotto was "surprised" by Ferrari at the start of the season, but no major upgrades are planned for Imola.
                    </p>
                    <a href="ferrari.php" class="news-post_cta">Read more</a>
                </div>
            </div>
            </div>
            <div class="news-post">
                <div class="news-post_img">
                    <img src="images/sprint moments.jpg">
                <div class="news-post_info">
                    <div class="news-post_date">
                        <span><strong>Wednesday</strong></span>
                        <br>
                        <span>20 April 2022</span>
                    </div>
                    <h1 class="news-post_title">Sprint week</h1>
                    <p class="news-post_text">
                        5 best sprint weekends so far.
                    </p>
                    <a href="sprintweek2.php" class="news-post_cta">Read more</a>
                </div>
            </div>
            </div>
            <div class="news-post">
                <div class="news-post_img">
                    <img src="images/f1news.jpg"> 
                <div class="news-post_info">
                    <div class="news-post_date">
                        <span><strong>Saturday</strong></span>
                        <br>
                        <span>16 April 2022</span>
                    </div>
                    <h1 class="news-post_title">F1 archive</h1>
                    <p class="news-post_text">
                    6 clever race strategies from F1 history that paid big.
                    </p>
                    <a href="arhivaf1.php" class="news-post_cta">Read more</a>
                </div>
            </div>
            </div>
            </div>
    </body>
    </html>