<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Forms</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Validation</span>
            </li>
        </ul>
        <div class="pt-5 space-y-8">
            <div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap">
                <div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5">
                        <path
                            d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                        />
                        <path
                            opacity="0.5"
                            d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        />
                    </svg>
                </div>
                <span class="ltr:mr-3 rtl:ml-3">Documentation: </span
                ><a href="https://www.npmjs.com/package/vuelidate" target="_blank" class="block hover:underline">https://www.npmjs.com/package/vuelidate</a>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
                <!-- Basic -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Basic</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code1')"
                        >
                            <span class="flex items-center">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                    <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                </svg>
                                Code
                            </span>
                        </a>
                    </div>
                    <div class="mb-5">
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
                    </div>
                    <template v-if="codeArr.includes('code1')">
                        <highlight>
                            <pre>
&lt;!-- basic --&gt;
&lt;form class=&quot;space-y-5&quot; @submit.prevent=&quot;submitForm1()&quot;&gt;
  &lt;div :class=&quot;{ 'has-error': $v1.form1.name.$error, 'has-success': isSubmitForm1 &amp;&amp; !$v1.form1.name.$error }&quot;&gt;
    &lt;label for=&quot;fullName&quot;&gt;Full Name&lt;/label&gt;
    &lt;input id=&quot;fullName&quot; type=&quot;text&quot; placeholder=&quot;Enter Full Name&quot; class=&quot;form-input&quot; v-model=&quot;form1.name&quot; /&gt;
    &lt;template v-if=&quot;isSubmitForm1 &amp;&amp; !$v1.form1.name.$error&quot;&gt;
      &lt;p class=&quot;text-[#1abc9c] mt-1&quot;&gt;Looks Good!&lt;/p&gt;
    &lt;/template&gt;
    &lt;template v-if=&quot;isSubmitForm1 &amp;&amp; $v1.form1.name.$error&quot;&gt;
      &lt;p class=&quot;text-danger mt-1&quot;&gt;Please fill the Name&lt;/p&gt;
    &lt;/template&gt;
  &lt;/div&gt;
  &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit Form&lt;/button&gt;
&lt;/form&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
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
  const submitForm1 = () =&gt; {
    isSubmitForm1.value = true;
    $v1.value.form1.$touch();
    if ($v1.value.form1.$invalid) {
      return false;
    }
    //form validated success
    showMessage('Form submitted successfully.');
  };
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Email -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Email</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code2')"
                        >
                            <span class="flex items-center">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                    <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                </svg>
                                Code
                            </span>
                        </a>
                    </div>
                    <div class="mb-5">
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
                    </div>
                    <template v-if="codeArr.includes('code2')">
                        <highlight>
                            <pre>
&lt;!-- email --&gt;
&lt;form class=&quot;space-y-5&quot; @submit.prevent=&quot;submitForm2()&quot;&gt;
  &lt;div :class=&quot;{ 'has-error': $v2.form2.email.$error, 'has-success': isSubmitForm2 &amp;&amp; !$v2.form2.email.$error }&quot;&gt;
    &lt;label for=&quot;Email&quot;&gt;Email&lt;/label&gt;
    &lt;input id=&quot;Email&quot; type=&quot;text&quot; placeholder=&quot;Enter Email&quot; class=&quot;form-input&quot; v-model=&quot;form2.email&quot; /&gt;
    &lt;template v-if=&quot;isSubmitForm2 &amp;&amp; !$v2.form2.email.$error&quot;&gt;
      &lt;p class=&quot;text-[#1abc9c] mt-1&quot;&gt;Looks Good!&lt;/p&gt;
    &lt;/template&gt;
    &lt;template v-if=&quot;isSubmitForm2 &amp;&amp; $v2.form2.email.$error&quot;&gt;
      &lt;p class=&quot;text-danger mt-1&quot;&gt;Please fill the Email&lt;/p&gt;
    &lt;/template&gt;
  &lt;/div&gt;
  &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit Form&lt;/button&gt;
&lt;/form&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
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
  const submitForm2 = () =&gt; {
    isSubmitForm2.value = true;
    $v2.value.form2.$touch();
    if ($v2.value.form2.$invalid) {
      return false;
    }
    //form validated success
    showMessage('Form submitted successfully.');
  };
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Select -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Select</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code3')"
                        >
                            <span class="flex items-center">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                    <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                </svg>
                                Code
                            </span>
                        </a>
                    </div>
                    <div class="mb-5">
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
                    </div>
                    <template v-if="codeArr.includes('code3')">
                        <highlight>
                            <pre>
&lt;!-- select --&gt;
&lt;form class=&quot;space-y-5&quot; @submit.prevent=&quot;submitForm3()&quot;&gt;
  &lt;div :class=&quot;{ 'has-error': $v3.form3.select.$error, 'has-success': isSubmitForm3 &amp;&amp; !$v3.form3.select.$error }&quot;&gt;
    &lt;select class=&quot;form-select text-white-dark&quot; v-model=&quot;form3.select&quot;&gt;
      &lt;option value=&quot;&quot;&gt;Open this select menu&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
    &lt;/select&gt;
    &lt;template v-if=&quot;isSubmitForm3 &amp;&amp; !$v3.form3.select.$error&quot;&gt;
      &lt;p class=&quot;text-[#1abc9c] mt-1&quot;&gt;Example valid custom select feedback&lt;/p&gt;
    &lt;/template&gt;
    &lt;template v-if=&quot;isSubmitForm3 &amp;&amp; $v3.form3.select.$error&quot;&gt;
      &lt;p class=&quot;text-danger mt-1&quot;&gt;Please Select the field&lt;/p&gt;
    &lt;/template&gt;
  &lt;/div&gt;
  &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit Form&lt;/button&gt;
&lt;/form&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
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
  const submitForm3 = () =&gt; {
    isSubmitForm3.value = true;
    $v3.value.form3.$touch();
    if ($v3.value.form3.$invalid) {
      return false;
    }
    //form validated success
    showMessage('Form submitted successfully.');
  };
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Custom Styles -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Custom Styles</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code4')"
                        >
                            <span class="flex items-center">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                    <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                </svg>
                                Code
                            </span>
                        </a>
                    </div>
                    <div class="mb-5">
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
                                            class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                        >
                                            @
                                        </div>
                                        <input
                                            id="customeEmail"
                                            type="text"
                                            placeholder="Enter Username"
                                            class="form-input ltr:rounded-l-none rtl:rounded-r-none"
                                            v-model="form4.userName"
                                        />
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
                                <div
                                    class="md:col-span-2"
                                    :class="{ 'has-error': $v4.form4.city.$error, 'has-success': isSubmitForm4 && !$v4.form4.city.$error }"
                                >
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
                    </div>
                    <template v-if="codeArr.includes('code4')">
                        <highlight>
                            <pre>
&lt;!-- custom styles --&gt;
&lt;form class=&quot;space-y-5&quot; @submit.prevent=&quot;submitForm4()&quot;&gt;
  &lt;div class=&quot;grid grid-cols-1 md:grid-cols-3 gap-5&quot;&gt;
    &lt;div :class=&quot;{ 'has-error': $v4.form4.firstName.$error, 'has-success': isSubmitForm4 &amp;&amp; !$v4.form4.firstName.$error }&quot;&gt;
      &lt;label for=&quot;customFname&quot;&gt;First Name&lt;/label&gt;
      &lt;input id=&quot;customFname&quot; type=&quot;text&quot; placeholder=&quot;Enter First Name&quot; class=&quot;form-input&quot; v-model=&quot;form4.firstName&quot; /&gt;
      &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; !$v4.form4.firstName.$error&quot;&gt;
        &lt;p class=&quot;text-[#1abc9c] mt-1&quot;&gt;Looks Good!&lt;/p&gt;
      &lt;/template&gt;
      &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; $v4.form4.firstName.$error&quot;&gt;
        &lt;p class=&quot;text-danger mt-1&quot;&gt;Please fill the first name&lt;/p&gt;
      &lt;/template&gt;
    &lt;/div&gt;
    &lt;div :class=&quot;{ 'has-error': $v4.form4.lastName.$error, 'has-success': isSubmitForm4 &amp;&amp; !$v4.form4.lastName.$error }&quot;&gt;
      &lt;label for=&quot;customLname&quot;&gt;Last name&lt;/label&gt;
      &lt;input id=&quot;customLname&quot; type=&quot;text&quot; placeholder=&quot;Enter Last Name&quot; class=&quot;form-input&quot; v-model=&quot;form4.lastName&quot; /&gt;
      &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; !$v4.form4.lastName.$error&quot;&gt;
        &lt;p class=&quot;text-[#1abc9c] mt-1&quot;&gt;Looks Good!&lt;/p&gt;
      &lt;/template&gt;
      &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; $v4.form4.lastName.$error&quot;&gt;
        &lt;p class=&quot;text-danger mt-1&quot;&gt;Please fill the last name&lt;/p&gt;
      &lt;/template&gt;
    &lt;/div&gt;
    &lt;div :class=&quot;{ 'has-error': $v4.form4.userName.$error, 'has-success': isSubmitForm4 &amp;&amp; !$v4.form4.userName.$error }&quot;&gt;
      &lt;label for=&quot;customeEmail&quot;&gt;Username&lt;/label&gt;
      &lt;div class=&quot;flex&quot;&gt;
        &lt;div
          class=&quot;
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
          &quot;
        &gt;
          @
        &lt;/div&gt;
        &lt;input id=&quot;customeEmail&quot; type=&quot;text&quot; placeholder=&quot;Enter Username&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; v-model=&quot;form4.userName&quot; /&gt;
      &lt;/div&gt;
      &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; !$v4.form4.userName.$error&quot;&gt;
        &lt;p class=&quot;text-[#1abc9c] mt-1&quot;&gt;Looks Good!&lt;/p&gt;
      &lt;/template&gt;
      &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; $v4.form4.userName.$error&quot;&gt;
        &lt;p class=&quot;text-danger mt-1&quot;&gt;Please choose a userName&lt;/p&gt;
      &lt;/template&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;grid grid-cols-1 md:grid-cols-4 gap-5&quot;&gt;
    &lt;div class=&quot;md:col-span-2&quot; :class=&quot;{ 'has-error': $v4.form4.city.$error, 'has-success': isSubmitForm4 &amp;&amp; !$v4.form4.city.$error }&quot;&gt;
      &lt;label for=&quot;customeCity&quot;&gt;City&lt;/label&gt;
      &lt;input id=&quot;customeCity&quot; type=&quot;text&quot; placeholder=&quot;Enter City&quot; class=&quot;form-input&quot; v-model=&quot;form4.city&quot; /&gt;
      &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; !$v4.form4.city.$error&quot;&gt;
        &lt;p class=&quot;text-[#1abc9c] mt-1&quot;&gt;Looks Good!&lt;/p&gt;
      &lt;/template&gt;
      &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; $v4.form4.city.$error&quot;&gt;
        &lt;p class=&quot;text-danger mt-1&quot;&gt;Please provide a valid city&lt;/p&gt;
      &lt;/template&gt;
    &lt;/div&gt;
    &lt;div :class=&quot;{ 'has-error': $v4.form4.state.$error, 'has-success': isSubmitForm4 &amp;&amp; !$v4.form4.state.$error }&quot;&gt;
      &lt;label for=&quot;customeState&quot;&gt;State&lt;/label&gt;
      &lt;input id=&quot;customeState&quot; type=&quot;text&quot; placeholder=&quot;Enter State&quot; class=&quot;form-input&quot; v-model=&quot;form4.state&quot; /&gt;
      &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; !$v4.form4.state.$error&quot;&gt;
        &lt;p class=&quot;text-[#1abc9c] mt-1&quot;&gt;Looks Good!&lt;/p&gt;
      &lt;/template&gt;
      &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; $v4.form4.state.$error&quot;&gt;
        &lt;p class=&quot;text-danger mt-1&quot;&gt;Please provide a valid state&lt;/p&gt;
      &lt;/template&gt;
    &lt;/div&gt;
    &lt;div :class=&quot;{ 'has-error': $v4.form4.zip.$error, 'has-success': isSubmitForm4 &amp;&amp; !$v4.form4.zip.$error }&quot;&gt;
      &lt;label for=&quot;customeZip&quot;&gt;Zip&lt;/label&gt;
      &lt;input id=&quot;customeZip&quot; type=&quot;text&quot; placeholder=&quot;Enter Zip&quot; class=&quot;form-input&quot; v-model=&quot;form4.zip&quot; /&gt;
      &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; !$v4.form4.zip.$error&quot;&gt;
        &lt;p class=&quot;text-[#1abc9c] mt-1&quot;&gt;Looks Good!&lt;/p&gt;
      &lt;/template&gt;
      &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; $v4.form4.zip.$error&quot;&gt;
        &lt;p class=&quot;text-danger mt-1&quot;&gt;Please provide a valid zip&lt;/p&gt;
      &lt;/template&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div :class=&quot;{ 'has-error': $v4.form4.isTerms.$error, 'has-success': isSubmitForm4 &amp;&amp; !$v4.form4.isTerms.$error }&quot;&gt;
    &lt;label class=&quot;inline-flex cursor-pointer mt-1&quot;&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; v-model=&quot;form4.isTerms&quot; /&gt;
      &lt;span class=&quot;text-white-dark&quot;&gt;Agree to terms and conditions&lt;/span&gt;
    &lt;/label&gt;
    &lt;template v-if=&quot;isSubmitForm4 &amp;&amp; $v4.form4.isTerms.$error&quot;&gt;
      &lt;p class=&quot;text-danger mt-1&quot;&gt;You must agree before submitting.&lt;/p&gt;
    &lt;/template&gt;
  &lt;/div&gt;
  &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit Form&lt;/button&gt;
&lt;/form&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
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
  const submitForm4 = () =&gt; {
    isSubmitForm4.value = true;
    $v4.value.form4.$touch();
    if ($v4.value.form4.$invalid) {
      return false;
    }
    //form validated success
    showMessage('Form submitted successfully.');
  };

&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Browser Default -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Browser Default</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code5')"
                        >
                            <span class="flex items-center">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                    <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                </svg>
                                Code
                            </span>
                        </a>
                    </div>
                    <div class="mb-5">
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
                                            class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                        >
                                            @
                                        </div>
                                        <input
                                            id="browserEmail"
                                            type="text"
                                            placeholder="Enter Username"
                                            v-model="form5.userName"
                                            class="form-input ltr:rounded-l-none rtl:rounded-r-none"
                                            required
                                        />
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
                    </div>
                    <template v-if="codeArr.includes('code5')">
                        <highlight>
                            <pre>
&lt;!-- browser default --&gt;
&lt;form class=&quot;space-y-5&quot; @submit.prevent=&quot;submitForm5()&quot;&gt;
  &lt;div class=&quot;grid grid-cols-1 md:grid-cols-3 gap-5&quot;&gt;
    &lt;div&gt;
      &lt;label for=&quot;browserFname&quot;&gt;First Name&lt;/label&gt;
      &lt;input id=&quot;browserFname&quot; type=&quot;text&quot; placeholder=&quot;Enter First Name&quot; v-model=&quot;form5.firstName&quot; class=&quot;form-input&quot; required /&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;label for=&quot;browserLname&quot;&gt;Last name&lt;/label&gt;
      &lt;input id=&quot;browserLname&quot; type=&quot;text&quot; placeholder=&quot;Enter Last name&quot; v-model=&quot;form5.lastName&quot; class=&quot;form-input&quot; required /&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;label for=&quot;browserEmail&quot;&gt;Username&lt;/label&gt;
      &lt;div class=&quot;flex&quot;&gt;
        &lt;div
          class=&quot;
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
          &quot;
        &gt;
          @
        &lt;/div&gt;
        &lt;input id=&quot;browserEmail&quot; type=&quot;text&quot; placeholder=&quot;Enter Username&quot; v-model=&quot;form5.userName&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; required /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;grid grid-cols-1 md:grid-cols-4 gap-5&quot;&gt;
    &lt;div class=&quot;md:col-span-2&quot;&gt;
      &lt;label for=&quot;browserCity&quot;&gt;City&lt;/label&gt;
      &lt;input id=&quot;browserCity&quot; type=&quot;text&quot; placeholder=&quot;Enter City&quot; v-model=&quot;form5.city&quot; class=&quot;form-input&quot; required /&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;label for=&quot;browserState&quot;&gt;State&lt;/label&gt;
      &lt;input id=&quot;browserState&quot; type=&quot;text&quot; placeholder=&quot;Enter State&quot; v-model=&quot;form5.state&quot; class=&quot;form-input&quot; required /&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;label for=&quot;browserZip&quot;&gt;Zip&lt;/label&gt;
      &lt;input id=&quot;browserZip&quot; type=&quot;text&quot; placeholder=&quot;Enter Zip&quot; v-model=&quot;form5.zip&quot; class=&quot;form-input&quot; required /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;label class=&quot;flex items-center cursor-pointer mt-1&quot;&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; v-model=&quot;form5.isTerms&quot; required /&gt;
      &lt;span class=&quot;text-white-dark&quot;&gt;Agree to terms and conditions&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;
  &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit Form&lt;/button&gt;
&lt;/form&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
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
  const submitForm5 = () =&gt; {
    //form validated success
    showMessage('Form submitted successfully.');
  };
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Tooltips -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Tooltips</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code6')"
                        >
                            <span class="flex items-center">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                    <path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                </svg>
                                Code
                            </span>
                        </a>
                    </div>
                    <div class="mb-5">
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
                                            class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                        >
                                            @
                                        </div>
                                        <input
                                            id="tlpEmail"
                                            type="text"
                                            placeholder="Enter Username"
                                            class="form-input ltr:rounded-l-none rtl:rounded-r-none"
                                            v-model="form6.userName"
                                        />
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
                                <div
                                    class="md:col-span-2"
                                    :class="{ 'has-error': $v6.form6.city.$error, 'has-success': isSubmitForm6 && !$v6.form6.city.$error }"
                                >
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
                    </div>
                    <template v-if="codeArr.includes('code6')">
                        <highlight>
                            <pre>
&lt;!-- tooltips --&gt;
&lt;form class=&quot;space-y-5&quot; @submit.prevent=&quot;submitForm6()&quot;&gt;
  &lt;div class=&quot;grid grid-cols-1 md:grid-cols-3 gap-5&quot;&gt;
    &lt;div :class=&quot;{ 'has-error': $v6.form6.firstName.$error, 'has-success': isSubmitForm6 &amp;&amp; !$v6.form6.firstName.$error }&quot;&gt;
      &lt;label for=&quot;tlpFname&quot;&gt;First Name&lt;/label&gt;
      &lt;input id=&quot;tlpFname&quot; type=&quot;text&quot; placeholder=&quot;Enter First Name&quot; class=&quot;form-input mb-2&quot; v-model=&quot;form6.firstName&quot; /&gt;
      &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; !$v6.form6.firstName.$error&quot;&gt;
        &lt;span class=&quot;text-white bg-[#1abc9c] py-1 px-2 rounded&quot;&gt;Looks Good!&lt;/span&gt;
      &lt;/template&gt;
      &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; $v6.form6.firstName.$error&quot;&gt;
        &lt;span class=&quot;text-white bg-danger py-1 px-2 rounded&quot;&gt;Please fill the first Name&lt;/span&gt;
      &lt;/template&gt;
    &lt;/div&gt;
    &lt;div :class=&quot;{ 'has-error': $v6.form6.lastName.$error, 'has-success': isSubmitForm6 &amp;&amp; !$v6.form6.lastName.$error }&quot;&gt;
      &lt;label for=&quot;tlpLname&quot;&gt;Last name&lt;/label&gt;
      &lt;input id=&quot;tlpLname&quot; type=&quot;text&quot; placeholder=&quot;Enter Last Name&quot; class=&quot;form-input mb-2&quot; v-model=&quot;form6.lastName&quot; /&gt;
      &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; !$v6.form6.lastName.$error&quot;&gt;
        &lt;span class=&quot;text-white bg-[#1abc9c] py-1 px-2 rounded&quot;&gt;Looks Good!&lt;/span&gt;
      &lt;/template&gt;
      &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; $v6.form6.lastName.$error&quot;&gt;
        &lt;span class=&quot;text-white bg-danger py-1 px-2 rounded&quot;&gt;Please fill the last Name&lt;/span&gt;
      &lt;/template&gt;
    &lt;/div&gt;
    &lt;div :class=&quot;{ 'has-error': $v6.form6.userName.$error, 'has-success': isSubmitForm6 &amp;&amp; !$v6.form6.userName.$error }&quot;&gt;
      &lt;label for=&quot;tlpEmail&quot;&gt;Username&lt;/label&gt;
      &lt;div class=&quot;flex&quot;&gt;
        &lt;div
          class=&quot;
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
          &quot;
        &gt;
          @
        &lt;/div&gt;
        &lt;input id=&quot;tlpEmail&quot; type=&quot;text&quot; placeholder=&quot;Enter Username&quot; class=&quot;form-input ltr:rounded-l-none rtl:rounded-r-none&quot; v-model=&quot;form6.userName&quot; /&gt;
      &lt;/div&gt;
      &lt;div class=&quot;mt-2&quot;&gt;
        &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; !$v6.form6.userName.$error&quot;&gt;
          &lt;span class=&quot;text-white bg-[#1abc9c] py-1 px-2 rounded&quot;&gt;Looks Good!&lt;/span&gt;
        &lt;/template&gt;
        &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; $v6.form6.userName.$error&quot;&gt;
          &lt;span class=&quot;text-white bg-danger py-1 px-2 rounded&quot;&gt;Please choose a userName.&lt;/span&gt;
        &lt;/template&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;grid grid-cols-1 md:grid-cols-4 gap-5&quot;&gt;
    &lt;div class=&quot;md:col-span-2&quot; :class=&quot;{ 'has-error': $v6.form6.city.$error, 'has-success': isSubmitForm6 &amp;&amp; !$v6.form6.city.$error }&quot;&gt;
      &lt;label for=&quot;tlpCity&quot;&gt;City&lt;/label&gt;
      &lt;input id=&quot;tlpCity&quot; type=&quot;text&quot; placeholder=&quot;Enter City&quot; class=&quot;form-input mb-2&quot; v-model=&quot;form6.city&quot; /&gt;
      &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; !$v6.form6.city.$error&quot;&gt;
        &lt;span class=&quot;text-white bg-[#1abc9c] py-1 px-2 rounded&quot;&gt;Looks Good!&lt;/span&gt;
      &lt;/template&gt;
      &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; $v6.form6.city.$error&quot;&gt;
        &lt;span class=&quot;text-white bg-danger py-1 px-2 rounded&quot;&gt;Please provide a valid city.&lt;/span&gt;
      &lt;/template&gt;
    &lt;/div&gt;
    &lt;div :class=&quot;{ 'has-error': $v6.form6.state.$error, 'has-success': isSubmitForm6 &amp;&amp; !$v6.form6.state.$error }&quot;&gt;
      &lt;label for=&quot;tlpState&quot;&gt;State&lt;/label&gt;
      &lt;input id=&quot;tlpState&quot; type=&quot;text&quot; placeholder=&quot;Enter State&quot; class=&quot;form-input mb-2&quot; v-model=&quot;form6.state&quot; /&gt;
      &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; !$v6.form6.state.$error&quot;&gt;
        &lt;span class=&quot;text-white bg-[#1abc9c] py-1 px-2 rounded&quot;&gt;Looks Good!&lt;/span&gt;
      &lt;/template&gt;
      &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; $v6.form6.state.$error&quot;&gt;
        &lt;span class=&quot;text-white bg-danger py-1 px-2 rounded&quot;&gt;Please provide a valid state.&lt;/span&gt;
      &lt;/template&gt;
    &lt;/div&gt;
    &lt;div :class=&quot;{ 'has-error': $v6.form6.zip.$error, 'has-success': isSubmitForm6 &amp;&amp; !$v6.form6.zip.$error }&quot;&gt;
      &lt;label for=&quot;tlpZip&quot;&gt;Zip&lt;/label&gt;
      &lt;input id=&quot;tlpZip&quot; type=&quot;text&quot; placeholder=&quot;Enter Zip&quot; class=&quot;form-input mb-2&quot; v-model=&quot;form6.zip&quot; /&gt;
      &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; !$v6.form6.zip.$error&quot;&gt;
        &lt;span class=&quot;text-white bg-[#1abc9c] py-1 px-2 rounded&quot;&gt;Looks Good!&lt;/span&gt;
      &lt;/template&gt;
      &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; $v6.form6.zip.$error&quot;&gt;
        &lt;span class=&quot;text-white bg-danger py-1 px-2 rounded&quot;&gt;Please provide a valid Zip.&lt;/span&gt;
      &lt;/template&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div :class=&quot;{ 'has-error': $v6.form6.isTerms.$error, 'has-success': isSubmitForm6 &amp;&amp; !$v6.form6.isTerms.$error }&quot;&gt;
    &lt;label class=&quot;flex items-center cursor-pointer&quot;&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox&quot; v-model=&quot;form6.isTerms&quot; /&gt;
      &lt;span class=&quot;text-white-dark&quot;&gt;Agree to terms and conditions&lt;/span&gt;
    &lt;/label&gt;
    &lt;template v-if=&quot;isSubmitForm6 &amp;&amp; $v6.form6.isTerms.$error&quot;&gt;
      &lt;div class=&quot;mt-2&quot;&gt;
        &lt;span class=&quot;text-white bg-danger py-1 px-2 rounded&quot;&gt;You must agree before submitting.&lt;/span&gt;
      &lt;/div&gt;
    &lt;/template&gt;
  &lt;/div&gt;
  &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary !mt-6&quot;&gt;Submit Form&lt;/button&gt;
&lt;/form&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
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
  const submitForm6 = () =&gt; {
    isSubmitForm6.value = true;
    $v6.value.form6.$touch();
    if ($v6.value.form6.$invalid) {
      return false;
    }
    //form validated success
    showMessage('Form submitted successfully.');
  };
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref } from 'vue';
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import { useVuelidate } from '@vuelidate/core';
    import { required, email, sameAs } from '@vuelidate/validators';
    import Swal from 'sweetalert2';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Form Validation' });

    const { codeArr, toggleCode } = codePreview();

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

    const showMessage = (msg = '', type = 'success') => {
        const toast: any = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000,
            customClass: { container: 'toast' },
        });
        toast.fire({
            icon: type,
            title: msg,
            padding: '10px 20px',
        });
    };
</script>
