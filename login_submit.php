<?php
    session_start();
?>
<?php
    $hostname = "127.0.0.1";
    $username ="root";
    $db_password ="123456";
    $db_name="ungineering";
    $conn = mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        die("Connection Failed :" .mysqli_connect_error());
    }
    
    
    $email = $_POST['email'];
    $password = $_POST['password'];  
      
    $sql = "SELECT * FROM users";
    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    
    $a = 0;
    while ($row=mysqli_fetch_array($result)) {
        if($email==$row['email'] && $password==$row['password']){
            $a++;
            break;
        }
    } 
    
    if($a>0){
        echo "hello... " . $row['name'];
       
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        
    }
    else{
        echo "Login Failed";
    }
    mysqli_close($conn); 

?>     
 
      
     
       
