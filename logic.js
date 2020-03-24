$(document).ready(function() {
  var badge = $(".selectedValue");
  var randomnum = Math.floor(Math.random() * 20);
  var result = $(".result");
  var power = document.getElementById("power").innerHTML;
  console.log(randomnum);
  var timeAvailable = 20;
  var eleTimer = document.getElementById("timer");

  var timer = setInterval(countdown, 1000);

  function countdown() {
    if (timeAvailable < 0) {
      console.log("zero");
      document.getElementById("uValue").disabled = true;
      result.html("TIMEOUT");
      let img = document.createElement("img");
      img.src = "img/timeout.png";
      img.setAttribute("alt", "timeout");
<<<<<<< HEAD
      img.setAttribute("width", "200px");
=======
      img.setAttribute("width", "100px");
>>>>>>> b004382be5dc3eb275c303326884b7ca7dd04943
      document.getElementById("resultId").appendChild(img);
      clearTimeout(timer);
    } else {
      eleTimer.innerHTML = timeAvailable + " seconds remaining";
      timeAvailable--;
    }
  }
  $(".userValue").on("change", function() {
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

    power = power - 20;
    document.getElementById("power").innerHTML = power;

    if (power <=0) {
      result.html("Lost");
      document.getElementById("uValue").disabled = true;
      clearInterval(timer);
    }

    if (current < randomnum) {
      console.log("Go up");
      result.html("Go up");
    } else if (current > randomnum) {
      console.log("Go Down");
      result.html("Go Down");
    } else if (current == randomnum) {
      console.log("Guessed");
      clearInterval(timer);
      result.html(" ");
      let img = document.createElement("img");
      img.src = "img/win.gif";
      img.setAttribute("alt", "win");
      img.setAttribute("width", "100px");
      document.getElementById("resultId").appendChild(img);

      document.getElementById("uValue").disabled = true;

      $.ajax({
        url: "./API/Receivers/resultPointsReceiver.php",
        method: "POST",
        data: {
          power: power,
        },
        dataType: "json",
        success: function(response) {
          if (response.status == 405){
          } else {
            
              //top.location = './index.php';
          }
        }
      });

      /* result.html("Guessed"); */
    }
  });
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
