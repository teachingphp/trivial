
/* https://www.youtube.com/watch?v=q_jDixroQkw */
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/RegistrarseTrivial.css?v=<?php echo time(); ?>">
    
        <title>Cool Trivial - Registro</title>
    </head>
<div>
    <?php
     if(isset($_POST['crearU']))
        {
            echo 'Usuario Registrado!';
        }
    ?>
</div>
    <body>
        <div>
        <h1>Registrarse</h1>
        <p>Para poder disfrutar de más opciones es recomendable registrarse:</p>
    <form action="../pagines/RegistrarseTrivial.php" method="post">
        <div class="container">
        <label for="Usuario" class="first-name">Usuario:</label>
    <input id="Usuario" type="text" placeholder="Usuario" required><br><br>
    <label for="email" class="last-name">eMail:</label>
    <input id="email" type="email" placeholder="email" required><br><br>
    <label for="Contraseña">Contraseña:</label>
    <input type="password" placeholder="Contraseña" id="Contra" required><br><br>
    <label for="Confirma Contraseña">Confirma Contraseña:</label>
        <input type="password" placeholder="Confirma Contraseña" id="ConfirmContra" required>
        <br><br>


        <input type="submit" name="crearU" value="VERIFICA EL CORREO">
        </div>
    </form>
    <!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>
    </div>
  



        </body>

        <script type="text/javascript" src="../recursos/MatchPass.js?v=<?php echo time(); ?>"></script>
</html>
























































</html>