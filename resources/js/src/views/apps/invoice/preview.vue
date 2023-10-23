<template>
    <div>
        <div class="flex items-center lg:justify-end justify-center flex-wrap gap-4 mb-6">
            <button type="button" class="btn btn-info gap-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <path
                        d="M17.4975 18.4851L20.6281 9.09373C21.8764 5.34874 22.5006 3.47624 21.5122 2.48782C20.5237 1.49939 18.6511 2.12356 14.906 3.37189L5.57477 6.48218C3.49295 7.1761 2.45203 7.52305 2.13608 8.28637C2.06182 8.46577 2.01692 8.65596 2.00311 8.84963C1.94433 9.67365 2.72018 10.4495 4.27188 12.0011L4.55451 12.2837C4.80921 12.5384 4.93655 12.6658 5.03282 12.8075C5.22269 13.0871 5.33046 13.4143 5.34393 13.7519C5.35076 13.9232 5.32403 14.1013 5.27057 14.4574C5.07488 15.7612 4.97703 16.4131 5.0923 16.9147C5.32205 17.9146 6.09599 18.6995 7.09257 18.9433C7.59255 19.0656 8.24576 18.977 9.5522 18.7997L9.62363 18.79C9.99191 18.74 10.1761 18.715 10.3529 18.7257C10.6738 18.745 10.9838 18.8496 11.251 19.0285C11.3981 19.1271 11.5295 19.2585 11.7923 19.5213L12.0436 19.7725C13.5539 21.2828 14.309 22.0379 15.1101 21.9985C15.3309 21.9877 15.5479 21.9365 15.7503 21.8474C16.4844 21.5244 16.8221 20.5113 17.4975 18.4851Z"
                        stroke="currentColor"
                        stroke-width="1.5"
                    />
                    <path opacity="0.5" d="M6 18L21 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                Send Invoice
            </button>

            <button type="button" class="btn btn-primary gap-2" @click="print">
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

                Print
            </button>

            <button type="button" class="btn btn-success gap-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <path
                        opacity="0.5"
                        d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    ></path>
                    <path
                        d="M12 2L12 15M12 15L9 11.5M12 15L15 11.5"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                </svg>
                Download
            </button>

            <router-link to="/apps/invoice/add" class="btn btn-secondary gap-2">
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
                    class="w-5 h-5"
                >
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Create
            </router-link>

            <router-link to="/apps/invoice/edit" class="btn btn-warning gap-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <path
                        opacity="0.5"
                        d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    ></path>
                    <path
                        d="M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z"
                        stroke="currentColor"
                        stroke-width="1.5"
                    ></path>
                    <path
                        opacity="0.5"
                        d="M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9"
                        stroke="currentColor"
                        stroke-width="1.5"
                    ></path>
                </svg>
                Edit
            </router-link>
        </div>
        <div class="panel">
            <div class="flex justify-between flex-wrap gap-4 px-4">
                <div class="text-2xl font-semibold uppercase">Invoice</div>
                <div class="shrink-0">
                    <img src="/assets/images/logo.svg" alt="" class="w-14 ltr:ml-auto rtl:mr-auto" />
                </div>
            </div>
            <div class="ltr:text-right rtl:text-left px-4">
                <div class="space-y-1 mt-6 text-white-dark">
                    <div>13 Tetrick Road, Cypress Gardens, Florida, 33884, US</div>
                    <div>vristo@gmail.com</div>
                    <div>+1 (070) 123-4567</div>
                </div>
            </div>

            <hr class="border-[#e0e6ed] dark:border-[#1b2e4b] my-6" />
            <div class="flex justify-between lg:flex-row flex-col gap-6 flex-wrap">
                <div class="flex-1">
                    <div class="space-y-1 text-white-dark">
                        <div>Issue For:</div>
                        <div class="text-black dark:text-white font-semibold">John Doe</div>
                        <div>405 Mulberry Rd. Mc Grady, NC, 28649</div>
                        <div>redq@company.com</div>
                        <div>(128) 666 070</div>
                    </div>
                </div>
                <div class="flex justify-between sm:flex-row flex-col gap-6 lg:w-2/3">
                    <div class="xl:1/3 lg:w-2/5 sm:w-1/2">
                        <div class="flex items-center w-full justify-between mb-2">
                            <div class="text-white-dark">Invoice :</div>
                            <div>#8701</div>
                        </div>
                        <div class="flex items-center w-full justify-between mb-2">
                            <div class="text-white-dark">Issue Date :</div>
                            <div>13 Sep 2022</div>
                        </div>
                        <div class="flex items-center w-full justify-between mb-2">
                            <div class="text-white-dark">Order ID :</div>
                            <div>#OD-85794</div>
                        </div>
                        <div class="flex items-center w-full justify-between">
                            <div class="text-white-dark">Shipment ID :</div>
                            <div>#SHP-8594</div>
                        </div>
                    </div>
                    <div class="xl:1/3 lg:w-2/5 sm:w-1/2">
                        <div class="flex items-center w-full justify-between mb-2">
                            <div class="text-white-dark">Bank Name:</div>
                            <div class="whitespace-nowrap">Bank Of America</div>
                        </div>
                        <div class="flex items-center w-full justify-between mb-2">
                            <div class="text-white-dark">Account Number:</div>
                            <div>1234567890</div>
                        </div>
                        <div class="flex items-center w-full justify-between mb-2">
                            <div class="text-white-dark">SWIFT Code:</div>
                            <div>S58K796</div>
                        </div>
                        <div class="flex items-center w-full justify-between mb-2">
                            <div class="text-white-dark">IBAN:</div>
                            <div>L5698445485</div>
                        </div>
                        <div class="flex items-center w-full justify-between mb-2">
                            <div class="text-white-dark">Country:</div>
                            <div>United States</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive mt-6">
                <table class="table-striped">
                    <thead>
                        <tr>
                            <template v-for="item in columns" :key="item.key">
                                <th :class="[item.class]">{{ item.label }}</th>
                            </template>
                        </tr>
                    </thead>
                    <tbody>
                        <template v-for="item in items" :key="item.id">
                            <tr>
                                <td>{{ item.id }}</td>
                                <td>{{ item.title }}</td>
                                <td>{{ item.quantity }}</td>
                                <td class="ltr:text-right rtl:text-left">${{ item.price }}</td>
                                <td class="ltr:text-right rtl:text-left">${{ item.amount }}</td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
            <div class="grid sm:grid-cols-2 grid-cols-1 px-4 mt-6">
                <div></div>
                <div class="ltr:text-right rtl:text-left space-y-2">
                    <div class="flex items-center">
                        <div class="flex-1">Subtotal</div>
                        <div class="w-[37%]">$3255</div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex-1">Tax</div>
                        <div class="w-[37%]">$700</div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex-1">Shipping Rate</div>
                        <div class="w-[37%]">$0</div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex-1">Discount</div>
                        <div class="w-[37%]">$10</div>
                    </div>
                    <div class="flex items-center font-semibold text-lg">
                        <div class="flex-1">Grand Total</div>
                        <div class="w-[37%]">$3945</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref } from 'vue';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Invoice Preview' });

    const items = ref([
        {
            id: 1,
            title: 'Calendar App Customization',
            quantity: 1,
            price: '120',
            amount: '120',
        },
        {
            id: 2,
            title: 'Chat App Customization',
            quantity: 1,
            price: '230',
            amount: '230',
        },
        {
            id: 3,
            title: 'Laravel Integration',
            quantity: 1,
            price: '405',
            amount: '405',
        },
        {
            id: 4,
            title: 'Backend UI Design',
            quantity: 1,
            price: '2500',
            amount: '2500',
        },
    ]);
    const columns = ref([
        {
            key: 'id',
            label: 'S.NO',
        },
        {
            key: 'title',
            label: 'ITEMS',
        },
        {
            key: 'quantity',
            label: 'QTY',
        },
        {
            key: 'price',
            label: 'PRICE',
            class: 'ltr:text-right rtl:text-left',
        },
        {
            key: 'amount',
            label: 'AMOUNT',
            class: 'ltr:text-right rtl:text-left',
        },
    ]);

    const print = () => {
        window.print();
    };
</script>
