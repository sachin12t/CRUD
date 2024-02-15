
<?php
include 'dbconnect.php';
$sql="select * from student";
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
        window.setTimeout(()=>{
            document.getElementById('succesmessage').style.display='none';
        },2000);
        
</script>
        <?php
        if(isset($_GET['success'])){ ?>
        <h2 style=  "color:green;"id="succesmessage">
            <?php echo $_GET['success'];?>
            </h2> <?php }?>
        <a href="create.php"><button>Add Date</button></a>
   <table border="1">
    <tr>
        <th>#Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Action</th>
        <th>delete</th>
    </tr>
    <?php 
        if($result->num_rows  > 0){
        while($row=$result-> fetch_assoc()){
        ?>
 
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['phone']?></td>
        <td><?php echo $row['message']?></td>
        <td><a href="update.php ? id=<?php echo $row['id'];?>"></button>Edit</button></a></td>
        <td><a href="delete.php ? id=<?php echo $row['id'];?>"></button>delete</button></a></td>
    </tr>
    <?php 
        }
     }
    ?>

   </table> 
</body>
</html>