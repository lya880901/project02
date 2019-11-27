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
     <title>{{update}}{{data}}</title>
	 <script src="vue.js" type="text/javascript" charset="utf-8"></script>
	 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
	<div id="app"> 
<ul>
  <li><a class="active" href="index.php">{{main}}</a></li>
  <li><a href="create.php">{{create}}</a></li>
</ul>
<div class="content">
 <form action="" method="post" name="formAdd" id="formAdd">
      
     {{input}}{{number}}：<input type="int" name="number" id="number" value=" <?php echo $number ?>"><br/>
	 {{input}}{{name}}：<input type="char" name="name" id="name" value=" <?php echo $name ?>"><br/>
	 {{input}}{{twom}}：<input type="int" name="twom" id="twom" value=" <?php echo $twom ?>"><br/>
	 {{input}}{{twoa}}：<input type="int" name="twoa" id="twoa" value=" <?php echo $twoa ?>"><br/>
	 {{input}}{{threem}}：<input type="int" name="threem" id="threem" value=" <?php echo $threem ?>"><br/>
	 {{input}}{{threea}}：<input type="int" name="threea" id="threea" value=" <?php echo $threea ?>"><br/>
	 {{input}}{{ftm}}：<input type="int" name="ftm" id="ftm" value=" <?php echo $ftm ?>"><br/>
	 {{input}}{{fta}}：<input type="int" name="fta" id="fta" value=" <?php echo $fta ?>"><br/>
     {{input}}{{score}}：<input type="int" name="score" id="score" value="<?php echo $score ?>"><br/>
     <input type="hidden" name="action" value="update">
     <input type="submit" name="button" value="修改資料">
 </form>
 </div>
</div>
<script type="text/javascript">
	var app = new Vue({
		el: '#app',
		data: {
			basketball:'籃球',
			main:'主頁',
			create:'新增',
			update:'修改',
			delete1:'刪除',
			number:'背號',
			name:'姓名',
			twom:'2分命中',
			twoa:'2分未中',
			threem:'3分命中',
			threea:'3分未中',
			ftm:'罰球命中',
			fta:'罰球未中',
			score:'得分',
			input:'請輸入',
			data:'資料',
			reset:'重置',
		}
	});
	</script>
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