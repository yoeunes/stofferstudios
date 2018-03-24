<template>
    <div class="card">
        <div class="card-heading"><i class="far fa-fw fa-btn fa-user" aria-hidden="true"></i> Profile</div>

        <div class="card-body">
            Hello {{ firstName }}, Welcome to your Profile.
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
