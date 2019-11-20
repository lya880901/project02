<?php
 include "connMySQL.php";

 $userID = $_GET['id'];
 
 $sql_getDataQuery = "SELECT * FROM data WHERE ID = $userID";

 $result = mysqli_query($db_link, $sql_getDataQuery);

 $row_result = mysqli_fetch_assoc($result);
 $id = $row_result['ID'];
 $number = $row_result['number'];
 $score = $row_result['score'];
?>