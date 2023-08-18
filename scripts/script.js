/*Dentro de tu archivo script.js
document.querySelector('.menu-toggle').addEventListener('click', function() {
  document.querySelector('.navbar').classList.toggle('menu-active');
}); */

let sections = document.querySelectorAll('section');

window.onscroll = () => {
  sections.forEach(sec => {
    let top = window.scrollY;
    let offset = sec.offsetTop;
    let height = sec.offsetHeight;

    if(top>= offset && top < offset + height){
      sec.classList.add('show-animate');
    }
    else{
      sec.classList.remove('show-animate');
    }
  })
}