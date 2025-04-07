<?php
   $source = 'source.txt';
   $destination = 'destination.txt';
   if (file_exists($destination)) {
       echo "Файл назначения уже существует.";
   } else {
       copy($source, $destination);
   }
   ?>
