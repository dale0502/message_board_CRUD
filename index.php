<?php include("db.php");
$sql = "SELECT * FROM `messages` ORDER BY `id` ASC";
$result = $connect->query($sql);
$total_records = mysqli_num_rows($result); //取得資料筆數
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>留言板</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="main">
            <h2>留言列表</h2>
            <div class="d-flex justify-content-between">
                <div>
                    <p>目前資料筆數：<?php echo $total_records; ?>， </p>
                </div>
                <div>
                    <a class="btn btn-primary mb-3" href="create.php">新增留言</a>
                </div>

            </div>

            <table>
                <tr>
                    <th>編號</th>
                    <th>留言者</th>
                    <th>內容</th>
                    <th>時間</th>
                    <th>編輯</th>

                </tr>
                <?php
                while ($row = $result->fetch_object()) {
                    echo "<tr>";
                    echo "<td>" . $row->id . "</td>";
                    echo "<td>" . $row->username . "</td>";
                    echo "<td>" . $row->content . "</td>";
                    echo "<td>" . $row->reg_date . "</td>";
                    echo "<td><a class=\"btn btn-primary ml-2 mr-2\" href='update.php?id=" . $row->id . "'>修改</a>";

                    echo "<a class=\"btn btn-primary  mr-2\" href='delete.php?id=" . $row->id . "'>刪除</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>

    </div>


</body>

</html>