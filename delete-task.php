<?php
session_start();
include 'config/database.php';

$id = $_POST['task_id'];

    if(isset($id)){
        $sql = "DELETE from `tasks` WHERE id='$id'";
        $sqlQuery = mysqli_query($conn, $sql);        
    }


?>