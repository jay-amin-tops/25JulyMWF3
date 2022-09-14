<?php
// error_reporting(0);
// mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
class Model{
    public $dbConnection = "";
    public function __construct() {
        // $this->dbConnection = new mysqli("hostname","username","password","databasename")
        // $this->dbConnection = new mysqli("localhost1","root","","masterdatabase");
        try {
            
            $this->dbConnection = new mysqli("localhost1","root","","masterdatabase");
            echo "Inside Try";
        } catch (\Throwable $th) {
            echo "Inside catch";
            //throw $th;
        }

        // $this->dbConnection = mysqli_connect("localhost1","root","","masterdatabase");
        echo "<pre>";
        print_r($this->dbConnection);
    }
    public function select($tbl){
        echo $SQL = "SELECT * FROM $tbl";
    }
    public function update(){
        $SQL = "";
    }
    public function insert(){
        $SQL = "";
    }
    public function delete(){
        $SQL = "";
    }
}

$Model = new Model;
echo "<br>";
$Model->select("Users");
echo "<br>";
$Model->select("City");
echo "<br>";
$Model->select("state");

?>