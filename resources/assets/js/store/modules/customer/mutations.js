export default {
    setCustomers: (state, payload) => {
        state.customers = payload;
    },
    setCustomer: (state, payload) => {
        state.customer = payload;
    }
}