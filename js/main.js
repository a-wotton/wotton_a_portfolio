(() => {

gsap.registerPlugin(ScrollTrigger);

let hamMenu = document.querySelector("#hamburger-menu");
let mobileMenu = document.querySelector("#mobile-menu");

const tl = gsap.timeline();
const toggled = false;


function toggleMenu() {
    console.log("clicked on ham menu");
    mobileMenu.classList.toggle("toggled")
    if (mobileMenu.classList.contains("toggled")) {
    tl.to(mobileMenu, {
            display: "block",
            x: -300,
            duration: 0.5,
    })
    tl.restart();
 } else {
    tl.reverse();
 }
}

hamMenu.addEventListener("click", toggleMenu);

//Greensock for about page
const abouts = document.querySelectorAll(".about");
abouts.forEach(about => {
gsap.from(about, {
    y: -200,
    autoAlpha: 0,
    scrollTrigger: {
        trigger: about,
        scrub: true,
        end: "+=1000"
    }
})
})

//Custom Video Player 
const player = document.querySelector("video");
const vidCon = document.querySelector("#vidcon");
const videoControls = document.querySelector("#controls");
const playButton = document.querySelector("#play-button");
const pauseButton = document.querySelector("#pause-button");
const stopButton = document.querySelector("#stop-button");
const volumeSlider = document.querySelector("#change-vol");
const fullScreen = document.querySelector("#full-screen")


//remove default controls
player.controls = false
videoControls.classList.remove("hidden");

function playVideo() {
    player.play();
}

function pauseVideo() {
    player.pause();
}

function stopVideo() {
    player.pause();
    player.currentTime = 0;
}

function changeVolume() {
    player.volume = volumeSlider.value;
    console.log(volumeSlider.value);
}

function toggleFullScreen() {
    console.log("enter fullscreen")
    if (!vidCon.fullScreenElement) {
    vidCon.requestFullscreen();
    } else if (vidCon.exitFullscreen){
        vidCon.exitFullScreen()
    }
}
//https://developer.mozilla.org/en-US/docs/Web/API/Fullscreen_API (Source for fullscreen) 


playButton.addEventListener("click", playVideo);
pauseButton.addEventListener("click", pauseVideo);
stopButton.addEventListener("click", stopVideo);
volumeSlider.addEventListener("change", changeVolume);
fullScreen.addEventListener("click", toggleFullScreen);
})();   

