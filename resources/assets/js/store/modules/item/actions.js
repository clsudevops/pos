export default {
    fetchItems : ({commit}, payload) => {
        axios.get('/api/items')
        .then(response => {
            console.log(response)
        })
        .catch(err => {

        });
    } 
}