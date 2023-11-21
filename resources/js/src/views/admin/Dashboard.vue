<template>
    <div>
        <!-- <p>HALO MASUK DASHBOARD 2</p> -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mb-6">
            <div class="panel py-6 bg-gradient-to-r from-cyan-500 to-cyan-400 text-white">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Commerce Balance</div>
                </div>
                <div class="flex items-center mt-2">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">
                        {{ statsCount?.commerce_balance }}
                    </div>
                </div>
            </div>
            <div class="panel py-6 bg-gradient-to-r from-green-500 to-green-400 text-white">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Total Pesanan Berhasil</div>
                </div>
                <div class="flex items-center mt-2">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">
                        {{ statsCount?.completed_orders }}
                    </div>
                </div>
            </div>
            <div class="panel py-6 bg-gradient-to-r from-yellow-500 to-yellow-400 text-white">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Jumlah Produk</div>
                </div>
                <div class="flex items-center mt-2">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">
                        {{ statsCount?.product_count }}
                    </div>
                </div>
            </div>

            <div class="panel py-6 bg-gradient-to-r from-purple-500 to-purple-400 text-white">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Jumlah User</div>
                </div>
                <div class="flex items-center mt-2">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">
                        {{ statsCount?.user_count }}
                    </div>
                </div>
            </div>
        </div>
        <div class="grid xl:grid-cols-3 gap-6 mb-6">
            <div class="panel h-full xl:col-span-2">
                <div class="flex items-center justify-between dark:text-white-light mb-5">
                    <h5 class="font-semibold text-lg">
                       Aktivitas Pesanan
                    </h5>
                    <div class="dropdown ltr:ml-auto rtl:mr-auto">
                        <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                            <button type="button" class="btn btn-white dropdown-toggle shadow-none">
                                {{ titleActivity }}
                                <svg class="ml-1" width="16" height="16" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.60235 4.59668L6.24576 7.47376L2.88916 4.59668" stroke="#0E1726" stroke-width="0.719271" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <template #content="{ close }">
                                <ul @click="close()" class="whitespace-nowrap">
                                    <!-- <li><button @click="getActivity('monthly')">Mingguan</button></li>
                                    <li><button @click="getActivity('yearly')">Bulanan</button></li> -->
                                </ul>
                            </template>
                        </Popper>
                    </div>
                </div>
                <!-- <p class="text-lg dark:text-white-light/90">Total Profit <span class="text-primary ml-2">$10,840</span></p> -->
                <div class="relative">
                    <apexchart v-if="activityChart.xaxis.categories.length > 0" height="400" :options="activityChart" :series="activitySeries" class="bg-white dark:bg-black rounded-lg overflow-hidden">
                    </apexchart>
                    <!-- loader -->
                    <div v-else class="min-h-[325px] grid place-content-center">
                        <span class="animate-spin border-2 border-black dark:border-white !border-l-transparent rounded-full w-5 h-5 inline-flex"></span>
                    </div>
                </div>
            </div>
        </div>


        <div :style="{ height: '70vh' }">
        </div>

    </div>
</template>
  
<script setup lang="ts">
import { useHead } from '@vueuse/head';
import { useAppStore } from '@/stores/index';
import globalComponents from '@/global-components';

// @ts-ignore
import Table from '@/components/plugins/Table.vue';
import { inject, onMounted, reactive, ref, computed } from 'vue';
import { Axios } from 'axios';
import apexchart from 'vue3-apexcharts';
import auth from '@/services/auth.service';
const store = useAppStore();
const axios = <Axios>inject('axios');
let data: any = ref({});
const titleActivity: any = ref('Harian');
const titleActivity2: any = ref('Harian');
let user: any = auth.users();
const type: any = user?.educational_institution?.type;
const cols =
    ref([
        { field: 'number', title: 'Rank', slot: true, sort: false },
        { field: 'nameWithRoundedImage2', title: 'Nama Lengkap', sort: false },
        {
            field: 'faculty',
            title: type == 'campus' ? 'Fakultas' : type == 'school' ? 'Kelas' : type == 'business_organization' ? 'Divisi' : '',
            sort: false
        },
        {
            field: 'fasih_user_items_count',
            title: 'Total Murajaah',
            sort: false,
            cellRenderer: (item) => {
                return `${item.fasih_user_items_count} Ayat`;
            },
        },
        { field: 'validity', title: 'Rata-Rata Bintang', sort: false },
    ]) || [];

useHead({
    title: 'Dashboard',
});


const isDark = store.theme === 'dark' || store.isDarkMode ? true : false;
const isRtl = store.rtlClass === 'rtl' ? true : false;

const getActivity = async (value) => {
  if (
    (value == 'weekly' && titleActivity.value != 'Harian') ||
    (value == 'monthly' && titleActivity.value != 'Mingguan') ||
    (value == 'yearly' && titleActivity.value != 'Bulanan')
  ) {
    if (value == 'weekly') titleActivity.value = 'Harian';
    else if (value == 'monthly') titleActivity.value = 'Mingguan';
    else if (value == 'yearly') titleActivity.value = 'Bulanan';
    store.isShowMainLoader = true;
    activitySeries.value = [];
    activityChart.xaxis.categories = [];
    const response = (await axios.get(`/admin/educational-institution/activity-users?type=${value}`)).data;
    store.isShowMainLoader = false;
    activitySeries.value = response.series;
    activityChart.xaxis.categories = response.categories;
    // activityChart.colors = response.colors;
  }
};

