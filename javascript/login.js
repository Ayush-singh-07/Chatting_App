const form = document.querySelector(".signup form")
const cnt_btn = document.querySelector(".signup form button");
const error = document.querySelector(".signup .errormsg")


console.log(form)
console.log(cnt_btn)


form.onsumit=(e)=>{
    e.preventDefault();
}


cnt_btn.onclick=()=>{
    let myreq = new XMLHttpRequest();
    myreq.open('POST' , "php/loginajax.php", true);


    myreq.onload=()=>{
        if(myreq.readyState == XMLHttpRequest.DONE){
            if(myreq.status == 200 ){
                let data = myreq.response;
                    if(data  == "success"){
                        location.href ="users.php";
                    }
                    else{
                        error.style.display="block";
                        error.innerHTML=data;
                    }
            }
        }
    }





    let formdata = new FormData(form);
    myreq.send(formdata);
}