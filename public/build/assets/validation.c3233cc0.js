import{a3 as Fe,r as V,a4 as Se,I as J,a5 as le,O as ne,J as Ce,c as S,g as t,a6 as Ee,a7 as Le,B as me,y as ue,Q as de,d as Ve,u as Re,o as v,b as _,e,x as B,n as q,q as F,v as z,p as h,Y as I,w as D,M as Pe,E as oe,i as G,S as ze}from"./main.c541c6fc.js";import{c as Te,_ as Y}from"./codePreview.11bb9d1a.js";function ce(r){let a=arguments.length>1&&arguments[1]!==void 0?arguments[1]:[];return Object.keys(r).reduce((o,s)=>(a.includes(s)||(o[s]=t(r[s])),o),{})}function te(r){return typeof r=="function"}function je(r){return Ee(r)||Le(r)}function $e(r,a,o){let s=r;const n=a.split(".");for(let p=0;p<n.length;p++){if(!s[n[p]])return o;s=s[n[p]]}return s}function ae(r,a,o){return S(()=>r.some(s=>$e(a,s,{[o]:!1})[o]))}function pe(r,a,o){return S(()=>r.reduce((s,n)=>{const p=$e(a,n,{[o]:!1})[o]||[];return s.concat(p)},[]))}function ge(r,a,o,s){return r.call(s,t(a),t(o),s)}function ye(r){return r.$valid!==void 0?!r.$valid:!r}function qe(r,a,o,s,n,p,k){let{$lazy:d,$rewardEarly:y}=n,c=arguments.length>7&&arguments[7]!==void 0?arguments[7]:[],b=arguments.length>8?arguments[8]:void 0,f=arguments.length>9?arguments[9]:void 0,C=arguments.length>10?arguments[10]:void 0;const w=V(!!s.value),l=V(0);o.value=!1;const g=J([a,s].concat(c,C),()=>{if(d&&!s.value||y&&!f.value&&!o.value)return;let u;try{u=ge(r,a,b,k)}catch(L){u=Promise.reject(L)}l.value++,o.value=!!l.value,w.value=!1,Promise.resolve(u).then(L=>{l.value--,o.value=!!l.value,p.value=L,w.value=ye(L)}).catch(L=>{l.value--,o.value=!!l.value,p.value=L,w.value=!0})},{immediate:!0,deep:typeof a=="object"});return{$invalid:w,$unwatch:g}}function Ae(r,a,o,s,n,p,k,d){let{$lazy:y,$rewardEarly:c}=s;const b=()=>({}),f=S(()=>{if(y&&!o.value||c&&!d.value)return!1;let C=!0;try{const w=ge(r,a,k,p);n.value=w,C=ye(w)}catch(w){n.value=w}return C});return{$unwatch:b,$invalid:f}}function Ue(r,a,o,s,n,p,k,d,y,c,b){const f=V(!1),C=r.$params||{},w=V(null);let l,g;r.$async?{$invalid:l,$unwatch:g}=qe(r.$validator,a,f,o,s,w,n,r.$watchTargets,y,c,b):{$invalid:l,$unwatch:g}=Ae(r.$validator,a,o,s,w,n,y,c);const u=r.$message;return{$message:te(u)?S(()=>u(ce({$pending:f,$invalid:l,$params:ce(C),$model:a,$response:w,$validator:p,$propertyPath:d,$property:k}))):u||"",$params:C,$pending:f,$invalid:l,$response:w,$unwatch:g}}function Me(){let r=arguments.length>0&&arguments[0]!==void 0?arguments[0]:{};const a=t(r),o=Object.keys(a),s={},n={},p={};let k=null;return o.forEach(d=>{const y=a[d];switch(!0){case te(y.$validator):s[d]=y;break;case te(y):s[d]={$validator:y};break;case d==="$validationGroups":k=y;break;case d.startsWith("$"):p[d]=y;break;default:n[d]=y}}),{rules:s,nestedValidators:n,config:p,validationGroups:k}}function Oe(){}const Ge="__root";function xe(r,a,o){if(o)return a?a(r()):r();try{var s=Promise.resolve(r());return a?s.then(a):s}catch(n){return Promise.reject(n)}}function Ze(r,a){return xe(r,Oe,a)}function Be(r,a){var o=r();return o&&o.then?o.then(a):a(o)}function Ie(r){return function(){for(var a=[],o=0;o<arguments.length;o++)a[o]=arguments[o];try{return Promise.resolve(r.apply(this,a))}catch(s){return Promise.reject(s)}}}function De(r,a,o,s,n,p,k,d,y){const c=Object.keys(r),b=s.get(n,r),f=V(!1),C=V(!1),w=V(0);if(b){if(!b.$partial)return b;b.$unwatch(),f.value=b.$dirty.value}const l={$dirty:f,$path:n,$touch:()=>{f.value||(f.value=!0)},$reset:()=>{f.value&&(f.value=!1)},$commit:()=>{}};return c.length?(c.forEach(g=>{l[g]=Ue(r[g],a,l.$dirty,p,k,g,o,n,y,C,w)}),l.$externalResults=S(()=>d.value?[].concat(d.value).map((g,u)=>({$propertyPath:n,$property:o,$validator:"$externalResults",$uid:`${n}-externalResult-${u}`,$message:g,$params:{},$response:null,$pending:!1})):[]),l.$invalid=S(()=>{const g=c.some(u=>t(l[u].$invalid));return C.value=g,!!l.$externalResults.value.length||g}),l.$pending=S(()=>c.some(g=>t(l[g].$pending))),l.$error=S(()=>l.$dirty.value?l.$pending.value||l.$invalid.value:!1),l.$silentErrors=S(()=>c.filter(g=>t(l[g].$invalid)).map(g=>{const u=l[g];return ne({$propertyPath:n,$property:o,$validator:g,$uid:`${n}-${g}`,$message:u.$message,$params:u.$params,$response:u.$response,$pending:u.$pending})}).concat(l.$externalResults.value)),l.$errors=S(()=>l.$dirty.value?l.$silentErrors.value:[]),l.$unwatch=()=>c.forEach(g=>{l[g].$unwatch()}),l.$commit=()=>{C.value=!0,w.value=Date.now()},s.set(n,r,l),l):(b&&s.set(n,r,l),l)}function Ye(r,a,o,s,n,p,k){const d=Object.keys(r);return d.length?d.reduce((y,c)=>(y[c]=ie({validations:r[c],state:a,key:c,parentKey:o,resultsCache:s,globalConfig:n,instance:p,externalResults:k}),y),{}):{}}function We(r,a,o){const s=S(()=>[a,o].filter(l=>l).reduce((l,g)=>l.concat(Object.values(t(g))),[])),n=S({get(){return r.$dirty.value||(s.value.length?s.value.every(l=>l.$dirty):!1)},set(l){r.$dirty.value=l}}),p=S(()=>{const l=t(r.$silentErrors)||[],g=s.value.filter(u=>(t(u).$silentErrors||[]).length).reduce((u,L)=>u.concat(...L.$silentErrors),[]);return l.concat(g)}),k=S(()=>{const l=t(r.$errors)||[],g=s.value.filter(u=>(t(u).$errors||[]).length).reduce((u,L)=>u.concat(...L.$errors),[]);return l.concat(g)}),d=S(()=>s.value.some(l=>l.$invalid)||t(r.$invalid)||!1),y=S(()=>s.value.some(l=>t(l.$pending))||t(r.$pending)||!1),c=S(()=>s.value.some(l=>l.$dirty)||s.value.some(l=>l.$anyDirty)||n.value),b=S(()=>n.value?y.value||d.value:!1),f=()=>{r.$touch(),s.value.forEach(l=>{l.$touch()})},C=()=>{r.$commit(),s.value.forEach(l=>{l.$commit()})},w=()=>{r.$reset(),s.value.forEach(l=>{l.$reset()})};return s.value.length&&s.value.every(l=>l.$dirty)&&f(),{$dirty:n,$errors:k,$invalid:d,$anyDirty:c,$error:b,$pending:y,$touch:f,$reset:w,$silentErrors:p,$commit:C}}function ie(r){const a=Ie(function(){return W(),Be(function(){if(u.$rewardEarly)return i(),Ze(de)},function(){return xe(de,function(){return new Promise(P=>{if(!x.value)return P(!T.value);const O=J(x,()=>{P(!T.value),O()})})})})});let{validations:o,state:s,key:n,parentKey:p,childResults:k,resultsCache:d,globalConfig:y={},instance:c,externalResults:b}=r;const f=p?`${p}.${n}`:n,{rules:C,nestedValidators:w,config:l,validationGroups:g}=Me(o),u=Object.assign({},y,l),L=n?S(()=>{const P=t(s);return P?t(P[n]):void 0}):s,R=Object.assign({},t(b)||{}),N=S(()=>{const P=t(b);return n?P?t(P[n]):void 0:P}),Q=De(C,L,n,d,f,u,c,N,s),$=Ye(w,L,f,d,u,c,N),X={};g&&Object.entries(g).forEach(P=>{let[O,M]=P;X[O]={$invalid:ae(M,$,"$invalid"),$error:ae(M,$,"$error"),$pending:ae(M,$,"$pending"),$errors:pe(M,$,"$errors"),$silentErrors:pe(M,$,"$silentErrors")}});const{$dirty:j,$errors:re,$invalid:T,$anyDirty:E,$error:se,$pending:x,$touch:W,$reset:U,$silentErrors:K,$commit:i}=We(Q,$,k),m=n?S({get:()=>t(L),set:P=>{j.value=!0;const O=t(s),M=t(b);M&&(M[n]=R[n]),le(O[n])?O[n].value=P:O[n]=P}}):null;n&&u.$autoDirty&&J(L,()=>{j.value||W();const P=t(b);P&&(P[n]=R[n])},{flush:"sync"});function we(P){return(k.value||{})[P]}function Ne(){le(b)?b.value=R:Object.keys(R).length===0?Object.keys(b).forEach(P=>{delete b[P]}):Object.assign(b,R)}return ne(Object.assign({},Q,{$model:m,$dirty:j,$error:se,$errors:re,$invalid:T,$anyDirty:E,$pending:x,$touch:W,$reset:U,$path:f||Ge,$silentErrors:K,$validate:a,$commit:i},k&&{$getResultsForChild:we,$clearExternalResults:Ne,$validationGroups:X},$))}class He{constructor(){this.storage=new Map}set(a,o,s){this.storage.set(a,{rules:o,result:s})}checkRulesValidity(a,o,s){const n=Object.keys(s),p=Object.keys(o);return p.length!==n.length||!p.every(d=>n.includes(d))?!1:p.every(d=>o[d].$params?Object.keys(o[d].$params).every(y=>t(s[d].$params[y])===t(o[d].$params[y])):!0)}get(a,o){const s=this.storage.get(a);if(!s)return;const{rules:n,result:p}=s,k=this.checkRulesValidity(a,o,n),d=p.$unwatch?p.$unwatch:()=>({});return k?p:{$dirty:p.$dirty,$partial:!0,$unwatch:d}}}const ee={COLLECT_ALL:!0,COLLECT_NONE:!1},fe=Symbol("vuelidate#injectChildResults"),ve=Symbol("vuelidate#removeChildResults");function Je(r){let{$scope:a,instance:o}=r;const s={},n=V([]),p=S(()=>n.value.reduce((b,f)=>(b[f]=t(s[f]),b),{}));function k(b,f){let{$registerAs:C,$scope:w,$stopPropagation:l}=f;l||a===ee.COLLECT_NONE||w===ee.COLLECT_NONE||a!==ee.COLLECT_ALL&&a!==w||(s[C]=b,n.value.push(C))}o.__vuelidateInjectInstances=[].concat(o.__vuelidateInjectInstances||[],k);function d(b){n.value=n.value.filter(f=>f!==b),delete s[b]}o.__vuelidateRemoveInstances=[].concat(o.__vuelidateRemoveInstances||[],d);const y=me(fe,[]);ue(fe,o.__vuelidateInjectInstances);const c=me(ve,[]);return ue(ve,o.__vuelidateRemoveInstances),{childResults:p,sendValidationResultsToParent:y,removeValidationResultsFromParent:c}}function _e(r){return new Proxy(r,{get(a,o){return typeof a[o]=="object"?_e(a[o]):S(()=>a[o])}})}let he=0;function H(r,a){var o;let s=arguments.length>2&&arguments[2]!==void 0?arguments[2]:{};arguments.length===1&&(s=r,r=void 0,a=void 0);let{$registerAs:n,$scope:p=ee.COLLECT_ALL,$stopPropagation:k,$externalResults:d,currentVueInstance:y}=s;const c=y||((o=Fe())===null||o===void 0?void 0:o.proxy),b=c?c.$options:{};n||(he+=1,n=`_vuelidate_${he}`);const f=V({}),C=new He,{childResults:w,sendValidationResultsToParent:l,removeValidationResultsFromParent:g}=c?Je({$scope:p,instance:c}):{childResults:V({})};if(!r&&b.validations){const u=b.validations;a=V({}),Se(()=>{a.value=c,J(()=>te(u)?u.call(a.value,new _e(a.value)):u,L=>{f.value=ie({validations:L,state:a,childResults:w,resultsCache:C,globalConfig:s,instance:c,externalResults:d||c.vuelidateExternalResults})},{immediate:!0})}),s=b.validationsConfig||s}else{const u=le(r)||je(r)?r:ne(r||{});J(u,L=>{f.value=ie({validations:L,state:a,childResults:w,resultsCache:C,globalConfig:s,instance:c!=null?c:{},externalResults:d})},{immediate:!0})}return c&&(l.forEach(u=>u(f,{$registerAs:n,$scope:p,$stopPropagation:k})),Ce(()=>g.forEach(u=>u(n)))),S(()=>Object.assign({},t(f.value),w.value))}const ke=r=>{if(r=t(r),Array.isArray(r))return!!r.length;if(r==null)return!1;if(r===!1)return!0;if(r instanceof Date)return!isNaN(r.getTime());if(typeof r=="object"){for(let a in r)return!0;return!1}return!!String(r).length};function Z(){for(var r=arguments.length,a=new Array(r),o=0;o<r;o++)a[o]=arguments[o];return s=>(s=t(s),!ke(s)||a.every(n=>n.test(s)))}Z(/^[a-zA-Z]*$/);Z(/^[a-zA-Z0-9]*$/);Z(/^\d*(\.\d+)?$/);const Qe=/^(?:[A-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9]{2,}(?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/i;var Xe=Z(Qe),Ke={$validator:Xe,$message:"Value is not a valid email address",$params:{type:"email"}};function et(r){return typeof r=="string"&&(r=r.trim()),ke(r)}var A={$validator:et,$message:"Value is required",$params:{type:"required"}};function tt(r){return a=>t(a)===t(r)}function be(r){let a=arguments.length>1&&arguments[1]!==void 0?arguments[1]:"other";return{$validator:tt(r),$message:o=>`The value must be equal to the ${a} value`,$params:{equalTo:r,otherName:a,type:"sameAs"}}}const rt=/^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z0-9\u00a1-\uffff][a-z0-9\u00a1-\uffff_-]{0,62})?[a-z0-9\u00a1-\uffff]\.)+(?:[a-z\u00a1-\uffff]{2,}\.?))(?::\d{2,5})?(?:[/?#]\S*)?$/i;Z(rt);Z(/(^[0-9]*$)|(^-[0-9]+$)/);Z(/^[-]?\d*(\.\d+)?$/);const st=e("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[e("li",null,[e("a",{href:"javascript:;",class:"text-primary hover:underline"},"Forms")]),e("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[e("span",null,"Validation")])],-1),ot={class:"pt-5 space-y-8"},at=G('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/vuelidate" target="_blank" class="block hover:underline">https://www.npmjs.com/package/vuelidate</a></div>',1),lt={class:"grid grid-cols-1 xl:grid-cols-2 gap-6"},it={class:"panel"},nt={class:"flex items-center justify-between mb-5"},mt=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Basic",-1),ut=G('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),dt=[ut],ct={class:"mb-5"},pt=e("label",{for:"fullName"},"Full Name",-1),ft={key:0,class:"text-[#1abc9c] mt-1"},vt={key:1,class:"text-danger mt-1"},ht=e("button",{type:"submit",class:"btn btn-primary !mt-6"},"Submit Form",-1),bt=e("pre",null,`<!-- basic -->
<form class="space-y-5" @submit.prevent="submitForm1()">
  <div :class="{ 'has-error': $v1.form1.name.$error, 'has-success': isSubmitForm1 && !$v1.form1.name.$error }">
    <label for="fullName">Full Name</label>
    <input id="fullName" type="text" placeholder="Enter Full Name" class="form-input" v-model="form1.name" />
    <template v-if="isSubmitForm1 && !$v1.form1.name.$error">
      <p class="text-[#1abc9c] mt-1">Looks Good!</p>
    </template>
    <template v-if="isSubmitForm1 && $v1.form1.name.$error">
      <p class="text-danger mt-1">Please fill the Name</p>
    </template>
  </div>
  <button type="submit" class="btn btn-primary !mt-6">Submit Form</button>
</form>

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  import { useVuelidate } from '@vuelidate/core';
  import { required, email, sameAs } from '@vuelidate/validators';
  const form1 = ref({
    name: '',
  });
  const isSubmitForm1 = ref(false);
  const rules1 = {
    form1: {
      name: { required },
    },
  };
  const $v1 = useVuelidate(rules1, { form1 });
  const submitForm1 = () => {
    isSubmitForm1.value = true;
    $v1.value.form1.$touch();
    if ($v1.value.form1.$invalid) {
      return false;
    }
    //form validated success
    showMessage('Form submitted successfully.');
  };
<\/script>
`,-1),$t={class:"panel"},gt={class:"flex items-center justify-between mb-5"},yt=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Email",-1),xt=G('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),_t=[xt],kt={class:"mb-5"},wt=e("label",{for:"Email"},"Email",-1),Nt={key:0,class:"text-[#1abc9c] mt-1"},Ft={key:1,class:"text-danger mt-1"},St=e("button",{type:"submit",class:"btn btn-primary !mt-6"},"Submit Form",-1),Ct=e("pre",null,`<!-- email -->
<form class="space-y-5" @submit.prevent="submitForm2()">
  <div :class="{ 'has-error': $v2.form2.email.$error, 'has-success': isSubmitForm2 && !$v2.form2.email.$error }">
    <label for="Email">Email</label>
    <input id="Email" type="text" placeholder="Enter Email" class="form-input" v-model="form2.email" />
    <template v-if="isSubmitForm2 && !$v2.form2.email.$error">
      <p class="text-[#1abc9c] mt-1">Looks Good!</p>
    </template>
    <template v-if="isSubmitForm2 && $v2.form2.email.$error">
      <p class="text-danger mt-1">Please fill the Email</p>
    </template>
  </div>
  <button type="submit" class="btn btn-primary !mt-6">Submit Form</button>
</form>

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  import { useVuelidate } from '@vuelidate/core';
  import { required, email, sameAs } from '@vuelidate/validators';

  const form2 = ref({
    email: '',
  });
  const isSubmitForm2 = ref(false);
  const rules2 = {
    form2: {
      email: { required, email },
    },
  };
  const $v2 = useVuelidate(rules2, { form2 });
  const submitForm2 = () => {
    isSubmitForm2.value = true;
    $v2.value.form2.$touch();
    if ($v2.value.form2.$invalid) {
      return false;
    }
    //form validated success
    showMessage('Form submitted successfully.');
  };
<\/script>
`,-1),Et={class:"panel"},Lt={class:"flex items-center justify-between mb-5"},Vt=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Select",-1),Rt=G('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Pt=[Rt],zt={class:"mb-5"},Tt=e("option",{value:""},"Open this select menu",-1),jt=e("option",{value:"1"},"One",-1),qt=e("option",{value:"2"},"Two",-1),At=e("option",{value:"3"},"Three",-1),Ut=[Tt,jt,qt,At],Mt={key:0,class:"text-[#1abc9c] mt-1"},Ot={key:1,class:"text-danger mt-1"},Gt=e("button",{type:"submit",class:"btn btn-primary !mt-6"},"Submit Form",-1),Zt=e("pre",null,`<!-- select -->
<form class="space-y-5" @submit.prevent="submitForm3()">
  <div :class="{ 'has-error': $v3.form3.select.$error, 'has-success': isSubmitForm3 && !$v3.form3.select.$error }">
    <select class="form-select text-white-dark" v-model="form3.select">
      <option value="">Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <template v-if="isSubmitForm3 && !$v3.form3.select.$error">
      <p class="text-[#1abc9c] mt-1">Example valid custom select feedback</p>
    </template>
    <template v-if="isSubmitForm3 && $v3.form3.select.$error">
      <p class="text-danger mt-1">Please Select the field</p>
    </template>
  </div>
  <button type="submit" class="btn btn-primary !mt-6">Submit Form</button>
</form>

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  import { useVuelidate } from '@vuelidate/core';
  import { required, email, sameAs } from '@vuelidate/validators';

  const form3 = ref({
    select: '',
  });
  const isSubmitForm3 = ref(false);
  const rules3 = {
    form3: {
      select: { required },
    },
  };
  const $v3 = useVuelidate(rules3, { form3 });
  const submitForm3 = () => {
    isSubmitForm3.value = true;
    $v3.value.form3.$touch();
    if ($v3.value.form3.$invalid) {
      return false;
    }
    //form validated success
    showMessage('Form submitted successfully.');
  };
<\/script>
`,-1),Bt={class:"panel"},It={class:"flex items-center justify-between mb-5"},Dt=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Custom Styles",-1),Yt=G('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Wt=[Yt],Ht={class:"mb-5"},Jt={class:"grid grid-cols-1 md:grid-cols-3 gap-5"},Qt=e("label",{for:"customFname"},"First Name",-1),Xt={key:0,class:"text-[#1abc9c] mt-1"},Kt={key:1,class:"text-danger mt-1"},er=e("label",{for:"customLname"},"Last name",-1),tr={key:0,class:"text-[#1abc9c] mt-1"},rr={key:1,class:"text-danger mt-1"},sr=e("label",{for:"customeEmail"},"Username",-1),or={class:"flex"},ar=e("div",{class:"bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"}," @ ",-1),lr={key:0,class:"text-[#1abc9c] mt-1"},ir={key:1,class:"text-danger mt-1"},nr={class:"grid grid-cols-1 md:grid-cols-4 gap-5"},mr=e("label",{for:"customeCity"},"City",-1),ur={key:0,class:"text-[#1abc9c] mt-1"},dr={key:1,class:"text-danger mt-1"},cr=e("label",{for:"customeState"},"State",-1),pr={key:0,class:"text-[#1abc9c] mt-1"},fr={key:1,class:"text-danger mt-1"},vr=e("label",{for:"customeZip"},"Zip",-1),hr={key:0,class:"text-[#1abc9c] mt-1"},br={key:1,class:"text-danger mt-1"},$r={class:"inline-flex cursor-pointer mt-1"},gr=e("span",{class:"text-white-dark"},"Agree to terms and conditions",-1),yr={key:0,class:"text-danger mt-1"},xr=e("button",{type:"submit",class:"btn btn-primary !mt-6"},"Submit Form",-1),_r=e("pre",null,`<!-- custom styles -->
<form class="space-y-5" @submit.prevent="submitForm4()">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
    <div :class="{ 'has-error': $v4.form4.firstName.$error, 'has-success': isSubmitForm4 && !$v4.form4.firstName.$error }">
      <label for="customFname">First Name</label>
      <input id="customFname" type="text" placeholder="Enter First Name" class="form-input" v-model="form4.firstName" />
      <template v-if="isSubmitForm4 && !$v4.form4.firstName.$error">
        <p class="text-[#1abc9c] mt-1">Looks Good!</p>
      </template>
      <template v-if="isSubmitForm4 && $v4.form4.firstName.$error">
        <p class="text-danger mt-1">Please fill the first name</p>
      </template>
    </div>
    <div :class="{ 'has-error': $v4.form4.lastName.$error, 'has-success': isSubmitForm4 && !$v4.form4.lastName.$error }">
      <label for="customLname">Last name</label>
      <input id="customLname" type="text" placeholder="Enter Last Name" class="form-input" v-model="form4.lastName" />
      <template v-if="isSubmitForm4 && !$v4.form4.lastName.$error">
        <p class="text-[#1abc9c] mt-1">Looks Good!</p>
      </template>
      <template v-if="isSubmitForm4 && $v4.form4.lastName.$error">
        <p class="text-danger mt-1">Please fill the last name</p>
      </template>
    </div>
    <div :class="{ 'has-error': $v4.form4.userName.$error, 'has-success': isSubmitForm4 && !$v4.form4.userName.$error }">
      <label for="customeEmail">Username</label>
      <div class="flex">
        <div
          class="
            bg-[#eee]
            flex
            justify-center
            items-center
            ltr:rounded-l-md
            rtl:rounded-r-md
            px-3
            font-semibold
            border
            ltr:border-r-0
            rtl:border-l-0
            border-[#e0e6ed]
            dark:border-[#17263c] dark:bg-[#1b2e4b]
          "
        >
          @
        </div>
        <input id="customeEmail" type="text" placeholder="Enter Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none" v-model="form4.userName" />
      </div>
      <template v-if="isSubmitForm4 && !$v4.form4.userName.$error">
        <p class="text-[#1abc9c] mt-1">Looks Good!</p>
      </template>
      <template v-if="isSubmitForm4 && $v4.form4.userName.$error">
        <p class="text-danger mt-1">Please choose a userName</p>
      </template>
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
    <div class="md:col-span-2" :class="{ 'has-error': $v4.form4.city.$error, 'has-success': isSubmitForm4 && !$v4.form4.city.$error }">
      <label for="customeCity">City</label>
      <input id="customeCity" type="text" placeholder="Enter City" class="form-input" v-model="form4.city" />
      <template v-if="isSubmitForm4 && !$v4.form4.city.$error">
        <p class="text-[#1abc9c] mt-1">Looks Good!</p>
      </template>
      <template v-if="isSubmitForm4 && $v4.form4.city.$error">
        <p class="text-danger mt-1">Please provide a valid city</p>
      </template>
    </div>
    <div :class="{ 'has-error': $v4.form4.state.$error, 'has-success': isSubmitForm4 && !$v4.form4.state.$error }">
      <label for="customeState">State</label>
      <input id="customeState" type="text" placeholder="Enter State" class="form-input" v-model="form4.state" />
      <template v-if="isSubmitForm4 && !$v4.form4.state.$error">
        <p class="text-[#1abc9c] mt-1">Looks Good!</p>
      </template>
      <template v-if="isSubmitForm4 && $v4.form4.state.$error">
        <p class="text-danger mt-1">Please provide a valid state</p>
      </template>
    </div>
    <div :class="{ 'has-error': $v4.form4.zip.$error, 'has-success': isSubmitForm4 && !$v4.form4.zip.$error }">
      <label for="customeZip">Zip</label>
      <input id="customeZip" type="text" placeholder="Enter Zip" class="form-input" v-model="form4.zip" />
      <template v-if="isSubmitForm4 && !$v4.form4.zip.$error">
        <p class="text-[#1abc9c] mt-1">Looks Good!</p>
      </template>
      <template v-if="isSubmitForm4 && $v4.form4.zip.$error">
        <p class="text-danger mt-1">Please provide a valid zip</p>
      </template>
    </div>
  </div>
  <div :class="{ 'has-error': $v4.form4.isTerms.$error, 'has-success': isSubmitForm4 && !$v4.form4.isTerms.$error }">
    <label class="inline-flex cursor-pointer mt-1">
      <input type="checkbox" class="form-checkbox" v-model="form4.isTerms" />
      <span class="text-white-dark">Agree to terms and conditions</span>
    </label>
    <template v-if="isSubmitForm4 && $v4.form4.isTerms.$error">
      <p class="text-danger mt-1">You must agree before submitting.</p>
    </template>
  </div>
  <button type="submit" class="btn btn-primary !mt-6">Submit Form</button>
</form>

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  import { useVuelidate } from '@vuelidate/core';
  import { required, email, sameAs } from '@vuelidate/validators';

  const form4 = ref({
    firstName: 'Shaun',
    lastName: 'Park',
    userName: '',
    city: '',
    state: '',
    zip: '',
    isTerms: false,
  });
  const isSubmitForm4 = ref(false);
  const rules4 = {
    form4: {
      firstName: { required },
      lastName: { required },
      userName: { required },
      city: { required },
      state: { required },
      zip: { required },
      isTerms: {
        sameAsRawValue: sameAs(true),
      },
    },
  };
  const $v4 = useVuelidate(rules4, { form4 });
  const submitForm4 = () => {
    isSubmitForm4.value = true;
    $v4.value.form4.$touch();
    if ($v4.value.form4.$invalid) {
      return false;
    }
    //form validated success
    showMessage('Form submitted successfully.');
  };

<\/script>
`,-1),kr={class:"panel"},wr={class:"flex items-center justify-between mb-5"},Nr=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Browser Default",-1),Fr=G('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Sr=[Fr],Cr={class:"mb-5"},Er={class:"grid grid-cols-1 md:grid-cols-3 gap-5"},Lr=e("label",{for:"browserFname"},"First Name",-1),Vr=e("label",{for:"browserLname"},"Last name",-1),Rr=e("label",{for:"browserEmail"},"Username",-1),Pr={class:"flex"},zr=e("div",{class:"bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"}," @ ",-1),Tr={class:"grid grid-cols-1 md:grid-cols-4 gap-5"},jr={class:"md:col-span-2"},qr=e("label",{for:"browserCity"},"City",-1),Ar=e("label",{for:"browserState"},"State",-1),Ur=e("label",{for:"browserZip"},"Zip",-1),Mr={class:"flex items-center cursor-pointer mt-1"},Or=e("span",{class:"text-white-dark"},"Agree to terms and conditions",-1),Gr=e("button",{type:"submit",class:"btn btn-primary !mt-6"},"Submit Form",-1),Zr=e("pre",null,`<!-- browser default -->
<form class="space-y-5" @submit.prevent="submitForm5()">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
    <div>
      <label for="browserFname">First Name</label>
      <input id="browserFname" type="text" placeholder="Enter First Name" v-model="form5.firstName" class="form-input" required />
    </div>
    <div>
      <label for="browserLname">Last name</label>
      <input id="browserLname" type="text" placeholder="Enter Last name" v-model="form5.lastName" class="form-input" required />
    </div>
    <div>
      <label for="browserEmail">Username</label>
      <div class="flex">
        <div
          class="
            bg-[#eee]
            flex
            justify-center
            items-center
            ltr:rounded-l-md
            rtl:rounded-r-md
            px-3
            font-semibold
            border
            ltr:border-r-0
            rtl:border-l-0
            border-[#e0e6ed]
            dark:border-[#17263c] dark:bg-[#1b2e4b]
          "
        >
          @
        </div>
        <input id="browserEmail" type="text" placeholder="Enter Username" v-model="form5.userName" class="form-input ltr:rounded-l-none rtl:rounded-r-none" required />
      </div>
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
    <div class="md:col-span-2">
      <label for="browserCity">City</label>
      <input id="browserCity" type="text" placeholder="Enter City" v-model="form5.city" class="form-input" required />
    </div>
    <div>
      <label for="browserState">State</label>
      <input id="browserState" type="text" placeholder="Enter State" v-model="form5.state" class="form-input" required />
    </div>
    <div>
      <label for="browserZip">Zip</label>
      <input id="browserZip" type="text" placeholder="Enter Zip" v-model="form5.zip" class="form-input" required />
    </div>
  </div>
  <div>
    <label class="flex items-center cursor-pointer mt-1">
      <input type="checkbox" class="form-checkbox" v-model="form5.isTerms" required />
      <span class="text-white-dark">Agree to terms and conditions</span>
    </label>
  </div>
  <button type="submit" class="btn btn-primary !mt-6">Submit Form</button>
</form>

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  import { useVuelidate } from '@vuelidate/core';
  import { required, email, sameAs } from '@vuelidate/validators';

  const form5 = ref({
    firstName: 'Shaun',
    lastName: 'Park',
    userName: '',
    city: '',
    state: '',
    zip: '',
    isTerms: false,
  });
  const submitForm5 = () => {
    //form validated success
    showMessage('Form submitted successfully.');
  };
<\/script>
`,-1),Br={class:"panel"},Ir={class:"flex items-center justify-between mb-5"},Dr=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Tooltips",-1),Yr=G('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Wr=[Yr],Hr={class:"mb-5"},Jr={class:"grid grid-cols-1 md:grid-cols-3 gap-5"},Qr=e("label",{for:"tlpFname"},"First Name",-1),Xr={key:0,class:"text-white bg-[#1abc9c] py-1 px-2 rounded"},Kr={key:1,class:"text-white bg-danger py-1 px-2 rounded"},es=e("label",{for:"tlpLname"},"Last name",-1),ts={key:0,class:"text-white bg-[#1abc9c] py-1 px-2 rounded"},rs={key:1,class:"text-white bg-danger py-1 px-2 rounded"},ss=e("label",{for:"tlpEmail"},"Username",-1),os={class:"flex"},as=e("div",{class:"bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"}," @ ",-1),ls={class:"mt-2"},is={key:0,class:"text-white bg-[#1abc9c] py-1 px-2 rounded"},ns={key:1,class:"text-white bg-danger py-1 px-2 rounded"},ms={class:"grid grid-cols-1 md:grid-cols-4 gap-5"},us=e("label",{for:"tlpCity"},"City",-1),ds={key:0,class:"text-white bg-[#1abc9c] py-1 px-2 rounded"},cs={key:1,class:"text-white bg-danger py-1 px-2 rounded"},ps=e("label",{for:"tlpState"},"State",-1),fs={key:0,class:"text-white bg-[#1abc9c] py-1 px-2 rounded"},vs={key:1,class:"text-white bg-danger py-1 px-2 rounded"},hs=e("label",{for:"tlpZip"},"Zip",-1),bs={key:0,class:"text-white bg-[#1abc9c] py-1 px-2 rounded"},$s={key:1,class:"text-white bg-danger py-1 px-2 rounded"},gs={class:"flex items-center cursor-pointer"},ys=e("span",{class:"text-white-dark"},"Agree to terms and conditions",-1),xs={key:0,class:"mt-2"},_s=e("span",{class:"text-white bg-danger py-1 px-2 rounded"},"You must agree before submitting.",-1),ks=[_s],ws=e("button",{type:"submit",class:"btn btn-primary !mt-6"},"Submit Form",-1),Ns=e("pre",null,`<!-- tooltips -->
<form class="space-y-5" @submit.prevent="submitForm6()">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
    <div :class="{ 'has-error': $v6.form6.firstName.$error, 'has-success': isSubmitForm6 && !$v6.form6.firstName.$error }">
      <label for="tlpFname">First Name</label>
      <input id="tlpFname" type="text" placeholder="Enter First Name" class="form-input mb-2" v-model="form6.firstName" />
      <template v-if="isSubmitForm6 && !$v6.form6.firstName.$error">
        <span class="text-white bg-[#1abc9c] py-1 px-2 rounded">Looks Good!</span>
      </template>
      <template v-if="isSubmitForm6 && $v6.form6.firstName.$error">
        <span class="text-white bg-danger py-1 px-2 rounded">Please fill the first Name</span>
      </template>
    </div>
    <div :class="{ 'has-error': $v6.form6.lastName.$error, 'has-success': isSubmitForm6 && !$v6.form6.lastName.$error }">
      <label for="tlpLname">Last name</label>
      <input id="tlpLname" type="text" placeholder="Enter Last Name" class="form-input mb-2" v-model="form6.lastName" />
      <template v-if="isSubmitForm6 && !$v6.form6.lastName.$error">
        <span class="text-white bg-[#1abc9c] py-1 px-2 rounded">Looks Good!</span>
      </template>
      <template v-if="isSubmitForm6 && $v6.form6.lastName.$error">
        <span class="text-white bg-danger py-1 px-2 rounded">Please fill the last Name</span>
      </template>
    </div>
    <div :class="{ 'has-error': $v6.form6.userName.$error, 'has-success': isSubmitForm6 && !$v6.form6.userName.$error }">
      <label for="tlpEmail">Username</label>
      <div class="flex">
        <div
          class="
            bg-[#eee]
            flex
            justify-center
            items-center
            ltr:rounded-l-md
            rtl:rounded-r-md
            px-3
            font-semibold
            border
            ltr:border-r-0
            rtl:border-l-0
            border-[#e0e6ed]
            dark:border-[#17263c] dark:bg-[#1b2e4b]
          "
        >
          @
        </div>
        <input id="tlpEmail" type="text" placeholder="Enter Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none" v-model="form6.userName" />
      </div>
      <div class="mt-2">
        <template v-if="isSubmitForm6 && !$v6.form6.userName.$error">
          <span class="text-white bg-[#1abc9c] py-1 px-2 rounded">Looks Good!</span>
        </template>
        <template v-if="isSubmitForm6 && $v6.form6.userName.$error">
          <span class="text-white bg-danger py-1 px-2 rounded">Please choose a userName.</span>
        </template>
      </div>
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
    <div class="md:col-span-2" :class="{ 'has-error': $v6.form6.city.$error, 'has-success': isSubmitForm6 && !$v6.form6.city.$error }">
      <label for="tlpCity">City</label>
      <input id="tlpCity" type="text" placeholder="Enter City" class="form-input mb-2" v-model="form6.city" />
      <template v-if="isSubmitForm6 && !$v6.form6.city.$error">
        <span class="text-white bg-[#1abc9c] py-1 px-2 rounded">Looks Good!</span>
      </template>
      <template v-if="isSubmitForm6 && $v6.form6.city.$error">
        <span class="text-white bg-danger py-1 px-2 rounded">Please provide a valid city.</span>
      </template>
    </div>
    <div :class="{ 'has-error': $v6.form6.state.$error, 'has-success': isSubmitForm6 && !$v6.form6.state.$error }">
      <label for="tlpState">State</label>
      <input id="tlpState" type="text" placeholder="Enter State" class="form-input mb-2" v-model="form6.state" />
      <template v-if="isSubmitForm6 && !$v6.form6.state.$error">
        <span class="text-white bg-[#1abc9c] py-1 px-2 rounded">Looks Good!</span>
      </template>
      <template v-if="isSubmitForm6 && $v6.form6.state.$error">
        <span class="text-white bg-danger py-1 px-2 rounded">Please provide a valid state.</span>
      </template>
    </div>
    <div :class="{ 'has-error': $v6.form6.zip.$error, 'has-success': isSubmitForm6 && !$v6.form6.zip.$error }">
      <label for="tlpZip">Zip</label>
      <input id="tlpZip" type="text" placeholder="Enter Zip" class="form-input mb-2" v-model="form6.zip" />
      <template v-if="isSubmitForm6 && !$v6.form6.zip.$error">
        <span class="text-white bg-[#1abc9c] py-1 px-2 rounded">Looks Good!</span>
      </template>
      <template v-if="isSubmitForm6 && $v6.form6.zip.$error">
        <span class="text-white bg-danger py-1 px-2 rounded">Please provide a valid Zip.</span>
      </template>
    </div>
  </div>
  <div :class="{ 'has-error': $v6.form6.isTerms.$error, 'has-success': isSubmitForm6 && !$v6.form6.isTerms.$error }">
    <label class="flex items-center cursor-pointer">
      <input type="checkbox" class="form-checkbox" v-model="form6.isTerms" />
      <span class="text-white-dark">Agree to terms and conditions</span>
    </label>
    <template v-if="isSubmitForm6 && $v6.form6.isTerms.$error">
      <div class="mt-2">
        <span class="text-white bg-danger py-1 px-2 rounded">You must agree before submitting.</span>
      </div>
    </template>
  </div>
  <button type="submit" class="btn btn-primary !mt-6">Submit Form</button>
</form>

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  import { useVuelidate } from '@vuelidate/core';
  import { required, email, sameAs } from '@vuelidate/validators';
  const form6 = ref({
    firstName: 'Shaun',
    lastName: 'Park',
    userName: '',
    city: '',
    state: '',
    zip: '',
    isTerms: false,
  });
  const isSubmitForm6 = ref(false);
  const rules6 = {
    form6: {
      firstName: { required },
      lastName: { required },
      userName: { required },
      city: { required },
      state: { required },
      zip: { required },
      isTerms: {
        sameAsRawValue: sameAs(true),
      },
    },
  };
  const $v6 = useVuelidate(rules6, { form6 });
  const submitForm6 = () => {
    isSubmitForm6.value = true;
    $v6.value.form6.$touch();
    if ($v6.value.form6.$invalid) {
      return false;
    }
    //form validated success
    showMessage('Form submitted successfully.');
  };
<\/script>
`,-1),Cs=Ve({__name:"validation",setup(r){Re({title:"Form Validation"});const{codeArr:a,toggleCode:o}=Te(),s=V({name:""}),n=V(!1),k=H({form1:{name:{required:A}}},{form1:s}),d=()=>{if(n.value=!0,k.value.form1.$touch(),k.value.form1.$invalid)return!1;U("Form submitted successfully.")},y=V({email:""}),c=V(!1),f=H({form2:{email:{required:A,email:Ke}}},{form2:y}),C=()=>{if(c.value=!0,f.value.form2.$touch(),f.value.form2.$invalid)return!1;U("Form submitted successfully.")},w=V({select:""}),l=V(!1),u=H({form3:{select:{required:A}}},{form3:w}),L=()=>{if(l.value=!0,u.value.form3.$touch(),u.value.form3.$invalid)return!1;U("Form submitted successfully.")},R=V({firstName:"Shaun",lastName:"Park",userName:"",city:"",state:"",zip:"",isTerms:!1}),N=V(!1),Q={form4:{firstName:{required:A},lastName:{required:A},userName:{required:A},city:{required:A},state:{required:A},zip:{required:A},isTerms:{sameAsRawValue:be(!0)}}},$=H(Q,{form4:R}),X=()=>{if(N.value=!0,$.value.form4.$touch(),$.value.form4.$invalid)return!1;U("Form submitted successfully.")},j=V({firstName:"Shaun",lastName:"Park",userName:"",city:"",state:"",zip:"",isTerms:!1}),re=()=>{U("Form submitted successfully.")},T=V({firstName:"Shaun",lastName:"Park",userName:"",city:"",state:"",zip:"",isTerms:!1}),E=V(!1),se={form6:{firstName:{required:A},lastName:{required:A},userName:{required:A},city:{required:A},state:{required:A},zip:{required:A},isTerms:{sameAsRawValue:be(!0)}}},x=H(se,{form6:T}),W=()=>{if(E.value=!0,x.value.form6.$touch(),x.value.form6.$invalid)return!1;U("Form submitted successfully.")},U=(K="",i="success")=>{ze.mixin({toast:!0,position:"top",showConfirmButton:!1,timer:3e3,customClass:{container:"toast"}}).fire({icon:i,title:K,padding:"10px 20px"})};return(K,i)=>(v(),_("div",null,[st,e("div",ot,[at,e("div",lt,[e("div",it,[e("div",nt,[mt,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[0]||(i[0]=m=>t(o)("code1"))},dt)]),e("div",ct,[e("form",{class:"space-y-5",onSubmit:i[2]||(i[2]=B(m=>d(),["prevent"]))},[e("div",{class:q({"has-error":t(k).form1.name.$error,"has-success":n.value&&!t(k).form1.name.$error})},[pt,F(e("input",{id:"fullName",type:"text",placeholder:"Enter Full Name",class:"form-input","onUpdate:modelValue":i[1]||(i[1]=m=>s.value.name=m)},null,512),[[z,s.value.name]]),n.value&&!t(k).form1.name.$error?(v(),_("p",ft,"Looks Good!")):h("",!0),n.value&&t(k).form1.name.$error?(v(),_("p",vt,"Please fill the Name")):h("",!0)],2),ht],32)]),t(a).includes("code1")?(v(),I(Y,{key:0},{default:D(()=>[bt]),_:1})):h("",!0)]),e("div",$t,[e("div",gt,[yt,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[3]||(i[3]=m=>t(o)("code2"))},_t)]),e("div",kt,[e("form",{class:"space-y-5",onSubmit:i[5]||(i[5]=B(m=>C(),["prevent"]))},[e("div",{class:q({"has-error":t(f).form2.email.$error,"has-success":c.value&&!t(f).form2.email.$error})},[wt,F(e("input",{id:"Email",type:"text",placeholder:"Enter Email",class:"form-input","onUpdate:modelValue":i[4]||(i[4]=m=>y.value.email=m)},null,512),[[z,y.value.email]]),c.value&&!t(f).form2.email.$error?(v(),_("p",Nt,"Looks Good!")):h("",!0),c.value&&t(f).form2.email.$error?(v(),_("p",Ft,"Please fill the Email")):h("",!0)],2),St],32)]),t(a).includes("code2")?(v(),I(Y,{key:0},{default:D(()=>[Ct]),_:1})):h("",!0)]),e("div",Et,[e("div",Lt,[Vt,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[6]||(i[6]=m=>t(o)("code3"))},Pt)]),e("div",zt,[e("form",{class:"space-y-5",onSubmit:i[8]||(i[8]=B(m=>L(),["prevent"]))},[e("div",{class:q({"has-error":t(u).form3.select.$error,"has-success":l.value&&!t(u).form3.select.$error})},[F(e("select",{class:"form-select text-white-dark","onUpdate:modelValue":i[7]||(i[7]=m=>w.value.select=m)},Ut,512),[[Pe,w.value.select]]),l.value&&!t(u).form3.select.$error?(v(),_("p",Mt,"Example valid custom select feedback")):h("",!0),l.value&&t(u).form3.select.$error?(v(),_("p",Ot,"Please Select the field")):h("",!0)],2),Gt],32)]),t(a).includes("code3")?(v(),I(Y,{key:0},{default:D(()=>[Zt]),_:1})):h("",!0)]),e("div",Bt,[e("div",It,[Dt,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[9]||(i[9]=m=>t(o)("code4"))},Wt)]),e("div",Ht,[e("form",{class:"space-y-5",onSubmit:i[17]||(i[17]=B(m=>X(),["prevent"]))},[e("div",Jt,[e("div",{class:q({"has-error":t($).form4.firstName.$error,"has-success":N.value&&!t($).form4.firstName.$error})},[Qt,F(e("input",{id:"customFname",type:"text",placeholder:"Enter First Name",class:"form-input","onUpdate:modelValue":i[10]||(i[10]=m=>R.value.firstName=m)},null,512),[[z,R.value.firstName]]),N.value&&!t($).form4.firstName.$error?(v(),_("p",Xt,"Looks Good!")):h("",!0),N.value&&t($).form4.firstName.$error?(v(),_("p",Kt,"Please fill the first name")):h("",!0)],2),e("div",{class:q({"has-error":t($).form4.lastName.$error,"has-success":N.value&&!t($).form4.lastName.$error})},[er,F(e("input",{id:"customLname",type:"text",placeholder:"Enter Last Name",class:"form-input","onUpdate:modelValue":i[11]||(i[11]=m=>R.value.lastName=m)},null,512),[[z,R.value.lastName]]),N.value&&!t($).form4.lastName.$error?(v(),_("p",tr,"Looks Good!")):h("",!0),N.value&&t($).form4.lastName.$error?(v(),_("p",rr,"Please fill the last name")):h("",!0)],2),e("div",{class:q({"has-error":t($).form4.userName.$error,"has-success":N.value&&!t($).form4.userName.$error})},[sr,e("div",or,[ar,F(e("input",{id:"customeEmail",type:"text",placeholder:"Enter Username",class:"form-input ltr:rounded-l-none rtl:rounded-r-none","onUpdate:modelValue":i[12]||(i[12]=m=>R.value.userName=m)},null,512),[[z,R.value.userName]])]),N.value&&!t($).form4.userName.$error?(v(),_("p",lr,"Looks Good!")):h("",!0),N.value&&t($).form4.userName.$error?(v(),_("p",ir,"Please choose a userName")):h("",!0)],2)]),e("div",nr,[e("div",{class:q(["md:col-span-2",{"has-error":t($).form4.city.$error,"has-success":N.value&&!t($).form4.city.$error}])},[mr,F(e("input",{id:"customeCity",type:"text",placeholder:"Enter City",class:"form-input","onUpdate:modelValue":i[13]||(i[13]=m=>R.value.city=m)},null,512),[[z,R.value.city]]),N.value&&!t($).form4.city.$error?(v(),_("p",ur,"Looks Good!")):h("",!0),N.value&&t($).form4.city.$error?(v(),_("p",dr,"Please provide a valid city")):h("",!0)],2),e("div",{class:q({"has-error":t($).form4.state.$error,"has-success":N.value&&!t($).form4.state.$error})},[cr,F(e("input",{id:"customeState",type:"text",placeholder:"Enter State",class:"form-input","onUpdate:modelValue":i[14]||(i[14]=m=>R.value.state=m)},null,512),[[z,R.value.state]]),N.value&&!t($).form4.state.$error?(v(),_("p",pr,"Looks Good!")):h("",!0),N.value&&t($).form4.state.$error?(v(),_("p",fr,"Please provide a valid state")):h("",!0)],2),e("div",{class:q({"has-error":t($).form4.zip.$error,"has-success":N.value&&!t($).form4.zip.$error})},[vr,F(e("input",{id:"customeZip",type:"text",placeholder:"Enter Zip",class:"form-input","onUpdate:modelValue":i[15]||(i[15]=m=>R.value.zip=m)},null,512),[[z,R.value.zip]]),N.value&&!t($).form4.zip.$error?(v(),_("p",hr,"Looks Good!")):h("",!0),N.value&&t($).form4.zip.$error?(v(),_("p",br,"Please provide a valid zip")):h("",!0)],2)]),e("div",{class:q({"has-error":t($).form4.isTerms.$error,"has-success":N.value&&!t($).form4.isTerms.$error})},[e("label",$r,[F(e("input",{type:"checkbox",class:"form-checkbox","onUpdate:modelValue":i[16]||(i[16]=m=>R.value.isTerms=m)},null,512),[[oe,R.value.isTerms]]),gr]),N.value&&t($).form4.isTerms.$error?(v(),_("p",yr,"You must agree before submitting.")):h("",!0)],2),xr],32)]),t(a).includes("code4")?(v(),I(Y,{key:0},{default:D(()=>[_r]),_:1})):h("",!0)]),e("div",kr,[e("div",wr,[Nr,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[18]||(i[18]=m=>t(o)("code5"))},Sr)]),e("div",Cr,[e("form",{class:"space-y-5",onSubmit:i[26]||(i[26]=B(m=>re(),["prevent"]))},[e("div",Er,[e("div",null,[Lr,F(e("input",{id:"browserFname",type:"text",placeholder:"Enter First Name","onUpdate:modelValue":i[19]||(i[19]=m=>j.value.firstName=m),class:"form-input",required:""},null,512),[[z,j.value.firstName]])]),e("div",null,[Vr,F(e("input",{id:"browserLname",type:"text",placeholder:"Enter Last name","onUpdate:modelValue":i[20]||(i[20]=m=>j.value.lastName=m),class:"form-input",required:""},null,512),[[z,j.value.lastName]])]),e("div",null,[Rr,e("div",Pr,[zr,F(e("input",{id:"browserEmail",type:"text",placeholder:"Enter Username","onUpdate:modelValue":i[21]||(i[21]=m=>j.value.userName=m),class:"form-input ltr:rounded-l-none rtl:rounded-r-none",required:""},null,512),[[z,j.value.userName]])])])]),e("div",Tr,[e("div",jr,[qr,F(e("input",{id:"browserCity",type:"text",placeholder:"Enter City","onUpdate:modelValue":i[22]||(i[22]=m=>j.value.city=m),class:"form-input",required:""},null,512),[[z,j.value.city]])]),e("div",null,[Ar,F(e("input",{id:"browserState",type:"text",placeholder:"Enter State","onUpdate:modelValue":i[23]||(i[23]=m=>j.value.state=m),class:"form-input",required:""},null,512),[[z,j.value.state]])]),e("div",null,[Ur,F(e("input",{id:"browserZip",type:"text",placeholder:"Enter Zip","onUpdate:modelValue":i[24]||(i[24]=m=>j.value.zip=m),class:"form-input",required:""},null,512),[[z,j.value.zip]])])]),e("div",null,[e("label",Mr,[F(e("input",{type:"checkbox",class:"form-checkbox","onUpdate:modelValue":i[25]||(i[25]=m=>j.value.isTerms=m),required:""},null,512),[[oe,j.value.isTerms]]),Or])]),Gr],32)]),t(a).includes("code5")?(v(),I(Y,{key:0},{default:D(()=>[Zr]),_:1})):h("",!0)]),e("div",Br,[e("div",Ir,[Dr,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[27]||(i[27]=m=>t(o)("code6"))},Wr)]),e("div",Hr,[e("form",{class:"space-y-5",onSubmit:i[35]||(i[35]=B(m=>W(),["prevent"]))},[e("div",Jr,[e("div",{class:q({"has-error":t(x).form6.firstName.$error,"has-success":E.value&&!t(x).form6.firstName.$error})},[Qr,F(e("input",{id:"tlpFname",type:"text",placeholder:"Enter First Name",class:"form-input mb-2","onUpdate:modelValue":i[28]||(i[28]=m=>T.value.firstName=m)},null,512),[[z,T.value.firstName]]),E.value&&!t(x).form6.firstName.$error?(v(),_("span",Xr,"Looks Good!")):h("",!0),E.value&&t(x).form6.firstName.$error?(v(),_("span",Kr,"Please fill the first Name")):h("",!0)],2),e("div",{class:q({"has-error":t(x).form6.lastName.$error,"has-success":E.value&&!t(x).form6.lastName.$error})},[es,F(e("input",{id:"tlpLname",type:"text",placeholder:"Enter Last Name",class:"form-input mb-2","onUpdate:modelValue":i[29]||(i[29]=m=>T.value.lastName=m)},null,512),[[z,T.value.lastName]]),E.value&&!t(x).form6.lastName.$error?(v(),_("span",ts,"Looks Good!")):h("",!0),E.value&&t(x).form6.lastName.$error?(v(),_("span",rs,"Please fill the last Name")):h("",!0)],2),e("div",{class:q({"has-error":t(x).form6.userName.$error,"has-success":E.value&&!t(x).form6.userName.$error})},[ss,e("div",os,[as,F(e("input",{id:"tlpEmail",type:"text",placeholder:"Enter Username",class:"form-input ltr:rounded-l-none rtl:rounded-r-none","onUpdate:modelValue":i[30]||(i[30]=m=>T.value.userName=m)},null,512),[[z,T.value.userName]])]),e("div",ls,[E.value&&!t(x).form6.userName.$error?(v(),_("span",is,"Looks Good!")):h("",!0),E.value&&t(x).form6.userName.$error?(v(),_("span",ns,"Please choose a userName.")):h("",!0)])],2)]),e("div",ms,[e("div",{class:q(["md:col-span-2",{"has-error":t(x).form6.city.$error,"has-success":E.value&&!t(x).form6.city.$error}])},[us,F(e("input",{id:"tlpCity",type:"text",placeholder:"Enter City",class:"form-input mb-2","onUpdate:modelValue":i[31]||(i[31]=m=>T.value.city=m)},null,512),[[z,T.value.city]]),E.value&&!t(x).form6.city.$error?(v(),_("span",ds,"Looks Good!")):h("",!0),E.value&&t(x).form6.city.$error?(v(),_("span",cs,"Please provide a valid city.")):h("",!0)],2),e("div",{class:q({"has-error":t(x).form6.state.$error,"has-success":E.value&&!t(x).form6.state.$error})},[ps,F(e("input",{id:"tlpState",type:"text",placeholder:"Enter State",class:"form-input mb-2","onUpdate:modelValue":i[32]||(i[32]=m=>T.value.state=m)},null,512),[[z,T.value.state]]),E.value&&!t(x).form6.state.$error?(v(),_("span",fs,"Looks Good!")):h("",!0),E.value&&t(x).form6.state.$error?(v(),_("span",vs,"Please provide a valid state.")):h("",!0)],2),e("div",{class:q({"has-error":t(x).form6.zip.$error,"has-success":E.value&&!t(x).form6.zip.$error})},[hs,F(e("input",{id:"tlpZip",type:"text",placeholder:"Enter Zip",class:"form-input mb-2","onUpdate:modelValue":i[33]||(i[33]=m=>T.value.zip=m)},null,512),[[z,T.value.zip]]),E.value&&!t(x).form6.zip.$error?(v(),_("span",bs,"Looks Good!")):h("",!0),E.value&&t(x).form6.zip.$error?(v(),_("span",$s,"Please provide a valid Zip.")):h("",!0)],2)]),e("div",{class:q({"has-error":t(x).form6.isTerms.$error,"has-success":E.value&&!t(x).form6.isTerms.$error})},[e("label",gs,[F(e("input",{type:"checkbox",class:"form-checkbox","onUpdate:modelValue":i[34]||(i[34]=m=>T.value.isTerms=m)},null,512),[[oe,T.value.isTerms]]),ys]),E.value&&t(x).form6.isTerms.$error?(v(),_("div",xs,ks)):h("",!0)],2),ws],32)]),t(a).includes("code6")?(v(),I(Y,{key:0},{default:D(()=>[Ns]),_:1})):h("",!0)])])])]))}});export{Cs as default};
