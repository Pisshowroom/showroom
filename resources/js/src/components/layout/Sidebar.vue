<template>
  <div :class="{ 'dark text-white-dark': store.semidark }">
    <nav
      class="sidebar fixed min-h-screen h-full top-0 bottom-0 w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] z-50 transition-all duration-300"
    >
      <div class="bg-white dark:bg-[#0e1726] h-full">
        <div class="flex justify-between items-center px-4 py-3">
          <router-link to="/" class="main-logo flex items-center shrink-0">
            <img
              class="w-20 ml-[5px] flex-none"
              src="/ecom/imgs/pshop.png"
              alt=""
            />
            <!-- <span class="text-2xl ltr:ml-1.5 rtl:mr-1.5 font-semibold align-middle lg:inline dark:text-white-light">VRISTO</span> -->
          </router-link>
          <a
            href="javascript:;"
            class="collapse-icon w-8 h-8 rounded-full flex items-center hover:bg-gray-500/10 dark:hover:bg-dark-light/10 dark:text-white-light transition duration-300 rtl:rotate-180 hover:text-primary"
            @click="store.toggleSidebar()"
          >
            <svg
              class="w-5 h-5 m-auto"
              width="20"
              height="20"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M13 19L7 12L13 5"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                opacity="0.5"
                d="M16.9998 19L10.9998 12L16.9998 5"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </a>
        </div>
        <perfect-scrollbar
          :options="{
            swipeEasing: true,
            wheelPropagation: false,
          }"
          class="h-[calc(100vh-80px)] relative"
        >
          <ul class="relative font-semibold space-y-0.5 p-4 py-0">
            <li class="nav-item">
              <ul>
                <li class="nav-item">
                  <router-link
                    to="/admin/dashboard"
                    class="group"
                    @click="toggleMobileMenu"
                  >
                    <div class="flex items-center">
                      <svg
                        class="group-hover:!text-primary shrink-0"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          opacity="0.5"
                          d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                          fill="currentColor"
                        />
                        <path
                          d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                          fill="currentColor"
                        />
                      </svg>

                      <span
                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"
                        >{{ $t("Dashboard") }}</span
                      >
                    </div>
                  </router-link>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <ul>
                <li class="nav-item">
                  <router-link
                    to="/admin/user/index"
                    class="group"
                    @click="toggleMobileMenu"
                  >
                    <div class="flex items-center">
                      <svg
                        class="group-hover:!text-primary shrink-0"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle
                          opacity="0.5"
                          cx="15"
                          cy="6"
                          r="3"
                          fill="currentColor"
                        />
                        <ellipse
                          opacity="0.5"
                          cx="16"
                          cy="17"
                          rx="5"
                          ry="3"
                          fill="currentColor"
                        />
                        <circle cx="9.00098" cy="6" r="4" fill="currentColor" />
                        <ellipse
                          cx="9.00098"
                          cy="17.001"
                          rx="7"
                          ry="4"
                          fill="currentColor"
                        />
                      </svg>

                      <span
                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"
                        >{{ $t("Pengguna") }}</span
                      >
                    </div>
                  </router-link>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <ul>
                <li class="nav-item">
                  <router-link
                    to="/admin/order/index"
                    class="group"
                    @click="toggleMobileMenu"
                  >
                    <div class="flex items-center">
                      <svg
                        class="group-hover:!text-primary shrink-0"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M10.4036 22.4797L10.6787 22.015C11.1195 21.2703 11.3399 20.8979 11.691 20.6902C12.0422 20.4825 12.5001 20.4678 13.4161 20.4385C14.275 20.4111 14.8523 20.3361 15.3458 20.1317C16.385 19.7012 17.2106 18.8756 17.641 17.8365C17.9639 17.0571 17.9639 16.0691 17.9639 14.093V13.2448C17.9639 10.4683 17.9639 9.08006 17.3389 8.06023C16.9892 7.48958 16.5094 7.0098 15.9388 6.66011C14.919 6.03516 13.5307 6.03516 10.7542 6.03516H8.20964C5.43314 6.03516 4.04489 6.03516 3.02507 6.66011C2.45442 7.0098 1.97464 7.48958 1.62495 8.06023C1 9.08006 1 10.4683 1 13.2448V14.093C1 16.0691 1 17.0571 1.32282 17.8365C1.75326 18.8756 2.57886 19.7012 3.61802 20.1317C4.11158 20.3361 4.68882 20.4111 5.5477 20.4385C6.46368 20.4678 6.92167 20.4825 7.27278 20.6902C7.6239 20.8979 7.84431 21.2703 8.28514 22.015L8.5602 22.4797C8.97002 23.1721 9.9938 23.1721 10.4036 22.4797ZM13.1928 14.5171C13.7783 14.5171 14.253 14.0424 14.253 13.4568C14.253 12.8713 13.7783 12.3966 13.1928 12.3966C12.6072 12.3966 12.1325 12.8713 12.1325 13.4568C12.1325 14.0424 12.6072 14.5171 13.1928 14.5171ZM10.5422 13.4568C10.5422 14.0424 10.0675 14.5171 9.48193 14.5171C8.89637 14.5171 8.42169 14.0424 8.42169 13.4568C8.42169 12.8713 8.89637 12.3966 9.48193 12.3966C10.0675 12.3966 10.5422 12.8713 10.5422 13.4568ZM5.77108 14.5171C6.35664 14.5171 6.83133 14.0424 6.83133 13.4568C6.83133 12.8713 6.35664 12.3966 5.77108 12.3966C5.18553 12.3966 4.71084 12.8713 4.71084 13.4568C4.71084 14.0424 5.18553 14.5171 5.77108 14.5171Z"
                          fill="currentColor"
                        />
                        <path
                          opacity="0.5"
                          d="M15.486 1C16.7529 0.999992 17.7603 0.999986 18.5683 1.07681C19.3967 1.15558 20.0972 1.32069 20.7212 1.70307C21.3632 2.09648 21.9029 2.63623 22.2963 3.27821C22.6787 3.90219 22.8438 4.60265 22.9226 5.43112C22.9994 6.23907 22.9994 7.24658 22.9994 8.51343V9.37869C22.9994 10.2803 22.9994 10.9975 22.9597 11.579C22.9191 12.174 22.8344 12.6848 22.6362 13.1632C22.152 14.3323 21.2232 15.2611 20.0541 15.7453C20.0249 15.7574 19.9955 15.7691 19.966 15.7804C19.8249 15.8343 19.7039 15.8806 19.5978 15.915H17.9477C17.9639 15.416 17.9639 14.8217 17.9639 14.093V13.2448C17.9639 10.4683 17.9639 9.08006 17.3389 8.06023C16.9892 7.48958 16.5094 7.0098 15.9388 6.66011C14.919 6.03516 13.5307 6.03516 10.7542 6.03516H8.20964C7.22423 6.03516 6.41369 6.03516 5.73242 6.06309V4.4127C5.76513 4.29934 5.80995 4.16941 5.86255 4.0169C5.95202 3.75751 6.06509 3.51219 6.20848 3.27821C6.60188 2.63623 7.14163 2.09648 7.78361 1.70307C8.40759 1.32069 9.10805 1.15558 9.93651 1.07681C10.7445 0.999986 11.7519 0.999992 13.0188 1H15.486Z"
                          fill="currentColor"
                        />
                      </svg>

                      <span
                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"
                        >{{ $t("Order") }}</span
                      >
                    </div>
                  </router-link>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <ul>
                <li class="nav-item">
                  <router-link
                    to="/admin/product/index"
                    class="group"
                    @click="toggleMobileMenu"
                  >
                    <div class="flex items-center">
                      <svg
                        class="group-hover:!text-primary shrink-0"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M5.87868 2.87868C5 3.75736 5 5.17157 5 8V16C5 18.8284 5 20.2426 5.87868 21.1213C6.75736 22 8.17157 22 11 22H13C15.8284 22 17.2426 22 18.1213 21.1213C19 20.2426 19 18.8284 19 16V8C19 5.17157 19 3.75736 18.1213 2.87868C17.2426 2 15.8284 2 13 2H11C8.17157 2 6.75736 2 5.87868 2.87868ZM8.25 17C8.25 16.5858 8.58579 16.25 9 16.25H12C12.4142 16.25 12.75 16.5858 12.75 17C12.75 17.4142 12.4142 17.75 12 17.75H9C8.58579 17.75 8.25 17.4142 8.25 17ZM9 12.25C8.58579 12.25 8.25 12.5858 8.25 13C8.25 13.4142 8.58579 13.75 9 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H9ZM8.25 9C8.25 8.58579 8.58579 8.25 9 8.25H15C15.4142 8.25 15.75 8.58579 15.75 9C15.75 9.41421 15.4142 9.75 15 9.75H9C8.58579 9.75 8.25 9.41421 8.25 9Z"
                          fill="currentColor"
                        />
                        <path
                          opacity="0.5"
                          d="M5.23525 4.05811C5 4.94139 5 6.17689 5 7.99985V15.9999C5 17.8229 5 19.0584 5.23527 19.9417L5 19.9238C4.02491 19.8279 3.36857 19.6111 2.87868 19.1212C2 18.2425 2 16.8283 2 13.9999V9.99991C2 7.17148 2 5.75726 2.87868 4.87859C3.36857 4.3887 4.02491 4.17194 5 4.07602L5.23525 4.05811Z"
                          fill="currentColor"
                        />
                        <path
                          opacity="0.5"
                          d="M18.7646 19.9417C18.9999 19.0584 18.9999 17.8229 18.9999 15.9999V7.99985C18.9999 6.17689 18.9999 4.94139 18.7647 4.05811L18.9999 4.07602C19.975 4.17194 20.6314 4.3887 21.1212 4.87859C21.9999 5.75726 21.9999 7.17148 21.9999 9.99991V13.9999C21.9999 16.8283 21.9999 18.2425 21.1212 19.1212C20.6314 19.6111 19.975 19.8279 18.9999 19.9238L18.7646 19.9417Z"
                          fill="currentColor"
                        />
                      </svg>

                      <span
                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"
                        >{{ $t("Produk") }}</span
                      >
                    </div>
                  </router-link>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <ul>
                <li class="nav-item">
                  <router-link
                    to="/admin/refund/index"
                    class="group"
                    @click="toggleMobileMenu"
                  >
                    <div class="flex items-center">
                      <!-- prettier-ignore -->
                      <svg class="group-hover:!text-primary shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10 6V18C10 19.4001 10 20.1002 9.72752 20.635C9.48783 21.1054 9.10538 21.4878 8.63498 21.7275C8.1002 22 7.40013 22 6 22C4.59987 22 3.8998 22 3.36502 21.7275C2.89462 21.4878 2.51217 21.1054 2.27248 20.635C2 20.1002 2 19.4001 2 18V6C2 4.59987 2 3.8998 2.27248 3.36502C2.51217 2.89462 2.89462 2.51217 3.36502 2.27248C3.8998 2 4.59987 2 6 2C7.40013 2 8.1002 2 8.63498 2.27248C9.10538 2.51217 9.48783 2.89462 9.72752 3.36502C10 3.8998 10 4.59987 10 6ZM7 19.75C7.41421 19.75 7.75 19.4142 7.75 19C7.75 18.5858 7.41421 18.25 7 18.25H5C4.58579 18.25 4.25 18.5858 4.25 19C4.25 19.4142 4.58579 19.75 5 19.75H7Z" fill="currentColor"/>
                          <path d="M19.0599 10.6144L13.2219 16.704C12.492 17.4653 12.1271 17.8459 11.8135 17.7199C11.5 17.5939 11.5 17.0666 11.5 16.0119L11.5 7.7738C11.5012 7.11381 11.7633 6.48107 12.2291 6.01357L13.2839 4.95882L13.7141 4.62987C14.7183 3.86212 15.2204 3.47825 15.7673 3.3603C16.2175 3.26322 16.6857 3.29236 17.1204 3.4445C17.6484 3.62934 18.099 4.0725 19.0003 4.95883C19.9999 5.95839 20.4997 6.45818 20.685 7.03056C20.843 7.51871 20.847 8.04366 20.6964 8.53417C20.5199 9.10931 20.0332 9.61101 19.0599 10.6144Z" fill="currentColor"/>
                          <path d="M12.7897 22H17.8994C19.2995 22 19.9996 22 20.5344 21.7275C21.0048 21.4878 21.3872 21.1054 21.6269 20.635C21.8994 20.1002 21.8994 19.4001 21.8994 18C21.8994 16.5999 21.8994 15.8998 21.6269 15.365C21.3872 14.8946 21.0048 14.5122 20.5344 14.2725C19.9996 14 19.2995 14 17.8994 14H17.6797L11.878 19.798C11.636 20.0399 11.5 20.3391 11.5 20.6813C11.5 21.3936 12.0774 22 12.7897 22Z" fill="currentColor"/>
                      </svg>

                      <span
                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"
                        >{{ $t("Refund") }}
                        <span
                          class="badge bg-danger rounded-full"
                          v-show="refundsCounted > 0"
                          >{{ refundsCounted }}</span
                        ></span
                      >
                    </div>
                  </router-link>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <ul>
                <li class="nav-item">
                  <router-link
                    to="/admin/return-order/index"
                    class="group"
                    @click="toggleMobileMenu"
                  >
                    <div class="flex items-center">
                      <!-- prettier-ignore -->
                      <svg width="24" class="group-hover:!text-primary shrink-0" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 8C18 11.3137 15.3137 14 12 14C8.68629 14 6 11.3137 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8Z" fill="currentColor"/>
                        <path d="M5.03349 10.7834C3.22163 11.816 2 13.7653 2 16C2 19.3137 4.68629 22 8 22C11.3137 22 14 19.3137 14 16C14 15.7437 13.9839 15.4911 13.9527 15.2432C13.3301 15.4107 12.6755 15.5 12 15.5C8.84139 15.5 6.13882 13.5474 5.03349 10.7834Z" fill="currentColor"/>
                        <path d="M15.3866 14.6936C15.4611 15.1179 15.5 15.5544 15.5 16C15.5 18.0906 14.6446 19.9815 13.2646 21.3416C14.0849 21.7625 15.0147 22 16 22C19.3137 22 22 19.3137 22 16C22 13.7653 20.7783 11.816 18.9665 10.7834C18.2876 12.4811 17.0062 13.8726 15.3866 14.6936Z" fill="currentColor"/>
                      </svg>

                      <span
                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"
                        >{{ $t("Pengembalian Pesanan") }}
                        <span
                          class="badge bg-danger rounded-full"
                          v-show="returningsCounted > 0"
                          >{{ returningsCounted }}</span
                        ></span
                      >
                    </div>
                  </router-link>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <ul>
                <li class="nav-item">
                  <router-link
                    to="/admin/complaint/index"
                    class="group"
                    @click="toggleMobileMenu"
                  >
                    <div class="flex items-center">
                      <!-- prettier-ignore -->
                      <svg class="group-hover:!text-primary shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M3 10.4167C3 7.21907 3 5.62028 3.37752 5.08241C3.75503 4.54454 5.25832 4.02996 8.26491 3.00079L8.83772 2.80472C10.405 2.26824 11.1886 2 12 2C12.8114 2 13.595 2.26824 15.1623 2.80472L15.7351 3.00079C18.7417 4.02996 20.245 4.54454 20.6225 5.08241C21 5.62028 21 7.21907 21 10.4167V11.9914C21 17.6294 16.761 20.3655 14.1014 21.5273C13.38 21.8424 13.0193 22 12 22C10.9807 22 10.62 21.8424 9.89856 21.5273C7.23896 20.3655 3 17.6294 3 11.9914V10.4167ZM12 7.25C12.4142 7.25 12.75 7.58579 12.75 8V12C12.75 12.4142 12.4142 12.75 12 12.75C11.5858 12.75 11.25 12.4142 11.25 12V8C11.25 7.58579 11.5858 7.25 12 7.25ZM12 16C12.5523 16 13 15.5523 13 15C13 14.4477 12.5523 14 12 14C11.4477 14 11 14.4477 11 15C11 15.5523 11.4477 16 12 16Z" fill="currentColor"/>
                      </svg>

                      <span
                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"
                        >{{ $t("Komplain") }}
                        <span
                          class="badge bg-danger rounded-full"
                          v-show="complaintsCounted > 0"
                          >{{ complaintsCounted }}</span
                        ></span
                      >
                    </div>
                  </router-link>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <ul>
                <li class="nav-item">
                  <router-link
                    to="/admin/category/index"
                    class="group"
                    @click="toggleMobileMenu"
                  >
                    <div class="flex items-center">
                      <!-- prettier-ignore -->
                      <svg class="group-hover:!text-primary shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M2.25 6C2.25 5.58579 2.58579 5.25 3 5.25H21C21.4142 5.25 21.75 5.58579 21.75 6C21.75 6.41421 21.4142 6.75 21 6.75H3C2.58579 6.75 2.25 6.41421 2.25 6ZM2.25 10C2.25 9.58579 2.58579 9.25 3 9.25H21C21.4142 9.25 21.75 9.58579 21.75 10C21.75 10.4142 21.4142 10.75 21 10.75H3C2.58579 10.75 2.25 10.4142 2.25 10ZM2.25 14C2.25 13.5858 2.58579 13.25 3 13.25H11C11.4142 13.25 11.75 13.5858 11.75 14C11.75 14.4142 11.4142 14.75 11 14.75H3C2.58579 14.75 2.25 14.4142 2.25 14ZM16.9697 13.4697C17.2626 13.1768 17.7374 13.1768 18.0303 13.4697L20.5303 15.9697C20.8232 16.2626 20.8232 16.7374 20.5303 17.0303C20.2374 17.3232 19.7626 17.3232 19.4697 17.0303L18.25 15.8107V20C18.25 20.4142 17.9142 20.75 17.5 20.75C17.0858 20.75 16.75 20.4142 16.75 20V15.8107L15.5303 17.0303C15.2374 17.3232 14.7626 17.3232 14.4697 17.0303C14.1768 16.7374 14.1768 16.2626 14.4697 15.9697L16.9697 13.4697ZM2.25 18C2.25 17.5858 2.58579 17.25 3 17.25H11C11.4142 17.25 11.75 17.5858 11.75 18C11.75 18.4142 11.4142 18.75 11 18.75H3C2.58579 18.75 2.25 18.4142 2.25 18Z"
                          fill="currentColor"
                        />
                      </svg>

                      <span
                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"
                        >{{ $t("Kategori") }}</span
                      >
                    </div>
                  </router-link>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <ul>
                <li class="nav-item">
                  <router-link
                    to="/admin/sub-category/index"
                    class="group"
                    @click="toggleMobileMenu"
                  >
                    <div class="flex items-center">
                      <!-- prettier-ignore -->
                      <svg class="group-hover:!text-primary shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M2.25 6C2.25 5.58579 2.58579 5.25 3 5.25H21C21.4142 5.25 21.75 5.58579 21.75 6C21.75 6.41421 21.4142 6.75 21 6.75H3C2.58579 6.75 2.25 6.41421 2.25 6ZM2.25 10C2.25 9.58579 2.58579 9.25 3 9.25H21C21.4142 9.25 21.75 9.58579 21.75 10C21.75 10.4142 21.4142 10.75 21 10.75H3C2.58579 10.75 2.25 10.4142 2.25 10ZM2.25 14C2.25 13.5858 2.58579 13.25 3 13.25H11C11.4142 13.25 11.75 13.5858 11.75 14C11.75 14.4142 11.4142 14.75 11 14.75H3C2.58579 14.75 2.25 14.4142 2.25 14ZM16.9697 13.4697C17.2626 13.1768 17.7374 13.1768 18.0303 13.4697L20.5303 15.9697C20.8232 16.2626 20.8232 16.7374 20.5303 17.0303C20.2374 17.3232 19.7626 17.3232 19.4697 17.0303L18.25 15.8107V20C18.25 20.4142 17.9142 20.75 17.5 20.75C17.0858 20.75 16.75 20.4142 16.75 20V15.8107L15.5303 17.0303C15.2374 17.3232 14.7626 17.3232 14.4697 17.0303C14.1768 16.7374 14.1768 16.2626 14.4697 15.9697L16.9697 13.4697ZM2.25 18C2.25 17.5858 2.58579 17.25 3 17.25H11C11.4142 17.25 11.75 17.5858 11.75 18C11.75 18.4142 11.4142 18.75 11 18.75H3C2.58579 18.75 2.25 18.4142 2.25 18Z"
                          fill="currentColor"
                        />
                      </svg>

                      <span
                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"
                        >{{ $t("Sub Kategori") }}</span
                      >
                    </div>
                  </router-link>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <ul>
                <li class="nav-item">
                  <router-link
                    to="/admin/ads/index"
                    class="group"
                    @click="toggleMobileMenu"
                  >
                    <div class="flex items-center">
                      <svg
                        class="group-hover:!text-primary shrink-0"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M20.965 7C20.8873 5.1277 20.6366 3.97975 19.8284 3.17157C18.6569 2 16.7712 2 13 2H11C7.22876 2 5.34315 2 4.17157 3.17157C3 4.34315 3 6.22876 3 10V14C3 17.7712 3 19.6569 4.17157 20.8284C5.34315 22 7.22876 22 11 22H13C16.7712 22 18.6569 22 19.8284 20.8284C21 19.6569 21 17.7712 21 14V11"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                        />
                        <path
                          d="M6 12C6 10.5858 6 9.87868 6.43934 9.43934C6.87868 9 7.58579 9 9 9H15C16.4142 9 17.1213 9 17.5607 9.43934C18 9.87868 18 10.5858 18 12V16C18 17.4142 18 18.1213 17.5607 18.5607C17.1213 19 16.4142 19 15 19H9C7.58579 19 6.87868 19 6.43934 18.5607C6 18.1213 6 17.4142 6 16V12Z"
                          stroke="currentColor"
                          stroke-width="1.5"
                        />
                        <path
                          d="M7 6H12"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                        />
                      </svg>

                      <span
                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"
                        >{{ $t("Master Iklan") }}</span
                      >
                    </div>
                  </router-link>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <ul>
                <li class="nav-item">
                  <router-link
                    to="/admin/admin/index"
                    class="group"
                    @click="toggleMobileMenu"
                  >
                    <div class="flex items-center">
                      <svg
                        class="group-hover:!text-primary shrink-0"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle cx="12" cy="6" r="4" fill="currentColor" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M16.5 22C14.8501 22 14.0251 22 13.5126 21.4874C13 20.9749 13 20.1499 13 18.5C13 16.8501 13 16.0251 13.5126 15.5126C14.0251 15 14.8501 15 16.5 15C18.1499 15 18.9749 15 19.4874 15.5126C20 16.0251 20 16.8501 20 18.5C20 20.1499 20 20.9749 19.4874 21.4874C18.9749 22 18.1499 22 16.5 22ZM18.468 17.7458C18.6958 17.518 18.6958 17.1487 18.468 16.9209C18.2402 16.693 17.8709 16.693 17.6431 16.9209L15.7222 18.8417L15.3569 18.4764C15.1291 18.2486 14.7598 18.2486 14.532 18.4764C14.3042 18.7042 14.3042 19.0736 14.532 19.3014L15.3097 20.0791C15.5375 20.307 15.9069 20.307 16.1347 20.0791L18.468 17.7458Z"
                          fill="currentColor"
                        />
                        <path
                          opacity="0.5"
                          d="M18.0947 15.0312C17.6699 15 17.1487 15 16.5 15C14.8501 15 14.0251 15 13.5126 15.5126C13 16.0251 13 16.8501 13 18.5C13 19.6663 13 20.4204 13.1811 20.9433C12.7971 20.9806 12.4025 21 12 21C8.13401 21 5 19.2091 5 17C5 14.7909 8.13401 13 12 13C14.6134 13 16.8924 13.8184 18.0947 15.0312Z"
                          fill="currentColor"
                        />
                      </svg>

                      <span
                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"
                        >{{ $t("Admin") }}</span
                      >
                    </div>
                  </router-link>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <ul>
                <li class="nav-item">
                  <router-link
                    to="/admin/setting/index"
                    class="group"
                    @click="toggleMobileMenu"
                  >
                    <div class="flex items-center">
                      <svg
                        class="group-hover:!text-primary shrink-0"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          opacity="0.5"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M14.2788 2.15224C13.9085 2 13.439 2 12.5 2C11.561 2 11.0915 2 10.7212 2.15224C10.2274 2.35523 9.83509 2.74458 9.63056 3.23463C9.53719 3.45834 9.50065 3.7185 9.48635 4.09799C9.46534 4.65568 9.17716 5.17189 8.69017 5.45093C8.20318 5.72996 7.60864 5.71954 7.11149 5.45876C6.77318 5.2813 6.52789 5.18262 6.28599 5.15102C5.75609 5.08178 5.22018 5.22429 4.79616 5.5472C4.47814 5.78938 4.24339 6.1929 3.7739 6.99993C3.30441 7.80697 3.06967 8.21048 3.01735 8.60491C2.94758 9.1308 3.09118 9.66266 3.41655 10.0835C3.56506 10.2756 3.77377 10.437 4.0977 10.639C4.57391 10.936 4.88032 11.4419 4.88029 12C4.88026 12.5581 4.57386 13.0639 4.0977 13.3608C3.77372 13.5629 3.56497 13.7244 3.41645 13.9165C3.09108 14.3373 2.94749 14.8691 3.01725 15.395C3.06957 15.7894 3.30432 16.193 3.7738 17C4.24329 17.807 4.47804 18.2106 4.79606 18.4527C5.22008 18.7756 5.75599 18.9181 6.28589 18.8489C6.52778 18.8173 6.77305 18.7186 7.11133 18.5412C7.60852 18.2804 8.2031 18.27 8.69012 18.549C9.17714 18.8281 9.46533 19.3443 9.48635 19.9021C9.50065 20.2815 9.53719 20.5417 9.63056 20.7654C9.83509 21.2554 10.2274 21.6448 10.7212 21.8478C11.0915 22 11.561 22 12.5 22C13.439 22 13.9085 22 14.2788 21.8478C14.7726 21.6448 15.1649 21.2554 15.3694 20.7654C15.4628 20.5417 15.4994 20.2815 15.5137 19.902C15.5347 19.3443 15.8228 18.8281 16.3098 18.549C16.7968 18.2699 17.3914 18.2804 17.8886 18.5412C18.2269 18.7186 18.4721 18.8172 18.714 18.8488C19.2439 18.9181 19.7798 18.7756 20.2038 18.4527C20.5219 18.2105 20.7566 17.807 21.2261 16.9999C21.6956 16.1929 21.9303 15.7894 21.9827 15.395C22.0524 14.8691 21.9088 14.3372 21.5835 13.9164C21.4349 13.7243 21.2262 13.5628 20.9022 13.3608C20.4261 13.0639 20.1197 12.558 20.1197 11.9999C20.1197 11.4418 20.4261 10.9361 20.9022 10.6392C21.2263 10.4371 21.435 10.2757 21.5836 10.0835C21.9089 9.66273 22.0525 9.13087 21.9828 8.60497C21.9304 8.21055 21.6957 7.80703 21.2262 7C20.7567 6.19297 20.522 5.78945 20.2039 5.54727C19.7799 5.22436 19.244 5.08185 18.7141 5.15109C18.4722 5.18269 18.2269 5.28136 17.8887 5.4588C17.3915 5.71959 16.7969 5.73002 16.3099 5.45096C15.8229 5.17191 15.5347 4.65566 15.5136 4.09794C15.4993 3.71848 15.4628 3.45833 15.3694 3.23463C15.1649 2.74458 14.7726 2.35523 14.2788 2.15224Z"
                          fill="currentColor"
                        />
                        <path
                          d="M15.5227 12C15.5227 13.6569 14.1694 15 12.4999 15C10.8304 15 9.47705 13.6569 9.47705 12C9.47705 10.3431 10.8304 9 12.4999 9C14.1694 9 15.5227 10.3431 15.5227 12Z"
                          fill="currentColor"
                        />
                      </svg>

                      <span
                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"
                        >{{ $t("Pengaturan App") }}</span
                      >
                    </div>
                  </router-link>
                </li>
              </ul>
            </li>
          </ul>
        </perfect-scrollbar>
      </div>
    </nav>
  </div>
