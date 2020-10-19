<?php
require_once "./RouterAvanzado.php";
require_once "Model/ProductosModel.php";
require_once "View/ProductosView.php";
require_once "View/CategoriasView.php";
require_once "Model/CategoriasModel.php";

class ProductosController{

    private $view;
    private $model;
    private $Titulo = "Listado de productos";
    private $viewCategoria;
    private $modelCategoria;
 

    public function __construct(){
        $this->view = new ProductosView();
        $this->model = new ProductosModel();
        $this->viewCategoria = new CategoriasView();
        $this->modelCategoria = new CategoriasModel();
    }

    
    
    //Seccion llamado de tabla//

    function tablaCategorias(){ //Tabla de categoria
    $this->CategoryList = $this->modelCategoria->getTodasLasCategorias();
    $this->viewCategoria->showListaCategorias($this->Titulo,$this->CategoryList);
    }

    function selectCategorias(){ //Tabla de categoria
        $this->CategoryList = $this->modelCategoria->getTodasLasCategorias();
        $this->viewCategoria->showSelectorCategorias($this->Titulo,$this->CategoryList);
    }

    //Seccion tabla por defecto//

    function listarCategorias(){
        $this->CategoryList = $this->modelCategoria->getTodasLasCategorias();
        $this->viewCategoria->showTablaCategorias();
    }






    //Seccion Categorias//




  ////////////////INSERTA CATEGORIA/////////////////////
    function InsertarCategoria(){
        $this->modelCategoria->addCategoria($_POST['input_categoria']);
        $this->viewCategoria->showTablaCategorias();
    }

  //////////////////BORRA CATEGORIA/////////////////////
    function suprimirCategoria($params = null){
        $idCategoria = $params[':ID'];
        $this->modelCategoria->suprCategoria($idCategoria);
        $this->viewCategoria->showTablaCategorias($idCategoria);
    }

  //////////////////Busca ID CATEGORIA/////////////////////
    function EditarIdCategoria($params = null){
        $idCategoria = $params[':ID'];
        $CategoryList = $this->modelCategoria->getTodasLasCategorias();
        $this->viewCategoria->showEdicionCategoria($this->Titulo,$CategoryList,$idCategoria);
    }
  

    function EditarCategoria(){   
        $idCategoria= $_POST['input_idCategoria'];
        $nombreCategoria= $_POST['input_nombreCategoria'];
        $this->modelCategoria->editCategoria($nombreCategoria,$idCategoria);
        $this->viewCategoria->showTablaCategorias();  
    }
 
 










//////////////////////FUNCIONES DE PRODUCTOS////////////////////////////////////////////    
   //Seccion navegacion//
   function index(){
         $this->view->showIndex();
    }
    function productos(){
        $this->view->showProductos();
    }
    function comunidad(){
         $this->view->showComunidad();
    }

    //Seccion llamado de tablas//

    function baseCompleta(){ //Tabla de producto
        $this->ProductList = $this->model->getTodosLosProductos();
        $this->CategoryList = $this->modelCategoria->getTodasLasCategorias();
        $this->view->showBaseCompleta($this->Titulo,$this->ProductList,$this->CategoryList);
    }
    

    //Seccion tabla por defecto//

    function listarProductos(){
        $this->ProductList = $this->model->getTodosLosProductos();
        $this->view->showTablaProductos();
    }

    //Seccion administracion de tabla//

  //////////////////CONTROLA FILTRADO/////////////////////
    function getProductosPorCategoria(){
      
        if($_GET['selectCategoria']!= "Todas"){//default//
            $this->CategoryList = $this->modelCategoria->getTodasLasCategorias();
            
            $producto = $this->model->getProductosPorCategoria($_GET['selectCategoria']);
            $this->view->showFiltrado($this->Titulo,$this->CategoryList,$producto);
        }else{
            $this->view->showTablaProductos();
        }
    }


    
  //////////////////INSERTA PRODUCTO/////////////////////
    function InsertarProducto(){
        $this->model->addProducto($_POST['input_descripcion'],$_POST['input_color'],$_POST['input_precio']);
        $this->view->showTablaProductos();
    }

  //////////////////BORRA  PRODUCTO  POR ID/////////////////////
    function suprimirProducto($params = null){
        $idProducto = $params[':ID'];
        $this->model->suprProducto($idProducto);
        $this->view->showTablaProductos($idProducto);
    }

  //////////////////Busca ID PRODUCTO/////////////////////

    function EditarIdProducto($params = null){
        $idProducto = $params[':ID'];
        $ProductList = $this->model->getTodosLosProductos();
        $CategoryList = $this->modelCategoria->getTodasLasCategorias();
        $this->view->showEdicionProducto($this->Titulo,$ProductList,$CategoryList,$idProducto,$CategoryList);
    }

    
  //////////////////MODIFICA UN PRODUCTO/////////////////////
    function EditarProducto(){  
        $idProducto= $_POST['input_idProducto'];
        $descripcion= $_POST['input_descripcion'];
        $color= $_POST['input_color'];
        $precio= $_POST['input_precio'];
        $categoria= $_POST['selectCategoria'];
        $this->model->editProducto($descripcion,$color,$precio,$categoria,$idProducto);
        $this->view->showTablaProductos();
    }

    
  //////////////////VER DETALLE PRODUCTO/////////////////////
    function verProducto($params = null){
        $idProducto = $params[':ID'];
        $producto = $this->model->setProducto($idProducto);
        $this->view->showVista($producto,$idProducto);
    }
}
