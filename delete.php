<?php
$conn=mysqli_connect("localhost","root","","student_management");
$id=$_GET['id'];
$delete="DELETE FROM student where student_id='$id'";
$query=mysqli_query($conn,$delete);
if($query){
    header('location:select.php');
}
?>
