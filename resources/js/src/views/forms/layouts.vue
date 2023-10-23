<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Forms</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Layouts</span>
            </li>
        </ul>
        <div class="pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Stack -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Stack Forms</h5>
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
                    <form class="space-y-5">
                        <div>
                            <input type="email" placeholder="Enter Email" class="form-input" />
                            <span class="text-white-dark text-[11px] inline-block mt-1">We'll never share your email with anyone else.</span>
                        </div>
                        <div>
                            <input type="password" placeholder="Enter Password" class="form-input" />
                        </div>
                        <div>
                            <label class="inline-flex items-center mt-1 cursor-pointer">
                                <input type="checkbox" class="form-checkbox" />
                                <span class="text-white-dark">Subscribe to weekly newsletter</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary !mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- stack forms --&gt;
&lt;form class=&quot;space-y-5&quot;&gt;
    &lt;div&gt;
        &lt;input type=&quot;email&quot; placeholder=&quot;Enter Email&quot; class=&quot;form-input&quot; /&gt;
        &lt;span class=&quot;text-white-dark text-[11px] inline-block mt-1&quot;&gt;We'll never share your email with anyone else.&lt;/span&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;password&quot; placeholder=&quot;Enter Password&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label class=&quot;inline-flex items-center mt-1 cursor-pointer&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; /&gt;
            &lt;span class=&quot;text-white-dark"&quot;&gt;Subscribe to weekly newsletter&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Horizontal -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Horizontal form</h5>
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
                    <form class="space-y-5">
                        <div class="flex sm:flex-row flex-col">
                            <label for="horizontalEmail" class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Email</label>
                            <input id="horizontalEmail" type="email" placeholder="Enter Email" class="form-input flex-1" />
                        </div>
                        <div class="flex sm:flex-row flex-col">
                            <label for="horizontalPassword" class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Password</label>
                            <input id="horizontalPassword" type="password" placeholder="Enter Password" class="form-input flex-1" />
                        </div>
                        <div class="flex sm:flex-row flex-col">
                            <label class="sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Choose Segements</label>
                            <div class="flex-1">
                                <div class="mb-2">
                                    <label class="inline-flex mt-1 cursor-pointer">
                                        <input type="radio" name="segements" class="form-radio" />
                                        <span class="text-white-dark">Segements 1</span>
                                    </label>
                                </div>
                                <div class="mb-2">
                                    <label class="inline-flex mt-1 cursor-pointer">
                                        <input type="radio" name="segements" class="form-radio" />
                                        <span class="text-white-dark">Segements 2</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex mt-1">
                                        <input type="radio" name="segements" class="form-radio" disabled />
                                        <span class="text-white-dark">Segements 3 ( disabled )</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="flex sm:flex-row flex-col">
                            <label class="font-semibold sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Apply</label>
                            <label class="inline-flex mb-0 cursor-pointer">
                                <input type="checkbox" class="form-checkbox" />
                                <span class="text-white-dark">Terms Conditions</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary !mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- horizontal form --&gt;
