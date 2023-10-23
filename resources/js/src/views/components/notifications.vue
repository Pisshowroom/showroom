<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Components</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Notifications</span>
            </li>
        </ul>
        <div class="pt-5 space-y-8">
            <div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap">
                <div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5">
                        <path
                            d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                        />
                        <path
                            opacity="0.5"
                            d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        />
                    </svg>
                </div>
                <span class="ltr:mr-3 rtl:ml-3">Documentation: </span
                ><a href="https://www.npmjs.com/package/sweetalert2" target="_blank" class="block hover:underline">https://www.npmjs.com/package/sweetalert2</a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- basic -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Basic</h5>
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-primary" @click="showMessage('Hello, world! This is a toast message.')">Open Toast</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code1')">
                        <highlight>
                            <pre>
&lt;!-- basic --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; @click=&quot;showMessage('Hello, world! This is a toast message.')&quot;&gt;Open Toast&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showMessage = (msg = 'Example notification text.', position = 'bottom-start', showCloseButton = true, closeButtonHtml = '', duration = 3000) =&gt; {
        const toast = Swal.mixin({
            toast: true,
            position: position || 'bottom-start',
            showConfirmButton: false,
            timer: duration,
            showCloseButton: showCloseButton,
        });
        toast.fire({
            title: msg,
        });
    };
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Position -->
                <div class="panel lg:row-span-2">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Position</h5>
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
                        <h6 class="font-semibold text-base dark:text-white-light mb-3 text-center">Top Position</h6>
                        <div class="flex items-center justify-center mb-10 gap-2">
                            <button
                                type="button"
                                class="btn btn-success"
                                @click="showMessage('Example notification text.', store.rtlClass === 'rtl' ? 'top-end' : 'top-start')"
                            >
                                Top Left
                            </button>
                            <button type="button" class="btn btn-secondary" @click="showMessage('Example notification text', 'top')">Top Center</button>
                            <button
                                type="button"
                                class="btn btn-info"
                                @click="showMessage('Example notification text.', store.rtlClass === 'rtl' ? 'top-start' : 'top-end')"
                            >
                                Top Right
                            </button>
                        </div>
                        <h6 class="font-semibold text-base dark:text-white-light mb-3 text-center">Bottom Position</h6>
                        <div class="flex items-center justify-center gap-2">
                            <button
                                type="button"
                                class="btn btn-dark"
                                @click="showMessage('Example notification text.', store.rtlClass === 'rtl' ? 'bottom-end' : 'bottom-start')"
                            >
                                Bottom Left
                            </button>
                            <button type="button" class="btn btn-primary" @click="showMessage('Example notification text.', 'bottom')">Bottom Center</button>
                            <button
                                type="button"
                                class="btn btn-secondary"
                                @click="showMessage('Example notification text.', store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end')"
                            >
                                Bottom Right
                            </button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code2')">
                        <highlight>
                            <pre>
&lt;!-- top left --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; @click=&quot;showMessage('Example notification text.',store.rtlClass === 'rtl' ? 'top-end' : 'top-start')&quot;&gt;Top Left&lt;/button&gt;

&lt;!-- top center --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; @click=&quot;showMessage('Example notification text','top')&quot;&gt;Top Center&lt;/button&gt;

&lt;!-- top right --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; @click=&quot;showMessage('Example notification text.', store.rtlClass === 'rtl' ? 'top-start' : 'top-end')&quot;&gt;Top Right&lt;/button&gt;

&lt;!-- bottom left --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; @click=&quot;showMessage('Example notification text.',store.rtlClass === 'rtl' ? 'bottom-end' : 'bottom-start')&quot;&gt;Bottom Left&lt;/button&gt;

&lt;!-- bottom center --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; @click=&quot;showMessage('Example notification text.','bottom')&quot;&gt;Bottom Center&lt;/button&gt;

