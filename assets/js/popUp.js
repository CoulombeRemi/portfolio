window.onload = function () {

    // Call pour le Btn
    var btns = document.getElementsByClassName("popBtn");

    for (var i = 0; i < btns.length; i++) {
        btns[i].onclick = function(ev){
            //ev.target.children[0].style.display = "block";
            ev.target.parentElement.children[0].style.display = "block";
            console.log(ev.target.parentElement.children[0]);
            console.log( ev.target.parentElement.children[2]);
            
            ev.target.parentElement.children[0].children[0].children[0].onclick = function(){
                ev.target.parentElement.children[0].style.display = "none";
            }
            ev.target.parentElement.children[0].onclick = function(){
                ev.target.parentElement.children[0].style.display = "none";
            }
            ev.target.parentElement.children[0].children[0].onclick = function(cancelClick){
                cancelClick.stopPropagation();
                console.log(cancelClick);
                
            }
            
        }
        
    }
    // btn.onclick = function() {
    //     modal.style.display = "block";
    // }

    // span.onclick = function() {
    //     modal.style.display = "none";
    // }
};