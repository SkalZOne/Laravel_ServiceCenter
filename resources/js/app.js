import "./bootstrap";

// First slider
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

// Second slider
thirdSliderLeftArrow.addEventListener("click", function () {
    let imageWidth = thirdSliderPhoto.children[0].offsetWidth;

    thirdSliderPhoto.scroll({
        left: thirdSliderPhoto.scrollLeft - (imageWidth + 24),
        top: 0,
        behavior: "smooth",
    });

    thirdSliderText.textContent = "123";
});

thirdSliderRightArrow.addEventListener("click", function () {
    let imageWidth = thirdSliderPhoto.children[0].offsetWidth;

    thirdSliderPhoto.scroll({
        left: thirdSliderPhoto.scrollLeft + imageWidth + 24,
        top: 0,
        behavior: "smooth",
    });

    thirdSliderText.textContent = "123";
});

// Services cards
servicesLeftBtn.addEventListener("click", function () {
    let innerText = `<div class="fourth-block__services-cards__first-card">
            <img class="fourth-block__services-cards__first-card__image" src="/image/car-washing.svg" alt="carWashing">
            <p class="fourth-block__services-cards__first-card__title">Защитные пленки</p>
            <p class="fourth-block__services-cards__first-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
            <button class="fourth-block__services-cards__first-card__description-button btn-out"><p class="btn-out__text">Подробнее</p></button>
        </div>
        <div class="fourth-block__services-cards__second-card">
        <img class="fourth-block__services-cards__first-card__image" src="/image/blank-car.svg" alt="blankCar">
            <p class="fourth-block__services-cards__first-card__title">Цветные пленки</p>
            <p class="fourth-block__services-cards__first-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
            <button class="fourth-block__services-cards__first-card__description-button btn-out"><p class="btn-out__text">Подробнее</p></button>
        </div>
        <div class="fourth-block__services-cards__third-card">
        <img class="fourth-block__services-cards__first-card__image" src="/image/oil-spray.svg" alt="oilSpray">
            <p class="fourth-block__services-cards__first-card__title">Дизайн</p>
            <p class="fourth-block__services-cards__first-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
            <button class="fourth-block__services-cards__first-card__description-button btn-out"><p class="btn-out__text">Подробнее</p></button>
        </div>
        <div class="fourth-block__services-cards__fourth-card">
        <img class="fourth-block__services-cards__first-card__image" src="/image/car-check.svg" alt="carCheck">
            <p class="fourth-block__services-cards__first-card__title">Оклейка салона</p>
            <p class="fourth-block__services-cards__first-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
            <button class="fourth-block__services-cards__first-card__description-button btn-out"><p class="btn-out__text">Подробнее</p></button>
        </div>`;

    if (!(servicesCards.innerHTML == innerText)) {
        servicesLeftBtn.classList.add("btn-active");
        servicesRightBtn.classList.remove("btn-active");
        servicesCards.innerHTML = innerText;
    }
});

servicesRightBtn.addEventListener("click", function () {
    let innerText = `<div class="fourth-block__services-cards__first-card">
            <img class="fourth-block__services-cards__first-card__image" src="/image/car-washing.svg" alt="carWashing">
            <p class="fourth-block__services-cards__first-card__title">Установка внештатного оборудования</p>
            <p class="fourth-block__services-cards__first-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
            <button class="fourth-block__services-cards__first-card__description-button btn-out"><p class="btn-out__text">Подробнее</p></button>
        </div>
        <div class="fourth-block__services-cards__second-card">
        <img class="fourth-block__services-cards__first-card__image" src="/image/blank-car.svg" alt="blankCar">
            <p class="fourth-block__services-cards__first-card__title">Проверка и консультация со специалистами</p>
            <p class="fourth-block__services-cards__first-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
            <button class="fourth-block__services-cards__first-card__description-button btn-out"><p class="btn-out__text">Подробнее</p></button>
        </div>
        <div class="fourth-block__services-cards__third-card">
        <img class="fourth-block__services-cards__first-card__image" src="/image/oil-spray.svg" alt="oilSpray">
            <p class="fourth-block__services-cards__first-card__title">Техобслуживание</p>
            <p class="fourth-block__services-cards__first-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
            <button class="fourth-block__services-cards__first-card__description-button btn-out"><p class="btn-out__text">Подробнее</p></button>
        </div>
        <div class="fourth-block__services-cards__fourth-card">
        <img class="fourth-block__services-cards__first-card__image" src="/image/car-check.svg" alt="carCheck">
            <p class="fourth-block__services-cards__first-card__title">Диагностика и ремонт системы освещения</p>
            <p class="fourth-block__services-cards__first-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
            <button class="fourth-block__services-cards__first-card__description-button btn-out"><p class="btn-out__text">Подробнее</p></button>
        </div>`;

    if (!(servicesCards.innerHTML == innerText)) {
        servicesRightBtn.classList.add("btn-active");
        servicesLeftBtn.classList.remove("btn-active");
        servicesCards.innerHTML = innerText;
    }
});

function scrollPhotos(element, interval) {
    let photoWidth = element.children[0].offsetWidth;

    setInterval(function () {
        if ((element.scrollLeft + element.offsetWidth) == element.scrollWidth) {
            setTimeout(function() {
                element.scrollLeft = 0
            }, 5000)
        }

        element.scroll({
            left: element.scrollLeft + photoWidth,
            top: 0,
            behavior: "smooth",
        });
    }, interval);
}

scrollPhotos(photosAutoSliderRightFirst, 5000);
scrollPhotos(photosAutoSliderRightSecond, 7000);
scrollPhotos(photosAutoSliderRightThird, 3000);
