<?php

var_dump($_FILES);

$name = $_FILES["file"]["name"];
$tmp_name = $_FILES["file"]["tmp_name"];
$size = $_FILES["file"]["size"];

if ($size / (1024 * 1024) >= 2) {echo "error";
} else {
    move_uploaded_file($tmp_name, $name);
    echo "done";
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <form method="POST" enctype="multipart/form-data">
            <input name="name" placeholder="enter name">
            <input name="email" placeholder="enter email">
            <input type="date" name="birthday">
            <label>gender</label>
            <input value="male" name="gender" type="radio">male
            <input value="female" name="gender" type="radio">female
            <br>
            <label>select country</label>
            <select name="country">
                <option value="مصر">مصر</option>
                <option value="أمريكا">أمريكا</option>
                <option value="ألمانيا">ألمانيا</option>
                <option value="كندا">كندا</option>
                <option value="انجلترا">انجلترا</option>
            </select>
            <input name="file" type="file">
            <button>انشاء حساب</button>
        </form>


    </body>

    </html>
