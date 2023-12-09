<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Contact</title>
</head>
<body>
<div id="smooth-wrapper">
        <div id="smooth-content">
            <div id="banner">
                <header class="grid-con">
                    <h1 class="hidden">Header</h1>
                    <a id="logo-con" href="index.html"><img src="images/logo-white.svg" id="logo" class="col-start-1 col-end-3 m-col-start-1 m-col-end-3"></a>
                    <img src="images/hamburger-menu.png" id="hamburger-menu" class="col-start-4 col-end-5">
                    <nav class="m-col-start-3 m-col-end-9 l-col-start-4 l-col-end-13">
                        <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        </ul>
                     </nav>
                     
                    <ul id="mobile-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </header>
            </div>

            <section id="contact">
                <h2 class="subtitle col-span-full">Contact me here.</h2>
                <form class="grid-con" method="post" action="sendmail.php">
                    <input name="first_name" type="text" class="contact-box col-span-full m-col-start-2 m-col-end-8 l-col-start-2 l-col-end-12" placeholder="First Name">
                    <input name="last_name" type="text" class="contact-box col-span-full m-col-start-2 m-col-end-8 l-col-start-2 l-col-end-12" placeholder="Last Name">
                    <input name="email" type="email" class="contact-box col-span-full m-col-start-2 m-col-end-8 l-col-start-2 l-col-end-12" placeholder="Email">
                    <textarea name="comments" placeholder="Message" id="message" class="contact-box col-span-full m-col-start-2 m-col-end-8 l-col-start-2 l-col-end-12"></textarea>
                    <input type="submit" id="submit" class="button col-span-full">
                </form>
            </section>

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
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>