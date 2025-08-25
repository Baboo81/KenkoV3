"use strict";

// ----------------------------
// Logo animation
// ----------------------------
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
}

// ----------------------------
// Popups
// ----------------------------
function showPopup(popupId) {
    const popup = document.getElementById(popupId);
    if (popup) popup.style.display = "flex";
}

function closePopup(popupId) {
    const popup = document.getElementById(popupId);
    if (popup) popup.style.display = "none";
}

// ----------------------------
// Trust Section : logos animation
// ----------------------------
document.addEventListener("DOMContentLoaded", () => {
    const logos = document.querySelectorAll(".logo");
    let index = 0;
    if (logos.length > 0) {
        setInterval(() => {
            logos[index].classList.remove("active");
            index = (index + 1) % logos.length;
            logos[index].classList.add("active");
        }, 3000);
    }
});

// ----------------------------
// Messages d'alerte auto-disparition
// ----------------------------
setTimeout(() => {
    document.querySelectorAll(".alert").forEach(alert => {
        if (!alert.classList.contains("cookie-banner")) {
            alert.classList.remove("show");
            alert.classList.add("fade");
            setTimeout(() => alert.remove(), 500);
        }
    });
}, 5000);

// ----------------------------
// Gestion cookie-banner : affichage, scroll, flou
// ----------------------------
document.addEventListener('DOMContentLoaded', () => {
    const acceptBtn = document.getElementById('accept-cookies');
    const banner = document.getElementById('cookie-banner');
    const navBar = document.querySelector('nav.disabled-navbar');
    const dropdown = document.querySelector('ul.dropdown-menu');
    const map = document.getElementById('mapid');

    // Fonction pour créer cookie
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = `${name}=${value}; ${expires}; path=/; SameSite=Lax`;
    }

    // Si cookie existant, réinitialiser état
    if (document.cookie.includes('cookie-preferences=accepted')) {
        if (banner) banner.style.display = 'none';
        if (navBar) {
            navBar.style.filter = 'none';
            navBar.classList.remove('disabled-navbar');
        }
        if (dropdown) dropdown.style.overflow = 'visible';
        if (map) map.style.overflow = 'visible';
        document.body.style.overflow = 'auto';
    }

    // Clic sur "Accepter"
    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            setCookie('cookie-preferences', 'accepted', 365);

            if (banner) banner.style.display = 'none';
            document.body.style.overflow = 'auto';

            if (navBar) {
                navBar.style.filter = 'none';
                navBar.classList.remove('disabled-navbar');
            }

            if (dropdown) dropdown.style.overflow = 'visible';
            if (map) map.style.overflow = 'visible';
        });
    }

    // Bloquer scroll si cookie non présent
    if (!document.cookie.includes('cookie-preferences=accepted')) {
        document.body.style.overflow = 'hidden';
    }
});

// ----------------------------
// Footer : Map Leaflet
// ----------------------------
document.addEventListener('DOMContentLoaded', () => {
    const mapContainer = document.getElementById('mapid');
    
    // Vider le container pour éviter une map "fantôme"
    if (mapContainer) mapContainer.innerHTML = "";

    // Créer la map seulement si elle n'existe pas encore
    if (!window.map) {
        window.map = L.map('mapid').setView([50.71036, 4.36889], 16.4);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(window.map);
        L.marker([50.71036, 4.36889]).addTo(window.map);
    }
});



// ----------------------------
// Slider manuel et auto
// ----------------------------
let next = document.querySelector('.next');
let prev = document.querySelector('.prev');

if (next && prev) {
    next.addEventListener('click', () => {
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').appendChild(items[0]);
    });

    prev.addEventListener('click', () => {
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').prepend(items[items.length - 1]);
    });

    // Auto run slider
    setInterval(() => {
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').appendChild(items[0]);
    }, 3000);
}
