<?php
include 'dbconnect.php';
//for update
if(isset($_POST['update'])){
    $id =$_POST['id'] ? $_POST['id'] : '';
    $name =$_POST['name']?$_POST['name'] : '';
    $email =$_POST['email']?$_POST['email'] : '';
    $phone=$_POST['phone']?$_POST['phone'] : '';
    $message =$_POST['message']?$_POST['message'] : '';
    $sql="Update `student` set name='$name',email='$email',phone='$phone',message='$message', where id=$id";
    if(mysqli_query($con,$sql)){
        header('Location:read.php? success=Read Updated successfully');

    }
    else{
        echo mysqli_error($con);
    }
}
//GET
if(isset($_GET['id'])){
$id=$_GET['id'];
$selsql="select * from student where id=$id";
$res=mysqli_query($con,$selsql);
if($res->num_rows > 0){
    while($row=$res->fetch_assoc()){
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $message=$row['message'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">
    <input type="hidden"value="<?php echo $id;?>" name="id">
   Name: <input type="text"value="<?php echo $name;?>" name="name">
    Email:<input type ="text"value="<?php echo $email;?>" name="email">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
    Phone:<input type ="number"value="<?php echo $phone;?>" name="phone">
   message: <input type="text" value="<?php echo $message;?>"name="message">
    <input type="submit" value="update" name="update">
   </form>
</body>
</html>
 <?php
 }//else{
    //header('Location:read.php');
//}//?>