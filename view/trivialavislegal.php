<?php

require_once "recaptchalib.php";

// Register API keys at https://www.google.com/recaptcha/admin
$siteKey = "6Lf4UL0fAAAAAKcdHHZsms20ryJ8VcwLkpO2Ov_F";
$secret = "6Lf4UL0fAAAAAEHZC9VnjAUGdF_vGTD8T0at02iL";
// reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
$lang = "es";

// The response from reCAPTCHA
$resp = null;
// The error code from reCAPTCHA, if any
$error = null;

$reCaptcha = new ReCaptcha($secret);

// Was there a reCAPTCHA response?
if ($_POST["g-recaptcha-response"]) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
?>
<html>
  <head><title>reCAPTCHA Aviso Legal</title></head>
  <body>
  <body style="background-color:black">
  <div>
<?php
if ($resp != null && $resp->success) {
    echo "¡Correcto!";
}
?>
<p style="color:red; text-align:center">⚠️Completa el captcha para redirigirte al aviso legal de Trivial⚠️</p>
<br/>
<div >
    <form style="color:red; text-align:center" action="./avislegal2.php" method="post">
      <div style="display:inline-block" class="g-recaptcha" data-sitekey="<?php echo $siteKey;?>"></div>
      <br/>
      <script type="text/javascript"
          src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang;?>">
      </script>
      <br/>
      <input type="submit" value="Enviar">
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <img style="margin: auto; left: 50px;" src="./imatges/captcha.gif" alt="" img>
   
</div>
</div>

  </body>
</html>
