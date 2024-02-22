<?php
    require_once("../includes/connect.php");
    $query = 'INSERT INTO projects (title,media,description,partners,id_name) VALUES (?,?,?,?,?)';
    $stmt = $connection->prepare($query);
    $stmt->bindParam(1, $_POST['title'], PDO:: PARAM_STR);
    $stmt->bindParam(2, $_POST['media'], PDO:: PARAM_STR);
    $stmt->bindParam(3, $_POST['description'], PDO:: PARAM_STR);
    $stmt->bindParam(4, $_POST['partners'], PDO:: PARAM_STR);
    $stmt->bindParam(5, $_POST['id_name'], PDO:: PARAM_STR);

    $stmt->execute();
    $last_id = $connection->lastInsertId();
    $stmt = null;
    header('Location: project_list.php');   
?>