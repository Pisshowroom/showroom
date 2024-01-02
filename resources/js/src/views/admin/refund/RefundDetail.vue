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
        <span class="font-medium">{{ "Detail Pengajuan Refund" }}</span>
      </li>
    </ul>
    <p class="sm:pt-4 px-4 sm:px-0 text-xl font-bold">
      {{ "Detail Pengajuan Refund" }}
    </p>
    <div class="pt-3 flex flex-col lg:flex-row gap-5">
      <div
        class="w-full lg:w-3/4 border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]"
      >
        <!-- <p class="pb-3 text-lg font-semibold">Data REfund</p> -->
        <div class="flex-1">
          <div class="grid grid-cols-1 gap-5">
            <div class="flex flex-col gap-2">
              <label class="w-full md:mb-0 font-semibold" for="page"
                >Invoice Pesanan</label
              >
              <input
                class="md:w-4/4 form-input"
                id="name"
                type="text"
                required
                :readonly="true"
                placeholder=""
                v-model="form.payment_identifier"
              />
            </div>
            <div class="flex flex-col gap-2">
              <label class="w-full md:mb-0 font-semibold" for="page"
                >Data Pengguna</label
              >
              <input
                class="md:w-4/4 form-input"
                id="name"
                type="text"
                required
                :readonly="true"
                placeholder="Data Pengguna"
                v-model="form.userData"
              />
            </div>

            <div class="flex flex-col gap-2">
              <label class="w-full md:mb-0 font-semibold" for="page"
                >Alasan Pengajuan</label
              >
              <input
                class="md:w-4/4 form-input"
                id="name"
                type="text"
                required
                :readonly="true"
                placeholder="Alasan Pengajuan"
                v-model="form.returning_reason"
              />
            </div>

            <div class="flex flex-col gap-2">
              <label class="w-full md:mb-0 font-semibold" for="page"
                >Deskripsi Pengajuan</label
              >
              <textarea
                class="md:w-4/4 form-input"
                id="name"
                :readonly="true"
                placeholder="Deskripsi Pengajuan"
                v-model="form.returning_description"
              ></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/4">
        <div
          class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]"
        >
          <button
            type="submit"
            @click="approveRequesting"
            class="btn btn-success w-full btn-lg"
          >
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="note"
              xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0 text-white"
            >
              <path
                d="M14.4697 7.53033C14.7626 7.82322 15.2374 7.82322 15.5303 7.53033C15.8232 7.23744 15.8232 6.76256 15.5303 6.46967L12.5303 3.46967C12.2374 3.17678 11.7626 3.17678 11.4697 3.46967L8.46967 6.46967C8.17678 6.76256 8.17678 7.23744 8.46967 7.53033C8.76256 7.82322 9.23744 7.82322 9.53033 7.53033L11.25 5.81066V14C11.25 14.4142 11.5858 14.75 12 14.75C12.4142 14.75 12.75 14.4142 12.75 14V5.81066L14.4697 7.53033Z"
                fill="currentColor"
              />
              <path
                d="M20.75 12C20.75 11.5858 20.4142 11.25 20 11.25C19.5858 11.25 19.25 11.5858 19.25 12C19.25 16.0041 16.0041 19.25 12 19.25C7.99593 19.25 4.75 16.0041 4.75 12C4.75 11.5858 4.41421 11.25 4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 16.8325 7.16751 20.75 12 20.75C16.8325 20.75 20.75 16.8325 20.75 12Z"
                fill="currentColor"
              />
            </svg>
            Approve
          </button>
          <button
            type="button"
            @click="rejectRequesting"
            class="btn btn-danger w-full btn-lg mt-4"
            v-if="currentRouteId"
          >
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0 text-white"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C14.2845 2.75 16.3756 3.57817 17.9894 4.95066C17.9827 4.95685 17.9762 4.96319 17.9697 4.96967L4.96969 17.9694C4.96317 17.976 4.95679 17.9826 4.95056 17.9893C3.57813 16.3755 2.75 14.2845 2.75 12ZM6.0105 19.0492C7.62432 20.4218 9.71544 21.25 12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 9.7155 20.4218 7.62442 19.0493 6.01062C19.0431 6.01728 19.0368 6.02386 19.0303 6.03034L6.03034 19.0301C6.02382 19.0366 6.0172 19.043 6.0105 19.0492Z"
                fill="currentColor"
              />
            </svg>

            Reject
          </button>
        </div>
      </div>
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
  form.value = (await axios.get(`/admin/order/${currentRouteId}`)).data;
  form.value.userData =
    form.value.user?.name +
    " - " +
    form.value.user?.email +
    " - " +
    form.value.user?.phone_number;
  console.log(form.value);
});

useHead({
  title: "Detail Pengajuan Refund",
});
const handleSubmit = async () => {
  const isFormCorrect = await v1.value.$validate();
  console.log("fform" + form.value);
  if (isFormCorrect) {
    let fform = globalComponents.dataToFormData(form.value);

    store.isShowMainLoader = true;
    axios
      .post("/admin/refunds", fform)
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
        let message = e.response.data?.message ?? e.message;
        globalComponents.handleToast("danger", message);
      });
  } else {
    globalComponents.handleToast("danger", "Lengkapi data dengan benar");
  }
};

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
    timer: 2000,
    showCloseButton: true,
  });
  swalWithBootstrapButtons
    .fire({
      title: "Approve Pengajuan",
      text: "Apakah kamu yakin untuk approve Pengajuan Ini ?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Ya, Approve",
      cancelButtonText: "Batal",
      reverseButtons: true,
      padding: "2em",
    })
    .then((result) => {
      if (result.value) {
        axios.post(`/admin/settings/approve/${form.value.id}`).then((res) => {
          toast.fire("Pengajuan berhasil diapprove.");
          router.push("/admin/setting/index");
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
    timer: 2000,
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
        axios.delete(`/admin/settings/${form.value.id}`).then((res) => {
          toast.fire("Pengaturan berhasil dihapus.");
          router.push("/admin/setting/index");
        });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
      }
    });
};
</script>

