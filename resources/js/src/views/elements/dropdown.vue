<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Elements</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Dropdowns</span>
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
                <span class="ltr:mr-3 rtl:ml-3">Documentation: </span>
                <a href="https://www.npmjs.com/package/vue3-popper" target="_blank" class="block hover:underline">https://www.npmjs.com/package/vue3-popper</a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Basic</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code1')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex flex-wrap w-full justify-around gap-7">
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                    <button type="button" class="btn btn-primary dropdown-toggle">
                                        Action
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"
                                        >
                                            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                    <button type="button" class="btn btn-outline-primary dropdown-toggle">
                                        Action
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"
                                        >
                                            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code1')">
                        <highlight>
                            <pre>
&lt;!-- default --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot;&gt;
      Action
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- outline --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary dropdown-toggle&quot;&gt;
      Action
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { useAppStore } from '@/stores/index';
const store = useAppStore();
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Dropup</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code2')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex flex-wrap w-full justify-around gap-7">
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'top-start' : 'top-end'" offsetDistance="0" class="align-middle">
                                    <button type="button" class="btn btn-info dropdown-toggle inline-flex">
                                        Up
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block rotate-180"
                                        >
                                            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'top-start' : 'top-end'" offsetDistance="0" class="align-middle">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle inline-flex">
                                        Up
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block rotate-180"
                                        >
                                            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code2')">
                        <highlight>
                            <pre>
&lt;!-- default --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'top-start' : 'top-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle inline-flex&quot;&gt;
      Up
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- outline --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'top-start' : 'top-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info dropdown-toggle inline-flex&quot;&gt;
      Up
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;


&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { useAppStore } from '@/stores/index';
const store = useAppStore();
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Dropright</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code3')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex flex-wrap w-full justify-around gap-7">
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'left-start' : 'right-start'" offsetDistance="0" class="align-middle">
                                    <button type="button" class="btn btn-warning dropdown-toggle">
                                        Right
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180 inline-block"
                                        >
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap !my-0 ltr:ml-1 rtl:mr-1">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'left-start' : 'right-start'" offsetDistance="0" class="align-middle">
                                    <button type="button" class="btn btn btn-outline-warning dropdown-toggle">
                                        Right
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180 inline-block"
                                        >
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap !my-0 ltr:ml-1 rtl:mr-1">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code3')">
                        <highlight>
                            <pre>
&lt;!-- default --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'left-start' : 'right-start'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle&quot;&gt;
      Right
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap !my-0 ltr:ml-1 rtl:mr-1&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- outline --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'left-start' : 'right-start'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn btn-outline-warning dropdown-toggle&quot;&gt;
      Right
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap !my-0 ltr:ml-1 rtl:mr-1&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { useAppStore } from '@/stores/index';
const store = useAppStore();
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Dropleft</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code4')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex flex-wrap w-full justify-around gap-7">
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'right-start' : 'left-start'" offsetDistance="0" class="align-middle">
                                    <button type="button" class="btn btn-danger dropdown-toggle">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:mr-1 rtl:ml-1 ltr:rotate-180 inline-block"
                                        >
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Left
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap !my-0 ltr:mr-1 rtl:ml-1">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'right-start' : 'left-start'" offsetDistance="0" class="align-middle">
                                    <button type="button" class="btn btn-outline-danger dropdown-toggle">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:mr-1 rtl:ml-1 ltr:rotate-180 inline-block"
                                        >
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Left
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap !my-0 ltr:mr-1 rtl:ml-1">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code4')">
                        <highlight>
                            <pre>
&lt;!-- default --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'right-start' : 'left-start'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot;&gt;
      &lt;svg&gt; ... &lt;/svg&gt;
      Left
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap !my-0 ltr:mr-1 rtl:ml-1&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- outline --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'right-start' : 'left-start'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger dropdown-toggle&quot;&gt;
      &lt;svg&gt; ... &lt;/svg&gt;
      Left
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap !my-0 ltr:mr-1 rtl:ml-1&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { useAppStore } from '@/stores/index';
const store = useAppStore();
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Small Button</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code5')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex flex-wrap w-full justify-around gap-7">
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                    <button type="button" class="btn btn-dark btn-sm dropdown-toggle">
                                        Small Button
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"
                                        >
                                            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                    <button type="button" class="btn btn-outline-dark btn-sm dropdown-toggle">
                                        Small Button
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"
                                        >
                                            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code5')">
                        <highlight>
                            <pre>
