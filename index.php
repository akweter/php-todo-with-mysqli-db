
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Todo | Track Your Activies</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://github.com/john-BAPTIS?tab=repositories"></a>
            </div>
        </nav>
    </header>

    <main class="container">
            <h1 class="text-primary">Get on top of affairs</h1>
            <hr style="border-top:2px dotted #ccc;"/>
                <form action="add.php" method="post">
                        <div class="form-group" style="display:flex;flex-direction:row;">
                            <label for="taskLabel"><strong>Whats next?</strong></label>
                            <input type="text" name="task" class="form-control" required id="taskLabel">
                            <button type="submit" name="add" class="btn btn-primary" ><div class="fa fa-plus">Add</div></button>
                        </div>
                </form>
                </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task</th>
                            <th>Status</th>
                            <th>Modify</th>
                            <th>Completed?</th>
                            <th>End</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                    //require database access.
                                    require './Database/connection.php';

                                    //Fetch data from the database.
                                    $Data = $conn->query('SELECT * FROM `task1` ORDER BY `task_id` ASC ');
                                    $count = 1;

                                    while ($Val = $Data->fetch_array()) {
                                        echo "<tr>";
                                                echo "<td>".$count++. "</td>";
                                                echo "<td>".$Val['task']."</td>";
                                                echo "<td>".$Val['status']."</td>";

                                                    if ($Val['status'] != 'Done') {
                                                        echo ("<td><a href='./edit.php?task_id=$Val[task_id]' class='btn btn-warning'>Edit</a></td>
                                                                    <td><a href='./status.php?task_id=$Val[task_id]' class='btn btn-success'>Yes</a></td>
                                                                    <td> <a href='./delete.php?task_id=$Val[task_id]' class='btn btn-danger'>Del</a></td>");
                                                    }
                                                    elseif (($Val['status'] == 'Done')) {
                                                    echo ("<td></td>
                                                                <td></td>
                                                                <td> <a href='./delete.php?task_id=$Val[task_id]' class='btn btn-danger'>Del</a></td>");
                                                }
                                        echo "</tr>";
                                    }

                                    

                            ?>
                    </tbody>
                </table>
            </div>
    </main>


    <footer>
            <div class="row">
                <div class="col col-md-2"></div>
                <div style="display:flex; flex-direction:row;" class="col col-md-8">
                    <a href="https://github.com/john-BAPTIS?tab=repositories" target="_blank"><img style="border-radius: 50%; padding:50% 0" width="50px" height=}50ox" src="https://avatars.githubusercontent.com/u/71665600?v=4" alt="Logo"></a>
                    <p style=" padding:15px 0 15px 10px;">Copyright  © 2023 (Angel Development Team). <strong>Powered by: <a style="text-decoration:none" href="mailto:jamesakweter@gmail.com">Akweter</a></strong></p>
                </div>
                <div class="col col-md-2"></div>
            </div>
        </footer>
</body>
</html>
