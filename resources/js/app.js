document.addEventListener('DOMContentLoaded', () => {
   
    const currentPath = window.location.pathname;
    console.log(currentPath);

  
    const navbarLinks = document.querySelectorAll('.navbar-link');
    console.log(navbarLinks);

    navbarLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('pick');
        }
    });
});

import './bootstrap';

