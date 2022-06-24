<?php 
session_start();

require('../config/database.php');


$today = date("Y-m-d H:i:s");  
// var_dump($today);

// die;

    if(isset($_POST['submit'])){
        $project_id = $_POST['project_id'];
        $contact     = $_POST['contact'];
        $complain_comment    =$_POST['complain_comment'];
        $user_id    =$_SESSION['id'];
        $type_comm_id = $_POST['type_comm_id'];

        $sql = "INSERT INTO `complaints` (project_id, contact, complain_comment, user_id, type_comm_id,`complain_date`)
        VALUES ('$project_id','$contact','$complain_comment','$user_id','$type_comm_id','$today')";
        if(mysqli_query($conn, $sql)){
           header("Location: ../add_complaint.php");
        };
    }

?>