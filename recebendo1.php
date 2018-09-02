
<?php

$quant = $_GET['quant1'];



echo "Digite ".$quant." nomes para o cadastro<br><br>";
while ($quant > 0 ) {
    $num1 = 0;
    $num1++;
    echo "Nome".$num1."<input type=\"text\" none=\"nomes\"><br><br>";
    $quant--;
        
}


?>