&lt;!-- default --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-dark btn-sm dropdown-toggle&quot;&gt;
      Small Button
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- outline --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark btn-sm dropdown-toggle&quot;&gt;
      Small Button
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { useAppStore } from '@/stores/index';
const store = useAppStore();
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Large Button</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code6')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex flex-wrap w-full justify-around gap-7">
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                    <button type="button" class="btn btn-success btn-lg dropdown-toggle">
                                        Large Button
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"
                                        >
                                            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                    <button type="button" class="btn btn-outline-success btn-lg dropdown-toggle">
                                        Large Button
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"
                                        >
                                            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code6')">
                        <highlight>
                            <pre>
&lt;!-- default --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-success btn-lg dropdown-toggle&quot;&gt;
      Large Button
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- outline --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success btn-lg dropdown-toggle&quot;&gt;
      Large Button
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { useAppStore } from '@/stores/index';
const store = useAppStore();
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Grouped Dropdown Buttons</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code7')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex flex-wrap w-full justify-around gap-7">
                            <div class="relative inline-flex align-middle">
                                <button type="button" class="btn btn-secondary ltr:rounded-r-none rtl:rounded-l-none">1</button>
                                <button type="button" class="btn btn-secondary rounded-none">2</button>
                                <div class="dropdown">
                                    <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                        <button type="button" class="btn dropdown-toggle btn-secondary flex ltr:rounded-l-none rtl:rounded-r-none">
                                            Dropdown
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"
                                            >
                                                <path
                                                    d="M19 9L12 15L5 9"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </button>
                                        <template #content="{ close }">
                                            <ul @click="close()" class="whitespace-nowrap">
                                                <li><a href="javascript:;">Action</a></li>
                                                <li><a href="javascript:;">Another action</a></li>
                                                <li><a href="javascript:;">Something else here</a></li>
                                                <li><a href="javascript:;">Separated link</a></li>
                                            </ul>
                                        </template>
                                    </Popper>
                                </div>
                            </div>
                            <div class="relative inline-flex align-middle">
                                <button type="button" class="btn btn-outline-secondary ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none">
                                    1
                                </button>
                                <button type="button" class="btn btn-outline-secondary ltr:border-r-0 rtl:border-l-0 rounded-none">2</button>
                                <div class="dropdown">
                                    <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                        <button type="button" class="btn dropdown-toggle btn-outline-secondary flex ltr:rounded-l-none rtl:rounded-r-none">
                                            Dropdown
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"
                                            >
                                                <path
                                                    d="M19 9L12 15L5 9"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </button>
                                        <template #content="{ close }">
                                            <ul @click="close()" class="whitespace-nowrap">
                                                <li><a href="javascript:;">Action</a></li>
                                                <li><a href="javascript:;">Another action</a></li>
                                                <li><a href="javascript:;">Something else here</a></li>
                                                <li><a href="javascript:;">Separated link</a></li>
                                            </ul>
                                        </template>
                                    </Popper>
                                </div>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code7')">
                        <highlight>
                            <pre>
&lt;!-- default --&gt;
&lt;div class=&quot;relative inline-flex align-middle&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary ltr:rounded-r-none rtl:rounded-l-none&quot;&gt;1&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary rounded-none&quot;&gt;2&lt;/button&gt;
  &lt;div class=&quot;dropdown&quot;&gt;
    &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn dropdown-toggle btn-secondary flex ltr:rounded-l-none rtl:rounded-r-none&quot;&gt;
        Dropdown
        &lt;svg&gt; ... &lt;/svg&gt;
      &lt;/button&gt;
      &lt;template #content=&quot;{ close }&quot;&gt;
        &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
          &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/template&gt;
    &lt;/Popper&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- outline --&gt;
&lt;div class=&quot;relative inline-flex align-middle&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none&quot;&gt;1&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary ltr:border-r-0 rtl:border-l-0 rounded-none&quot;&gt;2&lt;/button&gt;
  &lt;div class=&quot;dropdown&quot;&gt;
    &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn dropdown-toggle btn-outline-secondary flex ltr:rounded-l-none rtl:rounded-r-none&quot;&gt;
        Dropdown
        &lt;svg&gt; ... &lt;/svg&gt;
      &lt;/button&gt;
      &lt;template #content=&quot;{ close }&quot;&gt;
        &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
          &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/template&gt;
    &lt;/Popper&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { useAppStore } from '@/stores/index';
