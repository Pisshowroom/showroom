import{S as Y,N as Q,P as W,a as J}from"./pagination.min.87ebf9bc.js";import{c as K,_ as h}from"./codePreview.d696898b.js";import{y as X,z as tt,b as et,r,o as p,d as Z,e as t,q as a,C as s,D as l,a6 as v,M as g,F as m,I as R,G as U,J as at,K as st}from"./main.cc415107.js";import{S as c,U as n,h as o,Y as d,G as u}from"./transition.9fc98ba7.js";import{x as lt,I as it,y as E,S as ot,g as G}from"./tabs.1554f98a.js";import"./dom.dcc5cba1.js";import"./micro-task.4bc1500d.js";import"./open-closed.12e61d64.js";import"./use-resolve-button-type.5aeb125b.js";const rt=t("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[t("li",null,[t("a",{href:"javascript:;",class:"text-primary hover:underline"},"Components")]),t("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[t("span",null,"Modals")])],-1),nt={class:"pt-5 space-y-8"},dt=m('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://headlessui.com/vue/dialog" target="_blank" class="block hover:underline">https://headlessui.com/vue/dialog</a></div>',1),ut={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},ct={class:"panel"},pt={class:"flex items-center justify-between mb-5"},vt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Basic",-1),mt=m('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ft=[mt],bt={class:"mb-5"},ht={class:"flex items-center justify-center"},gt={class:"fixed inset-0 overflow-y-auto"},yt={class:"flex min-h-full items-start justify-center px-4 py-8"},xt=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),wt=[xt],kt=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),_t={class:"p-5"},Ct=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),Tt={class:"flex justify-end items-center mt-8"},Dt=t("pre",null,`<!-- basic -->
<div class="mb-5">
  <!-- Trigger -->
  <div class="flex items-center justify-center">
    <button type="button" class="btn btn-primary" @click="modal1 = true">Launch modal</button>
  </div>

  <!-- Modal -->
  <TransitionRoot appear :show="modal1" as="template">
    <Dialog as="div" @close="modal1 = false" class="relative z-50">
      <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0" enter-to="opacity-100" leave="duration-200 ease-in" leave-from="opacity-100" leave-to="opacity-0">
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark">
              <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal1 = false">
                <svg> ... </svg>
              </button>
              <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
              <div class="p-5">
                <p>
                  Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes,
                  nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
                </p>

                <div class="flex justify-end items-center mt-8">
                  <button type="button" @click="modal1 = false" class="btn btn-outline-danger">Discard</button>
                  <button type="button" @click="modal1 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
                </div>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { TransitionRoot, TransitionChild, Dialog, DialogPanel, DialogOverlay } from '@headlessui/vue';
const modal1 = ref(false);
<\/script>
`,-1),jt={class:"panel"},Mt={class:"flex items-center justify-between mb-5"},$t=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Vertically Centered",-1),Pt=m('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),St=[Pt],Lt={class:"mb-5"},qt={class:"flex items-center justify-center"},Rt={class:"fixed inset-0 overflow-y-auto"},Ot={class:"flex min-h-full items-center justify-center px-4 py-8"},zt=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),Vt=[zt],Ut=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),Bt={class:"p-5"},It=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),Ft={class:"flex justify-end items-center mt-8"},Nt=t("pre",null,`<!-- vertically centered -->
<div class="mb-5">
  <!-- Trigger -->
  <div class="flex items-center justify-center">
    <button type="button" class="btn btn-info" @click="modal2 = true">Launch modal</button>
  </div>

  <!-- Modal -->
  <TransitionRoot appear :show="modal2" as="template">
    <Dialog as="div" @close="modal2 = false" class="relative z-50">
      <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0" enter-to="opacity-100" leave="duration-200 ease-in" leave-from="opacity-100" leave-to="opacity-0">
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-center justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark">
              <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal2 = false">
                <svg> ... </svg>
              </button>
              <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
              <div class="p-5">
                <p>
                  Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes,
                  nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
                </p>

                <div class="flex justify-end items-center mt-8">
                  <button type="button" @click="modal2 = false" class="btn btn-outline-danger">Discard</button>
                  <button type="button" @click="modal2 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
                </div>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { TransitionRoot, TransitionChild, Dialog, DialogPanel, DialogOverlay } from '@headlessui/vue';
const modal2 = ref(false);
<\/script>
`,-1),At={class:"panel"},Et={class:"flex items-center justify-between mb-5"},Gt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Static",-1),Zt=m('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Ht=[Zt],Yt={class:"mb-5"},Qt={class:"flex items-center justify-center"},Wt={class:"fixed inset-0 overflow-y-auto"},Jt={class:"flex min-h-full items-start justify-center px-4 py-8"},Kt=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),Xt=[Kt],te=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),ee={class:"p-5"},ae=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),se={class:"flex justify-end items-center mt-8"},le=t("pre",null,`<!-- static -->
<div class="mb-5">
  <!-- Trigger -->
  <div class="flex items-center justify-center">
    <button type="button" class="btn btn-secondary" @click="modal3 = true">Static modal</button>
  </div>

  <!-- Modal -->
  <TransitionRoot appear :show="modal3" as="template">
    <Dialog as="div" class="relative z-50">
      <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0" enter-to="opacity-100" leave="duration-200 ease-in" leave-from="opacity-100" leave-to="opacity-0">
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark">
              <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal3 = false">
                <svg> ... </svg>
              </button>
              <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
              <div class="p-5">
                <p>
                  Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes,
                  nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
                </p>

                <div class="flex justify-end items-center mt-8">
                  <button type="button" @click="modal3 = false" class="btn btn-outline-danger">Discard</button>
                  <button type="button" @click="modal3 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
                </div>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { TransitionRoot, TransitionChild, Dialog, DialogPanel, DialogOverlay } from '@headlessui/vue';
const modal3 = ref(false);
<\/script>
`,-1),ie={class:"panel"},oe={class:"flex items-center justify-between mb-5"},re=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Remove animation",-1),ne=m('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),de=[ne],ue={class:"mb-5"},ce={class:"flex items-center justify-center"},pe={class:"fixed inset-0 overflow-y-auto"},ve={class:"flex min-h-full items-start justify-center px-4 py-8"},me=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),fe=[me],be=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),he={class:"p-5"},ge=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),ye={class:"flex justify-end items-center mt-8"},xe=t("pre",null,`<!-- remove animation -->
<div class="mb-5">
  <!-- Trigger -->
  <div class="flex items-center justify-center">
    <button type="button" class="btn btn-success" @click="modal4 = true">Launch modal</button>
  </div>

  <!-- Modal -->
  <Dialog as="div" :open="modal4" @close="modal4 = false" class="relative z-50">
    <DialogOverlay class="fixed inset-0 bg-[black]/60" />

    <div class="fixed inset-0 overflow-y-auto">
      <div class="flex min-h-full items-start justify-center px-4 py-8">
        <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark">
          <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal4 = false">
            <svg> ... </svg>
          </button>
          <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
          <div class="p-5">
            <p>
              Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
            </p>

            <div class="flex justify-end items-center mt-8">
              <button type="button" @click="modal4 = false" class="btn btn-outline-danger">Discard</button>
              <button type="button" @click="modal4 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
            </div>
          </div>
        </DialogPanel>
      </div>
    </div>
  </Dialog>
