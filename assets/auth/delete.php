<?php
    require "connect.php";
    $receveId = $_REQUEST['id'];
    $deleteQuery = "delete from user_info where id = $receveId";
    $deleteResult = mysqli_query($connection, $deleteQuery);
    if ($deleteQuery) {
        header("location: showData.php");
    }
    