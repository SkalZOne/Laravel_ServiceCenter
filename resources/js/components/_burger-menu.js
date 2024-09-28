let menuContainer = document.querySelector(".header__navigation__burger-menu");
let menu = document.querySelector(".header__navigation__burger-menu__menu");

menuContainer.addEventListener("click", function (e) {

    if (
        e.target == menuContainer ||
        e.target == menuContainer.children[1] ||
        e.target == menuContainer.children[2]
    ) {

        if (menu.style.display == 'none') {
            menu.style.display = 'flex'
        } else {
            menu.style.display = 'none'
        }

    }
});


