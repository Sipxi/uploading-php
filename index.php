<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1">
    <title>Document</title>
</head>
<?php
include 'functions.php';
?>

<body>
    <div id="wrapper">
        <div align="center" class="title">
            <h1>Serhij Čepil PHP Uploading</h1>
        </div>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            Select .txt file to upload
            <input type="file" name="file" id="file">
            <input type="submit" value="Upload" name="submit">
        </form>

        <div class="allfiles">
            <h2> All Files </h2>
            <?php
            allFiles();
            ErrorHandler();
            ?>
        </div>
    </div>

</body>

</html>