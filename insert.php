
<?php
 $conn=mysqli_connect("localhost","root","","student_management");
if($_SERVER['REQUEST_METHOD'] =="POST"){
    $student_name=$_POST['student_name'];
    $reg_no=$_POST['reg_no'];
    $department=$_POST['department'];
    $insert="INSERT INTO student(student_name,reg_no,department) VALUES('$student_name','$reg_no','$department')";
    $query=mysqli_query($conn,$insert);
    if($query){
        header("location:select.php");
    }
    
   
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
    <center>
    <table>
        <form action="" method="POST">
            <h2 style="text-align: center;"> INSERT INTO THIS FORM</h2>
            <tr><td>student_name</td>
            <td><input type="text" name="student_name" ></td></tr>
            
            <tr><td>reg_no</td>
            <td><input type="text" name="reg_no" ></td></tr>
            
            <tr><td>department</td>
            <td><input type="text" name="department" ></td></tr>
            <tr>
                <td colspan="2" style="text-align: center;"><button>insert</button></td>
            </tr>



        </form>
    </table>
    </center>
</body>
</html>