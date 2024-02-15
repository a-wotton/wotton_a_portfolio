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
let background = document.querySelector("#cityscape");
let desc2 = document.querySelector("#section2");

gsap.from(background, {
    yPercent: 20,
    scrollTrigger: {
        trigger: background,
        scrub: true,
    }
})

gsap.from(desc2, {
    autoAlpha: 0,
    yPercent: -20,
    scrollTrigger: {
        trigger: desc2,
        // markers: true,
        scrub: true,
        pin: true,
        start: "center center",
        //The idea is that the end becomes the height of the background image, meaning the scrolltrigger ends at the bottom of the image. I then subtracted 50% of that height using some math, so that it ends in the middle, which is more appealing than scrolling all the way to the bottom.
        end: `+=${background.offsetHeight - background.offsetHeight*0.5}`
    }
})



gsap.from()

//Custom Video Player 
const player = document.querySelector("video");
const vidCon = document.querySelector("#vidcon");
const videoControls = document.querySelector("#controls");
const playButton = document.querySelector("#play-button");
const playButtonIcon = document.querySelector("#play-button-icon");
const pauseButton = document.querySelector("#pause-button");
const stopButton = document.querySelector("#stop-button");
const volumeSlider = document.querySelector("#change-vol");
const fullScreen = document.querySelector("#full-screen");


//remove default controls
player.controls = false
videoControls.classList.remove("hidden");

function playVideo() {
    if (playButtonIcon.classList.contains("fa-play")) {
    player.play();
    playButtonIcon.classList.remove("fa-play");
    playButtonIcon.classList.add("fa-pause");
 } else {
    player.pause();
    playButtonIcon.classList.remove("fa-pause");
    playButtonIcon.classList.add("fa-play");
 }
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
    if (!document.fullscreenElement) {
    vidCon.requestFullscreen();
    } else {
        document.exitFullscreen();
    }
}
//https://developer.mozilla.org/en-US/docs/Web/API/Fullscreen_API (Source for fullscreen) 


playButton.addEventListener("click", playVideo);
stopButton.addEventListener("click", stopVideo);
volumeSlider.addEventListener("change", changeVolume);
fullScreen.addEventListener("click", toggleFullScreen);
})();   

