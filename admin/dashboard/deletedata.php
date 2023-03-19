<?php
include 'conn.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $table = $_GET['table'];
    $query = "DELETE FROM $table WHERE id = '$id'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        header("refresh:0,url=$table.php");
    } else {
        echo "something problem";
        header("refresh:0,url=$table.php");
    }
}
