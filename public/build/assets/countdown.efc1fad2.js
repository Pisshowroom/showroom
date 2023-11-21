import{c as g,_ as p}from"./codePreview.1b9347eb.js";import{d as y,u as D,r as n,l as M,o as i,b as C,e,g as x,t as l,Y as _,w as f,p as b,i as v}from"./main.a20b77c5.js";const j=e("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[e("li",null,[e("a",{href:"javascript:;",class:"text-primary hover:underline"},"Components")]),e("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[e("span",null,"Countdown")])],-1),T={class:"pt-5 grid grid-cols-1 xl:grid-cols-2 gap-6"},L={class:"panel"},I={class:"flex items-center justify-between mb-5"},S=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Simple Countdown",-1),B=v('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Y=[B],F={class:"mb-5 grid grid-cols-4 justify-items-center gap-3"},H={class:"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},N={class:"text-primary sm:text-3xl text-xl text-center"},V=e("h4",{class:"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold"},"Days",-1),$={class:"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},A={class:"text-primary sm:text-3xl text-xl text-center"},E=e("h4",{class:"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold"},"Hours",-1),P={class:"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},q={class:"text-primary sm:text-3xl text-xl text-center"},z=e("h4",{class:"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold"},"Mins",-1),G={class:"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},J={class:"text-primary sm:text-3xl text-xl text-center"},K=e("h4",{class:"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold"},"Sec",-1),O=e("pre",null,`<!-- simple countdown -->
<div class="mb-5 grid grid-cols-4 justify-items-center gap-3">
  <div>
    <div class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col">
      <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo1.days }}</h1>
    </div>
    <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Days</h4>
  </div>
  <div>
    <div class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col">
      <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo1.hours }}</h1>
    </div>
    <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Hours</h4>
  </div>
  <div>
    <div class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col">
      <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo1.minutes }}</h1>
    </div>
    <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Mins</h4>
  </div>
  <div>
    <div class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col">
      <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo1.seconds }}</h1>
    </div>
    <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Sec</h4>
  </div>
</div>

<!-- script -->
<script lang="ts" setup>
import { ref, onMounted } from 'vue';
const timer1: any = ref(null);
const demo1: any = ref({
  days: null,
  hours: null,
  minutes: null,
  seconds: null,
});

onMounted(() => {
  setTimerDemo1();
});

const setTimerDemo1 = () => {
  let date = new Date();
  date.setDate(date.getDate() + 3);
  let countDownDate = date.getTime();

  timer1.value = setInterval(() => {
    let now = new Date().getTime();

    let distance = countDownDate - now;

    demo1.value.days = Math.floor(distance / (1000 * 60 * 60 * 24));
    demo1.value.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    demo1.value.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    demo1.value.seconds = Math.floor((distance % (1000 * 60)) / 1000);

    if (distance < 0) {
      clearInterval(timer1.value);
    }
  }, 500);
};
<\/script>
`,-1),Q={class:"panel"},R={class:"flex items-center justify-between mb-5"},U=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Circle Countdown",-1),W=v('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),X=[W],Z={class:"mb-5 grid grid-cols-4 justify-items-center gap-3"},ee={class:"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},te={class:"text-primary sm:text-3xl text-xl text-center"},se=e("h4",{class:"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold"},"Days",-1),re={class:"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},oe={class:"text-primary sm:text-3xl text-xl text-center"},de=e("h4",{class:"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold"},"Hours",-1),le={class:"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},ae={class:"text-primary sm:text-3xl text-xl text-center"},ne=e("h4",{class:"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold"},"Mins",-1),xe={class:"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},ie={class:"text-primary sm:text-3xl text-xl text-center"},ce=e("h4",{class:"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold"},"Sec",-1),he=e("pre",null,`<!-- circle countdown -->
<div class="mb-5 grid grid-cols-4 justify-items-center gap-3">
  <div>
    <div class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col">
      <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo2.days }}</h1>
    </div>
    <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Days</h4>
  </div>
  <div>
    <div class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col">
      <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo2.hours }}</h1>
    </div>
    <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Hours</h4>
  </div>
  <div>
    <div class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col">
      <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo2.minutes }}</h1>
    </div>
    <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Mins</h4>
  </div>
  <div>
    <div class="w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col">
      <h1 class="text-primary sm:text-3xl text-xl text-center">{{ demo2.seconds }}</h1>
    </div>
    <h4 class="text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold">Sec</h4>
  </div>
