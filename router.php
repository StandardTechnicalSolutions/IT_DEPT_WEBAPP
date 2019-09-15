
<?php 
    $request = $_SERVER["REQUEST_URI"];


    
    switch($request){
        case "/":
            require __DIR__ . "/index.html";
            break;
        case "/equipment":
            require "Controllers/equipmentContent.php";
            require "Views/Templates/desktop-template.html";
        default:
            require __DIR__ . "/Views/Templates/err404.php";
            break;
    }


?>