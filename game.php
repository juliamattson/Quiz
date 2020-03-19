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
        <link rel="stylesheet" href="./css/styleGame.css">

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
           <img src="./img/friendly-bot.gif" alt="" id="friendly-bot" height="200px" width="auto">
              <h3>Friendly Bot</h3>
              <p>He's a happy and friendly bot, try to beat him.</p>
              <h1> Choose a Number </h1>
              <br>
              
              <form action="">
              <div class="counterContainer">
              <div  class="number0 number">0</div>
              <div class="number1 number">1</div>
              <div  class="number2 number">2</div>
              <div  class="number3 number">3</div>
              <div  class="number4 number">4</div>
              <div  class="number5 number">5</div>
              <div  class="number6 number">6</div>
              <div  class="number7 number">7</div>
              <div  class="number8 number">8</div>
              <div  class="number9 number">9</div>
              <div  class="number10 number">10</div>
              <div  class="number11 number">11</div>
              <div  class="number12 number">12</div>
              <div  class="number13 number">13</div>
              <div  class="number14 number">14</div>
              <div  class="number15 number">15</div>
              <div  class="number16 number">16</div>
              <div  class="number17 number">17</div>
              <div  class="number18 number">18</div>
              <div  class="number19 number">19</div>
              <div  class="number20 number">20</div>               
              </div>
              <div>
              <input class="userValue" name="amountRange" type="range"  min="0" max="20" step="1" value="0">
              </form>
              <div id="h4-container"><div id="h4-subcontainer"><h4 ><span class="selectedValue">0</span></h4></div></div>
            </div>
            <div style="margin-top: 3em;">
              <button class="primary-button" type="submit">Submit</button>
              <h4 class="result" id="resultId"></h4>
              </div>
              </div>
          </article>
        
        </section>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="./js/main.js"></script>
        <script src="./logic.js"></script>
    </body>
</html>
