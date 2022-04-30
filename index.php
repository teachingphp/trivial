<?php
//Configuración global
define("CONTROLADOR_DEFECTO", "Trivial");
define("ACCION_DEFECTO", "index");

require("./controller/TrivialController.php");

//Conexión con BBDD
require_once dirname(__FILE__).'/connection/Conectar.php';

//Incluir todos los modelos
foreach(glob(dirname(__FILE__)."/model/*.php") as $file){
    require_once $file;
}

//Instancio el controlador
$controller = new TrivialController;

//Ejecuto el método
$controller->index();


// //Cargamos controladores y acciones
// if(isset($_GET["controller"])){
//     $controllerObj=cargarControlador($_GET["controller"]);
//     lanzarAccion($controllerObj);
// }else{
//     $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
//     lanzarAccion($controllerObj);
// }
?>