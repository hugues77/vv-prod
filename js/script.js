const formOpenLogin = document.querySelector('#form_login'),
    homeLogin = document.querySelector('.home_login'),
    formContainer = document.querySelector('.form_container'),
    closeBtn = document.querySelector('.form_close'),
    loginBtn = document.querySelector('.login_Btn'),
    pwShowHide = document.querySelectorAll('.pw_hide'),

    off_eye = document.querySelectorAll('.off-eye'),
    on_eye = document.querySelectorAll('.on-eye');

    //on clique sur login(navbar), il show pannel form and vetical navbar
    formOpenLogin.addEventListener('click', ()=>{
        homeLogin.classList.add("show");
    })
    //on clique btn close, ferme le pannel
    closeBtn.addEventListener('click', ()=>{
        homeLogin.classList.remove("show");
    })

    //input password
    pwShowHide.forEach((icon) => {
        icon.addEventListener('click', () =>{
            let getPwInput = icon.parentElement.querySelector('input');
            if(getPwInput.type === "password"){
                getPwInput.type = "text";
                icon.classList.add("show");
            }else{
                getPwInput.type = "password";
                icon.classList.add("hide");
            }
        })
    });