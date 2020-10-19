<?php
require_once "RouterAvanzado.php";
require_once "Controller/ProductosController.php";

class CategoriasModel{

        private $db;
        
    public function __construct(){
       $this->db = new PDO('mysql:host=localhost;'.'dbname=sparring;charset=utf8','root','');
    }
   
    function getTodasLasCategorias(){
        $sentencia = $this->db->prepare('SELECT * FROM categoria ORDER BY nombreCategoria ASC');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
            
   
    function addCategoria($nombreCategoria){
        $sentencia = $this->db->prepare('INSERT INTO categoria(nombreCategoria) VALUES(?)');
        $sentencia->execute(array($nombreCategoria));
    }

    function suprCategoria($idCategoria=null){
        $sentencia = $this->db->prepare('DELETE FROM categoria WHERE id=?');
        $sentencia->execute(array($idCategoria)); 
    }

    function editCategoria($nombreCategoria,$idCategoria){ 
            $sentencia =$this->db->prepare ('UPDATE categoria  SET nombreCategoria=? WHERE id=?');
            $sentencia->execute(array($nombreCategoria,$idCategoria));
    }
    
 }
