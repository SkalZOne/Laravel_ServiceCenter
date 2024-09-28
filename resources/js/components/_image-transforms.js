let title = document.querySelector('.header__title')
let imageParentDiv = document.querySelector('.header__gradient-over-image')
let image = document.querySelector('.header__background-image')

imageParentDiv.addEventListener('mousemove', function(e) {
    let rect = e.target.getBoundingClientRect();
    let x = e.clientX - rect.left;

    image.style.transform = `translateX(${-x/7}px)`
})