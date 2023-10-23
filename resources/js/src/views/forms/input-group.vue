<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Forms</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Input Group</span>
            </li>
        </ul>
        <div class="pt-5 space-y-4">
            <!-- Basic -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                <!-- default -->
                <div class="panel lg:row-span-2">
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
                        <form>
                            <div class="mb-5">
                                <div class="flex">
                                    <div
                                        class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                    >
                                        @
                                    </div>
                                    <input type="text" placeholder="Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="flex">
                                    <input type="text" placeholder="Recipient's username" class="form-input ltr:rounded-r-none rtl:rounded-l-none" />
                                    <div
                                        class="bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                    >
                                        @example.com
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="url">Your vanity URL</label>
                                <div class="flex">
                                    <div
                                        class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                    >
                                        https://
                                    </div>
                                    <input id="url" type="text" placeholder="example.com/users/" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="flex">
                                    <div
                                        class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                    >
                                        $
                                    </div>
                                    <input type="text" placeholder="" class="form-input rounded-none" />
                                    <div
                                        class="bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                    >
                                        .00
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex">
                                    <div
                                        class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b] whitespace-nowrap"
                                    >
                                        With textarea
                                    </div>
                                    <textarea rows="4" class="form-textarea ltr:rounded-l-none rtl:rounded-r-none"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code1')">
                        <highlight>
                            <pre>
&lt;!-- basic --&gt;
&lt;form&gt;
  &lt;div class=&quot;mb-5&quot;&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;div
        class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
      &gt;
        @
      &lt;/div&gt;
      &lt;input type=&quot;text&quot; placeholder=&quot;Username&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-5&quot;&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;input type=&quot;text&quot; placeholder=&quot;Recipient's username&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none&quot; /&gt;
      &lt;div
        class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
      &gt;
        @example.com
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-5&quot;&gt;
    &lt;label for=&quot;url&quot;&gt;Your vanity URL&lt;/label&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;div
        class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
      &gt;
        https://
      &lt;/div&gt;
      &lt;input id=&quot;url&quot; type=&quot;text&quot; placeholder=&quot;example.com/users/&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-5&quot;&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;div
        class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
      &gt;
        $
      &lt;/div&gt;
      &lt;input type=&quot;text&quot; placeholder=&quot;&quot; class=&quot;form-input rounded-none&quot; /&gt;
      &lt;div
        class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
      &gt;
        .00
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;div
        class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b] whitespace-nowrap&quot;
      &gt;
        With textarea
      &lt;/div&gt;
      &lt;textarea rows=&quot;4&quot; class=&quot;form-textarea ltr:rounded-l-none rtl:rounded-r-none&quot;&gt;&lt;/textarea&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- simple icon -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Simple Icon</h5>
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
                        <div class="mb-5">
                            <label for="iconLeft">Left</label>
                            <div class="flex">
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 text-white-dark"
                                    >
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
                                </div>
                                <input id="iconLeft" type="text" placeholder="Notification" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                            </div>
                        </div>
                        <div>
                            <label for="iconRight">Right</label>
                            <div class="flex">
                                <input id="iconRight" type="text" placeholder="Notification" class="form-input ltr:rounded-r-none rtl:rounded-l-none" />
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 text-white-dark"
                                    >
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code2')">
                        <highlight>
                            <pre>
&lt;!-- left --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div
    class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
  &gt;
    &lt;svg&gt;...&lt;/svg&gt;
  &lt;/div&gt;
  &lt;input id=&quot;iconLeft&quot; type=&quot;text&quot; placeholder=&quot;Notification&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
&lt;/div&gt;

