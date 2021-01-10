let mutations = {
    FETCH_BASKET(state, basket) {
        state.Basket = basket
        state.isEmpty = (basket.products === undefined) || (basket.products.length === 0)
    },

    DELETE_PRODUCT(state, product) {
        let index = state.Basket.products.findIndex(item => item.id === product.id)
        state.Basket.sum = parseInt(state.Basket.sum) - parseInt(state.Basket.products[index].price)*parseInt(state.Basket.products[index].countInOrder);
        state.Basket.products.splice(index, 1)
    },

    CHANGE_PRODUCT_COUNT(state, data) {
        if(!((parseInt(data.product.countInOrder) === 1) && (parseInt(data.step) === -1))){
            if(!((parseInt(data.product.countInOrder) === parseInt(data.product.count)) && (parseInt(data.step) === 1))) {
                let index = Object.keys(state.Basket.products).find(key => state.Basket.products[key] === data.product);
                state.Basket.products[index].countInOrder = parseInt(data.product.countInOrder) + parseInt(data.step)
                state.Basket.sum = parseInt(state.Basket.sum) + parseInt(state.Basket.products[index].price)*parseInt(data.step);
            }
        }
    },

    ADD_PRODUCT(state, basket) {
        state.Basket = basket
        state.isEmpty = (basket.products === undefined)
    }
}
export default mutations
