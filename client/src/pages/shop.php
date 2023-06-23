<?php include('../components/header.php')?>
<link rel="stylesheet" href="../components/footer.css">
<link rel="stylesheet" href="../components/header.css">
<link rel="stylesheet" href="shop.css">

    <section class="shop">
        <div class="sidebar">
            <h3>filters </h3>
            <div class="sh-categories">
                <h3>Categories</h3>
                <?php
                 $query = "SELECT * FROM `categories`";
                 include('C:/xampp/htdocs/pizza_shop/api/db.php');
                 $results = $db->query($query);
                 $row = $results->fetch_assoc();
                 
                 foreach($results as $row):
                ?>
                <form method="" id="categoryFil">
                    <div class="cat-item">
                        <div class="content">
                            <img src="../../pictures/<?php echo($row['url_img'])?>" alt="img" id="img_submit">
                            <h5><?php echo($row['cat_name'])?></h5>
                        </div>
                        <div class="hidden">
                            <input type="hidden" name="id" value="<?php echo($row['_id'])?>">
                        </div>
                    </div>
                </form>
                <?php endforeach ?>

            </div>
            <hr>
            <form action="">
                <div class="price">
                    <h3>filter by price</h3>
                    <div class="range">
                        <span>100</span>
                        <input type="range" min="100" max="6700">
                        <span>6700</span>
                    </div> 
                </div>
            </form>
            <hr>
            <form method="post">
                <div class="taste">
                    <h3>test and flavour</h3>
                    <select name="taste" id="taste">
                        <option value="chillie"> chillie</option>
                        <option value="spicy"> spicy</option>
                        <option value="juicy"> juicy</option>
                        <option value="lemon flavour"> lemon flavour</option>
                        <option value="thick"> thick</option>
                        <option value="sweet"> sweet</option>
                        <option value="salty"> salty</option>
                    </select>
                </div>
            </form>
            <hr>
            <div class="producttags">
                <h3>product tags
                </h3>
                <form action="">
                    <div class="tag">
                        <span  name="pizza" value ="pizza">pizza</span>
                        <span name="pizza" value ="pizza">drinks</span>
                        <span name="pizza" value ="pizza">burgers</span>
                        <span name="pizza" value ="pizza">chicken</span>
                        <span name="pizza" value ="pizza">fries</span>
                        <span name="pizza" value ="pizza">mahartgadthi</span>
                    </div>
                </form>
            </div>
            <hr>
            <div class="hot-deals">


            </div>
        </div>
        <div class="products-disp">
            <?php
                if(isset( $_GET['f'])){
                    $filter = $_GET['f'];
                    include('C:/xampp/htdocs/pizza_shop/api/db.php');
                    $sql = "SELECT * FROM `items-tb` WHERE `name` like %$filter% or `category_id`like %$filter%";
                    $results = $db->query($sql);
                    $row = $results->fetch_assoc();
                }else{
                    $query = "SELECT * FROM `items-tb`";
                    include('C:/xampp/htdocs/pizza_shop/api/db.php');
                    $results = $db->query($query);
                    $row = $results->fetch_assoc();
                }
            ?>
            <div class="ads">
                <img src="../../pictures/pizza9.jpeg" alt="img">
                <div class="content">
                    <h4>the pizza</h4>
                    <h3>
                        fresh and natural healthy food special offer
                    </h3>
                </div>
            </div>
            <div class="filter2">
                <div class="icons">
                    <i class="fa-solid fa-filter"></i>
                    <i class="fa-solid fa-grip"></i>
                    <i class="fa-solid fa-grip"></i>
                </div>
                <div class="item-number">
                    <?php
                        echo "20 items found";
                    ?>
                </div>
                <div class="sort">
                    <h5>sort by</h5>
                    <span><i class="fa-solid fa-angle-down"></i></span>
                </div>
            </div>
            <div class="grid-items">
                <?php
                    foreach($results as $row):
                ?>
              
                <div class="item-card">
                    <a href="./single_item.php?q=<?php  echo($row["_id"])?>"class="">
                        <div class="top">
                            <span>New</span>
                            <i class="fa-regular fa-bookmark"></i>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <img src="../../pictures/<?php echo($row["url_img"]) ?>" alt="img">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half"></i>
                        </div>
                        <div class="name">
                            <h4><?php echo($row["name"])?></h4>
                            <p> ksh <?php echo($row["price"])?></p>
                        </div>
                    </a>
                    <form action="" method="post" class="item-details">
                        <input type="hidden" name="id" value="<?php echo($row["_id"])?>">
                        <input type="hidden" name="name" value="<?php echo($row["name"])?>">
                        <input type="hidden" name="url_img" value="<?php echo($row["url_img"])?>">
                        <input type="hidden" name="price" value="<?php echo($row["price"])?>">
                        <!-- <input type="hidden" name="description" value="<?php echo($row["description"])?>"> -->
                        <button class="button1" type="submit">+ add to cart</button>
                    </form>

                    
                </div>
               
                <?php endforeach; ?>
            </div>
            </div>
            </div>
        </div>

        
       
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../../../index.js"></script>
    <?php include('../components/footer.php')?>

