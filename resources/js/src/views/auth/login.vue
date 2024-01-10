<template>
  <div
    class="flex justify-center items-center min-h-screen bg-[url('/assets/images/map.svg')] dark:bg-[url('/assets/images/map-dark.svg')] bg-cover bg-center"
  >
    <div class="panel sm:w-[480px] m-6 max-w-lg w-full">
      <h2 class="font-bold text-2xl mb-3">Masuk</h2>
      <p class="mb-7">Masukkan username dan Password kamu untuk login</p>
      <form class="space-y-5" @submit.prevent="handleLogin">
        <div>
          <label for="username">Username</label>
          <input
            id="username"
            type="text"
            v-model="user.username"
            class="form-input"
            placeholder="Masukkan Username"
          />
        </div>
        <div>
          <label for="password">Password</label>
          <input
            id="password"
            type="password"
            v-model="user.password"
            class="form-input"
            placeholder="Masukkan Password"
          />
        </div>
        <!-- <div>
                      <label class="cursor-pointer">
                          <input type="checkbox" class="form-checkbox" />
                          <span class="text-white-dark">Subscribe to weekly newsletter</span>
                      </label>
                  </div> -->
        <button
          type="submit"
          @submit.prevent="handleLogin"
          class="btn btn-primary w-full"
        >
          Masuk
        </button>
      </form>
    </div>
  </div>
</template>
<script>
import { required } from "@vuelidate/validators";
import { useVuelidate } from "@vuelidate/core";
import Swal from "sweetalert2";
import Auth from "@/services/auth.service";
import { useAppStore } from "@/stores/index";
// useRouter
import { useRouter } from "vue-router";
import { useHead } from "@vueuse/head";
import { useI18n } from "vue-i18n";
// import { useMeta } from '@/composables/use-meta';
// useMeta({ title: 'Login Cover' });
const router = useRouter();

export default {
  setup() {
    useHead({
      title: "Login",
    });
  },
  data() {
    return {
      store: useAppStore(),
      v$: useVuelidate(),
      loading: false,
      message: "",
      user: {
        password: "",
        username: "",
      },
      lang: useI18n(),
    };
  },
  validations() {
    return {
      user: {
        password: { required },
        username: { required },
      },
    };
  },
  computed: {
    loggedIn() {
      const data =
        localStorage.getItem("user") && localStorage.getItem("api-token");
      return data;
    },
  },
  created() {
    // this.$OneSignal.init({ appId: 'dabdedc1-f999-44d7-8ea3-6eb9ced91d2e', allowLocalhostAsSecureOrigin: true });
    // this.$OneSignal.User.PushSubscription.optIn().then((res) => {
    //   console.log(res);
    // });
    // //   console.log(this.$OneSignal.User.PushSubscription.optIn());
    // // OneSignal.getUserId().then((userId) => {
    // //   if (userId) {
    // //     console.log('Player ID:', userId);
    // //   } else {
    // //     console.log('User is not subscribed to notifications.');
    // //   }
    // // });
    // // this.$OneSignal.Slidedown.promptPush().then((res) => console.log(res));
    // console.log(this.$OneSignal);
    if (this.loggedIn) {
      const res = JSON.parse(localStorage.getItem("user"));
      this.redirect(res);
    }
  },
  methods: {
    redirect(res) {
      console.log("admin dashboard accessed");
      this.$router.push({ path: "/admin/order/index" });

      /* if (res.permission == "institution") {
      } else if (res.permission == "mudabbir") {
        this.$router.push({ name: "institution-ustadz.dashboard" });
      } else if (res.permission == "mudabbir_qaraa") {
        this.$router.push({ name: "mudabbir.uncorrected" });
      } */
    },
    handleToast(color, msg) {
      const toast = Swal.mixin({
        toast: true,
        position: "bottom-right",
        showConfirmButton: false,
        customClass: {
          popup: `color-${color}`,
        },
        timer: 2500,
        showCloseButton: true,
      });
      toast.fire({
        title: msg,
      });
    },
    async handleLogin() {
      const isFormCorrect = await this.v$.$validate();
      //   this.loading = true;
      if (!isFormCorrect) {
        this.handleToast("danger", "Lengkapi data dengan benar");
      } else {
        this.store.isShowMainLoader = true;
        Auth.login(this.user).then(
          (res) => {
            this.store.isShowMainLoader = false;
            this.handleToast(
              "success",
              this.lang && this.lang?.locale == "my"
                ? "Berjaya masuk"
                : "Berhasil login"
            );
            this.redirect(res);
            // window.location.reload();
          },
          (error) => {
            this.store.isShowMainLoader = false;
            this.handleToast("danger", error.response.data.message);
          }
        );
      }
    },
  },
};
</script>
