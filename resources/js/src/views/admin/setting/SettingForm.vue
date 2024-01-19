<template>
  <div>
    <ul
      class="flex space-x-2 rtl:space-x-reverse mt-4 sm:mt-0 mb-4 mx-4 sm:mx-0"
    >
      <li>
        <router-link
          to="/admin/setting/index"
          class="text-primary hover:underline font-medium"
          >Master Data Pengaturan</router-link
        >
      </li>
      <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
        <span class="font-medium">{{
          currentRouteId
            ? "Edit Pengaturan"
            : !currentRouteId
            ? "Tambah Pengaturan"
            : "Tambah Pengaturan"
        }}</span>
      </li>
    </ul>
    <p class="sm:pt-4 px-4 sm:px-0 text-xl font-bold">
      {{
        currentRouteId
          ? "Edit Pengaturan"
          : !currentRouteId
          ? "Tambah Pengaturan"
          : "Tambah Pengaturan"
      }}
    </p>
    <div class="pt-3">
      <form
        class="flex flex-col lg:flex-row gap-5"
        @submit.prevent="handleSubmit"
      >
        <div
          class="w-full lg:w-3/4 border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]"
        >
          <p class="pb-3 text-lg font-semibold">Data Pengaturan</p>
          <div class="flex-1">
            <div class="grid grid-cols-1 gap-5">
              <div class="flex flex-col gap-2">
                <label class="w-full md:mb-0 font-semibold" for="page"
                  >Nama/Judul</label
                >
                <input
                  class="md:w-4/4 form-input"
                  id="name"
                  type="text"
                  required
                  placeholder="Masukkan nama"
                  v-model="form.name"
                />
              </div>

              <div class="flex flex-col gap-2">
                <label class="w-full md:mb-0 font-semibold">Tipe</label>
                <div class="flex flex-row gap-2">
                  <div>
                    <input
                      type="radio"
                      id="number"
                      value="number"
                      v-model="form.type"
                    />
                    <label for="number">Number</label>
                  </div>
                  <div>
                    <input
                      type="radio"
                      id="textarea"
                      value="textarea"
                      v-model="form.type"
                    />
                    <label for="textarea">Textarea</label>
                  </div>
                </div>
              </div>

              <div class="flex flex-col gap-2">
                <label class="w-full md:mb-0 font-semibold" for="page"
                  >Nilai / Isi</label
                >
                <template v-if="form.type === 'number'">
                  <input
                    class="md:w-4/4 form-input"
                    id="name"
                    type="number"
                    required
                    placeholder="Nilai / Isi"
                    v-model="form.value"
                  />
                </template>
                <template v-else>
                  <textarea
                    class="md:w-4/4 form-input"
                    id="name"
                    required
                    placeholder="Nilai / Isi"
                    v-model="form.value"
                  ></textarea>
                </template>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/4" v-if="form.name != 'commerce_balance'">
          <div
            class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]"
          >
            <button
              type="submit"
              @submit.prevent="handleSubmit"
              class="btn btn-success w-full btn-lg"
            >
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0"
              >
                <path
                  d="M3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 11.6585 22 11.4878 21.9848 11.3142C21.9142 10.5049 21.586 9.71257 21.0637 9.09034C20.9516 8.95687 20.828 8.83317 20.5806 8.58578L15.4142 3.41944C15.1668 3.17206 15.0431 3.04835 14.9097 2.93631C14.2874 2.414 13.4951 2.08581 12.6858 2.01515C12.5122 2 12.3415 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355Z"
                  stroke="currentColor"
                  stroke-width="1.5"
                />
                <path
                  d="M17 22V21C17 19.1144 17 18.1716 16.4142 17.5858C15.8284 17 14.8856 17 13 17H11C9.11438 17 8.17157 17 7.58579 17.5858C7 18.1716 7 19.1144 7 21V22"
                  stroke="currentColor"
                  stroke-width="1.5"
                />
                <path
                  opacity="0.5"
                  d="M7 8H13"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                />
              </svg>
              Simpan
            </button>
            <button
              type="button"
              @click="deleteSetting"
              class="btn btn-danger w-full btn-lg mt-4"
              v-if="currentRouteId"
            >
              <svg
                class="mr-2"
                width="20"
                height="20"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13.6456 4.25098H3.02051"
                  stroke="white"
                  stroke-width="0.9375"
                  stroke-linecap="round"
                />
                <path
                  d="M12.6042 5.81348L12.3167 10.1254C12.2061 11.7847 12.1508 12.6144 11.6101 13.1202C11.0695 13.626 10.238 13.626 8.57501 13.626H8.09166C6.42866 13.626 5.59716 13.626 5.05653 13.1202C4.51589 12.6144 4.46058 11.7847 4.34996 10.1254L4.0625 5.81348"
                  stroke="white"
                  stroke-width="0.9375"
                  stroke-linecap="round"
                />
                <path
                  opacity="0.5"
                  d="M6.77051 7.37598L7.08301 10.501"
                  stroke="white"
                  stroke-width="0.9375"
                  stroke-linecap="round"
                />
                <path
                  opacity="0.5"
                  d="M9.89551 7.37598L9.58301 10.501"
                  stroke="white"
                  stroke-width="0.9375"
                  stroke-linecap="round"
                />
                <path
                  opacity="0.5"
                  d="M4.89551 4.25098C4.93043 4.25098 4.94789 4.25098 4.96373 4.25058C5.47838 4.23753 5.9324 3.91029 6.10752 3.42618C6.11291 3.41128 6.11843 3.39472 6.12947 3.36159L6.19015 3.17955C6.24195 3.02415 6.26785 2.94645 6.3022 2.88048C6.43926 2.61727 6.69285 2.4345 6.98589 2.38771C7.05934 2.37598 7.14124 2.37598 7.30505 2.37598H9.36097C9.52477 2.37598 9.60668 2.37598 9.68013 2.38771C9.97317 2.4345 10.2268 2.61727 10.3638 2.88048C10.3982 2.94645 10.4241 3.02415 10.4759 3.17955L10.5365 3.36159C10.5476 3.39467 10.5531 3.41129 10.5585 3.42618C10.7336 3.91029 11.1876 4.23753 11.7023 4.25058C11.7181 4.25098 11.7356 4.25098 11.7705 4.25098"
                  stroke="white"
                  stroke-width="0.9375"
                />
              </svg>
              Hapus
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup lang="ts">
import "@suadelabs/vue3-multiselect/dist/vue3-multiselect.css";
import { useHead } from "@vueuse/head";
import { useAppStore } from "@/stores/index";
import { ref, onMounted, computed, reactive, watch, inject } from "vue";
import { useRoute, useRouter } from "vue-router";
import auth from "@/services/auth.service";
import { useVuelidate } from "@vuelidate/core";
import { required } from "@vuelidate/validators";
import { Axios } from "axios";
import globalComponents from "@/global-components";
const router = useRouter();

