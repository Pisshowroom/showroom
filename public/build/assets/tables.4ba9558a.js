import{c as M,_ as v}from"./codePreview.ce436f36.js";import{y as j,z as P,b as S,r as N,B as f,Q as B,o as s,d as a,e as t,q as d,J as k,K as b,a6 as C,D as r,M as _,F as l,L as o,I as y,f as p,C as i,G as u,a3 as A}from"./main.4500d6ff.js";const H={class:"grid grid-cols-1 xl:grid-cols-2 gap-6"},E={class:"panel"},I={class:"flex items-center justify-between mb-5"},$=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Simple Table",-1),J=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),z=[J],T={class:"mb-5"},V={class:"table-responsive"},F=t("thead",null,[t("tr",null,[t("th",null,"Name"),t("th",null,"Date"),t("th",null,"Sale"),t("th",{class:"text-center"},"Status"),t("th",{class:"text-center"},"Action")])],-1),O={class:"whitespace-nowrap"},K={class:"text-center"},Z={type:"button"},R=l('<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 m-auto"><path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6" stroke="currentColor" stroke-width="1.5"></path></svg>',1),q=[R],G=t("pre",null,`<!-- basic table -->
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
              <svg> ... </svg>
            </button>
            <tippy target="delete">Delete</tippy>
          </td>
        </tr>
      </template>
    </tbody>
  </table>
</div>

<!-- script -->
<script lang="ts" setup>
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
<\/script>
`,-1),Q={class:"panel"},Y={class:"flex items-center justify-between mb-5"},U=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Hover Table",-1),W=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code</span>',1),X=[W],tt={class:"mb-5"},et={class:"table-responsive"},st={class:"table-hover"},ot=t("thead",null,[t("tr",null,[t("th",null,"Name"),t("th",null,"Date"),t("th",null,"Sale"),t("th",{class:"text-center"},"Status"),t("th",{class:"text-center"},"Action")])],-1),at={class:"whitespace-nowrap"},rt={class:"text-center"},dt={type:"button"},nt=l('<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 m-auto"><path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6" stroke="currentColor" stroke-width="1.5"></path></svg>',1),lt=[nt],it=t("pre",null,`<!-- hover table -->
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
              <svg> ... </svg>
            </button>
            <tippy target="delete">Delete</tippy>
          </td>
        </tr>
      </template>
    </tbody>
  </table>
</div>

<!-- script -->
<script lang="ts" setup>
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
<\/script>
`,-1),ct={class:"panel"},ht={class:"flex items-center justify-between mb-5"},pt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Striped Table",-1),ut=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code</span>',1),gt=[ut],mt={class:"mb-5"},vt={class:"table-responsive"},Ct={class:"table-striped"},_t=t("thead",null,[t("tr",null,[t("th",null,"Name"),t("th",null,"Date"),t("th",null,"Sale"),t("th")])],-1),wt={class:"whitespace-nowrap"},kt={class:"text-center"},bt={type:"button"},yt=l('<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 m-auto"><path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6" stroke="currentColor" stroke-width="1.5"></path></svg>',1),ft=[yt],xt=t("pre",null,`<!-- striped table -->
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
              <svg> ... </svg>
            </button>
            <tippy target="delete">Delete</tippy>
          </td>
        </tr>
      </template>
    </tbody>
  </table>
</div>

<!-- script -->
<script lang="ts" setup>
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
<\/script>
`,-1),Lt={class:"panel"},Dt={class:"flex items-center justify-between mb-5"},Mt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Table Light",-1),jt=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code</span>',1),Pt=[jt],St={class:"mb-5"},Nt={class:"table-responsive"},Bt={class:"table-hover"},At=t("thead",null,[t("tr",{class:"!bg-transparent dark:!bg-transparent"},[t("th",null,"#"),t("th",null,"Name"),t("th",null,"Email"),t("th",null,"Created At"),t("th",{class:"text-center"})])],-1),Ht={class:"whitespace-nowrap"},Et={class:"text-center"},It={type:"button"},$t=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 m-auto"},[t("circle",{opacity:"0.5",cx:"12",cy:"12",r:"10",stroke:"currentColor","stroke-width":"1.5"}),t("path",{d:"M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),Jt=[$t],zt=t("pre",null,`<!-- table light -->
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
              <svg> ... </svg>
            </button>
            <tippy target="delete">Delete</tippy>
          </td>
        </tr>
      </template>
    </tbody>
  </table>
