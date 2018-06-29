export default {
    setItems: (state, payload) => {
        state.items = payload;
    },
    setItem: (state, payload) => {
        state.item = payload;
    }
}