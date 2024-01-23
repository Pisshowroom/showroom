import{c as f,_ as b}from"./codePreview.ce436f36.js";import{y as v,z as k,b as w,B as x,Q as C,o,d as s,e as t,q as p,f as i,G as e,C as l,D as n,a6 as y,M as g,F as d}from"./main.4500d6ff.js";const L=t("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[t("li",null,[t("a",{href:"javascript:;",class:"text-primary hover:underline"},"Elements")]),t("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[t("span",null,"Tooltips")])],-1),M={class:"pt-5 space-y-8"},D=d('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/tippy.vue" target="_blank" class="block hover:underline">https://www.npmjs.com/package/tippy.vue</a></div>',1),j={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},T={class:"panel"},P={class:"flex items-center justify-between mb-5"},B=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Default",-1),O=d('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),S=[O],A={class:"mb-5"},N={class:"flex justify-center w-full gap-4"},V={href:"javascript:;",class:"btn bg-primary btn-primary"},$={type:"button",class:"btn btn-success"},H=t("pre",null,`<!-- link -->
<a href="javascript:;" v-tippy:anchor class="btn bg-primary btn-primary">Link</a>
<tippy target="anchor">Popover using ANCHOR tag</tippy>

<!-- button -->
<button type="button" v-tippy:button class="btn btn-success">Button</button>
<tippy target="button">Popover using BUTTON tag</tippy>
`,-1),I={class:"panel"},W={class:"flex items-center justify-between mb-5"},F=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Placement",-1),E=d('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),R=[E],U={class:"mb-5"},q={class:"flex flex-wrap justify-center gap-4 w-full"},z={type:"button",class:"btn btn-info"},G={type:"button",class:"btn btn-secondary"},Q={type:"button",class:"btn btn-warning"},Z={type:"button",class:"btn btn-danger"},J=t("pre",null,`<!-- top -->
<button type="button" v-tippy:top class="btn btn-info">Tooltip on top</button>
<tippy target="top" placement="top">Popover on top</tippy>

<!-- left -->
<button type="button" v-tippy:left class="btn btn-secondary">Tooltip on left</button>
<tippy target="left" :placement="store.rtlClass === 'rtl' ? 'right' : 'left'">Popover on left </tippy>

<!-- bottom -->
<button type="button" v-tippy:bottom class="btn btn-warning">Tooltip on bottom</button>
<tippy target="bottom" placement="bottom">Popover on bottom</tippy>

<!-- right -->
<button type="button" v-tippy:right class="btn btn-danger">Tooltip on right</button>
<tippy target="right" :placement="store.rtlClass === 'rtl' ? 'left' : 'right'">Popover on right</tippy>

<!-- script -->
<script lang="ts" setup>
  import { useAppStore } from '@/stores/index';
  const store = useAppStore();
<\/script>
`,-1),K={class:"panel lg:row-start-1 lg:col-start-2"},X={class:"flex items-center justify-between mb-5"},Y=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"HTML",-1),tt=d('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),et=[tt],ot={class:"mb-5"},nt={class:"flex justify-center gap-4 w-full"},st={type:"button",class:"btn btn-dark"},rt=t("strong",null,"Bolded content",-1),at=t("pre",null,`<!-- html -->
<button type="button" v-tippy:html class="btn btn-dark">Tooltip on HTML</button>
<tippy target="html"><strong>Bolded content</strong></tippy>
`,-1),it={class:"panel"},lt={class:"flex items-center justify-between mb-5"},pt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Options",-1),ct=d('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),dt=[ct],ut={class:"mb-5"},ht={class:"flex flex-wrap justify-center gap-4 w-full"},bt={type:"button",class:"btn btn-primary"},yt={type:"button",class:"btn btn-secondary"},gt={type:"button",class:"btn btn-info"},_t={type:"button",class:"btn btn-dark"},mt=t("pre",null,`<!-- click -->
<button type="button" v-tippy:click class="btn btn-primary">On Click</button>
<tippy target="click" trigger="click">On click</tippy>

