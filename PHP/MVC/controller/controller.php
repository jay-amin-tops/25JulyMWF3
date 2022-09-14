<?php

class Controller{
    // public $base_url = "http://localhost/laravel/11JulyMWF3/25JulyMWF3/PHP/MVC/";
    public $base_url = "";
    public function __construct() {
        // echo "<pre>";
        // print_r($_SERVER);
        $ArrOfReq = explode("/",$_SERVER['REQUEST_URI']);
        // print_r($ArrOfReq);
        // echo "<br>http://localhost/laravel/11JulyMWF3/25JulyMWF3/PHP/MVC/<br>";
        $this->base_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$ArrOfReq[1]."/".$ArrOfReq[2]."/".$ArrOfReq[3]."/".$ArrOfReq[4]."/".$ArrOfReq[5];
        $this->base_url_assets = $this->base_url."/assets/";
        // exit;
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("views/header.php");
                    include_once("views/maincontent.php");
                    include_once("views/footer.php");
                    break;
                case '/about':
                    echo "about us page";
                    // include_once("views/header.php");
                    // include_once("views/maincontent.php");
                    // include_once("views/footer.php");
                    break;
                case '/signin':
                    include_once("views/headersubpages.php");
                    include_once("views/loginpage.php");
                    include_once("views/footer.php");
                    break;
                case '/registration':
                    include_once("views/headersubpages.php");
                    include_once("views/registration.php");
                    include_once("views/footer.php");
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }

}

$Controller = new Controller;


?>