<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Components</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>List Group</span>
            </li>
        </ul>
        <div class="pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Basic -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Basic</h5>
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
                <div class="mb-5">
                    <div class="flex flex-col rounded-md border border-[#e0e6ed] dark:border-[#1b2e4b]">
                        <div class="border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5">Cras justo odio</div>
                        <div class="border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5">Dapibus ac facilisis in</div>
                        <div
                            class="border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 bg-primary text-white shadow-[0_1px_15px_1px_rgba(67,97,238,0.15)]"
                        >
                            Morbi leo risus
                        </div>
                        <div class="border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5">Porta ac consectetur ac</div>
                        <div class="px-4 py-2.5">Vestibulum at eros</div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- basic --&gt;
&lt;div class=&quot;flex flex-col rounded-md border border-[#e0e6ed] dark:border-[#1b2e4b]&quot;&gt;
  &lt;div class=&quot;border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5&quot;&gt;Cras justo odio&lt;/div&gt;
  &lt;div class=&quot;border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5&quot;&gt;Dapibus ac facilisis in&lt;/div&gt;
  &lt;div class=&quot;border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 bg-primary text-white shadow-[0_1px_15px_1px_rgba(67,97,238,0.15)]&quot;&gt;Morbi leo risus&lt;/div&gt;
  &lt;div class=&quot;border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5&quot;&gt;Porta ac consectetur ac&lt;/div&gt;
  &lt;div class=&quot;px-4 py-2.5&quot;&gt;Vestibulum at eros&lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Links -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Links</h5>
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
                <div class="mb-5">
                    <div class="flex flex-col rounded-md border border-[#e0e6ed] dark:border-[#1b2e4b]">
                        <a href="javascript:;" class="border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10"
                            >Cras justo odio</a
                        >
                        <a href="javascript:;" class="border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10"
                            >Dapibus ac facilisis in</a
                        >
                        <a
                            href="javascript:;"
                            class="border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 bg-primary text-white shadow-[0_1px_15px_1px_rgba(67,97,238,0.15)] hover:bg-[#eee] dark:hover:bg-[#eee]/10 hover:text-black dark:hover:text-white"
                            >Morbi leo risus</a
                        >
                        <a href="javascript:;" class="border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10"
                            >Porta ac consectetur ac</a
                        >
                        <a href="javascript:;" class="px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10">Vestibulum at eros</a>
                    </div>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- links --&gt;
&lt;div class=&quot;flex flex-col rounded-md border border-[#e0e6ed] dark:border-[#1b2e4b]&quot;&gt;
  &lt;a href=&quot;javascript:;&quot; class=&quot;border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10&quot;&gt;Cras justo odio&lt;/a&gt;
  &lt;a href=&quot;javascript:;&quot; class=&quot;border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10&quot;&gt;Dapibus ac facilisis in&lt;/a&gt;
  &lt;a
    href=&quot;javascript:;&quot;
    class=&quot;
      border-b border-[#e0e6ed]
      dark:border-[#1b2e4b]
      px-4
      py-2.5
      bg-primary
      text-white
      shadow-[0_1px_15px_1px_rgba(67,97,238,0.15)]
      hover:bg-[#eee]
      dark:hover:bg-[#eee]/10
      hover:text-black
      dark:hover:text-white
    &quot;
    &gt;Morbi leo risus&lt;/a
  &gt;
  &lt;a href=&quot;javascript:;&quot; class=&quot;border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10&quot;&gt;Porta ac consectetur ac&lt;/a&gt;
  &lt;a href=&quot;javascript:;&quot; class=&quot;px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10&quot;&gt;Vestibulum at eros&lt;/a&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Icons -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Icons</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code3')">
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
                <div class="mb-5">
                    <div class="flex flex-col rounded-md border border-[#e0e6ed] dark:border-[#1b2e4b]">
                        <div class="flex border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10">
                            <div class="ltr:mr-2 rtl:ml-2.5 mt-0.5 text-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                    <path
                                        opacity="0.5"
                                        d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                    <path
                                        d="M6 8L8.1589 9.79908C9.99553 11.3296 10.9139 12.0949 12 12.0949C13.0861 12.0949 14.0045 11.3296 15.8411 9.79908L18 8"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                </svg>
                            </div>
                            <div class="flex-1 font-semibold">
                                <h6 class="mb-1 text-base">Messages</h6>
                                <p class="text-xs">4 New Messages</p>
                            </div>
                        </div>
                        <div
                            class="flex border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 bg-primary text-white shadow-[0_1px_15px_1px_rgba(67,97,238,0.15)] hover:bg-[#eee] dark:hover:bg-[#eee]/10 hover:text-black dark:hover:text-white group"
                        >
                            <div class="ltr:mr-2 rtl:ml-2.5 mt-0.5 text-white group-hover:text-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                    <path
                                        opacity="0.5"
                                        d="M4 10.1433C4 5.64588 7.58172 2 12 2C16.4183 2 20 5.64588 20 10.1433C20 14.6055 17.4467 19.8124 13.4629 21.6744C12.5343 22.1085 11.4657 22.1085 10.5371 21.6744C6.55332 19.8124 4 14.6055 4 10.1433Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                    <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="1.5" />
                                </svg>
                            </div>
                            <div class="flex-1 font-semibold">
                                <h6 class="mb-1 text-base">Locations</h6>
                                <p class="text-xs">25 New Travel Locations</p>
                            </div>
                        </div>
                        <div class="flex px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10">
                            <div class="ltr:mr-2 rtl:ml-2.5 mt-0.5 text-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                    <path
                                        opacity="0.5"
                                        d="M3 13.1928C3 18.0569 6.85549 22 11.6115 22H12.3885C17.1445 22 21 18.0569 21 13.1928V12.9281C21 8.31651 18.2715 4.16347 14.0967 2.42077C12.7527 1.85974 11.2473 1.85974 9.90329 2.42077C5.72854 4.16347 3 8.31651 3 12.9281V13.1928Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                    <path
                                        d="M7.61475 10.7237C8.2495 8.71826 9.63062 7.08805 11.3858 6.27637"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                </svg>
                            </div>
                            <div class="flex-1 font-semibold">
                                <h6 class="mb-1 text-base">Flexible</h6>
                                <p class="text-xs">Customization Flexibility</p>
                            </div>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- icons --&gt;
&lt;div class=&quot;flex flex-col rounded-md border border-[#e0e6ed] dark:border-[#1b2e4b]&quot;&gt;
  &lt;div class=&quot;flex border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10&quot;&gt;
    &lt;div class=&quot;ltr:mr-2 rtl:ml-2.5 mt-0.5 text-primary&quot;&gt;
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-1 font-semibold&quot;&gt;
      &lt;h6 class=&quot;mb-1 text-base&quot;&gt;Messages&lt;/h6&gt;
      &lt;p class=&quot;text-xs&quot;&gt;4 New Messages&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div
    class=&quot;
      flex
      border-b border-[#e0e6ed]
      dark:border-[#1b2e4b]
      px-4
      py-2.5
      bg-primary
      text-white
      shadow-[0_1px_15px_1px_rgba(67,97,238,0.15)]
      hover:bg-[#eee]
      dark:hover:bg-[#eee]/10
      hover:text-black
      dark:hover:text-white
      group
    &quot;
  &gt;
    &lt;div class=&quot;ltr:mr-2 rtl:ml-2.5 mt-0.5 text-white group-hover:text-primary&quot;&gt;
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-1 font-semibold&quot;&gt;
      &lt;h6 class=&quot;mb-1 text-base&quot;&gt;Locations&lt;/h6&gt;
      &lt;p class=&quot;text-xs&quot;&gt;25 New Travel Locations&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10&quot;&gt;
    &lt;div class=&quot;ltr:mr-2 rtl:ml-2.5 mt-0.5 text-primary&quot;&gt;
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-1 font-semibold&quot;&gt;
      &lt;h6 class=&quot;mb-1 text-base&quot;&gt;Flexible&lt;/h6&gt;
      &lt;p class=&quot;text-xs&quot;&gt;Customization Flexibility&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Images -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Images</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code4')">
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
                <div class="mb-5">
                    <div class="flex flex-col rounded-md border border-[#e0e6ed] dark:border-[#1b2e4b]">
                        <div class="flex border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10">
                            <div class="ltr:mr-3 rtl:ml-3">
                                <img src="/assets/images/profile-1.jpeg" alt="" class="rounded-full w-12 h-12 object-cover" />
                            </div>
                            <div class="flex-1 font-semibold">
                                <h6 class="mb-1 text-base">Luke Ivory</h6>
                                <p class="text-xs">Project Lead</p>
                            </div>
                        </div>
                        <div
                            class="flex border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 bg-primary text-white shadow-[0_1px_15px_1px_rgba(67,97,238,0.15)] hover:bg-[#eee] dark:hover:bg-[#eee]/10 hover:text-black dark:hover:text-white group"
                        >
                            <div class="ltr:mr-3 rtl:ml-3">
                                <img src="/assets/images/profile-2.jpeg" alt="" class="rounded-full w-12 h-12 object-cover" />
                            </div>
                            <div class="flex-1 font-semibold">
                                <h6 class="mb-1 text-base">Sonia Shaw</h6>
                                <p class="text-xs">Web Designer</p>
                            </div>
                        </div>
                        <div class="flex px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10">
                            <div class="ltr:mr-3 rtl:ml-3">
                                <img src="/assets/images/profile-3.jpeg" alt="" class="rounded-full w-12 h-12 object-cover" />
                            </div>
                            <div class="flex-1 font-semibold">
                                <h6 class="mb-1 text-base">Dale Butler</h6>
                                <p class="text-xs">Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code4')">
                    <highlight>
                        <pre>
&lt;!-- images --&gt;
&lt;div class=&quot;flex flex-col rounded-md border border-[#e0e6ed] dark:border-[#1b2e4b]&quot;&gt;
  &lt;div class=&quot;flex border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10&quot;&gt;
    &lt;div class=&quot;ltr:mr-3 rtl:ml-3&quot;&gt;
      &lt;img src=&quot;/assets/images/profile-1.jpeg&quot; alt=&quot;&quot; class=&quot;rounded-full w-12 h-12 object-cover&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-1 font-semibold&quot;&gt;
      &lt;h6 class=&quot;mb-1 text-base&quot;&gt;Luke Ivory&lt;/h6&gt;
      &lt;p class=&quot;text-xs&quot;&gt;Project Lead&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div
    class=&quot;
      flex
      border-b border-[#e0e6ed]
      dark:border-[#1b2e4b]
      px-4
      py-2.5
      bg-primary
      text-white
      shadow-[0_1px_15px_1px_rgba(67,97,238,0.15)]
      hover:bg-[#eee]
      dark:hover:bg-[#eee]/10
      hover:text-black
      dark:hover:text-white
      group
    &quot;
  &gt;
    &lt;div class=&quot;ltr:mr-3 rtl:ml-3&quot;&gt;
      &lt;img src=&quot;/assets/images/profile-2.jpeg&quot; alt=&quot;&quot; class=&quot;rounded-full w-12 h-12 object-cover&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-1 font-semibold&quot;&gt;
      &lt;h6 class=&quot;mb-1 text-base&quot;&gt;Sonia Shaw&lt;/h6&gt;
      &lt;p class=&quot;text-xs&quot;&gt;Web Designer&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10&quot;&gt;
    &lt;div class=&quot;ltr:mr-3 rtl:ml-3&quot;&gt;
      &lt;img src=&quot;/assets/images/profile-3.jpeg&quot; alt=&quot;&quot; class=&quot;rounded-full w-12 h-12 object-cover&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-1 font-semibold&quot;&gt;
      &lt;h6 class=&quot;mb-1 text-base&quot;&gt;Dale Butler&lt;/h6&gt;
      &lt;p class=&quot;text-xs&quot;&gt;Developer&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Task -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Task</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code5')">
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
                <div class="mb-5">
                    <div class="flex flex-col rounded-md border border-[#e0e6ed] dark:border-[#1b2e4b]">
                        <div
                            class="flex space-x-4 rtl:space-x-reverse border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10"
                        >
                            <input id="tack_checkbox1" type="checkbox" class="form-checkbox" />
                            <label for="tack_checkbox1" class="mb-0 cursor-pointer"
                                >List groups are a flexible and powerful component for displaying simple.
                                <span class="badge bg-secondary my-auto ltr:ml-3 rtl:mr-3 hover:top-0">Project</span></label
                            >
                        </div>
                        <div
                            class="flex space-x-4 rtl:space-x-reverse border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 bg-primary text-white shadow-[0_1px_15px_1px_rgba(67,97,238,0.15)] hover:bg-[#eee] dark:hover:bg-[#eee]/10 hover:text-black dark:hover:text-white group"
                        >
                            <input id="tack_checkbox2" type="checkbox" class="form-checkbox checked:border-white-light dark:checked:border-[#253b5c]" />
                            <label for="tack_checkbox2" class="mb-0 cursor-pointer"
                                >List groups are a flexible and powerful component for displaying simple.
                                <span class="badge bg-info my-auto ltr:ml-3 rtl:mr-3 hover:top-0">Urgent</span></label
                            >
                        </div>
                        <div class="flex space-x-4 rtl:space-x-reverse px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10">
                            <input id="tack_checkbox3" type="checkbox" class="form-checkbox" />
                            <label for="tack_checkbox3" class="mb-0 cursor-pointer"
                                >List groups are a flexible and powerful component for displaying simple.
                                <span class="badge bg-success my-auto ltr:ml-3 rtl:mr-3 hover:top-0">Success</span></label
                            >
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code5')">
                    <highlight>
                        <pre>
&lt;!-- task --&gt;
&lt;div class=&quot;flex flex-col rounded-md border border-[#e0e6ed] dark:border-[#1b2e4b]&quot;&gt;
  &lt;div class=&quot;flex space-x-4 rtl:space-x-reverse border-b border-[#e0e6ed] dark:border-[#1b2e4b] px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10&quot;&gt;
    &lt;input id=&quot;tack_checkbox1&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; /&gt;
    &lt;label for=&quot;tack_checkbox1&quot; class=&quot;mb-0 cursor-pointer&quot;
      &gt;List groups are a flexible and powerful component for displaying simple. &lt;span class=&quot;badge bg-secondary my-auto ltr:ml-3 rtl:mr-3 hover:top-0&quot;&gt;Project&lt;/span&gt;&lt;/label
    &gt;
  &lt;/div&gt;
  &lt;div
    class=&quot;
      flex
      space-x-4
      rtl:space-x-reverse
      border-b border-[#e0e6ed]
      dark:border-[#1b2e4b]
      px-4
      py-2.5
      bg-primary
      text-white
      shadow-[0_1px_15px_1px_rgba(67,97,238,0.15)]
      hover:bg-[#eee]
      dark:hover:bg-[#eee]/10
      hover:text-black
      dark:hover:text-white
      group
    &quot;
  &gt;
    &lt;input id=&quot;tack_checkbox2&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox checked:border-white-light dark:checked:border-[#253b5c]&quot; /&gt;
    &lt;label for=&quot;tack_checkbox2&quot; class=&quot;mb-0 cursor-pointer&quot;
      &gt;List groups are a flexible and powerful component for displaying simple. &lt;span class=&quot;badge bg-info my-auto ltr:ml-3 rtl:mr-3 hover:top-0&quot;&gt;Urgent&lt;/span&gt;&lt;/label
    &gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex space-x-4 rtl:space-x-reverse px-4 py-2.5 hover:bg-[#eee] dark:hover:bg-[#eee]/10&quot;&gt;
    &lt;input id=&quot;tack_checkbox3&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; /&gt;
    &lt;label for=&quot;tack_checkbox3&quot; class=&quot;mb-0 cursor-pointer&quot;
      &gt;List groups are a flexible and powerful component for displaying simple. &lt;span class=&quot;badge bg-success my-auto ltr:ml-3 rtl:mr-3 hover:top-0&quot;&gt;Success&lt;/span&gt;&lt;/label
    &gt;
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
    useMeta({ title: 'List Group' });
    const { codeArr, toggleCode } = codePreview();
</script>
