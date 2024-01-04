window.addEventListener('resize', () => {
  const menu = document.querySelector('.main-menu-container');
  if (window.innerWidth > 1280) {
    // console.log('texsz');
    menu.classList.remove('main-menu');
  } else {
    menu.classList.add('main-menu');
  }
  // console.log(window.innerWidth);
});

window.addEventListener('load', () => {
  const menu = document.querySelector('.main-menu-container');
  if (window.innerWidth > 1280) {
    // console.log('texsz');
    menu.classList.remove("main-menu");
  } else {
    menu.classList.add('main-menu');
  }
  // console.log(window.innerWidth);
});

const menu = () => {
  const nav = document.querySelector('#nav');
  nav.classList.toggle('hidden');
};

