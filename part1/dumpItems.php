<?php

$username = "ajax_db_user";

$password = "";

$database = "test";


mysql_connect(localhost, $username, $password);

@mysql_select_db($database) or die( "Unable to select database");

$query = "SELECT * FROM item";

$result = mysql_query($query);


$num = mysql_numrows($result);


mysql_close();


echo "<h3>List of all Items</h3>\n\n";


$i=0;

while ($i < $num) 
{
  	$item_id = mysql_result($result, $i, "item_id");
    
	$item_name = mysql_result($result, $i, "item_name");
	$price = mysql_result($result, $i, "price");
	echo "<p><b>Item_Id: $item_id </b>
		<br/>\n Item_Name: $item_name
		<br/>\n Price: $price
		\n";

  
	$i++;

}


?>
