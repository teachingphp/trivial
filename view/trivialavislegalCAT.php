<?php

require_once "recaptchalib.php";

$siteKey = "6Lf4UL0fAAAAAKcdHHZsms20ryJ8VcwLkpO2Ov_F";
$secret = "6Lf4UL0fAAAAAEHZC9VnjAUGdF_vGTD8T0at02iL";

$lang = "ca";

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
  <head><title>Avís Legal reCAPTCHA</title></head>
  <body>
  <body style="background-color:black">
<?php
if ($resp != null && $resp->success) {
    echo "¡Correcte!";
}
$textes = array("Maria vol coneixe't!, xateja amb ella en aquest enllaç http://finladesassolteras.ru","Compra ara un cotxe nou per menys de 1000€!","Hi ha maduretes calentes a la teva zona!","Sabies que tens una cosina perduda a prop?","Felicitats!! Has guanyat un viatge a Mart amb SpaceX!","Tens BTC esperant-te perquè els recullis!","Bill Gates vol una cita amb tu, truca ara +234 934741873","Hi ha una rumba esperant que la recullis, clica aquí","Estàs Solter?.... No esperis més i lliga't a Julia!","La teva ubicació no és segura, un cartell de Mèxic ve a buscar-te! ¡Envia un Bizum de més de 10€ a +32 682984102 per protegir la teva seguretat!","És cert que busques companya de pis? Carmen està soltera i busca pis!","Roberto vol enviar-te un missatge, clica aquí per permetre l'enviament del missatge","Has guanyat una targeta de regal de 100€ del Mercadona, clica aquí per reclamar el teu premi!");
//echo print_r($textes, false);
?>
<p style="color:red; text-align:center">⚠️Completa el captcha per redirigir-te a l'avís legal de Trivial⚠️</p>
<br/>
<div >
    <form style="color:red; text-align:center" action="./avislegal2CAT.php" method="post">
      <div style="display:inline-block"  class="g-recaptcha" data-callback="enableBtn" data-sitekey="<?php echo $siteKey;?>"></div>
      <br/>
      <script type="text/javascript"
          src="https://www.google.com/recaptcha/api.js?hl=ca">
      </script>
      <br/>  
      <input id="button1" type="submit" value="Acceptar" disabled>
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

    <img src="../files/avislegal/catidiom.png" width="35" height="35"/>

    <script>
        function enableBtn(){
          document.getElementById("button1").disabled = false;
        }

        var textes = ["Maria vol coneixe't!, xateja amb ella en aquest enllaç http://finladesassolteras.ru","Compra ara un cotxe nou per menys de 1000€!","Hi ha maduretes calentes a la teva zona!","Sabies que tens una cosina perduda a prop?","Felicitats!! Has guanyat un viatge a Mart amb SpaceX!","Tens BTC esperant-te perquè els recullis!","Bill Gates vol una cita amb tu, truca ara +234 934741873","Hi ha una rumba esperant que la recullis, clica aquí","Estàs Solter?.... No esperis més i lliga't a Julia!","La teva ubicació no és segura, un cartell de Mèxic ve a buscar-te! ¡Envia un Bizum de més de 10€ a +32 682984102 per protegir la teva seguretat!","És cert que busques companya de pis? Carmen està soltera i busca pis!","Roberto vol enviar-te un missatge, clica aquí per permetre l'enviament del missatge","Has guanyat una targeta de regal de 100€ del Mercadona, clica aquí per reclamar el teu premi!"];

        for(let i = 1; i <= textes.length; i++){
    setTimeout(function(){
      document.getElementById("idtext").innerHTML = textes[i - 1];
        //console.log(textes[i - 1]);
      }, 5000 * i); 
      
}

      </script>
  </body>
</html>
