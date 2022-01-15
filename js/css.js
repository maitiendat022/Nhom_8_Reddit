let btnHome = document.getElementById("home")
let btHome = document.getElementById('home-bt')
let btnHomebtn = document.getElementById("homebt")

btnHome.onclick = function() {
    btHome.style.display = 'block';
    btnHomebtn.style.border = '1px solid rgb(237,239,241)';
    btnHomebtn.style.borderBottom = '0';
}

window.addEventListener('mouseup', function(event){
    if(event.target != btnHome){
        btHome.style.display = 'none';
        btnHomebtn.style.border = '1px solid white';
    }
});

//
let btnUser = document.getElementById("user-btn")
let menuProfile = document.getElementById('menu-profile')
let divUser = document.getElementById("user")

divUser.onclick = function() {
    menuProfile.style.display = 'block';
    btnUser.style.border = '1px solid rgb(237,239,241)';
    btnUser.style.borderBottom = '0';
}
window.addEventListener('mouseup', function(event){
    if(event.target != divUser){
        menuProfile.style.display = 'none';
        btnUser.style.border ='0';
    }
});
//
