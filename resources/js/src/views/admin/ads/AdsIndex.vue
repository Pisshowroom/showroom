<template>
  <div>
    <Table
      :url="`/admin/ads`"
      :cols="cols"
      :title="'Daftar Iklan'"
      :searching="true"
      :actions="actions"
      ref="datatable"
      :addRoute="'/admin/ads/form'"
      :addName="'Tambah'"
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
const axios = <Axios>inject("axios");
let data: any = ref({});
const titleActivity: any = ref("Harian");
const datatable: any = ref(null);
const titleActivity2: any = ref("Harian");
let user: any = auth.users();
import Swal from 'sweetalert2';

useHead({
  title: "Master Data Iklan",
});

const cols =
  ref([
    { field: "number", title: "No", slot: true, sort: false },
    {
      field: "page",
      title: "Halaman",

      cellRenderer: (item: any) => {
        if (item.page == "home") return "Beranda";
        else if (item.page == "detail_product") return "Detail Produk";
        else if (item.page == "detail_article") return "Detail Artikel";
        else if (item.page == "all_product") return "Semua Produk";
        else return "Beranda";
      },
      sort: false,
    },
    {
        field: "section",
        title: "Letak iklan",
        cellRenderer: (item: any) => {
          if (item.section == "under_recently_viewed_items") return "Di bawah Item yang baru dilihat";
          else if (item.section == "above_best_selling_products") return "Diatas Produk Terlaris";
          else if (item.section == "below_best_selling_products") return "Dibawah Produk Terlaris";
          else if (item.section == "above_recommended_products") return "Diatas Produk yang direkomendasikan";
          else if (item.section == "under_discount_products") return "Dibawah Produk Diskon";
          else if (item.section == "side_slider") return "Samping Slider";
          else if (item.section == "right_end_slider") return "Paling ujung dari Slider";
          else if (item.section == "above_list_product") return "Diatas List Produk";
          else if (item.section == "below_list_seller") return "Dibawah list penjual";
          else if (item.section == "ads_detail") return "Bagian detail Produk";
          else if (item.section == "ads_article") return "Bagian detail Artikel";
          else return "Beranda";
        },
      sort: false,
    },
    { field: "actions", title: "Aksi", slot: true, sort: false },
  ]) || [];

const actions = ref([
  {
    type: "editIcon",
    to: ({ value }) => {
      return `/admin/ads/edit/${value.id}`;
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
            axios
              .delete(`/admin/ads/${value.id}`)
              .then((res) => {
                toast.fire("Data berhasil dihapus.");
                datatable.value.getData();
              });
          } else if (result.dismiss === Swal.DismissReason.cancel) {
          }
        });
    },
  },
]);

var statsCount: any = ref({});
const activitySeries: any = ref([]);

const getData = async () => {
  store.isShowMainLoader = true;
  store.isShowMainLoader = false;
};

onMounted(async () => {
  await getData();
});
</script>


