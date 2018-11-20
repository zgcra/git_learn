<?php
$servername = "localhost";
$username = "cr";
$password = "973833486";
$dbname = "cr";
$gname=$_POST["gname"];
 
// 创建连接
$con=mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    echo "连接失败: " . mysqli_connect_error();
} 

$result = mysqli_query($con,"SELECT * FROM people WHERE name='$gname'");
while($row=mysqli_fetch_array($result)) {
      echo "id: " . $row["id"]. "---name: " . $row["name"]. "---age:" . $row["age"]. "---sex:".$row["sex"]."<br>";
}
?>