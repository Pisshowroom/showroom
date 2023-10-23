<template>
    <div>
        <div class="panel flex items-center overflow-x-auto whitespace-nowrap p-3 text-primary">
            <div class="rounded-full bg-primary p-1.5 text-white ring-2 ring-primary/30 ltr:mr-3 rtl:ml-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5">
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
            <span class="ltr:mr-3 rtl:ml-3">Documentation: </span>
            <a href="https://www.npmjs.com/package/@bhplugin/vue3-datatable" target="_blank" class="block hover:underline">
                https://www.npmjs.com/package/@bhplugin/vue3-datatable
            </a>
        </div>

        <div class="panel pb-1.5 mt-6">
            <div class="flex md:items-center justify-between md:flex-row flex-col mb-4.5 gap-5">
                <div class="flex items-center flex-wrap">
                    <button type="button" class="btn btn-primary btn-sm m-1" @click="exportTable('csv')">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
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
                        CSV
                    </button>
                    <button type="button" class="btn btn-primary btn-sm m-1" @click="exportTable('txt')">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
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
                        TXT
                    </button>
                    <vue3-json-excel class="btn btn-primary btn-sm m-1 cursor-pointer" name="table.xls" :fields="excelColumns()" :json-data="excelItems()">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
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
                            <path
                                opacity="0.5"
                                d="M7 14L6 15L7 16M11.5 16L12.5 17L11.5 18M10 14L8.5 18"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>

                        EXCEL
                    </vue3-json-excel>
                    <button type="button" class="btn btn-primary btn-sm m-1" @click="exportTable('print')">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
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
                        PRINT
                    </button>
                </div>

                <div class="text-right">
                    <input v-model="search" type="text" class="form-input w-auto" placeholder="Search..." />
                </div>
            </div>

            <div class="datatable">
                <vue3-datatable
                    :rows="rows"
                    :columns="cols"
                    :totalRows="rows?.length"
                    :sortable="true"
                    :search="search"
                    skin="whitespace-nowrap bh-table-hover"
                    firstArrow='<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>'
                    lastArrow='<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg> '
                    previousArrow='<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>'
                    nextArrow='<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>'
                >
                    <template #dob="data">
                        {{ formatDate(data.value.dob) }}
                    </template>
                </vue3-datatable>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
    import { ref } from 'vue';
    import Vue3Datatable from '@bhplugin/vue3-datatable';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Export Table' });
    const search = ref('');
    const cols =
        ref([
            { field: 'id', title: 'Id' },
            { field: 'firstName', title: 'Firstname' },
            { field: 'lastName', title: 'Lastname' },
            { field: 'company', title: 'Company' },
            { field: 'age', title: 'Age' },
            { field: 'dob', title: 'Start Date' },
            { field: 'email', title: 'Email' },
            { field: 'phone', title: 'Phone No.' },
        ]) || [];
    const rows = ref(
        [
            {
                id: 1,
                firstName: 'Caroline',
                lastName: 'Jensen',
                email: 'carolinejensen@zidant.com',
                dob: '2004-05-28',
                address: {
                    street: '529 Scholes Street',
                    city: 'Temperanceville',
                    zipcode: 5235,
                    geo: {
                        lat: 23.806115,
                        lng: 164.677197,
                    },
                },
                phone: '+1 (821) 447-3782',
                isActive: true,
                age: 39,
                company: 'POLARAX',
            },
            {
                id: 2,
                firstName: 'Celeste',
                lastName: 'Grant',
                email: 'celestegrant@polarax.com',
                dob: '1989-11-19',
                address: {
                    street: '639 Kimball Street',
                    city: 'Bascom',
                    zipcode: 8907,
                    geo: {
                        lat: 65.954483,
                        lng: 98.906478,
                    },
                },
                phone: '+1 (838) 515-3408',
                isActive: false,
                age: 32,
                company: 'MANGLO',
            },
            {
                id: 3,
                firstName: 'Tillman',
                lastName: 'Forbes',
                email: 'tillmanforbes@manglo.com',
                dob: '2016-09-05',
                address: {
                    street: '240 Vandalia Avenue',
                    city: 'Thynedale',
                    zipcode: 8994,
                    geo: {
                        lat: -34.949388,
                        lng: -82.958111,
                    },
                },
                phone: '+1 (969) 496-2892',
                isActive: false,
                age: 26,
                company: 'APPLIDECK',
            },
            {
                id: 4,
                firstName: 'Daisy',
                lastName: 'Whitley',
                email: 'daisywhitley@applideck.com',
                dob: '1987-03-23',
                address: {
                    street: '350 Pleasant Place',
                    city: 'Idledale',
                    zipcode: 9369,
                    geo: {
                        lat: -54.458809,
                        lng: -127.476556,
                    },
                },
                phone: '+1 (861) 564-2877',
                isActive: true,
                age: 21,
                company: 'VOLAX',
            },
            {
                id: 5,
                firstName: 'Weber',
                lastName: 'Bowman',
                email: 'weberbowman@volax.com',
                dob: '1983-02-24',
                address: {
                    street: '154 Conway Street',
                    city: 'Broadlands',
                    zipcode: 8131,
                    geo: {
                        lat: 54.501351,
                        lng: -167.47138,
                    },
                },
                phone: '+1 (962) 466-3483',
                isActive: false,
                age: 26,
                company: 'ORBAXTER',
            },
            {
                id: 6,
                firstName: 'Buckley',
                lastName: 'Townsend',
                email: 'buckleytownsend@orbaxter.com',
                dob: '2011-05-29',
                address: {
                    street: '131 Guernsey Street',
                    city: 'Vallonia',
                    zipcode: 6779,
                    geo: {
                        lat: -2.681655,
                        lng: 3.528942,
                    },
                },
                phone: '+1 (884) 595-2643',
                isActive: true,
                age: 40,
                company: 'OPPORTECH',
            },
            {
                id: 7,
                firstName: 'Latoya',
                lastName: 'Bradshaw',
                email: 'latoyabradshaw@opportech.com',
                dob: '2010-11-23',
                address: {
                    street: '668 Lenox Road',
                    city: 'Lowgap',
                    zipcode: 992,
                    geo: {
                        lat: 36.026423,
                        lng: 130.412198,
                    },
                },
                phone: '+1 (906) 474-3155',
                isActive: true,
                age: 24,
                company: 'GORGANIC',
            },
            {
                id: 8,
                firstName: 'Kate',
                lastName: 'Lindsay',
                email: 'katelindsay@gorganic.com',
                dob: '1987-07-02',
                address: {
                    street: '773 Harrison Avenue',
                    city: 'Carlton',
                    zipcode: 5909,
                    geo: {
                        lat: 42.464724,
                        lng: -12.948403,
                    },
                },
                phone: '+1 (930) 546-2952',
                isActive: true,
                age: 24,
                company: 'AVIT',
            },
            {
                id: 9,
                firstName: 'Marva',
                lastName: 'Sandoval',
                email: 'marvasandoval@avit.com',
                dob: '2010-11-02',
                address: {
                    street: '200 Malta Street',
                    city: 'Tuskahoma',
                    zipcode: 1292,
                    geo: {
                        lat: -52.206169,
                        lng: 74.19452,
                    },
                },
                phone: '+1 (927) 566-3600',
                isActive: false,
                age: 28,
                company: 'QUILCH',
            },
            {
                id: 10,
                firstName: 'Decker',
                lastName: 'Russell',
                email: 'deckerrussell@quilch.com',
                dob: '1994-04-21',
                address: {
                    street: '708 Bath Avenue',
                    city: 'Coultervillle',
                    zipcode: 1268,
                    geo: {
                        lat: -41.550295,
                        lng: -146.598075,
                    },
                },
                phone: '+1 (846) 535-3283',
                isActive: false,
                age: 27,
                company: 'MEMORA',
            },
            {
                id: 11,
                firstName: 'Odom',
                lastName: 'Mills',
                email: 'odommills@memora.com',
                dob: '2010-01-24',
                address: {
                    street: '907 Blake Avenue',
                    city: 'Churchill',
                    zipcode: 4400,
                    geo: {
                        lat: -56.061694,
                        lng: -130.238523,
                    },
                },
                phone: '+1 (995) 525-3402',
                isActive: true,
                age: 34,
                company: 'ZORROMOP',
            },
            {
                id: 12,
                firstName: 'Sellers',
                lastName: 'Walters',
                email: 'sellerswalters@zorromop.com',
                dob: '1975-11-12',
                address: {
                    street: '978 Oakland Place',
                    city: 'Gloucester',
                    zipcode: 3802,
                    geo: {
                        lat: 11.732587,
                        lng: 96.118099,
                    },
                },
                phone: '+1 (830) 430-3157',
                isActive: true,
                age: 28,
                company: 'ORBOID',
            },
            {
                id: 13,
                firstName: 'Wendi',
                lastName: 'Powers',
                email: 'wendipowers@orboid.com',
                dob: '1979-06-02',
                address: {
                    street: '376 Greenpoint Avenue',
                    city: 'Elliott',
                    zipcode: 9149,
                    geo: {
                        lat: -78.159578,
                        lng: -9.835103,
                    },
                },
                phone: '+1 (863) 457-2088',
                isActive: true,
                age: 31,
                company: 'SNORUS',
            },
            {
                id: 14,
                firstName: 'Sophie',
                lastName: 'Horn',
                email: 'sophiehorn@snorus.com',
                dob: '2018-09-20',
                address: {
                    street: '343 Doughty Street',
                    city: 'Homestead',
                    zipcode: 330,
                    geo: {
                        lat: 65.484087,
                        lng: 137.413998,
                    },
                },
                phone: '+1 (885) 418-3948',
                isActive: true,
                age: 22,
                company: 'XTH',
            },
            {
                id: 15,
                firstName: 'Levine',
                lastName: 'Rodriquez',
                email: 'levinerodriquez@xth.com',
                dob: '1973-02-08',
                address: {
                    street: '643 Allen Avenue',
                    city: 'Weedville',
                    zipcode: 8931,
                    geo: {
                        lat: -63.185586,
                        lng: 117.327808,
                    },
                },
                phone: '+1 (999) 565-3239',
                isActive: true,
                age: 27,
                company: 'COMTRACT',
            },
            {
                id: 16,
                firstName: 'Little',
                lastName: 'Hatfield',
                email: 'littlehatfield@comtract.com',
                dob: '2012-01-03',
                address: {
                    street: '194 Anthony Street',
                    city: 'Williston',
                    zipcode: 7456,
                    geo: {
                        lat: 47.480837,
                        lng: 6.085909,
                    },
                },
                phone: '+1 (812) 488-3011',
                isActive: false,
                age: 33,
                company: 'ZIDANT',
            },
            {
                id: 17,
                firstName: 'Larson',
                lastName: 'Kelly',
                email: 'larsonkelly@zidant.com',
                dob: '2010-06-14',
                address: {
                    street: '978 Indiana Place',
                    city: 'Innsbrook',
                    zipcode: 639,
                    geo: {
                        lat: -71.766732,
                        lng: 150.854345,
                    },
                },
                phone: '+1 (892) 484-2162',
                isActive: true,
                age: 20,
                company: 'SUREPLEX',
            },
            {
                id: 18,
                firstName: 'Kendra',
                lastName: 'Molina',
                email: 'kendramolina@sureplex.com',
                dob: '2002-07-19',
                address: {
                    street: '567 Charles Place',
                    city: 'Kimmell',
                    zipcode: 1966,
                    geo: {
                        lat: 50.765816,
                        lng: -117.106499,
                    },
                },
                phone: '+1 (920) 528-3330',
                isActive: false,
                age: 31,
                company: 'DANJA',
            },
            {
                id: 19,
                firstName: 'Ebony',
                lastName: 'Livingston',
                email: 'ebonylivingston@danja.com',
                dob: '1994-10-18',
                address: {
                    street: '284 Cass Place',
                    city: 'Navarre',
                    zipcode: 948,
                    geo: {
                        lat: 65.271256,
                        lng: -83.064729,
                    },
                },
                phone: '+1 (970) 591-3039',
                isActive: false,
                age: 33,
                company: 'EURON',
            },
            {
                id: 20,
                firstName: 'Kaufman',
                lastName: 'Rush',
                email: 'kaufmanrush@euron.com',
                dob: '2011-07-10',
                address: {
                    street: '408 Kingsland Avenue',
                    city: 'Beaulieu',
                    zipcode: 7911,
                    geo: {
                        lat: 41.513153,
                        lng: 54.821641,
                    },
                },
                phone: '+1 (924) 463-2934',
                isActive: false,
                age: 39,
                company: 'ILLUMITY',
            },
            {
                id: 21,
                firstName: 'Frank',
                lastName: 'Hays',
                email: 'frankhays@illumity.com',
                dob: '2005-06-15',
                address: {
                    street: '973 Caton Place',
                    city: 'Dargan',
                    zipcode: 4104,
                    geo: {
                        lat: 63.314988,
                        lng: -138.771323,
                    },
                },
                phone: '+1 (930) 577-2670',
                isActive: false,
                age: 31,
                company: 'SYBIXTEX',
            },
            {
                id: 22,
                firstName: 'Carmella',
                lastName: 'Mccarty',
                email: 'carmellamccarty@sybixtex.com',
                dob: '1980-03-06',
                address: {
                    street: '919 Judge Street',
                    city: 'Canby',
                    zipcode: 8283,
                    geo: {
                        lat: 9.198597,
                        lng: -138.809971,
                    },
                },
                phone: '+1 (876) 456-3218',
                isActive: true,
                age: 21,
                company: 'ZEDALIS',
            },
            {
                id: 23,
                firstName: 'Massey',
                lastName: 'Owen',
                email: 'masseyowen@zedalis.com',
                dob: '2012-03-01',
                address: {
                    street: '108 Seaview Avenue',
                    city: 'Slovan',
                    zipcode: 3599,
                    geo: {
                        lat: -74.648318,
                        lng: 99.620699,
                    },
                },
                phone: '+1 (917) 567-3786',
                isActive: false,
                age: 40,
                company: 'DYNO',
            },
            {
                id: 24,
                firstName: 'Lottie',
                lastName: 'Lowery',
                email: 'lottielowery@dyno.com',
                dob: '1982-10-10',
                address: {
                    street: '557 Meserole Avenue',
                    city: 'Fowlerville',
                    zipcode: 4991,
                    geo: {
                        lat: 54.811546,
                        lng: -20.996515,
                    },
                },
                phone: '+1 (912) 539-3498',
                isActive: true,
                age: 36,
                company: 'MULTIFLEX',
            },
            {
                id: 25,
                firstName: 'Addie',
                lastName: 'Luna',
                email: 'addieluna@multiflex.com',
                dob: '1988-05-01',
                address: {
                    street: '688 Bulwer Place',
                    city: 'Harmon',
                    zipcode: 7664,
                    geo: {
                        lat: -12.762766,
                        lng: -39.924497,
                    },
                },
                phone: '+1 (962) 537-2981',
                isActive: true,
                age: 32,
                company: 'PHARMACON',
            },
        ] || []
    );

    const exportTable = (type) => {
        let columns: any = cols.value.map((d) => {
            return d.field;
        });

        let records = rows.value;
        let filename = 'table';

        let newVariable: any;
        newVariable = window.navigator;

        if (type == 'csv') {
            let coldelimiter = ';';
            let linedelimiter = '\n';
            let result = columns
                .map((d) => {
                    return capitalize(d);
                })
                .join(coldelimiter);
            result += linedelimiter;
            records.map((item) => {
                columns.map((d: any, index) => {
                    if (index > 0) {
                        result += coldelimiter;
                    }
                    let val = item[d] ? item[d] : '';
                    result += val;
                });
                result += linedelimiter;
            });

            if (result == null) return;
            if (!result.match(/^data:text\/csv/i) && !newVariable.msSaveOrOpenBlob) {
                var data = 'data:application/csv;charset=utf-8,' + encodeURIComponent(result);
                var link = document.createElement('a');
                link.setAttribute('href', data);
                link.setAttribute('download', filename + '.csv');
                link.click();
            } else {
                var blob = new Blob([result]);
                if (newVariable.msSaveOrOpenBlob) {
                    newVariable.msSaveBlob(blob, filename + '.csv');
                }
            }
        } else if (type == 'print') {
            var rowhtml = '<p>' + filename + '</p>';
            rowhtml +=
                '<table style="width: 100%; " cellpadding="0" cellcpacing="0"><thead><tr style="color: #515365; background: #eff5ff; -webkit-print-color-adjust: exact; print-color-adjust: exact; "> ';
            columns.map((d) => {
                rowhtml += '<th>' + capitalize(d) + '</th>';
            });
            rowhtml += '</tr></thead>';
            rowhtml += '<tbody>';

            records.map((item) => {
                rowhtml += '<tr>';
                columns.map((d: any) => {
                    let val = item[d] ? item[d] : '';
                    rowhtml += '<td>' + val + '</td>';
                });
                rowhtml += '</tr>';
            });
            rowhtml +=
                '<style>body {font-family:Arial; color:#495057;}p{text-align:center;font-size:18px;font-weight:bold;margin:15px;}table{ border-collapse: collapse; border-spacing: 0; }th,td{font-size:12px;text-align:left;padding: 4px;}th{padding:8px 4px;}tr:nth-child(2n-1){background:#f7f7f7; }</style>';
            rowhtml += '</tbody></table>';
            var winPrint: any = window.open('', '', 'left=0,top=0,width=1000,height=600,toolbar=0,scrollbars=0,status=0');
            winPrint.document.write('<title>Print</title>' + rowhtml);
            winPrint.document.close();
            winPrint.focus();
            winPrint.print();
            // winPrint.close();
        } else if (type == 'txt') {
            let coldelimiter = ',';
            let linedelimiter = '\n';
            let result = columns
                .map((d) => {
                    return capitalize(d);
                })
                .join(coldelimiter);
            result += linedelimiter;
            records.map((item) => {
                columns.map((d: any, index) => {
                    if (index > 0) {
                        result += coldelimiter;
                    }
                    let val = item[d] ? item[d] : '';
                    result += val;
                });
                result += linedelimiter;
            });

            if (result == null) return;
            if (!result.match(/^data:text\/txt/i) && !newVariable.msSaveOrOpenBlob) {
                var data = 'data:application/txt;charset=utf-8,' + encodeURIComponent(result);
                var link = document.createElement('a');
                link.setAttribute('href', data);
                link.setAttribute('download', filename + '.txt');
                link.click();
            } else {
                var blob = new Blob([result]);
                if (newVariable.msSaveOrOpenBlob) {
                    newVariable.msSaveBlob(blob, filename + '.txt');
                }
            }
        }
    };

    const excelColumns = () => {
        return {
            Id: 'id',
            FirstName: 'firstName',
            LastName: 'lastName',
            Company: 'company',
            Age: 'age',
            'Start Date': 'dob',
            Email: 'email',
            'Phone No.': 'phone',
        };
    };

    const excelItems = () => {
        return rows.value;
    };

    const capitalize = (text) => {
        return text
            .replace('_', ' ')
            .replace('-', ' ')
            .toLowerCase()
            .split(' ')
            .map((s) => s.charAt(0).toUpperCase() + s.substring(1))
            .join(' ');
    };

    const formatDate = (date) => {
        if (date) {
            const dt = new Date(date);
            const month = dt.getMonth() + 1 < 10 ? '0' + (dt.getMonth() + 1) : dt.getMonth() + 1;
            const day = dt.getDate() < 10 ? '0' + dt.getDate() : dt.getDate();
            return day + '/' + month + '/' + dt.getFullYear();
        }
        return '';
    };
</script>
