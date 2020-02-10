<?php 
    if (isset($_POST["value"])) {
        $servername = "localhost";
        $user = "root";
        $pw = "";
        $db = "offisets";
        #Connect to Server
        $con = new Mysqli($servername, $user, $pw, $db) or die(Mysqli_errno());

        $value =htmlspecialchars(stripslashes(trim($_POST["value"])));

        $sql = $con->prepare("INSERT INTO tableName (value) VALUES ('$value')");
        $result = $sql->execute();
        if ($result) {
            echo "Success";
        }
        else {
            echo "Failed";
        }
        $con->close();
    } 
    else {
       echo "Not found";
    } 