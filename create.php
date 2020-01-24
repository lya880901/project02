<?php
if (isset($_POST["action"])&&($_POST["action"] == "add")) {

    include("connMySQL.php");
	$table = $_POST['table'];
	echo "資料表:$table";
    $number = $_POST["number"];
	$name = $_POST["name"];
	$twom = $_POST["twom"];
	$twoa = $_POST["twoa"];
	$threem = $_POST["threem"];
	$threea = $_POST["threea"];
	$ftm = $_POST["ftm"];
	$fta = $_POST["fta"];
    $score = $_POST["score"];

    $sql_query = "INSERT INTO $table (number, name, twom, twoa, threem, threea, ftm, fta, score) VALUES ('$number', '$name', '$twom', '$twoa', '$threem', '$threea', '$ftm', '$fta', '$score')";
    mysqli_query($db_link,$sql_query);
    header("Location: index.php");
}
?>
<html>

<head>
    <meta charset="UTF-8" />
    <title>新增資料</title>
	<script src="vue.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="app">
	<?php
		$table = $_POST['table'];
	    echo "$table";
	?>
<ul>
  <li><a class="active" href="index.php">{{main}}</a></li>
  <li><a href="create.php">{{create}}</a></li>
</ul>
<div class="content">
<form action="" method="post" name="formAdd" id="formAdd">
{{input}}{{number}}：<input type="int" name="number" id="number"><br/>
{{input}}{{name}}：<input type="char" name="name" id="name"><br/>
{{input}}{{twom}}：<input type="int" name="twom" id="twom"><br/>
{{input}}{{twoa}}：<input type="int" name="twoa" id="twoa"><br/>
{{input}}{{threem}}：<input type="int" name="threem" id="threem"><br/>
{{input}}{{threea}}：<input type="int" name="threea" id="threea"><br/>
{{input}}{{ftm}}：<input type="int" name="ftm" id="ftm"><br/>
{{input}}{{fta}}：<input type="int" name="fta" id="fta"><br/>
{{input}}{{score}}：<input type="int" name="score" id="score"><br/>
<input type="hidden" name="action" value="add">
<input type="submit" name="button" value="新增資料">
<input type="reset" name="button2" value="重置">
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
			reboff:'籃板球進攻',
			rebdef:'籃板球防守',
			ast:'助攻',
			stl:'搶截',
			bs:'阻攻',
			to:'失誤',
			pf:'犯規',
			min:'出賽時間',
			input:'請輸入',
			data:'資料',
			reset:'重置',
		}
	});
	</script>
</body>
</html>