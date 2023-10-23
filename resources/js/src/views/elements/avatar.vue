<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Elements</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Avatar</span>
            </li>
        </ul>
        <div class="pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Basic</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code1')"
                        ><span class="flex items-center">
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
                        </span></a
                    >
                </div>
                <div class="mb-5">
                    <div class="flex items-center justify-center gap-2 flex-wrap">
                        <img class="w-20 h-20 rounded-full overflow-hidden object-cover" src="/assets/images/profile-12.jpeg" alt="" />
                        <img class="w-16 h-16 rounded-full overflow-hidden object-cover" src="/assets/images/profile-12.jpeg" alt="" />
                        <img class="w-14 h-14 rounded-full overflow-hidden object-cover" src="/assets/images/profile-12.jpeg" alt="" />
                        <img class="w-12 h-12 rounded-full overflow-hidden object-cover" src="/assets/images/profile-12.jpeg" alt="" />
                    </div>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- basic --&gt;
&lt;img class=&quot;w-20 h-20 rounded-full overflow-hidden object-cover&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;

&lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;

&lt;img class=&quot;w-14 h-14 rounded-full overflow-hidden object-cover&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;

&lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Indicators</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code2')"
                        ><span class="flex items-center">
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
                        </span></a
                    >
                </div>
                <div class="mb-5">
                    <div class="flex items-center justify-center gap-2 flex-wrap">
                        <span class="w-20 h-20 relative">
                            <img class="w-20 h-20 rounded-full overflow-hidden object-cover" src="/assets/images/profile-12.jpeg" alt="" />
                            <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-7 h-7 rounded-full ring-2 ring-white dark:ring-white-dark bg-danger"></span>
                        </span>
                        <span class="w-16 h-16 relative">
                            <img class="w-16 h-16 rounded-full overflow-hidden object-cover" src="/assets/images/profile-12.jpeg" alt="" />
                            <span
                                class="absolute ltr:right-0 rtl:left-0 bottom-0 w-6 h-6 rounded-full ring-2 ring-white dark:ring-white-dark bg-success"
                            ></span>
                        </span>
                        <span class="w-14 h-14 relative">
                            <img class="w-14 h-14 rounded-full overflow-hidden object-cover" src="/assets/images/profile-12.jpeg" alt="" />
                            <span
                                class="absolute ltr:right-0 rtl:left-0 bottom-0 w-5 h-5 rounded-full ring-2 ring-white dark:ring-white-dark bg-secondary"
                            ></span>
                        </span>
                        <span class="w-12 h-12 relative">
                            <img class="w-12 h-12 rounded-full overflow-hidden object-cover" src="/assets/images/profile-12.jpeg" alt="" />
                            <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-4 h-4 rounded-full ring-2 ring-white dark:ring-white-dark bg-info"></span>
                        </span>
                    </div>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- danger --&gt;
&lt;span class=&quot;w-20 h-20 relative&quot;&gt;
  &lt;img class=&quot;w-20 h-20 rounded-full overflow-hidden object-cover&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
  &lt;span class=&quot;absolute ltr:right-0 rtl:left-0 bottom-0 w-7 h-7 rounded-full ring-2 ring-white dark:ring-white-dark bg-danger&quot;&gt;&lt;/span&gt;
&lt;/span&gt;

&lt;!-- success --&gt;
&lt;span class=&quot;w-16 h-16 relative&quot;&gt;
  &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
  &lt;span class=&quot;absolute ltr:right-0 rtl:left-0 bottom-0 w-6 h-6 rounded-full ring-2 ring-white dark:ring-white-dark bg-success&quot;&gt;&lt;/span&gt;
&lt;/span&gt;

&lt;!-- secondary --&gt;
&lt;span class=&quot;w-14 h-14 relative&quot;&gt;
  &lt;img class=&quot;w-14 h-14 rounded-full overflow-hidden object-cover&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
  &lt;span class=&quot;absolute ltr:right-0 rtl:left-0 bottom-0 w-5 h-5 rounded-full ring-2 ring-white dark:ring-white-dark bg-secondary&quot;&gt;&lt;/span&gt;
&lt;/span&gt;

&lt;!-- info --&gt;
&lt;span class=&quot;w-12 h-12 relative&quot;&gt;
  &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
  &lt;span class=&quot;absolute ltr:right-0 rtl:left-0 bottom-0 w-4 h-4 rounded-full ring-2 ring-white dark:ring-white-dark bg-info&quot;&gt;&lt;/span&gt;
