<?php

class Log {

    private $fileLog;

    function __construct($path, $type, $message)
    {
        $this->fileLog = fopen($path, "a");
        $date = new DateTime();
        fputs($this->fileLog, "[".$type."][".$date->format("d-m-Y H:i:s")."]: ". $message . "\n");
        fclose($this->fileLog);
    }
    
}

$log = new Log("log.txt","E", "Ha habido un error inesperado");
$log = new Log("log.txt","I", "Todo correcto");
$log = new Log("log.txt","W", "Ha habido un warning");

?>
