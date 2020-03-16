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
                if (response.status == 404){
                } else {
                    console.log(response);
                   // $(location).attr('href','http://localhost:1401/game.php');
                    //window.location.replace('game.php');
                    top.location = './game.php';
                }
              }
            })

} }
);

});

function makeRequest(url, method, FormData, callback) {
    fetch(url, {
        method: method,
        body: FormData
    }).then((data) => {
        return data.json()
    }).then((result) => {
        callback(result);
    }).catch((err) => {
        console.log("Error: ", err)
    })
}

getTopList();

function getTopList() {
    makeRequest('./API/Receivers/topListReceiver.php?endpoint=getTopList', 'GET', null, (result) => {
        if (result.status == 404){
        } else {
            renderTopList(result);
        }
    })
}
$(document).ready(function (){
  $("#signUp").on("click", function(e) {
    e.preventDefault();
    const userName = $(".inputName").val();
    const password = $(".inputPassword").val();
    if (userName == "" || password == "") {
      alert("Wrong!");
    } else {
      $.ajax({
        url: "./API/Receivers/signUpReceiver.php",
        method: "POST",
        data: {
          signup: 1,
          userName: userName,
          password: password,
        },
        dataType: "json",
        success: function(response) {
          if (response.status == 405){
          } else {
              //console.log(response);
             // $(location).attr('href','http://localhost:1401/game.php');
              //window.location.replace('game.php');
              top.location = './game.php';
          }
        }
      })

} }
);
});
function renderTopList(result) {
    let MainTopListDiv = document.getElementsByClassName("MainTopListDiv")[0];
    let TopList = result;
    
    let TopListDiv = document.createElement("div");
    TopListDiv.classList = "TopListDiv";
    TopListDiv.innerHTML = '';
    MainTopListDiv.appendChild(TopListDiv);

    for (let i = 0; i < TopList.length; i++) {
        let selectedTopList = TopList[i];
        let contentDiv = document.createElement('div');
        contentDiv.classList = 'contentDiv';
        
        let userName = document.createElement('p');
        userName.classList = 'userNameToplist';
        userName.innerText = selectedTopList.userName + ': ';

        let point = document.createElement('p')
        point.classList = 'pointToplist';
        point.innerText = selectedTopList.point + '' + ' points';

        contentDiv.appendChild(userName);
        contentDiv.appendChild(point);
        TopListDiv.appendChild(contentDiv);
    }    
}  
