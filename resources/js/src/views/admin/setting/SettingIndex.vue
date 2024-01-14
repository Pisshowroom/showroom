<template>
  <div>
    <Table
      :url="`/admin/settings/index`"
      :cols="cols"
      :addName="'Tambah'"
      :addRoute="'/admin/setting/form'"
      :actions="actions"
      :title="'Daftar Pengaturan'"
      :dropdownAction="false"
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
  title: "Pengaturan",
});

const cols =
  ref([
    { field: "id", title: "ID", sort: false },
    { field: "name", title: "Nama", sort: false },
    { field: "value", title: "Nilai", sort: false },
    // { field: 'balance', title: 'Balance', sort: false },
    { field: "actions", title: "Aksi", slot: true, sort: false },
  ]) || [];

const actions = ref([
  {
    type: "editIcon",
    to: ({ value }) => {
      return `/admin/setting/edit/${value.id}`;
    },
  },
  {
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
            axios.delete(`/admin/settings/${value.id}`).then((res) => {
              toast.fire("Data berhasil dihapus.");
              datatable.value.getData();
            });
          } else if (result.dismiss === Swal.DismissReason.cancel) {
          }
        });
    },
  },
]);

const getData = async () => {};

onMounted(async () => {
  await getData();
});
</script>
  
  
  