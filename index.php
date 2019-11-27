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
	<script src="vue.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="app">
<ul>
  <li><a href="index.php">{{main}}</a></li>
  <li><a href="create.php">{{create}}</a></li>
</ul>
<div class="content">
<h1>{{ message }}</h1>
<p>目前資料筆數：<?php echo $total_records;?>，<a href='create.php'><button type="button">新增資料</button></a></p>
<table border="1">
    <tr>
        <th>{{number}}</th>
		<th>{{name}}</th>
		<th>{{twom}}</th>
		<th>{{twoa}}</th>
		<th>{{threem}}</th>
		<th>{{threea}}</th>
		<th>{{ftm}}</th>
		<th>{{fta}}</th>
        <th>{{score}}</th>
    </tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['number']."</td>";
    echo "<td>".$row['name']."</td>";
	echo "<td>".$row['twom']."</td>";
	echo "<td>".$row['twoa']."</td>";
	echo "<td>".$row['threem']."</td>";
	echo "<td>".$row['threea']."</td>";
	echo "<td>".$row['ftm']."</td>";
	echo "<td>".$row['fta']."</td>";
	echo "<td>".$row['score']."</td>";
    echo "<td><a href='update.php?id=".$row['ID']."'>{{update}}</a>";
    echo "<a href='delete.php?id=".$row['ID']."'>{{delete1}}</a></td>";
    echo "</tr>";
}
?>
</table>
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