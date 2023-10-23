<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Components</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Pricing Table</span>
            </li>
        </ul>
        <div class="pt-5 space-y-8">
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
                    <div class="max-w-[320px] md:max-w-[990px] mx-auto">
                        <div class="md:flex justify-between space-y-4 md:space-y-0 md:space-x-4 rtl:space-x-reverse">
                            <div class="p-3 lg:p-5 border border-black dark:border-[#1b2e4b] text-center rounded group hover:border-primary">
                                <h3 class="text-xl lg:text-2xl">Beginner Savers</h3>
                                <div class="border-t border-black dark:border-white-dark w-1/5 mx-auto my-6 group-hover:border-primary"></div>
                                <p class="text-[15px]">For people who are starting out in the water saving business</p>
                                <div class="my-7 p-2.5 text-center text-lg group-hover:text-primary">
                                    <strong class="text-[#3b3f5c] dark:text-white-dark text-3xl lg:text-5xl group-hover:text-primary">$19</strong> / monthly
                                </div>
                                <ul class="space-y-2.5 mb-5 font-semibold group-hover:text-primary">
                                    <li class="flex justify-center items-center">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-3.5 h-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180 shrink-0"
                                        >
                                            <path
                                                d="M4 12H20M20 12L14 6M20 12L14 18"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                        Free water saving e-book
                                    </li>
                                    <li class="flex justify-center items-center">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-3.5 h-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180 shrink-0"
                                        >
                                            <path
                                                d="M4 12H20M20 12L14 6M20 12L14 18"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                        Free access to forums
                                    </li>
                                    <li class="flex justify-center items-center">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-3.5 h-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180 shrink-0"
                                        >
                                            <path
                                                d="M4 12H20M20 12L14 6M20 12L14 18"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                        Beginners tips
                                    </li>
                                </ul>
                                <a
                                    href="#"
                                    target="_self"
                                    class="btn text-black shadow-none group-hover:text-primary group-hover:border-primary group-hover:bg-primary/10 dark:text-white-dark dark:border-white-dark/50"
                                    >Buy Now</a
                                >
                            </div>
                            <div class="p-3 lg:p-5 border border-black dark:border-[#1b2e4b] text-center rounded group hover:border-primary">
                                <h3 class="text-xl lg:text-2xl">Advanced Savers</h3>
                                <div class="border-t border-black dark:border-white-dark w-1/5 mx-auto my-6 group-hover:border-primary"></div>
                                <p class="text-[15px]">For experienced water savers who'd like to push their limits</p>
                                <div class="my-7 p-2.5 text-center text-lg group-hover:text-primary">
                                    <strong class="text-[#3b3f5c] dark:text-white-dark text-3xl lg:text-5xl group-hover:text-primary">$29</strong> / monthly
                                </div>
                                <ul class="space-y-2.5 mb-5 font-semibold group-hover:text-primary">
                                    <li class="flex justify-center items-center">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-3.5 h-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180 shrink-0"
                                        >
                                            <path
                                                d="M4 12H20M20 12L14 6M20 12L14 18"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                        Free water saving e-book
                                    </li>
                                    <li class="flex justify-center items-center">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-3.5 h-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180 shrink-0"
                                        >
                                            <path
                                                d="M4 12H20M20 12L14 6M20 12L14 18"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                        Free access to forums
                                    </li>
                                    <li class="flex justify-center items-center">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-3.5 h-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180 shrink-0"
                                        >
                                            <path
                                                d="M4 12H20M20 12L14 6M20 12L14 18"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                        Advanced saving tips
                                    </li>
                                </ul>
                                <a
                                    href="#"
                                    target="_self"
                                    class="btn text-black shadow-none group-hover:text-primary group-hover:border-primary group-hover:bg-primary/10 dark:text-white-dark dark:border-white-dark/50"
                                    >Buy Now</a
                                >
                            </div>
                            <div class="p-3 lg:p-5 border border-black dark:border-[#1b2e4b] text-center rounded group hover:border-primary">
                                <h3 class="text-xl lg:text-2xl">Pro Savers</h3>
                                <div class="border-t border-black dark:border-white-dark w-1/5 mx-auto my-6 group-hover:border-primary"></div>
                                <p class="text-[15px]">For all the professionals who'd like to educate others, too</p>
                                <div class="my-7 p-2.5 text-center text-lg group-hover:text-primary">
                                    <strong class="text-[#3b3f5c] dark:text-white-dark text-3xl lg:text-5xl group-hover:text-primary">$79</strong> / monthly
                                </div>
                                <ul class="space-y-2.5 mb-5 font-semibold group-hover:text-primary">
                                    <li class="flex justify-center items-center">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-3.5 h-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180 shrink-0"
                                        >
                                            <path
                                                d="M4 12H20M20 12L14 6M20 12L14 18"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                        Access to all books
                                    </li>
                                    <li class="flex justify-center items-center">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-3.5 h-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180 shrink-0"
                                        >
                                            <path
                                                d="M4 12H20M20 12L14 6M20 12L14 18"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                        Unlimited board topics
                                    </li>
                                    <li class="flex justify-center items-center">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-3.5 h-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180 shrink-0"
                                        >
                                            <path
                                                d="M4 12H20M20 12L14 6M20 12L14 18"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                        Beginners tips
                                    </li>
                                </ul>
                                <a
                                    href="#"
                                    target="_self"
                                    class="btn text-black shadow-none group-hover:text-primary group-hover:border-primary group-hover:bg-primary/10 dark:text-white-dark dark:border-white-dark/50"
                                    >Buy Now</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- basic --&gt;
