<template>
  <div>
    <Table :url="`/admin/user/index`" :cols="cols" :title="'Daftar Pengguna'" :dropdownAction="true" :searching="true" ref="datatable">
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
      field: 'phone_number', title: 'Nomor HP', sort: false, callRenderer: (item: any) => {
        // var thePhoneNumber =  item.phone_number != null ? ("asdasd" + item.phone_number) : '-';
        return "asjdpasjdasdi sdio";
      },
    },
    {
      field: 'balance', title: 'Saldo', sort: false,
      cellRenderer: (item: any) => {
        return globalComponents.formatThousand(item.balance);
      },
    },
    // { field: 'balance', title: 'Balance', sort: false },
  ]) || [];

const actions = ref([
  /* {
    type: 'editDropdown',
    to: ({ value }) => {
      return `/institution/student/edit/${value.id}`;
    },
  },
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
  
  
  