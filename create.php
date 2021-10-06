<?php

if (isset($_POST["action"]) && ($_POST["action"] == "add")) {
    include("db.php");
    //取得請求資料
    $name = $_POST['name'];
    $content = $_POST['content'];
    $sql = "INSERT INTO `messages` (`username`,`content`) VALUE ('$name', '$content');";
    $result = $connect->query($sql);
    header("Location:index.php");
}

?>

<html>

<head>
    <title>新增留言</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
</head>

<body>
    <div class="container">

        <form action="" method="post">
            <h2>新增留言頁面</h2>
            <hr>
            <div class="form-group">
                <input type="hidden" name="action" value="add">
                <label for="name">留言者</label>
                <input type="text" class="form-control" name="name" id="name"><br>
            </div>
            <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea><br>
            </div>
            <button class="btn btn-primary" type="submit">送出</button>
        </form>
    </div>

</body>

</html>