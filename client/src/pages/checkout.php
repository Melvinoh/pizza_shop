<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="checkout.css">

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
        <div class="checkout">
            <h2>checkout </h2>
            <div class="checkout-wrapper">
                <div class="left">
                    <div class="address_info">
                        <h3> 1. adress information</h3>
                        <div class="address-wrapper">
                            <div class="inputs">
                                <label for="uname">name</label>
                                <input type="text"name="username">
                            </div>
                            <div class="inputs">
                                <label for="uname">mobile number</label>
                                <input type="text"name="username">
                            </div>
                            <div class="inputs">
                                <label for="uname">email</label>
                                <input type="text"name="username">
                            </div>
                            <div class="inputs">
                                <label for="uname">city</label>
                                <input type="text"name="username">
                            </div>
                            <div class="inputs">
                                <label for="uname">state</label>
                                <input type="text"name="username">
                            </div>
                            <div class="inputs">
                                <label for="uname">zip address</label>
                                <input type="text"name="username">
                            </div>
                        </div>
                    </div>
                    <div class="scheduled-del">
                        <h3>2. delivery method </h3>

                        <div class="tabs-wrapper">
                            <div class="button1">
                                <i class="fa-solid fa-truck"></i>
                                <span>same day</span>
                            </div>   
                            <div class="button2">
                                    <i class="fa-solid fa-truck-fast"></i>
                                <span>express</span>
                            </div>
                            <div class="button2">
                                <i class="fa-solid fa-truck"></i>
                                <span>same day</span>
                            </div> 
                            <div class="button2">
                                <i class="fa-solid fa-truck"></i>
                                <span>same day</span>
                            </div> 
                        </div>
                        <div class="del-details">
                           <div class="del-det-con">
                                <div class="content">
                                    <h3>terms of service</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Quaerat unde sunt debitis asperiores 
                                        quisquam aspernatur, sed et? Quisquam, repudiandae commodi?
                                    </p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti eum laudantium rem itaque deserunt voluptas veniam amet cum? Totam, corporis!
        
                                    </p>
                                    <h3 style="color:orangered; margin:0.4rem;" > Amount  kes 3000</h3> 
                                </div>
                                <img src="./pictures/delivery2.png" alt="img">
                           </div>
                           <div class= "address-wrapper">
                                <div class="inputs">
                                    <label for="uname">streets</label>
                                    <input type="text"name="username">
                                </div>
                                <div class="inputs">
                                    <label for="uname">estate /plot/address</label>
                                    <input type="text"name="username">
                                </div>
                                <div class="inputs">
                                    <label for="uname">house number</label>
                                    <input type="text"name="username">
                                </div>
                                <div class="inputs">
                                    <label for="uname">confitm address</label>
                                    <input type="checkbox"name="username">
                               </div>
                           </div>
                        </div>
                    </div>
                    <div class="scheduled-del">
                        <h3>3. payment method</h3>
                        <div class="tabs-wrapper">
                            <div class="button1">
                                <i class="fa-solid fa-truck"></i>
                                <span>mpesa</span>
                            </div>
                            <div class="button2">
                                <i class="fa-solid fa-truck"></i>
                                <span>paypal</span>
                            </div>
                            <div class="button2">
                                <i class="fa-solid fa-truck"></i>
                                <span>credit card</span>
                            </div>
                            <div class="button2">
                                <i class="fa-solid fa-truck"></i>
                                <span>pay on delivery</span>
                            </div>
                        </div>
                        <div class="payment">
                            <div class="del-details">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quaerat unde sunt debitis asperiores 
                                    quisquam aspernatur, sed et? Quisquam, repudiandae commodi?
                                </p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti eum laudantium rem itaque deserunt voluptas veniam amet cum? Totam, corporis!
    
                                </p>
                                <h3 style="color:orangered; margin:0.4rem;" > Amount  kes 3000</h3> 
                            </div>

                        </div>
                    </div>
                    <div class="invoice">
                        <h3>4. invoice download</h3>
                    </div>
                </div>
                <div class="right">
                    <h3>order summary</h3>
                    <div class="cart-order">
                        <div class="cart-con">
                            <div class="cart-item">
                                <img src="/pizza_shop/client/pictures/pizza1.jpg" alt="img">
                                <div class="content">
                                    <h3>'bbq pizza'</h3>
                                    <div class="inner-content">
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <span>4.2</span>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <span class="price">'2000 kes'</span>
                                    </div>
                                    <div class="qty">
                                        <label for="qty"> qty </label>
                                        <form method ="post">
                                            <input type="number" name ="qty" value="'.$value['qty'].' class ="itemqty">
                                            <input type="hidden" name = "id" value ="'.$value['id'].' class ="itemid">
                                        </form>
                                        <div class="total">
                                            <h3>Total</h3>  
                                            <span>'13000'</span>  
                                        </div>
                                    </div>
                                </div>
                                <form class="delete" >
                                    <input type="hidden" name="id" value="'.$value['id'].'"/>
                                    <button class="button1 "><i class="fa-solid fa-trash "type="submit"></i></button>
                                </form>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>