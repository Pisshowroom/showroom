<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Users</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>FAQ</span>
            </li>
        </ul>
        <div class="pt-5">
            <h2 class="text-center text-xl md:text-3xl font-bold">Frequently Asked <span class="text-primary">Questions</span></h2>
            <div class="space-y-5 mt-5">
                <div class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]">
                    <div
                        class="flex font-semibold p-5 rounded-t-md cursor-pointer"
                        :class="{ 'bg-primary/20 text-primary': active === 1 }"
                        @click="active === 1 ? (active = null) : (active = 1)"
                    >
                        <span class="text-primary">Getting started</span>
                        <div class="ltr:ml-auto rtl:mr-auto flex">
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                :class="{ 'rotate-180': active === 1 }"
                            >
                                <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <vue-collapsible :isOpen="active === 1">
                        <div class="p-5 text-white-dark font-semibold">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </vue-collapsible>
                </div>

                <div class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]">
                    <div
                        class="flex font-semibold p-5 rounded-t-md cursor-pointer"
                        :class="{ 'bg-primary/20 text-primary': active === 2 }"
                        @click="active === 2 ? (active = null) : (active = 2)"
                    >
                        <span class="text-primary">How can I unzip product files</span>
                        <div class="ltr:ml-auto rtl:mr-auto flex">
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                :class="{ 'rotate-180': active === 2 }"
                            >
                                <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <vue-collapsible :isOpen="active === 2">
                        <div class="p-5 text-white-dark font-semibold">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </vue-collapsible>
                </div>

                <div class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]">
                    <div
                        class="flex font-semibold p-5 rounded-t-md cursor-pointer"
                        :class="{ 'bg-primary/20 text-primary': active === 3 }"
                        @click="active === 3 ? (active = null) : (active = 3)"
                    >
                        <span class="text-primary">Sidebar not rendering CSS</span>
                        <div class="ltr:ml-auto rtl:mr-auto flex">
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                :class="{ 'rotate-180': active === 3 }"
                            >
                                <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <vue-collapsible :isOpen="active === 3">
                        <div class="p-5 text-white-dark font-semibold">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </vue-collapsible>
                </div>

                <div class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]">
                    <div
                        class="flex font-semibold p-5 rounded-t-md cursor-pointer"
                        :class="{ 'bg-primary/20 text-primary': active === 4 }"
                        @click="active === 4 ? (active = null) : (active = 4)"
                    >
                        <span class="text-primary">Production Level Built</span>
                        <div class="ltr:ml-auto rtl:mr-auto flex">
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                :class="{ 'rotate-180': active === 4 }"
                            >
                                <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <vue-collapsible :isOpen="active === 4">
                        <div class="p-5 text-white-dark font-semibold">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </vue-collapsible>
                </div>

                <div class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]">
                    <div
                        class="flex font-semibold p-5 rounded-t-md cursor-pointer"
                        :class="{ 'bg-primary/20 text-primary': active === 5 }"
                        @click="active === 5 ? (active = null) : (active = 5)"
                    >
                        <span class="text-primary">Compilation Issue</span>
                        <div class="ltr:ml-auto rtl:mr-auto flex">
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                :class="{ 'rotate-180': active === 5 }"
                            >
                                <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <vue-collapsible :isOpen="active === 5">
                        <div class="p-5 text-white-dark font-semibold">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </vue-collapsible>
                </div>

                <div class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]">
                    <div
                        class="flex font-semibold p-5 rounded-t-md cursor-pointer"
                        :class="{ 'bg-primary/20 text-primary': active === 6 }"
                        @click="active === 6 ? (active = null) : (active = 6)"
                    >
                        <span class="text-primary">Getting started with starter kits</span>
                        <div class="ltr:ml-auto rtl:mr-auto flex">
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                :class="{ 'rotate-180': active === 6 }"
                            >
                                <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <vue-collapsible :isOpen="active === 6">
                        <div class="p-5 text-white-dark font-semibold">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </vue-collapsible>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref } from 'vue';
    import VueCollapsible from 'vue-height-collapsible/vue3';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'FAQ' });

    const active: any = ref(null);
</script>
