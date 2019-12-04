<?php
    include("connMySQL.php");
    $sql_query = "SELECT * FROM data ORDER BY ID ASC";
    $result = mysqli_query($db_link,$sql_query);
	$total_records = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統計</title>
	<script src="vue.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<div class="col-12">
<body onload="ShowTime()">
<div id="app">
<div class="col-3">
<div class="header1">
	<h2>{{contest+1}}</h2>
</div>
</div>
<div class="col-7">
<div class="header2">
	<h1>統計表</h1>
</div>
</div>
<div class="col-2">
<div class="time" id="showbox"></div>
</div>
<div class="col-3">
<div class="menu">
		<nav class="navbar bg-light navbar-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">{{contest+1}}</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="create.php">{{contest+2}}</a>
		      <li class="nav-item">
		        <a class="nav-link" href="">{{contest+3}}</a>
		      <li class="nav-item">
		        <a class="nav-link" href="">{{contest+4}}</a>								   
		      <li class="nav-item">
		        <a class="nav-link" href="">{{contest+5}}</a>								   
		    </ul>
		  </div>  
		</nav>
</div>
</div>
<div class="col-9">
<div class="main">
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
		<th>{{reboff}}</th>
		<th>{{rebdef}}</th>
		<th>{{ast}}</th>
		<th>{{stl}}</th>
		<th>{{bs}}</th>
		<th>{{error}}</th>
		<th>{{pf}}</th>
		<th>{{time}}</th>
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
	echo "<td>".$row['reboff']."</td>";
	echo "<td>".$row['rebdef']."</td>";
	echo "<td>".$row['ast']."</td>";
	echo "<td>".$row['stl']."</td>";
	echo "<td>".$row['bs']."</td>";
	echo "<td>".$row['error']."</td>";
	echo "<td>".$row['pf']."</td>";
	echo "<td>".$row['time']."</td>";
    echo "<td><a href='update.php?id=".$row['ID']."'>{{update}}</a>";
    echo "<a href='delete.php?id=".$row['ID']."'>{{delete1}}</a></td>";
    echo "</tr>";
}
?>
</table>
</div>
</div>
</div>
</div>
<script language="JavaScript" type="text/javascript">
	var app = new Vue({
		el: '#app',
		data: {
			contest:'賽程表',
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
			error:'失誤',
			pf:'犯規',
			time:'出賽時間',
			input:'請輸入',
			data:'資料',
			reset:'重置',
		}
	});
	function ShowTime(){
	　document.getElementById('showbox').innerHTML = new Date();
	　setTimeout('ShowTime()',1000);
	}
	</script>
</body>
</div>
</html>