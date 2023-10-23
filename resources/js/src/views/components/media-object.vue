<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Components</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Media Object</span>
            </li>
        </ul>
        <div class="pt-5 grid grid-cols-1 xl:grid-cols-2 gap-6">
            <!-- Simple -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Simple</h5>
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
                    <div class="flex">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-16 h-16 rounded" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- simple --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-16 h-16 rounded&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Order -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Order</h5>
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
                    <div class="flex">
                        <div class="flex-1 ltr:mr-4 rtl:ml-4">
                            <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                        <div>
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-16 h-16 rounded" />
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- order --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div class=&quot;flex-1 ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-16 h-16 rounded&quot; /&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Alignment -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Top-aligned media</h5>
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
                    <div class="flex items-start">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-16 h-16 rounded" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id
                                sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- top-aligned media --&gt;
&lt;div class=&quot;flex items-start&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-16 h-16 rounded&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu,
      gravida neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Center-aligned media</h5>
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
                    <div class="flex items-center">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-16 h-16 rounded" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id
                                sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code4')">
                    <highlight>
                        <pre>
&lt;!-- center aligned media --&gt;
&lt;div class=&quot;flex items-center&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-16 h-16 rounded&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu,
      gravida neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Bottom-aligned media</h5>
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
                    <div class="flex items-end">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-16 h-16 rounded" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id
                                sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code5')">
                    <highlight>
                        <pre>
&lt;!-- bottom aligned media --&gt;
&lt;div class=&quot;flex items-end&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-16 h-16 rounded&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu,
      gravida neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Right Aligned</h5>
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
                    <div class="flex">
                        <div class="flex-1 ltr:mr-4 rtl:ml-4 ltr:text-right rtl:text-left">
                            <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id
                                sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                        <div>
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-16 h-16 rounded" />
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code6')">
                    <highlight>
                        <pre>
&lt;!-- right aligned --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div class=&quot;flex-1 ltr:mr-4 rtl:ml-4 ltr:text-right rtl:text-left&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu,
      gravida neque.
    &lt;/p&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-16 h-16 rounded&quot; /&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- List -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Media list</h5>
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
                    <div class="flex mb-5">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-14 h-14 rounded" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                    <div class="flex mb-5">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-14 h-14 rounded" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-14 h-14 rounded" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code7')">
                    <highlight>
                        <pre>
&lt;!-- list --&gt;
&lt;div class=&quot;flex mb-5&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-14 h-14 rounded&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;flex mb-5&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-14 h-14 rounded&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-14 h-14 rounded&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Nesting -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Nesting</h5>
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
                    <div class="flex">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-14 h-14 rounded" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                            <p class="media-text mb-5">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                            <div class="flex">
                                <div class="ltr:mr-4 rtl:ml-4">
                                    <img src="/assets/images/profile-5.jpeg" alt="" class="w-14 h-14 rounded" />
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                                    <p class="media-text">
                                        Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget
                                        dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code8')">
                    <highlight>
                        <pre>
&lt;!-- nesting --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-14 h-14 rounded&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text mb-5&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
    &lt;div class=&quot;flex&quot;&gt;
      &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
        &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-14 h-14 rounded&quot; /&gt;
      &lt;/div&gt;
      &lt;div class=&quot;flex-1&quot;&gt;
        &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
        &lt;p class=&quot;media-text&quot;&gt;
          Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu,
          gravida neque.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Notation Text -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Notation Text</h5>
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
                    <div class="flex">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-14 h-14 rounded" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                            <p class="media-text mb-4">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                            <ul class="flex space-x-4 rtl:space-x-reverse font-bold">
                                <li><a href="javascript:;" class="hover:text-primary">Reply</a></li>
                                <li><a href="javascript:;" class="hover:text-primary">Edit</a></li>
                                <li><a href="javascript:;" class="hover:text-primary">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code9')">
                    <highlight>
                        <pre>
