<?php
$insert=false;
if(isset($_POST['name'])){
    
$server="localhost";
$username="root";
$password="#j/HG4q*2crTnd8";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
}
//echo "success connecting to the database";
$name= $_POST['name'];

$gender= $_POST['gender'];
$age= $_POST['age'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$description= $_POST['description'];

// $date=$_POST['dt'];

$sql="  INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `phone`, `email`, `other`, `dt`) VALUES ( '$name','$age','$gender','$phone', '$description','$email',current_timestamp()) ;";



if($con->query($sql)==true){
//    echo "successfully inserted";
$insert=true;
}
else
{
    echo "ERROR:  $sql <br> $con->error";

}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    
    <div class="container"> <h1>Welcome!</h1>
    <p>Trip to Los Angeles &#128515</p>
  
  
     <?php
    if($insert==true){
    echo "<p>Meet you soon!.....</p>";
    }
    
    ?>
   
    <form action="index.php" method="post">

    <input type="text" name="name" id="name" placeholder="Enter your name">
    
    <input type="text" name="age" id="age" placeholder="Enter your Age">
    
    <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
    <input type="text " name="phone" id="phone" placeholder="Enter your Phone Number">
    <input type="email" name="email" id="email" placeholder="Enter your Email address">
    <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter any other required information"></textarea>
    <button class="btn">Submit</button>
  
    
    </form>
</div>
    
   
</body>
</html>