<!DOCTYPE html>
<html lang="en">

    <?php
    require_once("../includes/connect_local.php");
    $stmt =  $connection->prepare('SELECT id, title FROM projects ORDER BY title ASC');
    $stmt->execute();
    ?>
    
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Content Management</title>
</head>
<body>
    

    <form id="login_form" class="cms" action="login.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Login">
    </form>

</body>
</html>