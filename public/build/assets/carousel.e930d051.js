import{c as V,_ as y}from"./codePreview.ce436f36.js";import{g as S,n as T,N as L,P as j,a as b,S as f}from"./pagination.min.91c622ca.js";import{y as O,b as A,z as F,r as D,o as a,d as x,e as t,q as r,a6 as d,D as o,M as k,C as E,F as w,J as _,K as C}from"./main.4500d6ff.js";function P({swiper:e,extendParams:m,on:c,emit:i}){let l;e.autoplay={running:!1,paused:!1},m({autoplay:{enabled:!1,delay:3e3,waitForTransition:!0,disableOnInteraction:!0,stopOnLastSlide:!1,reverseDirection:!1,pauseOnMouseEnter:!1}});function h(){if(!e.size){e.autoplay.running=!1,e.autoplay.paused=!1;return}const p=e.slides.eq(e.activeIndex);let v=e.params.autoplay.delay;p.attr("data-swiper-autoplay")&&(v=p.attr("data-swiper-autoplay")||e.params.autoplay.delay),clearTimeout(l),l=T(()=>{let g;e.params.autoplay.reverseDirection?e.params.loop?(e.loopFix(),g=e.slidePrev(e.params.speed,!0,!0),i("autoplay")):e.isBeginning?e.params.autoplay.stopOnLastSlide?s():(g=e.slideTo(e.slides.length-1,e.params.speed,!0,!0),i("autoplay")):(g=e.slidePrev(e.params.speed,!0,!0),i("autoplay")):e.params.loop?(e.loopFix(),g=e.slideNext(e.params.speed,!0,!0),i("autoplay")):e.isEnd?e.params.autoplay.stopOnLastSlide?s():(g=e.slideTo(0,e.params.speed,!0,!0),i("autoplay")):(g=e.slideNext(e.params.speed,!0,!0),i("autoplay")),(e.params.cssMode&&e.autoplay.running||g===!1)&&h()},v)}function u(){return typeof l<"u"||e.autoplay.running?!1:(e.autoplay.running=!0,i("autoplayStart"),h(),!0)}function s(){return!e.autoplay.running||typeof l>"u"?!1:(l&&(clearTimeout(l),l=void 0),e.autoplay.running=!1,i("autoplayStop"),!0)}function n(p){!e.autoplay.running||e.autoplay.paused||(l&&clearTimeout(l),e.autoplay.paused=!0,p===0||!e.params.autoplay.waitForTransition?(e.autoplay.paused=!1,h()):["transitionend","webkitTransitionEnd"].forEach(v=>{e.$wrapperEl[0].addEventListener(v,M)}))}function z(){const p=S();p.visibilityState==="hidden"&&e.autoplay.running&&n(),p.visibilityState==="visible"&&e.autoplay.paused&&(h(),e.autoplay.paused=!1)}function M(p){!e||e.destroyed||!e.$wrapperEl||p.target===e.$wrapperEl[0]&&(["transitionend","webkitTransitionEnd"].forEach(v=>{e.$wrapperEl[0].removeEventListener(v,M)}),e.autoplay.paused=!1,e.autoplay.running?h():s())}function B(){e.params.autoplay.disableOnInteraction?s():(i("autoplayPause"),n()),["transitionend","webkitTransitionEnd"].forEach(p=>{e.$wrapperEl[0].removeEventListener(p,M)})}function $(){e.params.autoplay.disableOnInteraction||(e.autoplay.paused=!1,i("autoplayResume"),h())}function I(){e.params.autoplay.pauseOnMouseEnter&&(e.$el.on("mouseenter",B),e.$el.on("mouseleave",$))}function N(){e.$el.off("mouseenter",B),e.$el.off("mouseleave",$)}c("init",()=>{e.params.autoplay.enabled&&(u(),S().addEventListener("visibilitychange",z),I())}),c("beforeTransitionStart",(p,v,g)=>{e.autoplay.running&&(g||!e.params.autoplay.disableOnInteraction?e.autoplay.pause(v):s())}),c("sliderFirstMove",()=>{e.autoplay.running&&(e.params.autoplay.disableOnInteraction?s():n())}),c("touchEnd",()=>{e.params.cssMode&&e.autoplay.paused&&!e.params.autoplay.disableOnInteraction&&h()}),c("destroy",()=>{N(),e.autoplay.running&&s(),S().removeEventListener("visibilitychange",z)}),Object.assign(e.autoplay,{pause:n,run:h,start:u,stop:s})}const q=t("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[t("li",null,[t("a",{href:"javascript:;",class:"text-primary hover:underline"},"Components")]),t("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[t("span",null,"Carousel")])],-1),R={class:"pt-5 space-y-8"},J=w('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/swiper" target="_blank" class="block hover:underline">https://www.npmjs.com/package/swiper</a></div>',1),K={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},Z={class:"panel"},G={class:"flex items-center justify-between mb-5"},H=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Basic",-1),Q=w('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),U=[Q],W=["src"],X=t("a",{href:"javascript:;",class:"swiper-button-prev-ex1 grid place-content-center ltr:left-2 rtl:right-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 rtl:rotate-180"},[t("path",{d:"M15 5L9 12L15 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),Y=t("a",{href:"javascript:;",class:"swiper-button-next-ex1 grid place-content-center ltr:right-2 rtl:left-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:rotate-180"},[t("path",{d:"M15 5L9 12L15 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),tt=t("pre",null,`<!-- basic -->
<swiper
  :modules="[Navigation, Pagination]"
  :navigation="{ nextEl: '.swiper-button-next-ex1', prevEl: '.swiper-button-prev-ex1' }"
  :pagination="{ clickable: true }"
  class="max-w-3xl mx-auto mb-5"
  id="slider1"
>
  <template v-for="(item, i) in items" :key="i">
    <swiper-slide>
      <img :src="\`/assets/images/\${item}\`" class="w-full max-h-80 object-cover" alt="" />
    </swiper-slide>
  </template>
  <a
    href="javascript:;"
    class="
      swiper-button-prev-ex1
      grid
      place-content-center
      ltr:left-2
      rtl:right-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-1/2
      -translate-y-1/2
    "
  >
    <svg> ... </svg>
  </a>
  <a
    href="javascript:;"
    class="
      swiper-button-next-ex1
      grid
      place-content-center
      ltr:right-2
      rtl:left-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-1/2
      -translate-y-1/2
    "
  >
    <svg> ... </svg>
  </a>
</swiper>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
const items = ref(['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg']);
<\/script>
`,-1),et={class:"panel"},rt={class:"flex items-center justify-between mb-5"},st=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Autopaly",-1),at=w('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ot=[at],it=["src"],lt=t("div",{class:"absolute z-[999] text-white top-1/4 ltr:left-12 rtl:right-12"},[t("div",{class:"sm:text-3xl text-base font-bold"},"This is blog Image"),t("div",{class:"sm:mt-5 mt-1 w-4/5 text-base sm:block hidden font-medium"}," Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. "),t("button",{type:"button",class:"mt-4 btn btn-primary"},"Learn more")],-1),nt=t("a",{href:"javascript:;",class:"swiper-button-prev-ex2 grid place-content-center ltr:left-2 rtl:right-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 rtl:rotate-180"},[t("path",{d:"M15 5L9 12L15 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),pt=t("a",{href:"javascript:;",class:"swiper-button-next-ex2 grid place-content-center ltr:right-2 rtl:left-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:rotate-180"},[t("path",{d:"M15 5L9 12L15 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),dt=t("pre",null,`<!-- autopaly -->
<swiper
  :modules="[Navigation, Autoplay]"
  :navigation="{ nextEl: '.swiper-button-next-ex2', prevEl: '.swiper-button-prev-ex2' }"
  :autoplay="{ delay: 2000 }"
  class="max-w-3xl mx-auto mb-5"
  id="slider2"
>
  <template v-for="(item, i) in items" :key="i">
    <swiper-slide>
      <img :src="\`/assets/images/\${item}\`" class="w-full max-h-80 object-cover" alt="" />
      <div class="absolute z-[999] text-white top-1/4 ltr:left-12 rtl:right-12">
        <div class="sm:text-3xl text-base font-bold">This is blog Image</div>
        <div class="sm:mt-5 mt-1 w-4/5 text-base sm:block hidden font-medium">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
        </div>
        <button type="button" class="mt-4 btn btn-primary">Learn more</button>
      </div>
    </swiper-slide>
  </template>
  <a
    href="javascript:;"
    class="
      swiper-button-prev-ex2
      grid
      place-content-center
      ltr:left-2
      rtl:right-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-1/2
      -translate-y-1/2
    "
  >
    <svg> ... </svg>
  </a>
  <a
    href="javascript:;"
    class="
      swiper-button-next-ex2
      grid
      place-content-center
      ltr:right-2
      rtl:left-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-1/2
      -translate-y-1/2
    "
  >
    <svg> ... </svg>
  </a>
</swiper>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
const items = ref(['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg']);
<\/script>
`,-1),ut={class:"panel"},ct={class:"flex items-center justify-between mb-5"},mt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Vertical",-1),ht=w('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),gt=[ht],vt=["src"],ft=t("div",{class:"absolute z-[999] text-white top-1/2 left-1/2 w-full -translate-x-1/2 text-center"},[t("div",{class:"sm:text-xl text-base font-medium"},"Lorem Ipsum is simply dummy text of the printing.")],-1),xt=t("pre",null,`<!-- vertical -->
<swiper :modules="[Pagination, Autoplay]" :direction="'vertical'" :pagination="{ clickable: true }" :autoplay="{ delay: 2000 }" class="max-w-3xl mx-auto mb-5" id="slider3">
  <template v-for="(item, i) in items" :key="i">
    <swiper-slide>
      <img :src="\`/assets/images/\${item}\`" class="w-full" alt="" />
      <div class="absolute z-[999] text-white top-1/2 left-1/2 w-full -translate-x-1/2 text-center">
        <div class="sm:text-xl text-base font-medium">Lorem Ipsum is simply dummy text of the printing.</div>
      </div>
    </swiper-slide>
  </template>
</swiper>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
const items = ref(['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg']);
<\/script>
`,-1),wt={class:"panel"},yt={class:"flex items-center justify-between mb-5"},bt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Loop",-1),kt=w('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),_t=[kt],Ct=t("img",{src:"/assets/images/carousel1.jpeg",class:"w-full",alt:""},null,-1),Lt=t("div",{class:"absolute z-[999] text-white bottom-8 left-1/2 w-full -translate-x-1/2 text-center sm:px-0 px-11"},[t("div",{class:"text-3xl font-bold"},"Slide 1"),t("div",{class:"mb-4 sm:text-base font-medium"},"Lorem Ipsum is simply dummy text of the printing.")],-1),jt=t("img",{src:"/assets/images/carousel2.jpeg",class:"w-full",alt:""},null,-1),Et=t("div",{class:"absolute z-[999] text-white bottom-8 left-1/2 w-full -translate-x-1/2 text-center sm:px-0 px-11"},[t("div",{class:"text-3xl font-bold"},"Slide 2"),t("div",{class:"mb-4 sm:text-base font-medium"},"Lorem Ipsum is simply dummy text of the printing.")],-1),Mt=t("img",{src:"/assets/images/carousel3.jpeg",class:"w-full",alt:""},null,-1),St=t("div",{class:"absolute z-[999] text-white bottom-8 left-1/2 w-full -translate-x-1/2 text-center sm:px-0 px-11"},[t("div",{class:"text-3xl font-bold"},"Slide 3"),t("div",{class:"mb-4 sm:text-base font-medium"},"Lorem Ipsum is simply dummy text of the printing.")],-1),zt=t("a",{href:"javascript:;",class:"swiper-button-prev-ex4 grid place-content-center ltr:left-2 rtl:right-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 rtl:rotate-180"},[t("path",{d:"M15 5L9 12L15 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),Bt=t("a",{href:"javascript:;",class:"swiper-button-next-ex4 grid place-content-center ltr:right-2 rtl:left-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:rotate-180"},[t("path",{d:"M15 5L9 12L15 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),$t=t("pre",null,`<!-- loop -->
<swiper
  :modules="[Navigation, Pagination]"
  slidesPerView="auto"
  :spaceBetween="30"
  :loop="true"
  :navigation="{ nextEl: '.swiper-button-next-ex4', prevEl: '.swiper-button-prev-ex4' }"
  :pagination="{ clickable: true, type: 'fraction' }"
  class="max-w-3xl mx-auto mb-5"
  id="slider4"
>
  <swiper-slide>
    <img src="/assets/images/carousel1.jpeg" class="w-full" alt="" />
    <div class="absolute z-[999] text-white bottom-8 left-1/2 w-full -translate-x-1/2 text-center sm:px-0 px-11">
      <div class="text-3xl font-bold">Slide 1</div>
      <div class="mb-4 sm:text-base font-medium">Lorem Ipsum is simply dummy text of the printing.</div>
    </div>
  </swiper-slide>
  <swiper-slide>
    <img src="/assets/images/carousel2.jpeg" class="w-full" alt="" />
    <div class="absolute z-[999] text-white bottom-8 left-1/2 w-full -translate-x-1/2 text-center sm:px-0 px-11">
      <div class="text-3xl font-bold">Slide 2</div>
      <div class="mb-4 sm:text-base font-medium">Lorem Ipsum is simply dummy text of the printing.</div>
    </div>
  </swiper-slide>
  <swiper-slide>
    <img src="/assets/images/carousel3.jpeg" class="w-full" alt="" />
    <div class="absolute z-[999] text-white bottom-8 left-1/2 w-full -translate-x-1/2 text-center sm:px-0 px-11">
      <div class="text-3xl font-bold">Slide 3</div>
      <div class="mb-4 sm:text-base font-medium">Lorem Ipsum is simply dummy text of the printing.</div>
    </div>
  </swiper-slide>
  <a
    href="javascript:;"
    class="
      swiper-button-prev-ex4
      grid
      place-content-center
      ltr:left-2
      rtl:right-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-1/2
      -translate-y-1/2
    "
  >
    <svg> ... </svg>
  </a>
  <a
    href="javascript:;"
    class="
      swiper-button-next-ex4
      grid
      place-content-center
      ltr:right-2
      rtl:left-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-1/2
      -translate-y-1/2
    "
  >
    <svg> ... </svg>
  </a>
</swiper>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
const items = ref(['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg']);
<\/script>
`,-1),Pt={class:"panel lg:col-span-2"},It={class:"flex items-center justify-between mb-5"},Nt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Multiple Slides",-1),Vt=w('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Tt=[Vt],Ot=["src"],At=["src"],Ft=t("a",{href:"javascript:;",class:"swiper-button-prev-ex5 grid place-content-center ltr:left-2 rtl:right-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-[44%] -translate-y-1/2"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 rtl:rotate-180"},[t("path",{d:"M15 5L9 12L15 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),Dt=t("a",{href:"javascript:;",class:"swiper-button-next-ex5 grid place-content-center ltr:right-2 rtl:left-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-[44%] -translate-y-1/2"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:rotate-180"},[t("path",{d:"M15 5L9 12L15 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),qt=t("pre",null,`<!-- multiple -->
<swiper
  :modules="[Navigation, Pagination]"
  :navigation="{ nextEl: '.swiper-button-next-ex5', prevEl: '.swiper-button-prev-ex5' }"
  :pagination="{ clickable: true }"
  :breakpoints="{ 1024: { slidesPerView: 3, spaceBetween: 30 }, 768: { slidesPerView: 2, spaceBetween: 40 }, 320: { slidesPerView: 1, spaceBetween: 20 } }"
  id="slider5"
>
  <template v-for="(item, i) in items" :key="i">
    <swiper-slide>
      <img :src="\`/assets/images/\${item}\`" class="w-full" alt="" />
    </swiper-slide>
  </template>
  <template v-for="(item, i) in items" :key="i">
    <swiper-slide>
      <img :src="\`/assets/images/\${item}\`" class="w-full" alt="" />
    </swiper-slide>
  </template>
  <a
    href="javascript:;"
    class="
      swiper-button-prev-ex5
      grid
      place-content-center
      ltr:left-2
      rtl:right-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-[44%]
      -translate-y-1/2
    "
  >
    <svg> ... </svg>
  </a>
  <a
    href="javascript:;"
    class="
      swiper-button-next-ex5
      grid
      place-content-center
      ltr:right-2
      rtl:left-2
      p-1
      transition
      text-primary
      hover:text-white
      border border-primary
      hover:border-primary hover:bg-primary
      rounded-full
      absolute
      z-[999]
      top-[44%]
      -translate-y-1/2
    "
  >
    <svg> ... </svg>
  </a>
</swiper>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
const items = ref(['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg']);
<\/script>
`,-1),Zt=O({__name:"carousel",setup(e){const m=A();F({title:"Carousel"});const{codeArr:c,toggleCode:i}=V(),l=D(["carousel1.jpeg","carousel2.jpeg","carousel3.jpeg"]);return(h,u)=>(a(),x("div",null,[q,t("div",R,[J,t("div",K,[t("div",Z,[t("div",G,[H,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:u[0]||(u[0]=s=>r(i)("code1"))},U)]),(a(),d(r(b),{modules:[r(L),r(j)],navigation:{nextEl:".swiper-button-next-ex1",prevEl:".swiper-button-prev-ex1"},pagination:{clickable:!0},class:"max-w-3xl mx-auto mb-5",id:"slider1",dir:r(m).rtlClass,key:r(m).rtlClass==="rtl"?"true":"false"},{default:o(()=>[(a(!0),x(_,null,C(l.value,(s,n)=>(a(),d(r(f),{key:n},{default:o(()=>[t("img",{src:`/assets/images/${s}`,class:"w-full max-h-80 object-cover",alt:""},null,8,W)]),_:2},1024))),128)),X,Y]),_:1},8,["modules","navigation","dir"])),r(c).includes("code1")?(a(),d(y,{key:0},{default:o(()=>[tt]),_:1})):k("",!0)]),t("div",et,[t("div",rt,[st,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:u[1]||(u[1]=s=>r(i)("code2"))},ot)]),(a(),d(r(b),{modules:[r(L),r(P)],navigation:{nextEl:".swiper-button-next-ex2",prevEl:".swiper-button-prev-ex2"},autoplay:{delay:2e3},class:"max-w-3xl mx-auto mb-5",id:"slider2",dir:r(m).rtlClass,key:r(m).rtlClass==="rtl"?"true":"false"},{default:o(()=>[(a(!0),x(_,null,C(l.value,(s,n)=>(a(),d(r(f),{key:n},{default:o(()=>[t("img",{src:`/assets/images/${s}`,class:"w-full max-h-80 object-cover",alt:""},null,8,it),lt]),_:2},1024))),128)),nt,pt]),_:1},8,["modules","navigation","dir"])),r(c).includes("code2")?(a(),d(y,{key:0},{default:o(()=>[dt]),_:1})):k("",!0)]),t("div",ut,[t("div",ct,[mt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:u[2]||(u[2]=s=>r(i)("code3"))},gt)]),E(r(b),{modules:[r(j),r(P)],direction:"vertical",pagination:{clickable:!0},autoplay:{delay:2e3},class:"max-w-3xl mx-auto mb-5",id:"slider3"},{default:o(()=>[(a(!0),x(_,null,C(l.value,(s,n)=>(a(),d(r(f),{key:n},{default:o(()=>[t("img",{src:`/assets/images/${s}`,class:"w-full",alt:""},null,8,vt),ft]),_:2},1024))),128))]),_:1},8,["modules"]),r(c).includes("code3")?(a(),d(y,{key:0},{default:o(()=>[xt]),_:1})):k("",!0)]),t("div",wt,[t("div",yt,[bt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:u[3]||(u[3]=s=>r(i)("code4"))},_t)]),(a(),d(r(b),{modules:[r(L),r(j)],slidesPerView:"auto",spaceBetween:30,loop:!0,navigation:{nextEl:".swiper-button-next-ex4",prevEl:".swiper-button-prev-ex4"},pagination:{clickable:!0,type:"fraction"},class:"max-w-3xl mx-auto mb-5",id:"slider4",dir:r(m).rtlClass,key:r(m).rtlClass==="rtl"?"true":"false"},{default:o(()=>[E(r(f),null,{default:o(()=>[Ct,Lt]),_:1}),E(r(f),null,{default:o(()=>[jt,Et]),_:1}),E(r(f),null,{default:o(()=>[Mt,St]),_:1}),zt,Bt]),_:1},8,["modules","navigation","dir"])),r(c).includes("code4")?(a(),d(y,{key:0},{default:o(()=>[$t]),_:1})):k("",!0)]),t("div",Pt,[t("div",It,[Nt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:u[4]||(u[4]=s=>r(i)("code5"))},Tt)]),(a(),d(r(b),{modules:[r(L),r(j)],navigation:{nextEl:".swiper-button-next-ex5",prevEl:".swiper-button-prev-ex5"},pagination:{clickable:!0},breakpoints:{1024:{slidesPerView:3,spaceBetween:30},768:{slidesPerView:2,spaceBetween:40},320:{slidesPerView:1,spaceBetween:20}},id:"slider5",dir:r(m).rtlClass,key:r(m).rtlClass==="rtl"?"true":"false"},{default:o(()=>[(a(!0),x(_,null,C(l.value,(s,n)=>(a(),d(r(f),{key:n},{default:o(()=>[t("img",{src:`/assets/images/${s}`,class:"w-full",alt:""},null,8,Ot)]),_:2},1024))),128)),(a(!0),x(_,null,C(l.value,(s,n)=>(a(),d(r(f),{key:n},{default:o(()=>[t("img",{src:`/assets/images/${s}`,class:"w-full",alt:""},null,8,At)]),_:2},1024))),128)),Ft,Dt]),_:1},8,["modules","navigation","dir"])),r(c).includes("code5")?(a(),d(y,{key:0},{default:o(()=>[qt]),_:1})):k("",!0)])])])]))}});export{Zt as default};
