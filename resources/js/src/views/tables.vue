<template>
    <div>
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
            <!-- Basic -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Simple Table</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code1')">
                        <span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Code
                        </span>
                    </a>
                </div>
                <div class="mb-5">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Sale</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="data in tableData" :key="data.id">
                                    <tr>
                                        <td class="whitespace-nowrap">{{ data.name }}</td>
                                        <td>{{ data.date }}</td>
                                        <td>{{ data.sale }}</td>
                                        <td
                                            class="text-center whitespace-nowrap"
                                            :class="{
                                                'text-success': data.status === 'Complete',
                                                'text-secondary': data.status === 'Pending',
                                                'text-info': data.status === 'In Progress',
                                                'text-danger': data.status === 'Canceled',
                                            }"
                                        >
                                            {{ data.status }}
                                        </td>
                                        <td class="text-center">
                                            <button type="button" v-tippy:delete>
                                                <svg
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-5 h-5 m-auto"
                                                >
                                                    <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path
                                                        d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                    <path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path
                                                        opacity="0.5"
                                                        d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                </svg>
                                            </button>
                                            <tippy target="delete">Delete</tippy>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- basic table --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Date&lt;/th&gt;
        &lt;th&gt;Sale&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Status&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Action&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;template v-for=&quot;data in tableData&quot; :key=&quot;data.id&quot;&gt;
        &lt;tr&gt;
          &lt;td class=&quot;whitespace-nowrap&quot;&gt;&#123;&#123; data.name &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.date &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.sale &#125;&#125;&lt;/td&gt;
          &lt;td
            class=&quot;text-center whitespace-nowrap&quot;
            :class=&quot;{
              'text-success': data.status === 'Complete',
              'text-secondary': data.status === 'Pending',
              'text-info': data.status === 'In Progress',
              'text-danger': data.status === 'Canceled',
            }&quot;
          &gt;
            &#123;&#123; data.status &#125;&#125;
          &lt;/td&gt;
          &lt;td class=&quot;text-center&quot;&gt;
            &lt;button type=&quot;button&quot; v-tippy:delete&gt;
              &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
            &lt;tippy target=&quot;delete&quot;&gt;Delete&lt;/tippy&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/template&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
const tableData = ref([
  {
    id: 1,
    name: 'John Doe',
    email: 'johndoe@yahoo.com',
    date: '10/08/2020',
    sale: 120,
    status: 'Complete',
    register: '5 min ago',
    progress: '40%',
    position: 'Developer',
    office: 'London',
  },
  .....
]);
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- Hover Table -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Hover Table</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code2')"
                        ><span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Code</span
                        ></a
                    >
                </div>
                <div class="mb-5">
                    <div class="table-responsive">
                        <table class="table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Sale</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="data in tableData" :key="data.id">
                                    <tr>
                                        <td class="whitespace-nowrap">{{ data.name }}</td>
                                        <td>{{ data.date }}</td>
                                        <td>{{ data.sale }}</td>
                                        <td
                                            class="text-center whitespace-nowrap"
                                            :class="{
                                                'text-success': data.status === 'Complete',
                                                'text-secondary': data.status === 'Pending',
                                                'text-info': data.status === 'In Progress',
                                                'text-danger': data.status === 'Canceled',
                                            }"
                                        >
                                            {{ data.status }}
                                        </td>
                                        <td class="text-center">
                                            <button type="button" v-tippy:delete>
                                                <svg
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-5 h-5 m-auto"
                                                >
                                                    <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path
                                                        d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                    <path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path
                                                        opacity="0.5"
                                                        d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                </svg>
                                            </button>
                                            <tippy target="delete">Delete</tippy>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- hover table --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table-hover&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Date&lt;/th&gt;
        &lt;th&gt;Sale&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Status&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Action&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;template v-for=&quot;data in tableData&quot; :key=&quot;data.id&quot;&gt;
        &lt;tr&gt;
          &lt;td class=&quot;whitespace-nowrap&quot;&gt;&#123;&#123; data.name &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.date &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.sale &#125;&#125;&lt;/td&gt;
          &lt;td
            class=&quot;text-center whitespace-nowrap&quot;
            :class=&quot;{
              'text-success': data.status === 'Complete',
              'text-secondary': data.status === 'Pending',
              'text-info': data.status === 'In Progress',
              'text-danger': data.status === 'Canceled',
            }&quot;
          &gt;
            &#123;&#123; data.status &#125;&#125;
          &lt;/td&gt;
          &lt;td class=&quot;text-center&quot;&gt;
            &lt;button type=&quot;button&quot; v-tippy:delete&gt;
              &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
            &lt;tippy target=&quot;delete&quot;&gt;Delete&lt;/tippy&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/template&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
