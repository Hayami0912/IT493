<?php
$servername = "ls-5900a554b500f140609f881f39ef00586b0baaa7.clgpgfwlchsv.us-east-1.rds.amazonaws.com";
$username = "it493team4";
$password = "Password12!";
$dbname = "Elite_Action";

$connect = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST["id"], $_POST["item_name"]))
{
$field1 = $_POST['id'];
$field2 = $_POST['item_name'];
$field3 = $_POST['item_description'];
$field4 = intval($_POST['item_quantity']);
$query = "INSERT INTO Inventory (id, item_name, item_description, quantity)
            VALUES ($field1,'$field2','$field3',$field4)";
	
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>