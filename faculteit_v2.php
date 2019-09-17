<?php
echo "Van welk getal wil je de faculteit weten?\r\n";
$faculteit = readline();
$num = 1;
$i = 1;
while ($i <= $faculteit) {
	$num = $num*$i;
	$i++;
}
echo "De faculteit van $faculteit is $num\r\n"
?>