</div>
<!-- script -->
<script lang="ts" setup>
import { ref, onMounted } from 'vue';
const timer2: any = ref(null);
const demo2: any = ref({
  days: null,
  hours: null,
  minutes: null,
  seconds: null,
});

onMounted(() => {
  setTimerDemo2();
});

const setTimerDemo2 = () => {
  let date = new Date();
  date.setFullYear(date.getFullYear() + 1);
  let countDownDate = date.getTime();

  timer2.value = setInterval(() => {
    let now = new Date().getTime();

    let distance = countDownDate - now;

    demo2.value.days = Math.floor(distance / (1000 * 60 * 60 * 24));
    demo2.value.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    demo2.value.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    demo2.value.seconds = Math.floor((distance % (1000 * 60)) / 1000);

    if (distance < 0) {
      clearInterval(timer2.value);
    }
  }, 500);
};
<\/script>
`,-1),_e=y({__name:"countdown",setup(me){D({title:"Countdown"});const{codeArr:c,toggleCode:h}=g(),m=n(null),s=n({days:null,hours:null,minutes:null,seconds:null}),u=n(null),r=n({days:null,hours:null,minutes:null,seconds:null});M(()=>{w(),k()});const w=()=>{let o=new Date;o.setDate(o.getDate()+3);let d=o.getTime();m.value=setInterval(()=>{let a=new Date().getTime(),t=d-a;s.value.days=Math.floor(t/(1e3*60*60*24)),s.value.hours=Math.floor(t%(1e3*60*60*24)/(1e3*60*60)),s.value.minutes=Math.floor(t%(1e3*60*60)/(1e3*60)),s.value.seconds=Math.floor(t%(1e3*60)/1e3),t<0&&clearInterval(m.value)},500)},k=()=>{let o=new Date;o.setFullYear(o.getFullYear()+1);let d=o.getTime();u.value=setInterval(()=>{let a=new Date().getTime(),t=d-a;r.value.days=Math.floor(t/(1e3*60*60*24)),r.value.hours=Math.floor(t%(1e3*60*60*24)/(1e3*60*60)),r.value.minutes=Math.floor(t%(1e3*60*60)/(1e3*60)),r.value.seconds=Math.floor(t%(1e3*60)/1e3),t<0&&clearInterval(u.value)},500)};return(o,d)=>(i(),C("div",null,[j,e("div",T,[e("div",L,[e("div",I,[S,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:d[0]||(d[0]=a=>x(h)("code1"))},Y)]),e("div",F,[e("div",null,[e("div",H,[e("h1",N,l(s.value.days),1)]),V]),e("div",null,[e("div",$,[e("h1",A,l(s.value.hours),1)]),E]),e("div",null,[e("div",P,[e("h1",q,l(s.value.minutes),1)]),z]),e("div",null,[e("div",G,[e("h1",J,l(s.value.seconds),1)]),K])]),x(c).includes("code1")?(i(),_(p,{key:0},{default:f(()=>[O]),_:1})):b("",!0)]),e("div",Q,[e("div",R,[U,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:d[1]||(d[1]=a=>x(h)("code2"))},X)]),e("div",Z,[e("div",null,[e("div",ee,[e("h1",te,l(r.value.days),1)]),se]),e("div",null,[e("div",re,[e("h1",oe,l(r.value.hours),1)]),de]),e("div",null,[e("div",le,[e("h1",ae,l(r.value.minutes),1)]),ne]),e("div",null,[e("div",xe,[e("h1",ie,l(r.value.seconds),1)]),ce])]),x(c).includes("code2")?(i(),_(p,{key:0},{default:f(()=>[he]),_:1})):b("",!0)])])]))}});export{_e as default};
