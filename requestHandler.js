$(document).ready(function () {
        $("#logIn").on("click", function() {
          const email = $("#inputName").val();
          const password = $("#inputPassword").val();
          if (name == "" || password == "") {
            alert("Wrong!");
          } else {
            $.ajax({
              url: "./API/Receivers",
              method: "POST",
              data: {
                lognin: 1,
                userName: userName,
                password: password,
              },
              dataType: "json",
              success: function(data) {
                  if(data==false){
                      alert("No such user");
                  }
                  else {
                    alert("No such user");
                  }
              }
            })

} }
);
});