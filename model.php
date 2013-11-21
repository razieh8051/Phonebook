<?php
class model {
function __construct() { }

function getdata() {

//DB CONNECTION
$con = mysql_connect('localhost','root',''); 
if (!$con) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 

//DB SELECTION
$db_selected = mysql_select_db("pwe",$con);
$query="SELECT * FROM PnBk";
$result=mysql_query($query,$con);


$data = array();
$i=0;
//RESTOR DB IN ARRAY
 while($row = mysql_fetch_array($result))
  {
    $data[$i]['name']= $row['name'];  
    $data[$i]['fname'] = $row['fname'];
	$data[$i]['phone']= $row['phone'];  
  $i++;
  }
mysql_close($con); 
return $data;
}
}
?>