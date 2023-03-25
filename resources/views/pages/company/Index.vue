<template layout="default">

    <div class="flex justify-end p-2">
        <Link href="/companies/create" class="btn-primary">Create Company</Link>
    </div>
    <div class="relative overflow-x-auto m-5 shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                    Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Net Worth
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700" v-for="company of companies" :key="company.id">

                    <td class="px-6 py-4">
                        {{ company.name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ company.type }}
                    </td>
                    <td class="px-6 py-4">
                        {{ company.address }}
                    </td>
                    <td class="px-6 py-4">
                        {{ company.net_worth }}
                    </td>
                    <td class="px-6 py-4">
                        <Link :href=" '/companies/edit/' + company.id " class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</Link>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>



</template>

<script setup>
import {Link, useForm} from '@inertiajs/inertia-vue3'

defineProps({
    'companies': Array
})

let form = useForm({
    name: '',
    type: '',
    address: '',
    net_worth: '',

})
</script>
