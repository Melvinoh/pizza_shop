<?php

if($_GET['q'] == "catfilter"){
    $filter= $_POST['id'];

    include('./db.php');

    $sql = "SELECT * FROM `items-tb` WHERE `name` like '%$filter%' or `category_id`like '%$filter%'";
    $results = $db->query($sql);
    $row = $results->fetch_assoc();

    if(isset($row)){
        $output = "";
        foreach( $results as $row){
            $output .= '
                <div class="item-card">
                    <a href="./single_item.php?q='.$row['_id'].'"class="">
                        <div class="top">
                            <span>New</span>
                            <i class="fa-regular fa-bookmark"></i>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <img src="../../pictures/'.$row['url_img'].'" alt="img">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half"></i>
                        </div>
                        <div class="name">
                            <h4>'.$row['name'].'</h4>
                            <p> ksh '.$row['price'].'</p>
                        </div>
                    </a>
                    <div class="hidden">
                        <form method="post" class ="product_data">
                            <input type="hidden" name="p_name" value="'.$row['name'].'">
                            <input type="hidden" name="p_id" value="'.$row['_id'].'">
                            <input type="hidden" name="p_price" value="'.$row['price'].'">
                            <input type="hidden" name="p_category" value="'.$row['category_id'].'">
                            <input type="hidden" name="p_url" value="'.$row['url_img'].'">
                            <button class="button1" type="submit"> add to cart</button>
                        </form>
                    </div>
                </div>
            ';
        };
        echo($output);
    }else{
    
        echo "no items found";
    
    };

};

   




?>