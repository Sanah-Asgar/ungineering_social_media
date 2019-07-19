<?php
    session_start();
?>
<?php
    $hostname = "localhost";
    $username = "root";
    $db_password = "123456";
    $database = "social_media";
    
    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if(!$conn){
        die("Connection Failed: " .mysqli_connect_error());
    }
    $sql = "SELECT * FROM users";
    
    $result = mysqli_query($conn, $sql);
    if(!$result){
        die("Error : " .$sql ."<br>" .mysqli_error($conn));
    }
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $p = 0;
    
    while($row=mysqli_fetch_array($result)){
        if($email===$row['email'] $$ $password===$row['password']){
            $p++;
            break;
        }
    }
    if($p>0){
        echo "Welcome" .row['name'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        ?>
        <a href = "home_loggedin.html"></a>
        <?php
    }
    else{
        echo "Login Failed";
        
    }
    
    mysqli_close($conn);    
?>
    