</div>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { Dialog, DialogPanel, DialogOverlay } from '@headlessui/vue';
const modal4 = ref(false);
<\/script>
`,-1),we={class:"panel"},ke={class:"flex items-center justify-between mb-5"},_e=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Optional sizes",-1),Ce=m('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Te=[Ce],De={class:"mb-5"},je={class:"flex items-center justify-center gap-2"},Me={class:"fixed inset-0 overflow-y-auto"},$e={class:"flex min-h-full items-start justify-center px-4 py-8"},Pe=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),Se=[Pe],Le=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),qe={class:"p-5"},Re=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),Oe={class:"flex justify-end items-center mt-8"},ze={class:"fixed inset-0 overflow-y-auto"},Ve={class:"flex min-h-full items-start justify-center px-4 py-8"},Ue=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),Be=[Ue],Ie=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),Fe={class:"p-5"},Ne=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),Ae={class:"flex justify-end items-center mt-8"},Ee={class:"fixed inset-0 overflow-y-auto"},Ge={class:"flex min-h-full items-start justify-center px-4 py-8"},Ze=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),He=[Ze],Ye=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),Qe={class:"p-5"},We=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),Je={class:"flex justify-end items-center mt-8"},Ke=t("pre",null,`<!-- extra large -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-warning" @click="modal5 = true">Extra large</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal5" as="template">
    <Dialog as="div" @close="modal5 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-5xl text-black dark:text-white-dark">
              <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal5 = false">
                <svg> ... </svg>
              </button>
              <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
              <div class="p-5">
                <p>
                  Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient
                  montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
                </p>

                <div class="flex justify-end items-center mt-8">
                  <button type="button" @click="modal5 = false" class="btn btn-outline-danger">Discard</button>
                  <button type="button" @click="modal5 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
                </div>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- large -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-danger" @click="modal6 = true">Large</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal6" as="template">
    <Dialog as="div" @close="modal6 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-xl text-black dark:text-white-dark">
              <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal6 = false">
                <svg> ... </svg>
              </button>
              <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
              <div class="p-5">
                <p>
                  Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient
                  montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
                </p>

                <div class="flex justify-end items-center mt-8">
                  <button type="button" @click="modal6 = false" class="btn btn-outline-danger">Discard</button>
                  <button type="button" @click="modal6 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
                </div>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- small -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-secondary" @click="modal7 = true">Small</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal7" as="template">
    <Dialog as="div" @close="modal7 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-sm text-black dark:text-white-dark">
              <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal7 = false">
                <svg> ... </svg>
              </button>
              <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
              <div class="p-5">
                <p>
                  Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient
                  montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
                </p>

                <div class="flex justify-end items-center mt-8">
                  <button type="button" @click="modal7 = false" class="btn btn-outline-danger">Discard</button>
                  <button type="button" @click="modal7 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
                </div>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { TransitionRoot, TransitionChild, Dialog, DialogPanel, DialogOverlay } from '@headlessui/vue';
const modal5 = ref(false);
const modal6 = ref(false);
const modal7 = ref(false);
<\/script>
`,-1),Xe={class:"panel"},ta={class:"flex items-center justify-between mb-5"},ea=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Video",-1),aa=m('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),sa=[aa],la={class:"mb-5"},ia={class:"flex items-center justify-center"},oa={class:"fixed inset-0 overflow-y-auto"},ra={class:"flex min-h-full items-start justify-center px-4 py-8"},na=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),da=[na],ua=t("div",{class:"p-5"},[t("iframe",{src:"https://www.youtube.com/embed/tgbNymZ7vqY",class:"w-full h-[250px] md:h-[550px]"})],-1),ca=t("pre",null,`<!-- video -->
<div class="mb-5">
  <!-- Trigger -->
  <div class="flex items-center justify-center">
    <button type="button" class="btn btn-primary" @click="modal8 = true">Play Youtube</button>
  </div>

  <!-- Modal -->
  <TransitionRoot appear :show="modal8" as="template">
    <Dialog as="div" @close="modal8 = false" class="relative z-50">
      <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0" enter-to="opacity-100" leave="duration-200 ease-in" leave-from="opacity-100" leave-to="opacity-0">
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="relative overflow-hidden w-full max-w-3xl py-8">
              <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal8 = false">
                <svg> ... </svg>
              </button>
              <div class="p-5">
                <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" class="w-full h-[250px] md:h-[550px]"></iframe>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { TransitionRoot, TransitionChild, Dialog, DialogPanel, DialogOverlay } from '@headlessui/vue';