const route = useRoute();
import Swal from "sweetalert2";
import "flatpickr/dist/flatpickr.css";
let user: any = auth.users();
let currentRouteId: any = route.params.id;

let form: any = ref({
  /* name: "",
  // image: "", */
});
const rules = {
  form: {
    name: { required },
    type: { required },
    value: { required },
  },
};
const v1 = useVuelidate(rules, { form });

const store = useAppStore();
const axios = <Axios>inject("axios");
const file: any = ref(null);

onMounted(async () => {
  if (currentRouteId) {
    form.value = (await axios.get(`/admin/settings/${currentRouteId}`)).data;
  } else {
  }
});

useHead({
  title: currentRouteId
    ? "Edit Pengaturan"
    : !currentRouteId
    ? "Tambah Pengaturan"
    : "",
});
const handleFileChange = (event) => {
  form.value.image = event.target.files[0];
};
const handleSubmit = async () => {
  const isFormCorrect = await v1.value.$validate();
  console.log("fform" + form.value);
  if (isFormCorrect) {
    let fform = globalComponents.dataToFormData(form.value);

    store.isShowMainLoader = true;
    axios
      .post("/admin/settings", fform)
      .then((res) => {
        store.isShowMainLoader = false;
        console.log(res.data);
        console.log(res.status);
        console.log(res.statusText);
        if (res.data.message) {
          var statusCodeColor = res.status < 300 ? "success" : "danger";
          globalComponents.handleToast(statusCodeColor, res.data.message);
        } else {
          router.push({ name: "admin.setting.index" });
          globalComponents.handleToast(
            "success",
            currentRouteId
              ? "Berhasil mengedit data"
              : !currentRouteId
              ? "Berhasil menambahkan data"
              : ""
          );
        }
      })
      .catch((e) => {
        store.isShowMainLoader = false;
        let message = e.response?.data?.message || e.message;
        globalComponents.handleToast("danger", message);
      });
  } else {
    globalComponents.handleToast("danger", "Lengkapi data dengan benar");
  }
};

const deleteSetting = () => {
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
        axios.delete(`/admin/settings/${form.value.id}`).then((res) => {
          toast.fire("Pengaturan berhasil dihapus.");
          router.push("/admin/setting/index");
        });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
      }
    });
};
</script>

