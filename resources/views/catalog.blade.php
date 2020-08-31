@extends('layouts.master')

@section('title', 'Главная')

@section('content')

    <!-- broad -->
    <div class="broad">
        <div class="container">
            <ul>
                <li><a href="#"><span>Главная</span></a></li>
                <li><a href="#"><span>Средства защиты растений</span></a></li>
                <li>Гербициды</li>
            </ul>
        </div>
    </div>
    <!-- broad -->

    <!-- catalog -->
    <main class="catalog">
        <div class="container">
            <aside class="sidebar">
                <div class="title-tablet">
                    Гербициды
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
                            <a href="#">
                                        <span>
                                            Избирательное
                                        </span>
                                <i></i>
                            </a>
                            <a href="#">
                                        <span>
                                            Глифосат
                                        </span>
                                <i></i>
                            </a>
                            <a href="#">
                                        <span>
                                            Дикамба
                                        </span>
                                <i></i>
                            </a>
                            <a href="#">
                                        <span>
                                            1000 мл
                                        </span>
                                <i></i>
                            </a>
                            <a href="#">
                                        <span>
                                            Капуста
                                        </span>
                                <i></i>
                            </a>
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
                                                    <img src="{{ $category->svg }}" alt="">
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
                    <!-- one filter -->
                    <div class="one-filter">
                        <div class="one-filter-top active">
                            Принцип действия
                        </div>
                        <div class="one-filter-descr" style="display: block;">
                            <div class="one-filter-descr-inp">
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Избирательное</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Сплошное</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / one filter -->

                    <!-- one filter -->
                    <div class="one-filter has-act-filt">
                        <div class="one-filter-top active">
                            Действующее вещество
                        </div>
                        <div class="one-filter-descr" style="display: block;">
                            <div class="one-filter-descr-inp">
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Метрибузин</span>
                                        <span class="num-filt">
                                                    (10)
                                                </span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Десмедифам</span>
                                        <span class="num-filt">
                                                    (5)
                                                </span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Фенмедифам</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Этофумезат</span>
                                        <span class="num-filt">
                                                    (5)
                                                </span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Дикамба</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Глифосат</span>
                                    </label>
                                </div>

                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Метрибузин</span>
                                        <span class="num-filt">
                                                    (10)
                                                </span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Десмедифам</span>
                                        <span class="num-filt">
                                                    (5)
                                                </span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Фенмедифам</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Этофумезат</span>
                                        <span class="num-filt">
                                                    (5)
                                                </span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Дикамба</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Глифосат</span>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- / one filter -->

                    <!-- one filter -->
                    <div class="one-filter">
                        <div class="one-filter-top active">
                            Фасовка
                        </div>
                        <div class="one-filter-descr" style="display: block;">
                            <div class="one-filter-descr-inp">
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>1000 мл</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>500 мл</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>250 мл</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>100 мл</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>50 мл</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>30 мл</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>1000 мл</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>500 мл</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>250 мл</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>100 мл</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>50 мл</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>30 мл</span>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- / one filter -->

                    <!-- one filter -->
                    <div class="one-filter">
                        <div class="one-filter-top active">
                            Культура
                        </div>
                        <div class="one-filter-descr" style="display: block;">
                            <div class="one-filter-descr-inp">
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Картофель</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Перец</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Виноград</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Капуста</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Томаты</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Груша</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Картофель</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Перец</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Виноград</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Капуста</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                        <span>Томаты</span>
                                    </label>
                                </div>
                                <div class="one-check-filter">
                                    <label>
                                        <input type="checkbox">
                                        <i></i>
                                        <span>Груша</span>
                                    </label>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- / one filter -->

                    <div class="filter-bt">
                        <button class="def-min-bt">
                            Применить
                        </button>
                        <button class="border-min-bt">
                            Сбросить
                        </button>
                    </div>

                </div>
            </aside>

            <!-- catalog body -->
            <div class="catalog-body">
                <!-- about -->
                <div class="catalog-about desc">
                    <div class="catalog-about-thumb">
                        <img src="images/catalog/cat-thumb.jpg" alt="">
                    </div>
                    <div class="catalog-about-descr">
                        <h1>
                            Гербициды - это здорово!
                        </h1>
                        <p>
                            Огородники знают: чтобы вырастить щедрый урожай, необходимо своевременно устранять негативные факторы воздействия на культурные насаждения. Серьезного ущерба урожайности наносят сорняки. Они заглушают сельхозкультуры, поглощают из почвы большое количество воды и питательных веществ, закрывают солнечные лучи, лишая посевы дневного источника света. Все это снижает уровень урожая, замедляет рост культурных растений и может привести к гибели посевов.
                        </p>
                    </div>
                </div>
                <!-- / about -->

                <!-- active filter -->
                <div class="you-choose">
                    <div class="you-choose-name">
                        Ваш выбор
                    </div>
                    <div class="you-choose-in">
                        <a href="#">
                                    <span>
                                        Избирательное
                                    </span>
                            <i></i>
                        </a>
                        <a href="#">
                                    <span>
                                        Глифосат
                                    </span>
                            <i></i>
                        </a>
                        <a href="#">
                                    <span>
                                        Дикамба
                                    </span>
                            <i></i>
                        </a>
                        <a href="#">
                                    <span>
                                        1000 мл
                                    </span>
                            <i></i>
                        </a>
                        <a href="#">
                                    <span>
                                        Капуста
                                    </span>
                            <i></i>
                        </a>
                    </div>
                </div>
                <!-- / active filter -->

                <!-- catalog items -->
                <div class="catalog-body-wrap">
                    <div class="catalog-body-wrap-in">
                        <!-- one item -->
                        <div class="one-item">
                            <div class="one-item-in">
                                <div class="one-item-thumb">
                                    <a href="#">
                                        <img src="images/catalog/cat-item-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="one-item-descr">
                                    <div class="one-item-tit">
                                        Гольф
                                    </div>
                                    <div class="one-item-info">
                                        <div class="one-item-price">
                                            <span>24</span> грн
                                        </div>
                                        <div class="one-item-comm">
                                            <a href="#">
                                                Оставить отзыв
                                            </a>
                                        </div>
                                    </div>
                                    <div class="one-item-bt">
                                        <a href="#" class="def-min-bt">
                                            Купить
                                        </a>
                                        <a href="#" class="item-comp">
                                            <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / one item -->
                        <!-- one item -->
                        <div class="one-item">
                            <div class="one-item-in">
                                <div class="one-item-thumb">
                                    <a href="#">
                                        <img src="images/catalog/cat-item-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="one-item-descr">
                                    <div class="one-item-tit">
                                        Мастак
                                    </div>
                                    <div class="one-item-info">
                                        <div class="one-item-price">
                                            <span>124</span> грн
                                        </div>
                                        <div class="one-item-comm">
                                            <a href="#">
                                                Оставить отзыв
                                            </a>
                                        </div>
                                    </div>
                                    <div class="one-item-bt">
                                        <a href="#" class="def-min-bt">
                                            Купить
                                        </a>
                                        <a href="#" class="item-comp">
                                            <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / one item -->
                        <!-- one item -->
                        <div class="one-item">
                            <div class="one-item-in">
                                <div class="one-item-thumb">
                                    <a href="#">
                                        <img src="images/catalog/cat-item-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="one-item-descr">
                                    <div class="one-item-tit">
                                        Антисапа
                                    </div>
                                    <div class="one-item-info">
                                        <div class="one-item-price">
                                            <span>2124</span> грн
                                        </div>
                                        <div class="one-item-comm">
                                            <a href="#">
                                                Оставить отзыв
                                            </a>
                                        </div>
                                    </div>
                                    <div class="one-item-bt">
                                        <a href="#" class="def-min-bt">
                                            Купить
                                        </a>
                                        <a href="#" class="item-comp">
                                            <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / one item -->
                        <!-- one item -->
                        <div class="one-item">
                            <div class="one-item-in">
                                <div class="one-item-thumb">
                                    <a href="#">
                                        <img src="images/catalog/cat-item-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="one-item-descr">
                                    <div class="one-item-tit">
                                        Гольф
                                    </div>
                                    <div class="one-item-info">
                                        <div class="one-item-price">
                                            <span>24</span> грн
                                        </div>
                                        <div class="one-item-comm">
                                            <a href="#">
                                                Оставить отзыв
                                            </a>
                                        </div>
                                    </div>
                                    <div class="one-item-bt">
                                        <a href="#" class="def-min-bt">
                                            Купить
                                        </a>
                                        <a href="#" class="item-comp">
                                            <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / one item -->
                        <!-- one item -->
                        <div class="one-item">
                            <div class="one-item-in">
                                <div class="one-item-thumb">
                                    <a href="#">
                                        <img src="images/catalog/cat-item-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="one-item-descr">
                                    <div class="one-item-tit">
                                        Мастак
                                    </div>
                                    <div class="one-item-info">
                                        <div class="one-item-price">
                                            <span>124</span> грн
                                        </div>
                                        <div class="one-item-comm">
                                            <a href="#">
                                                Оставить отзыв
                                            </a>
                                        </div>
                                    </div>
                                    <div class="one-item-bt">
                                        <a href="#" class="def-min-bt">
                                            Купить
                                        </a>
                                        <a href="#" class="item-comp">
                                            <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / one item -->
                        <!-- one item -->
                        <div class="one-item">
                            <div class="one-item-in">
                                <div class="one-item-thumb">
                                    <a href="#">
                                        <img src="images/catalog/cat-item-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="one-item-descr">
                                    <div class="one-item-tit">
                                        Антисапа
                                    </div>
                                    <div class="one-item-info">
                                        <div class="one-item-price">
                                            <span>24</span> грн
                                        </div>
                                        <div class="one-item-comm">
                                            <a href="#">
                                                Оставить отзыв
                                            </a>
                                        </div>
                                    </div>
                                    <div class="one-item-bt">
                                        <a href="#" class="def-min-bt">
                                            Купить
                                        </a>
                                        <a href="#" class="item-comp">
                                            <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / one item -->
                        <!-- one item -->
                        <div class="one-item">
                            <div class="one-item-in">
                                <div class="one-item-thumb">
                                    <a href="#">
                                        <img src="images/catalog/cat-item-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="one-item-descr">
                                    <div class="one-item-tit">
                                        Гольф
                                    </div>
                                    <div class="one-item-info">
                                        <div class="one-item-price">
                                            <span>24</span> грн
                                        </div>
                                        <div class="one-item-comm">
                                            <a href="#">
                                                Оставить отзыв
                                            </a>
                                        </div>
                                    </div>
                                    <div class="one-item-bt">
                                        <a href="#" class="def-min-bt">
                                            Купить
                                        </a>
                                        <a href="#" class="item-comp">
                                            <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / one item -->
                        <!-- one item -->
                        <div class="one-item">
                            <div class="one-item-in">
                                <div class="one-item-thumb">
                                    <a href="#">
                                        <img src="images/catalog/cat-item-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="one-item-descr">
                                    <div class="one-item-tit">
                                        Мастак
                                    </div>
                                    <div class="one-item-info">
                                        <div class="one-item-price">
                                            <span>124</span> грн
                                        </div>
                                        <div class="one-item-comm">
                                            <a href="#">
                                                Оставить отзыв
                                            </a>
                                        </div>
                                    </div>
                                    <div class="one-item-bt">
                                        <a href="#" class="def-min-bt">
                                            Купить
                                        </a>
                                        <a href="#" class="item-comp">
                                            <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / one item -->
                        <!-- one item -->
                        <div class="one-item">
                            <div class="one-item-in">
                                <div class="one-item-thumb">
                                    <a href="#">
                                        <img src="images/catalog/cat-item-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="one-item-descr">
                                    <div class="one-item-tit">
                                        Антисапа
                                    </div>
                                    <div class="one-item-info">
                                        <div class="one-item-price">
                                            <span>24</span> грн
                                        </div>
                                        <div class="one-item-comm">
                                            <a href="#">
                                                Оставить отзыв
                                            </a>
                                        </div>
                                    </div>
                                    <div class="one-item-bt">
                                        <a href="#" class="def-min-bt">
                                            Купить
                                        </a>
                                        <a href="#" class="item-comp">
                                            <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / one item -->
                    </div>

                    <div class="pagi">
                        <ul>
                            <li class="pag prev"><a href="#"></a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="pag next"><a href="#"></a></li>
                        </ul>

                        <div class="show-more">
                            <a href="#">
                                Показать еще
                                <span>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.5938 0.718649C15.3091 0.600803 15.0661 0.649255 14.8646 0.86455L13.5104 2.20842C12.7674 1.50701 11.9185 0.963642 10.9636 0.57822C10.0087 0.192833 9.02082 0.00012207 7.99999 0.00012207C6.91669 0.00012207 5.88199 0.212024 4.89589 0.635573C3.90971 1.05916 3.059 1.6285 2.34376 2.34378C1.62848 3.05913 1.059 3.90973 0.635413 4.89584C0.211865 5.88201 0 6.91657 0 8.00001C0 9.08313 0.211865 10.1179 0.63545 11.1041C1.05914 12.0903 1.62848 12.941 2.3438 13.6562C3.05904 14.3713 3.90975 14.9408 4.89592 15.3644C5.88203 15.788 6.91673 15.9999 8.00002 15.9999C9.19438 15.9999 10.3301 15.7482 11.4063 15.2447C12.4826 14.7414 13.3993 14.0312 14.1564 13.1145C14.2119 13.0451 14.2379 12.9669 14.2343 12.8801C14.2311 12.7934 14.1979 12.7222 14.1354 12.6666L12.7086 11.2292C12.6319 11.1667 12.5454 11.1355 12.4481 11.1355C12.337 11.1494 12.2572 11.1912 12.2086 11.2606C11.7016 11.9205 11.0801 12.4308 10.344 12.7921C9.60796 13.1531 8.82672 13.3335 8.00031 13.3335C7.27821 13.3335 6.58895 13.1929 5.9327 12.9116C5.27638 12.6305 4.70861 12.2503 4.22953 11.7711C3.75049 11.2919 3.37029 10.7243 3.08899 10.0679C2.80777 9.41167 2.66712 8.72259 2.66712 8.00031C2.66712 7.27809 2.80788 6.58868 3.08899 5.93258C3.37018 5.27641 3.75035 4.70863 4.22953 4.22956C4.70876 3.75037 5.27638 3.37016 5.9327 3.08887C6.5888 2.80768 7.27821 2.667 8.00031 2.667C9.39617 2.667 10.608 3.14272 11.6358 4.09412L10.198 5.5314C9.98266 5.73976 9.93421 5.97939 10.0521 6.25018C10.1703 6.52797 10.3752 6.66683 10.667 6.66683H15.3335C15.5141 6.66683 15.6703 6.6009 15.8023 6.46894C15.9341 6.33701 16 6.18078 16 6.00022V1.33352C16 1.04194 15.8649 0.837077 15.5938 0.718649Z" fill="#00A94F"/>
                                            </svg>
                                        </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- / catalog items -->

                <!-- about -->
                <div class="catalog-about tabl">
                    <h1>
                        Гербициды - это здорово!
                    </h1>
                    <div class="catalog-about-thumb">
                        <img src="images/catalog/cat-thumb-tabl.jpg" alt="">
                    </div>
                    <div class="catalog-about-descr">
                        <p>
                            Огородники знают: чтобы вырастить щедрый урожай, необходимо своевременно устранять негативные факторы воздействия на культурные насаждения. Серьезного ущерба урожайности наносят сорняки. Они заглушают сельхозкультуры, поглощают из почвы большое количество воды и питательных веществ, закрывают солнечные лучи, лишая посевы дневного источника света. Все это снижает уровень урожая, замедляет рост культурных растений и может привести к гибели посевов.
                        </p>
                    </div>
                </div>
                <!-- / about -->

                <div class="about-page">
                    <h2>
                        Гербициды – Украина борется с бурьяном правильно
                    </h2>
                    <div class="page-detal">
                        <p>
                            Выбирая препарат для борьбы с бурьяном, необходимо учитыват ь их классификацию. Гербициды классифицируют по: <br />
                            - характеру действия. Выделяют системные (действующее вещество проникает во все органы сорного растения, останавливая развитие корней и надземной части, в результате вредитель гибнет на ранней стадии) и контактные (действует исключительно в области обработки – на листьях, стебле) препараты;<br />
                            - спектру действия – избирательного и сплошного. Первые уничтожают только определенные сорняки, поэтому препарат необходимо очень тщательно подбирать с учетом сорняка-доминанта.
                        </p>
                        <p>
                            Выбирая препарат для борьбы с бурьяном, необходимо учитыват ь их классификацию. Гербициды классифицируют по: <br />
                            - характеру действия. Выделяют системные (действующее вещество проникает во все органы сорного растения, останавливая развитие корней и надземной части, в результате вредитель гибнет на ранней стадии) и контактные (действует исключительно в области обработки – на листьях, стебле) препараты;<br />
                            - спектру действия – избирательного и сплошного. Первые уничтожают только определенные сорняки, поэтому препарат необходимо очень тщательно подбирать с учетом сорняка-доминанта.
                        </p>
                    </div>
                    <div class="show-all-detal">
                                <span>
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.1103 12.7207C13.363 12.4679 13.363 12.0471 13.1103 11.7854C12.8662 11.5325 12.4599 11.5325 12.2163 11.7854L7.63699 16.5282L7.63699 0.877472C7.63642 0.512638 7.35644 0.222656 7.00419 0.222656C6.65193 0.222656 6.36285 0.512638 6.36285 0.877472L6.36285 16.5282L1.79208 11.7854C1.53941 11.5325 1.13253 11.5325 0.888967 11.7854C0.6363 12.0471 0.6363 12.4685 0.888967 12.7207L6.55235 18.5864C6.79648 18.8481 7.20279 18.8481 7.44635 18.5864L13.1103 12.7207Z" fill="#00A94F"/>
                                    </svg>
                                </span>
                    </div>
                </div>
            </div>
            <!-- / catalog body -->

        </div>
    </main>
    <!-- / catalog -->

@endsection
