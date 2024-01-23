import{y as H,z as J,r as y,o,d as l,e,q as t,w as F,I as p,f as d,v as c,M as a,a6 as S,D as C,Z as K,U as M,F as $,S as Q}from"./main.4500d6ff.js";import{c as W,_ as L}from"./codePreview.ce436f36.js";import{u as E,r as b,e as X,s as Z}from"./index.edcb7a78.js";const ee=e("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[e("li",null,[e("a",{href:"javascript:;",class:"text-primary hover:underline"},"Forms")]),e("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[e("span",null,"Validation")])],-1),te={class:"pt-5 space-y-8"},re=$('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/vuelidate" target="_blank" class="block hover:underline">https://www.npmjs.com/package/vuelidate</a></div>',1),se={class:"grid grid-cols-1 xl:grid-cols-2 gap-6"},oe={class:"panel"},ae={class:"flex items-center justify-between mb-5"},le=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Basic",-1),ie=$('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),me=[ie],de={class:"mb-5"},ne=e("label",{for:"fullName"},"Full Name",-1),ue={key:0,class:"text-[#1abc9c] mt-1"},ce={key:1,class:"text-danger mt-1"},pe=e("button",{type:"submit",class:"btn btn-primary !mt-6"},"Submit Form",-1),fe=e("pre",null,`<!-- basic -->
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
`,-1),ve={class:"panel"},be={class:"flex items-center justify-between mb-5"},he=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Email",-1),ye=$('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),$e=[ye],xe={class:"mb-5"},ge=e("label",{for:"Email"},"Email",-1),_e={key:0,class:"text-[#1abc9c] mt-1"},ke={key:1,class:"text-danger mt-1"},we=e("button",{type:"submit",class:"btn btn-primary !mt-6"},"Submit Form",-1),Ne=e("pre",null,`<!-- email -->
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
`,-1),Fe={class:"panel"},Se={class:"flex items-center justify-between mb-5"},Ce=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Select",-1),Le=$('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Ee=[Le],Ve={class:"mb-5"},ze=e("option",{value:""},"Open this select menu",-1),qe=e("option",{value:"1"},"One",-1),Pe=e("option",{value:"2"},"Two",-1),Te=e("option",{value:"3"},"Three",-1),Ue=[ze,qe,Pe,Te],Me={key:0,class:"text-[#1abc9c] mt-1"},Ge={key:1,class:"text-danger mt-1"},Ze=e("button",{type:"submit",class:"btn btn-primary !mt-6"},"Submit Form",-1),je=e("pre",null,`<!-- select -->
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
`,-1),Ae={class:"panel"},Be={class:"flex items-center justify-between mb-5"},De=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Custom Styles",-1),Oe=$('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Re=[Oe],Ye={class:"mb-5"},Ie={class:"grid grid-cols-1 md:grid-cols-3 gap-5"},He=e("label",{for:"customFname"},"First Name",-1),Je={key:0,class:"text-[#1abc9c] mt-1"},Ke={key:1,class:"text-danger mt-1"},Qe=e("label",{for:"customLname"},"Last name",-1),We={key:0,class:"text-[#1abc9c] mt-1"},Xe={key:1,class:"text-danger mt-1"},et=e("label",{for:"customeEmail"},"Username",-1),tt={class:"flex"},rt=e("div",{class:"bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"}," @ ",-1),st={key:0,class:"text-[#1abc9c] mt-1"},ot={key:1,class:"text-danger mt-1"},at={class:"grid grid-cols-1 md:grid-cols-4 gap-5"},lt=e("label",{for:"customeCity"},"City",-1),it={key:0,class:"text-[#1abc9c] mt-1"},mt={key:1,class:"text-danger mt-1"},dt=e("label",{for:"customeState"},"State",-1),nt={key:0,class:"text-[#1abc9c] mt-1"},ut={key:1,class:"text-danger mt-1"},ct=e("label",{for:"customeZip"},"Zip",-1),pt={key:0,class:"text-[#1abc9c] mt-1"},ft={key:1,class:"text-danger mt-1"},vt={class:"inline-flex cursor-pointer mt-1"},bt=e("span",{class:"text-white-dark"},"Agree to terms and conditions",-1),ht={key:0,class:"text-danger mt-1"},yt=e("button",{type:"submit",class:"btn btn-primary !mt-6"},"Submit Form",-1),$t=e("pre",null,`<!-- custom styles -->
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
`,-1),xt={class:"panel"},gt={class:"flex items-center justify-between mb-5"},_t=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Browser Default",-1),kt=$('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),wt=[kt],Nt={class:"mb-5"},Ft={class:"grid grid-cols-1 md:grid-cols-3 gap-5"},St=e("label",{for:"browserFname"},"First Name",-1),Ct=e("label",{for:"browserLname"},"Last name",-1),Lt=e("label",{for:"browserEmail"},"Username",-1),Et={class:"flex"},Vt=e("div",{class:"bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"}," @ ",-1),zt={class:"grid grid-cols-1 md:grid-cols-4 gap-5"},qt={class:"md:col-span-2"},Pt=e("label",{for:"browserCity"},"City",-1),Tt=e("label",{for:"browserState"},"State",-1),Ut=e("label",{for:"browserZip"},"Zip",-1),Mt={class:"flex items-center cursor-pointer mt-1"},Gt=e("span",{class:"text-white-dark"},"Agree to terms and conditions",-1),Zt=e("button",{type:"submit",class:"btn btn-primary !mt-6"},"Submit Form",-1),jt=e("pre",null,`<!-- browser default -->
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
`,-1),At={class:"panel"},Bt={class:"flex items-center justify-between mb-5"},Dt=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Tooltips",-1),Ot=$('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Rt=[Ot],Yt={class:"mb-5"},It={class:"grid grid-cols-1 md:grid-cols-3 gap-5"},Ht=e("label",{for:"tlpFname"},"First Name",-1),Jt={key:0,class:"text-white bg-[#1abc9c] py-1 px-2 rounded"},Kt={key:1,class:"text-white bg-danger py-1 px-2 rounded"},Qt=e("label",{for:"tlpLname"},"Last name",-1),Wt={key:0,class:"text-white bg-[#1abc9c] py-1 px-2 rounded"},Xt={key:1,class:"text-white bg-danger py-1 px-2 rounded"},er=e("label",{for:"tlpEmail"},"Username",-1),tr={class:"flex"},rr=e("div",{class:"bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"}," @ ",-1),sr={class:"mt-2"},or={key:0,class:"text-white bg-[#1abc9c] py-1 px-2 rounded"},ar={key:1,class:"text-white bg-danger py-1 px-2 rounded"},lr={class:"grid grid-cols-1 md:grid-cols-4 gap-5"},ir=e("label",{for:"tlpCity"},"City",-1),mr={key:0,class:"text-white bg-[#1abc9c] py-1 px-2 rounded"},dr={key:1,class:"text-white bg-danger py-1 px-2 rounded"},nr=e("label",{for:"tlpState"},"State",-1),ur={key:0,class:"text-white bg-[#1abc9c] py-1 px-2 rounded"},cr={key:1,class:"text-white bg-danger py-1 px-2 rounded"},pr=e("label",{for:"tlpZip"},"Zip",-1),fr={key:0,class:"text-white bg-[#1abc9c] py-1 px-2 rounded"},vr={key:1,class:"text-white bg-danger py-1 px-2 rounded"},br={class:"flex items-center cursor-pointer"},hr=e("span",{class:"text-white-dark"},"Agree to terms and conditions",-1),yr={key:0,class:"mt-2"},$r=e("span",{class:"text-white bg-danger py-1 px-2 rounded"},"You must agree before submitting.",-1),xr=[$r],gr=e("button",{type:"submit",class:"btn btn-primary !mt-6"},"Submit Form",-1),_r=e("pre",null,`<!-- tooltips -->
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
`,-1),Er=H({__name:"validation",setup(kr){J({title:"Form Validation"});const{codeArr:x,toggleCode:g}=W(),P=y({name:""}),V=y(!1),_=E({form1:{name:{required:b}}},{form1:P}),j=()=>{if(V.value=!0,_.value.form1.$touch(),_.value.form1.$invalid)return!1;N("Form submitted successfully.")},T=y({email:""}),z=y(!1),k=E({form2:{email:{required:b,email:X}}},{form2:T}),A=()=>{if(z.value=!0,k.value.form2.$touch(),k.value.form2.$invalid)return!1;N("Form submitted successfully.")},U=y({select:""}),q=y(!1),w=E({form3:{select:{required:b}}},{form3:U}),B=()=>{if(q.value=!0,w.value.form3.$touch(),w.value.form3.$invalid)return!1;N("Form submitted successfully.")},f=y({firstName:"Shaun",lastName:"Park",userName:"",city:"",state:"",zip:"",isTerms:!1}),n=y(!1),D={form4:{firstName:{required:b},lastName:{required:b},userName:{required:b},city:{required:b},state:{required:b},zip:{required:b},isTerms:{sameAsRawValue:Z(!0)}}},i=E(D,{form4:f}),O=()=>{if(n.value=!0,i.value.form4.$touch(),i.value.form4.$invalid)return!1;N("Form submitted successfully.")},h=y({firstName:"Shaun",lastName:"Park",userName:"",city:"",state:"",zip:"",isTerms:!1}),R=()=>{N("Form submitted successfully.")},v=y({firstName:"Shaun",lastName:"Park",userName:"",city:"",state:"",zip:"",isTerms:!1}),u=y(!1),Y={form6:{firstName:{required:b},lastName:{required:b},userName:{required:b},city:{required:b},state:{required:b},zip:{required:b},isTerms:{sameAsRawValue:Z(!0)}}},m=E(Y,{form6:v}),I=()=>{if(u.value=!0,m.value.form6.$touch(),m.value.form6.$invalid)return!1;N("Form submitted successfully.")},N=(G="",r="success")=>{Q.mixin({toast:!0,position:"top",showConfirmButton:!1,timer:3e3,customClass:{container:"toast"}}).fire({icon:r,title:G,padding:"10px 20px"})};return(G,r)=>(o(),l("div",null,[ee,e("div",te,[re,e("div",se,[e("div",oe,[e("div",ae,[le,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:r[0]||(r[0]=s=>t(g)("code1"))},me)]),e("div",de,[e("form",{class:"space-y-5",onSubmit:r[2]||(r[2]=F(s=>j(),["prevent"]))},[e("div",{class:p({"has-error":t(_).form1.name.$error,"has-success":V.value&&!t(_).form1.name.$error})},[ne,d(e("input",{id:"fullName",type:"text",placeholder:"Enter Full Name",class:"form-input","onUpdate:modelValue":r[1]||(r[1]=s=>P.value.name=s)},null,512),[[c,P.value.name]]),V.value&&!t(_).form1.name.$error?(o(),l("p",ue,"Looks Good!")):a("",!0),V.value&&t(_).form1.name.$error?(o(),l("p",ce,"Please fill the Name")):a("",!0)],2),pe],32)]),t(x).includes("code1")?(o(),S(L,{key:0},{default:C(()=>[fe]),_:1})):a("",!0)]),e("div",ve,[e("div",be,[he,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:r[3]||(r[3]=s=>t(g)("code2"))},$e)]),e("div",xe,[e("form",{class:"space-y-5",onSubmit:r[5]||(r[5]=F(s=>A(),["prevent"]))},[e("div",{class:p({"has-error":t(k).form2.email.$error,"has-success":z.value&&!t(k).form2.email.$error})},[ge,d(e("input",{id:"Email",type:"text",placeholder:"Enter Email",class:"form-input","onUpdate:modelValue":r[4]||(r[4]=s=>T.value.email=s)},null,512),[[c,T.value.email]]),z.value&&!t(k).form2.email.$error?(o(),l("p",_e,"Looks Good!")):a("",!0),z.value&&t(k).form2.email.$error?(o(),l("p",ke,"Please fill the Email")):a("",!0)],2),we],32)]),t(x).includes("code2")?(o(),S(L,{key:0},{default:C(()=>[Ne]),_:1})):a("",!0)]),e("div",Fe,[e("div",Se,[Ce,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:r[6]||(r[6]=s=>t(g)("code3"))},Ee)]),e("div",Ve,[e("form",{class:"space-y-5",onSubmit:r[8]||(r[8]=F(s=>B(),["prevent"]))},[e("div",{class:p({"has-error":t(w).form3.select.$error,"has-success":q.value&&!t(w).form3.select.$error})},[d(e("select",{class:"form-select text-white-dark","onUpdate:modelValue":r[7]||(r[7]=s=>U.value.select=s)},Ue,512),[[K,U.value.select]]),q.value&&!t(w).form3.select.$error?(o(),l("p",Me,"Example valid custom select feedback")):a("",!0),q.value&&t(w).form3.select.$error?(o(),l("p",Ge,"Please Select the field")):a("",!0)],2),Ze],32)]),t(x).includes("code3")?(o(),S(L,{key:0},{default:C(()=>[je]),_:1})):a("",!0)]),e("div",Ae,[e("div",Be,[De,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:r[9]||(r[9]=s=>t(g)("code4"))},Re)]),e("div",Ye,[e("form",{class:"space-y-5",onSubmit:r[17]||(r[17]=F(s=>O(),["prevent"]))},[e("div",Ie,[e("div",{class:p({"has-error":t(i).form4.firstName.$error,"has-success":n.value&&!t(i).form4.firstName.$error})},[He,d(e("input",{id:"customFname",type:"text",placeholder:"Enter First Name",class:"form-input","onUpdate:modelValue":r[10]||(r[10]=s=>f.value.firstName=s)},null,512),[[c,f.value.firstName]]),n.value&&!t(i).form4.firstName.$error?(o(),l("p",Je,"Looks Good!")):a("",!0),n.value&&t(i).form4.firstName.$error?(o(),l("p",Ke,"Please fill the first name")):a("",!0)],2),e("div",{class:p({"has-error":t(i).form4.lastName.$error,"has-success":n.value&&!t(i).form4.lastName.$error})},[Qe,d(e("input",{id:"customLname",type:"text",placeholder:"Enter Last Name",class:"form-input","onUpdate:modelValue":r[11]||(r[11]=s=>f.value.lastName=s)},null,512),[[c,f.value.lastName]]),n.value&&!t(i).form4.lastName.$error?(o(),l("p",We,"Looks Good!")):a("",!0),n.value&&t(i).form4.lastName.$error?(o(),l("p",Xe,"Please fill the last name")):a("",!0)],2),e("div",{class:p({"has-error":t(i).form4.userName.$error,"has-success":n.value&&!t(i).form4.userName.$error})},[et,e("div",tt,[rt,d(e("input",{id:"customeEmail",type:"text",placeholder:"Enter Username",class:"form-input ltr:rounded-l-none rtl:rounded-r-none","onUpdate:modelValue":r[12]||(r[12]=s=>f.value.userName=s)},null,512),[[c,f.value.userName]])]),n.value&&!t(i).form4.userName.$error?(o(),l("p",st,"Looks Good!")):a("",!0),n.value&&t(i).form4.userName.$error?(o(),l("p",ot,"Please choose a userName")):a("",!0)],2)]),e("div",at,[e("div",{class:p(["md:col-span-2",{"has-error":t(i).form4.city.$error,"has-success":n.value&&!t(i).form4.city.$error}])},[lt,d(e("input",{id:"customeCity",type:"text",placeholder:"Enter City",class:"form-input","onUpdate:modelValue":r[13]||(r[13]=s=>f.value.city=s)},null,512),[[c,f.value.city]]),n.value&&!t(i).form4.city.$error?(o(),l("p",it,"Looks Good!")):a("",!0),n.value&&t(i).form4.city.$error?(o(),l("p",mt,"Please provide a valid city")):a("",!0)],2),e("div",{class:p({"has-error":t(i).form4.state.$error,"has-success":n.value&&!t(i).form4.state.$error})},[dt,d(e("input",{id:"customeState",type:"text",placeholder:"Enter State",class:"form-input","onUpdate:modelValue":r[14]||(r[14]=s=>f.value.state=s)},null,512),[[c,f.value.state]]),n.value&&!t(i).form4.state.$error?(o(),l("p",nt,"Looks Good!")):a("",!0),n.value&&t(i).form4.state.$error?(o(),l("p",ut,"Please provide a valid state")):a("",!0)],2),e("div",{class:p({"has-error":t(i).form4.zip.$error,"has-success":n.value&&!t(i).form4.zip.$error})},[ct,d(e("input",{id:"customeZip",type:"text",placeholder:"Enter Zip",class:"form-input","onUpdate:modelValue":r[15]||(r[15]=s=>f.value.zip=s)},null,512),[[c,f.value.zip]]),n.value&&!t(i).form4.zip.$error?(o(),l("p",pt,"Looks Good!")):a("",!0),n.value&&t(i).form4.zip.$error?(o(),l("p",ft,"Please provide a valid zip")):a("",!0)],2)]),e("div",{class:p({"has-error":t(i).form4.isTerms.$error,"has-success":n.value&&!t(i).form4.isTerms.$error})},[e("label",vt,[d(e("input",{type:"checkbox",class:"form-checkbox","onUpdate:modelValue":r[16]||(r[16]=s=>f.value.isTerms=s)},null,512),[[M,f.value.isTerms]]),bt]),n.value&&t(i).form4.isTerms.$error?(o(),l("p",ht,"You must agree before submitting.")):a("",!0)],2),yt],32)]),t(x).includes("code4")?(o(),S(L,{key:0},{default:C(()=>[$t]),_:1})):a("",!0)]),e("div",xt,[e("div",gt,[_t,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:r[18]||(r[18]=s=>t(g)("code5"))},wt)]),e("div",Nt,[e("form",{class:"space-y-5",onSubmit:r[26]||(r[26]=F(s=>R(),["prevent"]))},[e("div",Ft,[e("div",null,[St,d(e("input",{id:"browserFname",type:"text",placeholder:"Enter First Name","onUpdate:modelValue":r[19]||(r[19]=s=>h.value.firstName=s),class:"form-input",required:""},null,512),[[c,h.value.firstName]])]),e("div",null,[Ct,d(e("input",{id:"browserLname",type:"text",placeholder:"Enter Last name","onUpdate:modelValue":r[20]||(r[20]=s=>h.value.lastName=s),class:"form-input",required:""},null,512),[[c,h.value.lastName]])]),e("div",null,[Lt,e("div",Et,[Vt,d(e("input",{id:"browserEmail",type:"text",placeholder:"Enter Username","onUpdate:modelValue":r[21]||(r[21]=s=>h.value.userName=s),class:"form-input ltr:rounded-l-none rtl:rounded-r-none",required:""},null,512),[[c,h.value.userName]])])])]),e("div",zt,[e("div",qt,[Pt,d(e("input",{id:"browserCity",type:"text",placeholder:"Enter City","onUpdate:modelValue":r[22]||(r[22]=s=>h.value.city=s),class:"form-input",required:""},null,512),[[c,h.value.city]])]),e("div",null,[Tt,d(e("input",{id:"browserState",type:"text",placeholder:"Enter State","onUpdate:modelValue":r[23]||(r[23]=s=>h.value.state=s),class:"form-input",required:""},null,512),[[c,h.value.state]])]),e("div",null,[Ut,d(e("input",{id:"browserZip",type:"text",placeholder:"Enter Zip","onUpdate:modelValue":r[24]||(r[24]=s=>h.value.zip=s),class:"form-input",required:""},null,512),[[c,h.value.zip]])])]),e("div",null,[e("label",Mt,[d(e("input",{type:"checkbox",class:"form-checkbox","onUpdate:modelValue":r[25]||(r[25]=s=>h.value.isTerms=s),required:""},null,512),[[M,h.value.isTerms]]),Gt])]),Zt],32)]),t(x).includes("code5")?(o(),S(L,{key:0},{default:C(()=>[jt]),_:1})):a("",!0)]),e("div",At,[e("div",Bt,[Dt,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:r[27]||(r[27]=s=>t(g)("code6"))},Rt)]),e("div",Yt,[e("form",{class:"space-y-5",onSubmit:r[35]||(r[35]=F(s=>I(),["prevent"]))},[e("div",It,[e("div",{class:p({"has-error":t(m).form6.firstName.$error,"has-success":u.value&&!t(m).form6.firstName.$error})},[Ht,d(e("input",{id:"tlpFname",type:"text",placeholder:"Enter First Name",class:"form-input mb-2","onUpdate:modelValue":r[28]||(r[28]=s=>v.value.firstName=s)},null,512),[[c,v.value.firstName]]),u.value&&!t(m).form6.firstName.$error?(o(),l("span",Jt,"Looks Good!")):a("",!0),u.value&&t(m).form6.firstName.$error?(o(),l("span",Kt,"Please fill the first Name")):a("",!0)],2),e("div",{class:p({"has-error":t(m).form6.lastName.$error,"has-success":u.value&&!t(m).form6.lastName.$error})},[Qt,d(e("input",{id:"tlpLname",type:"text",placeholder:"Enter Last Name",class:"form-input mb-2","onUpdate:modelValue":r[29]||(r[29]=s=>v.value.lastName=s)},null,512),[[c,v.value.lastName]]),u.value&&!t(m).form6.lastName.$error?(o(),l("span",Wt,"Looks Good!")):a("",!0),u.value&&t(m).form6.lastName.$error?(o(),l("span",Xt,"Please fill the last Name")):a("",!0)],2),e("div",{class:p({"has-error":t(m).form6.userName.$error,"has-success":u.value&&!t(m).form6.userName.$error})},[er,e("div",tr,[rr,d(e("input",{id:"tlpEmail",type:"text",placeholder:"Enter Username",class:"form-input ltr:rounded-l-none rtl:rounded-r-none","onUpdate:modelValue":r[30]||(r[30]=s=>v.value.userName=s)},null,512),[[c,v.value.userName]])]),e("div",sr,[u.value&&!t(m).form6.userName.$error?(o(),l("span",or,"Looks Good!")):a("",!0),u.value&&t(m).form6.userName.$error?(o(),l("span",ar,"Please choose a userName.")):a("",!0)])],2)]),e("div",lr,[e("div",{class:p(["md:col-span-2",{"has-error":t(m).form6.city.$error,"has-success":u.value&&!t(m).form6.city.$error}])},[ir,d(e("input",{id:"tlpCity",type:"text",placeholder:"Enter City",class:"form-input mb-2","onUpdate:modelValue":r[31]||(r[31]=s=>v.value.city=s)},null,512),[[c,v.value.city]]),u.value&&!t(m).form6.city.$error?(o(),l("span",mr,"Looks Good!")):a("",!0),u.value&&t(m).form6.city.$error?(o(),l("span",dr,"Please provide a valid city.")):a("",!0)],2),e("div",{class:p({"has-error":t(m).form6.state.$error,"has-success":u.value&&!t(m).form6.state.$error})},[nr,d(e("input",{id:"tlpState",type:"text",placeholder:"Enter State",class:"form-input mb-2","onUpdate:modelValue":r[32]||(r[32]=s=>v.value.state=s)},null,512),[[c,v.value.state]]),u.value&&!t(m).form6.state.$error?(o(),l("span",ur,"Looks Good!")):a("",!0),u.value&&t(m).form6.state.$error?(o(),l("span",cr,"Please provide a valid state.")):a("",!0)],2),e("div",{class:p({"has-error":t(m).form6.zip.$error,"has-success":u.value&&!t(m).form6.zip.$error})},[pr,d(e("input",{id:"tlpZip",type:"text",placeholder:"Enter Zip",class:"form-input mb-2","onUpdate:modelValue":r[33]||(r[33]=s=>v.value.zip=s)},null,512),[[c,v.value.zip]]),u.value&&!t(m).form6.zip.$error?(o(),l("span",fr,"Looks Good!")):a("",!0),u.value&&t(m).form6.zip.$error?(o(),l("span",vr,"Please provide a valid Zip.")):a("",!0)],2)]),e("div",{class:p({"has-error":t(m).form6.isTerms.$error,"has-success":u.value&&!t(m).form6.isTerms.$error})},[e("label",br,[d(e("input",{type:"checkbox",class:"form-checkbox","onUpdate:modelValue":r[34]||(r[34]=s=>v.value.isTerms=s)},null,512),[[M,v.value.isTerms]]),hr]),u.value&&t(m).form6.isTerms.$error?(o(),l("div",yr,xr)):a("",!0)],2),gr],32)]),t(x).includes("code6")?(o(),S(L,{key:0},{default:C(()=>[_r]),_:1})):a("",!0)])])])]))}});export{Er as default};
