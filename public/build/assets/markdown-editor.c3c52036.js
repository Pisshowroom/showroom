import{c as f,_ as u}from"./codePreview.e48b254d.js";import{d as k,u as w,r as p,o as r,b,e,g as s,f as h,Y as m,w as g,p as v,i as a,j as y}from"./main.ef0078b2.js";const x=e("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[e("li",null,[e("a",{href:"javascript:;",class:"text-primary hover:underline"},"Forms")]),e("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[e("span",null,"Markdown Editor")])],-1),_={class:"pt-5 space-y-8"},C=a('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/vue3-easymde" target="_blank" class="block hover:underline">https://www.npmjs.com/package/vue3-easymde</a></div>',1),L={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},B={class:"panel"},M={class:"flex items-center justify-between mb-5"},q=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Basic",-1),V=a('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),j=[V],U={class:"markdown-editor mb-5 rtl:text-right prose dark:prose-invert"},E=e("pre",null,`<!-- basic -->
<vue-easymde v-model="content1" ref="editor1" :highlight="true" :configs="{ spellChecker: false }" />

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  const content1 = ref(\`# Basic Example
  Go ahead, play around with the editor! Be sure to check out **bold** and *italic* styling, or even[links](https://google.com). You can type the Markdown syntax, use the toolbar, or use shortcuts like 'cmd-b' or 'ctrl-b'.

  ## Lists
  Unordered lists can be started using the toolbar or by typing '*', '-', or '+'. Ordered lists can be started by typing '1.'.

  #### Unordered
  * Lists are a piece of cake
  * They even auto continue as you type
  * A double enter will end them
  * Tabs and shift - tabs work too

  #### Ordered
  1. Numbered lists...
  2. ...work too!

  ## What about images?
  ![Yes](https://i.imgur.com/sZlktY7.png)\`);
<\/script>
`,-1),Y={class:"panel"},A={class:"flex items-center justify-between mb-5"},N=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Autosaving",-1),O=a('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),T=[O],W={class:"markdown-editor mb-5 rtl:text-right prose dark:prose-invert"},D=e("pre",null,`<!-- basic -->
<vue-easymde v-model="content2" ref="editor2" :highlight="true" :configs="{ spellChecker: false, autosave: { enabled: true, delay: 1000, uniqueId: 'mde-autosave-demo' } }" />

<!-- script -->
<script lang="ts" setup>
  import { ref } from 'vue';
  const content2 = ref(\`
  # Autosaving!

  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  By default, it saves every 10 seconds, but this can be changed. When this textarea is included in a form, it will automatically forget the saved value when the form is submitted.
  \`);
<\/script>
`,-1),F=k({__name:"markdown-editor",setup(Z){w({title:"Markdown Editor"});const{codeArr:i,toggleCode:n}=f(),l=p(`# Basic Example
Go ahead, play around with the editor! Be sure to check out **bold** and *italic* styling, or even[links](https://google.com). You can type the Markdown syntax, use the toolbar, or use shortcuts like 'cmd-b' or 'ctrl-b'.

## Lists
Unordered lists can be started using the toolbar or by typing '*', '-', or '+'. Ordered lists can be started by typing '1.'.

#### Unordered
* Lists are a piece of cake
* They even auto continue as you type
* A double enter will end them
* Tabs and shift - tabs work too

#### Ordered
1. Numbered lists...
2. ...work too!

## What about images?
![Yes](https://i.imgur.com/sZlktY7.png)`),d=p(`
# Autosaving!

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

By default, it saves every 10 seconds, but this can be changed. When this textarea is included in a form, it will automatically forget the saved value when the form is submitted.
`);return($,t)=>{const c=y("vue-easymde");return r(),b("div",null,[x,e("div",_,[C,e("div",L,[e("div",B,[e("div",M,[q,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[0]||(t[0]=o=>s(n)("code1"))},j)]),e("div",U,[h(c,{modelValue:l.value,"onUpdate:modelValue":t[1]||(t[1]=o=>l.value=o),ref:"editor1",highlight:!0,configs:{spellChecker:!1}},null,8,["modelValue"])]),s(i).includes("code1")?(r(),m(u,{key:0},{default:g(()=>[E]),_:1})):v("",!0)]),e("div",Y,[e("div",A,[N,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[2]||(t[2]=o=>s(n)("code2"))},T)]),e("div",W,[h(c,{modelValue:d.value,"onUpdate:modelValue":t[3]||(t[3]=o=>d.value=o),ref:"editor2",highlight:!0,configs:{spellChecker:!1,autosave:{enabled:!0,delay:1e3,uniqueId:"mde-autosave-demo"}}},null,8,["modelValue"])]),s(i).includes("code2")?(r(),m(u,{key:0},{default:g(()=>[D]),_:1})):v("",!0)])])])])}}});export{F as default};
