<template>
    <b-form @submit="onSubmit" @reset="onReset">
        <b-form-group id="exampleInputGroup1"
                      label="Email address:"
                      label-for="exampleInput1"
                      description="We'll never share your email with anyone else.">
            <b-form-input id="exampleInput1"
                          type="email"
                          v-model="job.id"
                          required
                          placeholder="Enter email">
            </b-form-input>
        </b-form-group>
        <b-button type="submit" variant="primary">Submit</b-button>
    </b-form>
</template>

<script>

    export default {

        mounted() {
            this.job = this.jobs.find((job) => { return job.id == this.id });

//            if (!this.job) this.$router.push({'path': '/job'});
        },

        computed: {
            jobs() {
                return this.$store.state.job.jobs;
            },
        },

        data: function(){
            return {
                pageid: null,
                job: {}
            }
        },

        asyncData (context) {
            return {
                id: context.params.id,
            }
        },

        layout: 'dashboard',

    }

</script>