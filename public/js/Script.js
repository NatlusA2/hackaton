// Navbar Fixed
window.onscroll = function () {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
}

// Hamburger
const hamburger = document.querySelector('#hamburger')
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('hamburger-active')
    navMenu.classList.toggle('hidden');
});

// Card Carousel
let sliderContainer = document.getElementById('sliderContainer');
let slider = document.getElementById('slider');
let cards = slider.getElementsByTagName('li');

let elementsToShow = 3;

if (document.body.clientWidth < 1000) {
    elementsToShow = 1;
}

let sliderContainerWidth = sliderContainer.clientWidth;

let cardWidth = sliderContainerWidth / elementsToShow;

slider.style.width = cards.length * cardWidth + 'px';
slider.style.transition = 'margin';
slider.style.transitionDuration = '1s';


for (let index = 0; index < cards.length; index++) {
    const element = cards[index];
    element.style.width = cardWidth + 'px';
}

function prev() {
    if (+slider.style.marginLeft.slice(0, -2) != -cardWidth * (cards.length - elementsToShow))
        slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2)) - cardWidth) + 'px';
}

function next() {
    if (+slider.style.marginLeft.slice(0, -2) != 0)
        slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2)) + cardWidth) + 'px';
}

//pop up form login


document.addEventListener('DOMContentLoaded', function() {
    var loginButton = document.getElementById('loginButton');
    loginButton.addEventListener('click', function() {
        var modal = document.getElementById('loginModal');
        modal.style.display = 'block';
    });

      // Menutup pop-up saat link ditutup
      var closeLoginModalLink = document.getElementById('closeLoginModal');
      closeLoginModalLink.addEventListener('click', function(event) {
          event.preventDefault(); 
          var modal = document.getElementById('loginModal');
          modal.style.display = 'none';
      });
});

//pop up form regist


document.addEventListener('DOMContentLoaded', function() {
    var regisModal = document.getElementById('regisModal');
    var regisButton = document.getElementById('regisButton');
    var loginModal = document.getElementById('loginModal');
    regisButton.addEventListener('click', function() {
        loginModal.style.display = 'none';
        regisModal.style.display = 'block';
    });

      // Menutup pop-up saat link ditutup
      var closeRegisModalLink = document.getElementById('closeRegisModal');
      closeRegisModalLink.addEventListener('click', function(event) {
          event.preventDefault(); 
          var modal = document.getElementById('regisModal');
          modal.style.display = 'none';
      });
});