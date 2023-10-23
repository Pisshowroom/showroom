<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Elements</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Badges</span>
            </li>
        </ul>
        <div class="pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6">
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
                            Code</span
                        >
                    </a>
                </div>
                <div class="mb-5">
                    <div class="flex flex-wrap items-center justify-center gap-3">
                        <span class="badge bg-primary">Primary</span>
                        <span class="badge bg-secondary">Secondary</span>
                        <span class="badge bg-success">Success</span>
                        <span class="badge bg-danger">Danger</span>
                        <span class="badge bg-warning">Warning</span>
                        <span class="badge bg-info">Info</span>
                        <span class="badge bg-dark">Dark</span>
                    </div>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- primary --&gt;
&lt;span class=&quot;badge bg-primary&quot;&gt;Primary&lt;/span&gt;

&lt;!-- secondary --&gt;
&lt;span class=&quot;badge bg-secondary&quot;&gt;Secondary&lt;/span&gt;

&lt;!-- success --&gt;
&lt;span class=&quot;badge bg-success&quot;&gt;Success&lt;/span&gt;

&lt;!-- danger --&gt;
&lt;span class=&quot;badge bg-danger&quot;&gt;Danger&lt;/span&gt;

&lt;!-- warning --&gt;
&lt;span class=&quot;badge bg-warning&quot;&gt;Warning&lt;/span&gt;

&lt;!-- info --&gt;
&lt;span class=&quot;badge bg-info&quot;&gt;Info&lt;/span&gt;

&lt;!-- dark --&gt;
&lt;span class=&quot;badge bg-dark&quot;&gt;Dark&lt;/span&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Outline</h5>
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
                            Code</span
                        >
                    </a>
                </div>
                <div class="mb-5">
                    <div class="flex flex-wrap items-center justify-center gap-3">
                        <span class="badge badge-outline-primary">Primary</span>
                        <span class="badge badge-outline-secondary">Secondary</span>
                        <span class="badge badge-outline-success">Success</span>
                        <span class="badge badge-outline-danger">Danger</span>
                        <span class="badge badge-outline-warning">Warning</span>
                        <span class="badge badge-outline-info">Info</span>
                        <span class="badge badge-outline-dark">Dark</span>
                    </div>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- primary outline --&gt;
&lt;span class=&quot;badge badge-outline-primary&quot;&gt;Primary&lt;/span&gt;

&lt;!-- secondary outline --&gt;
&lt;span class=&quot;badge badge-outline-secondary&quot;&gt;Secondary&lt;/span&gt;

&lt;!-- success outline --&gt;
&lt;span class=&quot;badge badge-outline-success&quot;&gt;Success&lt;/span&gt;

&lt;!-- danger outline --&gt;
&lt;span class=&quot;badge badge-outline-danger&quot;&gt;Danger&lt;/span&gt;

&lt;!-- warning outline --&gt;
&lt;span class=&quot;badge badge-outline-warning&quot;&gt;Warning&lt;/span&gt;

&lt;!-- info outline --&gt;
&lt;span class=&quot;badge badge-outline-info&quot;&gt;Info&lt;/span&gt;

&lt;!-- dark outline --&gt;
&lt;span class=&quot;badge badge-outline-dark&quot;&gt;Dark&lt;/span&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Pills</h5>
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
                            Code</span
                        >
                    </a>
                </div>
                <div class="mb-5">
                    <div class="flex w-full">
                        <div class="flex items-center justify-center w-1/2">
                            <span class="badge bg-primary rounded-full">Primary</span>
                        </div>
                        <div class="flex items-center justify-center w-1/2">
                            <span class="badge badge-outline-primary rounded-full">Primary</span>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- pills --&gt;
&lt;div class=&quot;flex items-center justify-center w-1/2&quot;&gt;
  &lt;span class=&quot;badge bg-primary rounded-full&quot;&gt;Primary&lt;/span&gt;
&lt;/div&gt;

