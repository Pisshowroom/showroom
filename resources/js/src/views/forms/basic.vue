<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Forms</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Basic</span>
            </li>
        </ul>
        <div class="pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Basic -->
            <!-- type=text -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input Text</h5>
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
                    <form>
                        <input type="text" placeholder="Some Text..." class="form-input" required />
                        <button type="submit" class="btn btn-primary mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- input text --&gt;
&lt;form&gt;
    &lt;input type=&quot;text&quot; placeholder=&quot;Some Text...&quot; class=&quot;form-input&quot; required /&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- type=password -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input Password</h5>
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
                    <form>
                        <input type="password" placeholder="Enter Password" class="form-input" required />
                        <button type="submit" class="btn btn-primary mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- input password --&gt;
&lt;form&gt;
    &lt;input type=&quot;password&quot; placeholder=&quot;Enter Password&quot; class=&quot;form-input&quot; required /&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- type=email -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input Email</h5>
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
                    <form>
                        <input type="email" placeholder="email@mail.com" class="form-input" required />
                        <button type="submit" class="btn btn-primary mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- input email --&gt;
&lt;form&gt;
    &lt;input type=&quot;email&quot; placeholder=&quot;email@mail.com&quot; class=&quot;form-input&quot; required /&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- type=url -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input Url</h5>
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
                    <form>
                        <input type="url" placeholder="https://dummyurl.com" class="form-input" required />
                        <button type="submit" class="btn btn-primary mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code4')">
                    <highlight>
                        <pre>
&lt;!-- input url --&gt;
&lt;form&gt;
    &lt;input type=&quot;url&quot; placeholder=&quot;https://dummyurl.com&quot; class=&quot;form-input&quot; required /&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- type=tel -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input Telephone</h5>
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
                    <form>
                        <input type="tel" placeholder="6-(666)-111-7777" class="form-input" required />
                        <button type="submit" class="btn btn-primary mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code5')">
                    <highlight>
                        <pre>
&lt;!-- input telephone --&gt;
&lt;form&gt;
    &lt;input type=&quot;tel&quot; placeholder=&quot;6-(666)-111-7777&quot; class=&quot;form-input&quot; required /&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- type=search -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input Search</h5>
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
                <div class="mb-5">
                    <form>
                        <input type="search" placeholder="Search..." class="form-input" required />
                        <button type="button" class="btn btn-primary mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code6')">
                    <highlight>
                        <pre>
&lt;!-- input search --&gt;
&lt;form&gt;
    &lt;input type=&quot;search&quot; placeholder=&quot;Search...&quot; class=&quot;form-input&quot; required /&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- type=range -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input Range</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code7')">
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
                    <form>
                        <input type="range" class="w-full py-2.5" min="0" max="100" />
                    </form>
                </div>
                <template v-if="codeArr.includes('code7')">
                    <highlight>
                        <pre>
&lt;!-- input range --&gt;
&lt;form&gt;
    &lt;input type=&quot;range&quot; class=&quot;w-full py-2.5&quot; min=&quot;0&quot; max=&quot;100&quot; /&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- input with label -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input With Label</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code8')">
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
                    <form>
                        <label for="fullname">Full Name</label>
                        <input id="fullname" type="text" placeholder="Enter Full Name" value="Alan Green" class="form-input" />
                    </form>
                </div>
                <template v-if="codeArr.includes('code8')">
                    <highlight>
                        <pre>
