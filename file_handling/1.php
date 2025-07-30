<?php

    if(isset($_POST['store'])){
        $content = $_POST['content'];
        echo $content;

        $file = "data.txt";
        if(is_writable($file)){
            if(!$fp = fopen("data.txt","a")){
                echo "file cannot be open($file)";
        }

        if(fwrite($fp,$content)=== false){
            echo "can not write to the file($file)";
        }

        echo "success, new ($content) added to ($file)";
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
    <from action="1.php" method="POST">
        <h1>Form</h1>
            <p>
                <label for="content">content</label>
                <textarea name="content" id="content"></textarea>
            </p>
            <p>
                <input type="submit" value="store" name="store">
            </p>
    </from>
</body>
</html>