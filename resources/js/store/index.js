import Vue from 'vue'
import Vuex from 'vuex'
import grades from './modules/grades';

Vue.use(Vuex);

export default new Vuex.Store({

    modules : {

        grades
    }
});