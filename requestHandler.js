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
function getAllUser() {
    makeRequest('./API/Receivers/userReceiver.php?endpoint=getAllUser', 'GET', null, (result) => {
        if (result.status == 404){
        } else {
            console.log(result);
        }
    })
}

function getTopList() {
    makeRequest('./API/Receivers/topListReceiver.php?endpoint=getTopList', 'GET', null, (result) => {
        if (result.status == 404){
        } else {
            renderTopList(result);
        }
    })
}

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
        userName.classList = 'text';
        userName.innerText = selectedTopList.userName;

        let point = document.createElement('p')
        point.classList = 'text';
        point.innerText = selectedTopList.point + '' + ' Points';


        TopListDiv.appendChild(contentDiv);

        contentDiv.appendChild(userName);
        contentDiv.appendChild(point);
    }    
}  