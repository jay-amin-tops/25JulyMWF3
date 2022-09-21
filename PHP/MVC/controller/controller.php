<?php
session_start();
include_once("model/model.php");
class Controller extends Model{
    // public $base_url = "http://localhost/laravel/11JulyMWF3/25JulyMWF3/PHP/MVC/";
    public $base_url = "";
    public function __construct() {
        ob_start();
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
                    if (isset($_POST['login'])) {
                        if ($_POST['username'] != "" && $_POST['password'] != "") {
                            $LoginRes = $this->login($_POST['username'],$_POST['password']);
                            if ($LoginRes['Code'] == 1) {
                                $_SESSION['UserData'] =$LoginRes['Data'][0];
                                if ($LoginRes['Data'][0]->role_id == 1) {
                                    header("location:admindashboard");
                                } else {
                                    header("location:home");
                                }
                            } else {
                                echo "<script>alert('Invalid User')</script>";
                            }
                            
                        } else {
                            echo " <script>alert('User Name and password is required!!!')</script>";
                        }
                        // $gender = $_REQUEST['Gender'] ? "true" :"false";
                    }
                    break;
                case '/registration':
                    $allCitiesData = $this->select("cities_data");
                    // echo "<pre>";
                    // print_r($allCitiesData);
                    // echo "</pre>";
                    include_once("views/headersubpages.php");
                    include_once("views/registration.php");
                    include_once("views/footer.php");
                    // echo "<pre>";
                    // print_r($_REQUEST);
                    if (isset($_POST['registraion'])) {
                        $hobb = implode(',', $_POST['hobbies']);
                        // $InsertArray= array("username"=>$_POST['username'],
                        // "password"=>$_POST['password'],
                        // "fullname"=>$_POST['fullname'],
                        // "email"=>$_POST['email'],
                        // "mobile"=>$_POST['mobile'],
                        // "city"=>$_POST['city'],
                        // "hobby"=> $hobb,
                        // "gender"=>$_POST['gender']);
                        // echo "<pre>";
                        // print_r($InsertArray);
                        // print_r($_REQUEST);
                        array_pop($_POST);
                        unset($_POST['hobbies']);
                        $InsertArray = array_merge($_POST,array("hobby"=>$hobb));
                        // print_r($InsertArray);
                        // exit;
                        $RegistUsersData = $this->insert('users',$InsertArray);
                        echo "<pre>";
                        print_r($RegistUsersData);
                        if ($RegistUsersData['Code'] == 1) {
                            header("location:signin");
                        }else{
                            echo "Error While inserting";
                        }
                    }
                    break;
                case '/admindashboard':
                    include_once("views/admin/header.php");
                    include_once("views/admin/dashboard.php");
                    include_once("views/admin/footer.php");
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
        ob_flush();
    }

}

$Controller = new Controller;


?>