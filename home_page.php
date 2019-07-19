<?php
    $hostname = "localhost";
    $username = "root";
    $db_password = "123456";
    $database = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM users INNER JOIN posts ON users.id = posts.user_id";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
?>
<! DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home_Page</title>
    <link rel="stylesheet" href="css/home_page.css">
    
</head>
<body>
    <div class="header"><center>
        <div class = "header-container">
            <div class="col1"><img class="logo_image" src="image/ungineering_logo.svg" /></div>
            <div class="col2">
                <div class="row1">
                    <div class= "ung"> <b><font  color="#FF4500">un</font><font color="#313131">gineering</font></b> </div>              
                </div>
                <div class="row2">
                    <div class = "quote">A <font  color="#FF4500">bit</font> of knowledge is good. A 
                    <font  color="#FF4500">byte</font> is better.</div>
                </div>  
            </div></center>        
        </div>
    </div>
    
    <!--BUTTON START-->
    <div class = "rowb rowb1">
        <div class = "colb"><button id="login">Login</button></div>
        <div class = "colb"><button id="new_user">New User</button></div>
    </div>
    <!--BUTTON END-->
    <!--BODY START-->
    <div class = "body_content"><center>
            <?php
                while ($row=mysqli_fetch_array($result)) {
            ?>
            <div class="posts">
                <div class = "name">
                    <h4><?php echo $row['name']; ?></h4>
                </div>
                <p><?php echo $row['status']; ?> </p>
                <div class = "time_hour">
                    <?php echo $row['time']; ?>
                </div>
            </div>
            <?php mysqli_close($conn); ?>
            <?php }  ?>
        </center>
    </div> 
    <!--BODY END-->        
    
    
    
    <div class="footer">
        <div class="footer-container01">
            <div class="footline01">
                <font color="#f1f1f1">Connect with us at</font>
            </div>
            <div class="footline02">
                <div class ="col3">
                    <a href= "https://www.youtube.com/channel/UCJfiRBONgZIHsMtvlvCGaqg" ><img class="youtube" src="image/youtube-512.png" /></a>
                </div>
                <div class = "col3">
                    <a href= "http://www.facebook.com/Ungineering/" ><img class="fb" src="image/download.png" /></a>    
                </div>
            </div>
            
            
            <div class="footer-container02">
                <div class="footline03">
                    <font color="#f1f1f1">For any questions / doubts, write us at - </font>
                </div>
                <div class="footline01">
                    <a herf=""><font color="#f1f1f1">queries@ungineering.com</font></a>
                </div>  
            </div>
            
        </div>
    </div>
</body>
</html>
