<?php
session_start();

$name = $mail = $pwd = "";
$name_error = $mail_error = $pwd_error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST['name'])){
    $name_error = "Please enter the username";
  }
  else{
    $name = test_input($_POST['name']);
    if(!preg_match("/^[a-zA-Z-']+$/",$name)){
      $name_error = "Name should contain only letters and white spaces";
    }

  }
}
  
  if(empty($_POST['mail'])){
    $mail_error  = "Please enter email address";
  }
  if(empty($_POST['pwd'])){
    $pwd_error = "Please enter password";
  }

  function test_input($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data ; 
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        form{
            width: 50vw;
            margin: 0 auto;
        }

      
    </style>
  </head>
  <body>
    <div class="container bg-secondary rounded"  >
        <form class="mt-5"  action="send.php" method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" />
                <span><?php echo $name_error; ?></span>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail"/>
              <span><?php echo $mail_error; ?></span>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" />
              <span> <?php echo $pwd_error;  ?> </span>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>