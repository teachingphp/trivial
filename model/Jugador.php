
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

    function guardarJugador($conexion, $idpartida){
        if (!isset($this->usr_id)){
            $sql = "INSERT INTO jugadors (usr_id, jug_nom) values (null".",'".$this->nom."');";
            
        }else{
            $sql = "INSERT INTO jugadors (usr_id, jug_nom) values (".$this->usr_id.",'".$this->nom."');";
        }
        $conexion->query($sql);
        $last_id  = $conexion->insert_id;
        $sql2 = "INSERT INTO jugadors_partida (part_id,jug_id) VALUES (".$idpartida.",".$last_id.");";
        $conexion->query($sql2);
        // print_r($sql);
        // MULTI_QUERY DEIXA EXECUTAR CONSULTES MÚLTIPLES (Falta probar)
        // $conexion->multi_query($sql);

        return $last_id;
        // $result = $conexion -> query($sql);
    }
    function updateJugador($conexion,$id_jug,$puntsJug,$aciertosJug,$usr_id){
        $sql = "UPDATE jugadors SET jug_punts =".$puntsJug.", jug_aciertos =".$aciertosJug. " WHERE ID=". $id_jug.";";
        if (isset($usr_id)){
            //Usuari registrat, fem update de la seva experiencia
            $sql .= "UPDATE usuaris_registrats SET usr_exp = IFNULL(usr_exp,0) + ".$puntsJug." WHERE ID=".$usr_id.";";
        }
        // print_r($sql." ");
        $conexion -> multi_query($sql);

    }

}
?>