const tableData = ref([
  {
    id: 1,
    name: 'John Doe',
    email: 'johndoe@yahoo.com',
    date: '10/08/2020',
    sale: 120,
    status: 'Complete',
    register: '5 min ago',
    progress: '40%',
    position: 'Developer',
    office: 'London',
  },
  .....
]);
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- stripped table -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Striped Table</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code3')"
                        ><span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Code</span
                        ></a
                    >
                </div>
                <div class="mb-5">
                    <div class="table-responsive">
                        <table class="table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Sale</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="data in tableData" :key="data.id">
                                    <tr>
                                        <td class="whitespace-nowrap">{{ data.name }}</td>
                                        <td>{{ data.date }}</td>
                                        <td>{{ data.sale }}</td>
                                        <td class="text-center">
                                            <button type="button" v-tippy:delete>
                                                <svg
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-5 h-5 m-auto"
                                                >
                                                    <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path
                                                        d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                    <path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path
                                                        opacity="0.5"
                                                        d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                </svg>
                                            </button>
                                            <tippy target="delete">Delete</tippy>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- striped table --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table-striped&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Date&lt;/th&gt;
        &lt;th&gt;Sale&lt;/th&gt;
        &lt;th&gt;&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;template v-for=&quot;data in tableData&quot; :key=&quot;data.id&quot;&gt;
        &lt;tr&gt;
          &lt;td class=&quot;whitespace-nowrap&quot;&gt;&#123;&#123; data.name &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.date &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.sale &#125;&#125;&lt;/td&gt;
          &lt;td class=&quot;text-center&quot;&gt;
            &lt;button type=&quot;button&quot; v-tippy:delete&gt;
              &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
            &lt;tippy target=&quot;delete&quot;&gt;Delete&lt;/tippy&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/template&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
const tableData = ref([
  {
    id: 1,
    name: 'John Doe',
    email: 'johndoe@yahoo.com',
    date: '10/08/2020',
    sale: 120,
    status: 'Complete',
    register: '5 min ago',
    progress: '40%',
    position: 'Developer',
    office: 'London',
  },
  .....
]);
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- Table Light -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Table Light</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code4')"
                        ><span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Code</span
                        ></a
                    >
                </div>
                <div class="mb-5">
                    <div class="table-responsive">
                        <table class="table-hover">
                            <thead>
                                <tr class="!bg-transparent dark:!bg-transparent">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="data in tableData" :key="data.id">
                                    <tr>
                                        <td>{{ data.id }}</td>
                                        <td class="whitespace-nowrap">{{ data.name }}</td>
                                        <td>{{ data.email }}</td>
                                        <td>{{ data.date }}</td>
                                        <td class="text-center">
                                            <button type="button" v-tippy:delete>
                                                <svg
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-5 h-5 m-auto"
                                                >
                                                    <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                </svg>
                                            </button>
                                            <tippy target="delete">Delete</tippy>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
                <template v-if="codeArr.includes('code4')">
                    <highlight>
                        <pre>