&lt;form class=&quot;space-y-5&quot;&gt;
    &lt;div class=&quot;flex sm:flex-row flex-col&quot;&gt;
        &lt;label for=&quot;horizontalEmail&quot; class=&quot;mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2&quot;&gt;Email&lt;/label&gt;
        &lt;input id=&quot;horizontalEmail&quot; type=&quot;email&quot; placeholder=&quot;Enter Email&quot; class=&quot;form-input flex-1&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex sm:flex-row flex-col&quot;&gt;
        &lt;label for=&quot;horizontalPassword&quot; class=&quot;mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2&quot;&gt;Password&lt;/label&gt;
        &lt;input id=&quot;horizontalPassword&quot; type=&quot;password&quot; placeholder=&quot;Enter Password&quot; class=&quot;form-input flex-1&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex sm:flex-row flex-col&quot;&gt;
        &lt;label class=&quot;sm:w-1/4 sm:ltr:mr-2 rtl:ml-2&quot;&gt;Choose Segements&lt;/label&gt;
        &lt;div class=&quot;flex-1&quot;&gt;
            &lt;div class=&quot;mb-2&quot;&gt;
                &lt;label class=&quot;inline-flex mt-1 cursor-pointer&quot;&gt;
                    &lt;input type=&quot;radio&quot; name=&quot;segements&quot; class=&quot;form-radio&quot; /&gt;
                    &lt;span class=&quot;text-white-dark"&quot;&gt;Segements 1&lt;/span&gt;
                &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;mb-2&quot;&gt;
                &lt;label class=&quot;inline-flex mt-1 cursor-pointer&quot;&gt;
                    &lt;input type=&quot;radio&quot; name=&quot;segements&quot; class=&quot;form-radio&quot; /&gt;
                    &lt;span class=&quot;text-white-dark"&quot;&gt;Segements 2&lt;/span&gt;
                &lt;/label&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;label class=&quot;inline-flex mt-1&quot;&gt;
                    &lt;input type=&quot;radio&quot; name=&quot;segements&quot; class=&quot;form-radio&quot; disabled /&gt;
                    &lt;span class=&quot;text-white-dark"&quot;&gt;Segements 3 ( disabled )&lt;/span&gt;
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex sm:flex-row flex-col&quot;&gt;
        &lt;label class=&quot;font-semibold text-white-dark sm:w-1/4 sm:ltr:mr-2 rtl:ml-2&quot;&gt;Apply&lt;/label&gt;
        &lt;label class=&quot;inline-flex mb-0 cursor-pointer&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; /&gt;
            &lt;span class=&quot;text-white-dark" relative&quot;&gt;Terms Conditions&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Registration -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Registration Forms</h5>
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
                    <form class="space-y-5">
                        <div>
                            <input type="email" placeholder="Enter Email Address *" class="form-input" />
                        </div>
                        <div>
                            <input type="password" placeholder="Enter Password *" class="form-input" />
                        </div>
                        <div>
                            <input type="password" placeholder="Enter Confirm Password *" class="form-input" />
                        </div>
                        <div class="!mt-2">
                            <span class="text-white-dark text-[11px] inline-block">*Required Fields</span>
                        </div>
                        <div>
                            <label class="inline-flex cursor-pointer">
                                <input type="checkbox" class="form-checkbox" />
                                <span class="text-white-dark">Subscribe to weekly newsletter</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary !mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- registration form --&gt;
&lt;form class=&quot;space-y-5&quot;&gt;
    &lt;div&gt;
        &lt;input type=&quot;email&quot; placeholder=&quot;Enter Email Address *&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;password&quot; placeholder=&quot;Enter Password *&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;password&quot; placeholder=&quot;Enter Confirm Password *&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;!mt-2&quot;&gt;
        &lt;span class=&quot;text-white-dark text-[11px] inline-block&quot;&gt;*Required Fields&lt;/span&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label class=&quot;inline-flex cursor-pointer&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; /&gt;
            &lt;span class=&quot;text-white-dark"&quot;&gt;Subscribe to weekly newsletter&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Login -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Login Forms</h5>
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
                    <form class="space-y-5">
                        <div>
                            <input type="text" placeholder="Enter Full Name *" class="form-input" />
                        </div>
                        <div>
                            <input type="email" placeholder="Enter Email Address *" class="form-input" />
                        </div>
                        <div>
                            <input type="password" placeholder="Enter Password *" class="form-input" />
                        </div>
                        <div class="!mt-2">
                            <span class="text-white-dark text-[11px] inline-block">*Required Fields</span>
                        </div>
                        <button type="submit" class="btn btn-primary !mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code4')">
                    <highlight>
                        <pre>
&lt;!-- login form --&gt;
&lt;form class=&quot;space-y-5&quot;&gt;
    &lt;div&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Enter Full Name *&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;email&quot; placeholder=&quot;Enter Email address *&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;password&quot; placeholder=&quot;Enter Password *&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;!mt-2&quot;&gt;
        &lt;span class=&quot;text-white-dark text-[11px] inline-block&quot;&gt;*Required Fields&lt;/span&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Grid -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Forms Grid</h5>
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
                    <form class="space-y-5">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="gridEmail">Email</label>
                                <input id="gridEmail" type="email" placeholder="Enter Email" class="form-input" />
                            </div>
                            <div>
                                <label for="gridPassword">Password</label>
                                <input id="gridPassword" type="Password" placeholder="Enter Password" class="form-input" />
                            </div>
                        </div>
                        <div>
                            <label for="gridAddress1">Address</label>
                            <input id="gridAddress1" type="text" placeholder="Enter Address" value="1234 Main St" class="form-input" />
                        </div>
                        <div>
                            <label for="gridAddress2">Address2</label>
                            <input id="gridAddress2" type="text" placeholder="Enter Address2" value="Apartment, studio, or floor" class="form-input" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            <div class="md:col-span-2">
                                <label for="gridCity">City</label>
                                <input id="gridCity" type="text" placeholder="Enter City" class="form-input" />
                            </div>
                            <div>
                                <label for="gridState">State</label>
                                <select id="gridState" class="form-select text-white-dark">
                                    <option>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div>
                                <label for="gridZip">Zip</label>
                                <input id="gridZip" type="text" placeholder="Enter Zip" class="form-input" />
                            </div>
                        </div>
                        <div>
                            <label class="flex items-center mt-1 cursor-pointer">
                                <input type="checkbox" class="form-checkbox" />
                                <span class="text-white-dark">Check me out</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary !mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code5')">
                    <highlight>
                        <pre>
