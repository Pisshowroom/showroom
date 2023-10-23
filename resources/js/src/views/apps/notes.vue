<template>
    <div>
        <div class="flex gap-5 relative sm:h-[calc(100vh_-_150px)] h-full">
            <div
                class="bg-black/60 z-10 w-full h-full rounded-md absolute hidden"
                :class="{ '!block xl:!hidden': isShowNoteMenu }"
                @click="isShowNoteMenu = !isShowNoteMenu"
            ></div>
            <div
                class="panel p-4 flex-none w-[240px] absolute xl:relative z-10 space-y-4 h-full xl:h-auto hidden xl:block ltr:lg:rounded-r-md ltr:rounded-r-none rtl:lg:rounded-l-md rtl:rounded-l-none overflow-hidden"
                :class="{ 'hidden shadow': !isShowNoteMenu, '!block h-full ltr:left-0 rtl:right-0': isShowNoteMenu }"
            >
                <div class="flex flex-col h-full pb-16">
                    <div class="flex text-center items-center">
                        <div class="shrink-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                <path
                                    d="M20.3116 12.6473L20.8293 10.7154C21.4335 8.46034 21.7356 7.3328 21.5081 6.35703C21.3285 5.58657 20.9244 4.88668 20.347 4.34587C19.6157 3.66095 18.4881 3.35883 16.2331 2.75458C13.978 2.15033 12.8504 1.84821 11.8747 2.07573C11.1042 2.25537 10.4043 2.65945 9.86351 3.23687C9.27709 3.86298 8.97128 4.77957 8.51621 6.44561C8.43979 6.7254 8.35915 7.02633 8.27227 7.35057L8.27222 7.35077L7.75458 9.28263C7.15033 11.5377 6.84821 12.6652 7.07573 13.641C7.25537 14.4115 7.65945 15.1114 8.23687 15.6522C8.96815 16.3371 10.0957 16.6392 12.3508 17.2435L12.3508 17.2435C14.3834 17.7881 15.4999 18.0873 16.415 17.9744C16.5152 17.9621 16.6129 17.9448 16.7092 17.9223C17.4796 17.7427 18.1795 17.3386 18.7203 16.7612C19.4052 16.0299 19.7074 14.9024 20.3116 12.6473Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                                <path
                                    opacity="0.5"
                                    d="M16.415 17.9741C16.2065 18.6126 15.8399 19.1902 15.347 19.6519C14.6157 20.3368 13.4881 20.6389 11.2331 21.2432C8.97798 21.8474 7.85044 22.1495 6.87466 21.922C6.10421 21.7424 5.40432 21.3383 4.86351 20.7609C4.17859 20.0296 3.87647 18.9021 3.27222 16.647L2.75458 14.7151C2.15033 12.46 1.84821 11.3325 2.07573 10.3567C2.25537 9.58627 2.65945 8.88638 3.23687 8.34557C3.96815 7.66065 5.09569 7.35853 7.35077 6.75428C7.77741 6.63996 8.16368 6.53646 8.51621 6.44531"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                                <path d="M11.7769 10L16.6065 11.2941" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path opacity="0.5" d="M11 12.8975L13.8978 13.6739" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold ltr:ml-3 rtl:mr-3">Notes</h3>
                    </div>
                    <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b] my-4"></div>
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
                                :class="{ 'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': selectedTab === 'all' }"
                                @click="tabChanged('all')"
                            >
                                <div class="flex items-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0">
                                        <path
                                            d="M18.18 8.03933L18.6435 7.57589C19.4113 6.80804 20.6563 6.80804 21.4241 7.57589C22.192 8.34374 22.192 9.58868 21.4241 10.3565L20.9607 10.82M18.18 8.03933C18.18 8.03933 18.238 9.02414 19.1069 9.89309C19.9759 10.762 20.9607 10.82 20.9607 10.82M18.18 8.03933L13.9194 12.2999C13.6308 12.5885 13.4865 12.7328 13.3624 12.8919C13.2161 13.0796 13.0906 13.2827 12.9882 13.4975C12.9014 13.6797 12.8368 13.8732 12.7078 14.2604L12.2946 15.5L12.1609 15.901M20.9607 10.82L16.7001 15.0806C16.4115 15.3692 16.2672 15.5135 16.1081 15.6376C15.9204 15.7839 15.7173 15.9094 15.5025 16.0118C15.3203 16.0986 15.1268 16.1632 14.7396 16.2922L13.5 16.7054L13.099 16.8391M13.099 16.8391L12.6979 16.9728C12.5074 17.0363 12.2973 16.9867 12.1553 16.8447C12.0133 16.7027 11.9637 16.4926 12.0272 16.3021L12.1609 15.901M13.099 16.8391L12.1609 15.901"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path d="M8 13H10.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M8 9H14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M8 17H9.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path
                                            opacity="0.5"
                                            d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                    </svg>

                                    <div class="ltr:ml-3 rtl:mr-3">All Notes</div>
                                </div>
                            </button>
                            <button
                                type="button"
                                class="w-full flex justify-between items-center p-2 hover:bg-white-dark/10 rounded-md dark:hover:text-primary hover:text-primary dark:hover:bg-[#181F32] font-medium h-10"
                                :class="{ 'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': selectedTab === 'fav' }"
                                @click="tabChanged('fav')"
                            >
                                <div class="flex items-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0">
                                        <path
                                            d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        ></path>
                                    </svg>
                                    <div class="ltr:ml-3 rtl:mr-3">Favourites</div>
                                </div>
                            </button>
                            <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
                            <div class="px-1 py-3 text-white-dark">Tags</div>
                            <button
                                type="button"
                                class="w-full flex items-center h-10 p-1 hover:bg-white-dark/10 rounded-md dark:hover:bg-[#181F32] font-medium text-primary ltr:hover:pl-3 rtl:hover:pr-3 duration-300"
                                :class="{ 'ltr:pl-3 rtl:pr-3 bg-gray-100 dark:bg-[#181F32]': selectedTab === 'personal' }"
                                @click="tabChanged('personal')"
                            >
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-3 h-3 rotate-45 fill-primary shrink-0"
                                >
                                    <path
                                        d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    ></path>
                                </svg>
                                <div class="ltr:ml-3 rtl:mr-3">Personal</div>
                            </button>

                            <button
                                type="button"
                                class="w-full flex items-center h-10 p-1 hover:bg-white-dark/10 rounded-md dark:hover:bg-[#181F32] font-medium text-warning ltr:hover:pl-3 rtl:hover:pr-3 duration-300"
                                :class="{ 'ltr:pl-3 rtl:pr-3 bg-gray-100 dark:bg-[#181F32]': selectedTab === 'work' }"
                                @click="tabChanged('work')"
                            >
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-3 h-3 rotate-45 fill-warning shrink-0"
                                >
                                    <path
                                        d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    ></path>
                                </svg>
                                <div class="ltr:ml-3 rtl:mr-3">Work</div>
                            </button>

                            <button
                                type="button"
                                class="w-full flex items-center h-10 p-1 hover:bg-white-dark/10 rounded-md dark:hover:bg-[#181F32] font-medium text-info ltr:hover:pl-3 rtl:hover:pr-3 duration-300"
                                :class="{ 'ltr:pl-3 rtl:pr-3 bg-gray-100 dark:bg-[#181F32]': selectedTab === 'social' }"
                                @click="tabChanged('social')"
                            >
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-3 h-3 rotate-45 fill-info shrink-0"
                                >
                                    <path
                                        d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    ></path>
                                </svg>
                                <div class="ltr:ml-3 rtl:mr-3">Social</div>
                            </button>

                            <button
                                type="button"
                                class="w-full flex items-center h-10 p-1 hover:bg-white-dark/10 rounded-md dark:hover:bg-[#181F32] font-medium text-danger ltr:hover:pl-3 rtl:hover:pr-3 duration-300"
                                :class="{ 'ltr:pl-3 rtl:pr-3 bg-gray-100 dark:bg-[#181F32]': selectedTab === 'important' }"
                                @click="tabChanged('important')"
                            >
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-3 h-3 rotate-45 fill-danger shrink-0"
                                >
                                    <path
                                        d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    ></path>
                                </svg>
                                <div class="ltr:ml-3 rtl:mr-3">Important</div>
                            </button>
                        </div>
                    </perfect-scrollbar>
                </div>
                <div class="ltr:left-0 rtl:right-0 absolute bottom-0 p-4 w-full">
                    <button class="btn btn-primary w-full" type="button" @click="editNote()">
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
                            class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0"
                        >
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Add New Note
                    </button>
                </div>
            </div>

            <div class="panel flex-1 overflow-auto h-full">
                <div class="pb-5">
                    <button type="button" class="xl:hidden hover:text-primary" @click="isShowNoteMenu = !isShowNoteMenu">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                            <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                            <path opacity="0.5" d="M20 12L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                            <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                    </button>
                </div>
                <template v-if="!filterdNotesList.length">
                    <div class="flex justify-center items-center sm:min-h-[300px] min-h-[400px] font-semibold text-lg h-full">No data available</div>
                </template>
                <template v-if="filterdNotesList.length">
                    <div class="sm:min-h-[300px] min-h-[400px]">
                        <div class="grid 2xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5">
                            <template v-for="note in filterdNotesList" :key="note.id">
                                <div
                                    class="panel pb-12"
                                    :class="{
                                        'bg-primary-light shadow-primary': note.tag === 'personal',
                                        'bg-warning-light shadow-warning': note.tag === 'work',
                                        'bg-info-light shadow-info': note.tag === 'social',
                                        'bg-danger-light shadow-danger': note.tag === 'important',
                                        'dark:shadow-dark': !note.tag,
                                    }"
                                >
                                    <div class="min-h-[142px]">
                                        <div class="flex justify-between">
                                            <div class="flex items-center w-max">
                                                <div class="flex-none">
                                                    <div v-if="note.thumb" class="p-0.5 bg-gray-300 dark:bg-gray-700 rounded-full">
                                                        <img class="h-8 w-8 rounded-full object-cover" :src="`/assets/images/${note.thumb}`" />
                                                    </div>
                                                    <div
                                                        v-if="!note.thumb && note.user"
                                                        class="grid place-content-center h-8 w-8 rounded-full bg-gray-300 dark:bg-gray-700 text-sm font-semibold"
                                                    >
                                                        {{ note.user.charAt(0) + '' + note.user.charAt(note.user.indexOf('') + 1) }}
                                                    </div>
                                                    <div
                                                        v-if="!note.thumb && !note.user"
                                                        class="bg-gray-300 dark:bg-gray-700 rounded-full grid place-content-center h-8 w-8"
                                                    >
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-4.5 h-4.5"
                                                        >
                                                            <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5"></circle>
                                                            <ellipse
                                                                opacity="0.5"
                                                                cx="12"
                                                                cy="17"
                                                                rx="7"
                                                                ry="4"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                            ></ellipse>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="ltr:ml-2 rtl:mr-2">
                                                    <div class="font-semibold">{{ note.user }}</div>
                                                    <div class="text-sx text-white-dark">{{ note.date }}</div>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0">
                                                    <button type="button" class="text-primary">
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5 rotate-90 opacity-70 hover:opacity-100"
                                                        >
                                                            <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                                            <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                                            <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                                        </svg>
                                                    </button>
                                                    <template #content="{ close }">
                                                        <ul @click="close()" class="text-sm font-medium">
                                                            <li>
                                                                <a href="javascript:;" class="w-full" @click="editNote(note)">
                                                                    <svg
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-4 h-4 ltr:mr-3 rtl:ml-3 shrink-0"
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
                                                                <a href="javascript:;" class="w-full" @click="deleteNoteConfirm(note)">
                                                                    <svg
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-4.5 h-4.5 ltr:mr-3 rtl:ml-3 shrink-0"
                                                                    >
                                                                        <path
                                                                            d="M20.5001 6H3.5"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                        ></path>
                                                                        <path
                                                                            d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                        ></path>
                                                                        <path
                                                                            opacity="0.5"
                                                                            d="M9.5 11L10 16"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                        ></path>
                                                                        <path
                                                                            opacity="0.5"
                                                                            d="M14.5 11L14 16"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                        ></path>
                                                                        <path
                                                                            opacity="0.5"
                                                                            d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.5"
                                                                        ></path>
                                                                    </svg>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" class="w-full" @click="viewNote(note)">
                                                                    <svg
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-4.5 h-4.5 ltr:mr-3 rtl:ml-3 shrink-0"
                                                                    >
                                                                        <path
                                                                            opacity="0.5"
                                                                            d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.5"
                                                                        />
                                                                        <path
                                                                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.5"
                                                                        />
                                                                    </svg>

                                                                    View
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </template>
                                                </Popper>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mt-4">{{ note.title }}</h4>
                                            <p class="text-white-dark mt-2">{{ note.description }}</p>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 left-0 w-full px-5">
                                        <div class="flex items-center justify-between mt-2">
                                            <div class="dropdown">
                                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0">
                                                    <button
                                                        type="button"
                                                        :class="{
                                                            'text-primary': note.tag === 'personal',
                                                            'text-warning': note.tag === 'work',
                                                            'text-info': note.tag === 'social',
                                                            'text-danger': note.tag === 'important',
                                                        }"
                                                    >
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-3 h-3 rotate-45"
                                                            :class="{
                                                                'fill-primary': note.tag === 'personal',
                                                                'fill-warning': note.tag === 'work',
                                                                'fill-info': note.tag === 'social',
                                                                'fill-danger': note.tag === 'important',
                                                            }"
                                                        >
                                                            <path
                                                                d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                            ></path>
                                                        </svg>
                                                    </button>
                                                    <template #content="{ close }">
                                                        <ul @click="close()">
                                                            <li>
                                                                <a href="javascript:;" @click="setTag(note, 'personal')">
                                                                    <svg
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-3 h-3 rotate-45 ltr:mr-2 rtl:ml-2 fill-primary"
                                                                    >
                                                                        <path
                                                                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                                            stroke="none"
                                                                            stroke-width="1.5"
                                                                        ></path>
                                                                    </svg>
                                                                    Personal
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" @click="setTag(note, 'work')">
                                                                    <svg
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-3 h-3 rotate-45 ltr:mr-2 rtl:ml-2 fill-warning"
                                                                    >
                                                                        <path
                                                                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                                            stroke="none"
                                                                            stroke-width="1.5"
                                                                        ></path>
                                                                    </svg>
                                                                    Work
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" @click="setTag(note, 'social')">
                                                                    <svg
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-3 h-3 rotate-45 ltr:mr-2 rtl:ml-2 fill-info"
                                                                    >
                                                                        <path
                                                                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                                            stroke="none"
                                                                            stroke-width="1.5"
                                                                        ></path>
                                                                    </svg>
                                                                    Social
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" @click="setTag(note, 'important')">
                                                                    <svg
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-3 h-3 rotate-45 ltr:mr-2 rtl:ml-2 fill-danger"
                                                                    >
                                                                        <path
                                                                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                                            stroke="none"
                                                                            stroke-width="1.5"
                                                                        ></path>
                                                                    </svg>
                                                                    Important
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </template>
                                                </Popper>
                                            </div>
                                            <div class="flex items-center">
                                                <button type="button" class="text-danger" @click="deleteNoteConfirm(note)">
                                                    <svg
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="w-5 h-5"
                                                    >
                                                        <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                        <path
                                                            d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <path
                                                            opacity="0.5"
                                                            d="M9.5 11L10 16"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <path
                                                            opacity="0.5"
                                                            d="M14.5 11L14 16"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <path
                                                            opacity="0.5"
                                                            d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        ></path>
                                                    </svg>
                                                </button>
                                                <button type="button" class="text-warning group ltr:ml-2 rtl:mr-2" @click="setFav(note)">
                                                    <svg
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="w-4.5 h-4.5 group-hover:fill-warning"
                                                        :class="{ 'fill-warning': note.isFav }"
                                                    >
                                                        <path
                                                            d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        ></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>

                <TransitionRoot appear :show="isAddNoteModal" as="template">
                    <Dialog as="div" @close="isAddNoteModal = false" class="relative z-[51]">
                        <TransitionChild
                            as="template"
                            enter="duration-300 ease-out"
                            enter-from="opacity-0"
                            enter-to="opacity-100"
                            leave="duration-200 ease-in"
                            leave-from="opacity-100"
                            leave-to="opacity-0"
                        >
                            <DialogOverlay class="fixed inset-0 bg-[black]/60" />
                        </TransitionChild>

                        <div class="fixed inset-0 overflow-y-auto">
                            <div class="flex min-h-full items-center justify-center px-4 py-8">
                                <TransitionChild
                                    as="template"
                                    enter="duration-300 ease-out"
                                    enter-from="opacity-0 scale-95"
                                    enter-to="opacity-100 scale-100"
                                    leave="duration-200 ease-in"
                                    leave-from="opacity-100 scale-100"
                                    leave-to="opacity-0 scale-95"
                                >
                                    <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark">
                                        <button
                                            type="button"
                                            class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none"
                                            @click="isAddNoteModal = false"
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
                                                class="w-6 h-6"
                                            >
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                        <div class="text-lg font-medium bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">
                                            {{ params.id ? 'Edit Note' : 'Add Note' }}
                                        </div>
                                        <div class="p-5">
                                            <form @submit.prevent="saveNote">
                                                <div class="mb-5">
                                                    <label for="title">Title</label>
                                                    <input id="title" type="text" placeholder="Enter Title" class="form-input" v-model="params.title" />
                                                </div>
                                                <div class="mb-5">
                                                    <label for="name">User Name</label>
                                                    <select id="name" class="form-select" v-model="params.user">
                                                        <option value="">Select User</option>
                                                        <option value="Max Smith">Max Smith</option>
                                                        <option value="John Doe">John Doe</option>
                                                        <option value="Kia Jain">Kia Jain</option>
                                                        <option value="Karena Courtliff">Karena Courtliff</option>
                                                        <option value="Vladamir Koschek">Vladamir Koschek</option>
                                                        <option value="Robert Garcia">Robert Garcia</option>
                                                        <option value="Marie Hamilton">Marie Hamilton</option>
                                                        <option value="Megan Meyers">Megan Meyers</option>
                                                        <option value="Angela Hull">Angela Hull</option>
                                                        <option value="Karen Wolf">Karen Wolf</option>
                                                        <option value="Jasmine Barnes">Jasmine Barnes</option>
                                                        <option value="Thomas Cox">Thomas Cox</option>
                                                        <option value="Marcus Jones">Marcus Jones</option>
                                                        <option value="Matthew Gray">Matthew Gray</option>
                                                        <option value="Chad Davis">Chad Davis</option>
                                                        <option value="Linda Drake">Linda Drake</option>
                                                        <option value="Kathleen Flores">Kathleen Flores</option>
                                                    </select>
                                                </div>
                                                <div class="mb-5">
                                                    <label for="tag">Tag</label>
                                                    <select id="tag" class="form-select" v-model="params.tag">
                                                        <option value="">None</option>
                                                        <option value="personal">Personal</option>
                                                        <option value="work">Work</option>
                                                        <option value="social">Social</option>
                                                        <option value="important">Important</option>
                                                    </select>
                                                </div>
                                                <div class="mb-5">
                                                    <label for="desc">Description</label>
                                                    <textarea
                                                        id="desc"
                                                        rows="3"
                                                        class="form-textarea resize-none min-h-[130px]"
                                                        placeholder="Enter Description"
                                                        v-model="params.description"
                                                    ></textarea>
                                                </div>
                                                <div class="flex justify-end items-center mt-8">
                                                    <button type="button" class="btn btn-outline-danger gap-2" @click="isAddNoteModal = false">Cancel</button>
                                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">
                                                        {{ params.id ? 'Update Note' : 'Add Note' }}
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </DialogPanel>
                                </TransitionChild>
                            </div>
                        </div>
                    </Dialog>
                </TransitionRoot>

                <TransitionRoot appear :show="isDeleteNoteModal" as="template">
                    <Dialog as="div" @close="isDeleteNoteModal = false" class="relative z-[51]">
                        <TransitionChild
                            as="template"
                            enter="duration-300 ease-out"
                            enter-from="opacity-0"
                            enter-to="opacity-100"
                            leave="duration-200 ease-in"
                            leave-from="opacity-100"
                            leave-to="opacity-0"
                        >
                            <DialogOverlay class="fixed inset-0 bg-[black]/60" />
                        </TransitionChild>

                        <div class="fixed inset-0 overflow-y-auto">
                            <div class="flex min-h-full items-center justify-center px-4 py-8">
                                <TransitionChild
                                    as="template"
                                    enter="duration-300 ease-out"
                                    enter-from="opacity-0 scale-95"
                                    enter-to="opacity-100 scale-100"
                                    leave="duration-200 ease-in"
                                    leave-from="opacity-100 scale-100"
                                    leave-to="opacity-0 scale-95"
                                >
                                    <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark">
                                        <button
                                            type="button"
                                            class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none"
                                            @click="isDeleteNoteModal = false"
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
                                                class="w-6 h-6"
                                            >
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                        <div class="text-lg font-medium bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">
                                            Delete Notes
                                        </div>
                                        <div class="p-5 text-center">
                                            <div class="text-white bg-danger ring-4 ring-danger/30 p-4 rounded-full w-fit mx-auto">
                                                <svg
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-7 h-7 mx-auto"
                                                >
                                                    <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path
                                                        d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    ></path>
                                                    <path
                                                        opacity="0.5"
                                                        d="M9.5 11L10 16"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    ></path>
                                                    <path
                                                        opacity="0.5"
                                                        d="M14.5 11L14 16"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    ></path>
                                                    <path
                                                        opacity="0.5"
                                                        d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div class="sm:w-3/4 mx-auto mt-5">Are you sure you want to delete Notes?</div>

                                            <div class="flex justify-center items-center mt-8">
                                                <button type="button" class="btn btn-outline-danger" @click="isDeleteNoteModal = false">Cancel</button>
                                                <button type="button" class="btn btn-primary ltr:ml-4 rtl:mr-4" @click="deleteNote">Delete</button>
                                            </div>
                                        </div>
                                    </DialogPanel>
                                </TransitionChild>
                            </div>
                        </div>
                    </Dialog>
                </TransitionRoot>

                <TransitionRoot appear :show="isViewNoteModal" as="template">
                    <Dialog as="div" @close="isViewNoteModal = false" class="relative z-[51]">
                        <TransitionChild
                            as="template"
                            enter="duration-300 ease-out"
                            enter-from="opacity-0"
                            enter-to="opacity-100"
                            leave="duration-200 ease-in"
                            leave-from="opacity-100"
                            leave-to="opacity-0"
                        >
                            <DialogOverlay class="fixed inset-0 bg-[black]/60" />
                        </TransitionChild>

                        <div class="fixed inset-0 overflow-y-auto">
                            <div class="flex min-h-full items-center justify-center px-4 py-8">
                                <TransitionChild
                                    as="template"
                                    enter="duration-300 ease-out"
                                    enter-from="opacity-0 scale-95"
                                    enter-to="opacity-100 scale-100"
                                    leave="duration-200 ease-in"
                                    leave-from="opacity-100 scale-100"
                                    leave-to="opacity-0 scale-95"
                                >
                                    <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark">
                                        <button
                                            type="button"
                                            class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none"
                                            @click="isViewNoteModal = false"
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
                                                class="w-6 h-6"
                                            >
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                        <div
                                            class="flex items-center flex-wrap gap-2 text-lg font-medium bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"
                                        >
                                            <div class="ltr:mr-3 rtl:ml-3">{{ selectedNote.title }}</div>
                                            <button
                                                v-show="selectedNote.tag"
                                                type="button"
                                                class="badge badge-outline-primary rounded-3xl capitalize ltr:mr-3 rtl:ml-3"
                                                :class="{
                                                    'shadow-primary': selectedNote.tag === 'personal',
                                                    'shadow-warning': selectedNote.tag === 'work',
                                                    'shadow-info': selectedNote.tag === 'social',
                                                    'shadow-danger': selectedNote.tag === 'important',
                                                }"
                                            >
                                                {{ selectedNote.tag }}
                                            </button>
                                            <button v-show="selectedNote.isFav" type="button" class="text-warning">
                                                <svg
                                                    width="18"
                                                    height="18"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="fill-warning"
                                                >
                                                    <path
                                                        d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    ></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="p-5">
                                            <div class="text-base">{{ selectedNote.description }}</div>

                                            <div class="ltr:text-right rtl:text-left mt-8">
                                                <button type="button" class="btn btn-outline-danger" @click="isViewNoteModal = false">Close</button>
                                            </div>
                                        </div>
                                    </DialogPanel>
                                </TransitionChild>
                            </div>
                        </div>
                    </Dialog>
                </TransitionRoot>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref, onMounted } from 'vue';
    import { TransitionRoot, TransitionChild, Dialog, DialogPanel, DialogOverlay } from '@headlessui/vue';
    import Swal from 'sweetalert2';
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Notes' });
    const store = useAppStore();
    const defaultParams = ref({
        id: null,
        title: '',
        description: '',
        tag: '',
        user: '',
        thumb: '',
    });
    const isAddNoteModal = ref(false);
    const isDeleteNoteModal = ref(false);
    const isViewNoteModal = ref(false);
    const params = ref(JSON.parse(JSON.stringify(defaultParams.value)));
    const isShowNoteMenu = ref(false);
    const notesList = ref([
        {
            id: 1,
            user: 'Max Smith',
            thumb: 'profile-16.jpeg',
            title: 'Meeting with Kelly',
            description: 'Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.',
            date: '11/01/2020',
            isFav: false,
            tag: 'personal',
        },
        {
            id: 2,
            user: 'John Doe',
            thumb: 'profile-14.jpeg',
            title: 'Receive Package',
            description: 'Facilisis curabitur facilisis vel elit sed dapibus sodales purus.',
            date: '11/02/2020',
            isFav: true,
            tag: '',
        },
        {
            id: 3,
            user: 'Kia Jain',
            thumb: 'profile-15.jpeg',
            title: 'Download Docs',
            description: 'Proin a dui malesuada, laoreet mi vel, imperdiet diam quam laoreet.',
            date: '11/04/2020',
            isFav: false,
            tag: 'work',
        },
        {
            id: 4,
            user: 'Max Smith',
            thumb: 'profile-16.jpeg',
            title: 'Meeting at 4:50pm',
            description: 'Excepteur sint occaecat cupidatat non proident, anim id est laborum.',
            date: '11/08/2020',
            isFav: false,
            tag: '',
        },
        {
            id: 5,
            user: 'Karena Courtliff',
            thumb: 'profile-17.jpeg',
            title: 'Backup Files EOD',
            description: 'Maecenas condimentum neque mollis, egestas leo ut, gravida.',
            date: '11/09/2020',
            isFav: false,
            tag: '',
        },
        {
            id: 6,
            user: 'Max Smith',
            thumb: 'profile-16.jpeg',
            title: 'Download Server Logs',
            description: 'Suspendisse efficitur diam quis gravida. Nunc molestie est eros.',
            date: '11/09/2020',
            isFav: false,
            tag: 'social',
        },
        {
            id: 7,
            user: 'Vladamir Koschek',
            thumb: '',
            title: 'Team meet at Starbucks',
            description: 'Etiam a odio eget enim aliquet laoreet lobortis sed ornare nibh.',
            date: '11/10/2020',
            isFav: false,
            tag: '',
        },
        {
            id: 8,
            user: 'Max Smith',
            thumb: 'profile-16.jpeg',
            title: 'Create new users Profile',
            description: 'Duis aute irure in nulla pariatur. Etiam a odio eget enim aliquet.',
            date: '11/11/2020',
            isFav: false,
            tag: 'important',
        },
        {
            id: 9,
            user: 'Robert Garcia',
            thumb: 'profile-21.jpeg',
            title: 'Create a compost pile',
            description: 'Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro.',
            date: '11/12/2020',
            isFav: true,
            tag: '',
        },
        {
            id: 10,
            user: 'Marie Hamilton',
            thumb: 'profile-2.jpeg',
            title: 'Take a hike at a local park',
            description: 'De carne lumbering animata corpora quaeritis. Summus brains sit',
            date: '11/13/2020',
            isFav: true,
            tag: '',
        },
        {
            id: 11,
            user: 'Megan Meyers',
            thumb: 'profile-1.jpeg',
            title: 'Take a class at local community center that interests you',
            description: 'Cupcake ipsum dolor. Sit amet marshmallow topping cheesecake muffin.',
            date: '11/13/2020',
            isFav: false,
            tag: '',
        },
        {
            id: 12,
            user: 'Angela Hull',
            thumb: 'profile-22.jpeg',
            title: 'Research a topic interested in',
            description: 'Lemon drops tootsie roll marshmallow halvah carrot cake.',
            date: '11/14/2020',
            isFav: false,
            tag: '',
        },
        {
            id: 13,
            user: 'Karen Wolf',
            thumb: 'profile-23.jpeg',
            title: 'Plan a trip to another country',
            description: 'Space, the final frontier. These are the voyages of the Starship Enterprise.',
            date: '11/16/2020',
            isFav: true,
            tag: '',
        },
        {
            id: 14,
            user: 'Jasmine Barnes',
            thumb: 'profile-1.jpeg',
            title: 'Improve touch typing',
            description: 'Well, the way they make shows is, they make one show.',
            date: '11/16/2020',
            isFav: false,
            tag: '',
        },
        {
            id: 15,
            user: 'Thomas Cox',
            thumb: 'profile-11.jpeg',
            title: 'Learn Express.js',
            description: 'Bulbasaur Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            date: '11/17/2020',
            isFav: false,
            tag: 'work',
        },
        {
            id: 16,
            user: 'Marcus Jones',
            thumb: 'profile-12.jpeg',
            title: 'Learn calligraphy',
            description: 'Ivysaur Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            date: '11/17/2020',
            isFav: false,
            tag: '',
        },
        {
            id: 17,
            user: 'Matthew Gray',
            thumb: 'profile-24.jpeg',
            title: 'Have a photo session with some friends',
            description: 'Venusaur Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            date: '11/18/2020',
            isFav: false,
            tag: 'important',
        },
        {
            id: 18,
            user: 'Chad Davis',
            thumb: 'profile-31.jpeg',
            title: 'Go to the gym',
            description: 'Charmander Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            date: '11/18/2020',
            isFav: false,
            tag: '',
        },
        {
            id: 19,
            user: 'Linda Drake',
            thumb: 'profile-23.jpeg',
            title: 'Make own LEGO creation',
            description: 'Charmeleon Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            date: '11/18/2020',
            isFav: false,
            tag: 'social',
        },
        {
            id: 20,
            user: 'Kathleen Flores',
            thumb: 'profile-34.jpeg',
            title: 'Take cat on a walk',
            description: 'Baseball ipsum dolor sit amet cellar rubber win hack tossed. ',
            date: '11/18/2020',
            isFav: false,
            tag: 'personal',
        },
    ]);
    const filterdNotesList: any = ref('');
    const selectedTab: any = ref('all');
    const deletedNote: any = ref(null);
    const selectedNote: any = ref({
        id: null,
        title: '',
        description: '',
        tag: '',
        user: '',
        thumb: '',
    });

    onMounted(() => {
        searchNotes();
    });

    const searchNotes = () => {
        if (selectedTab.value != 'fav') {
            if (selectedTab.value != 'all' || selectedTab.value === 'delete') {
                filterdNotesList.value = notesList.value.filter((d) => d.tag === selectedTab.value);
            } else {
                filterdNotesList.value = notesList.value;
            }
        } else {
            filterdNotesList.value = notesList.value.filter((d) => d.isFav);
        }
    };

    const saveNote = () => {
        if (!params.value.title) {
            showMessage('Title is required.', 'error');
            return false;
        }
        if (params.value.id) {
            //update task
            let note: any = notesList.value.find((d) => d.id === params.value.id);
            note.title = params.value.title;
            note.user = params.value.user;
            note.description = params.value.description;
            note.tag = params.value.tag;
        } else {
            //add note
            let maxNoteId = notesList.value.length
                ? notesList.value.reduce((max, character) => (character.id > max ? character.id : max), notesList.value[0].id)
                : 0;
            let dt = new Date();
            let note = {
                id: maxNoteId + 1,
                title: params.value.title,
                user: params.value.user,
                thumb: 'profile-21.jpeg',
                description: params.value.description,
                date: dt.getDate() + '/' + Number(dt.getMonth()) + 1 + '/' + dt.getFullYear(),
                isFav: false,
                tag: params.value.tag,
            };
            notesList.value.splice(0, 0, note);
            searchNotes();
        }

        showMessage('Note has been saved successfully.');
        isAddNoteModal.value = false;
        searchNotes();
    };

    const tabChanged = (type: string) => {
        selectedTab.value = type;
        searchNotes();
        isShowNoteMenu.value = false;
    };

    const setFav = (note: any) => {
        let item = filterdNotesList.value.find((d) => d.id === note.id);
        item.isFav = !item.isFav;
        searchNotes();
    };

    const setTag = (note: any, name: string = '') => {
        let item = filterdNotesList.value.find((d) => d.id === note.id);
        item.tag = name;
        searchNotes();
    };

    const deleteNoteConfirm = (note: any) => {
        setTimeout(() => {
            deletedNote.value = note;
            isDeleteNoteModal.value = true;
        });
    };

    const viewNote = (note: any) => {
        setTimeout(() => {
            selectedNote.value = note;
            isViewNoteModal.value = true;
        });
    };

    const editNote = (note: any = null) => {
        isShowNoteMenu.value = false;
        params.value = JSON.parse(JSON.stringify(defaultParams.value));

        if (note) {
            params.value = JSON.parse(JSON.stringify(note));
        }
        isAddNoteModal.value = true;
    };

    const deleteNote = () => {
        notesList.value = notesList.value.filter((d) => d.id != deletedNote.value.id);
        searchNotes();
        showMessage('Note has been deleted successfully.');
        isDeleteNoteModal.value = false;
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
