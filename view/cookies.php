<link href="../css/cookies.css?v=<?php echo time(); ?>" rel=stylesheet>
<?php

$_classe_amagar = "";
if(isset($_COOKIE["galleta"])){

//echo $_COOKIE["galleta"];

$_classe_amagar = "amagar";

}


?>

<body>

<h1 class="h1 <?php echo $_classe_amagar?>">Cookies</h1>
<br>
<h2>POLÍTICA DE COOKIES
www.trivial.com
El acceso a este Sitio Web puede implicar la utilización de cookies. Las cookies son pequeñas cantidades de información que se almacenan en el navegador utilizado por cada Usuario —en los distintos dispositivos que pueda utilizar para navegar— para que el servidor recuerde cierta información que posteriormente y únicamente el servidor que la implementó leerá. Las cookies facilitan la navegación, la hacen más amigable, y no dañan el dispositivo de navegación.

Las cookies son procedimientos automáticos de recogida de información relativa a las preferencias determinadas por el Usuario durante su visita al Sitio Web con el fin de reconocerlo como Usuario, y personalizar su experiencia y el uso del Sitio Web, y pueden también, por ejemplo, ayudar a identificar y resolver errores.

La información recabada a través de las cookies puede incluir la fecha y hora de visitas al Sitio Web, las páginas visionadas, el tiempo que ha estado en el Sitio Web y los sitios visitados justo antes y después del mismo. Sin embargo, ninguna cookie permite que esta misma pueda contactarse con el número de teléfono del Usuario o con cualquier otro medio de contacto personal. Ninguna cookie puede extraer información del disco duro del Usuario o robar información personal. La única manera de que la información privada del Usuario forme parte del archivo Cookie es que el usuario dé personalmente esa información al servidor.

Las cookies que permiten identificar a una persona se consideran datos personales. Por tanto, a las mismas les será de aplicación la Política de Privacidad anteriormente descrita. En este sentido, para la utilización de las mismas será necesario el consentimiento del Usuario. Este consentimiento será comunicado, en base a una elección auténtica, ofrecido mediante una decisión afirmativa y positiva, antes del tratamiento inicial, removible y documentado.

Cookies propias
Son aquellas cookies que son enviadas al ordenador o dispositivo del Usuario y gestionadas exclusivamente por TRIVIAL para el mejor funcionamiento del Sitio Web. La información que se recaba se emplea para mejorar la calidad del Sitio Web y su Contenido y su experiencia como Usuario. Estas cookies permiten reconocer al Usuario como visitante recurrente del Sitio Web y adaptar el contenido para ofrecerle contenidos que se ajusten a sus preferencias.

Cookies de redes sociales
TRIVIAL incorpora plugins de redes sociales, que permiten acceder a las mismas a partir del Sitio Web. Por esta razón, las cookies de redes sociales pueden almacenarse en el navegador del Usuario. Los titulares de dichas redes sociales disponen de sus propias políticas de protección de datos y de cookies, siendo ellos mismos, en cada caso, responsables de sus propios ficheros y de sus propias prácticas de privacidad. El Usuario debe referirse a las mismas para informarse acerca de dichas cookies y, en su caso, del tratamiento de sus datos personales. Únicamente a título informativo se indican a continuación los enlaces en los que se pueden consultar dichas políticas de privacidad y/o de cookies:

    <br>
    <br>
    <a href="https://www.Ceinatrivial.com/policies/cookies/ ">Facebook: https://www.Ceinatrivial.com/policies/cookies/</a><br>
    <a href="https://www.Ceinatrivial.com/policies/cookies/ ">Twitter:  https://Ceinatrivial.com/es/privacy</a><br>

    <a href="https://www.Ceinatrivial.com/policies/cookies/ ">Instagram: https://Ceinatrivial/1896641480634370?ref=ig</a><br>
    <a href="https://www.Ceinatrivial.com/policies/cookies/ ">YouTube: https://Ceinatrivial.com/privacy?hl=es-419&gl=mx</a><br>
    <a href="https://www.Ceinatrivial.com/policies/cookies/ ">Pinterest: https://Ceinatrivial.com/es/privacy-policy</a><br>
    <a href="https://www.Ceinatrivial.com/policies/cookies/ ">LinkedIn: https://www.Ceinatrivial.com/legal/cookie-policy?trk=hp-cookies</a><br>

<br>
Deshabilitar, rechazar y eliminar cookies
El Usuario puede deshabilitar, rechazar y eliminar las cookies —total o parcialmente— instaladas en su dispositivo mediante la configuración de su navegador (entre los que se encuentran, por ejemplo, Chrome, Firefox, Safari, Explorer). En este sentido, los procedimientos para rechazar y eliminar las cookies pueden diferir de un navegador de Internet a otro. En consecuencia, el Usuario debe acudir a las instrucciones facilitadas por el propio navegador de Internet que esté utilizando. En el supuesto de que rechace el uso de cookies —total o parcialmente— podrá seguir usando el Sitio Web, si bien podrá tener limitada la utilización de algunas de las prestaciones del mismo.

Este documento de Política de Cookies ha sido creado mediante el generador de plantilla de política de cookies online el día 19/05/2022.</h2>
<div>
<button class="button <?php echo $_classe_amagar?>" onclick="aceptar()" type="button">Aceptar Cookies</button>
<button class="button <?php echo $_classe_amagar?>" onclick="Rechazar()" type="button">Rechazar Cookies</button>
</div>

<script>
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

    function aceptar(){
        setCookie("galleta", "aceptar", 30);
        location.href = "./inici.php";
    }

    function Rechazar(){
        alert("Para poder jugar al Trivial tienes que aceptar las cookies. Gracias!")
    }

</script>

</body>
