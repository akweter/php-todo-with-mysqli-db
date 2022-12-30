<?php
    require_once('./Database/connection.php');

    if($_GET['task_id']){
        $task_id = $_GET['task_id'];

        $conn->query("DELETE FROM `task1` WHERE `task_id`=$task_id") or die(mysqli_errno($conn));
        header('location:./index.php');
    }
?>
