
<?php

class Jugador
{
    //Variables o atributos
    var $nom;
    var $ranking;
    var $usr_id;
    var $puntos;
    var $aciertos;

    function __construct($mi_usr_id,$miNom){

        $this->nom = $miNom;
        $this->ranking = 0;
        $this->usr_id = $mi_usr_id;
        $this->puntos = 0;
        $this->aciertos = 0;
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

    function setPuntos($misPuntos){

        $this->puntos = $misPuntos;
    }
    
    function getPuntos(){

        return $this->puntos;
    }

    function setAciertos($misAciertos){

        $this->aciertos = $misAciertos;
    }
    
    function getAciertos(){

        return $this->aciertos;
    }

    function guardarJugador($conexion){
        if (!isset($this->usr_id)){
            $sql = "INSERT INTO jugadors (usr_id, jug_nom) values (null".",'".$this->nom."');";
            $sql .= "INSERT INTO jugadors_partida (part_id,jug_id) select ".$_COOKIE["IDPARTIDA"].", ID from jugadors where jug_nom =".$this->nom.";";
        }else{
            $sql = "INSERT INTO jugadors (usr_id, jug_nom) values (".$this->usr_id.",'".$this->nom."');";
            $sql .= "INSERT INTO jugadors_partida (part_id,jug_id) select ".$_COOKIE["IDPARTIDA"].", ID from jugadors where jug_nom =".$this->nom.";";

        }
     
        print_r($sql);
        // MULTI_QUERY DEIXA EXECUTAR CONSULTES MÚLTIPLES (Falta probar)
        //return $conexion->multi_query($sql);
        // $result = $conexion -> query($sql);
    }
    function updateJugador($conexion, $id,$puntsJug,$aciertosJug){
        $sql = "UPDATE JUGADORS SET jug_punts =".$puntsJug.", jug_aciertos =".$aciertosJug. " WHERE ID=". $id;
        $updatePlayer = $conexion -> query($sql);

    }

}
?>