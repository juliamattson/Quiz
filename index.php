<?php

?>
<!doctype html>
 <html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Higher or lower</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/Style.css">
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

        <section class="panel b-blue" >
          <article class="panel__wrapper">
              <h1> Login & Play </h1>
              <br>
              <div class="panel__content">
                <div class="home-box-content">
                    <input id="input" class="inputName" type="text" placeholder="Type Your Name"/>
                    <input id="input" class="inputPassword" type="password" placeholder="Type Your Password"/>
                </div>
                <div style="margin-top: 1em;">
                <button class="primary-button" id="logIn" type="submit">Log in</button>
                <button class="primary-button" id="signUp" type="submit">Sign Up</button>
                </div>
                <div style="margin-top: 1em;">
                    <a> Forgot my password</a>
                </div>

            </div>
          </article>
        </section>
        <section>
            
        </section>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="./js/main.js"></script>
        <script src="./requestHandler.js"></script>
    </body>
</html>
