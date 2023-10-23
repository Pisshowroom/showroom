<template>
    <div class="flex justify-center items-center min-h-screen bg-gradient-to-t from-[#c39be3] to-[#f2eafa]">
        <div class="text-center p-5">
            <h2 class="text-3xl md:text-5xl mb-10 font-bold">Under Maintenance</h2>
            <h4 class="mb-5 font-semibold text-xl sm:text-2xl text-primary">Thank you for visiting us.</h4>
            <p class="text-base">
                We are currently working on making some improvements <br class="sm:block hidden" />to give you better user experience. <br />
                <br />Please visit us again shortly.
            </p>
            <router-link to="/" class="btn btn-primary mt-5 w-max mx-auto">Home</router-link>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Maintenence' });
</script>
