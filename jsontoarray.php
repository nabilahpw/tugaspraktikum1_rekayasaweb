<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj, true);

// Mengakses nilai array
echo $obj['Peter'];
echo $obj['Ben'];
echo $obj['Joe'];
?>