&lt;!-- forms grid --&gt;
&lt;form class=&quot;space-y-5&quot;&gt;
    &lt;div class=&quot;grid grid-cols-1 sm:grid-cols-2 gap-4&quot;&gt;
        &lt;div&gt;
            &lt;label for=&quot;gridEmail&quot;&gt;Email&lt;/label&gt;
            &lt;input id=&quot;gridEmail&quot; type=&quot;email&quot; placeholder=&quot;Enter Email&quot; class=&quot;form-input&quot; /&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for=&quot;gridPassword&quot;&gt;Password&lt;/label&gt;
            &lt;input id=&quot;gridPassword&quot; type=&quot;Password&quot; placeholder=&quot;Enter Password&quot; class=&quot;form-input&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for=&quot;gridAddress1&quot;&gt;Address&lt;/label&gt;
        &lt;input id=&quot;gridAddress1&quot; type=&quot;text&quot; placeholder=&quot;Enter Address&quot; value=&quot;1234 Main St&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for=&quot;gridAddress2&quot;&gt;Address2&lt;/label&gt;
        &lt;input id=&quot;gridAddress2&quot; type=&quot;text&quot; placeholder=&quot;Enter Address2&quot; value=&quot;Apartment, studio, or floor&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4&quot;&gt;
        &lt;div class=&quot;md:col-span-2&quot;&gt;
            &lt;label for=&quot;gridCity&quot;&gt;City&lt;/label&gt;
            &lt;input id=&quot;gridCity&quot; type=&quot;text&quot; placeholder=&quot;Enter City&quot; class=&quot;form-input&quot; /&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for=&quot;gridState&quot;&gt;State&lt;/label&gt;
            &lt;select id=&quot;gridState&quot; class=&quot;form-select text-white-dark&quot;&gt;
                &lt;option&gt;Choose...&lt;/option&gt;
                &lt;option&gt;...&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for=&quot;gridZip&quot;&gt;Zip&lt;/label&gt;
            &lt;input id=&quot;gridZip&quot; type=&quot;text&quot; placeholder=&quot;Enter Zip&quot; class=&quot;form-input&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label class=&quot;flex items-center mt-1 cursor-pointer&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; /&gt;
            &lt;span class=&quot;text-white-dark"&quot;&gt;Check me out&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Inline -->
            <div class="panel lg:col-span-2">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Inline Forms</h5>
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
                        <div class="flex flex-col md:flex-row gap-4 items-center max-w-[900px] mx-auto">
                            <input type="email" placeholder="Jane Doe" class="form-input flex-1" />
                            <div class="flex flex-1">
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
                                    @
                                </div>
                                <input type="text" placeholder="Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                            </div>
                            <div>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox" />
                                    <span class="text-white-dark">Remember me</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary py-2.5">Submit</button>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code6')">
                    <highlight>
                        <pre>
