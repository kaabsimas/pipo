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
            var userId = event.target.dataset.key;
            
            axios.post(`/change/user/${userId}`)
            .then(response => {
                console.log(response);
                this.$attrs.auth.user = response.data;
            });
        }
    }    
}
</script>

<template>
    <Head title="Novo Colaborador"/>
    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
                Cadastre um novo colaborador aqui
                <small>As informações serão utilizadas para cadastro em benefícios</small>
            </h2>
        </template>
        <div class="py-12">
            <div class="dropdown">
                <label tabindex="0" class="btn m-1">Curent User: {{$attrs.auth.user.name}}</label>
                <ul tabindex="0" class="dropdown-content menu p-2 bg-base-100 rounded-box w-56">
                    <li v-for="user in users" :key="user.id"  @click="changeUser">
                        <a :data-key="user.id">{{user.name}}</a>
                    </li>
                </ul>   
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
