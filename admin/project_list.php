<!DOCTYPE html>
<html lang="en">

    <?php
    require_once("../includes/connect.php");
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
    <link rel="stylesheet" href="../css/main.css?v2">
    <title>Content Management</title>
</head>
<body>

<section id="project_list_con">
    <h1>Project List</h1>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<p class="project_list">'.$row['title'].
        '<a class="option" href"edit_project_form.php?id='.$row['id'].
        '">Edit</a><a class="option" href"delete_project.php?id='.$row['id'].
        '">Delete</a></p>';
    }
    $stmt = null;
?>
</section>

<section id="add_project_con">
    <h2>Add a Project Here</h2>
    <form action="add_project.php" method="post">
        <label for="title">Project Title</label>
        <input name="title" type="text" required>
        <label for="thumbnail">Thumbnail URL</label>
        <input name="thumbnail" type="text" required>
        <label for="description">Project Description</label>
        <input name="description" type="text" required>
        <label for="partners">Partners</label>
        <input name="partners" type="text">
        <input name="submit" type="submit" value="Add +">
    </form>
</section>


    
</body>
</html>