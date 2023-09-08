<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $place = $_POST['place'];
    $quantity = $_POST['quantity'];
    $arrivals = $_POST['arrivals'];
    $Leaving = $_POST['Leaving'];
    
    
}





$conn = new mysqli('localhost', 'root', '', 'contact');
if ($conn){
    $sql = "insert into `book`(place,quantity,arrivals,Leavingt)values('$place','$quantity','$arrivals','$massage','$Leaving')";
    $result=mysqli_query($conn,$sql);
    if($result){
        
    }else{
        die(mysqli_error($conn));
    }
}
   

?>

<?php

session_start();
if(isset($_SESSION['view'])){
    $_SESSION['view'] = $_SESSION['view'] + 1;

}else{
    $_SESSION ['view'] = 1;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="end.css">
    <title>dawit tamen</title>
    <?php echo "You Are Number ".$_SESSION['view']." Visiter"
    
    ?>
    
</head>
<body>
    
        <div class="end">
            <h1>Hi, Your Data Is Inserted Successfully</h1>
        </div>

        <a href="home.php" class="back">&#x2190; Back To Home </a>
  
   
    
</body>
</html>


