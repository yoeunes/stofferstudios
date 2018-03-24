<template>
    <div class="card">
        <div class="card-header"><i class="far fa-fw fa-btn fa-tachometer" aria-hidden="true"></i> Dashboard</div>

        <div class="card-body">
            Hello {{ firstName }}, Welcome to your Dashboard.
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