</div>

<!-- script -->
<script lang="ts" setup>
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
<\/script>
`,-1),Tt={class:"panel"},Vt={class:"flex items-center justify-between mb-5"},Ft=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Captions",-1),Ot=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code</span>',1),Kt=[Ot],Zt={class:"mb-5"},Rt={class:"table-responsive"},qt=t("thead",null,[t("tr",null,[t("th",null,"#"),t("th",null,"Name"),t("th",null,"Email"),t("th",null,"Status"),t("th",{class:"text-center"},"Register")])],-1),Gt={class:"whitespace-nowrap"},Qt={class:"text-center"},Yt=t("pre",null,`<!-- caption -->
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

<!-- script -->
<script lang="ts" setup>
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
<\/script>
`,-1),Ut={class:"panel"},Wt={class:"flex items-center justify-between mb-5"},Xt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Progress Table",-1),te=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code</span>',1),ee=[te],se={class:"mb-5"},oe={class:"table-responsive"},ae=t("thead",null,[t("tr",null,[t("th",null,"#"),t("th",null,"Name"),t("th",null,"Progress"),t("th",null,"Sales"),t("th",{class:"text-center"},"Action")])],-1),re={class:"whitespace-nowrap"},de={class:"h-1.5 bg-[#ebedf2] dark:bg-dark/40 rounded-full flex w-full"},ne={class:"p-3 border-b border-[#ebedf2] dark:border-[#191e3a] text-center"},le={class:"flex items-center"},ie={type:"button"},ce=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4.5 h-4.5 ltr:mr-2 rtl:ml-2"},[t("path",{d:"M15.2869 3.15178L14.3601 4.07866L5.83882 12.5999L5.83881 12.5999C5.26166 13.1771 4.97308 13.4656 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.32181 19.8021L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L4.19792 21.6782L7.47918 20.5844L7.47919 20.5844C8.25353 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5344 19.0269 10.8229 18.7383 11.4001 18.1612L11.4001 18.1612L19.9213 9.63993L20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178Z",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M14.36 4.07812C14.36 4.07812 14.4759 6.04774 16.2138 7.78564C17.9517 9.52354 19.9213 9.6394 19.9213 9.6394M4.19789 21.6777L2.32178 19.8015",stroke:"currentColor","stroke-width":"1.5"})],-1),he=[ce],pe={type:"button"},ue=l('<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"><path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6" stroke="currentColor" stroke-width="1.5"></path></svg>',1),ge=[ue],me=t("pre",null,`<!-- progress table -->
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
                :style="\`width: \${data.progress}\`"
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
          <td class="p-3 border-b border-[#ebedf2] dark:border-[#191e3a] text-center text-white-dark">
            <div class="flex items-center">
              <div>
                <button type="button" v-tippy:edit>
                  <svg> ... </svg>
                </button>
                <tippy target="edit">Edit</tippy>
              </div>
              <div>
                <button type="button" v-tippy:delete>
                  <svg> ... </svg>
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

