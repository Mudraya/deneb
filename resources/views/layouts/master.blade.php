<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/images/favicon.png">

    <title>Box for tea</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Neucha" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" media="screen" href="/css/superfish.css">

    {{--<link rel="stylesheet" media="screen" href="/css/bootstrap.min.css">--}}

    <link href="/css/style.css" rel="stylesheet" type="text/css" />


</head>

<body>

<!-- Modal -->
<div class="modal fade mini-modal" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <span class="close-modal" data-dismiss="modal" aria-label="Close"></span>

            <div class="modal-wrap">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Регистрация</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="modal-log-form">
                            <div class="one-line">
                                <input type="text" placeholder="Имя">
                            </div>
                            <div class="one-line">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="one-line">
                                <input type="text" placeholder="Пароль">
                            </div>
                            <div class="modal-log-bt">
                                <a href="#" class="def-min-bt">
                                    Регистрация
                                </a>
                            </div>
                        </div>
                    </div>
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
                                <a data-toggle="modal" href="#login">
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

<!-- Modal bask -->
<div class="modal fade big-modal" id="basket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <span class="close-modal" data-dismiss="modal" aria-label="Close"></span>

            <div class="modal-wrap">
                <div class="modal-bask">
                    <div class="modal-bask-tit">
                        Корзина
                    </div>
                    <div class="modal-bask-wrap">
                        @if(isset($order))
                            <div class="one-modal-bask-item">

                                <div class="one-modal-item-table">
                                    @foreach($order->products as $product)
                                        <!-- one item -->
                                        <div class="modal-item-tr">
                                            <div class="modal-item-td td-thumb">
                                                <div class="modal-item-thumb">

                                                    <div class="del-item"></div>
                                                    <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                                                        <img src="{{ $product->image }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="modal-item-td td-descr">
                                                <div class="modal-item-in-table">
                                                    <div class="del-item mob"></div>
                                                    <div class="modal-item-tr">
                                                        <div class="modal-item-td td-wrap">
                                                            <div class="modal-item-name">
                                                                {{ $product->name }}
                                                            </div>
                                                            <div class="modal-item-info">
                                                                <div class="modal-item-price">
                                                                    <div class="modal-item-price-in">
                                                                        <span>{{ $product->price }}</span> грн
                                                                    </div>
                                                                </div>
                                                                <div class="modal-item-number">
                                                                    <div class="num-block">
                                                                        <div class="num-in">

                                                                            <div class="btn-group form-inline">
                                                                                <form action="{{ route('basket-remove', $product) }}" method="POST">
                                                                                    <button type="submit" class="btn btn-danger"
                                                                                            href=""><span
                                                                                            class="minus dis" aria-hidden="true"></span></button>
                                                                                    @csrf
                                                                                </form>
                                                                                <input type="text" class="in-num" value="{{ $product->pivot->count }}" readonly="">
                                                                                <form action="{{ route('basket-add', $product) }}" method="POST">
                                                                                    <button type="submit" class="btn btn-success"
                                                                                            href=""><span
                                                                                            class="plus" aria-hidden="true"></span></button>
                                                                                    @csrf
                                                                                </form>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-item-td td-sum">
                                                            <div class="modal-item-sum">
                                                                <div class="modal-item-sum-name">
                                                                    Сумма
                                                                </div>
                                                                <div class="modal-item-sum-num">
                                                                    <span>{{ $product->getPriceForCount() }}</span> грн
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / one item -->
                                    @endforeach
                                </div>

                                <div class="one-modal-item-bay-info">
                                    <div class="one-modal-item-back">
                                        <a href="#" class="back-bask def-big-bt"  data-dismiss="modal">
                                            Продолжить покупки
                                        </a>
                                    </div>
                                    <div class="one-modal-item-sum">
                                        <div class="one-modal-item-top">
                                            <div class="one-modal-item-name">
                                                Итого:
                                            </div>
                                            <div class="one-modal-item-val">
                                                {{ $order->getFullPrice() }} грн
                                            </div>
                                        </div>
                                        <div class="one-modal-item-bt">
                                            <a href="{{route('basket')}}" class="def-big-bt">
                                                Оформить заказ
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">
    <!-- header -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="{{route('index')}}">
                    {{--<img src="/images/logo.png" alt=" " />--}}
                    <h1 class="logo-text">Box for tea</h1>
                </a>
            </div>
            <div class="header-mid">
                <div class="header-top">
                    <div class="header-phone">
                        <a href="">
                            0800 301 401
                        </a>
                    </div>
                    <div class="header-mess">
                        <div class="header-icons">
								<span>
									<img src="/images/phone-ico.png"  alt="">
								</span>
                            <span>
									<img src="/images/telegram-ico.png" alt="">
								</span>
                            <span>
									<img src="/images/viber-ico.png" alt="">
								</span>
                        </div>
                        <div class="header-number">
                            +3 (067) 999 88 77
                        </div>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="close-menu"></div>
                    <div class="tablet-logo">
                        <a href="{{route('index')}}">
                            <h1 class="logo-text">Box for tea</h1>
                        </a>
                    </div>
                    <ul class="sf-menu">

                        <li class="no-sub">
                            <a href="#">О нас</a>
                        </li>
                        <li>
                            <a href="#">Каталог</a>

                            <ul class="sub-menu">
                                <li class="li-top-tablet">
                                    <div class="back-menu"></div>
                                    <div class="tit-menu">
                                        Каталог
                                    </div>
                                    <div class="close-menu"></div>
                                </li>
                                @foreach($categories as $category)
                                    <li><a href="{{ route('catalog', $category->code) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>

                    <div class="tablet-mess">
                        <div class="header-icons">
								<span>
									<img src="/images/phone-ico.png"  alt="">
								</span>
                            <span>
									<img src="/images/telegram-ico.png" alt="">
								</span>
                            <span>
									<img src="/images/viber-ico.png" alt="">
								</span>
                        </div>
                        <div class="header-number">
                            +3 (067) 999 88 77
                        </div>
                    </div>

                    <div class="tablet-mess-lang">
                        <div class="lang">
                            <ul>
                                <li>
                                    <a class="active" href="#">RU</a>
                                </li>
                                <li>
                                    <a href="#">UA</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
            <div class="header-right">
                <div class="header-login">
                    <a href="#" data-toggle="modal" data-target="#login">
                        <i>
                            <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.50023 7.42029C8.42122 7.42029 9.9785 5.7592 9.9785 3.71014C9.9785 1.66109 8.42122 0 6.50023 0C4.57924 0 3.02197 1.66109 3.02197 3.71014C3.02197 5.7592 4.57924 7.42029 6.50023 7.42029Z" fill="#723e91"/>
                                <path d="M6.50015 9.27539C3.01835 9.27539 0.195801 12.2861 0.195801 16H12.8045C12.8045 12.2861 9.98195 9.27539 6.50015 9.27539Z" fill="#723e91"/>
                            </svg>
                        </i>
                        <span>
								Вход
							</span>
                    </a>
                </div>
                <div class="header-btns">
                    <div class="header-btns-in">
                        <div class="header-search">
                            <div class="header-btns-ico">
                                <a href="#">
                                    <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M38.722 37.2673L29.202 27.3659C31.6497 24.4561 32.9909 20.795 32.9909 16.9836C32.9909 8.07864 25.7459 0.833618 16.8409 0.833618C7.93594 0.833618 0.690918 8.07864 0.690918 16.9836C0.690918 25.8886 7.93594 33.1336 16.8409 33.1336C20.184 33.1336 23.3697 32.1253 26.0934 30.2111L35.6858 40.1876C36.0868 40.604 36.626 40.8336 37.2039 40.8336C37.7509 40.8336 38.2698 40.6251 38.6637 40.2459C39.5007 39.4405 39.5274 38.105 38.722 37.2673ZM16.8409 5.04666C23.4231 5.04666 28.7778 10.4014 28.7778 16.9836C28.7778 23.5658 23.4231 28.9205 16.8409 28.9205C10.2587 28.9205 4.90396 23.5658 4.90396 16.9836C4.90396 10.4014 10.2587 5.04666 16.8409 5.04666Z" fill="#6E6F7A"/>
                                    </svg>
                                </a>
                            </div>

                            <div class="search-body">
                                <input type="text" placeholder="Я ищу...">
                                <div class="close-search"></div>
                                <div class="search-res">
                                    <ul>
                                        @foreach($categories as $category)
                                            <li><a href="{{ route('catalog', $category->code) }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="header-acc">
                            <div class="header-btns-ico">
                                <a href="#">
                                    <svg width="41" height="35" viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M40.4032 20.9452L34.631 9.37873C34.7575 9.21512 34.8359 9.01226 34.8359 8.78938C34.8359 8.25464 34.4023 7.82104 33.8675 7.82104H22.9606C23.4297 7.66922 23.769 7.22946 23.769 6.70985C23.769 6.0646 23.2461 5.54164 22.6008 5.54164H22.1713C22.8084 5.04391 23.2195 4.2704 23.2195 3.39947C23.2195 1.89751 22.0019 0.680115 20.5002 0.680115C18.9982 0.680115 17.7808 1.89769 17.7808 3.39947C17.7808 4.27058 18.192 5.0441 18.829 5.54164H18.3993C17.7541 5.54164 17.2311 6.0646 17.2311 6.70985C17.2311 7.22946 17.5707 7.66922 18.0396 7.82104H7.24312L7.24144 7.81768L7.23976 7.82104H7.13243C6.59769 7.82104 6.16409 8.25464 6.16409 8.78938C6.16409 9.04516 6.26525 9.27608 6.42717 9.44922L0.596743 21.1321C0.505687 21.3146 0.482128 21.5121 0.512605 21.6992C0.509426 21.7355 0.507744 21.7725 0.511483 21.8101C0.83981 25.2381 3.72763 27.9187 7.24144 27.9187C10.7553 27.9187 13.6433 25.2381 13.9716 21.8101C13.9751 21.7723 13.9736 21.7355 13.9705 21.699C14.0009 21.5121 13.9774 21.3146 13.8863 21.1321L8.20978 9.75772H19.1942V32.09H10.1852C9.10128 32.09 8.22268 32.9685 8.22268 34.0524C8.22268 34.569 8.64151 34.9879 9.15812 34.9879H31.842C32.3587 34.9879 32.7775 34.569 32.7775 34.0524C32.7775 32.9685 31.8989 32.09 30.815 32.09H21.806V9.75754H32.6969L27.1136 20.945C27.0226 21.1275 26.999 21.3251 27.0295 21.5121C27.0263 21.5483 27.0246 21.5852 27.0284 21.6229C27.3567 25.0509 30.2445 27.7316 33.7583 27.7316C37.2723 27.7316 40.1602 25.0509 40.4885 21.6229C40.492 21.5852 40.4905 21.5483 40.4874 21.5119C40.5178 21.3251 40.4943 21.1276 40.4032 20.9452ZM2.67347 21.1576L7.24125 12.0046L11.809 21.1576H2.67347ZM29.1906 20.9706L33.7583 11.8176L38.3261 20.9706H29.1906Z" fill="#723e91"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- for tablet -->
                        <div class="header-log-tablet">
                            <div class="header-btns-ico">
                                <a href="#" data-toggle="modal" data-target="#login">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 0C15.315 0 18 2.685 18 6C18 9.315 15.315 12 12 12C8.685 12 6 9.315 6 6C6 2.685 8.685 0 12 0ZM12 24C12 24 24 24 24 21C24 17.4 18.15 13.5 12 13.5C5.85 13.5 0 17.4 0 21C0 24 12 24 12 24Z" fill="#723e91"/>
                                    </svg>

                                </a>
                            </div>
                        </div>
                        <!-- / for tablet -->
                        <div class="header-bask">
                            <div class="header-btns-ico">
                                <a data-toggle="modal" href="#basket">
                                    <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.8876 26.6933H12.8894C12.8909 26.6933 12.8925 26.693 12.894 26.693H34.1406C34.6637 26.693 35.1236 26.346 35.2673 25.8431L39.9548 9.43683C40.0558 9.08313 39.985 8.70288 39.7638 8.4093C39.5422 8.11572 39.1959 7.94299 38.8281 7.94299H10.1849L9.34723 4.17316C9.2279 3.63696 8.75244 3.25549 8.20312 3.25549H1.17187C0.524597 3.25549 0 3.78009 0 4.42737C0 5.07465 0.524597 5.59924 1.17187 5.59924H7.26318C7.4115 6.26727 11.272 23.6397 11.4941 24.6392C10.2487 25.1805 9.375 26.4223 9.375 27.8649C9.375 29.8033 10.9521 31.3805 12.8906 31.3805H34.1406C34.7879 31.3805 35.3125 30.8559 35.3125 30.2086C35.3125 29.5613 34.7879 29.0367 34.1406 29.0367H12.8906C12.2446 29.0367 11.7187 28.5109 11.7187 27.8649C11.7187 27.2197 12.2427 26.6948 12.8876 26.6933ZM37.2745 10.2867L33.2565 24.3492H13.8306L10.7056 10.2867H37.2745Z" fill="#723e91"/>
                                        <path d="M11.7188 34.8961C11.7188 36.8346 13.2959 38.4117 15.2344 38.4117C17.1729 38.4117 18.75 36.8346 18.75 34.8961C18.75 32.9576 17.1729 31.3805 15.2344 31.3805C13.2959 31.3805 11.7188 32.9576 11.7188 34.8961ZM15.2344 33.7242C15.8804 33.7242 16.4063 34.2501 16.4063 34.8961C16.4063 35.5422 15.8804 36.068 15.2344 36.068C14.5883 36.068 14.0625 35.5422 14.0625 34.8961C14.0625 34.2501 14.5883 33.7242 15.2344 33.7242Z" fill="#723e91"/>
                                        <path d="M28.2812 34.8961C28.2812 36.8346 29.8584 38.4117 31.7969 38.4117C33.7354 38.4117 35.3125 36.8346 35.3125 34.8961C35.3125 32.9576 33.7354 31.3805 31.7969 31.3805C29.8584 31.3805 28.2812 32.9576 28.2812 34.8961ZM31.7969 33.7242C32.4429 33.7242 32.9688 34.2501 32.9688 34.8961C32.9688 35.5422 32.4429 36.068 31.7969 36.068C31.1508 36.068 30.625 35.5422 30.625 34.8961C30.625 34.2501 31.1508 33.7242 31.7969 33.7242Z" fill="#723e91"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="lang">
                        <ul>
                            <li>
                                <a class="active" href="#">RU</a>
                            </li>
                            <li>
                                <a href="#">UA</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- header line tablet -->
        <div class="header-tabl">
            <div class="container">
                <div class="header-show">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header-tabl-search">
                    <div class="search-body">
                        <input type="text" placeholder="Я ищу...">
                        <!-- <div class="close-search"></div>
                        <div class="search-res">
                            <ul>
                                <li><a href="#">Гербициды</a></li>
                                <li><a href="#">Инсектициды</a></li>
                                <li><a href="#">Протравители</a></li>
                                <li><a href="#">Инсектициды</a></li>
                                <li><a href="#">Протравители</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- / header line tablet -->
    </header>
    <!-- / header -->

    @if(session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success') }}</p>
    @endif
    @if(session()->has('warning'))
        <p class="alert alert-warning">{{ session()->get('warning') }}</p>
    @endif

    @yield('content')


    <footer>
        <div class="container">
            <div class="footer-menu">
                <ul>
                    <li><a href="#">Огород</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Плодовые дерьвья</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">Ягодные кусты</a></li>
                </ul>
            </div>
            <div class="footer-cont">
                <div class="footer-tel">
                    <a href="#">
                        0800 301 401
                    </a>
                </div>
                <div class="footer-mess">
                    <div class="footer-mess-icons">
							<span>
								<img src="/images/phone-ico.png"  alt="">
							</span>
                        <span>
								<img src="/images/telegram-ico.png" alt="">
							</span>
                        <span>
								<img src="/images/viber-ico.png" alt="">
							</span>
                    </div>
                    <div class="footer-mess-num">
                        +3 (067) 999 88 77
                    </div>
                </div>
                <div class="footer-mess-adr">
                    ТОВ «BOX FOR TEA», 03057, <br />г. Киев, просп. Победы, FF
                </div>
            </div>
            <div class="footer-soc">
                <ul>
                    <li>
                        <a class="face" href="#">
                            <svg width="20" height="43" viewBox="0 0 20 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.045 21.4346H13.335V42.3534H4.68385V21.4346H0.569336V14.0829H4.68385V9.32549C4.68385 5.92344 6.29988 0.596191 13.412 0.596191L19.8202 0.623001V7.75908H15.1706C14.408 7.75908 13.3356 8.14013 13.3356 9.76301V14.0897H19.8008L19.045 21.4346Z" fill="white"/>
                            </svg>

                        </a>
                    </li>
                    <li>
                        <a class="you" href="#">
                            <svg width="51" height="45" viewBox="0 0 51 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M35.1069 2.47461C34.1473 2.76748 33.1467 3.01911 32.1446 3.26973C25.0334 4.77811 15.5519 0.683858 11.4577 7.36398C8.04307 12.6757 6.96494 19.3225 3.08057 24.0719L23.8284 44.8197C37.6372 42.7297 48.5501 31.8152 50.6379 18.0059L35.1069 2.47461Z" fill="#A81411"/>
                                <path d="M29.7063 0.223633H8.294C4.093 0.223633 0.6875 3.62926 0.6875 7.83014V18.5341C0.6875 22.7351 4.09313 26.1406 8.294 26.1406H29.7063C33.9073 26.1406 37.3128 22.735 37.3128 18.5341V7.83014C37.3128 3.62926 33.9071 0.223633 29.7063 0.223633ZM24.5619 13.7029L14.5469 18.4794C14.2799 18.6068 13.9715 18.4124 13.9715 18.1168V8.26501C13.9715 7.96501 14.288 7.77064 14.5553 7.90626L24.5703 12.9814C24.8685 13.1323 24.8631 13.5594 24.5619 13.7029Z" fill="white"/>
                                <path d="M29.7063 0.223633H18.7847V10.0493L24.5705 12.9811C24.8685 13.1321 24.8632 13.5591 24.5619 13.7028L18.7847 16.4583V26.1406H29.7063C33.9073 26.1406 37.3128 22.735 37.3128 18.5341V7.83014C37.3128 3.62926 33.9072 0.223633 29.7063 0.223633Z" fill="#D1D1D1"/>
                            </svg>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>

<script src="js/init.js"></script>

</body>

</html>

