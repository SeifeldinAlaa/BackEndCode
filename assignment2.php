<?php

$con = mysqli_connect("localhost", "root", "12345678", "senior_steps");

$statment = "select * from person";

$result = mysqli_query($con, $statment);

$x = mysqli_fetch_array($result);

while ($x = mysqli_fetch_array($result)) {
    echo "<table border='5'>
<tr>
<td>Name</td>
<td>Email</td>
<td>Phone</td>
<td>Subject</td>
</tr>
<tr>
<td>$x[0]</td>
<td>$x[1]</td>
<td>$x[2]</td>
<td>$x[3]</td>
</tr>
</table>";
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




    </body>

    </html>
