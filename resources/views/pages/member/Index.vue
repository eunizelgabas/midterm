<template layout="default">
    <div class="flex justify-end p-2">
        <Link href="/members/create" class="btn-primary">Create Member</Link>
    </div>
    <div class="relative overflow-x-auto m-5 shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Fullname
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Designation
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Company
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700" v-for="member of members" :key="member.id">

                    <td class="px-6 py-4">
                        {{ member.first_name }} {{ member.last_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ member.designation }}
                    </td>
                    <td class="px-6 py-4">
                        {{ member.company.name }}
                    </td>
                    <td class="px-6 py-4">
                        <Link :href=" '/members/edit/' + member.id " class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</Link>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</template>

<script setup>
import {Link, useForm} from '@inertiajs/inertia-vue3'

 defineProps({
     members: Array
 })
 </script>