&lt;!-- notation text --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-14 h-14 rounded&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text mb-4&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
    &lt;ul class=&quot;flex space-x-4 rtl:space-x-reverse font-bold&quot;&gt;
      &lt;li&gt;&lt;a href=&quot;javascript:;&quot; class=&quot;hover:text-primary&quot;&gt;Reply&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;javascript:;&quot; class=&quot;hover:text-primary&quot;&gt;Edit&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;javascript:;&quot; class=&quot;hover:text-primary&quot;&gt;Delete&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Notation Icon -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Notation Icon</h5>
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
                    <div class="flex">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-14 h-14 rounded" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg mb-2 text-primary">Heading</h4>
                            <p class="media-text mb-4">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                            <ul class="flex space-x-4 rtl:space-x-reverse font-bold">
                                <li>
                                    <a href="javascript:;" class="flex items-center hover:text-primary">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:mr-1 rtl:ml-1"
                                        >
                                            <path
                                                d="M13.0867 21.3877L13.7321 21.7697L13.0867 21.3877ZM13.6288 20.4718L12.9833 20.0898L13.6288 20.4718ZM10.3712 20.4718L9.72579 20.8539H9.72579L10.3712 20.4718ZM10.9133 21.3877L11.5587 21.0057L10.9133 21.3877ZM2.3806 15.9134L3.07351 15.6264V15.6264L2.3806 15.9134ZM7.78958 18.9915L7.77666 19.7413L7.78958 18.9915ZM5.08658 18.6194L4.79957 19.3123H4.79957L5.08658 18.6194ZM21.6194 15.9134L22.3123 16.2004V16.2004L21.6194 15.9134ZM16.2104 18.9915L16.1975 18.2416L16.2104 18.9915ZM18.9134 18.6194L19.2004 19.3123H19.2004L18.9134 18.6194ZM19.6125 2.7368L19.2206 3.37628L19.6125 2.7368ZM21.2632 4.38751L21.9027 3.99563V3.99563L21.2632 4.38751ZM4.38751 2.7368L3.99563 2.09732V2.09732L4.38751 2.7368ZM2.7368 4.38751L2.09732 3.99563H2.09732L2.7368 4.38751ZM9.40279 19.2098L9.77986 18.5615L9.77986 18.5615L9.40279 19.2098ZM13.7321 21.7697L14.2742 20.8539L12.9833 20.0898L12.4412 21.0057L13.7321 21.7697ZM9.72579 20.8539L10.2679 21.7697L11.5587 21.0057L11.0166 20.0898L9.72579 20.8539ZM12.4412 21.0057C12.2485 21.3313 11.7515 21.3313 11.5587 21.0057L10.2679 21.7697C11.0415 23.0767 12.9585 23.0767 13.7321 21.7697L12.4412 21.0057ZM10.5 2.75H13.5V1.25H10.5V2.75ZM21.25 10.5V11.5H22.75V10.5H21.25ZM2.75 11.5V10.5H1.25V11.5H2.75ZM1.25 11.5C1.25 12.6546 1.24959 13.5581 1.29931 14.2868C1.3495 15.0223 1.45323 15.6344 1.68769 16.2004L3.07351 15.6264C2.92737 15.2736 2.84081 14.8438 2.79584 14.1847C2.75041 13.5189 2.75 12.6751 2.75 11.5H1.25ZM7.8025 18.2416C6.54706 18.2199 5.88923 18.1401 5.37359 17.9265L4.79957 19.3123C5.60454 19.6457 6.52138 19.7197 7.77666 19.7413L7.8025 18.2416ZM1.68769 16.2004C2.27128 17.6093 3.39066 18.7287 4.79957 19.3123L5.3736 17.9265C4.33223 17.4951 3.50486 16.6678 3.07351 15.6264L1.68769 16.2004ZM21.25 11.5C21.25 12.6751 21.2496 13.5189 21.2042 14.1847C21.1592 14.8438 21.0726 15.2736 20.9265 15.6264L22.3123 16.2004C22.5468 15.6344 22.6505 15.0223 22.7007 14.2868C22.7504 13.5581 22.75 12.6546 22.75 11.5H21.25ZM16.2233 19.7413C17.4786 19.7197 18.3955 19.6457 19.2004 19.3123L18.6264 17.9265C18.1108 18.1401 17.4529 18.2199 16.1975 18.2416L16.2233 19.7413ZM20.9265 15.6264C20.4951 16.6678 19.6678 17.4951 18.6264 17.9265L19.2004 19.3123C20.6093 18.7287 21.7287 17.6093 22.3123 16.2004L20.9265 15.6264ZM13.5 2.75C15.1512 2.75 16.337 2.75079 17.2619 2.83873C18.1757 2.92561 18.7571 3.09223 19.2206 3.37628L20.0044 2.09732C19.2655 1.64457 18.4274 1.44279 17.4039 1.34547C16.3915 1.24921 15.1222 1.25 13.5 1.25V2.75ZM22.75 10.5C22.75 8.87781 22.7508 7.6085 22.6545 6.59611C22.5572 5.57256 22.3554 4.73445 21.9027 3.99563L20.6237 4.77938C20.9078 5.24291 21.0744 5.82434 21.1613 6.73809C21.2492 7.663 21.25 8.84876 21.25 10.5H22.75ZM19.2206 3.37628C19.7925 3.72672 20.2733 4.20752 20.6237 4.77938L21.9027 3.99563C21.4286 3.22194 20.7781 2.57144 20.0044 2.09732L19.2206 3.37628ZM10.5 1.25C8.87781 1.25 7.6085 1.24921 6.59611 1.34547C5.57256 1.44279 4.73445 1.64457 3.99563 2.09732L4.77938 3.37628C5.24291 3.09223 5.82434 2.92561 6.73809 2.83873C7.663 2.75079 8.84876 2.75 10.5 2.75V1.25ZM2.75 10.5C2.75 8.84876 2.75079 7.663 2.83873 6.73809C2.92561 5.82434 3.09223 5.24291 3.37628 4.77938L2.09732 3.99563C1.64457 4.73445 1.44279 5.57256 1.34547 6.59611C1.24921 7.6085 1.25 8.87781 1.25 10.5H2.75ZM3.99563 2.09732C3.22194 2.57144 2.57144 3.22194 2.09732 3.99563L3.37628 4.77938C3.72672 4.20752 4.20752 3.72672 4.77938 3.37628L3.99563 2.09732ZM11.0166 20.0898C10.8136 19.7468 10.6354 19.4441 10.4621 19.2063C10.2795 18.9559 10.0702 18.7304 9.77986 18.5615L9.02572 19.8582C9.07313 19.8857 9.13772 19.936 9.24985 20.0898C9.37122 20.2564 9.50835 20.4865 9.72579 20.8539L11.0166 20.0898ZM7.77666 19.7413C8.21575 19.7489 8.49387 19.7545 8.70588 19.7779C8.90399 19.7999 8.98078 19.832 9.02572 19.8582L9.77986 18.5615C9.4871 18.3912 9.18246 18.3215 8.87097 18.287C8.57339 18.2541 8.21375 18.2487 7.8025 18.2416L7.77666 19.7413ZM14.2742 20.8539C14.4916 20.4865 14.6287 20.2564 14.7501 20.0898C14.8622 19.936 14.9268 19.8857 14.9742 19.8582L14.2201 18.5615C13.9298 18.7304 13.7204 18.9559 13.5379 19.2063C13.3646 19.4441 13.1864 19.7468 12.9833 20.0898L14.2742 20.8539ZM16.1975 18.2416C15.7862 18.2487 15.4266 18.2541 15.129 18.287C14.8175 18.3215 14.5129 18.3912 14.2201 18.5615L14.9742 19.8582C15.0192 19.832 15.096 19.7999 15.2941 19.7779C15.5061 19.7545 15.7842 19.7489 16.2233 19.7413L16.1975 18.2416Z"
                                                fill="currentColor"
                                            />
                                            <g opacity="0.5">
                                                <path
                                                    d="M9 11C9 11.5523 8.55228 12 8 12C7.44772 12 7 11.5523 7 11C7 10.4477 7.44772 10 8 10C8.55228 10 9 10.4477 9 11Z"
                                                    fill="currentColor"
                                                />
                                                <path
                                                    d="M13 11C13 11.5523 12.5523 12 12 12C11.4477 12 11 11.5523 11 11C11 10.4477 11.4477 10 12 10C12.5523 10 13 10.4477 13 11Z"
                                                    fill="currentColor"
                                                />
                                                <path
                                                    d="M17 11C17 11.5523 16.5523 12 16 12C15.4477 12 15 11.5523 15 11C15 10.4477 15.4477 10 16 10C16.5523 10 17 10.4477 17 11Z"
                                                    fill="currentColor"
                                                />
                                            </g>
                                        </svg>

                                        Reply
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="flex items-center hover:text-primary">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-3.5 h-3.5 ltr:mr-1 rtl:ml-1"
                                        >
                                            <path
                                                d="M15.2869 3.15178L14.3601 4.07866L5.83882 12.5999L5.83881 12.5999C5.26166 13.1771 4.97308 13.4656 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.32181 19.8021L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L4.19792 21.6782L7.47918 20.5844L7.47919 20.5844C8.25353 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5344 19.0269 10.8229 18.7383 11.4001 18.1612L11.4001 18.1612L19.9213 9.63993L20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            />
                                            <path
                                                opacity="0.5"
                                                d="M14.36 4.07812C14.36 4.07812 14.4759 6.04774 16.2138 7.78564C17.9517 9.52354 19.9213 9.6394 19.9213 9.6394M4.19789 21.6777L2.32178 19.8015"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            />
                                        </svg>

                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="flex items-center hover:text-primary">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ltr:mr-1 rtl:ml-1"
                                        >
                                            <path
                                                opacity="0.5"
                                                d="M9.17065 4C9.58249 2.83481 10.6937 2 11.9999 2C13.3062 2 14.4174 2.83481 14.8292 4"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                            />
                                            <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            <path
                                                d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                            />
                                            <path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            <path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>

                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code10')">
                    <highlight>
                        <pre>
