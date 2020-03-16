
$(document).ready(function() {
  var badge = $(".selectedValue");
  var randomnum = Math.floor(Math.random() * 20);
  var result = $(".result");
  console.log(randomnum);
  $(".userValue").on("change", function() {
    var current = $(this).val();
    badge.text(current).animate({
      left: current + "%"
    });
    if (current < randomnum) {
      console.log("Go up");
      result.html("Go up");
    } else if (current > randomnum) {
      console.log("Go Down");
      result.html("Go Down");
    } else {
      console.log("Guessed");
      result.html(" ");
      let img = document.createElement("img");
      img.src = "img/win.gif";
      img.setAttribute("alt", "win");
      img.setAttribute("width", "200px");
      document.getElementById("resultId").appendChild(img);

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

