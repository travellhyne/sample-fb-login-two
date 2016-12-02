<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Message</div>

                    <div class="panel-body">
                        Something will happen after five minutes on your first login.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        mounted() {
            console.log('Component ready.');
        }
    }
</script>
