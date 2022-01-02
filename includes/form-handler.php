<?php

include_once 'config.php';

$id = mysqli_real_escape_string($conn, $_POST['id']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$status = mysqli_real_escape_string($conn, $_POST['status']);
$priority = mysqli_real_escape_string($conn, $_POST['priority']);

if (!empty($id)) {
    //updating the table
    $sql = "UPDATE tasks SET title='$title', description='$description', status='$status', priority='$priority' WHERE id=$id ";
    $result = mysqli_query($conn, $sql);
    header("Location: ../index.php?update=success");
} else {
    $sql = "INSERT INTO tasks (title, description, status, priority) VALUES( '$title', '$description', '$status', '$priority' )";
    $result = mysqli_query($conn, $sql);
    header("Location: ../index.php?create=success");
}
