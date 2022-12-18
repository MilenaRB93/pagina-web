<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro especialiado en educación</title>
    <link rel="stylesheet" href="/css/style.css?<?php echo rand(1, 9999); ?>">
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="header__container">
                <div class="header__logo">
                    <a href="/">
                        <img src="/media/logo.jpg">
                    </a>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/nosotros/">Nosotros</a></li>
                        <li><a href="/instalaciones/">Instalaciones</a></li>
                        <li><a href="/inscripciones/">Inscripciones</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="banner">
            <div class="banner__container">
                <ul class="banner__slider">
                    <li id="slide1">
                        <img src="/media/banner/banner-1.jpeg?4" />
                    </li>
                    <li id="slide2">
                        <img src="/media/banner/banner-2.jpeg?1" />
                    </li>
                    <li id="slide3">
                        <img src="/media/banner/banner-3.jpg?7" />
                    </li>
                </ul>

                <div class="banner__menu">
                    <a href="#slide1">1</a>
                    <a href="#slide2">2</a>
                    <a href="#slide3">3</a>
                </div>

            </div>
        </div>