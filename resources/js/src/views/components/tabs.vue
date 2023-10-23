<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Components</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Tabs</span>
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
                ><a href="https://headlessui.com/vue/tabs" target="_blank" class="block hover:underline">https://headlessui.com/vue/tabs</a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Simple Tabs -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Simple Tabs</h5>
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none transition duration-300"
                                    :class="{ '!border-white-light !border-b-white  text-primary dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                    >Home</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none transition duration-300"
                                    :class="{ '!border-white-light !border-b-white text-primary dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                    >Profile</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none transition duration-300"
                                    :class="{ '!border-white-light !border-b-white text-primary dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                    >Contact</a
                                >
                            </Tab>
                            <Tab as="template" disabled>
                                <a href="javascript:;" class="p-3.5 py-2 -mb-[1px] block pointer-events-none text-white-light dark:text-dark">Disabled</a>
                            </Tab>
                        </TabList>
                        <TabPanels class="pt-5 flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                            <TabPanel>Disabled</TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code1')">
                        <highlight>
                            <pre>
&lt;!-- simple tabs --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
  &lt;TabList class=&quot;flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]&quot;&gt;
    &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
      &lt;a
        href=&quot;javascript:;&quot;
        class=&quot;p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none transition duration-300&quot;
        :class=&quot;{ '!border-white-light !border-b-white  text-primary dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
        &gt;Home&lt;/a
      &gt;
    &lt;/Tab&gt;
    &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
      &lt;a
        href=&quot;javascript:;&quot;
        class=&quot;p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none transition duration-300&quot;
        :class=&quot;{ '!border-white-light !border-b-white text-primary dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
        &gt;Profile&lt;/a
      &gt;
    &lt;/Tab&gt;
    &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
      &lt;a
        href=&quot;javascript:;&quot;
        class=&quot;p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none transition duration-300&quot;
        :class=&quot;{ '!border-white-light !border-b-white text-primary dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
        &gt;Contact&lt;/a
      &gt;
    &lt;/Tab&gt;
    &lt;Tab as=&quot;template&quot; disabled&gt;
      &lt;a href=&quot;javascript:;&quot; class=&quot;p-3.5 py-2 -mb-[1px] block pointer-events-none text-white-light dark:text-dark&quot;&gt;Disabled&lt;/a&gt;
    &lt;/Tab&gt;
  &lt;/TabList&gt;
  &lt;TabPanels class=&quot;pt-5 flex-1 text-sm&quot;&gt;
    &lt;TabPanel&gt;
      &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
      &lt;p class=&quot;mb-4&quot;&gt;
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat.
      &lt;/p&gt;
      &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat.
      &lt;/p&gt;
    &lt;/TabPanel&gt;
    &lt;TabPanel&gt;
      &lt;div class=&quot;flex items-start&quot;&gt;
        &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
          &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
        &lt;/div&gt;
        &lt;div class=&quot;flex-auto&quot;&gt;
          &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
          &lt;p class=&quot;text-white-dark&quot;&gt;
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
            nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          &lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/TabPanel&gt;
    &lt;TabPanel&gt;
      &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      &lt;/p&gt;
    &lt;/TabPanel&gt;
    &lt;TabPanel&gt;Disabled&lt;/TabPanel&gt;
  &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Simple Pills -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Simple Pills</h5>
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap mt-3">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] ltr:mr-2 rtl:ml-2 block rounded hover:bg-primary hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-primary text-white': selected }"
                                    >Home</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] ltr:mr-2 rtl:ml-2 block rounded hover:bg-primary hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-primary text-white': selected }"
                                    >Profile</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] ltr:mr-2 rtl:ml-2 block rounded hover:bg-primary hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-primary text-white': selected }"
                                    >Contact</a
                                >
                            </Tab>
                            <Tab as="template" disabled>
                                <a href="javascript:;" class="p-3.5 py-2 -mb-[1px] block rounded pointer-events-none text-white-light dark:text-dark"
                                    >Disabled</a
                                >
                            </Tab>
                        </TabList>
                        <TabPanels class="pt-5 flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                            <TabPanel>Disabled</TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code2')">
                        <highlight>
                            <pre>
&lt;!-- simple pills --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
  &lt;TabList class=&quot;flex flex-wrap mt-3&quot;&gt;
    &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
      &lt;a
        href=&quot;javascript:;&quot;
        class=&quot;p-3.5 py-2 -mb-[1px] ltr:mr-2 rtl:ml-2 block rounded hover:bg-primary hover:text-white !outline-none transition duration-300&quot;
        :class=&quot;{ 'bg-primary text-white': selected === 'home' }&quot;
        &gt;Home&lt;/a
      &gt;
    &lt;/Tab&gt;
    &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
      &lt;a
        href=&quot;javascript:;&quot;
        class=&quot;p-3.5 py-2 -mb-[1px] ltr:mr-2 rtl:ml-2 block rounded hover:bg-primary hover:text-white !outline-none transition duration-300&quot;
        :class=&quot;{ 'bg-primary text-white': selected === 'profile' }&quot;
        &gt;Profile&lt;/a
      &gt;
    &lt;/Tab&gt;
    &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
      &lt;a
        href=&quot;javascript:;&quot;
        class=&quot;p-3.5 py-2 -mb-[1px] ltr:mr-2 rtl:ml-2 block rounded hover:bg-primary hover:text-white !outline-none transition duration-300&quot;
        :class=&quot;{ 'bg-primary text-white': selected === 'contact' }&quot;
        &gt;Contact&lt;/a
      &gt;
    &lt;/Tab&gt;
    &lt;Tab as=&quot;template&quot; disabled&gt;
      &lt;a href=&quot;javascript:;&quot; class=&quot;p-3.5 py-2 -mb-[1px] block rounded pointer-events-none text-white-light dark:text-dark&quot;&gt;Disabled&lt;/a&gt;
    &lt;/Tab&gt;
  &lt;/TabList&gt;
  &lt;TabPanels class=&quot;pt-5 flex-1 text-sm&quot;&gt;
    &lt;TabPanel&gt;
      &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
      &lt;p class=&quot;mb-4&quot;&gt;
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat.
      &lt;/p&gt;
      &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat.
      &lt;/p&gt;
    &lt;/TabPanel&gt;
    &lt;TabPanel&gt;
      &lt;div class=&quot;flex items-start&quot;&gt;
        &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
          &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
        &lt;/div&gt;
        &lt;div class=&quot;flex-auto&quot;&gt;
          &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
          &lt;p class=&quot;text-white-dark&quot;&gt;
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
            nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          &lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/TabPanel&gt;
    &lt;TabPanel&gt;
      &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      &lt;/p&gt;
    &lt;/TabPanel&gt;
    &lt;TabPanel&gt;Disabled&lt;/TabPanel&gt;
  &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Icon Tabs -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Icon Tabs</h5>
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300"
                                    :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }"
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
                                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    Home
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300"
                                    :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                    >
                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                    Profile
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300"
                                    :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }"
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
                                    Contact
                                </a>
                            </Tab>
                            <Tab as="template" disabled>
                                <a href="javascript:;" class="p-3.5 py-2 -mb-[1px] flex items-center pointer-events-none text-white-light dark:text-dark">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                    >
                                        <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                        <path d="M12 7V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <circle cx="12" cy="16" r="1" fill="currentColor" />
                                    </svg>
                                    Disabled
                                </a>
                            </Tab>
                        </TabList>
                        <TabPanels class="pt-5 flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                            <TabPanel>Disabled</TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code3')">
                        <highlight>
                            <pre>
