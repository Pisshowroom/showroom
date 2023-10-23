<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Forms</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Input Mask</span>
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
                ><a href="https://www.npmjs.com/package/maska" target="_blank" class="block hover:underline">https://www.npmjs.com/package/maska</a>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
                <!-- Basic -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Static Mask Basic</h5>
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
                        <p class="text-white-dark mb-5">Input mask are use with <span class="text-danger">input</span> tags.</p>
                        <form>
                            <fieldset class="grid grid-cols-1 md:grid-cols-2 items-end gap-4">
                                <div>
                                    <label for="staticMask1" class="text-white-dark">v-maska="'##-#######'" (99-9999999)</label>
                                    <input id="staticMask1" type="text" placeholder="__-_______" class="form-input" v-maska="'##-#######'" />
                                </div>
                                <div>
                                    <label for="staticMask2" class="text-white-dark">v-maska="'AA-####'" (aa-9999)</label>
                                    <input id="staticMask2" type="text" placeholder="__-____" class="form-input" v-maska="'aa-####'" />
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code1')">
                        <highlight>
                            <pre>
&lt;!-- static mask basic --&gt;
&lt;form&gt;
  &lt;fieldset class=&quot;grid grid-cols-1 md:grid-cols-2 items-end gap-4&quot;&gt;
    &lt;div&gt;
      &lt;label for=&quot;staticMask1&quot; class=&quot;text-white-dark&quot;&gt;v-maska=&quot;'##-#######'&quot; (99-9999999)&lt;/label&gt;
      &lt;input id=&quot;staticMask1&quot; type=&quot;text&quot; placeholder=&quot;__-_______&quot; class=&quot;form-input&quot; v-maska=&quot;'##-#######'&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;label for=&quot;staticMask2&quot; class=&quot;text-white-dark&quot;&gt;v-maska=&quot;'AA-####'&quot; (aa-9999)&lt;/label&gt;
      &lt;input id=&quot;staticMask2&quot; type=&quot;text&quot; placeholder=&quot;__-____&quot; class=&quot;form-input&quot; v-maska=&quot;'aa-####'&quot; /&gt;
    &lt;/div&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Alternate masks</h5>
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
                        <form>
                            <fieldset class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="altnMask1" class="text-white-dark">v-maska="'##.#'" (99.9)</label>
                                    <input id="altnMask1" type="text" placeholder="__._" class="form-input" v-maska="'##.#'" />
                                </div>
                                <div>
                                    <label for="altnMask2" class="text-white-dark">v-maska="'##.##'" (99.99)</label>
                                    <input id="altnMask2" type="text" placeholder="__.__" class="form-input" v-maska="'##.##'" />
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code2')">
                        <highlight>
                            <pre>
&lt;!-- alternate masks --&gt;
&lt;form&gt;
  &lt;fieldset class=&quot;grid grid-cols-1 md:grid-cols-2 gap-4&quot;&gt;
    &lt;div&gt;
      &lt;label for=&quot;altnMask1&quot; class=&quot;text-white-dark&quot;&gt;v-maska=&quot;'##.#'&quot; (99.9)&lt;/label&gt;
      &lt;input id=&quot;altnMask1&quot; type=&quot;text&quot; placeholder=&quot;__._&quot; class=&quot;form-input&quot; v-maska=&quot;'##.#'&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;label for=&quot;altnMask2&quot; class=&quot;text-white-dark&quot;&gt;v-maska=&quot;'##.##'&quot; (99.99)&lt;/label&gt;
      &lt;input id=&quot;altnMask2&quot; type=&quot;text&quot; placeholder=&quot;__.__&quot; class=&quot;form-input&quot; v-maska=&quot;'##.##'&quot; /&gt;
    &lt;/div&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Dynamic Syntax</h5>
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
                        <form>
                            <fieldset class="grid grid-cols-1 md:grid-cols-3 items-end gap-4">
                                <div>
                                    <label for="dynamicMask1" class="text-white-dark">v-maska="'#-AAA###'" (9-a{1,3}9{1,3})</label>
                                    <input id="dynamicMask1" type="text" placeholder="_-__" class="form-input" v-maska="'#-AAA###'" />
                                </div>
                                <div>
                                    <label for="dynamicMask2" class="text-white-dark">v-maska="'AA-####'" (aa-9{1,4})</label>
                                    <input id="dynamicMask2" type="text" placeholder="__-____" class="form-input" v-maska="'AA-####'" />
                                </div>
                                <div>
                                    <label for="dynamicMask3" class="text-white-dark">v-maska="'AA-##'" (aa-9{1,2})</label>
                                    <input id="dynamicMask3" type="text" placeholder="__-__" class="form-input" v-maska="'AA-##'" />
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code3')">
                        <highlight>
                            <pre>