&lt;!-- input with label --&gt;
&lt;form&gt;
    &lt;label for=&quot;fullname&quot;&gt;Full Name&lt;/label&gt;
    &lt;input id=&quot;fullname&quot; type=&quot;text&quot;  placeholder=&quot;Enter Full Name&quot; value=&quot;Alan Green&quot; class=&quot;form-input&quot; /&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- form controls -->
            <div class="panel lg:row-span-3">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Form controls</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code9')">
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
                    <form class="space-y-5">
                        <div>
                            <label for="ctnEmail">Email address</label>
                            <input id="ctnEmail" type="email" placeholder="name@example.com" class="form-input" required />
                        </div>
                        <div>
                            <label for="ctnSelect1">Example select</label>
                            <select id="ctnSelect1" class="form-select text-white-dark" required>
                                <option>Open this select menu</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                        </div>
                        <div>
                            <label for="ctnSelect2">Example multiple select</label>
                            <select id="ctnSelect2" multiple class="form-multiselect text-white-dark" required>
                                <option>Open this select menu</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                        </div>
                        <div>
                            <label for="ctnTextarea">Example textarea</label>
                            <textarea id="ctnTextarea" rows="3" class="form-textarea" placeholder="Enter Address" required></textarea>
                        </div>
                        <div>
                            <label for="ctnFile">Example file input</label>
                            <input
                                id="ctnFile"
                                type="file"
                                class="form-input file:py-2 file:px-4 file:border-0 file:font-semibold p-0 file:bg-primary/90 ltr:file:mr-5 rtl:file-ml-5 file:text-white file:hover:bg-primary"
                                required
                            />
                        </div>
                        <button type="submit" class="btn btn-primary !mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code9')">
                    <highlight>
                        <pre>
&lt;!-- form controls --&gt;
&lt;form class=&quot;space-y-5&quot;&gt;
    &lt;div&gt;
        &lt;label for=&quot;ctnEmail&quot;&gt;Email address&lt;/label&gt;
        &lt;input id=&quot;ctnEmail&quot; type=&quot;email&quot; placeholder=&quot;name@example.com&quot; class=&quot;form-input&quot; required /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for=&quot;ctnSelect1&quot;&gt;Example select&lt;/label&gt;
        &lt;select id=&quot;ctnSelect1&quot; class=&quot;form-select text-white-dark&quot; required&gt;
            &lt;option&gt;Open this select menu&lt;/option&gt;
            &lt;option&gt;One&lt;/option&gt;
            &lt;option&gt;Two&lt;/option&gt;
            &lt;option&gt;Three&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for=&quot;ctnSelect2&quot;&gt;Example multiple select&lt;/label&gt;
        &lt;select id=&quot;ctnSelect2&quot; multiple=&quot;multiple&quot; class=&quot;form-multiselect text-white-dark&quot; required&gt;
            &lt;option&gt;Open this select menu&lt;/option&gt;
            &lt;option&gt;One&lt;/option&gt;
            &lt;option&gt;Two&lt;/option&gt;
            &lt;option&gt;Three&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for=&quot;ctnTextarea&quot;&gt;Example textarea&lt;/label&gt;
        &lt;textarea id=&quot;ctnTextarea&quot; rows=&quot;3&quot; class=&quot;form-textarea&quot; placeholder=&quot;Enter Textarea&quot; required&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for=&quot;ctnFile&quot;&gt;Example file input&lt;/label&gt;
        &lt;input id=&quot;ctnFile&quot; type=&quot;file&quot; class=&quot;form-input file:py-2 file:px-4 file:border-0 file:font-semibold p-0 file:bg-primary/90 ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-primary&quot; required /&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- Form Grid Layouts -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Form grid</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code10')">
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
                    <form>
                        <div class="grid grid-cols-1 sm:flex justify-between gap-5">
                            <input type="text" placeholder="Enter First Name" class="form-input" />
                            <input type="text" placeholder="Enter Last Name" class="form-input" />
                        </div>
                        <button type="button" class="btn btn-primary mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code10')">
                    <highlight>
                        <pre>
&lt;!-- form grid --&gt;
&lt;form&gt;
    &lt;div class=&quot;grid grid-cols-1 sm:flex justify-between gap-5&quot;&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Enter First Name&quot; class=&quot;form-input&quot; /&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Enter Last Name&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Form row</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code11')">
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
                    <form>
                        <div class="grid grid-cols-1 sm:flex justify-between gap-5">
                            <input type="text" placeholder="Enter First Name" class="form-input" />
                            <input type="text" placeholder="Enter Last Name" class="form-input" />
                        </div>
                        <button type="button" class="btn btn-primary mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code11')">
                    <highlight>
                        <pre>
