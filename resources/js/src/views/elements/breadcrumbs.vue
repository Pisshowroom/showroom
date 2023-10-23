<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Elements</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Breadcrumbs</span>
            </li>
        </ul>
        <div class="pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Default</h5>
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
                    <ol class="flex text-gray-500 font-semibold dark:text-white-dark">
                        <li>
                            <a href="javascript:;" class="hover:text-gray-500/70 dark:hover:text-white-dark/70">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                                    <path
                                        opacity="0.5"
                                        d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                    <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </li>
                        <li class="before:content-['/'] before:px-1.5"><a href="javascript:;">Components</a></li>
                        <li class="before:content-['/'] before:px-1.5">
                            <a href="javascript:;" class="text-black dark:text-white-light hover:text-black/70 dark:hover:text-white-light/70">UI Kit</a>
                        </li>
                    </ol>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- default --&gt;
&lt;ol class=&quot;flex text-gray-500 font-semibold dark:text-white-dark&quot;&gt;
  &lt;li&gt;
    &lt;a href=&quot;javascript:;&quot; class=&quot;hover:text-gray-500/70 dark:hover:text-white-dark/70&quot;&gt;
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;before:content-['/'] before:px-1.5&quot;&gt;&lt;a href=&quot;javascript:;&quot;&gt;Components&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;before:content-['/'] before:px-1.5&quot;&gt;&lt;a href=&quot;javascript:;&quot; class=&quot;text-black dark:text-white-light hover:text-black/70 dark:hover:text-white-light/70&quot;&gt;UI Kit&lt;/a&gt;&lt;/li&gt;
&lt;/ol&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Basic</h5>
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
                    <ol class="flex text-gray-500 font-semibold dark:text-white-dark">
                        <li><a href="javascript:;">Components</a></li>
                        <li class="before:content-['/'] before:px-1.5">
                            <a href="javascript:;" class="text-black dark:text-white-light hover:text-black/70 dark:hover:text-white-light/70">UI Kit</a>
                        </li>
                    </ol>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- basic --&gt;
&lt;ol class=&quot;flex text-gray-500 font-semibold dark:text-white-dark&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Components&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;before:content-['/'] before:px-1.5&quot;&gt;&lt;a href=&quot;javascript:;&quot; class=&quot;text-black dark:text-white-light hover:text-black/70 dark:hover:text-white-light/70&quot;&gt;UI Kit&lt;/a&gt;&lt;/li&gt;
&lt;/ol&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Arrowed</h5>
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
                    <ol class="flex text-primary font-semibold dark:text-white-dark">
                        <li class="bg-[#ebedf2] ltr:rounded-l-md rtl:rounded-r-md dark:bg-[#1b2e4b]">
                            <a
                                href="javascript:;"
                                class="p-1.5 ltr:pl-3 rtl:pr-3 ltr:pr-2 rtl:pl-2 relative h-full flex items-center before:absolute ltr:before:-right-[15px] rtl:before:-left-[15px] rtl:before:rotate-180 before:inset-y-0 before:m-auto before:w-0 before:h-0 before:border-[16px] before:border-l-[15px] before:border-r-0 before:border-t-transparent before:border-b-transparent before:border-l-[#ebedf2] before:z-[1] dark:before:border-l-[#1b2e4b] hover:text-primary/70 dark:hover:text-white-dark/70"
                                >Home</a
                            >
                        </li>
                        <li class="bg-[#ebedf2] dark:bg-[#1b2e4b]">
                            <a
                                class="bg-primary text-white-light p-1.5 ltr:pl-6 rtl:pr-6 ltr:pr-2 rtl:pl-2 relative h-full flex items-center before:absolute ltr:before:-right-[15px] rtl:before:-left-[15px] rtl:before:rotate-180 before:inset-y-0 before:m-auto before:w-0 before:h-0 before:border-[16px] before:border-l-[15px] before:border-r-0 before:border-t-transparent before:border-b-transparent before:border-l-primary before:z-[1]"
                                >Components</a
                            >
                        </li>
                        <li class="bg-[#ebedf2] dark:bg-[#1b2e4b]">
                            <a
                                href="javascript:;"
                                class="p-1.5 px-3 ltr:pl-6 rtl:pr-6 relative h-full flex items-center before:absolute ltr:before:-right-[15px] rtl:before:-left-[15px] rtl:before:rotate-180 before:inset-y-0 before:m-auto before:w-0 before:h-0 before:border-[16px] before:border-l-[15px] before:border-r-0 before:border-t-transparent before:border-b-transparent before:border-l-[#ebedf2] before:z-[1] dark:before:border-l-[#1b2e4b] hover:text-primary/70 dark:hover:text-white-dark/70"
                                >UI Kit</a
                            >
                        </li>
                    </ol>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- arrowed --&gt;
