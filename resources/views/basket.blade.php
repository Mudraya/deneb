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
                    <div class="one-mob-step">
                        <span>3</span>
                    </div>
                </div>

                <form action="{{ route('basket-confirm') }}" method="POST">

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
                                                    <span>{{ $product->countInOrder }}</span> шт
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
                                <ul class="nav nav-tabs" id="myTab-bask" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-bask" data-toggle="tab" href="#home-bask" role="tab" aria-controls="home-bask" aria-selected="true">Новый покупатель</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-bask" data-toggle="tab" href="#profile-bask" role="tab" aria-controls="profile-bask" aria-selected="false">Постоянный клиент</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent-bask">
                                    <div class="tab-pane fade show active" id="home-bask" role="tabpanel" aria-labelledby="home-tab-bask">
                                        <div class="modal-log-form">
                                            <div class="one-line">
                                                <input name="name" id="name" value="" type="text" placeholder="Имя и Фамилия">
                                            </div>
                                            <div class="one-line">
                                                <select>
                                                    <option value="">Город</option>
                                                    <option value="">Город</option>
                                                    <option value="">Город</option>
                                                    <option value="">Город</option>
                                                </select>
                                            </div>
                                            <div class="one-line">
                                                <input name="phone" id="phone" value="" type="text" placeholder="Телефон">
                                            </div>
                                            <div class="one-line">
                                                <input name="email" id="email" value=""  type="text" placeholder="Email">
                                            </div>
                                            <div class="next-step">
                                                <a href="#" class="def-min-bt">
                                                    @lang('basket.next')
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile-bask" role="tabpanel" aria-labelledby="profile-tab-bask">
                                        <div class="modal-log-form">
                                            <div class="one-line">
                                                <input type="text" placeholder="Email или телефон">
                                            </div>
                                            <div class="one-line">
                                                <input type="text" placeholder="Пароль">
                                            </div>
                                            <div class="forg-pass">
                                                <a href="#">
                                                    Забыли пароль?
                                                </a>
                                            </div>
                                            <div class="modal-log-bt">
                                                <a href="#" class="def-min-bt">
                                                    Войти
                                                </a>
                                            </div>
                                            <div class="or-soc">
                                                <div class="or">
                                                            <span>
                                                                или
                                                            </span>
                                                </div>
                                                <div class="log-soc">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M16 32.0099C24.8366 32.0099 32 24.8464 32 16.0099C32 7.17333 24.8366 0.0098877 16 0.0098877C7.16344 0.0098877 0 7.17333 0 16.0099C0 24.8464 7.16344 32.0099 16 32.0099Z" fill="#3B5998"/>
                                                                    <path d="M20.2378 16.4192H17.3828V26.8786H13.0573V16.4192H11V12.7433H13.0573V10.3646C13.0573 8.66362 13.8653 6 17.4213 6L20.6254 6.0134V9.58145H18.3006C17.9193 9.58145 17.3831 9.77197 17.3831 10.5834V12.7468H20.6157L20.2378 16.4192Z" fill="white"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.03719 19.3409L6.92331 23.4992L2.85212 23.5853C1.63544 21.3286 0.945312 18.7467 0.945312 16.0029C0.945312 13.3497 1.59056 10.8477 2.73431 8.64465H2.73519L6.35969 9.30915L7.94744 12.9119C7.61512 13.8807 7.434 14.9207 7.434 16.0029C7.43412 17.1774 7.64687 18.3027 8.03719 19.3409Z" fill="#FBBB00"/>
                                                                    <path d="M32.6695 13.0139C32.8532 13.9817 32.949 14.9813 32.949 16.0029C32.949 17.1484 32.8286 18.2657 32.5991 19.3435C31.8203 23.0112 29.7851 26.2139 26.9658 28.4802L26.9649 28.4794L22.3997 28.2464L21.7535 24.213C23.6243 23.1159 25.0863 21.3989 25.8564 19.3435H17.3008V13.0139H25.9812H32.6695Z" fill="#518EF8"/>
                                                                    <path d="M26.9606 28.4794L26.9614 28.4803C24.2195 30.6842 20.7364 32.0029 16.9447 32.0029C10.8516 32.0029 5.554 28.5972 2.85156 23.5853L8.03662 19.3409C9.38781 22.9471 12.8665 25.5141 16.9447 25.5141C18.6977 25.5141 20.3399 25.0403 21.7491 24.213L26.9606 28.4794Z" fill="#28B446"/>
                                                                    <path d="M27.1584 3.68637L21.9751 7.92987C20.5166 7.01824 18.7926 6.49162 16.9456 6.49162C12.7751 6.49162 9.23131 9.17643 7.94781 12.9119L2.73549 8.64462H2.73462C5.39749 3.51056 10.7619 0.00286865 16.9456 0.00286865C20.8278 0.00286865 24.3874 1.38574 27.1584 3.68637Z" fill="#F14336"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / one step -->

                    <!-- one step -->
                    <div class="one-step">
                        <div class="one-step-title">
                            <i>3</i>
                            <span>
                                        @lang('basket.shipping_payment')
                                    </span>
                        </div>
                        <div class="one-step-descr">
                            <div class="bask-del">
                                <div class="bask-step-name">
                                    Доставка на отделение Новой Почты
                                </div>
                                <div class="bask-del-in">
                                    <div class="one-line">
                                        <input type="text" placeholder="Город">
                                    </div>
                                    <div class="one-line">
                                        <select name="" id="">
                                            <option value="">Новая почта №</option>
                                            <option value="">Новая почта №1</option>
                                            <option value="">Новая почта №2</option>
                                            <option value="">Новая почта №3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="bask-pay">
                                <div class="bask-step-name">
                                    Оплата
                                </div>
                                <div class="one-radio">
                                    <label>
                                        <input name="pay" type="radio">
                                        <i></i>
                                        <span>
                                                    Оплатить сейчас картой Visa/Mastercard
                                                </span>
                                    </label>
                                </div>
                                <div class="one-radio">
                                    <label>
                                        <input name="pay" type="radio">
                                        <i></i>
                                        <span>
                                                    Оплатить заказ при получении
                                                </span>
                                    </label>
                                </div>
                            </div>
                            <div class="bask-user">
                                <div class="bask-step-name">
                                    Получатель
                                </div>
                                <div class="bask-user-form">
                                    <div class="one-line">
                                        <input type="text" placeholder="Имя">
                                    </div>
                                    <div class="one-line">
                                        <input type="text" placeholder="Фамилия">
                                    </div>
                                    <div class="one-line">
                                        <input type="text" placeholder="Отчество">
                                    </div>
                                    <div class="one-line">
                                        <input type="text" placeholder="Телефон">
                                    </div>
                                    <div class="one-line">
                                        <input type="text" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            @csrf
                            <input type="submit" class="btn btn-order" value="@lang('basket.confirm_order')">
                        </div>
                    </div>
                    <!-- / one step -->

                </form>

            </div>

        </div>
    </main>
    <!-- / products -->


@endsection
