<template>
    <div>

        <button v-if="this.temp == 'product-card'" type="submit" class="btn btn-primary def-min-bt" role="button" @click="addProduct()">
            {{ $t('message.buy') }}
        </button>

        <button v-else-if="this.temp == 'product-page'" type="submit" class="def-bt" role="button" @click="addProduct()">
            {{ $t('message.buy') }}
        </button>

    </div>
</template>

<script>
    import i18n from '../i18n'
    // {{--<buy-button-component :temp="{{json_encode('product-page')}}" :locale="{{json_encode(strtolower(__('main.current_lang')))}}"  :product="{{json_encode($product)}}"></buy-button-component>--}}

    export default {
        name: "BuyButtonComponent",
        props: {
            temp : String,
            locale : String,
            product : [],
        },
        methods:{
            addProduct() {
                this.$store.dispatch('addProduct', this.product);
            }
        }
    }
</script>

<style scoped>

</style>
