"use strict";

//CAPTCHA_SPACE//
document.getElementById("submit").addEventListener("click",registrar);


function registrar() {
 

    //CAPTCHA_CODE_GENERATOR//
    let code_number = Math.floor((Math.random() * 1000000));
    
    console.log("Calculando numeros");

        //CAPTCHA_PRINT_SCREEN//

        let message_captcha = document.getElementById("msg_captcha"); //busco elemento donde se envia el mensaje//
        console.log("Preparando captcha");
        message_captcha.innerHTML = "Ingrese el código mostrado en pantalla"; //modifica el contenido reservado//
        console.log("Enviando mensaje");
        let screen_code = document.getElementById("code"); //busco elemento donde se va a imprimir el captcha//
        console.log("Preparando codigo de captcha");
        let code_val = code_number;  //Variable fundamental para la funcion comprobacion//
        screen_code.innerHTML = code_val; //el elemento adopta el valor del codigo//
        console.log("Impresion de codigo captcha");
       


        //INPUT_GENERATOR//

        let creating_input = document.createElement("input");  //crea input donde esta reservado//
        console.log("creando input"); 
        creating_input.type ="text"; //atributos//
        creating_input.id = "dynamic_input_value";  //atributos,Fundamental para llamarlo durante la funcion comprobacion//
        console.log("Propiedades de input");
        input_captcha.appendChild(creating_input); //el elemento invisible en html agrega como hijo al input creado//
        console.log("Imprimiendo input");
            
    

        //BUTTON_GENERATOR//
 
        let creating_button = document.createElement("button");  
        console.log("creando boton"); 
        creating_button.type ="submit";
        creating_button.id = "button_created";
        creating_button.innerHTML = "Verificar";
        console.log("Propiedades de boton");
        button_captcha.appendChild(creating_button);
        console.log("Imprimiendo boton");


        // VALIDATION_SEQUENCE //

        document.getElementById("button_created").addEventListener("click",validation);
        
            function validation() {
            let text_input = document.getElementById("dynamic_input_value"); //se busca el contenido ingresado//
            let input_value = text_input.value;
            let result_message = document.getElementById("captcha_result_message"); //se busca el codigo//
            console.log("Inicializando confirmacion");
                if (input_value == code_val) {                        //Comparacion de valores//
                    result_message.innerHTML = "Gracias por registrarte";
                    setTimeout("location.href='index.html'",1000);
                    console.log("Finalizando registro");
                }
                else {
                    result_message.innerHTML = "El codigo ingresado no coincide";
                    console.log("Reintentar registro");
                }
            }
        
        


            //DISABLE_BUTTON//

        document.getElementById("submit").disabled = true;       
        let unable_button = document.querySelector('#submit');
        unable_button.classList.add("unable");
        


        
}


//END_CAPTCHA_SPACE//