<?php
    $hostname = "127.0.0.1";
    $username ="root";
    $db_password ="123456";
    $db_name="social_media";
    $conn = mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        die("Connection Failed :" .mysqli_connect_error());
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['psw'];    
    $sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
    $result = mysqli_query($conn , $sql);
    if(!$result){
        die("Error : " . $sql . "<br>" . mysqli_error($conn));
    }
    echo "Registration Succesfull";
    mysqli_close($conn);    
?>     
