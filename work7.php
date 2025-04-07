<?php
   $filename = 'file.txt';
   if (file_exists($filename)) {
       unlink($filename);
   } else {
       echo "Файл не существует.";
   }
   ?>