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
                  >Nama Alamat</label
                >
                <p>{{ form.address?.name }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="delivery_cost"
                  >Biaya Pengiriman</label
                >
                <p>{{ form.delivery_cost }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="service_fee"
                  >Biaya Layanan</label
                >
                <p>{{ form.service_fee }}</p>
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
                    for="delivery_service_code"
                    >Kode Layanan Pengiriman</label
                  >
                  <p>{{ form.delivery_service_code || "-" }}</p>
                </div>
                <div class="flex flex-col">
                  <label
                    class="w-full md:mb-0 font-bold"
                    for="delivery_service_name"
                    >Nama Layanan Pengiriman</label
                  >
                  <p>{{ form.delivery_service_name || "-" }}</p>
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
                <label class="w-full md:mb-0 font-bold" for="subtotal"
                  >Subtotal</label
                >
                <p>{{ form.subtotal || "-" }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="total"
                  >Total</label
                >
                <p>
                  {{ globalComponents.formatPrice(form.total) }}
                </p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="discount_product"
                  >Diskon Yang Didapat Pembeli</label
                >
                <p>{{ globalComponents.formatPrice(form.discount_product) }}</p>
              </div>
              <div class="flex flex-col" v-if="form.refund != null">
                <label class="w-full md:mb-0 font-bold" for="refund"
                  >Telah Dilakukan Refund Senilai</label
                >
                <p>{{ globalComponents.formatPrice(form.refund) }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="market_fee_buyer"
                  >Fee Pembeli</label
                >
                <p>{{ globalComponents.formatPrice(form.market_fee_buyer) }}</p>
              </div>
              <div class="flex flex-col">
                <label class="w-full md:mb-0 font-bold" for="market_fee_seller"
                  >Fee Penjual</label
                >
                <p>
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

      <div
        class="w-full l-falseg:w-3/4 border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]"
      >
        <!-- Addresses Table -->
        <div class="flex flex-col gap-2">
          <label class="w-full md:mb-0 font-bold">Daftar Alamat Pesanan</label>
          <div class="table-responsives">
            <table class="table-auto w-full">
              <thead>
                <tr>
                  <th class="px-4 py-2">No</th>
                  <th class="px-4 py-2">Jalan</th>
                  <th class="px-4 py-2">Kota</th>
                  <th class="px-4 py-2">Nama Orang</th>
                  <th class="px-4 py-2">Mo HP</th>
                  <th class="px-4 py-2">Alamat Utama</th>
                  <th class="px-4 py-2">Alamat Utama Seller</th>
                </tr>
              </thead>
              <tbody>
                <tr
                  v-for="(address, index) in form.addresses"
                  :key="address.id"
                >
                  <td class="border px-4 py-2">{{ index + 1 }}</td>
                  <td class="border px-4 py-2">{{ address.street }}</td>
                  <td class="border px-4 py-2">
                    {{ address.ro_city.city_name }}
                  </td>
                  <td class="border px-4 py-2">{{ address.person_name }}</td>
                  <td class="border px-4 py-2">{{ address.phone_number }}</td>
                  <td class="border px-4 py-2">
                    <span v-if="address.main">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                          fill="#00de0b"
                        />
                      </svg>
                    </span>
                    <span v-else>
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM8.96963 8.96965C9.26252 8.67676 9.73739 8.67676 10.0303 8.96965L12 10.9393L13.9696 8.96967C14.2625 8.67678 14.7374 8.67678 15.0303 8.96967C15.3232 9.26256 15.3232 9.73744 15.0303 10.0303L13.0606 12L15.0303 13.9696C15.3232 14.2625 15.3232 14.7374 15.0303 15.0303C14.7374 15.3232 14.2625 15.3232 13.9696 15.0303L12 13.0607L10.0303 15.0303C9.73742 15.3232 9.26254 15.3232 8.96965 15.0303C8.67676 14.7374 8.67676 14.2625 8.96965 13.9697L10.9393 12L8.96963 10.0303C8.67673 9.73742 8.67673 9.26254 8.96963 8.96965Z"
                          fill="#ff0000"
                        />
                      </svg>
                    </span>
                  </td>
                  <td>
                    <span v-if="address.for_seller">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                          fill="#00de0b"
                        />
                      </svg>
                    </span>
                    <span v-else>
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM8.96963 8.96965C9.26252 8.67676 9.73739 8.67676 10.0303 8.96965L12 10.9393L13.9696 8.96967C14.2625 8.67678 14.7374 8.67678 15.0303 8.96967C15.3232 9.26256 15.3232 9.73744 15.0303 10.0303L13.0606 12L15.0303 13.9696C15.3232 14.2625 15.3232 14.7374 15.0303 15.0303C14.7374 15.3232 14.2625 15.3232 13.9696 15.0303L12 13.0607L10.0303 15.0303C9.73742 15.3232 9.26254 15.3232 8.96965 15.0303C8.67676 14.7374 8.67676 14.2625 8.96965 13.9697L10.9393 12L8.96963 10.0303C8.67673 9.73742 8.67673 9.26254 8.96963 8.96965Z"
                          fill="#ff0000"
                        />
                      </svg>
                    </span>
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
  form.value = (await axios.get(`/admin/order/${currentRouteId}`)).data;
  form.value.total =
    form.value.total_final != null ? form.value.total_final : form.value.total;
  console.log(globalComponents.formatPrice(null));
  console.log(globalComponents.formatPrice(undefined));
  console.log(globalComponents.formatPrice(0));
  console.log(globalComponents.formatPrice(""));
  console.log(globalComponents.formatPrice("------"));
  console.log(globalComponents.formatThousand(null));
  console.log(globalComponents.formatThousand(undefined));
  console.log(globalComponents.formatThousand(0));
  console.log(globalComponents.formatThousand(""));
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

