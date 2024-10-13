<script setup>
// import { route } from '../../../vendor/tightenco/ziggy/src/js';
// import {Link,Head} from "@inertiajs/vue3"
</script>

<template>
    <!-- <Head>
        <title>Vue Inertia JS</title>
    </Head> -->
    <div class="">
        <header>
            <nav class="bg-blue-500 p-3 nav flex justify-start text-decoration-none gap-5 mx-auto ">

                <span style="width:30px;height:30px;border-radius:30px">
                    <!-- <img :src="'storage/'+$page.props.auth.avator" alt=""> -->
                </span>
                <Link :href="route('UserHome#index')">Home Page</Link>
                <Link :href="route('UserHome#about')">About Page</Link>


                <div class="" v-if="$page.props.user">
                    <Link class="ms-2" :href="route('Auth#logout')">Logout</Link>
                </div>
                <div class="" v-else>
                    <Link class="ms-2" :href="route('Auth#loginPage')">Login</Link>
                    <Link class="ms-2" :href="route('Auth#registerPage')">Register</Link>
                </div>

                    <Link class="ms-2" :href="route('UserHome#list')">User List</Link>
                <div class=" ms-2"><Link :href="route('Auth#test')">Test</Link></div>
            </nav>
            <main>
                <slot/>
            </main>
            <footer>

            </footer>
        </header>
    </div>
</template>
