    <?php 

    function recupera() {

    global $num1, $num2;
    
    // Añado un bucle if para comprobar si se ha enviado el formulario, si no se ha enviado,
    // carg unos valores por defecto para que la tabla muestre un ejemplo
    if(empty($_POST["num1"]) || empty($_POST["num2"])){
        $num1 = 1;
        $num2 = 10; 
    }else{
        $num1 = $_POST["num1"]; 
        $num2 = $_POST["num2"];
    }
      
    }

    ?>