
<?php
session_start();
include "config.php";
date_default_timezone_set("Asia/Bangkok");
$today = date("Y-m-d");
if ($_POST['action'] == "addTask") { 
    $val = $con->real_escape_string($_POST['val']);
    $sql = "INSERT INTO `tb_task`(`task_detail`) VALUES ('$val')";
    $qr = mysqli_query($con, $sql) or die('error. ' . mysqli_error($con));
    if ($qr) {
        success();
    } else {
        error();
    }
}else if($_POST['action'] == "getdata"){
    $sql = "SELECT * FROM tb_task";
    $qr = mysqli_query($con, $sql) or die('error. ' . mysqli_error($con));
    $arr = [];
    while ($row = mysqli_fetch_assoc($qr)) {
        array_push($arr, $row);
    }
    if ($qr) {
        success($arr);
    } else {
        error();
    }
}else if($_POST['action'] == "taskSuccess"){
    $val = $con->real_escape_string($_POST['id']);
    $sql = "UPDATE tb_task SET task_status = '2' WHERE task_id ='$val'";
    $qr = mysqli_query($con, $sql) or die('error. ' . mysqli_error($con));
    if ($qr) {
        success();
    } else {
        error();
    }
}else if($_POST['action'] == "editTask"){
    $id = $con->real_escape_string($_POST['id']);
    $val = $con->real_escape_string($_POST['val']);
    $sql = "UPDATE tb_task SET task_detail = '$val' WHERE task_id ='$id'";
    $qr = mysqli_query($con, $sql) or die('error. ' . mysqli_error($con));
    if ($qr) {
        success();
    } else {
        error();
    }
}else if($_POST['action'] == "taskRemove"){
    $id = $con->real_escape_string($_POST['id']);
    $sql = "DELETE FROM tb_task WHERE task_id ='$id'";
    $qr = mysqli_query($con, $sql) or die('error. ' . mysqli_error($con));
    if ($qr) {
        success();
    } else {
        error();
    }
}

?>