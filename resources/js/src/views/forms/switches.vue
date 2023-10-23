<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Forms</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Switches</span>
            </li>
        </ul>
        <div class="pt-5 space-y-8">
            <div class="space-y-8">
                <h4 class="badge bg-primary inline-block hover:top-0 text-base">Icon</h4>
                <!-- Icons -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="panel">
                        <div class="flex items-center justify-between mb-5">
                            <h5 class="font-semibold text-lg dark:text-white-light">Default</h5>
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
                        <div class="mb-5">
                            <label class="w-12 h-6 relative">
                                <input
                                    type="checkbox"
                                    class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                    id="custom_switch_checkbox1"
                                />
                                <span
                                    for="custom_switch_checkbox1"
                                    class="outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center peer-checked:before:left-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300"
                                ></span>
                            </label>
                        </div>
                        <template v-if="codeArr.includes('code1')">
                            <highlight>
                                <pre>
&lt;!-- default --&gt;
&lt;label class=&quot;w-12 h-6 relative&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox1&quot; /&gt;
    &lt;span for=&quot;custom_switch_checkbox1&quot; class=&quot;outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center peer-checked:before:left-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
&lt;/label&gt;
</pre
                                >
                            </highlight>
                        </template>
                    </div>
                    <div class="panel">
                        <div class="flex items-center justify-between mb-5">
                            <h5 class="font-semibold text-lg dark:text-white-light">Rounded</h5>
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
                        <div class="mb-5">
                            <label class="w-12 h-6 relative">
                                <input
                                    type="checkbox"
                                    class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                    id="custom_switch_checkbox2"
                                />
                                <span
                                    for="custom_switch_checkbox2"
                                    class="outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center peer-checked:before:left-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300"
                                ></span>
                            </label>
                        </div>
                        <template v-if="codeArr.includes('code2')">
                            <highlight>
                                <pre>
&lt;!-- rounded --&gt;
&lt;label class=&quot;w-12 h-6 relative&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox2&quot; /&gt;
    &lt;span for=&quot;custom_switch_checkbox2&quot; class=&quot;outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center peer-checked:before:left-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
&lt;/label&gt;
</pre
                                >
                            </highlight>
                        </template>
                    </div>
                </div>
            </div>
            <div class="space-y-8">
                <h4 class="badge bg-primary inline-block hover:top-0 text-base">Solid</h4>
                <!-- Solid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="panel">
                        <div class="flex items-center justify-between mb-5">
                            <h5 class="font-semibold text-lg dark:text-white-light">Default</h5>
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
                        <div class="mb-5">
                            <label class="w-12 h-6 relative">
                                <input
                                    type="checkbox"
                                    class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                    id="custom_switch_checkbox3"
                                />
                                <span
                                    for="custom_switch_checkbox3"
                                    class="bg-[#ebedf2] dark:bg-dark block h-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"
                                ></span>
                            </label>
                        </div>
                        <template v-if="codeArr.includes('code3')">
                            <highlight>
                                <pre>
&lt;!-- default --&gt;
&lt;label class=&quot;w-12 h-6 relative&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox3&quot; /&gt;
    &lt;span for=&quot;custom_switch_checkbox3&quot; class=&quot;bg-[#ebedf2] dark:bg-dark block h-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300 &quot;&gt;&lt;/span&gt;
&lt;/label&gt;
</pre
                                >
                            </highlight>
                        </template>
                    </div>
                    <div class="panel">
                        <div class="flex items-center justify-between mb-5">
                            <h5 class="font-semibold text-lg dark:text-white-light">Rounded</h5>
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
                        <div class="mb-5">
                            <label class="w-12 h-6 relative">
                                <input
                                    type="checkbox"
                                    class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                    id="custom_switch_checkbox4"
                                />
                                <span
                                    for="custom_switch_checkbox4"
                                    class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"
                                ></span>
                            </label>
                        </div>
                        <template v-if="codeArr.includes('code4')">
                            <highlight>
                                <pre>
&lt;!-- rounded --&gt;
&lt;label class=&quot;w-12 h-6 relative&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox4&quot; /&gt;
    &lt;span for=&quot;custom_switch_checkbox4&quot; class=&quot;bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
&lt;/label&gt;
</pre
                                >
                            </highlight>
                        </template>
                    </div>
                </div>
            </div>
            <div class="space-y-8">
                <h4 class="badge bg-primary inline-block hover:top-0 text-base">Outline</h4>
                <!-- Outline -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="panel">
                        <div class="flex items-center justify-between mb-5">
                            <h5 class="font-semibold text-lg dark:text-white-light">Default</h5>
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
                        <div class="mb-5">
                            <label class="w-12 h-6 relative">
                                <input
                                    type="checkbox"
                                    class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                    id="custom_switch_checkbox5"
                                />
                                <span
                                    for="custom_switch_checkbox5"
                                    class="outline_checkbox border-2 border-[#ebedf2] dark:border-white-dark block h-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 peer-checked:before:left-7 peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300"
                                ></span>
                            </label>
                        </div>
                        <template v-if="codeArr.includes('code5')">
                            <highlight>
                                <pre>
&lt;!-- outline --&gt;
&lt;label class=&quot;w-12 h-6 relative&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox5&quot; /&gt;
    &lt;span for=&quot;custom_switch_checkbox5&quot; class=&quot;outline_checkbox border-2 border-[#ebedf2] dark:border-white-dark block h-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 peer-checked:before:left-7 peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
&lt;/label&gt;
</pre
                                >
                            </highlight>
                        </template>
                    </div>
                    <div class="panel">
                        <div class="flex items-center justify-between mb-5">
                            <h5 class="font-semibold text-lg dark:text-white-light">Rounded</h5>
                            <a
                                class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                                href="javascript:;"
                                @click="toggleCode('code6')"
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
                        <div class="mb-5">
                            <label class="w-12 h-6 relative">
                                <input
                                    type="checkbox"
                                    class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                    id="custom_switch_checkbox6"
                                />
                                <span
                                    for="custom_switch_checkbox6"
                                    class="outline_checkbox border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300"
                                ></span>
                            </label>
                        </div>
                        <template v-if="codeArr.includes('code6')">
                            <highlight>
                                <pre>
&lt;!-- rounded --&gt;
&lt;label class=&quot;w-12 h-6 relative&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox6&quot; /&gt;
    &lt;span for=&quot;custom_switch_checkbox6&quot; class=&quot;outline_checkbox border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
&lt;/label&gt;
</pre
                                >
                            </highlight>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Switches' });

    const { codeArr, toggleCode } = codePreview();
</script>
