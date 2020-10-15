@extends('layouts.master')

@section('title', __('main.ordering'))

@section('content')

    <!-- broad -->
    <div class="broad">
        <div class="container">
            <ul>
                <li><a href="{{route('index')}}"><span>@lang('main.title')</span></a></li>
                <li>@lang('basket.ordering')</li>
            </ul>
        </div>
    </div>
    <!-- broad -->

    <!-- products -->
    <main class="catalog">
        <div class="container">

            <div class="bask-steps">

                <div class="mobile-step">
                    <div class="one-mob-step active">
                        <span>1</span>
                    </div>
                    <div class="one-mob-step">
                        <span>2</span>
                    </div>
                </div>

                <form action="{{ route('basket-confirm') }}" method="POST" enctype="multipart/form-data">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </br>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </br>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <!-- one step -->
                    <div class="one-step  active">
                        <div class="one-step-title">
                            <i>1</i>
                            <span>
                                @lang('basket.cart')
                            </span>

                            <a class="change-step" href="#">
                                @lang('basket.see')
                            </a>
                        </div>
                        <div class="one-step-descr" style="display: block;">

                            <div class="basket-inside">
                                <div class="one-lk-bask-table">
                                    @foreach($order->products as $product)
                                        <div class="one-lk-bask-tr">
                                            <div class="one-lk-bask-td thumb-td">
                                                <div class="one-lk-bask-thumb">
                                                    <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                                                        <img src="{{ Storage::url($product->image) }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="one-lk-bask-td descr-td">
                                                <div class="one-lk-bask-tit">
                                                    <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                                                        {{ $product->__('name') }}
                                                    </a>
                                                </div>
                                                <div class="one-lk-bask-price">
                                                    <div class="one-lk-bask-price-in">
                                                        <span>{{ $product->price }}</span>
                                                        {{ $currencySymbol }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="one-lk-bask-td num-td">
                                                <div class="one-lk-bask-num-name">
                                                    @lang('basket.count')
                                                </div>
                                                <div class="one-lk-bask-num-val">
                                                    <span>{{ $product->countInOrder }}</span> @lang('basket.items')
                                                </div>
                                            </div>
                                            <div class="one-lk-bask-td sum-td">
                                                <div class="one-lk-bask-sum-name">
                                                    @lang('basket.full_cost')
                                                </div>
                                                <div class="one-lk-bask-sum-val">
                                                    <span>{{ $product->price * $product->countInOrder }}</span> {{ $currencySymbol }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="last-inside-sum">
                                    <div class="last-inside-sum-in">
                                        <div class="inside-name">
                                            @lang('basket.total'):
                                        </div>
                                        <div class="inside-val">
                                            {{ $order->getFullSum() }} {{ $currencySymbol }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="next-step">
                                <a href="#" class="def-min-bt go-last">
                                    @lang('basket.next')
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- / one step -->

                    <!-- one step -->
                    <div class="one-step">
                        <div class="one-step-title">
                            <i>2</i>
                            <span>
                                @lang('basket.contact_details')
                            </span>
                            <a class="change-step" href="#">
                                @lang('basket.change')
                            </a>
                        </div>
                        <div class="one-step-descr" >
                            <div class="one-step-login">
                                <div class="tab-content" id="myTabContent-bask">
                                    <div class="tab-pane fade show active" id="home-bask" role="tabpanel" aria-labelledby="home-tab-bask">
                                        <div class="modal-log-form">
                                            <div class="one-line">
                                                <input name="name" id="name" value="@auth {{Auth::user()->name}} @endauth" type="text" placeholder="@auth {{Auth::user()->name}} @else @lang('basket.data.name') @endauth">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="one-line">
                                                <input name="phone" id="phone" value="" type="text" placeholder="@lang('basket.data.phone')">
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="one-line">
                                                <input name="email" id="email" value="@auth {{Auth::user()->email}} @endauth"  type="text" placeholder="@auth {{Auth::user()->email}} @else Email @endauth">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            @csrf
                                            <input type="submit" class="btn btn-order" value="@lang('basket.confirm_order')">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / one step -->

                </form>

            </div>

        </div>
    </main>
    <!-- / products -->


@endsection
