<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Elements</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Typography</span>
            </li>
        </ul>
        <div class="pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="panel">
                <h5 class="font-semibold text-lg dark:text-white-light mb-5">Heading</h5>
                <div class="flex items-center justify-center mb-5">
                    <div class="border border-white-dark/20 dark:border-[#191e3a] rounded-md overflow-hidden w-full max-w-xs">
                        <div class="p-4 bg-white dark:bg-[#191e3a]">
                            <p class="text-4xl text-[#515365] leading-[60px] dark:text-white-light">The quick brown fox</p>
                        </div>
                        <div class="p-4 bg-dark-light dark:bg-[#191e3a] border-t border-border-white-dark/20 dark:border-[#0e1726]">
                            <h5 class="text-base dark:text-white-light">Nunito</h5>
                            <a href="javascript:;" class="text-primary text-[13px]">Google Fonts</a>
                            <div class="flex justify-center mt-7">
                                <a href="javascript:;" class="btn btn-primary">View Family</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <h5 class="font-semibold text-lg dark:text-white-light mb-5">Heading</h5>
                <div class="flex items-center justify-center mb-5">
                    <div class="border border-white-dark/20 rounded-md w-full max-w-xs prose p-5">
                        <h1 class="m-0 dark:text-white-dark">H1. Heading</h1>
                        <h2 class="m-0 dark:text-white-dark">H2. Heading</h2>
                        <h3 class="m-0 dark:text-white-dark">H3. Heading</h3>
                        <h4 class="m-0 dark:text-white-dark">H4. Heading</h4>
                        <h5 class="m-0 dark:text-white-dark">H5. Heading</h5>
                        <h6 class="m-0 dark:text-white-dark">H6. Heading</h6>
                    </div>
                </div>
            </div>

            <div class="panel">
                <h5 class="font-semibold text-lg dark:text-white-light mb-5">Heading Colored</h5>
                <div class="flex items-center justify-center mb-5">
                    <div class="border border-white-dark/20 rounded-md w-full max-w-xs prose p-5">
                        <h1 class="text-primary m-0">H1. Heading</h1>
                        <h2 class="text-info m-0">H2. Heading</h2>
                        <h3 class="text-success m-0">H3. Heading</h3>
                        <h4 class="text-warning m-0">H4. Heading</h4>
                        <h5 class="text-danger m-0">H5. Heading</h5>
                        <h6 class="text-secondary m-0">H6. Heading</h6>
                    </div>
                </div>
            </div>

            <div class="panel">
                <h5 class="font-semibold text-lg dark:text-white-light mb-5">Icon List</h5>
                <div class="flex items-center justify-center mb-5">
                    <div class="border border-white-dark/20 rounded-md w-full max-w-xs p-5">
                        <ul class="space-y-3 font-semibold">
                            <li>
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 inline text-primary rtl:rotate-180 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        d="M4 12H20M20 12L14 6M20 12L14 18"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                                <span class="list-text">Aliquam et eros vehicula.</span>
                            </li>
                            <li>
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 inline text-primary rtl:rotate-180 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        d="M4 12H20M20 12L14 6M20 12L14 18"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                                <span class="list-text">Vivamus lacus suscipit.</span>
                            </li>
                            <li>
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 inline text-primary rtl:rotate-180 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        d="M4 12H20M20 12L14 6M20 12L14 18"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                                <span class="list-text">Morbi luctus tincidunt.</span>
                            </li>
                            <li>
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 inline text-primary rtl:rotate-180 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        d="M4 12H20M20 12L14 6M20 12L14 18"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                                <span class="list-text">Nulla metus dolor.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel">
                <h5 class="font-semibold text-lg dark:text-white-light mb-5">Unordered list</h5>
                <div class="flex items-center justify-center mb-5">
                    <div class="border border-white-dark/20 rounded-md w-full max-w-xs p-5 text-white-dark">
                        <ul class="space-y-3 list-inside list-disc font-semibold">
                            <li class="mb-1">Consectetur adipiscing elit</li>
                            <li class="mb-1">Integer molestie lorem at massa</li>
                            <li class="mb-1">Facilisis in pretium nisl aliquet</li>
                            <li class="inline">
                                <ul class="list-inside ltr:pl-5 rtl:pr-5 space-y-3">
                                    <li class="mb-1 mt-1">Phasellus iaculis neque</li>
                                    <li class="mb-1">Purus sodales ultricies</li>
                                    <li class="mb-1">Ac tristique libero volutpat at</li>
                                </ul>
                            </li>
                            <li class="mb-1 mt-1">Faucibus porta lacus fringilla vel</li>
                            <li class="mb-1">Aenean sit amet erat nunc</li>
                            <li class="mb-1">Eget porttitor lorem</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel">
                <h5 class="font-semibold text-lg dark:text-white-light mb-5">Ordered list</h5>
                <div class="flex items-center justify-center mb-5">
                    <div class="border border-white-dark/20 rounded-md w-full max-w-xs p-5 text-white-dark">
                        <ol class="space-y-3 list-inside list-decimal font-semibold">
                            <li class="mb-1">Consectetur adipiscing elit</li>
                            <li class="mb-1">Integer molestie lorem at massa</li>
                            <li class="mb-1">Facilisis in pretium nisl aliquet</li>
                            <li class="inline">
                                <ol class="list-inside list-decimal ltr:pl-5 rtl:pr-5 space-y-3">
                                    <li class="mb-1 mt-1">Phasellus iaculis neque</li>
                                    <li class="mb-1">Purus sodales ultricies</li>
                                    <li class="mb-1">Ac tristique libero volutpat at</li>
                                </ol>
                            </li>
                            <li class="mb-1 mt-1">Faucibus porta lacus fringilla vel</li>
                            <li class="mb-1">Aenean sit amet erat nunc</li>
                            <li class="mb-1">Eget porttitor lorem</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="panel">
                <h5 class="font-semibold text-lg dark:text-white-light mb-5">Blockquote</h5>
                <div class="flex items-center justify-center mb-5">
                    <blockquote
                        class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
                    >
                        <div class="flex items-start">
                            <p class="not-italic text-[#515365] text-sm dark:text-white-light m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                            </p>
                        </div>
                        <small
                            class="w-full not-italic text-xs text-[#777] block before:w-3 before:h-[1px] before:bg-[#777] before:inline-block before:opacity-50 before:relative before:-top-1 ltr:before:mr-1 rtl:before:ml-1"
                            >Someone famous <cite class="italic">Source Title</cite></small
                        >
                    </blockquote>
                </div>
            </div>

            <div class="panel">
                <h5 class="font-semibold text-lg dark:text-white-light mb-5">Blockquote with profile</h5>
                <div class="flex items-center justify-center mb-5">
                    <blockquote
                        class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
                    >
                        <div class="flex items-start">
                            <div class="w-14 h-14 ltr:mr-5 rtl:ml-5 flex-none">
                                <img src="/assets/images/profile-34.jpeg" alt="" class="w-14 h-14 rounded-full object-cover m-auto" />
                            </div>
                            <p class="not-italic text-[#515365] text-sm dark:text-white-light m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                            </p>
                        </div>
                        <small
                            class="ltr:text-right rtl:text-left w-full not-italic text-xs text-[#777] block before:w-3 before:h-[1px] before:bg-[#777] before:inline-block before:opacity-50 before:relative before:-top-1 ltr:before:mr-1 rtl:before:ml-1"
                            >Someone famous <cite class="italic">Source Title</cite></small
                        >
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Typography' });
</script>
