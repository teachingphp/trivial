<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/LoginTrivial.css?v=<?php echo time(); ?>">

        <title>Cool Trivial - Login</title>
    </head>
<div>
    
</div>
    <body>
        <div>
        <div class="row">
            <div class="column">
            <div class="container">
            <h1>
            Haz Login en 
            <span>Cool Trivial</span>
    </h1>
    
    <form action="../index.php" method="post">
    <div class="field">
        <input id="UsuarioL" name="UsuarioL" onfocusout = "validateUsernameL()" type="text" placeholder=" " required>
        <label for="UsuarioL">Usuario</label>
    </div>
    <label id ="UsuarioErrL" forerr="UsuarioErrL" hidden>Usuario no existente</label>
    <div class="field">
        
        <input type="password" placeholder=" " name="ContraL" onfocusout = "validatePasswordL()" id="ContraL" required>
        <label for="ContraL">Contraseña</label>
    </div>
    <label id ="ContraErrL" forerr="ContraErrL" hidden>Contraseña incorrecta</label>
    
        <br>
        <input type="text" name="accio" value ="login" hidden>
        <input type="submit" name="LoginU" value="Entrar" id="RegistBTN2" disabled>
        </div>

    </form>
            </div>
            <div class="column2"></div>
        </div>
        
    


    </div>
  
    </body>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script type="text/javascript" src="../js/ConfUsr.js?v=<?php echo time(); ?>"></script>

        
</html>
