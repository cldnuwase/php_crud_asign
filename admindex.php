<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpass'];
    
    //if($conn){
      //  echo "connected successfully";
    //}


if(empty($username)||empty($password)||empty($cpassword)){
    echo '<script>alert("please fill all the fields below")</script>';
}


else{

    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        echo '<script>alert("Username should only contain alphabets and numbers")</script>';
        
    }
    elseif(strlen($password)<8 || strlen($password)>8) {
        echo '<script>alert("Password should be 8 characters long")</script>';
        
    }
    else{
    
    
    $conn=mysqli_connect("localhost","root","","student_management");






    if($password==$cpassword){
        $sql="INSERT INTO admin values('','$username','$password')";
        $query=mysqli_query($conn,$sql);
        if($query){
            echo '<script>alert("Registration Successful")</script>';
        }

    }
    else{
        echo '<script>alert("Passwords do not match")</script>';
    
    }
}
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
<body><center><h1>Signup</h1>
    <table><form action="#" method="POST">
  <tr>
<td>
    <label for="username">username</label></td>
    <td><input type="text" name="username" ></td>
 </tr>
 <tr>
    <td><label for="password">password</label></td>
    <td><input type="password" name="password"></td>

    <tr>
    <td><label for="cpassword">confirm password</label></td>
    <td><input type="password" name="cpass"></td>
 </tr>
 </tr>
<tr>
    <td colspan="2" style="text-align: center;"><input type="submit" name="submit" value="SignUp">

<button><a href='login.php' style="text-decoration: none; color:black;">Login</a></button>
</td></tr>
    </form>
    </table>
</center>
</body>

</html>