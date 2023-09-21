function myFunction(x) {
    x.classList.toggle("change");
  }
const menuBtn = document.querySelector('menubutton');
let menuOpen = false;
menubutton.addEventListener('click', () => {
if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;} else {
        menuBtn.classList.remove('open');
        menuOpen = false;
    }
    });