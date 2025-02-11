"use strict";
//Dropdown-menu : effect
$(document).ready(function() {
    $('#userMenu').on('click', function (e) {
        let $menu = $(this).next('.dropdowmn-menu');

        //Si le menu est déjà ouvert, on le ferme
        if ($menu.hasClass('show')) {
            $menu.removeClass('show');
        } else {
            //Sinon on ouvre l'animation
            $menu.addClass('show');
        }
    });
});
////////////////////////////// END /////////////////////////

//logo animation :
let logo = document.getElementById('logoAnimation');
let largeurEcran = window.innerWidth - 50;
let hauteurEcran = window.innerHeight - 50;

setInterval(() => {
     const x = Math.random() * largeurEcran;
     const y = Math.random() * hauteurEcran;
     logo.style.left = x + 'px';
     logo.style.top = y + 'px';
}, 3000);
////////////////////////////// END /////////////////////////

//Pop-up :

    //Création de la fct pour afficher le pop-up :
    function showPopup(popupId) {
        document.getElementById(popupId).style.display = "flex";
    }

    //Création de la fct pour fermer le pop-up :
    function closePopup(popupId) {
        document.getElementById(popupId).style.display = "none";
    }
////////////////////////////// END /////////////////////////

//Gestion des messages d'erreurs : disparition auto du msg
setTimeout(() => {
    let alert = document.querySelector(".alert");
    if(alert) {
        alert.classList.remove("show");
        alert.classList.add("fade");
        setTimeout(() => alert.remove(), 500);//Supprime du DOM après le fade
    }
}, 5000); //5sec
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
    document.querySelector('.slide').prepend(items[items.length - 1]) // here the length of items = 6
})
////////////////////////////// END /////////////////////////


