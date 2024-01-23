import{c as u,_ as r}from"./codePreview.ce436f36.js";import{F as c}from"./file-upload-with-preview.esm.fbf56fa2.js";import{y as _,z as f,H as v,o as a,d as h,e,q as s,a6 as n,D as p,M as d,F as t}from"./main.4500d6ff.js";const g=e("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[e("li",null,[e("a",{href:"javascript:;",class:"text-primary hover:underline"},"Forms")]),e("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[e("span",null,"File Upload")])],-1),w={class:"pt-5 space-y-8"},b=t('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/file-upload-with-preview" target="_blank" class="block hover:underline">https://www.npmjs.com/package/file-upload-with-preview</a></div>',1),k={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},C={class:"panel"},x={class:"flex items-center justify-between mb-5"},y=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Single File Upload",-1),I=t('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),F=[I],M=t('<div class="mb-5"><div class="custom-file-container" data-upload-id="myFirstImage"><div class="label-container"><label>Upload </label> <a href="javascript:;" class="custom-file-container__image-clear" title="Clear Image">\xD7</a></div><label class="custom-file-container__custom-file"><input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*"><input type="hidden" name="MAX_FILE_SIZE" value="10485760"><span class="custom-file-container__custom-file__custom-file-control ltr:pr-20 rtl:pl-20"></span></label><div class="custom-file-container__image-preview"></div></div></div>',1),L=e("pre",null,`<!-- single file -->
<div class="custom-file-container" data-upload-id="myFirstImage">
  <div class="label-container"><label>Upload </label> <a href="javascript:;" class="custom-file-container__image-clear" title="Clear Image">\xD7</a></div>
  <label class="custom-file-container__custom-file">
    <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" />
    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
    <span class="custom-file-container__custom-file__custom-file-control ltr:pr-20 rtl:pl-20"></span>
  </label>
  <div class="custom-file-container__image-preview"></div>
</div>

<!-- script -->
<script lang="ts" setup>
  import { onMounted } from 'vue';
  import FileUploadWithPreview from 'file-upload-with-preview';
  import 'file-upload-with-preview/dist/file-upload-with-preview.min.css';
  import '@/assets/css/file-upload-with-preview.min.css';

  onMounted(() => {
    // single image upload
    new FileUploadWithPreview('myFirstImage', {
      images: {
        baseImage: '/assets/images/file-preview.svg',
        backgroundImage: '',
      },
    });
  });
<\/script>
`,-1),U={class:"panel"},j={class:"flex items-center justify-between mb-5"},S=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Multiple File",-1),E=t('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),B=[E],D=t('<div class="mb-5"><div class="custom-file-container" data-upload-id="mySecondImage"><div class="label-container"><label>Upload </label> <a href="javascript:;" class="custom-file-container__image-clear" title="Clear Image">\xD7</a></div><label class="custom-file-container__custom-file"><input type="file" class="custom-file-container__custom-file__custom-file-input" multiple><input type="hidden" name="MAX_FILE_SIZE" value="10485760"><span class="custom-file-container__custom-file__custom-file-control ltr:pr-20 rtl:pl-20"></span></label><div class="custom-file-container__image-preview"></div></div></div>',1),P=e("pre",null,`<!-- multiple file -->
<div class="custom-file-container" data-upload-id="mySecondImage">
  <div class="label-container"><label>Upload </label> <a href="javascript:;" class="custom-file-container__image-clear" title="Clear Image">\xD7</a></div>
  <label class="custom-file-container__custom-file">
    <input type="file" class="custom-file-container__custom-file__custom-file-input" multiple />
    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
    <span class="custom-file-container__custom-file__custom-file-control ltr:pr-20 rtl:pl-20"></span>
  </label>
  <div class="custom-file-container__image-preview"></div>
</div>

<!-- script -->
<script lang="ts" setup>
  import { onMounted } from 'vue';
  import FileUploadWithPreview from 'file-upload-with-preview';
  import 'file-upload-with-preview/dist/file-upload-with-preview.min.css';
  import '@/assets/css/file-upload-with-preview.min.css';

  onMounted(() => {
    // multiple image upload
    new FileUploadWithPreview('mySecondImage', {
      images: {
        baseImage: '/assets/images/file-preview.svg',
        backgroundImage: '',
      },
      multiple: true,
    });
  });
<\/script>
`,-1),N=_({__name:"file-upload",setup(A){f({title:"File Upload"});const{codeArr:l,toggleCode:o}=u();return v(()=>{new c("myFirstImage",{images:{baseImage:"/assets/images/file-preview.svg",backgroundImage:""}}),new c("mySecondImage",{images:{baseImage:"/assets/images/file-preview.svg",backgroundImage:""},multiple:!0})}),(V,i)=>(a(),h("div",null,[g,e("div",w,[b,e("div",k,[e("div",C,[e("div",x,[y,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[0]||(i[0]=m=>s(o)("code1"))},F)]),M,s(l).includes("code1")?(a(),n(r,{key:0},{default:p(()=>[L]),_:1})):d("",!0)]),e("div",U,[e("div",j,[S,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:i[1]||(i[1]=m=>s(o)("code2"))},B)]),D,s(l).includes("code2")?(a(),n(r,{key:0},{default:p(()=>[P]),_:1})):d("",!0)])])])]))}});export{N as default};
