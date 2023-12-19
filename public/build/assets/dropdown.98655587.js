import{c as v,_}from"./codePreview.e48b254d.js";import{d as m,u as g,a as b,o as d,b as k,e as t,g as s,f as n,w as e,Y as w,p as f,i as p,j as x,k as c}from"./main.ef0078b2.js";const j=t("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[t("li",null,[t("a",{href:"javascript:;",class:"text-primary hover:underline"},"Elements")]),t("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[t("span",null,"Dropdowns")])],-1),C={class:"pt-5 space-y-8"},y=p('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/vue3-popper" target="_blank" class="block hover:underline">https://www.npmjs.com/package/vue3-popper</a></div>',1),A={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},S={class:"panel"},L={class:"flex items-center justify-between mb-5"},D=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Basic",-1),B=p('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),M=[B],P={class:"mb-5"},$={class:"flex flex-wrap w-full justify-around gap-7"},V={class:"dropdown"},N=t("button",{type:"button",class:"btn btn-primary dropdown-toggle"},[c(" Action "),t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"},[t("path",{d:"M19 9L12 15L5 9",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),T=["onClick"],R=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),U=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),E=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),G=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),Y=[R,U,E,G],Z={class:"dropdown"},q=t("button",{type:"button",class:"btn btn-outline-primary dropdown-toggle"},[c(" Action "),t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"},[t("path",{d:"M19 9L12 15L5 9",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),z=["onClick"],F=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),H=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),I=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),J=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),K=[F,H,I,J],O=t("pre",null,`<!-- default -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn btn-primary dropdown-toggle">
      Action
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- outline -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn btn-outline-primary dropdown-toggle">
      Action
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- script -->
<script lang="ts" setup>
import { useAppStore } from '@/stores/index';
const store = useAppStore();
<\/script>
`,-1),Q={class:"panel"},W={class:"flex items-center justify-between mb-5"},X=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Dropup",-1),tt=p('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),et=[tt],ot={class:"mb-5"},st={class:"flex flex-wrap w-full justify-around gap-7"},lt={class:"dropdown"},rt=t("button",{type:"button",class:"btn btn-info dropdown-toggle inline-flex"},[c(" Up "),t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block rotate-180"},[t("path",{d:"M19 9L12 15L5 9",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),nt=["onClick"],at=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),it=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),ct=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),dt=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),pt=[at,it,ct,dt],ht={class:"dropdown"},ut=t("button",{type:"button",class:"btn btn-outline-info dropdown-toggle inline-flex"},[c(" Up "),t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block rotate-180"},[t("path",{d:"M19 9L12 15L5 9",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),_t=["onClick"],wt=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),ft=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),vt=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),mt=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),gt=[wt,ft,vt,mt],bt=t("pre",null,`<!-- default -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'top-start' : 'top-end'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn btn-info dropdown-toggle inline-flex">
      Up
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- outline -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'top-start' : 'top-end'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn btn-outline-info dropdown-toggle inline-flex">
      Up
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>


<!-- script -->
<script lang="ts" setup>
import { useAppStore } from '@/stores/index';
const store = useAppStore();
<\/script>
`,-1),kt={class:"panel"},xt={class:"flex items-center justify-between mb-5"},jt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Dropright",-1),Ct=p('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),yt=[Ct],At={class:"mb-5"},St={class:"flex flex-wrap w-full justify-around gap-7"},Lt={class:"dropdown"},Dt=t("button",{type:"button",class:"btn btn-warning dropdown-toggle"},[c(" Right "),t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180 inline-block"},[t("path",{d:"M9 5L15 12L9 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),Bt=["onClick"],Mt=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),Pt=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),$t=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),Vt=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),Nt=[Mt,Pt,$t,Vt],Tt={class:"dropdown"},Rt=t("button",{type:"button",class:"btn btn btn-outline-warning dropdown-toggle"},[c(" Right "),t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180 inline-block"},[t("path",{d:"M9 5L15 12L9 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),Ut=["onClick"],Et=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),Gt=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),Yt=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),Zt=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),qt=[Et,Gt,Yt,Zt],zt=t("pre",null,`<!-- default -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'left-start' : 'right-start'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn btn-info dropdown-toggle">
      Right
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap !my-0 ltr:ml-1 rtl:mr-1">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- outline -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'left-start' : 'right-start'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn btn btn-outline-warning dropdown-toggle">
      Right
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap !my-0 ltr:ml-1 rtl:mr-1">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- script -->
<script lang="ts" setup>
import { useAppStore } from '@/stores/index';
const store = useAppStore();
<\/script>
`,-1),Ft={class:"panel"},Ht={class:"flex items-center justify-between mb-5"},It=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Dropleft",-1),Jt=p('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Kt=[Jt],Ot={class:"mb-5"},Qt={class:"flex flex-wrap w-full justify-around gap-7"},Wt={class:"dropdown"},Xt=t("button",{type:"button",class:"btn btn-danger dropdown-toggle"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:mr-1 rtl:ml-1 ltr:rotate-180 inline-block"},[t("path",{d:"M9 5L15 12L9 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})]),c(" Left ")],-1),te=["onClick"],ee=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),oe=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),se=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),le=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),re=[ee,oe,se,le],ne={class:"dropdown"},ae=t("button",{type:"button",class:"btn btn-outline-danger dropdown-toggle"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:mr-1 rtl:ml-1 ltr:rotate-180 inline-block"},[t("path",{d:"M9 5L15 12L9 19",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})]),c(" Left ")],-1),ie=["onClick"],ce=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),de=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),pe=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),he=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),ue=[ce,de,pe,he],_e=t("pre",null,`<!-- default -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'right-start' : 'left-start'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn btn-danger dropdown-toggle">
      <svg> ... </svg>
      Left
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap !my-0 ltr:mr-1 rtl:ml-1">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- outline -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'right-start' : 'left-start'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn btn-outline-danger dropdown-toggle">
      <svg> ... </svg>
      Left
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap !my-0 ltr:mr-1 rtl:ml-1">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- script -->
<script lang="ts" setup>
import { useAppStore } from '@/stores/index';
const store = useAppStore();
<\/script>
`,-1),we={class:"panel"},fe={class:"flex items-center justify-between mb-5"},ve=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Small Button",-1),me=p('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ge=[me],be={class:"mb-5"},ke={class:"flex flex-wrap w-full justify-around gap-7"},xe={class:"dropdown"},je=t("button",{type:"button",class:"btn btn-dark btn-sm dropdown-toggle"},[c(" Small Button "),t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"},[t("path",{d:"M19 9L12 15L5 9",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),Ce=["onClick"],ye=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),Ae=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),Se=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),Le=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),De=[ye,Ae,Se,Le],Be={class:"dropdown"},Me=t("button",{type:"button",class:"btn btn-outline-dark btn-sm dropdown-toggle"},[c(" Small Button "),t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"},[t("path",{d:"M19 9L12 15L5 9",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),Pe=["onClick"],$e=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),Ve=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),Ne=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),Te=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),Re=[$e,Ve,Ne,Te],Ue=t("pre",null,`<!-- default -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn btn-dark btn-sm dropdown-toggle">
      Small Button
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- outline -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn btn-outline-dark btn-sm dropdown-toggle">
      Small Button
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- script -->
<script lang="ts" setup>
import { useAppStore } from '@/stores/index';
const store = useAppStore();
<\/script>
`,-1),Ee={class:"panel"},Ge={class:"flex items-center justify-between mb-5"},Ye=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Large Button",-1),Ze=p('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),qe=[Ze],ze={class:"mb-5"},Fe={class:"flex flex-wrap w-full justify-around gap-7"},He={class:"dropdown"},Ie=t("button",{type:"button",class:"btn btn-success btn-lg dropdown-toggle"},[c(" Large Button "),t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"},[t("path",{d:"M19 9L12 15L5 9",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),Je=["onClick"],Ke=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),Oe=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),Qe=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),We=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),Xe=[Ke,Oe,Qe,We],to={class:"dropdown"},eo=t("button",{type:"button",class:"btn btn-outline-success btn-lg dropdown-toggle"},[c(" Large Button "),t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"},[t("path",{d:"M19 9L12 15L5 9",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),oo=["onClick"],so=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),lo=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),ro=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),no=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),ao=[so,lo,ro,no],io=t("pre",null,`<!-- default -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn btn-success btn-lg dropdown-toggle">
      Large Button
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- outline -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn btn-outline-success btn-lg dropdown-toggle">
      Large Button
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- script -->
<script lang="ts" setup>
import { useAppStore } from '@/stores/index';
const store = useAppStore();
<\/script>
`,-1),co={class:"panel"},po={class:"flex items-center justify-between mb-5"},ho=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Grouped Dropdown Buttons",-1),uo=p('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),_o=[uo],wo={class:"mb-5"},fo={class:"flex flex-wrap w-full justify-around gap-7"},vo={class:"relative inline-flex align-middle"},mo=t("button",{type:"button",class:"btn btn-secondary ltr:rounded-r-none rtl:rounded-l-none"},"1",-1),go=t("button",{type:"button",class:"btn btn-secondary rounded-none"},"2",-1),bo={class:"dropdown"},ko=t("button",{type:"button",class:"btn dropdown-toggle btn-secondary flex ltr:rounded-l-none rtl:rounded-r-none"},[c(" Dropdown "),t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"},[t("path",{d:"M19 9L12 15L5 9",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),xo=["onClick"],jo=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),Co=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),yo=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),Ao=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),So=[jo,Co,yo,Ao],Lo={class:"relative inline-flex align-middle"},Do=t("button",{type:"button",class:"btn btn-outline-secondary ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none"}," 1 ",-1),Bo=t("button",{type:"button",class:"btn btn-outline-secondary ltr:border-r-0 rtl:border-l-0 rounded-none"},"2",-1),Mo={class:"dropdown"},Po=t("button",{type:"button",class:"btn dropdown-toggle btn-outline-secondary flex ltr:rounded-l-none rtl:rounded-r-none"},[c(" Dropdown "),t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block"},[t("path",{d:"M19 9L12 15L5 9",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})])],-1),$o=["onClick"],Vo=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),No=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),To=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),Ro=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),Uo=[Vo,No,To,Ro],Eo=t("pre",null,`<!-- default -->
<div class="relative inline-flex align-middle">
  <button type="button" class="btn btn-secondary ltr:rounded-r-none rtl:rounded-l-none">1</button>
  <button type="button" class="btn btn-secondary rounded-none">2</button>
  <div class="dropdown">
    <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
      <button type="button" class="btn dropdown-toggle btn-secondary flex ltr:rounded-l-none rtl:rounded-r-none">
        Dropdown
        <svg> ... </svg>
      </button>
      <template #content="{ close }">
        <ul @click="close()" class="whitespace-nowrap">
          <li><a href="javascript:;">Action</a></li>
          <li><a href="javascript:;">Another action</a></li>
          <li><a href="javascript:;">Something else here</a></li>
          <li><a href="javascript:;">Separated link</a></li>
        </ul>
      </template>
    </Popper>
  </div>
</div>

<!-- outline -->
<div class="relative inline-flex align-middle">
  <button type="button" class="btn btn-outline-secondary ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none">1</button>
  <button type="button" class="btn btn-outline-secondary ltr:border-r-0 rtl:border-l-0 rounded-none">2</button>
  <div class="dropdown">
    <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="align-middle">
      <button type="button" class="btn dropdown-toggle btn-outline-secondary flex ltr:rounded-l-none rtl:rounded-r-none">
        Dropdown
        <svg> ... </svg>
      </button>
      <template #content="{ close }">
        <ul @click="close()" class="whitespace-nowrap">
          <li><a href="javascript:;">Action</a></li>
          <li><a href="javascript:;">Another action</a></li>
          <li><a href="javascript:;">Something else here</a></li>
          <li><a href="javascript:;">Separated link</a></li>
        </ul>
      </template>
    </Popper>
  </div>
</div>

<!-- script -->
<script lang="ts" setup>
import { useAppStore } from '@/stores/index';
const store = useAppStore();
<\/script>
`,-1),Go={class:"panel"},Yo={class:"flex items-center justify-between mb-5"},Zo=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Split",-1),qo=p('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),zo=[qo],Fo={class:"mb-5"},Ho={class:"flex flex-wrap w-full justify-around gap-7"},Io={class:"dropdown inline-flex"},Jo=t("button",{type:"button",class:"btn btn-primary ltr:rounded-r-none rtl:rounded-l-none"},"Action",-1),Ko=t("button",{type:"button",class:"btn dropdown-toggle btn-primary h-full ltr:rounded-l-none rtl:rounded-r-none border-l-[#4468fd] before:border-[5px] before:border-l-transparent before:border-r-transparent before:border-t-inherit before:border-b-0 before:inline-block before:border-t-white-light"},[t("span",{class:"sr-only"},"Toggle dropdown")],-1),Oo=["onClick"],Qo=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),Wo=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),Xo=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),ts=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),es=[Qo,Wo,Xo,ts],os={class:"dropdown inline-flex"},ss=t("button",{type:"button",class:"btn btn-outline-primary ltr:rounded-r-none rtl:rounded-l-none"},"Action",-1),ls=t("button",{type:"button",class:"btn btn-outline-primary h-full ltr:rounded-l-none rtl:rounded-r-none dropdown-toggle before:border-[5px] before:border-l-transparent before:border-r-transparent before:border-t-inherit before:border-b-0 before:inline-block hover:before:border-t-white-light"},[t("span",{class:"sr-only"},"Toggle dropdown")],-1),rs=["onClick"],ns=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),as=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),is=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),cs=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),ds=[ns,as,is,cs],ps=t("pre",null,`<!-- default -->
<div class="dropdown inline-flex">
  <button type="button" class="btn btn-primary ltr:rounded-r-none rtl:rounded-l-none">Action</button>
  <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="!flex">
    <button
      type="button"
      class="btn dropdown-toggle btn-primary h-full ltr:rounded-l-none rtl:rounded-r-none border-l-[#4468fd] before:border-[5px] before:border-l-transparent before:border-r-transparent before:border-t-inherit before:border-b-0 before:inline-block before:border-t-white-light"
    >
      <span class="sr-only">Toggle dropdown</span>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- outline -->
<div class="dropdown inline-flex">
  <button type="button" class="btn btn-outline-primary ltr:rounded-r-none rtl:rounded-l-none">Action</button>
  <Popper :placement="store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end'" offsetDistance="0" class="!flex">
    <button
      type="button"
      class="btn btn-outline-primary h-full ltr:rounded-l-none rtl:rounded-r-none dropdown-toggle before:border-[5px] before:border-l-transparent before:border-r-transparent before:border-t-inherit before:border-b-0 before:inline-block hover:before:border-t-white-light"
    >
      <span class="sr-only">Toggle dropdown</span>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- script -->
<script lang="ts" setup>
import { useAppStore } from '@/stores/index';
const store = useAppStore();
<\/script>
`,-1),hs={class:"panel"},us={class:"flex items-center justify-between mb-5"},_s=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Custom Dropdown",-1),ws=p('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),fs=[ws],vs={class:"mb-5"},ms={class:"flex w-full items-center justify-around"},gs={class:"dropdown"},bs=t("button",{type:"button",class:"btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-6 h-6 rotate-90 opacity-70"},[t("circle",{cx:"5",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"}),t("circle",{opacity:"0.5",cx:"12",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"}),t("circle",{cx:"19",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"})])],-1),ks=["onClick"],xs=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),js=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),Cs=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),ys=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),As=[xs,js,Cs,ys],Ss={class:"dropdown"},Ls=t("button",{type:"button",class:"btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-6 h-6 opacity-70"},[t("circle",{cx:"5",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"}),t("circle",{opacity:"0.5",cx:"12",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"}),t("circle",{cx:"19",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"})])],-1),Ds=["onClick"],Bs=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),Ms=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),Ps=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),$s=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),Vs=[Bs,Ms,Ps,$s],Ns={class:"dropdown"},Ts=t("button",{type:"button",class:"btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-6 h-6 rotate-90 opacity-70"},[t("circle",{cx:"5",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"}),t("circle",{opacity:"0.5",cx:"12",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"}),t("circle",{cx:"19",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"})])],-1),Rs=["onClick"],Us=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),Es=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),Gs=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),Ys=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),Zs=[Us,Es,Gs,Ys],qs={class:"dropdown"},zs=t("button",{type:"button",class:"btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary"},[t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-6 h-6 opacity-70"},[t("circle",{cx:"5",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"}),t("circle",{opacity:"0.5",cx:"12",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"}),t("circle",{cx:"19",cy:"12",r:"2",stroke:"currentColor","stroke-width":"1.5"})])],-1),Fs=["onClick"],Hs=t("li",null,[t("a",{href:"javascript:;"},"Action")],-1),Is=t("li",null,[t("a",{href:"javascript:;"},"Another action")],-1),Js=t("li",null,[t("a",{href:"javascript:;"},"Something else here")],-1),Ks=t("li",null,[t("a",{href:"javascript:;"},"Separated link")],-1),Os=[Hs,Is,Js,Ks],Qs=t("pre",null,`<!-- custom -->
<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'top-end' : 'top-start'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary">
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'top-end' : 'top-start'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary">
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'top-start' : 'top-end'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary">
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<div class="dropdown">
  <Popper :placement="store.rtlClass === 'rtl' ? 'top-start' : 'top-end'" offsetDistance="0" class="align-middle">
    <button type="button" class="btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary">
      <svg> ... </svg>
    </button>
    <template #content="{ close }">
      <ul @click="close()" class="whitespace-nowrap">
        <li><a href="javascript:;">Action</a></li>
        <li><a href="javascript:;">Another action</a></li>
        <li><a href="javascript:;">Something else here</a></li>
        <li><a href="javascript:;">Separated link</a></li>
      </ul>
    </template>
  </Popper>
</div>

<!-- script -->
<script lang="ts" setup>
import { useAppStore } from '@/stores/index';
const store = useAppStore();
<\/script>
`,-1),ol=m({__name:"dropdown",setup(Ws){g({title:"Dropdown"});const l=b(),{codeArr:h,toggleCode:u}=v();return(Xs,i)=>{const r=x("Popper");return d(),k("div",null,[j,t("div",C,[y,t("div",A,[t("div",S,[t("div",L,[D,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[0]||(i[0]=o=>s(u)("code1"))},M)]),t("div",P,[t("div",$,[t("div",V,[n(r,{placement:s(l).rtlClass==="rtl"?"bottom-start":"bottom-end",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},Y,8,T)]),default:e(()=>[N]),_:1},8,["placement"])]),t("div",Z,[n(r,{placement:s(l).rtlClass==="rtl"?"bottom-start":"bottom-end",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},K,8,z)]),default:e(()=>[q]),_:1},8,["placement"])])])]),s(h).includes("code1")?(d(),w(_,{key:0},{default:e(()=>[O]),_:1})):f("",!0)]),t("div",Q,[t("div",W,[X,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[1]||(i[1]=o=>s(u)("code2"))},et)]),t("div",ot,[t("div",st,[t("div",lt,[n(r,{placement:s(l).rtlClass==="rtl"?"top-start":"top-end",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},pt,8,nt)]),default:e(()=>[rt]),_:1},8,["placement"])]),t("div",ht,[n(r,{placement:s(l).rtlClass==="rtl"?"top-start":"top-end",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},gt,8,_t)]),default:e(()=>[ut]),_:1},8,["placement"])])])]),s(h).includes("code2")?(d(),w(_,{key:0},{default:e(()=>[bt]),_:1})):f("",!0)]),t("div",kt,[t("div",xt,[jt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[2]||(i[2]=o=>s(u)("code3"))},yt)]),t("div",At,[t("div",St,[t("div",Lt,[n(r,{placement:s(l).rtlClass==="rtl"?"left-start":"right-start",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap !my-0 ltr:ml-1 rtl:mr-1"},Nt,8,Bt)]),default:e(()=>[Dt]),_:1},8,["placement"])]),t("div",Tt,[n(r,{placement:s(l).rtlClass==="rtl"?"left-start":"right-start",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap !my-0 ltr:ml-1 rtl:mr-1"},qt,8,Ut)]),default:e(()=>[Rt]),_:1},8,["placement"])])])]),s(h).includes("code3")?(d(),w(_,{key:0},{default:e(()=>[zt]),_:1})):f("",!0)]),t("div",Ft,[t("div",Ht,[It,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[3]||(i[3]=o=>s(u)("code4"))},Kt)]),t("div",Ot,[t("div",Qt,[t("div",Wt,[n(r,{placement:s(l).rtlClass==="rtl"?"right-start":"left-start",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap !my-0 ltr:mr-1 rtl:ml-1"},re,8,te)]),default:e(()=>[Xt]),_:1},8,["placement"])]),t("div",ne,[n(r,{placement:s(l).rtlClass==="rtl"?"right-start":"left-start",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap !my-0 ltr:mr-1 rtl:ml-1"},ue,8,ie)]),default:e(()=>[ae]),_:1},8,["placement"])])])]),s(h).includes("code4")?(d(),w(_,{key:0},{default:e(()=>[_e]),_:1})):f("",!0)]),t("div",we,[t("div",fe,[ve,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[4]||(i[4]=o=>s(u)("code5"))},ge)]),t("div",be,[t("div",ke,[t("div",xe,[n(r,{placement:s(l).rtlClass==="rtl"?"bottom-start":"bottom-end",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},De,8,Ce)]),default:e(()=>[je]),_:1},8,["placement"])]),t("div",Be,[n(r,{placement:s(l).rtlClass==="rtl"?"bottom-start":"bottom-end",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},Re,8,Pe)]),default:e(()=>[Me]),_:1},8,["placement"])])])]),s(h).includes("code5")?(d(),w(_,{key:0},{default:e(()=>[Ue]),_:1})):f("",!0)]),t("div",Ee,[t("div",Ge,[Ye,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[5]||(i[5]=o=>s(u)("code6"))},qe)]),t("div",ze,[t("div",Fe,[t("div",He,[n(r,{placement:s(l).rtlClass==="rtl"?"bottom-start":"bottom-end",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},Xe,8,Je)]),default:e(()=>[Ie]),_:1},8,["placement"])]),t("div",to,[n(r,{placement:s(l).rtlClass==="rtl"?"bottom-start":"bottom-end",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},ao,8,oo)]),default:e(()=>[eo]),_:1},8,["placement"])])])]),s(h).includes("code6")?(d(),w(_,{key:0},{default:e(()=>[io]),_:1})):f("",!0)]),t("div",co,[t("div",po,[ho,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[6]||(i[6]=o=>s(u)("code7"))},_o)]),t("div",wo,[t("div",fo,[t("div",vo,[mo,go,t("div",bo,[n(r,{placement:s(l).rtlClass==="rtl"?"bottom-start":"bottom-end",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},So,8,xo)]),default:e(()=>[ko]),_:1},8,["placement"])])]),t("div",Lo,[Do,Bo,t("div",Mo,[n(r,{placement:s(l).rtlClass==="rtl"?"bottom-start":"bottom-end",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},Uo,8,$o)]),default:e(()=>[Po]),_:1},8,["placement"])])])])]),s(h).includes("code7")?(d(),w(_,{key:0},{default:e(()=>[Eo]),_:1})):f("",!0)]),t("div",Go,[t("div",Yo,[Zo,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[7]||(i[7]=o=>s(u)("code8"))},zo)]),t("div",Fo,[t("div",Ho,[t("div",Io,[Jo,n(r,{placement:s(l).rtlClass==="rtl"?"bottom-start":"bottom-end",offsetDistance:"0",class:"!flex"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},es,8,Oo)]),default:e(()=>[Ko]),_:1},8,["placement"])]),t("div",os,[ss,n(r,{placement:s(l).rtlClass==="rtl"?"bottom-start":"bottom-end",offsetDistance:"0",class:"!flex"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},ds,8,rs)]),default:e(()=>[ls]),_:1},8,["placement"])])])]),s(h).includes("code8")?(d(),w(_,{key:0},{default:e(()=>[ps]),_:1})):f("",!0)]),t("div",hs,[t("div",us,[_s,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[8]||(i[8]=o=>s(u)("code9"))},fs)]),t("div",vs,[t("div",ms,[t("div",gs,[n(r,{placement:s(l).rtlClass==="rtl"?"top-end":"top-start",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},As,8,ks)]),default:e(()=>[bs]),_:1},8,["placement"])]),t("div",Ss,[n(r,{placement:s(l).rtlClass==="rtl"?"top-end":"top-start",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},Vs,8,Ds)]),default:e(()=>[Ls]),_:1},8,["placement"])]),t("div",Ns,[n(r,{placement:s(l).rtlClass==="rtl"?"top-start":"top-end",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},Zs,8,Rs)]),default:e(()=>[Ts]),_:1},8,["placement"])]),t("div",qs,[n(r,{placement:s(l).rtlClass==="rtl"?"top-start":"top-end",offsetDistance:"0",class:"align-middle"},{content:e(({close:o})=>[t("ul",{onClick:a=>o(),class:"whitespace-nowrap"},Os,8,Fs)]),default:e(()=>[zs]),_:1},8,["placement"])])])]),s(h).includes("code9")?(d(),w(_,{key:0},{default:e(()=>[Qs]),_:1})):f("",!0)])])])])}}});export{ol as default};
