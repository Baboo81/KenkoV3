"use strict";


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


//Footer; map :

    //Create map:
const centroid = [50.71036, 4.36889];
const map = L.map('mapid').setView(centroid, 16.4);

    //Add tiles & marker:
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
L.marker([50.71036, 4.36889]).addTo(map);
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