&lt;!-- table light --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table-hover&quot;&gt;
    &lt;thead&gt;
      &lt;tr class=&quot;!bg-transparent dark:!bg-transparent&quot;&gt;
        &lt;th&gt;#&lt;/th&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Email&lt;/th&gt;
        &lt;th&gt;Created At&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;template v-for=&quot;data in tableData&quot; :key=&quot;data.id&quot;&gt;
        &lt;tr&gt;
          &lt;td&gt;&#123;&#123; data.id &#125;&#125;&lt;/td&gt;
          &lt;td class=&quot;whitespace-nowrap&quot;&gt;&#123;&#123; data.name &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.email &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.date &#125;&#125;&lt;/td&gt;
          &lt;td class=&quot;text-center&quot;&gt;
            &lt;button type=&quot;button&quot; v-tippy:delete&gt;
              &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
            &lt;tippy target=&quot;delete&quot;&gt;Delete&lt;/tippy&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/template&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
const tableData = ref([
  {
    id: 1,
    name: 'John Doe',
    email: 'johndoe@yahoo.com',
    date: '10/08/2020',
    sale: 120,
    status: 'Complete',
    register: '5 min ago',
    progress: '40%',
    position: 'Developer',
    office: 'London',
  },
  .....
]);
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- captions -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Captions</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code5')"
                        ><span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Code</span
                        ></a
                    >
                </div>
                <div class="mb-5">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th class="text-center">Register</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="data in tableData" :key="data.id">
                                    <tr>
                                        <td>{{ data.id }}</td>
                                        <td class="whitespace-nowrap">{{ data.name }}</td>
                                        <td>{{ data.email }}</td>
                                        <td>
                                            <span
                                                class="badge whitespace-nowrap"
                                                :class="{
                                                    'badge-outline-primary': data.status === 'Complete',
                                                    'badge-outline-secondary': data.status === 'Pending',
                                                    'badge-outline-info': data.status === 'In Progress',
                                                    'badge-outline-danger': data.status === 'Canceled',
                                                }"
                                                >{{ data.status }}</span
                                            >
                                        </td>
                                        <td class="text-center">{{ data.register }}</td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
                <template v-if="codeArr.includes('code5')">
                    <highlight>
                        <pre>
&lt;!-- caption --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;#&lt;/th&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Email&lt;/th&gt;
        &lt;th&gt;Status&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Register&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;template v-for=&quot;data in tableData&quot; :key=&quot;data.id&quot;&gt;
        &lt;tr&gt;
          &lt;td&gt;&#123;&#123; data.id &#125;&#125;&lt;/td&gt;
          &lt;td class=&quot;whitespace-nowrap&quot;&gt;&#123;&#123; data.name &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.email &#125;&#125;&lt;/td&gt;
          &lt;td&gt;
            &lt;span
              class=&quot;badge whitespace-nowrap&quot;
              :class=&quot;{
                'badge-outline-primary': data.status === 'Complete',
                'badge-outline-secondary': data.status === 'Pending',
                'badge-outline-info': data.status === 'In Progress',
                'badge-outline-danger': data.status === 'Canceled',
              }&quot;
              &gt;&#123;&#123; data.status &#125;&#125;&lt;/span
            &gt;
          &lt;/td&gt;
          &lt;td class=&quot;text-center&quot;&gt;&#123;&#123; data.register &#125;&#125;&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/template&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
