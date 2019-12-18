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
	<link rel="stylesheet" type="text/css" href="styleforteammate.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-12">
<header>
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<h1>".$row['t1member1name']."</h1>";
}
?>
</header>
</div>
<section>
<div class="col-12">
	<h7>#</h7>
</div>
<div class="col-12">
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<p>".$row['t1member1number']."</p>";
}
?>
</div>
</section>
<section>
<div class="col-12">
	<h7>名稱</h7>
</div>
<div class="col-12">
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<p>".$row['t1member1name']."</p>";
}
?>
</div>
</section>
<section>
<div class="col-12">
	<h7>height</h7>
</div>
<div class="col-12">
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<p>".$row['t1member1height']."</p>";
}
?>
</div>
</section>
<section>
<div class="col-12">
	<h7>現役球隊</h7>
</div>
<div class="col-12">
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<p>".$row['t1']."</p>";
}
?>
</div>
</section>
<section>
	<div class="col-12">
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<p>".$row['league']."</p>";
}
?>
	</div>
	<div class="col-12">
		<table border="1">
			<tr>
			    <th>屆別</th>
				<th>球隊</th>
				<th>PTS</th>
				<th>FGM</th>
				<th>FGA</th>
				<th>FG%</th>
				<th>3PM</th>
				<th>3PA</th>
				<th>3P%</th>
				<th>FTM</th>
				<th>FTA</th>
				<th>FT%</th>
				<th>OFF</th>
				<th>DEF</th>
				<th>AST</th>
				<th>STL</th>
				<th>BLK</th>
				<th>TO</th>
				<th>PF</th>
				<th>G</th>
				<th>RPG</th>
				<th>APG</th>
				<th>SPG</th>
				<th>BPG</th>
				<th>PPG</th>
			</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['Farewell']."</td>";
    echo "<td>".$row['t1']."</td>";
	echo "<td>".$row['T1member1pts']."</td>";
	echo "<td>".$row['T1member1fgm']."</td>";
	echo "<td>".$row['T1member1fga']."</td>";
	echo "<td>".$row['T1member1fg%']."</td>";
	echo "<td>".$row['T1member13pm']."</td>";
	echo "<td>".$row['T1member13pa']."</td>";
    echo "<td>".$row['T1member13p%']."</td>";
    echo "<td>".$row['T1member1ftm']."</td>";
	echo "<td>".$row['T1member1fta']."</td>";
	echo "<td>".$row['T1member1ft%']."</td>";
	echo "<td>".$row['T1member1off']."</td>";
	echo "<td>".$row['T1member1def']."</td>";
	echo "<td>".$row['T1member1ast']."</td>";
	echo "<td>".$row['T1member1stl']."</td>";
	echo "<td>".$row['T1member1blk']."</td>";
	echo "<td>".$row['T1member1to']."</td>";
	echo "<td>".$row['T1member1pf']."</td>";
	echo "<td>".$row['T1member1g']."</td>";
	echo "<td>".$row['T1member1rpg']."</td>";
	echo "<td>".$row['T1member1apg']."</td>";
	echo "<td>".$row['T1member1spg']."</td>";
	echo "<td>".$row['T1member1bpg']."</td>";
	echo "<td>".$row['T1member1ppg']."</td>";
    echo "</tr>";
	echo "<tr>";
    echo "<td>".$row['none']."</td>";
    echo "<td>".$row['T1member1total']."</td>";
	echo "<td>".$row['T1member1totalpts']."</td>";
	echo "<td>".$row['T1member1totalfgm']."</td>";
	echo "<td>".$row['T1member1totalfga']."</td>";
	echo "<td>".$row['T1member1totalfg%']."</td>";
	echo "<td>".$row['T1member1total3pm']."</td>";
	echo "<td>".$row['T1member1total3pa']."</td>";
    echo "<td>".$row['T1member1total3p%']."</td>";
    echo "<td>".$row['T1member1totalftm']."</td>";
	echo "<td>".$row['T1member1totalfta']."</td>";
	echo "<td>".$row['T1member1totalft%']."</td>";
	echo "<td>".$row['T1member1totaloff']."</td>";
	echo "<td>".$row['T1member1totaldef']."</td>";
	echo "<td>".$row['T1member1totalreb']."</td>";
	echo "<td>".$row['T1member1totalast']."</td>";
	echo "<td>".$row['T1member1totalstl']."</td>";
	echo "<td>".$row['T1member1totalblk']."</td>";
	echo "<td>".$row['T1member1totalto']."</td>";
	echo "<td>".$row['T1member1totalpf']."</td>";	
	echo "</tr>";
}
?>
		</table>
		</div>
</section>
<section>
	<div class="col-12">
		<table border="1">
			<tr>
			    <th>日期</th>
				<th>主隊-淺色球衣</th>
				<th>結果</th>
				<th>客隊-深色球衣</th>
				<th>時間</th>
			</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['dateforg1']."</td>";
    echo "<td>".$row['t1']."</td>";
	echo "<td>".$row['g1result']."</td>";
	echo "<td>".$row['t2']."</td>";
	echo "<td>".$row['g1time']."</td>";
    echo "</tr>";
}
?>
</table>
</div>
</section>
</body>
</html>