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
	<link rel="stylesheet" type="text/css" href="styleforteam.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-12">
<header>
	<h1>T1 vs T2</h1>
</header>
</div>
<section>
<div class="col-12">
	<h2>細節</h2>
</div>
<div class="col-12">
	<table border="1">
	    <tr>
	        <th>日期</th>
			<th>聯盟</th>
			<th>屆別</th>
	    </tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['date']."</td>";
    echo "<td>".$row['league']."</td>";
	echo "<td>".$row['Farewell']."</td>";
    echo "</tr>";
}
?>
	</table>
</div>
</section>
<section>
<div class="col-12">
	<h2>結果</h2>
</div>
<div class="col-12">
	<table border="1">
	    <tr>
	        <th>球隊</th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>OT</th>
			<th>T</th>
			<th>結果</th>
	    </tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['team1']."</td>";
    echo "<td>".$row['T1S1']."</td>";
	echo "<td>".$row['T1S2']."</td>";
	echo "<td>".$row['T1S3']."</td>";
	echo "<td>".$row['T1S4']."</td>";
	echo "<td>".$row['T1OT']."</td>";
	echo "<td>".$row['T1TOTAL']."</td>";
	echo "<td>".$row['T1RESULT']."</td>";
    echo "</tr>";
	echo "<tr>";
    echo "<td>".$row['team2']."</td>";
    echo "<td>".$row['T2S1']."</td>";
	echo "<td>".$row['T2S2']."</td>";
	echo "<td>".$row['T2S3']."</td>";
	echo "<td>".$row['T2S4']."</td>";
	echo "<td>".$row['T2OT']."</td>";
	echo "<td>".$row['T2TOTAL']."</td>";
	echo "<td>".$row['T2RESULT']."</td>";
	echo "</tr>";
}
?>
	</table>
</div>
</section>
<section>
<div class="col-12">
	<h2>t1</h2>
</div>
<div class="col-12">
	<table border="1">
		<tr>
		    <th>#</th>
			<th>球員</th>
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
			<th>REB</th>
			<th>AST</th>
			<th>STL</th>
			<th>BLK</th>
			<th>TO</th>
			<th>PF</th>
		</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['#1']."</td>";
    echo "<td>".$row['T1name']."</td>";
	echo "<td>".$row['T1pts']."</td>";
	echo "<td>".$row['T1fgm']."</td>";
	echo "<td>".$row['T1fga']."</td>";
	echo "<td>".$row['T1fg%']."</td>";
	echo "<td>".$row['T13pm']."</td>";
	echo "<td>".$row['T13pa']."</td>";
    echo "<td>".$row['T13p%']."</td>";
    echo "<td>".$row['T1ftm']."</td>";
	echo "<td>".$row['T1fta']."</td>";
	echo "<td>".$row['T1ft%']."</td>";
	echo "<td>".$row['T1off']."</td>";
	echo "<td>".$row['T1def']."</td>";
	echo "<td>".$row['T1reb']."</td>";
	echo "<td>".$row['T1ast']."</td>";
	echo "<td>".$row['T1stl']."</td>";
	echo "<td>".$row['T1blk']."</td>";
	echo "<td>".$row['T1to']."</td>";
	echo "<td>".$row['T1pf']."</td>";
    echo "</tr>";
	echo "<tr>";
    echo "<td>".$row['none']."</td>";
    echo "<td>".$row['T1totaltotal']."</td>";
	echo "<td>".$row['T1totalpts']."</td>";
	echo "<td>".$row['T1totalfgm']."</td>";
	echo "<td>".$row['T1totalfga']."</td>";
	echo "<td>".$row['T1totalfg%']."</td>";
	echo "<td>".$row['T1total3pm']."</td>";
	echo "<td>".$row['T1total3pa']."</td>";
    echo "<td>".$row['T1total3p%']."</td>";
    echo "<td>".$row['T1totalftm']."</td>";
	echo "<td>".$row['T1totalfta']."</td>";
	echo "<td>".$row['T1totalft%']."</td>";
	echo "<td>".$row['T1totaloff']."</td>";
	echo "<td>".$row['T1totaldef']."</td>";
	echo "<td>".$row['T1totalreb']."</td>";
	echo "<td>".$row['T1totalast']."</td>";
	echo "<td>".$row['T1totalstl']."</td>";
	echo "<td>".$row['T1totalblk']."</td>";
	echo "<td>".$row['T1totalto']."</td>";
	echo "<td>".$row['T1totalpf']."</td>";	
	echo "</tr>";
}
?>
	</table>
</div>
</section>
<section>
<div class="col-12">
	<h2>t2</h2>
</div>
<div class="col-12">
	<table border="1">	
		<tr>
		    <th>#</th>
			<th>球員</th>
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
			<th>REB</th>
			<th>AST</th>
			<th>STL</th>
			<th>BLK</th>
			<th>TO</th>
			<th>PF</th>
		</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['#1']."</td>";
    echo "<td>".$row['T2name']."</td>";
	echo "<td>".$row['T2pts']."</td>";
	echo "<td>".$row['T2fgm']."</td>";
	echo "<td>".$row['T2fga']."</td>";
	echo "<td>".$row['T2fg%']."</td>";
	echo "<td>".$row['T23pm']."</td>";
	echo "<td>".$row['T23pa']."</td>";
    echo "<td>".$row['T23p%']."</td>";
    echo "<td>".$row['T2ftm']."</td>";
	echo "<td>".$row['T2fta']."</td>";
	echo "<td>".$row['T2ft%']."</td>";
	echo "<td>".$row['T2off']."</td>";
	echo "<td>".$row['T2def']."</td>";
	echo "<td>".$row['T2reb']."</td>";
	echo "<td>".$row['T2ast']."</td>";
	echo "<td>".$row['T2stl']."</td>";
	echo "<td>".$row['T2blk']."</td>";
	echo "<td>".$row['T2to']."</td>";
	echo "<td>".$row['T2pf']."</td>";
    echo "</tr>";
	echo "<tr>";
    echo "<td>".$row['none']."</td>";
    echo "<td>".$row['T2total']."</td>";
	echo "<td>".$row['T2pts']."</td>";
	echo "<td>".$row['T2fgm']."</td>";
	echo "<td>".$row['T2fga']."</td>";
	echo "<td>".$row['T2fg%']."</td>";
	echo "<td>".$row['T23pm']."</td>";
	echo "<td>".$row['T23pa']."</td>";
    echo "<td>".$row['T23p%']."</td>";
    echo "<td>".$row['T2ftm']."</td>";
	echo "<td>".$row['T2fta']."</td>";
	echo "<td>".$row['T2ft%']."</td>";
	echo "<td>".$row['T2off']."</td>";
	echo "<td>".$row['T2def']."</td>";
	echo "<td>".$row['T2reb']."</td>";
	echo "<td>".$row['T2ast']."</td>";
	echo "<td>".$row['T2stl']."</td>";
	echo "<td>".$row['T2blk']."</td>";
	echo "<td>".$row['T2to']."</td>";
	echo "<td>".$row['T2pf']."</td>";	
	echo "</tr>";
}
?>
	</table>
</div>
</section>
</body>
</html>