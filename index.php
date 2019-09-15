
<?php 
    $request = $_SERVER["REQUEST_URI"];

    // echo __DIR__ . "/Views/Templates/desktop-template.html";

    // if ($_GET["equipment"]){
    // require __DIR__ . "/equipmentContent.php";
    // require __DIR__ . "/Views/Templates/desktop-template.html";
    // return;
    // }
    
    switch($request){
        case "/":
        //require __DIR__ . "/webAppPortal.html";
        require  __DIR__ . "/Controllers/equipmentContent.php";
        require __DIR__ ."/Views/Templates/desktop-template.html";
            break;
        case "/equipment":
            require __DIR__ . "/equipmentContent.php";
            require __DIR__ . "/Views/Templates/desktop-template.html";
            break;
        default:
            require __DIR__ . "/Views/Templates/err404.php";
            break;
    }


?>