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

getAllUser();

function getAllUser() {
    makeRequest('./API/Receivers/userReceiver.php?endpoint=getAllUser', 'GET', null, (result) => {
        if (result.status == 404){
        } else {
            console.log(result);
        }
    })
}