import{d as N,u as A,r as o,o as b,b as x,e,q as m,v as h,f as p,w as i,g as l,i as L,t as r}from"./main.a20b77c5.js";import{x as u}from"./vue3-datatable.76bdce07.js";const C=L('<div class="panel flex items-center overflow-x-auto whitespace-nowrap p-3 text-primary"><div class="rounded-full bg-primary p-1.5 text-white ring-2 ring-primary/30 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/@bhplugin/vue3-datatable" target="_blank" class="block hover:underline"> https://www.npmjs.com/package/@bhplugin/vue3-datatable </a></div>',1),_={class:"panel pb-0 mt-6"},M={class:"flex md:items-center md:flex-row flex-col mb-5 gap-5"},z=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Sticky Header",-1),B={class:"ltr:ml-auto rtl:mr-auto"},S={class:"datatable"},R={class:"panel pb-0 mt-6"},j={class:"flex md:items-center md:flex-row flex-col mb-5 gap-5"},O=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Sticky First Column",-1),P={class:"ltr:ml-auto rtl:mr-auto"},I={class:"datatable"},D=["href"],E={class:"panel pb-0 mt-6"},T={class:"flex md:items-center md:flex-row flex-col mb-5 gap-5"},H=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Sticky Header & First Column",-1),U={class:"ltr:ml-auto rtl:mr-auto"},V={class:"datatable"},F=["href"],W=N({__name:"sticky-header",setup(K){A({title:"Sticky Header"});const n=o(""),d=o(""),c=o(""),f=o([{field:"id",title:"ID",isUnique:!0,filter:!1},{field:"firstName",title:"First Name"},{field:"lastName",title:"Last Name"},{field:"email",title:"Email"},{field:"phone",title:"Phone"}])||[],y=o([{field:"id",title:"ID",isUnique:!0,filter:!1},{field:"firstName",title:"First Name"},{field:"lastName",title:"Last Name"},{field:"email",title:"Email"},{field:"phone",title:"Phone"},{field:"company",title:"Company"},{field:"address.street",title:"Address"},{field:"age",title:"Age",type:"number"},{field:"dob",title:"Birthdate",type:"date"},{field:"isActive",title:"Active",type:"bool"}])||[],k=o([{field:"id",title:"ID",isUnique:!0,filter:!1},{field:"firstName",title:"First Name"},{field:"lastName",title:"Last Name"},{field:"email",title:"Email"},{field:"phone",title:"Phone"},{field:"company",title:"Company"},{field:"address.street",title:"Address"},{field:"age",title:"Age",type:"number"},{field:"dob",title:"Birthdate",type:"date"},{field:"isActive",title:"Active",type:"bool"}])||[],a=o([{id:1,firstName:"Caroline",lastName:"Jensen",email:"carolinejensen@zidant.com",dob:"2004-05-28",address:{street:"529 Scholes Street",city:"Temperanceville",zipcode:5235,geo:{lat:23.806115,lng:164.677197}},phone:"+1 (821) 447-3782",isActive:!0,age:39,company:"POLARAX"},{id:2,firstName:"Celeste",lastName:"Grant",email:"celestegrant@polarax.com",dob:"1989-11-19",address:{street:"639 Kimball Street",city:"Bascom",zipcode:8907,geo:{lat:65.954483,lng:98.906478}},phone:"+1 (838) 515-3408",isActive:!1,age:32,company:"MANGLO"},{id:3,firstName:"Tillman",lastName:"Forbes",email:"tillmanforbes@manglo.com",dob:"2016-09-05",address:{street:"240 Vandalia Avenue",city:"Thynedale",zipcode:8994,geo:{lat:-34.949388,lng:-82.958111}},phone:"+1 (969) 496-2892",isActive:!1,age:26,company:"APPLIDECK"},{id:4,firstName:"Daisy",lastName:"Whitley",email:"daisywhitley@applideck.com",dob:"1987-03-23",address:{street:"350 Pleasant Place",city:"Idledale",zipcode:9369,geo:{lat:-54.458809,lng:-127.476556}},phone:"+1 (861) 564-2877",isActive:!0,age:21,company:"VOLAX"},{id:5,firstName:"Weber",lastName:"Bowman",email:"weberbowman@volax.com",dob:"1983-02-24",address:{street:"154 Conway Street",city:"Broadlands",zipcode:8131,geo:{lat:54.501351,lng:-167.47138}},phone:"+1 (962) 466-3483",isActive:!1,age:26,company:"ORBAXTER"},{id:6,firstName:"Buckley",lastName:"Townsend",email:"buckleytownsend@orbaxter.com",dob:"2011-05-29",address:{street:"131 Guernsey Street",city:"Vallonia",zipcode:6779,geo:{lat:-2.681655,lng:3.528942}},phone:"+1 (884) 595-2643",isActive:!0,age:40,company:"OPPORTECH"},{id:7,firstName:"Latoya",lastName:"Bradshaw",email:"latoyabradshaw@opportech.com",dob:"2010-11-23",address:{street:"668 Lenox Road",city:"Lowgap",zipcode:992,geo:{lat:36.026423,lng:130.412198}},phone:"+1 (906) 474-3155",isActive:!0,age:24,company:"GORGANIC"},{id:8,firstName:"Kate",lastName:"Lindsay",email:"katelindsay@gorganic.com",dob:"1987-07-02",address:{street:"773 Harrison Avenue",city:"Carlton",zipcode:5909,geo:{lat:42.464724,lng:-12.948403}},phone:"+1 (930) 546-2952",isActive:!0,age:24,company:"AVIT"},{id:9,firstName:"Marva",lastName:"Sandoval",email:"marvasandoval@avit.com",dob:"2010-11-02",address:{street:"200 Malta Street",city:"Tuskahoma",zipcode:1292,geo:{lat:-52.206169,lng:74.19452}},phone:"+1 (927) 566-3600",isActive:!1,age:28,company:"QUILCH"},{id:10,firstName:"Decker",lastName:"Russell",email:"deckerrussell@quilch.com",dob:"1994-04-21",address:{street:"708 Bath Avenue",city:"Coultervillle",zipcode:1268,geo:{lat:-41.550295,lng:-146.598075}},phone:"+1 (846) 535-3283",isActive:!1,age:27,company:"MEMORA"},{id:11,firstName:"Odom",lastName:"Mills",email:"odommills@memora.com",dob:"2010-01-24",address:{street:"907 Blake Avenue",city:"Churchill",zipcode:4400,geo:{lat:-56.061694,lng:-130.238523}},phone:"+1 (995) 525-3402",isActive:!0,age:34,company:"ZORROMOP"},{id:12,firstName:"Sellers",lastName:"Walters",email:"sellerswalters@zorromop.com",dob:"1975-11-12",address:{street:"978 Oakland Place",city:"Gloucester",zipcode:3802,geo:{lat:11.732587,lng:96.118099}},phone:"+1 (830) 430-3157",isActive:!0,age:28,company:"ORBOID"},{id:13,firstName:"Wendi",lastName:"Powers",email:"wendipowers@orboid.com",dob:"1979-06-02",address:{street:"376 Greenpoint Avenue",city:"Elliott",zipcode:9149,geo:{lat:-78.159578,lng:-9.835103}},phone:"+1 (863) 457-2088",isActive:!0,age:31,company:"SNORUS"},{id:14,firstName:"Sophie",lastName:"Horn",email:"sophiehorn@snorus.com",dob:"2018-09-20",address:{street:"343 Doughty Street",city:"Homestead",zipcode:330,geo:{lat:65.484087,lng:137.413998}},phone:"+1 (885) 418-3948",isActive:!0,age:22,company:"XTH"},{id:15,firstName:"Levine",lastName:"Rodriquez",email:"levinerodriquez@xth.com",dob:"1973-02-08",address:{street:"643 Allen Avenue",city:"Weedville",zipcode:8931,geo:{lat:-63.185586,lng:117.327808}},phone:"+1 (999) 565-3239",isActive:!0,age:27,company:"COMTRACT"},{id:16,firstName:"Little",lastName:"Hatfield",email:"littlehatfield@comtract.com",dob:"2012-01-03",address:{street:"194 Anthony Street",city:"Williston",zipcode:7456,geo:{lat:47.480837,lng:6.085909}},phone:"+1 (812) 488-3011",isActive:!1,age:33,company:"ZIDANT"},{id:17,firstName:"Larson",lastName:"Kelly",email:"larsonkelly@zidant.com",dob:"2010-06-14",address:{street:"978 Indiana Place",city:"Innsbrook",zipcode:639,geo:{lat:-71.766732,lng:150.854345}},phone:"+1 (892) 484-2162",isActive:!0,age:20,company:"SUREPLEX"},{id:18,firstName:"Kendra",lastName:"Molina",email:"kendramolina@sureplex.com",dob:"2002-07-19",address:{street:"567 Charles Place",city:"Kimmell",zipcode:1966,geo:{lat:50.765816,lng:-117.106499}},phone:"+1 (920) 528-3330",isActive:!1,age:31,company:"DANJA"},{id:19,firstName:"Ebony",lastName:"Livingston",email:"ebonylivingston@danja.com",dob:"1994-10-18",address:{street:"284 Cass Place",city:"Navarre",zipcode:948,geo:{lat:65.271256,lng:-83.064729}},phone:"+1 (970) 591-3039",isActive:!1,age:33,company:"EURON"},{id:20,firstName:"Kaufman",lastName:"Rush",email:"kaufmanrush@euron.com",dob:"2011-07-10",address:{street:"408 Kingsland Avenue",city:"Beaulieu",zipcode:7911,geo:{lat:41.513153,lng:54.821641}},phone:"+1 (924) 463-2934",isActive:!1,age:39,company:"ILLUMITY"},{id:21,firstName:"Frank",lastName:"Hays",email:"frankhays@illumity.com",dob:"2005-06-15",address:{street:"973 Caton Place",city:"Dargan",zipcode:4104,geo:{lat:63.314988,lng:-138.771323}},phone:"+1 (930) 577-2670",isActive:!1,age:31,company:"SYBIXTEX"},{id:22,firstName:"Carmella",lastName:"Mccarty",email:"carmellamccarty@sybixtex.com",dob:"1980-03-06",address:{street:"919 Judge Street",city:"Canby",zipcode:8283,geo:{lat:9.198597,lng:-138.809971}},phone:"+1 (876) 456-3218",isActive:!0,age:21,company:"ZEDALIS"},{id:23,firstName:"Massey",lastName:"Owen",email:"masseyowen@zedalis.com",dob:"2012-03-01",address:{street:"108 Seaview Avenue",city:"Slovan",zipcode:3599,geo:{lat:-74.648318,lng:99.620699}},phone:"+1 (917) 567-3786",isActive:!1,age:40,company:"DYNO"},{id:24,firstName:"Lottie",lastName:"Lowery",email:"lottielowery@dyno.com",dob:"1982-10-10",address:{street:"557 Meserole Avenue",city:"Fowlerville",zipcode:4991,geo:{lat:54.811546,lng:-20.996515}},phone:"+1 (912) 539-3498",isActive:!0,age:36,company:"MULTIFLEX"},{id:25,firstName:"Addie",lastName:"Luna",email:"addieluna@multiflex.com",dob:"1988-05-01",address:{street:"688 Bulwer Place",city:"Harmon",zipcode:7664,geo:{lat:-12.762766,lng:-39.924497}},phone:"+1 (962) 537-2981",isActive:!0,age:32,company:"PHARMACON"}]);return(X,s)=>{var w,g,v;return b(),x("div",null,[C,e("div",_,[e("div",M,[z,e("div",B,[m(e("input",{"onUpdate:modelValue":s[0]||(s[0]=t=>n.value=t),type:"text",class:"form-input w-auto",placeholder:"Search..."},null,512),[[h,n.value]])])]),e("div",S,[p(l(u),{rows:a.value,columns:l(f),totalRows:(w=a.value)==null?void 0:w.length,sortable:!0,search:n.value,pageSize:20,hasCheckbox:!0,stickyHeader:!0,firstArrow:'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',lastArrow:'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg> ',previousArrow:'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',nextArrow:'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>'},{id:i(t=>[e("strong",null,"#"+r(t.value.id),1)]),_:1},8,["rows","columns","totalRows","search"])])]),e("div",R,[e("div",j,[O,e("div",P,[m(e("input",{"onUpdate:modelValue":s[1]||(s[1]=t=>d.value=t),type:"text",class:"form-input w-auto",placeholder:"Search..."},null,512),[[h,d.value]])])]),e("div",I,[p(l(u),{rows:a.value,columns:l(y),totalRows:(g=a.value)==null?void 0:g.length,sortable:!0,search:d.value,hasCheckbox:!0,stickyFirstColumn:!0,class:"whitespace-nowrap",firstArrow:'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',lastArrow:'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg> ',previousArrow:'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',nextArrow:'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>'},{id:i(t=>[e("strong",null,"#"+r(t.value.id),1)]),email:i(t=>[e("a",{href:`mailto:${t.value.email}`,class:"text-primary hover:underline"},r(t.value.email),9,D)]),_:1},8,["rows","columns","totalRows","search"])])]),e("div",E,[e("div",T,[H,e("div",U,[m(e("input",{"onUpdate:modelValue":s[2]||(s[2]=t=>c.value=t),type:"text",class:"form-input w-auto",placeholder:"Search..."},null,512),[[h,c.value]])])]),e("div",V,[p(l(u),{rows:a.value,columns:l(k),totalRows:(v=a.value)==null?void 0:v.length,sortable:!0,search:c.value,pageSize:20,hasCheckbox:!0,stickyFirstColumn:!0,stickyHeader:!0,class:"whitespace-nowrap",firstArrow:'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',lastArrow:'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg> ',previousArrow:'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',nextArrow:'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>'},{id:i(t=>[e("strong",null,"#"+r(t.value.id),1)]),email:i(t=>[e("a",{href:`mailto:${t.value.email}`,class:"text-primary hover:underline"},r(t.value.email),9,F)]),_:1},8,["rows","columns","totalRows","search"])])])])}}});export{W as default};
