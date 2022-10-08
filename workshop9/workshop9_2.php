<?php include "connect.php" ?>
<?php
    $sql = $pdo->prepare("SELECT * FROM  member WHERE username=?");
    $sql->bindParam(1,$_GET["username"]);
    $sql->execute();
    $row = $sql->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="update.php" method="post">
        username: <input type="text" name="username" value="<?=$row["username"]?>"><br>
        password: <input type="text" name="password" value="<?=$row["password"]?>"><br>
        name: <input type="text" name="name" value="<?=$row["name"]?>"><br>
        Address: <textarea name="address" rows="3" cols="40" ><?=$row["address"]?></textarea><br>
        moblie: <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
        email: <input type="text" name="email" value="<?=$row["email"]?>"><br>
        <input type="submit" value="submit">
    </form> 
</body>
</html>