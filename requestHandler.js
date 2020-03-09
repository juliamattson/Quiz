$(document).ready(function () {
        $("#logIn").on("click", function(e) {
          e.preventDefault();
          const userName = $(".inputName").val();
          const password = $(".inputPassword").val();
          if (userName == "" || password == "") {
            alert("Wrong!");
          } else {
            $.ajax({
              url: "./API/Receivers/userReceiver.php",
              method: "POST",
              data: {
                lognin: 1,
                userName: userName,
                password: password,
              },
              dataType: "json",
              success: function(response) {
                  if(response==false){
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