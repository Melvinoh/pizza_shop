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
   <div class="form-wrapper">
        <div class="form-left">
            <form method="post" id="loginForm">
                <div class="logo">
                    <div class="lable">
                     <i class="fa-sharp fa-solid fa-utensils"></i>
                    </div>
                     <Span>pizza shop.</Span>
                 </div>
                 <hr>
                <div class="heading">
                    <h2>welcome back  to pizza shop</h2>
                    <h4>please enter your details to continue</h4>
                </div>
                <div class="inputs-wrapper">
                    <div class="inputs">
                        <label for="username"> username:</label>
                        <input type="text" name="username">
                    </div>
                    <div class="inputs">
                        <label for="username"> password:</label>
                        <input type="text" name="password">
                    </div>
                    <div class="button">
                        <button class="button1" type="submit" name="submit"> login:</button>
                    </div>
                    <div class="error">
                         
                    </div>
                </div>
                <hr>
                <div class="bottom">
                    <span>don"t have an account ?</span>
                    <span class="sign">signup for free</span>
                </div>
            </form>
        </div>
        <div class="form-right">
            <img src="../../pictures/cheff2.png" alt="img">
        </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="/pizza_shop/client/src/javascripts/login.js"></script>
</body>
</html>
