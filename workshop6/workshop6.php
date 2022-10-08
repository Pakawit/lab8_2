<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <script>
        function confirmDelete(username) {
            var ans = confirm("ต้องการลบผู้ใช้งาน" + username);
            if (ans == true)
                document.location = "delete.php?username=" + username;
        }
    </script>
</head>
</head>
<body>
    <?php

     $stmt = $pdo->prepare("SELECT * FROM member");
     $stmt->execute();

     while ($row = $stmt->fetch()) {
       echo "ชื่อสมาชิก:". $row ["name"] . "<br>";
       echo "ที่อยู่:" . $row ["address"] . "<br>";
       echo "อีเมล:".$row["email"]."<br>";
       echo "<a href='#' onclick= confirmDelete('" . $row ["username"] ."')>ลบ</a>";
       echo "<hr>\n";
     } ?>
   
</body>
</html>