&lt;!-- inline form --&gt;
&lt;form&gt;
    &lt;div class=&quot;flex flex-col md:flex-row gap-4 items-center max-w-[900px] mx-auto&quot;&gt;
        &lt;input type=&quot;email&quot; placeholder=&quot;Jane Doe&quot; class=&quot;form-input flex-1&quot; /&gt;
        &lt;div class=&quot;flex flex-1&quot;&gt;
            &lt;div class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;&gt;@&lt;/div&gt;
            &lt;input type=&quot;text&quot; placeholder=&quot;Username&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label class=&quot;flex items-center&quot;&gt;
                &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; /&gt;
                &lt;span class=&quot;text-white-dark&quot;&gt;Remember me&lt;/span&gt;
            &lt;/label&gt;
        &lt;/div&gt;
        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary py-2.5&quot;&gt;Submit&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Auto-sizing -->
            <div class="panel lg:col-span-2">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Auto-sizing</h5>
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
                        <div class="flex flex-col md:flex-row gap-4 items-center max-w-[900px] mx-auto">
                            <input type="email" placeholder="Jane Doe" class="form-input flex-1" />
                            <div class="flex flex-1">
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
                                    @
                                </div>
                                <input type="text" placeholder="Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                            </div>
                            <div>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="form-checkbox" />
                                    <span class="text-white-dark">Remember me</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary py-2.5">Submit</button>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code7')">
                    <highlight>
                        <pre>
&lt;!-- auto sizing--&gt;
&lt;form&gt;
&lt;div class=&quot;flex flex-col md:flex-row gap-4 items-center max-w-[900px] mx-auto&quot;&gt;
    &lt;input type=&quot;email&quot; placeholder=&quot;Jane Doe&quot; class=&quot;form-input flex-1&quot; /&gt;
    &lt;div class=&quot;flex flex-1&quot;&gt;
        &lt;div class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;&gt;@&lt;/div&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Username&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label class=&quot;flex items-center cursor-pointer&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; /&gt;
            &lt;span class=&quot;text-white-dark&quot;&gt;Remember me&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary py-2.5&quot;&gt;Submit&lt;/button&gt;
&lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Actions Buttons -->
            <div class="panel lg:row-start-3 lg:col-start-2">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Actions Buttons</h5>
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
                    <form class="space-y-5">
                        <div>
                            <label for="actionName">Full Name:</label>
                            <input id="actionName" type="text" placeholder="Enter Full Name" class="form-input" />
                        </div>
                        <div>
                            <label for="actionEmail">Email:</label>
                            <div class="flex flex-1">
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
                                    @
                                </div>
                                <input id="actionEmail" type="email" placeholder="" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                            </div>
                        </div>
                        <div>
                            <label for="actionWeb">Website:</label>
                            <input id="actionWeb" type="text" placeholder="https://" class="form-input" />
                        </div>
                        <div>
                            <label for="actionPassword">Password:</label>
                            <input id="actionPassword" type="password" placeholder="Enter Password" class="form-input" />
                        </div>
                        <div>
                            <label for="actionCpass">Confirm Password:</label>
                            <input id="actionCpass" type="password" placeholder="Enter Confirm Password" class="form-input" />
                        </div>
                        <button type="submit" class="btn btn-primary !mt-6">Submit</button>
                    </form>
                </div>
                <template v-if="codeArr.includes('code8')">
                    <highlight>
                        <pre>
&lt;!-- action button --&gt;
&lt;form class=&quot;space-y-5&quot;&gt;
    &lt;div&gt;
        &lt;label for=&quot;actionName&quot;&gt;Full Name:&lt;/label&gt;
        &lt;input id=&quot;actionName&quot; type=&quot;text&quot; placeholder=&quot;Enter Full Name&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for=&quot;actionEmail&quot;&gt;Email:&lt;/label&gt;
        &lt;div class=&quot;flex flex-1&quot;&gt;
            &lt;div class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;&gt;@&lt;/div&gt;
            &lt;input id=&quot;actionEmail&quot; type=&quot;email&quot; placeholder=&quot;&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for=&quot;actionWeb&quot;&gt;Website:&lt;/label&gt;
        &lt;input id=&quot;actionWeb&quot; type=&quot;text&quot; placeholder=&quot;https://&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for=&quot;actionPassword&quot;&gt;Password:&lt;/label&gt;
        &lt;input id=&quot;actionPassword&quot; type=&quot;password&quot; placeholder=&quot;Enter Password&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for=&quot;actionCpass&quot;&gt;Confirm Password:&lt;/label&gt;
        &lt;input id=&quot;actionCpass&quot; type=&quot;password&quot; placeholder=&quot;Enter Confirm Password&quot; class=&quot;form-input&quot; /&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit&lt;/button&gt;
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
    useMeta({ title: 'Form Layouts' });

    const { codeArr, toggleCode } = codePreview();
</script>
