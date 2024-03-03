<?php
    require_once("../includes/connect_local.php");

    $target_file = '../images/img'.time();
    $imageFileType = strtolower(pathinfo($_FILES['uploaded']['name'], PATHINFO_EXTENSION));
    $target_file .= '.'.$imageFileType;
  
  
    if(isset($_POST['submit'])) {
      $check = getimagesize($_FILES['uploaded']['tmp_name']);
      if($check !== false) {
          echo 'File is an image - ' . $check['mime'] . '.';
          $uploadOk = 1;
      } else {
          echo 'File is not an image.';
          $uploadOk = 0;
      }
    }
  
      if (file_exists($target_file)) {
        echo 'Sorry, file already exists.';
        $uploadOk = 0;
    }
  
    if ($_FILES['uploaded']['size'] > 5000000) {
      echo 'Sorry, your file is too large. It needs to be under 5MB';
      $uploadOk = 0;
  }
  
  
  if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'
  && $imageFileType != 'gif' ) {
      echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
      $uploadOk = 0;
  }else{
  
  }
  
  if ($uploadOk = 0) {
    echo 'Sorry, your file was not uploaded.';
  } else {
      if (move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_file)) {
       echo 'The file '.$target_file. ' has been uploaded.';
    } else {
        echo 'Sorry, there was an error uploading your file.';
    }
  }

    $query = 'INSERT INTO projects (title,media,description,partners,id_name) VALUES (?,?,?,?,?)';
    $stmt = $connection->prepare($query);
    $stmt->bindParam(1, $_POST['title'], PDO:: PARAM_STR);
    $stmt->bindParam(2, $_POST['media'], PDO:: PARAM_STR);
    $stmt->bindParam(3, $_POST['description'], PDO:: PARAM_STR);
    $stmt->bindParam(4, $_POST['partners'], PDO:: PARAM_STR);
    $stmt->bindParam(5, $_POST['id_name'], PDO:: PARAM_STR);

    // $imgQuery = 'INSERT INTO media (media_name) VALUES (?)';
    // $imgStmt = $connection->prepare($imgQuery);
    // $imgStmt->bindParam($target_file, PDO:: PARAM_STR);

    $stmt->execute();
    // $imgStmt->execute();

    $last_id = $connection->lastInsertId();

    $stmt = null;
    // $imgStmt = null;

    header('Location: project_list.php');   
?>