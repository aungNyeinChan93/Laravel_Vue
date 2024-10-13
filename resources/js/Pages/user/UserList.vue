<script setup>
defineProps({
    users: Object,
});
</script>

<template>
    <section>
        <table border="1" class="p-4 mx-auto">
            <thead class="bg-red-300">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.created_at }}</td>
                </tr>
            </tbody>
        </table>

        <div class="my-10 p-3 text-center ">
            <Link class="px-2 my-1 text-red-400 " :href="link.url" v-for="link in users.links" :key="link.label" v-html="link.label"></Link>
            <div> Showing {{ users.from }} to {{ users.to }}  of {{ users.total }} result... || Showing {{ users.per_page }} pages</div>
        </div>

        <!-- <ul>
            <li v-for="user in users" :key="user.id">{{ user.name }}</li>
        </ul> -->

        <!-- <tr v-for="user in $page.props[0]" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.created_at }}</td>
               </tr> -->

               <!-- {{ $page.props[1] }}  by attr  -->

                <!-- for paginate -->
               <!-- <ul>
                <li v-for="user in users.data" :key="user">{{ user.name }}</li>
               </ul> -->


    </section>
</template>
