
var login = document.getElementById('loginForm');

login.onsubmit =  (e) =>{
    e.preventDefault();
    var form_inputs = login.serialize;
    var container = document.querySelector('.error-con');
  
    console.log(form_inputs);
  
    if(!form_inputs.checkValidity()){
      container.innerHTML = form_inputs.validationMessage;
    }else{
      var xhttp = new XMLHttpRequest();
  
      xhttp.onload = () =>{
        container.innerHTML =xhttp.responseText()
      };
      xhttp.open("GET",'/api/users.php?q=' + form_inputs , true)
      xhttp.send()
    }
  
  }
  