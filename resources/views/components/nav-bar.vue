<template>
    <!-- <section class="bg-slate-700">
        <div class="wrapper flex justify-between">
            <div id="brand" class="text-lg text-white font-bold font-mono py-4">
               Midterm Project
            </div>
            <nav class="main-nav">
                <Link class="main-link font-mono" href="/">Home</Link>
                <Link v-if="user" class="main-link font-mono" href="/companies">Offices</Link>
                <Link v-if="user" class="main-link font-mono" href="/members">Members</Link>
            </nav>
            <div class="flex">
                <Link v-if="!user" class="font-mono py-4 text-purple-100 font-semibold hover:bg-[#1f0025] duration-300 px-2" href="/login">Log In</Link>
                <Link v-if="user" class="font-mono py-4 text-purple-100 font-semibold hover:bg-[#1f0025] duration-300 px-2" href="/logout" method="post" as="button">Log Out</Link>
            </div>
        </div>
    </section> -->


<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Midterm Project</span>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <Link href="/" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</Link>
          </li>
          <li>
            <Link v-if="user" href="/companies" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Companies</Link>
          </li>
          <li>
            <Link v-if="user" href="/members" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Members</Link>
          </li>
          <li>
            <Link v-if="!user" href="/login" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Log in</Link>
          </li>
          <li>
            <Link v-if="user" href="/logout" method="post" as="button" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Log out</Link>
          </li>
        </ul>
      </div>
    </div>
  </nav>


    </template>

    <script setup>
    import { Link } from '@inertiajs/inertia-vue3'
    import { defineProps } from 'vue'

    defineProps({
        user: ''
    })
    </script>
