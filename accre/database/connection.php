<?php

    date_default_timezone_set("Asia/Manila");

    $id = "localhost";
    $username = "root";
    $password = "";
    $database = "accre";

    $conn = mysqli_connect($id, $username, $password, $database);

    if (!$conn) {
        die("Cannot connect to the internet. Error: ".mysqli_connect_error());
    }

?>