<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2"> 
<form method="post">
<tr>
    <th>student_id</th>
    <th>student_name</th>
    <th>reg_no</th>
    <th>department</th>
    <th>Action</th>
    
    

    
    
    
</tr>
<?php
session_start();

$conn=mysqli_connect("localhost","root","","student_management");
$select="SELECT *FROM student";
$query=mysqli_query($conn,$select);
if(mysqli_num_rows($query) >0){
    while($get=mysqli_fetch_assoc($query)){
    echo "<tr>
    <td>".$get['student_id']."</td>
    <td>".$get['student_name']."</td>
    <td>".$get['reg_no']."</td>
    <td>".$get['department']."</td>
   <form method='POST'><td><button><a href ='update.php?id=".$get['student_id']."'>update</button><button><a href='delete.php?id=".$get['student_id']."'>Delete</button</td></td></form>
    </tr>";
    
    
    }
}

?>


    </form>
    </table>
click here to<a href='insert.php'>insert</a>  another information of student 
<a href='logout.php' style="text-align: right">LOGOUT</a>  
</body>
</html>
