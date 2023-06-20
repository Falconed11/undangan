<?php
function selectKomentar()
{
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $db         = "undangan";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    $sql = "SELECT * FROM komentar ORDER BY tanggal DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    return $result;
}
