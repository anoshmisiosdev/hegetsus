function myFunction(x) {
    x.classList.toggle("change");
  }
const menuBtn = document.querySelector('change');
let menuOpen = false;
menuBtn.addEventListener('change', () => {
if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;} else {
        menuBtn.classList.remove('open');
        menuOpen = false;
    }
    });