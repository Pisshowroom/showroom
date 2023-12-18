<template>
    <div>
        <Table :url="`/admin/order/index`" :cols="cols" :title="'Daftar Pesanan'" :dropdownAction="true" :searching="true" ref="datatable">
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
    // { field: 'number', title: 'No', slot: true, sort: false },
    { field: 'payment_identifier', title: 'No. Invoice', sort: false },
    { field: 'market_fee_buyer', title: 'PI Fee Buyer', sort: false },
    { field: 'market_fee_seller', title: 'PI Fee Seller', sort: false },
    { field: 'payment_channel', title: 'Channel Pembayaran', sort: false },
    {
      field: 'total',  
      title: "Total",
      sort: false,
      cellRenderer: (item: any) => {
         return globalComponents.formatPrice(item.total_final ? item.total_final : item.total);
      },
    },
    /* {
      field: 'faculty',
      title: type == 'campus' ? 'Fakultas' : type == 'school' ? 'Kelas' : type == 'business_organization' ? 'Divisi' : '',
      sort: false,
    },
    {
      field: 'educational_user.educational_prodi.name',
      title: type == 'campus' ? 'Prodi' : '',
      sort: false,
      cellRenderer: (item: any) => {
        if (type == 'campus') return item.educational_user?.educational_prodi?.name;
        else return '';
      },
    },
    {
      field: 'educational_user.generation',
      sort: false,
      title: 'Angkatan',
      cellRenderer: (item: any) => {
        return item.educational_user?.generation;
      },
    },
    {
      field: 'nameWithRoundedImage3',
      title: type == 'campus' ? 'Dosen Pembimbing' : type == 'school' ? 'Guru Pembimbing' : type == 'business_organization' ? 'Ustadz Pembimbing' : '',
      sort: false,
    },
    {
      field: 'label',
      title: 'Klasifikasi',
      cellRenderer: (item: any) => {
        return item && item.educational_user && item.educational_user.educational_label ? item.educational_user.educational_label.label : '';
      },
      sort: false,
    }, */
    // { field: 'actions', title: 'Aksi', slot: true, sort: false },
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
    store.isShowMainLoader = true;
    const tempData = (await axios.get('/admin/dashboard2')).data;
    statsCount.value = (await axios.get('/admin/dashboard2')).data;
    console.log(statsCount.value);
    store.isShowMainLoader = false;
    // const response = (await axios.get('/admin/educational-institution/teacher/murajaah')).data;


    // data.value = response;
};




onMounted(async () => {
    if (auth.isAuthenticated() && auth.getToken() != false) {
        await getChart();
    }
    await getData();
});
</script>
  
  
  