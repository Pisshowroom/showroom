<template>
    <div>
        <div class="flex gap-5 relative sm:h-[calc(100vh_-_150px)] h-full">
            <div
                class="overlay bg-black/60 z-[5] w-full h-full absolute rounded-md hidden"
                :class="{ '!block xl:!hidden': isShowMailMenu }"
                @click="isShowMailMenu = !isShowMailMenu"
            ></div>
            <div
                class="panel xl:block p-4 dark:gray-50 w-[250px] max-w-full flex-none space-y-3 xl:relative absolute z-10 xl:h-auto h-full hidden ltr:xl:rounded-r-md ltr:rounded-r-none rtl:xl:rounded-l-md rtl:rounded-l-none overflow-hidden"
                :class="{ '!block': isShowMailMenu }"
            >
                <div class="flex flex-col h-full pb-16">
                    <div class="pb-5">
                        <button class="btn btn-primary w-full" type="button" @click="openMail('add', null)">New Message</button>
                    </div>
                    <perfect-scrollbar
                        :options="{
                            swipeEasing: true,
                            wheelPropagation: false,
                        }"
                        class="relative ltr:pr-3.5 rtl:pl-3.5 ltr:-mr-3.5 rtl:-ml-3.5 h-full grow"
                    >
                        <div class="space-y-1">
                            <button
                                type="button"
                                class="w-full flex justify-between items-center p-2 hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium h-10"
                                :class="{
                                    'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': !isEdit && selectedTab === 'inbox',
                                }"
                                @click="tabChanged('inbox')"
                            >
                                <div class="flex items-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0">
                                        <path
                                            opacity="0.5"
                                            d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path
                                            d="M6 8L8.1589 9.79908C9.99553 11.3296 10.9139 12.0949 12 12.0949C13.0861 12.0949 14.0045 11.3296 15.8411 9.79908L18 8"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                        />
                                    </svg>

                                    <div class="ltr:ml-3 rtl:mr-3">Inbox</div>
                                </div>
                                <div class="bg-primary-light dark:bg-[#060818] rounded-md py-0.5 px-2 font-semibold whitespace-nowrap">
                                    {{ mailList && mailList.filter((d) => d.type == 'inbox').length }}
                                </div>
                            </button>

                            <button
                                type="button"
                                class="w-full flex justify-between items-center p-2 hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium h-10"
                                :class="{
                                    'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': !isEdit && selectedTab === 'star',
                                }"
                                @click="tabChanged('star')"
                            >
                                <div class="flex items-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0">
                                        <path
                                            d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                    </svg>
                                    <div class="ltr:ml-3 rtl:mr-3">Marked</div>
                                </div>
                            </button>

                            <button
                                type="button"
                                class="w-full flex justify-between items-center p-2 hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium h-10"
                                :class="{
                                    'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': !isEdit && selectedTab === 'sent_mail',
                                }"
                                @click="tabChanged('sent_mail')"
                            >
                                <div class="flex items-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0">
                                        <path
                                            d="M17.4975 18.4851L20.6281 9.09373C21.8764 5.34874 22.5006 3.47624 21.5122 2.48782C20.5237 1.49939 18.6511 2.12356 14.906 3.37189L5.57477 6.48218C3.49295 7.1761 2.45203 7.52305 2.13608 8.28637C2.06182 8.46577 2.01692 8.65596 2.00311 8.84963C1.94433 9.67365 2.72018 10.4495 4.27188 12.0011L4.55451 12.2837C4.80921 12.5384 4.93655 12.6658 5.03282 12.8075C5.22269 13.0871 5.33046 13.4143 5.34393 13.7519C5.35076 13.9232 5.32403 14.1013 5.27057 14.4574C5.07488 15.7612 4.97703 16.4131 5.0923 16.9147C5.32205 17.9146 6.09599 18.6995 7.09257 18.9433C7.59255 19.0656 8.24576 18.977 9.5522 18.7997L9.62363 18.79C9.99191 18.74 10.1761 18.715 10.3529 18.7257C10.6738 18.745 10.9838 18.8496 11.251 19.0285C11.3981 19.1271 11.5295 19.2585 11.7923 19.5213L12.0436 19.7725C13.5539 21.2828 14.309 22.0379 15.1101 21.9985C15.3309 21.9877 15.5479 21.9365 15.7503 21.8474C16.4844 21.5244 16.8221 20.5113 17.4975 18.4851Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path opacity="0.5" d="M6 18L21 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>

                                    <div class="ltr:ml-3 rtl:mr-3">Sent</div>
                                </div>
                            </button>

                            <button
                                type="button"
                                class="w-full flex justify-between items-center p-2 hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium h-10"
                                :class="{
                                    'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': !isEdit && selectedTab === 'spam',
                                }"
                                @click="tabChanged('spam')"
                            >
                                <div class="flex items-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0">
                                        <path d="M12 7V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <circle cx="12" cy="16" r="1" fill="currentColor" />
                                        <path
                                            opacity="0.5"
                                            d="M7.84308 3.80211C9.8718 2.6007 10.8862 2 12 2C13.1138 2 14.1282 2.6007 16.1569 3.80211L16.8431 4.20846C18.8718 5.40987 19.8862 6.01057 20.4431 7C21 7.98943 21 9.19084 21 11.5937V12.4063C21 14.8092 21 16.0106 20.4431 17C19.8862 17.9894 18.8718 18.5901 16.8431 19.7915L16.1569 20.1979C14.1282 21.3993 13.1138 22 12 22C10.8862 22 9.8718 21.3993 7.84308 20.1979L7.15692 19.7915C5.1282 18.5901 4.11384 17.9894 3.55692 17C3 16.0106 3 14.8092 3 12.4063V11.5937C3 9.19084 3 7.98943 3.55692 7C4.11384 6.01057 5.1282 5.40987 7.15692 4.20846L7.84308 3.80211Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                    </svg>

                                    <div class="ltr:ml-3 rtl:mr-3">Spam</div>
                                </div>
                            </button>

                            <button
                                type="button"
                                class="w-full flex justify-between items-center p-2 hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium h-10"
                                :class="{
                                    'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': !isEdit && selectedTab === 'draft',
                                }"
                                @click="tabChanged('draft')"
                            >
                                <div class="flex items-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5">
                                        <path
                                            d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            opacity="0.5"
                                            d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                    </svg>

                                    <div class="ltr:ml-3 rtl:mr-3">Drafts</div>
                                </div>
                                <div class="bg-primary-light dark:bg-[#060818] rounded-md py-0.5 px-2 font-semibold whitespace-nowrap">
                                    {{ mailList && mailList.filter((d) => !d.type || d.type === 'draft').length }}
                                </div>
                            </button>

                            <button
                                type="button"
                                class="w-full flex justify-between items-center p-2 hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium h-10"
                                :class="{
                                    'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': !isEdit && selectedTab === 'trash',
                                }"
                                @click="tabChanged('trash')"
                            >
                                <div class="flex items-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0">
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

                                    <div class="ltr:ml-3 rtl:mr-3">Trash</div>
                                </div>
                            </button>

                            <disclosure as="div" v-slot="{ open }">
                                <disclosure-button
                                    class="w-full flex items-center p-2 hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium h-10"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 shrink-0"
                                        :class="{ 'rotate-180': open }"
                                    >
                                        <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <div class="ltr:ml-3 rtl:mr-3">{{ open ? 'Less' : 'More' }}</div>
                                </disclosure-button>

                                <transition>
                                    <disclosure-panel as="ul" :unmount="false" class="mt-1 space-y-1">
                                        <li>
                                            <button
                                                type="button"
                                                class="w-full flex items-center p-2 hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium h-10"
                                                :class="{
                                                    'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': !isEdit && selectedTab === 'archive',
                                                }"
                                                @click="tabChanged('archive')"
                                            >
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0">
                                                    <path
                                                        d="M9 12C9 11.5341 9 11.3011 9.07612 11.1173C9.17761 10.8723 9.37229 10.6776 9.61732 10.5761C9.80109 10.5 10.0341 10.5 10.5 10.5H13.5C13.9659 10.5 14.1989 10.5 14.3827 10.5761C14.6277 10.6776 14.8224 10.8723 14.9239 11.1173C15 11.3011 15 11.5341 15 12C15 12.4659 15 12.6989 14.9239 12.8827C14.8224 13.1277 14.6277 13.3224 14.3827 13.4239C14.1989 13.5 13.9659 13.5 13.5 13.5H10.5C10.0341 13.5 9.80109 13.5 9.61732 13.4239C9.37229 13.3224 9.17761 13.1277 9.07612 12.8827C9 12.6989 9 12.4659 9 12Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                    <path
                                                        opacity="0.5"
                                                        d="M20.5 7V13C20.5 16.7712 20.5 18.6569 19.3284 19.8284C18.1569 21 16.2712 21 12.5 21H11.5C7.72876 21 5.84315 21 4.67157 19.8284C3.5 18.6569 3.5 16.7712 3.5 13V7"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                    <path
                                                        d="M2 5C2 4.05719 2 3.58579 2.29289 3.29289C2.58579 3 3.05719 3 4 3H20C20.9428 3 21.4142 3 21.7071 3.29289C22 3.58579 22 4.05719 22 5C22 5.94281 22 6.41421 21.7071 6.70711C21.4142 7 20.9428 7 20 7H4C3.05719 7 2.58579 7 2.29289 6.70711C2 6.41421 2 5.94281 2 5Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                </svg>

                                                <div class="ltr:ml-3 rtl:mr-3">Archive</div>
                                            </button>
                                        </li>
                                        <li>
                                            <button
                                                type="button"
                                                class="w-full flex items-center p-2 hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium h-10"
                                                :class="{
                                                    'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': !isEdit && selectedTab === 'important',
                                                }"
                                                @click="tabChanged('important')"
                                            >
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0">
                                                    <path
                                                        d="M21 16.0909V11.0975C21 6.80891 21 4.6646 19.682 3.3323C18.364 2 16.2426 2 12 2C7.75736 2 5.63604 2 4.31802 3.3323C3 4.6646 3 6.80891 3 11.0975V16.0909C3 19.1875 3 20.7358 3.73411 21.4123C4.08421 21.735 4.52615 21.9377 4.99692 21.9915C5.98402 22.1045 7.13673 21.0849 9.44216 19.0458C10.4612 18.1445 10.9708 17.6938 11.5603 17.5751C11.8506 17.5166 12.1494 17.5166 12.4397 17.5751C13.0292 17.6938 13.5388 18.1445 14.5578 19.0458C16.8633 21.0849 18.016 22.1045 19.0031 21.9915C19.4739 21.9377 19.9158 21.735 20.2659 21.4123C21 20.7358 21 19.1875 21 16.0909Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                    <path opacity="0.5" d="M15 6H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                </svg>

                                                <div class="ltr:ml-3 rtl:mr-3">Important</div>
                                            </button>
                                        </li>
                                    </disclosure-panel>
                                </transition>
                            </disclosure>

                            <div class="h-px border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>

                            <button
                                type="button"
                                class="w-full flex justify-between items-center p-2 hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium h-10"
                            >
                                <div class="flex items-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0">
                                        <path
                                            opacity="0.5"
                                            d="M17 9.50019L17.6584 9.17101C19.6042 8.19807 20.5772 7.7116 21.2886 8.15127C22 8.59094 22 9.67872 22 11.8543V12.1461C22 14.3217 22 15.4094 21.2886 15.8491C20.5772 16.2888 19.6042 15.8023 17.6584 14.8294L17 14.5002V9.50019Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path
                                            opacity="0.5"
                                            d="M13.5607 7.43934C14.1464 8.02513 14.1464 8.97487 13.5607 9.56066C12.9749 10.1464 12.0251 10.1464 11.4393 9.56066C10.8536 8.97487 10.8536 8.02513 11.4393 7.43934C12.0251 6.85355 12.9749 6.85355 13.5607 7.43934Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path
                                            d="M2 11.5C2 8.21252 2 6.56878 2.90796 5.46243C3.07418 5.25989 3.25989 5.07418 3.46243 4.90796C4.56878 4 6.21252 4 9.5 4C12.7875 4 14.4312 4 15.5376 4.90796C15.7401 5.07418 15.9258 5.25989 16.092 5.46243C17 6.56878 17 8.21252 17 11.5V12.5C17 15.7875 17 17.4312 16.092 18.5376C15.9258 18.7401 15.7401 18.9258 15.5376 19.092C14.4312 20 12.7875 20 9.5 20C6.21252 20 4.56878 20 3.46243 19.092C3.25989 18.9258 3.07418 18.7401 2.90796 18.5376C2 17.4312 2 15.7875 2 12.5V11.5Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                    </svg>

                                    <div class="ltr:ml-3 rtl:mr-3">New meeting</div>
                                </div>
                            </button>

                            <button
                                type="button"
                                class="w-full flex justify-between items-center p-2 hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium h-10"
                            >
                                <div class="flex items-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rotate-180 shrink-0">
                                        <path
                                            opacity="0.5"
                                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path d="M7 18L7 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M12 18V12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M17 18V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>

                                    <div class="ltr:ml-3 rtl:mr-3">Join a meeting</div>
                                </div>
                            </button>
                            <div class="h-px border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
                        </div>
                    </perfect-scrollbar>
                    <div class="ltr:left-0 rtl:right-0 absolute bottom-0 p-4 w-full">
                        <button
                            type="button"
                            class="w-full flex p-2 justify-between items-center hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium group"
                            @click="isShowMailMenu = false"
                        >
                            <div class="flex items-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0">
                                    <circle cx="10" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                    <path
                                        opacity="0.5"
                                        d="M18 17.5C18 19.9853 18 22 10 22C2 22 2 19.9853 2 17.5C2 15.0147 5.58172 13 10 13C14.4183 13 18 15.0147 18 17.5Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                    <path d="M21 10H19M19 10H17M19 10L19 8M19 10L19 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>

                                <div class="ltr:ml-3 rtl:mr-3">Add Account</div>
                            </div>
                            <div class="bg-primary-light dark:bg-[#060818] rounded-md py-1 px-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="w-5 h-5"
                                >
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="panel p-0 flex-1 overflow-x-hidden h-full">
                <div v-show="!selectedMail && !isEdit" class="flex flex-col h-full">
                    <div class="flex justify-between items-center flex-wrap-reverse gap-4 p-4">
                        <div class="flex items-center w-full sm:w-auto">
                            <div class="ltr:mr-4 rtl:ml-4">
                                <input
                                    type="checkbox"
                                    class="form-checkbox"
                                    :checked="checkAllCheckbox"
                                    :value="checkAllCheckbox"
                                    @change="checkAll($event.target.checked)"
                                />
                            </div>
                            <div class="ltr:mr-4 rtl:ml-4">
                                <button type="button" v-tippy:refresh class="hover:text-primary flex items-center" @click="refreshMails()">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                        <path
                                            d="M12.0789 3V2.25V3ZM3.67981 11.3333H2.92981H3.67981ZM3.67981 13L3.15157 13.5324C3.44398 13.8225 3.91565 13.8225 4.20805 13.5324L3.67981 13ZM5.88787 11.8657C6.18191 11.574 6.18377 11.0991 5.89203 10.8051C5.60029 10.511 5.12542 10.5092 4.83138 10.8009L5.88787 11.8657ZM2.52824 10.8009C2.2342 10.5092 1.75933 10.511 1.46759 10.8051C1.17585 11.0991 1.17772 11.574 1.47176 11.8657L2.52824 10.8009ZM18.6156 7.39279C18.8325 7.74565 19.2944 7.85585 19.6473 7.63892C20.0001 7.42199 20.1103 6.96007 19.8934 6.60721L18.6156 7.39279ZM12.0789 2.25C7.03155 2.25 2.92981 6.3112 2.92981 11.3333H4.42981C4.42981 7.15072 7.84884 3.75 12.0789 3.75V2.25ZM2.92981 11.3333L2.92981 13H4.42981L4.42981 11.3333H2.92981ZM4.20805 13.5324L5.88787 11.8657L4.83138 10.8009L3.15157 12.4676L4.20805 13.5324ZM4.20805 12.4676L2.52824 10.8009L1.47176 11.8657L3.15157 13.5324L4.20805 12.4676ZM19.8934 6.60721C18.287 3.99427 15.3873 2.25 12.0789 2.25V3.75C14.8484 3.75 17.2727 5.20845 18.6156 7.39279L19.8934 6.60721Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            opacity="0.5"
                                            d="M11.8825 21V21.75V21ZM20.3137 12.6667H21.0637H20.3137ZM20.3137 11L20.8409 10.4666C20.5487 10.1778 20.0786 10.1778 19.7864 10.4666L20.3137 11ZM18.1002 12.1333C17.8056 12.4244 17.8028 12.8993 18.094 13.1939C18.3852 13.4885 18.86 13.4913 19.1546 13.2001L18.1002 12.1333ZM21.4727 13.2001C21.7673 13.4913 22.2421 13.4885 22.5333 13.1939C22.8245 12.8993 22.8217 12.4244 22.5271 12.1332L21.4727 13.2001ZM5.31769 16.6061C5.10016 16.2536 4.63806 16.1442 4.28557 16.3618C3.93307 16.5793 3.82366 17.0414 4.0412 17.3939L5.31769 16.6061ZM11.8825 21.75C16.9448 21.75 21.0637 17.6915 21.0637 12.6667H19.5637C19.5637 16.8466 16.133 20.25 11.8825 20.25V21.75ZM21.0637 12.6667V11H19.5637V12.6667H21.0637ZM19.7864 10.4666L18.1002 12.1333L19.1546 13.2001L20.8409 11.5334L19.7864 10.4666ZM19.7864 11.5334L21.4727 13.2001L22.5271 12.1332L20.8409 10.4666L19.7864 11.5334ZM4.0412 17.3939C5.65381 20.007 8.56379 21.75 11.8825 21.75V20.25C9.09999 20.25 6.6656 18.7903 5.31769 16.6061L4.0412 17.3939Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </button>
                                <tippy target="refresh">Refresh</tippy>
                            </div>
                            <template v-if="selectedTab != 'trash'">
                                <ul class="flex grow items-center sm:flex-none gap-4 ltr:sm:mr-4 rtl:sm:ml-4">
                                    <li>
                                        <div>
                                            <button type="button" v-tippy:archive class="hover:text-primary flex items-center" @click="setArchive">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                    <path
                                                        d="M9 12C9 11.5341 9 11.3011 9.07612 11.1173C9.17761 10.8723 9.37229 10.6776 9.61732 10.5761C9.80109 10.5 10.0341 10.5 10.5 10.5H13.5C13.9659 10.5 14.1989 10.5 14.3827 10.5761C14.6277 10.6776 14.8224 10.8723 14.9239 11.1173C15 11.3011 15 11.5341 15 12C15 12.4659 15 12.6989 14.9239 12.8827C14.8224 13.1277 14.6277 13.3224 14.3827 13.4239C14.1989 13.5 13.9659 13.5 13.5 13.5H10.5C10.0341 13.5 9.80109 13.5 9.61732 13.4239C9.37229 13.3224 9.17761 13.1277 9.07612 12.8827C9 12.6989 9 12.4659 9 12Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    ></path>
                                                    <path
                                                        opacity="0.5"
                                                        d="M20.5 7V13C20.5 16.7712 20.5 18.6569 19.3284 19.8284C18.1569 21 16.2712 21 12.5 21H11.5C7.72876 21 5.84315 21 4.67157 19.8284C3.5 18.6569 3.5 16.7712 3.5 13V7"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    ></path>
                                                    <path
                                                        d="M2 5C2 4.05719 2 3.58579 2.29289 3.29289C2.58579 3 3.05719 3 4 3H20C20.9428 3 21.4142 3 21.7071 3.29289C22 3.58579 22 4.05719 22 5C22 5.94281 22 6.41421 21.7071 6.70711C21.4142 7 20.9428 7 20 7H4C3.05719 7 2.58579 7 2.29289 6.70711C2 6.41421 2 5.94281 2 5Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    ></path>
                                                </svg>
                                            </button>
                                            <tippy target="archive">Archive</tippy>
                                        </div>
                                    </li>
                                    <li>
                                        <div @click="setSpam">
                                            <button type="button" v-tippy:spam class="hover:text-primary flex items-center">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                    <path d="M12 7V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                    <circle cx="12" cy="16" r="1" fill="currentColor"></circle>
                                                    <path
                                                        opacity="0.5"
                                                        d="M7.84308 3.80211C9.8718 2.6007 10.8862 2 12 2C13.1138 2 14.1282 2.6007 16.1569 3.80211L16.8431 4.20846C18.8718 5.40987 19.8862 6.01057 20.4431 7C21 7.98943 21 9.19084 21 11.5937V12.4063C21 14.8092 21 16.0106 20.4431 17C19.8862 17.9894 18.8718 18.5901 16.8431 19.7915L16.1569 20.1979C14.1282 21.3993 13.1138 22 12 22C10.8862 22 9.8718 21.3993 7.84308 20.1979L7.15692 19.7915C5.1282 18.5901 4.11384 17.9894 3.55692 17C3 16.0106 3 14.8092 3 12.4063V11.5937C3 9.19084 3 7.98943 3.55692 7C4.11384 6.01057 5.1282 5.40987 7.15692 4.20846L7.84308 3.80211Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    ></path>
                                                </svg>
                                            </button>
                                            <tippy target="spam">Spam</tippy>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <Popper
                                                :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'"
                                                offsetDistance="0"
                                                class="align-middle"
                                            >
                                                <div>
                                                    <button type="button" v-tippy:group class="hover:text-primary flex items-center">
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5"
                                                        >
                                                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                                            <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.5" />
                                                            <path opacity="0.5" d="M15 9L19 5" stroke="currentColor" stroke-width="1.5" />
                                                            <path opacity="0.5" d="M5 19L9 15" stroke="currentColor" stroke-width="1.5" />
                                                            <path opacity="0.5" d="M9 9L5 5" stroke="currentColor" stroke-width="1.5" />
                                                            <path opacity="0.5" d="M19 19L15 15" stroke="currentColor" stroke-width="1.5" />
                                                        </svg>
                                                    </button>
                                                    <tippy target="group">Group</tippy>
                                                </div>
                                                <template #content="{ close }">
                                                    <ul @click="close()">
                                                        <li>
                                                            <a href="javascript:;" @click="setGroup('personal')">
                                                                <div class="w-2 h-2 rounded-full bg-primary ltr:mr-3 rtl:ml-3 shrink-0"></div>
                                                                Personal
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" @click="setGroup('work')">
                                                                <div class="w-2 h-2 rounded-full bg-warning ltr:mr-3 rtl:ml-3 shrink-0"></div>
                                                                Work
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" @click="setGroup('social')">
                                                                <div class="w-2 h-2 rounded-full bg-success ltr:mr-3 rtl:ml-3 shrink-0"></div>
                                                                Social
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" @click="setGroup('private')">
                                                                <div class="w-2 h-2 rounded-full bg-danger ltr:mr-3 rtl:ml-3 shrink-0"></div>
                                                                Private
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </template>
                                            </Popper>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <Popper
                                                :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'"
                                                offsetDistance="0"
                                                class="align-middle"
                                            >
                                                <button type="button" class="hover:text-primary flex items-center">
                                                    <svg
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="w-5 h-5 rotate-90 opacity-70"
                                                    >
                                                        <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                        <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                        <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                    </svg>
                                                </button>
                                                <template #content="{ close }">
                                                    <ul @click="close()" class="whitespace-nowrap">
                                                        <li>
                                                            <a href="javascript:;" class="w-full" @click="setAction('read')">
                                                                <svg
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0"
                                                                >
                                                                    <path
                                                                        d="M20.082 3.01787L20.1081 3.76741L20.082 3.01787ZM16.5 3.48757L16.2849 2.76907V2.76907L16.5 3.48757ZM13.6738 4.80287L13.2982 4.15375L13.2982 4.15375L13.6738 4.80287ZM3.9824 3.07501L3.93639 3.8236L3.9824 3.07501ZM7 3.48757L7.19136 2.76239V2.76239L7 3.48757ZM10.2823 4.87558L9.93167 5.5386L10.2823 4.87558ZM13.6276 20.0694L13.9804 20.7312L13.6276 20.0694ZM17 18.6335L16.8086 17.9083H16.8086L17 18.6335ZM19.9851 18.2229L20.032 18.9715L19.9851 18.2229ZM10.3724 20.0694L10.0196 20.7312H10.0196L10.3724 20.0694ZM7 18.6335L7.19136 17.9083H7.19136L7 18.6335ZM4.01486 18.2229L3.96804 18.9715H3.96804L4.01486 18.2229ZM2.75 16.1437V4.99792H1.25V16.1437H2.75ZM22.75 16.1437V4.93332H21.25V16.1437H22.75ZM20.0559 2.26832C18.9175 2.30798 17.4296 2.42639 16.2849 2.76907L16.7151 4.20606C17.6643 3.92191 18.9892 3.80639 20.1081 3.76741L20.0559 2.26832ZM16.2849 2.76907C15.2899 3.06696 14.1706 3.6488 13.2982 4.15375L14.0495 5.452C14.9 4.95981 15.8949 4.45161 16.7151 4.20606L16.2849 2.76907ZM3.93639 3.8236C4.90238 3.88297 5.99643 3.99842 6.80864 4.21274L7.19136 2.76239C6.23055 2.50885 5.01517 2.38707 4.02841 2.32642L3.93639 3.8236ZM6.80864 4.21274C7.77076 4.46663 8.95486 5.02208 9.93167 5.5386L10.6328 4.21257C9.63736 3.68618 8.32766 3.06224 7.19136 2.76239L6.80864 4.21274ZM13.9804 20.7312C14.9714 20.2029 16.1988 19.6206 17.1914 19.3587L16.8086 17.9083C15.6383 18.2171 14.2827 18.8702 13.2748 19.4075L13.9804 20.7312ZM17.1914 19.3587C17.9943 19.1468 19.0732 19.0314 20.032 18.9715L19.9383 17.4744C18.9582 17.5357 17.7591 17.6575 16.8086 17.9083L17.1914 19.3587ZM10.7252 19.4075C9.71727 18.8702 8.3617 18.2171 7.19136 17.9083L6.80864 19.3587C7.8012 19.6206 9.0286 20.2029 10.0196 20.7312L10.7252 19.4075ZM7.19136 17.9083C6.24092 17.6575 5.04176 17.5357 4.06168 17.4744L3.96804 18.9715C4.9268 19.0314 6.00566 19.1468 6.80864 19.3587L7.19136 17.9083ZM21.25 16.1437C21.25 16.8295 20.6817 17.4279 19.9383 17.4744L20.032 18.9715C21.5062 18.8793 22.75 17.6799 22.75 16.1437H21.25ZM22.75 4.93332C22.75 3.47001 21.5847 2.21507 20.0559 2.26832L20.1081 3.76741C20.7229 3.746 21.25 4.25173 21.25 4.93332H22.75ZM1.25 16.1437C1.25 17.6799 2.49378 18.8793 3.96804 18.9715L4.06168 17.4744C3.31831 17.4279 2.75 16.8295 2.75 16.1437H1.25ZM13.2748 19.4075C12.4825 19.8299 11.5175 19.8299 10.7252 19.4075L10.0196 20.7312C11.2529 21.3886 12.7471 21.3886 13.9804 20.7312L13.2748 19.4075ZM13.2982 4.15375C12.4801 4.62721 11.4617 4.65083 10.6328 4.21257L9.93167 5.5386C11.2239 6.22189 12.791 6.18037 14.0495 5.452L13.2982 4.15375ZM2.75 4.99792C2.75 4.30074 3.30243 3.78463 3.93639 3.8236L4.02841 2.32642C2.47017 2.23065 1.25 3.49877 1.25 4.99792H2.75Z"
                                                                        fill="currentColor"
                                                                    />
                                                                    <path opacity="0.5" d="M12 5.854V20.9999" stroke="currentColor" stroke-width="1.5" />
                                                                    <path
                                                                        opacity="0.5"
                                                                        d="M5 9L9 10"
                                                                        stroke="currentColor"
                                                                        stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                    />
                                                                    <path
                                                                        opacity="0.5"
                                                                        d="M19 9L15 10"
                                                                        stroke="currentColor"
                                                                        stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                    />
                                                                    <path
                                                                        opacity="0.5"
                                                                        d="M5 13L9 14"
                                                                        stroke="currentColor"
                                                                        stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                    />
                                                                    <path
                                                                        opacity="0.5"
                                                                        d="M19 13L15 14"
                                                                        stroke="currentColor"
                                                                        stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                    />
                                                                </svg>

                                                                Mark as Read
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" class="w-full" @click="setAction('unread')">
                                                                <svg
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0"
                                                                >
                                                                    <path
                                                                        d="M4 8C4 5.17157 4 3.75736 4.87868 2.87868C5.75736 2 7.17157 2 10 2H14C16.8284 2 18.2426 2 19.1213 2.87868C20 3.75736 20 5.17157 20 8V16C20 18.8284 20 20.2426 19.1213 21.1213C18.2426 22 16.8284 22 14 22H10C7.17157 22 5.75736 22 4.87868 21.1213C4 20.2426 4 18.8284 4 16V8Z"
                                                                        stroke="currentColor"
                                                                        stroke-width="1.5"
                                                                    />
                                                                    <path
                                                                        opacity="0.5"
                                                                        d="M6.12132 16.1022L5.92721 15.3778L6.12132 16.1022ZM3.27556 18.0294C3.16835 18.4295 3.40579 18.8408 3.80589 18.948C4.20599 19.0552 4.61724 18.8178 4.72444 18.4177L3.27556 18.0294ZM6.25 16C6.25 16.4142 6.58579 16.75 7 16.75C7.41421 16.75 7.75 16.4142 7.75 16H6.25ZM7.75 2.5C7.75 2.08579 7.41421 1.75 7 1.75C6.58579 1.75 6.25 2.08579 6.25 2.5H7.75ZM7.89778 16.75H19.8978V15.25H7.89778V16.75ZM7.89778 15.25C7.01609 15.25 6.42812 15.2436 5.92721 15.3778L6.31543 16.8267C6.57752 16.7564 6.91952 16.75 7.89778 16.75V15.25ZM5.92721 15.3778C4.63311 15.7245 3.62231 16.7353 3.27556 18.0294L4.72444 18.4177C4.9325 17.6412 5.53898 17.0347 6.31543 16.8267L5.92721 15.3778ZM7.75 16V2.5H6.25V16H7.75Z"
                                                                        fill="currentColor"
                                                                    />
                                                                </svg>

                                                                Mark as Unread
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" class="w-full" @click="setAction('trash')">
                                                                <svg
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0"
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
                                                                    <path
                                                                        opacity="0.5"
                                                                        d="M9.5 11L10 16"
                                                                        stroke="currentColor"
                                                                        stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                    />
                                                                    <path
                                                                        opacity="0.5"
                                                                        d="M14.5 11L14 16"
                                                                        stroke="currentColor"
                                                                        stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                    />
                                                                </svg>

                                                                Trash
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </template>
                                            </Popper>
                                        </div>
                                    </li>
                                </ul>
                            </template>
                            <template v-if="selectedTab == 'trash'">
                                <ul class="flex flex-1 items-center sm:flex-none gap-4 ltr:sm:mr-3 rtl:sm:ml-4">
                                    <li>
                                        <div>
                                            <button type="button" v-tippy:delete class="block hover:text-primary" @click="setAction('delete')">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                    <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path
                                                        d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                    <path
                                                        opacity="0.5"
                                                        d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                </svg>
                                            </button>
                                            <tippy target="delete">Permanently Delete</tippy>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <button type="button" v-tippy:restore class="block hover:text-primary" @click="setAction('restore')">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                    <g clip-path="url(#clip0_1276_6232)">
                                                        <path
                                                            d="M19.7285 10.9288C20.4413 13.5978 19.7507 16.5635 17.6569 18.6573C14.5327 21.7815 9.46736 21.7815 6.34316 18.6573C3.21897 15.5331 3.21897 10.4678 6.34316 7.3436C9.46736 4.21941 14.5327 4.21941 17.6569 7.3436L18.364 8.05071M18.364 8.05071H14.1213M18.364 8.05071V3.80807"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1276_6232">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                            <tippy target="restore">Restore</tippy>
                                        </div>
                                    </li>
                                </ul>
                            </template>
                        </div>
                        <div class="flex justify-between items-center sm:w-auto w-full">
                            <div class="flex items-center ltr:mr-4 rtl:ml-4">
                                <button type="button" class="xl:hidden hover:text-primary block ltr:mr-3 rtl:ml-3" @click="isShowMailMenu = !isShowMailMenu">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                        <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path opacity="0.5" d="M20 12L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </button>
                                <div class="relative group">
                                    <input
                                        type="text"
                                        placeholder="Search Mail"
                                        class="form-input ltr:pr-8 rtl:pl-8 peer"
                                        v-model="searchText"
                                        @keyup="searchMails()"
                                    />
                                    <div class="absolute ltr:right-[11px] rtl:left-[11px] top-1/2 -translate-y-1/2 peer-focus:text-primary">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                                            <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5"></circle>
                                            <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="ltr:mr-4 rtl:ml-4">
                                    <button type="button" v-tippy:settings class="hover:text-primary">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"></circle>
                                            <path
                                                opacity="0.5"
                                                d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            ></path>
                                        </svg>
                                    </button>
                                    <tippy target="settings">Settings</tippy>
                                </div>
                                <div>
                                    <button type="button" v-tippy:help class="hover:text-primary">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                            <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"></circle>
                                            <path
                                                d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                            ></path>
                                            <circle cx="12" cy="16" r="1" fill="currentColor"></circle>
                                        </svg>
                                    </button>
                                    <tippy target="help">Help</tippy>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-px border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
                    <div class="flex flex-wrap flex-col md:flex-row xl:w-auto justify-between items-center px-4 pb-4">
                        <div class="w-full sm:w-auto grid grid-cols-2 sm:grid-cols-4 gap-3 mt-4">
                            <button
                                type="button"
                                class="btn btn-outline-primary flex"
                                :class="{ 'text-white bg-primary': selectedTab === 'personal' }"
                                @click="tabChanged('personal')"
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

                                Personal
                            </button>

                            <button
                                type="button"
                                class="btn btn-outline-warning flex"
                                :class="{ 'text-white bg-warning': selectedTab === 'work' }"
                                @click="tabChanged('work')"
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
                                        d="M13.0867 21.3877L13.7321 21.7697L13.0867 21.3877ZM13.6288 20.4718L12.9833 20.0898L13.6288 20.4718ZM10.3712 20.4718L9.72579 20.8539H9.72579L10.3712 20.4718ZM10.9133 21.3877L11.5587 21.0057L10.9133 21.3877ZM2.3806 15.9134L3.07351 15.6264V15.6264L2.3806 15.9134ZM7.78958 18.9915L7.77666 19.7413L7.78958 18.9915ZM5.08658 18.6194L4.79957 19.3123H4.79957L5.08658 18.6194ZM21.6194 15.9134L22.3123 16.2004V16.2004L21.6194 15.9134ZM16.2104 18.9915L16.1975 18.2416L16.2104 18.9915ZM18.9134 18.6194L19.2004 19.3123H19.2004L18.9134 18.6194ZM19.6125 2.7368L19.2206 3.37628L19.6125 2.7368ZM21.2632 4.38751L21.9027 3.99563V3.99563L21.2632 4.38751ZM4.38751 2.7368L3.99563 2.09732V2.09732L4.38751 2.7368ZM2.7368 4.38751L2.09732 3.99563H2.09732L2.7368 4.38751ZM9.40279 19.2098L9.77986 18.5615L9.77986 18.5615L9.40279 19.2098ZM13.7321 21.7697L14.2742 20.8539L12.9833 20.0898L12.4412 21.0057L13.7321 21.7697ZM9.72579 20.8539L10.2679 21.7697L11.5587 21.0057L11.0166 20.0898L9.72579 20.8539ZM12.4412 21.0057C12.2485 21.3313 11.7515 21.3313 11.5587 21.0057L10.2679 21.7697C11.0415 23.0767 12.9585 23.0767 13.7321 21.7697L12.4412 21.0057ZM10.5 2.75H13.5V1.25H10.5V2.75ZM21.25 10.5V11.5H22.75V10.5H21.25ZM2.75 11.5V10.5H1.25V11.5H2.75ZM1.25 11.5C1.25 12.6546 1.24959 13.5581 1.29931 14.2868C1.3495 15.0223 1.45323 15.6344 1.68769 16.2004L3.07351 15.6264C2.92737 15.2736 2.84081 14.8438 2.79584 14.1847C2.75041 13.5189 2.75 12.6751 2.75 11.5H1.25ZM7.8025 18.2416C6.54706 18.2199 5.88923 18.1401 5.37359 17.9265L4.79957 19.3123C5.60454 19.6457 6.52138 19.7197 7.77666 19.7413L7.8025 18.2416ZM1.68769 16.2004C2.27128 17.6093 3.39066 18.7287 4.79957 19.3123L5.3736 17.9265C4.33223 17.4951 3.50486 16.6678 3.07351 15.6264L1.68769 16.2004ZM21.25 11.5C21.25 12.6751 21.2496 13.5189 21.2042 14.1847C21.1592 14.8438 21.0726 15.2736 20.9265 15.6264L22.3123 16.2004C22.5468 15.6344 22.6505 15.0223 22.7007 14.2868C22.7504 13.5581 22.75 12.6546 22.75 11.5H21.25ZM16.2233 19.7413C17.4786 19.7197 18.3955 19.6457 19.2004 19.3123L18.6264 17.9265C18.1108 18.1401 17.4529 18.2199 16.1975 18.2416L16.2233 19.7413ZM20.9265 15.6264C20.4951 16.6678 19.6678 17.4951 18.6264 17.9265L19.2004 19.3123C20.6093 18.7287 21.7287 17.6093 22.3123 16.2004L20.9265 15.6264ZM13.5 2.75C15.1512 2.75 16.337 2.75079 17.2619 2.83873C18.1757 2.92561 18.7571 3.09223 19.2206 3.37628L20.0044 2.09732C19.2655 1.64457 18.4274 1.44279 17.4039 1.34547C16.3915 1.24921 15.1222 1.25 13.5 1.25V2.75ZM22.75 10.5C22.75 8.87781 22.7508 7.6085 22.6545 6.59611C22.5572 5.57256 22.3554 4.73445 21.9027 3.99563L20.6237 4.77938C20.9078 5.24291 21.0744 5.82434 21.1613 6.73809C21.2492 7.663 21.25 8.84876 21.25 10.5H22.75ZM19.2206 3.37628C19.7925 3.72672 20.2733 4.20752 20.6237 4.77938L21.9027 3.99563C21.4286 3.22194 20.7781 2.57144 20.0044 2.09732L19.2206 3.37628ZM10.5 1.25C8.87781 1.25 7.6085 1.24921 6.59611 1.34547C5.57256 1.44279 4.73445 1.64457 3.99563 2.09732L4.77938 3.37628C5.24291 3.09223 5.82434 2.92561 6.73809 2.83873C7.663 2.75079 8.84876 2.75 10.5 2.75V1.25ZM2.75 10.5C2.75 8.84876 2.75079 7.663 2.83873 6.73809C2.92561 5.82434 3.09223 5.24291 3.37628 4.77938L2.09732 3.99563C1.64457 4.73445 1.44279 5.57256 1.34547 6.59611C1.24921 7.6085 1.25 8.87781 1.25 10.5H2.75ZM3.99563 2.09732C3.22194 2.57144 2.57144 3.22194 2.09732 3.99563L3.37628 4.77938C3.72672 4.20752 4.20752 3.72672 4.77938 3.37628L3.99563 2.09732ZM11.0166 20.0898C10.8136 19.7468 10.6354 19.4441 10.4621 19.2063C10.2795 18.9559 10.0702 18.7304 9.77986 18.5615L9.02572 19.8582C9.07313 19.8857 9.13772 19.936 9.24985 20.0898C9.37122 20.2564 9.50835 20.4865 9.72579 20.8539L11.0166 20.0898ZM7.77666 19.7413C8.21575 19.7489 8.49387 19.7545 8.70588 19.7779C8.90399 19.7999 8.98078 19.832 9.02572 19.8582L9.77986 18.5615C9.4871 18.3912 9.18246 18.3215 8.87097 18.287C8.57339 18.2541 8.21375 18.2487 7.8025 18.2416L7.77666 19.7413ZM14.2742 20.8539C14.4916 20.4865 14.6287 20.2564 14.7501 20.0898C14.8622 19.936 14.9268 19.8857 14.9742 19.8582L14.2201 18.5615C13.9298 18.7304 13.7204 18.9559 13.5379 19.2063C13.3646 19.4441 13.1864 19.7468 12.9833 20.0898L14.2742 20.8539ZM16.1975 18.2416C15.7862 18.2487 15.4266 18.2541 15.129 18.287C14.8175 18.3215 14.5129 18.3912 14.2201 18.5615L14.9742 19.8582C15.0192 19.832 15.096 19.7999 15.2941 19.7779C15.5061 19.7545 15.7842 19.7489 16.2233 19.7413L16.1975 18.2416Z"
                                        fill="currentColor"
                                    />
                                    <path opacity="0.5" d="M12 15V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M8 13V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M16 13V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>

                                Work
                            </button>

                            <button
                                type="button"
                                class="btn btn-outline-success flex"
                                :class="{ 'text-white bg-success': selectedTab === 'social' }"
                                @click="tabChanged('social')"
                            >
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
                                    <circle cx="9" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                    <path
                                        opacity="0.5"
                                        d="M12.5 4.3411C13.0375 3.53275 13.9565 3 15 3C16.6569 3 18 4.34315 18 6C18 7.65685 16.6569 9 15 9C13.9565 9 13.0375 8.46725 12.5 7.6589"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                    <ellipse cx="9" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5" />
                                    <path
                                        opacity="0.5"
                                        d="M18 14C19.7542 14.3847 21 15.3589 21 16.5C21 17.5293 19.9863 18.4229 18.5 18.8704"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                </svg>

                                Social
                            </button>

                            <button
                                type="button"
                                class="btn btn-outline-danger flex"
                                :class="{ 'text-white bg-danger': selectedTab === 'private' }"
                                @click="tabChanged('private')"
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
                                        d="M4.72848 16.1369C3.18295 14.5914 2.41018 13.8186 2.12264 12.816C1.83509 11.8134 2.08083 10.7485 2.57231 8.61875L2.85574 7.39057C3.26922 5.59881 3.47597 4.70292 4.08944 4.08944C4.70292 3.47597 5.59881 3.26922 7.39057 2.85574L8.61875 2.57231C10.7485 2.08083 11.8134 1.83509 12.816 2.12264C13.8186 2.41018 14.5914 3.18295 16.1369 4.72848L17.9665 6.55812C20.6555 9.24711 22 10.5916 22 12.2623C22 13.933 20.6555 15.2775 17.9665 17.9665C15.2775 20.6555 13.933 22 12.2623 22C10.5916 22 9.24711 20.6555 6.55812 17.9665L4.72848 16.1369Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                    <circle
                                        opacity="0.5"
                                        cx="8.60699"
                                        cy="8.87891"
                                        r="2"
                                        transform="rotate(-45 8.60699 8.87891)"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                    <path opacity="0.5" d="M11.5417 18.5L18.5208 11.5208" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>

                                Private
                            </button>
                        </div>
                        <div class="mt-4 md:flex-auto flex-1">
                            <div class="flex items-center md:justify-end justify-center">
                                <div class="ltr:mr-3 rtl:ml-3">
                                    {{ pager.startIndex + 1 + '-' + (pager.endIndex + 1) + ' of ' + filteredMailList.length }}
                                </div>
                                <button
                                    type="button"
                                    :disabled="pager.currentPage == 1"
                                    class="bg-[#f4f4f4] rounded-md p-1 enabled:hover:bg-primary-light dark:bg-white-dark/20 enabled:dark:hover:bg-white-dark/30 ltr:mr-3 rtl:ml-3 disabled:opacity-60 disabled:cursor-not-allowed"
                                    @click="pager.currentPage--, searchMails(false)"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 rtl:rotate-180"
                                    >
                                        <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button
                                    type="button"
                                    :disabled="pager.currentPage == pager.totalPages"
                                    class="bg-[#f4f4f4] rounded-md p-1 enabled:hover:bg-primary-light dark:bg-white-dark/20 enabled:dark:hover:bg-white-dark/30 disabled:opacity-60 disabled:cursor-not-allowed"
                                    @click="pager.currentPage++, searchMails(false)"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 ltr:rotate-180"
                                    >
                                        <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="h-px border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
                    <template v-if="pagedMails.length">
                        <div class="table-responsive grow overflow-y-auto min-h-[300px]">
                            <table>
                                <tbody>
                                    <template v-for="mail in pagedMails" :key="mail.id">
                                        <tr class="cursor-pointer" @click="selectMail(mail)">
                                            <td>
                                                <div class="flex items-center whitespace-nowrap">
                                                    <div class="ltr:mr-3 rtl:ml-3">
                                                        <input
                                                            type="checkbox"
                                                            :id="`chk-${mail.id}`"
                                                            v-model.number="ids"
                                                            :value="mail.id"
                                                            @click="$event.stopPropagation()"
                                                            class="form-checkbox"
                                                        />
                                                    </div>
                                                    <div class="ltr:mr-3 rtl:ml-3">
                                                        <button
                                                            type="button"
                                                            v-tippy:star
                                                            class="enabled:hover:text-warning disabled:opacity-60 flex items-center"
                                                            :class="{ 'text-warning': mail.isStar }"
                                                            @click.stop="setStar(mail.id)"
                                                            :disabled="selectedTab === 'trash'"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="w-5 h-5"
                                                                :class="{ 'fill-warning': mail.isStar }"
                                                            >
                                                                <path
                                                                    d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                />
                                                            </svg>
                                                        </button>
                                                        <tippy target="star">Star</tippy>
                                                    </div>
                                                    <div class="ltr:mr-3 rtl:ml-3">
                                                        <button
                                                            type="button"
                                                            v-tippy:important
                                                            class="enabled:hover:text-primary disabled:opacity-60 rotate-90 flex items-center"
                                                            :class="{ 'text-primary': mail.isImportant }"
                                                            @click.stop="setImportant(mail.id)"
                                                            :disabled="selectedTab === 'trash'"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="w-4.5 h-4.5"
                                                                :class="{ 'fill-primary': mail.isImportant }"
                                                            >
                                                                <path
                                                                    d="M21 16.0909V11.0975C21 6.80891 21 4.6646 19.682 3.3323C18.364 2 16.2426 2 12 2C7.75736 2 5.63604 2 4.31802 3.3323C3 4.6646 3 6.80891 3 11.0975V16.0909C3 19.1875 3 20.7358 3.73411 21.4123C4.08421 21.735 4.52615 21.9377 4.99692 21.9915C5.98402 22.1045 7.13673 21.0849 9.44216 19.0458C10.4612 18.1445 10.9708 17.6938 11.5603 17.5751C11.8506 17.5166 12.1494 17.5166 12.4397 17.5751C13.0292 17.6938 13.5388 18.1445 14.5578 19.0458C16.8633 21.0849 18.016 22.1045 19.0031 21.9915C19.4739 21.9377 19.9158 21.735 20.2659 21.4123C21 20.7358 21 19.1875 21 16.0909Z"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                />
                                                            </svg>
                                                        </button>
                                                        <tippy target="important">Important</tippy>
                                                    </div>
                                                    <div
                                                        class="dark:text-gray-300 whitespace-nowrap font-semibold"
                                                        :class="{
                                                            'text-gray-500 dark:!text-gray-500 font-normal': !mail.isUnread,
                                                        }"
                                                    >
                                                        {{ mail.firstName ? mail.firstName + ' ' + mail.lastName : mail.email }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="font-medium text-white-dark overflow-hidden min-w-[300px] line-clamp-1">
                                                    <span
                                                        :class="{
                                                            'text-gray-800 dark:text-gray-300 font-semibold': mail.isUnread,
                                                        }"
                                                    >
                                                        <span>{{ mail.title }}</span> &minus; <span>{{ mail.displayDescription }}</span></span
                                                    >
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex items-center">
                                                    <div
                                                        class="w-2 h-2 rounded-full"
                                                        :class="{
                                                            'bg-primary': mail.group === 'personal',
                                                            'bg-warning': mail.group === 'work',
                                                            'bg-success': mail.group === 'social',
                                                            'bg-danger': mail.group === 'private',
                                                        }"
                                                    ></div>
                                                    <template v-if="mail.attachments">
                                                        <div class="ltr:ml-4 rtl:mr-4">
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="w-5 h-5"
                                                            >
                                                                <path
                                                                    d="M7.9175 17.8068L15.8084 10.2535C16.7558 9.34668 16.7558 7.87637 15.8084 6.96951M3 10.0346L9.40419 3.90441C12.0569 1.3652 16.3578 1.3652 19.0105 3.90441"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                />
                                                                <path
                                                                    opacity="0.5"
                                                                    d="M19.0105 13.0996L19.5291 13.6414L19.0105 13.0996ZM11.0624 20.7076L10.5438 20.1658L11.0624 20.7076ZM4.54388 14.4679L5.0625 15.0097L4.54388 14.4679ZM12.3776 6.9694L11.859 6.4276L12.3776 6.9694ZM19.5291 3.3625C19.2299 3.07608 18.7551 3.08646 18.4687 3.38568C18.1823 3.68491 18.1927 4.15967 18.4919 4.44609L19.5291 3.3625ZM18.4919 12.5578L10.5438 20.1658L11.581 21.2494L19.5291 13.6414L18.4919 12.5578ZM5.0625 15.0097L12.8962 7.51119L11.859 6.4276L4.02527 13.9262L5.0625 15.0097ZM16.327 6.4276C15.0896 5.24313 13.0964 5.24313 11.859 6.4276L12.8962 7.51119C13.5536 6.88194 14.6324 6.88194 15.2898 7.51119L16.327 6.4276ZM5.0625 20.1658C3.57096 18.7381 3.57096 16.4375 5.0625 15.0097L4.02527 13.9262C1.91671 15.9445 1.91671 19.2311 4.02527 21.2494L5.0625 20.1658ZM10.5438 20.1658C9.03379 21.6112 6.57253 21.6112 5.0625 20.1658L4.02527 21.2494C6.11533 23.25 9.49098 23.25 11.581 21.2494L10.5438 20.1658ZM18.4919 4.44609C20.8361 6.68999 20.8361 10.3139 18.4919 12.5578L19.5291 13.6414C22.4903 10.8069 22.4903 6.19703 19.5291 3.3625L18.4919 4.44609Z"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </template>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap font-medium ltr:text-right rtl:text-left">
                                                {{ showTime(mail) }}
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </template>
                    <template v-if="!pagedMails.length">
                        <div class="grid place-content-center min-h-[300px] font-semibold text-lg h-full">No data available</div>
                    </template>
                </div>
                <template v-if="selectedMail && !isEdit">
                    <div>
                        <div class="flex items-center justify-between flex-wrap p-4">
                            <div class="flex items-center">
                                <button type="button" class="ltr:mr-2 rtl:ml-2 hover:text-primary" @click="selectedMail = null">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5 rtl:rotate-180"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                                    </svg>
                                </button>
                                <h4 class="text-base md:text-lg font-medium ltr:mr-2 rtl:ml-2">
                                    {{ selectedMail.title }}
                                </h4>
                                <div class="badge bg-info hover:top-0">{{ selectedMail.type }}</div>
                            </div>
                            <div>
                                <button type="button" v-tippy:print>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                        <path
                                            d="M6 17.9827C4.44655 17.9359 3.51998 17.7626 2.87868 17.1213C2 16.2426 2 14.8284 2 12C2 9.17157 2 7.75736 2.87868 6.87868C3.75736 6 5.17157 6 8 6H16C18.8284 6 20.2426 6 21.1213 6.87868C22 7.75736 22 9.17157 22 12C22 14.8284 22 16.2426 21.1213 17.1213C20.48 17.7626 19.5535 17.9359 18 17.9827"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path opacity="0.5" d="M9 10H6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M19 14L5 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path
                                            d="M18 14V16C18 18.8284 18 20.2426 17.1213 21.1213C16.2426 22 14.8284 22 12 22C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V14"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                        />
                                        <path
                                            opacity="0.5"
                                            d="M17.9827 6C17.9359 4.44655 17.7626 3.51998 17.1213 2.87868C16.2427 2 14.8284 2 12 2C9.17158 2 7.75737 2 6.87869 2.87868C6.23739 3.51998 6.06414 4.44655 6.01733 6"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <circle opacity="0.5" cx="17" cy="10" r="1" fill="currentColor" />
                                        <path opacity="0.5" d="M15 16.5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path opacity="0.5" d="M13 19H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </button>
                                <tippy target="print">Print</tippy>
                            </div>
                        </div>
                        <div class="h-px border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
                        <div class="p-4 relative">
                            <div class="flex flex-wrap">
                                <div class="flex-shrink-0 ltr:mr-2 rtl:ml-2">
                                    <img
                                        v-show="selectedMail.path"
                                        :src="`/assets/images/${selectedMail.path}`"
                                        class="h-12 w-12 rounded-full object-cover"
                                        alt="avatar"
                                    />
                                    <div v-show="!selectedMail.path" class="border border-gray-300 dark:border-gray-800 rounded-full p-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                            <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ltr:mr-2 rtl:ml-2 flex-1">
                                    <div class="flex items-center">
                                        <div class="text-lg ltr:mr-4 rtl:ml-4 whitespace-nowrap">
                                            {{ selectedMail.firstName ? selectedMail.firstName + ' ' + selectedMail.lastName : selectedMail.email }}
                                        </div>
                                        <div>
                                            <div v-show="selectedMail.group" class="ltr:mr-4 rtl:ml-4">
                                                <div
                                                    v-tippy:group
                                                    class="w-2 h-2 rounded-full"
                                                    :class="{
                                                        'bg-primary': selectedMail.group === 'personal',
                                                        'bg-warning': selectedMail.group === 'work',
                                                        'bg-success': selectedMail.group === 'social',
                                                        'bg-danger': selectedMail.group === 'private',
                                                    }"
                                                ></div>
                                                <tippy target="group" class="capitalize">{{ selectedMail.group }}</tippy>
                                            </div>
                                        </div>
                                        <div class="text-white-dark whitespace-nowrap">1 days ago</div>
                                    </div>
                                    <div class="text-white-dark flex items-center">
                                        <div class="ltr:mr-1 rtl:ml-1">
                                            {{ selectedMail.type === 'sent_mail' ? selectedMail.email : 'to me' }}
                                        </div>
                                        <div class="dropdown">
                                            <Popper
                                                :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'"
                                                offsetDistance="0"
                                                class="align-middle"
                                            >
                                                <button type="button" class="mt-1.5">
                                                    <svg
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="w-5 h-5"
                                                    >
                                                        <path
                                                            d="M19 9L12 15L5 9"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        />
                                                    </svg>
                                                </button>
                                                <template #content>
                                                    <ul class="sm:w-56">
                                                        <li>
                                                            <div class="flex items-center px-4 py-2">
                                                                <div class="text-white-dark ltr:mr-2 rtl:ml-2 w-1/4">From:</div>
                                                                <div class="flex-1">
                                                                    {{ selectedMail.type === 'sent_mail' ? 'tailly@gmail.com' : selectedMail.email }}
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center px-4 py-2">
                                                                <div class="text-white-dark ltr:mr-2 rtl:ml-2 w-1/4">To:</div>
                                                                <div class="flex-1">
                                                                    {{ selectedMail.type !== 'sent_mail' ? 'tailly@gmail.com' : selectedMail.email }}
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center px-4 py-2">
                                                                <div class="text-white-dark ltr:mr-2 rtl:ml-2 w-1/4">Date:</div>
                                                                <div class="flex-1">
                                                                    {{ selectedMail.date + ', ' + selectedMail.time }}
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center px-4 py-2">
                                                                <div class="text-white-dark ltr:mr-2 rtl:ml-2 w-1/4">Subject:</div>
                                                                <div class="flex-1">{{ selectedMail.title }}</div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </template>
                                            </Popper>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center justify-center space-x-3 rtl:space-x-reverse">
                                        <button
                                            type="button"
                                            v-tippy:star
                                            class="enabled:hover:text-warning disabled:opacity-60"
                                            :class="{ 'text-warning': selectedMail.isStar }"
                                            @click="setStar(selectedMail.id)"
                                            :disabled="selectedTab === 'trash'"
                                        >
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5"
                                                :class="{ 'fill-warning': selectedMail.isStar }"
                                            >
                                                <path
                                                    d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                />
                                            </svg>
                                        </button>
                                        <tippy target="star">Star</tippy>

                                        <button
                                            type="button"
                                            v-tippy:important
                                            class="enabled:hover:text-primary disabled:opacity-60"
                                            :class="{ 'text-primary': selectedMail.isImportant }"
                                            @click="setImportant(selectedMail.id)"
                                            :disabled="selectedTab === 'trash'"
                                        >
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-4.5 h-4.5 rotate-90"
                                                :class="{ 'fill-primary': selectedMail.isImportant }"
                                            >
                                                <path
                                                    d="M21 16.0909V11.0975C21 6.80891 21 4.6646 19.682 3.3323C18.364 2 16.2426 2 12 2C7.75736 2 5.63604 2 4.31802 3.3323C3 4.6646 3 6.80891 3 11.0975V16.0909C3 19.1875 3 20.7358 3.73411 21.4123C4.08421 21.735 4.52615 21.9377 4.99692 21.9915C5.98402 22.1045 7.13673 21.0849 9.44216 19.0458C10.4612 18.1445 10.9708 17.6938 11.5603 17.5751C11.8506 17.5166 12.1494 17.5166 12.4397 17.5751C13.0292 17.6938 13.5388 18.1445 14.5578 19.0458C16.8633 21.0849 18.016 22.1045 19.0031 21.9915C19.4739 21.9377 19.9158 21.735 20.2659 21.4123C21 20.7358 21 19.1875 21 16.0909Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                ></path>
                                            </svg>
                                        </button>
                                        <tippy target="important">Important</tippy>

                                        <button type="button" v-tippy:reply class="hover:text-info" @click="openMail('reply', selectedMail)">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 rtl:hidden"
                                            >
                                                <path
                                                    d="M9.5 7L4.5 12L9.5 17"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    opacity="0.5"
                                                    d="M4.5 12L14.5 12C16.1667 12 19.5 13 19.5 17"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                />
                                            </svg>
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 ltr:hidden rtl:block"
                                            >
                                                <path
                                                    d="M14.5 7L19.5 12L14.5 17"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    opacity="0.5"
                                                    d="M19.5 12L9.5 12C7.83333 12 4.5 13 4.5 17"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                />
                                            </svg>
                                        </button>
                                        <tippy target="reply">Reply</tippy>

                                        <button type="button" v-tippy:forward class="hover:text-info" @click="openMail('forward', selectedMail)">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 ltr:hidden rtl:block"
                                            >
                                                <path
                                                    d="M9.5 7L4.5 12L9.5 17"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    opacity="0.5"
                                                    d="M4.5 12L14.5 12C16.1667 12 19.5 13 19.5 17"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                />
                                            </svg>
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 rtl:hidden"
                                            >
                                                <path
                                                    d="M14.5 7L19.5 12L14.5 17"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    opacity="0.5"
                                                    d="M19.5 12L9.5 12C7.83333 12 4.5 13 4.5 17"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                />
                                            </svg>
                                        </button>
                                        <tippy target="forward">Forward</tippy>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mt-8 prose dark:prose-p:text-white prose-p:text-sm md:prose-p:text-sm max-w-full prose-img:inline-block prose-img:m-0"
                                v-html="selectedMail.description"
                            ></div>
                            <p class="mt-4">Best Regards,</p>
                            <p>{{ selectedMail.firstName + ' ' + selectedMail.lastName }}</p>

                            <div class="mt-8" v-show="selectedMail.attachments">
                                <div class="text-base mb-4">Attachments</div>
                                <div class="h-px border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
                                <div class="flex items-center flex-wrap mt-6">
                                    <template v-for="(attachment, i) in selectedMail.attachments" :key="i">
                                        <button
                                            type="button"
                                            class="flex items-center ltr:mr-4 rtl:ml-4 mb-4 border border-[#e0e6ed] dark:border-[#1b2e4b] rounded-md hover:text-primary hover:border-primary transition-all duration-300 px-4 py-2.5 relative group"
                                        >
                                            <template v-if="attachment.type === 'image'">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                    <path
                                                        d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                    <circle opacity="0.5" cx="16" cy="8" r="2" stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        opacity="0.5"
                                                        d="M2 12.5001L3.75159 10.9675C4.66286 10.1702 6.03628 10.2159 6.89249 11.0721L11.1822 15.3618C11.8694 16.0491 12.9512 16.1428 13.7464 15.5839L14.0446 15.3744C15.1888 14.5702 16.7369 14.6634 17.7765 15.599L21 18.5001"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                </svg>
                                            </template>
                                            <template v-if="attachment.type === 'folder'">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                    <path opacity="0.5" d="M18 10L13 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path
                                                        d="M2 6.94975C2 6.06722 2 5.62595 2.06935 5.25839C2.37464 3.64031 3.64031 2.37464 5.25839 2.06935C5.62595 2 6.06722 2 6.94975 2C7.33642 2 7.52976 2 7.71557 2.01738C8.51665 2.09229 9.27652 2.40704 9.89594 2.92051C10.0396 3.03961 10.1763 3.17633 10.4497 3.44975L11 4C11.8158 4.81578 12.2237 5.22367 12.7121 5.49543C12.9804 5.64471 13.2651 5.7626 13.5604 5.84678C14.0979 6 14.6747 6 15.8284 6H16.2021C18.8345 6 20.1506 6 21.0062 6.76946C21.0849 6.84024 21.1598 6.91514 21.2305 6.99383C22 7.84935 22 9.16554 22 11.7979V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V6.94975Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                </svg>
                                            </template>
                                            <template v-if="attachment.type === 'zip'">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                    <path
                                                        d="M9.5 15.5V15.375C9.5 14.8918 9.89175 14.5 10.375 14.5H13.625C14.1082 14.5 14.5 14.8918 14.5 15.375V15.5C14.5 16.8807 13.3807 18 12 18C10.6193 18 9.5 16.8807 9.5 15.5Z"
                                                        stroke="#8E93A6"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                    <path
                                                        d="M9.5 3C9.5 2.5286 9.5 2.29289 9.64645 2.14645C9.79289 2 10.0286 2 10.5 2H11C11.4714 2 11.7071 2 11.8536 2.14645C12 2.29289 12 2.5286 12 3V3.5C12 3.9714 12 4.20711 11.8536 4.35355C11.7071 4.5 11.4714 4.5 11 4.5H10.5C10.0286 4.5 9.79289 4.5 9.64645 4.35355C9.5 4.20711 9.5 3.9714 9.5 3.5V3Z"
                                                        stroke="#8E93A6"
                                                        stroke-width="1.5"
                                                    />
                                                    <path
                                                        d="M9.5 8C9.5 7.5286 9.5 7.29289 9.64645 7.14645C9.79289 7 10.0286 7 10.5 7H11C11.4714 7 11.7071 7 11.8536 7.14645C12 7.29289 12 7.5286 12 8V8.5C12 8.9714 12 9.20711 11.8536 9.35355C11.7071 9.5 11.4714 9.5 11 9.5H10.5C10.0286 9.5 9.79289 9.5 9.64645 9.35355C9.5 9.20711 9.5 8.9714 9.5 8.5V8Z"
                                                        stroke="#8E93A6"
                                                        stroke-width="1.5"
                                                    />
                                                    <path
                                                        d="M12 5.5C12 5.0286 12 4.79289 12.1464 4.64645C12.2929 4.5 12.5286 4.5 13 4.5H13.5C13.9714 4.5 14.2071 4.5 14.3536 4.64645C14.5 4.79289 14.5 5.0286 14.5 5.5V6C14.5 6.4714 14.5 6.70711 14.3536 6.85355C14.2071 7 13.9714 7 13.5 7H13C12.5286 7 12.2929 7 12.1464 6.85355C12 6.70711 12 6.4714 12 6V5.5Z"
                                                        stroke="#8E93A6"
                                                        stroke-width="1.5"
                                                    />
                                                    <path
                                                        d="M12 10.5C12 10.0286 12 9.79289 12.1464 9.64645C12.2929 9.5 12.5286 9.5 13 9.5H13.5C13.9714 9.5 14.2071 9.5 14.3536 9.64645C14.5 9.79289 14.5 10.0286 14.5 10.5V11C14.5 11.4714 14.5 11.7071 14.3536 11.8536C14.2071 12 13.9714 12 13.5 12H13C12.5286 12 12.2929 12 12.1464 11.8536C12 11.7071 12 11.4714 12 11V10.5Z"
                                                        stroke="#8E93A6"
                                                        stroke-width="1.5"
                                                    />
                                                    <path
                                                        d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                </svg>
                                            </template>
                                            <template v-if="attachment.type !== 'zip' && attachment.type !== 'image' && attachment.type !== 'folder'">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                    <path
                                                        d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                                                        fill="currentColor"
                                                    />
                                                    <path opacity="0.5" d="M6 14.5H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path opacity="0.5" d="M6 18H11.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path
                                                        opacity="0.5"
                                                        d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                </svg>
                                            </template>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <p class="text-xs text-primary font-semibold">
                                                    {{ attachment.name }}
                                                </p>
                                                <p class="text-[11px] text-gray-400 dark:text-gray-600">
                                                    {{ attachment.size }}
                                                </p>
                                            </div>
                                            <div
                                                class="bg-dark-light/40 z-[5] w-full h-full absolute ltr:left-0 rtl:right-0 top-0 rounded-md hidden group-hover:block"
                                            ></div>
                                            <div
                                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full p-1 btn btn-primary hidden group-hover:block z-10"
                                            >
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                    <path
                                                        opacity="0.5"
                                                        d="M3 15C3 17.8284 3 19.2426 3.87868 20.1213C4.75736 21 6.17157 21 9 21H15C17.8284 21 19.2426 21 20.1213 20.1213C21 19.2426 21 17.8284 21 15"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                    <path
                                                        d="M12 3V16M12 16L16 11.625M12 16L8 11.625"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </div>
                                        </button>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>

                <template v-if="isEdit">
                    <div class="relative">
                        <div class="py-4 px-6 flex items-center">
                            <button type="button" class="xl:hidden hover:text-primary block ltr:mr-3 rtl:ml-3" @click="isShowMailMenu = !isShowMailMenu">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                    <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path opacity="0.5" d="M20 12L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </button>
                            <h4 class="text-lg text-gray-600 dark:text-gray-400 font-medium">Message</h4>
                        </div>
                        <div class="h-px bg-gradient-to-l from-indigo-900/20 via-black dark:via-white to-indigo-900/20 opacity-[0.1]"></div>
                        <form class="p-6 grid gap-6">
                            <div>
                                <input type="text" class="form-input" placeholder="Enter To" v-model="params.to" />
                            </div>

                            <div>
                                <input type="text" class="form-input" placeholder="Enter Cc" v-model="params.cc" />
                            </div>

                            <div>
                                <input type="text" class="form-input" placeholder="Enter Subject" v-model="params.title" />
                            </div>

                            <div class="h-fit">
                                <quillEditor
                                    ref="editor"
                                    v-model:value="params.description"
                                    :options="editorOptions"
                                    style="min-height: 200px"
                                    @ready="quillEditorReady($event)"
                                ></quillEditor>
                            </div>

                            <div>
                                <input
                                    id="file"
                                    type="file"
                                    class="form-input file:py-2 file:px-4 file:border-0 file:font-semibold p-0 file:bg-primary/90 ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-primary"
                                    multiple
                                    accept="image/*,.zip,.pdf,.xls,.xlsx,.txt.doc,.docx"
                                    :value="params.file"
                                />
                            </div>

                            <div class="flex items-center ltr:ml-auto rtl:mr-auto mt-8">
                                <button type="button" class="btn btn-outline-danger ltr:mr-3 rtl:ml-3" @click="closeMsgPopUp">Close</button>
                                <button type="button" class="btn btn-success ltr:mr-3 rtl:ml-3" @click="saveMail('save', null)">Save</button>
                                <button type="button" class="btn btn-primary" @click="saveMail('send', params.id)">Send</button>
                            </div>
                        </form>
                    </div>
                </template>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref, computed, onMounted } from 'vue';
    import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue';
    import { quillEditor } from 'vue3-quill';
    import 'vue3-quill/lib/vue3-quill.css';
    import Swal from 'sweetalert2';
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Mailbox' });
    const store = useAppStore();

    const defaultData = ref({
        id: null,
        from: 'vristo@mail.com',
        to: '',
        cc: '',
        title: '',
        file: null,
        description: '',
        displayDescription: '',
    });
    const isShowMailMenu = ref(false);
    const isEdit = ref(false);
    const selectedTab = ref('inbox');
    const filteredMailList: any = ref([]);
    const ids: any = ref([]);
    const searchText = ref('');
    const selectedMail: any = ref(null);
    const params: any = ref(defaultData.value);
    const mailList = ref([
        {
            id: 1,
            path: 'profile-15.jpeg',
            firstName: 'Laurie',
            lastName: 'Fox',
            email: 'laurieFox@mail.com',
            date: new Date(),
            time: '2:00 PM',
            title: 'Promotion Page',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'inbox',
            isImportant: false,
            isStar: true,
            group: 'social',
            isUnread: false,
            attachments: [
                {
                    name: 'Confirm File.txt',
                    size: '450KB',
                    type: 'file',
                },
                {
                    name: 'Important Docs.xml',
                    size: '2.1MB',
                    type: 'file',
                },
            ],
            description: `
                        <p class="mail-content"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <div class="gallery text-center">
                            <img alt="image-gallery" src="${'/assets/images/carousel3.jpeg'}" class="mb-4 mt-4" style="width: 250px; height: 180px;" />
                            <img alt="image-gallery" src="${'/assets/images/carousel2.jpeg'}" class="mb-4 mt-4" style="width: 250px; height: 180px;" />
                            <img alt="image-gallery" src="${'/assets/images/carousel1.jpeg'}" class="mb-4 mt-4" style="width: 250px; height: 180px;" />
                        </div>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 2,
            path: 'profile-14.jpeg',
            firstName: 'Andy',
            lastName: 'King',
            email: 'kingAndy@mail.com',
            date: new Date(),
            time: '6:28 PM',
            title: 'Hosting Payment Reminder',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 3,
            path: '',
            firstName: 'Kristen',
            lastName: 'Beck',
            email: 'kirsten.beck@mail.com',
            date: new Date(),
            time: '11:09 AM',
            title: 'Verification Link',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: 'social',
            isUnread: true,
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 4,
            path: 'profile-16.jpeg',
            firstName: 'Christian',
            lastName: '',
            email: 'christian@mail.com',
            date: '11/30/2021',
            time: '2:00 PM',
            title: 'New Updates',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: 'private',
            isUnread: false,
            attachments: [
                {
                    name: 'update.zip',
                    size: '1.38MB',
                    type: 'zip',
                },
            ],
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 5,
            path: 'profile-17.jpeg',
            firstName: 'Roxanne',
            lastName: '',
            email: 'roxanne@mail.com',
            date: '11/15/2021',
            time: '2:00 PM',
            title: 'Schedular Alert',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: 'personal',
            isUnread: true,
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 6,
            path: 'profile-18.jpeg',
            firstName: 'Nia',
            lastName: 'Hillyer',
            email: 'niahillyer@mail.com',
            date: '08/16/2020',
            time: '2:22 AM',
            title: 'Motion UI Kit',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'inbox',
            isImportant: true,

            isStar: true,
            group: '',
            isUnread: false,
            description: `
                        <p class="mail-content"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        <div class="gallery text-center">
                            <img alt="image-gallery" src="${'/assets/images/carousel3.jpeg'}" class="mb-4 mt-4" style="width: 250px; height: 180px;">
                            <img alt="image-gallery" src="${'/assets/images/carousel2.jpeg'}" class="mb-4 mt-4" style="width: 250px; height: 180px;">
                            <img alt="image-gallery" src="${'/assets/images/carousel1.jpeg'}" class="mb-4 mt-4" style="width: 250px; height: 180px;">
                        </div>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 7,
            path: 'profile-19.jpeg',
            firstName: 'Iris',
            lastName: 'Hubbard',
            email: 'irishubbard@mail.com',
            date: '08/16/2020',
            time: '1:40 PM',
            title: 'Green Illustration',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'inbox',
            isImportant: true,

            isStar: true,
            group: '',
            isUnread: false,
            description: `
                        <p class="mail-content"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 8,
            path: '',
            firstName: 'Ernest',
            lastName: 'Reeves',
            email: 'reevesErnest@mail.com',
            date: '06/02/2020',
            time: '8:25 PM',
            title: 'Youtube',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'archive',
            isImportant: true,

            isStar: true,
            group: 'work',
            isUnread: false,
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 9,
            path: 'profile-20.jpeg',
            firstName: 'Info',
            lastName: 'Company',
            email: 'infocompany@mail.com',
            date: '02/10/2020',
            time: '7:00 PM',
            title: '50% Discount',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: 'work',
            isUnread: false,
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },

        {
            id: 10,
            path: '',
            firstName: 'NPM',
            lastName: 'Inc',
            email: 'npminc@mail.com',
            date: '12/15/2018',
            time: '8:37 AM',
            title: 'npm Inc',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'archive',
            isImportant: false,
            isStar: false,
            group: 'personal',
            isUnread: true,
            attachments: [
                {
                    name: 'package.zip',
                    size: '450KB',
                    type: 'zip',
                },
            ],
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 11,
            path: 'profile-21.jpeg',
            firstName: 'Marlene',
            lastName: 'Wood',
            email: 'marlenewood@mail.com',
            date: '11/25/2018',
            time: '1:51 PM',
            title: 'eBill',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: 'personal',
            isUnread: false,
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },

        {
            id: 12,
            path: '',
            firstName: 'Keith',
            lastName: 'Foster',
            email: 'kf@mail.com',
            date: '12/15/2018',
            time: '9:30 PM',
            title: 'Web Design News',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'draft',
            isImportant: false,
            isStar: false,
            group: 'personal',
            isUnread: false,
            description: `
                        <p class="mail-content"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                        `,
        },
        {
            id: 13,
            path: '',
            firstName: 'Amy',
            lastName: 'Diaz',
            email: 'amyDiaz@mail.com',
            date: '12/15/2018',
            time: '2:00 PM',
            title: 'Ecommerce Analytics',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'draft',
            isImportant: false,
            isStar: false,
            group: 'private',
            isUnread: false,
            description: `
                        <p class="mail-content"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                        `,
        },

        {
            id: 14,
            path: '',
            firstName: 'Alan',
            lastName: '',
            email: 'alan@mail.com',
            date: '12/16/2019',
            time: '8:45 AM',
            title: 'Mozilla Update',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'sent_mail',
            isImportant: false,
            isStar: false,
            group: 'work',
            isUnread: false,
            attachments: [
                {
                    name: 'Confirm File',
                    size: '450KB',
                    type: 'file',
                },
                {
                    name: 'Important Docs',
                    size: '2.1MB',
                    type: 'folder',
                },
                {
                    name: 'Photo.png',
                    size: '50kb',
                    type: 'image',
                },
            ],
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 15,
            path: '',
            firstName: 'Justin',
            lastName: 'Cross',
            email: 'justincross@mail.com',
            date: '09/14/219',
            time: '3:10 PM',
            title: 'App Project Checklist',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'sent_mail',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            attachments: [
                {
                    name: 'Important Docs',
                    size: '2.1MB',
                    type: 'folder',
                },
                {
                    name: 'Photo.png',
                    size: '50kb',
                    type: 'image',
                },
            ],
            description: `
                        <p class="mail-content"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },

        {
            id: 16,
            path: 'profile-21.jpeg',
            firstName: 'Alex',
            lastName: 'Gray',
            email: 'alexGray@mail.com',
            date: '08/16/2019',
            time: '10:18 AM',
            title: 'Weekly Newsletter',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'spam',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            attachments: [
                {
                    name: 'Confirm File',
                    size: '450KB',
                    type: 'file',
                },
                {
                    name: 'Important Docs',
                    size: '2.1MB',
                    type: 'folder',
                },
                {
                    name: 'Photo.png',
                    size: '50kb',
                    type: 'image',
                },
            ],
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 17,
            path: 'profile-22.jpeg',
            firstName: 'Info',
            lastName: 'Company',
            email: 'infocompany@mail.com',
            date: '02/10/2018',
            time: '7:00 PM',
            title: '50% Discount',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'spam',
            isImportant: false,
            isStar: false,
            group: 'work',
            isUnread: false,
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 18,
            path: 'profile-21.jpeg',
            firstName: 'Marlene',
            lastName: 'Wood',
            email: 'marlenewood@mail.com',
            date: '11/25/2017',
            time: '1:51 PM',
            title: 'eBill',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'spam',
            isImportant: false,
            isStar: false,
            group: 'personal',
            isUnread: false,
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },

        {
            id: 19,
            path: 'profile-23.jpeg',
            firstName: 'Ryan MC',
            lastName: 'Killop',
            email: 'ryanMCkillop@mail.com',
            date: '08/17/2018',
            time: '11:45 PM',
            title: 'Make it Simple',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'trash',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            description: `
                        <p class="mail-content"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <div class="gallery text-center">
                            <img alt="image-gallery" src="${'/assets/images/carousel2.jpeg'}" class="mb-4 mt-4" style="width: 250px; height: 180px;">
                            <img alt="image-gallery" src="${'/assets/images/carousel3.jpeg'}" class="mb-4 mt-4" style="width: 250px; height: 180px;">
                            <img alt="image-gallery" src="${'/assets/images/carousel1.jpeg'}" class="mb-4 mt-4" style="width: 250px; height: 180px;">
                        </div>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 20,
            path: 'profile-23.jpeg',
            firstName: 'Liam',
            lastName: 'Sheldon',
            email: 'liamsheldon@mail.com',
            date: '08/17/2018 ',
            time: '11:45 PM',
            title: 'New Offers',
            displayDescription:
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.',
            type: 'trash',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            attachments: [
                {
                    name: 'Confirm File',
                    size: '450KB',
                    type: 'file',
                },
            ],
            description: `
                        <p class="mail-content"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        `,
        },
        {
            id: 21,
            path: 'profile-21.jpeg',
            firstName: 'Porter',
            lastName: 'Taylor',
            email: 'porter.harber@wiza.info',
            date: '06/01/2020',
            time: '02:40 PM',
            title: 'Id labore ex et quam laborum',
            displayDescription:
                'Laudantium enim quasi est quidem magnam voluptate ipsam eos\ntempora quo necessitatibus\ndolor quam autem quasi\nreiciendis et nam sapiente accusantium',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            description: `<p class="mail-content">Laudantium enim quasi est quidem magnam voluptate ipsam eos\ntempora quo necessitatibus\ndolor quam autem quasi\nreiciendis et nam sapiente accusantium</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 22,
            path: 'profile-22.jpeg',
            firstName: 'Brock',
            lastName: 'Mills',
            email: 'brock.gibson@farrell.biz',
            date: '09/08/2020',
            time: '04:20 AM',
            title: 'Quo vero reiciendis velit similique earum',
            displayDescription:
                'Est natus enim nihil est dolore omnis voluptatem numquam\net omnis occaecati quod ullam at\nvoluptatem error expedita pariatur\nnihil sint nostrum voluptatem reiciendis et',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            description: `<p class="mail-content">Est natus enim nihil est dolore omnis voluptatem numquam\net omnis occaecati quod ullam at\nvoluptatem error expedita pariatur\nnihil sint nostrum voluptatem reiciendis et</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 23,
            path: 'profile-3.jpeg',
            firstName: 'Nyost',
            lastName: 'Terry',
            email: 'nyost@yahoo.com',
            date: '04/01/2019',
            time: '02:10 AM',
            title: 'Odio adipisci rerum aut animi',
            displayDescription:
                'Quia molestiae reprehenderit quasi aspernatur\naut expedita occaecati aliquam eveniet laudantium\nomnis quibusdam delectus saepe quia accusamus maiores nam est\ncum et ducimus et vero voluptates excepturi deleniti ratione',
            type: 'inbox',
            isImportant: true,
            isStar: false,
            group: 'personal',
            isUnread: false,
            description: `<p class="mail-content">Quia molestiae reprehenderit quasi aspernatur\naut expedita occaecati aliquam eveniet laudantium\nomnis quibusdam delectus saepe quia accusamus maiores nam est\ncum et ducimus et vero voluptates excepturi deleniti ratione</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 24,
            path: 'profile-2.jpeg',
            firstName: 'Leonardo',
            lastName: 'Knox',
            email: 'leonardo61@yahoo.com',
            date: '08/08/2018',
            time: '07:50 PM',
            title: 'Alias odio sit',
            displayDescription:
                'Non et atque\noccaecati deserunt quas accusantium unde odit nobis qui voluptatem\nquia voluptas consequuntur itaque dolor\net qui rerum deleniti ut occaecati',
            type: 'inbox',
            isImportant: false,
            isStar: true,
            group: '',
            isUnread: false,
            description: `<p class="mail-content">Non et atque\noccaecati deserunt quas accusantium unde odit nobis qui voluptatem\nquia voluptas consequuntur itaque dolor\net qui rerum deleniti ut occaecati</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 25,
            path: 'profile-24.jpeg',
            firstName: 'Melisa',
            lastName: 'Mitchell',
            email: 'melisa.legros@mayer.com',
            date: '10/03/2018',
            time: '06:40 AM',
            title: 'Vero eaque aliquid doloribus et culpa',
            displayDescription:
                'Harum non quasi et ratione\ntempore iure ex voluptates in ratione\nharum architecto fugit inventore cupiditate\nvoluptates magni quo et',
            type: 'inbox',
            isImportant: true,
            isStar: true,
            group: 'work',
            isUnread: false,
            description: `<p class="mail-content">Harum non quasi et ratione\ntempore iure ex voluptates in ratione\nharum architecto fugit inventore cupiditate\nvoluptates magni quo et</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 26,
            path: 'profile-26.jpeg',
            firstName: 'Florida',
            lastName: 'Morgan',
            email: 'florida54@gmail.com',
            date: '05/12/2019',
            time: '09:20 PM',
            title: 'Et fugit eligendi deleniti quidem qui sint nihil autem',
            displayDescription:
                'Doloribus at sed quis culpa deserunt consectetur qui praesentium\naccusamus fugiat dicta\nvoluptatem rerum ut voluptate autem\nvoluptatem repellendus aspernatur dolorem in',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            description: `<p class="mail-content">Doloribus at sed quis culpa deserunt consectetur qui praesentium\naccusamus fugiat dicta\nvoluptatem rerum ut voluptate autem\nvoluptatem repellendus aspernatur dolorem in</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 27,
            path: 'profile-27.jpeg',
            firstName: 'Madison',
            lastName: 'King',
            email: 'madison86@yahoo.com',
            date: '12/04/2018',
            time: '10:40 PM',
            title: 'Repellat consequatur praesentium vel minus molestias voluptatum',
            displayDescription:
                'Maiores sed dolores similique labore et inventore et\nquasi temporibus esse sunt id et\neos voluptatem aliquam\naliquid ratione corporis molestiae mollitia quia et magnam dolor',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: 'private',
            isUnread: false,
            description: `<p class="mail-content">Maiores sed dolores similique labore et inventore et\nquasi temporibus esse sunt id et\neos voluptatem aliquam\naliquid ratione corporis molestiae mollitia quia et magnam dolor</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 28,
            path: 'profile-30.jpeg',
            firstName: 'Paul',
            lastName: 'Lambert',
            email: 'paul.cruickshank@yahoo.com',
            date: '06/05/2018',
            time: '01:40 AM',
            title: 'Et omnis dolorem',
            displayDescription:
                'Ut voluptatem corrupti velit\nad voluptatem maiores\net nisi velit vero accusamus maiores\nvoluptates quia aliquid ullam eaque',
            type: 'inbox',
            isImportant: true,
            isStar: false,
            group: '',
            isUnread: false,
            description: `<p class="mail-content">Ut voluptatem corrupti velit\nad voluptatem maiores\net nisi velit vero accusamus maiores\nvoluptates quia aliquid ullam eaque</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 29,
            path: 'profile-31.jpeg',
            firstName: 'Brakus',
            lastName: 'Morrison',
            email: 'brakus.heidi@gmail.com',
            date: '03/09/2018',
            time: '06:10 PM',
            title: 'Provident id voluptas',
            displayDescription:
                'Sapiente assumenda molestiae atque\nadipisci laborum distinctio aperiam et ab ut omnis\net occaecati aspernatur odit sit rem expedita\nquas enim ipsam minus',
            type: 'inbox',
            isImportant: false,
            isStar: true,
            group: 'social',
            isUnread: false,
            description: `<p class="mail-content">Sapiente assumenda molestiae atque\nadipisci laborum distinctio aperiam et ab ut omnis\net occaecati aspernatur odit sit rem expedita\nquas enim ipsam minus</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 30,
            path: 'profile-32.jpeg',
            firstName: 'Predovic',
            lastName: 'Peake',
            email: 'predovic.arianna@kirlin.com',
            date: '05/06/2018',
            time: '09:00 AM',
            title: 'Eaque et deleniti atque tenetur ut quo ut',
            displayDescription:
                'Voluptate iusto quis nobis reprehenderit ipsum amet nulla\nquia quas dolores velit et non\naut quia necessitatibus\nnostrum quaerat nulla et accusamus nisi facili',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: 'personal',
            isUnread: false,
            description: `<p class="mail-content">Voluptate iusto quis nobis reprehenderit ipsum amet nulla\nquia quas dolores velit et non\naut quia necessitatibus\nnostrum quaerat nulla et accusamus nisi facili</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 31,
            path: 'profile-32.jpeg',
            firstName: 'shaylee',
            lastName: 'Buford',
            email: 'Buford@shaylee.biz',
            date: '07/03/2018',
            time: '08:15 AM',
            title: 'Ex velit ut cum eius odio ad placeat',
            displayDescription:
                'Quia incidunt ut\naliquid est ut rerum deleniti iure est\nipsum quia ea sint et\nvoluptatem quaerat eaque repudiandae eveniet aut',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            description: `<p class="mail-content"></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 32,
            path: 'profile-32.jpeg',
            firstName: 'Maria',
            lastName: 'laurel',
            email: 'Maria@laurel.name',
            date: '08/03/2018',
            time: '09:30 AM',
            title: 'Dolorem architecto ut pariatur quae qui suscipit',
            displayDescription:
                'Nihil ea itaque libero illo\nofficiis quo quo dicta inventore consequatur voluptas voluptatem\ncorporis sed necessitatibus velit tempore\nrerum velit et temporibus',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            description: `<p class="mail-content"></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 33,
            path: 'profile-32.jpeg',
            firstName: 'Jaeden',
            lastName: 'Towne',
            email: 'Jaeden.Towne@arlene.tv',
            date: '11/07/2018',
            time: '10:15 AM',
            title: 'Voluptatum totam vel voluptate omnis',
            displayDescription: 'Fugit harum quae vero\nlibero unde tempore\nsoluta eaque culpa sequi quibusdam nulla id\net et necessitatibus',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            description: `<p class="mail-content"></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 34,
            path: 'profile-32.jpeg',
            firstName: 'Schneider',
            lastName: 'Ethelyn',
            email: 'Ethelyn.Schneider@emelia.co.uk',
            date: '07/11/2018',
            time: '10:30 AM',
            title: 'Omnis nemo sunt ab autem',
            displayDescription: 'Omnis temporibus quasi ab omnis\nfacilis et omnis illum quae quasi aut\nminus iure ex rem ut reprehenderit\nin non fugit',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            description: `<p class="mail-content"></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
        {
            id: 35,
            path: 'profile-32.jpeg',
            firstName: 'Anna',
            lastName: 'Georgi',
            email: 'Georgianna@florence.io',
            date: '10/10/2017',
            time: '10:45 AM',
            title: 'Repellendus sapiente omnis praesentium aliquam ipsum id molestiae omnis',
            displayDescription: 'Dolor mollitia quidem facere et\nvel est ut\nut repudiandae est quidem dolorem sed atque\nrem quia aut adipisci sunt',
            type: 'inbox',
            isImportant: false,
            isStar: false,
            group: '',
            isUnread: false,
            description: `<p class="mail-content"></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>`,
        },
    ]);
    const pager = ref({
        currentPage: 1,
        totalPages: 0,
        pageSize: 10,
        startIndex: 0,
        endIndex: 0,
    });
    const pagedMails: any = ref([]);
    const editorOptions = ref({
        modules: {
            toolbar: [[{ header: [1, 2, false] }], ['bold', 'italic', 'underline', 'link'], [{ list: 'ordered' }, { list: 'bullet' }], ['clean']],
        },
        placeholder: '',
    });
    const quillEditorObj: any = ref(null);

    const checkAllCheckbox = computed(() => {
        if (filteredMailList.value.length && ids.value.length === filteredMailList.value.length) {
            return true;
        } else {
            return false;
        }
    });
    const showTime = (item: any) => {
        const displayDt: any = new Date(item.date);
        const cDt: any = new Date();
        if (displayDt.toDateString() === cDt.toDateString()) {
            return item.time;
        } else {
            if (displayDt.getFullYear() === cDt.getFullYear()) {
                var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                return monthNames[displayDt.getMonth()] + ' ' + String(displayDt.getDate()).padStart(2, '0');
            } else {
                return String(displayDt.getMonth() + 1).padStart(2, '0') + '/' + String(displayDt.getDate()).padStart(2, '0') + '/' + displayDt.getFullYear();
            }
        }
    };

    const checkAll = (isChecked: boolean = false) => {
        if (isChecked) {
            ids.value = filteredMailList.value.map((d: any) => {
                return d.id;
            });
        } else {
            clearSelection();
        }
    };

    onMounted(() => {
        searchMails();
    });

    const quillEditorReady = (quill: any) => {
        quillEditorObj.value = quill;
    };

    const searchMails = (isResetPage = true) => {
        if (isResetPage) {
            pager.value.currentPage = 1;
        }

        let res;
        if (selectedTab.value === 'important') {
            res = mailList.value.filter((d) => d.isImportant);
        } else if (selectedTab.value === 'star') {
            res = mailList.value.filter((d) => d.isStar);
        } else if (selectedTab.value === 'personal' || selectedTab.value === 'work' || selectedTab.value === 'social' || selectedTab.value === 'private') {
            res = mailList.value.filter((d) => d.group === selectedTab.value);
        } else {
            res = mailList.value.filter((d) => d.type === selectedTab.value);
        }
        filteredMailList.value = res.filter(
            (d) =>
                (d.title && d.title.toLowerCase().includes(searchText.value)) ||
                (d.firstName && d.firstName.toLowerCase().includes(searchText.value)) ||
                (d.lastName && d.lastName.toLowerCase().includes(searchText.value)) ||
                (d.displayDescription && d.displayDescription.toLowerCase().includes(searchText.value))
        );
        if (filteredMailList.value.length) {
            pager.value.totalPages = pager.value.pageSize < 1 ? 1 : Math.ceil(filteredMailList.value.length / pager.value.pageSize);
            if (pager.value.currentPage > pager.value.totalPages) {
                pager.value.currentPage = 1;
            }
            pager.value.startIndex = (pager.value.currentPage - 1) * pager.value.pageSize;
            pager.value.endIndex = Math.min(pager.value.startIndex + pager.value.pageSize - 1, filteredMailList.value.length - 1);
            pagedMails.value = filteredMailList.value.slice(pager.value.startIndex, pager.value.endIndex + 1);
        } else {
            pagedMails.value = [];
            pager.value.startIndex = -1;
            pager.value.endIndex = -1;
        }
        clearSelection();
    };

    const clearSelection = () => {
        ids.value = [];
    };

    const tabChanged = (tabType: any) => {
        isEdit.value = false;
        selectedTab.value = tabType;
        isShowMailMenu.value = false;
        selectedMail.value = null;
        searchMails();
    };

    const setImportant = (mailId: number) => {
        if (mailId) {
            let item = filteredMailList.value.find((d: any) => d.id === mailId);
            item.isImportant = !item.isImportant;
            setTimeout(() => {
                searchMails(false);
            });
        }
    };

    const setStar = (mailId: number) => {
        if (mailId) {
            let item = filteredMailList.value.find((d: any) => d.id === mailId);
            item.isStar = !item.isStar;
            setTimeout(() => {
                searchMails(false);
            });
        }
    };

    const refreshMails = () => {
        searchText.value = '';
        searchMails(false);
    };

    const setSpam = () => {
        if (ids.value.length) {
            let items = filteredMailList.value.filter((d: any) => ids.value.includes(d.id));
            for (let item of items) {
                item.type = item.type === 'spam' ? 'inbox' : 'spam';
            }
            if (selectedTab.value == 'spam') {
                showMessage(ids.value.length + ' Mail has been removed from Spam.');
            } else {
                showMessage(ids.value.length + ' Mail has been added to Spam.');
            }
            searchMails(false);
        }
    };

    const setArchive = () => {
        if (ids.value.length) {
            let items = filteredMailList.value.filter((d: any) => ids.value.includes(d.id));
            for (let item of items) {
                item.type = item.type === 'archive' ? 'inbox' : 'archive';
            }
            if (selectedTab.value == 'archive') {
                showMessage(ids.value.length + ' Mail has been removed from Archive.');
            } else {
                showMessage(ids.value.length + ' Mail has been added to Archive.');
            }
            searchMails(false);
        }
    };

    const setGroup = (group: any) => {
        if (ids.value.length) {
            let items = filteredMailList.value.filter((d: any) => ids.value.includes(d.id));
            for (let item of items) {
                item.group = group;
            }

            showMessage(ids.value.length + ' Mail has been grouped as ' + group.toUpperCase());
            clearSelection();
            setTimeout(() => {
                searchMails(false);
            });
        }
    };

    const setAction = (type: any) => {
        if (ids.value.length) {
            const totalSelected = ids.value.length;
            let items = filteredMailList.value.filter((d: any) => ids.value.includes(d.id));
            for (let item of items) {
                if (type === 'trash') {
                    item.type = 'trash';
                    item.group = '';
                    item.isStar = false;
                    item.isImportant = false;
                    showMessage(totalSelected + ' Mail has been deleted.');
                    searchMails(false);
                } else if (type === 'read') {
                    item.isUnread = false;
                    showMessage(totalSelected + ' Mail has been marked as Read.');
                } else if (type === 'unread') {
                    item.isUnread = true;
                    showMessage(totalSelected + ' Mail has been marked as UnRead.');
                } else if (type === 'important') {
                    item.isImportant = true;
                    showMessage(totalSelected + ' Mail has been marked as Important.');
                } else if (type === 'unimportant') {
                    item.isImportant = false;
                    showMessage(totalSelected + ' Mail has been marked as UnImportant.');
                } else if (type === 'star') {
                    item.isStar = true;
                    showMessage(totalSelected + ' Mail has been marked as Star.');
                }
                //restore & permanent delete
                else if (type === 'restore') {
                    item.type = 'inbox';
                    showMessage(totalSelected + ' Mail Restored.');
                    searchMails(false);
                } else if (type === 'delete') {
                    mailList.value = mailList.value.filter((d: any) => d.id != item.id);
                    showMessage(totalSelected + ' Mail Permanently Deleted.');
                    searchMails(false);
                }
            }
            clearSelection();
        }
    };

    const saveMail = (type: any, id: any) => {
        if (!params.value.to) {
            showMessage('To email address is required.', 'error');
            return false;
        }
        if (!params.value.title) {
            showMessage('Title of email is required.', 'error');
            return false;
        }

        let maxId = 0;
        if (!params.value.id) {
            maxId = mailList.value.length ? mailList.value.reduce((max, character) => (character.id > max ? character.id : max), mailList.value[0].id) : 0;
        }
        let cDt = new Date();

        let obj: any = {
            id: maxId + 1,
            path: '',
            firstName: '',
            lastName: '',
            email: params.value.to,
            date: cDt.getMonth() + 1 + '/' + cDt.getDate() + '/' + cDt.getFullYear(),
            time: cDt.toLocaleTimeString(),
            title: params.value.title,
            displayDescription: quillEditorObj.value.getText(),
            type: 'draft',
            isImportant: false,
            group: '',
            isUnread: false,
            description: params.value.description,
            attachments: null,
        };
        if (params.value.file && params.value.file.length) {
            obj.attachments = [];
            for (let file of params.value.file) {
                let flObj = {
                    name: file.name,
                    size: getFileSize(file.size),
                    type: getFileType(file.type),
                };
                obj.attachments.push(flObj);
            }
        }
        if (type === 'save' || type === 'save_reply' || type === 'save_forward') {
            //saved to draft

            obj.type = 'draft';
            mailList.value.splice(0, 0, obj);
            searchMails();

            showMessage('Mail has been saved successfully to draft.');
        } else if (type === 'send' || type === 'reply' || type === 'forward') {
            //saved to sent mail

            obj.type = 'sent_mail';
            mailList.value.splice(0, 0, obj);
            searchMails();

            showMessage('Mail has been sent successfully.');
        }

        selectedMail.value = null;
        isEdit.value = false;
    };

    const getFileSize = (file_type: any) => {
        let type = 'file';
        if (file_type.includes('image/')) {
            type = 'image';
        } else if (file_type.includes('application/x-zip')) {
            type = 'zip';
        }
        return type;
    };

    const getFileType = (total_bytes: number) => {
        let size = '';
        if (total_bytes < 1000000) {
            size = Math.floor(total_bytes / 1000) + 'KB';
        } else {
            size = Math.floor(total_bytes / 1000000) + 'MB';
        }
        return size;
    };

    const selectMail = (item: any) => {
        if (item) {
            if (item.type != 'draft') {
                if (item && item.isUnread) {
                    item.isUnread = false;
                }
                selectedMail.value = item;
            } else {
                openMail('draft', item);
            }
        } else {
            selectedMail.value = '';
        }
    };

    const openMail = (type: string, item: any) => {
        if (type === 'add') {
            isShowMailMenu.value = false;
            params.value = JSON.parse(JSON.stringify(defaultData.value));
        } else if (type === 'draft') {
            let data = JSON.parse(JSON.stringify(item));
            params.value = data;
            params.value.from = defaultData.value.from;
            params.value.to = data.email;
            params.value.displayDescription = data.email;
        } else if (type === 'reply') {
            let data = JSON.parse(JSON.stringify(item));
            params.value = data;
            params.value.from = defaultData.value.from;
            params.value.to = data.email;
            params.value.title = 'Re: ' + params.value.title;
            params.value.displayDescription = 'Re: ' + params.value.title;
        } else if (type === 'forward') {
            let data = JSON.parse(JSON.stringify(item));
            params.value = data;
            params.value.from = defaultData.value.from;
            params.value.to = data.email;
            params.value.title = 'Fwd: ' + params.value.title;
            params.value.displayDescription = 'Fwd: ' + params.value.title;
        }
        isEdit.value = true;
    };

    const closeMsgPopUp = () => {
        isEdit.value = false;
        selectedTab.value = 'inbox';
        searchMails();
    };

    const showMessage = (msg = '', type = 'success') => {
        const toast: any = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000,
            customClass: { container: 'toast' },
        });
        toast.fire({
            icon: type,
            title: msg,
            padding: '10px 20px',
        });
    };
</script>
