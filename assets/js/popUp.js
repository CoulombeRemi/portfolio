// Rémi Coulombe
// 2018
// Techniques intégration multimédia
// remi.foresale 
window.onload = function () {

    // Call pour le Btn
    var btns = document.getElementsByClassName("popBtn");

    for (var i = 0; i < btns.length; i++) {
        btns[i].onclick = function(ev){
            //ev.target.children[0].style.display = "block";
            ev.target.parentElement.children[0].style.display = "block";


            var iFrame = ev.target.parentElement.children[0].children[0].children[2].children[0];
            iFrame.setAttribute("src", iFrame.dataset.src);
            
            ev.target.parentElement.children[0].children[0].children[0].onclick = function(){
                ev.target.parentElement.children[0].style.display = "none";
                iFrame.setAttribute("src", "");
            }
            ev.target.parentElement.children[0].onclick = function(){
                ev.target.parentElement.children[0].style.display = "none";
                iFrame.setAttribute("src", "");
            }
            ev.target.parentElement.children[0].children[0].onclick = function(cancelClick){
                cancelClick.stopPropagation();
                console.log(cancelClick);
                
            }
            
            
        }
    }
};