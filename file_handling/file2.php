<?php

    if(isset($_POST['store'])){
        $content = $_POST['content'];
        echo $content;

        $file = "data.txt";
        if(is_writable($file)){
            if(!$fp = fopen("data.txt","a")){
                echo "file not open($file)";
            }

            if(fwrite($fp,$content) === FALSE){
                echo "cannot write file($file)";
            }else{
                echo "success, new ($content) added to ($file)";
            }

            fclose($fp);
        }else{
            echo "file is not writable";
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
    <form action="file2.php" method="POST">
        <p>
            <label for="content">content:</label>
            <textarea name="content" id="content" rows="5" cols="30" placeholder="write content"></textarea>
        </p>
        <p>
            <input type="submit" value="store" name="store">
        </p>
    </form>
</body>
</html>