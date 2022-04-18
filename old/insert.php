<?php
$servername = "ls-5900a554b500f140609f881f39ef00586b0baaa7.clgpgfwlchsv.us-east-1.rds.amazonaws.com";
$username = "it493team4";
$password = "Password12!";
$dbname = "Elite_Action";

$conn = new mysqli($servername, $username, $password, $dbname);

// Entering Input Data
if(isset($_POST['save']))
{
$field1 = $_POST['id'];
$field2 = $_POST['item_name'];
$field3 = $_POST['item_description'];
$field4 = intval($_POST['item_quantity']);
$sql = "INSERT INTO Inventory (ID, Item_Name, Item_description, Quantity)
            VALUES ($field1,'$field2','$field3',$field4)";

if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		echo "<br><a href='http://3.234.254.93/'>Return Home</a><br>";
		echo  "<a href='http://3.234.254.93/inventoryCheck.php'>Show Inventory</a><br>";
	 } 
else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
		echo "<br><a href='http://3.234.254.93/'>Return Home</a>";
	 }
	 mysqli_close($conn);
}
?>