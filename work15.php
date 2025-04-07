<?php
    $old_word = "старое";
    $new_word = "новое";
    $filename = 'file.txt';

    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        $content = str_replace($old_word, $new_word, $content);
        file_put_contents('new_file.txt', $content);
    }
    ?>
    