<!-- script -->
<script lang="ts" setup>
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
<\/script>
`,-1),ve={class:"panel"},Ce={class:"flex items-center justify-between mb-5"},_e=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Contextual",-1),we=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code</span>',1),ke=[we],be=l('<div class="mb-5"><div class="table-responsive"><table><thead><tr><th>#</th><th>First Name</th><th>Last Name</th><th>Email</th></tr></thead><tbody><tr class="bg-dark-dark-light border-dark-dark-light"><td>1</td><td>John</td><td>Doe</td><td>johndoe@yahoo.com</td></tr><tr class="bg-primary/20 border-primary/20"><td>2</td><td>Andy</td><td>King</td><td>andyking@gmail.com</td></tr><tr class="bg-secondary/20 border-secondary/20"><td>3</td><td>Lisa</td><td>Doe</td><td>lisadoe@yahoo.com</td></tr><tr class="bg-success/20 border-success/20"><td>4</td><td>Vincent</td><td>Carpenter</td><td>vinnyc@yahoo.com</td></tr><tr class="bg-dark-dark-light border-dark-dark-light"><td>5</td><td>Amy</td><td>Diaz</td><td>amydiaz@yahoo.com</td></tr><tr class="bg-danger/20 border-danger/20"><td>6</td><td>Nia</td><td>Hillyer</td><td>niahill@gmail.com</td></tr><tr class="bg-info/20 border-info/20"><td>7</td><td>Marry</td><td>McDonald</td><td>marryMcD@yahoo.com</td></tr><tr class="bg-warning/20 border-warning/20"><td>8</td><td>Shaun</td><td>Park</td><td>park@yahoo.com</td></tr></tbody></table></div></div>',1),ye=t("pre",null,`<!-- contextual -->
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
`,-1),fe={class:"panel"},xe={class:"flex items-center justify-between mb-5"},Le=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Dropdown",-1),De=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Me=[De],je={class:"mb-5"},Pe={class:"table-responsive"},Se=t("thead",null,[t("tr",null,[t("th",null,"Name"),t("th",null,"Date"),t("th",null,"Sale"),t("th",null,"Status"),t("th",{class:"text-center"},"Action")])],-1),Ne={class:"whitespace-nowrap"},Be={class:"text-center"},Ae={class:"dropdown"},He=t("a",{href:"javascript:;"},[t("svg",{class:"w-5 h-5 opacity-70 m-auto",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg"},[t("circle",{cx:"5",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"}),t("circle",{opacity:"0.5",cx:"12",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"}),t("circle",{cx:"19",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"})])],-1),Ee=["onClick"],Ie=t("li",null,[t("a",{href:"javascript:;"},"Download")],-1),$e=t("li",null,[t("a",{href:"javascript:;"},"Share")],-1),Je=t("li",null,[t("a",{href:"javascript:;"},"Edit")],-1),ze=t("li",null,[t("a",{href:"javascript:;"},"Delete")],-1),Te=[Ie,$e,Je,ze],Ve=t("pre",null,`<!-- dropdown -->
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
              <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
                <a href="javascript:;">
                  <svg> ... </svg>
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

<!-- script -->
<script lang="ts" setup>
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
<\/script>
`,-1),Fe={class:"panel"},Oe={class:"flex items-center justify-between mb-5"},Ke=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Table with Footer",-1),Ze=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code</span>',1),Re=[Ze],qe={class:"mb-5"},Ge={class:"table-responsive"},Qe=t("thead",null,[t("tr",null,[t("th",null,"Name"),t("th",null,"Position"),t("th",null,"Office"),t("th",{class:"!text-center"},"Action")])],-1),Ye={class:"whitespace-nowrap"},Ue={class:"text-center"},We={class:"flex items-center justify-center gap-2"},Xe={href:"javascript:;"},ts=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 text-primary"},[t("circle",{opacity:"0.5",cx:"12",cy:"12",r:"10",stroke:"currentColor","stroke-width":"1.5"}),t("path",{d:"M8.5 12.5L10.5 14.5L15.5 9.5",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})],-1),es=[ts],ss={href:"javascript:;"},os=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 text-danger"},[t("circle",{opacity:"0.5",cx:"12",cy:"12",r:"10",stroke:"currentColor","stroke-width":"1.5"}),t("path",{d:"M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),as=[os],rs=t("tfoot",null,[t("tr",null,[t("th",null,"Name"),t("th",null,"Position"),t("th",null,"Office"),t("th",{class:"!text-center"},"Action")])],-1),ds=t("pre",null,`<!-- table with footer -->
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
                  <svg> ... </svg>
                </a>
                <tippy target="edit">Edit</tippy>
              </li>
              <li>
                <a href="javascript:;" v-tippy:delete>
                  <svg> ... </svg>
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

