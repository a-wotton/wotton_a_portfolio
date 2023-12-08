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
<div id="banner">
        <header class="grid-con">
            <h1 class="hidden">Header</h1>
            <a id="logo-con" href="index.html"><img src="images/logo-white.svg" id="logo" class="col-start-1 col-end-3 m-col-start-1 m-col-end-3"></a>
            <img src="images/hamburger-menu.png" id="hamburger-menu" class="col-start-4 col-end-5">
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

    <section id="about" class="about grid-con">
        <h2 class="hidden">Intro</h2>
        <div id="profile" class="box col-start-2 col-end-4 m-col-start-3 m-col-end-7 l-col-start-1 l-col-end-5"></div>
        <h3 id="desc1" class="col-span-full m-col-start-2 m-col-end-8 l-col-start-5 l-col-end-11">Hello, my name is Aiden, and I am an aspiring front-end developer.</h3>
    </section>

    <section id="section2" class="about grid-con">
        <h2 class="hidden">Description 2</h2>
        <p class=" desc2 about col-span-full l-col-start-2 l-col-end-12">I was born in Toronto, and currently live in London, Ontario. I am currently enrolled in Fanshawe College's Interactive Media Design program, and I am close to completing it. My favourite part about front-end development is bringing a design to life via coding and problem solving.</p>
    </section>

    <section id="conclusion-con">
        <h2 class="hidden">Conclusion</h2>
        <p id="conclusion" class="desc2 about">During my spare time, my favourite thing to do is play video games, and I spend a lot of time playing different games. I also enjoy the problem solving aspect of developing, it is very satisfying to finally overcome a problem, and that is the most fun part of the process, along with seeing all of the designs and plans coming to fruition, and becoming fully realized on a webpage.</p>
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