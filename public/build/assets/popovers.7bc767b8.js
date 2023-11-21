import{c as _,_ as b}from"./codePreview.1b9347eb.js";import{d as f,u as k,a as w,o,b as r,e as t,g as c,q as a,k as e,f as l,w as s,Y as h,p as y,i as d,j as x,D as C}from"./main.a20b77c5.js";const P=t("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[t("li",null,[t("a",{href:"javascript:;",class:"text-primary hover:underline"},"Elements")]),t("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[t("span",null,"Popovers")])],-1),L={class:"pt-5 space-y-8"},D=d('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/tippy.vue" target="_blank" class="block hover:underline">https://www.npmjs.com/package/tippy.vue</a></div>',1),j={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},M={class:"panel"},B={class:"flex items-center justify-between mb-5"},S=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Default",-1),O=d('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),A=[O],N={class:"mb-5"},V={class:"flex justify-center w-full gap-4"},$={href:"javascript:;",class:"btn bg-primary btn-primary"},T={type:"button",class:"btn btn-success"},H=t("pre",null,`<!-- link -->
<a href="javascript:;" v-tippy:anchor class="btn bg-primary btn-primary">Link</a>
<tippy target="anchor" trigger="click">Popover using ANCHOR tag</tippy>

<!-- button -->
<button type="button" v-tippy:button class="btn btn-success">Button</button>
<tippy target="button" trigger="click">Popover using BUTTON tag</tippy>
`,-1),I={class:"panel"},W={class:"flex items-center justify-between mb-5"},E=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Placement",-1),F=d('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),R=[F],U={class:"mb-5"},q={class:"flex flex-wrap justify-center gap-4 w-full"},Y={type:"button",class:"btn btn-info"},Z={type:"button",class:"btn btn-secondary"},z={type:"button",class:"btn btn-danger"},G={type:"button",class:"btn btn-warning"},J=t("pre",null,`<!-- top -->
<button type="button" v-tippy:top class="btn btn-info">Popover on top</button>
<tippy target="top" trigger="click" placement="top">Popover on top</tippy>

<!-- left -->
<button type="button" v-tippy:left class="btn btn-secondary">Popover on left</button>
<tippy target="left" trigger="click" :placement="store.rtlClass === 'rtl' ? 'right' : 'left'">Popover on left</tippy>

<!-- right -->
<button type="button" v-tippy:right class="btn btn-danger">Popover on right</button>
<tippy target="right" trigger="click" :placement="store.rtlClass === 'rtl' ? 'left' : 'right'">Popover on right</tippy>

<!-- bottom -->
<button type="button" v-tippy:bottom class="btn btn-warning">Popover on bottom</button>
<tippy target="bottom" trigger="click" placement="bottom">Popover on bottom</tippy>

<!-- script -->
<script lang="ts" setup>
import { useAppStore } from '@/stores/index';
const store = useAppStore();
<\/script>
`,-1),K={class:"panel lg:row-start-1 lg:col-start-2"},Q={class:"flex items-center justify-between mb-5"},X=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Dismissible popover",-1),tt=d('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),et=[tt],ot={class:"mb-5"},st={class:"flex justify-center gap-4 w-full"},rt={type:"button","data-dismissable":"true",class:"btn btn-dark"},nt=t("pre",null,`<!-- dismissible -->
<button type="button" v-tippy:dismissible data-dismissable="true" class="btn btn-dark">Popover on left</button>
<tippy target="dismissible" trigger="click" :placement="store.rtlClass === 'rtl' ? 'right' : 'left'">Popover on left</tippy>

<!-- script -->
<script lang="ts" setup>
import { useAppStore } from '@/stores/index';
const store = useAppStore();
<\/script>
`,-1),it={class:"panel"},at={class:"flex items-center justify-between mb-5"},lt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Options",-1),ct=d('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),pt=[ct],dt={class:"mb-5"},gt={class:"flex flex-wrap justify-center gap-4 w-full"},ut={type:"button",class:"btn btn-primary"},bt={type:"button",class:"btn btn-secondary"},ht={type:"button",class:"btn btn-info"},yt={type:"button",class:"btn btn-dark"},mt=t("pre",null,`<!-- hover -->
<button type="button" v-tippy:hover class="btn btn-primary">On Hover</button>
<tippy target="hover" trigger="mouseenter">On hover</tippy>