<!-- focus -->
<button type="button" v-tippy:focus class="btn btn-secondary">On Focus</button>
<tippy target="focus" trigger="focus">On focus</tippy>


<!-- delay -->
<button type="button" v-tippy:delay class="btn btn-info">Delay</button>
<tippy target="delay" delay="1000">Delay 1s</tippy>


<!-- disabled animation -->
<button type="button" v-tippy:noanimation class="btn btn-dark">Disabled Animation</button>
<tippy target="noanimation" animation="false">Disable Animation</tippy>
`,-1),ft={class:"panel lg:col-span-2"},vt={class:"flex items-center justify-between mb-5"},kt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Colors",-1),wt=d('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),xt=[wt],Ct={class:"mb-5"},Lt={class:"flex flex-wrap justify-center gap-4 w-full"},Mt={type:"button",class:"btn btn-primary"},Dt={type:"button",class:"btn btn-success"},jt={type:"button",class:"btn btn-info"},Tt={type:"button",class:"btn btn-danger"},Pt={type:"button",class:"btn btn-warning"},Bt={type:"button",class:"btn btn-secondary"},Ot={type:"button",class:"btn btn-dark"},St=t("pre",null,`<!-- primary -->
<button type="button" v-tippy:primary class="btn btn-primary">Primary</button>
<tippy target="primary" :extra="{ theme: 'primary' }">Primary</tippy>

<!-- success -->
<button type="button" v-tippy:success class="btn btn-success">Success</button>
<tippy target="success" :extra="{ theme: 'success' }">Success</tippy>

<!-- info -->
<button type="button" v-tippy:info class="btn btn-info">Info</button>
<tippy target="info" :extra="{ theme: 'info' }">Info</tippy>

<!-- danger -->
<button type="button" v-tippy:danger class="btn btn-danger">Danger</button>
<tippy target="danger" :extra="{ theme: 'danger' }">Danger</tippy>

<!-- warning -->
<button type="button" v-tippy:warning class="btn btn-warning">Warning</button>
<tippy target="warning" :extra="{ theme: 'warning' }">Warning</tippy>

<!-- secondary -->
<button type="button" v-tippy:secondary class="btn btn-secondary">Secondary</button>
<tippy target="secondary" :extra="{ theme: 'secondary' }">Secondary</tippy>

