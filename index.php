<?php
    include("connMySQL.php");
    $sql_query = "SELECT * FROM data ORDER BY ID ASC";
    $result = mysqli_query($db_link,$sql_query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>統計</title>
</head>
<body>
<h1 align = "center">籃球</h1>

<table border="1" align = "center">
    <tr>
        <th>ID</th>
        <th>背號</th>
        <th>得分</th>
    </tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['ID']."</td>";
    echo "<td>".$row['number']."</td>";
    echo "<td>".$row['score']."</td>";
    echo "<td><a href='update.php?id=".$row['ID']."'>修改</a> ";
    echo "<a href='delete.php?id=".$row['ID']."'>刪除</a></td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>