<template>

<div>

    <div v-if="this.temp == 'basket'" class="modal-bask">
        <div class="modal-bask-tit">
            {{ $t('message.cart') }}
        </div>
        <div class="modal-bask-wrap">

            <div v-if="!isEmpty" class="one-modal-bask-item">

                <div class="one-modal-item-table">
                    <!-- one item -->
                    <div v-for="product in Basket.products" class="modal-item-tr">
                        <div class="modal-item-td td-thumb">
                            <div class="modal-item-thumb">

                                <div class="del-item" v-on:click="deleteProduct(product)"></div>
                                <a :href="product.a_href">
                                    <img :src="product.image" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="modal-item-td td-descr">
                            <div class="modal-item-in-table">
                                <div class="del-item mob" v-on:click="deleteProduct(product)"></div>
                                <div class="modal-item-tr">
                                    <div class="modal-item-td td-wrap">
                                        <div class="modal-item-name">
                                            {{getLocalName(product)}}
                                        </div>
                                        <div class="modal-item-info">
                                            <div class="modal-item-price">
                                                <div class="modal-item-price-in">
                                                    <span>{{product.price}}</span> {{Basket.currencySymbol}}
                                                </div>
                                            </div>
                                            <div class="modal-item-number">
                                                <div class="num-block">
                                                    <div class="num-in">
                                                        <div class="btn-group form-inline">

                                                            <span class="minus dis" @click="changeProductCount(product,-1)"></span>
                                                            <input type="text" class="in-num" :value="product.countInOrder" readonly="true">
                                                            <span class="plus" @click="changeProductCount(product,1)"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-item-td td-sum">
                                        <div class="modal-item-sum">
                                            <div class="modal-item-sum-name">
                                                {{ $t('message.sum') }}
                                            </div>
                                            <div class="modal-item-sum-num">
                                                <span>{{product.price*product.countInOrder}}</span> {{Basket.currencySymbol}}
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
                            {{ $t('message.continue_shopping') }}
                        </a>
                    </div>
                    <div class="one-modal-item-sum">
                        <div class="one-modal-item-top">
                            <div class="one-modal-item-name">
                                {{ $t('message.total') }}:
                            </div>
                            <div class="one-modal-item-val">
                                {{Basket.sum}} {{Basket.currencySymbol}}
                            </div>
                        </div>
                        <div class="one-modal-item-bt">
                            <a :href="Basket.routePlaceOrder" class="def-big-bt">
                                {{ $t('message.place_order') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <h4 v-else>{{ $t('message.cart_is_empty') }}</h4>

        </div>
    </div>

    <div v-else-if="this.temp == 'checkout'" class="basket-inside">
        <div class="one-lk-bask-table">

            <div v-for="product in Basket.products" class="one-lk-bask-tr">
                <div class="one-lk-bask-td thumb-td">
                    <div class="one-lk-bask-thumb">
                        <a :href="product.a_href">
                            <img :src="product.image" alt="">
                        </a>
                    </div>
                </div>
                <div class="one-lk-bask-td descr-td">
                    <div class="one-lk-bask-tit">
                        <a :href="product.a_href">
                            {{getLocalName(product)}}
                        </a>
                    </div>
                    <div class="one-lk-bask-price">
                        <div class="one-lk-bask-price-in">
                            <span>{{product.price}}</span> {{Basket.currencySymbol}}
                        </div>
                    </div>
                </div>
                <div class="one-lk-bask-td num-td">
                    <div class="one-lk-bask-num-name">
                        {{ $t('message.count') }}
                    </div>
                    <div class="one-lk-bask-num-val">
                        <span>{{product.countInOrder}}</span> {{ $t('message.items') }}
                    </div>
                </div>
                <div class="one-lk-bask-td sum-td">
                    <div class="one-lk-bask-sum-name">
                        {{ $t('message.sum') }}
                    </div>
                    <div class="one-lk-bask-sum-val">
                        <span>{{product.price*product.countInOrder}}</span> {{Basket.currencySymbol}}
                    </div>
                </div>
            </div>
        </div>

        <div class="last-inside-sum">
            <div class="last-inside-sum-in">
                <div class="inside-name">
                    {{ $t('message.total') }}:
                </div>
                <div class="inside-val">
                    {{Basket.sum}} {{Basket.currencySymbol}}
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
    import {mapGetters} from 'vuex'
    import i18n from '../i18n'

    export default {
        name: "BasketComponent",
        data: function () {
            return {}
        },
        props: {
            temp : String,
            locale : String,
            basket : Object,
        },
        methods:{
            prepareData: function () {
                this.setBasket();
                this.setLocale();
            },
            setBasket: function () {
                this.$store.dispatch('fetchBasket', this.basket);
            },
            setLocale: function () {
                i18n.locale = this.locale;
            },
            deleteProduct(product) {
                this.$store.dispatch('deleteProduct',product)
            },
            changeProductCount(product, step) {
                if(!((parseInt(product.countInOrder) === 1) && (parseInt(step) === -1))){
                    if(!((parseInt(product.countInOrder) === parseInt(product.count)) && (parseInt(step) === 1))) {
                        this.$store.dispatch('changeProductCount', {'product' : product, 'step' : parseInt(step)})
                    } else {
                        alert(i18n.messages[i18n.locale].message.you_want_too_much);
                    }
                }
            },
            getLocalName(product) {
                return (i18n.locale === 'en') ? product.name_en : product.name;
            }
        },

        mounted() {
            this.prepareData();
        },

        computed: {
            ...mapGetters(['Basket', 'isEmpty']),
        }
    }
</script>

<style scoped>

</style>
