let actions = {
    fetchBasket({commit}, basket) {
        commit('FETCH_BASKET', basket);
    },

    deleteProduct({commit}, product) {
        axios.delete("/api/basket/" + product.id)
            .then(res => {
                console.log(res);
                if (res.data === 'ok')
                    commit('DELETE_PRODUCT', product)
            }).catch(err => {
            console.log(err)
        })
    },

    changeProductCount({commit}, data) {
        axios.post("/api/basket/change", data.product)
            .then(res => {
                commit('CHANGE_PRODUCT_COUNT', data)
            }).catch(err => {
            console.log(err)
        })
    },

}

export default actions
