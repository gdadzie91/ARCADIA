window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');



    } else {
        navbar.classList.remove('scrolled');

    }
});

window.addEventListener('scroll', function() {
    var navbar = document.querySelector('ul');
    if (window.scrollY > 50) {
        navbar.classList.remove('border-bottom');

    }else{
        navbar.classList.add('border-bottom');

    }
});