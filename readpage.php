<?php
include "cnctn1.php";
$sql = mysqli_query($conn, "SELECT * FROM students");
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
<table class="table table-bordered">
  <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Class</th>
        <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
     <?php
    while($row=mysqli_fetch_assoc($sql))
    {
    ?>
    <tr>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["age"];?></td>
        <td><?php echo $row["class"];?></td>
        <td><a href="editpage.php?id=<?php echo $row['id'];?>"class="btn btn-primary">Edit</a></td>
       <td><a href="deletepage.php?id=<?php echo $row['id'];?>"class="btn btn-danger">Delete</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>