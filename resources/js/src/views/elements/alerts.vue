<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Elements</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Alerts</span>
            </li>
        </ul>
        <div class="pt-5 space-y-8">
            <!-- default -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Default Alerts</h5>
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
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
                    <div class="flex items-center p-3.5 rounded text-primary bg-primary-light dark:bg-primary-dark-light">
                        <span class="ltr:pr-2 rtl:pl-2"
                            ><strong class="ltr:mr-1 rtl:ml-1">Primary!</strong>Lorem Ipsum is simply dummy text of the printing.</span
                        >
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center p-3.5 rounded text-secondary bg-secondary-light dark:bg-secondary-dark-light">
                        <span class="ltr:pr-2 rtl:pl-2"
                            ><strong class="ltr:mr-1 rtl:ml-1">Secondary!</strong>Lorem Ipsum is simply dummy text of the printing.</span
                        >
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center p-3.5 rounded text-success bg-success-light dark:bg-success-dark-light">
                        <span class="ltr:pr-2 rtl:pl-2"
                            ><strong class="ltr:mr-1 rtl:ml-1">Success!</strong>Lorem Ipsum is simply dummy text of the printing.</span
                        >
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center p-3.5 rounded text-warning bg-warning-light dark:bg-warning-dark-light">
                        <span class="ltr:pr-2 rtl:pl-2"
                            ><strong class="ltr:mr-1 rtl:ml-1">Warning!</strong>Lorem Ipsum is simply dummy text of the printing.</span
                        >
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center p-3.5 rounded text-danger bg-danger-light dark:bg-danger-dark-light">
                        <span class="ltr:pr-2 rtl:pl-2"
                            ><strong class="ltr:mr-1 rtl:ml-1">Danger!</strong>Lorem Ipsum is simply dummy text of the printing.</span
                        >
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center p-3.5 rounded text-info bg-info-light dark:bg-info-dark-light">
                        <span class="ltr:pr-2 rtl:pl-2"><strong class="ltr:mr-1 rtl:ml-1">Info!</strong>Lorem Ipsum is simply dummy text of the printing.</span>
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- primary --&gt;
&lt;div class=&quot;flex items-center p-3.5 rounded text-primary bg-primary-light dark:bg-primary-dark-light&quot;&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Primary!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- secondary --&gt;
&lt;div class=&quot;flex items-center p-3.5 rounded text-secondary bg-secondary-light dark:bg-secondary-dark-light&quot;&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Secondary!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- success --&gt;
&lt;div class=&quot;flex items-center p-3.5 rounded text-success bg-success-light dark:bg-success-dark-light&quot;&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Success!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- warning --&gt;
&lt;div class=&quot;flex items-center p-3.5 rounded text-warning bg-warning-light dark:bg-warning-dark-light&quot;&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Warning!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- danger --&gt;
&lt;div class=&quot;flex items-center p-3.5 rounded text-danger bg-danger-light dark:bg-danger-dark-light&quot;&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Danger!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- dark --&gt;
&lt;div class=&quot;flex items-center p-3.5 rounded text-info bg-info-light dark:bg-info-dark-light&quot;&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Info!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;
    </pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- Outline -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Outline Alerts</h5>
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
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
                    <div class="flex items-center p-3.5 rounded text-white-dark border border-primary">
                        <span class="ltr:pr-2 rtl:pl-2">
                            <strong class="ltr:mr-2 rtl:ml-2">Primary!</strong>Lorem Ipsum is simply dummy text of the printing.
                        </span>
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center border p-3.5 rounded text-white-dark border-danger">
                        <span class="ltr:pr-2 rtl:pl-2">
                            <strong class="ltr:mr-2 rtl:ml-2">Danger!</strong>Lorem Ipsum is simply dummy text of the printing.
                        </span>
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- primary --&gt;
&lt;div class=&quot;flex items-center p-3.5 rounded text-white-dark border border-primary&quot;&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt; &lt;strong class=&quot;ltr:mr-2 rtl:ml-2&quot;&gt;Primary!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing. &lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- danger --&gt;
&lt;div class=&quot;flex items-center border p-3.5 rounded text-white-dark border-danger&quot;&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt; &lt;strong class=&quot;ltr:mr-2 rtl:ml-2&quot;&gt;Danger!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing. &lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- Solid -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Solid Alerts</h5>
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
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
                    <div class="flex items-center p-3.5 rounded text-white bg-primary">
                        <span class="ltr:pr-2 rtl:pl-2">
                            <strong class="ltr:mr-1 rtl:ml-1">Warning!</strong>Lorem Ipsum is simply dummy text of the printing.
                        </span>
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center p-3.5 rounded text-white bg-warning">
                        <span class="ltr:pr-2 rtl:pl-2"><strong class="ltr:mr-1 rtl:ml-1">Info!</strong>Lorem Ipsum is simply dummy text of the printing.</span>
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- primary --&gt;
&lt;div class=&quot;flex items-center p-3.5 rounded text-white bg-primary&quot;&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt; &lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Warning!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing. &lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- warning --&gt;
&lt;div class=&quot;flex items-center p-3.5 rounded text-white bg-warning&quot;&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Info!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- Alerts with icon -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Alerts with icon</h5>
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
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
                    <div
                        class="relative flex items-center border p-3.5 rounded text-success bg-success-light border-success ltr:border-l-[64px] rtl:border-r-[64px] dark:bg-success-dark-light"
                    >
                        <span class="absolute ltr:-left-11 rtl:-right-11 inset-y-0 text-white w-6 h-6 m-auto">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                <path
                                    opacity="0.5"
                                    d="M5.31171 10.7615C8.23007 5.58716 9.68925 3 12 3C14.3107 3 15.7699 5.58716 18.6883 10.7615L19.0519 11.4063C21.4771 15.7061 22.6897 17.856 21.5937 19.428C20.4978 21 17.7864 21 12.3637 21H11.6363C6.21356 21 3.50217 21 2.40626 19.428C1.31034 17.856 2.52291 15.7061 4.94805 11.4063L5.31171 10.7615Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                                <path d="M12 8V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <circle cx="12" cy="16" r="1" fill="currentColor" />
                            </svg>
                        </span>
                        <span class="ltr:pr-2 rtl:pl-2"
                            ><strong class="ltr:mr-1 rtl:ml-1">Warning!</strong>Lorem Ipsum is simply dummy text of the printing.</span
                        >
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div
                        class="relative flex items-center border p-3.5 rounded text-dark bg-dark-light border-dark ltr:border-r-[64px] rtl:border-l-[64px] dark:bg-dark-dark-light dark:text-white-light dark:border-white-light/20"
                    >
                        <span class="absolute ltr:-right-11 rtl:-left-11 inset-y-0 text-white w-6 h-6 m-auto">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"></circle>
                                <path
                                    opacity="0.5"
                                    d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                ></path>
                            </svg>
                        </span>
                        <span class="ltr:pr-2 rtl:pl-2"
                            ><strong class="ltr:mr-1 rtl:ml-1">Warning!</strong>Lorem Ipsum is simply dummy text of the printing.</span
                        >
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
                <template v-if="codeArr.includes('code4')">
                    <highlight>
                        <pre>
