const axios = require('axios');

const defaultState = {
    "jobs": []
};

export const state = () => defaultState;

export const mutations = {
    storeJobData(state, jobDetails) {

        state.jobs = jobDetails;
    },
    wipeState(state) {
        Object.keys(state).map(k => {
            state[k] = defaultState[k];
    })
    }
};

export const actions = {
    async refreshJobsData(context, payload) {

    await axios.get(process.env.API_URL + '/jobs').then(function (response) {
        context.commit("storeJobData", response.data);
    }).catch (function (error) {
        console.log(error);
    });

}
};