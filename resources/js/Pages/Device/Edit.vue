<template>
<div class="w-96 mx-auto pt-8">
    <h1 class="text-lg mb-8">Create a Device</h1>
    <div class="mb-4">
        <Link :href="route('device.index')" class="bg-sky-500 rounded-full text-center text-white block p-2 w-32 border border-sky-500 hover:bg-white hover:text-sky-500">Back</Link>
    </div>

    <form @submit.prevent="update">
        <input v-model="type_name" type="text" placeholder="Type">
        <input v-model="class_name" type="text" placeholder="Class">
        <input v-model="brand_name" type="text" placeholder="Brand">
        <input v-model="model_name" type="text" placeholder="Model">
        <input v-model="wh_value" type="text" placeholder="Wh">
        <input v-model="volt_value" type="text" placeholder="Volt">
        <input v-model="version_name" type="text" placeholder="Version">
        <input v-model="color_name" type="text" placeholder="Color">
        <input v-model="addition_1" type="text" placeholder="Add #1">
        <input v-model="addition_2" type="text" placeholder="Add #2">
        <input v-model="addition_3" type="text" placeholder="Add #3">
        <input v-model="remark" type="text" placeholder="Remark">
        <div>
            <button class="bg-sky-500 rounded-full text-center text-white block p-2 w-32 border border-sky-500 hover:bg-white hover:text-sky-500" type="submit">Update</button>
        </div>
    </form>

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
        },

        data() {
            return {
                id: this.device.id,
                type_name: this.device.type_name,
                class_name: this.device.class_name,
                brand_name: this.device.brand_name,
                model_name: this.device.model_name,
                wh_value: this.device.wh_value,
                volt_value: this.device.volt_value,
                version_name: this.device.version_name,
                color_name: this.device.color_name,
                addition_1: this.device.addition_1,
                addition_2: this.device.addition_2,
                addition_3: this.device.addition_3,
                remark: this.device.remark,
            }
        },

        methods: {
            update() {
                this.$inertia.patch(`/devices/${this.id}`, {
                    type_name: this.type_name,
                    class_name: this.class_name,
                    brand_name: this.brand_name,
                    model_name: this.model_name,
                    wh_value: this.wh_value,
                    volt_value: this.volt_value,
                    version_name: this.version_name,
                    color_name: this.color_name,
                    addition_1: this.addition_1,
                    addition_2: this.addition_2,
                    addition_3: this.addition_3,
                    remark: this.remark,
                })
            }
        }
    }
</script>


<style scoped>

</style>
