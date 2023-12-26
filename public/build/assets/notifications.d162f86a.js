import{c as g,_ as u}from"./codePreview.019590fd.js";import{d as v,u as C,a as x,o as r,b as y,e as t,g as e,Y as p,w as b,p as m,i as a,S as f}from"./main.98bb6b88.js";const _=t("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[t("li",null,[t("a",{href:"javascript:;",class:"text-primary hover:underline"},"Components")]),t("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[t("span",null,"Notifications")])],-1),B={class:"pt-5 space-y-8"},L=a('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/sweetalert2" target="_blank" class="block hover:underline">https://www.npmjs.com/package/sweetalert2</a></div>',1),M={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},E={class:"panel"},$={class:"flex items-center justify-between mb-5"},j=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Basic",-1),T=a('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),S=[T],D={class:"mb-5"},N={class:"flex items-center justify-center"},A=t("pre",null,`<!-- basic -->
<button type="button" class="btn btn-primary" @click="showMessage('Hello, world! This is a toast message.')">Open Toast</button>

<!-- script -->
<script>
    const showMessage = (msg = 'Example notification text.', position = 'bottom-start', showCloseButton = true, closeButtonHtml = '', duration = 3000) => {
        const toast = Swal.mixin({
            toast: true,
            position: position || 'bottom-start',
            showConfirmButton: false,
            timer: duration,
            showCloseButton: showCloseButton,
        });
        toast.fire({
            title: msg,
        });
    };
<\/script>
`,-1),H={class:"panel lg:row-span-2"},P={class:"flex items-center justify-between mb-5"},V=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Position",-1),I=a('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),R=[I],O={class:"mb-5"},W=t("h6",{class:"font-semibold text-base dark:text-white-light mb-3 text-center"},"Top Position",-1),Y={class:"flex items-center justify-center mb-10 gap-2"},Z=t("h6",{class:"font-semibold text-base dark:text-white-light mb-3 text-center"},"Bottom Position",-1),q={class:"flex items-center justify-center gap-2"},z=t("pre",null,`<!-- top left -->
<button type="button" class="btn btn-success" @click="showMessage('Example notification text.',store.rtlClass === 'rtl' ? 'top-end' : 'top-start')">Top Left</button>

<!-- top center -->
<button type="button" class="btn btn-secondary" @click="showMessage('Example notification text','top')">Top Center</button>

<!-- top right -->
<button type="button" class="btn btn-info" @click="showMessage('Example notification text.', store.rtlClass === 'rtl' ? 'top-start' : 'top-end')">Top Right</button>

<!-- bottom left -->
<button type="button" class="btn btn-dark" @click="showMessage('Example notification text.',store.rtlClass === 'rtl' ? 'bottom-end' : 'bottom-start')">Bottom Left</button>

<!-- bottom center -->
<button type="button" class="btn btn-primary" @click="showMessage('Example notification text.','bottom')">Bottom Center</button>

<!-- bottom right -->
<button type="button" class="btn btn-secondary" @click="showMessage('Example notification text.',store.rtlClass === 'rtl' ? 'bottom-start' : 'bottom-end')">Bottom Right</button>

<!-- script -->
<script>
  import { useAppStore } from '@/stores/index';
  const store = useAppStore();
  const showMessage = (msg = 'Example notification text.', position = 'bottom-start', showCloseButton = true, closeButtonHtml = '', duration = 3000) => {
      const toast = Swal.mixin({
          toast: true,
          position: position || 'bottom-start',
          showConfirmButton: false,
          timer: duration,
          showCloseButton: showCloseButton,
      });
      toast.fire({
          title: msg,
      });
  };
<\/script>
`,-1),F={class:"panel"},G={class:"flex items-center justify-between mb-5"},J=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"No Action",-1),K=a('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Q=[K],U={class:"mb-5"},X={class:"flex items-center justify-center"},tt=t("pre",null,`<!-- no action -->
<button type="button" class="btn btn-success" @click="showMessage('Example notification text.', 'bottom-start',false)">No Action</button>

<!-- script -->
<script>
    const showMessage = (msg = 'Example notification text.', position = 'bottom-start', showCloseButton = true, closeButtonHtml = '', duration = 3000) => {
        const toast = Swal.mixin({
            toast: true,
            position: position || 'bottom-start',
            showConfirmButton: false,
            timer: duration,
            showCloseButton: showCloseButton,
        });
        toast.fire({
            title: msg,
        });
    };
<\/script>
`,-1),ot={class:"panel"},st={class:"flex items-center justify-between mb-5"},et=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Click Callback",-1),nt=a('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),it=[nt],rt={class:"mb-5"},at={class:"flex items-center justify-center"},lt=t("pre",null,`<!-- click callback -->
<button type="button" class="btn btn-info" @click="clickCallable()">Click Callback</button>

