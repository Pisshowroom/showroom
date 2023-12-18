<template>
  <div>
    <Table :url="`/admin/user/index`" :cols="cols" :actions="actions" :title="'Daftar Pengguna'" :dropdownAction="true" :searching="true" ref="datatable">
    </Table>

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
import auth from '@/services/auth.service';
const store = useAppStore();
const axios = <Axios>inject('axios');
let data: any = ref({});
const titleActivity: any = ref('Harian');
const datatable: any = ref(null);
const titleActivity2: any = ref('Harian');
let user: any = auth.users();


useHead({
  title: 'Pesanan',
});

const cols =
  ref([
    // { field: 'id', title: 'No', slot: true, sort: false },
    { field: 'name', title: 'Name', sort: false },
    { field: 'email', title: 'Email', sort: false },
    {
      field: 'phone_number', title: 'Nomor HP', sort: false, cellRenderer: (item: any) => {
        return item.phone_number != null ? ("0" + item.phone_number) : '-';
      },
    },
    {
      field: 'balance', title: 'Saldo', sort: false,
      cellRenderer: (item: any) => {
        return globalComponents.formatThousand(item.balance);
      },
    },
    // { field: 'balance', title: 'Balance', sort: false },
    { field: 'actions', title: 'Aksi', slot: true, sort: false },
  ]) || [];

const actions = ref([
  {
    type: 'editDropdown',
    to: ({ value }) => {
      return `/admin/user`;
    },
  },
  {
    type: 'deleteIcon',
    click: ({ value }) => {
      // return `/admin/user`;
    },
  },  
 /*  {
    type: 'editIcon',
    to: ({ value }) => {
      return `/admin/user`;
    },
  }, */
  /* 
  {
    type: 'previewDropdown',
    to: ({ value }) => {
      return `/institution/student/detail/${value.id}`;
    },
  }, */
]);


var statsCount: any = ref({});
const activitySeries: any = ref([]);

const getData = async () => {
};




onMounted(async () => {
  await getData();
});
</script>
  
  
  