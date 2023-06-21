<?php
include "cnctn1.php";
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM students WHERE id = '$id'");
$data = mysqli_fetch_assoc($sql);
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $class = $_POST["class"];
    $sql = mysqli_query($conn, "UPDATE `students` SET `name`='$name',`age`='$age',`class`='$class' WHERE id = $id ");
if($sql)
{
    echo '<script>alert("Update Sucessfully"); window.location.href="readpage.php";</script>';
}
else
{
echo "Something Went Wrong";
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
    <input type="text" class="form-control mt-2" name="name" value="<?php echo $data['name'];?>" ><br>
    <input type="number" class="form-control mt-2" name="age" value="<?php echo $data['age'];?>" ><br>
    <input type="class" class="form-control mt-2" name="class" value="<?php echo $data['class'];?>" ><br>
    <input type="submit" class="btn btn-success mt-2"name="submit" value="update">
    </form>
    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>