&lt;!-- dynamic syntax --&gt;
&lt;form&gt;
  &lt;fieldset class=&quot;grid grid-cols-1 md:grid-cols-3 items-end gap-4&quot;&gt;
    &lt;div&gt;
      &lt;label for=&quot;dynamicMask1&quot; class=&quot;text-white-dark&quot;&gt;v-maska=&quot;'#-AAA###'&quot; (9-a{1,3}9{1,3})&lt;/label&gt;
      &lt;input id=&quot;dynamicMask1&quot; type=&quot;text&quot; placeholder=&quot;_-__&quot; class=&quot;form-input&quot; v-maska=&quot;'#-AAA###'&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;label for=&quot;dynamicMask2&quot; class=&quot;text-white-dark&quot;&gt;v-maska=&quot;'AA-####'&quot; (aa-9{1,4})&lt;/label&gt;
      &lt;input id=&quot;dynamicMask2&quot; type=&quot;text&quot; placeholder=&quot;__-____&quot; class=&quot;form-input&quot; v-maska=&quot;'AA-####'&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;label for=&quot;dynamicMask3&quot; class=&quot;text-white-dark&quot;&gt;v-maska=&quot;'AA-##'&quot; (aa-9{1,2})&lt;/label&gt;
      &lt;input id=&quot;dynamicMask3&quot; type=&quot;text&quot; placeholder=&quot;__-__&quot; class=&quot;form-input&quot; v-maska=&quot;'AA-##'&quot; /&gt;
    &lt;/div&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Date</h5>
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
                        <form>
                            <fieldset class="grid grid-cols-1 md:grid-cols-3 items-end gap-4">
                                <div>
                                    <label for="dateMask1" class="text-white-dark">v-maska="'##/##/####'" (dd/mm/yyyy)</label>
                                    <input id="dateMask1" type="text" placeholder="__/__/____" class="form-input" v-maska="'##/##/####'" />
                                </div>
                                <div>
                                    <label for="dateMask2" class="text-white-dark">v-maska="'##-##-####'" (99-99-9999)</label>
                                    <input id="dateMask2" type="text" placeholder="__-__-____" class="form-input" v-maska="'##-##-####'" />
                                </div>
                                <div>
                                    <label for="dateMask3" class="text-white-dark">v-maska="'## December, ####'" (99 December, 9999)</label>
                                    <input id="dateMask3" type="text" placeholder="__ December, ____" class="form-input" v-maska="'## December, ####'" />
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code4')">
                        <highlight>
                            <pre>
