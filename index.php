
<?php

$con=mysqli_connect('localhost','root','','INOS');


if(isset($_POST['reg'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

$sql="INSERT INTO student(username,password) VALUES ('$username','$password')";
if(mysqli_query($con,$sql)){
    header("location:home.html");
}else{
    echo "Failed";
}


}


if(isset($_POST['logi'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
   $sql=mysqli_query($con,"SELECT * FROM student WHERE username='$username' AND password='$password'");
   $count=mysqli_num_rows($sql);
   if($count==1){
header("location:home.html");

   }else{
       echo "Failed try again";
   }


}







?>



