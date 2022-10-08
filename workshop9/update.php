<?php include "connect.php";
   
    $member_username = $_POST["username"];
    $member_password = $_POST["password"];
    $member_name = $_POST["name"];
    $member_address = $_POST["address"];
    $member_mobile = $_POST["mobile"];
    $member_email = $_POST["email"];
    
    
    $sql = "UPDATE member 
    SET password = '$member_password', 
        name = '$member_name', 
        address = '$member_address', 
        mobile = '$member_mobile', 
        email = '$member_email' 
    WHERE username = '$member_username' ";
    $pdo->exec($sql);
    header("location: workshop4.php?username=".$member_username);
    
?>