<template>
  <div>
    <Table
      :url="`/admin/refunds/index`"
      :cols="cols"
      :actions="actions"
      :title="'Daftar Refund'"
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
import { useHead } from "@vueuse/head";
import { useAppStore } from "@/stores/index";
import globalComponents from "@/global-components";

// @ts-ignore
import Table from "@/components/plugins/Table.vue";
import { inject, onMounted, reactive, ref, computed } from "vue";
import { Axios } from "axios";
import auth from "@/services/auth.service";
import Swal from "sweetalert2";

const store = useAppStore();
const axios = <Axios>inject("axios");
let data: any = ref({});
const datatable: any = ref(null);
let user: any = auth.users();

useHead({
  title: "Refund",
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
      field: "refund_total",
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
    type: "editIcon",
    to: ({ value }) => {
      // return `/admin/refund/edit/${value.id}`;
      return "";
    },
  },
  /* {
    type: "deleteIcon",
    click: ({ value }) => {
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          popup: "sweet-alerts",
          confirmButton: "btn btn-danger",
          cancelButton: "btn btn-dark ltr:mr-3 rtl:ml-3",
        },
        buttonsStyling: false,
      });
      const toast = Swal.mixin({
        toast: true,
        position: "bottom-right",
        showConfirmButton: false,
        customClass: {
          popup: "color-success",
        },
        timer: 2000,
        showCloseButton: true,
      });
      swalWithBootstrapButtons
        .fire({
          title: "Hapus data?",
          text: "Apakah kamu yakin untuk menghapus data ini, Data yang dihapus dapat mempengaruhi fungsi pada Aplikasi Mobile !",
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Hapus",
          cancelButtonText: "Batal",
          reverseButtons: true,
          padding: "2em",
        })
        .then((result) => {
          if (result.value) {
            axios.delete(`/admin/refunds/${value.id}`).then((res) => {
              toast.fire("Data berhasil dihapus.");
              datatable.value.getData();
            });
          } else if (result.dismiss === Swal.DismissReason.cancel) {
          }
        });
    },
  }, */
]);

const getData = async () => {};

onMounted(async () => {
  await getData();
});
</script>
  
  
  