&lt;!-- notation icon --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-14 h-14 rounded&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text mb-4&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
    &lt;ul class=&quot;flex space-x-4 rtl:space-x-reverse font-bold&quot;&gt;
      &lt;li&gt;
        &lt;a href=&quot;javascript:;&quot; class=&quot;flex items-center hover:text-primary&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
          Reply
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a href=&quot;javascript:;&quot; class=&quot;flex items-center hover:text-primary&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
          Edit
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a href=&quot;javascript:;&quot; class=&quot;flex items-center hover:text-primary&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
          Delete
        &lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Badge -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Badge</h5>
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
                    <div class="flex">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-14 h-14 rounded" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg mb-2 text-primary">
                                Heading <span class="badge bg-primary ltr:float-right rtl:float-left">Web Designer</span>
                            </h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code11')">
                    <highlight>
                        <pre>
&lt;!-- badge --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-14 h-14 rounded&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg mb-2 text-primary&quot;&gt;Heading &lt;span class=&quot;badge bg-primary ltr:float-right rtl:float-left&quot;&gt;Web Designer&lt;/span&gt;&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Dropdown -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Dropdown List</h5>
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
                    <div class="flex">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <img src="/assets/images/profile-5.jpeg" alt="" class="w-14 h-14 rounded" />
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between mb-2">
                                <h4 class="font-semibold text-lg text-primary">Heading</h4>
                                <div class="dropdown">
                                    <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                        <a href="javascript:;">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 opacity-70 text-white-dark"
                                            >
                                                <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                                <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                                <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                            </svg>
                                        </a>
                                        <template #content="{ close }">
                                            <ul @click="close()" class="whitespace-nowrap">
                                                <li>
                                                    <a href="javascript:;">
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5 ltr:mr-1 rtl:ml-1"
                                                        >
                                                            <g opacity="0.5">
                                                                <path
                                                                    d="M9 12C9 12.5523 8.55228 13 8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11C8.55228 11 9 11.4477 9 12Z"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12Z"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M17 12C17 12.5523 16.5523 13 16 13C15.4477 13 15 12.5523 15 12C15 11.4477 15.4477 11 16 11C16.5523 11 17 11.4477 17 12Z"
                                                                    fill="currentColor"
                                                                />
                                                            </g>
                                                            <path
                                                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                            />
                                                        </svg>
                                                        Start chat
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5 ltr:mr-1 rtl:ml-1"
                                                        >
                                                            <path
                                                                d="M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                            />
                                                            <path
                                                                opacity="0.5"
                                                                d="M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                            />
                                                            <path
                                                                opacity="0.5"
                                                                d="M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                                stroke-linecap="round"
                                                            />
                                                        </svg>
                                                        Make a call
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5 ltr:mr-1 rtl:ml-1"
                                                        >
                                                            <path d="M22 22H2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                            <path
                                                                opacity="0.5"
                                                                d="M21 22V14.5C21 13.6716 20.3284 13 19.5 13H16.5C15.6716 13 15 13.6716 15 14.5V22"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                            />
                                                            <path
                                                                d="M15 22V5C15 3.58579 15 2.87868 14.5607 2.43934C14.1213 2 13.4142 2 12 2C10.5858 2 9.87868 2 9.43934 2.43934C9 2.87868 9 3.58579 9 5V22"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                            />
                                                            <path
                                                                opacity="0.5"
                                                                d="M9 22V9.5C9 8.67157 8.32843 8 7.5 8H4.5C3.67157 8 3 8.67157 3 9.5V22"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                            />
                                                        </svg>

                                                        Statistics
                                                    </a>
                                                </li>
                                            </ul>
                                        </template>
                                    </Popper>
                                </div>
                            </div>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code12')">
                    <highlight>
                        <pre>
