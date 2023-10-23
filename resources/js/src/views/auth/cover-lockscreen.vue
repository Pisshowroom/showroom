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
                <div class="flex items-center mb-10">
                    <div class="ltr:mr-4 rtl:ml-4">
                        <img src="/assets/images/profile-1.jpeg" class="w-16 h-16 object-cover rounded-full" alt="images" />
                    </div>
                    <div class="flex-1">
                        <h4 class="text-3xl">Shaun Park</h4>
                        <p>Enter your password to unlock your ID</p>
                    </div>
                </div>
                <form class="space-y-5" @submit.prevent="router.push('/')">
                    <div>
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-input" placeholder="Enter Password" />
                    </div>
                    <button type="submit" class="btn btn-primary w-full">UNLOCK</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { useRouter } from 'vue-router';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Lockscreen Cover' });
    const router = useRouter();
</script>
