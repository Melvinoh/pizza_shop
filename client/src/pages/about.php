<?php include('../components/header.php')?>
    <div class="ad_top-con">
        <div class="left">
            <div class="tp-wrap" style="font-size: 1.2rem;">
                <p>About Us </p>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <h1 style="font-size: 4vw;">why choose us </h1>
            <h1> nice atstes best aroma with a greate feeling</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit eos nulla ut nemo quia molestias corrupti at aliquid dolores ratione.</p>
            <div class="tabs-wrapper">
                <div class="button2">
                    <i class="fa-solid fa-headset"></i>
                    <span>24hr service</span>
                </div>   
                <div class="button2">
                        <i class="fa-solid fa-truck-fast"></i>
                    <span>express</span>
                </div>
                <div class="button2">
                    <i class="fa-solid fa-wallet"></i>
                    <span>easy pay</span>
                </div> 
                <div class="button2">
                    <i class="fa-solid fa-dollar-sign"></i>
                    <span>cheap</span>
                </div> 
            </div>
            <a href="/pizza_shop/client/src/pages/shop.php" class="button3">
                <span>shop now </span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <div class="right">
            <img src="/pizza_shop/client/pictures/back5.jpg" alt="img">
            <div class="content">
                <div class="tp-wrap" style="color:orangered;">
                    <p>black friday offer</p>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <h2>Mambo iko best in the world <br> up to 50% off</h2>
                <a href="/pizza_shop/client/src/pages/shop.php" class="button3">
                    <span>shop now </span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="about-center">
        <?php
            include('C:/xampp/htdocs/pizza_shop/api/db.php');
            $sql = "SELECT * FROM `items-tb` ORDER BY 'category_id' asc limit 1";
            $results = $db->query($sql);
            $row = $results->fetch_assoc();
            foreach($results as $row):
        ?>
        <div class="deals-wrapper">
            <a href="/pizza_shop/client/src/pages/single_item.php?q=<?php echo($row['_id'])?>">
                <div class="weekly">
                    <div class="ab-heading">
                        <h3> weekly hot deals</h3>
                        <i class="fa-solid fa-arrow-right nip" ></i>
                    </div>
                    <img src="/pizza_shop/client/pictures/<?php echo($row['url_img'])?>" alt="img">
                    <div class="c-bottom">
                        <h3> <?php echo($row['name'])?></h3>
                        <div class="icons">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span>10 reviews</span>
                        </div>
                        <div class="bwraps-con">
                            <div class="bwraps">
                                <span class="nip">45</span>
                                <span>snap 1</span>
                            </div>
                            <div class="bwraps">
                                <span class="nip">45</span>
                                <span>snap 2</span>
                            </div>
                            <div class="bwraps">
                                <span class="nip">45</span>
                                <span>snap 3</span>
                            </div>
                        </div>
                        <div class="price">
                            <h4><?php echo($row['price'])?></h4>
                            <h4 style="color:grey; text-decoration:line-through;">$5000</h4>
                        </div>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
            <div class="monthly">
                <div class="heading">
                  <h3>  monthly best selling</h3>
                    <hr>
                </div>
                <?php
                    include('C:/xampp/htdocs/pizza_shop/api/db.php');
                    $sql = "SELECT * FROM `items-tb` ORDER BY 'name' desc limit 3";
                    $results = $db->query($sql);
                    $row = $results->fetch_assoc();
                ?>
            
                <?php foreach($results as $row): ?>
                    <div class="prod-con">
                    <div class="img">
                        <img src="/pizza_shop/client/pictures/<?php echo($row['url_img'])?>" alt="">
                        <div class="icons">
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-pen-to-square"></i>
                        </div>
                    </div>
                    <div class="leftp-con">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span style="color:orangered;">10 reviews</span>
                        </div>
                        <h3><?php echo($row['name'])?></h3>
                        <div class="price">
                            <span style="color:orange"><?php echo($row['price'])?></span>
                            <span style="color:grey; text-decoration:line-through;">$1250</span>
                        </div>
                        <a href="/pizza_shop/client/src/pages/shop.php">
                            <div class="button4">
                                <span>shop now </span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>

                        
                    </div>
                </div>
                <?php endforeach ;?>
               
          
            </div>
            <div class="featuring">
                <div class="ft-tabs">
                    <span> pizza</span>
                    <span> fruits</span>
                    <span> burgers</span>
                    <span> drinks</span>
                    <span> chicken</span>
                </div>
                <div class="ft-wrapper">
                    <div class="img">
                        <img src="/pizza_shop/client/pictures/pizza10.jpeg" alt="img">
                        <div class="icons">
                            <i class="fa-regular fa-pen-to-square nip"></i>
                            <i class="fa-solid fa-heart nip"></i>
                            <i class="fa-solid fa-bookmark nip"></i>
                        </div>
                    </div>
                    <div class="ft-bt">
                        <h4 style="color:orangered;">shakaholas best</h4>
                        <h2> popped pizza crips snacks chocolate</h2>
                        <div class="stars">
                            <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <span>10 reviews</span>
                        </div>
                        <div class="price">
                            <span>$5300</span>
                            <span>$1250</span>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-add">
        <div class="left">
            <div class="right">
                <img src="/pizza_shop/client/pictures/back9.jpg" alt="">
                <div class="content">
                    <div class="tp-wrap">
                        <p>black friday offer</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <h2>kuchemka kuchemka deals </h2>
                    <h2>to 50% off</h2>
                    <div class="button1"> 
                        <span>shop now</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <img src="/pizza_shop/client/pictures/bac6.avif" alt="">
            <div class="content">
                <div class="tp-wrap" style="color:orangered">
                    <p>black friday offer</p>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <h2>Fresh pizzas </h2>
                <div class="button1"> 
                    <span>shop now</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <?php include('../components/footer.php')?>
      
