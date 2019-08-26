<?php
$name = $_FILES["myfile"]["name"];

$tempfile = $_FILES["myfile"]["tmp_name"];

move_uploaded_file($tempfile, "$name");

echo "<img src='$name' >";
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

<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">


    <button>upload</button>

</form>


</body>
</html>
