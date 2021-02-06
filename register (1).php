<?php
   
   $conn = mysqli_connect("localhost: 3308","root","root01","registration");

   $email = $_POST['email'];
   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "INSERT INTO user (username,password,email) VALUES ('$username','$password','$email')";
   $result = mysqli_query($conn, $sql);

   if($result){
       header("Location: reg.php");
   }

   else    {
   echo "Error :".$sql;
   }

?>
