<template>
    <div class="flex min-h-screen">
        <div
            class="bg-gradient-to-t from-[#ff1361bf] to-[#44107A] w-1/2 min-h-screen hidden lg:flex flex-col items-center justify-center text-white dark:text-black p-4"
        >
            <div class="w-full mx-auto mb-5">
                <img src="/assets/images/auth-cover.svg" alt="coming_soon" class="lg:max-w-[370px] xl:max-w-[500px] mx-auto" />
            </div>
            <h3 class="text-3xl font-bold mb-4 text-center">Join the community of expert developers</h3>
            <p>It is easy to setup with great customer experience. Start your 7-day free trial</p>
        </div>
        <div class="w-full lg:w-1/2 relative flex justify-center items-center">
            <div class="max-w-[480px] p-5 md:p-10 w-full">
                <h2 class="font-bold text-3xl mb-3">Password Reset</h2>
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
    </div>
</template>
<script lang="ts" setup>
    import { useRouter } from 'vue-router';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Reset Password Cover' });
    const router = useRouter();
</script>
