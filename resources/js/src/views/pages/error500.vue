<template>
    <div class="flex justify-center items-center min-h-screen bg-gradient-to-t from-[#c39be3] to-[#f2eafa]">
        <div class="text-center p-5 font-semibold">
            <h2 class="text-[50px] md:text-[80px] leading-none mb-8 font-bold">Error 500</h2>
            <h4 class="mb-5 font-semibold text-xl sm:text-5xl text-primary">Ooops!</h4>
            <p class="text-base">Internal Server Error!</p>
            <router-link to="/" class="btn btn-primary mt-10 w-max mx-auto">Home</router-link>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Error 500' });
</script>
