<?php
$logFile = '/var/www/html/visits.log';
$message = '[' . date('Y-m-d H:i:s') . '] Test de journalisation depuis PHP' . PHP_EOL;
file_put_contents($logFile, $message, FILE_APPEND | LOCK_EX);
echo "Enregistrement effectué !";
?>

