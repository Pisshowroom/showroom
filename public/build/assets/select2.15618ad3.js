import{c as y,_ as c}from"./codePreview.ce436f36.js";import{M as d}from"./vue3-multiselect.umd.min.0711e75d.js";/* empty css                         */import{y as L,z as M,r as o,o as a,d as V,e,q as s,C as u,a6 as p,D as m,M as h,F as r}from"./main.4500d6ff.js";const O=e("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[e("li",null,[e("a",{href:"javascript:;",class:"text-primary hover:underline"},"Forms")]),e("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[e("span",null,"Select2")])],-1),B={class:"pt-5 space-y-8"},j=r('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/@suadelabs/vue3-multiselect" target="_blank" class="block hover:underline">https://www.npmjs.com/package/@suadelabs/vue3-multiselect</a></div>',1),P={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},S={class:"panel"},W={class:"flex items-center justify-between mb-5"},$=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Basic",-1),G=r('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),U=[G],D={class:"mb-5"},N=e("pre",null,`<!-- basic -->
<multiselect
  v-model="input1"
  :options="options"
  class="custom-multiselect"
  :searchable="false"
  :preselect-first="true"
  :allow-empty="false"
  selected-label=""
  select-label=""
  deselect-label=""
></multiselect>

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  import Multiselect from '@suadelabs/vue3-multiselect';
  import '@suadelabs/vue3-multiselect/dist/vue3-multiselect.css';

  const options = ref(['Orange', 'White', 'Purple']);
  const input1 = ref('Orange');
<\/script>
`,-1),q={class:"panel"},A={class:"flex items-center justify-between mb-5"},F=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Nested",-1),R=r('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Y=[R],z={class:"mb-5"},E=e("pre",null,`<!-- nested -->
<multiselect
  v-model="input2"
  :options="options2"
  class="custom-multiselect"
  :searchable="false"
  :allow-empty="false"
  group-values="list"
  group-label="group_name"
  placeholder="Select Option"
  track-by="name"
  label="name"
  :preselect-first="true"
  selected-label=""
  select-label=""
  deselect-label=""
></multiselect>

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  import Multiselect from '@suadelabs/vue3-multiselect';
  import '@suadelabs/vue3-multiselect/dist/vue3-multiselect.css';

  const options2 = ref([
    {
      group_name: 'Group 1',
      list: [{ name: 'Orange' }, { name: 'White' }, { name: 'Purple' }],
    },
    {
      group_name: 'Group 2',
      list: [{ name: 'Yellow' }, { name: 'Red' }, { name: 'Green' }],
    },
    {
      group_name: 'Group 3',
      list: [{ name: 'Aqua' }, { name: 'Black' }, { name: 'Blue' }],
    },
  ]);
  const input2 = ref({ name: 'Orange' });
<\/script>
`,-1),Z={class:"panel"},H={class:"flex items-center justify-between mb-5"},I=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Disabling options",-1),J=r('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),K=[J],Q={class:"mb-5"},T=e("pre",null,`<!-- disabling options -->
<multiselect
  v-model="input3"
  :options="options3"
  class="custom-multiselect"
  :searchable="false"
  :allow-empty="false"
  track-by="name"
  label="name"
  :preselect-first="true"
  selected-label=""
  select-label=""
  deselect-label=""
></multiselect>

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  import Multiselect from '@suadelabs/vue3-multiselect';
  import '@suadelabs/vue3-multiselect/dist/vue3-multiselect.css';

  const options3 = ref([{ name: 'Orange' }, { name: 'White', $isDisabled: true }, { name: 'Purple' }]);
  const input3 = ref({ name: 'Orange' });
<\/script>
`,-1),X={class:"panel lg:row-start-3"},ee={class:"flex items-center justify-between mb-5"},te=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Placeholder",-1),se=r('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),le=[se],oe={class:"mb-5"},ae=e("pre",null,`<!-- placeholder -->
<multiselect v-model="input4" :options="options" class="custom-multiselect" :searchable="false" placeholder="Choose..." selected-label="" select-label="" deselect-label=""></multiselect>

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  import Multiselect from '@suadelabs/vue3-multiselect';
  import '@suadelabs/vue3-multiselect/dist/vue3-multiselect.css';

  const options = ref(['Orange', 'White', 'Purple']);
  const input4 = ref('');
<\/script>
`,-1),re={class:"panel"},ie={class:"flex items-center justify-between mb-5"},ne=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Searchable",-1),ce=r('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),de=[ce],ue={class:"mb-5"},pe=e("pre",null,`<!-- searchable -->
<multiselect
  v-model="input5"
  :options="options"
  class="custom-multiselect"
  :searchable="true"
  placeholder="Select an option"
  selected-label=""
  select-label=""
  deselect-label=""
></multiselect>

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  import Multiselect from '@suadelabs/vue3-multiselect';
  import '@suadelabs/vue3-multiselect/dist/vue3-multiselect.css';

  const options = ref(['Orange', 'White', 'Purple']);
  const input5 = ref('');
