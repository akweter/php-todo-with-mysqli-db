<?php
    require_once('./Database/connection.php');

    if($_GET['task_id'] != ""){
        $Newtask = $_GET['task_id'];

        $conn->query("UPDATE `task1` SET `status` = 'Done'  WHERE `task_id` = $Newtask") or die(mysqli_errno($conn));

        header('location:./index.php');
    }
?>
