<?php
 include('../components/header.php')
?>
    <section class="blog-con">
        <h2>What About a Look To Our Blogs</h2>
        <section class="blogs">
            <?php
                if(isset( $_GET['f'])){
                    $filter = $_GET['f'];
                    include('C:/xampp/htdocs/pizza_shop/api/db.php');
                    $sql = "SELECT * FROM `items-tb` WHERE `name` like' %$filter%' or `category_id`like '%$filter%' limit 1";
                    $results = $db->query($sql);
                    $row = $results->fetch_assoc();
                }else{
                    $query = "SELECT * FROM `items-tb` limit  1";
                    include('C:/xampp/htdocs/pizza_shop/api/db.php');
                    $results = $db->query($query);
                    $row = $results->fetch_assoc();
                } 
                foreach($results as $row):     
            ?>
            <div class="prod-blog">
                <img src="/pizza_shop/client/pictures/<?php echo ($row["url_img"])?>" alt="img">
                <div class="heading">
                    <h2 style="color:orangered;text-decoration:dashed;"><?php echo ($row["name"])?></h2>
                    <div class="ratings">
                        <h3>ratings :</h3>
                        <div class="icons">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <span>reviews : 10+</span>
                    </div>
                </div>
                <div class="history">
                    <h3>history :</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor reprehenderit, 
                        commodi vitae error culpa alias nemo maiores fuga ex neque pariatur tempora cumque ab.
                        Iure dolores eaque in eum culpa error ab voluptas sit maiores. Neque impedit, sed iusto similique cum fuga maiores?
                        Esse nisi nemo ab perferendis laboriosam nam! Provident, sequi? Quae iure voluptatum 
                        incidunt corporis nam earum nisi?
                    </p>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, blanditiis explicabo adipisci voluptates,
                        debitis architecto aspernatur labore quaerat commodi quod et esse
                        libero eveniet illum cum veniam modi magnam? Doloremque?
                    </p>
                </div>
                <?php endforeach ;?>
                <div class="pr-rv">
                    <h3>reviews :</h3>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="review">
                                    <img src="/pizza_shop/client/pictures/people4.jpeg" alt="img">
                                    <div class="content">
                                        <div class="name"> Name  : ian kome</div>
                                        <div class="icons">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                        <i class="fa-solid fa-quote-left"></i>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                            Deleniti commodi ea fugiat laudantium perspiciatis voluptatum, 
                                        </p>
                                        <i class="fa-solid fa-quote-right"></i>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="comments-con">
                    <h3>comments</h3>
                    <div class="comment-wrapper">
                        <div class="comment">
                            <img src="/pizza_shop/client/pictures/person1.png" alt="img">
                            <div class="conent">
                                <div class="head">
                                    <h3>ian kome</h3>
                                    <span>date : 12/03/2023</span>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad necessitatibus magni veritatis saepe 
                                    quaerat nihil repudiandae cumque quia illo dolor.
                                </p>
                            </div>
                        </div>
                        <div class="comment">
                            <img src="/pizza_shop/client/pictures/person5.webp" alt="img">
                            <div class="conent">
                                <div class="head">
                                    <h3>sydney austrailer</h3>
                                    <span>date : 12/03/2023</span>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad necessitatibus magni veritatis saepe 
                                    quaerat nihil repudiandae cumque quia illo dolor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lv-comment">
                        <h3>leave a comment</h3>
                        <form action="" class="lvc">
                            <div class="inputs">
                                <label for="name"> you name*</label>
                                <input type="text" name="name" >
                            </div>
                            <div class="inputs">
                                <label for="email"> you email*</label>
                                <input type="text" name="name" >
                            </div>
                            <div class="inputs">
                                <label for="email"> phone number
                                </label>
                                <input type="text" name="name" >
                            </div>
                            <div class="message">
                                <label for="name"> you message*</label>
                                <input type="text" name="name" >
                            </div>
                            <span class="button1">
                                send
                            </span>
                        </form>

                    </div>
                </div>
            </div>
            <div class="prod-sidebar">
            
                <div class="cat-blog">
                    <h3>categories</h3>
                    <div class="catblogwrap">
                        <?php
                            $query = "SELECT * FROM `categories`";
                            include('C:/xampp/htdocs/pizza_shop/api/db.php');
                            $results = $db->query($query);
                            $row = $results->fetch_assoc();
                            
                            foreach($results as $row):
                        ?>
                        <span class="button2">
                            <?php echo($row['cat_name'])?>
                        </span>
                        <?php endforeach ;?>
                    </div>
                </div>
                <div class="relatedpost-con">
                    <h3>related post</h3>
                    <div class="rpwrap">
                        <?php
                            if(isset( $_GET['f'])){
                                $filter = $_GET['f'];
                                include('C:/xampp/htdocs/pizza_shop/api/db.php');
                                $sql = "SELECT * FROM `items-tb` WHERE `name` like' %$filter%' or `category_id`like '%$filter%'";
                                $results = $db->query($sql);
                                $row = $results->fetch_assoc();
                            }else{
                                $query = "SELECT * FROM `items-tb` limit  4";
                                include('C:/xampp/htdocs/pizza_shop/api/db.php');
                                $results = $db->query($query);
                                $row = $results->fetch_assoc();
                            } 
                            foreach($results as $row):     
                        ?>
                        <div class="post">
                            <img src="/pizza_shop/client/pictures/<?php echo($row["url_img"]) ?>" alt="">
                            <div class="cont">
                                <h3><?php echo ($row["name"])?></h3>
                                <div class="det">
                                    <span>march 26,2023</span>
                                    <span>234 views</span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="archives">
                    <H3>archives</H3>
                    <div class="arc-wrap">
                        <span class="button2">
                            2019-06/22
                        </span>
                        <span class="button2">
                            2019-06/22
                        </span>
                        <span class="button2">
                            2019-06/22
                        </span>
                    </div>
                    <div class="relatedpost-con">
                        <h3>popular post</h3>
                        <div class="rpwrap">
                            <div class="post">
                                <img src="/pizza_shop/client/pictures/<?php echo($row["url_img"]) ?>" alt="">
                                <div class="cont">
                                    <h3><?php echo ($row["name"])?></h3>
                                    <div class="det">
                                        <span>march 26,2023</span>
                                        <span>234 views</span>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </section>
        <?php include('../components/footer.php')?>