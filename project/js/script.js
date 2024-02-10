let searchForm = document.querySelector('.search-form');
document.querySelector('#search').onclick = () =>
 {
  searchForm.classList.toggle('active');
  loginForm.classList.remove('active');
  navbar.classList.remove('active');
}


let loginForm = document.querySelector('.login-form');
document.querySelector('#login').onclick = () =>
 {
  loginForm.classList.toggle('active');
  searchForm.classList.remove('active');
  navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');
document.querySelector('#menu').onclick = () =>
 {
  navbar.classList.toggle('active');
  searchForm.classList.remove('active');
  loginForm.classList.remove('active');
}


window.onscroll = () =>
 {
  searchForm.classList.remove('active');
  loginForm.classList.remove('active');
  navbar.classList.remove('active');
}


