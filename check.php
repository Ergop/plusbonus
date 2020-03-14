<?php
$scode= ($_POST['scode']);
$nioc = 1;


$mysql= new mysqli('localhost','root','','datauser');

$result = $mysql->query("SELECT * FROM users WHERE `scode` = '$scode'");
$user = $result->fetch_assoc();
$mysql->close;


if(count($user) ==0){
    echo "Проверьте код";
	exit();
}else{
    $id = $user['id'];
    $email = $user['email'];
    $phone = $user['phone'];
    $scode = $user['scode'];
    $mysql->query("REPLACE INTO users VALUES('$id','$email','$phone','$scode','1')");

    
    setcookie(`user`, $user[`email`], time()+3600);
    header('Location: index.php');
    $mysql->close;
    exit();

}
?>