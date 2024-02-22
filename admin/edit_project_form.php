<!DOCTYPE html>
<html lang="en">

    <?php
    require_once("../includes/connect.php");
    $query = 'SELECT * FROM projects WHERE projects.id = :projectId';
    $stmt =  $connection->prepare($query);
    $projectId = $_GET['id'];
    $stmt->bindParam(":projectId", $projectId, PDO::PARAM_INT);
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
    <form id="edit_project_form" class="cms" action="edit_project.php" method="POST">
    <input required name="pk" type="hidden" value="<?php echo $row['id']; ?>">
    <label for="title">Project Title:</label>
    <input required name="title" type="text" value="<?php echo $row['title']; ?>">
    <label for="media">Image:</label>
    <input required name="media" type="text" value="<?php echo $row ['media']; ?>">
    <label for="id_name">ID Name:</label>
    <input required name="id_name" type="text" value="<?php echo $row ['id_name']; ?>">
    <label for="partners">Partners:</label>
    <input name="partners" type="text" value="<?php echo $row ['partners']; ?>">
    <label for="description">Project Description:</label>
    <textarea name="description" type="text"><?php echo $row['description'];?></textarea>
    <input name="submit" type="submit" value="Edit">
    </form>
</body>
</html>