const tableData = ref([
  {
    id: 1,
    name: 'John Doe',
    email: 'johndoe@yahoo.com',
    date: '10/08/2020',
    sale: 120,
    status: 'Complete',
    register: '5 min ago',
    progress: '40%',
    position: 'Developer',
    office: 'London',
  },
  .....
]);
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- progress table -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Progress Table</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code6')"
                        ><span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Code</span
                        ></a
                    >
                </div>
                <div class="mb-5">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Progress</th>
                                    <th>Sales</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="data in tableData" :key="data.id">
                                    <tr>
                                        <td>{{ data.id }}</td>
                                        <td class="whitespace-nowrap">{{ data.name }}</td>
                                        <td>
                                            <div class="h-1.5 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex w-full">
                                                <div
                                                    class="h-1.5 rounded-full rounded-bl-full text-center text-white text-xs"
                                                    :class="{
                                                        'bg-success': data.status === 'Complete',
                                                        'bg-secondary': data.status === 'Pending',
                                                        'bg-info': data.status === 'In Progress',
                                                        'bg-danger': data.status === 'Canceled',
                                                    }"
                                                    :style="`width: ${data.progress}`"
                                                ></div>
                                            </div>
                                        </td>
                                        <td
                                            class="whitespace-nowrap"
                                            :class="{
                                                'text-success': data.status === 'Complete',
                                                'text-secondary': data.status === 'Pending',
                                                'text-info': data.status === 'In Progress',
                                                'text-danger': data.status === 'Canceled',
                                            }"
                                        >
                                            {{ data.progress }}
                                        </td>
                                        <td class="p-3 border-b border-[#ebedf2] dark:border-[#191e3a] text-center">
                                            <div class="flex items-center">
                                                <div>
                                                    <button type="button" v-tippy:edit>
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-4.5 h-4.5 ltr:mr-2 rtl:ml-2"
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
                                                    </button>
                                                    <tippy target="edit">Edit</tippy>
                                                </div>
                                                <div>
                                                    <button type="button" v-tippy:delete>
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5"
                                                        >
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
                                                            <path
                                                                opacity="0.5"
                                                                d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                            />
                                                        </svg>
                                                    </button>
                                                    <tippy target="delete">Delete</tippy>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
                <template v-if="codeArr.includes('code6')">
                    <highlight>
                        <pre>
