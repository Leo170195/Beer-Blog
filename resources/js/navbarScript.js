
let navbar = document.querySelector("#nav")
console.log(navbar.offsetHeight);
window.addEventListener('scroll' , () => {
    if(window.pageYOffset + navbar.offsetHeight >= window.innerHeight) {
        navbar.classList.remove("bg-nav")
        navbar.classList.add("bg-nav2")
        navbar.classList.add("shadow")

    } else{
        navbar.classList.add("bg-nav")
        navbar.classList.remove("bg-nav2")
        navbar.classList.remove("shadow")
    }
})