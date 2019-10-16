<?php
	$userId = $_GET['id'];

    include ('connMysql.php');

    $sql_query = "DELETE FROM data WHERE ID = $userId";

    mysqli_query($db_link,$sql_query);

    $db_link->close();

    header("Location: index.php");
?>