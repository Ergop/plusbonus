<?php
$ID = ($_POST['number']);
$mysql= new mysqli('localhost','root','','datauser');
$loto = $mysql->query("SELECT * FROM promodata WHERE `ID` = '$ID'");
$resultpromo = $loto->fetch_assoc();
$mysql->close;

if(count($resultpromo) ==0){
        $i = 0;
    while ($i <= $ID):
        $r = rand(1,1000);
        $mysql= new mysqli('localhost','root','','datauser');
        $result = $mysql->query("SELECT * FROM promodata WHERE `promocode` = '$r'");
        $iffer = $result->fetch_assoc();
        $mysql->close;
            while(count($iffer) ==0):
                $mysql= new mysqli('localhost','root','','datauser');
                $mysql->query("INSERT INTO `promodata`(`promocode`) VALUES ('$r')");
                $mysql->close;
                {if(count($iffer) !=0)break;}

            endwhile; 
         $i++;
    endwhile;
}else{
    echo "еще есть промокоды";
    exit();
}




?>