&lt;!-- progress table --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;#&lt;/th&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Progress&lt;/th&gt;
        &lt;th&gt;Sales&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Action&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;template v-for=&quot;data in tableData&quot; :key=&quot;data.id&quot;&gt;
        &lt;tr&gt;
          &lt;td&gt;&#123;&#123; data.id &#125;&#125;&lt;/td&gt;
          &lt;td class=&quot;whitespace-nowrap&quot;&gt;&#123;&#123; data.name &#125;&#125;&lt;/td&gt;
          &lt;td&gt;
            &lt;div class=&quot;h-1.5 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex w-full&quot;&gt;
              &lt;div
                class=&quot;h-1.5 rounded-full rounded-bl-full text-center text-white text-xs&quot;
                :class=&quot;{
                  'bg-success': data.status === 'Complete',
                  'bg-secondary': data.status === 'Pending',
                  'bg-info': data.status === 'In Progress',
                  'bg-danger': data.status === 'Canceled',
                }&quot;
                :style=&quot;`width: ${data.progress}`&quot;
              &gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td
            class=&quot;whitespace-nowrap&quot;
            :class=&quot;{
              'text-success': data.status === 'Complete',
              'text-secondary': data.status === 'Pending',
              'text-info': data.status === 'In Progress',
              'text-danger': data.status === 'Canceled',
            }&quot;
          &gt;
            &#123;&#123; data.progress &#125;&#125;
          &lt;/td&gt;
          &lt;td class=&quot;p-3 border-b border-[#ebedf2] dark:border-[#191e3a] text-center text-white-dark&quot;&gt;
            &lt;div class=&quot;flex items-center&quot;&gt;
              &lt;div&gt;
                &lt;button type=&quot;button&quot; v-tippy:edit&gt;
                  &lt;svg&gt; ... &lt;/svg&gt;
                &lt;/button&gt;
                &lt;tippy target=&quot;edit&quot;&gt;Edit&lt;/tippy&gt;
              &lt;/div&gt;
              &lt;div&gt;
                &lt;button type=&quot;button&quot; v-tippy:delete&gt;
                  &lt;svg&gt; ... &lt;/svg&gt;
                &lt;/button&gt;
                &lt;tippy target=&quot;delete&quot;&gt;Delete&lt;/tippy&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/template&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
const tableData = ref([
  {
    id: 1,
    name: 'John Doe',
    email: 'johndoe@yahoo.com',
    date: '10/08/2020',
    sale: 120,
    status: 'Complete',
    register: '5 min ago',
    progress: '40%',
    position: 'Developer',
    office: 'London',
  },
  .....
]);
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- Contextual -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Contextual</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code7')"
                        ><span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Code</span
                        ></a
                    >
                </div>
                <div class="mb-5">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-dark-dark-light border-dark-dark-light">
                                    <td>1</td>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>johndoe@yahoo.com</td>
                                </tr>
                                <tr class="bg-primary/20 border-primary/20">
                                    <td>2</td>
                                    <td>Andy</td>
                                    <td>King</td>
                                    <td>andyking@gmail.com</td>
                                </tr>
                                <tr class="bg-secondary/20 border-secondary/20">
                                    <td>3</td>
                                    <td>Lisa</td>
                                    <td>Doe</td>
                                    <td>lisadoe@yahoo.com</td>
                                </tr>
                                <tr class="bg-success/20 border-success/20">
                                    <td>4</td>
                                    <td>Vincent</td>
                                    <td>Carpenter</td>
                                    <td>vinnyc@yahoo.com</td>
                                </tr>
                                <tr class="bg-dark-dark-light border-dark-dark-light">
                                    <td>5</td>
                                    <td>Amy</td>
                                    <td>Diaz</td>
                                    <td>amydiaz@yahoo.com</td>
                                </tr>
                                <tr class="bg-danger/20 border-danger/20">
                                    <td>6</td>
                                    <td>Nia</td>
                                    <td>Hillyer</td>
                                    <td>niahill@gmail.com</td>
                                </tr>
                                <tr class="bg-info/20 border-info/20">
                                    <td>7</td>
                                    <td>Marry</td>
                                    <td>McDonald</td>
                                    <td>marryMcD@yahoo.com</td>
                                </tr>
                                <tr class="bg-warning/20 border-warning/20">
                                    <td>8</td>
                                    <td>Shaun</td>
                                    <td>Park</td>
                                    <td>park@yahoo.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <template v-if="codeArr.includes('code7')">
                    <highlight>
                        <pre>
&lt;!-- contextual --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;#&lt;/th&gt;
        &lt;th&gt;First Name&lt;/th&gt;
        &lt;th&gt;Last Name&lt;/th&gt;
        &lt;th&gt;Email&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr class=&quot;bg-dark-dark-light border-dark-dark-light&quot;&gt;
        &lt;td&gt;1&lt;/td&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;johndoe@yahoo.com&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;bg-primary/20 border-primary/20&quot;&gt;
        &lt;td&gt;2&lt;/td&gt;
        &lt;td&gt;Andy&lt;/td&gt;
        &lt;td&gt;King&lt;/td&gt;
        &lt;td&gt;andyking@gmail.com&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;bg-secondary/20 border-secondary/20&quot;&gt;
        &lt;td&gt;3&lt;/td&gt;
        &lt;td&gt;Lisa&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;lisadoe@yahoo.com&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;bg-success/20 border-success/20&quot;&gt;
        &lt;td&gt;4&lt;/td&gt;
        &lt;td&gt;Vincent&lt;/td&gt;
        &lt;td&gt;Carpenter&lt;/td&gt;
        &lt;td&gt;vinnyc@yahoo.com&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;bg-dark-dark-light border-dark-dark-light&quot;&gt;
        &lt;td&gt;5&lt;/td&gt;
        &lt;td&gt;Amy&lt;/td&gt;
        &lt;td&gt;Diaz&lt;/td&gt;
        &lt;td&gt;amydiaz@yahoo.com&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;bg-danger/20 border-danger/20&quot;&gt;
        &lt;td&gt;6&lt;/td&gt;
        &lt;td&gt;Nia&lt;/td&gt;
        &lt;td&gt;Hillyer&lt;/td&gt;
        &lt;td&gt;niahill@gmail.com&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;bg-info/20 border-info/20&quot;&gt;
        &lt;td&gt;7&lt;/td&gt;
        &lt;td&gt;Marry&lt;/td&gt;
        &lt;td&gt;McDonald&lt;/td&gt;
        &lt;td&gt;marryMcD@yahoo.com&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;bg-warning/20 border-warning/20&quot;&gt;
        &lt;td&gt;8&lt;/td&gt;
        &lt;td&gt;Shaun&lt;/td&gt;
        &lt;td&gt;Park&lt;/td&gt;
        &lt;td&gt;park@yahoo.com&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- dropdown -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Dropdown</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code8')"
                        ><span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Code
                        </span></a
                    >
                </div>
                <div class="mb-5">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Sale</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="data in tableData" :key="data.id">
                                    <tr>
                                        <td class="whitespace-nowrap">{{ data.name }}</td>
                                        <td>{{ data.date }}</td>
                                        <td>{{ data.sale }}</td>
                                        <td>
                                            <span
                                                class="badge whitespace-nowrap"
                                                :class="{
                                                    'bg-primary': data.status === 'Complete',
                                                    'bg-secondary': data.status === 'Pending',
                                                    'bg-success': data.status === 'In Progress',
                                                    'bg-danger': data.status === 'Canceled',
                                                }"
                                                >{{ data.status }}</span
                                            >
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <Popper
                                                    :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'"
                                                    offsetDistance="0"
                                                    class="align-middle"
                                                >
                                                    <a href="javascript:;">
                                                        <svg
                                                            class="w-5 h-5 opacity-70 m-auto"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                                            <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                                            <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                                        </svg>
                                                    </a>
                                                    <template #content="{ close }">
                                                        <ul @click="close()">
                                                            <li>
                                                                <a href="javascript:;">Download</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Share</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </template>
                                                </Popper>
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
                <template v-if="codeArr.includes('code8')">
                    <highlight>
                        <pre>