<!-- focus -->
<button type="button" v-tippy:focus class="btn btn-secondary">On Focus</button>
<tippy target="focus" trigger="focus">On focus</tippy>

<!-- delay -->
<button type="button" v-tippy:delay class="btn btn-info">Delay</button>
<tippy target="delay" delay="1000" trigger="click">Delay 1s</tippy>

<!-- no animation -->
<button type="button" v-tippy:noanimation class="btn btn-dark">Disabled Animation</button>
<tippy target="noanimation" animation="false" trigger="click">Disabled animation</tippy>
`,-1),vt={class:"panel lg:col-span-2"},_t={class:"flex items-center justify-between mb-5"},ft=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Colors",-1),kt=d('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),wt=[kt],xt={class:"mb-5"},Ct={class:"flex flex-wrap justify-center gap-4 w-full"},Pt={type:"button",class:"btn btn-primary"},Lt={type:"button",class:"btn btn-success"},Dt={type:"button",class:"btn btn-info"},jt={type:"button",class:"btn btn-danger"},Mt={type:"button",class:"btn btn-warning"},Bt={type:"button",class:"btn btn-secondary"},St={type:"button",class:"btn btn-dark"},Ot=t("pre",null,`<!-- primary -->
<button type="button" v-tippy:primary class="btn btn-primary">Primary</button>
<tippy target="primary" trigger="click" :extra="{ theme: 'primary' }">Primary</tippy>

<!-- success -->
<button type="button" v-tippy:success class="btn btn-success">Success</button>
<tippy target="success" trigger="click" :extra="{ theme: 'success' }">Success</tippy>

<!-- info -->
<button type="button" v-tippy:info class="btn btn-info">Info</button>
<tippy target="info" trigger="click" :extra="{ theme: 'info' }">Info</tippy>

<!-- danger -->
<button type="button" v-tippy:danger class="btn btn-danger">Danger</button>
<tippy target="danger" trigger="click" :extra="{ theme: 'danger' }">Danger</tippy>

<!-- warning -->
<button type="button" v-tippy:warning class="btn btn-warning">Warning</button>
<tippy target="warning" trigger="click" :extra="{ theme: 'warning' }">Warning</tippy>

<!-- secondary -->
<button type="button" v-tippy:secondary class="btn btn-secondary">Secondary</button>
<tippy target="secondary" trigger="click" :extra="{ theme: 'secondary' }">Secondary</tippy>

