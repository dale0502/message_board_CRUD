<?php
include("db.php");
$id = $_GET['id'];
// var_dump($id);
$sql_getData = "SELECT * FROM `messages`  WHERE`id` = $id";
$result = $connect->query($sql_getData);
$row = $result->fetch_object();
// var_dump($row);
$username = $row->username;
$content = $row->content;

?>


<?php
if (isset($_POST["action"]) && ($_POST["action"] == "update")) {
    //取得請求資料
    $name = $_POST['name'];
    $content = $_POST['content'];
    $sql = "UPDATE `messages` SET `username` = '$name' , `content` = '$content' WHERE id = $id;";
    $result = $connect->query($sql);
    // var_dump($sql);
    if ($result) {
        $url = 'http://localhost/demo_project/index.php';
        echo "<script>location.href=' $url '</script>";
        exit();
    } else
        echo "更新資料失敗";
}
?>

<html>

<head>
    <meta charset="UTF-8" />
    <title>編輯留言</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <h2>修改留言</h2>
            <hr>
            <div class="form-group">
                <input type="hidden" name="action" value="update">
                <label for="name">留言者</label>
                <input type="text" class="form-control" name="name" id="name" value=" <?php echo $username ?>"><br>
            </div>
            <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" class="form-control" id="content" cols="30" rows="10"> <?php echo $content ?></textarea><br>
            </div>
            <button class="btn btn-primary" type="submit">修改留言</button>
        </form>
    </div>
</body>

</html>