&lt;!-- icon tabs --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Home
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Profile
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Contact
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; disabled&gt;
            &lt;a href=&quot;javascript:;&quot; class=&quot;p-3.5 py-2 -mb-[1px] flex items-center pointer-events-none text-white-light dark:text-dark&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Disabled
            &lt;/a&gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;pt-5 flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;Disabled&lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Icon Pills -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Icon Pills</h5>
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap mt-3 gap-2">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] flex items-center rounded hover:bg-warning hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-warning text-white': selected }"
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
                                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    Home
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] flex items-center rounded hover:bg-warning hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-warning text-white': selected }"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                    >
                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                    Profile
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] flex items-center rounded hover:bg-warning hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-warning text-white': selected }"
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
                                    Contact
                                </a>
                            </Tab>
                            <Tab as="template" disabled>
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] flex items-center rounded pointer-events-none text-white-light dark:text-dark"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                    >
                                        <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                        <path d="M12 7V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <circle cx="12" cy="16" r="1" fill="currentColor" />
                                    </svg>
                                    Disabled
                                </a>
                            </Tab>
                        </TabList>
                        <TabPanels class="pt-5 flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                            <TabPanel>Disabled</TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code4')">
                        <highlight>
                            <pre>
&lt;!-- icon pills --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap mt-3 gap-2&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] flex items-center rounded hover:bg-warning hover:text-white !outline-none transition duration-300&quot;
                :class=&quot;{ 'bg-warning text-white': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Home
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] flex items-center rounded hover:bg-warning hover:text-white !outline-none transition duration-300&quot;
                :class=&quot;{ 'bg-warning text-white': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Profile
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] flex items-center rounded hover:bg-warning hover:text-white !outline-none transition duration-300&quot;
                :class=&quot;{ 'bg-warning text-white': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Contact
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; disabled&gt;
            &lt;a href=&quot;javascript:;&quot; class=&quot;p-3.5 py-2 -mb-[1px] flex items-center rounded pointer-events-none text-white-light dark:text-dark&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Disabled
            &lt;/a&gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;pt-5 flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;Disabled&lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Vertical Border -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Vertical Bordered</h5>
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
                    <TabGroup as="div" class="mb-5 flex flex-col sm:flex-row">
                        <div class="mx-10 mb-5 sm:mb-0">
                            <TabList class="w-24 m-auto text-center">
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300"
                                        :class="{ 'bg-success text-white': selected }"
                                        >Home</a
                                    >
                                </Tab>
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300"
                                        :class="{ 'bg-success text-white': selected }"
                                        >Profile</a
                                    >
                                </Tab>
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300"
                                        :class="{ 'bg-success text-white': selected }"
                                        >Messages</a
                                    >
                                </Tab>
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300"
                                        :class="{ 'bg-success text-white': selected }"
                                        >Settings</a
                                    >
                                </Tab>
                            </TabList>
                        </div>
                        <TabPanels class="flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <blockquote
                                    class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
                                >
                                    <div class="flex items-start">
                                        <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </p>
                                    </div>
                                </blockquote>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code5')">
                        <highlight>
                            <pre>
&lt;!-- vertical border --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5 flex flex-col sm:flex-row&quot;&gt;
    &lt;div class=&quot;mx-10 mb-5 sm:mb-0&quot;&gt;
        &lt;TabList class=&quot;w-24 m-auto text-center&quot;&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300&quot;
                    :class=&quot;{ 'bg-success text-white': selected }&quot;
                    &gt;Home&lt;/a
                &gt;
            &lt;/Tab&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300&quot;
                    :class=&quot;{ 'bg-success text-white': selected }&quot;
                    &gt;Profile&lt;/a
                &gt;
            &lt;/Tab&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300&quot;
                    :class=&quot;{ 'bg-success text-white': selected }&quot;
                    &gt;Messages&lt;/a
                &gt;
            &lt;/Tab&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300&quot;
                    :class=&quot;{ 'bg-success text-white': selected }&quot;
                    &gt;Settings&lt;/a
                &gt;
            &lt;/Tab&gt;
        &lt;/TabList&gt;
    &lt;/div&gt;
    &lt;TabPanels class=&quot;flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;blockquote
                class=&quot;text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]&quot;
            &gt;
                &lt;div class=&quot;flex items-start&quot;&gt;
                    &lt;p class=&quot;not-italic text-[#515365] text-sm dark:text-white-dark m-0&quot;&gt;
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/blockquote&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Border Tabs -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Border Tabs</h5>
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300"
                                    :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }"
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
                                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    Home
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300"
                                    :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                    >
                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                    Profile
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300"
                                    :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }"
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
                                    Contact
                                </a>
                            </Tab>
                        </TabList>
                        <TabPanels class="p-4 flex-1 text-sm border border-white-light border-t-0 dark:border-[#191e3a]">
                            <TabPanel class="active">
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code6')">
                        <highlight>
                            <pre>
