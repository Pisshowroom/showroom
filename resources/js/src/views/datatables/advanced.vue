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

        <div class="panel pb-0 mt-6">
            <h5 class="font-semibold text-lg dark:text-white-light mb-5">Advanced</h5>
            <div class="datatable">
                <vue3-datatable
                    :rows="rows"
                    :columns="cols"
                    :totalRows="rows?.length"
                    :sortable="true"
                    skin="whitespace-nowrap bh-table-hover"
                    firstArrow='<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>'
                    lastArrow='<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg> '
                    previousArrow='<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>'
                    nextArrow='<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>'
                >
                    <template #id="data">
                        <strong class="text-info">#{{ data.value.id }}</strong>
                    </template>
                    <template #firstName="data">
                        <div class="flex items-center gap-2">
                            <img :src="`/assets/images/profile-${getRandomNumber(1, 34)}.jpeg`" class="w-9 h-9 rounded-full max-w-none" alt="user-profile" />
                            <div class="font-semibold">{{ data.value.firstName + ' ' + data.value.lastName }}</div>
                        </div>
                    </template>
                    <template #country>
                        <div class="flex items-center gap-2">
                            <img width="24" :src="`/assets/images/flags/${getCountry().code}.svg`" class="max-w-none" alt="user profile" />
                            <div>{{ getCountry().name }}</div>
                        </div>
                    </template>
                    <template #email="data">
                        <a :href="`mailto:${data.value.email}`" class="text-primary hover:underline">{{ data.value.email }}</a>
                    </template>
                    <template #age>
                        <div class="w-4/5 min-w-[100px] h-2.5 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex">
                            <div
                                class="h-2.5 rounded-full rounded-bl-full text-center text-white text-xs"
                                :class="`bg-${randomStatusColor()}`"
                                :style="`width:${getRandomNumber(15, 100)}%`"
                            ></div>
                        </div>
                    </template>
                    <template #rating="data">
                        <div class="flex items-center justify-center text-warning">
                            <div v-for="i in getRandomNumber(1, 5)" :key="i + data.value.id">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-warning">
                                    <path
                                        d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                </svg>
                            </div>
                        </div>
                    </template>
                    <template #series="data">
                        <div style="width: 150px" class="overflow-hidden">
                            <apexchart
                                :key="data.value.id"
                                height="30"
                                type="line"
                                :options="chart_options"
                                :series="[{ data: [21, 9, 36, 12, 44, 25, 59] }]"
                            ></apexchart>
                        </div>
                    </template>
                    <template #status>
                        <span class="badge" :class="`badge-outline-${randomStatusColor()}`">{{ randomStatus() }}</span>
                    </template>
                </vue3-datatable>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
    import { ref, reactive, computed } from 'vue';
    import Vue3Datatable from '@bhplugin/vue3-datatable';
    import apexchart from 'vue3-apexcharts';
    import { useI18n } from 'vue-i18n';
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Advanced Table' });
    const store = useAppStore();
    // multi language
    const i18n = reactive(useI18n());
    const cols =
        ref([
            { field: 'id', title: 'ID', isUnique: true },
            { field: 'firstName', title: 'User' },
            { field: 'country', title: 'Country', sort: false },
            { field: 'email', title: 'Email' },
            { field: 'age', title: 'Progress', sort: false },
            { field: 'phone', title: 'Phone' },
            { field: 'rating', title: 'Rate', sort: false, minWidth: '120px', headerClass: 'justify-center', cellClass: 'justify-center' },
            { field: 'series', title: 'Progress', sort: false },
            { field: 'status', title: 'Status', sort: false },
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

    const countryList = [
        { code: 'AE', name: 'United Arab Emirates' },
        { code: 'AR', name: 'Argentina' },
        { code: 'AT', name: 'Austria' },
        { code: 'AU', name: 'Australia' },
        { code: 'BE', name: 'Belgium' },
        { code: 'BG', name: 'Bulgaria' },
        { code: 'BN', name: 'Brunei' },
        { code: 'BR', name: 'Brazil' },
        { code: 'BY', name: 'Belarus' },
        { code: 'CA', name: 'Canada' },
        { code: 'CH', name: 'Switzerland' },
        { code: 'CL', name: 'Chile' },
        { code: 'CN', name: 'China' },
        { code: 'CO', name: 'Colombia' },
        { code: 'CZ', name: 'Czech Republic' },
        { code: 'DE', name: 'Germany' },
        { code: 'DK', name: 'Denmark' },
        { code: 'DZ', name: 'Algeria' },
        { code: 'EC', name: 'Ecuador' },
        { code: 'EG', name: 'Egypt' },
        { code: 'ES', name: 'Spain' },
        { code: 'FI', name: 'Finland' },
        { code: 'FR', name: 'France' },
        { code: 'GB', name: 'United Kingdom' },
        { code: 'GR', name: 'Greece' },
        { code: 'HK', name: 'Hong Kong' },
        { code: 'HR', name: 'Croatia' },
        { code: 'HU', name: 'Hungary' },
        { code: 'ID', name: 'Indonesia' },
        { code: 'IE', name: 'Ireland' },
        { code: 'IL', name: 'Israel' },
        { code: 'IN', name: 'India' },
        { code: 'IT', name: 'Italy' },
        { code: 'JO', name: 'Jordan' },
        { code: 'JP', name: 'Japan' },
        { code: 'KE', name: 'Kenya' },
        { code: 'KH', name: 'Cambodia' },
        { code: 'KR', name: 'South Korea' },
        { code: 'KZ', name: 'Kazakhstan' },
        { code: 'LA', name: 'Laos' },
        { code: 'LK', name: 'Sri Lanka' },
        { code: 'MA', name: 'Morocco' },
        { code: 'MM', name: 'Myanmar' },
        { code: 'MO', name: 'Macau' },
        { code: 'MX', name: 'Mexico' },
        { code: 'MY', name: 'Malaysia' },
        { code: 'NG', name: 'Nigeria' },
        { code: 'NL', name: 'Netherlands' },
        { code: 'NO', name: 'Norway' },
        { code: 'NZ', name: 'New Zealand' },
        { code: 'PE', name: 'Peru' },
        { code: 'PH', name: 'Philippines' },
        { code: 'PK', name: 'Pakistan' },
        { code: 'PL', name: 'Poland' },
        { code: 'PT', name: 'Portugal' },
        { code: 'QA', name: 'Qatar' },
        { code: 'RO', name: 'Romania' },
        { code: 'RS', name: 'Serbia' },
        { code: 'RU', name: 'Russia' },
        { code: 'SA', name: 'Saudi Arabia' },
        { code: 'SE', name: 'Sweden' },
        { code: 'SG', name: 'Singapore' },
        { code: 'SK', name: 'Slovakia' },
        { code: 'TH', name: 'Thailand' },
        { code: 'TN', name: 'Tunisia' },
        { code: 'TR', name: 'Turkey' },
        { code: 'TW', name: 'Taiwan' },
        { code: 'UK', name: 'Ukraine' },
        { code: 'UG', name: 'Uganda' },
        { code: 'US', name: 'United States' },
        { code: 'VN', name: 'Vietnam' },
        { code: 'ZA', name: 'South Africa' },
        { code: 'BA', name: 'Bosnia and Herzegovina' },
        { code: 'BD', name: 'Bangladesh' },
        { code: 'EE', name: 'Estonia' },
        { code: 'IQ', name: 'Iraq' },
        { code: 'LU', name: 'Luxembourg' },
        { code: 'LV', name: 'Latvia' },
        { code: 'MK', name: 'North Macedonia' },
        { code: 'SI', name: 'Slovenia' },
        { code: 'PA', name: 'Panama' },
    ];

    const chart_options = computed(() => {
        let option = {
            chart: { sparkline: { enabled: true } },
            stroke: { curve: 'smooth', width: 2 },
            markers: { size: [4, 7], strokeWidth: 0 },
            colors: [randomColor()],
            grid: { padding: { top: 5, bottom: 5 } },
            tooltip: {
                x: { show: false },
                y: {
                    title: {
                        formatter: () => {
                            return '';
                        },
                    },
                },
            },
        };
        return option;
    });

    const randomColor = () => {
        const color = ['#4361ee', '#805dca', '#00ab55', '#e7515a', '#e2a03f', '#2196f3'];
        const random = Math.floor(Math.random() * color.length);
        return color[random];
    };

    const randomStatusColor = () => {
        const color = ['primary', 'secondary', 'success', 'danger', 'warning', 'info'];
        const random = Math.floor(Math.random() * color.length);
        return color[random];
    };

    const randomStatus = () => {
        const status = ['PAID', 'APPROVED', 'FAILED', 'CANCEL', 'SUCCESS', 'PENDING', 'COMPLETE'];
        const random = Math.floor(Math.random() * status.length);
        return status[random];
    };
    const getRandomNumber = (min: number, max: number) => {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    };

    const getCountry = () => {
        const random = Math.floor(Math.random() * countryList.length);
        return countryList[random];
    };
</script>
