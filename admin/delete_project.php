<!DOCTYPE html>
<html lang="en">
<?php
require_once('../includes/connect.php');
$query = 'DELETE FROM projects WHERE projects.id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$echo = 'SELECT title FROM projects WHERE projects.id = :projectId';
$echoStmt = $connection->prepare($echo);
$echoStmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$echoStmt->execute();
$row = $echoStmt->fetch(PDO::FETCH_ASSOC);
$echoStmt = null;
?>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/main.css?v2">
    <title>Delete Project</title>
</head>
<body>
    <?php
    //Source: https://stackoverflow.com/questions/36907601/how-to-create-confirm-yes-no-in-php#:~:text=If%20you%20want%20to%20do,redirect%2Fpost%20to%20edit%20page.
    if (isset($_POST['yn'])) {

        if ($_POST['yn'] == "Yes") {
            $stmt->execute();
            $stmt = null;
            header('Location: project_list.php');
        }

        if ($_POST['yn'] == "No") {
            header("Location: project_list.php");
        }
    }
    ?>
    <form id="delete-con" method="post">
        <!-- <h1>Are you sure you want to delete this project?</h1> -->
        <h1>Are you sure you want to delete "<?php echo $row['title']?>"?</h1>
        <input name="yn" type="submit" value="Yes">
        <input name="yn" type="submit" value="No">
</form>
</body>
</html>