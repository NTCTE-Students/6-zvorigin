<?php
    $filename = 'file.json';
    if (file_exists($filename)) {
        $data = json_decode(file_get_contents($filename), true);
        $data[] = ["новый_элемент" => "значение"];
        file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));
    }
    ?>
    