let actions = {
    fetchBasket({commit}, basket) {
        axios.get("/api/basket")
            .then(res => {
                commit('FETCH_BASKET', res.data);
            }).catch(err => {
            console.log(err)
        })
    },

    deleteProduct({commit}, product) {
        axios.delete("/api/basket/" + product.code)
            .then(res => {
                commit('DELETE_PRODUCT', product)
            }).catch(err => {
            console.log(err)
        })
    },

    changeProductCount({commit}, data) {
        axios.post("/api/basket/change", data)
            .then(res => {
                commit('CHANGE_PRODUCT_COUNT', data)
            }).catch(err => {
            console.log(err)
        })
    },

    addProduct({commit}, product) {
        axios.post("/api/basket/add", {productCode: product.code})
            .then(res => {
                commit('ADD_PRODUCT', res.data)
            }).catch(err => {
            console.log(err)
        })
    },
}

export default actions
