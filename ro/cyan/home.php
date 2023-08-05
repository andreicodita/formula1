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
                        <span><strong>Duminica</strong></span>
                        <br>
                        <span>24 Aprilie 2022</span>
                    </div>
                    <h1 class="news-post_title">Saptamana sprint</h1>
                    <p class="news-post_text">
                        Afla aici cum se va desfasura cursa de tip sprint din aceasta duminica.
                    </p>
                    <a href="sprintweek1.php" class="news-post_cta">Citeste mai mult</a>
                </div>
            </div>
            </div>
            <div class="news-post">
                <div class="news-post_img">
                    <img src="images/binotto2.jpg">
                <div class="news-post_info">
                    <div class="news-post_date">
                        <span><strong>Joi</strong></span>
                        <br>
                        <span>14 Aprilie 2022</span>
                    </div>
                    <h1 class="news-post_title">Ferrari</h1>
                    <p class="news-post_text">
                        Binotto a fost „surprins” de Ferrari la începutul sezonului, dar nu sunt planificate mari imbunatatiri pentru Imola.
                    </p>
                    <a href="ferrari.php" class="news-post_cta">Citeste mai mult</a>
                </div>
            </div>
            </div>
            <div class="news-post">
                <div class="news-post_img">
                    <img src="images/sprint moments.jpg">
                <div class="news-post_info">
                    <div class="news-post_date">
                        <span><strong>Miercuri</strong></span>
                        <br>
                        <span>20 Aprilie 2022</span>
                    </div>
                    <h1 class="news-post_title">Sprint week</h1>
                    <p class="news-post_text">
                        5 cele mai bune weekend-uri de format sprint de pana acum.
                    </p>
                    <a href="sprintweek2.php" class="news-post_cta">Citeste mai mult</a>
                </div>
            </div>
            </div>
            <div class="news-post">
                <div class="news-post_img">
                    <img src="images/f1news.jpg"> 
                <div class="news-post_info">
                    <div class="news-post_date">
                        <span><strong>Sambata</strong></span>
                        <br>
                        <span>16 Aprilie 2022</span>
                    </div>
                    <h1 class="news-post_title">Arhiva F1</h1>
                    <p class="news-post_text">
                        6 strategii inteligente de curse din istoria F1 care s-au dovedit foarte eficiente.
                    </p>
                    <a href="arhivaf1.php" class="news-post_cta">Citeste mai mult</a>
                </div>
            </div>
            </div>
            </div>
    </body>
    </html>