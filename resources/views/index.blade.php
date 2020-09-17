@extends('layouts.master')

@section('title', __('main.main'))

@section('content')

    <!-- cats -->
    <section id="cats">
        <div class="container">
            <div class="section-tit">
                <h3>
                    @lang('main.our_bakery')
                </h3>
            </div>
            <div class="home-cats">
                <div class="row">

                    @foreach($categories as $category)
                        <div class="col-md-3 col-6">
                            <div class="one-home-cat">
                                <a href="{{ route('catalog', $category->code) }}"></a>
                                <img src="{{ Storage::url($category->image) }}" alt="">
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
                            @lang('main.bakery_desc')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / about descr -->

@endsection
