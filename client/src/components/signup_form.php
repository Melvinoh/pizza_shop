<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/pizza_shop/client/src/styles/form.css">
    <link rel="stylesheet" href="../../../styles.css">
</head>
<body>
    <div class="form-wrapper">
        <div class="form-right">
            <img src="../../pictures/pizza21.webp" alt="img">
        </div>
        <div class="form-left">
            <form method="post" id="signupForm">
                <a href="/pizza_shop/index.php" class="logo">
                    <div class="lable">
                     <i class="fa-sharp fa-solid fa-utensils"></i>
                    </div>
                     <Span style="color: black;">pizza shop.</Span>
                </a>
                 <hr>
                <div class="heading">
                    <h2>sign in today for excelent pizza</h2>
                    <h4>please enter your details to continue</h4>
                </div>
                <div class="inputs-wrapper">
                    <div class="inputs">
                        <label for="fname"> first name</label>
                        <input type="text" name="fname">
                    </div>
                    <div class="inputs">
                        <label for="sname"> second name</label>
                        <input type="text" name="sname">
                    </div>
                    <div class="inputs">
                        <label for="email"> email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="inputs">
                        <label for="username"> username</label>
                        <input type="text" name="username">
                    </div>
                    <div class="inputs">
                        <label for="password" > password </label>
                        <input type="password" name="password">
                    </div>
                  
                    <div class="button">
                        <button class="button1">sign up</button>
                    </div>
                    <div class="error">

                    </div>
                </div>
                <hr>
                <div class="bottom">
                    <span> have an account ?</span>
                    <a href="/pizza_shop/client/src/components/login.php">
                        <span class="sign">login here</span>
                    </a>
                </div>
            </form>
        </div>
   </div>    
</body>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./login.js"></script>
</html>