&lt;!-- pills outline --&gt;
&lt;div class=&quot;flex items-center justify-center w-1/2&quot;&gt;
  &lt;span class=&quot;badge badge-outline-primary rounded-full&quot;&gt;Primary&lt;/span&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Classic</h5>
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
                            Code</span
                        >
                    </a>
                </div>
                <div class="mb-5">
                    <div class="flex w-full">
                        <div class="flex items-center justify-center w-1/2">
                            <span class="badge bg-primary rounded-none">Primary</span>
                        </div>
                        <div class="flex items-center justify-center w-1/2">
                            <span class="badge badge-outline-primary rounded-none">Primary</span>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code4')">
                    <highlight>
                        <pre>
&lt;!-- badge --&gt;
&lt;div class=&quot;flex items-center justify-center w-1/2&quot;&gt;
  &lt;span class=&quot;badge bg-primary rounded-none&quot;&gt;Primary&lt;/span&gt;
&lt;/div&gt;

&lt;!-- badge outline --&gt;
&lt;div class=&quot;flex items-center justify-center w-1/2&quot;&gt;
  &lt;span class=&quot;badge badge-outline-primary rounded-none&quot;&gt;Primary&lt;/span&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Badges with Heading</h5>
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
                            Code</span
                        >
                    </a>
                </div>
                <div class="mb-5 dark:text-white-dark">
                    <p class="mb-5">Badges scale to match the size of the immediate parent element by using relative font sizing and em units.</p>
                    <div class="space-y-2 prose dark:prose-headings:text-white-dark">
                        <h1>Example heading <span class="badge bg-primary">Primary</span></h1>
                        <h2>Example heading <span class="badge bg-success">Success</span></h2>
                        <h3>Example heading <span class="badge bg-info">Info</span></h3>
                        <h4>Example heading <span class="badge bg-warning">Warning</span></h4>
                        <h5>Example heading <span class="badge bg-danger">Danger</span></h5>
                        <h6>Example heading <span class="badge bg-dark">Dark</span></h6>
                    </div>
                </div>
                <template v-if="codeArr.includes('code5')">
                    <highlight>
                        <pre>
&lt;!-- Badges with Heading --&gt;
&lt;div class=&quot;space-y-2 prose dark:prose-headings:text-white-dark&quot;&gt;
  &lt;h1&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;Primary&lt;/span&gt;&lt;/h1&gt;

  &lt;h2&gt;Example heading &lt;span class=&quot;badge bg-success&quot;&gt;Success&lt;/span&gt;&lt;/h2&gt;

  &lt;h3&gt;Example heading &lt;span class=&quot;badge bg-info&quot;&gt;Info&lt;/span&gt;&lt;/h3&gt;

  &lt;h4&gt;Example heading &lt;span class=&quot;badge bg-warning&quot;&gt;Warning&lt;/span&gt;&lt;/h4&gt;

  &lt;h5&gt;Example heading &lt;span class=&quot;badge bg-danger&quot;&gt;Danger&lt;/span&gt;&lt;/h5&gt;

  &lt;h6&gt;Example heading &lt;span class=&quot;badge bg-dark&quot;&gt;Dark&lt;/span&gt;&lt;/h6&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Custom Badges</h5>
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
                            Code</span
                        >
                    </a>
                </div>
                <div class="mb-5">
                    <div class="flex flex-wrap items-center justify-center gap-3">
                        <button type="button" class="btn btn-primary my-4">
                            <span class="flex items-center">
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
                                    class="w-4.5 h-4.5 ltr:mr-1 rtl:ml-1 shrink-0"
                                >
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                                Facebook</span
                            >
                            <span class="badge absolute ltr:right-0 rtl:left-0 -top-3 bg-danger p-0.5 px-1.5 rounded-full">9</span>
                        </button>
                        <button type="button" class="btn btn-info my-4">
                            <span>Twitter</span><span class="badge absolute ltr:right-0 rtl:left-0 -top-3 bg-danger p-0.5 px-1.5 rounded-full">4</span>
                        </button>
                        <button type="button" class="btn btn-secondary px-5 my-4">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"></circle>
                                    <path
                                        opacity="0.5"
                                        d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    ></path>
                                </svg>
                            </span>
                            <span class="badge absolute ltr:right-0 rtl:left-0 -top-3 bg-danger p-0.5 px-1.5 rounded-full">8</span>
                        </button>
                        <button type="button" class="btn btn-dark my-4">
                            Notifications<span class="badge my-0 bg-white-light text-black ltr:ml-4 rtl:mr-4">4</span>
                        </button>
                        <div class="flex flex-wrap items-center justify-center gap-3">
                            <span class="badge bg-warning p-0 ltr:pr-4 rtl:pl-4 my-4 rounded-full flex items-center text-base">
                                <img src="/assets/images/profile-34.jpeg" alt="" class="w-10 h-10 rounded-full object-cover" /><span class="ltr:ml-2 rtl:mr-2"
                                    >John Doe</span
                                ></span
                            >
                            <span class="badge bg-danger p-0 ltr:pr-4 rtl:pl-4 my-4 rounded-full flex items-center text-base">
                                <img src="/assets/images/profile-34.jpeg" alt="" class="w-10 h-10 rounded-full object-cover" /><span class="ltr:ml-2 rtl:mr-2"
                                    >John Doe</span
                                >
                                <span class="ltr:ml-4 rtl:mr-4 cursor-pointer hover:opacity-90">x</span></span
                            >
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code6')">
                    <highlight>
                        <pre>
