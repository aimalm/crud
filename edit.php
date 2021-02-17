<div class="container edit_container " id="edit_container">
    <form method="POST" action="">
        <input type="text" class="form-control" id="changeName" name="changeName" placeholder="Type new Name"> <br>
        <input type="text" class="form-control" id="changeTask" name="changeTask" placeholder="Type a new task"> <br>
        <button type="submit" class="btn btn-primary" name="updateBtn" id="updateBtn">submit</button>
        <div>
            <?php  $recordMsg ?>
        </div>
    </form>
</div>



<?php 


 if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    
    if(isset($_POST['updateBtn'])){
        $changeName = $_POST['changeName'];
        $changeTask = $_POST['changeTask'];

    $sql = "UPDATE data SET name='$changeName', task='$changeTask' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("Location: index.php");

    } 
    else 
    {
    echo "Error updating record: " . mysqli_error($conn);
    header("Refresh: 4; index.php");
    }  

}
}


?>

