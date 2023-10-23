<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Components</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Countdown</span>
            </li>
        </ul>
        <div class="pt-5 grid grid-cols-1 xl:grid-cols-2 gap-6">
            <!-- Simple Countdown -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Simple Countdown</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code1')">
                        <span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Code
                        </span>
                    </a>
                </div>
                <div class="mb-5 grid grid-cols-4 justify-items-center gap-3">
                    <div>
                        <div
                            class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"
                        >
                            <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo1.days }}</h1>
                        </div>
                        <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Days</h4>
                    </div>
                    <div>
                        <div
                            class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"
                        >
                            <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo1.hours }}</h1>
                        </div>
                        <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Hours</h4>
                    </div>
                    <div>
                        <div
                            class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"
                        >
                            <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo1.minutes }}</h1>
                        </div>
                        <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Mins</h4>
                    </div>
                    <div>
                        <div
                            class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"
                        >
                            <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo1.seconds }}</h1>
                        </div>
                        <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Sec</h4>
                    </div>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- simple countdown --&gt;
&lt;div class=&quot;mb-5 grid grid-cols-4 justify-items-center gap-3&quot;&gt;
  &lt;div&gt;
    &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
      &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot;&gt;&#123;&#123; demo1.days &#125;&#125;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Days&lt;/h4&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
      &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot;&gt;&#123;&#123; demo1.hours &#125;&#125;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Hours&lt;/h4&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
      &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot;&gt;&#123;&#123; demo1.minutes &#125;&#125;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Mins&lt;/h4&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
      &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot;&gt;&#123;&#123; demo1.seconds &#125;&#125;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Sec&lt;/h4&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref, onMounted } from 'vue';
const timer1: any = ref(null);
const demo1: any = ref({
  days: null,
  hours: null,
  minutes: null,
  seconds: null,
});

onMounted(() =&gt; {
  setTimerDemo1();
});

const setTimerDemo1 = () =&gt; {
  let date = new Date();
  date.setDate(date.getDate() + 3);
  let countDownDate = date.getTime();

  timer1.value = setInterval(() =&gt; {
    let now = new Date().getTime();

    let distance = countDownDate - now;

    demo1.value.days = Math.floor(distance / (1000 * 60 * 60 * 24));
    demo1.value.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    demo1.value.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    demo1.value.seconds = Math.floor((distance % (1000 * 60)) / 1000);

    if (distance &lt; 0) {
      clearInterval(timer1.value);
    }
  }, 500);
};
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Circle Countdown -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Circle Countdown</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code2')">
                        <span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Code
                        </span>
                    </a>
                </div>
                <div class="mb-5 grid grid-cols-4 justify-items-center gap-3">
                    <div>
                        <div
                            class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"
                        >
                            <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo2.days }}</h1>
                        </div>
                        <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Days</h4>
                    </div>
                    <div>
                        <div
                            class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"
                        >
                            <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo2.hours }}</h1>
                        </div>
                        <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Hours</h4>
                    </div>
                    <div>
                        <div
                            class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"
                        >
                            <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo2.minutes }}</h1>
                        </div>
                        <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Mins</h4>
                    </div>
                    <div>
                        <div
                            class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"
                        >
                            <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo2.seconds }}</h1>
                        </div>
                        <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Sec</h4>
                    </div>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- circle countdown --&gt;
&lt;div class=&quot;mb-5 grid grid-cols-4 justify-items-center gap-3&quot;&gt;
  &lt;div&gt;
    &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
      &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot;&gt;&#123;&#123; demo2.days &#125;&#125;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Days&lt;/h4&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
      &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot;&gt;&#123;&#123; demo2.hours &#125;&#125;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Hours&lt;/h4&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
      &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot;&gt;&#123;&#123; demo2.minutes &#125;&#125;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Mins&lt;/h4&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
      &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot;&gt;&#123;&#123; demo2.seconds &#125;&#125;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Sec&lt;/h4&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref, onMounted } from 'vue';
const timer2: any = ref(null);
const demo2: any = ref({
  days: null,
  hours: null,
  minutes: null,
  seconds: null,
});

onMounted(() =&gt; {
  setTimerDemo2();
});

const setTimerDemo2 = () =&gt; {
  let date = new Date();
  date.setFullYear(date.getFullYear() + 1);
  let countDownDate = date.getTime();

  timer2.value = setInterval(() =&gt; {
    let now = new Date().getTime();

    let distance = countDownDate - now;

    demo2.value.days = Math.floor(distance / (1000 * 60 * 60 * 24));
    demo2.value.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    demo2.value.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    demo2.value.seconds = Math.floor((distance % (1000 * 60)) / 1000);

    if (distance &lt; 0) {
      clearInterval(timer2.value);
    }
  }, 500);
};
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref, onMounted } from 'vue';
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Countdown' });

    const { codeArr, toggleCode } = codePreview();

    const timer1: any = ref(null);
    const demo1: any = ref({
        days: null,
        hours: null,
        minutes: null,
        seconds: null,
    });
    const timer2: any = ref(null);
    const demo2: any = ref({
        days: null,
        hours: null,
        minutes: null,
        seconds: null,
    });

    onMounted(() => {
        setTimerDemo1();
        setTimerDemo2();
    });

    const setTimerDemo1 = () => {
        let date = new Date();
        date.setDate(date.getDate() + 3);
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

    const setTimerDemo2 = () => {
        let date = new Date();
        date.setFullYear(date.getFullYear() + 1);
        let countDownDate = date.getTime();

        timer2.value = setInterval(() => {
            let now = new Date().getTime();

            let distance = countDownDate - now;

            demo2.value.days = Math.floor(distance / (1000 * 60 * 60 * 24));
            demo2.value.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            demo2.value.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            demo2.value.seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (distance < 0) {
                clearInterval(timer2.value);
            }
        }, 500);
    };
</script>
