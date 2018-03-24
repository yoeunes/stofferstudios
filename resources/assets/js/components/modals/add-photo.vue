<template>
    <div class="modal fade" id="add-photo-modal" tabindex="-1" role="dialog" aria-labelledby="add-photo-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="add-photo-label"><i class="far fa-fw fa-btn fa-images" aria-hidden="true"></i> Add Photo</h4>
                </div>
                <div class="modal-body">
                    Hello {{ firstName }}, Lets add a photo now!
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
