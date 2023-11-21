import{c as U,_ as F}from"./codePreview.1b9347eb.js";import{d as D,r as V,I as S,l as B,z as I,o as g,b as O,U as j,e as s,u as R,g as p,f,Y as M,w as A,p as L,i as _,k as $}from"./main.a20b77c5.js";var q=Object.defineProperty,H=Object.defineProperties,Y=Object.getOwnPropertyDescriptors,T=Object.getOwnPropertySymbols,G=Object.prototype.hasOwnProperty,Z=Object.prototype.propertyIsEnumerable,N=(a,e,r)=>e in a?q(a,e,{enumerable:!0,configurable:!0,writable:!0,value:r}):a[e]=r,P=(a,e)=>{for(var r in e||(e={}))G.call(e,r)&&N(a,r,e[r]);if(T)for(var r of T(e))Z.call(e,r)&&N(a,r,e[r]);return a},K=(a,e)=>H(a,Y(e)),k=globalThis&&globalThis.__assign||function(){return(k=Object.assign||function(a){for(var e,r=1,o=arguments.length;r<o;r++)for(var t in e=arguments[r])Object.prototype.hasOwnProperty.call(e,t)&&(a[t]=e[t]);return a}).apply(this,arguments)},z=function(){function a(e,r,o){var t=this;this.endVal=r,this.options=o,this.version="2.1.0",this.defaults={startVal:0,decimalPlaces:0,duration:2,useEasing:!0,useGrouping:!0,smartEasingThreshold:999,smartEasingAmount:333,separator:",",decimal:".",prefix:"",suffix:"",enableScrollSpy:!1,scrollSpyDelay:200},this.finalEndVal=null,this.useEasing=!0,this.countDown=!1,this.error="",this.startVal=0,this.paused=!0,this.count=function(i){t.startTime||(t.startTime=i);var l=i-t.startTime;t.remaining=t.duration-l,t.useEasing?t.countDown?t.frameVal=t.startVal-t.easingFn(l,0,t.startVal-t.endVal,t.duration):t.frameVal=t.easingFn(l,t.startVal,t.endVal-t.startVal,t.duration):t.countDown?t.frameVal=t.startVal-(t.startVal-t.endVal)*(l/t.duration):t.frameVal=t.startVal+(t.endVal-t.startVal)*(l/t.duration),t.countDown?t.frameVal=t.frameVal<t.endVal?t.endVal:t.frameVal:t.frameVal=t.frameVal>t.endVal?t.endVal:t.frameVal,t.frameVal=Number(t.frameVal.toFixed(t.options.decimalPlaces)),t.printValue(t.frameVal),l<t.duration?t.rAF=requestAnimationFrame(t.count):t.finalEndVal!==null?t.update(t.finalEndVal):t.callback&&t.callback()},this.formatNumber=function(i){var l,c,u,h,b=i<0?"-":"";l=Math.abs(i).toFixed(t.options.decimalPlaces);var x=(l+="").split(".");if(c=x[0],u=x.length>1?t.options.decimal+x[1]:"",t.options.useGrouping){h="";for(var m=0,C=c.length;m<C;++m)m!==0&&m%3==0&&(h=t.options.separator+h),h=c[C-m-1]+h;c=h}return t.options.numerals&&t.options.numerals.length&&(c=c.replace(/[0-9]/g,function(n){return t.options.numerals[+n]}),u=u.replace(/[0-9]/g,function(n){return t.options.numerals[+n]})),b+t.options.prefix+c+u+t.options.suffix},this.easeOutExpo=function(i,l,c,u){return c*(1-Math.pow(2,-10*i/u))*1024/1023+l},this.options=k(k({},this.defaults),o),this.formattingFn=this.options.formattingFn?this.options.formattingFn:this.formatNumber,this.easingFn=this.options.easingFn?this.options.easingFn:this.easeOutExpo,this.startVal=this.validateValue(this.options.startVal),this.frameVal=this.startVal,this.endVal=this.validateValue(r),this.options.decimalPlaces=Math.max(this.options.decimalPlaces),this.resetDuration(),this.options.separator=String(this.options.separator),this.useEasing=this.options.useEasing,this.options.separator===""&&(this.options.useGrouping=!1),this.el=typeof e=="string"?document.getElementById(e):e,this.el?this.printValue(this.startVal):this.error="[CountUp] target is null or undefined",window!==void 0&&this.options.enableScrollSpy&&(this.error?console.error(this.error,e):(window.onScrollFns=window.onScrollFns||[],window.onScrollFns.push(function(){return t.handleScroll(t)}),window.onscroll=function(){window.onScrollFns.forEach(function(i){return i()})},this.handleScroll(this)))}return a.prototype.handleScroll=function(e){if(e&&window){var r=window.innerHeight+window.scrollY,o=e.el.offsetTop+e.el.offsetHeight;o<r&&o>window.scrollY&&e.paused?(e.paused=!1,setTimeout(function(){return e.start()},e.options.scrollSpyDelay)):window.scrollY>o&&!e.paused&&e.reset()}},a.prototype.determineDirectionAndSmartEasing=function(){var e=this.finalEndVal?this.finalEndVal:this.endVal;this.countDown=this.startVal>e;var r=e-this.startVal;if(Math.abs(r)>this.options.smartEasingThreshold){this.finalEndVal=e;var o=this.countDown?1:-1;this.endVal=e+o*this.options.smartEasingAmount,this.duration=this.duration/2}else this.endVal=e,this.finalEndVal=null;this.finalEndVal?this.useEasing=!1:this.useEasing=this.options.useEasing},a.prototype.start=function(e){this.error||(this.callback=e,this.duration>0?(this.determineDirectionAndSmartEasing(),this.paused=!1,this.rAF=requestAnimationFrame(this.count)):this.printValue(this.endVal))},a.prototype.pauseResume=function(){this.paused?(this.startTime=null,this.duration=this.remaining,this.startVal=this.frameVal,this.determineDirectionAndSmartEasing(),this.rAF=requestAnimationFrame(this.count)):cancelAnimationFrame(this.rAF),this.paused=!this.paused},a.prototype.reset=function(){cancelAnimationFrame(this.rAF),this.paused=!0,this.resetDuration(),this.startVal=this.validateValue(this.options.startVal),this.frameVal=this.startVal,this.printValue(this.startVal)},a.prototype.update=function(e){cancelAnimationFrame(this.rAF),this.startTime=null,this.endVal=this.validateValue(e),this.endVal!==this.frameVal&&(this.startVal=this.frameVal,this.finalEndVal||this.resetDuration(),this.finalEndVal=null,this.determineDirectionAndSmartEasing(),this.rAF=requestAnimationFrame(this.count))},a.prototype.printValue=function(e){var r=this.formattingFn(e);this.el.tagName==="INPUT"?this.el.value=r:this.el.tagName==="text"||this.el.tagName==="tspan"?this.el.textContent=r:this.el.innerHTML=r},a.prototype.ensureNumber=function(e){return typeof e=="number"&&!isNaN(e)},a.prototype.validateValue=function(e){var r=Number(e);return this.ensureNumber(r)?r:(this.error="[CountUp] invalid start or end value: "+e,null)},a.prototype.resetDuration=function(){this.startTime=null,this.duration=1e3*Number(this.options.duration),this.remaining=this.duration},a}();const W={class:"countup-wrap"},J={name:"CountUp"},w=D(K(P({},J),{props:{endVal:null,startVal:{default:0},duration:{default:2.5},decimalPlaces:{default:0},autoplay:{type:Boolean,default:!0},loop:{type:[Boolean,Number,String],default:!1},delay:{default:0},options:{default:void 0}},emits:["init","finished"],setup(a,{expose:e,emit:r}){const o=a;let t=V(),i=V();const l=()=>{if(!t.value)return;const n=Number(o.startVal),d=Number(o.endVal),v=Number(o.duration);if(i.value=new z(t.value,d,P({startVal:n,duration:v,decimalPlaces:o.decimalPlaces},o.options)),i.value.error){console.error(i.value.error);return}r("init",i.value)},c=n=>{var d;(d=i.value)==null||d.start(n)};S(()=>o.endVal,n=>{var d;o.autoplay&&((d=i.value)==null||d.update(n))});const u=V(!1);let h=0;const b=()=>{h++,c(()=>{typeof o.loop=="boolean"&&o.loop||o.loop>h?m(()=>{var d;(d=i.value)==null||d.reset(),b()},o.delay):u.value=!0})};S(u,n=>{n&&r("finished")}),B(()=>{l(),o.autoplay&&b()}),I(()=>{var n;cancelAnimationFrame(x),(n=i.value)==null||n.reset()});let x;const m=(n,d=1)=>{let v;function y(E){v||(v=E),E-v<d*1e3?x=requestAnimationFrame(y):n()}x=requestAnimationFrame(y)};return e({init:l,restart:()=>{l(),c()}}),(n,d)=>(g(),O("div",W,[j(n.$slots,"prefix"),s("span",{ref_key:"elRef",ref:t},null,512),j(n.$slots,"suffix")]))}})),Q=s("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[s("li",null,[s("a",{href:"javascript:;",class:"text-primary hover:underline"},"Components")]),s("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[s("span",null,"Counter")])],-1),X={class:"pt-5 space-y-8"},tt=_('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/vue-countup-v3" target="_blank" class="block hover:underline">https://www.npmjs.com/package/vue-countup-v3</a></div>',1),et={class:"grid grid-cols-1 xl:grid-cols-2 gap-6"},st={class:"panel"},rt={class:"flex items-center justify-between mb-5"},at=s("h5",{class:"font-semibold text-lg dark:text-white-light"},"Simple Counter",-1),ot=_('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),it=[ot],nt={class:"mb-5 grid grid-cols-3 justify-items-center gap-3 max-w-[900px] mx-auto"},lt={class:"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},dt=s("h4",{class:"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold"},"HOURS",-1),ct={class:"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},pt=s("h4",{class:"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold"},"TICKETS",-1),ut={class:"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},ht=s("h4",{class:"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold"},"CUSTOMERS",-1),xt=s("pre",null,`<!-- hours -->
<div class="mb-5 grid grid-cols-3 justify-items-center gap-3 max-w-[900px] mx-auto">
  <div>
    <div class="w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col">
      <count-up class="text-primary text-xl sm:text-3xl text-center" :startVal="0" :end-val="710" :duration="7"></count-up>
    </div>
    <h4 class="text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold">HOURS</h4>
  </div>
  <div>
    <div class="w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col">
      <count-up class="text-primary text-xl sm:text-3xl text-center" :startVal="0" :end-val="915" :duration="7"></count-up>
    </div>
    <h4 class="text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold">TICKETS</h4>
  </div>
  <div>
    <div class="w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col">
      <count-up class="text-primary text-xl sm:text-3xl text-center" :startVal="0" :end-val="580" :duration="7"></count-up>
    </div>
    <h4 class="text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold">CUSTOMERS</h4>
  </div>
</div>

<!-- script -->
<script lang="ts" setup>
import CountUp from 'vue-countup-v3';
<\/script>
`,-1),mt={class:"panel"},ft={class:"flex items-center justify-between mb-5"},wt=s("h5",{class:"font-semibold text-lg dark:text-white-light"},"With Icon",-1),vt=_('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),_t=[vt],bt={class:"mb-5 grid grid-cols-3 justify-items-center gap-3 max-w-[900px] mx-auto"},gt={class:"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},Ct=_('<h4 class="text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-6 sm:h-6 text-primary mx-auto mb-2"><circle cx="9" cy="6" r="4" stroke="currentColor" stroke-width="1.5"></circle><path opacity="0.5" d="M12.5 4.3411C13.0375 3.53275 13.9565 3 15 3C16.6569 3 18 4.34315 18 6C18 7.65685 16.6569 9 15 9C13.9565 9 13.0375 8.46725 12.5 7.6589" stroke="currentColor" stroke-width="1.5"></path><ellipse cx="9" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5"></ellipse><path opacity="0.5" d="M18 14C19.7542 14.3847 21 15.3589 21 16.5C21 17.5293 19.9863 18.4229 18.5 18.8704" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Clients </h4>',1),Vt={class:"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},kt=s("h4",{class:"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold"},[s("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 sm:w-6 sm:h-6 text-primary mx-auto mb-2"},[s("path",{opacity:"0.5",d:"M6.28571 19C3.91878 19 2 17.1038 2 14.7647C2 12.4256 3.91878 10.5294 6.28571 10.5294C6.56983 10.5294 6.8475 10.5567 7.11616 10.6089M14.381 8.02721C14.9767 7.81911 15.6178 7.70588 16.2857 7.70588C16.9404 7.70588 17.5693 7.81468 18.1551 8.01498M7.11616 10.6089C6.88706 9.9978 6.7619 9.33687 6.7619 8.64706C6.7619 5.52827 9.32028 3 12.4762 3C15.4159 3 17.8371 5.19371 18.1551 8.01498M7.11616 10.6089C7.68059 10.7184 8.20528 10.9374 8.66667 11.2426M18.1551 8.01498C20.393 8.78024 22 10.8811 22 13.3529C22 16.0599 20.0726 18.3221 17.5 18.8722",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"}),s("path",{d:"M12 22V16M12 22L14 20M12 22L10 20",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})]),$(" Downloads ")],-1),yt={class:"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"},Et=_('<h4 class="text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-6 sm:h-6 text-primary mx-auto mb-2"><path opacity="0.5" d="M11.1459 7.02251C11.5259 6.34084 11.7159 6 12 6C12.2841 6 12.4741 6.34084 12.8541 7.02251L12.9524 7.19887C13.0603 7.39258 13.1143 7.48944 13.1985 7.55334C13.2827 7.61725 13.3875 7.64097 13.5972 7.68841L13.7881 7.73161C14.526 7.89857 14.895 7.98205 14.9828 8.26432C15.0706 8.54659 14.819 8.84072 14.316 9.42898L14.1858 9.58117C14.0429 9.74833 13.9714 9.83191 13.9392 9.93531C13.9071 10.0387 13.9179 10.1502 13.9395 10.3733L13.9592 10.5763C14.0352 11.3612 14.0733 11.7536 13.8435 11.9281C13.6136 12.1025 13.2682 11.9435 12.5773 11.6254L12.3986 11.5431C12.2022 11.4527 12.1041 11.4075 12 11.4075C11.8959 11.4075 11.7978 11.4527 11.6014 11.5431L11.4227 11.6254C10.7318 11.9435 10.3864 12.1025 10.1565 11.9281C9.92674 11.7536 9.96476 11.3612 10.0408 10.5763L10.0605 10.3733C10.0821 10.1502 10.0929 10.0387 10.0608 9.93531C10.0286 9.83191 9.95713 9.74833 9.81418 9.58117L9.68403 9.42898C9.18097 8.84072 8.92945 8.54659 9.01723 8.26432C9.10501 7.98205 9.47396 7.89857 10.2119 7.73161L10.4028 7.68841C10.6125 7.64097 10.7173 7.61725 10.8015 7.55334C10.8857 7.48944 10.9397 7.39258 11.0476 7.19887L11.1459 7.02251Z" stroke="currentColor" stroke-width="1.5"></path><path d="M19 9C19 12.866 15.866 16 12 16C8.13401 16 5 12.866 5 9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.35111 15L6.71424 17.323C6.0859 19.6148 5.77173 20.7607 6.19097 21.3881C6.3379 21.6079 6.535 21.7844 6.76372 21.9008C7.41635 22.2331 8.42401 21.7081 10.4393 20.658C11.1099 20.3086 11.4452 20.1339 11.8014 20.0959C11.9335 20.0818 12.0665 20.0818 12.1986 20.0959C12.5548 20.1339 12.8901 20.3086 13.5607 20.658C15.576 21.7081 16.5837 22.2331 17.2363 21.9008C17.465 21.7844 17.6621 21.6079 17.809 21.3881C18.2283 20.7607 17.9141 19.6148 17.2858 17.323L16.6489 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Awards </h4>',1),Ft=s("pre",null,`<!-- clients -->
<div class="mb-5 grid grid-cols-3 justify-items-center gap-3 max-w-[900px] mx-auto">
  <div>
    <div
      class="w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"
    >
      <count-up class="text-primary text-xl sm:text-3xl text-center" :startVal="0" :end-val="105" :duration="7"></count-up>
    </div>
    <h4 class="text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold">
      <svg> ... </svg>
      Clients
    </h4>
  </div>
  <div>
    <div
      class="w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"
    >
      <count-up class="text-primary text-xl sm:text-3xl text-center" :startVal="0" :end-val="300" :duration="7"></count-up>
    </div>
    <h4 class="text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold">
      <svg> ... </svg>
      Downloads
    </h4>
  </div>
  <div>
    <div
      class="w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col"
    >
      <count-up class="text-primary text-xl sm:text-3xl text-center" :startVal="0" :end-val="58" :duration="7"></count-up>
    </div>
    <h4 class="text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold">
      <svg> ... </svg>
      Awards
    </h4>
  </div>
</div>

<!-- script -->
<script lang="ts" setup>
import CountUp from 'vue-countup-v3';
<\/script>
`,-1),At=D({__name:"counter",setup(a){R({title:"Counter"});const{codeArr:e,toggleCode:r}=U();return(o,t)=>(g(),O("div",null,[Q,s("div",X,[tt,s("div",et,[s("div",st,[s("div",rt,[at,s("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[0]||(t[0]=i=>p(r)("code1"))},it)]),s("div",nt,[s("div",null,[s("div",lt,[f(p(w),{class:"text-primary text-xl sm:text-3xl text-center",startVal:0,"end-val":710,duration:7})]),dt]),s("div",null,[s("div",ct,[f(p(w),{class:"text-primary text-xl sm:text-3xl text-center",startVal:0,"end-val":915,duration:7})]),pt]),s("div",null,[s("div",ut,[f(p(w),{class:"text-primary text-xl sm:text-3xl text-center",startVal:0,"end-val":580,duration:7})]),ht])]),p(e).includes("code1")?(g(),M(F,{key:0},{default:A(()=>[xt]),_:1})):L("",!0)]),s("div",mt,[s("div",ft,[wt,s("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[1]||(t[1]=i=>p(r)("code2"))},_t)]),s("div",bt,[s("div",null,[s("div",gt,[f(p(w),{class:"text-primary text-xl sm:text-3xl text-center",startVal:0,"end-val":105,duration:7})]),Ct]),s("div",null,[s("div",Vt,[f(p(w),{class:"text-primary text-xl sm:text-3xl text-center",startVal:0,"end-val":300,duration:7})]),kt]),s("div",null,[s("div",yt,[f(p(w),{class:"text-primary text-xl sm:text-3xl text-center",startVal:0,"end-val":58,duration:7})]),Et])]),p(e).includes("code2")?(g(),M(F,{key:0},{default:A(()=>[Ft]),_:1})):L("",!0)])])])]))}});export{At as default};
