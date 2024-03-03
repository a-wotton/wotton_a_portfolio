<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Upload Image</title>
</head>
<body>
    <section id="upload_image">
        <h1>Upload Image Here:</h1>
        <form action="../includes/upload.php" method="post" enctype="multipart/form-data">
            <label for="uploaded">Image File:</label>
            <input type="file" name="uploaded">
            <input id="upload_image_button" type="submit" value="Upload">
        </form>
    </section>
</body>
</html>