&lt;!-- right --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;input id=&quot;iconRight&quot; type=&quot;text&quot; placeholder=&quot;Notification&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none&quot; /&gt;
  &lt;div
    class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
  &gt;
    &lt;svg&gt;... &lt;/svg&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- spinning Icon -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Spinning Icon</h5>
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
                        <div class="mb-5">
                            <label for="spiLeft">Left</label>
                            <div class="flex">
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
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
                                        class="w-5 h-5 text-white-dark animate-spin"
                                    >
                                        <line x1="12" y1="2" x2="12" y2="6"></line>
                                        <line x1="12" y1="18" x2="12" y2="22"></line>
                                        <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                                        <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                                        <line x1="2" y1="12" x2="6" y2="12"></line>
                                        <line x1="18" y1="12" x2="22" y2="12"></line>
                                        <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                                        <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                                    </svg>
                                </div>
                                <input id="spiLeft" type="text" placeholder="Spinners" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                            </div>
                        </div>
                        <div>
                            <label for="spiRight">Right</label>
                            <div class="flex">
                                <input id="spiRight" type="text" placeholder="Spinners" class="form-input ltr:rounded-r-none rtl:rounded-l-none" />
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
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
                                        class="w-5 h-5 text-white-dark animate-spin"
                                    >
                                        <line x1="12" y1="2" x2="12" y2="6"></line>
                                        <line x1="12" y1="18" x2="12" y2="22"></line>
                                        <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                                        <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                                        <line x1="2" y1="12" x2="6" y2="12"></line>
                                        <line x1="18" y1="12" x2="22" y2="12"></line>
                                        <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                                        <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code3')">
                        <highlight>
                            <pre>
&lt;!-- left --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div
    class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
  &gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/div&gt;
  &lt;input id=&quot;spiLeft&quot; type=&quot;text&quot; placeholder=&quot;Spinners&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
&lt;/div&gt;

&lt;!-- right --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;input id=&quot;spiRight&quot; type=&quot;text&quot; placeholder=&quot;Spinners&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none&quot; /&gt;
  &lt;div
    class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
  &gt;
    &lt;svg&gt; ...  &lt;/svg&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- dropdown icon -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Dropdown Icon</h5>
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
                        <div class="dropdown mb-5">
                            <label for="dropdownLeft">Left</label>
                            <div class="flex">
                                <Popper
                                    :placement="store.rtlClass === 'rtl' ? 'bottom-end' : 'bottom-start'"
                                    offsetDistance="0"
                                    class="align-middle input-group-dropodwn"
                                >
                                    <div
                                        class="bg-primary flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] cursor-pointer h-full"
                                    >
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 text-white"
                                        >
                                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"></circle>
                                            <path
                                                opacity="0.5"
                                                d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            ></path>
                                        </svg>
                                    </div>
                                    <template #content="{ close }">
                                        <ul @click="close()">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                                <input id="dropdownLeft" type="text" placeholder="Dropdown" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                            </div>
                        </div>
                        <div class="dropdown">
                            <label for="dropdownRight">Right</label>
                            <div class="flex">
                                <input id="dropdownRight" type="text" placeholder="Dropdown" class="form-input ltr:rounded-r-none rtl:rounded-l-none" />
                                <Popper
                                    :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'"
                                    offsetDistance="0"
                                    class="align-middle input-group-dropodwn"
                                >
                                    <div
                                        class="bg-success flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] cursor-pointer h-full"
                                    >
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 text-white"
                                        >
                                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"></circle>
                                            <path
                                                opacity="0.5"
                                                d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            ></path>
                                        </svg>
                                    </div>
                                    <template #content="{ close }">
                                        <ul @click="close()">
                                            <li><a href="javascript:;">Action</a></li>
                                            <li><a href="javascript:;">Another action</a></li>
                                            <li><a href="javascript:;">Something else here</a></li>
                                            <li><a href="javascript:;">Separated link</a></li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code4')">
                        <highlight>
                            <pre>
&lt;!-- left --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-end' : 'bottom-start'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle input-group-dropodwn&quot;&gt;
    &lt;div
      class=&quot;bg-primary flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] cursor-pointer h-full&quot;
    &gt;
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/div&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
  &lt;input id=&quot;dropdownLeft&quot; type=&quot;text&quot; placeholder=&quot;Dropdown&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
&lt;/div&gt;

&lt;!-- right --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;input id=&quot;dropdownRight&quot; type=&quot;text&quot; placeholder=&quot;Dropdown&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none&quot; /&gt;
  &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle input-group-dropodwn&quot;&gt;
    &lt;div
      class=&quot;bg-success flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] cursor-pointer h-full&quot;
    &gt;
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/div&gt;
    &lt;template #content=&quot;{ close }&quot;&gt;
      &lt;ul @click=&quot;close()&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/template&gt;
  &lt;/Popper&gt;
