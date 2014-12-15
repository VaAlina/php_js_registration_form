<?php 
require 'config.php';

$f_name=$_POST['f_name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];

if(isset($_POST['ok'])){
  $query=mysql_query("INSERT INTO reg_data(f_name, email, pass) VALUES ('$f_name', '$email', '$pass')");
  echo "<div id='mes'>The text was added!!!</div>";
}

?>
