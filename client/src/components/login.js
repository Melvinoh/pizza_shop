
$("#loginForm").on("submit",function(event){

    event.preventDefault();
    var loginvalues =$(this).serialize();
    console.log(loginvalues.lengh);

    if(loginvalues.length ===  19){
        $('.error').html("all atributes are required");
        console.log('<i class="fa-solid fa-circle-exclamation"></i> all fields are required');

    }else{
        $.post("/pizza_shop/api/users.php?q=login", loginvalues, function(data){
            $(".error").html(data);
    
           console.log(loginvalues);
    
        })
    }

});
$("#signupForm").on("submit",function(event){

    event.preventDefault();
    var signupvalues =$(this).serialize();
    console.log(signupvalues.length);

    if(signupvalues.length ===  40){
        $('.error').html("All atributes are required");
        console.log('All fields are required');
    }else{
        $.post("/pizza_shop/api/users.php?q=signup", signupvalues, function(data){
            $(".error").html(data);    
           console.log(signupvalues);
        })
    }
});
