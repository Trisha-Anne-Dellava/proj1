<?php
    
    $conn = mysqli_connect("localhost: 3308","root","root01","registration");

    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * from user where email='$email' and password='$password'";
    $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){

                $email = $row["email"];
                session_start();
                $_SESSION['email'] = $email;
            }
            header("Location: reg.php");
        }
        else{

            echo "Invalid username or password";
        }
?>
