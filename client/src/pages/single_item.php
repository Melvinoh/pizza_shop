<!DOCTYPE html>
<?php include('../components/header.php')?>
<link rel="stylesheet" href="../components/footer.css">
<link rel="stylesheet" href="../components/header.css">
<link rel="stylesheet" href="single_item.css">
    <section class="single-product">
        <div class="right">
            <div class="top"></div>
                <div class="head">
                    <h2>quaker poppe BBQ pizza</h2>
                    <div class="icons">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
                <hr>
                <div class="product-wrapper">
                    <div class="slider-con">
                    
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                            <?php
                            include ("C:/xampp/htdocs/pizza_shop/api/db.php");

                            $sql = "SELECT * From `items-tb` limit  4";
                            $row = $db->query($sql);
                            $results = $row->fetch_assoc();
                            foreach ($results as $row):
                            ?>
                                <div class="swiper-slide">
                                    <img src="../../pictures/pizza10.jpeg" />
                                </div>
                            <?php endforeach?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class=" mySwiper swiper ">
                            <div class="  swiper-wrapper">
                                <?php
                                foreach($results as $row):
                                ?>
                                <div class="swiper-slide thumbs">
                                    <img src="../../pictures/pizza10.jpeg" />
                                </div> 
                                <?php endforeach?>
                            </div>  
                        </div>  
                    </div> 
                    <?php
                        if(isset($_GET['q'])){
                            $_id = $_GET['q'];
                            $sql = "SELECT * FROM `items-tb` WHERE `_id` = '$_id'";
                            $results = $db->query($sql);
                            $row = $results->fetch_assoc();
                            foreach($results as $row){
                                echo '
                                    <div class="prod-details">
                                        <div class="name">
                                            <h4>product name:</h4>
                                            <h2>'.$row['name'].'</h2>
                                        </div>
                                        <div class="price">
                                            <h2>price</h2>
                                            <h4>'.$row['price'].'</h4>
                                        </div>
                                        <div class="size">
                                            <h3>size</h3>
                                        <div class="content">
                                                <span>medium </span>
                                                <span>large </span>
                                                <span>small </span>
                                        </div>
                                        </div>
                                        <div class="qty">
                                            <h3>qty</h3>
                                            <input type="number">
                                        </div>
                                        <div class="hidden">
                                            <form method="post" id="product_data">
                                                <input type="hidden" name="p_name" value="'.$row['name'].'">
                                                <input type="hidden" name="p_id" value="'.$row['_id'].'">
                                                <input type="hidden" name="p_price" value="'.$row['price'].'">
                                                <input type="hidden" name="p_category" value="'.$row['category_id'].'">
                                                <input type="hidden" name="p_url" value="'.$row['url_img'].'">
                                                <button class="button1" type="submit"> add to cart</button>
                                            </form>
                                        </div>
                                ';
                            };
                        }else{
                            echo "no results found";
                        }
                        ?>
                        <div class="prod-icons">
                            <div class="p-icons">
                                <i class="fa-regular fa-heart"></i>
                                <span>white list items</span>
                            </div>
                            <div class="p-icons">
                                <i class="fa-regular fa-bookmark"></i>
                                <span>white list items</span>
                            </div>
                            <div class="p-icons">
                                <i class="fa-regular fa-bookmark"></i>
                                <span>white list items</span>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="product-review">
            <div class="header">
                <span>reviews</span>
                <span>product blogs</span>
                <span>product details</span>
            </div>
            <div class="reviews">

            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="../../../index.js"></script>
   <script>
    
    </script>
 
    
</body>
</html>