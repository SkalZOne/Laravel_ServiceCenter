import "./bootstrap";

// slider
secondSliderLeftArrow.addEventListener("click", function () {
    let imageWidth = secondSliderPhoto.children[0].offsetWidth;

    secondSliderPhoto.scroll({
        left: secondSliderPhoto.scrollLeft - (imageWidth + 24),
        top: 0,
        behavior: "smooth",
    });
});

secondSliderRightArrow.addEventListener("click", function () {
    let imageWidth = secondSliderPhoto.children[0].offsetWidth;

    secondSliderPhoto.scroll({
        left: secondSliderPhoto.scrollLeft + imageWidth + 24,
        top: 0,
        behavior: "smooth",
    });
});

thirdSliderLeftArrow.addEventListener("click", function () {

    let imageWidth = thirdSliderPhoto.children[0].offsetWidth;

    thirdSliderPhoto.scroll({
        left: thirdSliderPhoto.scrollLeft - (imageWidth + 24),
        top: 0,
        behavior: "smooth",
    });
    
    thirdSliderText.textContent = '123'
});

thirdSliderRightArrow.addEventListener("click", function () {

    let imageWidth = thirdSliderPhoto.children[0].offsetWidth;

    thirdSliderPhoto.scroll({
        left: thirdSliderPhoto.scrollLeft + imageWidth + 24,
        top: 0,
        behavior: "smooth",
    });

    thirdSliderText.textContent = '123'
});
