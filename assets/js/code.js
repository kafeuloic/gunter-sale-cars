var bouton = document.querySelectorAll("button");
for (var i = 0; i < bouton.length; i++) {
    bouton[i].addEventListener("click", function(e) {
        if (this.style.backgroundColor != "green") {
            this.style.backgroundColor = "green";
            alert("Commande effectuer avec succes.\nVeillez vérifier votre boite mail.. :)");
        } else {
            this.style.backgroundColor = "#b21d22";
            alert("Annulation de la commande..");
        }
    });
}

var a1 = document.querySelector('a[href="#home"]');
var a2 = document.querySelector('a[href="#cat"]');
var a3 = document.querySelector('a[href="#marque"]');
var a4 = document.querySelector('a[href="#propos"]');
var a5 = document.querySelector('a[href="#cont"]');

a1.addEventListener('click', function(e) {
    this.style.backgroundColor = "rgba(0,0,0,0.5)";
    a2.style.backgroundColor = "transparent";
    a3.style.backgroundColor = "transparent";
    a4.style.backgroundColor = "transparent";
    a5.style.backgroundColor = "transparent";
});

a2.addEventListener('click', function(e) {
    this.style.backgroundColor = "rgba(0,0,0,0.5)";
    a1.style.backgroundColor = "transparent";
    a3.style.backgroundColor = "transparent";
    a4.style.backgroundColor = "transparent";
    a5.style.backgroundColor = "transparent";
});

a3.addEventListener('click', function(e) {
    this.style.backgroundColor = "rgba(0,0,0,0.5)";
    a1.style.backgroundColor = "transparent";
    a2.style.backgroundColor = "transparent";
    a4.style.backgroundColor = "transparent";
    a5.style.backgroundColor = "transparent";
});

a4.addEventListener('click', function(e) {
    this.style.backgroundColor = "rgba(0,0,0,0.5)";
    a1.style.backgroundColor = "transparent";
    a2.style.backgroundColor = "transparent";
    a3.style.backgroundColor = "transparent";
    a5.style.backgroundColor = "transparent";
});

a5.addEventListener('click', function(e) {
    this.style.backgroundColor = "rgba(0,0,0,0.5)";
    a1.style.backgroundColor = "transparent";
    a2.style.backgroundColor = "transparent";
    a3.style.backgroundColor = "transparent";
    a4.style.backgroundColor = "transparent";
});