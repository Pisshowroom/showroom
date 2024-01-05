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
      :url="`/admin/returns/index`"
      :cols="cols"
      :actions="actions"
      :title="'Daftar Pengembalian Pesanan'"
      :dropdownAction="false"
      :sortable="false"
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
const axios = <Axios>inject("axios");

import auth from "@/services/auth.service";
import Swal from "sweetalert2";

const datatable: any = ref(null);
let user: any = auth.users();

useHead({
  title: "Pengembalian Pesanan",
});

const cols =
  ref([
    { field: "payment_identifier", title: "No. Invoice", sort: false },
    {
      field: "nama_user",
      title: "Nama Pembeli",
      sort: false,
      cellRenderer: (item: any) => {
        return item?.user?.name ?? "-";
      },
    },
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
          case "RequestedReturn":
            badgeBgColor = "#FFC107";
            break;
          case "ReturnDeclined":
            badgeBgColor = "#FF0000";
            break;
          case "ReturnAccepted":
            badgeBgColor = "#f19d00";
            break;
          case "ReturnShipped":
            badgeBgColor = "#0000FF";
            break;
          case "ReturnDelivered":
            badgeBgColor = "#9a009a";
            break;
          case "ReturnCompleted":
            badgeBgColor = "#28A745";
            break;
          default:
            badgeBgColor = "#000000";
            break;
        }

        return `<span class="badge" style="background-color: ${badgeBgColor};">${badgeText}</span>`;
      },
    },

    {
      field: "return_total",
      title: "Total Pengembalian",
      sort: false,
      cellRenderer: (item: any) => {
        return globalComponents.formatPrice(item.refund_total);
      },
    },
    { field: "actions", title: "Aksi", slot: true, sort: false },
  ]) || [];

const actions = ref([
  {
    type: "previewIcon",
    to: ({ value }) => {
      return `/admin/refund/detail/${value.id}`;
    },
  },
]);

let statusRequest = ref(null);

/* 

    const REQUESTED_RETURN = 'RequestedReturn';
    const RETURN_DECLINED = 'ReturnDeclined';
    const RETURN_ACCEPTED = 'ReturnAccepted';
    const RETURN_SHIPPED = 'ReturnShipped';
    const RETURN_DELIVERED = 'ReturnDelivered';
    const RETURN_COMPLETED = 'ReturnCompleted';
    just take the string, into value strinh
    */
const statusesOption: any = ref([
  "RequestedReturn",
  "ReturnDeclined",
  "ReturnAccepted",
  "ReturnShipped",
  "ReturnDelivered",
  "ReturnCompleted",
]);

let filterParams = reactive({});

watch(statusRequest, (newVal, oldVal) => {
  if (newVal === null || newVal === undefined) {
    datatable.value.getData();
  }
});

const setStatusRequest = (value: any) => {
  // statusRequest.value = value;
  nextTick(() => {
    console.log("statusRequest.value");
    console.log(statusRequest.value);
    Object.assign(filterParams, { statusRequest: statusRequest.value });
    runTheFilter();
  });
};

const runTheFilter = (value?: any) => {
  datatable.value.getData(filterParams);
};

const getData = async () => {};

onMounted(async () => {
  await getData();
});
</script>
  
  
  