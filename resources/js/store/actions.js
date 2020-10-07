let actions = {
    fetchBasket({commit}) {
        axios.get('/api/basket')
            .then(res => {
                commit('FETCH_BASKET', res.data)
                console.log(res.data);
            }).catch(err => {
            console.log(err)
        })
    },

}

export default actions
