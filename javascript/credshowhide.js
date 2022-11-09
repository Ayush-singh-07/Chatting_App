const x = document.querySelector("form input[type='password']")
const btn= document.querySelector(".fa-eye")


btn.onclick=()=>{
    if(x.type == 'password'){
        x.type ='text'
        btn.classList.remove('fas')
        btn.classList.remove('fa-eye')
        btn.classList.add('fa-solid')
        btn.classList.add('fa-eye-slash')
    }
    else if(x.type == 'text'){
        x.type='password'
        btn.classList.remove('fa-solid')
        btn.classList.remove('fa-eye-slash')
        btn.classList.add('fas')
        btn.classList.add('fa-eye')
    }
}