 <?php
    if ($_SERVER['REQUEST_METHOD'
] == 'POST') {
        $file = $_FILES['file'];
        if ($file['size'] > 2 * 1024 * 1024) {
            echo "Ошибка: файл слишком большой.";
        } elseif (strpos($file['type'], 'image/') !== 0) {
            echo "Ошибка: только изображения разрешены.";
        } else {
            move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);
            echo "Файл загружен.";
        }
    }
    ?>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Загрузить">
    </form>
    

 
        
    

 
        
 
        
 
        

 

