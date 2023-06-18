<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pizza shop</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./client/src/components/header.css">
</head>
<body>
    <div class="header">
        <div class="navbar">
            <div class="logo">
               <div class="lable">
                <i class="fa-sharp fa-solid fa-utensils"></i>
               </div>
                <Span>pizza shop.</Span>
            </div>
            <div class="menu-sec">
                <nav class="nav">
                    <a href="#home">home</a>
                    <a href="/about.html"> about</a>
                    <a href="shop.html">shop</a>
                    <a href="#blogs">blogs</a>
                    <a href="#contacts">contact</a>
                </nav>
            </div>
            <div class="icons">
                <i class="fa-solid fa-user"></i>
                <i class="fa-solid fa-basket-shopping"></i>
                <i class="fa-solid fa-bars"></i>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>
    <section class="hero-section">
      <div class="left">
        <h1 class="">Best and fastest delivery to you place</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores quis ratione odit ipsam voluptatem ipsa veritatis sed voluptates unde omnis necessitatibus, explicabo nesciunt reiciendis nemo quae accusamus consequuntur culpa soluta?</p>
        <div class="button-rapper">
         <button>get started</button>
         <div class="video">
             <span><i class="fa-solid fa-play"></i></span>
             <span>how To Order!</span>
        </div>
        </div>
      </div>
      <div class="right">
        <img src="./client/pictures/cheff.JPG" alt="img">
      </div>
    </section>
    
    <div class="category">
        <div class="title">Categories</div>
        <div class="cat-wrapper">
            <div class="box">
                <img src="./client/pictures/pizza13.jpeg" alt="img">
                <div class="content">
                    <i class="fa-solid fa-bookmark"></i>
                    <div class="starts">
                        <p>meat lovers</p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half"></i>
                    </div>
                    <div class="bottom">
                        <span><i class="fa-solid fa-plus"></i></span>
                        <span>view more</span>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <div class="coll-container">
        <div class="col-heading">
            <h2 class="title"> top collections</h2>
            <p>All our best meal in one delicious snap</p>
        </div >
        <div class="coll-wrapper">
            <div class="col-item">
                <img src="./client/pictures/pizza11.jpeg" alt="img">
                <div class="content">
                    <span class="button2">view</span>
                    <h4>88 all-time Dinner favorites</h4>
                </div>
            </div>
        </div>
       
    </div>
    <div class=" trending swiper mySwiper">
        <div class="title">
            <h1 class="title">Trending recipes</h1>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="trends-con">
                    <img src="./client/pictures/pizza1.jpg" alt="img">
                    <div class="item">
                        <h2 class="price heading2">ksh 1200</h2>
                        <div class="content">
                            <h2 class="heading2">peperoni pizza</h2>
                            <div class="stars">
                                <i></i>4.5</i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star-half"></i> 
                            </div>
                            <span class="button1">
                                order now
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="popular">
        <h2 class="title"> popular food</h2>
        <div class="pop-wrapper">
           <div class="pop-item">
                <img src="./client/pictures/pizza12.jpeg" alt="img">
                <h3>BBQ pizza</h3>
           </div>
        </div>
    </div>
    <div class="newest-con">
        <h2 class="title">Newest recipes</h2>
        <div class="new-wrapper">
            <div class="new-item">
                <img src="./client/pictures/pizza13.jpeg" alt="img">
                <div class="content">
                    <div class="top">
                        <i class="fa-solid fa-bookmark"></i>
                        <h3> Penne Pasta in tomato sauce</h3>
                        <hr>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <span>time</span>
                            <p>10mins</p>
                        </div>
                        <div class="right">
                            <span>portion</span>
                            <p>2 persons</p>
                        </div>
                    </div>
                    <div class="button">
                        <span class="button1">add to cart</span>
                    </div>
                    <div class="hover">
                        <div class="icons">
                            <i class="fa-regular fa-heart"></i>
                            <i class="fa-regular fa-eye"></i>
                            <i class="fa-regular fa-layer-group"></i>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
    <div class="blogs">
        <h2 class="title">what we are craving now</h2>
        <div class="coll-wrapper">
            <div class="col-item">
                <img src="./client/pictures/pizza17.jpg" alt="img">
                <div class="content">
                    <span class="button1">photos</span>
                    <h2>community favourites</h2>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./index.js"></script>
</body>
</html>