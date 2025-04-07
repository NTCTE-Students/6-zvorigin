<?php
    $src_dir = 'src/';
    $backup_dir = 'backup_' . date('Ymd') . '/';
    mkdir($backup_dir, 0777, true);

    foreach (glob($src_dir . '*') as $file) {
        copy($file, $backup_dir . basename($file));
    }
    ?>
    