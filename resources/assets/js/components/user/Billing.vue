<template>
    <div class="card">
        <div class="card-heading"><i class="far fa-fw fa-btn fa-credit-card" aria-hidden="true"></i> Billing</div>

        <div class="card-body">
            Hello {{ firstName }}, Welcome to your Billing Dashboard.
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
