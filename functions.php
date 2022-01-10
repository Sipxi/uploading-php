<?php
$path = "./uploads/";
function ErrorHandler()
{
    if (!isset($_GET['state'])) {
    } else {
        $check = $_GET['state'];
        switch ($check) {
            case "nasty":
                echo "<p class='error'> Can't do that! </p>";
                exit();
            case "emptyfile":
                echo "<p class='error'> Please upload the file! </p>";
                exit();
            case "exists":
                echo "<p class='error'> File already exists in database! </p>";
                exit();
            case "badsize":
                echo "<p class='error'> File is too big! </p>";
                exit();
            case "badext":
                echo "<p class='error'> Please, upload .txt file</p>";
                exit();
            case "success":
                echo "<p class='success'> File is uploaded to the database</p>";
                exit();
        }
    }
}
function allFiles()
{
    global $path;
    $files = array_diff(scandir($path), array('.', '..'));
    foreach ($files as $file){
        echo "<p'> $file </p>";
        echo "<p> Content: ".file_get_contents($path.$file)."</p>";
        }
    }