&lt;ol class=&quot;flex text-primary font-semibold dark:text-white-dark&quot;&gt;
  &lt;li class=&quot;bg-[#ebedf2] ltr:rounded-l-md rtl:rounded-r-md dark:bg-[#1b2e4b]&quot;&gt;
    &lt;a
      href=&quot;javascript:;&quot;
      class=&quot;
        p-1.5
        ltr:pl-3
        rtl:pr-3
        ltr:pr-2
        rtl:pl-2
        relative
        h-full
        flex
        items-center
        before:absolute
        ltr:before:-right-[15px]
        rtl:before:-left-[15px] rtl:before:rotate-180
        before:inset-y-0
        before:m-auto
        before:w-0
        before:h-0
        before:border-[16px]
        before:border-l-[15px]
        before:border-r-0
        before:border-t-transparent
        before:border-b-transparent
        before:border-l-[#ebedf2]
        before:z-[1]
        dark:before:border-l-[#1b2e4b]
        hover:text-primary/70
        dark:hover:text-white-dark/70
      &quot;
      &gt;Home&lt;/a
    &gt;
  &lt;/li&gt;
  &lt;li class=&quot;bg-[#ebedf2] dark:bg-[#1b2e4b]&quot;&gt;
    &lt;a
      class=&quot;
        bg-primary
        text-white-light
        p-1.5
        ltr:pl-6
        rtl:pr-6
        ltr:pr-2
        rtl:pl-2
        relative
        h-full
        flex
        items-center
        before:absolute
        ltr:before:-right-[15px]
        rtl:before:-left-[15px] rtl:before:rotate-180
        before:inset-y-0
        before:m-auto
        before:w-0
        before:h-0
        before:border-[16px]
        before:border-l-[15px]
        before:border-r-0
        before:border-t-transparent
        before:border-b-transparent
        before:border-l-primary
        before:z-[1]
      &quot;
      &gt;Components&lt;/a
    &gt;
  &lt;/li&gt;
  &lt;li class=&quot;bg-[#ebedf2] dark:bg-[#1b2e4b]&quot;&gt;
    &lt;a
      href=&quot;javascript:;&quot;
      class=&quot;
        p-1.5
        px-3
        ltr:pl-6
        rtl:pr-6
        relative
        h-full
        flex
        items-center
        before:absolute
        ltr:before:-right-[15px]
        rtl:before:-left-[15px] rtl:before:rotate-180
        before:inset-y-0
        before:m-auto
        before:w-0
        before:h-0
        before:border-[16px]
        before:border-l-[15px]
        before:border-r-0
        before:border-t-transparent
        before:border-b-transparent
        before:border-l-[#ebedf2]
        before:z-[1]
        dark:before:border-l-[#1b2e4b]
        hover:text-primary/70
        dark:hover:text-white-dark/70
      &quot;
      &gt;UI Kit&lt;/a
    &gt;
  &lt;/li&gt;
&lt;/ol&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Dotted Seperators</h5>
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
                    <ol class="flex text-gray-500 font-semibold dark:text-white-dark">
                        <li><a href="javascript:;" class="hover:text-gray-500/70 dark:hover:text-white-dark/70">Home</a></li>
                        <li class="before:w-1 before:h-1 before:rounded-full before:bg-primary before:inline-block before:relative before:-top-0.5 before:mx-4">
                            <a href="javascript:;" class="text-primary">Components</a>
                        </li>
                        <li class="before:w-1 before:h-1 before:rounded-full before:bg-primary before:inline-block before:relative before:-top-0.5 before:mx-4">
                            <a href="javascript:;" class="hover:text-gray-500/70 dark:hover:text-white-dark/70">UI Kit</a>
                        </li>
                    </ol>
                </div>
                <template v-if="codeArr.includes('code4')">
                    <highlight>
                        <pre>
&lt;!-- dotted seperators --&gt;
&lt;ol class=&quot;flex text-gray-500 font-semibold dark:text-white-dark&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;javascript:;&quot; class=&quot;hover:text-gray-500/70 dark:hover:text-white-dark/70&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;before:w-1 before:h-1 before:rounded-full before:bg-primary before:inline-block before:relative before:-top-0.5 before:mx-4&quot;&gt;
    &lt;a href=&quot;javascript:;&quot; class=&quot;text-primary&quot;&gt;Components&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;before:w-1 before:h-1 before:rounded-full before:bg-primary before:inline-block before:relative before:-top-0.5 before:mx-4&quot;&gt;
    &lt;a href=&quot;javascript:;&quot; class=&quot;hover:text-gray-500/70 dark:hover:text-white-dark/70&quot;&gt;UI Kit&lt;/a&gt;
  &lt;/li&gt;
&lt;/ol&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">With Icons</h5>
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
                <div class="mb-5">
                    <ol class="flex items-center flex-wrap text-gray-500 font-semibold dark:text-white-dark gap-y-4">
                        <li>
                            <a
                                href="javascript:;"
                                class="p-2.5 border border-gray-500/20 rounded-md shadow flex items-center justify-center dark:border-0 dark:bg-[#191e3a] hover:text-gray-500/70 dark:hover:text-white-dark/70"
                            >
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                    <path
                                        opacity="0.5"
                                        d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                    <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </li>
                        <li
                            class="flex items-center before:w-1 before:h-1 before:rounded-full before:bg-primary before:inline-block before:relative before:-top-0.5 before:mx-4"
                        >
                            <a
                                href="javascript:;"
                                class="p-2.5 border border-gray-500/20 rounded-md shadow flex items-center justify-center text-primary dark:border-0 dark:bg-[#191e3a]"
                            >
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0"
                                >
                                    <path
                                        d="M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                    <path
                                        opacity="0.5"
                                        d="M21 7.5L12 12M12 12L3 7.5M12 12V21.5"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                </svg>

                                Components
                            </a>
                        </li>
                        <li
                            class="flex items-center before:w-1 before:h-1 before:rounded-full before:bg-primary before:inline-block before:relative before:-top-0.5 before:mx-4"
                        >
                            <a
                                class="p-2.5 border border-gray-500/20 rounded-md shadow flex items-center justify-center dark:border-0 dark:bg-[#191e3a] hover:text-gray-500/70 dark:hover:text-white-dark/70"
                                href="javascript:;"
                            >
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        opacity="0.5"
                                        d="M7 10C7 8.58579 7 7.87868 7.43934 7.43934C7.87868 7 8.58579 7 10 7H14C15.4142 7 16.1213 7 16.5607 7.43934C17 7.87868 17 8.58579 17 10V14C17 15.4142 17 16.1213 16.5607 16.5607C16.1213 17 15.4142 17 14 17H10C8.58579 17 7.87868 17 7.43934 16.5607C7 16.1213 7 15.4142 7 14V10Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                    <path
                                        d="M12.4286 10L11 12H13L11.5714 14"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M4 12C4 8.22876 4 6.34315 5.17157 5.17157C6.34315 4 8.22876 4 12 4C15.7712 4 17.6569 4 18.8284 5.17157C20 6.34315 20 8.22876 20 12C20 15.7712 20 17.6569 18.8284 18.8284C17.6569 20 15.7712 20 12 20C8.22876 20 6.34315 20 5.17157 18.8284C4 17.6569 4 15.7712 4 12Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                    <path opacity="0.5" d="M4 12H2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M22 12H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M4 9H2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M22 9H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M4 15H2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M22 15H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M12 20L12 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M12 2L12 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M9 20L9 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M9 2L9 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M15 20L15 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M15 2L15 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>

                                UI Kit
                            </a>
                        </li>
                    </ol>
                </div>
                <template v-if="codeArr.includes('code5')">
                    <highlight>
                        <pre>
&lt;!-- with icons --&gt;
&lt;ol class=&quot;flex items-center flex-wrap text-gray-500 font-semibold dark:text-white-dark gap-y-4&quot;&gt;
  &lt;li&gt;
    &lt;a
      href=&quot;javascript:;&quot;
      class=&quot;p-2.5 border border-gray-500/20 rounded-md shadow flex items-center justify-center dark:border-0 dark:bg-[#191e3a] hover:text-gray-500/70 dark:hover:text-white-dark/70&quot;
    &gt;
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;flex items-center before:w-1 before:h-1 before:rounded-full before:bg-primary before:inline-block before:relative before:-top-0.5 before:mx-4&quot;&gt;
    &lt;a href=&quot;javascript:;&quot; class=&quot;p-2.5 border border-gray-500/20 rounded-md shadow flex items-center justify-center text-primary dark:border-0 dark:bg-[#191e3a]&quot;&gt;
      &lt;svg&gt; ... &lt;/svg&gt;
      Components
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;flex items-center before:w-1 before:h-1 before:rounded-full before:bg-primary before:inline-block before:relative before:-top-0.5 before:mx-4&quot;&gt;
    &lt;a
      class=&quot;p-2.5 border border-gray-500/20 rounded-md shadow flex items-center justify-center dark:border-0 dark:bg-[#191e3a] hover:text-gray-500/70 dark:hover:text-white-dark/70&quot;
      href=&quot;javascript:;&quot;
    &gt;
      &lt;svg&gt; ... &lt;/svg&gt;
      UI Kit
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ol&gt;
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
    useMeta({ title: 'Breadcrumbs' });

    const { codeArr, toggleCode } = codePreview();
</script>
