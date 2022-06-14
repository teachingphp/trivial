<?php

require_once "recaptchalib.php";

$siteKey = "6LdV1WggAAAAACSYUxNlsydm4NCV_Ku769Kk9GNQ";
$secret = "6LdV1WggAAAAAN0vbkl5TbWcjqu7hl7La2qsacQs";

$lang = "es";

$resp = null;

$error = null;

$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
?>
<html>
  <head><title>Aviso Legal reCAPTCHA</title></head>
  <body>
  <body style="background-color:black">
<?php
if ($resp != null && $resp->success) {
    echo "¡Correcto!";
}
$textes = array("¡Maria quiere conocerte!, chatea con ella en este enlace http://finladesassolteras.ru","¡Compra ahora un coche nuevo por menos de 1000€!","¡Hay maduritas calientes en tu zona!","¿Sabías que tienes una prima perdida cerca?","¡¡Felicidades!! ¡Has ganado un viaje a Marte con SpaceX!","¡Tienes BTC esperándote para que los recojas!","Bill Gates quiere una cita contigo, llama ahora +234 934741873","Hay una rumba esperando a que la recojas, clica aquí","¿Estás Soltero?.... ¡No esperes más y lígate a Julia!","Tu ubicación no es segura, un cartel de México viene a buscarte! ¡Envía un Bizum de más de 10€ en +32 682984102 para proteger tu seguridad!","¿Es cierto que buscas compañera de piso? ¡Carmen está soltera y busca piso!","Roberto quiere enviarte un mensaje, clica aquí para permitir el envió de su mensaje","¡Has ganado una tarjeta de regalo de 100€ del Mercadona, clica aquí para reclamar tu premio!");
//echo print_r($textes, false);
?>
<p style="color:red; text-align:center">⚠️Completa el captcha para redirigirte al aviso legal de Trivial⚠️</p>
<br/>
<div >
    <form style="color:red; text-align:center" action="./avislegal2.php" method="post">
      <div style="display:inline-block"  class="g-recaptcha" data-callback="enableBtn" data-sitekey="<?php echo $siteKey;?>"></div>
      <br/>
      <script type="text/javascript"
          src="https://www.google.com/recaptcha/api.js?hl=es">
      </script>
      <br/>  
      <input id="button1" type="submit" value="Aceptar" disabled>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <img style="margin: auto;" src="../files/avislegal/captcha.gif" <img><br><label id ="idtext"> <?php echo $textes[0];  ?></label>
    </form>

    <img src="../files/avislegal/espidiom.png" width="35" height="35"/>

    <script>
        function enableBtn(){
          document.getElementById("button1").disabled = false;
        }

        var textes = ["¡Maria quiere conocerte!, chatea con ella en este enlace http://finladesassolteras.ru","¡Compra ahora un coche nuevo por menos de 1000€!","¡Hay maduritas calientes en tu zona!","¿Sabías que tienes una prima perdida cerca?","¡¡Felicidades!! ¡Has ganado un viaje a Marte con SpaceX!","¡Tienes BTC esperándote para que los recojas!","Bill Gates quiere una cita contigo, llama ahora +234 934741873","Hay una rumba esperando a que la recojas, clica aquí","¿Estás Soltero?.... ¡No esperes más y lígate a Julia!","Tu ubicación no es segura, un cartel de México viene a buscarte! ¡Envía un Bizum de más de 10€ en +32 682984102 para proteger tu seguridad!","¿Es cierto que buscas compañera de piso? ¡Carmen está soltera y busca piso!","Roberto quiere enviarte un mensaje, clica aquí para permitir el envió de su mensaje","¡Has ganado una tarjeta de regalo de 100€ del Mercadona, clica aquí para reclamar tu premio!"];

        for(let i = 1; i <= textes.length; i++){
    setTimeout(function(){
      document.getElementById("idtext").innerHTML = textes[i - 1];
        //console.log(textes[i - 1]);
      }, 5000 * i); 
      
}

      </script>
  </body>
</html>
