<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Components</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Carousel</span>
            </li>
        </ul>
        <div class="pt-5 space-y-8">
            <div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap">
                <div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5">
                        <path
                            d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                        />
                        <path
                            opacity="0.5"
                            d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        />
                    </svg>
                </div>
                <span class="ltr:mr-3 rtl:ml-3">Documentation: </span
                ><a href="https://www.npmjs.com/package/swiper" target="_blank" class="block hover:underline">https://www.npmjs.com/package/swiper</a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- basic -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Basic</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code1')"
                        >
                            <span class="flex items-center">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
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
                    <swiper
                        :modules="[Navigation, Pagination]"
                        :navigation="{ nextEl: '.swiper-button-next-ex1', prevEl: '.swiper-button-prev-ex1' }"
                        :pagination="{ clickable: true }"
                        class="max-w-3xl mx-auto mb-5"
                        id="slider1"
                        :dir="store.rtlClass"
                        :key="store.rtlClass === 'rtl' ? 'true' : 'false'"
                    >
                        <template v-for="(item, i) in items" :key="i">
                            <swiper-slide>
                                <img :src="`/assets/images/${item}`" class="w-full max-h-80 object-cover" alt="" />
                            </swiper-slide>
                        </template>
                        <a
                            href="javascript:;"
                            class="swiper-button-prev-ex1 grid place-content-center ltr:left-2 rtl:right-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"
                        >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:rotate-180">
                                <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a
                            href="javascript:;"
                            class="swiper-button-next-ex1 grid place-content-center ltr:right-2 rtl:left-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"
                        >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:rotate-180">
                                <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </swiper>
                    <template v-if="codeArr.includes('code1')">
                        <highlight>
                            <pre>
&lt;!-- basic --&gt;
&lt;swiper
  :modules=&quot;[Navigation, Pagination]&quot;
  :navigation=&quot;{ nextEl: '.swiper-button-next-ex1', prevEl: '.swiper-button-prev-ex1' }&quot;
  :pagination=&quot;{ clickable: true }&quot;
  class=&quot;max-w-3xl mx-auto mb-5&quot;
  id=&quot;slider1&quot;
&gt;
  &lt;template v-for=&quot;(item, i) in items&quot; :key=&quot;i&quot;&gt;
    &lt;swiper-slide&gt;
      &lt;img :src=&quot;`/assets/images/${item}`&quot; class=&quot;w-full max-h-80 object-cover&quot; alt=&quot;&quot; /&gt;
    &lt;/swiper-slide&gt;
  &lt;/template&gt;
  &lt;a
    href=&quot;javascript:;&quot;
    class=&quot;
      swiper-button-prev-ex1
      grid
      place-content-center
      ltr:left-2
      rtl:right-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-1/2
      -translate-y-1/2
    &quot;
  &gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/a&gt;
  &lt;a
    href=&quot;javascript:;&quot;
    class=&quot;
      swiper-button-next-ex1
      grid
      place-content-center
      ltr:right-2
      rtl:left-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-1/2
      -translate-y-1/2
    &quot;
  &gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/a&gt;
&lt;/swiper&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
const items = ref(['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg']);
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- autopaly -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Autopaly</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code2')"
                        >
                            <span class="flex items-center">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
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
                    <swiper
                        :modules="[Navigation, Autoplay]"
                        :navigation="{ nextEl: '.swiper-button-next-ex2', prevEl: '.swiper-button-prev-ex2' }"
                        :autoplay="{ delay: 2000 }"
                        class="max-w-3xl mx-auto mb-5"
                        id="slider2"
                        :dir="store.rtlClass"
                        :key="store.rtlClass === 'rtl' ? 'true' : 'false'"
                    >
                        <template v-for="(item, i) in items" :key="i">
                            <swiper-slide>
                                <img :src="`/assets/images/${item}`" class="w-full max-h-80 object-cover" alt="" />
                                <div class="absolute z-[999] text-white top-1/4 ltr:left-12 rtl:right-12">
                                    <div class="sm:text-3xl text-base font-bold">This is blog Image</div>
                                    <div class="sm:mt-5 mt-1 w-4/5 text-base sm:block hidden font-medium">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </div>
                                    <button type="button" class="mt-4 btn btn-primary">Learn more</button>
                                </div>
                            </swiper-slide>
                        </template>
                        <a
                            href="javascript:;"
                            class="swiper-button-prev-ex2 grid place-content-center ltr:left-2 rtl:right-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"
                        >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:rotate-180">
                                <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a
                            href="javascript:;"
                            class="swiper-button-next-ex2 grid place-content-center ltr:right-2 rtl:left-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"
                        >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:rotate-180">
                                <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </swiper>

                    <template v-if="codeArr.includes('code2')">
                        <highlight>
                            <pre>
