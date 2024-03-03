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
      $query = 'INSERT INTO media ()'
      echo 'The file '.$target_file. ' has been uploaded.';
  } else {
      echo 'Sorry, there was an error uploading your file.';
  }
}
?>