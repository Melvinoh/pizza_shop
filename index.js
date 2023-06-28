var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  freeMode: true,
  pagination: {
  el: ".swiper-pagination",
  clickable: true,
  },
  breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 4,
        spaceBetween: 30
      }
  }
});

var swiper2 = new Swiper(".mySwiper1", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});


var swiper3 = new Swiper(".mySwiper", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper4 = new Swiper(".mySwiper2", {
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});


var searchForm = document.querySelector('.search-form');
var shoppingCart = document.querySelector('.shoppingcart');
var shopping1= document.querySelector('.shopping1');
var nav = document.querySelector('.menu-sec');
var closeCart = document.querySelector(".close");

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
  shopping1.classList.toggle('active') ;
  nav.classList.remove('active');
  searchForm.classList.remove('active');

};
search.onclick = () => {
  searchForm.classList.toggle('active');
  shoppingCart.classList.remove('active');
  nav.classList.remove('active');
};
closeCart.onclick = () =>{
  shoppingCart.classList.remove('active');
}

// window.onscroll = () =>{
//   if(document.body.scrollTop >= 5){

//     console.log(header)
//     header.classList.add('active');
//   }else{
//     header.classList.remove('active');
//   }
// };

document.addEventListener('scroll', ()=>{
  var header = document.querySelector('.header');
  if(window.scrollY > 0){
    header.classList.add('active');
  }else{
    header.classList.remove('active');
  }
})




//product cart data

$('document').ready(function(){
  $(".product_data").on("submit", function(event){
      event.preventDefault();
      
      var formValues= $(this).serialize();

      $.post("/pizza_shop/api/cart.php?q=addtocart", formValues , function(data){ 
          $(".cart-wrapper").html(data.ct);
          alert("one item has been added to cart")
      })
  })          
});

$(document).ready(function(){
  $(".clear").on("click", function(){
      var q = "clearcart"
      $.post("/pizza_shop/api/cart.php?q=clearcart", q, function(data){
      $(".cart-wrapper").html(data);
      })
  });
});   
$(document).ready(function(){
  $(".delete").on("submit", function(e){
      e.preventDefault();
      var id =$(this).serialize();
      $.post("/pizza_shop/api/cart.php?q=removefromcart", id , function(data){
           $(".cart-wrapper").html(data);
           alert(id);
      })
  });
});  
$(document).ready(function(){
  $(".itemqty").on("change", function(){
      var qty =$(this).val();
      var id = $(this).siblings(".itemid").val();
           alert(qty , id);
      $.post("cart.php?q=updatecart", {qty:qty,id:id} , function(data){
          $(".cart-wrapper").html(data);
      })
  });
});  

//user address scripts

$('document').ready(function(){
  $(".address-wrapper").on("submit", function(event){
      event.preventDefault();
      var formValues= $(this).serialize();
      $.post("/pizza_shop/api/orders.php", formValues , function(data){ 
          $(".user-details").html(data);
          alert(formValues);
    })
  })          
});











  