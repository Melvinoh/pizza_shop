<?php
    if(isset($_GET['q']) && $_GET['q'] === 'catfilter'){
        $id = $_POST['id'];
        $query = "SELECT * FROM `items-tb` WHERE `category_id` = $id";
        include ("./api/db.php");
        $results = $db->query($query);
        $row = $results->fetch_assoc();
        foreach($results as $row){
            $output = '
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
                    <a href=""> <span class="button1">+ add to cart</span></a>
                </div>
            ';
            echo ($output);
        };



    }










?>