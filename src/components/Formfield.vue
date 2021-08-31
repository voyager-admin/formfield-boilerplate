<template>
    <!-- You can use __('my-plugin::myplugin.string') in components --> 
    <div v-if="action == 'query'">
        <!-- Display a custom query-input -->
    </div>
    <slot v-else-if="action == 'query'">
        <!-- Or use the default text-input -->
    </slot>
    <div v-else-if="action == 'add' || action == 'edit'">
        <!-- Display "modelValue" when adding/editing -->
    </div>
    <div v-else-if="action == 'browse'">
        <!-- Display "modelValue" when browsing -->
    </div>
</template>

<script>
export default {
    mixins: [voyager.formfieldMixin]
};
</script>