&lt;div class=&quot;max-w-[320px] md:max-w-[990px] mx-auto&quot;&gt;
  &lt;div class=&quot;md:flex justify-between space-y-4 md:space-y-0 md:space-x-4 rtl:space-x-reverse&quot;&gt;
    &lt;div class=&quot;p-3 lg:p-5 border border-black dark:border-[#1b2e4b] text-center rounded group hover:border-primary&quot;&gt;
      &lt;h3 class=&quot;text-xl lg:text-2xl&quot;&gt;Beginner Savers&lt;/h3&gt;
      &lt;div class=&quot;border-t border-black dark:border-white-dark w-1/5 mx-auto my-6 group-hover:border-primary&quot;&gt;&lt;/div&gt;
      &lt;p class=&quot;text-[15px]&quot;&gt;For people who are starting out in the water saving business&lt;/p&gt;
      &lt;div class=&quot;my-7 p-2.5 text-center text-lg group-hover:text-primary&quot;&gt;
        &lt;strong class=&quot;text-[#3b3f5c] dark:text-white-dark text-3xl lg:text-5xl group-hover:text-primary&quot;&gt;$19&lt;/strong&gt; / monthly
      &lt;/div&gt;
      &lt;ul class=&quot;space-y-2.5 mb-5 font-semibold group-hover:text-primary&quot;&gt;
        &lt;li class=&quot;flex justify-center items-center&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
          Free water saving e-book
        &lt;/li&gt;
        &lt;li class=&quot;flex justify-center items-center&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
          Free access to forums
        &lt;/li&gt;
        &lt;li class=&quot;flex justify-center items-center&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
          Beginners tips
        &lt;/li&gt;
      &lt;/ul&gt;
      &lt;a
        href=&quot;#&quot;
        target=&quot;_self&quot;
        class=&quot;btn text-black shadow-none group-hover:text-primary group-hover:border-primary group-hover:bg-primary/10 dark:text-white-dark dark:border-white-dark/50&quot;
        &gt;Buy Now&lt;/a
      &gt;
    &lt;/div&gt;
    &lt;div class=&quot;p-3 lg:p-5 border border-black dark:border-[#1b2e4b] text-center rounded group hover:border-primary&quot;&gt;
      &lt;h3 class=&quot;text-xl lg:text-2xl&quot;&gt;Advanced Savers&lt;/h3&gt;
      &lt;div class=&quot;border-t border-black dark:border-white-dark w-1/5 mx-auto my-6 group-hover:border-primary&quot;&gt;&lt;/div&gt;
      &lt;p class=&quot;text-[15px]&quot;&gt;For experienced water savers who'd like to push their limits&lt;/p&gt;
      &lt;div class=&quot;my-7 p-2.5 text-center text-lg group-hover:text-primary&quot;&gt;
        &lt;strong class=&quot;text-[#3b3f5c] dark:text-white-dark text-3xl lg:text-5xl group-hover:text-primary&quot;&gt;$29&lt;/strong&gt; / monthly
      &lt;/div&gt;
      &lt;ul class=&quot;space-y-2.5 mb-5 font-semibold group-hover:text-primary&quot;&gt;
        &lt;li class=&quot;flex justify-center items-center&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
          Free water saving e-book
        &lt;/li&gt;
        &lt;li class=&quot;flex justify-center items-center&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
          Free access to forums
        &lt;/li&gt;
        &lt;li class=&quot;flex justify-center items-center&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
          Advanced saving tips
        &lt;/li&gt;
      &lt;/ul&gt;
      &lt;a
        href=&quot;#&quot;
        target=&quot;_self&quot;
        class=&quot;btn text-black shadow-none group-hover:text-primary group-hover:border-primary group-hover:bg-primary/10 dark:text-white-dark dark:border-white-dark/50&quot;
        &gt;Buy Now&lt;/a
      &gt;
    &lt;/div&gt;
    &lt;div class=&quot;p-3 lg:p-5 border border-black dark:border-[#1b2e4b] text-center rounded group hover:border-primary&quot;&gt;
      &lt;h3 class=&quot;text-xl lg:text-2xl&quot;&gt;Pro Savers&lt;/h3&gt;
      &lt;div class=&quot;border-t border-black dark:border-white-dark w-1/5 mx-auto my-6 group-hover:border-primary&quot;&gt;&lt;/div&gt;
      &lt;p class=&quot;text-[15px]&quot;&gt;For all the professionals who'd like to educate others, too&lt;/p&gt;
      &lt;div class=&quot;my-7 p-2.5 text-center text-lg group-hover:text-primary&quot;&gt;
        &lt;strong class=&quot;text-[#3b3f5c] dark:text-white-dark text-3xl lg:text-5xl group-hover:text-primary&quot;&gt;$79&lt;/strong&gt; / monthly
      &lt;/div&gt;
      &lt;ul class=&quot;space-y-2.5 mb-5 font-semibold group-hover:text-primary&quot;&gt;
        &lt;li class=&quot;flex justify-center items-center&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
          Access to all books
        &lt;/li&gt;
        &lt;li class=&quot;flex justify-center items-center&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
          Unlimited board topics
        &lt;/li&gt;
        &lt;li class=&quot;flex justify-center items-center&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
          Beginners tips
        &lt;/li&gt;
      &lt;/ul&gt;
      &lt;a
        href=&quot;#&quot;
        target=&quot;_self&quot;
        class=&quot;btn text-black shadow-none group-hover:text-primary group-hover:border-primary group-hover:bg-primary/10 dark:text-white-dark dark:border-white-dark/50&quot;
        &gt;Buy Now&lt;/a
      &gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Toggle -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Toggle</h5>
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
                    <div class="max-w-[320px] md:max-w-[1140px] mx-auto dark:text-white-dark">
                        <div class="mt-5 md:mt-10 text-center flex justify-center space-x-4 rtl:space-x-reverse font-semibold text-base">
                            <span :class="!yearlyPrice ? 'text-primary' : 'text-white-dark'">Monthly</span>

                            <label class="w-12 h-6 relative">
                                <input
                                    id="custom_switch_checkbox1"
                                    type="checkbox"
                                    class="custom_switch absolute ltr:left-0 rtl:right-0 top-0 w-full h-full opacity-0 z-10 cursor-pointer peer"
                                    v-model="yearlyPrice"
                                />
                                <span
                                    for="custom_switch_checkbox1"
                                    class="outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute ltr:before:left-1 rtl:before:right-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center ltr:peer-checked:before:left-7 rtl:peer-checked:before:right-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300"
                                ></span>
                            </label>
                            <span class="relative" :class="yearlyPrice ? 'text-primary' : 'text-white-dark'"
                                >Yearly
                                <span
                                    class="badge bg-success rounded-full absolute ltr:left-full rtl:right-full whitespace-nowrap ltr:ml-2 rtl:mr-2 my-auto hidden"
                                    >20% Off</span
                                ></span
                            >
                        </div>
                        <div class="md:flex space-y-4 md:space-y-0 mt-5 md:mt-16 text-white-dark">
                            <div
                                class="p-4 lg:p-9 border ltr:md:border-r-0 rtl:md:border-l-0 border-[#e0e6ed] dark:border-[#1b2e4b] rounded-md ltr:md:rounded-r-none rtl:md:rounded-l-none transition-all duration-300 hover:shadow-[0_0_15px_1px_rgba(113,106,202,0.20)]"
                            >
                                <h3 class="text-xl mb-5 font-semibold text-[#0e1726] dark:text-white-light">Cloud Hosting</h3>
                                <p>cPanel/WHM included. Intel Xeon E3 with guaranteed 2GB RAM.</p>
                                <div class="my-7 p-2.5 text-center text-lg">
                                    <strong class="text-[#3b3f5c] dark:text-white-light text-xl lg:text-3xl">$25</strong> / monthly
                                </div>
                                <div class="mb-6">
                                    <strong class="text-[#0e1726] dark:text-white-light text-[15px] mb-3 inline-block">Cloud Hosting Features</strong>
                                    <ul class="space-y-3">
                                        <li>Single Domain</li>
                                        <li>50 GB SSD</li>
                                        <li>1 TB Premium Bandwidth</li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-dark w-full">Buy Now</button>
                            </div>
                            <div class="relative p-4 pt-14 lg:p-9 border border-[#e0e6ed] dark:border-[#1b2e4b] transition-all duration-300 rounded-t-md">
                                <div
                                    class="absolute top-0 md:-top-[30px] inset-x-0 bg-primary text-white h-10 flex items-center justify-center text-base rounded-t-md"
                                >
                                    Most Popular
                                </div>
                                <h3 class="text-xl mb-5 font-semibold text-[#0e1726] dark:text-white-light">VPS Hosting</h3>
                                <p>cPanel/WHM included. Intel Xeon E5 with guaranteed 4GB RAM.</p>
                                <div class="my-7 p-2.5 text-center text-lg"><strong class="text-primary text-xl lg:text-4xl">$70</strong> / monthly</div>
                                <div class="mb-6">
                                    <strong class="text-[#0e1726] dark:text-white-light text-[15px] mb-3 inline-block">VPS Hosting Features</strong>
                                    <ul class="space-y-3">
                                        <li>5 Domains</li>
                                        <li>100 GB SSD</li>
                                        <li>2 TB Premium Bandwidth</li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-primary w-full">Buy Now</button>
                            </div>
                            <div
                                class="p-4 lg:p-9 border ltr:md:border-l-0 rtl:md:border-r-0 border-[#e0e6ed] dark:border-[#1b2e4b] rounded-md ltr:md:rounded-l-none rtl:md:rounded-r-none transition-all duration-300 hover:shadow-[0_0_15px_1px_rgba(113,106,202,0.20)]"
                            >
                                <h3 class="text-xl mb-5 font-semibold text-[#0e1726] dark:text-white-light">Business Hosting</h3>
                                <p>cPanel/WHM included. Intel Xeon E5 with guaranteed 8GB RAM.</p>
                                <div class="my-7 p-2.5 text-center text-lg">
                                    <strong class="text-[#3b3f5c] dark:text-white-light text-xl lg:text-3xl">$115</strong> / monthly
                                </div>
                                <div class="mb-6">
                                    <strong class="text-[#0e1726] dark:text-white-light text-[15px] mb-3 inline-block">Business Hosting Features</strong>
                                    <ul class="space-y-3">
                                        <li>Unlimited Domains</li>
                                        <li>1 TB SSD</li>
                                        <li>5 TB Premium Bandwidth</li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-dark w-full">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- toggle --&gt;
&lt;div class=&quot;max-w-[320px] md:max-w-[1140px] mx-auto dark:text-white-dark&quot;&gt;
  &lt;div class=&quot;mt-5 md:mt-10 text-center flex justify-center space-x-4 rtl:space-x-reverse font-semibold text-base&quot;&gt;
    &lt;span :class=&quot;!yearlyPrice ? 'text-primary' : 'text-white-dark'&quot;&gt;Monthly&lt;/span&gt;

    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
      &lt;input
        id=&quot;custom_switch_checkbox1&quot;
        type=&quot;checkbox&quot;
        class=&quot;custom_switch absolute ltr:left-0 rtl:right-0 top-0 w-full h-full opacity-0 z-10 cursor-pointer peer&quot;
        v-model=&quot;yearlyPrice&quot;
      /&gt;
      &lt;span
        for=&quot;custom_switch_checkbox1&quot;
        class=&quot;
          outline_checkbox
          bg-icon
          border-2 border-[#ebedf2]
          dark:border-white-dark
          block
          h-full
          rounded-full
          before:absolute
          ltr:before:left-1
          rtl:before:right-1
          before:bg-[#ebedf2]
          dark:before:bg-white-dark
          before:bottom-1 before:w-4 before:h-4 before:rounded-full before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center
          ltr:peer-checked:before:left-7
          rtl:peer-checked:before:right-7
          peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary
          before:transition-all before:duration-300
        &quot;
      &gt;&lt;/span&gt;
    &lt;/label&gt;
    &lt;span class=&quot;relative&quot; :class=&quot;yearlyPrice ? 'text-primary' : 'text-white-dark'&quot;
      &gt;Yearly &lt;span class=&quot;badge bg-success rounded-full absolute ltr:left-full rtl:right-full whitespace-nowrap ltr:ml-2 rtl:mr-2 my-auto hidden&quot;&gt;20% Off&lt;/span&gt;&lt;/span
    &gt;
  &lt;/div&gt;
  &lt;div class=&quot;md:flex space-y-4 md:space-y-0 mt-5 md:mt-16 text-white-dark&quot;&gt;
    &lt;div
      class=&quot;
        p-4
        lg:p-9
        border
        ltr:md:border-r-0
        rtl:md:border-l-0
        border-[#e0e6ed]
        dark:border-[#1b2e4b]
        rounded-md
        ltr:md:rounded-r-none
        rtl:md:rounded-l-none
        transition-all
        duration-300
        hover:shadow-[0_0_15px_1px_rgba(113,106,202,0.20)]
      &quot;
    &gt;
      &lt;h3 class=&quot;text-xl mb-5 font-semibold text-[#0e1726] dark:text-white-light&quot;&gt;Cloud Hosting&lt;/h3&gt;
      &lt;p&gt;cPanel/WHM included. Intel Xeon E3 with guaranteed 2GB RAM.&lt;/p&gt;
      &lt;div class=&quot;my-7 p-2.5 text-center text-lg&quot;&gt;&lt;strong class=&quot;text-[#3b3f5c] dark:text-white-light text-xl lg:text-3xl&quot;&gt;$25&lt;/strong&gt; / monthly&lt;/div&gt;
      &lt;div class=&quot;mb-6&quot;&gt;
        &lt;strong class=&quot;text-[#0e1726] dark:text-white-light text-[15px] mb-3 inline-block&quot;&gt;Cloud Hosting Features&lt;/strong&gt;
        &lt;ul class=&quot;space-y-3&quot;&gt;
          &lt;li&gt;Single Domain&lt;/li&gt;
          &lt;li&gt;50 GB SSD&lt;/li&gt;
          &lt;li&gt;1 TB Premium Bandwidth&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-dark w-full&quot;&gt;Buy Now&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;relative p-4 pt-14 lg:p-9 border border-[#e0e6ed] dark:border-[#1b2e4b] transition-all duration-300 rounded-t-md&quot;&gt;
      &lt;div class=&quot;absolute top-0 md:-top-[30px] inset-x-0 bg-primary text-white h-10 flex items-center justify-center text-base rounded-t-md&quot;&gt;Most Popular&lt;/div&gt;
      &lt;h3 class=&quot;text-xl mb-5 font-semibold text-[#0e1726] dark:text-white-light&quot;&gt;VPS Hosting&lt;/h3&gt;
      &lt;p&gt;cPanel/WHM included. Intel Xeon E5 with guaranteed 4GB RAM.&lt;/p&gt;
      &lt;div class=&quot;my-7 p-2.5 text-center text-lg&quot;&gt;&lt;strong class=&quot;text-primary text-xl lg:text-4xl&quot;&gt;$70&lt;/strong&gt; / monthly&lt;/div&gt;
      &lt;div class=&quot;mb-6&quot;&gt;
        &lt;strong class=&quot;text-[#0e1726] dark:text-white-light text-[15px] mb-3 inline-block&quot;&gt;VPS Hosting Features&lt;/strong&gt;
        &lt;ul class=&quot;space-y-3&quot;&gt;
          &lt;li&gt;5 Domains&lt;/li&gt;
          &lt;li&gt;100 GB SSD&lt;/li&gt;
          &lt;li&gt;2 TB Premium Bandwidth&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-primary w-full&quot;&gt;Buy Now&lt;/button&gt;
    &lt;/div&gt;
    &lt;div
      class=&quot;
        p-4
        lg:p-9
        border
        ltr:md:border-l-0
        rtl:md:border-r-0
        border-[#e0e6ed]
        dark:border-[#1b2e4b]
        rounded-md
        ltr:md:rounded-l-none
        rtl:md:rounded-r-none
        transition-all
        duration-300
        hover:shadow-[0_0_15px_1px_rgba(113,106,202,0.20)]
      &quot;
    &gt;
      &lt;h3 class=&quot;text-xl mb-5 font-semibold text-[#0e1726] dark:text-white-light&quot;&gt;Business Hosting&lt;/h3&gt;
      &lt;p&gt;cPanel/WHM included. Intel Xeon E5 with guaranteed 8GB RAM.&lt;/p&gt;
      &lt;div class=&quot;my-7 p-2.5 text-center text-lg&quot;&gt;&lt;strong class=&quot;text-[#3b3f5c] dark:text-white-light text-xl lg:text-3xl&quot;&gt;$115&lt;/strong&gt; / monthly&lt;/div&gt;
      &lt;div class=&quot;mb-6&quot;&gt;
        &lt;strong class=&quot;text-[#0e1726] dark:text-white-light text-[15px] mb-3 inline-block&quot;&gt;Business Hosting Features&lt;/strong&gt;
        &lt;ul class=&quot;space-y-3&quot;&gt;
          &lt;li&gt;Unlimited Domains&lt;/li&gt;
          &lt;li&gt;1 TB SSD&lt;/li&gt;
          &lt;li&gt;5 TB Premium Bandwidth&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-dark w-full&quot;&gt;Buy Now&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
            <!-- Animated -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Animated</h5>
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
                    <div class="max-w-[1140px] mx-auto mt-20 dark:text-white-dark">
                        <div class="md:flex justify-between space-y-14 md:space-y-0 md:space-x-4 rtl:space-x-reverse">
                            <div class="border border-[#e0e6ed] dark:border-[#1b2e4b] rounded transition-all duration-300 group">
                                <div class="border-b border-[#e0e6ed] dark:border-[#1b2e4b] p-5 pt-0">
                                    <span
                                        class="bg-white dark:bg-[#0e1726] text-[#3b3f5c] dark:text-white-light border-2 border-primary w-[70px] h-[70px] lg:w-[100px] lg:h-[100px] rounded flex justify-center items-center text-xl lg:text-3xl font-bold -mt-[30px] shadow-[0_0_15px_1px_rgba(113,106,202,0.20)] transition-all duration-300 group-hover:-translate-y-[10px]"
                                        >$49</span
                                    >
                                    <h3 class="text-xl lg:text-2xl mt-4 mb-2.5">Freelancer</h3>
                                    <p class="text-[15px]">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="p-5">
                                    <ul class="space-y-2.5 mb-5 font-semibold">
                                        <li>Support forum</li>
                                        <li>Free hosting</li>
                                        <li>2 hours of support</li>
                                        <li>5GB of storage space</li>
                                    </ul>
                                    <a href="#" target="_self" class="btn btn-primary w-full">Buy Now</a>
                                </div>
                            </div>
                            <div class="border border-[#e0e6ed] dark:border-[#1b2e4b] rounded transition-all duration-300 group">
                                <div class="border-b border-[#e0e6ed] dark:border-[#1b2e4b] p-5 pt-0">
                                    <span
                                        class="bg-white dark:bg-[#0e1726] text-[#3b3f5c] dark:text-white-light border-2 border-primary w-[70px] h-[70px] lg:w-[100px] lg:h-[100px] rounded flex justify-center items-center text-xl lg:text-3xl font-bold -mt-[30px] shadow-[0_0_15px_1px_rgba(113,106,202,0.20)] transition-all duration-300 group-hover:-translate-y-[10px]"
                                        >$89</span
                                    >
                                    <h3 class="text-xl lg:text-2xl mt-4 mb-2.5">Small business</h3>
                                    <p class="text-[15px]">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="p-5">
                                    <ul class="space-y-2.5 mb-5 font-semibold">
                                        <li>Unlimited calls</li>
                                        <li>Free hosting</li>
                                        <li>10 hours of support</li>
                                        <li>10GB of storage space</li>
                                    </ul>
                                    <a href="#" target="_self" class="btn btn-primary w-full">Buy Now</a>
                                </div>
                            </div>
                            <div class="border border-[#e0e6ed] dark:border-[#1b2e4b] rounded transition-all duration-300 group">
                                <div class="border-b border-[#e0e6ed] dark:border-[#1b2e4b] p-5 pt-0">
                                    <span
                                        class="bg-white dark:bg-[#0e1726] text-[#3b3f5c] dark:text-white-light border-2 border-primary w-[70px] h-[70px] lg:w-[100px] lg:h-[100px] rounded flex justify-center items-center text-xl lg:text-3xl font-bold -mt-[30px] shadow-[0_0_15px_1px_rgba(113,106,202,0.20)] transition-all duration-300 group-hover:-translate-y-[10px]"
                                        >$129</span
                                    >
                                    <h3 class="text-xl lg:text-2xl mt-4 mb-2.5">Larger business</h3>
                                    <p class="text-[15px]">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="p-5">
                                    <ul class="space-y-2.5 mb-5 font-semibold">
                                        <li>Unlimited calls</li>
                                        <li>Free hosting</li>
                                        <li>Unlimited hours of support</li>
                                        <li>1TB of storage space</li>
                                    </ul>
                                    <a href="#" target="_self" class="btn btn-primary w-full">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- animated --&gt;
&lt;div class=&quot;max-w-[1140px] mx-auto mt-20 dark:text-white-dark&quot;&gt;
  &lt;div class=&quot;md:flex justify-between space-y-14 md:space-y-0 md:space-x-4 rtl:space-x-reverse&quot;&gt;
    &lt;div class=&quot;border border-[#e0e6ed] dark:border-[#1b2e4b] rounded transition-all duration-300 group&quot;&gt;
      &lt;div class=&quot;border-b border-[#e0e6ed] dark:border-[#1b2e4b] p-5 pt-0&quot;&gt;
        &lt;span
          class=&quot;
            bg-white
            dark:bg-[#0e1726]
            text-[#3b3f5c]
            dark:text-white-light
            border-2 border-primary
            w-[70px]
            h-[70px]
            lg:w-[100px] lg:h-[100px]
            rounded
            flex
            justify-center
            items-center
            text-xl
            lg:text-3xl
            font-bold
            -mt-[30px]
            shadow-[0_0_15px_1px_rgba(113,106,202,0.20)]
            transition-all
            duration-300
            group-hover:-translate-y-[10px]
          &quot;
          &gt;$49&lt;/span
        &gt;
        &lt;h3 class=&quot;text-xl lg:text-2xl mt-4 mb-2.5&quot;&gt;Freelancer&lt;/h3&gt;
        &lt;p class=&quot;text-[15px]&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;p-5&quot;&gt;
        &lt;ul class=&quot;space-y-2.5 mb-5 font-semibold&quot;&gt;
          &lt;li&gt;Support forum&lt;/li&gt;
          &lt;li&gt;Free hosting&lt;/li&gt;
          &lt;li&gt;2 hours of support&lt;/li&gt;
          &lt;li&gt;5GB of storage space&lt;/li&gt;
        &lt;/ul&gt;
        &lt;a href=&quot;#&quot; target=&quot;_self&quot; class=&quot;btn btn-primary w-full&quot;&gt;Buy Now&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;border border-[#e0e6ed] dark:border-[#1b2e4b] rounded transition-all duration-300 group&quot;&gt;
      &lt;div class=&quot;border-b border-[#e0e6ed] dark:border-[#1b2e4b] p-5 pt-0&quot;&gt;
        &lt;span
          class=&quot;
            bg-white
            dark:bg-[#0e1726]
            text-[#3b3f5c]
            dark:text-white-light
            border-2 border-primary
            w-[70px]
            h-[70px]
            lg:w-[100px] lg:h-[100px]
            rounded
            flex
            justify-center
            items-center
            text-xl
            lg:text-3xl
            font-bold
            -mt-[30px]
            shadow-[0_0_15px_1px_rgba(113,106,202,0.20)]
            transition-all
            duration-300
            group-hover:-translate-y-[10px]
          &quot;
          &gt;$89&lt;/span
        &gt;
        &lt;h3 class=&quot;text-xl lg:text-2xl mt-4 mb-2.5&quot;&gt;Small business&lt;/h3&gt;
        &lt;p class=&quot;text-[15px]&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;p-5&quot;&gt;
        &lt;ul class=&quot;space-y-2.5 mb-5 font-semibold&quot;&gt;
          &lt;li&gt;Unlimited calls&lt;/li&gt;
          &lt;li&gt;Free hosting&lt;/li&gt;
          &lt;li&gt;10 hours of support&lt;/li&gt;
          &lt;li&gt;10GB of storage space&lt;/li&gt;
        &lt;/ul&gt;
        &lt;a href=&quot;#&quot; target=&quot;_self&quot; class=&quot;btn btn-primary w-full&quot;&gt;Buy Now&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;border border-[#e0e6ed] dark:border-[#1b2e4b] rounded transition-all duration-300 group&quot;&gt;
      &lt;div class=&quot;border-b border-[#e0e6ed] dark:border-[#1b2e4b] p-5 pt-0&quot;&gt;
        &lt;span
          class=&quot;
            bg-white
            dark:bg-[#0e1726]
            text-[#3b3f5c]
            dark:text-white-light
            border-2 border-primary
            w-[70px]
            h-[70px]
            lg:w-[100px] lg:h-[100px]
            rounded
            flex
            justify-center
            items-center
            text-xl
            lg:text-3xl
            font-bold
            -mt-[30px]
            shadow-[0_0_15px_1px_rgba(113,106,202,0.20)]
            transition-all
            duration-300
            group-hover:-translate-y-[10px]
          &quot;
          &gt;$129&lt;/span
        &gt;
        &lt;h3 class=&quot;text-xl lg:text-2xl mt-4 mb-2.5&quot;&gt;Larger business&lt;/h3&gt;
        &lt;p class=&quot;text-[15px]&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;p-5&quot;&gt;
        &lt;ul class=&quot;space-y-2.5 mb-5 font-semibold&quot;&gt;
          &lt;li&gt;Unlimited calls&lt;/li&gt;
          &lt;li&gt;Free hosting&lt;/li&gt;
          &lt;li&gt;Unlimited hours of support&lt;/li&gt;
          &lt;li&gt;1TB of storage space&lt;/li&gt;
        &lt;/ul&gt;
        &lt;a href=&quot;#&quot; target=&quot;_self&quot; class=&quot;btn btn-primary w-full&quot;&gt;Buy Now&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
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
    import { ref } from 'vue';
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Pricing Table' });
    const { codeArr, toggleCode } = codePreview();
    const yearlyPrice = ref(false);
</script>
