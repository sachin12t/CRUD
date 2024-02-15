<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <form class="creat" action ="createpost.php" method="POST">
        Name :<input type="text" name="name" required class="input"><br><br>
        Email:<input type="text" name="email" required class="input"><br><br>
        Phone:<input type="text" name="phone" required  class="input"><br><br>
        Message:<textarea name="message" required  class="text"></textarea><br><br>
        <input type="submit" name= "createsubmit" class="btn">
    </form>
</body>
</html>