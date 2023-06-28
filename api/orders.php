<?php
session_start();
echo ($_POST['email']);
    if(!isset($_SESSION['user_address'])){
        $_SESSION['user_address'] = array();
        $name = $_POST['name'];
        $email =$_POST['email'];
        $state =$_POST['state'];
        $phone =$_POST['phone'];
        $state =$_POST['state'];
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
    
   

    


?>