<!DOCTYPE html>
<html lang="en">
    <?php
    require_once('includes/connect.php');
    $query = 'SELECT GROUP_CONCAT(media_name) AS images, description, title, partners FROM projects, media WHERE projects.id = project_id AND projects.id = :projectId';
    $stmt = $connection->prepare($query);
    $projectId = $_GET['id'];
    $stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $images = explode(",", $row['images']);
    ?>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script defer src="js/main.js"></script>
    <title><?php echo $row['title']; ?></title>
</head>
<body>
<div id="banner">
            <header class="grid-con">
                <h1 class="hidden">Header</h1>
                <a id="logo-con" href="index.html"><img id="logo" src="images/logo-white.svg" alt="site-logo" class="col-start-1 col-end-3 m-col-start-1 m-col-end-3"></a>
                <img src="images/hamburger-menu.png" id="hamburger-menu" alt="hamburger-menu" class="col-start-4 col-end-5">
                <nav class="m-col-start-3 m-col-end-9 l-col-start-4 l-col-end-13">
                    <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    </ul>
                 </nav>
                 
                <ul id="mobile-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </header>
        </div>

    <?php 
     echo '<section id="project-intro" class="grid-con"><h2 class="expanded-title col-span-full l-col-start-3 l-col-end-11">'.$row['title'].
     '</h2><img class="expanded-cover col-span-full l-col-start-2 l-col-end-12" src="images/'.$images[0].
     '"alt="Project Image"><h3 class= "col-span-full l-col-start-1 l-col-end-10">Description:</h3><p class="col-span-full l-col-start-1 l-col-end-10">'.$row['description'].
     '</p><p class="col-span-full l-col-start-1 l-col-end-10">'.$row['partners'].
     '</p></section>';
    ?>  

<div id="banner2">
        <footer class="grid-con">
            <h2 class="hidden">Footer</h2>
            <div id="media-icons" class="media-icons col-start-1 col-end-3 m-col-start-1 m-col-end-5">
                <a href="#"><img src="images/linkdin.svg" alt="linkedin logo"></a>
                <a href="#"><img src="images/github.svg" alt="github logo"></a>
            </div>
            <div class="media-icons col-start-1 col-end-3 m-col-start-1 m-col-end-5">
                <a href="#"><img src="images/linkdin-hover.svg" alt="linkedin logo"></a>
                <a href="#"><img src="images/github-hover.svg" alt="github logo"></a>
            </div>
        </footer>
    </div>
</body>
</html>