<!-- script -->
<script lang="ts" setup>
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
<\/script>
`,-1),ns={class:"panel"},ls={class:"flex items-center justify-between mb-5"},is=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Checkboxes",-1),cs=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code</span>',1),hs=[cs],ps={class:"mb-5"},us={class:"table-responsive"},gs=t("thead",null,[t("tr",null,[t("th",null,[t("input",{type:"checkbox",class:"form-checkbox"})]),t("th",null,"Name"),t("th",null,"Date"),t("th",null,"Sale"),t("th",{class:"!text-center"},"Action")])],-1),ms=t("td",null,[t("input",{type:"checkbox",class:"form-checkbox"})],-1),vs={class:"whitespace-nowrap"},Cs={class:"text-center"},_s={class:"flex items-center justify-center gap-2"},ws={href:"javascript:;"},ks=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 text-primary"},[t("circle",{cx:"12",cy:"12",r:"3",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z",stroke:"currentColor","stroke-width":"1.5"})],-1),bs=[ks],ys={href:"javascript:;"},fs=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4.5 h-4.5 text-success"},[t("path",{d:"M15.2869 3.15178L14.3601 4.07866L5.83882 12.5999L5.83881 12.5999C5.26166 13.1771 4.97308 13.4656 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.32181 19.8021L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L4.19792 21.6782L7.47918 20.5844L7.47919 20.5844C8.25353 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5344 19.0269 10.8229 18.7383 11.4001 18.1612L11.4001 18.1612L19.9213 9.63993L20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178Z",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M14.36 4.07812C14.36 4.07812 14.4759 6.04774 16.2138 7.78564C17.9517 9.52354 19.9213 9.6394 19.9213 9.6394M4.19789 21.6777L2.32178 19.8015",stroke:"currentColor","stroke-width":"1.5"})],-1),xs=[fs],Ls={href:"javascript:;"},Ds=l('<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-danger"><path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6" stroke="currentColor" stroke-width="1.5"></path></svg>',1),Ms=[Ds],js=t("pre",null,`<!-- dropdown -->
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
                <a href="javascript:;" v-tippy:settings> <svg> ... </svg></a>
                <tippy target="settings">Edit</tippy>
              </li>
              <li>
                <a href="javascript:;" v-tippy:edit> <svg> ... </svg></a>
                <tippy target="edit">Edit</tippy>
              </li>
              <li>
                <a href="javascript:;" v-tippy:delete> <svg> ... </svg></a>
                <tippy target="delete">Edit</tippy>
              </li>
            </ul>
          </td>
        </tr>
      </template>
    </tbody>
  </table>
</div>

