<!DOCTYPE html>
<html lang="en">
    <?php
    require_once('includes/connect.php');
    $stmt = $connection->prepare('SELECT * FROM projects,media WHERE projects.media=media.id ORDER BY title ASC');
    $stmt->execute();
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
    <title>Projects</title>
</head>
<body>
            <div id="banner">
                <header class="grid-con">
                    <h1 class="hidden">Header</h1>
                   <a id="logo-con" href="index.html"><img src="images/logo-white.svg" id="logo" alt="site logo" class="col-start-1 col-end-3 m-col-start-1 m-col-end-3"></a>
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

      <section id="gallery" class="grid-con">
        <h2 class="subtitle col-span-full">Check out my projects!</h2>
        <?php
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<a id="'.$row['id_name'].
                '"class="project col-span-full l-col-span-6" href="#"><div id="'.$row['title'].
                '"><div class="project-title"><h3>'.$row['title'].
                '</h3></div></div></a><style> #'.$row['id_name'].
                ' {background-image: url(images/'.$row['media_name'].
                ');}</style>';
              }
            ?>
    </section>
 
    <!-- <section id="gallery" class="grid-con">
        <h2 class="subtitle col-span-full">Check out my projects!</h2>
            <a id="billy-beer-link" class="project col-span-full l-col-span-6" href="billy-beer.html"><div id="billy-beer"><div class="project-title"><h3>Billy Beer Brand Refresh</h3></div></div></a>
            <style> #billy-beer-link {background-image: url(images/billy-beer.jpg);} </style>
            <a id="earbuds-link" class="project col-span-full l-col-span-6" href="earbuds.html"><div id="earbuds"><div class="project-title"><h3>Earbuds Site</h3></div></div></a>
            <style> #earbuds-link {background-image: url(images/earbuds.png);}</style>
            <a id="music-mixer-link" class="project col-span-full l-col-span-6" href="music-mixer.html"><div id="music-mixer"><div class="project-title"><h3>Music Mixer</h3></div></div></a>
            <style> #music-mixer-link {background-image: url(images/music-mixer.png);}</style>
            <a id="industry-night-link" class="project col-span-full l-col-span-6" href="industry-night.html"><div id="industry-night"><div class="project-title"><h3>Industry Night</h3></div></div></a>
            <style> #industry-night-link {background-image: url(images/industry-night.png);} </style>
    </section>
  -->

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