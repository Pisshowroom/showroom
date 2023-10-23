<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Elements</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Search</span>
            </li>
        </ul>
        <div class="pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="panel lg:row-span-2">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Live Search</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code1')"
                        ><span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
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
                        </span></a
                    >
                </div>
                <div class="mb-5 space-y-5">
                    <div>
                        <form class="mx-auto w-full sm:w-1/2 mb-5">
                            <div class="relative">
                                <input
                                    type="text"
                                    placeholder="Search Attendees..."
                                    class="form-input shadow-[0_0_4px_2px_rgb(31_45_61_/_10%)] bg-white rounded-full h-11 placeholder:tracking-wider ltr:pr-11 rtl:pl-11"
                                    v-model="search"
                                />
                                <button
                                    type="button"
                                    class="btn btn-primary absolute ltr:right-1 rtl:left-1 inset-y-0 m-auto rounded-full w-9 h-9 p-0 flex items-center justify-center"
                                >
                                    <svg class="mx-auto" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5"></circle>
                                        <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <div class="p-4 border border-white-dark/20 rounded-lg space-y-4 overflow-x-auto w-full block">
                            <template v-for="(item, i) in searchResults" :key="i">
                                <div
                                    class="bg-white dark:bg-[#1b2e4b] rounded-xl shadow-[0_0_4px_2px_rgb(31_45_61_/_10%)] p-3 flex items-center justify-between text-gray-500 font-semibold min-w-[625px] hover:text-primary transition-all duration-300 hover:scale-[1.01]"
                                >
                                    <div class="user-profile">
                                        <img :src="`/assets/images/${item.thumb}`" alt="" class="w-8 h-8 rounded-md object-cover" />
                                    </div>
                                    <div>{{ item.name }}</div>
                                    <div>{{ item.email }}</div>
                                    <div class="badge border-2 border-dashed" :class="item.statusClass">
                                        {{ item.status }}
                                    </div>
                                    <div class="cursor-pointer">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-6 h-6 opacity-70"
                                        >
                                            <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                            <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                            <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <template v-if="codeArr.includes('code1')">
                    <highlight>
                        <pre>
