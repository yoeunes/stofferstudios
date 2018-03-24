<template>
    <div class="modal fade" id="add-session-modal" tabindex="-1" role="dialog" aria-labelledby="add-session-label">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="add-session-label"><i class="fas fa-fw fa-btn fa-camera-retro" aria-hidden="true"></i> Add Session</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <fieldset>
                            <legend>Client</legend>

                            <!-- Client -->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Choose Client:</label>

                                <div class="col-md-6">
                                    <v-select v-model="clientSelect" :options="myClients" @input=""></v-select>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Session Details</legend>

                            <!-- Session Name -->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Name:</label>

                                <div class="col-md-6">
                                    <input v-model="name" class="form-control" />
                                </div>
                            </div>

                            <!-- Session Type -->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Type:</label>

                                <div class="col-md-6">
                                    <input v-model="type" class="form-control" />
                                </div>
                            </div>

                            <!-- Session Date -->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Date:</label>

                                <div class="col-md-6">
                                    <input v-model="date" class="form-control" />
                                </div>
                            </div>

                            <!-- Session Time -->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Time:</label>

                                <div class="col-md-6">
                                    <input v-model="time" class="form-control" />
                                </div>
                            </div>

                            <!-- Session Location -->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Location:</label>

                                <div class="col-md-6">
                                    <input v-model="location" class="form-control" />
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Session Notes</legend>

                            <!-- Session Notes -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <vue-editor v-model="notes"></vue-editor>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { VueEditor } from 'vue2-quill-editor';

    export default {
        props: ['user', 'clients'],

        components: { VueEditor },

        data() {
            return {
                myClients: [],
                clientSelect: '',
                name: '',
                type: '',
                date: '',
                time: '',
                location: '',
                notes: '<h1>Some initial content</h1>',
            };
        },

        mounted() {
            var container = document.getElementById('session-notes');
            var toolbarOptions = [
                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                ['blockquote', 'code-block'],

                [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                [{ 'direction': 'rtl' }],                         // text direction

                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                [{ 'font': [] }],
                [{ 'align': [] }],

                ['clean']                                         // remove formatting button
            ];
            var options = {
                debug: 'info',
                modules: {
                    toolbar: toolbarOptions
                },
                placeholder: 'Compose an epic...',
                readOnly: true,
                theme: 'snow'
            };
            var editor = new Quill(container, options);
        },

        methods: {
            /**
             * Save the session
             */
            saveSession() {
                axios.post('/sessions/add_session', this.gatherFormData())
                    .then(function (response) {
                        //
                    });
            },

            /**
             * Gather the form data.
             */
            gatherFormData() {
                this.data = new FormData();

                // this.data.append('client', this.clientSelect);
                // this.data.append('session_name', this.name);
                // this.data.append('session_type', this.type);
                // this.data.append('session_date', this.date);
                // this.data.append('session_time', this.time);
                // this.data.append('session_location', this.location);
                // this.data.append('session_notes', this.notes);

                return this.data;
            },
        }
    }
</script>
