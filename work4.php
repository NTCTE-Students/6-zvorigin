<?php
   $filename = 'file.txt';
   if (file_exists($filename)) {
       $lines = file($filename);
       echo "Количество строк: " . count($lines);
   } else {
       echo "Файл не существует.";
   }
   ?>