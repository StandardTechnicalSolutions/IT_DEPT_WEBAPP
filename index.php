
<?php 
    $get = $_GET["URI"];

    if (isset($get)){
        switch ($get){
            case 'desktop':
                require __DIR__ . "/Controllers/equipmentContent.php";
                require __DIR__ . "/Views/Templates/desktop-template.php";
                break;
            default:
                require __DIR__ . "/webAppPortal.html";
        }
    } else {
        require __DIR__ . "/webAppPortal.html";
    }