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
        <link rel="stylesheet" href="./css/styleGame.css">

    </head>
    <body>
    <nav>
          <ul >
            <li >
              <a href="./index.php" > <img src="img/home-icon.png" alt="">  Home </a>
            </li>
            <li >
              <a href="./topList.php" > <img src="img/about-icon.png" alt="">  ToList</a>
            </li>
            <li >
              <a href="./rules.php" >  <img src="./img/document.png" alt="">  Rules</a>
            </li>
            <li >
              <a href="#4" > <img src="./img/restart.png" alt="">  Restart</a>
            </li>
            <li >
              <a href="#4"> <img src="./img/exit.png" alt="">  Sing Out</a>
            </li>
          </ul>
        </nav>


        <section class="panel b-blue" >
          <article class="panel__wrapper">
           <img src="./img/friendly-bot.gif" alt="" id="friendly-bot" height="200px" width="auto">
              <h3>Friendly Bot</h3>
              <p>He's a happy and friendly bot, try to beat him.</p>
              <h4>Player Power: <span id="power">100</span></h4>
              <h2> Choose a Number </h2>
              <br>
              <form action="">
              <input class="userValue"  id="uValue" name="amountRange" type="range"  min="0" max="20" step="1" value="0">
              </form>
              <div id="h4-container"><div id="h4-subcontainer"><h4 ><span class="selectedValue">0</span></h4></div></div>
            </div>
          
          </article>
        
        </section>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="./js/main.js"></script>
        <script src="./logic.js"></script>
    </body>
</html>
