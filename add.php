<?php 
    if(isset($_POST['addBtn'])){
        $inputName = $_POST['inputName'];
        $inputTask = $_POST['inputTask'];
        {
            $sql = "INSERT INTO data (name, task)
            VALUES ('$inputName' , '$inputTask')";

            if ($conn->query($sql) === TRUE) {
            $recordMsg = "<div> <h6> New record created successfully </h6> <div>";
            header("Refresh: 3; index.php");

            } else {
            $recordMsg = " <div> <h6> Something went wrong. The task has not been recorded. </h6> </div>";
            }
            echo $recordMsg;    
        }
        //$conn->close();
    }

    //header("Location: index.php");


?>