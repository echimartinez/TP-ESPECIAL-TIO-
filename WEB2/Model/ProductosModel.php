<?php
require_once "RouterAvanzado.php";
require_once "Controller/ProductosController.php";


class ProductosModel{

        private $db;
        
    public function __construct(){
       $this->db = new PDO('mysql:host=localhost;'.'dbname=sparring;charset=utf8','root','');
    }
   
    function getTodosLosProductos(){
        $sentencia = $this->db->prepare('SELECT * FROM producto ORDER BY descripcion ASC');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function setProducto($idProducto){
        $sentencia = $this->db->prepare('SELECT * FROM producto WHERE id=?');
        $sentencia->execute([$idProducto]); 
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    
            
    function getProductosPorCategoria($producto){
        $sentencia = $this->db->prepare('SELECT * FROM producto WHERE categoria=?');
        $sentencia->execute([$producto]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
    function addProducto($descripcion,$color,$precio){
        $sentencia = $this->db->prepare('INSERT INTO producto(descripcion,color,precio) VALUES(?,?,?)');
        $sentencia->execute(array($descripcion,$color,$precio));
    }

    function suprProducto($idProducto=null){
        $sentencia = $this->db->prepare('DELETE FROM producto WHERE id=?');
        $sentencia->execute(array($idProducto)); 
    }

    function editProducto($descripcion,$color,$precio,$categoria,$idProducto){ 
            $sentencia =$this->db->prepare ('UPDATE producto  SET descripcion=?, color=?, precio=?,categoria=? WHERE id=?');
            $sentencia->execute(array($descripcion,$color,$precio,$categoria,$idProducto));
    }

 }
