<?php
session_start();
if($_SERVER['REQUEST_METHOD'] =='POST'){
$username=$_POST['username'];
$password=($_POST['password']);
$conn=mysqli_connect("localhost","root","","student_management");
$select="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$query=mysqli_query($conn,$select);
if($query){
    $get=mysqli_fetch_assoc($query);
$uusername=$get['username'];
$ppassword=$get['password'];
if($username==$uusername&&$ppassword==$ppassword){

   // echo '<script> alert ("you are logged in")</script>';
   header("Location:select.php");
}

else{
    header("Location:admindex.php");
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
<body><center><h1>Login</h1>
    <table><form action="#" method="POST">
  <tr>
<td>
    <label for="username">username</label></td>
    <td><input type="text" name="username" ></td>
 </tr>
 <tr>
    <td><label for="password">password</label></td>
    <td><input type="password" name="password"></td>

  
 </tr>
<tr>
    <td colspan="2" style="text-align: center;"><input type="submit" name="submit" value="login">
    <button><a href='admindex.php' style="text-decoration: none; color:black;">Signup</a></button></td></tr>
</tr>
    </form>
    </table>
</center>
</body>

</html>