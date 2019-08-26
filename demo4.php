
<?php

$c = $_POST["courses"];
echo "<ol>";
foreach ($c as $item) {

    echo "<li> $item </li>";

}
echo "</ol>";
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

<form action="" method="post">

<label for="">courses</label>
<br>
<input name="courses[]" value="Graphic" type="checkbox"> Graphic
<input name="courses[]" value="Programming" type="checkbox"> Programming
<input name="courses[]" value="English" type="checkbox"> English
<input name="courses[]" value="Design" type="checkbox"> Design

<hr>
<button>Send</button>
</form>


</body>
</html>