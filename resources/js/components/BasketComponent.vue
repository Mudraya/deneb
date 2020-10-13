<template>

<div>
    <div class="modal-bask">
        <div class="modal-bask-tit">
            {{ $t('message.cart') }}
        </div>
        <div class="modal-bask-wrap">

            <div v-if="!Basket.isEmpty" class="one-modal-bask-item">

                <div class="one-modal-item-table">
                    <!-- one item -->
                    <div v-for="product in Basket.products" class="modal-item-tr">
                        <div class="modal-item-td td-thumb">
                            <div class="modal-item-thumb">

                                <div class="del-item" v-on:click="deleteProduct(product)"></div>
                                <a href="#">
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
            locale : String,
            basket : Array,
        },
        methods:{
            prepareData: function () {
                this.setBasket();
                this.setEmptyBasket();
                this.setLocale();
            },
            setBasket: function () {
                this.$store.dispatch('fetchBasket', this.basket);
            },
            setLocale: function () {
                i18n.locale = this.locale;
            },
            setEmptyBasket: function () {
                this.Basket.isEmpty = (this.Basket.products[0] === undefined);
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
            ...mapGetters(['Basket'])
        }
    }
</script>

<style scoped>

</style>