&lt;!-- date --&gt;
&lt;form&gt;
  &lt;fieldset class=&quot;grid grid-cols-1 md:grid-cols-3 items-end gap-4&quot;&gt;
    &lt;div&gt;
      &lt;label for=&quot;dateMask1&quot; class=&quot;text-white-dark&quot;&gt;v-maska=&quot;'##/##/####'&quot; (dd/mm/yyyy)&lt;/label&gt;
      &lt;input id=&quot;dateMask1&quot; type=&quot;text&quot; placeholder=&quot;__/__/____&quot; class=&quot;form-input&quot; v-maska=&quot;'##/##/####'&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;label for=&quot;dateMask2&quot; class=&quot;text-white-dark&quot;&gt;v-maska=&quot;'##-##-####'&quot; (99-99-9999)&lt;/label&gt;
      &lt;input id=&quot;dateMask2&quot; type=&quot;text&quot; placeholder=&quot;__-__-____&quot; class=&quot;form-input&quot; v-maska=&quot;'##-##-####'&quot; /&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;label for=&quot;dateMask3&quot; class=&quot;text-white-dark&quot;&gt;v-maska=&quot;'## December, ####'&quot; (99 December, 9999)&lt;/label&gt;
      &lt;input id=&quot;dateMask3&quot; type=&quot;text&quot; placeholder=&quot;__ December, ____&quot; class=&quot;form-input&quot; v-maska=&quot;'## December, ####'&quot; /&gt;
    &lt;/div&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">IP</h5>
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
                        <form>
                            <fieldset>
                                <label for="ipMask" class="text-white-dark">v-maska="'###.###.###.###'" (192.198.1.1)</label>
                                <input id="ipMask" type="text" placeholder="___.___.___.___" class="form-input" v-maska="'###.###.###.###'" />
                            </fieldset>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code5')">
                        <highlight>
                            <pre>
&lt;!-- ip --&gt;
&lt;form&gt;
  &lt;fieldset&gt;
    &lt;label for=&quot;ipMask&quot; class=&quot;text-white-dark&quot;&gt;v-maska=&quot;'###.###.###.###'&quot; (192.198.1.1)&lt;/label&gt;
    &lt;input id=&quot;ipMask&quot; type=&quot;text&quot; placeholder=&quot;___.___.___.___&quot; class=&quot;form-input&quot; v-maska=&quot;'###.###.###.###'&quot; /&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Phone</h5>
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
                        <form>
                            <fieldset>
                                <label for="phoneMask" class="text-white-dark">v-maska="'(###) ###-####'" ((999) 999-9999)</label>
                                <input id="phoneMask" type="text" placeholder="(___) ___-____" class="form-input" v-maska="'(###) ###-####'" />
                            </fieldset>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code6')">
                        <highlight>
                            <pre>
&lt;!-- phone --&gt;
&lt;form&gt;
  &lt;fieldset&gt;
    &lt;label for=&quot;phoneMask&quot; class=&quot;text-white-dark&quot;&gt;v-maska=&quot;'(###) ###-####'&quot; ((999) 999-9999)&lt;/label&gt;
    &lt;input id=&quot;phoneMask&quot; type=&quot;text&quot; placeholder=&quot;(___) ___-____&quot; class=&quot;form-input&quot; v-maska=&quot;'(###) ###-####'&quot; /&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Currency</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code7')"
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
                        <form>
                            <fieldset>
                                <label for="currencyMask" class="text-white-dark">$999,9999,999.99</label>
                                <input id="currencyMask" type="text" placeholder="$___,____,___.__" class="form-input" v-maska="'$###,####,###.##'" />
                            </fieldset>
                        </form>
                    </div>
                    <template v-if="codeArr.includes('code7')">
                        <highlight>
                            <pre>
&lt;!-- currency --&gt;
&lt;form&gt;
  &lt;fieldset&gt;
    &lt;label for=&quot;currencyMask&quot; class=&quot;text-white-dark&quot;&gt;$999,9999,999.99&lt;/label&gt;
    &lt;input id=&quot;currencyMask&quot; type=&quot;text&quot; placeholder=&quot;$___,____,___.__&quot; class=&quot;form-input&quot; v-maska=&quot;'$###,####,###.##'&quot; /&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
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
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Input Mask' });

    const { codeArr, toggleCode } = codePreview();
</script>