&lt;!-- live search --&gt;
&lt;div&gt;
  &lt;!-- searchbar --&gt;
  &lt;form class=&quot;mx-auto w-full sm:w-1/2 mb-5&quot;&gt;
    &lt;div class=&quot;relative&quot;&gt;
      &lt;input
        type=&quot;text&quot;
        placeholder=&quot;Search Attendees...&quot;
        class=&quot;form-input shadow-[0_0_4px_2px_rgb(31_45_61_/_10%)] bg-white rounded-full h-11 placeholder:tracking-wider ltr:pr-11 rtl:pl-11&quot;
        v-model=&quot;search&quot;
      /&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-primary absolute ltr:right-1 rtl:left-1 inset-y-0 m-auto rounded-full w-9 h-9 p-0 flex items-center justify-center&quot;&gt;
        &lt;svg&gt; ... &lt;/svg&gt;
      &lt;/button&gt;
    &lt;/div&gt;
  &lt;/form&gt;

  &lt;!-- result --&gt;
  &lt;div class=&quot;p-4 border border-white-dark/20 rounded-lg space-y-4 overflow-x-auto w-full block&quot;&gt;
    &lt;template v-for=&quot;(item, i) in searchResults&quot; :key=&quot;i&quot;&gt;
      &lt;div
        class=&quot;
          bg-white
          dark:bg-[#1b2e4b]
          rounded-xl
          shadow-[0_0_4px_2px_rgb(31_45_61_/_10%)]
          p-3
          flex
          items-center
          justify-between
          text-gray-500
          font-semibold
          min-w-[625px]
          hover:text-primary
          transition-all
          duration-300
          hover:scale-[1.01]
        &quot;
      &gt;
        &lt;div class=&quot;user-profile&quot;&gt;
          &lt;img :src=&quot;`/assets/images/${item.thumb}`&quot; alt=&quot;&quot; class=&quot;w-8 h-8 rounded-md object-cover&quot; /&gt;
        &lt;/div&gt;
        &lt;div&gt;&#123;&#123; item.name &#125;&#125;&lt;/div&gt;
        &lt;div&gt;&#123;&#123; item.email &#125;&#125;&lt;/div&gt;
        &lt;div class=&quot;badge border-2 border-dashed&quot; :class=&quot;item.statusClass&quot;&gt;
          &#123;&#123; item.status &#125;&#125;
        &lt;/div&gt;
        &lt;div class=&quot;cursor-pointer&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/template&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { ref, computed } from 'vue';
const search = ref('');
const items: any = [
  {
    thumb: 'profile-5.jpeg',
    name: 'Alan Green',
    email: 'alan@mail.com',
    status: 'Active',
    statusClass: 'badge badge-outline-primary',
  },
  {
    thumb: 'profile-11.jpeg',
    name: 'Linda Nelson',
    email: 'Linda@mail.com',
    status: 'Busy',
    statusClass: 'badge badge-outline-danger',
  },
  {
    thumb: 'profile-12.jpeg',
    name: 'Lila Perry',
    email: 'Lila@mail.com',
    status: 'Closed',
    statusClass: 'badge badge-outline-warning',
  },
  {
    thumb: 'profile-3.jpeg',
    name: 'Andy King',
    email: 'Andy@mail.com',
    status: 'Active',
    statusClass: 'badge badge-outline-primary',
  },
  {
    thumb: 'profile-15.jpeg',
    name: 'Jesse Cory',
    email: 'Jesse@mail.com',
    status: 'Busy',
    statusClass: 'badge badge-outline-danger',
  },
];
const searchResults = computed(() =&gt; {
  return items.filter((item: any) =&gt; {
    return (
      item.name.toLowerCase().includes(search.value.toLowerCase()) || item.email.toLowerCase().includes(search.value.toLowerCase()) || item.status.toLowerCase().includes(search.value.toLowerCase())
    );
  });
});
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Overlay</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code2')"
                        ><span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
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
                        </span></a
                    >
                </div>
                <div class="mb-5 space-y-5">
                    <form>
                        <div
                            class="search-form-overlay relative border border-white-dark/20 rounded-md h-12 w-full"
                            @click="focus = true"
                            :class="focus && 'input-focused'"
                        >
                            <input
                                type="text"
                                placeholder="Search..."
                                class="form-input bg-white h-full placeholder:tracking-wider hidden ltr:pl-12 rtl:pr-12 peer"
                                :class="{ '!block': focus }"
                                @blur="focus = false"
                            />
                            <button
                                type="submit"
                                class="text-dark/70 absolute ltr:right-1 rtl:left-1 inset-y-0 my-auto w-9 h-9 p-0 flex items-center justify-center peer-focus:text-primary"
                                :class="{ 'ltr:!right-auto ltr:left-1 rtl:right-1': focus }"
                            >
                                <svg class="mx-auto" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5"></circle>
                                    <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code2')">
                    <highlight>
                        <pre>
&lt;!-- overlay --&gt;
&lt;form&gt;
  &lt;div class=&quot;search-form-overlay relative border border-white-dark/20 rounded-md h-12 w-full&quot; @click=&quot;focus = true&quot; :class=&quot;focus &amp;&amp; 'input-focused'&quot;&gt;
    &lt;input
      type=&quot;text&quot;
      placeholder=&quot;Search...&quot;
      class=&quot;form-input bg-white h-full placeholder:tracking-wider hidden ltr:pl-12 rtl:pr-12 peer&quot;
      :class=&quot;{ '!block': focus }&quot;
      @blur=&quot;focus = false&quot;
    /&gt;
    &lt;button
      type=&quot;submit&quot;
      class=&quot;text-dark/70 absolute ltr:right-1 rtl:left-1 inset-y-0 my-auto w-9 h-9 p-0 flex items-center justify-center peer-focus:text-primary&quot;
      :class=&quot;{ 'ltr:!right-auto ltr:left-1 rtl:right-1': focus }&quot;
    &gt;
      &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
  import { ref } from 'vue';
  const focus = ref(false);
&lt;/script&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>

            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Search Box</h5>
                    <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="javascript:;" @click="toggleCode('code3')"
                        ><span class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
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
                        </span></a
                    >
                </div>
                <div class="mb-5 space-y-5">
                    <form>
                        <div class="relative border border-white-dark/20 w-full flex">
                            <button
                                type="submit"
                                placeholder="Let's find your question in fast way"
                                class="text-primary m-auto p-3 flex items-center justify-center"
                            >
                                <svg class="mx-auto" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5"></circle>
                                    <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </button>
                            <input
                                type="text"
                                placeholder="Let's find your question in fast way"
                                class="form-input border-0 border-l rounded-none bg-white focus:shadow-[0_0_5px_2px_rgb(194_213_255_/_62%)] dark:shadow-[#1b2e4b] placeholder:tracking-wider focus:outline-none py-3"
                            />
                        </div>
                    </form>
                </div>
                <template v-if="codeArr.includes('code3')">
                    <highlight>
                        <pre>
&lt;!-- boxed --&gt;
&lt;form&gt;
    &lt;div class=&quot;relative border border-white-dark/20  w-full flex&quot;&gt;
        &lt;button type=&quot;submit&quot; placeholder=&quot;Let's find your question in fast way&quot; class=&quot;text-primary m-auto p-3 flex items-center justify-center&quot;&gt;
          &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/button&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;Let's find your question in fast way&quot; class=&quot;form-input border-0 border-l rounded-none bg-white  focus:shadow-[0_0_5px_2px_rgb(194_213_255_/_62%)] dark:shadow-[#1b2e4b] placeholder:tracking-wider focus:outline-none py-3&quot; /&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre
                        >
                    </highlight>
                </template>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref, computed } from 'vue';
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Search' });

    const { codeArr, toggleCode } = codePreview();
    const search = ref('');
    const items: any = [
        {
            thumb: 'profile-5.jpeg',
            name: 'Alan Green',
            email: 'alan@mail.com',
            status: 'Active',
            statusClass: 'badge badge-outline-primary',
        },
        {
            thumb: 'profile-11.jpeg',
            name: 'Linda Nelson',
            email: 'Linda@mail.com',
            status: 'Busy',
            statusClass: 'badge badge-outline-danger',
        },
        {
            thumb: 'profile-12.jpeg',
            name: 'Lila Perry',
            email: 'Lila@mail.com',
            status: 'Closed',
            statusClass: 'badge badge-outline-warning',
        },
        {
            thumb: 'profile-3.jpeg',
            name: 'Andy King',
            email: 'Andy@mail.com',
            status: 'Active',
            statusClass: 'badge badge-outline-primary',
        },
        {
            thumb: 'profile-15.jpeg',
            name: 'Jesse Cory',
            email: 'Jesse@mail.com',
            status: 'Busy',
            statusClass: 'badge badge-outline-danger',
        },
    ];
    const focus = ref(false);

    const searchResults = computed(() => {
        return items.filter((item: any) => {
            return (
                item.name.toLowerCase().includes(search.value.toLowerCase()) ||
                item.email.toLowerCase().includes(search.value.toLowerCase()) ||
                item.status.toLowerCase().includes(search.value.toLowerCase())
            );
        });
    });
</script>
