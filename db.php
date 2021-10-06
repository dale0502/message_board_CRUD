<?php
$host = '127.0.0.1';
$user = 'root';
$passwd = '';
$database = 'demo_db';

// 實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
$connect = new mysqli($host, $user, $passwd, $database);
if (mysqli_connect_errno($connect)) {
    die("連線失敗: " . mysqli_connect_errno());
}
// echo "連線成功";


//create table
// $sql = "CREATE TABLE messages (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(30) NOT NULL,
//     content VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

//     if ($connect->query($sql) === TRUE) {
//       echo "Table Messages created successfully";
//     } else {
//       echo "Error creating table: " . $connect->error;
//     }


