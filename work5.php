<?php
   $word = "поиск";
   $filename = 'file.txt';
   if (file_exists($filename)) {
       $content = file_get_contents($filename);
       $occurrences = substr_count($content, $word);
       echo "Слово '$word' встречается $occurrences раз.";
   } else {
       echo "Файл не существует.";
   }
   ?>