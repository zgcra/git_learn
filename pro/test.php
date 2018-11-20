<?php
$servername = "localhost";
$username = "cr";
$password = "973833486";
$dbname = "cr";
$aname=$_POST["name"];
$aage=$_POST["age"];
$asex=$_POST["sex"];
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "INSERT INTO people (name, age, sex)
VALUES ('{$aname}', '{$aage}','{$asex}')";
 
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>