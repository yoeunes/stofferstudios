<template>
    <div>
        <div class="card">
            <div class="card-heading">
                <i class="far fa-fw fa-btn fa-users" aria-hidden="true"></i>
                Clients
                <button class="btn btn-link pull-right" data-toggle="modal" data-target="#add-client-modal"><i class="far fa-plus-circle"></i> Add Client</button>
            </div>

            <div class="card-body">
                Hello {{ firstName }}, Welcome to your Clients.
            </div>
        </div>
        <addClient :user="user"></addClient>
    </div>
</template>

<script>
    import addClient from './modals/add-client.vue';

    export default {
        props: ['user', 'clients'],

        components: { addClient },

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
