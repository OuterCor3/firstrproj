<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" class="post"></form>
    Username:<br>
    <input type="text" name = "username"><br>
    Password:<br>
    <input type="text" name="password"><br>
    <input type="submit" name="login" value="login"><br><br>
    <a href="homepage.php">
    <input type="submit" class="GO TO HOMEPAGE"></a>
    
    
</body>
</html>

<?php

?>