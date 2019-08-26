<?php

if (isset($_REQUEST["submit"])) {
    echo $_REQUEST["name"];
    echo "<br>";
    echo $_REQUEST["email"];
    echo "<br>";
    echo $_REQUEST["age"];
    echo "<br>";
    echo $_REQUEST["gender"];
    echo "<br>";
    echo $_REQUEST["birthdate"];
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
    <form method="post">
        <label>name</label>
        <input name="name">
        <label>e-mail</label>
        <input name="email">
        <label>age</label>
        <input name="age">
        <label>gender</label>
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
        <label>birthdate</label>
        <input name="birthdate" type="date">
        <button name="submit">submit</button>



</body>

</html>
