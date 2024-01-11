<template>
  <div>
    <ul
      class="flex space-x-2 rtl:space-x-reverse mt-4 sm:mt-0 mb-4 mx-4 sm:mx-0"
    >
      <li>
        <router-link
          to="/admin/refund/index"
          class="text-primary hover:underline font-medium"
          >Refund</router-link
        >
      </li>
      <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
        <span class="font-medium">{{ `Detail Pengguna` }}</span>
      </li>
    </ul>
    <p class="sm:pt-4 px-4 sm:px-0 text-xl font-bold">
      {{ `Detail Pengguna` }}
    </p>
    <div class="pt-3 flex flex-col lg:flex-row gap-5">
      <div
        class="w-full l-falseg:w-3/4 border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]"
      >
        <!-- <p class="pb-3 text-lg font-semibold">Data ...</p> -->
        <div class="flex-1">
          <div class="flex flex-col sm:flex-row">
            <!-- LEFT -->
            <div
              class="flex flex-col gap-2 theParent w-full sm:w-full md:w-1/3"
            >
              <div class="flex flex-col">
                <label class="w-full mb-0 font-bold" for="name">Name</label>
                <p>{{ form.name }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="email"
                  >Email</label
                >
                <p>{{ form.email }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="phone_number"
                  >Phone Number</label
                >
                <p>
                  {{ globalComponents.formatPhoneNumber(form.phone_number) }}
                </p>
              </div>
              <div class="flex flex-col gap-2">
                <label class="w-full md:mb-0 font-bold" for="birth_date"
                  >Birth Date</label
                >
                <p>{{ form.birth_date }}</p>
              </div>
            </div>

            <!-- RIGHT -->
            <div
              class="flex flex-col gap-2 theParent w-full sm:w-full md:w-1/3"
            >
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="balance"
                  >Balance</label
                >
                <p>{{ globalComponents.formatNumber(form.balance, true) }}</p>
              </div>
              <div v-if="form.is_seller == 1">
                <div class="flex flex-col">
                  <label class="w-full md:mb-0 font-bold" for="seller_name"
                    >Seller Name</label
                  >
                  <p>{{ form.seller_name }}</p>
                </div>
                <div class="flex flex-col">
                  <label class="w-full md:mb-0 font-bold" for="is_seller_active"
                    >Status Aktif Seller</label
                  >
                  <p>{{ form.is_seller_active ? "Ya" : "Tidak" }}</p>
                </div>
                <div class="flex flex-col">
                  <label
                    class="w-full md:mb-0 font-bold"
                    for="phone_number_seller"
                    >Phone Number Seller</label
                  >
                  <p>
                    {{
                      globalComponents.formatPhoneNumber(
                        form.phone_number_seller
                      )
                    }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="w-full l-falseg:w-3/4 border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]"
      >
        <!-- Addresses Table -->
        <div class="flex flex-col gap-2">
          <label class="w-full md:mb-0 font-bold">Daftar Alamat Pengguna</label>
          <div class="table-responsives">
            <table class="table-auto w-full">
              <thead>
                <tr>
                  <th class="px-4 py-2">ID</th>
                  <th class="px-4 py-2">Street</th>
                  <th class="px-4 py-2">City</th>
                  <th class="px-4 py-2">Person Name</th>
                  <th class="px-4 py-2">Phone Number</th>
                  <th class="px-4 py-2">Alamat Utama</th>
                  <th>Alamat Utama Seller</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="address in form.addresses" :key="address.id">
                  <td class="border px-4 py-2">{{ address.id }}</td>
                  <td class="border px-4 py-2">{{ address.street }}</td>
                  <td class="border px-4 py-2">
                    {{ address.ro_city.city_name }}
                  </td>
                  <td class="border px-4 py-2">{{ address.person_name }}</td>
                  <td class="border px-4 py-2">{{ address.phone_number }}</td>
                  <td class="border px-4 py-2">
                    {{ address.main ? "Ya" : "Tidak" }}
                  </td>
                  <td>
                    {{ address.for_seller ? "Ya" : "Tidak" }}
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div :style="{ height: '50vh' }"></div>
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
let typeComplaint = ref("");

let form: any = ref({});
const rules = {
  form: {
    orderId: { required },
    // value: { required },
  },
};
const v1 = useVuelidate(rules, { form });

const store = useAppStore();
const axios = <Axios>inject("axios");
const file: any = ref(null);

onMounted(async () => {
  form.value = (await axios.get(`/admin/user/${currentRouteId}`)).data;
});

useHead({
  title: "Detail Pengajuan",
});

const approveRequesting = () => {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      popup: "sweet-alerts",
      confirmButton: "btn btn-success",
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
    timer: 1002,
    showCloseButton: true,
  });
  swalWithBootstrapButtons
    .fire({
      title: "Terima Pengajuan",
      text: "Apakah kamu yakin untuk menerima Pengajuan Ini ?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Ya, Approve",
      cancelButtonText: "Batal",
      reverseButtons: true,
      padding: "2em",
    })
    .then((result) => {
      if (result.value) {
        console.log(
          `/admin/complaint/accept-${typeComplaint.value}/${form.value.id}`
        );

        axios
          .post(
            `/admin/complaint/accept-${typeComplaint.value}/${form.value.id}`
          )
          .then((res) => {
            toast.fire("Pengajuan berhasil diapprove.");
            router.push(`/admin/${typeComplaint.value}/index`);
          });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
      }
    });
};

const rejectRequesting = () => {
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
    timer: 1002,
    showCloseButton: true,
  });
  swalWithBootstrapButtons
    .fire({
      title: "Tolak Pengajuan",
      text: "Apakah kamu yakin untuk tolak Pengajuan Ini ?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Ya, Tolak",
      cancelButtonText: "Batal",
      reverseButtons: true,
      padding: "2em",
    })
    .then((result) => {
      if (result.value) {
        console.log(
          `/admin/complaint/reject-${typeComplaint.value}/${form.value.id}`
        );

        axios
          .post(
            `/admin/complaint/reject-${typeComplaint.value}/${form.value.id}`
          )
          .then((res) => {
            toast.fire("Pengajuan telah ditolak.");
            router.push(`/admin/${typeComplaint.value}/index`);
          });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
      }
    });
};
</script>

