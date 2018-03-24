<template>
    <div>
        <div class="card">
            <div class="card-header">
                <i class="fas fa-fw fa-btn fa-camera-retro" aria-hidden="true"></i>
                Sessions
                <button class="btn btn-link float-right" data-toggle="modal" data-target="#add-session-modal">
                    <i class="far fa-plus-circle"></i> Add Session
                </button>
            </div>

            <div class="card-body">
                Hello {{ firstName }}, Welcome to your Sessions.
            </div>
        </div>
        <addSession :user="user"></addSession>
    </div>
</template>

<script>
    import addSession from './modals/add-session.vue';

    export default {
        props: ['user', 'sessions'],

        components: { addSession },

        data() {
            return {
                firstName: 'FirstName',
            };
        },

        mounted() {
            this.firstName = this.user.first_name;
        },
    }
</script>