&lt;!-- form row --&gt;
&lt;form&gt;
    &lt;div class=&quot;grid grid-cols-1 sm:flex justify-between gap-5&quot;&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Enter First Name&quot; class=&quot;form-input&quot; /&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Enter Last Name&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Form groups</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code12')">
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
                    <form class="space-y-5">
                        <div>
                            <label for="groupFname">First Name</label>
                            <input id="groupFname" type="text" placeholder="Enter First Name" class="form-input" />
                        </div>
                        <div>
                            <label for="groupLname">Last Name</label>
                            <input id="groupLname" type="text" placeholder="Enter Last Name" class="form-input" />
                        </div>
                        <button type="button" class="btn btn-primary !mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code12')">
                    <highlight>
                        <pre>
&lt;!-- form groups --&gt;
&lt;form class=&quot;space-y-5&quot;&gt;
    &lt;div&gt;
        &lt;label for=&quot;groupFname&quot;&gt;Enter First Name&lt;/label&gt;
        &lt;input id=&quot;groupFname&quot; type=&quot;text&quot; placeholder=&quot;Enter First Name&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for=&quot;groupLname&quot;&gt;Enter Last Name&lt;/label&gt;
        &lt;input id=&quot;groupLname&quot; type=&quot;text&quot; placeholder=&quot;Enter Last Name&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel lg:col-span-2">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Column sizing</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code13')">
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
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-2">
                            <input type="text" placeholder="Enter City" class="form-input lg:col-span-2" />
                            <input type="text" placeholder="Enter State" class="form-input" />
                            <input type="text" placeholder="Enter Zip" class="form-input" />
                        </div>
                        <button type="button" class="btn btn-primary mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code13')">
                    <highlight>
                        <pre>
&lt;!-- column sizing --&gt;
&lt;form&gt;
    &lt;div class=&quot;grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-2&quot;&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Enter City&quot; class=&quot;form-input lg:col-span-2&quot; /&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Enter State&quot; class=&quot;form-input&quot; /&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Enter Zip&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- Helper Text -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input with help text ( Default Left)</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code14')">
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
                    <form>
                        <div>
                            <input type="text" placeholder="Enter First Name" class="form-input" />
                            <span class="text-white-dark text-xs">I am the helper text.</span>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code14')">
                    <highlight>
                        <pre>
&lt;!-- input with help text --&gt;
&lt;form&gt;
    &lt;div&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Enter First Name&quot; class=&quot;form-input&quot; /&gt;
        &lt;span class=&quot;text-white-dark text-xs&quot;&gt;I am the helper text.&lt;/span&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input with badge help text (Default Left)</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code15')">
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
                    <form>
                        <div>
                            <input type="text" placeholder="Enter First Name" class="form-input mb-2" />
                            <span class="badge bg-primary text-xs hover:top-0">I am the helper text.</span>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code15')">
                    <highlight>
                        <pre>
&lt;!-- input with badge help text --&gt;
&lt;form&gt;
    &lt;div&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Enter First Name&quot; class=&quot;form-input mb-2&quot; /&gt;
        &lt;span class=&quot;badge bg-primary text-xs hover:top-0&quot;&gt;I am the helper text.&lt;/span&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input with block badge help text (Default Left)</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code16')">
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
                    <form>
                        <div>
                            <input type="text" placeholder="Enter First Name" class="form-input mb-2" />
                            <span class="badge bg-primary block text-xs hover:top-0">I am the helper text.</span>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code16')">
                    <highlight>
                        <pre>
&lt;!-- input with block badge help text --&gt;
&lt;form&gt;
    &lt;div&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Enter First Name&quot; class=&quot;form-input mb-2&quot; /&gt;
        &lt;span class=&quot;badge bg-primary block text-xs hover:top-0&quot;&gt;I am the helper text.&lt;/span&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Inline Help text</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code17')">
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
                    <form>
                        <div>
                            <label for="Txtpassword">Password</label>
                            <input id="Txtpassword" type="password" placeholder="Enter Password" class="form-input w-3/5" />
                            <span class="text-xs text-white-dark ltr:pl-2 rtl:pr-2">Min 8-20 char</span>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code17')">
                    <highlight>
                        <pre>
