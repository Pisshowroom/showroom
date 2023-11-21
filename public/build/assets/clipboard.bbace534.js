import{G as st,H as it,d as at,u as lt,r as F,o as S,b as ct,e as t,g as M,q as U,v as Y,k as x,Y as O,w as P,p as j,i as H,S as ut}from"./main.a20b77c5.js";import{c as dt,_ as N}from"./codePreview.1b9347eb.js";var z={exports:{}};/*!
 * clipboard.js v2.0.11
 * https://clipboardjs.com/
 *
 * Licensed MIT © Zeno Rocha
 */(function(T,L){(function(g,v){T.exports=v()})(st,function(){return function(){var _={686:function(f,s,e){e.d(s,{default:function(){return nt}});var c=e(279),a=e.n(c),o=e(370),d=e.n(o),m=e(817),y=e.n(m);function h(u){try{return document.execCommand(u)}catch{return!1}}var w=function(n){var r=y()(n);return h("cut"),r},C=w;function k(u){var n=document.documentElement.getAttribute("dir")==="rtl",r=document.createElement("textarea");r.style.fontSize="12pt",r.style.border="0",r.style.padding="0",r.style.margin="0",r.style.position="absolute",r.style[n?"right":"left"]="-9999px";var i=window.pageYOffset||document.documentElement.scrollTop;return r.style.top="".concat(i,"px"),r.setAttribute("readonly",""),r.value=u,r}var I=function(n,r){var i=k(n);r.container.appendChild(i);var l=y()(i);return h("copy"),i.remove(),l},G=function(n){var r=arguments.length>1&&arguments[1]!==void 0?arguments[1]:{container:document.body},i="";return typeof n=="string"?i=I(n,r):n instanceof HTMLInputElement&&!["text","search","url","tel","password"].includes(n==null?void 0:n.type)?i=I(n.value,r):(i=y()(n),h("copy")),i},R=G;function V(u){return typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?V=function(r){return typeof r}:V=function(r){return r&&typeof Symbol=="function"&&r.constructor===Symbol&&r!==Symbol.prototype?"symbol":typeof r},V(u)}var X=function(){var n=arguments.length>0&&arguments[0]!==void 0?arguments[0]:{},r=n.action,i=r===void 0?"copy":r,l=n.container,p=n.target,b=n.text;if(i!=="copy"&&i!=="cut")throw new Error('Invalid "action" value, use either "copy" or "cut"');if(p!==void 0)if(p&&V(p)==="object"&&p.nodeType===1){if(i==="copy"&&p.hasAttribute("disabled"))throw new Error('Invalid "target" attribute. Please use "readonly" instead of "disabled" attribute');if(i==="cut"&&(p.hasAttribute("readonly")||p.hasAttribute("disabled")))throw new Error(`Invalid "target" attribute. You can't cut text from elements with "readonly" or "disabled" attributes`)}else throw new Error('Invalid "target" value, use a valid Element');if(b)return R(b,{container:l});if(p)return i==="cut"?C(p):R(p,{container:l})},q=X;function E(u){return typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?E=function(r){return typeof r}:E=function(r){return r&&typeof Symbol=="function"&&r.constructor===Symbol&&r!==Symbol.prototype?"symbol":typeof r},E(u)}function J(u,n){if(!(u instanceof n))throw new TypeError("Cannot call a class as a function")}function D(u,n){for(var r=0;r<n.length;r++){var i=n[r];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(u,i.key,i)}}function K(u,n,r){return n&&D(u.prototype,n),r&&D(u,r),u}function Q(u,n){if(typeof n!="function"&&n!==null)throw new TypeError("Super expression must either be null or a function");u.prototype=Object.create(n&&n.prototype,{constructor:{value:u,writable:!0,configurable:!0}}),n&&Z(u,n)}function Z(u,n){return Z=Object.setPrototypeOf||function(i,l){return i.__proto__=l,i},Z(u,n)}function W(u){var n=ot();return function(){var i=A(u),l;if(n){var p=A(this).constructor;l=Reflect.construct(i,arguments,p)}else l=i.apply(this,arguments);return tt(this,l)}}function tt(u,n){return n&&(E(n)==="object"||typeof n=="function")?n:et(u)}function et(u){if(u===void 0)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return u}function ot(){if(typeof Reflect>"u"||!Reflect.construct||Reflect.construct.sham)return!1;if(typeof Proxy=="function")return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],function(){})),!0}catch{return!1}}function A(u){return A=Object.setPrototypeOf?Object.getPrototypeOf:function(r){return r.__proto__||Object.getPrototypeOf(r)},A(u)}function $(u,n){var r="data-clipboard-".concat(u);if(!!n.hasAttribute(r))return n.getAttribute(r)}var rt=function(u){Q(r,u);var n=W(r);function r(i,l){var p;return J(this,r),p=n.call(this),p.resolveOptions(l),p.listenClick(i),p}return K(r,[{key:"resolveOptions",value:function(){var l=arguments.length>0&&arguments[0]!==void 0?arguments[0]:{};this.action=typeof l.action=="function"?l.action:this.defaultAction,this.target=typeof l.target=="function"?l.target:this.defaultTarget,this.text=typeof l.text=="function"?l.text:this.defaultText,this.container=E(l.container)==="object"?l.container:document.body}},{key:"listenClick",value:function(l){var p=this;this.listener=d()(l,"click",function(b){return p.onClick(b)})}},{key:"onClick",value:function(l){var p=l.delegateTarget||l.currentTarget,b=this.action(p)||"copy",B=q({action:b,container:this.container,target:this.target(p),text:this.text(p)});this.emit(B?"success":"error",{action:b,text:B,trigger:p,clearSelection:function(){p&&p.focus(),window.getSelection().removeAllRanges()}})}},{key:"defaultAction",value:function(l){return $("action",l)}},{key:"defaultTarget",value:function(l){var p=$("target",l);if(p)return document.querySelector(p)}},{key:"defaultText",value:function(l){return $("text",l)}},{key:"destroy",value:function(){this.listener.destroy()}}],[{key:"copy",value:function(l){var p=arguments.length>1&&arguments[1]!==void 0?arguments[1]:{container:document.body};return R(l,p)}},{key:"cut",value:function(l){return C(l)}},{key:"isSupported",value:function(){var l=arguments.length>0&&arguments[0]!==void 0?arguments[0]:["copy","cut"],p=typeof l=="string"?[l]:l,b=!!document.queryCommandSupported;return p.forEach(function(B){b=b&&!!document.queryCommandSupported(B)}),b}}]),r}(a()),nt=rt},828:function(f){var s=9;if(typeof Element<"u"&&!Element.prototype.matches){var e=Element.prototype;e.matches=e.matchesSelector||e.mozMatchesSelector||e.msMatchesSelector||e.oMatchesSelector||e.webkitMatchesSelector}function c(a,o){for(;a&&a.nodeType!==s;){if(typeof a.matches=="function"&&a.matches(o))return a;a=a.parentNode}}f.exports=c},438:function(f,s,e){var c=e(828);function a(m,y,h,w,C){var k=d.apply(this,arguments);return m.addEventListener(h,k,C),{destroy:function(){m.removeEventListener(h,k,C)}}}function o(m,y,h,w,C){return typeof m.addEventListener=="function"?a.apply(null,arguments):typeof h=="function"?a.bind(null,document).apply(null,arguments):(typeof m=="string"&&(m=document.querySelectorAll(m)),Array.prototype.map.call(m,function(k){return a(k,y,h,w,C)}))}function d(m,y,h,w){return function(C){C.delegateTarget=c(C.target,y),C.delegateTarget&&w.call(m,C)}}f.exports=o},879:function(f,s){s.node=function(e){return e!==void 0&&e instanceof HTMLElement&&e.nodeType===1},s.nodeList=function(e){var c=Object.prototype.toString.call(e);return e!==void 0&&(c==="[object NodeList]"||c==="[object HTMLCollection]")&&"length"in e&&(e.length===0||s.node(e[0]))},s.string=function(e){return typeof e=="string"||e instanceof String},s.fn=function(e){var c=Object.prototype.toString.call(e);return c==="[object Function]"}},370:function(f,s,e){var c=e(879),a=e(438);function o(h,w,C){if(!h&&!w&&!C)throw new Error("Missing required arguments");if(!c.string(w))throw new TypeError("Second argument must be a String");if(!c.fn(C))throw new TypeError("Third argument must be a Function");if(c.node(h))return d(h,w,C);if(c.nodeList(h))return m(h,w,C);if(c.string(h))return y(h,w,C);throw new TypeError("First argument must be a String, HTMLElement, HTMLCollection, or NodeList")}function d(h,w,C){return h.addEventListener(w,C),{destroy:function(){h.removeEventListener(w,C)}}}function m(h,w,C){return Array.prototype.forEach.call(h,function(k){k.addEventListener(w,C)}),{destroy:function(){Array.prototype.forEach.call(h,function(k){k.removeEventListener(w,C)})}}}function y(h,w,C){return a(document.body,h,w,C)}f.exports=o},817:function(f){function s(e){var c;if(e.nodeName==="SELECT")e.focus(),c=e.value;else if(e.nodeName==="INPUT"||e.nodeName==="TEXTAREA"){var a=e.hasAttribute("readonly");a||e.setAttribute("readonly",""),e.select(),e.setSelectionRange(0,e.value.length),a||e.removeAttribute("readonly"),c=e.value}else{e.hasAttribute("contenteditable")&&e.focus();var o=window.getSelection(),d=document.createRange();d.selectNodeContents(e),o.removeAllRanges(),o.addRange(d),c=o.toString()}return c}f.exports=s},279:function(f){function s(){}s.prototype={on:function(e,c,a){var o=this.e||(this.e={});return(o[e]||(o[e]=[])).push({fn:c,ctx:a}),this},once:function(e,c,a){var o=this;function d(){o.off(e,d),c.apply(a,arguments)}return d._=c,this.on(e,d,a)},emit:function(e){var c=[].slice.call(arguments,1),a=((this.e||(this.e={}))[e]||[]).slice(),o=0,d=a.length;for(o;o<d;o++)a[o].fn.apply(a[o].ctx,c);return this},off:function(e,c){var a=this.e||(this.e={}),o=a[e],d=[];if(o&&c)for(var m=0,y=o.length;m<y;m++)o[m].fn!==c&&o[m].fn._!==c&&d.push(o[m]);return d.length?a[e]=d:delete a[e],this}},f.exports=s,f.exports.TinyEmitter=s}},g={};function v(f){if(g[f])return g[f].exports;var s=g[f]={exports:{}};return _[f](s,s.exports,v),s.exports}return function(){v.n=function(f){var s=f&&f.__esModule?function(){return f.default}:function(){return f};return v.d(s,{a:s}),s}}(),function(){v.d=function(f,s){for(var e in s)v.o(s,e)&&!v.o(f,e)&&Object.defineProperty(f,e,{enumerable:!0,get:s[e]})}}(),function(){v.o=function(f,s){return Object.prototype.hasOwnProperty.call(f,s)}}(),v(686)}().default})})(z);const pt=it(z.exports),ft=T=>{const L=(T==null?void 0:T.appendToBody)===void 0?!0:T.appendToBody;return{toClipboard(_,g){return new Promise((v,f)=>{const s=document.createElement("button"),e=new pt(s,{text:()=>_,action:()=>"copy",container:g!==void 0?g:document.body});e.on("success",c=>{e.destroy(),v(c)}),e.on("error",c=>{e.destroy(),f(c)}),L&&document.body.appendChild(s),s.click(),L&&document.body.removeChild(s)})}}},ht=t("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[t("li",null,[t("a",{href:"javascript:;",class:"text-primary hover:underline"},"Forms")]),t("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[t("span",null,"Clipboard")])],-1),Ct={class:"pt-5 space-y-8"},mt=H('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/vue-clipboard3" target="_blank" class="block hover:underline">https://www.npmjs.com/package/vue-clipboard3</a></div>',1),wt={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},vt={class:"panel"},gt={class:"flex items-center justify-between mb-5"},yt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Copy from input",-1),bt=H('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),kt=[bt],xt={class:"mb-5"},_t={class:"bg-[#f1f2f3] p-5 rounded dark:bg-[#060818]"},Lt={class:"flex flex-wrap gap-2 mt-5"},Mt=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[t("path",{d:"M6 11C6 8.17157 6 6.75736 6.87868 5.87868C7.75736 5 9.17157 5 12 5H15C17.8284 5 19.2426 5 20.1213 5.87868C21 6.75736 21 8.17157 21 11V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H12C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V11Z",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M6 19C4.34315 19 3 17.6569 3 16V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H15C16.6569 2 18 3.34315 18 5",stroke:"currentColor","stroke-width":"1.5"})],-1),Tt=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4.5 h-4.5 ltr:mr-2 rtl:ml-2"},[t("path",{d:"M15.2869 3.15178L14.3601 4.07866L5.83882 12.5999L5.83881 12.5999C5.26166 13.1771 4.97308 13.4656 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.32181 19.8021L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L4.19792 21.6782L7.47918 20.5844L7.47919 20.5844C8.25353 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5344 19.0269 10.8229 18.7383 11.4001 18.1612L11.4001 18.1612L19.9213 9.63993L20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178Z",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M14.36 4.07812C14.36 4.07812 14.4759 6.04774 16.2138 7.78564C17.9517 9.52354 19.9213 9.6394 19.9213 9.6394M4.19789 21.6777L2.32178 19.8015",stroke:"currentColor","stroke-width":"1.5"})],-1),Et=t("pre",null,`<!-- copy from input -->
<form>
  <input type="text" class="form-input" v-model="message1" id="message1" />
  <div class="flex flex-wrap gap-2 mt-5">
    <button type="button" class="btn btn-primary" @click="copy(message1)">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
        <path
          d="M6 11C6 8.17157 6 6.75736 6.87868 5.87868C7.75736 5 9.17157 5 12 5H15C17.8284 5 19.2426 5 20.1213 5.87868C21 6.75736 21 8.17157 21 11V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H12C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V11Z"
          stroke="currentColor"
          stroke-width="1.5"
        />
        <path
          opacity="0.5"
          d="M6 19C4.34315 19 3 17.6569 3 16V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H15C16.6569 2 18 3.34315 18 5"
          stroke="currentColor"
          stroke-width="1.5"
        />
      </svg>
      Copy from Input
    </button>
    <button type="button" class="btn btn-dark" @click="cut(message1)" @blur="message1 = ''">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 ltr:mr-2 rtl:ml-2">
        <path
          d="M15.2869 3.15178L14.3601 4.07866L5.83882 12.5999L5.83881 12.5999C5.26166 13.1771 4.97308 13.4656 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.32181 19.8021L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L4.19792 21.6782L7.47918 20.5844L7.47919 20.5844C8.25353 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5344 19.0269 10.8229 18.7383 11.4001 18.1612L11.4001 18.1612L19.9213 9.63993L20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178Z"
          stroke="currentColor"
          stroke-width="1.5"
        />
        <path
          opacity="0.5"
          d="M14.36 4.07812C14.36 4.07812 14.4759 6.04774 16.2138 7.78564C17.9517 9.52354 19.9213 9.6394 19.9213 9.6394M4.19789 21.6777L2.32178 19.8015"
          stroke="currentColor"
          stroke-width="1.5"
        />
      </svg>
      Cut from Input
    </button>
  </div>
</form>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import useClipboard from 'vue-clipboard3';

const { toClipboard } = useClipboard();
const copy = async (msg) => {
  if (msg) {
    await toClipboard(msg);
    showMessage('Copied successfully.');
  }
};

const cut = async (msg) => {
  if (msg) {
    await toClipboard(msg);
    showMessage('Cut successfully.');
  }
};
<\/script>
`,-1),St={class:"panel"},Ht={class:"flex items-center justify-between mb-5"},Vt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Copy form Textarea",-1),At=H('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Bt=[At],Ot={class:"mb-5"},Pt={class:"bg-[#f1f2f3] p-5 rounded dark:bg-[#060818]"},jt={class:"flex flex-wrap gap-2 mt-5"},Nt=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[t("path",{d:"M6 11C6 8.17157 6 6.75736 6.87868 5.87868C7.75736 5 9.17157 5 12 5H15C17.8284 5 19.2426 5 20.1213 5.87868C21 6.75736 21 8.17157 21 11V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H12C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V11Z",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M6 19C4.34315 19 3 17.6569 3 16V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H15C16.6569 2 18 3.34315 18 5",stroke:"currentColor","stroke-width":"1.5"})],-1),Rt=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-4.5 h-4.5 ltr:mr-2 rtl:ml-2"},[t("path",{d:"M15.2869 3.15178L14.3601 4.07866L5.83882 12.5999L5.83881 12.5999C5.26166 13.1771 4.97308 13.4656 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.32181 19.8021L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L4.19792 21.6782L7.47918 20.5844L7.47919 20.5844C8.25353 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5344 19.0269 10.8229 18.7383 11.4001 18.1612L11.4001 18.1612L19.9213 9.63993L20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178Z",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M14.36 4.07812C14.36 4.07812 14.4759 6.04774 16.2138 7.78564C17.9517 9.52354 19.9213 9.6394 19.9213 9.6394M4.19789 21.6777L2.32178 19.8015",stroke:"currentColor","stroke-width":"1.5"})],-1),Zt=t("pre",null,`<!-- copy from textare -->
<form>
  <textarea rows="3" wrap="soft" class="form-textarea" v-model="message2" id="message2"></textarea>
  <div class="flex flex-wrap gap-2 mt-5">
    <button type="button" class="btn btn-primary" @click="copy(message2)">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
        <path
          d="M6 11C6 8.17157 6 6.75736 6.87868 5.87868C7.75736 5 9.17157 5 12 5H15C17.8284 5 19.2426 5 20.1213 5.87868C21 6.75736 21 8.17157 21 11V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H12C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V11Z"
          stroke="currentColor"
          stroke-width="1.5"
        />
        <path
          opacity="0.5"
          d="M6 19C4.34315 19 3 17.6569 3 16V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H15C16.6569 2 18 3.34315 18 5"
          stroke="currentColor"
          stroke-width="1.5"
        />
      </svg>
      Copy from Input
    </button>
    <button type="button" class="btn btn-dark" @click="cut(message2)" @blur="message2 = ''">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 ltr:mr-2 rtl:ml-2">
        <path
          d="M15.2869 3.15178L14.3601 4.07866L5.83882 12.5999L5.83881 12.5999C5.26166 13.1771 4.97308 13.4656 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.32181 19.8021L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L4.19792 21.6782L7.47918 20.5844L7.47919 20.5844C8.25353 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5344 19.0269 10.8229 18.7383 11.4001 18.1612L11.4001 18.1612L19.9213 9.63993L20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178Z"
          stroke="currentColor"
          stroke-width="1.5"
        />
        <path
          opacity="0.5"
          d="M14.36 4.07812C14.36 4.07812 14.4759 6.04774 16.2138 7.78564C17.9517 9.52354 19.9213 9.6394 19.9213 9.6394M4.19789 21.6777L2.32178 19.8015"
          stroke="currentColor"
          stroke-width="1.5"
        />
      </svg>
      Cut from Input
    </button>
  </div>
</form>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import useClipboard from 'vue-clipboard3';

const { toClipboard } = useClipboard();
const copy = async (msg) => {
  if (msg) {
    await toClipboard(msg);
    showMessage('Copied successfully.');
  }
};

const cut = async (msg) => {
  if (msg) {
    await toClipboard(msg);
    showMessage('Cut successfully.');
  }
};
<\/script>
`,-1),$t={class:"panel"},It={class:"flex items-center justify-between mb-5"},Dt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Copy Text from Paragraph",-1),Ft=H('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Ut=[Ft],Yt={class:"mb-5"},zt={class:"bg-[#f1f2f3] p-5 rounded dark:bg-[#060818]"},Gt=t("p",{class:"mb-3 font-semibold"},[x("Here is your OTP "),t("span",{class:"text-2xl",id:"copyOTP"},"22991"),x(".")],-1),Xt=t("p",{class:"font-semibold"},"Please do not share it to anyone",-1),qt={class:"flex flex-wrap gap-2 mt-5"},Jt=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[t("path",{d:"M6 11C6 8.17157 6 6.75736 6.87868 5.87868C7.75736 5 9.17157 5 12 5H15C17.8284 5 19.2426 5 20.1213 5.87868C21 6.75736 21 8.17157 21 11V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H12C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V11Z",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M6 19C4.34315 19 3 17.6569 3 16V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H15C16.6569 2 18 3.34315 18 5",stroke:"currentColor","stroke-width":"1.5"})],-1),Kt=t("pre",null,`<!-- copy from paragraph -->
<form>
  <p class="mb-3 font-semibold">Here is your OTP <span class="text-2xl" id="copyOTP">22991</span>.</p>
  <p class="font-semibold">Please do not share it to anyone</p>
  <div class="flex flex-wrap gap-2 mt-5">
    <button type="button" class="btn btn-primary" @click="copy('22991')">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
        <path
          d="M6 11C6 8.17157 6 6.75736 6.87868 5.87868C7.75736 5 9.17157 5 12 5H15C17.8284 5 19.2426 5 20.1213 5.87868C21 6.75736 21 8.17157 21 11V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H12C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V11Z"
          stroke="currentColor"
          stroke-width="1.5"
        />
        <path
          opacity="0.5"
          d="M6 19C4.34315 19 3 17.6569 3 16V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H15C16.6569 2 18 3.34315 18 5"
          stroke="currentColor"
          stroke-width="1.5"
        />
      </svg>
      Copy from Paragraph
    </button>
  </div>
</form>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import useClipboard from 'vue-clipboard3';

const { toClipboard } = useClipboard();
const copy = async (msg) => {
  if (msg) {
    await toClipboard(msg);
    showMessage('Copied successfully.');
  }
};
<\/script>
`,-1),Qt={class:"panel"},Wt={class:"flex items-center justify-between mb-5"},te=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Copy Hidden Text (Advanced)",-1),ee=H('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),oe=[ee],re={class:"mb-5"},ne={class:"bg-[#f1f2f3] p-5 rounded dark:bg-[#060818]"},se=t("p",{class:"mb-3 font-semibold"},[t("span",null," Link -> "),x(),t("span",{id:"copyLink"}," http://www.admin-dashboard.com/code")],-1),ie=t("span",{class:"absolute opacity-0",id:"copyHiddenCode"},"2291",-1),ae={class:"flex flex-wrap gap-2 mt-5"},le=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[t("path",{d:"M6 11C6 8.17157 6 6.75736 6.87868 5.87868C7.75736 5 9.17157 5 12 5H15C17.8284 5 19.2426 5 20.1213 5.87868C21 6.75736 21 8.17157 21 11V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H12C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V11Z",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M6 19C4.34315 19 3 17.6569 3 16V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H15C16.6569 2 18 3.34315 18 5",stroke:"currentColor","stroke-width":"1.5"})],-1),ce=t("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[t("path",{d:"M6 11C6 8.17157 6 6.75736 6.87868 5.87868C7.75736 5 9.17157 5 12 5H15C17.8284 5 19.2426 5 20.1213 5.87868C21 6.75736 21 8.17157 21 11V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H12C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V11Z",stroke:"currentColor","stroke-width":"1.5"}),t("path",{opacity:"0.5",d:"M6 19C4.34315 19 3 17.6569 3 16V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H15C16.6569 2 18 3.34315 18 5",stroke:"currentColor","stroke-width":"1.5"})],-1),ue=t("pre",null,`<!-- advanced -->
<form>
  <p class="mb-3 font-semibold"><span> Link -> </span> <span id="copyLink"> http://www.admin-dashboard.com/code</span></p>
  <span class="absolute opacity-0" id="copyHiddenCode">2291</span>
  <div class="flex flex-wrap gap-2 mt-5">
    <button type="button" class="btn btn-primary" @click="copy('http://www.admin-dashboard.com/code')">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
        <path
          d="M6 11C6 8.17157 6 6.75736 6.87868 5.87868C7.75736 5 9.17157 5 12 5H15C17.8284 5 19.2426 5 20.1213 5.87868C21 6.75736 21 8.17157 21 11V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H12C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V11Z"
          stroke="currentColor"
          stroke-width="1.5"
        />
        <path
          opacity="0.5"
          d="M6 19C4.34315 19 3 17.6569 3 16V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H15C16.6569 2 18 3.34315 18 5"
          stroke="currentColor"
          stroke-width="1.5"
        />
      </svg>
      Copy Link
    </button>
    <button type="button" class="btn btn-dark" @click="copy('2291')">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
        <path
          d="M6 11C6 8.17157 6 6.75736 6.87868 5.87868C7.75736 5 9.17157 5 12 5H15C17.8284 5 19.2426 5 20.1213 5.87868C21 6.75736 21 8.17157 21 11V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H12C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V11Z"
          stroke="currentColor"
          stroke-width="1.5"
        />
        <path
          opacity="0.5"
          d="M6 19C4.34315 19 3 17.6569 3 16V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H15C16.6569 2 18 3.34315 18 5"
          stroke="currentColor"
          stroke-width="1.5"
        />
      </svg>
      Copy Hidden Code
    </button>
  </div>
</form>

<!-- script -->
<script lang="ts" setup>
import { ref } from 'vue';
import useClipboard from 'vue-clipboard3';
const message1 = ref('http://www.admin-dashboard.com');
const message2 = ref('Lorem ipsum dolor sit amet, consectetur adipiscing elit...');

const { toClipboard } = useClipboard();
const copy = async (msg) => {
  if (msg) {
    await toClipboard(msg);
    showMessage('Copied successfully.');
  }
};
<\/script>
`,-1),he=at({__name:"clipboard",setup(T){lt({title:"Clipboard"});const{codeArr:L,toggleCode:_}=dt(),g=F("http://www.admin-dashboard.com"),v=F("Lorem ipsum dolor sit amet, consectetur adipiscing elit..."),{toClipboard:f}=ft(),s=async a=>{a&&(await f(a),c("Copied successfully."))},e=async a=>{a&&(await f(a),c("Cut successfully."))},c=(a="",o="success")=>{ut.mixin({toast:!0,position:"top",showConfirmButton:!1,timer:3e3,customClass:{container:"toast"}}).fire({icon:o,title:a,padding:"10px 20px"})};return(a,o)=>(S(),ct("div",null,[ht,t("div",Ct,[mt,t("div",wt,[t("div",vt,[t("div",gt,[yt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:o[0]||(o[0]=d=>M(_)("code1"))},kt)]),t("div",xt,[t("div",_t,[t("form",null,[U(t("input",{type:"text",class:"form-input","onUpdate:modelValue":o[1]||(o[1]=d=>g.value=d),id:"message1"},null,512),[[Y,g.value]]),t("div",Lt,[t("button",{type:"button",class:"btn btn-primary",onClick:o[2]||(o[2]=d=>s(g.value))},[Mt,x(" Copy from Input ")]),t("button",{type:"button",class:"btn btn-dark",onClick:o[3]||(o[3]=d=>e(g.value)),onBlur:o[4]||(o[4]=d=>g.value="")},[Tt,x(" Cut from Input ")],32)])])])]),M(L).includes("code1")?(S(),O(N,{key:0},{default:P(()=>[Et]),_:1})):j("",!0)]),t("div",St,[t("div",Ht,[Vt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:o[5]||(o[5]=d=>M(_)("code2"))},Bt)]),t("div",Ot,[t("div",Pt,[t("form",null,[U(t("textarea",{rows:"3",wrap:"soft",class:"form-textarea","onUpdate:modelValue":o[6]||(o[6]=d=>v.value=d),id:"message2"},null,512),[[Y,v.value]]),t("div",jt,[t("button",{type:"button",class:"btn btn-primary",onClick:o[7]||(o[7]=d=>s(v.value))},[Nt,x(" Copy from Input ")]),t("button",{type:"button",class:"btn btn-dark",onClick:o[8]||(o[8]=d=>e(v.value)),onBlur:o[9]||(o[9]=d=>v.value="")},[Rt,x(" Cut from Input ")],32)])])])]),M(L).includes("code2")?(S(),O(N,{key:0},{default:P(()=>[Zt]),_:1})):j("",!0)]),t("div",$t,[t("div",It,[Dt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:o[10]||(o[10]=d=>M(_)("code3"))},Ut)]),t("div",Yt,[t("div",zt,[t("form",null,[Gt,Xt,t("div",qt,[t("button",{type:"button",class:"btn btn-primary",onClick:o[11]||(o[11]=d=>s("22991"))},[Jt,x(" Copy from Paragraph ")])])])])]),M(L).includes("code3")?(S(),O(N,{key:0},{default:P(()=>[Kt]),_:1})):j("",!0)]),t("div",Qt,[t("div",Wt,[te,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:o[12]||(o[12]=d=>M(_)("code4"))},oe)]),t("div",re,[t("div",ne,[t("form",null,[se,ie,t("div",ae,[t("button",{type:"button",class:"btn btn-primary",onClick:o[13]||(o[13]=d=>s("http://www.admin-dashboard.com/code"))},[le,x(" Copy Link ")]),t("button",{type:"button",class:"btn btn-dark",onClick:o[14]||(o[14]=d=>s("2291"))},[ce,x(" Copy Hidden Code ")])])])])]),M(L).includes("code4")?(S(),O(N,{key:0},{default:P(()=>[ue]),_:1})):j("",!0)])])])]))}});export{he as default};