&lt;/div&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- checkbox -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Checkboxes</h5>
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
                        <div class="mb-5">
                            <label for="checkLeft">Left</label>
                            <div class="flex">
                                <div
                                    class="bg-[#f1f2f3] dark:bg-[#1b2e4b] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c]"
                                >
                                    <input type="checkbox" class="form-checkbox border-[#e0e6ed] dark:border-white-dark ltr:mr-0 rtl:ml-0" checked />
                                </div>
                                <input id="checkLeft" type="text" placeholder="Checkbox" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                            </div>
                        </div>
                        <div>
                            <label for="checkRight">Right</label>
                            <div class="flex">
                                <input id="checkRight" type="text" placeholder="Checkbox" class="form-input ltr:rounded-r-none rtl:rounded-l-none" />
                                <div
                                    class="bg-[#f1f2f3] dark:bg-[#1b2e4b] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c]"
                                >
                                    <input
                                        type="checkbox"
                                        class="form-checkbox text-warning border-[#e0e6ed] dark:border-white-dark ltr:mr-0 rtl:ml-0"
                                        checked
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code5')">
                        <highlight>
                            <pre>
&lt;!-- left --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div
    class=&quot;bg-[#f1f2f3] dark:bg-[#1b2e4b] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c]&quot;
  &gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox border-[#e0e6ed] dark:border-white-dark ltr:mr-0 rtl:ml-0&quot; checked /&gt;
  &lt;/div&gt;
  &lt;input id=&quot;checkLeft&quot; type=&quot;text&quot; placeholder=&quot;Checkbox&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
&lt;/div&gt;

&lt;!-- right --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;input id=&quot;checkRight&quot; type=&quot;text&quot; placeholder=&quot;Checkbox&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none&quot; /&gt;
  &lt;div
    class=&quot;bg-[#f1f2f3] dark:bg-[#1b2e4b] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c]&quot;
  &gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox text-warning border-[#e0e6ed] dark:border-white-dark ltr:mr-0 rtl:ml-0&quot; checked /&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- radio -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Radios</h5>
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
                        <div class="mb-5">
                            <label for="radioLeft">Left</label>
                            <div class="flex">
                                <div
                                    class="bg-[#f1f2f3] dark:bg-[#1b2e4b] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c]"
                                >
                                    <input type="radio" class="form-radio text-info border-[#e0e6ed] dark:border-white-dark ltr:mr-0 rtl:ml-0" checked />
                                </div>
                                <input id="radioLeft" type="text" placeholder="Radio" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                            </div>
                        </div>
                        <div>
                            <label for="radioRight">Right</label>
                            <div class="flex">
                                <input id="radioRight" type="text" placeholder="Radio" class="form-input ltr:rounded-r-none rtl:rounded-l-none" />
                                <div
                                    class="bg-[#f1f2f3] dark:bg-[#1b2e4b] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c]"
                                >
                                    <input type="radio" class="form-radio text-danger border-[#e0e6ed] dark:border-white-dark ltr:mr-0 rtl:ml-0" checked />
                                </div>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code6')">
                        <highlight>
                            <pre>
&lt;!-- left --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div
    class=&quot;bg-[#f1f2f3] dark:bg-[#1b2e4b] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c]&quot;
  &gt;
    &lt;input type=&quot;radio&quot; class=&quot;form-radio text-info border-[#e0e6ed] dark:border-white-dark ltr:mr-0 rtl:ml-0&quot; checked /&gt;
  &lt;/div&gt;
  &lt;input id=&quot;radioLeft&quot; type=&quot;text&quot; placeholder=&quot;Radio&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
&lt;/div&gt;

&lt;!-- right --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;input id=&quot;radioRight&quot; type=&quot;text&quot; placeholder=&quot;Radio&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none&quot; /&gt;
  &lt;div
    class=&quot;bg-[#f1f2f3] dark:bg-[#1b2e4b] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c]&quot;
  &gt;
    &lt;input type=&quot;radio&quot; class=&quot;form-radio text-danger border-[#e0e6ed] dark:border-white-dark ltr:mr-0 rtl:ml-0&quot; checked /&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- switch -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Switch</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code7')"
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
                        <div class="mb-5">
                            <label for="switchLeft">Left</label>
                            <div class="flex">
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
                                    <label class="w-7 h-4 relative cursor-pointer mb-0">
                                        <input
                                            type="checkbox"
                                            class="peer absolute w-full h-full opacity-0 z-10 focus:ring-0 focus:outline-none cursor-pointer"
                                            id="custom_switch_checkbox1"
                                        />
                                        <span
                                            class="rounded-full border border-[#adb5bd] bg-white peer-checked:bg-primary peer-checked:border-primary dark:bg-dark block h-full before:absolute ltr:before:left-0.5 rtl:before:right-0.5 ltr:peer-checked:before:left-3.5 rtl:peer-checked:before:right-3.5 peer-checked:before:bg-white before:bg-[#adb5bd] dark:before:bg-white-dark before:bottom-[2px] before:w-3 before:h-3 before:rounded-full before:transition-all before:duration-300"
                                        ></span>
                                    </label>
                                </div>
                                <input id="switchLeft" type="text" placeholder="Switch" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                            </div>
                        </div>
                        <div>
                            <label for="switchRight">Right</label>
                            <div class="flex">
                                <input id="switchRight" type="text" placeholder="Switch" class="form-input ltr:rounded-r-none rtl:rounded-l-none" />
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
                                    <label class="w-7 h-4 relative cursor-pointer mb-0">
                                        <input
                                            type="checkbox"
                                            class="peer absolute w-full h-full opacity-0 z-10 focus:ring-0 focus:outline-none cursor-pointer"
                                            id="custom_switch_checkbox2"
                                        />
                                        <span
                                            class="rounded-full border border-[#adb5bd] bg-white peer-checked:bg-primary peer-checked:border-primary dark:bg-dark block h-full before:absolute ltr:before:left-0.5 rtl:before:right-0.5 ltr:peer-checked:before:left-3.5 rtl:peer-checked:before:right-3.5 peer-checked:before:bg-white before:bg-[#adb5bd] dark:before:bg-white-dark before:bottom-[2px] before:w-3 before:h-3 before:rounded-full before:transition-all before:duration-300"
                                        ></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code7')">
                        <highlight>
                            <pre>
&lt;!-- left --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div
    class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
  &gt;
    &lt;label class=&quot;w-7 h-4 relative cursor-pointer mb-0&quot;&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;peer absolute w-full h-full opacity-0 z-10 focus:ring-0 focus:outline-none cursor-pointer&quot; id=&quot;custom_switch_checkbox1&quot; /&gt;
      &lt;span
        class=&quot;rounded-full border border-[#adb5bd] bg-white peer-checked:bg-primary peer-checked:border-primary dark:bg-dark block h-full before:absolute ltr:before:left-0.5 rtl:before:right-0.5 ltr:peer-checked:before:left-3.5 rtl:peer-checked:before:right-3.5 peer-checked:before:bg-white before:bg-[#adb5bd] dark:before:bg-white-dark before:bottom-[2px] before:w-3 before:h-3 before:rounded-full before:transition-all before:duration-300&quot;
      &gt;&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;
  &lt;input id=&quot;switchLeft&quot; type=&quot;text&quot; placeholder=&quot;Switch&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
&lt;/div&gt;

&lt;!-- right --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;input id=&quot;switchRight&quot; type=&quot;text&quot; placeholder=&quot;Switch&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none&quot; /&gt;
  &lt;div
    class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
  &gt;
    &lt;label class=&quot;w-7 h-4 relative cursor-pointer mb-0&quot;&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;peer absolute w-full h-full opacity-0 z-10 focus:ring-0 focus:outline-none cursor-pointer&quot; id=&quot;custom_switch_checkbox2&quot; /&gt;
      &lt;span
        class=&quot;rounded-full border border-[#adb5bd] bg-white peer-checked:bg-primary peer-checked:border-primary dark:bg-dark block h-full before:absolute ltr:before:left-0.5 rtl:before:right-0.5 ltr:peer-checked:before:left-3.5 rtl:peer-checked:before:right-3.5 peer-checked:before:bg-white before:bg-[#adb5bd] dark:before:bg-white-dark before:bottom-[2px] before:w-3 before:h-3 before:rounded-full before:transition-all before:duration-300&quot;
      &gt;&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
            </div>
            <!-- Sizes -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Sizes</h5>
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
                        <div class="mb-5">
                            <div class="flex">
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
                                    Small
                                </div>
                                <input type="text" placeholder="Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none py-2.5 text-base" />
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="flex">
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
                                    Small
                                </div>
                                <input type="text" placeholder="Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                            </div>
                        </div>
                        <div>
                            <div class="flex">
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
                                    Small
                                </div>
                                <input type="text" placeholder="Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none py-1.5 text-xs" />
                            </div>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code8')">
                    <highlight>
                        <pre>
&lt;!-- sizes --&gt;
&lt;form&gt;
  &lt;div class=&quot;mb-5&quot;&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;div
        class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
      &gt;
        Small
      &lt;/div&gt;
      &lt;input type=&quot;text&quot; placeholder=&quot;Username&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none py-2.5 text-base&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-5&quot;&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;div
        class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
      &gt;
        Small
      &lt;/div&gt;
      &lt;input type=&quot;text&quot; placeholder=&quot;Username&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;div
        class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
      &gt;
        Small
      &lt;/div&gt;
      &lt;input type=&quot;text&quot; placeholder=&quot;Username&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none py-1.5 text-xs&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Multiple -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Multiple inputs</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code9')"
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
                        <form>
                            <div class="flex">
                                <div
                                    class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                >
                                    First and last name
                                </div>
                                <input
                                    type="text"
                                    placeholder="First Name"
                                    class="form-input ltr:border-r-0 rtl:border-l-0 focus:!border-r focus:!border-l rounded-none flex-1"
                                />
                                <input type="text" placeholder="Last Name" class="form-input ltr:rounded-l-none rtl:rounded-r-none flex-1" />
                            </div>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code9')">
                        <highlight>
                            <pre>
&lt;!-- multiple inputs --&gt;
&lt;form&gt;
  &lt;div class=&quot;flex&quot;&gt;
    &lt;div
      class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
    &gt;
      First and last name
    &lt;/div&gt;
    &lt;input type=&quot;text&quot; placeholder=&quot;First Name&quot; class=&quot;form-input ltr:border-r-0 rtl:border-l-0 focus:!border-r focus:!border-l rounded-none flex-1&quot; /&gt;
    &lt;input type=&quot;text&quot; placeholder=&quot;Last Name&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none flex-1&quot; /&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Multiple addons</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code10')"
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
                        <form>
                            <div class="mb-5">
                                <div class="flex">
                                    <div
                                        class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                    >
                                        $
                                    </div>
                                    <div
                                        class="bg-[#eee] flex justify-center items-center rounded-none px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                    >
                                        0.00
                                    </div>
                                    <input type="text" placeholder="" class="form-input ltr:rounded-l-none rtl:rounded-r-none flex-1" />
                                </div>
                            </div>
                            <div>
                                <div class="flex">
                                    <input
                                        type="text"
                                        placeholder=""
                                        class="form-input ltr:rounded-r-none rtl:rounded-l-none flex-1 ltr:rounded-l-md rtl:rounded-r-md"
                                    />
                                    <div
                                        class="bg-[#eee] flex justify-center items-center rounded-none px-3 font-semibold border border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                    >
                                        0.00
                                    </div>
                                    <div
                                        class="bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                    >
                                        $
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code10')">
                        <highlight>
                            <pre>
&lt;!-- basic --&gt;
&lt;form&gt;
  &lt;div class=&quot;mb-5&quot;&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;div
        class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
      &gt;
        $
      &lt;/div&gt;
      &lt;div class=&quot;bg-[#eee] flex justify-center items-center rounded-none px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;&gt;
        0.00
      &lt;/div&gt;
      &lt;input type=&quot;text&quot; placeholder=&quot;&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none flex-1&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;input type=&quot;text&quot; placeholder=&quot;&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none flex-1 ltr:rounded-l-md rtl:rounded-r-md&quot; /&gt;
      &lt;div class=&quot;bg-[#eee] flex justify-center items-center rounded-none px-3 font-semibold border border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;&gt;0.00&lt;/div&gt;
      &lt;div
        class=&quot;bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]&quot;
      &gt;
        $
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Buttons with dropdowns</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code11')"
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
                        <form>
                            <div class="mb-5 dropdown">
                                <label for="dropdownLeftButton">Left</label>
                                <div class="flex">
                                    <Popper
                                        :placement="store.rtlClass === 'rtl' ? 'bottom-end' : 'bottom-start'"
                                        offsetDistance="0"
                                        class="align-middle input-group-dropodwn"
                                    >
                                        <div
                                            class="bg-primary text-white flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] cursor-pointer h-full"
                                        >
                                            Dropdown
                                        </div>
                                        <template #content="{ close }">
                                            <ul @click="close()">
                                                <li><a href="javascript:;">Action</a></li>
                                                <li><a href="javascript:;">Another action</a></li>
                                                <li><a href="javascript:;">Something else here</a></li>
                                                <li><a href="javascript:;">Separated link</a></li>
                                            </ul>
                                        </template>
                                    </Popper>
                                    <input id="dropdownLeftButton" type="text" placeholder="" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                                </div>
                            </div>
                            <div class="dropdown">
                                <label for="dropdownRightButton">Right</label>
                                <div class="flex">
                                    <input id="dropdownRightButton" type="text" placeholder="" class="form-input ltr:rounded-r-none rtl:rounded-l-none" />
                                    <Popper
                                        :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'"
                                        offsetDistance="0"
                                        class="align-middle input-group-dropodwn"
                                    >
                                        <div
                                            class="bg-danger text-white flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] cursor-pointer h-full"
                                        >
                                            Dropdown
                                        </div>
                                        <template #content="{ close }">
                                            <ul @click="close()">
                                                <li><a href="javascript:;">Action</a></li>
                                                <li><a href="javascript:;">Another action</a></li>
                                                <li><a href="javascript:;">Something else here</a></li>
                                                <li><a href="javascript:;">Separated link</a></li>
                                            </ul>
                                        </template>
                                    </Popper>
                                </div>
                            </div>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code11')">
                        <highlight>
                            <pre>
&lt;!-- buttons with dropdowns --&gt;
&lt;form&gt;
  &lt;div class=&quot;mb-5 dropdown&quot;&gt;
    &lt;label for=&quot;dropdownLeftButton&quot;&gt;Left&lt;/label&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-end' : 'bottom-start'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle input-group-dropodwn&quot;&gt;
        &lt;div
          class=&quot;bg-primary text-white flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] cursor-pointer h-full&quot;
        &gt;
          Dropdown
        &lt;/div&gt;
        &lt;template #content=&quot;{ close }&quot;&gt;
          &lt;ul @click=&quot;close()&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/template&gt;
      &lt;/Popper&gt;
      &lt;input id=&quot;dropdownLeftButton&quot; type=&quot;text&quot; placeholder=&quot;&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;dropdown&quot;&gt;
    &lt;label for=&quot;dropdownRightButton&quot;&gt;Right&lt;/label&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;input id=&quot;dropdownRightButton&quot; type=&quot;text&quot; placeholder=&quot;&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none&quot; /&gt;
      &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle input-group-dropodwn&quot;&gt;
        &lt;div
          class=&quot;bg-danger text-white flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] cursor-pointer h-full&quot;
        &gt;
          Dropdown
        &lt;/div&gt;
        &lt;template #content=&quot;{ close }&quot;&gt;
          &lt;ul @click=&quot;close()&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/template&gt;
      &lt;/Popper&gt;
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
                        <h5 class="font-semibold text-lg dark:text-white-light">Segmented buttons</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code12')"
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
                        <form>
                            <div class="mb-5 dropdown">
                                <label for="btnLeft">Left</label>
                                <div class="flex">
                                    <div
                                        class="bg-info text-white flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-info"
                                    >
                                        Action
                                    </div>
                                    <Popper
                                        :placement="store.rtlClass === 'rtl' ? 'bottom-end' : 'bottom-start'"
                                        offsetDistance="0"
                                        class="align-middle input-group-dropodwn"
                                    >
                                        <div
                                            class="bg-white dark:bg-[#1b2e4b] text-info flex justify-center items-center rounded-none px-3 font-semibold border border-info cursor-pointer h-full"
                                        >
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                <path
                                                    d="M19 9L12 15L5 9"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </div>
                                        <template #content="{ close }">
                                            <ul @click="close()">
                                                <li><a href="javascript:;">Action</a></li>
                                                <li><a href="javascript:;">Another action</a></li>
                                                <li><a href="javascript:;">Something else here</a></li>
                                                <li><a href="javascript:;">Separated link</a></li>
                                            </ul>
                                        </template>
                                    </Popper>
                                    <input
                                        id="btnLeft"
                                        type="text"
                                        placeholder=""
                                        class="form-input ltr:rounded-l-none rtl:rounded-r-none ltr:border-l-0 rtl:border-r-0"
                                    />
                                </div>
                            </div>
                            <div class="dropdown">
                                <label for="btnRight">Right</label>
                                <div class="flex">
                                    <input
                                        id="btnRight"
                                        type="text"
                                        placeholder=""
                                        class="form-input ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0"
                                    />
                                    <Popper
                                        :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'"
                                        offsetDistance="0"
                                        class="align-middle input-group-dropodwn"
                                    >
                                        <div
                                            class="bg-white dark:bg-[#1b2e4b] text-secondary flex justify-center items-center rounded-none px-3 font-semibold border border-secondary cursor-pointer h-full"
                                        >
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                <path
                                                    d="M19 9L12 15L5 9"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </div>
                                        <template #content="{ close }">
                                            <ul @click="close()">
                                                <li><a href="javascript:;">Action</a></li>
                                                <li><a href="javascript:;">Another action</a></li>
                                                <li><a href="javascript:;">Something else here</a></li>
                                                <li><a href="javascript:;">Separated link</a></li>
                                            </ul>
                                        </template>
                                    </Popper>
                                    <div
                                        class="bg-secondary text-white flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-secondary cursor-pointer"
                                    >
                                        Action
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code12')">
                        <highlight>
                            <pre>
&lt;!-- segmented buttons --&gt;
&lt;form&gt;
  &lt;div class=&quot;mb-5 dropdown&quot;&gt;
    &lt;label for=&quot;btnLeft&quot;&gt;Left&lt;/label&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;div class=&quot;bg-info text-white flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-info&quot;&gt;Action&lt;/div&gt;
      &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-end' : 'bottom-start'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle input-group-dropodwn&quot;&gt;
        &lt;div class=&quot;bg-white dark:bg-[#1b2e4b] text-info flex justify-center items-center rounded-none px-3 font-semibold border border-info cursor-pointer h-full&quot;&gt;
          &lt;svg width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;w-5 h-5&quot;&gt;
            &lt;path d=&quot;M19 9L12 15L5 9&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;1.5&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; /&gt;
          &lt;/svg&gt;
        &lt;/div&gt;
        &lt;template #content=&quot;{ close }&quot;&gt;
          &lt;ul @click=&quot;close()&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/template&gt;
      &lt;/Popper&gt;
      &lt;input id=&quot;btnLeft&quot; type=&quot;text&quot; placeholder=&quot;&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none ltr:border-l-0 rtl:border-r-0&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;dropdown&quot;&gt;
    &lt;label for=&quot;btnRight&quot;&gt;Right&lt;/label&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;input id=&quot;btnRight&quot; type=&quot;text&quot; placeholder=&quot;&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0&quot; /&gt;
      &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle input-group-dropodwn&quot;&gt;
        &lt;div class=&quot;bg-white dark:bg-[#1b2e4b] text-secondary flex justify-center items-center rounded-none px-3 font-semibold border border-secondary cursor-pointer h-full&quot;&gt;
          &lt;svg width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;w-5 h-5&quot;&gt;
            &lt;path d=&quot;M19 9L12 15L5 9&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;1.5&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; /&gt;
          &lt;/svg&gt;
        &lt;/div&gt;
        &lt;template #content=&quot;{ close }&quot;&gt;
          &lt;ul @click=&quot;close()&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/template&gt;
      &lt;/Popper&gt;
      &lt;div
        class=&quot;bg-secondary text-white flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-secondary cursor-pointer&quot;
      &gt;
        Action
      &lt;/div&gt;
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
                        <h5 class="font-semibold text-lg dark:text-white-light">Button addons</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code13')"
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
                        <form>
                            <div class="mb-5">
                                <label for="addonsLeft">Left</label>
                                <div class="flex">
                                    <button type="button" class="btn btn-info ltr:rounded-r-none rtl:rounded-l-none">Button</button>
                                    <input id="addonsLeft" type="text" placeholder="" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="addonsRight">Right</label>
                                <div class="flex">
                                    <input id="addonsRight" type="text" placeholder="" class="form-input ltr:rounded-r-none rtl:rounded-l-none" />
                                    <button type="button" class="btn btn-secondary ltr:rounded-l-none rtl:rounded-r-none">Button</button>
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="addonsLeftoutline">Left</label>
                                <div class="flex">
                                    <button type="button" class="btn btn-outline-info ltr:rounded-r-none rtl:rounded-l-none">Button</button>
                                    <button type="button" class="btn btn-outline-info rounded-none ltr:border-l-0 rtl:border-r-0">Button</button>
                                    <input id="addonsLeftoutline" type="text" placeholder="" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                                </div>
                            </div>
                            <div>
                                <label for="addonsRightoutline">Right</label>
                                <div class="flex">
                                    <input id="addonsRightoutline" type="text" placeholder="" class="form-input ltr:rounded-r-none rtl:rounded-l-none" />
                                    <button type="button" class="btn btn-outline-secondary rounded-none ltr:border-r-0 rtl:border-l-0">Button</button>
                                    <button type="button" class="btn btn-outline-secondary ltr:rounded-l-none rtl:rounded-r-none">Button</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code13')">
                        <highlight>
                            <pre>
&lt;!-- button addons --&gt;
&lt;form&gt;
  &lt;div class=&quot;mb-5&quot;&gt;
    &lt;label for=&quot;addonsLeft&quot;&gt;Left&lt;/label&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-info ltr:rounded-r-none rtl:rounded-l-none&quot;&gt;Button&lt;/button&gt;
      &lt;input id=&quot;addonsLeft&quot; type=&quot;text&quot; placeholder=&quot;&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-5&quot;&gt;
    &lt;label for=&quot;addonsRight&quot;&gt;Right&lt;/label&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;input id=&quot;addonsRight&quot; type=&quot;text&quot; placeholder=&quot;&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none&quot; /&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary ltr:rounded-l-none rtl:rounded-r-none&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-5&quot;&gt;
    &lt;label for=&quot;addonsLeftoutline&quot;&gt;Left&lt;/label&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info ltr:rounded-r-none rtl:rounded-l-none&quot;&gt;Button&lt;/button&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info rounded-none ltr:border-l-0 rtl:border-r-0&quot;&gt;Button&lt;/button&gt;
      &lt;input id=&quot;addonsLeftoutline&quot; type=&quot;text&quot; placeholder=&quot;&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;label for=&quot;addonsRightoutline&quot;&gt;Right&lt;/label&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;input id=&quot;addonsRightoutline&quot; type=&quot;text&quot; placeholder=&quot;&quot; class=&quot;form-input ltr:rounded-r-none rtl:rounded-l-none&quot; /&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary rounded-none ltr:border-r-0 rtl:border-l-0&quot;&gt;Button&lt;/button&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary ltr:rounded-l-none rtl:rounded-r-none&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Input Group' });

    const store = useAppStore();
    const { codeArr, toggleCode } = codePreview();
</script>
