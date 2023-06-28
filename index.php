<?php 
include("./client/src/components/header.php");
include("./api/db.php");

?>
    <section class="" id="#home">
        <div class="hero-section">
            <div class="left">
                <h1 class="">Best and fastest delivery to you place</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores quis ratione odit ipsam voluptatem ipsa veritatis sed voluptates unde omnis necessitatibus, explicabo nesciunt reiciendis nemo quae accusamus consequuntur culpa soluta?</p>
                <div class="button-rapper">
                    <a href="./client/src/components/signup_form.php"><button>get started</button></a>

                <div class="video">
                    <span><i class="fa-solid fa-play"></i></span>
                    <span>how To Order!</span>
                </div>
                </div>
            </div>
            <div class="right">
                <img src="./client/pictures/cheff.JPG" alt="img">
            </div>
        </div>
        
        <div class="category">
            <div class="title">Categories</div>
            <div class="cat-wrapper">
                <?php   
                $sql = "SELECT * FROM `categories`";
                $results = $db->query($sql);
                $row = $results->fetch_assoc();
                foreach($results as $row):
                ?>
                <a href="/pizza_shop/client/src/pages/shop.php?f=<?php echo($row['_id'])?>"> 
                    <div class="box">
                        <img src="/pizza_shop/client/pictures/<?php echo($row['url_img'])?>" alt="img">
                        <div class="content">
                            <i class="fa-solid fa-bookmark"></i>
                            <div class="starts">
                                <p><?php echo($row['cat_name'])?></p>
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
                </a>
                <?php endforeach; ?>
            </div>
        
        </div>
        <div class="coll-container">
            <div class="col-heading">
                <h2 class="title"> top collections</h2>
                <p>All our best meal in one delicious snap</p>
            </div >
            <div class="coll-wrapper">
                <?php 
                $sql = "SELECT * FROM `categories` LIMIT 4";
                $results = $db->query($sql);
                $row = $results->fetch_assoc();
                foreach($results as $row ):
                ?>
                <a href="/pizza_shop/client/src/pages/shop.php?f=<?php echo($row['_id'])?>">
                    <div class="col-item">
                        <img src="./client/pictures/<?php echo($row['url_img'])?>" alt="img">
                        <div class="content">
                            <span class="button2"><?php echo($row['cat_name'])?></span>
                            <h2>community favourites</h2>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        
        </div>
    </section>
    </section id="about">
        <div class=" trending swiper mySwiper">
            <div class="title">
                <h1 class="title">Trending recipes</h1>
            </div>
            <div class="swiper-wrapper">
                <?php

                $sql = "SELECT * FROM `items-tb`";
                $results = $db->query($sql);
                $row = $results->fetch_assoc();
                foreach($results as $row):
                ?>
                <div class="swiper-slide trends-con">
                    <img src="./client/pictures/<?php echo($row['url_img'])?>" alt="img">
                    <div class="item">
                        <h2 class="price heading2"> ksh <?php echo($row['price'])?></h2>
                        <div class="content">
                            <h2 class="heading2"><?php echo($row['name'])?></h2>
                            <div class="stars">
                                <i></i>4.5</i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star-half"></i> 
                            </div>
                            <a href="/pizza_shop/client/src/pages/single_item.php?q=<?php echo($row['_id'])?>"><span class="button1">order now</span></a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    
        <div class="popular">
            <h2 class="title"> popular food</h2>
            <div class="pop-wrapper">
                <?php 
                $sql = "SELECT * FROM `items-tb` LIMIT 9";
                $results = $db->query($sql);
                $row = $results->fetch_assoc();
                foreach($results as $row ):
                ?>
                <a href="/pizza_shop/client/src/pages/single_item.php?q=<?php echo($row['_id'])?>">
                    <div class="pop-item">
                            <img src="./client/pictures/<?php echo($row['url_img'])?>" alt="img">
                            <h3><?php echo( $row['name'])?></h3>
                    </div>
                </a>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <section  id="#blogs">
            <div class="">
        
            <div class="newest-con swiper mySwiper1">
                <h2 class="title">Newest recipes</h2>
                <div class="swiper-wrapper new-wrapper">
                    <?php 
                    $sql = "SELECT * FROM `items-tb` LIMIT 9";
                    $results = $db->query($sql);
                    $row = $results->fetch_assoc();
                    foreach($results as $row ):
                    ?>
                    <div class="swiper-slide new-item">
                        <img src="./client/pictures/<?php echo($row['url_img'])?>" alt="img">
                        <div class="content">
                            <div class="top">
                                <i class="fa-solid fa-bookmark"></i>
                                <h3> <?php echo($row['description'])?>"</h3>
                                <hr>
                            </div>
                            <div class="bottom">
                                <div class="left">
                                    <span>amount</span>
                                    <p>kes <?php echo($row['price'])?></p>
                                </div>
                                <div class="right">
                                    <span>portion</span>
                                    <p><?php echo($row['qty'])?> qty</p>
                                </div>
                            </div>
                            <div class="hidden">
                                <form method="post" class ="product_data">
                                    <input type="hidden" name="p_name" value="<?php echo($row['name'])?>">
                                    <input type="hidden" name="p_id" value="<?php echo($row['_id'])?>">
                                    <input type="hidden" name="p_price" value="<?php echo($row['price'])?>">
                                    <input type="hidden" name="p_category" value="<?php echo($row['category_id'])?>">
                                    <input type="hidden" name="p_url" value="<?php echo($row['url_img'])?>">
                                    <button class="button1" type="submit"> add to cart</button>
                                </form>
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
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    
    <div class="blogs">
        <h2 class="title">what we are craving now</h2>
        <div class="coll-wrapper">
            <?php 
            $sql = "SELECT * FROM `categories` LIMIT 4";
            $results = $db->query($sql);
            $row = $results->fetch_assoc();
            foreach($results as $row ):
            ?>

            <div class="col-item">
                <img src="./client/pictures/<?php echo($row['url_img'])?>" alt="img">
                <div class="content">
                    <span class="button1"><?php echo($row['cat_name'])?></span>
                    <h2>community favourites</h2>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php   include("../pizza_shop/client/src/components/footer.php")?>
