<?php
require_once "./View/UserView.php";
require_once "./Model/UserModel.php";


class UserController{

    private $userView;
    private $userModel;


    function __construct(){
        $this->userView = new UserView();
        $this->userModel = new UserModel();
    }

    function Login(){
        $this->userView->showLogin();
    }

    function Logout(){
        session_start();
        session_destroy();
        header("Location:" .LOGIN);
    }
     
    
    function verifyUser(){
        $usuario = $_POST["input_usuario"];
        $pass = $_POST["input_pass"];

        
        if(!empty($usuario)&& !empty($pass)){
            if(isset($usuario)){
                $userFromDB= $this->userModel->GetUser($userName);
                if(isset($userFromDB)&& $userFromDB){

                    if (password_verify($pass, $userFromDB->password)){
                        session_start();
                        $_SESSION['email'] = $userFromDB->email;
                        header("Location: " .HOME);
                    }else{
                        $this->userView->showLogin("Contraseña incorrecta");
                    }
                }else{// En caso que no exista un usuario en la DB
                    $this->userView->showLogin("Usuario incorrecto");
                }
            }
        }
    }
        
        
        //chequeo de inicio de sesion
        private function checkLoggedIn(){
            session_start();
            if(!isset($_SESSION["email"])){
                header("Location: ".LOGIN);
                
            }
        }
        

      
        
    
}