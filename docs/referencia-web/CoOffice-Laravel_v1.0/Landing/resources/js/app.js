/*
Template Name: CoOffice - Coworking Space Website Tailwind CSS 4 Template
Version: 1.0.0
Author: Unifato
Website: https://unifato.com/
Email: unifato.themes@gmail.com
File: App js
*/

// CSS File Import
import "../css/style.css";


// Preline Plugin File Import
import "preline";

import './components/gallary';
import './components/animation';
import './components/swiper';

var stickyNav = document.querySelector(".nav-sticky")

if (stickyNav) {
    window.addEventListener("scroll", function () {
        var scTop = window.pageYOffset || document.documentElement.scrollTop

        if (scTop >= 100) {
            stickyNav.classList.add("nav-sticky-on")
        } else {
            stickyNav.classList.remove("nav-sticky-on")
        }
    })
}


document.addEventListener("DOMContentLoaded", () => {
    const currentPath = window.location.pathname.replace(/\/$/, "")

    document.querySelectorAll("#navbar a[href]").forEach((link) => {
        const href = link.getAttribute("href")?.replace(/\/$/, "")
        if (!href) return

        if (currentPath === href || currentPath.endsWith(href)) {
            link.classList.add("active")
        }
    })
})


document.addEventListener("DOMContentLoaded", () => {
    const currentPath = window.location.pathname.replace(/\/$/, "")

    document.querySelectorAll("#offcanvasSidebar ul a[href]").forEach((link) => {
        const href = link.getAttribute("href")?.replace(/\/$/, "")
        if (!href) return

        if (currentPath === href || currentPath.endsWith(href)) {
            link.classList.add("active")
        }
    })
})