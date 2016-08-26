<?php

$username = "ajax_db_user";


$password = "";


$database = "test";



$customer = $_GET['customer'];



mysql_connect(localhost, $username, $password);


@mysql_select_db($database) or die( "Unable to select database");


$query = "SELECT * FROM shipment WHERE id = '$customer' ";


$result = mysql_query($query);



$num = mysql_numrows($result);



mysql_close();




echo "<h3>Orders by the Customer_ID </h3>\n\n";




if ( $num == 0 ) 
{
  	
	
	echo "\"$customer \" not found in the database.";
  
	
	return;


}



$i=0;



while ($i < $num) 
{
  
	
	$customer = mysql_result($result,$i,"id");
  
	$order_id = mysql_result($result,$i,"sid");

  
	$item_name = mysql_result($result,$i,"item_name");

  
	$price = mysql_result($result,$i,"price");

  
	

echo "<p><b> Customer_ID: $customer </b><br/>\n Order_Id: $order_id<br/>\nItem_name: $item_name<br/>\nprice: $ 	$price<br/>\n";


  
	$i++;


}


?>
                                                            