&lt;!-- bottom right --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; @click=&quot;showMessage('Example notification text.',store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end')&quot;&gt;Bottom Right&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
  import { useAppStore } from '@/stores/index';
  const store = useAppStore();
  const showMessage = (msg = 'Example notification text.', position = 'bottom-start', showCloseButton = true, closeButtonHtml = '', duration = 3000) =&gt; {
      const toast = Swal.mixin({
          toast: true,
          position: position || 'bottom-start',
          showConfirmButton: false,
          timer: duration,
          showCloseButton: showCloseButton,
      });
      toast.fire({
          title: msg,
      });
  };
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- No Action -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">No Action</h5>
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-success" @click="showMessage('Example notification text.', 'bottom-start', false)">
                                No Action
                            </button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code3')">
                        <highlight>
                            <pre>
&lt;!-- no action --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; @click=&quot;showMessage('Example notification text.', 'bottom-start',false)&quot;&gt;No Action&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showMessage = (msg = 'Example notification text.', position = 'bottom-start', showCloseButton = true, closeButtonHtml = '', duration = 3000) =&gt; {
        const toast = Swal.mixin({
            toast: true,
            position: position || 'bottom-start',
            showConfirmButton: false,
            timer: duration,
            showCloseButton: showCloseButton,
        });
        toast.fire({
            title: msg,
        });
    };
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Click Callback -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Click Callback</h5>
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-info" @click="clickCallable()">Click Callback</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code4')">
                        <highlight>
                            <pre>
&lt;!-- click callback --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; @click=&quot;clickCallable()&quot;&gt;Click Callback&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const clickCallable = () =&gt; {
        Swal.fire({
            toast: true,
            position: 'bottom-start',
            text: &quot;Custom callback when action button is clicked.&quot;,
            showCloseButton: true,
            showConfirmButton: false,
        }).then((result) =&gt; {
            Swal.fire({
                toast: true,
                position: 'bottom-start',
                text: 'Thanks for clicking the Dismiss button!',
                showCloseButton: true,
                showConfirmButton: false,
            });
        });
    };
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Duration -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Duration</h5>
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
                        <div class="flex items-center justify-center">
                            <button
                                type="button"
                                class="btn btn-dark"
                                @click="showMessage((msg = 'Example notification text.'), (position = 'bottom-start'), (duration = 5000))"
                            >
                                Duration
                            </button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code5')">
                        <highlight>
                            <pre>
&lt;!-- click callback --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; @click=&quot;showMessage(msg='Example notification text.', position= 'bottom-start', duration=5000)&quot;&gt;Duration&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showMessage = (msg = 'Example notification text.', position = 'bottom-start', showCloseButton = true, closeButtonHtml = '', duration = 3000) =&gt; {
        const toast = Swal.mixin({
            toast: true,
            position: position || 'bottom-start',
            showConfirmButton: false,
            timer: duration,
            showCloseButton: showCloseButton,
        });
        toast.fire({
            title: msg,
        });
    };
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Background Color -->
                <div class="panel lg:col-span-2">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Background Color</h5>
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
                        <div class="grid grid-cols-2 sm:grid-cols-1 sm:flex items-center justify-center gap-2 colored-toast">
                            <div>
                                <button type="button" class="btn btn-primary" @click="coloredToast('primary')">Primary</button>
                                <div id="primary-toast"></div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-secondary" @click="coloredToast('secondary')">Secondary</button>
                                <div id="secondary-toast"></div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-success" @click="coloredToast('success')">Success</button>
                                <div id="success-toast"></div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-danger" @click="coloredToast('danger')">Danger</button>
                                <div id="danger-toast"></div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-warning" @click="coloredToast('warning')">Warning</button>
                                <div id="warning-toast"></div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-info" @click="coloredToast('info')">Info</button>
                                <div id="info-toast"></div>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code6')">
                        <highlight>
                            <pre>
&lt;!-- primary --&gt;
&lt;div&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; @click=&quot;coloredToast('primary')&quot;&gt;Primary&lt;/button&gt;
    &lt;div id=&quot;primary-toast&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- secondary --&gt;
&lt;div&gt;
    &lt;button type=&quot; button&quot; class=&quot;btn btn-secondary&quot; @click=&quot;coloredToast('secondary')&quot;&gt;Secondary&lt;/button&gt;
    &lt;div id=&quot;secondary-toast&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- success --&gt;
&lt;div&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; @click=&quot;coloredToast('success')&quot;&gt;Success&lt;/button&gt;
    &lt;div id=&quot;success-toast&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- danger --&gt;
&lt;div&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; @click=&quot;coloredToast('danger')&quot;&gt;Danger&lt;/button&gt;
    &lt;div id=&quot;danger-toast&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- warning --&gt;
&lt;div&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot; @click=&quot;coloredToast('warning')&quot;&gt;Warning&lt;/button&gt;
    &lt;div id=&quot;warning-toast&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- info --&gt;
&lt;div&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; @click=&quot;coloredToast('info')&quot;&gt;Info&lt;/button&gt;
    &lt;div id=&quot;info-toast&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const coloredToast = (color) =&gt; {
        const toast = Swal.mixin({
            toast: true,
            position: 'bottom-start',
            showConfirmButton: false,
            timer: 3000,
            showCloseButton: true,
            customClass: {
                popup: `color-${color}`
            },
            target: document.getElementById(color + '-toast')
        });
        toast.fire({
            title: 'Example notification text.',
        });
    };
&lt;/script&gt;
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
    import Swal from 'sweetalert2';
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Notification' });
    const store = useAppStore();

    const { codeArr, toggleCode } = codePreview();
    const showMessage = (msg = 'Example notification text.', position = 'bottom-start', showCloseButton = true, closeButtonHtml = '', duration = 3000) => {
        const toast = Swal.mixin({
            toast: true,
            position: <any>(position || 'bottom-start'),
            showConfirmButton: false,
            timer: duration,
            showCloseButton: showCloseButton,
        });
        toast.fire({
            title: msg,
        });
    };

    const clickCallable = () => {
        Swal.fire({
            toast: true,
            position: 'bottom-start',
            text: 'Custom callback when action button is clicked.',
            showCloseButton: true,
            showConfirmButton: false,
        }).then((result) => {
            Swal.fire({
                toast: true,
                position: 'bottom-start',
                text: 'Thanks for clicking the Dismiss button!',
                showCloseButton: true,
                showConfirmButton: false,
            });
        });
    };

    const coloredToast = (color) => {
        const toast = Swal.mixin({
            toast: true,
            position: 'bottom-start',
            showConfirmButton: false,
            timer: 3000,
            showCloseButton: true,
            customClass: {
                popup: `color-${color}`,
            },
            target: document.getElementById(color + '-toast') || 'body',
        });
        toast.fire({
            title: 'Example notification text.',
        });
    };
</script>
