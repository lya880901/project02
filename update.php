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
<html>

 <head>
     <meta charset="UTF-8" />
     <title>修改會員資料</title>
 </head>
 <body>

 <form action="" method="post" name="formAdd" id="formAdd">
      
     請輸入背號：<input type="int" name="number" id="number" value=" <?php echo $number ?>"><br/>
     請輸入分數：<input type="int" name="score" id="score" value="<?php echo $score ?>"><br/>
     <input type="hidden" name="action" value="update">
     <input type="submit" name="button" value="修改資料">
 </form>
 </body>
 </html>
 <?php
 if (isset($_POST["action"]) && $_POST["action"] == 'update') {

     $newnumber = $_POST['number'];
     $newscore = $_POST['score'];

     $sql_query = "UPDATE data SET number = '$newnumber', score = '$newscore' WHERE ID = $userID";

     mysqli_query($db_link,$sql_query);
     $db_link->close();

     header('Location: index.php');
 }
 ?>