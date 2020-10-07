<template>

    <!--<div class="modal-bask">-->
                    <!--<div class="modal-bask-tit">-->
                        <!--@lang('main.cart')-->
                    <!--</div>-->
                    <!--<div class="modal-bask-wrap">-->
                        <!--@if(isset($order->products))-->
                        <!--<div class="one-modal-bask-item">-->

                            <!--<div class="one-modal-item-table">-->
                                <!--@foreach($order->products as $product)-->
                                <!--&lt;!&ndash; one item &ndash;&gt;-->
                                <!--<div class="modal-item-tr">-->
                                    <!--<div class="modal-item-td td-thumb">-->
                                        <!--<div class="modal-item-thumb">-->

                                            <!--<div class="del-item"></div>-->
                                            <!--<a href="{{ route('product', [$product->category->code, $product->code]) }}">-->
                                                <!--<img src="{{ Storage::url($product->image) }}" alt="">-->
                                            <!--</a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-item-td td-descr">-->
                                        <!--<div class="modal-item-in-table">-->
                                            <!--<div class="del-item mob"></div>-->
                                            <!--<div class="modal-item-tr">-->
                                                <!--<div class="modal-item-td td-wrap">-->
                                                    <!--<div class="modal-item-name">-->
                                                        <!--{{ $product->__('name') }}-->
                                                    <!--</div>-->
                                                    <!--<div class="modal-item-info">-->
                                                        <!--<div class="modal-item-price">-->
                                                            <!--<div class="modal-item-price-in">-->
                                                                <!--<span>{{ $product->price }}</span> {{ $currencySymbol }}-->
                                                            <!--</div>-->
                                                        <!--</div>-->
                                                        <!--<div class="modal-item-number">-->
                                                            <!--<div class="num-block">-->
                                                                <!--<div class="num-in">-->

                                                                    <!--<div class="btn-group form-inline">-->
                                                                        <!--<form action="{{ route('basket-remove', $product) }}" method="POST">-->
                                                                            <!--<button type="submit" class="btn btn-danger"-->
                                                                                    <!--href=""><span-->
                                                                                <!--class="minus dis" aria-hidden="true"></span></button>-->
                                                                            <!--@csrf-->
                                                                        <!--</form>-->
                                                                        <!--<input type="text" class="in-num" value="{{ $product->countInOrder  }}" readonly="">-->
                                                                        <!--<form action="{{ route('basket-add', $product) }}" method="POST">-->
                                                                            <!--<button type="submit" class="btn btn-success"-->
                                                                                    <!--href=""><span-->
                                                                                <!--class="plus" aria-hidden="true"></span></button>-->
                                                                            <!--@csrf-->
                                                                        <!--</form>-->
                                                                    <!--</div>-->

                                                                <!--</div>-->
                                                            <!--</div>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                <!--</div>-->
                                                <!--<div class="modal-item-td td-sum">-->
                                                    <!--<div class="modal-item-sum">-->
                                                        <!--<div class="modal-item-sum-name">-->
                                                            <!--@lang('basket.price')-->
                                                        <!--</div>-->
                                                        <!--<div class="modal-item-sum-num">-->
                                                            <!--<span>{{ $product->price * $product->countInOrder }}</span> {{ $currencySymbol }}-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--&lt;!&ndash; / one item &ndash;&gt;-->
                                <!--@endforeach-->
                            <!--</div>-->

                            <!--<div class="one-modal-item-bay-info">-->
                                <!--<div class="one-modal-item-back">-->
                                    <!--<a href="#" class="back-bask def-big-bt"  data-dismiss="modal">-->
                                        <!--@lang('basket.continue_shopping')-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="one-modal-item-sum">-->
                                    <!--<div class="one-modal-item-top">-->
                                        <!--<div class="one-modal-item-name">-->
                                            <!--@lang('basket.total'):-->
                                        <!--</div>-->
                                        <!--<div class="one-modal-item-val">-->
                                            <!--{{ $order->getFullSum() }} {{ $currencySymbol }}-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="one-modal-item-bt">-->
                                        <!--<a href="{{route('basket')}}" class="def-big-bt">-->
                                            <!--@lang('basket.place_order')-->
                                        <!--</a>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->

                        <!--</div>-->
                        <!--@else-->

                        <!--<h4>@lang('basket.cart_is_empty')</h4>-->

                        <!--@endif-->

                    <!--</div>-->
                <!--</div>-->
<div>
    <div class="modal-bask">
        <div class="modal-bask-tit">
            Корзина
            {{order}}
        </div>
        <div class="modal-bask-wrap">
            <div class="one-modal-bask-item">

                <div class="one-modal-item-table">
                    <!-- one item -->
                    <div class="modal-item-tr">
                        <div class="modal-item-td td-thumb">
                            <div class="modal-item-thumb">

                                <div class="del-item"></div>
                                <a href="#">
                                    <img src="images/modal-bask-1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="modal-item-td td-descr">
                            <div class="modal-item-in-table">
                                <div class="del-item mob"></div>
                                <div class="modal-item-tr">
                                    <div class="modal-item-td td-wrap">
                                        <div class="modal-item-name">
                                            Гольф
                                        </div>
                                        <div class="modal-item-info">
                                            <div class="modal-item-price">
                                                <div class="modal-item-price-in">
                                                    <span>24</span> грн
                                                </div>
                                            </div>
                                            <div class="modal-item-number">
                                                <div class="num-block">
                                                    <div class="num-in">
                                                        <span class="minus dis"></span>
                                                        <input type="text" class="in-num" value="1" readonly="">
                                                        <span class="plus"></span>
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
                                                <span>24</span> грн
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / one item -->
                    <!-- one item -->
                    <div class="modal-item-tr">
                        <div class="modal-item-td td-thumb">
                            <div class="modal-item-thumb">

                                <div class="del-item"></div>
                                <a href="#">
                                    <img src="images/modal-bask-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="modal-item-td td-descr">
                            <div class="modal-item-in-table">
                                <div class="del-item mob"></div>
                                <div class="modal-item-tr">
                                    <div class="modal-item-td td-wrap">
                                        <div class="modal-item-name">
                                            АС-Селектив + Авангард Р Картопля
                                        </div>
                                        <div class="modal-item-info">
                                            <div class="modal-item-price">
                                                <div class="modal-item-price-in">
                                                    <span>24</span> грн
                                                </div>
                                            </div>
                                            <div class="modal-item-number">
                                                <div class="num-block">
                                                    <div class="num-in">
                                                        <span class="minus dis"></span>
                                                        <input type="text" class="in-num" value="1" readonly="">
                                                        <span class="plus"></span>
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
                                                <span>24</span> грн
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / one item -->
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
                                48 грн
                            </div>
                        </div>
                        <div class="one-modal-item-bt">
                            <a href="#" class="def-big-bt">
                                Оформить заказ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        name: "BasketComponent",

        props:['order'],

        methods:{

        }
    }
</script>

<style scoped>

</style>
