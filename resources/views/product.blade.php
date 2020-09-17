@extends('layouts.master')

@section('title', $product->name)

@section('content')


    <!-- broad -->
    <div class="broad">
        <div class="container">
            <ul>
                <li><a href="{{ route('index') }}"><span>@lang('main.title')</span></a></li>
                <li><a href="{{ route('catalog', $category->code) }}"><span>{{ $category->__('name') }}</span></a></li>
                <li>{{ $product->__('name') }}</li>
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
                        {{ $product->__('name') }}
                    </div>

                    <div class="product-thumb">
                        <a href="#">
                            <img src="{{ Storage::url($product->image) }}" alt="">
                        </a>
                    </div>
                    <div class="product-descr">
                        <div class="product-tit">
                            <h1>
                                {{ $product->__('name') }}
                            </h1>
                        </div>

                        <div class="product-text">
                            {{ $product->__('description') }}
                        </div>

                        <div class="product-info">
                            <div class="price-wrap">
                                <div class="product-price">
                                    <span>{{ $product->price }}</span> @lang('main.uah')
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
                                            <span>@lang('main.not_available')</span>
                                            <br>
                                            <span>@lang('product.tell_me'):</span>
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
                                                <button type="submit" class="def-bt" role="button">@lang('product.subscribe')</button>
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
