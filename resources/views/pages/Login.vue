<template layout="default">
    <!-- <div class="w-full max-w-xs mx-auto mt-6">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" @submit.prevent="submit">
          <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Username
                </label>
                <input  v-model="form.email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="name@email.com">
                <div class="text-sm text-red-500 italic" v-if="form.errors.email">{{ form.errors.email }}</div>
            </div>
          <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
                </label>
                <input v-model="form.password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                <div class="text-sm text-red-500 italic" v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>
          <div class="flex items-center justify-between">
                <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Log In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-purple-500 hover:text-purple-800" href="#">
                Forgot Password?
                </a>
          </div>
          <div class="text-sm text-red-500 italic" v-if="form.errors.authentication">{{ form.errors.authentication }}</div>
        </form>
      </div> -->


<div class="w-full max-w-sm p-4 mx-auto bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form class="space-y-6" @submit.prevent="submit">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our account</h5>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input v-model="form.email" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
            <div class="text-sm text-red-500 italic" v-if="form.errors.email">{{ form.errors.email }}</div>
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
            <input  v-model="form.password" type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            <div class="text-sm text-red-500 italic" v-if="form.errors.password">{{ form.errors.password }}</div>
        </div>
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>

    </form>
</div>

</template>

<script setup>
import {useForm} from '@inertiajs/inertia-vue3'

let form = useForm({
    'email': '',
    'password': ''
})

let submit = () => {
    form.post('/login')
}

</script>

