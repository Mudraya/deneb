@extends('layouts.master')

@section('title', 'Главная')

@section('content')

    <!-- broad -->
    <div class="broad">
        <div class="container">
            <ul>
                <li><a href={{route('index')}}><span>Главная</span></a></li>
                <li><a><span>Наша кондитерская</span></a></li>
                <li>{{$current_category->name}}</li>
            </ul>
        </div>
    </div>
    <!-- broad -->

    <!-- products -->
    <main class="catalog">
        <div class="container">
            <aside class="sidebar">
                <div class="title-tablet">
                    {{$current_category->name}}
                </div>

                <!-- for mob bt -->
                <div class="show-filter">
                    <a href="#" class="border-min-bt">
                        Фильтры
                    </a>
                </div>
                <!-- for mob bt -->

                <div class="all-filters">

                    <!-- for mob -->
                    <div class="filt-mob-tit">
                        Фильтр
                        <div class="close-filt"></div>
                    </div>

                    <div class="you-choose">
                        <div class="you-choose-in">
                            @if(request()->has('new'))
                            <a href="#">
                                <span>
                                    Новые
                                </span>
                            </a>
                            @endif
                                @if(request()->has('hit'))
                                    <a href="#">
                                        <span>
                                            Хит
                                        </span>
                                    </a>
                                @endif
                                @if(request()->price_from)
                                    <a>
                                <span>
                                    от {{(request()->price_from)}}
                                </span>
                                    </a>
                                @endif
                                @if(request()->price_to)
                                    <a>
                                <span>
                                    до {{(request()->price_to)}}
                                </span>
                                    </a>
                                @endif
                        </div>
                    </div>
                    <!-- for mob -->

                    <!-- one filter -->
                    <div class="one-filter">
                        <div class="one-filter-top active">
                            Тип продукции
                        </div>
                        <div class="one-filter-descr" style="display: block;">
                            <div class="filter-menu">
                                <ul>
                                    @foreach($categories as $category)
                                        <li>
                                            <a {{ ($category->code==$current_category->code) ? 'class=active' : '' }} href="{{ route('catalog', $category->code) }}">
                                                <i>
                                                    <img src="{{ Storage::url($category->svg) }}" alt="">
                                                </i>
                                                <span>
                                                        {{ $category->name }}
                                                </span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- / one filter -->

                    <form method="GET" action="{{route('catalog', $current_category->code)}}">

                    <!-- one filter -->
                    <div class="one-filter">
                        <div class="one-filter-top active">
                            Цена
                        </div>
                        <div class="one-filter-descr" style="display: block;">
                            <div class="one-filter-descr-inp price-input-div">
                                <label for="price_from">от
                                    <input type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from}}">
                                </label>

                                <label for="price_to">до
                                    <input type="text" name="price_to" id="price_to" size="6"  value="{{ request()->price_to }}">
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- / one filter -->

                    <!-- one filter -->
                    <div class="one-filter has-act-filt">
                        <div class="one-filter-top active">
                            Метки
                        </div>
                        <div class="one-filter-descr" style="display: block;">
                            <div class="one-filter-descr-inp">
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" @if(request()->has('hit')) checked @endif name="hit" id="hit">
                                        <i></i>
                                        <span>Хиты</span>
                                        <span class="num-filt">
                                                    ({{App\Models\Product::countHits()}})
                                        </span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif>
                                        <i></i>
                                        <span>Новые</span>
                                        <span class="num-filt">
                                                    ({{App\Models\Product::countNews()}})
                                                </span>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- / one filter -->

                    <div class="filter-bt">
                        <button type="submit" class="def-min-bt">
                            Применить
                        </button>
                        <a href="{{ route('catalog', $current_category->code) }}" class="border-min-bt">
                            Сбросить
                        </a>
                    </div>

                    </form>
                </div>
            </aside>

            <!--productsg body -->
            <div class="catalog-body">
                <!-- about -->
                <div class="catalog-about desc">
                    <div class="catalog-about-thumb">
                        <img src="{{Storage::url($current_category->image)}}" alt="">
                    </div>
                    <div class="catalog-about-descr">
                        <h1>
                            {{$current_category->description}}
                        </h1>
                    </div>
                </div>
                <!-- / about -->

                <!-- active filter -->
                <div class="you-choose">
                    <div class="you-choose-name">
                        Ваш выбор
                    </div>
                    <div class="you-choose-in">
                        @if(request()->has('new'))
                            <a>
                                <span>
                                    Новые
                                </span>
                            </a>
                        @endif
                        @if(request()->has('hit'))
                            <a>
                                <span>
                                    Хит
                                </span>
                            </a>
                        @endif
                            @if(request()->price_from)
                                <a>
                                <span>
                                    от {{(request()->price_from)}}
                                </span>
                                </a>
                            @endif
                            @if(request()->price_to)
                                <a>
                                <span>
                                    до {{(request()->price_to)}}
                                </span>
                                </a>
                            @endif
                    </div>
                </div>
                <!-- / active filter -->

                <!--productsg items -->
                <div class="catalog-body-wrap">
                    <div class="catalog-body-wrap-in">
                        @foreach($products as $product)
                            @include('layouts.product_card', compact('product'))
                        @endforeach
                    </div>

                    {{ $products->links('layouts.pagination') }}

                </div>
                <!-- /productsg items -->
            </div>
            <!-- /productsg body -->

        </div>
    </main>
    <!-- /productsg -->

@endsection
