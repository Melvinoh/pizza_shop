<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./client/src/components/footer.css">
    <link rel="stylesheet" href="./client/src/components/header.css">
    <link rel="stylesheet" href="./client/src/components/form.css">
    <link rel="stylesheet" href="styles.css">
   <script src=""></script>
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
                    <a href="./client/src/components/signup_form.php">home</a>
                    <a href="/about.html"> about</a>
                    <a href="./client/src/pages/shop.php">shop</a>
                    <a href="./client/src/pages/blogs.php">blogs</a>
                    <a href="./client/src/components/login.php">contact</a>
                </nav>
           </div>
            <div class="icons">
                <i class="fa-solid fa-bars" id="menu"></i>
                
                <i class="fa-solid fa-user"><a href="./client/src/components/login.php"></a></i>
                <i class="fa-solid fa-basket-shopping" id="cart"></i>
                <i class="fa-solid fa-magnifying-glass" id='search'></i>
            </div>
        </div>
    </div>
    <div class="shoppingcart">
        <div class="shopping-wrapper">
            <div class="heading">
                <h2>your cart Melvin</h2>
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="cart-wrapper">
                <div class="cart-con">
                    <div class="cart-item">
                        <img src="./client/pictures/pizza19.jpeg" alt="img">
                        <div class="content">
                            <h3>bbq pizza</h3>
                            <div class="inner-content">
                                <div class="rating">
                                    <span>Rating:</span>
                                    <span>4.2</span>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <span class="price">kes 1200</span>
                            </div>
                            <div class="qty">
                                <label for="qty"> qty</label>
                                <input type="number">
                                <div class="total">
                                    <h3>Total</h3>
                                    <span>3</span>
                                </div>
                            </div>
                        </div>
                        <div class="delete">
                            <i class="fa-solid fa-trash"></i>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="search-form">
        <form action="">
            <div class="input">
                <label for=""><i class="fa-solid fa-magnifying-glass"></i></label>
                <input type="text" placeholder="search here">
            </div>
        </form>
    </div>
