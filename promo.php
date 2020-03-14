<?php
$to = ($_COOKIE['user']);
$subject = "Ваш подарок";
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$promocode =($_POST['promocode']) ;
$letterfirst = 'Текст 1 письма';
$lettersecond = 'Текст 2 письма';
$letterthird = 'Текст 3 письма';
$r = rand(1,3);

$mysql= new mysqli('localhost','root','','datauser');
$loto = $mysql->query("SELECT * FROM promodata WHERE `promocode` = '$promocode'");
$resultpromo = $loto->fetch_assoc();
$mysql->close;

if(count($resultpromo) ==0){
	echo "Сделать переход к вводу промо, промо нет";
	exit();
}else{
	$deletepromo =  ($resultpromo['ID']); 	
	if($r == 1){
		$message = $letterfirst;
     }else{
         if($r == 2){
			$message = $lettersecond;
		 }else{
			$message = $letterthird;
		 }
     }

	if(mail ($to, $subject, $message, $headers)){
	 $promor = rand(200,300);
     $mysql= new mysqli('localhost','root','','datauser');
     $mysql->query("DELETE FROM promodata WHERE `ID` = '$deletepromo'");
     $mysql->close;
	 header('Location: index.php');
	  exit();
	}else{
	  echo "Ошибка повторите попытку";
    }
    

}

?>