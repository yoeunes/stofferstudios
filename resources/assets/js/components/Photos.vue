<template>
    <div>
        <div class="card">
            <div class="card-heading">
                <i class="far fa-fw fa-btn fa-images" aria-hidden="true"></i>
                Photos
                <button class="btn btn-link pull-right" data-toggle="modal" data-target="#add-photo-modal"><i class="far fa-plus-circle"></i> Add Photo</button>
            </div>

            <div class="card-body">
                Hello {{ firstName }}, Welcome to your Photos.
            </div>
        </div>
        <addPhoto :user="user"></addPhoto>
    </div>
</template>

<script>
    import addPhoto from './modals/add-photo.vue';

    export default {
        props: ['user'],

        components: { addPhoto },

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
