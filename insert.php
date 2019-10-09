<?php  
 $dbhost = '127.0.0.1';  
 $dbuser = 'root';  
 $dbpass = '';  
 $dbname = 'basketball';

 $ID =$_REQUEST['ID'];
 $score = $_REQUEST['score'];

 $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
  
  mysql_query("SET NAMES 'utf8'");
  mysql_select_db($dbname);  
  
  $sql_update = "Update basketball Set ID = '$ID', score = '$score' WHERE ID = '$ID'";
  $result = mysql_query($sql_insert) or die('MySQL insert error');
  
  $sql_query = "select * from data";
  $result = mysql_query($sql_query) or die('MySQL query error');
  
  while($row = mysql_fetch_array($result))
  {
   echo $row['ID']."<br>";
   echo $row['score']."<br>";
  }
?>