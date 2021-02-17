<?php 

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        {
            $sql = "DELETE FROM data WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
            $recordMsg = "<div> <h6> Task Has been Delete </h6> <div>";
            header("Refresh: 3; index.php");

            } else {
            $recordMsg = " <div> <h6> Something went wrong. The task has not been Deleted. </h6> </div> <br>";
            echo "Error deleting record: " . mysqli_error($conn);
                header("Refresh: 4; index.php");


            }
            echo $recordMsg;  
        }

    }

 
?>