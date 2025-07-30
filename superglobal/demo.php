<?php

    if(isset($_POST['submit'])){
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";

        $img = $_FILES['image']['name'];
        $file = $_FILES['image']['tmp_name'];
        $path = "upload/".basename($img);
        $move = move_uploaded_file($file, $path);
        if($move){
            echo "file uploaded";
        }else{
            echo "file not uploaded";
        }
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <label for="">Upload image</label>
        <input type="file" id="image" name="image">
        <br>
        <input type="submit" name="submit" value="submit">
</from>
</body>
</html>