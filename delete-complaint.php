<?php
session_start();
include 'config/database.php';

$id = $_POST['complain_id'];

$sql = "DELETE from complaints WHERE id='$id'";
$sqlQuery = mysqli_query($conn, $sql);

?>