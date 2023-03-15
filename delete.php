<?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "2802";
        $database = "inventory";
        $connection = new mysqli($servername,$username,$password,$database);
        $id = $_GET["id"];
        $sql = " delete from stock where SNO=".$id;
                    mysqli_query($connection,$sql);
                    header("Location: inventory.php");
                    exit(); 
    ?>