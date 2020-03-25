$(document).ready(function() {
    var badge = $(".selectedValue");
    var randomnum = Math.floor(Math.random() * 20);
    var result = $(".result");
    var power = document.getElementById("power").innerHTML;
        console.log(randomnum);
    var timeAvailable = 30;
    var eleTimer = document.getElementById("timer");
    var timer;

    function countdown() {
        if (timeAvailable < 0) {
            console.log("zero");
            document.getElementById("uValue").disabled = true;
            document.getElementById("uVal").disabled = true;

            result.html("TIME OUT");
            let img2 = document.getElementById("friendly-bot");
            img2.src = "./img/sad.gif";
            clearTimeout(timer);
        } else {
            eleTimer.innerHTML = timeAvailable + " seconds remaining";
            timeAvailable--;
        }
    }

    $(".userValue").one("change", function(e) {
      e. preventDefault();
      $("#timer").fadeIn();
     timer= setInterval(countdown, 1000);
    });

    $("#uVal").one(" click", function(e) {
      e. preventDefault();
      $("#timer").fadeIn();
     timer= setInterval(countdown, 1000);
    });

    $(".userValue").on("change ", function() {
     
   
       
            var current = $(this).val();
            if (current <= 5) {
                badge.text(current).animate({
                    left: current * 45 + 20 + "%"
                });
            } else if (current > 5 && current <= 10) {
                badge.text(current).animate({
                    left: current * 45 + "%"
                });
            } else if (current > 10 && current <= 15) {
                badge.text(current).animate({
                    left: current * 45 - 10 + "%"
                });
            } else if (current > 15 && current <= 20) {
                badge.text(current).animate({
                    left: current * 45 - 20 + "%"
                });
            }

            power =power- 20;
            document.getElementById("power").innerHTML = power;

            if (power <= 0) {
              result.html("GAME OVER");
                document.getElementById("uValue").disabled = true;
                let img2 = document.getElementById("friendly-bot");
                img2.src = "./img/sad.gif";
                clearInterval(timer);
            }
          else{
            if (current < randomnum) {
                console.log("Go up");
                result.html("Go up");
            } else if (current > randomnum) {
                console.log("Go Down");
                result.html("Go Down");
            } else if (current == randomnum) {
              result.html("YOU WIN");
                clearInterval(timer);
            
                let img1 = document.getElementById("friendly-bot");
                img1.src = './img/happy.gif';
                document.getElementById("uValue").disabled = true;

                $.ajax({
                    url: "./API/Receivers/resultPointsReceiver.php",
                    method: "POST",
                    data: {
                        power: power
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.status == 405) {} else {

                            //top.location = './index.php';
                        }
                    }
                });

                /* result.html("Guessed"); */
            }}
       // });
    });
    

    $("#uVal").on("click", function() {
     
   
       
            var current = $("#quantity").val();
            

            power =power- 20;
            document.getElementById("power").innerHTML = power;

            if (power <= 0) {
              result.html("GAME OVER");
                document.getElementById("uVal").disabled = true;
                let img2 = document.getElementById("friendly-bot");
                img2.src = "./img/sad.gif";
                clearInterval(timer);
            }
          else{
            if (current < randomnum) {
                console.log("Go up");
                result.html("Go up");
            } else if (current > randomnum) {
                console.log("Go Down");
                result.html("Go Down");
            } else if (current == randomnum) {
              result.html("YOU WIN");
                clearInterval(timer);
            
                let img1 = document.getElementById("friendly-bot");
                img1.src = './img/happy.gif';
                document.getElementById("uVal").disabled = true;

                $.ajax({
                    url: "./API/Receivers/resultPointsReceiver.php",
                    method: "POST",
                    data: {
                        power: power
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.status == 405) {} else {

                            //top.location = './index.php';
                        }
                    }
                });

                /* result.html("Guessed"); */
            }}
       // });
    });


    $(document).ready(function() {
        console.log("test");
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $("#dismiss, .overlay").on("click", function() {
            // hide sidebar
            $("#sidebar").removeClass("active");
            // hide overlay
            $(".overlay").removeClass("active");
        });

        $("#sidebarCollapse").on("click", function() {
            // open sidebar
            $("#sidebar").addClass("active");
            // fade in the overlay
            $(".overlay").addClass("active");
            $(".collapse.in").toggleClass("in");
            $("a[aria-expanded=true]").attr("aria-expanded", "false");
        });
    });
});