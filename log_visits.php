<?php
$logFile = '/var/www/html/visits.log';

function logVisit($message) {
    global $logFile;
    $formattedMessage = '[' . date('Y-m-d H:i:s') . '] ' . $message . PHP_EOL;
    // Débogage
    echo "Enregistrement dans le fichier de log : $formattedMessage"; // Affiche le message pour le débogage
    file_put_contents($logFile, $formattedMessage, FILE_APPEND | LOCK_EX);
}
?>

