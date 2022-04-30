<?php
class Conectar{
    private $driver;
    private $host, $user, $pass, $database, $charset;

    public function __construct() {
        $configuracio = require_once (dirname(__FILE__).'/../config/database.php');
        $this->driver=$configuracio["driver"];
        $this->host=$configuracio["host"];
        $this->user=$configuracio["user"];
        $this->pass=$configuracio["pass"];
        $this->database=$configuracio["database"];
        $this->charset=$configuracio["charset"];
    }

    public function conexion(){

        if($this->driver=="mysql" || $this->driver==null){
            $con=new mysqli($this->host, $this->user, $this->pass, $this->database);
            $con->query("SET NAMES '".$this->charset."'");
        }

        return $con;
    }

}
?>