const store = useAppStore();
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Split</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code8')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex flex-wrap w-full justify-around gap-7">
                            <div class="dropdown inline-flex">
                                <button type="button" class="btn btn-primary ltr:rounded-r-none rtl:rounded-l-none">Action</button>
                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="!flex">
                                    <button
                                        type="button"
                                        class="btn dropdown-toggle btn-primary h-full ltr:rounded-l-none rtl:rounded-r-none border-l-[#4468fd] before:border-[5px] before:border-l-transparent before:border-r-transparent before:border-t-inherit before:border-b-0 before:inline-block before:border-t-white-light"
                                    >
                                        <span class="sr-only">Toggle dropdown</span>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                            <div class="dropdown inline-flex">
                                <button type="button" class="btn btn-outline-primary ltr:rounded-r-none rtl:rounded-l-none">Action</button>
                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="!flex">
                                    <button
                                        type="button"
                                        class="btn btn-outline-primary h-full ltr:rounded-l-none rtl:rounded-r-none dropdown-toggle before:border-[5px] before:border-l-transparent before:border-r-transparent before:border-t-inherit before:border-b-0 before:inline-block hover:before:border-t-white-light"
                                    >
                                        <span class="sr-only">Toggle dropdown</span>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code8')">
                        <highlight>
                            <pre>
&lt;!-- default --&gt;
&lt;div class=&quot;dropdown inline-flex&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary ltr:rounded-r-none rtl:rounded-l-none&quot;&gt;Action&lt;/button&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;!flex&quot;&gt;
    &lt;button
      type=&quot;button&quot;
      class=&quot;btn dropdown-toggle btn-primary h-full ltr:rounded-l-none rtl:rounded-r-none border-l-[#4468fd] before:border-[5px] before:border-l-transparent before:border-r-transparent before:border-t-inherit before:border-b-0 before:inline-block before:border-t-white-light&quot;
    &gt;
      &lt;span class=&quot;sr-only&quot;&gt;Toggle dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- outline --&gt;
&lt;div class=&quot;dropdown inline-flex&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary ltr:rounded-r-none rtl:rounded-l-none&quot;&gt;Action&lt;/button&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;!flex&quot;&gt;
    &lt;button
      type=&quot;button&quot;
      class=&quot;btn btn-outline-primary h-full ltr:rounded-l-none rtl:rounded-r-none dropdown-toggle before:border-[5px] before:border-l-transparent before:border-r-transparent before:border-t-inherit before:border-b-0 before:inline-block hover:before:border-t-white-light&quot;
    &gt;
      &lt;span class=&quot;sr-only&quot;&gt;Toggle dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { useAppStore } from '@/stores/index';
const store = useAppStore();
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Custom Dropdown</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code9')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex w-full items-center justify-around">
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'top-end' : 'top-start'" offsetDistance="0" class="align-middle">
                                    <button
                                        type="button"
                                        class="btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary"
                                    >
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-6 h-6 rotate-90 opacity-70"
                                        >
                                            <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                            <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                            <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'top-end' : 'top-start'" offsetDistance="0" class="align-middle">
                                    <button
                                        type="button"
                                        class="btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary"
                                    >
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-6 h-6 opacity-70"
                                        >
                                            <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                            <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                            <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'top-start' : 'top-end'" offsetDistance="0" class="align-middle">
                                    <button
                                        type="button"
                                        class="btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary"
                                    >
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-6 h-6 rotate-90 opacity-70"
                                        >
                                            <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                            <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                            <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'top-start' : 'top-end'" offsetDistance="0" class="align-middle">
                                    <button
                                        type="button"
                                        class="btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary"
                                    >
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-6 h-6 opacity-70"
                                        >
                                            <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                            <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                            <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()" class="whitespace-nowrap">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code9')">
                        <highlight>
                            <pre>
&lt;!-- custom --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'top-end' : 'top-start'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary&quot;&gt;
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'top-end' : 'top-start'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary&quot;&gt;
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'top-start' : 'top-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary&quot;&gt;
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;div class=&quot;dropdown&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'top-start' : 'top-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary&quot;&gt;
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { useAppStore } from '@/stores/index';
const store = useAppStore();
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
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Dropdown' });

    const store = useAppStore();
    const { codeArr, toggleCode } = codePreview();
</script>
