<!DOCTYPE html>
<html lang="en">

    <?php
    require_once("../includes/connect.php");
    $query = 'SELECT * FROM projects WHERE projects.id = :projectId';
    $stmt =  $connection->prepare($query);
    $projectId = $_GET['id'];
    $stmt bindParam(":projectId", $projectId, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/main.css?v2">
    <title>Edit Project Page</title>
</head>
<body>
    <form action="edit-project.php" method="POST">
    
    </form>
</body>
</html>