<template>
    <div
        class="flex justify-center items-center min-h-screen bg-[url('/assets/images/map.svg')] dark:bg-[url('/assets/images/map-dark.svg')] bg-cover bg-center"
    >
        <div class="panel sm:w-[480px] m-6 max-w-lg w-full">
            <div class="flex items-center mb-10">
                <div class="ltr:mr-4 rtl:ml-4">
                    <img src="/assets/images/profile-1.jpeg" class="w-16 h-16 object-cover rounded-full" alt="images" />
                </div>
                <div class="flex-1">
                    <h4 class="text-2xl">Shaun Park</h4>
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
</template>
<script lang="ts" setup>
    import { useRouter } from 'vue-router';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Lockscreen Boxed' });
    const router = useRouter();
</script>
