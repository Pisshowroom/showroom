<template>
  <div>
    <Table
      :url="`/admin/user/index`"
      :cols="cols"
      :actions="actions"
      :title="'Daftar Pengguna'"
      :dropdownAction="true"
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
const store = useAppStore();
import Swal from "sweetalert2";
const axios = <Axios>inject("axios");
let data: any = ref({});
const titleActivity: any = ref("Harian");
const datatable: any = ref(null);
const titleActivity2: any = ref("Harian");
let user: any = auth.users();

useHead({
  title: "Pengguna",
});

const cols =
  ref([
    { field: "id", title: "ID", sort: false },
    { field: "name", title: "Name", sort: false },
    { field: "email", title: "Email", sort: false },
    {
      field: "phone_number",
      title: "Nomor HP",
      sort: false,
      cellRenderer: (item: any) => {
        return item.phone_number != null ? "0" + item.phone_number : "-";
      },
    },
    {
      field: "balance",
      title: "Saldo",
      sort: false,
      cellRenderer: (item: any) => {
        return globalComponents.formatThousand(item.balance);
      },
    },
    // { field: 'balance', title: 'Balance', sort: false },
    { field: "actions", title: "Aksi", slot: true, sort: false },
  ]) || [];

const actions = ref([
  {
    type: "previewDropdown",
    to: ({ value }) => {
      return `/institution/student/edit/${value.id}`;
    },
  },
  {
    type: "editDropdown",
    to: ({ value }) => {
      return `/institution/student/edit/${value.id}`;
    },
  },
  {
    type: "deleteDropdown",
    /* to: ({ value }) => {
      return `/institution/student/edit/${value.id}`;
    }, */
    click: ({ value }) => {
      // popup SweetAlert
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
          text: "Apakah kamu yakin untuk menghapus data ini",
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Hapus",
          cancelButtonText: "Batal",
          reverseButtons: true,
          padding: "2em",
        })
        .then((result) => {
          if (result.value) {
            axios.delete(`/admin/user/${value.id}`).then((res) => {
              toast.fire("Data berhasil dihapus.");
              datatable.value.getData();
            });
          } else if (result.dismiss === Swal.DismissReason.cancel) {
          }
        });
    },
  },
  /* {
    type: "editIcon",
    to: ({ value }) => {
      return `/admin/user/detail/${value.id}`;
    },
  },
  {
    type: "deleteIcon",
    click: ({ value }) => {
      // return `/admin/user`;
    },
  }, */
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

const getData = async () => {};

onMounted(async () => {
  await getData();
});
</script>
    
    
    