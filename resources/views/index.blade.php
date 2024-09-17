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
                            <img src="{{ asset('img/dp/dp.webp') }}" alt="">
                        </div>
                        <div class="photo_wrap photo_smile">
                            <img src="{{ asset('img/dp/dp1.webp') }}" alt="">
                        </div>
                    </div>

                    <div class="col">
                        <div class="photo_wrap photo_smile">
                            <img src="{{ asset('img/dp/dp2.webp') }}" alt="">
                        </div>

                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp3.webp') }}" alt="">
                        </div>
                    </div>

                    <div class="col col_one">
                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp4.webp') }}" alt="">
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

    <section class="program_section central_section">
        <div class="container">
            <h2>Ознакомьтесь с<br>программой тура Санкт-Петербург</h2>
            <a class="download_btn" href="#"><span>Скачать программу для <br>ознакомления в формате PDF</span></a>
            <x-program></x-program>
        </div>
    </section>

    <section section="contacts_section">
        <div class="container">
            <div class="contacts_blk">
                <x-map.map-in-page></x-map.map-in-page>
                <div class="text">
                    <h2>Свяжитесь с нами любым удобным способом:</h2>
                    <a class="phone" href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>
                    <a class="email" href="mailto:{{ phone_format(config('contacts.email')) }}">{{ config('contacts.email') }}</a>
                    <p>{{ config('contacts.adress') }}</p>

                    <x-social-net></x-social-net>
                </div>
            </div>
        </div>
    </section>

@endsection

