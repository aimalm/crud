<?php require 'db-connection.php' ?>
<?php require 'add.php'; ?>
<?php require 'delete.php'; ?>
<?php require 'edit.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ToDo List</title>
</head>
<body>
    <header>
        <div class="container">
            <h2>ToDO List</h2>
            <p>Please type the task name and responsible person name</p>
        </div>
    </header>

    <div class="container"> 
        <div class="mb-3">
            <form method="POST" action="">
                <input type="text" class="form-control" id="InputName" name="inputName" placeholder="Type Name"> <br>
                <input type="text" class="form-control" id="InputTask" name="inputTask" placeholder="Type a task">
                <button type="submit" class="btn btn-primary" name="addBtn">Add</button>
                <div>
                    <?php  $recordMsg ?>
                </div>
            </form>
        </div>
    </div> 

    <div class="container">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Task</th>
            <th scope="col">Posted date</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
          
    <?php 
        $sql = "SELECT id, name, task, date FROM data";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) { ?>
            <tr id="edit">
            <td ><?php echo $row["name"] ?></td>
            <td><?php echo $row["task"] ?></td>
            <td ><?php echo $row["date"] ?></td>
            <td width="10%"> <a href="index.php?edit=<?php echo $row['id']; ?>"  class="btn btn-primary"> Edit </a></td>
            <td width="8%"> <a href="index.php?delete=<?php echo $row['id']; ?>"  class="btn btn-danger editBtn"> Delete </a></td>
            </tr>
        <?php
        }
        } else {
        echo "0 results";
        }
        mysqli_close($conn);
     ?>

    </tbody>
    </table>
    </div>
    <script src="js.js"></script>
</body>
</html>
