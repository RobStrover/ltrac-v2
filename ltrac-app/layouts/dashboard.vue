<template>
    <div>
    <DashboardNavbar sticky="true" />
    <b-container fluid>
        <b-row>
            <b-col sm="4" md="3">
                <JobFilters/>
            </b-col>
            <b-col sm="8" md="9">
                <nuxt/>
            </b-col>
        </b-row>
    </b-container>
    </div>
</template>

<script>
    import DashboardNavbar from '~/components/DashboardNavbar.vue';
    import JobFilters from '~/components/JobFilters.vue';

    export default {
        components: {
            DashboardNavbar,
            JobFilters
        }
    }
</script>