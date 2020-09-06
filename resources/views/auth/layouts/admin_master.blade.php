<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/images/favicon.png">

    <title>{{ config('app.name', 'Box for tea') }}</title>

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

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="one-line">
                                    <input  placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="one-line">
                                    <input placeholder="Пароль" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="one-line remember-me">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Запомнить меня
                                    </label>
                                </div>

                                <div class="forg-pass">
                                    {{--<a href="{{ route('password.request') }}">--}}
                                    <a href="#">
                                        Забыли пароль?
                                    </a>
                                </div>

                                <div class="modal-log-bt">
                                    <button type="submit" class="def-min-bt">
                                        Войти
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="modal-log-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="one-line">
                                    <input placeholder="Имя" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="one-line">
                                    <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="one-line">
                                    <input placeholder="Пароль" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="one-line">
                                    <input placeholder="Подтврдите пароль" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="modal-log-bt">
                                    <button type="submit" class="def-min-bt">
                                        Регистрация
                                    </button>
                                </div>

                            </form>
                        </div>
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
                    @guest
                        <a href="#" data-toggle="modal" data-target="#login">
                            <i>
                                <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.50023 7.42029C8.42122 7.42029 9.9785 5.7592 9.9785 3.71014C9.9785 1.66109 8.42122 0 6.50023 0C4.57924 0 3.02197 1.66109 3.02197 3.71014C3.02197 5.7592 4.57924 7.42029 6.50023 7.42029Z" fill="#723e91"/>
                                    <path d="M6.50015 9.27539C3.01835 9.27539 0.195801 12.2861 0.195801 16H12.8045C12.8045 12.2861 9.98195 9.27539 6.50015 9.27539Z" fill="#723e91"/>
                                </svg>
                            </i>
                            <span>
                                Вход/Регистрация
                            </span>
                        </a>
                    @endguest

                    @auth
                        <a href="{{route('home')}}">
                            <span>
                                Мой кабинет
                            </span>
                        </a>
                        <a href="{{route('logout')}}">
                                <span>
                                    Выход
                                </span>
                        </a>
                    @endauth


                </div>
                <div class="header-btns">
                    <div class="header-btns-in">
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
            </div>
        </div>
        <!-- / header line tablet -->
    </header>
    <!-- / header -->

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session()->get('success') }}
        </div>
    @endif
    @if(session()->has('warning'))
        <div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session()->get('warning') }}
        </div>
    @endif

    @yield('content')


    <footer>
        <div class="container">
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

