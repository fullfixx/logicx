<template>
<div class="w-96 mx-auto pt-8">
    <h1 class="text-lg mb-8">Devices</h1>
    <div class="mb-4">
        <Link :href="route('device.create')" class="bg-sky-500 rounded-full text-center text-white block p-2 w-32 border border-sky-500 hover:bg-white hover:text-sky-500">Add a Device</Link>
    </div>
    <div v-if="devices">
        <div v-for="device in devices">
            {{ device.id }} - {{ device.type_name }} {{ device.class_name }} {{ device.brand_name }} {{ device.model_name }} {{ device.wh_value }} {{ device.volt_value }} {{ device.version_name }} {{ device.color_name }} {{ device.addition_1 }} {{ device.addition_2 }} {{ device.addition_3 }} {{ device.remark }}
            <Link :href="route('device.show', device.id)" class="text-sky-500">Show</Link>
            <Link :href="route('device.edit', device.id)" class="text-green-500">Edit</Link>
            <p @click="deleteDevice(device.id)" class="text-red-500 cursor-pointer">Destroy</p>
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
            'devices'
        ],
        components: {
            Link
        },
        methods: {
            deleteDevice(id) {
                this.$inertia.delete(`/devices/${id}`)
            }
        }
    }
</script>

<style scoped>

</style>
