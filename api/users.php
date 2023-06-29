<?php

session_start();

$username = $password = $fname = $sname = $email = $validation ="";

if(!isset($_SESSION['login'])){
    $q = $_GET['q'];
    if($q === 'login'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        include('C:\xampp\htdocs\pizza_shop\api\db.php');

        $sql = "SELECT `password`, `username` FROM `users` where username = '$username'";
        $results = $db->query($sql);
        $row =  $results->fetch_assoc();
       
        if(!isset($row)) {
            echo "no username found <br>";
        }else{
            if($row['username'] === $username && $row['password'] === $password){
                $_SESSION['login'] = $row['username'];
                echo($_SESSION['login']);
                echo "redirecting to home page";
                header('location: /pizza_shop/client/src/dashboard.php');
            }else{
                echo "wrong username or password";
                
            };
        };
    };
}else{
    echo "you are already logged in ";
};
 


 //signing up section
if(isset($_GET['q']) && $_GET['q'] === 'signup') {
    if (isset($_POST['fname'])){
      $fname = test( $_POST['fname']); 
      if(!preg_match("/^[a-zA-Z ']*$/",$fname)){
        $validate.="inavlid name inputs";
      }
    } else {
        $validation =" all fields required";
    };
    
    if(isset($_POST['sname'])){
        $sname = test($_POST['sname']);
        if(!preg_match("/^[a-zA-Z ']*$/", $sname)){
            $validation = "enter a valid name";
        }
    }else{

        $validation ="all fields are required";

    };
    if (isset($_POST['username'])){

        $username = test($_POST['username']);
        
        if(!preg_match("/^[a-zA-Z ']*/", $username)){
            $validation = " invalid username ,only chharacters and white space required ";

        }
    }else{
        $validation = "all fields are required";
    }

    if(isset($_POST['password'])){
        $password = test($_POST['password']);

    }else{
        $validation.= "please enter a password";
    };

    if(isset($_POST['email'])){
        $email = test($_POST['email']);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $validation = "please enter a valid email";
        }
    }else{
        $validation.= "all fields are required";
    };


    if(empty($validation)){
        include("./db.php");
        $sql = "INSERT INTO `users` (`first_name`, `second_name`, `email`, `password`,`username`) VALUES ('$fname', '$sname', '$email','$password',  '$username')";
        $query = $db->query($sql);
        echo "account has been created succefully";

    }else{
        echo "$validation";
    }
}else{
    echo "could not connect to database please try again";
};

function test($data){
    $data= trim($data);
    $data =stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};


















?>