import Vue from 'vue'
import VueI18n from 'vue-i18n'
import Formatter from './formatter'

Vue.use(VueI18n)

const locale = "ru" // default locale
const formatter = new Formatter({ locale })

export default new VueI18n({
    locale,
    formatter,
    messages: {
        "ru": {
            message: {
                cart: 'Корзина',
                price: 'Цена',
                sum: 'Сумма',
                continue_shopping: 'Продолжить покупки',
                total: 'Всего',
                place_order: 'Оформить заказ',
                cart_is_empty: 'Ваша корзина пуста!',
                you_want_too_much: 'Это весь товар в наличии',
            }
        },
        "en": {
            message: {
                cart: 'Your cart',
                price: 'Price',
                sum: 'Sum',
                continue_shopping: 'Continue shopping',
                total: 'Total',
                place_order: 'Place your order',
                cart_is_empty: 'Your Cart is empty!',
                you_want_too_much: 'It is a limit for this product',
            }
        },

    }
})
