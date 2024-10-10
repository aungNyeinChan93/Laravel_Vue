<script setup>
// import { route } from '../../../vendor/tightenco/ziggy/src/js';
// import {Link,Head} from "@inertiajs/vue3"
</script>

<template>
    <!-- <Head>
        <title>Vue Inertia JS</title>
    </Head> -->
    <div>
        <header>
            <nav class="bg-blue-500 p-3 nav flex justify-start text-decoration-none gap-5 ">
                <Link :href="route('UserHome#index')">Home Page</Link>
                <Link :href="route('UserHome#about')">About Page</Link>
                <div class=" ms-2 "><Link :href="route('Auth#login')">Login</Link></div>
                <div class=" ms-2 "><Link :href="route('Auth#register')">Register</Link></div>
                <div class=" ms-2 "><Link :href="route('Auth#test')">Test</Link></div>
            </nav>
            <main>
                <slot/>
            </main>
            <footer>

            </footer>
        </header>
    </div>
</template>
