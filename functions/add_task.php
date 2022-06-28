<?php 
session_start();

require('../config/database.php');
$today = date("Y-m-d H:i:s");  


    if(isset($_POST['submit'])){
      //  print_r($_POST);die;
        $comment         =  $_POST['comment'];
        $complaint_id    =  $_POST['complaint_id'];
        $from            =  $_POST['from'];
        $until           =  $_POST['until'];

        $sql = "INSERT INTO `tasks` (comment,complaint_id,`date`,od_vreme,do_vreme)
        VALUES ('$comment','$complaint_id','$today','$from','$until')";
        if(mysqli_query($conn, $sql)){
           header("Location: ../add_task.php");
        };
    }

?>