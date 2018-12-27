<template>
    <div>

        <b-card v-for="(job, index) in jobs" v-bind:key="index"
                :title="job.name"
                :sub-title="job.purchase_order_number">
            <p class="card-text">
                test
            </p>
            <b-link :to="{ path:`/job/${job.id}`, params: { id: job.id } }"
                    class="card-link">View</b-link>
        </b-card>

    </div>
</template>

<script>
    export default {
        layout: 'dashboard',

        mounted() {
            this.$store.dispatch('job/refreshJobsData', { 'email':'test', 'password':'test' });
        },

        computed: {
            jobs() {
                return this.$store.state.job.jobs;
            }
        },
    }
</script>

<style lang="scss">

</style>