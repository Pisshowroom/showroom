<template>
  <div
    class="main-section antialiased relative font-nunito text-sm font-normal"
    :class="[
      store.sidebar ? 'toggle-sidebar' : '',
      store.menu,
      store.layout,
      store.rtlClass,
    ]"
  >
    <component v-bind:is="mainLayout"></component>
  </div>
</template>

<script lang="ts" setup>
import { computed } from "vue";

import appLayout from "@/layouts/app-layout.vue";
import authLayout from "@/layouts/auth-layout.vue";
import { useRoute, useRouter } from "vue-router";

import { useAppStore } from "@/stores/index";
import { useMeta } from "@/composables/use-meta";

const store = useAppStore();
const route = useRoute();
const router = useRouter();

// meta
useMeta({ title: "PIS Shop" });

const mainLayout = computed(() => {
  // return store.mainLayout === 'auth' ? authLayout : appLayout;
  if (
    route.path == "/admin/login" ||
    route.path.includes("error404") ||
    route.path.includes("error404_2")
  )
    return authLayout;
  else return store.mainLayout === "app" ? appLayout : authLayout;
});
</script>
