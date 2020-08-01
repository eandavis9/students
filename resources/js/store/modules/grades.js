import axios from 'axios';


const state = {

    grades : []
};

const getters = {

    allGrades : (state) => state.grades
}

const actions = {

    //allGrades = (state) => state.grades

    async fetchGrades({ commit }){

        const response = await axios.get('/get_grades');
       // console.log(response.data)
        commit('setGrades', response.data.data);
    }
}

const mutations ={

    setGrades : (state, grades) => (state.grades = grades)
}
export default {

    state,
    getters,
    mutations,
    actions
}