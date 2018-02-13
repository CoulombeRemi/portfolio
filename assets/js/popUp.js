window.onload = function () {
    
    // Call pour le popUp
    var modal = document.getElementById('popUp');

    // Call pour le Btn
    var btn = document.getElementById("popBtn");

    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
};