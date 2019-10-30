<?php
if (isset($_POST["action"])&&($_POST["action"] == "add")) {

    include("connMySQL.php");

    $number = $_POST["number"];
	$name = $_POST["name"];
	$twom = $_POST["twom"];
	$twoa = $_POST["twoa"];
	$threem = $_POST["threem"];
	$threea = $_POST["threea"];
	$ftm = $_POST["ftm"];
	$fta = $_POST["fta"];
    $score = $_POST['score'];

    $sql_query = "INSERT INTO data (number, name, twom, twoa, threem, threea, ftm, fta, score) VALUES ('$number', '$name', '$twom', '$twoa', '$threem', '$threea', '$ftm', '$fta', '$score')";
    mysqli_query($db_link,$sql_query);
    header("Location: index.php");
}
?>
<html>

<head>
    <meta charset="UTF-8" />
    <title>新增資料</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="" method="post" name="formAdd" id="formAdd">
請輸入背號：<input type="int" name="number" id="number"><br/>
請輸入姓名：<input type="char" name="name" id="name"><br/>
請輸入2分命中：<input type="int" name="twom" id="twom"><br/>
請輸入2分未中：<input type="int" name="twoa" id="twoa"><br/>
請輸入3分命中：<input type="int" name="threem" id="threem"><br/>
請輸入3分未中：<input type="int" name="threea" id="threea"><br/>
請輸入罰球命中：<input type="int" name="ftm" id="ftm"><br/>
請輸入罰球未中：<input type="int" name="fta" id="fta"><br/>
請輸入分數：<input type="int" name="score" id="score"><br/>
<input type="hidden" name="action" value="add">
<input type="submit" name="button" value="新增資料">
<input type="reset" name="button2" value="重新填寫">
</form>
</body>
</html>