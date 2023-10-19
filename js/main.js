(() => {

gsap.registerPlugin(ScrollTrigger);

//Read more button toggle
// let 
// readMore = document.querySelector("#read-more"),
// addInfo = document.querySelector("#additional-desc");

// function showInfo() {
//    addInfo.classList.toggle("hidden"); 
// }

// readMore.addEventListener("click", showInfo);

let hamMenu = document.querySelector("#hamburger-menu");
let mobileMenu = document.querySelector("#mobile-menu")

function toggleMenu() {
    console.log("clicked on ham menu");
    mobileMenu.classList.toggle("hidden")
    mobileMenu.classList.toggle("visible")
    gsap.from(mobileMenu, {
            x: 300,
            duration: 0.5
    })
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


})();   

