<?php
    if(isset($_POST['store'])){
        $data = $_POST['content'];

        $file = "thursday.txt";
        if(is_writable($file)){
                if(!$fp = fopen("thursday.txt","a")){  
                    echo "file cannot be opendeed";
                }
                if(fwrite($fp , $data) === FALSE){
                    echo "something went wrong";

                }else{
                    echo "new file content ($data) is added to ($file)";
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
    <form action="file3.php" method="POST">
        <p>
            <label for="content">content :</label><br>
            <textarea name="content" id="content" rows="6" cols="40" placeholder="write content"></textarea>
        </p>
        <p>
            <input type="submit" value="store" name="store">
        </p>
    </form>
</body>
</html>