&lt;!-- dropdown --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Date&lt;/th&gt;
        &lt;th&gt;Sale&lt;/th&gt;
        &lt;th&gt;Status&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Action&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;template v-for=&quot;data in tableData&quot; :key=&quot;data.id&quot;&gt;
        &lt;tr&gt;
          &lt;td class=&quot;whitespace-nowrap&quot;&gt;&#123;&#123; data.name &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.date &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.sale &#125;&#125;&lt;/td&gt;
          &lt;td&gt;
            &lt;span
              class=&quot;badge whitespace-nowrap&quot;
              :class=&quot;{
                'bg-primary': data.status === 'Complete',
                'bg-secondary': data.status === 'Pending',
                'bg-success': data.status === 'In Progress',
                'bg-danger': data.status === 'Canceled',
              }&quot;
              &gt;&#123;&#123; data.status &#125;&#125;&lt;/span
            &gt;
          &lt;/td&gt;
          &lt;td class=&quot;text-center&quot;&gt;
            &lt;div class=&quot;dropdown&quot;&gt;
              &lt;Popper :placement=&quot;store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'&quot; offsetDistance=&quot;0&quot; class=&quot;align-middle&quot;&gt;
                &lt;a href=&quot;javascript:;&quot;&gt;
                  &lt;svg&gt; ... &lt;/svg&gt;
                &lt;/a&gt;
                &lt;template #content=&quot;{ close }&quot;&gt;
                  &lt;ul @click=&quot;close()&quot;&gt;
                    &lt;li&gt;
                      &lt;a href=&quot;javascript:;&quot;&gt;Download&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;
                      &lt;a href=&quot;javascript:;&quot;&gt;Share&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;
                      &lt;a href=&quot;javascript:;&quot;&gt;Edit&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;
                      &lt;a href=&quot;javascript:;&quot;&gt;Delete&lt;/a&gt;
                    &lt;/li&gt;
                  &lt;/ul&gt;
                &lt;/template&gt;
              &lt;/Popper&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/template&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