<!-- dark -->
<button type="button" v-tippy:dark class="btn btn-dark">Dark</button>
<tippy target="dark" trigger="click" :extra="{ theme: 'dark' }">Dark</tippy>
`,-1),Tt=f({__name:"popovers",setup(At){k({title:"Popovers"});const v=w(),{codeArr:g,toggleCode:u}=_();return(Nt,p)=>{const n=x("tippy"),i=C("tippy");return o(),r("div",null,[P,t("div",L,[D,t("div",j,[t("div",M,[t("div",B,[S,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:p[0]||(p[0]=m=>c(u)("code1"))},A)]),t("div",N,[t("div",V,[a((o(),r("a",$,[e("Link")])),[[i,void 0,"anchor"]]),l(n,{target:"anchor",trigger:"click"},{default:s(()=>[e("Popover using ANCHOR tag")]),_:1}),a((o(),r("button",T,[e("Button")])),[[i,void 0,"button"]]),l(n,{target:"button",trigger:"click"},{default:s(()=>[e("Popover using BUTTON tag")]),_:1})])]),c(g).includes("code1")?(o(),h(b,{key:0},{default:s(()=>[H]),_:1})):y("",!0)]),t("div",I,[t("div",W,[E,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:p[1]||(p[1]=m=>c(u)("code2"))},R)]),t("div",U,[t("div",q,[a((o(),r("button",Y,[e("Popover on top")])),[[i,void 0,"top"]]),l(n,{target:"top",trigger:"click",placement:"top"},{default:s(()=>[e("Popover on top")]),_:1}),a((o(),r("button",Z,[e("Popover on left")])),[[i,void 0,"left"]]),l(n,{target:"left",trigger:"click",placement:c(v).rtlClass==="rtl"?"right":"left"},{default:s(()=>[e("Popover on left")]),_:1},8,["placement"]),a((o(),r("button",z,[e("Popover on right")])),[[i,void 0,"right"]]),l(n,{target:"right",trigger:"click",placement:c(v).rtlClass==="rtl"?"left":"right"},{default:s(()=>[e("Popover on right")]),_:1},8,["placement"]),a((o(),r("button",G,[e("Popover on bottom")])),[[i,void 0,"bottom"]]),l(n,{target:"bottom",trigger:"click",placement:"bottom"},{default:s(()=>[e("Popover on bottom")]),_:1})])]),c(g).includes("code2")?(o(),h(b,{key:0},{default:s(()=>[J]),_:1})):y("",!0)]),t("div",K,[t("div",Q,[X,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:p[2]||(p[2]=m=>c(u)("code3"))},et)]),t("div",ot,[t("div",st,[a((o(),r("button",rt,[e("Popover on left")])),[[i,void 0,"dismissible"]]),l(n,{target:"dismissible",trigger:"click",placement:c(v).rtlClass==="rtl"?"right":"left"},{default:s(()=>[e("Popover on left")]),_:1},8,["placement"])])]),c(g).includes("code3")?(o(),h(b,{key:0},{default:s(()=>[nt]),_:1})):y("",!0)]),t("div",it,[t("div",at,[lt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:p[3]||(p[3]=m=>c(u)("code4"))},pt)]),t("div",dt,[t("div",gt,[a((o(),r("button",ut,[e("On Hover")])),[[i,void 0,"hover"]]),l(n,{target:"hover",trigger:"mouseenter"},{default:s(()=>[e("On hover")]),_:1}),a((o(),r("button",bt,[e("On Focus")])),[[i,void 0,"focus"]]),l(n,{target:"focus",trigger:"focus"},{default:s(()=>[e("On focus")]),_:1}),a((o(),r("button",ht,[e("Delay")])),[[i,void 0,"delay"]]),l(n,{target:"delay",delay:"1000",trigger:"click"},{default:s(()=>[e("Delay 1s")]),_:1}),a((o(),r("button",yt,[e("Disabled Animation")])),[[i,void 0,"noanimation"]]),l(n,{target:"noanimation",animation:"false",trigger:"click"},{default:s(()=>[e("Disabled animation")]),_:1})])]),c(g).includes("code4")?(o(),h(b,{key:0},{default:s(()=>[mt]),_:1})):y("",!0)]),t("div",vt,[t("div",_t,[ft,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:p[4]||(p[4]=m=>c(u)("code5"))},wt)]),t("div",xt,[t("div",Ct,[a((o(),r("button",Pt,[e("Primary")])),[[i,void 0,"primary"]]),l(n,{target:"primary",trigger:"click",extra:{theme:"primary"}},{default:s(()=>[e("Primary")]),_:1}),a((o(),r("button",Lt,[e("Success")])),[[i,void 0,"success"]]),l(n,{target:"success",trigger:"click",extra:{theme:"success"}},{default:s(()=>[e("Success")]),_:1}),a((o(),r("button",Dt,[e("Info")])),[[i,void 0,"info"]]),l(n,{target:"info",trigger:"click",extra:{theme:"info"}},{default:s(()=>[e("Info")]),_:1}),a((o(),r("button",jt,[e("Danger")])),[[i,void 0,"danger"]]),l(n,{target:"danger",trigger:"click",extra:{theme:"danger"}},{default:s(()=>[e("Danger")]),_:1}),a((o(),r("button",Mt,[e("Warning")])),[[i,void 0,"warning"]]),l(n,{target:"warning",trigger:"click",extra:{theme:"warning"}},{default:s(()=>[e("Warning")]),_:1}),a((o(),r("button",Bt,[e("Secondary")])),[[i,void 0,"secondary"]]),l(n,{target:"secondary",trigger:"click",extra:{theme:"secondary"}},{default:s(()=>[e("Secondary")]),_:1}),a((o(),r("button",St,[e("Dark")])),[[i,void 0,"dark"]]),l(n,{target:"dark",trigger:"click",extra:{theme:"dark"}},{default:s(()=>[e("Dark")]),_:1})])]),c(g).includes("code5")?(o(),h(b,{key:0},{default:s(()=>[Ot]),_:1})):y("",!0)])])])])}}});export{Tt as default};
