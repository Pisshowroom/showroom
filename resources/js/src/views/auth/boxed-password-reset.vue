<template>
    <div
        class="flex justify-center items-center min-h-screen bg-[url('/assets/images/map.svg')] dark:bg-[url('/assets/images/map-dark.svg')] bg-cover bg-center"
    >
        <div class="panel sm:w-[480px] m-6 max-w-lg w-full">
            <h2 class="font-bold text-2xl mb-3">Password Reset</h2>
            <p class="mb-7">Enter your email to recover your ID</p>
            <form class="space-y-5" @submit.prevent="router.push('/')">
                <div>
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-input" placeholder="Enter Email" />
                </div>
                <button type="submit" class="btn btn-primary w-full">RECOVER</button>
            </form>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { useRouter } from 'vue-router';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Reset Password Boxed' });
    const router = useRouter();
</script>
