<?php
require 'functions.php';

function validateFile($file)
{
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    # If user has actually clicked
    if (!isset($_POST['submit'])) {
        header("Location: index.php?state=nasty");
        exit();
    }
    # If file name is empty
    if (empty($file_name)) {
        header("Location: Index.php?state=emptyfile");
        exit();
    }
    # If file exists in database
    if (file_exists("uploads/" . $file_name)) {
        header("Location: index.php?state=exists");
        exit();
    }
    # If file size is bigger than 1 MB
    if ($file_size > 1048576) {
        header("Location: index.php?state=badsize");
        exit();
    }
    # If file extenstion is txt
    if ($file_extension != 'txt') {
        header("Location: index.php?state=badext");
        exit();
    }
    header("Location: index.php?state=success");
    return true;
}






if (validateFile($_FILES['file'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']);
} else {
    echo "Unknown error has occurred";
}