&lt;!-- success --&gt;
&lt;div class=&quot;relative flex items-center border p-3.5 rounded text-success bg-success-light border-success ltr:border-l-[64px] rtl:border-r-[64px] dark:bg-success-dark-light&quot;&gt;
  &lt;span class=&quot;absolute ltr:-left-11 rtl:-right-11 inset-y-0 text-white w-6 h-6 m-auto&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/span&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Warning!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- warning --&gt;
&lt;div
  class=&quot;
    relative
    flex
    items-center
    border
    p-3.5
    rounded
    text-dark
    bg-dark-light
    border-dark
    ltr:border-r-[64px]
    rtl:border-l-[64px]
    dark:bg-dark-dark-light dark:text-white-light dark:border-white-light/20
  &quot;
&gt;
  &lt;span class=&quot;absolute ltr:-right-11 rtl:-left-11 inset-y-0 text-white w-6 h-6 m-auto&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/span&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Warning!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- Arrowed alert -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Arrowed Alerts</h5>
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
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
                    <div
                        class="relative flex items-center border p-3.5 rounded before:absolute before:top-1/2 ltr:before:left-0 rtl:before:right-0 rtl:before:rotate-180 before:-mt-2 before:border-l-8 before:border-t-8 before:border-b-8 before:border-t-transparent before:border-b-transparent before:border-l-inherit text-primary bg-primary-light !border-primary ltr:border-l-[64px] rtl:border-r-[64px] dark:bg-primary-dark-light"
                    >
                        <span class="absolute ltr:-left-11 rtl:-right-11 inset-y-0 text-white w-6 h-6 m-auto">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                <path
                                    d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                ></path>
                                <path
                                    d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                ></path>
                                <path d="M12 6V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                        </span>
                        <span class="ltr:pr-2 rtl:pl-2"
                            ><strong class="ltr:mr-1 rtl:ml-1">Warning!</strong>Lorem Ipsum is simply dummy text of the printing.</span
                        >
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div
                        class="relative flex items-center border p-3.5 rounded before:inline-block before:absolute before:top-1/2 ltr:before:right-0 rtl:before:left-0 rtl:before:rotate-180 before:-mt-2 before:border-r-8 before:border-t-8 before:border-b-8 before:border-t-transparent before:border-b-transparent before:border-r-inherit text-danger bg-danger-light border-danger ltr:border-r-[64px] rtl:border-l-[64px] dark:bg-danger-dark-light"
                    >
                        <span class="absolute ltr:-right-11 rtl:-left-11 inset-y-0 text-white w-6 h-6 m-auto">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                <path d="M12 7V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <circle cx="12" cy="16" r="1" fill="currentColor" />
                            </svg>
                        </span>
                        <span class="ltr:pr-2 rtl:pl-2"
                            ><strong class="ltr:mr-1 rtl:ml-1">Warning!</strong>Lorem Ipsum is simply dummy text of the printing.</span
                        >
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
                <template v-if="codeArr.includes('code5')">
                    <highlight>
                        <pre>