&lt;!-- dropdown --&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;img src=&quot;/assets/images/profile-5.jpeg&quot; alt=&quot;&quot; class=&quot;w-14 h-14 rounded&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;div class=&quot;flex justify-between mb-2&quot;&gt;
      &lt;h4 class=&quot;font-semibold text-lg text-primary&quot;&gt;Heading&lt;/h4&gt;
      &lt;div class=&quot;dropdown&quot;&gt;
        &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
          &lt;a href=&quot;javascript:;&quot;&gt;
            &lt;svg&gt; ... &lt;/svg&gt;
          &lt;/a&gt;
          &lt;template #content=&quot;{ close }&quot;&gt;
            &lt;ul @click=&quot;close()&quot; class=&quot;whitespace-nowrap&quot;&gt;
              &lt;li&gt;
                &lt;a href=&quot;javascript:;&quot;&gt;
                  &lt;svg&gt; ... &lt;/svg&gt;
                  Start chat
                &lt;/a&gt;
              &lt;/li&gt;
              &lt;li&gt;
                &lt;a href=&quot;javascript:;&quot;&gt;
                  &lt;svg&gt; ... &lt;/svg&gt;
                  Make a call
                &lt;/a&gt;
              &lt;/li&gt;
              &lt;li&gt;
                &lt;a href=&quot;javascript:;&quot;&gt;
                  &lt;svg&gt; ... &lt;/svg&gt;
                  Statistics
                &lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/template&gt;
        &lt;/Popper&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
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
            <!-- Labels -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Labels</h5>
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
                    <div class="flex items-center mb-5">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-danger">
                                <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-warning">
                                <path
                                    opacity="0.5"
                                    d="M5.31171 10.7615C8.23007 5.58716 9.68925 3 12 3C14.3107 3 15.7699 5.58716 18.6883 10.7615L19.0519 11.4063C21.4771 15.7061 22.6897 17.856 21.5937 19.428C20.4978 21 17.7864 21 12.3637 21H11.6363C6.21356 21 3.50217 21 2.40626 19.428C1.31034 17.856 2.52291 15.7061 4.94805 11.4063L5.31171 10.7615Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                                <path d="M12 8V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <circle cx="12" cy="16" r="1" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code13')">
                    <highlight>
                        <pre>
