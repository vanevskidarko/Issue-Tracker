<?php
session_start();
include 'config/database.php';

if(!isset($_SESSION['firstname'])){
	header('Location: /test/');
}

$id = $_POST['project_id'];
if(isset($id)){
    $sql = "DELETE from projects WHERE id='$id'";
    $sqlQuery = mysqli_query($conn, $sql);
}

?>