const activityChart = reactive({
    chart: {
        height: 325,
        type: 'line',
        fontFamily: 'Nunito, sans-serif',
        zoom: {
            enabled: false,
        },
        toolbar: {
            show: false,
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: true,
        curve: 'smooth',
        width: 2,
        lineCap: 'square',
    },
    dropShadow: {
        enabled: true,
        opacity: 0.2,
        blur: 10,
        left: -7,
        top: 22,
    },
    grid: {
        borderColor: isDark ? '#191e3a' : '#e0e6ed',
        strokeDashArray: 5,
        padding: {
            top: 5,
            bottom: 5,
            left: 5,
            right: 5,
        },
        xaxis: {
            lines: {
                show: true,
            },
        },
        yaxis: {
            lines: {
                show: false,
            },
        },
    },
    tooltip: {
        x: {
            show: false,
        },
        marker: {
            show: false,
        },
        y: {
            formatter(number) {
                if (number > 0) return number + ' Murajaah';
                else return number;
            },
        },
    },
    colors: isDark ? ['#2196f3', '#e7515a'] : ['#1b55e2', '#e7515a'],
    labels: [],
    xaxis: {
        categories: [],
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        crosshairs: {
            show: true,
        },
        labels: {
            offsetX: isRtl ? 2 : 0,
            offsetY: 5,
            style: {
                fontSize: '12px',
                cssClass: 'apexcharts-xaxis-title',
            },
        },
    },
    yaxis: {
        tickAmount: 7,
        labels: {
            formatter: (value: number) => {
                return value;
            },
            offsetX: isRtl ? -30 : -10,
            offsetY: 0,
            style: {
                fontSize: '12px',
                cssClass: 'apexcharts-yaxis-title',
            },
        },
        opposite: isRtl ? true : false,
    },
    legend: {
        position: 'top',
        horizontalAlign: 'right',
        fontSize: '16px',
        markers: {
            width: 10,
            height: 10,
            offsetX: -2,
        },
        itemMargin: {
            horizontal: 10,
            vertical: 5,
        },
    },
});

var statsCount: any = ref({});
const activitySeries: any = ref([]);

const lineChart = reactive({
    chart: {
        height: 300,
        type: 'line',
        toolbar: false,
    },
    colors: [],
    tooltip: {
        marker: false,
        y: {
            formatter(number) {
                if (number > 0) {
                    switch (type) {
                        case 'campus':
                            return number + ' Mahasiswa';
                        case 'school':
                            return number + ' Siswa';
                        case 'business_organization':
                            return number + ' Karyawan';

                        default:
                            return number;
                    }
                } else return number;
            },
        },
        theme: isDark ? 'dark' : 'light',
    },
    stroke: {
        width: 2,
        curve: 'smooth',
    },
    xaxis: {
        categories: [],
        axisBorder: {
            color: isDark ? '#191e3a' : '#e0e6ed',
        },
    },
    yaxis: {
        opposite: isRtl ? true : false,
        labels: {
            offsetX: isRtl ? -20 : 0,
        },
    },
    grid: {
        borderColor: isDark ? '#191e3a' : '#e0e6ed',
        strokeDashArray: 5,
        padding: {
            top: 5,
            bottom: 5,
            left: 5,
            right: 5,
        },
        xaxis: {
            lines: {
                show: true,
            },
        },
        yaxis: {
            lines: {
                show: false,
            },
        },
    },
});

const lineChartSeries: any = ref([]);

const getData = async () => {
    store.isShowMainLoader = true;
    const tempData = (await axios.get('/admin/dashboard2')).data;
    statsCount.value = (await axios.get('/admin/dashboard2')).data;
    console.log(statsCount.value);
    store.isShowMainLoader = false;
    // const response = (await axios.get('/admin/educational-institution/teacher/murajaah')).data;


    // data.value = response;
};

const rate: any = (validity) => {
    if (validity < 60) return 0;
    if (validity >= 61 && validity < 71) return 1;
    if (validity >= 71 && validity < 81) return 2;
    if (validity >= 81 && validity < 91) return 3;
    if (validity >= 91 && validity < 100) return 4;
    if (validity == 100) return 5;
};

const getChart = async (type = 'weekly') => {
    activityChart.xaxis.categories = [];
    if (
        (type == 'weekly' && titleActivity.value != 'Harian') ||
        (type == 'monthly' && titleActivity.value != 'Mingguan') ||
        (type == 'yearly' && titleActivity.value != 'Bulanan')
    ) {
        if (type == 'weekly') titleActivity.value = 'Harian';
        else if (type == 'monthly') titleActivity.value = 'Mingguan';
        else if (type == 'yearly') titleActivity.value = 'Bulanan';
    }

    const response = (
        await axios.get('/admin/educational-institution/teacher/murajaah/chart1', {
            params: {
                type: type,
            },
        })
    ).data;
    activityChart.xaxis.categories = response.categories;
    activityChart.colors = response.colors;
    activitySeries.value = response.series;
};

const getChart2 = async (type = 'weekly') => {
    lineChart.xaxis.categories = [];
    if (
        (type == 'weekly' && titleActivity2.value != 'Harian') ||
        (type == 'monthly' && titleActivity2.value != 'Mingguan') ||
        (type == 'yearly' && titleActivity2.value != 'Bulanan')
    ) {
        if (type == 'weekly') titleActivity2.value = 'Harian';
        else if (type == 'monthly') titleActivity2.value = 'Mingguan';
        else if (type == 'yearly') titleActivity2.value = 'Bulanan';
    }

    const response = (
        await axios.get('/admin/educational-institution/teacher/murajaah/chart2', {
            params: {
                type: type,
            },
        })
    ).data;
    lineChart.xaxis.categories = response.categories;
    lineChart.colors = response.colors;
    lineChartSeries.value = [{ name: 'Total', data: response.series }];
};

onMounted(async () => {
    if (auth.isAuthenticated() && auth.getToken() != false) {
        await getChart();
    }
    await getData();
});
</script>
  
  
  