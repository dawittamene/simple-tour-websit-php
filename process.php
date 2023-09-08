<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['user'];
    $email = $_POST['email'];
    $number = $_POST['phone'];
    $massage = $_POST['advice'];
    $subject = $_POST['reseon'];
    
}





$conn = new mysqli('localhost', 'root', '', 'contact');
if ($conn){
    $sql = "insert into `user`(name,email,number,massage,subject)values('$name','$email','$number','$massage','$subject')";
    $result=mysqli_query($conn,$sql);
    if($result){
        
    }else{
        die(mysqli_error($conn));
    }
}
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="end.css">
    <title>dawit tamen</title>
   
    
</head>
<body>
    
        <div class="end">
            <h1>Hi, Your Data Is Inserted Successfully</h1>
        </div>

        <a href="home.php" class="back">&#x2190; Back To Home </a>
  
   
    
</body>
</html>