&lt;!-- icon with text --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary my-4&quot;&gt;
  &lt;span class=&quot;flex items-center&quot;&gt; &lt;svg&gt; ... &lt;/svg&gt; Facebook&lt;/span&gt;
  &lt;span class=&quot;badge absolute ltr:right-0 rtl:left-0 -top-3 bg-danger p-0.5 px-1.5 rounded-full&quot;&gt;9&lt;/span&gt;
&lt;/button&gt;

&lt;!-- text --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info my-4&quot;&gt;&lt;span&gt;Twitter&lt;/span&gt;&lt;span class=&quot;badge absolute ltr:right-0 rtl:left-0 -top-3 bg-danger p-0.5 px-1.5 rounded-full&quot;&gt;4&lt;/span&gt;&lt;/button&gt;

&lt;!-- icon --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary px-5 my-4&quot;&gt;
  &lt;span&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/span&gt;
  &lt;span class=&quot;badge absolute ltr:right-0 rtl:left-0 -top-3 bg-danger p-0.5 px-1.5 rounded-full&quot;&gt;8&lt;/span&gt;
&lt;/button&gt;

&lt;!-- square --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark my-4&quot;&gt;Notifications&lt;span class=&quot;badge my-0 bg-white-light text-black ltr:ml-4 rtl:mr-4&quot;&gt;4&lt;/span&gt;&lt;/button&gt;

&lt;!-- rounded --&gt;
&lt;span class=&quot;badge bg-warning p-0 ltr:pr-4 rtl:pl-4 my-4 rounded-full flex items-center text-base&quot;
  &gt;&lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-10 h-10 rounded-full object-cover&quot; /&gt;&lt;span class=&quot;ltr:ml-2 rtl:mr-2&quot;&gt;John Doe&lt;/span&gt;&lt;/span
&gt;

&lt;!-- rounded with icon --&gt;
&lt;span class=&quot;badge bg-danger p-0 ltr:pr-4 rtl:pl-4 my-4 rounded-full flex items-center text-base&quot;
  &gt;&lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-10 h-10 rounded-full object-cover&quot; /&gt;&lt;span class=&quot;ltr:ml-2 rtl:mr-2&quot;&gt;John Doe&lt;/span
  &gt;&lt;span class=&quot;ltr:ml-4 rtl:mr-4 cursor-pointer hover:opacity-90&quot;&gt;x&lt;/span&gt;&lt;/span
&gt;
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
    useMeta({ title: 'Badges' });

    const { codeArr, toggleCode } = codePreview();
</script>
