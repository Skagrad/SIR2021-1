<?php
    session_start();
    
    if(!isset($_SESSION['user'])){
        header('location: index.php');
    }
    else {
        $user = $_SESSION['user'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sessão iniciada com <?php echo $user ?></h1>
    
    <a href="logout.php">Logout</a>
</body>
</html>