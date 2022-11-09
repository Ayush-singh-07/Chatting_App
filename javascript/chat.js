const form  = document.querySelector('.area');
const input_field = form.querySelector('.input-field');
const btn = document.querySelector('.send');
const chatbox = document.querySelector('.chat-box')


form.onsubmit=(e)=>{
    e.preventDefault();
}


// btn.onclick=handler();
btn.addEventListener("click", handler);  

input_field.addEventListener("keypress", function(event) {
    
    if (event.key === "Enter") {
      
      event.preventDefault();
      
        btn.click();
    }
  });

function handler(){
    let myreq = new XMLHttpRequest();
    myreq.open("POST", "php/chatAjax.php", true);

    myreq.onload=()=>{
        if(myreq.readyState == XMLHttpRequest.DONE){
            if(myreq.status == 200){
                input_field.value="";
                scrolltochat();
            }
        }
    }

    let formdata = new FormData(form);
    myreq.send(formdata);
}

chatbox.onmouseenter=()=>{
    chatbox.classList.add('active')
}
chatbox.onmouseleave=()=>{
    chatbox.classList.remove('active')
}

setInterval(()=>{
    let myreq = new XMLHttpRequest();
    myreq.open("POST", "php/getchatAjax.php", true);

    myreq.onload=()=>{
        if(myreq.readyState == XMLHttpRequest.DONE){
            if(myreq.status == 200){
                let data = myreq.response;
                chatbox.innerHTML=data;
                if(!chatbox.classList.contains('active')){
                    scrolltochat();
                }
            }
        }
    }

    let formdata = new FormData(form);
    myreq.send(formdata)

}, 500);



function scrolltochat(){
    chatbox.scrollTop = chatbox.scrollHeight;
}