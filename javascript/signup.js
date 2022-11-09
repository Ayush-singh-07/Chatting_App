console.log('sadas');



const form  = document.querySelector('.signup form')
const form_btn = document.querySelector('.signup button')
const error = document.querySelector('.errormsg')

console.log(form);
console.log(form_btn)


form.onsubmit = (e)=>{
    e.preventDefault();
}

form_btn.onclick=()=>{
    let myreq= new XMLHttpRequest();
    myreq.open('POST' , 'php/signupajax.php ', true);

    myreq.onload=()=>{
        console.log(myreq.responseText)
        if(myreq.readyState === XMLHttpRequest.DONE){
            if(myreq.status === 200){
                let data = myreq.response;
                if(data == 'success'){
                    location.href = "users.php"
                }
                else{
                    error.style.display="block";
                    error.innerHTML = data;
                }
            }
        } 
    }

    let formdata = new FormData(form);
    myreq.send(formdata);
}