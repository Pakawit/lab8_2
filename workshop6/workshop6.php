<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php

     $stmt = $pdo->prepare("SELECT * FROM member");
     $stmt->execute();

     while ($row = $stmt->fetch()) {
       echo "ชื่อสมาชิก:". $row ["name"] . "<br>";
       echo "ที่อยู่:" . $row ["address"] . "<br>";
       echo "อีเมล:".$row["email"]."<br>";
       echo "<a href=delete.php?username=".$row["username"].">ลบ</a>";
       echo "<hr>\n";
     } ?>
   
</body>
</html>