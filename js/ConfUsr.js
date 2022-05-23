function validateUsername(){
    if(true) {
    $.ajax({  
          type: 'POST',  
          url: '../index.php?accio=validarUsr', 
          data: { username: document.getElementById("Usuario").value },
          success: function(response) {
                //alert(response);
               if(response==0){
                document.getElementById("Usuario").style = "color:red"
                }
               else if(response==1){
                document.getElementById("Usuario").style = "color:green"
               }
 
          }
    });
   }
   else{
      //display "username is too short" error
   }
 
 }