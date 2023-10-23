<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Dashboard</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Crypto</span>
            </li>
        </ul>
        <div class="flex flex-col xl:flex-row gap-5 relative mt-5">
            <div
                class="panel absolute xl:relative p-0 flex-none w-80 border-0 overflow-y-auto z-10 xl:block divide-y divide-[#ebedf2] dark:divide-[#191e3a] hidden"
                :class="{ '!block h-full': isShowCryptoMenu }"
            >
                <template v-for="item in coins" :key="item.id">
                    <button
                        type="button"
                        class="w-full flex items-center p-4 hover:bg-gray-100 dark:hover:bg-[#192A3A]"
                        :class="{ 'bg-gray-100 dark:bg-[#192A3A]': selectedCoinObj ? selectedCoinObj.title === item.title : false }"
                        @click="setSelectBitCoin(item)"
                    >
                        <div class="ltr:pr-4 rtl:pl-4">
                            <div class="flex items-baseline font-semibold">
                                <div class="text-md ltr:mr-1 rtl:ml-1">{{ item.title }}</div>
                                <div class="text-xs text-white-dark uppercase">{{ `(${item.alias})` }}</div>
                            </div>
                            <div class="flex items-center mt-2" :class="[item.isUp ? 'text-success' : 'text-danger']">
                                <div class="min-w-20 text-xl ltr:mr-3 rtl:ml-3">{{ `$${item.value}` }}</div>

                                <span>
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4"
                                        :class="{ 'rotate-180': item.isUp }"
                                    >
                                        <path
                                            d="M12 4L12 20M12 20L18 14M12 20L6 14"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </span>
                                <div class="font-medium text-sm">{{ `${item.perc}%` }}</div>
                            </div>
                        </div>
                        <div class="flex-1 overflow-hidden">
                            <apexchart height="45" :options="item.isUp ? profiteChartOption : lossChartOption" :series="item.series">
                                <!-- loader -->
                                <div class="min-h-[45px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                    <span
                                        class="animate-spin border-2 border-black dark:border-white !border-l-transparent rounded-full w-5 h-5 inline-flex"
                                    ></span>
                                </div>
                            </apexchart>
                        </div>
                    </button>
                </template>
            </div>

            <div
                class="bg-black/60 z-[5] w-full h-full absolute rounded-md hidden"
                :class="{ '!block xl:!hidden': isShowCryptoMenu }"
                @click="isShowCryptoMenu = !isShowCryptoMenu"
            ></div>

            <div v-if="selectedCoinObj" class="panel p-0 flex-1">
                <div class="md:flex items-center flex-wrap p-4 border-b border-[#ebedf2] dark:border-[#191e3a]">
                    <div class="flex-1 flex items-start ltr:pr-4 rtl:pl-4">
                        <button type="button" class="xl:hidden hover:text-primary block ltr:mr-5 rtl:ml-5" @click="isShowCryptoMenu = !isShowCryptoMenu">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path opacity="0.5" d="M20 12L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </button>
                        <div>
                            <div class="flex items-center">
                                <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">{{ selectedCoinObj.title }}</div>
                                <div class="font-semibold text-xs text-white-dark uppercase">
                                    {{ `(${selectedCoinObj.alias})` }}
                                </div>
                            </div>
                            <div class="flex items-center mt-2" :class="selectedCoinObj.isUp ? 'text-success' : 'text-danger'">
                                <div class="min-w-20 text-2xl ltr:mr-3 rtl:ml-3">{{ `$${selectedCoinObj.value}` }}</div>
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 mb-px"
                                    :class="{ 'rotate-180': selectedCoinObj.isUp }"
                                >
                                    <path
                                        d="M12 4L12 20M12 20L18 14M12 20L6 14"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                                <div class="font-medium text-sm mb-px">{{ `${selectedCoinObj.perc}%` }}</div>
                            </div>
                        </div>
                    </div>
                    <ul
                        class="ltr:md:ml-auto rtl:md:mr-auto grid grid-cols-2 sm:grid-cols-4 font-semibold sm:divide-x rtl:divide-x-reverse divide-[#ebedf2] dark:divide-[#253b5c] text-white-dark mt-5 sm:mt-0"
                    >
                        <li class="px-4 py-1">
                            Market Cap
                            <span class="text-lg mt-1.5 block text-black dark:text-white-light">{{ `$${selectedCoinObj.marketcap}B` }}</span>
                        </li>
                        <li class="px-4 py-1">
                            Volume
                            <span class="text-lg mt-1.5 block text-black dark:text-white-light">{{ `$${selectedCoinObj.volume}B` }} </span>
                        </li>
                        <li class="px-4 py-1">
                            Supply
                            <span class="text-lg mt-1.5 block text-black dark:text-white-light">{{ `${selectedCoinObj.supply}M` }}</span>
                        </li>
                        <li class="px-4 py-1">
                            All Time High
                            <span class="text-lg mt-1.5 block text-black dark:text-white-light">{{ `$${selectedCoinObj.highest}` }}</span>
                        </li>
                    </ul>
                </div>
                <div class="p-4 mb-5 border-b border-[#ebedf2] dark:border-[#253b5c] grid grid-rows-1 sm:grid-cols-4 gap-4">
                    <div>
                        <div class="font-semibold mb-1.5">Action</div>
                        <select class="form-select text-white-dark">
                            <option>Buy</option>
                            <option>Sell</option>
                        </select>
                    </div>
                    <div>
                        <div class="font-semibold mb-1.5">Wallet</div>
                        <select class="form-select text-white-dark">
                            <option>Bitcoin</option>
                            <option>Ethereum</option>
                            <option>Zcash</option>
                            <option>Litecoin</option>
                            <option>Binance</option>
                            <option>Solana</option>
                            <option>Tether</option>
                        </select>
                    </div>
                    <div>
                        <div class="font-semibold mb-1.5">Amount</div>
                        <div class="flex relative">
                            <input type="text" placeholder="" class="form-input ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0" />
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0">
                                    <button
                                        type="button"
                                        class="bg-[#f1f2f3] dark:bg-[#1b2e4b] !flex justify-center gap-1 items-center rounded-none px-3 py-2 font-semibold border dark:border-[#253b5c] ltr:rounded-r-md rtl:rounded-l-md"
                                    >
                                        BTC
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                                            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()">
                                            <li>
                                                <a href="javascript:;">BTC</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">ETH</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">ZEC</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">LTC</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">BNB</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">SOL</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">USDT</a>
                                            </li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary self-end">Buy</button>
                </div>
                <!-- selected chart -->
                <div class="flex-1 px-4 ">
                    <apexchart height="411" :options="selectedBitCoinChart" :series="selectedCoinObj.series" class="overflow-hidden">
                        <!-- loader -->
                        <div class="min-h-[411px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                            <span class="animate-spin border-2 border-black dark:border-white !border-l-transparent rounded-full w-5 h-5 inline-flex"></span>
                        </div>
                    </apexchart>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref, computed, onMounted } from 'vue';
    import apexchart from 'vue3-apexcharts';
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Crypto Admin' });
    const store = useAppStore();
    const isShowCryptoMenu = ref(false);
    const selectedCoinObj: any = ref(null);
    const coins = ref([
        {
            id: 1,
            title: 'Bitcoin',
            alias: 'BTC',
            value: 170.46,
            perc: 2.35,
            marketcap: 148.75,
            volume: 22.9,
            supply: 18.17,
            highest: '19,891.00',
            isUp: true,
            series: [
                {
                    data: [
                        {
                            x: new Date(1538778600000),
                            y: [6629.81, 6650.5, 6623.04, 6633.33],
                        },
                        {
                            x: new Date(1538780400000),
                            y: [6632.01, 6643.59, 6620, 6630.11],
                        },
                        {
                            x: new Date(1538782200000),
                            y: [6630.71, 6648.95, 6623.34, 6635.65],
                        },
                        {
                            x: new Date(1538784000000),
                            y: [6635.65, 6651, 6629.67, 6638.24],
                        },
                        {
                            x: new Date(1538785800000),
                            y: [6638.24, 6640, 6620, 6624.47],
                        },
                        {
                            x: new Date(1538787600000),
                            y: [6624.53, 6636.03, 6621.68, 6624.31],
                        },
                        {
                            x: new Date(1538789400000),
                            y: [6624.61, 6632.2, 6617, 6626.02],
                        },
                        {
                            x: new Date(1538791200000),
                            y: [6627, 6627.62, 6584.22, 6603.02],
                        },
                        {
                            x: new Date(1538793000000),
                            y: [6605, 6608.03, 6598.95, 6604.01],
                        },
                        {
                            x: new Date(1538794800000),
                            y: [6604.5, 6614.4, 6602.26, 6608.02],
                        },
                        {
                            x: new Date(1538796600000),
                            y: [6608.02, 6610.68, 6601.99, 6608.91],
                        },
                        {
                            x: new Date(1538798400000),
                            y: [6608.91, 6618.99, 6608.01, 6612],
                        },
                        {
                            x: new Date(1538800200000),
                            y: [6612, 6615.13, 6605.09, 6612],
                        },
                        {
                            x: new Date(1538802000000),
                            y: [6612, 6624.12, 6608.43, 6622.95],
                        },
                        {
                            x: new Date(1538803800000),
                            y: [6623.91, 6623.91, 6615, 6615.67],
                        },
                        {
                            x: new Date(1538805600000),
                            y: [6618.69, 6618.74, 6610, 6610.4],
                        },
                        {
                            x: new Date(1538807400000),
                            y: [6611, 6622.78, 6610.4, 6614.9],
                        },
                        {
                            x: new Date(1538809200000),
                            y: [6614.9, 6626.2, 6613.33, 6623.45],
                        },
                        {
                            x: new Date(1538811000000),
                            y: [6623.48, 6627, 6618.38, 6620.35],
                        },
                        {
                            x: new Date(1538812800000),
                            y: [6619.43, 6620.35, 6610.05, 6615.53],
                        },
                        {
                            x: new Date(1538814600000),
                            y: [6615.53, 6617.93, 6610, 6615.19],
                        },
                        {
                            x: new Date(1538816400000),
                            y: [6615.19, 6621.6, 6608.2, 6620],
                        },
                        {
                            x: new Date(1538818200000),
                            y: [6619.54, 6625.17, 6614.15, 6620],
                        },
                        {
                            x: new Date(1538820000000),
                            y: [6620.33, 6634.15, 6617.24, 6624.61],
                        },
                        {
                            x: new Date(1538821800000),
                            y: [6625.95, 6626, 6611.66, 6617.58],
                        },
                    ],
                },
            ],
        },
        {
            id: 2,
            title: 'Ethereum',
            alias: 'ETH',
            value: 140.67,
            perc: 1.24,
            marketcap: 130.89,
            volume: 32.0,
            supply: 23.56,
            highest: '18,568.23',
            isUp: false,
            series: [
                {
                    data: [
                        {
                            x: new Date(1538778600000),
                            y: [6624.61, 6632.2, 6617, 6626.02],
                        },
                        {
                            x: new Date(1538780400000),
                            y: [6627, 6627.62, 6584.22, 6603.02],
                        },
                        {
                            x: new Date(1538782200000),
                            y: [6605, 6608.03, 6598.95, 6604.01],
                        },
                        {
                            x: new Date(1538784000000),
                            y: [6635.65, 6651, 6629.67, 6638.24],
                        },
                        {
                            x: new Date(1538785800000),
                            y: [6638.24, 6640, 6620, 6624.47],
                        },
                        {
                            x: new Date(1538787600000),
                            y: [6612, 6615.13, 6605.09, 6612],
                        },
                        {
                            x: new Date(1538789400000),
                            y: [6612, 6624.12, 6608.43, 6622.95],
                        },
                        {
                            x: new Date(1538791200000),
                            y: [6623.91, 6623.91, 6615, 6615.67],
                        },
                        {
                            x: new Date(1538793000000),
                            y: [6618.69, 6618.74, 6610, 6610.4],
                        },
                        {
                            x: new Date(1538794800000),
                            y: [6611, 6622.78, 6610.4, 6614.9],
                        },
                        {
                            x: new Date(1538796600000),
                            y: [6600.55, 6605, 6589.14, 6593.01],
                        },
                        {
                            x: new Date(1538798400000),
                            y: [6593.15, 6605, 6592, 6603.06],
                        },
                        {
                            x: new Date(1538800200000),
                            y: [6603.07, 6604.5, 6599.09, 6603.89],
                        },
                        {
                            x: new Date(1538802000000),
                            y: [6604.44, 6604.44, 6600, 6603.5],
                        },
                        {
                            x: new Date(1538803800000),
                            y: [6603.5, 6603.99, 6597.5, 6603.86],
                        },
                        {
                            x: new Date(1538805600000),
                            y: [6635.65, 6651, 6629.67, 6638.24],
                        },
                        {
                            x: new Date(1538807400000),
                            y: [6638.24, 6640, 6620, 6624.47],
                        },
                        {
                            x: new Date(1538809200000),
                            y: [6612, 6615.13, 6605.09, 6612],
                        },
                        {
                            x: new Date(1538811000000),
                            y: [6612, 6624.12, 6608.43, 6622.95],
                        },
                    ],
                },
            ],
        },
        {
            id: 3,
            title: 'Zcash',
            alias: 'ZEC',
            value: 58.41,
            perc: 1.35,
            marketcap: 150.26,
            volume: 22.23,
            supply: 12.25,
            highest: '19,256.35',
            isUp: true,
            series: [
                {
                    data: [
                        {
                            x: new Date(1538778600000),
                            y: [6623.91, 6623.91, 6615, 6615.67],
                        },
                        {
                            x: new Date(1538780400000),
                            y: [6618.69, 6618.74, 6610, 6610.4],
                        },
                        {
                            x: new Date(1538782200000),
                            y: [6611, 6622.78, 6610.4, 6614.9],
                        },
                        {
                            x: new Date(1538784000000),
                            y: [6614.9, 6626.2, 6613.33, 6623.45],
                        },
                        {
                            x: new Date(1538785800000),
                            y: [6623.48, 6627, 6618.38, 6620.35],
                        },
                        {
                            x: new Date(1538787600000),
                            y: [6619.43, 6620.35, 6610.05, 6615.53],
                        },
                        {
                            x: new Date(1538789400000),
                            y: [6615.53, 6617.93, 6610, 6615.19],
                        },
                        {
                            x: new Date(1538791200000),
                            y: [6615.19, 6621.6, 6608.2, 6620],
                        },
                        {
                            x: new Date(1538793000000),
                            y: [6619.54, 6625.17, 6614.15, 6620],
                        },
                        {
                            x: new Date(1538794800000),
                            y: [6620.33, 6634.15, 6617.24, 6624.61],
                        },
                        {
                            x: new Date(1538796600000),
                            y: [6625.95, 6626, 6611.66, 6617.58],
                        },
                        {
                            x: new Date(1538798400000),
                            y: [6619, 6625.97, 6595.27, 6598.86],
                        },
                    ],
                },
            ],
        },
        {
            id: 4,
            title: 'Litecoin',
            alias: 'LTC',
            value: 180.36,
            perc: 2.0,
            marketcap: 150.36,
            volume: 24.25,
            supply: 15.5,
            highest: '18,056.00',
            isUp: false,
            series: [
                {
                    data: [
                        {
                            x: new Date(1538778600000),
                            y: [6598.03, 6600, 6588.73, 6595.97],
                        },
                        {
                            x: new Date(1538780400000),
                            y: [6595.97, 6602.01, 6588.17, 6602],
                        },
                        {
                            x: new Date(1538782200000),
                            y: [6602, 6607, 6596.51, 6599.95],
                        },
                        {
                            x: new Date(1538784000000),
                            y: [6600.63, 6601.21, 6590.39, 6591.02],
                        },
                        {
                            x: new Date(1538785800000),
                            y: [6591.02, 6603.08, 6591, 6591],
                        },
                        {
                            x: new Date(1538787600000),
                            y: [6591, 6601.32, 6585, 6592],
                        },
                        {
                            x: new Date(1538789400000),
                            y: [6593.13, 6596.01, 6610, 6608.34],
                        },
                        {
                            x: new Date(1538791200000),
                            y: [6612.34, 6604.76, 6582.63, 6593.86],
                        },
                        {
                            x: new Date(1538793000000),
                            y: [6593.86, 6604.28, 6586.57, 6600.01],
                        },
                        {
                            x: new Date(1538794800000),
                            y: [6601.81, 6603.21, 6592.78, 6596.25],
                        },
                        {
                            x: new Date(1538796600000),
                            y: [6596.25, 6604.2, 6590, 6602.99],
                        },
                        {
                            x: new Date(1538798400000),
                            y: [6602.99, 6606, 6584.99, 6587.81],
                        },
                        {
                            x: new Date(1538800200000),
                            y: [6587.81, 6595, 6583.27, 6591.96],
                        },
                        {
                            x: new Date(1538802000000),
                            y: [6591.97, 6596.07, 6585, 6588.39],
                        },
                        {
                            x: new Date(1538803800000),
                            y: [6587.6, 6598.21, 6587.6, 6594.27],
                        },
                        {
                            x: new Date(1538805600000),
                            y: [6596.44, 6601, 6590, 6596.55],
                        },
                    ],
                },
            ],
        },
        {
            id: 5,
            title: 'Binance',
            alias: 'BNB',
            value: 160.23,
            perc: 1.23,
            marketcap: 180.36,
            volume: 20.2,
            supply: 22.5,
            highest: '19,500.00',
            isUp: true,
            series: [
                {
                    data: [
                        {
                            x: new Date(1538778600000),
                            y: [6612.34, 6604.76, 6582.63, 6593.86],
                        },
                        {
                            x: new Date(1538780400000),
                            y: [6593.86, 6604.28, 6586.57, 6600.01],
                        },
                        {
                            x: new Date(1538782200000),
                            y: [6601.81, 6603.21, 6592.78, 6596.25],
                        },
                        {
                            x: new Date(1538784000000),
                            y: [6596.25, 6604.2, 6590, 6602.99],
                        },
                        {
                            x: new Date(1538785800000),
                            y: [6602.99, 6606, 6584.99, 6587.81],
                        },
                        {
                            x: new Date(1538787600000),
                            y: [6587.81, 6595, 6583.27, 6591.96],
                        },
                        {
                            x: new Date(1538789400000),
                            y: [6591.97, 6596.07, 6585, 6588.39],
                        },
                        {
                            x: new Date(1538791200000),
                            y: [6587.6, 6598.21, 6587.6, 6594.27],
                        },
                        {
                            x: new Date(1538793000000),
                            y: [6596.44, 6601, 6590, 6596.55],
                        },
                        {
                            x: new Date(1538794800000),
                            y: [6598.91, 6605, 6596.61, 6600.02],
                        },
                        {
                            x: new Date(1538796600000),
                            y: [6600.55, 6605, 6589.14, 6593.01],
                        },
                    ],
                },
            ],
        },
        {
            id: 6,
            title: 'Solana',
            alias: 'SOL',
            value: 150.89,
            perc: 2.0,
            marketcap: 180.45,
            volume: 23.0,
            supply: 20.22,
            highest: '18059.50',
            isUp: false,
            series: [
                {
                    data: [
                        {
                            x: new Date(1538778600000),
                            y: [6596.25, 6604.2, 6590, 6602.99],
                        },
                        {
                            x: new Date(1538780400000),
                            y: [6602.99, 6606, 6584.99, 6587.81],
                        },
                        {
                            x: new Date(1538782200000),
                            y: [6587.81, 6595, 6583.27, 6591.96],
                        },
                        {
                            x: new Date(1538784000000),
                            y: [6591.97, 6596.07, 6585, 6588.39],
                        },
                        {
                            x: new Date(1538785800000),
                            y: [6587.6, 6598.21, 6587.6, 6594.27],
                        },
                        {
                            x: new Date(1538787600000),
                            y: [6593.15, 6605, 6592, 6603.06],
                        },
                        {
                            x: new Date(1538789400000),
                            y: [6608.91, 6618.99, 6608.01, 6612],
                        },
                        {
                            x: new Date(1538789400000),
                            y: [6635.65, 6651, 6629.67, 6638.24],
                        },
                        {
                            x: new Date(1538793000000),
                            y: [6638.24, 6640, 6620, 6624.47],
                        },
                        {
                            x: new Date(1538794800000),
                            y: [6612, 6615.13, 6605.09, 6612],
                        },
                        {
                            x: new Date(1538796600000),
                            y: [6612, 6624.12, 6608.43, 6622.95],
                        },
                        {
                            x: new Date(1538798400000),
                            y: [6623.91, 6623.91, 6615, 6615.67],
                        },
                        {
                            x: new Date(1538800200000),
                            y: [6603.5, 6603.99, 6597.5, 6603.86],
                        },
                        {
                            x: new Date(1538802000000),
                            y: [6603.85, 6605, 6600, 6604.07],
                        },
                        {
                            x: new Date(1538803800000),
                            y: [6604.98, 6606, 6604.07, 6606],
                        },
                    ],
                },
            ],
        },
        {
            id: 7,
            title: 'Tether',
            alias: 'USDT',
            value: 170.84,
            perc: 1.9,
            marketcap: 185.25,
            volume: 25.25,
            supply: 20.47,
            highest: '19,800.00',
            isUp: true,
            series: [
                {
                    data: [
                        {
                            x: new Date(1538778600000),
                            y: [6635.65, 6651, 6629.67, 6638.24],
                        },
                        {
                            x: new Date(1538780400000),
                            y: [6638.24, 6640, 6620, 6624.47],
                        },
                        {
                            x: new Date(1538782200000),
                            y: [6612, 6615.13, 6605.09, 6612],
                        },
                        {
                            x: new Date(1538784000000),
                            y: [6612, 6624.12, 6608.43, 6622.95],
                        },
                        {
                            x: new Date(1538785800000),
                            y: [6623.91, 6623.91, 6615, 6615.67],
                        },
                        {
                            x: new Date(1538787600000),
                            y: [6618.69, 6618.74, 6610, 6610.4],
                        },
                        {
                            x: new Date(1538789400000),
                            y: [6611, 6622.78, 6610.4, 6614.9],
                        },
                        {
                            x: new Date(1538791200000),
                            y: [6614.9, 6626.2, 6613.33, 6623.45],
                        },
                        {
                            x: new Date(1538793000000),
                            y: [6623.48, 6627, 6618.38, 6620.35],
                        },
                        {
                            x: new Date(1538794800000),
                            y: [6619.43, 6620.35, 6610.05, 6615.53],
                        },
                        {
                            x: new Date(1538796600000),
                            y: [6638.24, 6640, 6620, 6624.47],
                        },
                        {
                            x: new Date(1538798400000),
                            y: [6624.53, 6636.03, 6621.68, 6624.31],
                        },
                        {
                            x: new Date(1538800200000),
                            y: [6624.61, 6632.2, 6617, 6626.02],
                        },
                        {
                            x: new Date(1538802000000),
                            y: [6627, 6627.62, 6584.22, 6603.02],
                        },
                        {
                            x: new Date(1538803800000),
                            y: [6615.53, 6617.93, 6610, 6615.19],
                        },
                    ],
                },
            ],
        },
    ]);

    const profiteChartOption = computed(() => {
        return {
            chart: {
                height: 45,
                width: 120,
                type: 'line',
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                width: 2,
            },
            markers: {
                size: 0,
            },
            colors: ['#00ab55'],
            grid: {
                padding: {
                    top: 0,
                    bottom: 0,
                    left: 0,
                },
            },
            tooltip: {
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: (val: any) => {
                            return '';
                        },
                    },
                },
            },
            responsive: [
                {
                    breakPoint: 576,
                    options: {
                        chart: {
                            height: 95,
                        },
                        grid: {
                            padding: {
                                top: 45,
                                bottom: 0,
                                left: 0,
                            },
                        },
                    },
                },
            ],
        };
    });

    const lossChartOption = computed(() => {
        return {
            chart: {
                height: 45,
                width: 120,
                type: 'line',
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                width: 2,
            },
            markers: {
                size: 0,
            },
            colors: ['#e7515a'],
            grid: {
                padding: {
                    top: 0,
                    bottom: 0,
                    left: 0,
                },
            },
            tooltip: {
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: (val: any) => {
                            return '';
                        },
                    },
                },
            },
            responsive: [
                {
                    breakPoint: 576,
                    options: {
                        chart: {
                            height: 95,
                        },
                        grid: {
                            padding: {
                                top: 45,
                                bottom: 0,
                                left: 0,
                            },
                        },
                    },
                },
            ],
        };
    });

    const selectedBitCoinChart = computed(() => {
        const isDark = store.theme === 'dark' || store.isDarkMode ? true : false;
        const isRtl = store.rtlClass === 'rtl' ? true : false;
        return {
            chart: {
                height: 411,
                type: 'line',
                zoom: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            stroke: {
                width: 2,
            },
            markers: {
                size: 0,
            },
            colors: ['#4361ee'],
            grid: {
                padding: {
                    top: 0,
                    bottom: 0,
                    left: 0,
                },
                borderColor: isDark ? '#191e3a' : '#e0e6ed',
            },
            tooltip: {
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: () => {
                            return '';
                        },
                    },
                },
            },
            xaxis: {
                type: 'datetime',
                labels: {
                    format: 'HH:mm',
                },

                axisBorder: {
                    color: isDark ? '#191e3a' : '#e0e6ed',
                },
            },
            yaxis: {
                type: 'currency',
                opposite: isRtl ? true : false,
                labels: {
                    offsetX: isRtl ? -40 : 0,
                },
            },
            responsive: [
                {
                    breakPoint: 576,
                    options: {
                        chart: {
                            height: 95,
                        },
                        grid: {
                            padding: {
                                top: 45,
                                bottom: 0,
                                left: 0,
                            },
                        },
                    },
                },
            ],
        };
    });

    onMounted(() => {
        selectedCoinObj.value = coins.value[0];
    });

    const setSelectBitCoin = (item: any) => {
        selectedCoinObj.value = item;
        isShowCryptoMenu.value = false;
    };
</script>