<!-- script -->
<script>
    const clickCallable = () => {
        Swal.fire({
            toast: true,
            position: 'bottom-start',
            text: "Custom callback when action button is clicked.",
            showCloseButton: true,
            showConfirmButton: false,
        }).then((result) => {
            Swal.fire({
                toast: true,
                position: 'bottom-start',
                text: 'Thanks for clicking the Dismiss button!',
                showCloseButton: true,
                showConfirmButton: false,
            });
        });
    };
<\/script>
`,-1),ct={class:"panel"},dt={class:"flex items-center justify-between mb-5"},ut=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Duration",-1),pt=a('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),bt=[pt],mt={class:"mb-5"},ht={class:"flex items-center justify-center"},ft=t("pre",null,`<!-- click callback -->
<button type="button" class="btn btn-dark" @click="showMessage(msg='Example notification text.', position= 'bottom-start', duration=5000)">Duration</button>

<!-- script -->
<script>
    const showMessage = (msg = 'Example notification text.', position = 'bottom-start', showCloseButton = true, closeButtonHtml = '', duration = 3000) => {
        const toast = Swal.mixin({
            toast: true,
            position: position || 'bottom-start',
            showConfirmButton: false,
            timer: duration,
            showCloseButton: showCloseButton,
        });
        toast.fire({
            title: msg,
        });
    };
<\/script>
`,-1),wt={class:"panel lg:col-span-2"},kt={class:"flex items-center justify-between mb-5"},gt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Background Color",-1),vt=a('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Ct=[vt],xt={class:"mb-5"},yt={class:"grid grid-cols-2 sm:grid-cols-1 sm:flex items-center justify-center gap-2 colored-toast"},_t=t("div",{id:"primary-toast"},null,-1),Bt=t("div",{id:"secondary-toast"},null,-1),Lt=t("div",{id:"success-toast"},null,-1),Mt=t("div",{id:"danger-toast"},null,-1),Et=t("div",{id:"warning-toast"},null,-1),$t=t("div",{id:"info-toast"},null,-1),jt=t("pre",null,`<!-- primary -->
<div>
    <button type="button" class="btn btn-primary" @click="coloredToast('primary')">Primary</button>
    <div id="primary-toast"></div>
</div>

<!-- secondary -->
<div>
    <button type=" button" class="btn btn-secondary" @click="coloredToast('secondary')">Secondary</button>
    <div id="secondary-toast"></div>
</div>

<!-- success -->
<div>
    <button type="button" class="btn btn-success" @click="coloredToast('success')">Success</button>
    <div id="success-toast"></div>
</div>

<!-- danger -->
<div>
    <button type="button" class="btn btn-danger" @click="coloredToast('danger')">Danger</button>
    <div id="danger-toast"></div>
</div>

<!-- warning -->
<div>
    <button type="button" class="btn btn-warning" @click="coloredToast('warning')">Warning</button>
    <div id="warning-toast"></div>
</div>

<!-- info -->
<div>
    <button type="button" class="btn btn-info" @click="coloredToast('info')">Info</button>
    <div id="info-toast"></div>
</div>

