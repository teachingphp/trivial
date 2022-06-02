<?php

require_once "recaptchalib.php";

$siteKey = "6Lf4UL0fAAAAAKcdHHZsms20ryJ8VcwLkpO2Ov_F";
$secret = "6Lf4UL0fAAAAAEHZC9VnjAUGdF_vGTD8T0at02iL";

$lang = "en";

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
  <head><title>Legal warning reCAPTCHA</title></head>
  <body>
  <body style="background-color:black">
<?php
if ($resp != null && $resp->success) {
    echo "Correct!";
}
$textes = array("Maria wants to meet you! Chat with her at this link http://finladesassolteras.ru","Buy now a new car for less than €1000!","There are hot mature women in your area!","Did you know you have a missing cousin nearby?","Congratulations!! You've won a trip to Mars with SpaceX!","You have BTC waiting for you to collect!","Bill Gates wants a date with you, call now +234 934741873","There is a rumba waiting for you to pick it up, click here","Are you Single?... Don't wait any longer and flirt with Julia!","Your location is not safe, a cartel from Mexico is looking for you! Send a Bizum of more than €10 to +32 682984102 to protect your security!","Is it true that you are looking for a roommate? Carmen is single and looking for a flat!","Roberto wants to send you a message, click here to allow his message to be sent");
//echo print_r($textes, false);
?>
<p style="color:red; text-align:center">⚠️Complete the captcha to redirect you to the Trivial legal notice⚠️</p>
<br/>
<div >
    <form style="color:red; text-align:center" action="./avislegal2ENG.php" method="post">
      <div style="display:inline-block"  class="g-recaptcha" data-callback="enableBtn" data-sitekey="<?php echo $siteKey;?>"></div>
      <br/>
      <script type="text/javascript"
          src="https://www.google.com/recaptcha/api.js?hl=en">
      </script>
      <br/>  
      <input id="button1" type="submit" value="To accept" disabled>
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

    <img src="../files/avislegal/englishidiom.png" width="35" height="35"/>

    <script>
        function enableBtn(){
          document.getElementById("button1").disabled = false;
        }

        var textes = ["Maria wants to meet you! Chat with her at this link http://finladesassolteras.ru","Buy now a new car for less than €1000!","There are hot mature women in your area!","Did you know you have a missing cousin nearby?","Congratulations!! You've won a trip to Mars with SpaceX!","You have BTC waiting for you to collect!","Bill Gates wants a date with you, call now +234 934741873","There is a rumba waiting for you to pick it up, click here","Are you Single?... Don't wait any longer and flirt with Julia!","Your location is not safe, a cartel from Mexico is looking for you! Send a Bizum of more than €10 to +32 682984102 to protect your security!","Is it true that you are looking for a roommate? Carmen is single and looking for a flat!","Roberto wants to send you a message, click here to allow his message to be sent"];

        for(let i = 1; i <= textes.length; i++){
    setTimeout(function(){
      document.getElementById("idtext").innerHTML = textes[i - 1];
        //console.log(textes[i - 1]);
      }, 5000 * i); 
}

      </script>
  </body>
</html>
