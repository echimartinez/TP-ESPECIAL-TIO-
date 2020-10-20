<?php
require_once "Model/CategoriasModel.php";
require_once "Controller/ProductosController.php";
require_once "libs/Smarty.class.php";


class CategoriasView{

  function __construct(){
  }

  
  //vista tablas//

  //////////////////MOSTRAR LISTADO/////////////////////
  function showListaCategorias($Titulo, $CategoryList){
    $smarty = new Smarty();
    $smarty->assign("titulo", $Titulo);
    $smarty->assign("categoria_listado", $CategoryList); 
    $smarty->display("templates/tablaCategorias.tpl");
  }

 
  
  //////////////////SELECTOR/////////////////////

  function showSelectorCategorias($Titulo, $CategoryList){
    $smarty = new Smarty();
    $smarty->assign("titulo", $Titulo);
    $smarty->assign("categoria_listado", $CategoryList); 
    $smarty->display("templates/productos.tpl");
  }

  /////////////////VISTA EDICION/////////////////////
  function showEdicionCategoria($Titulo, $CategoryList, $idCategoria){
    $smarty = new Smarty();
    $smarty->assign("titulo", $Titulo);
    $smarty->assign("categoria_listado", $CategoryList); //Nombre que le damos al array con smarty: "asignatura_s"
    $smarty->assign("idCategoria", $idCategoria);
    $smarty->display("templates/editorCategoria.tpl");
  }
 


  function showTablaCategorias(){
    header("Location:" . BASE_URL . "productos");
  }

  
};