<!-- dark -->
<button type="button" v-tippy:dark class="btn btn-dark">Dark</button>
<tippy target="dark" :extra="{ theme: 'dark' }">Dark</tippy>
`,-1),Ht=v({__name:"tooltips",setup(At){k({title:"Tooltips"});const m=w(),{codeArr:u,toggleCode:h}=f();return(Nt,c)=>{const r=x("tippy"),a=C("tippy");return o(),s("div",null,[L,t("div",M,[D,t("div",j,[t("div",T,[t("div",P,[B,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:c[0]||(c[0]=_=>p(h)("code1"))},S)]),t("div",A,[t("div",N,[i((o(),s("a",V,[e("Link")])),[[a,void 0,"anchor"]]),l(r,{target:"anchor"},{default:n(()=>[e("Popover using ANCHOR tag")]),_:1}),i((o(),s("button",$,[e("Button")])),[[a,void 0,"button"]]),l(r,{target:"button"},{default:n(()=>[e("Popover using BUTTON tag")]),_:1})])]),p(u).includes("code1")?(o(),y(b,{key:0},{default:n(()=>[H]),_:1})):g("",!0)]),t("div",I,[t("div",W,[F,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:c[1]||(c[1]=_=>p(h)("code2"))},R)]),t("div",U,[t("div",q,[i((o(),s("button",z,[e("Tooltip on top")])),[[a,void 0,"top"]]),l(r,{target:"top",placement:"top"},{default:n(()=>[e("Popover on top")]),_:1}),i((o(),s("button",G,[e("Tooltip on left")])),[[a,void 0,"left"]]),l(r,{target:"left",placement:p(m).rtlClass==="rtl"?"right":"left"},{default:n(()=>[e("Popover on left ")]),_:1},8,["placement"]),i((o(),s("button",Q,[e("Tooltip on bottom")])),[[a,void 0,"bottom"]]),l(r,{target:"bottom",placement:"bottom"},{default:n(()=>[e("Popover on bottom")]),_:1}),i((o(),s("button",Z,[e("Tooltip on right")])),[[a,void 0,"right"]]),l(r,{target:"right",placement:p(m).rtlClass==="rtl"?"left":"right"},{default:n(()=>[e("Popover on right")]),_:1},8,["placement"])])]),p(u).includes("code2")?(o(),y(b,{key:0},{default:n(()=>[J]),_:1})):g("",!0)]),t("div",K,[t("div",X,[Y,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:c[2]||(c[2]=_=>p(h)("code3"))},et)]),t("div",ot,[t("div",nt,[i((o(),s("button",st,[e("Tooltip on HTML")])),[[a,void 0,"html"]]),l(r,{target:"html"},{default:n(()=>[rt]),_:1})])]),p(u).includes("code3")?(o(),y(b,{key:0},{default:n(()=>[at]),_:1})):g("",!0)]),t("div",it,[t("div",lt,[pt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:c[3]||(c[3]=_=>p(h)("code4"))},dt)]),t("div",ut,[t("div",ht,[i((o(),s("button",bt,[e("On Click")])),[[a,void 0,"click"]]),l(r,{target:"click",trigger:"click"},{default:n(()=>[e("On click")]),_:1}),i((o(),s("button",yt,[e("On Focus")])),[[a,void 0,"focus"]]),l(r,{target:"focus",trigger:"focus"},{default:n(()=>[e("On focus")]),_:1}),i((o(),s("button",gt,[e("Delay")])),[[a,void 0,"delay"]]),l(r,{target:"delay",delay:"1000"},{default:n(()=>[e("Delay 1s")]),_:1}),i((o(),s("button",_t,[e("Disabled Animation")])),[[a,void 0,"noanimation"]]),l(r,{target:"noanimation",animation:"false"},{default:n(()=>[e("Disable Animation")]),_:1})])]),p(u).includes("code4")?(o(),y(b,{key:0},{default:n(()=>[mt]),_:1})):g("",!0)]),t("div",ft,[t("div",vt,[kt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:c[4]||(c[4]=_=>p(h)("code5"))},xt)]),t("div",Ct,[t("div",Lt,[i((o(),s("button",Mt,[e("Primary")])),[[a,void 0,"primary"]]),l(r,{target:"primary",extra:{theme:"primary"}},{default:n(()=>[e("Primary")]),_:1}),i((o(),s("button",Dt,[e("Success")])),[[a,void 0,"success"]]),l(r,{target:"success",extra:{theme:"success"}},{default:n(()=>[e("Success")]),_:1}),i((o(),s("button",jt,[e("Info")])),[[a,void 0,"info"]]),l(r,{target:"info",extra:{theme:"info"}},{default:n(()=>[e("Info")]),_:1}),i((o(),s("button",Tt,[e("Danger")])),[[a,void 0,"danger"]]),l(r,{target:"danger",extra:{theme:"danger"}},{default:n(()=>[e("Danger")]),_:1}),i((o(),s("button",Pt,[e("Warning")])),[[a,void 0,"warning"]]),l(r,{target:"warning",extra:{theme:"warning"}},{default:n(()=>[e("Warning")]),_:1}),i((o(),s("button",Bt,[e("Secondary")])),[[a,void 0,"secondary"]]),l(r,{target:"secondary",extra:{theme:"secondary"}},{default:n(()=>[e("Secondary")]),_:1}),i((o(),s("button",Ot,[e("Dark")])),[[a,void 0,"dark"]]),l(r,{target:"dark",extra:{theme:"dark"}},{default:n(()=>[e("Dark")]),_:1})])]),p(u).includes("code5")?(o(),y(b,{key:0},{default:n(()=>[St]),_:1})):g("",!0)])])])])}}});export{Ht as default};
