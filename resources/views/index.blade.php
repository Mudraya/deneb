@extends('layouts.master')

@section('title', 'Главная')

@section('content')

    <!-- cats -->
    <section id="cats">
        <div class="container">
            <div class="section-tit">
                <h3>
                    Наша кондитерская
                </h3>
            </div>
            <div class="home-cats">
                <div class="row">

                    @foreach($categories as $category)
                        <div class="col-md-3 col-6">
                            <div class="one-home-cat">
                                <a href="{{ route('catalog', $category->code) }}"></a>
                                <img src="{{ $category->image }}" alt="">
                                <div class="one-home-cat-in">
                                    <div class="one-home-cat-tit">
                                        {{ $category->name }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- / cats -->


    <!-- about descr -->
    <section id="company">
        <div class="container">
            <div class="company">
                <div class="company-bg">
                    <img src="images/company-bg2.jpg" alt=" " />
                </div>
                <div class="company-text">
                    <div class="company-body">
                        <p>
                            Иногда для того чтобы окунуться в сказку и ощутить себя на небе, возле пушистых облаков, достаточно просто насладится вкусным десертом. Именно поэтому кондитерское производство – это настоящее искусство, способное сделать жизнь человека хоть немного слаще и приятнее. Наверняка, все помнят фильм «Чарли и шоколадная фабрика», где Вилли Вонка сумел превратить кондитерскую фабрику в настоящее чудо, и хоть в жизнь все происходит совсем по-другому, производство сладостей – это действительно волшебный процесс. Особенно, если речь идет о качественной продукции с неземным вкусом.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / about descr -->

@endsection
