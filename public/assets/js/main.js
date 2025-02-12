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

//Gestion des avis du caroussel, animation étoile ...
document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll(".rating i");
    const ratingInput = document.querySelector("#ratingValue");
    const reviewForm = document.querySelector("#reviewForm");
    const reviewList = document.querySelector("#reviewList");

    let selectedRating = 0;

    // Gestion du survol des étoiles
    stars.forEach((star, index) => {
        star.addEventListener("mouseover", () => {
            highlightStars(index);
        });

        star.addEventListener("mouseleave", () => {
            highlightStars(selectedRating - 1);
        });

        star.addEventListener("click", () => {
            selectedRating = index + 1;
            ratingInput.value = selectedRating;
            highlightStars(index);
        });
    });

    function highlightStars(index) {
        stars.forEach((star, i) => {
            star.classList.toggle("active", i <= index);
        });
    }

    // Gestion de la soumission du formulaire
    reviewForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.querySelector("#name").value.trim();
        const message = document.querySelector("#message").value.trim();
        const rating = ratingInput.value;

        if (name === "" || message === "" || rating === "0") {
            alert("Merci de remplir tous les champs et d’attribuer une note !");
            return;
        }

        // Création d'un nouvel avis dynamique
        const newReview = document.createElement("div");
        newReview.classList.add("carousel-item");
        if (reviewList.children.length === 0) {
            newReview.classList.add("active");
        }

        newReview.innerHTML = `
            <p>"${message}"</p>
            <div class="rating">
                ${generateStars(rating)}
            </div>
            <h5>- ${name}</h5>
        `;

        reviewList.appendChild(newReview);

        // Réinitialisation du formulaire
        reviewForm.reset();
        selectedRating = 0;
        highlightStars(-1);
    });

    function generateStars(rating) {
        let starsHtml = "";
        for (let i = 0; i < 5; i++) {
            starsHtml += `<i class="fas fa-star ${i < rating ? 'active' : ''}"></i>`;
        }
        return starsHtml;
    }
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
    document.querySelector('.slide').prepend(items[items.length - 1]) // here the length of items = 6
})
////////////////////////////// END /////////////////////////


