<?php

require('../config/database.php');



    if(isset($_POST['submit'])){
        $project_name = $_POST['project_name'];
        $company_name = $_POST['company_name'];  
        $sql = "INSERT INTO `projects` (project,company)
         VALUES ('$project_name','$company_name')";
         if(mysqli_query($conn, $sql)){
            header("Location: ../add-project.php");
         };
    } else{
        echo "Erorr";
    }
?>