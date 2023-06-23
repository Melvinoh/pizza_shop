<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/pizza_shop/client/src/components/footer.css">
    <link rel="stylesheet" href="/pizza_shop/client/src/styles/header.css">
    <link rel="stylesheet" href="/pizza_shop/client/src/components/form.css">
    <link rel="stylesheet" href="/pizza_shop/client/src/pages/shop.css">
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
                    <a href="/pizza_shop/index.php">home</a>
                    <a href="/pizza_shop/index.php#about"> about</a>
                    <a href="/pizza_shop/client/src/pages/shop.php">shop</a>
                    <a href="/pizza_shop/index.php#blogs">blogs</a>
                    <a href="/pizza_shop/client/src/components/login.php" >contact</a>
                </nav>
           </div>
            <div class="icons">
                <i class="fa-solid fa-bars" id="menu"></i>
                 <a href="/pizza_shop/client/src/components/login.php" style="color:orangered"><i class="fa-solid fa-user" styles="color:orangered"></i></a>
                <i class="fa-solid fa-basket-shopping" id="cart"></i>
                <i class="fa-solid fa-magnifying-glass" id='search'></i>
            </div>
        </div>
    </div>
    <div class="shoppingcart">
        <div class="shopping-wrapper">
            <div class="heading">
                <h2>your cart Melvin</h2>
                <i class="fa-solid fa-xmark close"></i>
            </div>
            <div class="cart-wrapper">
                
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
