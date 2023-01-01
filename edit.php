
<?php

//Post to DB
    require_once('./Database/connection.php');

    if(isset($_POST['Update']) && ($_POST['EditVal'] != "")){
        $newTask = $_POST['EditVal'];
    
        $conn->query("UPDATE `task1` SET `task_id`=NULL, `task`=`$newTask`,  `status`=NULL WHERE $id=task_id") or die(mysqli_errno($conn));

        //redirect back home
        header("location:./index.php");
    }
?> 

<?php
    //Get task id into the form
    $NewV = $_GET['task_id'];

    $Data = $conn->query("SELECT * FROM `task1` WHERE task_id=$NewV");

    while ($Val = $Data->fetch_array()) {
        $task = $Val['task'];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Edit Details</title>
</head>
<body>
    
    <main class="container mt-5">
            <h1 class="text-primary">Update List</h1>
            <hr style="border-top:2px dotted #ccc;"/>
                <form action="" method="post">
                        <div class="form-group" style="display:flex;flex-direction:row;">
                            <input type="text" value="<?= $task; ?>" name="EditVal" class="form-control" />
                            <button type="submit" name="Update" class="btn btn-primary" >Update</button>
                        </div>
                </form>
                </p>
            </div>
    </main>

</body>
</html>
