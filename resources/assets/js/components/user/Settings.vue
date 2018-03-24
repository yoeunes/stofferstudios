<template>
    <div class="card">
        <div class="card-heading"><i class="far fa-fw fa-btn fa-cog" aria-hidden="true"></i> Settings</div>

        <div class="card-body">
            Hello {{ firstName }}, Welcome to your Settings Dashboard.
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                firstName: 'FirstName',
            };
        },

        mounted() {
            this.firstName = this.user.first_name;
        }
    }
</script>
