import axios from "axios";

const state = {
    foods: []
}

const mutations = {
    setFoods (state, foods) {
        state.foods = foods
    },
    addFood (state, input) {
        state.foods.push(input)
    }
}

const getters = {
    allFoods (state) {
        return state.foods
    }
}

const actions = {
    async fetchFoods({ commit }) {
        const response = await axios.get(
            '/api/crud'
        )
        commit('setFoods', response.data)
    },
    async addFood({ commit }, input) {
        const response = await axios.post(
            '/api/crud/', {
                input,
                completed: false
            }
        )
        commit('addFood', response.data)
    }
}

const modules= {}


export default {
    state,
    mutations,
    getters,
    actions,
    modules
}