import { useAppStore } from '@/stores/index';
const store = useAppStore();
const modal8 = ref(false);
<\/script>
`,-1),pa={class:"panel lg:col-span-2"},va={class:"flex items-center justify-between mb-5"},ma=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Animation Style Modal",-1),fa=m('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ba=[fa],ha={class:"mb-5"},ga={class:"flex flex-wrap items-center justify-center gap-2"},ya={class:"fixed inset-0 overflow-y-auto"},xa={class:"flex min-h-full items-start justify-center px-4 py-8"},wa=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),ka=[wa],_a=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),Ca={class:"p-5"},Ta=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),Da={class:"flex justify-end items-center mt-8"},ja={class:"fixed inset-0 overflow-y-auto"},Ma={class:"flex min-h-full items-start justify-center px-4 py-8"},$a=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),Pa=[$a],Sa=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),La={class:"p-5"},qa=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),Ra={class:"flex justify-end items-center mt-8"},Oa={class:"fixed inset-0 overflow-y-auto"},za={class:"flex min-h-full items-start justify-center px-4 py-8"},Va=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),Ua=[Va],Ba=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),Ia={class:"p-5"},Fa=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),Na={class:"flex justify-end items-center mt-8"},Aa={class:"fixed inset-0 overflow-y-auto"},Ea={class:"flex min-h-full items-start justify-center px-4 py-8"},Ga=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),Za=[Ga],Ha=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),Ya={class:"p-5"},Qa=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),Wa={class:"flex justify-end items-center mt-8"},Ja={class:"fixed inset-0 overflow-y-auto"},Ka={class:"flex min-h-full items-start justify-center px-4 py-8"},Xa=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),ts=[Xa],es=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),as={class:"p-5"},ss=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),ls={class:"flex justify-end items-center mt-8"},is={class:"fixed inset-0 overflow-y-auto"},os={class:"flex min-h-full items-start justify-center px-4 py-8"},rs=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),ns=[rs],ds=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),us={class:"p-5"},cs=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),ps={class:"flex justify-end items-center mt-8"},vs={class:"fixed inset-0 overflow-y-auto"},ms={class:"flex min-h-full items-start justify-center px-4 py-8"},fs=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),bs=[fs],hs=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),gs={class:"p-5"},ys=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),xs={class:"flex justify-end items-center mt-8"},ws={class:"fixed inset-0 overflow-y-auto"},ks={class:"flex min-h-full items-start justify-center px-4 py-8"},_s=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),Cs=[_s],Ts=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Modal Title ",-1),Ds={class:"p-5"},js=t("p",null," Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. ",-1),Ms={class:"flex justify-end items-center mt-8"},$s=t("pre",null,`<!-- fadein -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-primary" @click="modal9 = true">FadeIn</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal9" as="template">
    <Dialog as="div" @close="modal9 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated animate__fadeIn">
            <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal9 = false">
              <svg> ... </svg>
            </button>
            <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
            <div class="p-5">
              <p>
                Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
              </p>

              <div class="flex justify-end items-center mt-8">
                <button type="button" @click="modal9 = false" class="btn btn-outline-danger">Discard</button>
                <button type="button" @click="modal9 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
              </div>
            </div>
          </DialogPanel>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- slidein down -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-info" @click="modal10 = true">SlideIn Down</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal10" as="template">
    <Dialog as="div" @close="modal10 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated animate__slideInDown">
            <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal10 = false">
              <svg> ... </svg>
            </button>
            <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
            <div class="p-5">
              <p>
                Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
              </p>

              <div class="flex justify-end items-center mt-8">
                <button type="button" @click="modal10 = false" class="btn btn-outline-danger">Discard</button>
                <button type="button" @click="modal10 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
              </div>
            </div>
          </DialogPanel>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- fadein up -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-success" @click="modal11 = true">FadeIn Up</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal11" as="template">
    <Dialog as="div" @close="modal11 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated animate__fadeInUp">
            <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal11 = false">
              <svg> ... </svg>
            </button>
            <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
            <div class="p-5">
              <p>
                Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
              </p>

              <div class="flex justify-end items-center mt-8">
                <button type="button" @click="modal11 = false" class="btn btn-outline-danger">Discard</button>
                <button type="button" @click="modal11 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
              </div>
            </div>
          </DialogPanel>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- slidein up -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-warning" @click="modal12 = true">SlideIn Up</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal12" as="template">
    <Dialog as="div" @close="modal12 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated animate__slideInUp">
            <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal12 = false">
              <svg> ... </svg>
            </button>
            <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
            <div class="p-5">
              <p>
                Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
              </p>

              <div class="flex justify-end items-center mt-8">
                <button type="button" @click="modal12 = false" class="btn btn-outline-danger">Discard</button>
                <button type="button" @click="modal12 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
              </div>
            </div>
          </DialogPanel>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- fadein left -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-danger" @click="modal13 = true">FadeIn Left</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal13" as="template">
    <Dialog as="div" @close="modal13 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <DialogPanel
            class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated"
            :class="store.rtlClass === 'rtl' ? 'animate__fadeInRight' : 'animate__fadeInLeft'"
          >
            <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal13 = false">
              <svg> ... </svg>
            </button>
            <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
            <div class="p-5">
              <p>
                Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
              </p>

              <div class="flex justify-end items-center mt-8">
                <button type="button" @click="modal13 = false" class="btn btn-outline-danger">Discard</button>
                <button type="button" @click="modal13 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
              </div>
            </div>
          </DialogPanel>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- rotatein left -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-secondary" @click="modal14 = true">RotateIn Left</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal14" as="template">
    <Dialog as="div" @close="modal14 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <DialogPanel
            class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated"
            :class="store.rtlClass === 'rtl' ? 'animate__rotateInDownRight' : 'animate__rotateInDownLeft'"
          >
            <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal14 = false">
              <svg> ... </svg>
            </button>
            <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
            <div class="p-5">
              <p>
                Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
              </p>

              <div class="flex justify-end items-center mt-8">
                <button type="button" @click="modal14 = false" class="btn btn-outline-danger">Discard</button>
                <button type="button" @click="modal14 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
              </div>
            </div>
          </DialogPanel>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- fadein right -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-dark" @click="modal15 = true">FadeIn Right</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal15" as="template">
    <Dialog as="div" @close="modal15 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <DialogPanel
            class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated"
            :class="store.rtlClass === 'rtl' ? 'animate__fadeInLeft' : 'animate__fadeInRight'"
          >
            <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal15 = false">
              <svg> ... </svg>
            </button>
            <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
            <div class="p-5">
              <p>
                Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
              </p>

              <div class="flex justify-end items-center mt-8">
                <button type="button" @click="modal15 = false" class="btn btn-outline-danger">Discard</button>
                <button type="button" @click="modal15 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
              </div>
            </div>
          </DialogPanel>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- zoomin up -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-primary" @click="modal16 = true">ZoomIn Up</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal16" as="template">
    <Dialog as="div" @close="modal16 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated animate__zoomInUp">
            <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal16 = false">
              <svg> ... </svg>
            </button>
            <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Modal Title</div>
            <div class="p-5">
              <p>
                Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.
              </p>

              <div class="flex justify-end items-center mt-8">
                <button type="button" @click="modal16 = false" class="btn btn-outline-danger">Discard</button>
                <button type="button" @click="modal16 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
              </div>
            </div>
          </DialogPanel>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>


