<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Elements</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Progress Bar</span>
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
                <div class="mb-5 space-y-5">
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-primary h-4 rounded-full w-3/12"></div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-secondary h-4 rounded-full w-4/12"></div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-success h-4 rounded-full w-5/12"></div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-warning h-4 rounded-full w-6/12"></div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-danger h-4 rounded-full w-7/12"></div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-info h-4 rounded-full w-8/12"></div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-black dark:bg-dark h-4 rounded-full w-9/12"></div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- primary --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-primary h-4 rounded-full w-3/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- secondary --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-secondary h-4 rounded-full w-4/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- success --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-success h-4 rounded-full w-5/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- warning --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-warning h-4 rounded-full w-6/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- danger --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-danger h-4 rounded-full w-7/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- info --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-info h-4 rounded-full w-8/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- black --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-black dark:bg-dark h-4 rounded-full w-9/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Gradient</h5>
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
                <div class="mb-5 space-y-5">
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-gradient-to-r from-[#0081ff] to-[#0045ff] h-4 rounded-full w-3/12"></div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-gradient-to-r from-[#04befe] to-[#4481eb] h-4 rounded-full w-4/12"></div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-gradient-to-r from-[#3cba92] to-[#0ba360] h-4 rounded-full w-5/12"></div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-gradient-to-r from-[#f09819] to-[#ff5858] h-4 rounded-full w-6/12"></div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-gradient-to-r from-[#d09693] to-[#c71d6f] h-4 rounded-full w-7/12"></div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-gradient-to-r from-[#7579ff] to-[#b224ef] h-4 rounded-full w-8/12"></div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-gradient-to-r from-[#2b5876] to-[#4e4376] h-4 rounded-full w-9/12"></div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- gradient primary --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-gradient-to-r from-[#0081ff] to-[#0045ff] h-4 rounded-full w-3/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- gradient info --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-gradient-to-r from-[#04befe] to-[#4481eb] h-4 rounded-full w-4/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- gradient success --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-gradient-to-r from-[#3cba92] to-[#0ba360] h-4 rounded-full w-5/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- gradient warning --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-gradient-to-r from-[#f09819] to-[#ff5858] h-4 rounded-full w-6/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- gradient danger --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-gradient-to-r from-[#d09693] to-[#c71d6f] h-4 rounded-full w-7/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- gradient secondary --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-gradient-to-r from-[#7579ff] to-[#b224ef] h-4 rounded-full w-8/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- gradient dark --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-gradient-to-r from-[#2b5876] to-[#4e4376] h-4 rounded-full w-9/12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Striped</h5>
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
                <div class="mb-5 space-y-5">
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full test">
                        <div class="bg-primary h-4 rounded-full w-3/12 striped-bar"></div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- Striped --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-primary h-4 rounded-full w-3/12&quot; style=&quot;background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Animated</h5>
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
                <div class="mb-5 space-y-5">
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-primary h-4 rounded-full w-6/12 animated-progress striped-bar"></div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code4')">
                    <highlight>
                        <pre>
&lt;!-- animated --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-primary h-4 rounded-full w-6/12 animated-progress&quot; style=&quot;background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Labels</h5>
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
                <div class="mb-5 space-y-5">
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-info h-4 rounded-full w-4/5 text-center text-white text-xs">80%</div>
                    </div>
                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full">
                        <div class="bg-danger h-4 rounded-full w-11/12 text-center text-white flex justify-between items-center px-2 text-xs">
                            <span>PHP</span><span>90%</span>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code5')">
                    <highlight>
                        <pre>
&lt;!-- labels --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-info h-4 rounded-full w-6/12 text-center text-white text-xs&quot;&gt;80%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full&quot;&gt;
    &lt;div class=&quot;bg-danger h-4 rounded-full w-8/12 text-center text-white flex justify-between items-center px-2 text-xs&quot;&gt;&lt;span&gt;PHP&lt;/span&gt;&lt;span&gt;90%&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Stacked</h5>
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
                        </span>
                    </a>
                </div>
                <div class="mb-5 space-y-5">
                    <div class="space-y-2">
                        <h3 class="text-base">Basic</h3>
                        <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex">
                            <div class="bg-success h-4 ltr:rounded-l-full rtl:rounded-r-full w-2/12 text-center text-white text-xs"></div>
                            <div class="bg-warning h-4 w-4/12 text-center text-white text-xs"></div>
                            <div class="bg-danger h-4 ltr:rounded-r-full rtl:rounded-l-full w-3/12 text-center text-white text-xs"></div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base">Striped</h3>
                        <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex">
                            <div class="bg-primary h-4 ltr:rounded-l-full rtl:rounded-r-full w-2/12 text-center text-white text-xs striped-bar-sm"></div>
                            <div class="bg-success h-4 w-4/12 text-center text-white text-xs striped-bar-sm"></div>
                            <div class="bg-info h-4 ltr:rounded-r-full rtl:rounded-l-full w-3/12 text-center text-white text-xs striped-bar-sm"></div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base">Animated</h3>
                        <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex">
                            <div
                                class="bg-info h-4 ltr:rounded-l-full rtl:rounded-r-full w-2/12 animated-progress text-center text-white text-xs striped-bar-sm"
                            ></div>
                            <div class="bg-secondary h-4 w-4/12 animated-progress text-center text-white text-xs striped-bar-sm"></div>
                            <div
                                class="bg-primary h-4 ltr:rounded-r-full rtl:rounded-l-full w-3/12 animated-progress text-center text-white text-xs striped-bar-sm"
                            ></div>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code6')">
                    <highlight>
                        <pre>
&lt;!-- basic --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex&quot;&gt;
    &lt;div class=&quot;bg-success h-4 ltr:rounded-l-full rtl:rounded-r-full w-2/12 text-center text-white text-xs&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;bg-warning h-4 w-4/12 text-center text-white text-xs&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;bg-danger h-4 ltr:rounded-r-full rtl:rounded-l-full w-3/12 text-center text-white text-xs&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- striped --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex&quot;&gt;
    &lt;div class=&quot;bg-primary h-4 ltr:rounded-l-full rtl:rounded-r-full w-2/12 text-center text-white text-xs&quot; style=&quot;background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;bg-success h-4 w-4/12 text-center text-white text-xs&quot; style=&quot;background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;bg-info h-4 ltr:rounded-r-full rtl:rounded-l-full w-3/12 text-center text-white text-xs&quot; style=&quot;background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- animated --&gt;
&lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex&quot;&gt;
    &lt;div class=&quot;bg-info h-4 ltr:rounded-l-full rtl:rounded-r-full w-2/12 animated-progress text-center text-white text-xs&quot; style=&quot;background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;bg-secondary h-4 w-4/12 animated-progress text-center text-white text-xs&quot; style=&quot;background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;bg-primary h-4 ltr:rounded-r-full rtl:rounded-l-full w-3/12 animated-progress text-center text-white text-xs&quot; style=&quot;background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel lg:row-span-2 lg:row-start-3">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Progress Bars Different Sizes</h5>
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
                <div class="mb-5 space-y-5">
                    <div class="space-y-1">
                        <h3 class="text-primary">Default Progress Bar Size</h3>
                        <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex">
                            <div class="bg-primary h-4 rounded-full rounded-bl-full w-3/12 text-center text-white text-xs"></div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base text-success">Progress-sm</h3>
                        <div class="w-full h-1 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex">
                            <div class="bg-success h-1 rounded-full rounded-bl-full w-5/12 text-center text-white text-xs"></div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base text-warning">Progress-md</h3>
                        <div class="w-full h-2.5 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex">
                            <div class="bg-warning h-2.5 rounded-full rounded-bl-full w-7/12 text-center text-white text-xs"></div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base text-info">Progress-lg</h3>
                        <div class="w-full h-5 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex">
                            <div class="bg-info h-5 rounded-full rounded-bl-full w-8/12 text-center text-white text-xs"></div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base text-danger">Progress-xl</h3>
                        <div class="w-full h-6 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex">
                            <div class="bg-danger h-6 rounded-full rounded-bl-full w-10/12 text-center text-white text-xs"></div>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code7')">
                    <highlight>
                        <pre>
&lt;!-- default --&gt;
&lt;div class=&quot;space-y-1&quot;&gt;
    &lt;h3 class=&quot;text-primary&quot;&gt;Default Progress Bar Size&lt;/h3&gt;
    &lt;div class=&quot;w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex&quot;&gt;
        &lt;div class=&quot;bg-primary h-4 rounded-full rounded-bl-full w-3/12 text-center text-white text-xs&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- small --&gt;
&lt;div class=&quot;space-y-2&quot;&gt;
    &lt;h3 class=&quot;text-base text-success&quot;&gt;Progress-sm&lt;/h3&gt;
    &lt;div class=&quot;w-full h-1 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex&quot;&gt;
        &lt;div class=&quot;bg-success h-1 rounded-full rounded-bl-full w-5/12 text-center text-white text-xs&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- medium --&gt;
&lt;div class=&quot;space-y-2&quot;&gt;
    &lt;h3 class=&quot;text-base text-warning&quot;&gt;Progress-md&lt;/h3&gt;
    &lt;div class=&quot;w-full h-2.5 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex&quot;&gt;
        &lt;div class=&quot;bg-warning h-2.5 rounded-full rounded-bl-full w-7/12 text-center text-white text-xs&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- large --&gt;
&lt;div class=&quot;space-y-2&quot;&gt;
    &lt;h3 class=&quot;text-base text-info&quot;&gt;Progress-lg&lt;/h3&gt;
    &lt;div class=&quot;w-full h-5 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex&quot;&gt;
        &lt;div class=&quot;bg-info h-5 rounded-full rounded-bl-full w-8/12 text-center text-white text-xs&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- extra large --&gt;
&lt;div class=&quot;space-y-2&quot;&gt;
    &lt;h3 class=&quot;text-base text-danger&quot;&gt;Progress-xl&lt;/h3&gt;
    &lt;div class=&quot;w-full h-6 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex&quot;&gt;
        &lt;div class=&quot;bg-danger h-6 rounded-full rounded-bl-full w-10/12 text-center text-white text-xs&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
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
    useMeta({ title: 'Progress Bar' });

    const { codeArr, toggleCode } = codePreview();
</script>
<style>
    .striped-bar {
        background-image: linear-gradient(
            45deg,
            hsla(0, 0%, 100%, 0.15) 25%,
            transparent 0,
            transparent 50%,
            hsla(0, 0%, 100%, 0.15) 0,
            hsla(0, 0%, 100%, 0.15) 75%,
            transparent 0,
            transparent
        );
        background-size: 1rem 1rem;
    }
    .striped-bar-sm {
        background-image: linear-gradient(
            45deg,
            hsla(0, 0%, 100%, 0.15) 25%,
            transparent 0,
            transparent 50%,
            hsla(0, 0%, 100%, 0.15) 0,
            hsla(0, 0%, 100%, 0.15) 75%,
            transparent 0,
            transparent
        );
        background-size: 1rem 1rem;
    }
</style>
