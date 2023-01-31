    <?php
        include_once('./Database/connection.php');

        if(isset($_POST['add']) && ($_POST['task'] != " ")){
            
                $task = $_POST['task'];

                $Data = $conn->query("INSERT INTO `task1` (`task_id`, `task`, `status`)  VALUES(' ', '$task', ' ') ");

                //redirect back home
                header('location:./index.php');
            }
            else{
            echo('Error adding new task'); 
        }
    ?>
