<?php
include "config2.php";

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Delete records</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body style="padding-top: 100px;">

<?php

$fetchQuery = mysql_query("select * from famous_people") or die("could not fetch" . mysql_error());

?>
        <div class="container">
<?php

if (isset($_REQUEST['submitDelete'])) {

    $key = $_REQUEST['delete'];

    $check = mysql_query("select * from famous_people where Name= '$key' ") or die("not fund" . mysql_error());
    if (mysql_num_rows($check) > 0) {

        $queryDelete = mysql_query("DELETE from famous_people where Name = '$key' ")
        or die("not deleted" . mysql_error());?>

<div class="alert alert-success">
       <p>Record deleted !!</p>
     </div>


 <?php
header('Location:assignment3.php');
    } else {
        ?>

     <div class="alert alert-warning">
       <p>Record does not exist!</p>
     </div>
  <?php }
}
?>
            <table class="table table-condensed table-bordered">

                <tr>
                <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Occupation</th>
                    <th>Select</th>
                    <th>Delete it</th>
                </tr>

<?php
$sr = 1;
while ($row = mysql_fetch_array($fetchQuery)) {?>
<tr>
    <form action="" method="post"  role="form">
<td><?php echo $sr; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['Age']; ?></td>
<td><?php echo $row['Occupation']; ?></td>
<td>

<input type="checkbox" name="delete" value="<?php echo $row['Name']; ?>" required>
</td>
<td>
    <input type="submit" name="submitDelete" class="btn btn-info">
</td>
</form>
</tr>



<?php $sr++;}
?>
            </table>

        </div>
    </body>

    </html>