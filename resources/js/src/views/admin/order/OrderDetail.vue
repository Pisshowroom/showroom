<template>
  <div>
    <ul
      class="flex space-x-2 rtl:space-x-reverse mt-4 sm:mt-0 mb-4 mx-4 sm:mx-0"
    >
      <li>
        <router-link
          to="/admin/order/index"
          class="text-primary hover:underline font-medium"
          >Pesanan</router-link
        >
      </li>
      <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
        <span class="font-medium">{{ `Detail Pesanan` }}</span>
      </li>
    </ul>
    <p class="sm:pt-4 px-4 sm:px-0 text-xl font-bold">
      {{ `Detail Pesanan` }}
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
                <label class="w-full mb-0 font-bold" for="payment_identifier"
                  >Identifikasi Pembayaran</label
                >
                <p>{{ form.payment_identifier }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="user_name"
                  >Nama Pembeli</label
                >
                <p>{{ form.user?.name }}</p>
              </div>

              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="status"
                  >Status</label
                >
                <!-- <p>{{ form.status }}</p> -->
                <!-- {{ handleBadgeStatus(form.status) }} -->
                <div v-html="handleBadgeStatus(form.status)"></div>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="address_name"
                  >Alamat Pembeli</label
                >
                <p>{{ form.theAddress || "-" }}</p>
              </div>
              <template v-if="form.delivery_service_code != null">
                <div class="flex flex-col">
                  <label
                    class="w-full md:mb-0 font-bold"
                    for="delivery_receipt_number"
                    >Nomor Resi Pengiriman</label
                  >
                  <p>{{ form.delivery_receipt_number || "-" }}</p>
                </div>
                <div class="flex flex-col">
                  <label
                    class="w-full md:mb-0 font-bold"
                    for="delivery_estimation_day"
                    >Estimasi Hari Pengiriman</label
                  >
                  <p>{{ form.delivery_estimation_day || "-" }}</p>
                </div>
                <div class="flex flex-col">
                  <label
                    class="w-full md:mb-0 font-bold"
                    for="delivery_service_name"
                    >Nama Layanan Pengiriman</label
                  >
                  <p>
                    {{ form.delivery_service_name || "-" }} - ({{
                      form.delivery_service_code || "-"
                    }})
                  </p>
                </div>
                <div class="flex flex-col">
                  <label
                    class="w-full md:mb-0 font-bold"
                    for="delivery_service_kind"
                    >Jenis Layanan Pengiriman</label
                  >
                  <p>{{ form.delivery_service_kind || "-" }}</p>
                </div>
                <div class="flex flex-col">
                  <label
                    class="w-full md:mb-0 font-bold"
                    for="delivery_service_kind_description"
                    >Deskripsi Jenis Layanan Pengiriman</label
                  >
                  <p>
                    {{ form.delivery_service_kind_description || "-" }}
                  </p>
                </div>
              </template>
              <!-- ... -->
            </div>

            <!-- RIGHT -->
            <div
              class="flex flex-col gap-2 theParent w-full sm:w-full md:w-1/2"
            >
              <!-- Payment Number -->
              <div class="flex flex-col">
                <label
                  class="w-full md:mb-0 font-bold"
                  for="delivery_service_kind"
                  >Channel Pembayaran</label
                >
                <p>{{ form.payment_channel || "-" }}</p>
              </div>
              <div v-if="form.va_number != null" class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="va_number"
                  >Nomor Virtual ACcount</label
                >
                <p>{{ form.va_number }}</p>
              </div>
              <div v-if="form.qr_id != null" class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="qr_id"
                  >QRIS ID</label
                >
                <p>{{ form.qr_id }}</p>
              </div>
              <div
                v-if="form.outlet_payment_code != null"
                class="flex flex-col"
              >
                <label
                  class="w-full md:mb-0 font-bold"
                  for="outlet_payment_code"
                  >Kode Pembayaran Outlet/Retail</label
                >
                <p>{{ form.outlet_payment_code }}</p>
              </div>
              <!-- End Of Payment Number -->
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="delivery_cost"
                  >Biaya Pengiriman</label
                >
                <p class="text-indigo-600 font-semibold">
                  {{ globalComponents.formatPrice(form.delivery_cost) }}
                </p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="service_fee"
                  >Biaya Layanan</label
                >
                <p class="text-indigo-600 font-semibold">
                  {{ globalComponents.formatPrice(form.service_fee) }}
                </p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="subtotal"
                  >Subtotal</label
                >
                <p class="text-indigo-600 font-semibold">
                  {{ globalComponents.formatPrice(form.subtotal) }}
                </p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="total"
                  >Total</label
                >
                <p class="text-indigo-600 font-semibold">
                  {{ globalComponents.formatPrice(form.total) }}
                </p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="discount_product"
                  >Diskon Yang Didapat Pembeli</label
                >
                <p class="text-indigo-600 font-semibold">
                  {{ globalComponents.formatPrice(form.discount_product) }}
                </p>
              </div>
              <div class="flex flex-col" v-if="form.refund != null">
                <label class="w-full md:mb-0 font-bold" for="refund"
                  >Telah Dilakukan Refund Senilai</label
                >
                <p class="text-indigo-600 font-semibold">
                  {{ globalComponents.formatPrice(form.refund) }}
                </p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="market_fee_buyer"
                  >Fee Pembeli</label
                >
                <p class="text-indigo-600 font-semibold">
                  {{ globalComponents.formatPrice(form.market_fee_buyer) }}
                </p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="market_fee_seller"
                  >Fee Penjual</label
                >
                <p class="text-indigo-600 font-semibold">
                  {{ globalComponents.formatPrice(form.market_fee_seller) }}
                </p>
              </div>
              <div v-if="form.paid_at != null" class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="paid_at"
                  >Telah Dibayar Pada</label
                >
                <p>{{ globalComponents.formatDateTime(form.paid_at) }}</p>
              </div>
              <div
                v-if="form.payment_due != null && form.paid_at == null"
                class="flex flex-col"
              >
                <label class="w-full md:mb-0 font-bold" for="payment_due"
                  >Jatuh Tempo Pembayaran</label
                >
                <p>{{ globalComponents.formatDateTime(form.payment_due) }}</p>
              </div>
              <div v-if="form.packing_due != null" class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="packing_due"
                  >Jatuh Tempo Pengemasan</label
                >
                <p>{{ globalComponents.formatDateTime(form.packing_due) }}</p>
              </div>
              <div
                v-if="form.completed_order_due != null"
                class="flex flex-col"
              >
                <label
                  class="w-full md:mb-0 font-bold"
                  for="completed_order_due"
                  >Jatuh Tempo Pesanan Selesai</label
                >
                <p>
                  {{
                    globalComponents.formatDateTime(form.completed_order_due)
                  }}
                </p>
              </div>

              <!-- ... -->
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
        <label class="w-full md:mb-0 font-bold">Item Pesanan</label>
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
                <!-- <th class="px-4 py-2">Fee Seller</th>
                <th class="px-4 py-2">Fee Buyer</th> -->
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
                <!-- <td class="border px-4 py-2">{{ item.fee_seller || "-" }}</td>
                <td class="border px-4 py-2">{{ item.fee_buyer || "-" }}</td> -->
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
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
  await axios
    .get(`/admin/order/${currentRouteId}`)
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
    })
    .catch((error) => {
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
  title: "Detail Pesanan",
});
</script>

