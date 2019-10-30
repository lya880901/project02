 <?php
 include "connMySQL.php";

 $userID = $_GET['id'];
 
 $sql_getDataQuery = "SELECT * FROM data WHERE ID = $userID";

 $result = mysqli_query($db_link, $sql_getDataQuery);

 $row_result = mysqli_fetch_assoc($result);
 $id = $row_result['ID'];
 $number = $row_result['number'];
 $name = $row_result['name'];
 $twom = $row_result['twom'];
 $twoa = $row_result['twoa'];
 $threem = $row_result['threem'];
 $threea = $row_result['threea'];
 $ftm = $row_result['ftm'];
 $fta = $row_result['fta'];
 $score = $row_result['score'];
?>
<html>

 <head>
     <meta charset="UTF-8"/>
     <title>修改會員資料</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>

 <form action="" method="post" name="formAdd" id="formAdd">
      
     請輸入背號：<input type="int" name="number" id="number" value=" <?php echo $number ?>"><br/>
	 請輸入姓名：<input type="char" name="name" id="name" value=" <?php echo $name ?>"><br/>
	 請輸入2分命中：<input type="int" name="twom" id="twom" value=" <?php echo $twom ?>"><br/>
	 請輸入2分未中：<input type="int" name="twoa" id="twoa" value=" <?php echo $twoa ?>"><br/>
	 請輸入3分命中：<input type="int" name="threem" id="threem" value=" <?php echo $threem ?>"><br/>
	 請輸入3分未中：<input type="int" name="threea" id="threea" value=" <?php echo $threea ?>"><br/>
	 請輸入罰球命中：<input type="int" name="ftm" id="ftm" value=" <?php echo $ftm ?>"><br/>
	 請輸入罰球未中：<input type="int" name="fta" id="fta" value=" <?php echo $fta ?>"><br/>
     請輸入分數：<input type="int" name="score" id="score" value="<?php echo $score ?>"><br/>
     <input type="hidden" name="action" value="update">
     <input type="submit" name="button" value="修改資料">
 </form>
 </body>
 </html>
 <?php
 if (isset($_POST["action"]) && $_POST["action"] == 'update') {

     $newnumber = $_POST['number'];
	 $newname = $_POST['name'];
	 $newtwom = $_POST['twom'];
	 $newtwoa = $_POST['twoa'];
	 $newthreem = $_POST['threem'];
	 $newthreea = $_POST['threea'];
	 $newftm = $_POST['ftm'];
	 $newfta = $_POST['fta'];
     $newscore = $_POST['score'];

     $sql_query = "UPDATE data SET number = '$newnumber', name='$newname', twom='$newtwom', twoa-'$newtwoa', threem='$newthreem', threea='$newthreea', ftm='$newftm', fta='$newfta, 'score = '$newscore' WHERE ID = $userID";

     mysqli_query($db_link,$sql_query);
     $db_link->close();

     header('Location: index.php');
 }
 ?>