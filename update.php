<?php
$conn=mysqli_connect("localhost","root","","student_management");
$id=$_GET['id'];
$sql="SELECT *FROM student where student_id='$id'";
$query=mysqli_query($conn,$sql);
while($get=mysqli_fetch_assoc($query)){
    
    $student_name=$get['student_name'];
    $reg_no=$get['reg_no'];
    $department=$get['department'];

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $student_name=$_POST['student_name'];
        $reg_no=$_POST['reg_no'];
        $department=$_POST['department'];
        $update="UPDATE student SET student_name='$student_name',reg_no='$reg_no',department='$department' WHERE student_id='$id'";
        $query=mysqli_query($conn,$update);
        if($query){
            //echo "<script>alert('Update Successful')</script>";
            echo "connected";
            header("location:select.php");
        }}
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="" method="POST">
            <tr><td>student_name</td>
            <td><input type="text" name="student_name" value="<?php echo $student_name;?>"></td></tr>
            
            <tr><td>reg_no</td>
            <td><input type="text" name="reg_no" value="<?php echo $reg_no;?>"></td></tr>
            
            <tr><td>department</td>
            <td><input type="text" name="department" value="<?php echo $department?>;"></td></tr>
            <tr>
                <td><button>update</button></td>
            </tr>



        </form>
    </table>
</body>
</html>