&lt;!-- border tabs --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Home
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Profile
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Contact
            &lt;/a&gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;p-4 flex-1 text-sm border border-white-light border-t-0 dark:border-[#191e3a]&quot;&gt;
        &lt;TabPanel class=&quot;active&quot;&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Border Top -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Border Top</h5>
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap mt-3 mb-5">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent border-transparent border-t-2 dark:hover:bg-[#191e3a] hover:border-secondary hover:text-secondary !outline-none transition duration-300"
                                    :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': selected }"
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
                                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    Home
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent dark:hover:bg-[#191e3a] border-transparent border-t-2 hover:border-secondary hover:text-secondary !outline-none transition duration-300"
                                    :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': selected }"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                    >
                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                    Profile
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent dark:hover:bg-[#191e3a] border-transparent border-t-2 hover:border-secondary hover:text-secondary !outline-none transition duration-300"
                                    :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': selected }"
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
                                    Contact
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent dark:hover:bg-[#191e3a] border-transparent border-t-2 hover:border-secondary hover:text-secondary !outline-none transition duration-300"
                                    :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': selected }"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                    >
                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"></circle>
                                        <path
                                            opacity="0.5"
                                            d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        ></path>
                                    </svg>
                                    Settings
                                </a>
                            </Tab>
                        </TabList>
                        <TabPanels class="flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <blockquote
                                    class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
                                >
                                    <div class="flex items-start">
                                        <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </p>
                                    </div>
                                </blockquote>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code7')">
                        <highlight>
                            <pre>
&lt;!-- border top --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap mt-3 mb-5&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent border-transparent border-t-2 dark:hover:bg-[#191e3a] hover:border-secondary hover:text-secondary !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-secondary text-secondary dark:bg-[#191e3a]': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Home
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent dark:hover:bg-[#191e3a] border-transparent border-t-2 hover:border-secondary hover:text-secondary !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-secondary text-secondary dark:bg-[#191e3a]': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Profile
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent dark:hover:bg-[#191e3a] border-transparent border-t-2 hover:border-secondary hover:text-secondary !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-secondary text-secondary dark:bg-[#191e3a]': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Contact
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent dark:hover:bg-[#191e3a] border-transparent border-t-2 hover:border-secondary hover:text-secondary !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-secondary text-secondary dark:bg-[#191e3a]': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Settings
            &lt;/a&gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;blockquote
                class=&quot;text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]&quot;
            &gt;
                &lt;div class=&quot;flex items-start&quot;&gt;
                    &lt;p class=&quot;not-italic text-[#515365] text-sm dark:text-white-dark m-0&quot;&gt;
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/blockquote&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Line -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Line</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code8')"
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap mt-3 mb-5 border-b border-white-light dark:border-[#191e3a]">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-5 py-3 -mb-[1px] flex items-center hover:border-b border-transparent hover:!border-secondary hover:text-secondary !outline-none transition duration-300"
                                    :class="{ 'border-b !border-secondary text-secondary': selected }"
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
                                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    Home
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-5 py-3 -mb-[1px] flex items-center hover:border-b border-transparent hover:!border-secondary hover:text-secondary !outline-none transition duration-300"
                                    :class="{ 'border-b !border-secondary text-secondary': selected }"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                    >
                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                    Profile
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-5 py-3 -mb-[1px] flex items-center hover:border-b border-transparent hover:!border-secondary hover:text-secondary !outline-none transition duration-300"
                                    :class="{ 'border-b !border-secondary text-secondary': selected }"
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
                                    Contact
                                </a>
                            </Tab>
                        </TabList>
                        <TabPanels class="flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code8')">
                        <highlight>
                            <pre>
&lt;!-- line --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap mt-3 mb-5 border-b border-white-light dark:border-[#191e3a]&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-5 py-3 -mb-[1px] flex items-center hover:border-b border-transparent hover:!border-secondary hover:text-secondary !outline-none transition duration-300&quot;
                :class=&quot;{ 'border-b !border-secondary text-secondary': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Home
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-5 py-3 -mb-[1px] flex items-center hover:border-b border-transparent hover:!border-secondary hover:text-secondary !outline-none transition duration-300&quot;
                :class=&quot;{ 'border-b !border-secondary text-secondary': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Profile
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-5 py-3 -mb-[1px] flex items-center hover:border-b border-transparent hover:!border-secondary hover:text-secondary !outline-none transition duration-300&quot;
                :class=&quot;{ 'border-b !border-secondary text-secondary': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Contact
            &lt;/a&gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Animated line -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Animated Line</h5>
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap mt-3 mb-5 border-b border-white-light dark:border-[#191e3a]">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-5 py-3 -mb-[1px] flex items-center relative before:transition-all before:duration-700 before:absolute hover:text-secondary before:bottom-0 before:w-0 before:left-0 before:right-0 before:m-auto before:h-[1px] before:bg-secondary hover:before:w-full !outline-none transition duration-300"
                                    :class="{ 'before:!w-full text-secondary': selected }"
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
                                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    Home
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-5 py-3 -mb-[1px] flex items-center relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-0 before:bottom-0 before:left-0 before:right-0 before:m-auto before:h-[1px] before:bg-secondary hover:before:w-full !outline-none transition duration-300"
                                    :class="{ 'before:!w-full text-secondary': selected }"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                    >
                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                    Profile
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-5 py-3 -mb-[1px] flex items-center relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-0 before:bottom-0 before:left-0 before:right-0 before:m-auto before:h-[1px] before:bg-secondary hover:before:w-full !outline-none transition duration-300"
                                    :class="{ 'before:!w-full text-secondary': selected }"
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
                                    Contact
                                </a>
                            </Tab>
                        </TabList>
                        <TabPanels class="flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover /"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code9')">
                        <highlight>
                            <pre>
&lt;!-- animated line --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap mt-3 mb-5 border-b border-white-light dark:border-[#191e3a]&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-5 py-3 -mb-[1px] flex items-center relative before:transition-all before:duration-700 before:absolute hover:text-secondary before:bottom-0 before:w-0 before:left-0 before:right-0 before:m-auto before:h-[1px] before:bg-secondary hover:before:w-full !outline-none transition duration-300&quot;
                :class=&quot;{ 'before:!w-full text-secondary': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Home
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-5 py-3 -mb-[1px] flex items-center relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-0 before:bottom-0 before:left-0 before:right-0 before:m-auto before:h-[1px] before:bg-secondary hover:before:w-full !outline-none transition duration-300&quot;
                :class=&quot;{ 'before:!w-full text-secondary': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Profile
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-5 py-3 -mb-[1px] flex items-center relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-0 before:bottom-0 before:left-0 before:right-0 before:m-auto before:h-[1px] before:bg-secondary hover:before:w-full !outline-none transition duration-300&quot;
                :class=&quot;{ 'before:!w-full text-secondary': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Contact
            &lt;/a&gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover /&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Vertical line tabs -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Vertical Line Tab</h5>
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
                    <TabGroup as="div" class="mb-5 flex flex-col sm:flex-row">
                        <div class="mx-10 mb-5 sm:mb-0">
                            <TabList class="w-24 m-auto text-center font-semibold">
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300"
                                        :class="{ 'text-secondary before:!h-[80%]': selected }"
                                        >Home</a
                                    >
                                </Tab>
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300"
                                        :class="{ 'text-secondary before:!h-[80%]': selected }"
                                        >Profile</a
                                    >
                                </Tab>
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300"
                                        :class="{ 'text-secondary before:!h-[80%]': selected }"
                                        >Messages</a
                                    >
                                </Tab>
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300"
                                        :class="{ 'text-secondary before:!h-[80%]': selected }"
                                        >Settings</a
                                    >
                                </Tab>
                            </TabList>
                        </div>
                        <TabPanels class="flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <blockquote
                                    class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
                                >
                                    <div class="flex items-start">
                                        <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </p>
                                    </div>
                                </blockquote>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code10')">
                        <highlight>
                            <pre>
&lt;!-- Vertical line tabs --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5 flex flex-col sm:flex-row&quot;&gt;
    &lt;div class=&quot;mx-10 mb-5 sm:mb-0&quot;&gt;
        &lt;TabList class=&quot;w-24 m-auto text-center font-semibold&quot;&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300&quot;
                    :class=&quot;{ 'text-secondary before:!h-[80%]': selected }&quot;
                    &gt;Home&lt;/a
                &gt;
            &lt;/Tab&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300&quot;
                    :class=&quot;{ 'text-secondary before:!h-[80%]': selected }&quot;
                    &gt;Profile&lt;/a
                &gt;
            &lt;/Tab&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300&quot;
                    :class=&quot;{ 'text-secondary before:!h-[80%]': selected }&quot;
                    &gt;Messages&lt;/a
                &gt;
            &lt;/Tab&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300&quot;
                    :class=&quot;{ 'text-secondary before:!h-[80%]': selected }&quot;
                    &gt;Settings&lt;/a
                &gt;
            &lt;/Tab&gt;
        &lt;/TabList&gt;
    &lt;/div&gt;
    &lt;TabPanels class=&quot;flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;blockquote
                class=&quot;text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]&quot;
            &gt;
                &lt;div class=&quot;flex items-start&quot;&gt;
                    &lt;p class=&quot;not-italic text-[#515365] text-sm dark:text-white-dark m-0&quot;&gt;
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/blockquote&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Justify tabs -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Justify Tabs</h5>
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap justify-between mt-3 border-b border-white-light dark:border-[#191e3a] text-center">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="flex-auto p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                                    :class="{ '!border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                    >Home</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="flex-auto p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                                    :class="{ '!border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                    >Profile</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="flex-auto p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                                    :class="{ '!border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                    >Contact</a
                                >
                            </Tab>
                        </TabList>
                        <TabPanels class="pt-5 flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code11')">
                        <highlight>
                            <pre>
&lt;!-- justify tabs --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap justify-between mt-3 border-b border-white-light dark:border-[#191e3a] text-center&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;flex-auto p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
                &gt;Home&lt;/a
            &gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;flex-auto p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
                &gt;Profile&lt;/a
            &gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;flex-auto p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300&quot;
                :class=&quot;{ '!border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
                &gt;Contact&lt;/a
            &gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;pt-5 flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Justify Pills -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Justify Pills</h5>
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap justify-between mt-3 space-x-2 rtl:space-x-reverse text-center">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="flex-auto p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-info text-white': selected }"
                                    >Home</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="flex-auto p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-info text-white': selected }"
                                    >Profile</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="flex-auto p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-info text-white': selected }"
                                    >Contact</a
                                >
                            </Tab>
                        </TabList>
                        <TabPanels class="pt-5 flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code12')">
                        <highlight>
                            <pre>
&lt;!-- justify pills --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap justify-between mt-3 space-x-2 rtl:space-x-reverse text-center&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;flex-auto p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300&quot;
                :class=&quot;{ 'bg-info text-white': selected }&quot;
                &gt;Home&lt;/a
            &gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;flex-auto p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300&quot;
                :class=&quot;{ 'bg-info text-white': selected }&quot;
                &gt;Profile&lt;/a
            &gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;flex-auto p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300&quot;
                :class=&quot;{ 'bg-info text-white': selected }&quot;
                &gt;Contact&lt;/a
            &gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;pt-5 flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Justify Center Tabs -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Justify Center Tabs</h5>
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap justify-center mt-3 border-b border-white-light dark:border-[#191e3a]">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                                    :class="{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                    >Home</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                                    :class="{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                    >Profile</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                                    :class="{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                    >Contact</a
                                >
                            </Tab>
                        </TabList>
                        <TabPanels class="pt-5 flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code13')">
                        <highlight>
                            <pre>
&lt;!-- justify center tabs --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap justify-center mt-3 border-b border-white-light dark:border-[#191e3a]&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300&quot;
                :class=&quot;{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
                &gt;Home&lt;/a
            &gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300&quot;
                :class=&quot;{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
                &gt;Profile&lt;/a
            &gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300&quot;
                :class=&quot;{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
                &gt;Contact&lt;/a
            &gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;pt-5 flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Justify Center Pills -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Justify Center Pills</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code14')"
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap justify-center mt-3 space-x-2 rtl:space-x-reverse">
                            <Tab as="template" v-slot="{ selected }"
                                ><a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-info text-white': selected }"
                                    >Home</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }"
                                ><a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-info text-white': selected }"
                                    >Profile</a
                                ></Tab
                            >
                            <Tab as="template" v-slot="{ selected }"
                                ><a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-info text-white': selected }"
                                    >Contact</a
                                ></Tab
                            >
                        </TabList>
                        <TabPanels class="pt-5 flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code14')">
                        <highlight>
                            <pre>
&lt;!-- justify center pills --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap justify-center mt-3 space-x-2 rtl:space-x-reverse&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;
            &gt;&lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300&quot;
                :class=&quot;{ 'bg-info text-white': selected }&quot;
                &gt;Home&lt;/a
            &gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;
            &gt;&lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300&quot;
                :class=&quot;{ 'bg-info text-white': selected }&quot;
                &gt;Profile&lt;/a
            &gt;&lt;/Tab
        &gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;
            &gt;&lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300&quot;
                :class=&quot;{ 'bg-info text-white': selected }&quot;
                &gt;Contact&lt;/a
            &gt;&lt;/Tab
        &gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;pt-5 flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Justify Right Tabs -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Justify Right Tabs</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code15')"
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap justify-end mt-3 border-b border-white-light dark:border-[#191e3a]">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                                    :class="{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                    >Home</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                                    :class="{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                    >Profile</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                                    :class="{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                                    >Contact</a
                                >
                            </Tab>
                        </TabList>
                        <TabPanels class="pt-5 flex-1 text-sm">
                            <TabPanel class="active">
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code15')">
                        <highlight>
                            <pre>
&lt;!-- justify right tabs --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap justify-end mt-3 border-b border-white-light dark:border-[#191e3a]&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300&quot;
                :class=&quot;{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
                &gt;Home&lt;/a
            &gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300&quot;
                :class=&quot;{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
                &gt;Profile&lt;/a
            &gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300&quot;
                :class=&quot;{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }&quot;
                &gt;Contact&lt;/a
            &gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;pt-5 flex-1 text-sm&quot;&gt;
        &lt;TabPanel class=&quot;active&quot;&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Justify Right pills -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Justify Right Pills</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code16')"
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap justify-end mt-3 space-x-2 rtl:space-x-reverse">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-info text-white': selected }"
                                    >Home</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-info text-white': selected }"
                                    >Profile</a
                                >
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                                    :class="{ 'bg-info text-white': selected }"
                                    >Contact</a
                                >
                            </Tab>
                        </TabList>
                        <TabPanels class="pt-5 flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code16')">
                        <highlight>
                            <pre>
&lt;!-- justify right pills --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap justify-end mt-3 space-x-2 rtl:space-x-reverse&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300&quot;
                :class=&quot;{ 'bg-info text-white': selected }&quot;
                &gt;Home&lt;/a
            &gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300&quot;
                :class=&quot;{ 'bg-info text-white': selected }&quot;
                &gt;Profile&lt;/a
            &gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300&quot;
                :class=&quot;{ 'bg-info text-white': selected }&quot;
                &gt;Contact&lt;/a
            &gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;pt-5 flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Pills with Icon -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Pills with Icon</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code17')"
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="grid grid-cols-4 gap-2 sm:flex sm:flex-wrap sm:justify-center mt-3 mb-5 sm:space-x-3 rtl:space-x-reverse">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300"
                                    :class="{ '!bg-success text-white': selected }"
                                >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mb-1">
                                        <path
                                            opacity="0.5"
                                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        ></path>
                                        <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                    Home
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300"
                                    :class="{ '!bg-success text-white': selected }"
                                >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mb-1">
                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5"></circle>
                                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5"></ellipse>
                                    </svg>
                                    Profile
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300"
                                    :class="{ '!bg-success text-white': selected }"
                                >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mb-1">
                                        <path
                                            d="M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        ></path>
                                        <path
                                            opacity="0.5"
                                            d="M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        ></path>
                                        <path
                                            opacity="0.5"
                                            d="M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                        ></path>
                                    </svg>
                                    Contact
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300"
                                    :class="{ '!bg-success text-white': selected }"
                                >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mb-1">
                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"></circle>
                                        <path
                                            opacity="0.5"
                                            d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        ></path>
                                    </svg>
                                    Settings
                                </a>
                            </Tab>
                        </TabList>
                        <TabPanels class="flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <blockquote
                                    class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
                                >
                                    <div class="flex items-start">
                                        <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </p>
                                    </div>
                                </blockquote>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code17')">
                        <highlight>
                            <pre>
&lt;!-- pills with icon --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;grid grid-cols-4 gap-2 sm:flex sm:flex-wrap sm:justify-center mt-3 mb-5 sm:space-x-3 rtl:space-x-reverse&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300&quot;
                :class=&quot;{ '!bg-success text-white': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Home
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300&quot;
                :class=&quot;{ '!bg-success text-white': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Profile
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300&quot;
                :class=&quot;{ '!bg-success text-white': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Contact
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300&quot;
                :class=&quot;{ '!bg-success text-white': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
                Settings
            &lt;/a&gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;blockquote
                class=&quot;text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]&quot;
            &gt;
                &lt;div class=&quot;flex items-start&quot;&gt;
                    &lt;p class=&quot;not-italic text-[#515365] text-sm dark:text-white-dark m-0&quot;&gt;
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/blockquote&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Rounded Pills with Icon -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Rounded Pills with Icon</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code18')"
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
                    <TabGroup as="div" class="mb-5">
                        <TabList class="flex flex-wrap justify-center mt-3 mb-5 space-x-3 rtl:space-x-reverse">
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                                    :class="{ '!bg-info text-white': selected }"
                                >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                        <path
                                            opacity="0.5"
                                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        ></path>
                                        <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                                    :class="{ '!bg-info text-white': selected }"
                                >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5"></circle>
                                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5"></ellipse>
                                    </svg>
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                                    :class="{ '!bg-info text-white': selected }"
                                >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                        <path
                                            d="M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        ></path>
                                        <path
                                            opacity="0.5"
                                            d="M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        ></path>
                                        <path
                                            opacity="0.5"
                                            d="M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                        ></path>
                                    </svg>
                                </a>
                            </Tab>
                            <Tab as="template" v-slot="{ selected }">
                                <a
                                    href="javascript:;"
                                    class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                                    :class="{ '!bg-info text-white': selected }"
                                >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"></circle>
                                        <path
                                            opacity="0.5"
                                            d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        ></path>
                                    </svg>
                                </a>
                            </Tab>
                        </TabList>
                        <TabPanels class="flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <blockquote
                                    class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
                                >
                                    <div class="flex items-start">
                                        <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </p>
                                    </div>
                                </blockquote>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code18')">
                        <highlight>
                            <pre>
&lt;!-- rounded pills with icon --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5&quot;&gt;
    &lt;TabList class=&quot;flex flex-wrap justify-center mt-3 mb-5 space-x-3 rtl:space-x-reverse&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none&quot;
                :class=&quot;{ '!bg-info text-white': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none&quot;
                :class=&quot;{ '!bg-info text-white': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none&quot;
                :class=&quot;{ '!bg-info text-white': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/Tab&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
            &lt;a
                href=&quot;javascript:;&quot;
                class=&quot;w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none&quot;
                :class=&quot;{ '!bg-info text-white': selected }&quot;
            &gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/a&gt;
        &lt;/Tab&gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;blockquote
                class=&quot;text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]&quot;
            &gt;
                &lt;div class=&quot;flex items-start&quot;&gt;
                    &lt;p class=&quot;not-italic text-[#515365] text-sm dark:text-white-dark m-0&quot;&gt;
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/blockquote&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Vertical Rounded With Icon -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Vertical Rounded With Icon</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code19')"
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
                    <TabGroup as="div" class="mb-5 flex flex-col sm:flex-row">
                        <div class="mx-10 mb-5 sm:mb-0">
                            <TabList class="flex flex-col justify-center m-auto space-y-3 w-24">
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                                        :class="{ '!bg-success text-white': selected }"
                                    >
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mb-1">
                                            <path
                                                opacity="0.5"
                                                d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            ></path>
                                            <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        </svg>
                                        Home
                                    </a>
                                </Tab>
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                                        :class="{ '!bg-success text-white': selected }"
                                    >
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mb-1">
                                            <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5"></circle>
                                            <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5"></ellipse>
                                        </svg>
                                        Profile
                                    </a>
                                </Tab>
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                                        :class="{ '!bg-success text-white': selected }"
                                    >
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mb-1">
                                            <path
                                                d="M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            ></path>
                                            <path
                                                opacity="0.5"
                                                d="M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            ></path>
                                            <path
                                                opacity="0.5"
                                                d="M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                            ></path>
                                        </svg>
                                        Contact
                                    </a>
                                </Tab>
                            </TabList>
                        </div>
                        <TabPanels class="flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code19')">
                        <highlight>
                            <pre>
&lt;!-- vertical rounded with icon --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5 flex flex-col sm:flex-row&quot;&gt;
    &lt;div class=&quot;mx-10 mb-5 sm:mb-0&quot;&gt;
        &lt;TabList class=&quot;flex flex-col justify-center m-auto space-y-3 w-24&quot;&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none&quot;
                    :class=&quot;{ '!bg-success text-white': selected }&quot;
                &gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    Home
                &lt;/a&gt;
            &lt;/Tab&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none&quot;
                    :class=&quot;{ '!bg-success text-white': selected }&quot;
                &gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    Profile
                &lt;/a&gt;
            &lt;/Tab&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none&quot;
                    :class=&quot;{ '!bg-success text-white': selected }&quot;
                &gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    Contact
                &lt;/a&gt;
            &lt;/Tab&gt;
        &lt;/TabList&gt;
    &lt;/div&gt;
    &lt;TabPanels class=&quot;flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Vertical Circle With Icon -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Vertical Circle With Icon</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code20')"
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
                    <TabGroup as="div" class="mb-5 flex flex-col sm:flex-row">
                        <div class="mx-10 mb-5 sm:mb-0">
                            <TabList class="flex flex-col justify-center items-center space-y-3">
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                                        :class="{ '!bg-info text-white': selected }"
                                    >
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                            <path
                                                opacity="0.5"
                                                d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            ></path>
                                            <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        </svg>
                                    </a>
                                </Tab>
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                                        :class="{ '!bg-info text-white': selected }"
                                    >
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                            <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5"></circle>
                                            <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5"></ellipse>
                                        </svg>
                                    </a>
                                </Tab>
                                <Tab as="template" v-slot="{ selected }">
                                    <a
                                        href="javascript:;"
                                        class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                                        :class="{ '!bg-info text-white': selected }"
                                    >
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                            <path
                                                d="M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            ></path>
                                            <path
                                                opacity="0.5"
                                                d="M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            ></path>
                                            <path
                                                opacity="0.5"
                                                d="M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                            ></path>
                                        </svg>
                                    </a>
                                </Tab>
                            </TabList>
                        </div>
                        <TabPanels class="flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code20')">
                        <highlight>
                            <pre>
&lt;!-- vertical circle dith icon --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5 flex flex-col sm:flex-row&quot;&gt;
    &lt;div class=&quot;mx-10 mb-5 sm:mb-0&quot;&gt;
        &lt;TabList class=&quot;flex flex-col justify-center items-center space-y-3&quot;&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none&quot;
                    :class=&quot;{ '!bg-info text-white': selected }&quot;
                &gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                &lt;/a&gt;
            &lt;/Tab&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none&quot;
                    :class=&quot;{ '!bg-info text-white': selected }&quot;
                &gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                &lt;/a&gt;
            &lt;/Tab&gt;
            &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;&gt;
                &lt;a
                    href=&quot;javascript:;&quot;
                    class=&quot;w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none&quot;
                    :class=&quot;{ '!bg-info text-white': selected }&quot;
                &gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                &lt;/a&gt;
            &lt;/Tab&gt;
        &lt;/TabList&gt;
    &lt;/div&gt;
    &lt;TabPanels class=&quot;flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Vertical Pills -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Vertical Pills</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code21')"
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
                    <TabGroup as="div" class="mb-5 flex flex-col sm:flex-row">
                        <TabList class="ltr:pr-4 rtl:pl-4 space-y-2 sm:flex-[0_0_20%] mb-5 sm:mb-0">
                            <Tab as="template" v-slot="{ selected }"
                                ><a
                                    href="javascript:;"
                                    class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                                    :class="{ '!bg-success text-white': selected }"
                                    >Home</a
                                ></Tab
                            >
                            <Tab as="template" v-slot="{ selected }"
                                ><a
                                    href="javascript:;"
                                    class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                                    :class="{ '!bg-success text-white': selected }"
                                    >Profile</a
                                ></Tab
                            >
                            <Tab as="template" v-slot="{ selected }"
                                ><a
                                    href="javascript:;"
                                    class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                                    :class="{ '!bg-success text-white': selected }"
                                    >Messages</a
                                ></Tab
                            >
                            <Tab as="template" v-slot="{ selected }"
                                ><a
                                    href="javascript:;"
                                    class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                                    :class="{ '!bg-success text-white': selected }"
                                    >Settings</a
                                ></Tab
                            >
                        </TabList>
                        <TabPanels class="flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <blockquote
                                    class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
                                >
                                    <div class="flex items-start">
                                        <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </p>
                                    </div>
                                </blockquote>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code21')">
                        <highlight>
                            <pre>
&lt;!-- vertical pills --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5 flex flex-col sm:flex-row&quot;&gt;
    &lt;TabList class=&quot;ltr:pr-4 rtl:pl-4 space-y-2 sm:flex-[0_0_20%] mb-5 sm:mb-0&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;
            &gt;&lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none&quot;
                :class=&quot;{ '!bg-success text-white': selected }&quot;
                &gt;Home&lt;/a
            &gt;&lt;/Tab
        &gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;
            &gt;&lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none&quot;
                :class=&quot;{ '!bg-success text-white': selected }&quot;
                &gt;Profile&lt;/a
            &gt;&lt;/Tab
        &gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;
            &gt;&lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none&quot;
                :class=&quot;{ '!bg-success text-white': selected }&quot;
                &gt;Messages&lt;/a
            &gt;&lt;/Tab
        &gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;
            &gt;&lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none&quot;
                :class=&quot;{ '!bg-success text-white': selected }&quot;
                &gt;Settings&lt;/a
            &gt;&lt;/Tab
        &gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;blockquote
                class=&quot;text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]&quot;
            &gt;
                &lt;div class=&quot;flex items-start&quot;&gt;
                    &lt;p class=&quot;not-italic text-[#515365] text-sm dark:text-white-dark m-0&quot;&gt;
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/blockquote&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Justify Vertical Pills Right -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Justify Vertical Pills Right</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code22')"
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
                    <TabGroup as="div" class="mb-5 flex flex-col sm:flex-row sm:gap-4">
                        <TabList class="space-y-2 sm:flex-[0_0_20%] mb-5 sm:mb-0 sm:order-1">
                            <Tab as="template" v-slot="{ selected }"
                                ><a
                                    href="javascript:;"
                                    class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                                    :class="{ '!bg-success text-white': selected }"
                                    >Home</a
                                ></Tab
                            >
                            <Tab as="template" v-slot="{ selected }"
                                ><a
                                    href="javascript:;"
                                    class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                                    :class="{ '!bg-success text-white': selected }"
                                    >Profile</a
                                ></Tab
                            >
                            <Tab as="template" v-slot="{ selected }"
                                ><a
                                    href="javascript:;"
                                    class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                                    :class="{ '!bg-success text-white': selected }"
                                    >Messages</a
                                ></Tab
                            >
                            <Tab as="template" v-slot="{ selected }"
                                ><a
                                    href="javascript:;"
                                    class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                                    :class="{ '!bg-success text-white': selected }"
                                    >Settings</a
                                ></Tab
                            >
                        </TabList>
                        <TabPanels class="flex-1 text-sm">
                            <TabPanel>
                                <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img
                                            src="/assets/images/profile-34.jpeg"
                                            alt=""
                                            class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"
                                        />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.
                                        </p>
                                    </div>
                                </div>
                            </TabPanel>
                            <TabPanel>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </TabPanel>
                            <TabPanel>
                                <blockquote
                                    class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
                                >
                                    <div class="flex items-start">
                                        <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </p>
                                    </div>
                                </blockquote>
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                    <template v-if="codeArr.includes('code22')">
                        <highlight>
                            <pre>
&lt;!-- justify vertical pills right --&gt;
&lt;TabGroup as=&quot;div&quot; class=&quot;mb-5 flex flex-col sm:flex-row&quot;&gt;
    &lt;TabList class=&quot;ltr:pr-4 rtl:pl-4 space-y-2 sm:flex-[0_0_20%] mb-5 sm:mb-0 sm:order-1&quot;&gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;
            &gt;&lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none&quot;
                :class=&quot;{ '!bg-success text-white': selected }&quot;
                &gt;Home&lt;/a
            &gt;&lt;/Tab
        &gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;
            &gt;&lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none&quot;
                :class=&quot;{ '!bg-success text-white': selected }&quot;
                &gt;Profile&lt;/a
            &gt;&lt;/Tab
        &gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;
            &gt;&lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none&quot;
                :class=&quot;{ '!bg-success text-white': selected }&quot;
                &gt;Messages&lt;/a
            &gt;&lt;/Tab
        &gt;
        &lt;Tab as=&quot;template&quot; v-slot=&quot;{ selected }&quot;
            &gt;&lt;a
                href=&quot;javascript:;&quot;
                class=&quot;p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none&quot;
                :class=&quot;{ '!bg-success text-white': selected }&quot;
                &gt;Settings&lt;/a
            &gt;&lt;/Tab
        &gt;
    &lt;/TabList&gt;
    &lt;TabPanels class=&quot;flex-1 text-sm&quot;&gt;
        &lt;TabPanel&gt;
            &lt;h4 class=&quot;font-semibold text-2xl mb-4&quot;&gt;We move your world!&lt;/h4&gt;
            &lt;p class=&quot;mb-4&quot;&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none&quot;&gt;
                    &lt;img src=&quot;/assets/images/profile-34.jpeg&quot; alt=&quot;&quot; class=&quot;w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover&quot; /&gt;
                &lt;/div&gt;
                &lt;div class=&quot;flex-auto&quot;&gt;
                    &lt;h5 class=&quot;text-xl font-medium mb-4&quot;&gt;Media heading&lt;/h5&gt;
                    &lt;p class=&quot;text-white-dark&quot;&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
        &lt;/TabPanel&gt;
        &lt;TabPanel&gt;
            &lt;blockquote
                class=&quot;text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]&quot;
            &gt;
                &lt;div class=&quot;flex items-start&quot;&gt;
                    &lt;p class=&quot;not-italic text-[#515365] text-sm dark:text-white-dark m-0&quot;&gt;
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/blockquote&gt;
        &lt;/TabPanel&gt;
    &lt;/TabPanels&gt;
&lt;/TabGroup&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
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
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Tabs' });
    const { codeArr, toggleCode } = codePreview();
</script>
