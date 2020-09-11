@extends('layouts.master')

@section('title', 'Главная')

@section('content')


    <!-- broad -->
    <div class="broad">
        <div class="container">
            <ul>
                <li><a href="{{ route('index') }}"><span>Главная</span></a></li>
                <li><a href="{{ route('catalog', $category->code) }}"><span>{{ $category->name }}</span></a></li>
                <li>{{ $product->name }}</li>
            </ul>
        </div>
    </div>
    <!-- broad -->

    <!--productsg -->
    <main class="catalog">
        <div class="container">
            <div class="product">

                <!-- product top -->
                <div class="product-top">

                    <div class="mobile-title">
                        {{ $product->name }}
                    </div>

                    <div class="product-thumb">
                        <a href="#">
                            <img src="{{ Storage::url($product->image) }}" alt="">
                        </a>
                    </div>
                    <div class="product-descr">
                        <div class="product-tit">
                            <h1>
                                {{ $product->name }}
                            </h1>
                        </div>

                        <div class="product-text">
                            {{ $product->description }}
                        </div>

                        <div class="product-info">
                            <div class="price-wrap">
                                <div class="product-price">
                                    <span>{{ $product->price }}</span> грн
                                </div>
                            </div>

                            <div class="btns-prod">
                                <div class="product-bay">
                                        @if($product->isAvailable())
                                        <form action="{{ route('basket-add', $product) }}" method="POST">
                                            <button type="submit" class="def-bt" role="button">
                                                Купить
                                            </button>
                                            @csrf
                                        </form>
                                        @else
                                            <span>Не доступен</span>
                                            <br>
                                            <span>Сообщить мне, когда товар появится в наличии:</span>
                                            <div class="warning">
                                                @if($errors->get('email'))
                                                    {!! $errors->get('email')[0] !!}
                                                @endif
                                            </div>
                                            <form method="POST" action="{{ route('subscription', $product) }}">
                                                @csrf
                                                <div class="one-line">
                                                <input type="text" name="email" id="email">
                                                </div>
                                                <button type="submit" class="def-bt" role="button">Отправить</button>
                                            </form>
                                        @endif

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- / product top -->

            </div>
        </div>
    </main>
    <!-- /productsg -->

@endsection
