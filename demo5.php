<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="demo5.css">
</head>

<body>

    <?php

// var_dump($_GET);

echo $_GET["username"];
echo "<hr>";
echo $_GET["gender"];
foreach ($_GET["Language"] as $item) {
    echo "<li>$item</li>";
}
?>
    <form method="GET">
        <input name="username" type="text" placeholder="firstname">
        <br>
        <input value="Male" name="gender" type="radio" id="x"><label for="x">male</label>
        <input value="Female" name="gender" type="radio" id="y"> <label for="y">female</label>
        <hr>
        <select name="Language[]" multiple>
    <option value="HTML">HTML</option>
    <option value="CSS">CSS</option>
    <option value="PHP">PHP</option>
</select>
        <button>Send</button>
    </form>

</body>

</html>