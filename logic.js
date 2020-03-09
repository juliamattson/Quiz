$(document).ready(function() {
  var badge = $(".selectedValue");
  $(".userValue").on("change", function() {
    var current = $(this).val();
    badge.text(current).animate({
      left: current + "%"
    });
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
/* var inc = 0;
function getValue(newValue) { */

/*     console.log(newValue);
    $("#selectedValue").html(newValue);
    var el = $("#h4-container");
    var position = el.position();

    inc = inc + 20;
    $("#selectedValue").css("left", inc + "px");
    console.log("left: " + position.left + ", top: " + position.top); 
  });
}  */
