
/*######--Запрос регистрации--#######*/
let linkBox = document.querySelector(".link_box");//блок в котором меняется блок регистрации, авторизации на блок пользователя
let wrapFormUser = document.querySelector(".wrap-form");//блок регистрации, авторизации
let user = document.querySelector(".user_box");//блок пользователя

let formReg = document.querySelector('#formReg');
let formLink = document.querySelector('#formLink');

let urlF = "http://myproject/requests/regLink.php";
let method = "POST";



if(formReg != null && formLink != null){

    formReg.addEventListener('submit', Ajax(urlF, method,  requestRegLink));
    formLink.addEventListener('submit', Ajax(urlF, method, requestRegLink));
   
}

if(user != null){
    exit.addEventListener("click", Ajax(urlF, method, requestRegLink));
    
}


function requestRegLink(dataServer){
    if(dataServer.status){
        //перезагрузить для отображения профиля
        location.reload();  
    }
}

/*--------------------------------------------------------------------- */

/*-------->>>>--Запросы контента--<<<<--------- */
let links = document.querySelectorAll("a");
let urlA = "http://myproject/requests/content.php";


// links.forEach(element => {
//     element.addEventListener('click', Ajax(urlA, method));
// });




/*##########--Универсальный запрос--########### */

function Ajax(url, requestMethod, callback) {

    return async function(ev){
    
        ev.preventDefault();
        
        let dataServer =  callback || function(){}
        
        let request;
        console.dir(this.tagName);
        if (this == window) { 
            request = new FormData();
            request.append("checkUser", "userSession");
        }
        if(this.tagName == "FORM"){
            request = new FormData(this);
        }
        if(this.name == "exit"){
            request = new FormData();
            request.append("exit", " ")
        }
     
        let responsePromise = await fetch(url,
            {    
                method: requestMethod,
                mode: 'cors',
                cache: 'no-cache',
                credentials: 'same-origin',
                headers: { },                                          
                redirect: 'follow',    
                referrer: 'no-referrer',
                body: request
            }  );
           
        dataServer(await responsePromise.json());                
    }
}






/*######--Запрос для регистрации и контента--#######*/


/*При регистрации нужно остаться на этой же странице и проверять существование сессии */



//   // Значения по умолчанию обозначены знаком *
//     return fetch(url, {
//         method: 'POST', // *GET, POST, PUT, DELETE, etc.
//         mode: 'cors', // no-cors, cors, *same-origin
//         cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
//         credentials: 'same-origin', // include, *same-origin, omit
//         headers: {
//             'Content-Type': 'application/json',
//             // 'Content-Type': 'application/x-www-form-urlencoded', - Заголовок передаёт форму
//         },
//         redirect: 'follow', // manual, *follow, error
//         referrer: 'no-referrer', // no-referrer, *client
//         body: JSON.stringify(data), // тип данных в body должен соответствовать значению заголовка "Content-Type"
//     })
//     .then(response => response.json()); // парсит JSON ответ в Javascript объект

        

    
    
    
