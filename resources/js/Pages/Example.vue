<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
        BreezeAuthenticatedLayout
    },
    props: {
        users: {type: Array, required:true}
    },
    methods: {
        changeUser(event) {
            var userId = event.data.id;
            
            axios.post(`/change/user/${userId}`)
            .then(response => {
                this.$attrs.auth.user = response.data;
            });
        }
    }    
}
</script>

<template>
    <Head title="Novo Colaborador"/>
    <BreezeAuthenticatedLayout :users="users" @change="changeUser">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
                Cadastre um novo colaborador aqui
                <small>As informações serão utilizadas para cadastro em benefícios</small>
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
