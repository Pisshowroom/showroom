<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Elements</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Button Group</span>
            </li>
        </ul>
        <div class="pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Horizontal</h5>
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
                <div class="mb-5 text-center">
                    <div class="relative inline-flex align-middle">
                        <button type="button" class="btn btn-dark ltr:rounded-r-none rtl:rounded-l-none">Left</button>
                        <button type="button" class="btn btn-dark rounded-none">Middle</button>
                        <button type="button" class="btn btn-dark ltr:rounded-l-none rtl:rounded-r-none">Right</button>
                    </div>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- horizontal --&gt;
&lt;div class=&quot;relative inline-flex align-middle&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-dark ltr:rounded-r-none rtl:rounded-l-none&quot;&gt;Left&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-dark rounded-none&quot;&gt;Middle&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-dark ltr:rounded-l-none rtl:rounded-r-none&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input Group</h5>
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
                    <div class="flex flex-wrap justify-center sm:justify-between items-center gap-4 w-full">
                        <div>
                            <div class="relative inline-flex align-middle">
                                <button type="button" class="btn btn-dark ltr:rounded-r-none rtl:rounded-l-none">1</button>
                                <button type="button" class="btn btn-dark rounded-none">2</button>
                                <button type="button" class="btn btn-dark rounded-none">3</button>
                                <button type="button" class="btn btn-dark ltr:rounded-l-none rtl:rounded-r-none">4</button>
                            </div>
                        </div>
                        <div class="flex relative items-stretch flex-wrap">
                            <div class="ltr:-mr-px rtl:-ml-px flex">
                                <span
                                    class="border border-[#e0e6ed] dark:border-[#17263c] ltr:rounded-l rtl:rounded-r bg-[#f1f2f3] flex items-center justify-center text-black px-4 py-1.5 dark:bg-[#1a1c2d] dark:text-white-dark"
                                    >@</span
                                >
                            </div>
                            <input type="text" placeholder="Input group example" class="flex-1 form-input ltr:rounded-l-none rtl:rounded-r-none" />
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- button group --&gt;
&lt;div&gt;
  &lt;div class=&quot;relative inline-flex align-middle&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-dark ltr:rounded-r-none rtl:rounded-l-none&quot;&gt;1&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-dark rounded-none&quot;&gt;2&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-dark rounded-none&quot;&gt;3&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-dark ltr:rounded-l-none rtl:rounded-r-none&quot;&gt;4&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- input group --&gt;
&lt;div class=&quot;flex relative items-stretch flex-wrap&quot;&gt;
  &lt;div class=&quot;ltr:-mr-px rtl:-ml-px flex&quot;&gt;
    &lt;span
      class=&quot;
        border border-[#e0e6ed]
        dark:border-[#17263c]
        ltr:rounded-l
        rtl:rounded-r
        bg-[#f1f2f3]
        flex
        items-center
        justify-center
        text-black
        px-4
        py-1.5
        dark:bg-[#1a1c2d] dark:text-white-dark
      &quot;
      &gt;@&lt;/span
    &gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; placeholder=&quot;Input group example&quot; class=&quot;flex-1 form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Vertical</h5>
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
                <div class="mb-5 text-center">
                    <div class="relative inline-flex align-middle flex-col items-start justify-center">
                        <button type="button" class="btn btn-dark rounded-b-none w-full">Button</button>
                        <div class="dropdown">
                            <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                <a href="javascript:;" class="btn dropdown-toggle btn-dark rounded-none">
                                    Dropdown
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4 ltr:ml-2 rtl:mr-2 inline-block shrink-0"
                                    >
                                        <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <template #content="{ close }">
                                    <ul @click="close()">
                                        <li>
                                            <a href="javascript:;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </template>
                            </Popper>
                        </div>
                        <button type="button" class="btn btn-dark rounded-none w-full">Button</button>
                        <button type="button" class="btn btn-dark rounded-none w-full">Button</button>
                        <div class="dropdown">
                            <Popper :placement="store.rtlClass === 'rtl' ? 'top-start' : 'top-end'" offsetDistance="0" class="align-middle">
                                <a href="javascript:;" class="btn dropdown-toggle btn-dark rounded-t-none">
                                    Dropdown
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4 ltr:ml-2 rtl:mr-2 inline-block shrink-0"
                                    >
                                        <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <template #content="{ close }">
                                    <ul @click="close()">
                                        <li>
                                            <a href="javascript:;">Dropdown link</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Dropdown link</a>
                                        </li>
                                    </ul>
                                </template>
                            </Popper>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- vertical --&gt;
&lt;div class=&quot;relative inline-flex align-middle flex-col items-start justify-center&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-dark rounded-b-none w-full&quot;&gt;Button&lt;/button&gt;
  &lt;div class=&quot;dropdown&quot;&gt;
    &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
      &lt;a href=&quot;javascript:;&quot; class=&quot;btn dropdown-toggle btn-dark rounded-none&quot;&gt; Dropdown &lt;svg&gt; ... &lt;/svg&gt; &lt;/a&gt;
      &lt;template #content=&quot;{ close }&quot;&gt;
        &lt;ul @click=&quot;close()&quot;&gt;
          &lt;li&gt;
            &lt;a href=&quot;javascript:;&quot;&gt;Dropdown link&lt;/a&gt;
          &lt;/li&gt;
          &lt;li&gt;
            &lt;a href=&quot;javascript:;&quot;&gt;Dropdown link&lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
      &lt;/template&gt;
    &lt;/Popper&gt;
  &lt;/div&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-dark rounded-none w-full&quot;&gt;Button&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-dark rounded-none w-full&quot;&gt;Button&lt;/button&gt;
  &lt;div class=&quot;dropdown&quot;&gt;
    &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'top-start' : 'top-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
      &lt;a href=&quot;javascript:;&quot; class=&quot;btn dropdown-toggle btn-dark rounded-t-none&quot;&gt; Dropdown &lt;svg&gt; ... &lt;/svg&gt; &lt;/a&gt;
      &lt;template #content=&quot;{ close }&quot;&gt;
        &lt;ul @click=&quot;close()&quot;&gt;
          &lt;li&gt;
            &lt;a href=&quot;javascript:;&quot;&gt;Dropdown link&lt;/a&gt;
          &lt;/li&gt;
          &lt;li&gt;
            &lt;a href=&quot;javascript:;&quot;&gt;Dropdown link&lt;/a&gt;
          &lt;/li&gt;
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
        </div>
    </div>
</template>
<script lang="ts" setup>
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Buttons Group' });

    const store = useAppStore();
    const { codeArr, toggleCode } = codePreview();
</script>
