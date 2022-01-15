let btAvt = document.getElementById('btAvt');
let menuAvt = document.getElementById('menuAvt');

btAvt.onclick = function() {
    menuAvt.style.display = 'block';
};
window.addEventListener('mouseup', function(event){
    if(event.target != btAvt){
        menuAvt.style.display = 'none';
    }
});