&lt;!-- autopaly --&gt;
&lt;swiper
  :modules=&quot;[Navigation, Autoplay]&quot;
  :navigation=&quot;{ nextEl: '.swiper-button-next-ex2', prevEl: '.swiper-button-prev-ex2' }&quot;
  :autoplay=&quot;{ delay: 2000 }&quot;
  class=&quot;max-w-3xl mx-auto mb-5&quot;
  id=&quot;slider2&quot;
&gt;
  &lt;template v-for=&quot;(item, i) in items&quot; :key=&quot;i&quot;&gt;
    &lt;swiper-slide&gt;
      &lt;img :src=&quot;`/assets/images/${item}`&quot; class=&quot;w-full max-h-80 object-cover&quot; alt=&quot;&quot; /&gt;
      &lt;div class=&quot;absolute z-[999] text-white top-1/4 ltr:left-12 rtl:right-12&quot;&gt;
        &lt;div class=&quot;sm:text-3xl text-base font-bold&quot;&gt;This is blog Image&lt;/div&gt;
        &lt;div class=&quot;sm:mt-5 mt-1 w-4/5 text-base sm:block hidden font-medium&quot;&gt;
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
        &lt;/div&gt;
        &lt;button type=&quot;button&quot; class=&quot;mt-4 btn btn-primary&quot;&gt;Learn more&lt;/button&gt;
      &lt;/div&gt;
    &lt;/swiper-slide&gt;
  &lt;/template&gt;
  &lt;a
    href=&quot;javascript:;&quot;
    class=&quot;
      swiper-button-prev-ex2
      grid
      place-content-center
      ltr:left-2
      rtl:right-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-1/2
      -translate-y-1/2
    &quot;
  &gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/a&gt;
  &lt;a
    href=&quot;javascript:;&quot;
    class=&quot;
      swiper-button-next-ex2
      grid
      place-content-center
      ltr:right-2
      rtl:left-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-1/2
      -translate-y-1/2
    &quot;
  &gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/a&gt;
&lt;/swiper&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
const items = ref(['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg']);
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- vertical -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Vertical</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code3')"
                        >
                            <span class="flex items-center">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
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
                    <swiper
                        :modules="[Pagination, Autoplay]"
                        :direction="'vertical'"
                        :pagination="{ clickable: true }"
                        :autoplay="{ delay: 2000 }"
                        class="max-w-3xl mx-auto mb-5"
                        id="slider3"
                    >
                        <template v-for="(item, i) in items" :key="i">
                            <swiper-slide>
                                <img :src="`/assets/images/${item}`" class="w-full" alt="" />
                                <div class="absolute z-[999] text-white top-1/2 left-1/2 w-full -translate-x-1/2 text-center">
                                    <div class="sm:text-xl text-base font-medium">Lorem Ipsum is simply dummy text of the printing.</div>
                                </div>
                            </swiper-slide>
                        </template>
                    </swiper>

                    <template v-if="codeArr.includes('code3')">
                        <highlight>
                            <pre>
&lt;!-- vertical --&gt;
&lt;swiper :modules=&quot;[Pagination, Autoplay]&quot; :direction=&quot;'vertical'&quot; :pagination=&quot;{ clickable: true }&quot; :autoplay=&quot;{ delay: 2000 }&quot; class=&quot;max-w-3xl mx-auto mb-5&quot; id=&quot;slider3&quot;&gt;
  &lt;template v-for=&quot;(item, i) in items&quot; :key=&quot;i&quot;&gt;
    &lt;swiper-slide&gt;
      &lt;img :src=&quot;`/assets/images/${item}`&quot; class=&quot;w-full&quot; alt=&quot;&quot; /&gt;
      &lt;div class=&quot;absolute z-[999] text-white top-1/2 left-1/2 w-full -translate-x-1/2 text-center&quot;&gt;
        &lt;div class=&quot;sm:text-xl text-base font-medium&quot;&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/div&gt;
      &lt;/div&gt;
    &lt;/swiper-slide&gt;
  &lt;/template&gt;
