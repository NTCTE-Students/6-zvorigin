<?php
   $old_name = 'old_file.txt';
   $new_name = 'new_file.txt';
   if (file_exists($old_name)) {
       if (file_exists($new_name)) {
           echo "Файл с новым именем уже существует.";
       } else {
           rename($old_name, $new_name);
       }
   }
   ?>