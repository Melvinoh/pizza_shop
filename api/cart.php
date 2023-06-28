<?php
session_start();
if (!isset($_SESSION['cart'])){
    $_SESSION['count'] = 0;
    $_SESSION['cart']= array();
    $q = $_GET['q'];
    $pizza = new shopping;
    if($q == 'addtocart'){
        $pizza->addtocart();
        $count = count($_SESSION['cart']);
        $_SESSION['count'] = $count;
    };
}else {
    if (isset($_POST['p_id'])){ 
             
        $q = $_GET['q'];
        $pizza = new shopping;
        if($q == 'addtocart'){
            $pizza->addtocart();
            $count = count($_SESSION['cart']);
            $_SESSION['count'] = $count;  
        }
    }
    $q="your cart is empty";
    $pizza = new shopping;
    $q = $_GET['q'];
   
    if (isset($_POST['id'])){
        $id = $_POST['id'];
        if($q == 'removefromcart'){
            $pizza->removefromcart();
            $count = count($_SESSION['cart']);
            $_SESSION['count']= $count;
            foreach($_SESSION['cart']as $key=>$value){
                $value['n.o'] = $_SESSION['count'];
            }
        }
    }
    if($q == 'clearcart'){
        $pizza->clearcart(); 
        $_SESSION['count'] = 0; 
    };
    if($q == 'updatecart'){
        $qty = $_POST['qty'];
        $pizza->updatecart($qty);
    }
}   
class shopping {
    function updatecart($qty){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value['name'] == $_POST['id']){

                $_SESSION['cart'][$key]['qty'] =(int) $qty;
                $qty = $_SESSION['cart'][$key]['qty'];
                $price =(float) $_SESSION['cart'][$key]['price'];
                $_SESSION['cart'][$key]['total'] = number_format($price * $qty,2);
               
                if ($_SESSION['cart'][$key]['qty'] == 0){
                    unset($_SESSION['cart'][$key]); 
                }

            };
        };
    }
    function clearcart(){
        unset($_SESSION['cart']);
        unset($_SESSION['count']);
        //header('location:./cart_data.php');
    }
    function removefromcart(){
        foreach($_SESSION['cart']as $key=>$value)
            if($value['id'] === $_POST['id']){
                unset($_SESSION['cart'][$key]);   
            }
        }
    function addtocart(){
        $id = $_POST['p_id'];
        $img =$_POST['p_url'];
        $food_name =$_POST['p_name'];
        $price =$_POST['p_price'];
        $qty = 1;
        $total = number_format(($price) * $qty,2);
        

        $item_cart_id = array_column($_SESSION['cart'],'name');
        $count = count($_SESSION['cart']);
        $_SESSION['count'] = $count + 1; 
        $cart = array(
            'n.o'=> $_SESSION['count'],
            'id'=>$id,
            'img'=>$img,
            'name'=>$food_name,
            'price'=>$price,
            'qty'=>$qty,
            'total'=>$total,
        );
        if (!in_array($food_name,$item_cart_id)){
                array_push($_SESSION['cart'],$cart);
        }
    }
};


// cart display ;
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
        ';
    };
    $output.= '<button class="button2 clear"> clear cart </button>';
    // $ct = $_SESSION['count'];
    // $out = "";
    echo($output);
}else{
    echo" your cart is empty";
    
};

   
   
//scripts  for remove,clear, chheckout, and invoice buttons

?>
<script>       
    $(document).ready(function(){
        $(".clear").on("click", function(){
            var q = "clearcart"
            $.post("/pizza_shop/api/cart.php?q=clearcart", q, function(data){
                // Display the returned data in browser
            // alert(data);
            $(".cart-wrapper").html(data);
            })
        });
    });   

</script> 
<script>
    $(document).ready(function(){
        $(".delete").on("submit", function(e){
            e.preventDefault();
            var id =$(this).serialize();
            $.post("/pizza_shop/api/cart.php?q=removefromcart", id , function(data){
                 $(".cart-wrapper").html(data);
                 alert(id);
            })
        });
    });  
    $(document).ready(function(){
        $(".itemqty").on("change", function(){
            var qty =$(this).val();
            var id = $(this).siblings(".itemid").val();
                 alert(qty , id);
            $.post("cart.php?q=updatecart", {qty:qty,id:id} , function(data){
                $(".cart-wrapper").html(data);
            })
        });
    });  
</script>
