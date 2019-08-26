
    <?php

$name = $_POST["x"];
$password = $_POST["y"];

$name2 = $_POST["a"];
$password2 = $_POST["b"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="demo3.css">
</head>

<body>

    <form method="post">
<input name="x">
<input name="y">
<input name="a">
<input name="b">
<button>Send</button>

    </form>

<table border="1" width="100%">

<tr>
        <th>Name</th>
        <th>Age</th>
    </tr>
    <tr>
        <th> <?php echo $name ?></th>
        <th> <?php echo $password ?></th>
    </tr>
    <tr>
        <th> <?php echo $name2 ?></th>
        <th> <?php echo $password2 ?></th>
    </tr>




</table>

</body>
</html>