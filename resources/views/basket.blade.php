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

                                <basket-component :temp="{{json_encode('checkout')}}" v-bind:locale="{{json_encode(strtolower(__('main.current_lang')))}}" v-bind:basket="{{isset($order->products) ? json_encode($order->getOrderArray()) : json_encode([])}}"></basket-component>

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
<script>
    import ConfirmOrderButton from "../js/components/ConfirmOrderButton";
    export default {
        components: {ConfirmOrderButton}
    }
</script>
