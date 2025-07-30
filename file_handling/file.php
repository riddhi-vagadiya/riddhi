<?php
    if (isset($_POST['store'])) {
        $content = $_POST['content'];
        echo $content;

        $file = "data.txt";
        if (is_writable($file)) {
            if (!$fp = fopen("data.txt", "a")) {
                echo "file cannot be open ($file)";
            }

            if (fwrite($fp, $content . PHP_EOL) === FALSE) {
                echo "cannot write to the file($file)";
            } else {
                echo "Success, new ($content) added to ($file)";
            }

            fclose($fp);
        } else {
            echo "file is not writable";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Write to File</title>
</head>
<body>
    <form action="file.php" method="POST">
        <p>
            <label for="content">Content:</label><br>
            <textarea name="content" id="content" rows="5" cols="30" placeholder="Write content"></textarea>
        </p>
        <p>
            <input type="submit" value="store" name="store">
        </p>
    </form>
</body>
</html>