&lt;/span&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Shapes</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code3')"
                        ><span class="flex items-center">
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
                        </span></a
                    >
                </div>
                <div class="mb-5">
                    <div class="flex items-center justify-center gap-2 flex-wrap">
                        <img class="w-20 h-20 rounded-md overflow-hidden object-cover" src="/assets/images/profile-12.jpeg" alt="" />
                        <img class="w-16 h-16 rounded-full overflow-hidden object-cover" src="/assets/images/profile-12.jpeg" alt="" />
                        <img class="w-14 h-14 rounded-md overflow-hidden object-cover" src="/assets/images/profile-12.jpeg" alt="" />
                        <img class="w-10 h-10 overflow-hidden object-cover" src="/assets/images/profile-12.jpeg" alt="" />
                    </div>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- squre rounded large --&gt;
&lt;img class=&quot;w-20 h-20 rounded-md overflow-hidden object-cover&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;

&lt;!-- circle --&gt;
&lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;

&lt;!-- squre rounded small --&gt;
&lt;img class=&quot;w-14 h-14 rounded-md overflow-hidden object-cover&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;

&lt;!-- squre --&gt;
&lt;img class=&quot;w-10 h-10 overflow-hidden object-cover&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Initials</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code4')"
                        ><span class="flex items-center">
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
                        </span></a
                    >
                </div>
                <div class="mb-5">
                    <div class="flex items-center justify-center gap-2 text-white flex-wrap">
                        <span class="flex justify-center items-center w-20 h-20 text-center rounded-full object-cover bg-success text-2xl">AG</span>
                        <span class="flex justify-center items-center w-16 h-16 text-center rounded-full object-cover bg-primary text-xl">AG</span>
                        <span class="flex justify-center items-center w-14 h-14 text-center rounded-full object-cover bg-info text-lg">AG</span>
                        <span class="flex justify-center items-center w-10 h-10 text-center rounded-full object-cover bg-danger text-base">AG</span>
                    </div>
                </div>
                <template v-if="codeArr.includes('code4')">
                    <highlight>
                        <pre>
&lt;!-- success --&gt;
&lt;span class=&quot;flex justify-center items-center w-20 h-20 text-center rounded-full object-cover bg-success text-2xl&quot;&gt;AG&lt;/span&gt;

&lt;!-- primary --&gt
&lt;span class=&quot;flex justify-center items-center w-16 h-16 text-center rounded-full object-cover bg-primary text-xl&quot;&gt;AG&lt;/span&gt;

&lt;!-- info --&gt
&lt;span class=&quot;flex justify-center items-center w-14 h-14 text-center rounded-full object-cover bg-info text-lg&quot;&gt;AG&lt;/span&gt;

&lt;!-- danger --&gt
&lt;span class=&quot;flex justify-center items-center w-10 h-10 text-center rounded-full object-cover bg-danger text-base&quot;&gt;AG&lt;/span&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Group</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code5')"
                        ><span class="flex items-center">
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
                        </span></a
                    >
                </div>
                <div class="flex items-center justify-around mb-5 gap-10 flex-wrap">
                    <div class="flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white">
                        <img
                            class="w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark"
                            src="/assets/images/profile-12.jpeg"
                            alt=""
                        />
                        <img
                            class="w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark"
                            src="/assets/images/profile-12.jpeg"
                            alt=""
                        />
                        <img
                            class="w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark"
                            src="/assets/images/profile-12.jpeg"
                            alt=""
                        />
                        <span
                            class="flex justify-center items-center w-16 h-16 text-center rounded-full object-cover bg-info text-xl ring-2 ring-white dark:ring-white-dark"
                            >AG</span
                        >
                    </div>
                    <div class="flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white">
                        <img
                            class="w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark"
                            src="/assets/images/profile-12.jpeg"
                            alt=""
                        />
                        <img
                            class="w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark"
                            src="/assets/images/profile-12.jpeg"
                            alt=""
                        />
                        <img
                            class="w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark"
                            src="/assets/images/profile-12.jpeg"
                            alt=""
                        />
                        <span
                            class="flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark"
                            >AG</span
                        >
                    </div>
                </div>
                <template v-if="codeArr.includes('code5')">
                    <highlight>
                        <pre>
&lt;!-- large --&gt;
&lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
  &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
  &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
  &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
  &lt;span class=&quot;flex justify-center items-center w-16 h-16 text-center rounded-full object-cover bg-info text-xl ring-2 ring-white dark:ring-white-dark&quot;&gt;AG&lt;/span&gt;
&lt;/div&gt;

&lt;!-- small --&gt;
&lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
  &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
  &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
  &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
  &lt;span class=&quot;flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark&quot;&gt;AG&lt;/span&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Animate Y-axis</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code6')"
                        ><span class="flex items-center">
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
                        </span></a
                    >
                </div>
                <div class="mb-5">
                    <div class="flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white">
                        <img
                            class="w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2"
                            src="/assets/images/profile-12.jpeg"
                            alt=""
                        />
                        <img
                            class="w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2"
                            src="/assets/images/profile-12.jpeg"
                            alt=""
                        />
                        <img
                            class="w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2"
                            src="/assets/images/profile-12.jpeg"
                            alt=""
                        />
                        <span
                            class="flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2"
                            >AG</span
                        >
                    </div>
                </div>
                <template v-if="codeArr.includes('code6')">
                    <highlight>
                        <pre>
