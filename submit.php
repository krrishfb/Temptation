<?php

include 'connect.php';

 $message = $_POST['message'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $sub = $_POST['sub'];



   $sql = "INSERT INTO `contact-data` (`message`,`name`,`email`,`sub`) VALUES
  ('$message','$name','$email','$sub')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "record added";
    }
    else{
        echo  "something wrong";

    }
?>