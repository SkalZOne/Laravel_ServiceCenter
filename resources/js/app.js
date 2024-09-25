import "./bootstrap";

// slider
leftArrow.addEventListener("click", function () {
    let imageWidth = photoContainer.children[0].offsetWidth;

    photoContainer.scroll({
        left: photoContainer.scrollLeft - (imageWidth + 24),
        top: 0,
        behavior: "smooth",
    });
});

rightArrow.addEventListener("click", function () {
    let imageWidth = photoContainer.children[0].offsetWidth;
    
    photoContainer.scroll({
        left: photoContainer.scrollLeft + imageWidth + 24,
        top: 0,
        behavior: "smooth",
    });
});
