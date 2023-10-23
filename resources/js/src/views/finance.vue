<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Dashboard</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Finance</span>
            </li>
        </ul>
        <div class="pt-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-6 text-white">
                <!-- Users Visit -->
                <div class="panel bg-gradient-to-r from-cyan-500 to-cyan-400">
                    <div class="flex justify-between">
                        <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Users Visit</div>
                        <div class="dropdown">
                            <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                <button type="button">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 hover:opacity-80 opacity-70"
                                    >
                                        <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                        <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                        <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                </button>
                                <template #content="{ close }">
                                    <ul @click="close()" class="text-black dark:text-white-dark">
                                        <li>
                                            <a href="javascript:;">View Report</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Edit Report</a>
                                        </li>
                                    </ul>
                                </template>
                            </Popper>
                        </div>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">$170.46</div>
                        <div class="badge bg-white/30">+ 2.35%</div>
                    </div>
                    <div class="flex items-center font-semibold mt-5">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                            <path
                                opacity="0.5"
                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                            ></path>
                            <path
                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                            ></path>
                        </svg>
                        Last Week 44,700
                    </div>
                </div>

                <!-- Sessions -->
                <div class="panel bg-gradient-to-r from-violet-500 to-violet-400">
                    <div class="flex justify-between">
                        <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Sessions</div>
                        <div class="dropdown">
                            <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                <button type="button">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 hover:opacity-80 opacity-70"
                                    >
                                        <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                        <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                        <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                </button>
                                <template #content="{ close }">
                                    <ul @click="close()" class="text-black dark:text-white-dark">
                                        <li>
                                            <a href="javascript:;">View Report</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Edit Report</a>
                                        </li>
                                    </ul>
                                </template>
                            </Popper>
                        </div>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">74,137</div>
                        <div class="badge bg-white/30">- 2.35%</div>
                    </div>
                    <div class="flex items-center font-semibold mt-5">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                            <path
                                opacity="0.5"
                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                            ></path>
                            <path
                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                            ></path>
                        </svg>
                        Last Week 84,709
                    </div>
                </div>

                <!-- Time On-Site -->
                <div class="panel bg-gradient-to-r from-blue-500 to-blue-400">
                    <div class="flex justify-between">
                        <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Time On-Site</div>
                        <div class="dropdown">
                            <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                <button type="button">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 hover:opacity-80 opacity-70"
                                    >
                                        <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                        <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                        <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                </button>
                                <template #content="{ close }">
                                    <ul @click="close()" class="text-black dark:text-white-dark">
                                        <li>
                                            <a href="javascript:;">View Report</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Edit Report</a>
                                        </li>
                                    </ul>
                                </template>
                            </Popper>
                        </div>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">38,085</div>
                        <div class="badge bg-white/30">+ 1.35%</div>
                    </div>
                    <div class="flex items-center font-semibold mt-5">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                            <path
                                opacity="0.5"
                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                            ></path>
                            <path
                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                            ></path>
                        </svg>
                        Last Week 37,894
                    </div>
                </div>

                <!-- Bounce Rate -->
                <div class="panel bg-gradient-to-r from-fuchsia-500 to-fuchsia-400">
                    <div class="flex justify-between">
                        <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Bounce Rate</div>
                        <div class="dropdown">
                            <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                <button type="button">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 hover:opacity-80 opacity-70"
                                    >
                                        <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                        <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                        <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                </button>
                                <template #content="{ close }">
                                    <ul @click="close()" class="text-black dark:text-white-dark">
                                        <li>
                                            <a href="javascript:;">View Report</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Edit Report</a>
                                        </li>
                                    </ul>
                                </template>
                            </Popper>
                        </div>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">49.10%</div>
                        <div class="badge bg-white/30">- 0.35%</div>
                    </div>
                    <div class="flex items-center font-semibold mt-5">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                            <path
                                opacity="0.5"
                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                            ></path>
                            <path
                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                            ></path>
                        </svg>
                        Last Week 50.01%
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
                <!-- Favorites -->
                <div>
                    <div class="flex items-center mb-5 font-bold">
                        <span class="text-lg">Favorites</span>
                        <a href="javascript:;" class="ltr:ml-auto rtl:mr-auto text-primary hover:text-black dark:hover:text-white-dark"> See All </a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:mb-5">
                        <!-- Bitcoin -->
                        <div class="panel">
                            <div class="flex items-center font-semibold mb-5">
                                <div class=" shrink-0 w-10 h-10 rounded-full grid place-content-center">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xml:space="preserve"
                                        width="100%"
                                        height="100%"
                                        version="1.1"
                                        shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision"
                                        image-rendering="optimizeQuality"
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        viewBox="0 0 4091.27 4091.73"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:xodm="http://www.corel.com/coreldraw/odm/2003"
                                    >
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer" />
                                            <g id="_1421344023328">
                                                <path
                                                    fill="#F7931A"
                                                    fill-rule="nonzero"
                                                    d="M4030.06 2540.77c-273.24,1096.01 -1383.32,1763.02 -2479.46,1489.71 -1095.68,-273.24 -1762.69,-1383.39 -1489.33,-2479.31 273.12,-1096.13 1383.2,-1763.19 2479,-1489.95 1096.06,273.24 1763.03,1383.51 1489.76,2479.57l0.02 -0.02z"
                                                />
                                                <path
                                                    fill="white"
                                                    fill-rule="nonzero"
                                                    d="M2947.77 1754.38c40.72,-272.26 -166.56,-418.61 -450,-516.24l91.95 -368.8 -224.5 -55.94 -89.51 359.09c-59.02,-14.72 -119.63,-28.59 -179.87,-42.34l90.16 -361.46 -224.36 -55.94 -92 368.68c-48.84,-11.12 -96.81,-22.11 -143.35,-33.69l0.26 -1.16 -309.59 -77.31 -59.72 239.78c0,0 166.56,38.18 163.05,40.53 90.91,22.69 107.35,82.87 104.62,130.57l-104.74 420.15c6.26,1.59 14.38,3.89 23.34,7.49 -7.49,-1.86 -15.46,-3.89 -23.73,-5.87l-146.81 588.57c-11.11,27.62 -39.31,69.07 -102.87,53.33 2.25,3.26 -163.17,-40.72 -163.17,-40.72l-111.46 256.98 292.15 72.83c54.35,13.63 107.61,27.89 160.06,41.3l-92.9 373.03 224.24 55.94 92 -369.07c61.26,16.63 120.71,31.97 178.91,46.43l-91.69 367.33 224.51 55.94 92.89 -372.33c382.82,72.45 670.67,43.24 791.83,-303.02 97.63,-278.78 -4.86,-439.58 -206.26,-544.44 146.69,-33.83 257.18,-130.31 286.64,-329.61l-0.07 -0.05zm-512.93 719.26c-69.38,278.78 -538.76,128.08 -690.94,90.29l123.28 -494.2c152.17,37.99 640.17,113.17 567.67,403.91zm69.43 -723.3c-63.29,253.58 -453.96,124.75 -580.69,93.16l111.77 -448.21c126.73,31.59 534.85,90.55 468.94,355.05l-0.02 0z"
                                                />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="ltr:ml-2 rtl:mr-2">
                                    <h6 class="text-dark dark:text-white-light">BTC</h6>
                                    <p class="text-white-dark text-xs">Bitcoin</p>
                                </div>
                            </div>
                            <div class="mb-5 overflow-hidden">
                                <apexchart height="45" :options="bitcoin" :series="bitcoinSeries">
                                    <!-- loader -->
                                    <div class="min-h-[45px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                        <span
                                            class="animate-spin border-2 border-black dark:border-white !border-l-transparent rounded-full w-5 h-5 inline-flex"
                                        ></span>
                                    </div>
                                </apexchart>
                            </div>
                            <div class="flex justify-between items-center font-bold text-base">
                                $20,000 <span class="text-success font-normal text-sm">+0.25%</span>
                            </div>
                        </div>

                        <!-- Ethereum -->
                        <div class="panel">
                            <div class="flex items-center font-semibold mb-5">
                                <div class="shrink-0 w-10 h-10 bg-warning rounded-full grid place-content-center p-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xml:space="preserve"
                                        width="100%"
                                        height="100%"
                                        version="1.1"
                                        shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision"
                                        image-rendering="optimizeQuality"
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        viewBox="0 0 784.37 1277.39"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:xodm="http://www.corel.com/coreldraw/odm/2003"
                                    >
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer" />
                                            <g id="_1421394342400">
                                                <g>
                                                    <polygon
                                                        fill="#343434"
                                                        fill-rule="nonzero"
                                                        points="392.07,0 383.5,29.11 383.5,873.74 392.07,882.29 784.13,650.54 "
                                                    />
                                                    <polygon fill="#8C8C8C" fill-rule="nonzero" points="392.07,0 -0,650.54 392.07,882.29 392.07,472.33 " />
                                                    <polygon
                                                        fill="#3C3C3B"
                                                        fill-rule="nonzero"
                                                        points="392.07,956.52 387.24,962.41 387.24,1263.28 392.07,1277.38 784.37,724.89 "
                                                    />
                                                    <polygon fill="#8C8C8C" fill-rule="nonzero" points="392.07,1277.38 392.07,956.52 -0,724.89 " />
                                                    <polygon fill="#141414" fill-rule="nonzero" points="392.07,882.29 784.13,650.54 392.07,472.33 " />
                                                    <polygon fill="#393939" fill-rule="nonzero" points="0,650.54 392.07,882.29 392.07,472.33 " />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="ltr:ml-2 rtl:mr-2">
                                    <h6 class="text-dark dark:text-white-light">ETH</h6>
                                    <p class="text-white-dark text-xs">Ethereum</p>
                                </div>
                            </div>
                            <div class="mb-5 overflow-hidden">
                                <apexchart height="45" :options="ethereum" :series="ethereumSeries">
                                    <!-- loader -->
                                    <div class="min-h-[45px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                        <span
                                            class="animate-spin border-2 border-black dark:border-white !border-l-transparent rounded-full w-5 h-5 inline-flex"
                                        ></span>
                                    </div>
                                </apexchart>
                            </div>
                            <div class="flex justify-between items-center font-bold text-base">
                                $21,000 <span class="text-danger font-normal text-sm">-1.25%</span>
                            </div>
                        </div>

                        <!-- Litecoin -->
                        <div class="panel">
                            <div class="flex items-center font-semibold mb-5">
                                <div class="shrink-0 w-10 h-10 rounded-full grid place-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0.847 0.876 329.254 329.256">
                                        <title>Litecoin</title>
                                        <path
                                            d="M330.102 165.503c0 90.922-73.705 164.629-164.626 164.629C74.554 330.132.848 256.425.848 165.503.848 74.582 74.554.876 165.476.876c90.92 0 164.626 73.706 164.626 164.627"
                                            fill="#345d9d"
                                        />
                                        <path
                                            d="M295.15 165.505c0 71.613-58.057 129.675-129.674 129.675-71.616 0-129.677-58.062-129.677-129.675 0-71.619 58.061-129.677 129.677-129.677 71.618 0 129.674 58.057 129.674 129.677"
                                            fill="#345d9d"
                                        />
                                        <path
                                            d="M155.854 209.482l10.693-40.264 25.316-9.249 6.297-23.663-.215-.587-24.92 9.104 17.955-67.608h-50.921l-23.481 88.23-19.605 7.162-6.478 24.395 19.59-7.156-13.839 51.998h135.521l8.688-32.362h-84.601"
                                            fill="#fff"
                                        />
                                    </svg>
                                </div>
                                <div class="ltr:ml-2 rtl:mr-2">
                                    <h6 class="text-dark dark:text-white-light">LTC</h6>
                                    <p class="text-white-dark text-xs">Litecoin</p>
                                </div>
                            </div>
                            <div class="mb-5 overflow-hidden">
                                <apexchart height="45" :options="litecoin" :series="litecoinSeries">
                                    <!-- loader -->
                                    <div class="min-h-[45px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                        <span
                                            class="animate-spin border-2 border-black dark:border-white !border-l-transparent rounded-full w-5 h-5 inline-flex"
                                        ></span>
                                    </div>
                                </apexchart>
                            </div>
                            <div class="flex justify-between items-center font-bold text-base">
                                $11,657 <span class="text-success font-normal text-sm">+0.25%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Live Prices -->
                <div>
                    <div class="flex items-center mb-5 font-bold">
                        <span class="text-lg">Live Prices</span>
                        <a href="javascript:;" class="ltr:ml-auto rtl:mr-auto text-primary hover:text-black dark:hover:text-white-dark"> See All </a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-6">
                        <!-- Binance -->
                        <div class="panel">
                            <div class="flex items-center font-semibold mb-5">
                                <div class="shrink-0 w-10 h-10 rounded-full grid place-content-center">
                                    <svg width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Icon">
                                            <circle cx="512" cy="512" r="512" style="fill: #f3ba2f" />
                                            <path class="st1 fill-white" d="M404.9 468 512 360.9l107.1 107.2 62.3-62.3L512 236.3 342.6 405.7z" />
                                            <path transform="rotate(-45.001 298.629 511.998)" class="st1 fill-white" d="M254.6 467.9h88.1V556h-88.1z" />
                                            <path class="st1 fill-white" d="M404.9 556 512 663.1l107.1-107.2 62.4 62.3h-.1L512 787.7 342.6 618.3l-.1-.1z" />
                                            <path transform="rotate(-45.001 725.364 512.032)" class="st1 fill-white" d="M681.3 468h88.1v88.1h-88.1z" />
                                            <path class="st1 fill-white" d="M575.2 512 512 448.7l-46.7 46.8-5.4 5.3-11.1 11.1-.1.1.1.1 63.2 63.2 63.2-63.3z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="ltr:ml-2 rtl:mr-2">
                                    <h6 class="text-dark dark:text-white-light">BNB</h6>
                                    <p class="text-white-dark text-xs">Binance</p>
                                </div>
                            </div>
                            <div class="mb-5 overflow-hidden">
                                <apexchart height="45" :options="binance" :series="binanceSeries">
                                    <!-- loader -->
                                    <div class="min-h-[45px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                        <span
                                            class="animate-spin border-2 border-black dark:border-white !border-l-transparent rounded-full w-5 h-5 inline-flex"
                                        ></span>
                                    </div>
                                </apexchart>
                            </div>
                            <div class="flex justify-between items-center font-bold text-base">
                                $21,000 <span class="text-danger font-normal text-sm">-1.25%</span>
                            </div>
                        </div>

                        <!-- Tether -->
                        <div class="panel">
                            <div class="flex items-center font-semibold mb-5">
                                <div class="shrink-0 w-10 h-10 rounded-full grid place-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 2000 2000">
                                        <path
                                            d="M1000,0c552.26,0,1000,447.74,1000,1000S1552.24,2000,1000,2000,0,1552.38,0,1000,447.68,0,1000,0"
                                            fill="#53ae94"
                                        />
                                        <path
                                            d="M1123.42,866.76V718H1463.6V491.34H537.28V718H877.5V866.64C601,879.34,393.1,934.1,393.1,999.7s208,120.36,484.4,133.14v476.5h246V1132.8c276-12.74,483.48-67.46,483.48-133s-207.48-120.26-483.48-133m0,225.64v-0.12c-6.94.44-42.6,2.58-122,2.58-63.48,0-108.14-1.8-123.88-2.62v0.2C633.34,1081.66,451,1039.12,451,988.22S633.36,894.84,877.62,884V1050.1c16,1.1,61.76,3.8,124.92,3.8,75.86,0,114-3.16,121-3.8V884c243.8,10.86,425.72,53.44,425.72,104.16s-182,93.32-425.72,104.18"
                                            fill="#fff"
                                        />
                                    </svg>
                                </div>
                                <div class="ltr:ml-2 rtl:mr-2">
                                    <h6 class="text-dark dark:text-white-light">USDT</h6>
                                    <p class="text-white-dark text-xs">Tether</p>
                                </div>
                            </div>
                            <div class="mb-5 overflow-hidden">
                                <apexchart height="45" :options="tether" :series="tetherSeries">
                                    <!-- loader -->
                                    <div class="min-h-[45px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                        <span
                                            class="animate-spin border-2 border-black dark:border-white !border-l-transparent rounded-full w-5 h-5 inline-flex"
                                        ></span>
                                    </div>
                                </apexchart>
                            </div>
                            <div class="flex justify-between items-center font-bold text-base">
                                $20,000 <span class="text-success font-normal text-sm">+0.25%</span>
                            </div>
                        </div>

                        <!-- Solana -->
                        <div class="panel">
                            <div class="flex items-center font-semibold mb-5">
                                <div class="shrink-0 w-10 h-10 bg-warning rounded-full p-2 grid place-content-center">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="100%"
                                        height="100%"
                                        viewBox="0 0 508.07 398.17"
                                    >
                                        <defs>
                                            <linearGradient
                                                id="linear-gradient"
                                                x1="463"
                                                y1="205.16"
                                                x2="182.39"
                                                y2="742.62"
                                                gradientTransform="translate(0 -198)"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop offset="0" stop-color="#00ffa3" />
                                                <stop offset="1" stop-color="#dc1fff" />
                                            </linearGradient>
                                            <linearGradient
                                                id="linear-gradient-2"
                                                x1="340.31"
                                                y1="141.1"
                                                x2="59.71"
                                                y2="678.57"
                                                xlink:href="#linear-gradient"
                                            />
                                            <linearGradient
                                                id="linear-gradient-3"
                                                x1="401.26"
                                                y1="172.92"
                                                x2="120.66"
                                                y2="710.39"
                                                xlink:href="#linear-gradient"
                                            />
                                        </defs>
                                        <path
                                            class="cls-1 fill-[url(#linear-gradient)]"
                                            d="M84.53,358.89A16.63,16.63,0,0,1,96.28,354H501.73a8.3,8.3,0,0,1,5.87,14.18l-80.09,80.09a16.61,16.61,0,0,1-11.75,4.86H10.31A8.31,8.31,0,0,1,4.43,439Z"
                                            transform="translate(-1.98 -55)"
                                        />
                                        <path
                                            class="cls-2 fill-[url(#linear-gradient)]"
                                            d="M84.53,59.85A17.08,17.08,0,0,1,96.28,55H501.73a8.3,8.3,0,0,1,5.87,14.18l-80.09,80.09a16.61,16.61,0,0,1-11.75,4.86H10.31A8.31,8.31,0,0,1,4.43,140Z"
                                            transform="translate(-1.98 -55)"
                                        />
                                        <path
                                            class="cls-3 fill-[url(#linear-gradient)]"
                                            d="M427.51,208.42a16.61,16.61,0,0,0-11.75-4.86H10.31a8.31,8.31,0,0,0-5.88,14.18l80.1,80.09a16.6,16.6,0,0,0,11.75,4.86H501.73a8.3,8.3,0,0,0,5.87-14.18Z"
                                            transform="translate(-1.98 -55)"
                                        />
                                    </svg>
                                </div>
                                <div class="ltr:ml-2 rtl:mr-2">
                                    <h6 class="text-dark dark:text-white-light">SOL</h6>
                                    <p class="text-white-dark text-xs">Solana</p>
                                </div>
                            </div>
                            <div class="mb-5 overflow-hidden">
                                <apexchart height="45" :options="solana" :series="solanaSeries">
                                    <!-- loader -->
                                    <div class="min-h-[45px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                        <span
                                            class="animate-spin border-2 border-black dark:border-white !border-l-transparent rounded-full w-5 h-5 inline-flex"
                                        ></span>
                                    </div>
                                </apexchart>
                            </div>
                            <div class="flex justify-between items-center font-bold text-base">
                                $21,000 <span class="text-danger font-normal text-sm">-1.25%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
                <div class="grid gap-6 xl:grid-flow-row">
                    <!-- Previous Statement -->
                    <div class="panel overflow-hidden">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-lg font-bold">Previous Statement</div>
                                <div class="text-success">Paid on June 27, 2022</div>
                            </div>
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                    <button type="button">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 hover:opacity-80 opacity-70"
                                        >
                                            <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                            <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                            <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()">
                                            <li>
                                                <a href="javascript:;">View Report</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Edit Report</a>
                                            </li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                        </div>
                        <div class="relative mt-10">
                            <div class="absolute -bottom-12 ltr:-right-12 rtl:-left-12 w-24 h-24">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="text-success opacity-20 w-full h-full"
                                >
                                    <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                    <path
                                        d="M8.5 12.5L10.5 14.5L15.5 9.5"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                                <div>
                                    <div class="text-primary">Card Limit</div>
                                    <div class="mt-2 font-semibold text-2xl">$50,000.00</div>
                                </div>
                                <div>
                                    <div class="text-primary">Spent</div>
                                    <div class="mt-2 font-semibold text-2xl">$15,000.00</div>
                                </div>
                                <div>
                                    <div class="text-primary">Minimum</div>
                                    <div class="mt-2 font-semibold text-2xl">$2,500.00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Current Statement -->
                    <div class="panel overflow-hidden">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-lg font-bold">Current Statement</div>
                                <div class="text-danger">Must be paid before July 27, 2022</div>
                            </div>
                            <div class="dropdown">
                                <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                                    <button type="button">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 hover:opacity-80 opacity-70"
                                        >
                                            <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                            <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                            <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                        </svg>
                                    </button>
                                    <template #content="{ close }">
                                        <ul @click="close()">
                                            <li>
                                                <a href="javascript:;">View Report</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Edit Report</a>
                                            </li>
                                        </ul>
                                    </template>
                                </Popper>
                            </div>
                        </div>
                        <div class="relative mt-10">
                            <div class="absolute -bottom-12 ltr:-right-12 rtl:-left-12 w-24 h-24">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="text-danger opacity-20 w-24 h-full"
                                >
                                    <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                    <path d="M12 7V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <circle cx="12" cy="16" r="1" fill="currentColor" />
                                </svg>
                            </div>

                            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                                <div>
                                    <div class="text-primary">Card Limit</div>
                                    <div class="mt-2 font-semibold text-2xl">$50,000.00</div>
                                </div>
                                <div>
                                    <div class="text-primary">Spent</div>
                                    <div class="mt-2 font-semibold text-2xl">$30,500.00</div>
                                </div>
                                <div>
                                    <div class="text-primary">Minimum</div>
                                    <div class="mt-2 font-semibold text-2xl">$8,000.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Transactions -->
                <div class="panel">
                    <div class="mb-5 text-lg font-bold">Recent Transactions</div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="ltr:rounded-l-md rtl:rounded-r-md">ID</th>
                                    <th>DATE</th>
                                    <th>NAME</th>
                                    <th>AMOUNT</th>
                                    <th class="text-center ltr:rounded-r-md rtl:rounded-l-md">STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-semibold">#01</td>
                                    <td class="whitespace-nowrap">Oct 08, 2021</td>
                                    <td class="whitespace-nowrap">Eric Page</td>
                                    <td>$1,358.75</td>
                                    <td class="text-center">
                                        <span class="badge bg-success/20 text-success rounded-full hover:top-0">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">#02</td>
                                    <td class="whitespace-nowrap">Dec 18, 2021</td>
                                    <td class="whitespace-nowrap">Nita Parr</td>
                                    <td>-$1,042.82</td>
                                    <td class="text-center">
                                        <span class="badge bg-info/20 text-info rounded-full hover:top-0">In Process</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">#03</td>
                                    <td class="whitespace-nowrap">Dec 25, 2021</td>
                                    <td class="whitespace-nowrap">Carl Bell</td>
                                    <td>$1,828.16</td>
                                    <td class="text-center">
                                        <span class="badge bg-danger/20 text-danger rounded-full hover:top-0">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">#04</td>
                                    <td class="whitespace-nowrap">Nov 29, 2021</td>
                                    <td class="whitespace-nowrap">Dan Hart</td>
                                    <td>$1,647.55</td>
                                    <td class="text-center">
                                        <span class="badge bg-success/20 text-success rounded-full hover:top-0">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">#05</td>
                                    <td class="whitespace-nowrap">Nov 24, 2021</td>
                                    <td class="whitespace-nowrap">Jake Ross</td>
                                    <td>$927.43</td>
                                    <td class="text-center">
                                        <span class="badge bg-success/20 text-success rounded-full hover:top-0">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">#06</td>
                                    <td class="whitespace-nowrap">Jan 26, 2022</td>
                                    <td class="whitespace-nowrap">Anna Bell</td>
                                    <td>$250.00</td>
                                    <td class="text-center">
                                        <span class="badge bg-info/20 text-info rounded-full hover:top-0">In Process</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref, computed } from 'vue';
    import apexchart from 'vue3-apexcharts';
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Finance Admin' });
    const store = useAppStore();

    // bitcoin
    const bitcoin = computed(() => {
        return {
            chart: {
                height: 45,
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

    const bitcoinSeries = ref([
        {
            data: [21, 9, 36, 12, 44, 25, 59, 41, 25, 66],
        },
    ]);

    // ethereum
    const ethereum = computed(() => {
        return {
            chart: {
                height: 45,
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

    const ethereumSeries = ref([
        {
            data: [44, 25, 59, 41, 66, 25, 21, 9, 36, 12],
        },
    ]);

    // litecoin
    const litecoin = computed(() => {
        return {
            chart: {
                height: 45,
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

    const litecoinSeries = ref([
        {
            data: [9, 21, 36, 12, 66, 25, 44, 25, 41, 59],
        },
    ]);

    // binance
    const binance = computed(() => {
        return {
            chart: {
                height: 45,
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

    const binanceSeries = ref([
        {
            data: [25, 44, 25, 59, 41, 21, 36, 12, 19, 9],
        },
    ]);

    // tether
    const tether = computed(() => {
        return {
            chart: {
                height: 45,
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

    const tetherSeries = ref([
        {
            data: [21, 59, 41, 44, 25, 66, 9, 36, 25, 12],
        },
    ]);

    // solana
    const solana = computed(() => {
        return {
            chart: {
                height: 45,
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

    const solanaSeries = ref([
        {
            data: [21, -9, 36, -12, 44, 25, 59, -41, 66, -25],
        },
    ]);
</script>
