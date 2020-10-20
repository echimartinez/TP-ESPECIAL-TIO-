<?php
require_once "Model/ProductosModel.php";
require_once "Controller/ProductosController.php";
require_once "libs/Smarty.class.php";

class ProductosView{

  function __construct(){
  }
  //Vista navegacion//
  function showIndex(){
    $smarty = new Smarty();
    $smarty->assign("titulo", "Sparring, productos e indumentaria MuayThai");
    $smarty->display("templates/index.tpl");
  }

  function showProductos(){
    $smarty = new Smarty();
    $smarty->assign("titulo", "Sparring, productos e indumentaria MuayThai");
    $smarty->display("templates/productos.tpl");
  }

  function showComunidad(){
    $smarty = new Smarty();
    $smarty->assign("titulo", "Sparring, productos e indumentaria MuayThai");
    $smarty->display("templates/comunidad.tpl");
  }

  
  //vista tablas//

  function showListaProductos($Titulo, $ProductList){
    $smarty = new Smarty();
    $smarty->assign("titulo", $Titulo);
    $smarty->assign("producto_listado", $ProductList); 
    $smarty->display("templates/productos.tpl");
  }

  //////////////////BASE COMPLETA GENERAL/////////////////////
  function showBaseCompleta($Titulo, $ProductList, $CategoryList){
    $smarty = new Smarty();
    $smarty->assign("titulo", $Titulo);
    $smarty->assign("producto_listado", $ProductList); 
    $smarty->assign("categoria_listado", $CategoryList);
    $smarty->display("templates/productos.tpl");
  }

  //////////////////MUESTRA LA TABLA FILTRADA/////////////////////
  function showFiltrado($Titulo,$CategoryList,$producto){
    $smarty = new Smarty();
    $smarty->assign("titulo", $Titulo);
    $smarty->assign("producto_listado", $producto); 
    $smarty->assign("categoria_listado", $CategoryList);
    $smarty->display("templates/productos.tpl");
  }


  //////////////////MUESTRA EDITOR/////////////////////
  function showEdicionProducto($Titulo, $ProductList, $CategoryList,$idProducto){
    $smarty = new Smarty();
    $smarty->assign("titulo", $Titulo);
    $smarty->assign("producto_listado", $ProductList); 
    $smarty->assign("categoria_listado", $CategoryList);
    $smarty->assign("idProducto", $idProducto);
    $smarty->display("templates/editarTablaProducto.tpl");
  }

  
  

  /////////////////MUESTRA DETALLE/////////////////////
  function showVista($producto,$idProducto){
    $smarty = new Smarty();
    $smarty->assign("producto_detalle", $producto);
    $smarty->assign("idProducto", $idProducto); 
    $smarty->display("templates/verDetalle.tpl");
  }



  //////////////////LLAMA A LA TABLA/////////////////////
  function showTablaProductos(){
    header("Location:" . BASE_URL . "tablaProductos");
  }
  
};
