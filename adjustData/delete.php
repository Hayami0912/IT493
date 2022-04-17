<?php
$servername = "ls-5900a554b500f140609f881f39ef00586b0baaa7.clgpgfwlchsv.us-east-1.rds.amazonaws.com";
$username = "it493team4";
$password = "Password12!";
$dbname = "Elite_Action";

$connect = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST["id"]))
{
 $query = "DELETE FROM Inventory WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>