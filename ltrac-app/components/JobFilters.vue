<template>
    <div>
        <b-list-group>
            <b-list-group-item active button class="d-flex justify-content-between align-items-center">
                New Enquiry
                <b-badge variant="primary" pill>{{ numberOfNewEnquiry }}</b-badge>
            </b-list-group-item>
            <b-list-group-item button class="d-flex justify-content-between align-items-center">
                Quote Given
                <b-badge variant="primary" pill>{{ numberOfQuoteGiven }}</b-badge>
            </b-list-group-item>
            <b-list-group-item button class="d-flex justify-content-between align-items-center">
                Current
                <b-badge variant="primary" pill>{{ numberOfCurrent }}</b-badge>
            </b-list-group-item>
            <b-list-group-item button class="d-flex justify-content-between align-items-center">
                Awaiting Invoice
                <b-badge variant="primary" pill>{{ numberOfAwaitingInvoice }}</b-badge>
            </b-list-group-item>
            <b-list-group-item button class="d-flex justify-content-between align-items-center">
                Invoice Sent
                <b-badge variant="primary" pill>{{ numberOfInvoiceSent }}</b-badge>
            </b-list-group-item>
            <b-list-group-item button class="d-flex justify-content-between align-items-center">
                Invoice Paid
                <b-badge variant="primary" pill>{{ numberOfInvoicePaid }}</b-badge>
            </b-list-group-item>
        </b-list-group>
    </div>
</template>

<script>
    export default {
        computed: {
            jobs() {
                return this.$store.state.job.jobs;
            },
            numberOfNewEnquiry() {
                return this.jobs.filter(job => job.status == 'new-enquiry').length;
            },
            numberOfQuoteGiven() {
                return this.jobs.filter(job => job.status == 'quote-given').length;
            },
            numberOfCurrent() {
                return this.jobs.filter(job => job.status == 'current').length;
            },
            numberOfAwaitingInvoice() {
                return this.jobs.filter(job => job.status == 'awaiting-invoice').length;
            },
            numberOfInvoiceSent() {
                return this.jobs.filter(job => job.status == 'invoice-sent').length;
            },
            numberOfInvoicePaid() {
                return this.jobs.filter(job => job.status == 'invoice-paid').length;
            }
        }
    }
</script>