<?php
session_start();
include 'config/database.php';


// var_dump($_POST);

$id = $_POST['id'];
$contact = $_POST['contact'];
$complaint = $_POST['complaint'];

        $sql = "UPDATE  `complaints` SET
         contact='$contact',
         complain_comment = '$complaint'
         WHERE id='$id'";
        $sqlQuery = mysqli_query($conn, $sql);        


?>