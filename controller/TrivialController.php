
<?php

class TrivialController
{
    var $jugadors;
    public $conectar;
	public $adapter;

    function __construct()
    {
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();

        // $this->jugadors = [
        //     1 => new Jugador("Jugador1","15000",1,0,0),
        //     2 => new Jugador("Jugador2","434",1,4,6)
        // ];
    }

    public function getConexion(){
        return $this->adapter;
    }

    public function index(){

        //Asigno los coches a una variable que estará esperando la vista
        $rowset = $this->jugadors;


        //Le paso los datos a la vista
        require("view/jugadors.php");

    }

    public function pujarfitxer(){
        $target_dir = "./files/sources/imatges/imatges-usuaris/";
        if (isset($_COOKIE["ID"])){
            $identificador = $_COOKIE["ID"];
            $target_file = $target_dir . "imagenmolonga" . $identificador . ".jpg";
        }else{
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        }
        
        
        //echo print_r($_FILES, false);
        
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }


        
    }

    public function cerrarsesion(){

        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time()-1000);
                setcookie($name, '', time()-1000, '/');
            }
        }
        //Le paso los datos a la vista
        header("location: ./view/inici.php");

    }

    public function login(){
        
        //print_r($_POST, false);
        $usuari = new Usuari(); 

        $usuari->setcname($_POST["UsuarioL"]);

        $usuari->setcontra($_POST["ContraL"]);

        $idusuari = $usuari->loadUsuario($this->adapter); 
        setcookie ("USR_ID", $idusuari, time() + 86400);
        setcookie ("NOMJUGADOR", $_POST["UsuarioL"], time() + 86400);
        header("location: ./view/inici.php");


    }

    public function registrarse(){
        //CREAR UNA NOVA CLASSE USUARI dins model Usuari.php
        $sql = "SELECT * from usuaris_registrats";
        $result = $this->adapter -> query($sql);
        foreach($result as $value){
            
        }
        //print_r($_POST, false);
        $usuari = new Usuari(); //DEFINIR AQUESTA CLASSE A Usuari.php
        $usuari->setcname($_POST["Usuario"]);

        $usuari->setcontra($_POST["Contra"]);

        $usuari->setcorreo($_POST["email"]);

        $usuari->save($this->adapter); //DEFINIR AQUESTA funcio dins  Usuari.php
        header("location: ./view/LoginTrivial.php");


    }

    public function obrir_partida(){
        print_r($_GET, false);
        $partida = new Partida("aux", date("d-m-Y"));
        $partida->load($this->adapter, $_GET["id"]);
        print_r($partida->getNom(), false);
        setcookie("NOMPARTIDA", $partida->getNom(), time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie("IDPARTIDA", $_GET["id"], time() + (86400 * 30), "/");
        setcookie("NUMPREG", $partida->getPreguntes(), time() + (86400 * 30), "/");
        $conexion = $this->adapter;
        

    }


    public function crearpartida(){
        $partida = new Partida( $_GET["nombrepartida"], date('d-m-Y'));
        $ultimo_reg = $partida->guardarPartida($this->adapter);

        setcookie("IDPARTIDA", $ultimo_reg, time() + 86400);
    
        if (isset($_COOKIE["CONF"])){
            $params = $_COOKIE["CONF"];
            parse_str ( $params, $array_params);

        }

        $idtiempo = $array_params["idtiempo"];
        $idcomodin1 = $array_params["idcomodin1"];
        $idcomodin2 = $array_params["idcomodin2"];
        $idcomodin3 = $array_params["idcomodin3"];
        $idcomodin4 = $array_params["idcomodin4"];

        $sql =  "UPDATE `partida` SET `part_tiempoTurno` = ". $idtiempo 
        . ", part_comodin1 = ". $idcomodin1 
        . ", part_comodin2 = ". $idcomodin2
        . ", part_comodin3 = ". $idcomodin3
        . ", part_comodin4 = ". $idcomodin4
        .  " WHERE (`ID` = '". $ultimo_reg."')";
        $result = $this->adapter -> query($sql);
        echo 1;

        header("Location: ./view/joc.php?id_partida=" . $ultimo_reg);

        //$url_compartir = "http://localhost/triviaL/view/joc.php?id_partida=" . $ultimo_reg;



    }

    public function validarUsr(){
        $user = $_GET["username"];
        $sql = " SELECT * from usuaris_registrats where usr_username ='". $user ."'" ;  
        $result = $this->adapter -> query($sql);
        if ($result->num_rows > 0){
            //print_r("USUARI JA REIGSTRAT"); 
            echo 0;   
        }else{
            //print_r("USUARI NO REIGSTRAT");    
            echo 1;
        }
    }

    public function actualitzaPerfil(){
        $user = $_GET["username"];
        $pass = $_GET["password"];
        $id = $_GET["id"];
        $sql = " UPDATE usuaris_registrats SET usr_username = '".$user."',usr_pwd = '".$pass."' WHERE (ID = '".$id."')";
          
        $result = $this->adapter -> query($sql);

        echo 1;
        
    }


    public function validaremail(){
        $useremail = $_GET["email"];
        $sql = " SELECT * from usuaris_registrats where usr_email ='". $useremail ."'" ;  
        $result = $this->adapter -> query($sql);
        if ($result->num_rows > 0){
            //print_r("USUARI JA REIGSTRAT"); 
            echo 0;   
        }else{
            //print_r("USUARI NO REIGSTRAT");    
            echo 1;
        }
    }

    public function validarUsrL(){
        $userL = $_GET["usernameL"];
        $sql = " SELECT * from usuaris_registrats where usr_username ='". $userL ."'" ;  
        $result = $this->adapter -> query($sql);
        if ($result->num_rows > 0){
            //print_r("USUARI JA REIGSTRAT"); 
            echo 0;   
        }else{
            //print_r("USUARI NO REIGSTRAT");    
            echo 1;
        }
    }

    public function validarConL(){
        $passL = $_GET["passwordL"];
        $userL = $_GET["usernameL"];
        $sql = " SELECT * from usuaris_registrats where usr_pwd ='". $passL ."' and usr_username ='". $userL ."'" ;  
        $result = $this->adapter -> query($sql);
        if ($result->num_rows > 0){
            //print_r("USUARI JA REIGSTRAT"); 
            echo 0;   
        }else{
            //print_r("USUARI NO REIGSTRAT");    
            echo 1;
        }
    }

    public function crearJugador(){
        try{
            if (!isset($_COOKIE["USR_ID"])){
                //Jugador anonim, sense USR_ID
                $jugador = new Jugador(null,$_GET["nom_jugador"]);
            }else{
                //Jugador logat, utilitzem USR_ID
                $jugador = new Jugador($_COOKIE["USR_ID"],$_GET["nom_jugador"]);
            }
            $jugador->guardarJugador($this->adapter,);
            echo 1; //HA ANAT BE
        }catch(Exception $e){
            echo 0; //HA ANAT MALAMENT

        }

    }
    public function finalitzaPartida(){
        $jugadorID= $_GET["id_jugador"];
        $partidaID= $_GET["id_partida"];
        $puntos= $_GET["punts"];
        $aciertos= $_GET["acerts"];
        try{
            if (!isset($_COOKIE["USR_ID"])){
                //Jugador anonim, sense USR_ID
                $jugador = new Jugador(null,$_GET["nom_jugador"]);
                $jugador->UpdateJugador($this->adapter, $partidaID, $jugadorID, $puntos, $aciertos, null );
            }else{
                //Jugador logat, utilitzem USR_ID
                $jugador = new Jugador($_COOKIE["USR_ID"],$_GET["nom_jugador"]);
                $jugador->UpdateJugador($this->adapter, $partidaID, $jugadorID, $puntos, $aciertos, $_COOKIE["USR_ID"] );
            }
            
            echo 1; //HA ANAT BE
        }catch(Exception $e){
            echo 0; //HA ANAT MALAMENT

        }
   
    }

    public function resultatsPartida(){
        $idPartida = $_GET["id_partida"];
        $sql = "SELECT j.jug_nom, j.jug_punts, j.jug_aciertos from jugadors j left join jugadors_partida jp 
        on j.ID = jp.jug_id 
        where jp.part_id = ".$idPartida." order by jug_punts";
        $result = $this->adapter -> query($sql);
    }

    public function guardarConf(){

        $idtiempo = $_GET["idtiempo"];
        $idcomodin1 = $_GET["idcomodin1"];
        $idcomodin2 = $_GET["idcomodin2"];
        $idcomodin3 = $_GET["idcomodin3"];
        $idcomodin4 = $_GET["idcomodin4"];

        $params = "idtiempo=" . $idtiempo 
        . "&idcomodin1=" . $idcomodin1 . 
        "&idcomodin2=" . $idcomodin2 . 
        "&idcomodin3=" . $idcomodin3 . 
        "&idcomodin4=" . $idcomodin4;

        //print_r($params);

        setcookie("CONF", $params, time() + 86400);

        echo 1;

    }
        
    
    public function jugar(){

        //Le paso los datos a la vista
        //require("./view/joc.php");
        header("Location: ./view/joc.php");

    }

    public function enviaMailJet($email_desti, $template_id, $from_user, $obs_comanda){
        //1972416 - COMANDA Pagada TemplateID
        //1908508 - NOVA COMANDA TemplateID
        //file_put_contents('log_ligths10.log', "enviaMailJet1" . PHP_EOL, FILE_APPEND);
        $mj = new \Mailjet\Client('94d4075b8a28605b560b8eebb1a57fd2','4b17c59089c5f8140810b0311471baff',true,['version' => 'v3.1']);
  
        $body = [
  
          'Messages' => [
               [
            'FromEmail' => "info@cooltrivial.es",
            'FromName' => "Cool Trivial",
          //  'Text-part' => "Parece que se ha creado un nuevo pedido",
          //  'Html-part' => "Revisa sus caracteristicas dentro del apartado de pedidos",
            'MJ-TemplateID' => $template_id,
            'MJ-TemplateLanguage' => true,
            vars => json_decode('{"usuari": "'.$from_user.'", "comanda":"'.$obs_comanda.'"}', true),
            'Recipients' => [['Email' => $email_desti]]
  
            ] //end message 1
           ] //end message 2
        ];
  
        //file_put_contents('log_ligths10.log', "enviaMailJet4" . PHP_EOL, FILE_APPEND);
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        //file_put_contents('log_ligths10.log', "enviaMailJet5" . print_r($response,true). PHP_EOL, FILE_APPEND);
        $response->success() && var_dump($response->getData());
        //file_put_contents('log_ligths10.log', "enviaMailJet6" . PHP_EOL, FILE_APPEND);
      }
}

?>
