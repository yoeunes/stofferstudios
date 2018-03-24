<template>
    <div>
        <div class="card">
            <div class="card-header">
                <i class="far fa-fw fa-btn fa-address-book" aria-hidden="true"></i>
                Leads
                <button class="btn btn-link float-right" data-toggle="modal" data-target="#add-lead-modal"><i class="far fa-plus-circle"></i> Add Lead</button>
            </div>

            <div class="card-body">
                Hello {{ firstName }}, Welcome to your Leads. Here we will display a list of your leads and give you the opportunity to create new leads.
            </div>
        </div>
        <addLead :user="user"></addLead>
    </div>
</template>

<script>
    import addLead from './modals/add-lead.vue';

    export default {
        props: ['user', 'leads'],

        components: { addLead },

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
