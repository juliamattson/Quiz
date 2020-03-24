<?php

?>
<!doctype html>
 <html> 
    <head>
        <meta>
        <meta >
        <title>Higher or lower</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/Style.css">
        <link rel="stylesheet" href="./css/styleGame.css">
        <style>
        #timer{
          text-align:center;
          color:#ffffff;
          background:tomato;
          width:150px;
          height:40px;
          margin:10px auto;
          padding-top:10px;
        }
        .result{
          color:#ffffff;
        }
        </style>

    </head>
    <body>
    <nav class="gameNav">
      <ul>
        <li>
          <a href="./index.php" > <img src="img/home-icon.png" alt="">  Home </a>
        </li>
        <li>
          <a href="./topList.php" > <img src="img/about-icon.png" alt="">  Toplist</a>
        </li>
        <li>
          <a href="./rules.php" >  <img src="./img/document.png" alt="">  Rules</a>
        </li>
        <li>
        <a type="button" onClick="window.location.href=window.location.href"> <img src="./img/restart.png">  Restart</a>
        </li>
        <li>
          <a id="signOut" href="#"> <img src="./img/exit.png" alt="">  Sign out</a>
        </li>
      </ul>
    </nav>


        <section >
          <article>
           <img src="./img/friendly-bot.gif" alt="" id="friendly-bot" height="150px" width="auto" style="margin-top: 2%">
              <h3 style="color:#ffffff;">Friendly Bot</h3>
              <p style="color:#ffffff;">He's a happy and friendly bot, try to beat him.</p>
              <h4>Player Power: <span id="power">100</span></h4>
              <div id="timer"></div>
              <h2> Choose a Number </h2>
              <br>
          </article>
        </section>
        <section id="resultSection">
          <div>
            <h4 class="result" id="resultId"></h4>
            </div>
        </section>
        <section class="inputBar">
          <form action="" >
            <div class="counterContainer">
            <div  class="number0 number">1</div>
            <div class="number1 number">2</div>
            <div  class="number2 number">3</div>
            <div  class="number3 number">4</div>
            <div  class="number4 number">5</div>
            <div  class="number5 number">6</div>
            <div  class="number6 number">7</div>
            <div  class="number7 number">8</div>
            <div  class="number8 number">9</div>
            <div  class="number9 number">10</div>
            <div  class="number10 number">11</div>
            <div  class="number11 number">12</div>
            <div  class="number12 number">13</div>
            <div  class="number13 number">14</div>
            <div  class="number14 number">15</div>
            <div  class="number15 number">16</div>
            <div  class="number16 number">17</div>
            <div  class="number17 number">18</div>
            <div  class="number18 number">19</div>
            <div  class="number19 number">20</div>
            </div>
            <input class="userValue" id="uValue" name="amountRange" type="range"  min="0" max="20" step="1" value="0">
          </form>
          <div id="h4-container"><div id="h4-subcontainer"><h4 ><span class="selectedValue">0</span></h4></div></div>
        </div>
        </section>

       
   
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="./requestHandler.js"></script>

        <script src="./js/main.js"></script>
        <script src="./logic.js"></script>
    </body>
</html>