&lt;!-- inline Help text --&gt;
&lt;form&gt;
    &lt;div&gt;
        &lt;label for=&quot;Txtpassword&quot;&gt;Password&lt;/label&gt;
        &lt;input id=&quot;Txtpassword&quot; type=&quot;password&quot; placeholder=&quot;Enter Password&quot; class=&quot;form-input w-3/5&quot; /&gt;
        &lt;span class=&quot;text-xs text-white-dark ltr:pl-2 rtl:pr-2&quot;&gt;Min 8-20 char&lt;/span&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- Sizing -->
            <div class="panel lg:col-span-2">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input Fields</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code18')">
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
                    <form>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label for="inputLarge">Large Input</label>
                                <input id="inputLarge" type="text" placeholder="Large Input" class="form-input form-input-lg" />
                            </div>
                            <div>
                                <label for="inputDefault">Default Input</label>
                                <input id="inputDefault" type="text" placeholder="Default Input" class="form-input" />
                            </div>
                            <div>
                                <label for="inputSmall">Small Input</label>
                                <input id="inputSmall" type="text" placeholder="Small Input" class="form-input form-input-sm" />
                            </div>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code18')">
                    <highlight>
                        <pre>
&lt;!-- input fields --&gt;
&lt;form&gt;
    &lt;div class=&quot;grid grid-cols-1 sm:grid-cols-3 gap-4&quot;&gt;
        &lt;div&gt;
            &lt;label for=&quot;inputLarge&quot;&gt;Large Input&lt;/label&gt;
            &lt;input id=&quot;inputLarge&quot; type=&quot;text&quot; placeholder=&quot;Large Input&quot; class=&quot;form-input form-input-lg&quot; /&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for=&quot;inputDefault&quot;&gt;Default Input&lt;/label&gt;
            &lt;input id=&quot;inputDefault&quot; type=&quot;text&quot; placeholder=&quot;Default Input&quot; class=&quot;form-input&quot; /&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for=&quot;inputSmall&quot;&gt;Small Input&lt;/label&gt;
            &lt;input id=&quot;inputSmall&quot; type=&quot;text&quot; placeholder=&quot;Small Input&quot; class=&quot;form-input form-input-sm&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel lg:col-span-2">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Select Field</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code19')">
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
                    <form>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <select class="form-select form-select-lg text-white-dark">
                                    <option>Open this select menu</option>
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </select>
                            </div>
                            <div>
                                <select class="form-select text-white-dark">
                                    <option>Open this select menu</option>
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </select>
                            </div>
                            <div>
                                <select class="form-select form-select-sm text-white-dark">
                                    <option>Open this select menu</option>
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code19')">
                    <highlight>
                        <pre>
&lt;!-- select field --&gt;
&lt;form&gt;
    &lt;div class=&quot;grid grid-cols-1 sm:grid-cols-3 gap-4&quot;&gt;
        &lt;div&gt;
            &lt;select class=&quot;form-select form-select-lg text-white-dark&quot;&gt;
                &lt;option&gt;Open this select menu&lt;/option&gt;
                &lt;option&gt;One&lt;/option&gt;
                &lt;option&gt;Two&lt;/option&gt;
                &lt;option&gt;Three&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;select class=&quot;form-select text-white-dark&quot;&gt;
                &lt;option&gt;Open this select menu&lt;/option&gt;
                &lt;option&gt;One&lt;/option&gt;
                &lt;option&gt;Two&lt;/option&gt;
                &lt;option&gt;Three&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;select class=&quot;form-select form-select-sm text-white-dark&quot;&gt;
                &lt;option&gt;Open this select menu&lt;/option&gt;
                &lt;option&gt;One&lt;/option&gt;
                &lt;option&gt;Two&lt;/option&gt;
                &lt;option&gt;Three&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Horizontal form label sizing</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code20')">
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
                    <form class="space-y-5">
                        <div class="sm:flex justify-between items-center gap-5 md:gap-20">
                            <label for="hrLargeinput">Email</label>
                            <input id="hrLargeinput" type="email" placeholder="name@example.com" class="form-input py-2.5 text-base" />
                        </div>
                        <div class="sm:flex justify-between items-center gap-5 md:gap-20">
                            <label for="hrDefaultinput">Email</label>
                            <input id="hrDefaultinput" type="email" placeholder="name@example.com" class="form-input" />
                        </div>
                        <div class="sm:flex justify-between items-center gap-5 md:gap-20">
                            <label for="hrSmallinput">Email</label>
                            <input id="hrSmallinput" type="email" placeholder="name@example.com" class="form-input py-1.5 text-xs" />
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code20')">
                    <highlight>
                        <pre>
