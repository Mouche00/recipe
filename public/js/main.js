// $('form input:file').change(function () {
//     $('form p').text(this.files.length + " file selected");
// });

const burgerButton = document.querySelector('#navbar-mobile-button');
const mobileNav = document.querySelector('#navbar-mobile');

burgerButton.addEventListener('click', () => {
    mobileNav.classList.toggle('hidden');
});
