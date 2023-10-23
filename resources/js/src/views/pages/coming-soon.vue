<template>
    <div class="flex min-h-screen items-center justify-center dark:bg-dark-dark-light">
        <div class="w-full lg:w-1/2 h-full">
            <div class="max-w-[480px] mx-auto p-5 md:p-10">
                <h4 class="text-primary text-2xl md:text-4xl font-bold mb-2">Coming Soon</h4>
                <p class="text-base font-bold mb-10 text-white-dark">We will be here in a shortwhile.....</p>
                <div class="flex space-x-4 rtl:space-x-reverse text-white font-semibold text-center mb-10 md:mb-20">
                    <div class="bg-primary rounded-md w-[95px] h-[95px] flex flex-col items-center justify-center">
                        <h1>{{ demo1.days }}</h1>
                        <span>Days</span>
                    </div>
                    <div class="bg-primary rounded-md w-[95px] h-[95px] flex flex-col items-center justify-center">
                        <h1>{{ demo1.hours }}</h1>
                        <span>Hours</span>
                    </div>
                    <div class="bg-primary rounded-md w-[95px] h-[95px] flex flex-col items-center justify-center">
                        <h1>{{ demo1.minutes }}</h1>
                        <span>Mins</span>
                    </div>
                    <div class="bg-primary rounded-md w-[95px] h-[95px] flex flex-col items-center justify-center">
                        <h1>{{ demo1.seconds }}</h1>
                        <span>Secs</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-10 text-center">Subscribe to get notified!</h3>
                <form class="mb-5" @submit.prevent="router.push('/')">
                    <div class="relative max-w-[580px] mx-auto">
                        <span class="absolute ltr:left-2 rtl:right-2 top-3 text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                <path
                                    d="M12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 12.7215 17.8726 13.4133 17.6392 14.054C17.5551 14.285 17.4075 14.4861 17.2268 14.6527L17.1463 14.727C16.591 15.2392 15.7573 15.3049 15.1288 14.8858C14.6735 14.5823 14.4 14.0713 14.4 13.5241V12M14.4 12C14.4 13.3255 13.3255 14.4 12 14.4C10.6745 14.4 9.6 13.3255 9.6 12C9.6 10.6745 10.6745 9.6 12 9.6C13.3255 9.6 14.4 10.6745 14.4 12Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    opacity="0.5"
                                    d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                            </svg>
                        </span>
                        <input type="email" placeholder="Email" class="form-input ltr:pl-9 rtl:pr-9 py-3 ltr:pr-[100px] rtl:pl-[100px]" />
                        <button type="submit" class="btn btn-primary absolute top-0 ltr:right-0 rtl:left-0 py-2.5 rounded-bl-3xl">Subscribe</button>
                    </div>
                </form>
                <ul class="flex justify-center mb-10 mx-auto text-primary">
                    <li class="ltr:pr-2 rtl:pl-2 ltr:mr-2 rtl:ml-2 ltr:border-r-2 rtl:border-l-2 border-[#ddd] dark:border-dark">
                        <a href="javascript:;">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24px"
                                height="24px"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-5 h-5"
                            >
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                    </li>
                    <li class="ltr:pr-2 rtl:pl-2 ltr:mr-2 rtl:ml-2 ltr:border-r-2 rtl:border-l-2 border-[#ddd] dark:border-dark">
                        <a href="javascript:;">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24px"
                                height="24px"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-5 h-5"
                            >
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="ltr:pr-2 rtl:pl-2 ltr:mr-2 rtl:ml-2 ltr:border-r-2 rtl:border-l-2 border-[#ddd] dark:border-dark">
                        <a href="javascript:;">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24px"
                                height="24px"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-5 h-5"
                            >
                                <path
                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"
                                ></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24px"
                                height="24px"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-5 h-5"
                            >
                                <path
                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"
                                ></path>
                            </svg>
                        </a>
                    </li>
                </ul>
                <p class="text-center">© 2022. <router-link to="/" class="router-link-active text-primary">VRISTO</router-link> All Rights Reserved.</p>
            </div>
        </div>
        <div class="bg-[#060818] w-1/2 min-h-screen hidden lg:flex items-center justify-center p-4">
            <img src="/assets/images/coming-soon.svg" alt="coming_soon" class="lg:max-w-[370px] xl:max-w-[500px] mx-auto" />
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref, onMounted } from 'vue';
    import { useRouter } from 'vue-router';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Coming Soon' });
    const router = useRouter();

    const timer1: any = ref(null);
    const demo1: any = ref({
        days: null,
        hours: null,
        minutes: null,
        seconds: null,
    });

    onMounted(() => {
        setTimerDemo1();
    });

    const setTimerDemo1 = () => {
        let date = new Date();
        date.setFullYear(date.getFullYear() + 1);
        let countDownDate = date.getTime();

        timer1.value = setInterval(() => {
            let now = new Date().getTime();

            let distance = countDownDate - now;

            demo1.value.days = Math.floor(distance / (1000 * 60 * 60 * 24));
            demo1.value.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            demo1.value.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            demo1.value.seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (distance < 0) {
                clearInterval(timer1.value);
            }
        }, 500);
    };
</script>
