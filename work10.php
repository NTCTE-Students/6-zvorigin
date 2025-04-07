<?php
    $data = [['Имя', 'Возраст'], ['Иван', 25], ['Аня', 30]];
    $filename = 'file.csv';
    $file = fopen($filename, 'w');
    foreach ($data as $row) {
        fputcsv($file, $row);
    }
    fclose($file);
    ?>
    