&lt;!-- horizontal form label sizing --&gt;
&lt;form class=&quot;space-y-5&quot;&gt;
    &lt;div class=&quot;sm:flex justify-between items-center gap-5 md:gap-20&quot;&gt;
        &lt;label for=&quot;hrLargeinput&quot;&gt;Email&lt;/label&gt;
        &lt;input id=&quot;hrLargeinput&quot; type=&quot;email&quot; placeholder=&quot;name@example.com&quot; class=&quot;form-input py-2.5 text-base&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sm:flex justify-between items-center gap-5 md:gap-20&quot;&gt;
        &lt;label for=&quot;hrDefaultinput&quot;&gt;Email&lt;/label&gt;
        &lt;input id=&quot;hrDefaultinput&quot; type=&quot;email&quot; placeholder=&quot;name@example.com&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sm:flex justify-between items-center gap-5 md:gap-20&quot;&gt;
        &lt;label for=&quot;hrSmallinput&quot;&gt;Email&lt;/label&gt;
        &lt;input for=&quot;hrSmallinput&quot; type=&quot;email&quot; placeholder=&quot;name@example.com&quot; class=&quot;form-input py-1.5 text-xs&quot; /&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Readonly -->
            <div class="panel lg:row-start-[14]">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Input Readonly</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code21')">
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
                    <form>
                        <div>
                            <input type="text" placeholder="Readonly input here…" class="form-input disabled:pointer-events-none" readonly />
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code21')">
                    <highlight>
                        <pre>
&lt;!-- input readonly --&gt;
&lt;form&gt;
    &lt;div&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Readonly input here&hellip;&quot; class=&quot;form-input disabled:pointer-events-none&quot; readonly /&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Disabled -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Disabled Fields</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code22')">
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
                    <form class="space-y-5">
                        <div>
                            <label for="disInput" class="text-white-dark">Disabled input</label>
                            <input
                                id="disInput"
                                type="text"
                                placeholder="Readonly input here…"
                                class="form-input disabled:pointer-events-none disabled:bg-[#eee] dark:disabled:bg-[#1b2e4b] cursor-not-allowed"
                                disabled
                            />
                        </div>
                        <div>
                            <label for="disSelect" class="text-white-dark">Disabled select menu</label>
                            <select
                                id="disSelect"
                                class="form-select disabled:pointer-events-none disabled:bg-[#eee] dark:disabled:bg-[#1b2e4b] text-white-dark"
                                disabled
                            >
                                <option>Open this select menu</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                        </div>
                        <div>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox" disabled />
                                <span class="text-white-dark">Can't check this</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary !mt-6 disabled:pointer-events-none disabled:opacity-60" disabled>Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code22')">
                    <highlight>
                        <pre>
