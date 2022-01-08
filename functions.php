<?php

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
    foreach (glob('./uploads/*') as $file) {
        echo "File: $file <br>";
        echo "Content: ";
        echo file_get_contents($file),"<br>";
    }
}
