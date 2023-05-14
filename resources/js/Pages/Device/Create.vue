<template>
<div class="w-96 mx-auto pt-8">
    <h1 class="text-lg mb-8">Create a Device</h1>
    <div class="mb-4">
        <Link :href="route('device.index')" class="bg-sky-500 rounded-full text-center text-white block p-2 w-32 border border-sky-500 hover:bg-white hover:text-sky-500">Back</Link>
    </div>

    <!--<form @submit.prevent="store">-->
        <!--<input v-model="type_name" type="text" placeholder="Type">-->
        <!--<input v-model="class_name" type="text" placeholder="Class">-->
        <!--<input v-model="brand_name" type="text" placeholder="Brand">-->
        <!--<input v-model="model_name" type="text" placeholder="Model">-->
        <!--<input v-model="wh_value" type="text" placeholder="Wh">-->
        <!--<input v-model="volt_value" type="text" placeholder="Volt">-->
        <!--<input v-model="version_name" type="text" placeholder="Version">-->
        <!--<input v-model="color_name" type="text" placeholder="Color">-->
        <!--<input v-model="addition_1" type="text" placeholder="Add #1">-->
        <!--<input v-model="addition_2" type="text" placeholder="Add #2">-->
        <!--<input v-model="addition_3" type="text" placeholder="Add #3">-->
        <!--<input v-model="remark" type="text" placeholder="Remark">-->
        <!--<div>-->
            <!--<button class="bg-sky-500 rounded-full text-center text-white block p-2 w-32 border border-sky-500 hover:bg-white hover:text-sky-500" type="submit">Store</button>-->
        <!--</div>-->
    <!--</form>-->

    <form @submit.prevent="store">
        <div v-if="errors.type_name">{{ errors.type_name }}</div>
        <div v-if="errors.brand_name">{{ errors.brand_name }}</div>
        <div v-if="errors.model_name">{{ errors.model_name }}</div>
        <input v-model="form.type_name" type="text" placeholder="Type">
        <input v-model="form.class_name" type="text" placeholder="Class">
        <input v-model="form.brand_name" type="text" placeholder="Brand">
        <input v-model="form.model_name" type="text" placeholder="Model">
        <input v-model="form.wh_value" type="text" placeholder="Wh">
        <input v-model="form.volt_value" type="text" placeholder="Volt">
        <input v-model="form.version_name" type="text" placeholder="Version">
        <input v-model="form.color_name" type="text" placeholder="Color">
        <input v-model="form.addition_1" type="text" placeholder="Add #1">
        <input v-model="form.addition_2" type="text" placeholder="Add #2">
        <input v-model="form.addition_3" type="text" placeholder="Add #3">
        <input v-model="form.remark" type="text" placeholder="Remark">
        <div>
            <button class="bg-sky-500 rounded-full text-center text-white block p-2 w-32 border border-sky-500 hover:bg-white hover:text-sky-500" type="submit">Store</button>
        </div>
    </form>

</div>
</template>

<!--<script>-->
    <!--import {Link} from '@inertiajs/vue3'-->
    <!--export default {-->
        <!--name: "index",-->
        <!--components: {-->
            <!--Link-->
        <!--},-->

        <!--data() {-->
            <!--return {-->
                <!--type_name: '',-->
                <!--class_name: '',-->
                <!--brand_name: '',-->
                <!--model_name: '',-->
                <!--wh_value: '',-->
                <!--volt_value: '',-->
                <!--version_name: '',-->
                <!--color_name: '',-->
                <!--addition_1: '',-->
                <!--addition_2: '',-->
                <!--addition_3: '',-->
                <!--remark: '',-->
            <!--}-->
        <!--},-->

        <!--methods: {-->
            <!--store() {-->
                <!--this.$inertia.post('/devices', {-->
                    <!--type_name: this.type_name,-->
                    <!--class_name: this.class_name,-->
                    <!--brand_name: this.brand_name,-->
                    <!--model_name: this.model_name,-->
                    <!--wh_value: this.wh_value,-->
                    <!--volt_value: this.volt_value,-->
                    <!--version_name: this.version_name,-->
                    <!--color_name: this.color_name,-->
                    <!--addition_1: this.addition_1,-->
                    <!--addition_2: this.addition_2,-->
                    <!--addition_3: this.addition_3,-->
                    <!--remark: this.remark,-->
                <!--})-->
            <!--}-->
        <!--}-->
    <!--}-->
<!--</script>-->

<script setup>
    import { reactive } from 'vue'
    import { router } from '@inertiajs/vue3'

    const form = reactive({
        type_name: '',
        class_name: '',
        brand_name: '',
        model_name: '',
        wh_value: '',
        volt_value: '',
        version_name: '',
        color_name: '',
        addition_1: '',
        addition_2: '',
        addition_3: '',
        remark: '',
    })

    function store() {
        router.post('/devices', form)
    }
</script>

<script>
    import {Link} from '@inertiajs/vue3'
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

    export default {
        name: "index",
        layout: AuthenticatedLayout,
        props: [
            'devices', 'errors'
        ],
        components: {
            Link
        }
    }
</script>

<style scoped>

</style>
