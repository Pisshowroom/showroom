<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Forms</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Select2</span>
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
                ><a href="https://www.npmjs.com/package/@suadelabs/vue3-multiselect" target="_blank" class="block hover:underline"
                    >https://www.npmjs.com/package/@suadelabs/vue3-multiselect</a
                >
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
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
                    </div>
                    <template v-if="codeArr.includes('code1')">
                        <highlight>
                            <pre>
&lt;!-- basic --&gt;
&lt;multiselect
  v-model=&quot;input1&quot;
  :options=&quot;options&quot;
  class=&quot;custom-multiselect&quot;
  :searchable=&quot;false&quot;
  :preselect-first=&quot;true&quot;
  :allow-empty=&quot;false&quot;
  selected-label=&quot;&quot;
  select-label=&quot;&quot;
  deselect-label=&quot;&quot;
&gt;&lt;/multiselect&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
  import { ref } from 'vue';
  import Multiselect from '@suadelabs/vue3-multiselect';
  import '@suadelabs/vue3-multiselect/dist/vue3-multiselect.css';

  const options = ref(['Orange', 'White', 'Purple']);
  const input1 = ref('Orange');
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Nested -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Nested</h5>
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
                    </div>
                    <template v-if="codeArr.includes('code2')">
                        <highlight>
                            <pre>
&lt;!-- nested --&gt;
&lt;multiselect
  v-model=&quot;input2&quot;
  :options=&quot;options2&quot;
  class=&quot;custom-multiselect&quot;
  :searchable=&quot;false&quot;
  :allow-empty=&quot;false&quot;
  group-values=&quot;list&quot;
  group-label=&quot;group_name&quot;
  placeholder=&quot;Select Option&quot;
  track-by=&quot;name&quot;
  label=&quot;name&quot;
  :preselect-first=&quot;true&quot;
  selected-label=&quot;&quot;
  select-label=&quot;&quot;
  deselect-label=&quot;&quot;
&gt;&lt;/multiselect&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
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
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Disabling options -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Disabling options</h5>
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
                    </div>
                    <template v-if="codeArr.includes('code3')">
                        <highlight>
                            <pre>
&lt;!-- disabling options --&gt;
&lt;multiselect
  v-model=&quot;input3&quot;
  :options=&quot;options3&quot;
  class=&quot;custom-multiselect&quot;
  :searchable=&quot;false&quot;
  :allow-empty=&quot;false&quot;
  track-by=&quot;name&quot;
  label=&quot;name&quot;
  :preselect-first=&quot;true&quot;
  selected-label=&quot;&quot;
  select-label=&quot;&quot;
  deselect-label=&quot;&quot;
&gt;&lt;/multiselect&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
  import { ref } from 'vue';
  import Multiselect from '@suadelabs/vue3-multiselect';
  import '@suadelabs/vue3-multiselect/dist/vue3-multiselect.css';

  const options3 = ref([{ name: 'Orange' }, { name: 'White', $isDisabled: true }, { name: 'Purple' }]);
  const input3 = ref({ name: 'Orange' });
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Placeholder -->
                <div class="panel lg:row-start-3">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Placeholder</h5>
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
                        <multiselect
                            v-model="input4"
                            :options="options"
                            class="custom-multiselect"
                            :searchable="false"
                            placeholder="Choose..."
                            selected-label=""
                            select-label=""
                            deselect-label=""
                        ></multiselect>
                    </div>
                    <template v-if="codeArr.includes('code4')">
                        <highlight>
                            <pre>
&lt;!-- placeholder --&gt;
&lt;multiselect v-model=&quot;input4&quot; :options=&quot;options&quot; class=&quot;custom-multiselect&quot; :searchable=&quot;false&quot; placeholder=&quot;Choose...&quot; selected-label=&quot;&quot; select-label=&quot;&quot; deselect-label=&quot;&quot;&gt;&lt;/multiselect&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
  import { ref } from 'vue';
  import Multiselect from '@suadelabs/vue3-multiselect';
  import '@suadelabs/vue3-multiselect/dist/vue3-multiselect.css';

  const options = ref(['Orange', 'White', 'Purple']);
  const input4 = ref('');
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Searchable -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Searchable</h5>
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
                    </div>
                    <template v-if="codeArr.includes('code5')">
                        <highlight>
                            <pre>
&lt;!-- searchable --&gt;
&lt;multiselect
  v-model=&quot;input5&quot;
  :options=&quot;options&quot;
  class=&quot;custom-multiselect&quot;
  :searchable=&quot;true&quot;
  placeholder=&quot;Select an option&quot;
  selected-label=&quot;&quot;
  select-label=&quot;&quot;
  deselect-label=&quot;&quot;
&gt;&lt;/multiselect&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
  import { ref } from 'vue';
  import Multiselect from '@suadelabs/vue3-multiselect';
  import '@suadelabs/vue3-multiselect/dist/vue3-multiselect.css';

  const options = ref(['Orange', 'White', 'Purple']);
  const input5 = ref('');
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <!-- Multiple -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Multiple select</h5>
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
                    </div>
                    <template v-if="codeArr.includes('code6')">
                        <highlight>
                            <pre>
&lt;!-- multiple --&gt;
&lt;multiselect
  v-model=&quot;input6&quot;
  :options=&quot;options&quot;
  class=&quot;custom-multiselect&quot;
  :multiple=&quot;true&quot;
  :searchable=&quot;false&quot;
  placeholder=&quot;Select an option&quot;
  selected-label=&quot;&quot;
  select-label=&quot;&quot;
  deselect-label=&quot;&quot;
&gt;
&lt;/multiselect&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
  import { ref } from 'vue';
  import Multiselect from '@suadelabs/vue3-multiselect';
  import '@suadelabs/vue3-multiselect/dist/vue3-multiselect.css';

  const options = ref(['Orange', 'White', 'Purple']);
  const input6 = ref([]);
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
    import Multiselect from '@suadelabs/vue3-multiselect';
    import '@suadelabs/vue3-multiselect/dist/vue3-multiselect.css';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Vue Multiselect' });

    const { codeArr, toggleCode } = codePreview();

    const options = ref(['Orange', 'White', 'Purple']);
    const input1 = ref('Orange');

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

    const options3 = ref([{ name: 'Orange' }, { name: 'White', $isDisabled: true }, { name: 'Purple' }]);
    const input3 = ref({ name: 'Orange' });

    const input4 = ref('');
    const input5 = ref('');
    const input6 = ref([]);
</script>
