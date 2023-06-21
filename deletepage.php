<?php
include "cnctn1.php";
$id = $_GET['id'];
$sql = mysqli_query($conn, "DELETE FROM `students` WHERE id = '$id'");


if($sql)
{
    echo '<script>alert("Update Sucessfully"); window.location.href="readpage.php";</script>';
}
else
{
echo "Something Went Wrong";
}

?>