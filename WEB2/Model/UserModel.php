<?php

class UserModel{
//Variables
private $db;

//Indica con que base de datos interactua
function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=sparring;charset=utf8', 
    'root', '');
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

function GetUser($user){
   $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE mail=?");
   $sentencia->execute(array($user));
   return  $sentencia->fetch(PDO::FETCH_OBJ);
    
}
}