<?php

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$subject = $_REQUEST["subject"];
$con = mysqli_connect("localhost", "root", "12345678", "senior_steps");
$statment = "insert into person(Name, Email, Phone, Subject) values('$name','$email','$phone','$subject')";
mysqli_query($con, $statment);
$error = mysqli_error($con);
if (!$error) {echo "<h3>Done</h3>";}

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="assignment.css">
    </head>

    <body>

        <form method="POST">
            <div class="form-group">
                <label>Name</label>
                <input name="name" class="form-control">
                <br>

            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control">
                <br>

            </div>
            <div class="form-group">
                <label>Phone</label>
                <input name="phone" class="form-control">
                <br>

            </div>
            <div class="form-group">
                <label>Subject</label>
                <input name="subject" class="form-control">
                <br>

            </div>

            <button class="btn btn-primary">Submit</button>

        </form>

    </body>

    </html>
