
<?php 
    $request = $_SERVER["REQUEST_URI"];

    
    
    switch($request){
        case "/":
            require __DIR__ . "/index.html";
            break;
        default:
            require __DIR__ . "/Views/Templates/err404.php";
            break;
    }


?>