&lt;!-- animate y axis --&gt;
&lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
  &lt;img
    class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2&quot;
    src=&quot;/assets/images/profile-12.jpeg&quot;
    alt=&quot;&quot;
  /&gt;
  &lt;img
    class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2&quot;
    src=&quot;/assets/images/profile-12.jpeg&quot;
    alt=&quot;&quot;
  /&gt;
  &lt;img
    class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2&quot;
    src=&quot;/assets/images/profile-12.jpeg&quot;
    alt=&quot;&quot;
  /&gt;
  &lt;span
    class=&quot;
      flex
      justify-center
      items-center
      w-12
      h-12
      text-center
      rounded-full
      object-cover
      bg-info
      text-base
      ring-2 ring-white
      dark:ring-white-dark
      relative
      transition-all
      duration-300
      hover:hover:translate-y-2
    &quot;
    &gt;AG&lt;/span
  &gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Animate X-axis</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code7')"
                        ><span class="flex items-center">
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
                        </span></a
                    >
                </div>
                <div class="mb-5">
                    <div class="flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white">
                        <img
                            class="w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2"
                            src="/assets/images/profile-12.jpeg"
                            alt=""
                        />
                        <img
                            class="w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2"
                            src="/assets/images/profile-12.jpeg"
                            alt=""
                        />
                        <img
                            class="w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2"
                            src="/assets/images/profile-12.jpeg"
                            alt=""
                        />
                        <span
                            class="flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2"
                            >AG</span
                        >
                    </div>
                </div>
                <template v-if="codeArr.includes('code7')">
                    <highlight>
                        <pre>
&lt;!-- animate x axis --&gt;
&lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
  &lt;img
    class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2&quot;
    src=&quot;/assets/images/profile-12.jpeg&quot;
    alt=&quot;&quot;
  /&gt;
  &lt;img
    class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2&quot;
    src=&quot;/assets/images/profile-12.jpeg&quot;
    alt=&quot;&quot;
  /&gt;
  &lt;img
    class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2&quot;
    src=&quot;/assets/images/profile-12.jpeg&quot;
    alt=&quot;&quot;
  /&gt;
  &lt;span
    class=&quot;
      flex
      justify-center
      items-center
      w-12
      h-12
      text-center
      rounded-full
      object-cover
      bg-info
      text-base
      ring-2 ring-white
      dark:ring-white-dark
      relative
      transition-all
      duration-300
      hover:translate-x-2
    &quot;
    &gt;AG&lt;/span
  &gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Tooltip</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code8')"
                        ><span class="flex items-center">
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
                        </span></a
                    >
                </div>
                <div class="mb-5">
                    <div class="flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white">
                        <span
                            ><img
                                v-tippy
                                class="w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark"
                                src="/assets/images/profile-12.jpeg"
                                alt=""
                            />
                            <tippy>Judy Holmes</tippy>
                        </span>
                        <span
                            ><img
                                v-tippy
                                class="w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark"
                                src="/assets/images/profile-12.jpeg"
                                alt=""
                            />
                            <tippy>Judy Holmes</tippy>
                        </span>
                        <span
                            ><img
                                v-tippy
                                class="w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark"
                                src="/assets/images/profile-12.jpeg"
                                alt=""
                            />
                            <tippy>Judy Holmes</tippy>
                        </span>
                        <span
                            ><span
                                v-tippy
                                class="flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark"
                                >AG</span
                            >
                            <tippy>Alan Green</tippy>
                        </span>
                    </div>
                </div>
                <template v-if="codeArr.includes('code8')">
                    <highlight>
                        <pre>
&lt;!-- tooltip --&gt;
&lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
  &lt;span
    &gt;&lt;img v-tippy class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
    &lt;tippy&gt;Judy Holmes&lt;/tippy&gt;
  &lt;/span&gt;
  &lt;span
    &gt;&lt;img v-tippy class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
    &lt;tippy&gt;Judy Holmes&lt;/tippy&gt;
  &lt;/span&gt;
  &lt;span
    &gt;&lt;img v-tippy class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;/assets/images/profile-12.jpeg&quot; alt=&quot;&quot; /&gt;
    &lt;tippy&gt;Judy Holmes&lt;/tippy&gt;
  &lt;/span&gt;
  &lt;span
    &gt;&lt;span v-tippy class=&quot;flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark&quot;&gt;AG&lt;/span&gt;
    &lt;tippy&gt;Alan Green&lt;/tippy&gt;
  &lt;/span&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Avatar' });

    const { codeArr, toggleCode } = codePreview();
</script>
