<template>
  <div>
    <ul
      class="flex space-x-2 rtl:space-x-reverse mt-4 sm:mt-0 mb-4 mx-4 sm:mx-0"
    >
      <li>
        <router-link
          to="/admin/product/index"
          class="text-primary hover:underline font-medium"
          >Produk</router-link
        >
      </li>
      <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
        <span class="font-medium">{{ `Detail Produk` }}</span>
      </li>
    </ul>
    <p class="sm:pt-4 px-4 sm:px-0 text-xl font-bold">
      {{ `Detail Produk` }}
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
              class="flex flex-col gap-2 theParent w-full sm:w-full md:w-1/2"
            >
              <div class="flex flex-col">
                <label class="w-full mb-0 font-bold" for="name"
                  >Nama Produk</label
                >
                <p>{{ form.name }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="slug">Slug</label>
                <p>{{ form.slug }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="price"
                  >Harga</label
                >
                <p>{{ globalComponents.formatPrice(form.price) }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="stock">Stok</label>
                <p>{{ form.stock }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="discount"
                  >Diskon</label
                >
                <p>{{ form.discount }}%</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="unit">Unit</label>
                <p>{{ form.unit }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="weight"
                  >Berat (dalam gram)</label
                >
                <p>{{ form.weight }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="is_featured"
                  >Ditampilkan?</label
                >
                <p>{{ form.is_featured ? "Ya" : "Tidak" }}</p>
              </div>
            </div>

            <!-- RIGHT -->
            <div
              class="flex flex-col gap-2 theParent w-full sm:w-full md:w-1/2"
            >
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="category_id"
                  >Kategori Produk</label
                >
                <p>{{ form.category_id }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="sub_category_id"
                  >Sub Kategori Produk</label
                >
                <p>{{ form.sub_category_id }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="images"
                  >Gambar Produk</label
                >
                <img :src="form.images" alt="Product Image" />
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="description"
                  >Deskripsi Produk</label
                >
                <p>{{ form.description }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="created_at"
                  >Tanggal Dibuat</label
                >
                <p>{{ form.created_at }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="updated_at"
                  >Tanggal Diperbarui</label
                >
                <p>{{ form.updated_at }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="deleted_at"
                  >Tanggal Dihapus</label
                >
                <p>{{ form.deleted_at }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div
      class="w-full l-falseg:w-3/4 border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]"
    >
      <div class="flex flex-col gap-2">
        <label class="w-full md:mb-0 font-bold">Item Produk</label>
        <div class="table-responsives">
          <table class="table-auto w-full">
            <thead>
              <tr>
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">ID Produk</th>
                <th class="px-4 py-2">Kuantitas</th>
                <th class="px-4 py-2">Total Item</th>
                <th class="px-4 py-2">Harga</th>
                <th class="px-4 py-2">Catatan</th>
                <th class="px-4 py-2">Berat</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(item, index) in form.order_items" :key="item.id">
                <td class="border px-4 py-2">{{ index + 1 }}</td>
                <td class="border px-4 py-2">
                  {{
                    item.product?.parent != null
                      ? item.product?.parent?.name +
                        "(" +
                        item.product?.name +
                        ")"
                      : item.product?.name || "-"
                  }}
                </td>
                <td class="border px-4 py-2">{{ item.quantity }}</td>
                <td class="border px-4 py-2">
                  {{ globalComponents.formatThousand(item.item_total) }}
                </td>
                <td class="border px-4 py-2">
                  {{ globalComponents.formatThousand(item.price) }}
                </td>
                <td class="border px-4 py-2">{{ item.note }}</td>
                <td class="border px-4 py-2">
                  {{ item.weight ? item.weight + " g" : "-" }}
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div> -->
  </div>
</template>

<script setup lang="ts">
import "@suadelabs/vue3-multiselect/dist/vue3-multiselect.css";
import { useHead } from "@vueuse/head";
import { useAppStore } from "@/stores/index";
import { ref, onMounted, inject } from "vue";
import { useRoute, useRouter } from "vue-router";
import auth from "@/services/auth.service";
import { useVuelidate } from "@vuelidate/core";
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

const store = useAppStore();
const axios = <Axios>inject("axios");
const file: any = ref(null);

onMounted(async () => {
  // form.value = (await axios.get(`/admin/order/${currentRouteId}`)).data;
  // loading true
  store.isShowMainLoader = true;

  await axios
    .get(`/admin/products/${currentRouteId}`)
    .then((res) => {
      form.value = res.data;
      form.value.total =
        form.value.total_final != null
          ? form.value.total_final
          : form.value.total;
      form.value.theAddress =
        form.value?.user?.address?.address_text +
        ", " +
        form.value?.user?.address?.address_description +
        " - " +
        form.value?.user?.address?.street +
        ", " +
        form.value?.user?.address?.village +
        ", " +
        form.value?.user?.address?.district +
        ", " +
        form.value?.user?.address?.city;
      store.isShowMainLoader = false;
    })
    .catch((error) => {
      store.isShowMainLoader = false;

      console.log("DAPAT ERROR");

      let errorMessage = error.response?.data?.message || error.message;
      globalComponents.handleToast("danger", errorMessage);
    });
});

// create a function to handle the file upload
const handleBadgeStatus = (textStatus: string) => {
  let badgeBgColor = "";
  let badgeText = textStatus;

  switch (badgeText) {
    case "Pending":
      badgeBgColor = "#FFC107";
      break;
    case "Paid":
    case "ProcessedBySeller":
    case "Shipped":
    case "Delivered":
    case "RefundDone":
    case "ReturnCompleted":
    case "ComplaintCompleted":
    case "Completed":
      badgeBgColor = "#28A745";
      break;
    case "ExpiredPayment":
    case "Cancelled":
    case "RefundDeclined":
    case "ComplaintDeclined":
      badgeBgColor = "#FF0000";
      break;
    case "RequestedRefund":
    case "RefundAccepted":
    case "RequestedReturn":
    case "ReturnAccepted":
    case "ReturnShipped":
    case "ReturnDelivered":
    case "Complaint":
    case "ComplaintAccepted":
      badgeBgColor = "#007BFF";
      break;
    default:
      badgeBgColor = "#000000";
      break;
  }

  return `<span class="badge" style="background-color: ${badgeBgColor};">${badgeText}</span>`;
};

useHead({
  title: "Detail Produk",
});
</script>

