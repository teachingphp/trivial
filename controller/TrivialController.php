
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

        $this->jugadors = [
            1 => new Jugador("Jugador1","15000"),
            2 => new Jugador("Jugador2","43400000000")
        ];
    }

    public function index(){

        //Asigno los coches a una variable que estará esperando la vista
        $rowset = $this->jugadors;


        //Le paso los datos a la vista
        require("view/jugadors.php");

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
        require("view/cerrarsesion.php");

    }

}

?>
