
/* https://www.youtube.com/watch?v=q_jDixroQkw */
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/RegistrarseTrivial.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css?v=<?php echo time(); ?>">
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
    <input type="password" placeholder="Contraseña" id="Contra" required><i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i><br><br>
    <label for="Confirma Contraseña">Confirma Contraseña:</label>
        <input type="password" placeholder="Confirma Contraseña" id="ConfirmContra" required><i class="far fa-eye" id="togglePassword2" style="margin-left: -30px; cursor: pointer;"></i>
        <br><br>
        <input type="checkbox" class="form-check-input is-invalid" id="acepta_terminos" data-bs-toggle="modal" data-bs-target="#TermsServ">

        <input type="submit" name="crearU" value="VERIFICA EL CORREO">
        </div>
    </form>
        
    <div class="modal fade" id="TermsServ" tabindex="-1" role="dialog" aria-labelledby="ModalConfigLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    </div>
  



        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../js/MatchPass.js?v=<?php echo time(); ?>"></script>
</html>
























































</html>