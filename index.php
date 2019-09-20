
<?php 
    $get = $_GET["URI"];

    if (isset($get)){
        switch ($get){
            case 'desktop':
                require __DIR__ . "/Controllers/genericPageFillers.php";
                require __DIR__ . "/Views/Templates/desktop-template.php";
                break;
            case "desktop-directions":
                require __DIR__ . "/Controllers/directionsContent.php";
                require __DIR__ . "/Views/Templates/desktop-template.php";
                break;
            case "desktop-order":
                require __DIR__ . "/Controllers/genericPageFillers.php";
                require __DIR__ . "/Views/Templates/Sub_Templates/form-template.php";
                require __DIR__ . "/Views/Templates/desktop-template.php";
                break;
            case "desktop-equipment-used":
                require __DIR__ . "/Controllers/equipmentContent.php";
                require __DIR__ . "/Views/Templates/desktop-template.php";
                break;
            case "email":
                require __DIR__ . "/Controllers/EmailUser.php";
                require __DIR__ . "/Controllers/genericPageFillers.php";
                require __DIR__ . "/Controllers/emailSent.php";
                require __DIR__ . "/Views/Templates/desktop-template.php";
                break;

            default:
                require __DIR__ . "/Views/Templates/err404.html";
                break;
        }
    } else {
        require __DIR__ . "/webAppPortal.html";
    }