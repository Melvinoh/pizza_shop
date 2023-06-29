<?php
session_start();
include('C:/xampp/htdocs/pizza_shop/api/db.php');
echo ($_POST['email']);
    if(!isset($_SESSION['user_address'])){
        $_SESSION['user_address'] = array();
        $name = $_POST['name'];
        $email =$_POST['email'];
        $state =$_POST['state'];
        $phone =$_POST['phone'];
        $city =$_POST['city'];
        $zip = $_POST['zip'];
        $user = array(
            'name'=> $name,
            'email'=> $email,
            'phone'=> $phone,
            'address'=> $zip,
            'town'=> $city,
            'streets'=>$state 
        );
        $items = "";
        $items = json_encode($_SESSION['cart']);
        $username = array_column($_SESSION['user_address'],'name');
        if (!in_array($name,$username)){
            array_push($_SESSION['user_address'],$user);
        }
        else{
            echo "address details already submited";
        }

    }
    if(isset($_SESSION['user_address'])){
        $output="";   
        foreach($_SESSION['user_address']as $item=>$value){
            $output.='
                <div class="totals">
                    <h2 class="title">Address preview </h2>
                    <div class="top-t">
                        <div class="inputs">
                            <h3>name</h3>
                            <span>'.$value['name'].'</span>
                        </div>
                        <div class="inputs">
                            <h3>email address</h3>
                            <span>'.$value['email'].'</span>
                        </div>
                        <div class="inputs">
                            <h3>phone number</h3>
                            <span>'.$value['phone'].'</span>
                        </div>
                        <div class="inputs">
                            <h3>city/town</h3>
                            <span>'.$value['town'].'</span>
                        </div>
                        <div class="inputs">
                            <h3>streets / estate</h3>
                            <span>'.$value['streets'].'</span>
                        </div>
                    </div>
                    <div class="tinputs">
                        <span>Total</span>
                        <span>$37.66</span>
                    </div>
                    <div class="button1" style="width:100%;">
                        <span>place order</span>
                    </div>
                </div>
            ';
        };
        echo($output);
    }
    
    //invoice id generator
    $name = $_POST['name'];
    $email =$_POST['email'];
    $state =$_POST['state'];
    $phone =$_POST['phone'];
    $city =$_POST['city'];
    $zip = $_POST['zip'];
    $items = "";
    $items = json_encode($_SESSION['cart']);

    $select =" SELECT invoice FROM  `orders-tb` order by invoice asc limit 1";
    $rs = $db->query($select);
    $inv = $rs->fetch_assoc();
    $slen= strlen($customerid);
    
    if(!empty($inv['invoice'])){
        $len = number_format($slen) + 6;
        $invoice = $inv['invoice'];
        $invoice = substr($invoice,$len);
        $invoice = intval($invoice);
        $invoice = 'C'. $customerid .'-INV-0'.($invoice + 1);
    }else {
        $invoice = 'C'.$customerid.'-INV-01';
    }

    $sql = "INSERT INTO `orders-tb` (`name`, email, city, `state`, items, `phone`, zip, invoice)
    values ('$name', '$email', '$city', '$state','$items','$phone','$zip','$invoice')";
    $insert = $db->query($sql);

   

    


?>