<!-- script -->
<script lang="ts" setup>
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
<\/script>
`,-1),Hs=j({__name:"tables",setup(Ps){P({title:"Tables"});const x=S(),{codeArr:g,toggleCode:m}=M(),w=N([{id:1,name:"John Doe",email:"johndoe@yahoo.com",date:"10/08/2020",sale:120,status:"Complete",register:"5 min ago",progress:"40%",position:"Developer",office:"London"},{id:2,name:"Shaun Park",email:"shaunpark@gmail.com",date:"11/08/2020",sale:400,status:"Pending",register:"11 min ago",progress:"23%",position:"Designer",office:"New York"},{id:3,name:"Alma Clarke",email:"alma@gmail.com",date:"12/02/2020",sale:310,status:"In Progress",register:"1 hour ago",progress:"80%",position:"Accountant",office:"Amazon"},{id:4,name:"Vincent Carpenter",email:"vincent@gmail.com",date:"13/08/2020",sale:100,status:"Canceled",register:"1 day ago",progress:"60%",position:"Data Scientist",office:"Canada"}]);return(Ss,n)=>{const c=f("tippy"),L=f("Popper"),h=B("tippy");return s(),a("div",null,[t("div",H,[t("div",E,[t("div",I,[$,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[0]||(n[0]=e=>d(m)("code1"))},z)]),t("div",T,[t("div",V,[t("table",null,[F,t("tbody",null,[(s(!0),a(k,null,b(w.value,e=>(s(),a("tr",{key:e.id},[t("td",O,o(e.name),1),t("td",null,o(e.date),1),t("td",null,o(e.sale),1),t("td",{class:y(["text-center whitespace-nowrap",{"text-success":e.status==="Complete","text-secondary":e.status==="Pending","text-info":e.status==="In Progress","text-danger":e.status==="Canceled"}])},o(e.status),3),t("td",K,[p((s(),a("button",Z,q)),[[h,void 0,"delete"]]),i(c,{target:"delete"},{default:r(()=>[u("Delete")]),_:1})])]))),128))])])])]),d(g).includes("code1")?(s(),C(v,{key:0},{default:r(()=>[G]),_:1})):_("",!0)]),t("div",Q,[t("div",Y,[U,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[1]||(n[1]=e=>d(m)("code2"))},X)]),t("div",tt,[t("div",et,[t("table",st,[ot,t("tbody",null,[(s(!0),a(k,null,b(w.value,e=>(s(),a("tr",{key:e.id},[t("td",at,o(e.name),1),t("td",null,o(e.date),1),t("td",null,o(e.sale),1),t("td",{class:y(["text-center whitespace-nowrap",{"text-success":e.status==="Complete","text-secondary":e.status==="Pending","text-info":e.status==="In Progress","text-danger":e.status==="Canceled"}])},o(e.status),3),t("td",rt,[p((s(),a("button",dt,lt)),[[h,void 0,"delete"]]),i(c,{target:"delete"},{default:r(()=>[u("Delete")]),_:1})])]))),128))])])])]),d(g).includes("code2")?(s(),C(v,{key:0},{default:r(()=>[it]),_:1})):_("",!0)]),t("div",ct,[t("div",ht,[pt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[2]||(n[2]=e=>d(m)("code3"))},gt)]),t("div",mt,[t("div",vt,[t("table",Ct,[_t,t("tbody",null,[(s(!0),a(k,null,b(w.value,e=>(s(),a("tr",{key:e.id},[t("td",wt,o(e.name),1),t("td",null,o(e.date),1),t("td",null,o(e.sale),1),t("td",kt,[p((s(),a("button",bt,ft)),[[h,void 0,"delete"]]),i(c,{target:"delete"},{default:r(()=>[u("Delete")]),_:1})])]))),128))])])])]),d(g).includes("code3")?(s(),C(v,{key:0},{default:r(()=>[xt]),_:1})):_("",!0)]),t("div",Lt,[t("div",Dt,[Mt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[3]||(n[3]=e=>d(m)("code4"))},Pt)]),t("div",St,[t("div",Nt,[t("table",Bt,[At,t("tbody",null,[(s(!0),a(k,null,b(w.value,e=>(s(),a("tr",{key:e.id},[t("td",null,o(e.id),1),t("td",Ht,o(e.name),1),t("td",null,o(e.email),1),t("td",null,o(e.date),1),t("td",Et,[p((s(),a("button",It,Jt)),[[h,void 0,"delete"]]),i(c,{target:"delete"},{default:r(()=>[u("Delete")]),_:1})])]))),128))])])])]),d(g).includes("code4")?(s(),C(v,{key:0},{default:r(()=>[zt]),_:1})):_("",!0)]),t("div",Tt,[t("div",Vt,[Ft,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[4]||(n[4]=e=>d(m)("code5"))},Kt)]),t("div",Zt,[t("div",Rt,[t("table",null,[qt,t("tbody",null,[(s(!0),a(k,null,b(w.value,e=>(s(),a("tr",{key:e.id},[t("td",null,o(e.id),1),t("td",Gt,o(e.name),1),t("td",null,o(e.email),1),t("td",null,[t("span",{class:y(["badge whitespace-nowrap",{"badge-outline-primary":e.status==="Complete","badge-outline-secondary":e.status==="Pending","badge-outline-info":e.status==="In Progress","badge-outline-danger":e.status==="Canceled"}])},o(e.status),3)]),t("td",Qt,o(e.register),1)]))),128))])])])]),d(g).includes("code5")?(s(),C(v,{key:0},{default:r(()=>[Yt]),_:1})):_("",!0)]),t("div",Ut,[t("div",Wt,[Xt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[5]||(n[5]=e=>d(m)("code6"))},ee)]),t("div",se,[t("div",oe,[t("table",null,[ae,t("tbody",null,[(s(!0),a(k,null,b(w.value,e=>(s(),a("tr",{key:e.id},[t("td",null,o(e.id),1),t("td",re,o(e.name),1),t("td",null,[t("div",de,[t("div",{class:y(["h-1.5 rounded-full rounded-bl-full text-center text-white text-xs",{"bg-success":e.status==="Complete","bg-secondary":e.status==="Pending","bg-info":e.status==="In Progress","bg-danger":e.status==="Canceled"}]),style:A(`width: ${e.progress}`)},null,6)])]),t("td",{class:y(["whitespace-nowrap",{"text-success":e.status==="Complete","text-secondary":e.status==="Pending","text-info":e.status==="In Progress","text-danger":e.status==="Canceled"}])},o(e.progress),3),t("td",ne,[t("div",le,[t("div",null,[p((s(),a("button",ie,he)),[[h,void 0,"edit"]]),i(c,{target:"edit"},{default:r(()=>[u("Edit")]),_:1})]),t("div",null,[p((s(),a("button",pe,ge)),[[h,void 0,"delete"]]),i(c,{target:"delete"},{default:r(()=>[u("Delete")]),_:1})])])])]))),128))])])])]),d(g).includes("code6")?(s(),C(v,{key:0},{default:r(()=>[me]),_:1})):_("",!0)]),t("div",ve,[t("div",Ce,[_e,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[6]||(n[6]=e=>d(m)("code7"))},ke)]),be,d(g).includes("code7")?(s(),C(v,{key:0},{default:r(()=>[ye]),_:1})):_("",!0)]),t("div",fe,[t("div",xe,[Le,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[7]||(n[7]=e=>d(m)("code8"))},Me)]),t("div",je,[t("div",Pe,[t("table",null,[Se,t("tbody",null,[(s(!0),a(k,null,b(w.value,e=>(s(),a("tr",{key:e.id},[t("td",Ne,o(e.name),1),t("td",null,o(e.date),1),t("td",null,o(e.sale),1),t("td",null,[t("span",{class:y(["badge whitespace-nowrap",{"bg-primary":e.status==="Complete","bg-secondary":e.status==="Pending","bg-success":e.status==="In Progress","bg-danger":e.status==="Canceled"}])},o(e.status),3)]),t("td",Be,[t("div",Ae,[i(L,{placement:d(x).rtlClass==="rtl"?"bottom-start":"bottom-end",offsetDistance:"0",class:"align-middle"},{content:r(({close:D})=>[t("ul",{onClick:Ns=>D()},Te,8,Ee)]),default:r(()=>[He]),_:1},8,["placement"])])])]))),128))])])])]),d(g).includes("code8")?(s(),C(v,{key:0},{default:r(()=>[Ve]),_:1})):_("",!0)]),t("div",Fe,[t("div",Oe,[Ke,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[8]||(n[8]=e=>d(m)("code9"))},Re)]),t("div",qe,[t("div",Ge,[t("table",null,[Qe,t("tbody",null,[(s(!0),a(k,null,b(w.value,e=>(s(),a("tr",{key:e.id},[t("td",Ye,o(e.name),1),t("td",null,o(e.position),1),t("td",null,o(e.office),1),t("td",Ue,[t("ul",We,[t("li",null,[p((s(),a("a",Xe,es)),[[h,void 0,"edit"]]),i(c,{target:"edit"},{default:r(()=>[u("Edit")]),_:1})]),t("li",null,[p((s(),a("a",ss,as)),[[h,void 0,"delete"]]),i(c,{target:"delete"},{default:r(()=>[u("Delete")]),_:1})])])])]))),128))]),rs])])]),d(g).includes("code9")?(s(),C(v,{key:0},{default:r(()=>[ds]),_:1})):_("",!0)]),t("div",ns,[t("div",ls,[is,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[9]||(n[9]=e=>d(m)("code10"))},hs)]),t("div",ps,[t("div",us,[t("table",null,[gs,t("tbody",null,[(s(!0),a(k,null,b(w.value,e=>(s(),a("tr",{key:e.id},[ms,t("td",vs,o(e.name),1),t("td",null,o(e.date),1),t("td",null,o(e.sale),1),t("td",Cs,[t("ul",_s,[t("li",null,[p((s(),a("a",ws,bs)),[[h,void 0,"settings"]]),i(c,{target:"settings"},{default:r(()=>[u("Settings")]),_:1})]),t("li",null,[p((s(),a("a",ys,xs)),[[h,void 0,"edit"]]),i(c,{target:"edit"},{default:r(()=>[u("Edit")]),_:1})]),t("li",null,[p((s(),a("a",Ls,Ms)),[[h,void 0,"delete"]]),i(c,{target:"delete"},{default:r(()=>[u("Delete")]),_:1})])])])]))),128))])])])]),d(g).includes("code10")?(s(),C(v,{key:0},{default:r(()=>[js]),_:1})):_("",!0)])])])}}});export{Hs as default};