&lt;/swiper&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
const items = ref(['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg']);
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Loop -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Loop</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code4')"
                        >
                            <span class="flex items-center">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
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
                    <swiper
                        :modules="[Navigation, Pagination]"
                        slidesPerView="auto"
                        :spaceBetween="30"
                        :loop="true"
                        :navigation="{ nextEl: '.swiper-button-next-ex4', prevEl: '.swiper-button-prev-ex4' }"
                        :pagination="{ clickable: true, type: 'fraction' }"
                        class="max-w-3xl mx-auto mb-5"
                        id="slider4"
                        :dir="store.rtlClass"
                        :key="store.rtlClass === 'rtl' ? 'true' : 'false'"
                    >
                        <swiper-slide>
                            <img src="/assets/images/carousel1.jpeg" class="w-full" alt="" />
                            <div class="absolute z-[999] text-white bottom-8 left-1/2 w-full -translate-x-1/2 text-center sm:px-0 px-11">
                                <div class="text-3xl font-bold">Slide 1</div>
                                <div class="mb-4 sm:text-base font-medium">Lorem Ipsum is simply dummy text of the printing.</div>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <img src="/assets/images/carousel2.jpeg" class="w-full" alt="" />
                            <div class="absolute z-[999] text-white bottom-8 left-1/2 w-full -translate-x-1/2 text-center sm:px-0 px-11">
                                <div class="text-3xl font-bold">Slide 2</div>
                                <div class="mb-4 sm:text-base font-medium">Lorem Ipsum is simply dummy text of the printing.</div>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <img src="/assets/images/carousel3.jpeg" class="w-full" alt="" />
                            <div class="absolute z-[999] text-white bottom-8 left-1/2 w-full -translate-x-1/2 text-center sm:px-0 px-11">
                                <div class="text-3xl font-bold">Slide 3</div>
                                <div class="mb-4 sm:text-base font-medium">Lorem Ipsum is simply dummy text of the printing.</div>
                            </div>
                        </swiper-slide>
                        <a
                            href="javascript:;"
                            class="swiper-button-prev-ex4 grid place-content-center ltr:left-2 rtl:right-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"
                        >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:rotate-180">
                                <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a
                            href="javascript:;"
                            class="swiper-button-next-ex4 grid place-content-center ltr:right-2 rtl:left-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"
                        >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:rotate-180">
                                <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </swiper>

                    <template v-if="codeArr.includes('code4')">
                        <highlight>
                            <pre>
&lt;!-- loop --&gt;
&lt;swiper
  :modules=&quot;[Navigation, Pagination]&quot;
  slidesPerView=&quot;auto&quot;
  :spaceBetween=&quot;30&quot;
  :loop=&quot;true&quot;
  :navigation=&quot;{ nextEl: '.swiper-button-next-ex4', prevEl: '.swiper-button-prev-ex4' }&quot;
  :pagination=&quot;{ clickable: true, type: 'fraction' }&quot;
  class=&quot;max-w-3xl mx-auto mb-5&quot;
  id=&quot;slider4&quot;
&gt;
  &lt;swiper-slide&gt;
    &lt;img src=&quot;/assets/images/carousel1.jpeg&quot; class=&quot;w-full&quot; alt=&quot;&quot; /&gt;
    &lt;div class=&quot;absolute z-[999] text-white bottom-8 left-1/2 w-full -translate-x-1/2 text-center sm:px-0 px-11&quot;&gt;
      &lt;div class=&quot;text-3xl font-bold&quot;&gt;Slide 1&lt;/div&gt;
      &lt;div class=&quot;mb-4 sm:text-base font-medium&quot;&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/swiper-slide&gt;
  &lt;swiper-slide&gt;
    &lt;img src=&quot;/assets/images/carousel2.jpeg&quot; class=&quot;w-full&quot; alt=&quot;&quot; /&gt;
    &lt;div class=&quot;absolute z-[999] text-white bottom-8 left-1/2 w-full -translate-x-1/2 text-center sm:px-0 px-11&quot;&gt;
      &lt;div class=&quot;text-3xl font-bold&quot;&gt;Slide 2&lt;/div&gt;
      &lt;div class=&quot;mb-4 sm:text-base font-medium&quot;&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/swiper-slide&gt;
  &lt;swiper-slide&gt;
    &lt;img src=&quot;/assets/images/carousel3.jpeg&quot; class=&quot;w-full&quot; alt=&quot;&quot; /&gt;
    &lt;div class=&quot;absolute z-[999] text-white bottom-8 left-1/2 w-full -translate-x-1/2 text-center sm:px-0 px-11&quot;&gt;
      &lt;div class=&quot;text-3xl font-bold&quot;&gt;Slide 3&lt;/div&gt;
      &lt;div class=&quot;mb-4 sm:text-base font-medium&quot;&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/swiper-slide&gt;
  &lt;a
    href=&quot;javascript:;&quot;
    class=&quot;
      swiper-button-prev-ex4
      grid
      place-content-center
      ltr:left-2
      rtl:right-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-1/2
      -translate-y-1/2
    &quot;
  &gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/a&gt;
  &lt;a
    href=&quot;javascript:;&quot;
    class=&quot;
      swiper-button-next-ex4
      grid
      place-content-center
      ltr:right-2
      rtl:left-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-1/2
      -translate-y-1/2
    &quot;
  &gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/a&gt;
