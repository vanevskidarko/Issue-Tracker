<?php
session_start();
include 'config/database.php';

$id = $_POST['user_id'];
if(isset($id)){
    $sql = "DELETE from users WHERE id='$id'";
    
    $sqlQuery = mysqli_query($conn, $sql);
}
?>