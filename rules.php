
<?php

?>

<!doctype html>
 <html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Higher or lower</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/Style.css">
        <script src="https://kit.fontawesome.com/e8127072bf.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="nav">
          <div class="burger">
            <div class="burger__patty"></div>
          </div>

          <ul class="nav__list">
            <li class="nav__item">
              <a href="./index.php" class="nav__link c-blue"><img src="img/home-icon.png" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="./topList.php" class="nav__link c-yellow scrolly"><img src="img/about-icon.png" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="./rules.php" class="nav__link c-red"><img src="./img/document.png" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="#4" class="nav__link c-green"><img src="img/contact-icon.png" alt=""></a>
            </li>
          </ul>
        </nav>

        <section class="ruls b-blue">
            <article class="panel__wrapper">
              <div class="panel__content">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <div>
                        <div class="home-heading">
                          <h1>Game rules</h1>
                          <h4>Higher or <b>lower</b></h4>
                          <p class="topListStyle">
                            <i class="fas fa-dice"></i> Choose a number between 1 and 20.<br>
                            <i class="fas fa-dice"></i> The bot will tell you if the <b>right</b> number is higher or lower then the number you've choosen.<br>
                            <i class="fas fa-dice"></i> Then you guess again until you figured out the right number.<br>
                            <i class="fas fa-dice"></i> Try guessing the right number with as few attempts as possible to have a chance to enter our toplist.
                          </p>
                                <div class="primary-button">
                                  <a href="./index.php">Start Play</a>
                                </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </section>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="./js/main.js"></script>
    </body>
</html>
