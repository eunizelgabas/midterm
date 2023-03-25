<template layout="default">
     <div class="w-[600px] shadow p-4 mx-auto mt-5 bg-gray-800">
         <form @submit.prevent="submit">
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">Create New Company</h5>
            <hr>
                 <div class="w-full  px-3 mb-3 mt-3">
                     <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="name" >
                    Name
                     </label>
                     <input v-model="form.name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" type="text">
                     <div class="text-sm text-red-500 italic" v-if="form.errors.name">{{ form.errors.name }}</div>
                 </div>

                    <div class="w-full  px-3 mb-3">
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="type">
                            Type
                        </label>
                        <input v-model="form.type" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="type" type="text">
                        <div class="text-sm text-red-500 italic" v-if="form.errors.type">{{ form.errors.type }}</div>
                    </div>

                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="address">
                        Address
                        </label>
                        <input v-model="form.address"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="address" type="text">
                        <div class="text-sm text-red-500 italic" v-if="form.errors.address">{{ form.errors.address }}</div>
                    </div>

                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="net_worth">
                    Net Worth
                    </label>
                    <input v-model="form.net_worth" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="net_worth" type="number">
                    <div class="text-sm text-red-500 italic" v-if="form.errors.net_worth">{{ form.errors.net_worth }}</div>
                </div>
             <div class="w-full px-3">
                 <button class="btn-primary " type="submit">
                     Create Company
                 </button>
             </div>
           </form>
     </div>
 </template>
 <script setup>
 import {useForm} from '@inertiajs/inertia-vue3'

 let form = useForm({
     name: '',
     type:'',
     address:'',
     net_worth:'',

 })

 const submit = () =>{
     form.post('/companies')
 }
 </script>
