import{d as C,a as M,B as S,r as s,ae as _,af as D,O as w,l as j,o as z,b as A,e as t,t as d,g as f}from"./main.c541c6fc.js";const R={class:"grid grid-cols-2 sm:grid-cols-4 gap-6 mb-6"},H={class:"panel py-6 bg-gradient-to-r from-cyan-500 to-cyan-400 text-white"},L=t("div",{class:"flex justify-between"},[t("div",{class:"ltr:mr-1 rtl:ml-1 text-md font-semibold"},"Commerce Balance")],-1),T={class:"flex items-center mt-2"},X={class:"text-3xl font-bold ltr:mr-3 rtl:ml-3"},N={class:"panel py-6 bg-gradient-to-r from-green-500 to-green-400 text-white"},F=t("div",{class:"flex justify-between"},[t("div",{class:"ltr:mr-1 rtl:ml-1 text-md font-semibold"},"Total Pesanan Berhasil")],-1),J={class:"flex items-center mt-2"},K={class:"text-3xl font-bold ltr:mr-3 rtl:ml-3"},P={class:"panel py-6 bg-gradient-to-r from-yellow-500 to-yellow-400 text-white"},Y=t("div",{class:"flex justify-between"},[t("div",{class:"ltr:mr-1 rtl:ml-1 text-md font-semibold"},"Jumlah Produk")],-1),q={class:"flex items-center mt-2"},E={class:"text-3xl font-bold ltr:mr-3 rtl:ml-3"},I={class:"panel py-6 bg-gradient-to-r from-purple-500 to-purple-400 text-white"},O=t("div",{class:"flex justify-between"},[t("div",{class:"ltr:mr-1 rtl:ml-1 text-md font-semibold"},"Jumlah User")],-1),U={class:"flex items-center mt-2"},V={class:"text-3xl font-bold ltr:mr-3 rtl:ml-3"},W=t("div",{style:{height:"70vh"}},null,-1),Q=C({__name:"Dashboard",setup($){var x;const i=M(),h=S("axios");s({});const a=s("Harian");s("Harian");let u=_.users();const n=(x=u==null?void 0:u.educational_institution)==null?void 0:x.type;s([{field:"number",title:"Rank",slot:!0,sort:!1},{field:"nameWithRoundedImage2",title:"Nama Lengkap",sort:!1},{field:"faculty",title:n=="campus"?"Fakultas":n=="school"?"Kelas":n=="business_organization"?"Divisi":"",sort:!1},{field:"fasih_user_items_count",title:"Total Murajaah",sort:!1,cellRenderer:e=>`${e.fasih_user_items_count} Ayat`},{field:"validity",title:"Rata-Rata Bintang",sort:!1}]),D({title:"Dashboard"});const l=!!(i.theme==="dark"||i.isDarkMode),r=i.rtlClass==="rtl",m=w({chart:{height:325,type:"line",fontFamily:"Nunito, sans-serif",zoom:{enabled:!1},toolbar:{show:!1}},dataLabels:{enabled:!1},stroke:{show:!0,curve:"smooth",width:2,lineCap:"square"},dropShadow:{enabled:!0,opacity:.2,blur:10,left:-7,top:22},grid:{borderColor:l?"#191e3a":"#e0e6ed",strokeDashArray:5,padding:{top:5,bottom:5,left:5,right:5},xaxis:{lines:{show:!0}},yaxis:{lines:{show:!1}}},tooltip:{x:{show:!1},marker:{show:!1},y:{formatter(e){return e>0?e+" Murajaah":e}}},colors:l?["#2196f3","#e7515a"]:["#1b55e2","#e7515a"],labels:[],xaxis:{categories:[],axisBorder:{show:!1},axisTicks:{show:!1},crosshairs:{show:!0},labels:{offsetX:r?2:0,offsetY:5,style:{fontSize:"12px",cssClass:"apexcharts-xaxis-title"}}},yaxis:{tickAmount:7,labels:{formatter:e=>e,offsetX:r?-30:-10,offsetY:0,style:{fontSize:"12px",cssClass:"apexcharts-yaxis-title"}},opposite:!!r},legend:{position:"top",horizontalAlign:"right",fontSize:"16px",markers:{width:10,height:10,offsetX:-2},itemMargin:{horizontal:10,vertical:5}}});var o=s({});const b=s([]);w({chart:{height:300,type:"line",toolbar:!1},colors:[],tooltip:{marker:!1,y:{formatter(e){if(e>0)switch(n){case"campus":return e+" Mahasiswa";case"school":return e+" Siswa";case"business_organization":return e+" Karyawan";default:return e}else return e}},theme:l?"dark":"light"},stroke:{width:2,curve:"smooth"},xaxis:{categories:[],axisBorder:{color:l?"#191e3a":"#e0e6ed"}},yaxis:{opposite:!!r,labels:{offsetX:r?-20:0}},grid:{borderColor:l?"#191e3a":"#e0e6ed",strokeDashArray:5,padding:{top:5,bottom:5,left:5,right:5},xaxis:{lines:{show:!0}},yaxis:{lines:{show:!1}}}}),s([]);const k=async()=>{i.isShowMainLoader=!0,(await h.get("/admin/dashboard2")).data,o.value=(await h.get("/admin/dashboard2")).data,console.log(o.value),i.isShowMainLoader=!1},B=async(e="weekly")=>{m.xaxis.categories=[],(e=="weekly"&&a.value!="Harian"||e=="monthly"&&a.value!="Mingguan"||e=="yearly"&&a.value!="Bulanan")&&(e=="weekly"?a.value="Harian":e=="monthly"?a.value="Mingguan":e=="yearly"&&(a.value="Bulanan"));const c=(await h.get("/admin/educational-institution/teacher/murajaah/chart1",{params:{type:e}})).data;m.xaxis.categories=c.categories,m.colors=c.colors,b.value=c.series};return j(async()=>{_.isAuthenticated()&&_.getToken()!=!1&&await B(),await k()}),(e,c)=>{var g,p,y,v;return z(),A("div",null,[t("div",R,[t("div",H,[L,t("div",T,[t("div",X,d((g=f(o))==null?void 0:g.commerce_balance),1)])]),t("div",N,[F,t("div",J,[t("div",K,d((p=f(o))==null?void 0:p.completed_orders),1)])]),t("div",P,[Y,t("div",q,[t("div",E,d((y=f(o))==null?void 0:y.product_count),1)])]),t("div",I,[O,t("div",U,[t("div",V,d((v=f(o))==null?void 0:v.user_count),1)])])]),W])}}});export{Q as default};
