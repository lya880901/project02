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
		<tr>
		    <td>2019/12/08</td>
		    <td>TEAMPOWER運動聯盟</td>
		    <td>1</td>
		</tr>
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
		<tr>
		    <td>EX1</td>
		    <td>SCORE1</td>
		    <td>SCORE2</td>
		    <td>SCORE3</td>
		    <td>SCORE4</td>
		    <td>0</td>
		    <td>TOTAL</td>
		    <td>結果</td>					
		</tr>
		<tr>
		    <td>EX2</td>
		    <td>SCORE1</td>
		    <td>SCORE2</td>
		    <td>SCORE3</td>
		    <td>SCORE4</td>
		    <td>0</td>
		    <td>TOTAL</td>
		    <td>結果</td>					
		</tr>
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
		<tr>
		    <td>1</td>
		    <td>M1</td>
		    <td>NUM1</td>
		    <td>NUM2</td>
		    <td>NUM3</td>
		    <td>%</td>
		    <td>NUM4</td>
		    <td>NUM5</td>
		    <td>%</td>
		    <td>NUM6</td>
		    <td>NUM7</td>
		    <td>%</td>
		    <td>NUM8</td>
		    <td>NUM9</td>
		    <td>NUM10</td>
		    <td>NUM11</td>
		    <td>NUM12</td>
		    <td>NUM13</td>
		    <td>NUM14</td>
		    <td>NUM15</td>																
		</tr>
		<tr>
		    <td>無</td>
		    <td>總計</td>
		    <td>NUM1</td>
		    <td>NUM2</td>
		    <td>NUM3</td>
		    <td>%</td>
		    <td>NUM4</td>
		    <td>NUM5</td>
		    <td>%</td>
		    <td>NUM6</td>
		    <td>NUM7</td>
		    <td>%</td>
		    <td>NUM8</td>
		    <td>NUM9</td>
		    <td>NUM10</td>
		    <td>NUM11</td>
		    <td>NUM12</td>
		    <td>NUM13</td>
		    <td>NUM14</td>
		    <td>NUM15</td>																
		</tr>
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
		<tr>
		    <td>1</td>
		    <td>M1</td>
		    <td>NUM1</td>
		    <td>NUM2</td>
		    <td>NUM3</td>
		    <td>%</td>
		    <td>NUM4</td>
		    <td>NUM5</td>
		    <td>%</td>
		    <td>NUM6</td>
		    <td>NUM7</td>
		    <td>%</td>
		    <td>NUM8</td>
		    <td>NUM9</td>
		    <td>NUM10</td>
		    <td>NUM11</td>
		    <td>NUM12</td>
		    <td>NUM13</td>
		    <td>NUM14</td>
		    <td>NUM15</td>																
		</tr>
		<tr>
		    <td>無</td>
		    <td>總計</td>
		    <td>NUM1</td>
		    <td>NUM2</td>
		    <td>NUM3</td>
		    <td>%</td>
		    <td>NUM4</td>
		    <td>NUM5</td>
		    <td>%</td>
		    <td>NUM6</td>
		    <td>NUM7</td>
		    <td>%</td>
		    <td>NUM8</td>
		    <td>NUM9</td>
		    <td>NUM10</td>
		    <td>NUM11</td>
		    <td>NUM12</td>
		    <td>NUM13</td>
		    <td>NUM14</td>
		    <td>NUM15</td>																
		</tr>
	</table>
</div>
</section>
</body>
</html>