const tableData = ref([
  {
    id: 1,
    name: 'John Doe',
    email: 'johndoe@yahoo.com',
    date: '10/08/2020',
    sale: 120,
    status: 'Complete',
    register: '5 min ago',
    progress: '40%',
    position: 'Developer',
    office: 'London',
  },
  .....
]);
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- table with footer -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Table with Footer</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code9')"
                        ><span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Code</span
                        ></a
                    >
                </div>
                <div class="mb-5">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th class="!text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="data in tableData" :key="data.id">
                                    <tr>
                                        <td class="whitespace-nowrap">{{ data.name }}</td>
                                        <td>{{ data.position }}</td>
                                        <td>{{ data.office }}</td>
                                        <td class="text-center">
                                            <ul class="flex items-center justify-center gap-2">
                                                <li>
                                                    <a href="javascript:;" v-tippy:edit>
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5 text-primary"
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
                                                    </a>
                                                    <tippy target="edit">Edit</tippy>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" v-tippy:delete>
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5 text-danger"
                                                        >
                                                            <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                                            <path
                                                                d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                                stroke-linecap="round"
                                                            />
                                                        </svg>
                                                    </a>
                                                    <tippy target="delete">Delete</tippy>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th class="!text-center">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <template v-if="codeArr.includes('code9')">
                    <highlight>
                        <pre>
&lt;!-- table with footer --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Position&lt;/th&gt;
        &lt;th&gt;Office&lt;/th&gt;
        &lt;th class=&quot;!text-center&quot;&gt;Action&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;template v-for=&quot;data in tableData&quot; :key=&quot;data.id&quot;&gt;
        &lt;tr&gt;
          &lt;td class=&quot;whitespace-nowrap&quot;&gt;&#123;&#123; data.name &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.position &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.office &#125;&#125;&lt;/td&gt;
          &lt;td class=&quot;text-center&quot;&gt;
            &lt;ul class=&quot;flex items-center justify-center gap-2&quot;&gt;
              &lt;li&gt;
                &lt;a href=&quot;javascript:;&quot; v-tippy:edit&gt;
                  &lt;svg&gt; ... &lt;/svg&gt;
                &lt;/a&gt;
                &lt;tippy target=&quot;edit&quot;&gt;Edit&lt;/tippy&gt;
              &lt;/li&gt;
              &lt;li&gt;
                &lt;a href=&quot;javascript:;&quot; v-tippy:delete&gt;
                  &lt;svg&gt; ... &lt;/svg&gt;
                &lt;/a&gt;
                &lt;tippy target=&quot;delete&quot;&gt;Delete&lt;/tippy&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/template&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
      &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Position&lt;/th&gt;
        &lt;th&gt;Office&lt;/th&gt;
        &lt;th class=&quot;!text-center&quot;&gt;Action&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/tfoot&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
const tableData = ref([
  {
    id: 1,
    name: 'John Doe',
    email: 'johndoe@yahoo.com',
    date: '10/08/2020',
    sale: 120,
    status: 'Complete',
    register: '5 min ago',
    progress: '40%',
    position: 'Developer',
    office: 'London',
  },
  .....
]);
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <!-- checkboxes -->
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Checkboxes</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code10')"
                        ><span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Code</span
                        ></a
                    >
                </div>
                <div class="mb-5">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="form-checkbox" /></th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Sale</th>
                                    <th class="!text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="data in tableData" :key="data.id">
                                    <tr>
                                        <td><input type="checkbox" class="form-checkbox" /></td>
                                        <td class="whitespace-nowrap">{{ data.name }}</td>
                                        <td>{{ data.date }}</td>
                                        <td>{{ data.sale }}</td>
                                        <td class="text-center">
                                            <ul class="flex items-center justify-center gap-2">
                                                <li>
                                                    <a href="javascript:;" v-tippy:settings>
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5 text-primary"
                                                        >
                                                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"></circle>
                                                            <path
                                                                opacity="0.5"
                                                                d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                            ></path>
                                                        </svg>
                                                    </a>
                                                    <tippy target="settings">Settings</tippy>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" v-tippy:edit>
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-4.5 h-4.5 text-success"
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
                                                    </a>
                                                    <tippy target="edit">Edit</tippy>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" v-tippy:delete>
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5 text-danger"
                                                        >
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
                                                            <path
                                                                opacity="0.5"
                                                                d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                            />
                                                        </svg>
                                                    </a>
                                                    <tippy target="delete">Delete</tippy>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
                <template v-if="codeArr.includes('code10')">
                    <highlight>
                        <pre>
