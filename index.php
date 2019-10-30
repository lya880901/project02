<?php
    include("connMySQL.php");
    $sql_query = "SELECT * FROM data ORDER BY ID ASC";
    $result = mysqli_query($db_link,$sql_query);
	$total_records = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>統計</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="head">
<!--<div id="app">-->
<h1>籃球</h1>
</div>
<!--<input type="text" v-model="message">-->
<p>目前資料筆數：<?php echo $total_records;?>，<a href='create.php'><!--v-on:click="create(新增)"--><!--{{message}}-->新增資料</a></p>
<div class="tablecenter">
<table border="1">
    <tr>
        <!--th>ID</th>-->
        <th>背號</th>
		<th>姓名</th>
		<th>2分命中</th>
		<th>2分未中</th>
		<th>3分命中</th>
		<th>3分未中</th>
		<th>罰球命中</th>
		<th>罰球未中</th>
        <th>得分</th>
    </tr>
</div>
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    //echo "<td>".$row['ID']."</td>";
    echo "<td>".$row['number']."</td>";
    echo "<td>".$row['name']."</td>";
	echo "<td>".$row['twom']."</td>";
	echo "<td>".$row['twoa']."</td>";
	echo "<td>".$row['threem']."</td>";
	echo "<td>".$row['threea']."</td>";
	echo "<td>".$row['ftm']."</td>";
	echo "<td>".$row['fta']."</td>";
	echo "<td>".$row['score']."</td>";
    echo "<td><a href='update.php?id=".$row['ID']."'>修改</a>";
    echo "<a href='delete.php?id=".$row['ID']."'>刪除</a></td>";
    echo "</tr>";
}
?>
</table>
<!--<script src="style.js" type="text/javascript"></script>
<script src="https://unpkg.com/vue"></script>
</div>-->
</body>
</html>