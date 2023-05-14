<template>
<div class="w-96 mx-auto pt-8">
    <h1 class="text-lg mb-8">Device</h1>
    <div class="mb-4">
        <Link :href="route('device.index')" class="bg-sky-500 rounded-full text-center text-white block p-2 w-32 border border-sky-500 hover:bg-white hover:text-sky-500">Back</Link>
    </div>
    <div v-if="device">
        <div>
            {{ device.type_name }} {{ device.class_name }} {{ device.brand_name }} {{ device.model_name }} {{ device.wh_value }} {{ device.volt_value }} {{ device.version_name }} {{ device.color_name }} {{ device.addition_1 }} {{ device.addition_2 }} {{ device.addition_3 }} {{ device.remark }}
        </div>
    </div>
</div>
</template>

<script>
    import {Link} from '@inertiajs/vue3'
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    export default {
        name: "index",
        layout: AuthenticatedLayout,
        props: [
            'device'
        ],
        components: {
            Link
        }
    }
</script>

<style scoped>

</style>
