@extends('layouts.all')

@php
    $title = "Тур в Санкт-Петербург - МирТуризма 46";
    $description = "Тур в Санкт-Петербург - МирТуризма 46";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-header></x-header>

    <section class="banner">
        <div class="bnr_img">
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="bnr_text">
                <h1>Экскурсионный тур в <br><span>Санкт-Петербург</span></h1>
                <p class="subtext">Специальное предложение по социальной программе стимулирования развития детского туризма.</p>
                <x-cerecter></x-cerecter>
                <a class="button" href="#">Узнать подробности</a>
            </div>
        </div>
    </section>

    <section class="about_section">
        <div class="container">
            <div class="about">
                <div class="photo">
                    <div class="col">
                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp.jpg') }}" alt="">
                        </div>
                        <div class="photo_wrap photo_smile">
                            <img src="{{ asset('img/dp/dp1.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="col">
                        <div class="photo_wrap photo_smile">
                            <img src="{{ asset('img/dp/dp2.jpg') }}" alt="">
                        </div>

                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp3.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="col col_one">
                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="text">
                    <div class="inner">
                        <h2>Экскурсионный тур в Санкт-Петербург для школьников по  целевой программе</h2>
                        <p>Социальная программа стимулирования развития детского туризма.  Учащимся школ Курской области предоставляется возможность осуществить путешествие в Санкт-Петербург по субсидированной специальной цене в период ВЕСНА-ЛЕТО 2025</p>
                        <x-persons></x-persons>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="location_section">
        <div class="container">
            <h2>Локации которые <br>Вы посетите</h2>
            <x-locations></x-locations>
        </div>
    </section>

@endsection

