"use strict";

//logo animation :
let logo = document.getElementById('logoAnimation');
let largeurEcran = window.innerWidth - 50;
let hauteurEcran = window.innerHeight - 50;

if (logo) {

    setInterval(() => {
        const x = Math.random() * largeurEcran;
        const y = Math.random() * hauteurEcran;
        logo.style.left = x + 'px';
        logo.style.top = y + 'px';
   }, 3000);

};


////////////////////////////// END /////////////////////////

//Pop-up :

    //Création de la fct pour afficher le pop-up :
    function showPopup(popupId) {
        document.getElementById(popupId).style.display = "flex";

        let popup = document.getElementById(popupId);
        if (popup) {
            popup.style.display = "flex";
        }
    }

    //Création de la fct pour fermer le pop-up :
    function closePopup(popupId) {
        document.getElementById(popupId).style.display = "none";
    }
////////////////////////////// END /////////////////////////

//trustSection : logo animation
document.addEventListener("DOMContentLoaded", function() {
    let logos = document.querySelectorAll(".logo");
    let index = 0;

    setInterval(() => {
        logos[index].classList.remove("active"); // Masquer le logo actuel
        index = (index + 1) % logos.length; // Passer au suivant
        logos[index].classList.add("active"); // Afficher le nouveau logo
    }, 3000); // Changement toutes les 3 secondes
});

////////////////////////////// END /////////////////////////

//Gestion des messages d'erreurs : disparition auto du msg
setTimeout(() => {
    document.querySelectorAll(".alert").forEach(alert => {
        if (!alert.classList.contains("cookie-banner")) { // Ignore la bannière des cookies
            alert.classList.remove("show");
            alert.classList.add("fade");
            setTimeout(() => alert.remove(), 500); // Supprime du DOM après le fade
        }
    });
}, 5000); // Cache les alertes après 5 secondes
////////////////////////////// END /////////////////////////

//Gestion des btn : cookie-banner
document.addEventListener("DOMContentLoaded", function() {
    // Vérifie si le cookie existe déjà
    if (document.cookie.indexOf('cookie-preferences=accepted') !== -1) {
        document.getElementById('cookie-banner').style.display = 'none'; // Cache la bannière si le cookie existe
    }

    // Action du bouton "Accepter"
    document.getElementById('accept-cookies').addEventListener('click', function() {
        // Crée un cookie pour enregistrer l'acceptation
        document.cookie = "cookie-preferences=accepted; path=/; max-age=" + 60 * 60 * 24 * 365; // Valable 1 an
        
        // Cache la bannière après l'acceptation
        document.getElementById('cookie-banner').style.display = 'none';
    });
});

////////////////////////////// END /////////////////////////
//Footer; map :

    //Create map:
    const centroid = [50.71036, 4.36889];
    const map = L.map('mapid').setView(centroid, 16.4);
    
        //Add tiles & marker:
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
    L.marker([50.71036, 4.36889]).addTo(map);
////////////////////////////// END /////////////////////////

//Slider :
let next = document.querySelector('.next')
let prev = document.querySelector('.prev')

next.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').appendChild(items[0])
})

prev.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').prepend(items[items.length - 1])
});

//Auto run:
 setInterval(() => {
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').appendChild(items[0])
}, 3000);

////////////////////////////// END /////////////////////////


