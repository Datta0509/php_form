<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = 'users';
    
    // Create connection
    $conn = new mysqli($servername, $username, $password , $database);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully" . "<br>";
   
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pwd  = $_POST['pwd'];
    $gedner = $_POST['gender'];

    echo $name . "<br>";
    echo $mail . "<br>";
    echo $pwd . "<br>";
    // echo $gender;

    $ins = "INSERT INTO users.user_info(name,email,password) VALUES ('$name','$mail','$pwd')";

    echo $ins ; 

    $result =  mysqli_query($conn, $ins);
    // echo $result ; 
      
    $cookie_name = 'user';
    $cookie_value = $name ; 
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    if(!isset($_COOKIE[$cookie_name])) {
        echo "<br>" . "Cookie named '" . $cookie_name . "' is not set!";
      } else {
        echo "<br>" ."Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
      }

    // mysqli_close($conn);
?>