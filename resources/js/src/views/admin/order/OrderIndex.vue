<template>
  <div>
    <div class="flex flex-wrap mb-2 gap-3">
      <div class="flex flex-col">
        <label class="font-semibold" for="faculty">Status</label>
        <multiselect
          id="status"
          v-model="statusRequest"
          :options="statusesOption"
          :searchable="true"
          :multiple="false"
          selected-label=""
          :placeholder="'Data tidak ditemukan'"
          select-label=""
          deselect-label=""
          @select="setStatusRequest"
        ></multiselect>
      </div>
    </div>
    <Table
      :url="`/admin/order/index`"
      :cols="cols"
      :actions="actions"
      :title="'Daftar Pesanan'"
      :dropdownAction="false"
      :searching="true"
      ref="datatable"
    >
    </Table>

    <div :style="{ height: '70vh' }"></div>
  </div>
</template>
  
<script setup lang="ts">
import Multiselect from "@suadelabs/vue3-multiselect";
import "@suadelabs/vue3-multiselect/dist/vue3-multiselect.css";
import { useHead } from "@vueuse/head";
import { useAppStore } from "@/stores/index";
import globalComponents from "@/global-components";

// @ts-ignore
import Table from "@/components/plugins/Table.vue";
import { inject, onMounted, reactive, ref, nextTick, watch } from "vue";
import { Axios } from "axios";
import auth from "@/services/auth.service";
const store = useAppStore();
const axios = <Axios>inject("axios");
let data: any = ref({});
const titleActivity: any = ref("Harian");
const datatable: any = ref(null);
const titleActivity2: any = ref("Harian");
let user: any = auth.users();

useHead({
  title: "Pesanan",
});

const cols =
  ref([
    // { field: 'number', title: 'No', slot: true, sort: false },
    { field: "payment_identifier", title: "No. Invoice", sort: true },
    {
      field: "nama_user",
      title: "Nama Pembeli",
      sort: false,
      cellRenderer: (item: any) => {
        return item?.user?.name ?? "-";
      },
    },
    /*    { field: "market_fee_buyer", title: " Fee Buyer", sort: false },
    { field: "market_fee_seller", title: " Fee Seller", sort: false }, */
    { field: "payment_channel", title: "Channel Pembayaran", sort: false },
    {
      field: "created_at",
      title: "Tanggal",
      sort: false,
      cellRenderer: (item: any) => {
        return globalComponents.formatDateTime(item.created_at);
      },
    },
    // { field: "status", title: "Status", sort: false , cellRenderer: (item: any) => {
    {
      field: "status",
      title: "Status",
      sort: false,
      cellRenderer: (item: any) => {
        let badgeBgColor = "";
        let badgeText = item.status;

        switch (badgeText) {
          case "Pending":
            badgeBgColor = "#FFC107";
            break;
          case "Paid":
            badgeBgColor = "#28A745";
            break;
          case "Completed":
            badgeBgColor = "#007BFF";
            break;
          case "ProcessedBySeller":
            badgeBgColor = "#17A2B8";
            break;
          case "Shipped":
            badgeBgColor = "#6610F2";
            break;
          case "Delivered":
            badgeBgColor = "#894dd7";
            break;
          case "ExpiredPayment":
            badgeBgColor = "#6C757D";
            break;
          case "Cancelled":
            badgeBgColor = "#FF0000";
            break;
          default:
            badgeBgColor = "#000000";
            break;
        }

        return `<span class="badge" style="background-color: ${badgeBgColor};">${badgeText}</span>`;
      },
    },

    {
      field: "total",
      title: "Total",
      sort: false,
      cellRenderer: (item: any) => {
        return globalComponents.formatPrice(
          item.total_final ? item.total_final : item.total
        );
      },
    },
    { field: "actions", title: "Aksi", slot: true, sort: false },
  ]) || [];

const actions = ref([
  {
    type: "previewIcon",
    to: ({ value }) => {
      return `/admin/order/detail/${value.id}`;
    },
  },
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

let statusRequest = ref(null);

watch(statusRequest, (newVal, oldVal) => {
  if (newVal === null || newVal === undefined) {
    datatable.value.getData();
    // clearFilterIndicator.value = false;
  }
});

const statusesOption: any = ref([
  "Pending",
  "Paid",
  "Completed",
  "ProcessedBySeller",
  "Shipped",
  "Delivered",
  "ExpiredPayment",
  "Cancelled",
]);

/* 
"RequestedRefund",
  "RefundAccepted",
  "RefundDone",
  "RefundDeclined",
  "RequestedReturn",
  "ReturnAccepted",
  "ReturnShipped",
  "ReturnDelivered",
  "ReturnCompleted",
  "Complaint",
  "ComplaintAccepted",
  "ComplaintDeclined",
  "ComplaintCompleted",
*/
let filterParams = reactive({});
// let clearFilterIndicator = ref(false);

const setStatusRequest = (value: any) => {
  // statusRequest.value = value;
  nextTick(() => {
    console.log("statusRequest.value");
    console.log(statusRequest.value);
    Object.assign(filterParams, { statusRequest: statusRequest.value });
    runTheFilter();
  });
};

const getData = async () => {
  // store.isShowMainLoader = true;
  // store.isShowMainLoader = false;
  // const response = (await axios.get('/admin/educational-institution/teacher/murajaah')).data;
  // data.value = response;
};

/* & not USED anymore */
/* const clearFilter = () => {
  if (statusRequest.value != null) {
    clearFilterIndicator.value = true;
    statusRequest.value = null;
    datatable.value.getData();

    setTimeout(() => {
      clearFilterIndicator.value = false;
    }, 3000);
  }
}; */

const runTheFilter = (value?: any) => {
  datatable.value.getData(filterParams);
};

onMounted(async () => {
  if (auth.isAuthenticated() && auth.getToken() != false) {
  }
  // await getData();
  // datatable.value.getData();
});
</script>
  
  
  