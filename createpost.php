<?php
include 'dbconnect.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['createsubmit'])){
        $name= $_POST['name'] ? $_POST['name']: '';
        $email= $_POST['email'] ? $_POST['email']: '';
        $phone= $_POST['phone'] ? $_POST['phone']: '';
        $message= $_POST['message']? $_POST['message']: '';
        $sql="Insert into student(name,email,phone,message)values('$name','$email','$phone','$message')";
        if(mysqli_query($con,$sql))
            header('Location:read.php? success=Record inserted succesfully.');
        
    
    else{
        echo mysqli_error($con);

    }
}
}