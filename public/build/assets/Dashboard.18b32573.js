import{d as H,a as L,B as P,r,ae as x,af as T,O as C,l as $,o as _,b as B,e,t as h,g as n,f as N,w as M,Y as X,h as V,j as Y,k as E}from"./main.239a2c8c.js";import{g as J}from"./global-components.7ac48ee8.js";const q={class:"grid grid-cols-2 sm:grid-cols-4 gap-6 mb-6"},F={class:"panel py-6 bg-gradient-to-r from-cyan-500 to-cyan-400 text-white"},K=e("div",{class:"flex justify-between"},[e("div",{class:"ltr:mr-1 rtl:ml-1 text-md font-semibold"},"Commerce Balance")],-1),O={class:"flex items-center mt-2"},R={class:"text-3xl font-bold ltr:mr-3 rtl:ml-3"},U={class:"panel py-6 bg-gradient-to-r from-green-500 to-green-400 text-white"},G=e("div",{class:"flex justify-between"},[e("div",{class:"ltr:mr-1 rtl:ml-1 text-md font-semibold"},"Total Pesanan Berhasil")],-1),I={class:"flex items-center mt-2"},Q={class:"text-3xl font-bold ltr:mr-3 rtl:ml-3"},W={class:"panel py-6 bg-gradient-to-r from-yellow-500 to-yellow-400 text-white"},Z=e("div",{class:"flex justify-between"},[e("div",{class:"ltr:mr-1 rtl:ml-1 text-md font-semibold"},"Jumlah Produk")],-1),ee={class:"flex items-center mt-2"},te={class:"text-3xl font-bold ltr:mr-3 rtl:ml-3"},se={class:"panel py-6 bg-gradient-to-r from-purple-500 to-purple-400 text-white"},ae=e("div",{class:"flex justify-between"},[e("div",{class:"ltr:mr-1 rtl:ml-1 text-md font-semibold"},"Jumlah User")],-1),oe={class:"flex items-center mt-2"},le={class:"text-3xl font-bold ltr:mr-3 rtl:ml-3"},ie={class:"grid xl:grid-cols-1 gap-6 mb-6"},re={class:"panel h-full xl:col-span-2"},ne={class:"flex items-center justify-between dark:text-white-light mb-5"},de=e("h5",{class:"font-semibold text-lg"}," Aktivitas Pesanan ",-1),ce={class:"dropdown ltr:ml-auto rtl:mr-auto"},he={type:"button",class:"btn btn-white dropdown-toggle shadow-none"},fe=e("svg",{class:"ml-1",width:"16",height:"16",viewBox:"0 0 12 12",fill:"none",xmlns:"http://www.w3.org/2000/svg"},[e("path",{d:"M9.60235 4.59668L6.24576 7.47376L2.88916 4.59668",stroke:"#0E1726","stroke-width":"0.719271","stroke-linecap":"round","stroke-linejoin":"round"})],-1),me=["onClick"],ue={class:"relative"},pe={key:1,class:"min-h-[325px] grid place-content-center"},ge=e("span",{class:"animate-spin border-2 border-black dark:border-white !border-l-transparent rounded-full w-5 h-5 inline-flex"},null,-1),xe=[ge],_e=e("div",{style:{height:"20vh"}},null,-1),be=H({__name:"Dashboard",setup(ve){var v;const o=L(),f=P("axios");r({});const a=r("Harian");r("Harian");let p=x.users();const S=(v=p==null?void 0:p.educational_institution)==null?void 0:v.type;T({title:"Dashboard"});const d=!!(o.theme==="dark"||o.isDarkMode),c=o.rtlClass==="rtl",m=async t=>{t=="weekly"?a.value="Harian":t=="monthly"?a.value="Mingguan":t=="yearly"&&(a.value="Bulanan"),o.isShowMainLoader=!0,u.value=[],l.xaxis.categories=[];const s=(await f.get(`/admin/activity-orders?type=${t}`)).data;o.isShowMainLoader=!1,u.value=s.series,l.xaxis.categories=s.categories},l=C({chart:{height:325,type:"line",fontFamily:"Nunito, sans-serif",zoom:{enabled:!1},toolbar:{show:!1}},dataLabels:{enabled:!1},stroke:{show:!0,curve:"smooth",width:2,lineCap:"square"},dropShadow:{enabled:!0,opacity:.2,blur:10,left:-7,top:22},grid:{borderColor:d?"#191e3a":"#e0e6ed",strokeDashArray:5,padding:{top:5,bottom:5,left:5,right:5},xaxis:{lines:{show:!0}},yaxis:{lines:{show:!1}}},tooltip:{x:{show:!1},marker:{show:!1},y:{formatter(t){return J.formatThousand(t)}}},colors:d?["#2196f3","#e7515a"]:["#1b55e2","#e7515a"],labels:[],xaxis:{categories:[],axisBorder:{show:!1},axisTicks:{show:!1},crosshairs:{show:!0},labels:{offsetX:c?2:0,offsetY:5,style:{fontSize:"12px",cssClass:"apexcharts-xaxis-title"}}},yaxis:{tickAmount:7,labels:{formatter:t=>t,offsetX:c?-30:-10,offsetY:0,style:{fontSize:"12px",cssClass:"apexcharts-yaxis-title"}},opposite:!!c},legend:{position:"top",horizontalAlign:"right",fontSize:"16px",markers:{width:10,height:10,offsetX:-2},itemMargin:{horizontal:10,vertical:5}}});var i=r({});const u=r([]);C({chart:{height:300,type:"line",toolbar:!1},colors:[],tooltip:{marker:!1,y:{formatter(t){if(t>0)switch(S){case"campus":return t+" Mahasiswa";case"school":return t+" Siswa";case"business_organization":return t+" Karyawan";default:return t}else return t}},theme:d?"dark":"light"},stroke:{width:2,curve:"smooth"},xaxis:{categories:[],axisBorder:{color:d?"#191e3a":"#e0e6ed"}},yaxis:{opposite:!!c,labels:{offsetX:c?-20:0}},grid:{borderColor:d?"#191e3a":"#e0e6ed",strokeDashArray:5,padding:{top:5,bottom:5,left:5,right:5},xaxis:{lines:{show:!0}},yaxis:{lines:{show:!1}}}}),r([]);const A=async()=>{o.isShowMainLoader=!0,(await f.get("/admin/dashboard2")).data,i.value=(await f.get("/admin/dashboard2")).data,console.log(i.value),o.isShowMainLoader=!1},D=async(t="weekly")=>{l.xaxis.categories=[],(t=="weekly"&&a.value!="Harian"||t=="monthly"&&a.value!="Mingguan"||t=="yearly"&&a.value!="Bulanan")&&(t=="weekly"?a.value="Harian":t=="monthly"?a.value="Mingguan":t=="yearly"&&(a.value="Bulanan"));const s=(await f.get("/admin/activity-orders",{params:{type:t}})).data;l.xaxis.categories=s.categories,l.colors=s.colors,u.value=s.series};return $(async()=>{x.isAuthenticated()&&x.getToken()!=!1&&await D(),m("weekly"),await A()}),(t,s)=>{var w,y,b,k;const j=Y("Popper");return _(),B("div",null,[e("div",q,[e("div",F,[K,e("div",O,[e("div",R,h((w=n(i))==null?void 0:w.commerce_balance),1)])]),e("div",U,[G,e("div",I,[e("div",Q,h((y=n(i))==null?void 0:y.completed_orders),1)])]),e("div",W,[Z,e("div",ee,[e("div",te,h((b=n(i))==null?void 0:b.product_count),1)])]),e("div",se,[ae,e("div",oe,[e("div",le,h((k=n(i))==null?void 0:k.user_count),1)])])]),e("div",ie,[e("div",re,[e("div",ne,[de,e("div",ce,[N(j,{placement:n(o).rtlClass==="rtl"?"bottom-start":"bottom-end",offsetDistance:"0",class:"align-middle"},{content:M(({close:z})=>[e("ul",{onClick:g=>z(),class:"whitespace-nowrap"},[e("li",null,[e("button",{onClick:s[0]||(s[0]=g=>m("daily"))},"Harian")]),e("li",null,[e("button",{onClick:s[1]||(s[1]=g=>m("monthly"))},"Mingguan")]),e("li",null,[e("button",{onClick:s[2]||(s[2]=g=>m("yearly"))},"Bulanan")])],8,me)]),default:M(()=>[e("button",he,[E(h(a.value)+" ",1),fe])]),_:1},8,["placement"])])]),e("div",ue,[l.xaxis.categories.length>0?(_(),X(n(V),{key:0,height:"400",options:l,series:u.value,class:"bg-white dark:bg-black rounded-lg overflow-hidden"},null,8,["options","series"])):(_(),B("div",pe,xe))])])]),_e])}}});export{be as default};
