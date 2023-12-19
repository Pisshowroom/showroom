import{c as I,_ as c}from"./codePreview.541183e8.js";import{d as Z,u as q,a as H,c as h,r as p,o as i,b as K,e,g as r,f as u,h as m,Y as f,w as k,p as b,i as l}from"./main.239a2c8c.js";const Q=e("ul",{class:"flex space-x-2 rtl:space-x-reverse mb-6"},[e("li",null,[e("a",{href:"javascript:;",class:"text-primary hover:underline"},"Dashboard")]),e("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[e("span",null,"Charts")])],-1),ee={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},te=l('<div class="panel lg:col-span-2 p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/vue3-apexcharts" target="_blank" class="block hover:underline">https://www.npmjs.com/package/vue3-apexcharts</a></div>',1),re={class:"panel"},se={class:"flex items-center justify-between mb-5"},oe=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Simple Line",-1),ae=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ie=[ae],le={class:"mb-5"},ne=e("pre",null,`<!-- simple line -->
<apexchart height="300" :options="lineChart" :series="lineChartSeries" class="bg-white dark:bg-black rounded-lg overflow-hidden"></apexchart>

<!-- script -->
<script lang="ts" setup>
import { ref, computed } from 'vue';
import apexchart from 'vue3-apexcharts';
import { useAppStore } from '@/stores/index';
const store = useAppStore();

const lineChart = computed(() => {
  const isDark = store.theme === 'dark' || store.isDarkMode ? true : false;
  const isRtl = store.rtlClass === 'rtl' ? true : false;
  return {
    chart: {
      height: 300,
      type: 'line',
      toolbar: false,
    },
    colors: ['#4361ee'],
    tooltip: {
      marker: false,
      y: {
        formatter(number) {
          return '$' + number;
        },
      },
      theme: isDark ? 'dark' : 'light',
    },
    stroke: {
      width: 2,
      curve: 'smooth',
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
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
    },
  };
});

const lineChartSeries = ref([
  {
    name: 'Sales',
    data: [45, 55, 75, 25, 45, 110],
  },
]);
<\/script>
`,-1),de={class:"panel"},ce={class:"flex items-center justify-between mb-5"},he=e("h5",{class:"font-semibold text-lg dark:text-white"},"Simple Area",-1),pe=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ue=[pe],me={class:"mb-5"},fe=e("pre",null,`<!-- simple area -->
<apexchart height="300" :options="areaChart" :series="areaChartSeries" class="bg-white dark:bg-black rounded-lg overflow-hidden"></apexchart>

<!-- script -->
<script lang="ts" setup>
import { ref, computed } from 'vue';
import apexchart from 'vue3-apexcharts';
import { useAppStore } from '@/stores/index';
const store = useAppStore();

const areaChart = computed(() => {
  const isDark = store.theme === 'dark' || store.isDarkMode ? true : false;
  const isRtl = store.rtlClass === 'rtl' ? true : false;
  return {
    chart: {
      type: 'area',
      height: 300,
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: false,
      },
    },
    colors: ['#805dca'],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 2,
      curve: 'smooth',
    },
    xaxis: {
      axisBorder: {
        color: isDark ? '#191e3a' : '#e0e6ed',
      },
    },
    yaxis: {
      opposite: isRtl ? true : false,
      labels: {
        offsetX: isRtl ? -40 : 0,
      },
    },
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    legend: {
      horizontalAlign: 'left',
    },
    grid: {
      borderColor: isDark ? '#191e3a' : '#e0e6ed',
    },
    tooltip: {
      theme: isDark ? 'dark' : 'light',
    },
  };
});

const areaChartSeries = ref([
  {
    name: 'Income',
    data: [16800, 16800, 15500, 17800, 15500, 17000, 19000, 16000, 15000, 17000, 14000, 17000],
  },
]);
<\/script>
`,-1),ke={class:"panel"},be={class:"flex items-center justify-between mb-5"},ge=e("h5",{class:"font-semibold text-lg dark:text-white"},"Simple Column",-1),we=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),xe=[we],ve={class:"mb-5"},Ce=e("pre",null,`<!-- simple column -->
<apexchart height="300" :options="columnChart" :series="columnChartSeries" class="bg-white dark:bg-black rounded-lg overflow-hidden"></apexchart>

<!-- script -->
<script lang="ts" setup>
import { ref, computed } from 'vue';
import apexchart from 'vue3-apexcharts';
import { useAppStore } from '@/stores/index';
const store = useAppStore();

const columnChart = computed(() => {
  const isDark = store.theme === 'dark' || store.isDarkMode ? true : false;
  const isRtl = store.rtlClass === 'rtl' ? true : false;
  return {
    chart: {
      height: 300,
      type: 'bar',
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: false,
      },
    },
    colors: ['#805dca', '#e7515a'],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent'],
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
        endingShape: 'rounded',
      },
    },
    grid: {
      borderColor: isDark ? '#191e3a' : '#e0e6ed',
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
      axisBorder: {
        color: isDark ? '#191e3a' : '#e0e6ed',
      },
    },
    yaxis: {
      opposite: isRtl ? true : false,
      labels: {
        offsetX: isRtl ? -10 : 0,
      },
    },
    tooltip: {
      theme: isDark ? 'dark' : 'light',
      y: {
        formatter: function (val) {
          return val;
        },
      },
    },
  };
});

const columnChartSeries = ref([
  {
    name: 'Net Profit',
    data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
  },
  {
    name: 'Revenue',
    data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
  },
]);
<\/script>
`,-1),_e={class:"panel"},ye={class:"flex items-center justify-between mb-5"},Me=e("h5",{class:"font-semibold text-lg dark:text-white"},"Simple Column Stacked",-1),Se=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),De=[Se],Le={class:"mb-5"},Ae=e("pre",null,`<!-- simple column stacked -->
<apexchart height="300" :options="simpleColumnStacked" :series="simpleColumnStackedSeries" class="bg-white dark:bg-black rounded-lg overflow-hidden"></apexchart>

<!-- script -->
<script lang="ts" setup>
import { ref, computed } from 'vue';
import apexchart from 'vue3-apexcharts';
import { useAppStore } from '@/stores/index';
const store = useAppStore();

const simpleColumnStacked = computed(() => {
  const isDark = store.theme === 'dark' || store.isDarkMode ? true : false;
  const isRtl = store.rtlClass === 'rtl' ? true : false;
  return {
    chart: {
      height: 300,
      type: 'bar',
      stacked: true,
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: false,
      },
    },
    colors: ['#2196f3', '#3b3f5c'],
    responsive: [
      {
        breakpoint: 480,
        options: {
          legend: {
            position: 'bottom',
            offsetX: -10,
            offsetY: 5,
          },
        },
      },
    ],
    plotOptions: {
      bar: {
        horizontal: false,
      },
    },
    xaxis: {
      type: 'datetime',
      categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT', '01/05/2011 GMT', '01/06/2011 GMT'],
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
    },
    legend: {
      position: 'right',
      offsetY: 40,
    },
    tooltip: {
      theme: isDark ? 'dark' : 'light',
    },
    fill: {
      opacity: 0.8,
    },
  };
});

const simpleColumnStackedSeries = ref([
  {
    name: 'PRODUCT A',
    data: [44, 55, 41, 67, 22, 43],
  },
  {
    name: 'PRODUCT B',
    data: [13, 23, 20, 8, 13, 27],
  },
]);
<\/script>
`,-1),Be={class:"panel"},Te={class:"flex items-center justify-between mb-5"},ze=e("h5",{class:"font-semibold text-lg dark:text-white"},"Simple Bar",-1),Re=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),je=[Re],Oe={class:"mb-5"},Je=e("pre",null,`<!-- simple bar -->
<apexchart height="300" :options="barChart" :series="barChartSeries" class="bg-white dark:bg-black rounded-lg overflow-hidden"></apexchart>

<!-- script -->
<script lang="ts" setup>
import { ref, computed } from 'vue';
import apexchart from 'vue3-apexcharts';
import { useAppStore } from '@/stores/index';
const store = useAppStore();

const barChart = computed(() => {
  const isDark = store.theme === 'dark' || store.isDarkMode ? true : false;
  const isRtl = store.rtlClass === 'rtl' ? true : false;
  return {
    chart: {
      height: 300,
      type: 'bar',
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
      width: 1,
    },
    colors: ['#4361ee'],
    xaxis: {
      categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
      axisBorder: {
        color: isDark ? '#191e3a' : '#e0e6ed',
      },
    },
    yaxis: {
      opposite: isRtl ? true : false,
      reversed: isRtl ? true : false,
    },
    grid: {
      borderColor: isDark ? '#191e3a' : '#e0e6ed',
    },
    plotOptions: {
      bar: {
        horizontal: true,
      },
    },
    fill: {
      opacity: 0.8,
    },
  };
});

const barChartSeries = ref([
  {
    name: 'Sales',
    data: [44, 55, 41, 67, 22, 43, 21, 70],
  },
]);
<\/script>
`,-1),Fe={class:"panel"},Ge={class:"flex items-center justify-between mb-5"},$e=e("h5",{class:"font-semibold text-lg dark:text-white"},"Mixed",-1),Xe=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Pe=[Xe],Ee={class:"mb-5"},Ne=e("pre",null,`<!-- mixed -->
<apexchart height="300" :options="mixedChart" :series="mixedChartSeries" class="bg-white dark:bg-black rounded-lg overflow-hidden"></apexchart>

<!-- script -->
<script lang="ts" setup>
import { ref, computed } from 'vue';
import apexchart from 'vue3-apexcharts';
import { useAppStore } from '@/stores/index';
const store = useAppStore();

const mixedChart = computed(() => {
  const isDark = store.theme === 'dark' || store.isDarkMode ? true : false;
  const isRtl = store.rtlClass === 'rtl' ? true : false;
  return {
    chart: {
      height: 300,
      // stacked: false,
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: false,
      },
    },
    colors: ['#2196f3', '#00ab55', '#4361ee'],
    stroke: {
      width: [0, 2, 2],
      curve: 'smooth',
    },
    plotOptions: {
      bar: {
        columnWidth: '50%',
      },
    },
    fill: {
      opacity: [1, 0.25, 1],
    },

    labels: ['01/01/2022', '02/01/2022', '03/01/2022', '04/01/2022', '05/01/2022', '06/01/2022', '07/01/2022', '08/01/2022', '09/01/2022', '10/01/2022', '11/01/2022'],
    markers: {
      size: 0,
    },
    xaxis: {
      type: 'datetime',
      axisBorder: {
        color: isDark ? '#191e3a' : '#e0e6ed',
      },
    },
    yaxis: {
      title: {
        text: 'Points',
      },
      min: 0,
      opposite: isRtl ? true : false,
      labels: {
        offsetX: isRtl ? -10 : 0,
      },
    },
    grid: {
      borderColor: isDark ? '#191e3a' : '#e0e6ed',
    },
    tooltip: {
      shared: true,
      intersect: false,
      theme: isDark ? 'dark' : 'light',
      y: {
        formatter: (y) => {
          if (typeof y !== 'undefined') {
            return y.toFixed(0) + ' points';
          }
          return y;
        },
      },
    },
    legend: {
      itemMargin: {
        horizontal: 4,
        vertical: 8,
      },
    },
  };
});

const mixedChartSeries = ref([
  {
    name: 'TEAM A',
    type: 'column',
    data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30],
  },
  {
    name: 'TEAM B',
    type: 'area',
    data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43],
  },
  {
    name: 'TEAM C',
    type: 'line',
    data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39],
  },
]);
<\/script>
`,-1),Ve={class:"panel"},We={class:"flex items-center justify-between mb-5"},Ye=e("h5",{class:"font-semibold text-lg dark:text-white"},"Basic Radar",-1),Ue=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Ie=[Ue],Ze={class:"mb-5"},qe=e("pre",null,`<!-- basic radar -->
<apexchart height="300" :options="radarChart" :series="radarChartSeries" class="bg-white dark:bg-black rounded-lg overflow-hidden"></apexchart>

<!-- script -->
<script lang="ts" setup>
import { ref, computed } from 'vue';
import apexchart from 'vue3-apexcharts';
import { useAppStore } from '@/stores/index';
const store = useAppStore();

const radarChart = computed(() => {
  const isDark = store.theme === 'dark' || store.isDarkMode ? true : false;
  return {
    chart: {
      height: 300,
      type: 'radar',
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: false,
      },
    },
    colors: ['#4361ee'],
    xaxis: {
      categories: ['January', 'February', 'March', 'April', 'May', 'June'],
    },
    plotOptions: {
      radar: {
        polygons: {
          strokeColors: isDark ? '#191e3a' : '#e0e6ed',
          connectorColors: isDark ? '#191e3a' : '#e0e6ed',
        },
      },
    },
    tooltip: {
      theme: isDark ? 'dark' : 'light',
    },
  };
});

const radarChartSeries = ref([
  {
    name: 'Series 1',
    data: [80, 50, 30, 40, 100, 20],
  },
]);
<\/script>
`,-1),He={class:"panel"},Ke={class:"flex items-center justify-between mb-5"},Qe=e("h5",{class:"font-semibold text-lg dark:text-white"},"Basic Pie",-1),et=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),tt=[et],rt={class:"mb-5"},st=e("pre",null,`<!-- basic pie -->
<apexchart height="300" :options="pieChart" :series="pieChartSeries" class="bg-white dark:bg-black rounded-lg overflow-hidden"></apexchart>

<!-- script -->
<script lang="ts" setup>
import { ref, computed } from 'vue';
import apexchart from 'vue3-apexcharts';
import { useAppStore } from '@/stores/index';
const store = useAppStore();

const pieChart = computed(() => {
  return {
    chart: {
      height: 300,
      type: 'pie',
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: false,
      },
    },
    labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
    colors: ['#4361ee', '#805dca', '#00ab55', '#e7515a', '#e2a03f'],
    responsive: [
      {
        breakpoint: 480,
        options: {
          chart: {
            width: 200,
          },
        },
      },
    ],
    stroke: {
      show: false,
    },
    legend: {
      position: 'bottom',
    },
  };
});

const pieChartSeries = ref([44, 55, 13, 43, 22]);
<\/script>
`,-1),ot={class:"panel"},at={class:"flex items-center justify-between mb-5"},it=e("h5",{class:"font-semibold text-lg dark:text-white"},"Basic Donut",-1),lt=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),nt=[lt],dt={class:"mb-5"},ct=e("pre",null,`<!-- basic donut -->
<apexchart height="300" :options="donutChart" :series="donutChartSeries" class="bg-white dark:bg-black rounded-lg overflow-hidden"></apexchart>

<!-- script -->
<script lang="ts" setup>
import { ref, computed } from 'vue';
import apexchart from 'vue3-apexcharts';
import { useAppStore } from '@/stores/index';
const store = useAppStore();

const donutChart = computed(() => {
  return {
    chart: {
      height: 300,
      type: 'donut',
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: false,
      },
    },
    stroke: {
      show: false,
    },
    labels: ['Team A', 'Team B', 'Team C'],
    colors: ['#4361ee', '#805dca', '#e2a03f'],
    responsive: [
      {
        breakpoint: 480,
        options: {
          chart: {
            width: 200,
          },
        },
      },
    ],
    legend: {
      position: 'bottom',
    },
  };
});

const donutChartSeries = ref([44, 55, 13]);
<\/script>
`,-1),ht={class:"panel"},pt={class:"flex items-center justify-between mb-5"},ut=e("h5",{class:"font-semibold text-lg dark:text-white"},"Basic Polar Area",-1),mt=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ft=[mt],kt={class:"mb-5"},bt=e("pre",null,`<!-- basic polar area -->
<apexchart height="300" :options="polarAreaChart" :series="polarAreaChartSeries" class="bg-white dark:bg-black rounded-lg overflow-hidden"></apexchart>

<!-- script -->
<script lang="ts" setup>
import { ref, computed } from 'vue';
import apexchart from 'vue3-apexcharts';
import { useAppStore } from '@/stores/index';
const store = useAppStore();

const polarAreaChart = computed(() => {
  const isDark = store.theme === 'dark' || store.isDarkMode ? true : false;
  return {
    chart: {
      height: 300,
      type: 'polarArea',
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: false,
      },
    },
    colors: ['#4361ee', '#805dca', '#00ab55', '#e7515a', '#e2a03f', '#2196f3', '#3b3f5c'],
    stroke: {
      show: false,
    },
    responsive: [
      {
        breakpoint: 480,
        options: {
          chart: {
            width: 200,
          },
        },
      },
    ],
    plotOptions: {
      polarArea: {
        rings: {
          strokeColor: isDark ? '#191e3a' : '#e0e6ed',
        },
        spokes: {
          connectorColors: isDark ? '#191e3a' : '#e0e6ed',
        },
      },
    },
    legend: {
      position: 'bottom',
    },
    fill: {
      opacity: 0.85,
    },
  };
});

const polarAreaChartSeries = ref([14, 23, 21, 17, 15, 10, 12, 17, 21]);
<\/script>
`,-1),gt={class:"panel"},wt={class:"flex items-center justify-between mb-5"},xt=e("h5",{class:"font-semibold text-lg dark:text-white"},"Radial Bar",-1),vt=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Ct=[vt],_t={class:"mb-5"},yt=e("pre",null,`<!-- radial bar -->
<apexchart height="300" :options="radialBarChart" :series="radialBarChartSeries" class="bg-white dark:bg-black rounded-lg overflow-hidden"></apexchart>

<!-- script -->
<script lang="ts" setup>
import { ref, computed } from 'vue';
import apexchart from 'vue3-apexcharts';
import { useAppStore } from '@/stores/index';
const store = useAppStore();

const radialBarChart = computed(() => {
  const isDark = store.theme === 'dark' || store.isDarkMode ? true : false;
  return {
    chart: {
      height: 300,
      type: 'radialBar',
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: false,
      },
    },
    colors: ['#4361ee', '#805dca', '#e2a03f'],
    grid: {
      borderColor: isDark ? '#191e3a' : '#e0e6ed',
    },
    plotOptions: {
      radialBar: {
        dataLabels: {
          name: {
            fontSize: '22px',
          },
          value: {
            fontSize: '16px',
          },
          total: {
            show: true,
            label: 'Total',
            formatter: function (w) {
              // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
              return 249;
            },
          },
        },
      },
    },
    labels: ['Apples', 'Oranges', 'Bananas'],
    fill: {
      opacity: 0.85,
    },
  };
});

const radialBarChartSeries = ref([44, 55, 41]);
<\/script>
`,-1),Mt={class:"panel"},St={class:"flex items-center justify-between mb-5"},Dt=e("h5",{class:"font-semibold text-lg dark:text-white"},"Bubble Chart",-1),Lt=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),At=[Lt],Bt={class:"mb-5"},Tt=e("pre",null,`<!-- bubble chart -->
<apexchart height="300" :options="bubbleChart" :series="bubbleChartSeries" class="bg-white dark:bg-black rounded-lg overflow-hidden"></apexchart>

<!-- script -->
<script lang="ts" setup>
import { ref, computed } from 'vue';
import apexchart from 'vue3-apexcharts';
import { useAppStore } from '@/stores/index';
const store = useAppStore();

const generateData = (baseval, count, yrange) => {
  var i = 0;
  var series: any = [];
  while (i < count) {
    var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;
    var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
    var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

    series.push([x, y, z]);
    baseval += 86400000;
    i++;
  }
  return series;
};

const bubbleChart = computed(() => {
  const isDark = store.theme === 'dark' || store.isDarkMode ? true : false;
  const isRtl = store.rtlClass === 'rtl' ? true : false;
  return {
    chart: {
      height: 300,
      type: 'bubble',
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: false,
      },
    },
    colors: ['#4361ee', '#00ab55'],
    dataLabels: {
      enabled: false,
    },
    xaxis: {
      tickAmount: 12,
      type: 'category',
      axisBorder: {
        color: isDark ? '#191e3a' : '#e0e6ed',
      },
    },
    yaxis: {
      max: 70,
      opposite: isRtl ? true : false,
      labels: {
        offsetX: isRtl ? -10 : 0,
      },
    },
    grid: {
      borderColor: isDark ? '#191e3a' : '#e0e6ed',
    },
    tooltip: {
      theme: isDark ? 'dark' : 'light',
    },
    stroke: {
      colors: isDark ? ['#191e3a'] : ['#e0e6ed'],
    },
    fill: {
      opacity: 0.85,
    },
  };
});

const bubbleChartSeries = ref([
  {
    name: 'Bubble1',
    data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
      min: 10,
      max: 60,
    }),
  },
  {
    name: 'Bubble2',
    data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
      min: 10,
      max: 60,
    }),
  },
]);
<\/script>
`,-1),Ot=Z({__name:"charts",setup(zt){q({title:"Charts"});const o=H(),{codeArr:n,toggleCode:d}=I(),g=(s,t,a)=>{for(var w=0,x=[];w<t;){var W=Math.floor(Math.random()*750)+1,Y=Math.floor(Math.random()*(a.max-a.min+1))+a.min,U=Math.floor(Math.random()*(75-15+1))+15;x.push([W,Y,U]),w++}return x},v=h(()=>{const s=!!(o.theme==="dark"||o.isDarkMode),t=o.rtlClass==="rtl";return{chart:{height:300,type:"line",toolbar:!1},colors:["#4361ee"],tooltip:{marker:!1,y:{formatter(a){return"$"+a}},theme:s?"dark":"light"},stroke:{width:2,curve:"smooth"},xaxis:{categories:["Jan","Feb","Mar","Apr","May","June"],axisBorder:{color:s?"#191e3a":"#e0e6ed"}},yaxis:{opposite:!!t,labels:{offsetX:t?-20:0}},grid:{borderColor:s?"#191e3a":"#e0e6ed"}}}),C=p([{name:"Sales",data:[45,55,75,25,45,110]}]),_=h(()=>{const s=!!(o.theme==="dark"||o.isDarkMode),t=o.rtlClass==="rtl";return{chart:{type:"area",height:300,zoom:{enabled:!1},toolbar:{show:!1}},colors:["#805dca"],dataLabels:{enabled:!1},stroke:{width:2,curve:"smooth"},xaxis:{axisBorder:{color:s?"#191e3a":"#e0e6ed"}},yaxis:{opposite:!!t,labels:{offsetX:t?-40:0}},labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],legend:{horizontalAlign:"left"},grid:{borderColor:s?"#191e3a":"#e0e6ed"},tooltip:{theme:s?"dark":"light"}}}),y=p([{name:"Income",data:[16800,16800,15500,17800,15500,17e3,19e3,16e3,15e3,17e3,14e3,17e3]}]),M=h(()=>{const s=!!(o.theme==="dark"||o.isDarkMode),t=o.rtlClass==="rtl";return{chart:{height:300,type:"bar",zoom:{enabled:!1},toolbar:{show:!1}},colors:["#805dca","#e7515a"],dataLabels:{enabled:!1},stroke:{show:!0,width:2,colors:["transparent"]},plotOptions:{bar:{horizontal:!1,columnWidth:"55%",endingShape:"rounded"}},grid:{borderColor:s?"#191e3a":"#e0e6ed"},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct"],axisBorder:{color:s?"#191e3a":"#e0e6ed"}},yaxis:{opposite:!!t,labels:{offsetX:t?-10:0}},tooltip:{theme:s?"dark":"light",y:{formatter:function(a){return a}}}}}),S=p([{name:"Net Profit",data:[44,55,57,56,61,58,63,60,66]},{name:"Revenue",data:[76,85,101,98,87,105,91,114,94]}]),D=h(()=>{const s=!!(o.theme==="dark"||o.isDarkMode),t=o.rtlClass==="rtl";return{chart:{height:300,type:"bar",stacked:!0,zoom:{enabled:!1},toolbar:{show:!1}},colors:["#2196f3","#3b3f5c"],responsive:[{breakpoint:480,options:{legend:{position:"bottom",offsetX:-10,offsetY:5}}}],plotOptions:{bar:{horizontal:!1}},xaxis:{type:"datetime",categories:["01/01/2011 GMT","01/02/2011 GMT","01/03/2011 GMT","01/04/2011 GMT","01/05/2011 GMT","01/06/2011 GMT"],axisBorder:{color:s?"#191e3a":"#e0e6ed"}},yaxis:{opposite:!!t,labels:{offsetX:t?-20:0}},grid:{borderColor:s?"#191e3a":"#e0e6ed"},legend:{position:"right",offsetY:40},tooltip:{theme:s?"dark":"light"},fill:{opacity:.8}}}),L=p([{name:"PRODUCT A",data:[44,55,41,67,22,43]},{name:"PRODUCT B",data:[13,23,20,8,13,27]}]),A=h(()=>{const s=!!(o.theme==="dark"||o.isDarkMode),t=o.rtlClass==="rtl";return{chart:{height:300,type:"bar",zoom:{enabled:!1},toolbar:{show:!1}},dataLabels:{enabled:!1},stroke:{show:!0,width:1},colors:["#4361ee"],xaxis:{categories:["Sun","Mon","Tue","Wed","Thur","Fri","Sat"],axisBorder:{color:s?"#191e3a":"#e0e6ed"}},yaxis:{opposite:!!t,reversed:!!t},grid:{borderColor:s?"#191e3a":"#e0e6ed"},plotOptions:{bar:{horizontal:!0}},fill:{opacity:.8}}}),B=p([{name:"Sales",data:[44,55,41,67,22,43,21,70]}]),T=h(()=>{const s=!!(o.theme==="dark"||o.isDarkMode),t=o.rtlClass==="rtl";return{chart:{height:300,zoom:{enabled:!1},toolbar:{show:!1}},colors:["#2196f3","#00ab55","#4361ee"],stroke:{width:[0,2,2],curve:"smooth"},plotOptions:{bar:{columnWidth:"50%"}},fill:{opacity:[1,.25,1]},labels:["01/01/2022","02/01/2022","03/01/2022","04/01/2022","05/01/2022","06/01/2022","07/01/2022","08/01/2022","09/01/2022","10/01/2022","11/01/2022"],markers:{size:0},xaxis:{type:"datetime",axisBorder:{color:s?"#191e3a":"#e0e6ed"}},yaxis:{title:{text:"Points"},min:0,opposite:!!t,labels:{offsetX:t?-10:0}},grid:{borderColor:s?"#191e3a":"#e0e6ed"},tooltip:{shared:!0,intersect:!1,theme:s?"dark":"light",y:{formatter:a=>typeof a<"u"?a.toFixed(0)+" points":a}},legend:{itemMargin:{horizontal:4,vertical:8}}}}),z=p([{name:"TEAM A",type:"column",data:[23,11,22,27,13,22,37,21,44,22,30]},{name:"TEAM B",type:"area",data:[44,55,41,67,22,43,21,41,56,27,43]},{name:"TEAM C",type:"line",data:[30,25,36,30,45,35,64,52,59,36,39]}]),R=h(()=>{const s=!!(o.theme==="dark"||o.isDarkMode);return{chart:{height:300,type:"radar",zoom:{enabled:!1},toolbar:{show:!1}},colors:["#4361ee"],xaxis:{categories:["January","February","March","April","May","June"]},plotOptions:{radar:{polygons:{strokeColors:s?"#191e3a":"#e0e6ed",connectorColors:s?"#191e3a":"#e0e6ed"}}},tooltip:{theme:s?"dark":"light"}}}),j=p([{name:"Series 1",data:[80,50,30,40,100,20]}]),O=h(()=>({chart:{height:300,type:"pie",zoom:{enabled:!1},toolbar:{show:!1}},labels:["Team A","Team B","Team C","Team D","Team E"],colors:["#4361ee","#805dca","#00ab55","#e7515a","#e2a03f"],responsive:[{breakpoint:480,options:{chart:{width:200}}}],stroke:{show:!1},legend:{position:"bottom"}})),J=p([44,55,13,43,22]),F=h(()=>({chart:{height:300,type:"donut",zoom:{enabled:!1},toolbar:{show:!1}},stroke:{show:!1},labels:["Team A","Team B","Team C"],colors:["#4361ee","#805dca","#e2a03f"],responsive:[{breakpoint:480,options:{chart:{width:200}}}],legend:{position:"bottom"}})),G=p([44,55,13]),$=h(()=>{const s=!!(o.theme==="dark"||o.isDarkMode);return{chart:{height:300,type:"polarArea",zoom:{enabled:!1},toolbar:{show:!1}},colors:["#4361ee","#805dca","#00ab55","#e7515a","#e2a03f","#2196f3","#3b3f5c"],stroke:{show:!1},responsive:[{breakpoint:480,options:{chart:{width:200}}}],plotOptions:{polarArea:{rings:{strokeColor:s?"#191e3a":"#e0e6ed"},spokes:{connectorColors:s?"#191e3a":"#e0e6ed"}}},legend:{position:"bottom"},fill:{opacity:.85}}}),X=p([14,23,21,17,15,10,12,17,21]),P=h(()=>{const s=!!(o.theme==="dark"||o.isDarkMode);return{chart:{height:300,type:"radialBar",zoom:{enabled:!1},toolbar:{show:!1}},colors:["#4361ee","#805dca","#e2a03f"],grid:{borderColor:s?"#191e3a":"#e0e6ed"},plotOptions:{radialBar:{dataLabels:{name:{fontSize:"22px"},value:{fontSize:"16px"},total:{show:!0,label:"Total",formatter:function(t){return 249}}}}},labels:["Apples","Oranges","Bananas"],fill:{opacity:.85}}}),E=p([44,55,41]),N=h(()=>{const s=!!(o.theme==="dark"||o.isDarkMode),t=o.rtlClass==="rtl";return{chart:{height:300,type:"bubble",zoom:{enabled:!1},toolbar:{show:!1}},colors:["#4361ee","#00ab55"],dataLabels:{enabled:!1},xaxis:{tickAmount:12,type:"category",axisBorder:{color:s?"#191e3a":"#e0e6ed"}},yaxis:{max:70,opposite:!!t,labels:{offsetX:t?-10:0}},grid:{borderColor:s?"#191e3a":"#e0e6ed"},tooltip:{theme:s?"dark":"light"},stroke:{colors:s?["#191e3a"]:["#e0e6ed"]},fill:{opacity:.85}}}),V=p([{name:"Bubble1",data:g(new Date("11 Feb 2017 GMT").getTime(),20,{min:10,max:60})},{name:"Bubble2",data:g(new Date("11 Feb 2017 GMT").getTime(),20,{min:10,max:60})}]);return(s,t)=>(i(),K("div",null,[Q,e("div",ee,[te,e("div",re,[e("div",se,[oe,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[0]||(t[0]=a=>r(d)("code1"))},ie)]),e("div",le,[u(r(m),{height:"300",options:r(v),series:C.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])]),r(n).includes("code1")?(i(),f(c,{key:0},{default:k(()=>[ne]),_:1})):b("",!0)]),e("div",de,[e("div",ce,[he,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[1]||(t[1]=a=>r(d)("code2"))},ue)]),e("div",me,[u(r(m),{height:"300",options:r(_),series:y.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])]),r(n).includes("code2")?(i(),f(c,{key:0},{default:k(()=>[fe]),_:1})):b("",!0)]),e("div",ke,[e("div",be,[ge,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[2]||(t[2]=a=>r(d)("code3"))},xe)]),e("div",ve,[u(r(m),{height:"300",options:r(M),series:S.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])]),r(n).includes("code3")?(i(),f(c,{key:0},{default:k(()=>[Ce]),_:1})):b("",!0)]),e("div",_e,[e("div",ye,[Me,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[3]||(t[3]=a=>r(d)("code4"))},De)]),e("div",Le,[u(r(m),{height:"300",options:r(D),series:L.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])]),r(n).includes("code4")?(i(),f(c,{key:0},{default:k(()=>[Ae]),_:1})):b("",!0)]),e("div",Be,[e("div",Te,[ze,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[4]||(t[4]=a=>r(d)("code5"))},je)]),e("div",Oe,[u(r(m),{height:"300",options:r(A),series:B.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])]),r(n).includes("code5")?(i(),f(c,{key:0},{default:k(()=>[Je]),_:1})):b("",!0)]),e("div",Fe,[e("div",Ge,[$e,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[5]||(t[5]=a=>r(d)("code6"))},Pe)]),e("div",Ee,[u(r(m),{height:"300",options:r(T),series:z.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])]),r(n).includes("code6")?(i(),f(c,{key:0},{default:k(()=>[Ne]),_:1})):b("",!0)]),e("div",Ve,[e("div",We,[Ye,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[6]||(t[6]=a=>r(d)("code7"))},Ie)]),e("div",Ze,[u(r(m),{height:"300",options:r(R),series:j.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])]),r(n).includes("code7")?(i(),f(c,{key:0},{default:k(()=>[qe]),_:1})):b("",!0)]),e("div",He,[e("div",Ke,[Qe,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[7]||(t[7]=a=>r(d)("code8"))},tt)]),e("div",rt,[u(r(m),{height:"300",options:r(O),series:J.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])]),r(n).includes("code8")?(i(),f(c,{key:0},{default:k(()=>[st]),_:1})):b("",!0)]),e("div",ot,[e("div",at,[it,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[8]||(t[8]=a=>r(d)("code9"))},nt)]),e("div",dt,[u(r(m),{height:"300",options:r(F),series:G.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])]),r(n).includes("code9")?(i(),f(c,{key:0},{default:k(()=>[ct]),_:1})):b("",!0)]),e("div",ht,[e("div",pt,[ut,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[9]||(t[9]=a=>r(d)("code10"))},ft)]),e("div",kt,[u(r(m),{height:"300",options:r($),series:X.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])]),r(n).includes("code10")?(i(),f(c,{key:0},{default:k(()=>[bt]),_:1})):b("",!0)]),e("div",gt,[e("div",wt,[xt,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[10]||(t[10]=a=>r(d)("code11"))},Ct)]),e("div",_t,[u(r(m),{height:"300",options:r(P),series:E.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])]),r(n).includes("code11")?(i(),f(c,{key:0},{default:k(()=>[yt]),_:1})):b("",!0)]),e("div",Mt,[e("div",St,[Dt,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[11]||(t[11]=a=>r(d)("code12"))},At)]),e("div",Bt,[u(r(m),{height:"300",options:r(N),series:V.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])]),r(n).includes("code12")?(i(),f(c,{key:0},{default:k(()=>[Tt]),_:1})):b("",!0)])])]))}});export{Ot as default};
