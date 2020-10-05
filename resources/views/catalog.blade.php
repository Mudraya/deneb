@extends('layouts.master')

@section('title', __('main.catalog'))

@section('content')

    <!-- broad -->
    <div class="broad">
        <div class="container">
            <ul>
                <li><a href={{route('index')}}><span>@lang('main.title')</span></a></li>
                <li><a><span>@lang('main.our_bakery')</span></a></li>
                <li>{{$current_category->__('name')}}</li>
            </ul>
        </div>
    </div>
    <!-- broad -->

    <!-- products -->
    <main class="catalog">
        <div class="container">
            <aside class="sidebar">
                <div class="title-tablet">
                    {{$current_category->__('name')}}
                </div>

                <!-- for mob bt -->
                <div class="show-filter">
                    <a href="#" class="border-min-bt">
                        @lang('main.filter')
                    </a>
                </div>
                <!-- for mob bt -->

                <div class="all-filters">

                    <!-- for mob -->
                    <div class="filt-mob-tit">
                        @lang('main.filter')
                        <div class="close-filt"></div>
                    </div>

                    <div class="you-choose">
                        <div class="you-choose-in">
                            @if(request()->has('new'))
                            <a href="#">
                                <span>
                                    @lang('main.filter_properties.new')
                                </span>
                            </a>
                            @endif
                                @if(request()->has('hit'))
                                    <a href="#">
                                        <span>
                                            @lang('main.filter_properties.hit')
                                        </span>
                                    </a>
                                @endif
                                @if(request()->price_from)
                                    <a>
                                <span>
                                    @lang('main.from') {{(request()->price_from)}}
                                </span>
                                    </a>
                                @endif
                                @if(request()->price_to)
                                    <a>
                                <span>
                                    @lang('main.to') {{(request()->price_to)}}
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
                                                        {{ $category->__('name') }}
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
                            @lang('basket.price')
                        </div>
                        <div class="one-filter-descr" style="display: block;">
                            <div class="one-filter-descr-inp price-input-div">
                                <label for="price_from">@lang('main.from')
                                    <input type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from}}">
                                </label>

                                <label for="price_to">@lang('main.to')
                                    <input type="text" name="price_to" id="price_to" size="6"  value="{{ request()->price_to }}">
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- / one filter -->

                    <!-- one filter -->
                    <div class="one-filter has-act-filt">
                        <div class="one-filter-top active">
                            @lang('main.tags')
                        </div>
                        <div class="one-filter-descr" style="display: block;">
                            <div class="one-filter-descr-inp">
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" @if(request()->has('hit')) checked @endif name="hit" id="hit">
                                        <i></i>
                                        <span>@lang('main.filter_properties.hit')</span>
                                        <span class="num-filt">
                                                    ({{App\Models\Product::countHits()}})
                                        </span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif>
                                        <i></i>
                                        <span>@lang('main.filter_properties.new')</span>
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
                            @lang('main.confirm')
                        </button>
                        <a href="{{ route('catalog', $current_category->code) }}" class="border-min-bt">
                            @lang('main.reset')
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
                        @lang('main.your_choice')
                    </div>
                    <div class="you-choose-in">
                        @if(request()->has('new'))
                            <a>
                                <span>
                                    @lang('main.filter_properties.new')
                                </span>
                            </a>
                        @endif
                        @if(request()->has('hit'))
                            <a>
                                <span>
                                    @lang('main.filter_properties.hit')
                                </span>
                            </a>
                        @endif
                            @if(request()->price_from)
                                <a>
                                <span>
                                    @lang('main.from') {{(request()->price_from)}}
                                </span>
                                </a>
                            @endif
                            @if(request()->price_to)
                                <a>
                                <span>
                                    @lang('main.to') {{(request()->price_to)}}
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