<!-- script -->
<script>
    const coloredToast = (color) => {
        const toast = Swal.mixin({
            toast: true,
            position: 'bottom-start',
            showConfirmButton: false,
            timer: 3000,
            showCloseButton: true,
            customClass: {
                popup: \`color-\${color}\`
            },
            target: document.getElementById(color + '-toast')
        });
        toast.fire({
            title: 'Example notification text.',
        });
    };
<\/script>
`,-1),Ht=v({__name:"notifications",setup(Tt){C({title:"Notification"});const h=x(),{codeArr:l,toggleCode:c}=g(),n=(i="Example notification text.",o="bottom-start",s=!0,St="",k=3e3)=>{f.mixin({toast:!0,position:o||"bottom-start",showConfirmButton:!1,timer:k,showCloseButton:s}).fire({title:i})},w=()=>{f.fire({toast:!0,position:"bottom-start",text:"Custom callback when action button is clicked.",showCloseButton:!0,showConfirmButton:!1}).then(i=>{f.fire({toast:!0,position:"bottom-start",text:"Thanks for clicking the Dismiss button!",showCloseButton:!0,showConfirmButton:!1})})},d=i=>{f.mixin({toast:!0,position:"bottom-start",showConfirmButton:!1,timer:3e3,showCloseButton:!0,customClass:{popup:`color-${i}`},target:document.getElementById(i+"-toast")||"body"}).fire({title:"Example notification text."})};return(i,o)=>(r(),y("div",null,[_,t("div",B,[L,t("div",M,[t("div",E,[t("div",$,[j,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:o[0]||(o[0]=s=>e(c)("code1"))},S)]),t("div",D,[t("div",N,[t("button",{type:"button",class:"btn btn-primary",onClick:o[1]||(o[1]=s=>n("Hello, world! This is a toast message."))},"Open Toast")])]),e(l).includes("code1")?(r(),p(u,{key:0},{default:b(()=>[A]),_:1})):m("",!0)]),t("div",H,[t("div",P,[V,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:o[2]||(o[2]=s=>e(c)("code2"))},R)]),t("div",O,[W,t("div",Y,[t("button",{type:"button",class:"btn btn-success",onClick:o[3]||(o[3]=s=>n("Example notification text.",e(h).rtlClass==="rtl"?"top-end":"top-start"))}," Top Left "),t("button",{type:"button",class:"btn btn-secondary",onClick:o[4]||(o[4]=s=>n("Example notification text","top"))},"Top Center"),t("button",{type:"button",class:"btn btn-info",onClick:o[5]||(o[5]=s=>n("Example notification text.",e(h).rtlClass==="rtl"?"top-start":"top-end"))}," Top Right ")]),Z,t("div",q,[t("button",{type:"button",class:"btn btn-dark",onClick:o[6]||(o[6]=s=>n("Example notification text.",e(h).rtlClass==="rtl"?"bottom-end":"bottom-start"))}," Bottom Left "),t("button",{type:"button",class:"btn btn-primary",onClick:o[7]||(o[7]=s=>n("Example notification text.","bottom"))},"Bottom Center"),t("button",{type:"button",class:"btn btn-secondary",onClick:o[8]||(o[8]=s=>n("Example notification text.",e(h).rtlClass==="rtl"?"bottom-start":"bottom-end"))}," Bottom Right ")])]),e(l).includes("code2")?(r(),p(u,{key:0},{default:b(()=>[z]),_:1})):m("",!0)]),t("div",F,[t("div",G,[J,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:o[9]||(o[9]=s=>e(c)("code3"))},Q)]),t("div",U,[t("div",X,[t("button",{type:"button",class:"btn btn-success",onClick:o[10]||(o[10]=s=>n("Example notification text.","bottom-start",!1))}," No Action ")])]),e(l).includes("code3")?(r(),p(u,{key:0},{default:b(()=>[tt]),_:1})):m("",!0)]),t("div",ot,[t("div",st,[et,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:o[11]||(o[11]=s=>e(c)("code4"))},it)]),t("div",rt,[t("div",at,[t("button",{type:"button",class:"btn btn-info",onClick:o[12]||(o[12]=s=>w())},"Click Callback")])]),e(l).includes("code4")?(r(),p(u,{key:0},{default:b(()=>[lt]),_:1})):m("",!0)]),t("div",ct,[t("div",dt,[ut,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:o[13]||(o[13]=s=>e(c)("code5"))},bt)]),t("div",mt,[t("div",ht,[t("button",{type:"button",class:"btn btn-dark",onClick:o[14]||(o[14]=s=>n(i.msg="Example notification text.",i.position="bottom-start",i.duration=5e3))}," Duration ")])]),e(l).includes("code5")?(r(),p(u,{key:0},{default:b(()=>[ft]),_:1})):m("",!0)]),t("div",wt,[t("div",kt,[gt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:o[15]||(o[15]=s=>e(c)("code6"))},Ct)]),t("div",xt,[t("div",yt,[t("div",null,[t("button",{type:"button",class:"btn btn-primary",onClick:o[16]||(o[16]=s=>d("primary"))},"Primary"),_t]),t("div",null,[t("button",{type:"button",class:"btn btn-secondary",onClick:o[17]||(o[17]=s=>d("secondary"))},"Secondary"),Bt]),t("div",null,[t("button",{type:"button",class:"btn btn-success",onClick:o[18]||(o[18]=s=>d("success"))},"Success"),Lt]),t("div",null,[t("button",{type:"button",class:"btn btn-danger",onClick:o[19]||(o[19]=s=>d("danger"))},"Danger"),Mt]),t("div",null,[t("button",{type:"button",class:"btn btn-warning",onClick:o[20]||(o[20]=s=>d("warning"))},"Warning"),Et]),t("div",null,[t("button",{type:"button",class:"btn btn-info",onClick:o[21]||(o[21]=s=>d("info"))},"Info"),$t])])]),e(l).includes("code6")?(r(),p(u,{key:0},{default:b(()=>[jt]),_:1})):m("",!0)])])])]))}});export{Ht as default};
