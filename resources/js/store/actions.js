import i18n from '../i18n'

let actions = {
    fetchBasket({commit}) {
        axios.get("/basket/get-basket")
            .then(res => {
                commit('FETCH_BASKET', res.data);
            }).catch(err => {
            console.log(err)
        })
    },

    deleteProduct({commit}, product) {
        axios.delete("/basket/" + product.code)
            .then(res => {
                commit('DELETE_PRODUCT', product)
            }).catch(err => {
            alert(i18n.messages[i18n.locale].message.something_went_wrong);
            console.log(err)
        })
    },

    changeProductCount({commit}, data) {
        axios.post("/basket/change", data)
            .then(res => {
                commit('CHANGE_PRODUCT_COUNT', data)
            }).catch(err => {
            alert(i18n.messages[i18n.locale].message.something_went_wrong);
            console.log(err)
        })
    },

    addProduct({commit}, product) {
        axios.post("/basket/add", {productCode: product.code})
            .then(res => {
                alert(i18n.messages[i18n.locale].message.product_added);
                commit('ADD_PRODUCT', res.data)
            }).catch(err => {
            alert(i18n.messages[i18n.locale].message.something_went_wrong);
            console.log(err)
        })
    },
}

export default actions
