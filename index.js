// var swiper = new Swiper(".mySwiper", {
//   slidesPerView: 3,
//   spaceBetween: 30,
//   freeMode: true,
//   pagination: {
//   el: ".swiper-pagination",
//   clickable: true,
//   },
//   breakpoints: {
//       // when window width is >= 320px
//       320: {
//         slidesPerView: 2,
//         spaceBetween: 10
//       },
//       // when window width is >= 480px
//       480: {
//         slidesPerView: 3,
//         spaceBetween: 20
//       },
//       // when window width is >= 640px
//       640: {
//         slidesPerView: 4,
//         spaceBetween: 30
//       }
//   }
// });

// var swiper2 = new Swiper(".mySwiper1", {
//   effect: "coverflow",
//   grabCursor: true,
//   centeredSlides: true,
//   slidesPerView: "auto",
//   coverflowEffect: {
//     rotate: 50,
//     stretch: 0,
//     depth: 100,
//     modifier: 1,
//     slideShadows: true,
//   },
//   pagination: {
//     el: ".swiper-pagination",
//   },
// });


var searchForm = document.querySelector('.search-form');
var shoppingCart = document.querySelector('.shoppingcart');
var nav = document.querySelector('.menu-sec');

var menu = document.getElementById('menu');
var cart = document.getElementById('cart');
var search = document.getElementById('search');

menu.onclick = () => {
  nav.classList.toggle('active');
  shoppingCart.classList.remove('active');
  searchForm.classList.remove('active');

};
cart.onclick = () => {
  shoppingCart.classList.toggle('active');
  nav.classList.remove('active');
  searchForm.classList.remove('active');

};
search.onclick = () => {
  searchForm.classList.toggle('active');
  shoppingCart.classList.remove('active');
  nav.classList.remove('active');
};

// login script




document.getElementById('.loginForm').onsubmit() =  (e) =>{
  e.preventDefault();

  var form_inputs = this.serialize()
  var container = document.querySelector('.error-con');

  console.log(form_inputs);

  if(!form_inputs.checkValidity()){
    container.innerHTML = form_inputs.validationMessage;
  }else{
    var xhttp = new XMLHttpRequest();

    xhttp.onload = () =>{
      container.innerHTML =xhttp.responseText()
    };
    xhttp.open("GET",'/api/users.php?q=' + form_inputs , true)
    xhttp.send()
  }

}





  