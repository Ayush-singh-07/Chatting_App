const srch = document.querySelector('.users .search  input ')
const s_btn = document.querySelector(".users .search  button ")
const users = document.querySelector('.users-list')


s_btn.onclick=()=>{
        srch.classList.toggle('show')
        srch.focus()
}

srch.onkeyup=(e)=>{

let s_item = srch.value;

if(s_item != ""){
        srch.classList.add("active")
}else{
        srch.classList.remove("active");
}


let myreq = new XMLHttpRequest();
myreq.open("POST", 'php/usersearch.php' , true);

myreq.onload =()=>{
        if(myreq.readyState == XMLHttpRequest.DONE){
                if(myreq.status == 200){
                        let data  =  myreq.response;
                        console.log(s_item);
                        users.innerHTML = data;
                }
        }
}
myreq.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
myreq.send("search_val="+s_item);
}

setInterval(()=>{

        let myreq = new XMLHttpRequest();
        myreq.open("GET", "php/usersajax.php", true);

        myreq.onload=()=>{
                if(myreq.readyState == XMLHttpRequest.DONE){
                        if(myreq.status == 200){
                                let data = myreq.response;
                                if(!srch.classList.contains('active')){
                                        users.innerHTML = data;
                                        console.log(data);
                                }
                        }
                }
        }

        myreq.send()
},500)