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

    export default {
        name: "BuyButtonComponent",
        props: {
            temp : String,
            locale : String,
            product : [],
        },
        methods:{
            addProduct() {
                this.$store.dispatch('addProduct', this.product).then(console.log('eee')).catch('ttt');
            }
        }
    }
</script>

<style scoped>

</style>
