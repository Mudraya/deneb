<template>

<div>
    <div class="modal-bask">
        <div class="modal-bask-tit">
            Корзина
            {{basket}}
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
    import {mapGetters} from 'vuex'

    export default {
        name: "BasketComponent",

        mounted() {
            this.$store.dispatch('fetchBasket')
        },

        methods:{
        },

        computed: {
            ...mapGetters([
                'basket'
            ])
        }
    }
</script>

<style scoped>

</style>
