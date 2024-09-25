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
            <h1 class="first-block__first-numbers__number__title"><span class="first-block__first-numbers__number__title__symbol">#</span>1</h1>
            <p class="first-block__first-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dui </p>
        </div>
        <div class="first-block__first-numbers__number">
            <h1 class="first-block__first-numbers__number__title"><span class="first-block__first-numbers__number__title__symbol">#</span>2</h1>
            <p class="first-block__first-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dui </p>
        </div>
        <div class="first-block__first-numbers__number">
            <h1 class="first-block__first-numbers__number__title"><span class="first-block__first-numbers__number__title__symbol">#</span>3</h1>
            <p class="first-block__first-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dui </p>
        </div>
        <div class="first-block__first-numbers__number">
            <h1 class="first-block__first-numbers__number__title"><span class="first-block__first-numbers__number__title__symbol">#</span>4</h1>
            <p class="first-block__first-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dui </p>
        </div>
    </div>
    <div class="first-block__second-numbers">
    <div class="first-block__second-numbers__number">
            <h1 class="first-block__second-numbers__number__title"><span class="first-block__second-numbers__number__title__symbol">#</span>5</h1>
            <p class="first-block__second-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dui </p>
        </div>
        <div class="first-block__second-numbers__number">
            <h1 class="first-block__second-numbers__number__title"><span class="first-block__second-numbers__number__title__symbol">#</span>6</h1>
            <p class="first-block__second-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dui </p>
        </div>
        <div class="first-block__second-numbers__number">
            <h1 class="first-block__second-numbers__number__title"><span class="first-block__second-numbers__number__title__symbol">#</span>7</h1>
            <p class="first-block__second-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dui </p>
        </div>
        <div class="first-block__second-numbers__number">
            <h1 class="first-block__second-numbers__number__title"><span class="first-block__second-numbers__number__title__symbol">#</span>8</h1>
            <p class="first-block__second-numbers__number__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dui </p>
        </div>
    </div>
</div>

<div class="second-block">
    <img id="leftArrow" class="second-block__left-arrow" src="{{ URL::asset('/image/slider-left-arrow.svg') }}" alt="leftArrow">
    <div id="photoContainer" class="second-block__photos-container">
        <div class="second-block__photos-container__order">
            <img class="second-block__photos-container__order__image" src="{{ URL::asset('/image/5.jpg') }}" alt="">
            <div class="second-block__photos-container__order__text-field">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate laoreet sapien a sit ante.</span>
            </div>
        </div>
        <div class="second-block__photos-container__order">
        <img class="second-block__photos-container__order__image" src="{{ URL::asset('/image/2.jpg') }}" alt="">
            <div class="second-block__photos-container__order__text-field">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate laoreet sapien a sit ante.</span>
            </div>
        </div>
        <div class="second-block__photos-container__order">
        <img class="second-block__photos-container__order__image" src="{{ URL::asset('/image/1.jpg') }}" alt="">
            <div class="second-block__photos-container__order__text-field">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate laoreet sapien a sit ante.</span>
            </div>
        </div>
        <div class="second-block__photos-container__order">
        <img class="second-block__photos-container__order__image" src="{{ URL::asset('/image/1.jpg') }}" alt="">
            <div class="second-block__photos-container__order__text-field">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate laoreet sapien a sit ante.</span>
            </div>
        </div>
    </div>
    <img id="rightArrow" class="second-block__right-arrow" src="{{ URL::asset('/image/slider-right-arrow.svg') }}" alt="rightArrow">
</div>
@endsection