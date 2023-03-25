<template layout="default">
    <div class="w-[600px] shadow p-4 mx-auto mt-5 bg-gray-800">
        <form @submit.prevent="submit">
           <h5 class="text-xl font-medium text-gray-900 dark:text-white">Edit Member Detail</h5>
           <hr>
                <div class="w-full  px-3 mb-3 mt-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="last_name" >
                   Last Name
                    </label>
                    <input v-model="form.last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="last_name" type="text">
                    <div class="text-sm text-red-500 italic" v-if="form.errors.last_name">{{ form.errors.last_name }}</div>
                </div>

                <div class="w-full  px-3 mb-3 mt-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="first_name" >
                   First Name
                    </label>
                    <input v-model="form.first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="first_name" type="text">
                    <div class="text-sm text-red-500 italic" v-if="form.errors.first_name">{{ form.errors.first_name }}</div>
                </div>

                   <div class="w-full  px-3 mb-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="first_name" >
                        Designation
                         </label>
                       <input v-model="form.designation" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="designation" type="text">
                       <div class="text-sm text-red-500 italic" v-if="form.errors.designation">{{ form.errors.designation }}</div>
                   </div>

                   <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="company_id" >
                        Company
                    </label>
                    <select id="company_id" name="company_id"  v-model="form.company_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                        <option value="">Select a company</option>
                        <option v-for="company in companies" :value="company.id" :key="company.id">
                            {{ company.name }}
                        </option>
                    </select>
                    <div class="text-sm text-red-500 italic" v-if="form.errors.company_id">{{ form.errors.company_id }}</div>
                   </div>
            <div class="w-full px-3">
                <button class="btn-primary " type="submit">
                    Create Member
                </button>
            </div>
          </form>
    </div>
</template>
<script setup>
import {useForm} from '@inertiajs/inertia-vue3'


let props = defineProps({
    member: Object,
    companies: Array
})

let form = useForm({
    last_name: props.member.last_name,
    first_name:props.member.first_name,
    designation:props.member.designation,
    company_id:props.member.company_id,

})

function submit (){
    form.put('/members/' +props.member.id)
}
</script>
