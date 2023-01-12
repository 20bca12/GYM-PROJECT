<?php
    $conn  = mysqli_connect("localhost", "root", "", "gym_db");
    if ($conn) {
        echo "<script>alert(`Connection successful!`)</script>";
    }
?>