&lt;!-- primary --&gt;
&lt;div
  class=&quot;
    relative
    flex
    items-center
    border
    p-3.5
    rounded
    before:absolute before:top-1/2
    ltr:before:left-0
    rtl:before:right-0 rtl:before:rotate-180
    before:-mt-2 before:border-l-8 before:border-t-8 before:border-b-8 before:border-t-transparent before:border-b-transparent before:border-l-inherit
    text-primary
    bg-primary-light
    !border-primary
    ltr:border-l-[64px]
    rtl:border-r-[64px]
    dark:bg-primary-dark-light
  &quot;
&gt;
  &lt;span class=&quot;absolute ltr:-left-11 rtl:-right-11 inset-y-0 text-white w-6 h-6 m-auto&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/span&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Warning!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- primary --&gt;
&lt;div
  class=&quot;
    relative
    flex
    items-center
    border
    p-3.5
    rounded
    before:inline-block before:absolute before:top-1/2
    ltr:before:right-0
    rtl:before:left-0 rtl:before:rotate-180
    before:-mt-2 before:border-r-8 before:border-t-8 before:border-b-8 before:border-t-transparent before:border-b-transparent before:border-r-inherit
    text-danger
    bg-danger-light
    border-danger
    ltr:border-r-[64px]
    rtl:border-l-[64px]
    dark:bg-danger-dark-light
  &quot;
&gt;
  &lt;span class=&quot;absolute ltr:-right-11 rtl:-left-11 inset-y-0 text-white w-6 h-6 m-auto&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/span&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Warning!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- Custom alert -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Custom Alerts</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code6')">
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
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
                    <div class="flex items-center p-3.5 rounded text-white bg-info">
                        <span class="text-white w-6 h-6 ltr:mr-4 rtl:ml-4">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                <path
                                    d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                ></path>
                                <path
                                    d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                ></path>
                                <path d="M12 6V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                        </span>
                        <span><strong class="ltr:mr-1 rtl:ml-1">Warning!</strong>Lorem Ipsum is simply dummy text of the printing.</span>
                        <button type="button" class="btn btn-sm bg-white text-black ltr:ml-auto rtl:mr-auto">Accept</button>
                        <button type="button" class="ltr:ml-4 rtl:mr-4">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>

                    <div
                        class="flex items-center p-3.5 rounded text-white"
                        style="background: rgb(188, 26, 78); background: linear-gradient(135deg, rgba(188, 26, 78, 1) 0%, rgba(0, 79, 230, 1) 100%)"
                    >
                        <span class="ltr:pr-2 rtl:pl-2"
                            ><strong class="ltr:mr-1 rtl:ml-1">Warning!</strong>Lorem Ipsum is simply dummy text of the printing.</span
                        >
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>

                    <div class="flex items-center p-3.5 rounded text-white bg-[url('/assets/images/menu-heade.jpg')] bg-no-repeat bg-center bg-cover">
                        <span class="ltr:pr-2 rtl:pl-2"
                            ><strong class="ltr:mr-1 rtl:ml-1">Warning!</strong>Lorem Ipsum is simply dummy text of the printing.</span
                        >
                        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80">
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
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
                <template v-if="codeArr.includes('code6')">
                    <highlight>
                        <pre>
&lt;!-- info --&gt;
&lt;div class=&quot;flex items-center p-3.5 rounded text-white bg-info&quot;&gt;
  &lt;span class=&quot;text-white w-6 h-6 ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/span&gt;
  &lt;span&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Warning!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-sm bg-white text-black ltr:ml-auto rtl:mr-auto&quot;&gt;Accept&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-4 rtl:mr-4&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- gradient --&gt;
&lt;div class=&quot;flex items-center p-3.5 rounded text-white&quot; style=&quot;background: rgb(188, 26, 78); background: linear-gradient(135deg, rgba(188, 26, 78, 1) 0%, rgba(0, 79, 230, 1) 100%)&quot;&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Warning!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- image --&gt;
&lt;div class=&quot;flex items-center p-3.5 rounded text-white bg-[url('/assets/images/menu-heade.jpg')] bg-no-repeat bg-center bg-cover&quot;&gt;
  &lt;span class=&quot;ltr:pr-2 rtl:pl-2&quot;&gt;&lt;strong class=&quot;ltr:mr-1 rtl:ml-1&quot;&gt;Warning!&lt;/strong&gt;Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt;
  &lt;button type=&quot;button&quot; class=&quot;ltr:ml-auto rtl:mr-auto hover:opacity-80&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/button&gt;
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
    useMeta({ title: 'Alerts' });

    const { codeArr, toggleCode } = codePreview();
</script>
