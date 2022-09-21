<?php
// error_reporting(0);
// mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
date_default_timezone_set("Asia/Kolkata");
class Model
{
    public $dbConnection = "";
    public function __construct()
    {
        
        // $this->dbConnection = new mysqli("hostname","username","password","databasename")
        try {
            $this->dbConnection = new mysqli("localhost", "root", "", "masterdatabase");
            // echo "Inside Try";
        } catch (\Exception $e) {
            if (!file_exists("logs")) {
                mkdir("logs");
            }
            $Msg = PHP_EOL . "Error Message =>>" . $e->getMessage() . PHP_EOL;
            $Msg .= "Error Date Time =>>" . date("d-m-Y h:i:s A") . PHP_EOL;
            $file = 'logs/' . date("d_m_Y") . 'log.txt';
            file_put_contents($file, $Msg, FILE_APPEND);
            echo "Error in database connection";
            exit;

            //throw $th;
        }

        // $this->dbConnection = mysqli_connect("localhost1","root","","masterdatabase");
        // echo "<pre>";
        // print_r($this->dbConnection);
    }
    public function select($tbl)
    {
        // SELECT Query START
        $SQL = "SELECT * FROM $tbl";
        // SELECT Query END
        // Execute SELECT Query on Database START
        $SQLEx = $this->dbConnection->query($SQL);
        // Execute SELECT Query on Database END
        // echo "<pre>";
        // print_r($SQLEx );
        // Condition for getting data from DB START
        if ($SQLEx->num_rows > 0) {
            // $Data = $SQLEx->fetch_array();
            // echo "<pre>";
            // print_r($Data);
            // print_r($Data[0]);
            // print_r($Data['id']);
            // $Data = $SQLEx->fetch_assoc();
            // echo "<pre>";
            // print_r($Data);
            // print_r($Data['id']);
            // $Data = $SQLEx->fetch_row();
            // echo "<pre>";
            // print_r($Data);
            // print_r($Data[1]);
            // $Data = $SQLEx->fetch_object();
            // echo "<pre>";
            // print_r($Data);
            // print_r($Data->username);
            // Fetch multiple data with object formate START
            while ($fData = $SQLEx->fetch_object()) {
                $FetchData[] = $fData; // Store Data in array
            }
            // Fetch multiple data with object formate END
            // echo "<pre>";
            // print_r($FetchData);
            $Data["Msg"] = "Success";
            $Data["Data"] = $FetchData;
            $Data["Code"] = 1;
        } else {
            $Data["Msg"] = "Try again";
            $Data["Data"] = 0;
            $Data["Code"] = 0;
        }
        return $Data;
        // Condition for getting data from DB END
    }
    public function login($uname,$pass)
    {
        $SQL = 'SELECT * FROM `users` WHERE (`username`="'.$uname.'" OR `email` ="'.$uname.'" OR `mobile` ="'.$uname.'") AND password ="'.$pass.'"';
        $SQLEx = $this->dbConnection->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($fData = $SQLEx->fetch_object()) {
                $FetchData[] = $fData; // Store Data in array
            }
            $Data["Msg"] = "Success";
            $Data["Data"] = $FetchData;
            $Data["Code"] = 1;
        } else {
            $Data["Msg"] = "Try again";
            $Data["Data"] = 0;
            $Data["Code"] = 0;
        }
        return $Data;
        // Condition for getting data from DB END
    }
    public function update()
    {
        $SQL = "";
    }
    public function insert($tbl, $data)
    {
        // echo "<pre>";
        // print_r($data);
        // print_r(array_keys($data));
        $clms = implode(",", array_keys($data));
        $vals = implode("','", $data);
        // echo "INSERT INTO users(user_name,password,gender,email,mobile) VALUES('asd','as','asd','as','987987')";
        // echo "<br>";
        $SQL = "INSERT INTO $tbl($clms) VALUES('$vals')";
        $SQLEx = $this->dbConnection->query($SQL);
        // print_r($SQLEx);
        // exit;
        if ($SQLEx > 0) {
            $Data["Msg"] = "Success";
            $Data["Data"] = 1;
            $Data["Code"] = 1;
        } else {
            $Data["Msg"] = "Try again";
            $Data["Data"] = 0;
            $Data["Code"] = 0;
        }
        return $Data;
    }
    public function delete()
    {
        $SQL = "";
    }
}

// $Model = new Model;
// echo "<br>";
// $Model->select("Users");
// echo "<br>";
// $Model->select("City");
// echo "<br>";
// $Model->select("state");
