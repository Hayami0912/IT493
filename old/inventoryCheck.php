<?php
$servername = "ls-5900a554b500f140609f881f39ef00586b0baaa7.clgpgfwlchsv.us-east-1.rds.amazonaws.com";
$username = "it493team4";
$password = "Password12!";
$dbname = "Elite_Action";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//print Item in Database
$sql = "Select * from Inventory";

echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
		  <td> <font face="Arial">Quantity</font> </td> 
          <td> <font face="Arial">Item Name</font> </td> 
          <td> <font face="Arial">Item Description</font> </td> 
          

      </tr>';

if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
		$field2name = $row["quantity"];
        $field3name = $row["item_name"];
        $field4name = $row["item_description"];

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
} 
$conn->close();
?>
