
<?php

class Jugador
{
    //Variables o atributos
    var $nom;
    var $ranking;

    function __construct($miNom,$miRanking){

        $this->nom = $miNom;
        $this->ranking = $miRanking;

    }

    //Funciones o métodos
    function setNom($miNom){

        $this->nom = $miNom;

    }

    function getNom(){

        return $this->nom;

    }

    function setRanking($miRanking){

        $this->ranking = $miRanking;

    }

    function getRanking(){

        return $this->ranking;

    }

    
}
?>