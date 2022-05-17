<?php

class Partida
{
    //Variables o atributos
    var $nom;
    var $preguntes;
    var $fecha_creacion;
    var $fecha_final;

    function __construct($NomPartida,$FechaCreacion){

        $this->nom = $NomPartida;
        $this->fecha_creacion = $FechaCreacion;
    }

    //Funciones o métodos
    function setNom($NomPartida){

        $this->nom = $NomPartida;

    }

    function getNom(){

        return $this->nom;

    }

    function setPreguntes($NumPreguntes){

        $this->preguntes = $NumPreguntes;

    }

    function getPreguntes(){

        return $this->preguntes;

    }

    function setFechaCreacio($Fecha){

        $this->fecha_creacion = $Fecha;

    }

    function getFechaCreacio(){

        return $this->fecha_creacion;

    }

    function setFechaFinal($Fecha){

        $this->fecha_final = $Fecha;

    }

    function getFechaFinal(){

        return $this->fecha_final;

    }
    
    function load($conexion, $id){
        $sql = "SELECT * from partida where ID=". $id;
        $resultPartida = $conexion -> query($sql);
        //print_r($resultPartida, false);
        foreach ($resultPartida as $value){
            //print_r($value, false);
            $this->nom = $value["part_nom"];
        }
    }
}
?>