&lt;/swiper&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
const items = ref(['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg']);
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Multiple -->
                <div class="panel lg:col-span-2">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Multiple Slides</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code5')"
                        >
                            <span class="flex items-center">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
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
                    <swiper
                        :modules="[Navigation, Pagination]"
                        :navigation="{ nextEl: '.swiper-button-next-ex5', prevEl: '.swiper-button-prev-ex5' }"
                        :pagination="{ clickable: true }"
                        :breakpoints="{
                            1024: { slidesPerView: 3, spaceBetween: 30 },
                            768: { slidesPerView: 2, spaceBetween: 40 },
                            320: { slidesPerView: 1, spaceBetween: 20 },
                        }"
                        id="slider5"
                        :dir="store.rtlClass"
                        :key="store.rtlClass === 'rtl' ? 'true' : 'false'"
                    >
                        <template v-for="(item, i) in items" :key="i">
                            <swiper-slide>
                                <img :src="`/assets/images/${item}`" class="w-full" alt="" />
                            </swiper-slide>
                        </template>
                        <template v-for="(item, i) in items" :key="i">
                            <swiper-slide>
                                <img :src="`/assets/images/${item}`" class="w-full" alt="" />
                            </swiper-slide>
                        </template>
                        <a
                            href="javascript:;"
                            class="swiper-button-prev-ex5 grid place-content-center ltr:left-2 rtl:right-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-[44%] -translate-y-1/2"
                        >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:rotate-180">
                                <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a
                            href="javascript:;"
                            class="swiper-button-next-ex5 grid place-content-center ltr:right-2 rtl:left-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-[44%] -translate-y-1/2"
                        >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:rotate-180">
                                <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </swiper>
                    <template v-if="codeArr.includes('code5')">
                        <highlight>
                            <pre>
&lt;!-- multiple --&gt;
&lt;swiper
  :modules=&quot;[Navigation, Pagination]&quot;
  :navigation=&quot;{ nextEl: '.swiper-button-next-ex5', prevEl: '.swiper-button-prev-ex5' }&quot;
  :pagination=&quot;{ clickable: true }&quot;
  :breakpoints=&quot;{ 1024: { slidesPerView: 3, spaceBetween: 30 }, 768: { slidesPerView: 2, spaceBetween: 40 }, 320: { slidesPerView: 1, spaceBetween: 20 } }&quot;
  id=&quot;slider5&quot;
&gt;
  &lt;template v-for=&quot;(item, i) in items&quot; :key=&quot;i&quot;&gt;
    &lt;swiper-slide&gt;
      &lt;img :src=&quot;`/assets/images/${item}`&quot; class=&quot;w-full&quot; alt=&quot;&quot; /&gt;
    &lt;/swiper-slide&gt;
  &lt;/template&gt;
  &lt;template v-for=&quot;(item, i) in items&quot; :key=&quot;i&quot;&gt;
    &lt;swiper-slide&gt;
      &lt;img :src=&quot;`/assets/images/${item}`&quot; class=&quot;w-full&quot; alt=&quot;&quot; /&gt;
    &lt;/swiper-slide&gt;
  &lt;/template&gt;
  &lt;a
    href=&quot;javascript:;&quot;
    class=&quot;
      swiper-button-prev-ex5
      grid
      place-content-center
      ltr:left-2
      rtl:right-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-[44%]
      -translate-y-1/2
    &quot;
  &gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/a&gt;
  &lt;a
    href=&quot;javascript:;&quot;
    class=&quot;
      swiper-button-next-ex5
      grid
      place-content-center
      ltr:right-2
      rtl:left-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-[44%]
      -translate-y-1/2
    &quot;
  &gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/a&gt;
&lt;/swiper&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
const items = ref(['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg']);
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref } from 'vue';
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import { Swiper, SwiperSlide } from 'swiper/vue';
    import { Navigation, Pagination, Autoplay } from 'swiper';
    import 'swiper/css';
    import 'swiper/css/navigation';
    import 'swiper/css/pagination';
    import { useMeta } from '@/composables/use-meta';
    import { useAppStore } from '@/stores/index';
    const store = useAppStore();
    useMeta({ title: 'Carousel' });

    const { codeArr, toggleCode } = codePreview();
    const items = ref(['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg']);
</script>
