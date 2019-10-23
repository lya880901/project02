<?php
if (isset($_POST["action"])&&($_POST["action"] == "add")) {

    include("connMySQL.php");

    $number = $_POST["number"];
    $score = $_POST['score'];

    $sql_query = "INSERT INTO data (number, score) VALUES ('$number', '$score')";
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
請輸入分數：<input type="int" name="score" id="score"><br/>
<input type="hidden" name="action" value="add">
<input type="submit" name="button" value="新增資料">
<input type="reset" name="button2" value="重新填寫">
</form>
</body>
</html>