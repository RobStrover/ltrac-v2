<template>
    <div>
    <DashboardNavbar sticky="true" />
    <b-container fluid>
        <b-row>
            <b-col sm="4" md="3">
                <b-list-group>
                    <b-list-group-item active button class="d-flex justify-content-between align-items-center">
                        New Enquiry
                        <b-badge variant="primary" pill>14</b-badge>
                    </b-list-group-item>
                    <b-list-group-item button class="d-flex justify-content-between align-items-center">
                        Quote Given
                        <b-badge variant="primary" pill>14</b-badge>
                    </b-list-group-item>
                    <b-list-group-item button class="d-flex justify-content-between align-items-center">
                        Current
                        <b-badge variant="primary" pill>14</b-badge>
                    </b-list-group-item>
                    <b-list-group-item button class="d-flex justify-content-between align-items-center">
                        Awaiting Invoice
                        <b-badge variant="primary" pill>14</b-badge>
                    </b-list-group-item>
                    <b-list-group-item button class="d-flex justify-content-between align-items-center">
                        Invoice Sent
                        <b-badge variant="primary" pill>14</b-badge>
                    </b-list-group-item>
                    <b-list-group-item button class="d-flex justify-content-between align-items-center">
                        Invoice Paid
                        <b-badge variant="primary" pill>14</b-badge>
                    </b-list-group-item>
                </b-list-group>
            </b-col>
            <b-col sm="8" md="9">
                <nuxt/>
            </b-col>
        </b-row>
    </b-container>
    </div>
</template>

<script>
    import DashboardNavbar from '~/components/DashboardNavbar.vue'

    export default {
        components: {
            DashboardNavbar
        }
    }
</script>