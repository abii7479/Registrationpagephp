<?php

include "cnctn1.php";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $class = $_POST["class"];
    $sql = mysqli_query($conn, "INSERT INTO `students`( `name`, `age`, `class`) VALUES ('$name','$age','$class')");
if($sql)
{
    echo '<script>alert("Registered Sucessfully"); header("location:cnctnregistrationpage.php")</script>';
}
else
{
echo "error";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<div class="container">
        <form method="POST">
            <h4>Registration Form</h4>
            <label> Name: </label>
            <input type="text" class="form-control" name="name" required >
            <br>
            <br>
            <label> Age: </label>
            <input type="number" class="form-control" name="age" required>
            <br> <br>
            Class:
            <input type="text" class="form-control" name="class" required> <br>
            <br> <br>
            <input type="submit" class="btn btn-primary mt-2 mx-5" name="submit">

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>