&lt;!-- error --&gt;
&lt;div class=&quot;flex items-center mb-5&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;flex items-center&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Checkbox -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Checkbox</h5>
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
                    <div class="flex mb-5">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <input type="checkbox" class="form-checkbox mt-1.5" checked />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <input type="checkbox" class="form-checkbox mt-1.5" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code14')">
                    <highlight>
                        <pre>
&lt;!-- checkbox --&gt;
&lt;div class=&quot;flex mb-5&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox mt-1.5&quot; checked /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox mt-1.5&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Radio -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Radio</h5>
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
                    <div class="flex mb-5">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <input type="radio" class="form-radio mt-1.5" name="radio" checked />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="ltr:mr-4 rtl:ml-4">
                            <input type="radio" class="form-radio mt-1.5" name="radio" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-lg text-primary">Heading</h4>
                            <p class="media-text">
                                Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque.
                            </p>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code15')">
                    <highlight>
                        <pre>
&lt;!-- radio --&gt;
&lt;div class=&quot;flex mb-5&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;form-radio mt-1.5&quot; name=&quot;radio&quot; checked /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;flex&quot;&gt;
  &lt;div class=&quot;ltr:mr-4 rtl:ml-4&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;form-radio mt-1.5&quot; name=&quot;radio&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-1&quot;&gt;
    &lt;h4 class=&quot;font-semibold text-lg text-primary&quot;&gt;Heading&lt;/h4&gt;
    &lt;p class=&quot;media-text&quot;&gt;
      Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida
      neque.
    &lt;/p&gt;
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
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Media Object' });
    const store = useAppStore();
    const { codeArr, toggleCode } = codePreview();
</script>
