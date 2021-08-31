<template>
    <!-- You can use __('my-plugin::myplugin.string') in components -->
    <div v-if="action == 'list-options'">
        <!-- List options (use options.myListProp) -->
    </div>
    <div v-else-if="action == 'view-options'">
        <!-- View options (use options.myViewProp) -->
    </div>
    <div v-else-if="action == 'view'">
        <!-- Show your formfield in the BREAD builder -->
    </div>
</template>

<script>
export default {
    mixins: [voyager.formfieldBuilderMixin],
    computed: {
        defaultListOptions() {
            return {
                myListProp: 1,
            };
        },
        defaultViewOptions() {
            return {
                myViewProp: 1
            };
        },
    }
};
</script>