</template>

  <script lang="ts" setup>
import { ref, onMounted, inject, watch } from "vue";
import { Axios } from "axios";

import { useAppStore } from "@/stores/index";
import { useRoute } from "vue-router";
import VueCollapsible from "vue-height-collapsible/vue3";
const routeX1 = useRoute();
const store = useAppStore();
const activeDropdown: any = ref("");
const subActive: any = ref("");
const axios = <Axios>inject("axios");
// const axios = inject('axios');

let complaintsCounted = ref(0);
let refundsCounted = ref(0);
let returningsCounted = ref(0);

onMounted(() => {
  let cache = localStorage.getItem("cache")
    ? JSON.parse(localStorage.getItem("cache")!)
    : null;

  if (cache && cache.data && Date.now() - cache.time < 30000) {
    let res = cache.data;
    complaintsCounted.value = res.complaints_counted ?? 0;
    refundsCounted.value = res.refunds_counted ?? 0;
    returningsCounted.value = res.returnings_counted ?? 0;
  } else {
    axios.get("/admin/all-type-complaints-counted").then((res) => {
      console.log("res.data 2");
      let cache = {
        data: res.data,
        time: Date.now(),
      };
      localStorage.setItem("cache", JSON.stringify(cache));

      complaintsCounted.value = res.data.complaints_counted ?? 0;
      refundsCounted.value = res.data.refunds_counted ?? 0;
      returningsCounted.value = res.data.returnings_counted ?? 0;
      // console.log(complaintsCounted.value);
    });
  }

  const selector = document.querySelector(
    '.sidebar ul a[href="' + window.location.pathname + '"]'
  );
  if (selector) {
    selector.classList.add("active");
    const ul: any = selector.closest("ul.sub-menu");
    if (ul) {
      let ele: any = ul.closest("li.menu").querySelectorAll(".nav-link") || [];
      if (ele.length) {
        ele = ele[0];
        setTimeout(() => {
          ele.click();
        });
      }
    }
  }
});

const toggleMobileMenu = () => {
  if (window.innerWidth < 1024) {
    store.toggleSidebar();
  }
};
</script>