&lt;!-- disabled fileds --&gt;
&lt;form class=&quot;space-y-5&quot;&gt;
    &lt;div&gt;
        &lt;label for="disInput" class=&quot;text-white-dark&quot;&gt;Disabled input&lt;/label&gt;
        &lt;input id="disInput" type=&quot;text&quot; placeholder=&quot;Readonly input here&hellip;&quot; class=&quot;form-input disabled:pointer-events-none disabled:bg-[#eee] dark:disabled:bg-[#1b2e4b] cursor-not-allowed&quot; disabled /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for="disSelect" class=&quot;text-white-dark&quot;&gt;Disabled select menu&lt;/label&gt;
        &lt;select id="disSelect" class=&quot;form-select disabled:pointer-events-none disabled:bg-[#eee] dark:disabled:bg-[#1b2e4b] text-white-dark&quot; disabled&gt;
            &lt;option&gt;Open this select menu&lt;/option&gt;
            &lt;option&gt;One&lt;/option&gt;
            &lt;option&gt;Two&lt;/option&gt;
            &lt;option&gt;Three&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label class=&quot;flex items-center&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; disabled /&gt;
            &lt;span class=&quot;text-white-dark"&quot;&gt;Can't check this&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6 disabled:pointer-events-none disabled:opacity-60&quot; disabled&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Custom -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Checkboxes</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code23')">
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
                    <form>
                        <div>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox" checked />
                                <span class="text-white-dark">Checkbox</span>
                            </label>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code23')">
                    <highlight>
                        <pre>
&lt;!-- checkboxes --&gt;
&lt;form&gt;
    &lt;div&gt;
        &lt;label class=&quot;flex items-center cursor-pointer&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; checked /&gt;
            &lt;span class=&quot; text-white-dark"&quot;&gt;Checkbox&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Radio</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code24')">
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
                    <form class="space-y-5">
                        <div>
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="custom_radio2" class="form-radio" checked />
                                <span class="text-white-dark">Toggle this custom radio</span>
                            </label>
                        </div>
                        <div>
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="custom_radio2" class="form-radio" />
                                <span class="text-white-dark">Or toggle this other custom radio</span>
                            </label>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code24')">
                    <highlight>
                        <pre>
&lt;!-- radio --&gt;
&lt;form class=&quot;space-y-5&quot;&gt;
    &lt;div&gt;
        &lt;label class=&quot;flex items-center cursor-pointer&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;custom_radio2&quot; class=&quot;form-radio&quot; checked /&gt;
            &lt;span class=&quot;text-white-dark"&quot;&gt;Toggle this custom radio&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label class=&quot;flex items-center cursor-pointer&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;custom_radio2&quot; class=&quot;form-radio&quot; /&gt;
            &lt;span class=&quot;text-white-dark"&quot;&gt;Or toggle this other custom radio&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Disabled</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code25')">
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
                    <form class="space-y-5">
                        <div>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox" disabled />
                                <span class="text-white-dark">Check this custom checkbox</span>
                            </label>
                        </div>
                        <div>
                            <label class="flex items-center">
                                <input type="radio" class="form-radio" disabled />
                                <span class="text-white-dark">Toggle this custom radio</span>
                            </label>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code25')">
                    <highlight>
                        <pre>
&lt;!-- disabled --&gt;
&lt;form class=&quot;space-y-5&quot;&gt;
    &lt;div&gt;
        &lt;label class=&quot;flex items-center&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; disabled /&gt;
            &lt;span class=&quot; text-white-dark"&quot;&gt;Check this custom checkbox&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label class=&quot;flex items-center&quot;&gt;
            &lt;input type=&quot;radio&quot; class=&quot;form-radio&quot; disabled /&gt;
            &lt;span class=&quot;text-white-dark"&quot;&gt;Toggle this custom radio&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Select menu</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code26')">
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
                    <form>
                        <div>
                            <select class="form-select text-white-dark">
                                <option>Open this select menu</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code26')">
                    <highlight>
                        <pre>
&lt;!-- select menu --&gt;
&lt;form&gt;
    &lt;div&gt;
        &lt;select class=&quot;form-select text-white-dark&quot;&gt;
            &lt;option&gt;Open this select menu&lt;/option&gt;
            &lt;option&gt;One&lt;/option&gt;
            &lt;option&gt;Two&lt;/option&gt;
            &lt;option&gt;Three&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Multiselect</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code28')">
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
                    <form>
                        <div>
                            <select size="4" multiple class="form-multiselect text-white-dark !bg-none">
                                <option>Open this select menu</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                                <option>Four</option>
                                <option>Five</option>
                            </select>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code28')">
                    <highlight>
                        <pre>
&lt;!-- multiselect --&gt;
&lt;form&gt;
    &lt;div&gt;
        &lt;select size=&quot;4&quot; class=&quot;form-multiselect text-white-dark !bg-none&quot;&gt;
            &lt;option&gt;Open this select menu&lt;/option&gt;
            &lt;option&gt;One&lt;/option&gt;
            &lt;option&gt;Two&lt;/option&gt;
            &lt;option&gt;Three&lt;/option&gt;
            &lt;option&gt;Four&lt;/option&gt;
            &lt;option&gt;Five&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
&lt;/form&gt;
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
    useMeta({ title: 'Forms' });

    const { codeArr, toggleCode } = codePreview();
</script>
