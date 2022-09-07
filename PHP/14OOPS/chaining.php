<?php
class QueryClas{
  public $Query;
  public function select($val)
  {
    $this->Query = "SELECT $val";
    return $this;
  }
  public function from($fromval)
  {
    // $this->Query = $this->Query." FROM $fromval";
    $this->Query .= " FROM $fromval";
    return $this;
  }
  public function where($where)
  {
    $this->Query .= " WHERE user_id = '$where'";
    return $this;
  }
}
$D = new QueryClas();
// echo "<br>Simple Query<br>";

// echo $Q = $D -> select('*')->Query;
// echo $Q = $D -> select('username,password')->Query;
// print_r($Q);
// echo "<br>Column Specification Query<br>";
// echo $Q = $D -> select('username,gender,address') ->from('user') -> Query;
// echo $Q = $D -> select('*') ->from('city') -> Query;
// exit;
echo "<br>Query With Where Condition<br>";
// echo $Q = $D -> select('*') -> Query;
// echo $Q = $D -> select('username,password') -> Query;
// echo $Q = $D -> select('username,password')->from('users') -> Query;
echo $Q = $D -> select('*') ->from('user') ->where('1') -> Query;
?>
