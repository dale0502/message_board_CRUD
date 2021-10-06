<?php
include("db.php");
$id = $_GET['id'];
// var_dump($id);
$sql = "DELETE FROM `messages` WHERE id = $id;";
$result = $connect->query($sql);
if ($result) {
    ob_start();
    echo "删除成功";
    header("Location: index.php");
    ob_end_flush();
} else {
    echo "删除失败";
}
