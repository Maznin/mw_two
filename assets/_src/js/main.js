/* Toggle Menu */
let mobileMenu = document.getElementById("mainNav")
let mobileMenuToggle = document.getElementById("mobileToggler")
let mobileOpenIcon = document.getElementById("mobileOpenIcon")
let mobileCloseIcon = document.getElementById("mobileCloseIcon")

mobileMenuToggle.addEventListener('click', e => {
    e.preventDefault
    
    // Fade in and out mobile menu and toggle menu icon
    if (mobileMenu.classList.contains("menu-show")) {
        mobileMenu.classList.remove("menu-show")
        mobileCloseIcon.style.display = "none"
        mobileOpenIcon.style.display = "block"
        setTimeout(() => {
            mobileMenu.style.display = "none"
        }, 400)
    } else {
        mobileMenu.style.display = "block"
        mobileCloseIcon.style.display = "block"
        mobileOpenIcon.style.display = "none"
        setTimeout(() => {
            mobileMenu.classList.add("menu-show")
        }, 10)
    }
})