&lt;!-- dropdown --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; /&gt;&lt;/th&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Date&lt;/th&gt;
        &lt;th&gt;Sale&lt;/th&gt;
        &lt;th class=&quot;!text-center&quot;&gt;Action&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;template v-for=&quot;data in tableData&quot; :key=&quot;data.id&quot;&gt;
        &lt;tr&gt;
          &lt;td&gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; /&gt;&lt;/td&gt;
          &lt;td class=&quot;whitespace-nowrap&quot;&gt;&#123;&#123; data.name &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.date &#125;&#125;&lt;/td&gt;
          &lt;td&gt;&#123;&#123; data.sale &#125;&#125;&lt;/td&gt;
          &lt;td class=&quot;text-center&quot;&gt;
            &lt;ul class=&quot;flex items-center justify-center gap-2&quot;&gt;
              &lt;li&gt;
                &lt;a href=&quot;javascript:;&quot; v-tippy:settings&gt; &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
                &lt;tippy target=&quot;settings&quot;&gt;Edit&lt;/tippy&gt;
              &lt;/li&gt;
              &lt;li&gt;
                &lt;a href=&quot;javascript:;&quot; v-tippy:edit&gt; &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
                &lt;tippy target=&quot;edit&quot;&gt;Edit&lt;/tippy&gt;
              &lt;/li&gt;
              &lt;li&gt;
                &lt;a href=&quot;javascript:;&quot; v-tippy:delete&gt; &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
                &lt;tippy target=&quot;delete&quot;&gt;Edit&lt;/tippy&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/template&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref } from 'vue';
const tableData = ref([
  {
    id: 1,
    name: 'John Doe',
    email: 'johndoe@yahoo.com',
    date: '10/08/2020',
    sale: 120,
    status: 'Complete',
    register: '5 min ago',
    progress: '40%',
    position: 'Developer',
    office: 'London',
  },
  .....
]);
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref } from 'vue';
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Tables' });

    const store = useAppStore();

    const { codeArr, toggleCode } = codePreview();
    const tableData = ref([
        {
            id: 1,
            name: 'John Doe',
            email: 'johndoe@yahoo.com',
            date: '10/08/2020',
            sale: 120,
            status: 'Complete',
            register: '5 min ago',
            progress: '40%',
            position: 'Developer',
            office: 'London',
        },
        {
            id: 2,
            name: 'Shaun Park',
            email: 'shaunpark@gmail.com',
            date: '11/08/2020',
            sale: 400,
            status: 'Pending',
            register: '11 min ago',
            progress: '23%',
            position: 'Designer',
            office: 'New York',
        },
        {
            id: 3,
            name: 'Alma Clarke',
            email: 'alma@gmail.com',
            date: '12/02/2020',
            sale: 310,
            status: 'In Progress',
            register: '1 hour ago',
            progress: '80%',
            position: 'Accountant',
            office: 'Amazon',
        },
        {
            id: 4,
            name: 'Vincent Carpenter',
            email: 'vincent@gmail.com',
            date: '13/08/2020',
            sale: 100,
            status: 'Canceled',
            register: '1 day ago',
            progress: '60%',
            position: 'Data Scientist',
            office: 'Canada',
        },
    ]);
</script>
