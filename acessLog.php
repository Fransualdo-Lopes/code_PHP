<?php
// Caminho para o arquivo de log
$logFile = '/var/www/html/arquivos/access.log';

// Obter informações da requisição
$remoteIP = $_SERVER['REMOTE_ADDR'];
$requestURI = $_SERVER['REQUEST_URI'];
$timestamp = date('Y-m-d H:i:s');
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Formatar a linha de log
$logLine = "$timestamp - $remoteIP - $requestURI - $userAgent" . PHP_EOL;

// Adicionar a linha ao arquivo de log
file_put_contents($logFile, $logLine, FILE_APPEND | LOCK_EX);
