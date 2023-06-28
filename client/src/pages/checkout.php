<?php
 session_start();
 include('../components/header.php')
?>
    <div class="checkout">
        <h1 class="title" style="text-align: center;"> hey! lets checkout </h1>
        <div class="checkout-wrapper">
            <div class="left">
                <div class="address_info">
                    <h3> 1. adress information</h3>
                    <form class="address-wrapper" method="post">
                        <div class="inputs">
                            <label for="uname">name</label>
                            <input type="text"name="name">
                        </div>
                        <div class="inputs">
                            <label for="uname">mobile number</label>
                            <input type="text"name="phone">
                        </div>
                        <div class="inputs">
                            <label for="uname">email</label>
                            <input type="text"name="email">
                        </div>
                        <div class="inputs">
                            <label for="uname">city</label>
                            <input type="text"name="city">
                        </div>
                        <div class="inputs">
                            <label for="uname">state</label>
                            <input type="text"name="state">
                        </div>
                        <div class="inputs">
                            <label for="uname">zip address</label>
                            <input type="text"name="zip">
                        </div>
                        <button class="button2" value="submit"style="text-align:center; width:50%; margin:auto;">submit </button>
                    </form>
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
                                <h2 class="title"> Terms Of Service</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quaerat unde sunt debitis asperiores 
                                    quisquam aspernatur, sed et? Quisquam, repudiandae commodi?
                                </p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti eum laudantium rem itaque deserunt voluptas veniam amet cum? Totam, corporis!
                                </p>
                                <h3 style="color:orangered; margin:0.4rem;" > Amount  kes 3000</h3> 
                            </div>
                            <img src="/pizza_shop/client/pictures/delivery2.png" alt="img">
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
                <h1 class="">order summary</h1>
                <div class="cart-order">
                    <?php
                        if(isset($_SESSION['cart'])){
                        $output="";   
                        foreach($_SESSION['cart']as $item=>$value){
                            $output.='
                            <div class="cart-con">
                                <div class="cart-item">
                                    <img src="/pizza_shop/client/pictures/'.$value['img'].'" alt="img">
                                    <div class="content">
                                        <h3>'.$value['name'].'</h3>
                                        <div class="inner-content">
                                            <div class="rating">
                                                <span>Rating:</span>
                                                <span>4.2</span>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span class="price">'.$value['price'].'</span>
                                        </div>
                                        <div class="qty">
                                            <label for="qty"> qty </label>
                                            <form method ="post">
                                                <input type="number" name ="qty" value="'.$value['qty'].' class ="itemqty">
                                                <input type="hidden" name = "id" value ="'.$value['id'].' class ="itemid">
                                            </form>
                                            <div class="total">
                                                <h3>Total</h3>  
                                                <span>'.$value['total'].'</span>  
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
                            ';
                        };
                        $output.='
                            <div class="totals">
                                <div class="top-t">
                                    <div class="inputs">
                                        <h3>subtotal</h3>
                                        <span>$37.66</span>
                                    </div>
                                    <div class="inputs">
                                        <h3>discounted sales</h3>
                                        <span>$37.66</span>
                                    </div>
                                    <div class="inputs">
                                        <h3>total sales task</h3>
                                        <span>$37.66</span>
                                    </div>
                                </div>
                                <div class="tinputs">
                                    <span>Total</span>
                                    <span>$37.66</span>
                                </div>
                            </div>
                        ';
                        echo($output);
                    }else{
                        echo" your cart is empty";
                    };
                    ?>
                </div>
                
                <div class="user-details">

                </div>
            </div>
        </div>
    </div>
</div>    
<?php include('../components/footer.php')?>
