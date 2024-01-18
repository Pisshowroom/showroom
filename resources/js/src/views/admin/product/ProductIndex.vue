<template>
  <div>
    <!-- <div class="flex flex-wrap mb-2 gap-3">
      <div class="flex flex-col">
        <label class="font-semibold" for="faculty">Kategori</label>
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
    </div> -->
    <Table
      :url="`/admin/products/index`"
      :cols="cols"
      :actions="actions"
      :title="'Daftar Produk'"
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
const axios = <Axios>inject("axios");
let data: any = ref({});
const datatable: any = ref(null);
let user: any = auth.users();

useHead({
  title: "Produk",
});

const cols =
  ref([
    { field: "id", title: "ID", sort: true },
    { field: "name", title: "Product Name", sort: true },
    {
      field: "category_id",
      title: "Category",
      sort: true,
      cellRenderer: (item: any) => {
        return item?.category?.name || "-";
      },
    },
    {
      field: "price",
      title: "Price",
      sort: true,
      cellRenderer: (item: any) => {
        return globalComponents.formatPrice(item.price);
      },
    },
    { field: "stock", title: "Stock", sort: true },
    {
      field: "discount",
      title: "Discount",
      sort: true,
      cellRenderer: (item: any) => {
        return item?.discount ? item?.discount + "%" : "-";
      },
    },
    { field: "unit", title: "Unit", sort: true },
    {
      field: "weight",
      title: "Weight",
      sort: true,
      cellRenderer: (item: any) => {
        return item?.weight ? item?.weight + " g" : "-";
      },
    },
    { field: "actions", title: "Actions", slot: true, sort: false },
  ]) || [];

const actions = ref([
  {
    type: "previewIcon",
    to: ({ value }) => {
      return `/admin/product/detail/${value.id}`;
    },
  },
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
  
  
  