<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { TransitionRoot, TransitionChild, Dialog, DialogPanel, DialogOverlay } from '@headlessui/vue';
const modal9 = ref(false);
const modal10 = ref(false);
const modal11 = ref(false);
const modal12 = ref(false);
const modal13 = ref(false);
const modal14 = ref(false);
const modal15 = ref(false);
const modal16 = ref(false);
<\/script>
`,-1),Ps={class:"panel lg:col-span-2"},Ss={class:"flex items-center justify-between mb-5"},Ls=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Custom",-1),qs=m('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Rs=[qs],Os={class:"mb-5"},zs=t("p",{class:"text-center mb-4"},"More Custom Modals.",-1),Vs={class:"flex flex-wrap items-center justify-center gap-2"},Us={class:"fixed inset-0 overflow-y-auto"},Bs={class:"flex min-h-full items-start justify-center px-4 py-8"},Is=t("div",{class:"flex items-center justify-center dark:text-white-dark/70 text-base font-medium text-[#1f2937] p-5"},[t("div",{class:"flex items-center justify-center w-16 h-16 rounded-full bg-[#f1f2f3] dark:bg-white/10"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-7 h-7"},[t("path",{d:"M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})])])],-1),Fs={class:"p-5"},Ns=t("div",{class:"text-white-dark text-center text-sm"},[t("p",null," Vivamus vitae hendrerit neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi consequat auctor turpis, vitae dictum augue efficitur vitae. Vestibulum a risus ipsum. Quisque nec lacus dolor. Quisque ornare tempor orci id rutrum. ")],-1),As={class:"flex justify-end items-center mt-8"},Es={class:"fixed inset-0 overflow-y-auto"},Gs={class:"flex min-h-full items-start justify-center px-4 py-8"},Zs=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-6 h-6"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),Hs=[Zs],Ys=t("div",{class:"text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]"}," Tabs ",-1),Qs={class:"p-5"},Ws=t("a",{href:"javascript:;",class:"p-3.5 py-2 -mb-[1px] block pointer-events-none text-white-light dark:text-dark"},"Disabled",-1),Js=t("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Ks=t("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Xs=t("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),tl=t("div",{class:"flex items-start"},[t("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[t("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),t("div",{class:"flex-auto"},[t("h5",{class:"text-xl font-medium mb-4"},"Media heading"),t("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),el=t("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),al={class:"flex justify-end items-center mt-8"},sl={class:"fixed inset-0 overflow-y-auto"},ll={class:"flex min-h-full items-start justify-center px-4 py-8"},il={class:"px-5 pt-5 ltr:text-right rtl:text-left"},ol=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-5 h-5"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),rl=[ol],nl=t("div",{class:"p-5"},[t("div",{class:"text-white dark:text-white-light text-center"},[t("div",{class:"rounded-full w-20 h-20 mx-auto mb-7 overflow-hidden"},[t("img",{src:"/assets/images/profile-16.jpeg",alt:"",class:"w-full h-full object-cover"})]),t("p",{class:"font-semibold"},[U("Click on view to access "),t("br"),U("your profile.")])]),t("div",{class:"flex justify-center items-center mt-8 mb-5"},[t("button",{type:"button",class:"btn bg-white text-black dark:btn-dark"},"View")])],-1),dl={class:"fixed inset-0 overflow-y-auto"},ul={class:"flex min-h-full items-start justify-center px-4 py-8"},cl=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-5 h-5"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),pl=[cl],vl=t("div",{class:"text-lg font-semibold ltr:pl-5 rtl:pr-5 py-5 ltr:pr-[50px] rtl:pl-[50px]"},"Login",-1),ml=t("div",{class:"p-5"},[t("form",null,[t("div",{class:"relative mb-4"},[t("span",{class:"absolute ltr:left-3 rtl:right-3 top-1/2 -translate-y-1/2 dark:text-white-dark"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5"},[t("circle",{cx:"12",cy:"6",r:"4",stroke:"currentColor","stroke-width":"1.5"}),t("ellipse",{opacity:"0.5",cx:"12",cy:"17",rx:"7",ry:"4",stroke:"currentColor","stroke-width":"1.5"})])]),t("input",{type:"email",placeholder:"Email",class:"form-input ltr:pl-10 rtl:pr-10"})]),t("div",{class:"relative mb-4"},[t("span",{class:"absolute ltr:left-3 rtl:right-3 top-1/2 -translate-y-1/2 dark:text-white-dark"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5"},[t("path",{d:"M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M6 10V8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8V10",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})])]),t("input",{type:"password",placeholder:"Password",class:"form-input ltr:pl-10 rtl:pr-10"})]),t("button",{type:"button",class:"btn btn-primary w-full"},"Login")])],-1),fl=t("div",{class:"my-4 text-center text-xs text-white-dark dark:text-white-dark/70"},"OR",-1),bl=t("div",{class:"flex items-center justify-center gap-3 mb-5"},[t("a",{href:"javascript:void(0);",class:"btn btn-outline-primary flex gap-1"},[t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-5 h-5 shrink-0"},[t("path",{d:"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"})]),t("span",null,"Facebook")]),t("a",{href:"javascript:void(0);",class:"btn btn-outline-danger flex gap-1"},[t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-5 h-5 shrink-0"},[t("path",{d:"M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"})]),t("span",null,"Github")])],-1),hl=t("div",{class:"p-5 border-t border-[#ebe9f1] dark:border-white/10 text-sm"},[t("p",{class:"text-center text-white-dark dark:text-white-dark/70"},[U(" Looking to "),t("a",{href:"javascript:;",class:"text-[#515365] hover:underline dark:text-white-dark"},"create an account?")])],-1),gl={class:"fixed inset-0 overflow-y-auto"},yl={class:"flex min-h-full items-start justify-center px-4 py-8"},xl=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-5 h-5"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),wl=[xl],kl=t("div",{class:"text-lg font-semibold ltr:pl-5 rtl:pr-5 py-5 ltr:pr-[50px] rtl:pl-[50px]"},"Register",-1),_l=t("div",{class:"p-5"},[t("form",null,[t("div",{class:"relative mb-4"},[t("span",{class:"absolute ltr:left-3 rtl:right-3 top-1/2 -translate-y-1/2 dark:text-white-dark"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5"},[t("circle",{cx:"12",cy:"6",r:"4",stroke:"currentColor","stroke-width":"1.5"}),t("ellipse",{opacity:"0.5",cx:"12",cy:"17",rx:"7",ry:"4",stroke:"currentColor","stroke-width":"1.5"})])]),t("input",{type:"text",placeholder:"Name",class:"form-input ltr:pl-10 rtl:pr-10"})]),t("div",{class:"relative mb-4"},[t("span",{class:"absolute ltr:left-3 rtl:right-3 top-1/2 -translate-y-1/2 dark:text-white-dark"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5"},[t("path",{d:"M12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 12.7215 17.8726 13.4133 17.6392 14.054C17.5551 14.285 17.4075 14.4861 17.2268 14.6527L17.1463 14.727C16.591 15.2392 15.7573 15.3049 15.1288 14.8858C14.6735 14.5823 14.4 14.0713 14.4 13.5241V12M14.4 12C14.4 13.3255 13.3255 14.4 12 14.4C10.6745 14.4 9.6 13.3255 9.6 12C9.6 10.6745 10.6745 9.6 12 9.6C13.3255 9.6 14.4 10.6745 14.4 12Z",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"}),t("path",{opacity:"0.5",d:"M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z",stroke:"currentColor","stroke-width":"1.5"})])]),t("input",{type:"email",placeholder:"Email",class:"form-input ltr:pl-10 rtl:pr-10"})]),t("div",{class:"relative mb-4"},[t("span",{class:"absolute ltr:left-3 rtl:right-3 top-1/2 -translate-y-1/2 dark:text-white-dark"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5"},[t("path",{d:"M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M6 10V8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8V10",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})])]),t("input",{type:"password",placeholder:"Password",class:"form-input ltr:pl-10 rtl:pr-10"})]),t("button",{type:"button",class:"btn btn-primary w-full"},"Submit")])],-1),Cl=t("div",{class:"my-4 text-center text-xs text-white-dark dark:text-white-dark/70"},"OR",-1),Tl=t("div",{class:"flex items-center justify-center gap-3 mb-5"},[t("a",{href:"javascript:void(0);",class:"btn btn-outline-primary flex gap-1"},[t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-5 h-5 shrink-0"},[t("path",{d:"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"})]),t("span",null,"Facebook")]),t("a",{href:"javascript:void(0);",class:"btn btn-outline-danger flex gap-1"},[t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-5 h-5 shrink-0"},[t("path",{d:"M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"})]),t("span",null,"Github")])],-1),Dl=t("div",{class:"p-5 border-t border-[#ebe9f1] dark:border-white/10 text-sm"},[t("p",{class:"text-center text-white-dark dark:text-white-dark/70"},[U(" Already have "),t("a",{href:"javascript:;",class:"text-[#515365] hover:underline dark:text-white-dark"},"Login?")])],-1),jl={class:"fixed inset-0 overflow-y-auto"},Ml={class:"flex min-h-full items-start justify-center px-4 py-8"},$l=t("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round",class:"w-5 h-5"},[t("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),t("line",{x1:"6",y1:"6",x2:"18",y2:"18"})],-1),Pl=[$l],Sl=t("div",{class:"text-lg font-semibold ltr:pl-5 rtl:pr-5 py-5 ltr:pr-[50px] rtl:pl-[50px]"},"Slider",-1),Ll={class:"px-5"},ql=["src"],Rl=t("a",{href:"javascript:;",class:"swiper-button-prev-ex1 grid place-content-center ltr:left-2 rtl:right-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 rtl:rotate-180"},[t("path",{d:"M15 5L9 12L15 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),Ol=t("a",{href:"javascript:;",class:"swiper-button-next-ex1 grid place-content-center ltr:right-2 rtl:left-2 p-1 transition text-primary hover:text-white border border-primary hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:rotate-180"},[t("path",{d:"M15 5L9 12L15 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),zl=t("pre",null,`<!-- standard  -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-primary" @click="modal17 = true">Standard</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal17" as="template">
    <Dialog as="div" @close="modal17 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark">
              <div class="flex items-center justify-center dark:text-white-dark/70 text-base font-medium text-[#1f2937] p-5">
                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-[#f1f2f3] dark:bg-white/10">
                  <svg> ... </svg>
                </div>
              </div>
              <div class="p-5">
                <div class="text-white-dark text-center text-sm">
                  <p>
                    Vivamus vitae hendrerit neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi consequat auctor turpis, vitae dictum
                    augue efficitur vitae. Vestibulum a risus ipsum. Quisque nec lacus dolor. Quisque ornare tempor orci id rutrum.
                  </p>
                </div>
                <div class="flex justify-end items-center mt-8">
                  <button type="button" class="btn btn-outline-danger" @click="modal17 = false">Discard</button>
                  <button type="button" class="btn btn-primary ltr:ml-4 rtl:mr-4" @click="modal17 = false">Save</button>
                </div>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- tabs -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-info" @click="modal18 = true">Tabs</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal18" as="template">
    <Dialog as="div" @close="modal18 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark">
              <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal18 = false">
                <svg> ... </svg>
              </button>
              <div class="text-lg font-bold bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]">Tabs</div>
              <div class="p-5">
                <TabGroup as="div">
                  <TabList class="flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]">
                    <Tab as="template" v-slot="{ selected }">
                      <a
                        href="javascript:;"
                        class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none"
                        :class="{ '!border-white-light !border-b-white  text-primary dark:!border-[#191e3a] dark:!border-b-black': selected }"
                        >Home</a
                      >
                    </Tab>
                    <Tab as="template" v-slot="{ selected }">
                      <a
                        href="javascript:;"
                        class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none"
                        :class="{ '!border-white-light !border-b-white text-primary dark:!border-[#191e3a] dark:!border-b-black': selected }"
                        >Profile</a
                      >
                    </Tab>
                    <Tab as="template" v-slot="{ selected }">
                      <a
                        href="javascript:;"
                        class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none"
                        :class="{ '!border-white-light !border-b-white text-primary dark:!border-[#191e3a] dark:!border-b-black': selected }"
                        >Contact</a
                      >
                    </Tab>
                    <Tab as="template" disabled>
                      <a href="javascript:;" class="p-3.5 py-2 -mb-[1px] block pointer-events-none text-white-light dark:text-dark">Disabled</a>
                    </Tab>
                  </TabList>
                  <TabPanels class="pt-5 flex-1 text-sm">
                    <TabPanel>
                      <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                      <p class="mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      </p>
                    </TabPanel>
                    <TabPanel>
                      <div class="flex items-start">
                        <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                          <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                        </div>
                        <div class="flex-auto">
                          <h5 class="text-xl font-medium mb-4">Media heading</h5>
                          <p class="text-white-dark">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                            turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                          </p>
                        </div>
                      </div>
                    </TabPanel>
                    <TabPanel>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                    </TabPanel>
                    <TabPanel>Disabled</TabPanel>
                  </TabPanels>
                </TabGroup>
                <div class="flex justify-end items-center mt-8">
                  <button type="button" @click="modal18 = false" class="btn btn-outline-danger">Discard</button>
                  <button type="button" @click="modal18 = false" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
                </div>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- profile -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-success" @click="modal19 = true">Profile</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal19" as="template">
    <Dialog as="div" @close="modal19 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-[300px] text-black dark:text-white-dark bg-secondary dark:bg-secondary">
              <div class="px-5 pt-5 text-right">
                <button type="button" class="text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none" @click="modal19 = false">
                  <svg> ... </svg>
                </button>
              </div>
              <div class="p-5">
                <div class="text-white dark:text-white-light text-center">
                  <div class="rounded-full w-20 h-20 mx-auto mb-7 overflow-hidden"><img src="/assets/images/profile-16.jpeg" alt="" class="w-full h-full object-cover" /></div>
                  <p class="font-semibold">Click on view to access <br />your profile.</p>
                </div>
                <div class="flex justify-center items-center mt-8 mb-5">
                  <button type="button" class="btn bg-white text-black dark:btn-dark">View</button>
                </div>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- login -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-warning" @click="modal20 = true">Login</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal20" as="template">
    <Dialog as="div" @close="modal20 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="panel border-0 px-4 py-1 rounded-lg overflow-hidden w-full max-w-sm text-black dark:text-white-dark">
              <button type="button" class="absolute top-7 ltr:right-9 rtl:left-9 text-white-dark hover:text-dark outline-none" @click="modal20 = false">
                <svg> ... </svg>
              </button>
              <div class="text-lg font-semibold ltr:pl-5 rtl:pr-5 py-5 ltr:pr-[50px] rtl:pl-[50px]">Login</div>
              <div class="p-5">
                <form>
                  <div class="relative mb-4">
                    <span class="absolute ltr:left-3 rtl:right-3 top-1/2 -translate-y-1/2 dark:text-white-dark">
                      <svg> ... </svg>
                    </span>
                    <input type="email" placeholder="Email" class="form-input ltr:pl-10 rtl:pr-10" />
                  </div>
                  <div class="relative mb-4">
                    <span class="absolute ltr:left-3 rtl:right-3 top-1/2 -translate-y-1/2 dark:text-white-dark">
                      <svg> ... </svg>
                    </span>
                    <input type="password" placeholder="Password" class="form-input ltr:pl-10 rtl:pr-10" />
                  </div>
                  <button type="button" class="btn btn-primary w-full">Login</button>
                </form>
              </div>
              <div class="my-4 text-center text-xs text-white-dark dark:text-white-dark/70">OR</div>
              <div class="flex items-center justify-center gap-3 mb-5">
                <a href="javascript:void(0);" class="btn btn-outline-primary flex gap-1">
                  <svg> ... </svg>
                  <span>Facebook</span>
                </a>
                <a href="javascript:void(0);" class="btn btn-outline-danger flex gap-1">
                  <svg> ... </svg>
                  <span>Github</span>
                </a>
              </div>
              <div class="p-5 border-t border-[#ebe9f1] dark:border-white/10 text-sm">
                <p class="text-center text-white-dark dark:text-white-dark/70">
                  Looking to <a href="javascript:;" class="text-[#515365] hover:underline dark:text-white-dark">create an account?</a>
                </p>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- Register -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-danger" @click="modal21 = true">Register</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal21" as="template">
    <Dialog as="div" @close="modal21 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="panel border-0 px-4 py-1 rounded-lg overflow-hidden w-full max-w-sm text-black dark:text-white-dark">
              <button type="button" class="absolute top-7 ltr:right-9 rtl:left-9 text-white-dark hover:text-dark outline-none" @click="modal21 = false">
                <svg> ... </svg>
              </button>
              <div class="text-lg font-semibold ltr:pl-5 rtl:pr-5 py-5 ltr:pr-[50px] rtl:pl-[50px]">Register</div>
              <div class="p-5">
                <form>
                  <div class="relative mb-4">
                    <span class="absolute ltr:left-3 rtl:right-3 top-1/2 -translate-y-1/2 dark:text-white-dark">
                      <svg> ... </svg>
                    </span>
                    <input type="text" placeholder="Name" class="form-input ltr:pl-10 rtl:pr-10" />
                  </div>
                  <div class="relative mb-4">
                    <span class="absolute ltr:left-3 rtl:right-3 top-1/2 -translate-y-1/2 dark:text-white-dark">
                      <svg> ... </svg>
                    </span>
                    <input type="email" placeholder="Email" class="form-input ltr:pl-10 rtl:pr-10" />
                  </div>
                  <div class="relative mb-4">
                    <span class="absolute ltr:left-3 rtl:right-3 top-1/2 -translate-y-1/2 dark:text-white-dark">
                      <svg> ... </svg>
                    </span>
                    <input type="password" placeholder="Password" class="form-input ltr:pl-10 rtl:pr-10" />
                  </div>
                  <button type="button" class="btn btn-primary w-full">Submit</button>
                </form>
              </div>
              <div class="my-4 text-center text-xs text-white-dark dark:text-white-dark/70">OR</div>
              <div class="flex items-center justify-center gap-3 mb-5">
                <a href="javascript:void(0);" class="btn btn-outline-primary flex gap-1">
                  <svg> ... </svg>
                  <span>Facebook</span>
                </a>
                <a href="javascript:void(0);" class="btn btn-outline-danger flex gap-1">
                  <svg> ... </svg>
                  <span>Github</span>
                </a>
              </div>
              <div class="p-5 border-t border-[#ebe9f1] dark:border-white/10 text-sm">
                <p class="text-center text-white-dark dark:text-white-dark/70">
                  Already have <a href="javascript:;" class="text-[#515365] hover:underline dark:text-white-dark">Login?</a>
                </p>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- slider -->
<div>
  <!-- Trigger -->
  <button type="button" class="btn btn-secondary" @click="modal22 = true">Slider</button>

  <!-- Modal -->
  <TransitionRoot appear :show="modal22" as="template">
    <Dialog as="div" @close="modal22 = false" class="relative z-50">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <DialogOverlay class="fixed inset-0 bg-[black]/60" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-start justify-center px-4 py-8">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-xl text-black dark:text-white-dark">
              <button type="button" class="absolute top-7 ltr:right-5 rtl:left-5 text-white-dark hover:text-dark outline-none" @click="modal22 = false">
                <svg> ... </svg>
              </button>
              <div class="text-lg font-semibold ltr:pl-5 rtl:pr-5 py-5 ltr:pr-[50px] rtl:pl-[50px]">Slider</div>
              <div class="px-5">
                <swiper
                  :modules="[Navigation, Pagination]"
                  :navigation="{ nextEl: '.swiper-button-next-ex1', prevEl: '.swiper-button-prev-ex1' }"
                  :pagination="{ clickable: true }"
                  class="max-w-3xl mx-auto mb-5"
                  id="slider1"
                >
                  <template v-for="(item, i) in 3" :key="i">
                    <swiper-slide>
                      <img :src="\`/assets/images/carousel\${item}.jpeg\`" class="w-full" alt="" />
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
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</div>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import { TransitionRoot, TransitionChild, Dialog, DialogPanel, DialogOverlay, TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
const modal17 = ref(false);
const modal18 = ref(false);
const modal19 = ref(false);
const modal20 = ref(false);
const modal21 = ref(false);
const modal22 = ref(false);
<\/script>
`,-1),Yl=X({__name:"modals",setup(Vl){tt({title:"Modals"});const{codeArr:f,toggleCode:b}=K(),O=et(),y=r(!1),x=r(!1),z=r(!1),w=r(!1),k=r(!1),_=r(!1),C=r(!1),B=r(!1),T=r(!1),D=r(!1),j=r(!1),M=r(!1),$=r(!1),P=r(!1),S=r(!1),L=r(!1),V=r(!1),q=r(!1),I=r(!1),F=r(!1),N=r(!1),A=r(!1);return(Ul,e)=>(p(),Z("div",null,[rt,t("div",nt,[dt,t("div",ut,[t("div",ct,[t("div",pt,[vt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[0]||(e[0]=i=>a(b)("code1"))},ft)]),t("div",bt,[t("div",ht,[t("button",{type:"button",class:"btn btn-primary",onClick:e[1]||(e[1]=i=>y.value=!0)},"Launch modal")]),s(a(c),{appear:"",show:y.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[5]||(e[5]=i=>y.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",gt,[t("div",yt,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[2]||(e[2]=i=>y.value=!1)},wt),kt,t("div",_t,[Ct,t("div",Tt,[t("button",{type:"button",onClick:e[3]||(e[3]=i=>y.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[4]||(e[4]=i=>y.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"},"Save")])])]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])]),a(f).includes("code1")?(p(),v(h,{key:0},{default:l(()=>[Dt]),_:1})):g("",!0)]),t("div",jt,[t("div",Mt,[$t,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[6]||(e[6]=i=>a(b)("code2"))},St)]),t("div",Lt,[t("div",qt,[t("button",{type:"button",class:"btn btn-info",onClick:e[7]||(e[7]=i=>x.value=!0)},"Launch modal")]),s(a(c),{appear:"",show:x.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[11]||(e[11]=i=>x.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",Rt,[t("div",Ot,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[8]||(e[8]=i=>x.value=!1)},Vt),Ut,t("div",Bt,[It,t("div",Ft,[t("button",{type:"button",onClick:e[9]||(e[9]=i=>x.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[10]||(e[10]=i=>x.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"},"Save")])])]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])]),a(f).includes("code2")?(p(),v(h,{key:0},{default:l(()=>[Nt]),_:1})):g("",!0)]),t("div",At,[t("div",Et,[Gt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[12]||(e[12]=i=>a(b)("code3"))},Ht)]),t("div",Yt,[t("div",Qt,[t("button",{type:"button",class:"btn btn-secondary",onClick:e[13]||(e[13]=i=>z.value=!0)},"Static modal")]),s(a(c),{appear:"",show:z.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",Wt,[t("div",Jt,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[14]||(e[14]=i=>z.value=!1)},Xt),te,t("div",ee,[ae,t("div",se,[t("button",{type:"button",onClick:e[15]||(e[15]=i=>z.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[16]||(e[16]=i=>z.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"},"Save")])])]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])]),a(f).includes("code3")?(p(),v(h,{key:0},{default:l(()=>[le]),_:1})):g("",!0)]),t("div",ie,[t("div",oe,[re,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[17]||(e[17]=i=>a(b)("code4"))},de)]),t("div",ue,[t("div",ce,[t("button",{type:"button",class:"btn btn-success",onClick:e[18]||(e[18]=i=>w.value=!0)},"Launch modal")]),s(a(n),{as:"div",open:w.value,onClose:e[22]||(e[22]=i=>w.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"}),t("div",pe,[t("div",ve,[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[19]||(e[19]=i=>w.value=!1)},fe),be,t("div",he,[ge,t("div",ye,[t("button",{type:"button",onClick:e[20]||(e[20]=i=>w.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[21]||(e[21]=i=>w.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"},"Save")])])]),_:1})])])]),_:1},8,["open"])]),a(f).includes("code4")?(p(),v(h,{key:0},{default:l(()=>[xe]),_:1})):g("",!0)]),t("div",we,[t("div",ke,[_e,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[23]||(e[23]=i=>a(b)("code5"))},Te)]),t("div",De,[t("div",je,[t("div",null,[t("button",{type:"button",class:"btn btn-warning",onClick:e[24]||(e[24]=i=>k.value=!0)},"Extra large"),s(a(c),{appear:"",show:k.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[28]||(e[28]=i=>k.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",Me,[t("div",$e,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-5xl text-black dark:text-white-dark"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[25]||(e[25]=i=>k.value=!1)},Se),Le,t("div",qe,[Re,t("div",Oe,[t("button",{type:"button",onClick:e[26]||(e[26]=i=>k.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[27]||(e[27]=i=>k.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"}," Save ")])])]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-danger",onClick:e[29]||(e[29]=i=>_.value=!0)},"Large"),s(a(c),{appear:"",show:_.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[33]||(e[33]=i=>_.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",ze,[t("div",Ve,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-xl text-black dark:text-white-dark"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[30]||(e[30]=i=>_.value=!1)},Be),Ie,t("div",Fe,[Ne,t("div",Ae,[t("button",{type:"button",onClick:e[31]||(e[31]=i=>_.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[32]||(e[32]=i=>_.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"}," Save ")])])]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-secondary",onClick:e[34]||(e[34]=i=>C.value=!0)},"Small"),s(a(c),{appear:"",show:C.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[38]||(e[38]=i=>C.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",Ee,[t("div",Ge,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-sm text-black dark:text-white-dark"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[35]||(e[35]=i=>C.value=!1)},He),Ye,t("div",Qe,[We,t("div",Je,[t("button",{type:"button",onClick:e[36]||(e[36]=i=>C.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[37]||(e[37]=i=>C.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"}," Save ")])])]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])])])]),a(f).includes("code5")?(p(),v(h,{key:0},{default:l(()=>[Ke]),_:1})):g("",!0)]),t("div",Xe,[t("div",ta,[ea,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[39]||(e[39]=i=>a(b)("code6"))},sa)]),t("div",la,[t("div",ia,[t("button",{type:"button",class:"btn btn-primary",onClick:e[40]||(e[40]=i=>B.value=!0)},"Play Youtube")]),s(a(c),{appear:"",show:B.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[42]||(e[42]=i=>B.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",oa,[t("div",ra,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"relative overflow-hidden w-full max-w-3xl py-8"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[41]||(e[41]=i=>B.value=!1)},da),ua]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])]),a(f).includes("code6")?(p(),v(h,{key:0},{default:l(()=>[ca]),_:1})):g("",!0)]),t("div",pa,[t("div",va,[ma,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[43]||(e[43]=i=>a(b)("code7"))},ba)]),t("div",ha,[t("div",ga,[t("div",null,[t("button",{type:"button",class:"btn btn-primary",onClick:e[44]||(e[44]=i=>T.value=!0)},"FadeIn"),s(a(c),{appear:"",show:T.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[48]||(e[48]=i=>T.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",ya,[t("div",xa,[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated animate__fadeIn"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[45]||(e[45]=i=>T.value=!1)},ka),_a,t("div",Ca,[Ta,t("div",Da,[t("button",{type:"button",onClick:e[46]||(e[46]=i=>T.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[47]||(e[47]=i=>T.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"}," Save ")])])]),_:1})])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-info",onClick:e[49]||(e[49]=i=>D.value=!0)},"SlideIn Down"),s(a(c),{appear:"",show:D.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[53]||(e[53]=i=>D.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",ja,[t("div",Ma,[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated animate__slideInDown"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[50]||(e[50]=i=>D.value=!1)},Pa),Sa,t("div",La,[qa,t("div",Ra,[t("button",{type:"button",onClick:e[51]||(e[51]=i=>D.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[52]||(e[52]=i=>D.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"}," Save ")])])]),_:1})])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-success",onClick:e[54]||(e[54]=i=>j.value=!0)},"FadeIn Up"),s(a(c),{appear:"",show:j.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[58]||(e[58]=i=>j.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",Oa,[t("div",za,[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated animate__fadeInUp"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[55]||(e[55]=i=>j.value=!1)},Ua),Ba,t("div",Ia,[Fa,t("div",Na,[t("button",{type:"button",onClick:e[56]||(e[56]=i=>j.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[57]||(e[57]=i=>j.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"}," Save ")])])]),_:1})])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-warning",onClick:e[59]||(e[59]=i=>M.value=!0)},"SlideIn Up"),s(a(c),{appear:"",show:M.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[63]||(e[63]=i=>M.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",Aa,[t("div",Ea,[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated animate__slideInUp"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[60]||(e[60]=i=>M.value=!1)},Za),Ha,t("div",Ya,[Qa,t("div",Wa,[t("button",{type:"button",onClick:e[61]||(e[61]=i=>M.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[62]||(e[62]=i=>M.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"}," Save ")])])]),_:1})])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-danger",onClick:e[64]||(e[64]=i=>$.value=!0)},"FadeIn Left"),s(a(c),{appear:"",show:$.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[68]||(e[68]=i=>$.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",Ja,[t("div",Ka,[s(a(u),{class:R(["panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated",a(O).rtlClass==="rtl"?"animate__fadeInRight":"animate__fadeInLeft"])},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[65]||(e[65]=i=>$.value=!1)},ts),es,t("div",as,[ss,t("div",ls,[t("button",{type:"button",onClick:e[66]||(e[66]=i=>$.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[67]||(e[67]=i=>$.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"}," Save ")])])]),_:1},8,["class"])])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-secondary",onClick:e[69]||(e[69]=i=>P.value=!0)},"RotateIn Left"),s(a(c),{appear:"",show:P.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[73]||(e[73]=i=>P.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",is,[t("div",os,[s(a(u),{class:R(["panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated",a(O).rtlClass==="rtl"?"animate__rotateInDownRight":"animate__rotateInDownLeft"])},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[70]||(e[70]=i=>P.value=!1)},ns),ds,t("div",us,[cs,t("div",ps,[t("button",{type:"button",onClick:e[71]||(e[71]=i=>P.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[72]||(e[72]=i=>P.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"}," Save ")])])]),_:1},8,["class"])])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-dark",onClick:e[74]||(e[74]=i=>S.value=!0)},"FadeIn Right"),s(a(c),{appear:"",show:S.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[78]||(e[78]=i=>S.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",vs,[t("div",ms,[s(a(u),{class:R(["panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated",a(O).rtlClass==="rtl"?"animate__fadeInLeft":"animate__fadeInRight"])},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[75]||(e[75]=i=>S.value=!1)},bs),hs,t("div",gs,[ys,t("div",xs,[t("button",{type:"button",onClick:e[76]||(e[76]=i=>S.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[77]||(e[77]=i=>S.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"}," Save ")])])]),_:1},8,["class"])])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-primary",onClick:e[79]||(e[79]=i=>L.value=!0)},"ZoomIn Up"),s(a(c),{appear:"",show:L.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[83]||(e[83]=i=>L.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",ws,[t("div",ks,[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark animate__animated animate__zoomInUp"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[80]||(e[80]=i=>L.value=!1)},Cs),Ts,t("div",Ds,[js,t("div",Ms,[t("button",{type:"button",onClick:e[81]||(e[81]=i=>L.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[82]||(e[82]=i=>L.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"}," Save ")])])]),_:1})])])]),_:1})]),_:1},8,["show"])])])]),a(f).includes("code7")?(p(),v(h,{key:0},{default:l(()=>[$s]),_:1})):g("",!0)]),t("div",Ps,[t("div",Ss,[Ls,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[84]||(e[84]=i=>a(b)("code8"))},Rs)]),t("div",Os,[zs,t("div",Vs,[t("div",null,[t("button",{type:"button",class:"btn btn-primary",onClick:e[85]||(e[85]=i=>V.value=!0)},"Standard"),s(a(c),{appear:"",show:V.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[88]||(e[88]=i=>V.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",Us,[t("div",Bs,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark"},{default:l(()=>[Is,t("div",Fs,[Ns,t("div",As,[t("button",{type:"button",class:"btn btn-outline-danger",onClick:e[86]||(e[86]=i=>V.value=!1)},"Discard"),t("button",{type:"button",class:"btn btn-primary ltr:ml-4 rtl:mr-4",onClick:e[87]||(e[87]=i=>V.value=!1)}," Save ")])])]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-info",onClick:e[89]||(e[89]=i=>q.value=!0)},"Tabs"),s(a(c),{appear:"",show:q.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[93]||(e[93]=i=>q.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",Es,[t("div",Gs,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark"},{default:l(()=>[t("button",{type:"button",class:"absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[90]||(e[90]=i=>q.value=!1)},Hs),Ys,t("div",Qs,[s(a(lt),{as:"div"},{default:l(()=>[s(a(it),{class:"flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]"},{default:l(()=>[s(a(E),{as:"template"},{default:l(({selected:i})=>[t("a",{href:"javascript:;",class:R(["p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none",{"!border-white-light !border-b-white  text-primary dark:!border-[#191e3a] dark:!border-b-black":i}])},"Home",2)]),_:1}),s(a(E),{as:"template"},{default:l(({selected:i})=>[t("a",{href:"javascript:;",class:R(["p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none",{"!border-white-light !border-b-white text-primary dark:!border-[#191e3a] dark:!border-b-black":i}])},"Profile",2)]),_:1}),s(a(E),{as:"template"},{default:l(({selected:i})=>[t("a",{href:"javascript:;",class:R(["p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none",{"!border-white-light !border-b-white text-primary dark:!border-[#191e3a] dark:!border-b-black":i}])},"Contact",2)]),_:1}),s(a(E),{as:"template",disabled:""},{default:l(()=>[Ws]),_:1})]),_:1}),s(a(ot),{class:"pt-5 flex-1 text-sm"},{default:l(()=>[s(a(G),null,{default:l(()=>[Js,Ks,Xs]),_:1}),s(a(G),null,{default:l(()=>[tl]),_:1}),s(a(G),null,{default:l(()=>[el]),_:1}),s(a(G),null,{default:l(()=>[U("Disabled")]),_:1})]),_:1})]),_:1}),t("div",al,[t("button",{type:"button",onClick:e[91]||(e[91]=i=>q.value=!1),class:"btn btn-outline-danger"},"Discard"),t("button",{type:"button",onClick:e[92]||(e[92]=i=>q.value=!1),class:"btn btn-primary ltr:ml-4 rtl:mr-4"}," Save ")])])]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-success",onClick:e[94]||(e[94]=i=>I.value=!0)},"Profile"),s(a(c),{appear:"",show:I.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[96]||(e[96]=i=>I.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",sl,[t("div",ll,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-[300px] text-black dark:text-white-dark bg-secondary dark:bg-secondary"},{default:l(()=>[t("div",il,[t("button",{type:"button",class:"text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none",onClick:e[95]||(e[95]=i=>I.value=!1)},rl)]),nl]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-warning",onClick:e[97]||(e[97]=i=>F.value=!0)},"Login"),s(a(c),{appear:"",show:F.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[99]||(e[99]=i=>F.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",dl,[t("div",ul,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"panel border-0 px-4 py-1 rounded-lg overflow-hidden w-full max-w-sm text-black dark:text-white-dark"},{default:l(()=>[t("button",{type:"button",class:"absolute top-7 ltr:right-9 rtl:left-9 text-white-dark hover:text-dark outline-none",onClick:e[98]||(e[98]=i=>F.value=!1)},pl),vl,ml,fl,bl,hl]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-danger",onClick:e[100]||(e[100]=i=>N.value=!0)},"Register"),s(a(c),{appear:"",show:N.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[102]||(e[102]=i=>N.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",gl,[t("div",yl,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"panel border-0 px-4 py-1 rounded-lg overflow-hidden w-full max-w-sm text-black dark:text-white-dark"},{default:l(()=>[t("button",{type:"button",class:"absolute top-7 ltr:right-9 rtl:left-9 text-white-dark hover:text-dark outline-none",onClick:e[101]||(e[101]=i=>N.value=!1)},wl),kl,_l,Cl,Tl,Dl]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])]),t("div",null,[t("button",{type:"button",class:"btn btn-secondary",onClick:e[103]||(e[103]=i=>A.value=!0)},"Slider"),s(a(c),{appear:"",show:A.value,as:"template"},{default:l(()=>[s(a(n),{as:"div",onClose:e[105]||(e[105]=i=>A.value=!1),class:"relative z-[51]"},{default:l(()=>[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0","enter-to":"opacity-100",leave:"duration-200 ease-in","leave-from":"opacity-100","leave-to":"opacity-0"},{default:l(()=>[s(a(d),{class:"fixed inset-0 bg-[black]/60"})]),_:1}),t("div",jl,[t("div",Ml,[s(a(o),{as:"template",enter:"duration-300 ease-out","enter-from":"opacity-0 scale-95","enter-to":"opacity-100 scale-100",leave:"duration-200 ease-in","leave-from":"opacity-100 scale-100","leave-to":"opacity-0 scale-95"},{default:l(()=>[s(a(u),{class:"panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-xl text-black dark:text-white-dark"},{default:l(()=>[t("button",{type:"button",class:"absolute top-7 ltr:right-5 rtl:left-5 text-white-dark hover:text-dark outline-none",onClick:e[104]||(e[104]=i=>A.value=!1)},Pl),Sl,t("div",Ll,[(p(),v(a(J),{modules:[a(Q),a(W)],navigation:{nextEl:".swiper-button-next-ex1",prevEl:".swiper-button-prev-ex1"},pagination:{clickable:!0},class:"max-w-3xl mx-auto mb-5",id:"slider1",dir:a(O).rtlClass,key:a(O).rtlClass==="rtl"?"true":"false"},{default:l(()=>[(p(),Z(at,null,st(3,(i,H)=>s(a(Y),{key:H},{default:l(()=>[t("img",{src:`/assets/images/carousel${i}.jpeg`,class:"w-full",alt:""},null,8,ql)]),_:2},1024)),64)),Rl,Ol]),_:1},8,["modules","navigation","dir"]))])]),_:1})]),_:1})])])]),_:1})]),_:1},8,["show"])])])]),a(f).includes("code8")?(p(),v(h,{key:0},{default:l(()=>[zl]),_:1})):g("",!0)])])])]))}});export{Yl as default};