<\/script>
`,-1),me={class:"panel"},he={class:"flex items-center justify-between mb-5"},ve=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Multiple select",-1),fe=r('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),be=[fe],ge={class:"mb-5"},ke=e("pre",null,`<!-- multiple -->
<multiselect
  v-model="input6"
  :options="options"
  class="custom-multiselect"
  :multiple="true"
  :searchable="false"
  placeholder="Select an option"
  selected-label=""
  select-label=""
  deselect-label=""
>
</multiselect>

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  import Multiselect from '@suadelabs/vue3-multiselect';
  import '@suadelabs/vue3-multiselect/dist/vue3-multiselect.css';

  const options = ref(['Orange', 'White', 'Purple']);
  const input6 = ref([]);
<\/script>
`,-1),Me=L({__name:"select2",setup(we){M({title:"Vue Multiselect"});const{codeArr:i,toggleCode:n}=y(),v=o(["Orange","White","Purple"]),f=o("Orange"),C=o([{group_name:"Group 1",list:[{name:"Orange"},{name:"White"},{name:"Purple"}]},{group_name:"Group 2",list:[{name:"Yellow"},{name:"Red"},{name:"Green"}]},{group_name:"Group 3",list:[{name:"Aqua"},{name:"Black"},{name:"Blue"}]}]),b=o({name:"Orange"}),x=o([{name:"Orange"},{name:"White",$isDisabled:!0},{name:"Purple"}]),g=o({name:"Orange"}),k=o(""),w=o(""),_=o([]);return(_e,t)=>(a(),V("div",null,[O,e("div",B,[j,e("div",P,[e("div",S,[e("div",W,[$,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[0]||(t[0]=l=>s(n)("code1"))},U)]),e("div",D,[u(s(d),{modelValue:f.value,"onUpdate:modelValue":t[1]||(t[1]=l=>f.value=l),options:v.value,class:"custom-multiselect",searchable:!1,"preselect-first":!0,"allow-empty":!1,"selected-label":"","select-label":"","deselect-label":""},null,8,["modelValue","options"])]),s(i).includes("code1")?(a(),p(c,{key:0},{default:m(()=>[N]),_:1})):h("",!0)]),e("div",q,[e("div",A,[F,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[2]||(t[2]=l=>s(n)("code2"))},Y)]),e("div",z,[u(s(d),{modelValue:b.value,"onUpdate:modelValue":t[3]||(t[3]=l=>b.value=l),options:C.value,class:"custom-multiselect",searchable:!1,"allow-empty":!1,"group-values":"list","group-label":"group_name",placeholder:"Select Option","track-by":"name",label:"name","preselect-first":!0,"selected-label":"","select-label":"","deselect-label":""},null,8,["modelValue","options"])]),s(i).includes("code2")?(a(),p(c,{key:0},{default:m(()=>[E]),_:1})):h("",!0)]),e("div",Z,[e("div",H,[I,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[4]||(t[4]=l=>s(n)("code3"))},K)]),e("div",Q,[u(s(d),{modelValue:g.value,"onUpdate:modelValue":t[5]||(t[5]=l=>g.value=l),options:x.value,class:"custom-multiselect",searchable:!1,"allow-empty":!1,"track-by":"name",label:"name","preselect-first":!0,"selected-label":"","select-label":"","deselect-label":""},null,8,["modelValue","options"])]),s(i).includes("code3")?(a(),p(c,{key:0},{default:m(()=>[T]),_:1})):h("",!0)]),e("div",X,[e("div",ee,[te,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[6]||(t[6]=l=>s(n)("code4"))},le)]),e("div",oe,[u(s(d),{modelValue:k.value,"onUpdate:modelValue":t[7]||(t[7]=l=>k.value=l),options:v.value,class:"custom-multiselect",searchable:!1,placeholder:"Choose...","selected-label":"","select-label":"","deselect-label":""},null,8,["modelValue","options"])]),s(i).includes("code4")?(a(),p(c,{key:0},{default:m(()=>[ae]),_:1})):h("",!0)]),e("div",re,[e("div",ie,[ne,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[8]||(t[8]=l=>s(n)("code5"))},de)]),e("div",ue,[u(s(d),{modelValue:w.value,"onUpdate:modelValue":t[9]||(t[9]=l=>w.value=l),options:v.value,class:"custom-multiselect",searchable:!0,placeholder:"Select an option","selected-label":"","select-label":"","deselect-label":""},null,8,["modelValue","options"])]),s(i).includes("code5")?(a(),p(c,{key:0},{default:m(()=>[pe]),_:1})):h("",!0)]),e("div",me,[e("div",he,[ve,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[10]||(t[10]=l=>s(n)("code6"))},be)]),e("div",ge,[u(s(d),{modelValue:_.value,"onUpdate:modelValue":t[11]||(t[11]=l=>_.value=l),options:v.value,class:"custom-multiselect",multiple:!0,searchable:!1,placeholder:"Select an option","selected-label":"","select-label":"","deselect-label":""},null,8,["modelValue","options"])]),s(i).includes("code6")?(a(),p(c,{key:0},{default:m(()=>[ke]),_:1})):h("",!0)])])])]))}});export{Me as default};
