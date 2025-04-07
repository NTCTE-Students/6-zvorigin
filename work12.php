<?php
    $log_file = 'log.txt';
    $message = "Произвольное сообщение";
    file_put_contents($log_file, date('Y-m-d H:i:s') . ": " . $message . PHP_EOL, FILE_APPEND);
    ?>