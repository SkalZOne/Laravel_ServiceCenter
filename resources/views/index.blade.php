@extends('layouts/main')

@section('content')
<div class="first-block">
    <h1 class="first-block__title">Почему стоит выбрать именно нас?</h1>
    <div class="first-block__dots four-dots">
        <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
    </div>
    <p class="first-block__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant tincidunt aliquam
        tincidunt pretium sodales. Tristique odio pellentesque et tincidunt posuere arcu purus lobortis risus. Urna, ut
        amet odio orci magnis praesent ultrices. Praesent malesuada lacus tellus tristique sit at. Sed viverra nulla nam
        arcu, non iaculis pretium, volutpat. </p>

    <div class="first-block__first-numbers">
        <div class="first-block__first-numbers__number">
            <h1 class="first-block__first-numbers__number__title"><span
                    class="first-block__first-numbers__number__title__symbol">#</span>1</h1>
            <p class="first-block__first-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Quisque dui </p>
        </div>
        <div class="first-block__first-numbers__number">
            <h1 class="first-block__first-numbers__number__title"><span
                    class="first-block__first-numbers__number__title__symbol">#</span>2</h1>
            <p class="first-block__first-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Quisque dui </p>
        </div>
        <div class="first-block__first-numbers__number">
            <h1 class="first-block__first-numbers__number__title"><span
                    class="first-block__first-numbers__number__title__symbol">#</span>3</h1>
            <p class="first-block__first-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Quisque dui </p>
        </div>
        <div class="first-block__first-numbers__number">
            <h1 class="first-block__first-numbers__number__title"><span
                    class="first-block__first-numbers__number__title__symbol">#</span>4</h1>
            <p class="first-block__first-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Quisque dui </p>
        </div>
    </div>
    <div class="first-block__second-numbers">
        <div class="first-block__second-numbers__number">
            <h1 class="first-block__second-numbers__number__title"><span
                    class="first-block__second-numbers__number__title__symbol">#</span>5</h1>
            <p class="first-block__second-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Quisque dui </p>
        </div>
        <div class="first-block__second-numbers__number">
            <h1 class="first-block__second-numbers__number__title"><span
                    class="first-block__second-numbers__number__title__symbol">#</span>6</h1>
            <p class="first-block__second-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Quisque dui </p>
        </div>
        <div class="first-block__second-numbers__number">
            <h1 class="first-block__second-numbers__number__title"><span
                    class="first-block__second-numbers__number__title__symbol">#</span>7</h1>
            <p class="first-block__second-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Quisque dui </p>
        </div>
        <div class="first-block__second-numbers__number">
            <h1 class="first-block__second-numbers__number__title"><span
                    class="first-block__second-numbers__number__title__symbol">#</span>8</h1>
            <p class="first-block__second-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Quisque dui </p>
        </div>
    </div>
</div>

<div class="second-block">
    <img id="secondSliderLeftArrow" class="second-block__left-arrow"
        src="{{ URL::asset('/image/slider-left-arrow.svg') }}" alt="leftArrow">
    <div id="secondSliderPhoto" class="second-block__photos-container">
        <div class="second-block__photos-container__order">
            <img class="second-block__photos-container__order__image" src="{{ URL::asset('/image/5.jpg') }}" alt="">
            <div class="second-block__photos-container__order__text-field">
                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda expedita hic eveniet cumque!
                    Veritatis enim earum doloremque repudiandae sequi dignissimos minima facilis quos ipsum
                    delectus.</span>
            </div>
        </div>
        <div class="second-block__photos-container__order">
            <img class="second-block__photos-container__order__image" src="{{ URL::asset('/image/2.jpg') }}" alt="">
            <div class="second-block__photos-container__order__text-field">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate laoreet sapien a sit
                    ante.</span>
            </div>
        </div>
        <div class="second-block__photos-container__order">
            <img class="second-block__photos-container__order__image" src="{{ URL::asset('/image/1.jpg') }}" alt="">
            <div class="second-block__photos-container__order__text-field">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate laoreet sapien a sit
                    ante.</span>
            </div>
        </div>
        <div class="second-block__photos-container__order">
            <img class="second-block__photos-container__order__image" src="{{ URL::asset('/image/6.png') }}" alt="">
            <div class="second-block__photos-container__order__text-field">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate laoreet sapien a sit
                    ante.</span>
            </div>
        </div>
        <div class="second-block__photos-container__order">
            <img class="second-block__photos-container__order__image" src="{{ URL::asset('/image/3.png') }}" alt="">
            <div class="second-block__photos-container__order__text-field">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate laoreet sapien a sit
                    ante.</span>
            </div>
        </div>
    </div>
    <img id="secondSliderRightArrow" class="second-block__right-arrow"
        src="{{ URL::asset('/image/slider-right-arrow.svg') }}" alt="rightArrow">
</div>
<div class="third-block">
    <section class="third-block__first-section">
        <div class="third-block__first-section__container third-block__container">
            <img src="{{ URL::asset('/image/blank-car.svg') }}" alt="blankCar">
            <p>Материалы от лучших компаний</p>
        </div>
        <p class="third-block__first-section__text third-block__text">Lorem ipsum dolor sit amet, consectetur adipiscing
            elit. Pretium, rutrum est, molestie proin tristique duis
            sed. Morbi suspendisse amet nisl vestibulum risus. Quis pretium</p>
    </section>
    <div class="third-block__dots four-dots third-block__first-dots">
        <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
    </div>
    <section class="third-block__second-section">
        <div class="third-block__first-section__container third-block__container">
            <img src="{{ URL::asset('/image/oil-spray.svg') }}" alt="oilSpray">
            <p>Опытные мастера</p>
        </div>
        <p class="third-block__first-section__text third-block__text">Lorem ipsum dolor sit amet, consectetur adipiscing
            elit. Et donec elementum egestas vitae ullamcorper. Amet volutpat ornare pharetra amet adipiscing orci,
            lectus aenean ultricies. Erat viverra eget blandit ornare.</p>
    </section>
    <div class="third-block__dots four-dots third-block__second-dots">
        <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
    </div>
    <section class="third-block__third-section">
        <div class="third-block__first-section__container third-block__container">
            <img src="{{ URL::asset('/image/car-check.svg') }}" alt="carCheck">
            <p>Гарантия на все виды работы</p>
        </div>
        <p class="third-block__first-section__text third-block__text">Lorem ipsum dolor sit amet, consectetur adipiscing
            elit. Vestibulum volutpat.</p>
    </section>
    <div class="third-block__slider">
        <div id="thirdSliderPhoto" class="third-block__slider__photos">
            <img class="third-block__slider__photo" src="{{ URL::asset('/image/1.jpg') }}"
                alt="sliderPhoto"></img>
            <img class="third-block__slider__photo" src="{{ URL::asset('/image/1.jpg') }}"
                alt="sliderPhoto"></img>
        </div>
        <div class="third-block__slider__footer">
            <img id="thirdSliderLeftArrow" class="third-block__slider__footer__slider-btn"
                src="{{ URL::asset('/image/slider-left-arrow.svg') }}" alt="leftButton"
                class="third-block__slider__footer__left-button">
            <p id="thirdSliderText" class="third-block__slider__footer__text">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Pellentesque auctor nibh feugiat est. Consectetur lectus.</p>
            <img id="thirdSliderRightArrow" class="third-block__slider__footer__slider-btn"
                src="{{ URL::asset('/image/slider-right-arrow.svg') }}" alt="rightButton"
                class="third-block__slider__footer__right-button">
        </div>
    </div>
</div>
@endsection