<?php
session_start();
include 'config/database.php';

$id = $_POST['id'];
$comment = $_POST['comment'];
$date = $_POST['date'];
$complaint_id = $_POST['complaint_id'];
$od_vreme = $_POST['od_vreme'];
$do_vreme = $_POST['do_vreme'];



    if(isset($id)){
        $sql = "UPDATE  `tasks` SET comment='$comment',complaint_id = '$complaint_id',
        od_vreme='$od_vreme',do_vreme='$do_vreme' WHERE id='$id'";
        $sqlQuery = mysqli_query($conn, $sql);        
    }


?>