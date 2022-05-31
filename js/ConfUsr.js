var UsuarioAX = document.getElementById("Usuario");
var EmailAX = document.getElementById("email")
var UsuarioAXZ = document.getElementById("UsuarioL");
var ContraLX = document.getElementById("ContraL");
function validateUsername(){

    $.ajax({  
          type: 'GET',  
          url: '../index.php?accio=validarUsr', 
          data: { username: document.getElementById("Usuario").value },
          success: function(response) {
                //console.log(response);
               if(response==0){
                document.getElementById("Usuario").style = "color:red";
                document.getElementById("UsuarioErr").style = "display:block; color:red";
                UsuarioAX.setCustomValidity("El usuario ya existe");
                }
               else if(response==1){
                document.getElementById("Usuario").style = "color:green";
                document.getElementById("UsuarioErr").style = "display:none";
                UsuarioAX.setCustomValidity('');
               }
 
          }
    });

 
 }

 function validateEmail(){

      $.ajax({  
            type: 'GET',  
            url: '../index.php?accio=validaremail', 
            data: { email: document.getElementById("email").value },
            success: function(response) {
                  //console.log(response);
                 if(response==0){
                  document.getElementById("email").style = "color:red";
                  document.getElementById("EmailErr").style = "display:block; color:red";
                  EmailAX.setCustomValidity("El email ya existe");
                  }
                 else if(response==1){
                  document.getElementById("email").style = "color:green";
                  document.getElementById("EmailErr").style = "display:none";
                  EmailAX.setCustomValidity('');
                 }
   
            }
      });
  
   
   }

   function validateUsernameL(){

      $.ajax({  
            type: 'GET',  
            url: '../index.php?accio=validarUsrL', 
            data: { usernameL: document.getElementById("UsuarioL").value },
            success: function(response) {
                  //console.log(response);
                 if(response==1){
                  document.getElementById("UsuarioL").style = "color:red";
                  document.getElementById("UsuarioErrL").style = "display:block; color:red";
                  UsuarioAXZ.setCustomValidity("El usuario no existe");
                  }
                 else if(response==0){
                  document.getElementById("UsuarioL").style = "color:green";
                  document.getElementById("UsuarioErrL").style = "display:none";
                  UsuarioAXZ.setCustomValidity('');
                 }
   
            }
      });
  
   
   }

   function validatePasswordL(){

      $.ajax({  
            type: 'GET',  
            url: '../index.php?accio=validarConL', 
            data: { passwordL: document.getElementById("ContraL").value, usernameL: document.getElementById("UsuarioL").value },
            success: function(response) {
                  //console.log(response);
                 if(response==1){
                  document.getElementById("ContraL").style = "color:red";
                  document.getElementById("ContraErrL").style = "display:block; color:red";
                  ContraLX.setCustomValidity("La contraseña es incorrecta");
                  document.getElementById("RegistBTN2").disabled = true;
                  }
                 else if(response==0){
                  document.getElementById("ContraL").style = "color:green";
                  document.getElementById("ContraErrL").style = "display:none";
                  ContraLX.setCustomValidity('');
                  document.getElementById("RegistBTN2").disabled = false;
                 }
   
            }
      });
  
   
   }