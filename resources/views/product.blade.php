@extends('layouts.master')

@section('title', 'Главная')

@section('content')


    <!-- broad -->
    <div class="broad">
        <div class="container">
            <ul>
                <li><a href="#"><span>Главная</span></a></li>
                <li><a href="#"><span>Инсектициды</span></a></li>
                <li>Антиколорад</li>
            </ul>
        </div>
    </div>
    <!-- broad -->

    <!-- catalog -->
    <main class="catalog">
        <div class="container">
            <div class="product">

                <!-- product top -->
                <div class="product-top">

                    <div class="mobile-title">
                        Антиколорад
                    </div>

                    <div class="product-thumb">
                        <a href="#">
                            <img src="/images/prod-thumb.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-descr">
                        <div class="product-tit">
                            <h1>
                                Антиколорад
                            </h1>
                        </div>

                        <div class="product-text">
                            Комбінований високоефективний контактно-системний інсектицид широкого спектру дії з акарицидними та репелентними властивостями для захисту широкого спектру культур від комплексу шкідників.
                        </div>

                        <div class="product-info">
                            <div class="price-wrap">
                                <div class="product-price">
                                    <span>24</span> грн
                                </div>
                            </div>

                            <div class="btns-prod">
                                <div class="product-bay">
                                    <a href="#" class="def-bt" data-toggle="modal" data-target="#bask">
                                        Купить
                                    </a>
                                </div>
                            </div>

                            <div class="product-number">
                                <div class="num-name">
                                    Количество, шт.
                                </div>
                                <div class="num-wrap">
                                    <div class="num-block">
                                        <div class="num-in">
                                            <span class="minus dis"></span>
                                            <input type="text" class="in-num" value="1" readonly="">
                                            <span class="plus"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / product top -->

            </div>
        </div>
    </main>
    <!-- / catalog -->

@endsection
