<?php
session_start();
include_once("model/model.php");
class Controller extends Model{
    // public $base_url = "http://localhost/laravel/11JulyMWF3/25JulyMWF3/PHP/MVC/";
    public $base_url = "";
    public function __construct() {
        parent::__construct();
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
                    // echo "<pre>";
                    // print_r($_REQUEST);
                    if (isset($_POST['registraion'])) {
                        $FetchAllUsersData = $this->insert('user',array("user_name"=>$_POST['username'],"password"=>$_POST['password'],"email"=>$_POST['email'],"mobile"=>$_POST['mobile'],"gender"=>$_POST['gender']));
                    }
                    break;
                case '/showallusers':
                    echo "showallusers";
                    echo "<pre>";
                    $FetchAllUsersData = $this->select('users');
                    print_r($FetchAllUsersData);
                    // include_once("views/headersubpages.php");
                    // include_once("views/registration.php");
                    // include_once("views/footer.php");
                    break;
                
                default:
                    # code...
                    break;
            }
        }else{
            header("location:home");
        }
    }

}

$Controller = new Controller;


?>