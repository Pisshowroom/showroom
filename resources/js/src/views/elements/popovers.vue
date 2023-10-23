<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Elements</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Popovers</span>
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
                ><a href="https://www.npmjs.com/package/tippy.vue" target="_blank" class="block hover:underline">https://www.npmjs.com/package/tippy.vue</a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Default</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code1')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex justify-center w-full gap-4">
                            <a href="javascript:;" v-tippy:anchor class="btn bg-primary btn-primary">Link</a>
                            <tippy target="anchor" trigger="click">Popover using ANCHOR tag</tippy>

                            <button type="button" v-tippy:button class="btn btn-success">Button</button>
                            <tippy target="button" trigger="click">Popover using BUTTON tag</tippy>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code1')">
                        <highlight>
                            <pre>
&lt;!-- link --&gt;
&lt;a href=&quot;javascript:;&quot; v-tippy:anchor class=&quot;btn bg-primary btn-primary&quot;&gt;Link&lt;/a&gt;
&lt;tippy target=&quot;anchor&quot; trigger=&quot;click&quot;&gt;Popover using ANCHOR tag&lt;/tippy&gt;

&lt;!-- button --&gt;
&lt;button type=&quot;button&quot; v-tippy:button class=&quot;btn btn-success&quot;&gt;Button&lt;/button&gt;
&lt;tippy target=&quot;button&quot; trigger=&quot;click&quot;&gt;Popover using BUTTON tag&lt;/tippy&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Placement</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code2')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex flex-wrap justify-center gap-4 w-full">
                            <button type="button" v-tippy:top class="btn btn-info">Popover on top</button>
                            <tippy target="top" trigger="click" placement="top">Popover on top</tippy>

                            <button type="button" v-tippy:left class="btn btn-secondary">Popover on left</button>
                            <tippy target="left" trigger="click" :placement="store.rtlClass === 'rtl' ? 'right' : 'left'">Popover on left</tippy>

                            <button type="button" v-tippy:right class="btn btn-danger">Popover on right</button>
                            <tippy target="right" trigger="click" :placement="store.rtlClass === 'rtl' ? 'left' : 'right'">Popover on right</tippy>

                            <button type="button" v-tippy:bottom class="btn btn-warning">Popover on bottom</button>
                            <tippy target="bottom" trigger="click" placement="bottom">Popover on bottom</tippy>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code2')">
                        <highlight>
                            <pre>
&lt;!-- top --&gt;
&lt;button type=&quot;button&quot; v-tippy:top class=&quot;btn btn-info&quot;&gt;Popover on top&lt;/button&gt;
&lt;tippy target=&quot;top&quot; trigger=&quot;click&quot; placement=&quot;top&quot;&gt;Popover on top&lt;/tippy&gt;

&lt;!-- left --&gt;
&lt;button type=&quot;button&quot; v-tippy:left class=&quot;btn btn-secondary&quot;&gt;Popover on left&lt;/button&gt;
&lt;tippy target=&quot;left&quot; trigger=&quot;click&quot; :placement=&quot;store.rtlClass === 'rtl' ? 'right' : 'left'&quot;&gt;Popover on left&lt;/tippy&gt;

&lt;!-- right --&gt;
&lt;button type=&quot;button&quot; v-tippy:right class=&quot;btn btn-danger&quot;&gt;Popover on right&lt;/button&gt;
&lt;tippy target=&quot;right&quot; trigger=&quot;click&quot; :placement=&quot;store.rtlClass === 'rtl' ? 'left' : 'right'&quot;&gt;Popover on right&lt;/tippy&gt;

&lt;!-- bottom --&gt;
&lt;button type=&quot;button&quot; v-tippy:bottom class=&quot;btn btn-warning&quot;&gt;Popover on bottom&lt;/button&gt;
&lt;tippy target=&quot;bottom&quot; trigger=&quot;click&quot; placement=&quot;bottom&quot;&gt;Popover on bottom&lt;/tippy&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { useAppStore } from '@/stores/index';
const store = useAppStore();
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <div class="panel lg:row-start-1 lg:col-start-2">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Dismissible popover</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code3')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex justify-center gap-4 w-full">
                            <button type="button" v-tippy:dismissible data-dismissable="true" class="btn btn-dark">Popover on left</button>
                            <tippy target="dismissible" trigger="click" :placement="store.rtlClass === 'rtl' ? 'right' : 'left'">Popover on left</tippy>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code3')">
                        <highlight>
                            <pre>
&lt;!-- dismissible --&gt;
&lt;button type=&quot;button&quot; v-tippy:dismissible data-dismissable=&quot;true&quot; class=&quot;btn btn-dark&quot;&gt;Popover on left&lt;/button&gt;
&lt;tippy target=&quot;dismissible&quot; trigger=&quot;click&quot; :placement=&quot;store.rtlClass === 'rtl' ? 'right' : 'left'&quot;&gt;Popover on left&lt;/tippy&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
import { useAppStore } from '@/stores/index';
const store = useAppStore();
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Options</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code4')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex flex-wrap justify-center gap-4 w-full">
                            <button type="button" v-tippy:hover class="btn btn-primary">On Hover</button>
                            <tippy target="hover" trigger="mouseenter">On hover</tippy>

                            <button type="button" v-tippy:focus class="btn btn-secondary">On Focus</button>
                            <tippy target="focus" trigger="focus">On focus</tippy>

                            <button type="button" v-tippy:delay class="btn btn-info">Delay</button>
                            <tippy target="delay" delay="1000" trigger="click">Delay 1s</tippy>

                            <button type="button" v-tippy:noanimation class="btn btn-dark">Disabled Animation</button>
                            <tippy target="noanimation" animation="false" trigger="click">Disabled animation</tippy>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code4')">
                        <highlight>
                            <pre>
&lt;!-- hover --&gt;
&lt;button type=&quot;button&quot; v-tippy:hover class=&quot;btn btn-primary&quot;&gt;On Hover&lt;/button&gt;
&lt;tippy target=&quot;hover&quot; trigger=&quot;mouseenter&quot;&gt;On hover&lt;/tippy&gt;

&lt;!-- focus --&gt;
&lt;button type=&quot;button&quot; v-tippy:focus class=&quot;btn btn-secondary&quot;&gt;On Focus&lt;/button&gt;
&lt;tippy target=&quot;focus&quot; trigger=&quot;focus&quot;&gt;On focus&lt;/tippy&gt;

&lt;!-- delay --&gt;
&lt;button type=&quot;button&quot; v-tippy:delay class=&quot;btn btn-info&quot;&gt;Delay&lt;/button&gt;
&lt;tippy target=&quot;delay&quot; delay=&quot;1000&quot; trigger=&quot;click&quot;&gt;Delay 1s&lt;/tippy&gt;

&lt;!-- no animation --&gt;
&lt;button type=&quot;button&quot; v-tippy:noanimation class=&quot;btn btn-dark&quot;&gt;Disabled Animation&lt;/button&gt;
&lt;tippy target=&quot;noanimation&quot; animation=&quot;false&quot; trigger=&quot;click&quot;&gt;Disabled animation&lt;/tippy&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>

                <div class="panel lg:col-span-2">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Colors</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code5')"
                            ><span class="flex items-center">
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
                            </span></a
                        >
                    </div>
                    <div class="mb-5">
                        <div class="flex flex-wrap justify-center gap-4 w-full">
                            <button type="button" v-tippy:primary class="btn btn-primary">Primary</button>
                            <tippy target="primary" trigger="click" :extra="{ theme: 'primary' }">Primary</tippy>

                            <button type="button" v-tippy:success class="btn btn-success">Success</button>
                            <tippy target="success" trigger="click" :extra="{ theme: 'success' }">Success</tippy>

                            <button type="button" v-tippy:info class="btn btn-info">Info</button>
                            <tippy target="info" trigger="click" :extra="{ theme: 'info' }">Info</tippy>

                            <button type="button" v-tippy:danger class="btn btn-danger">Danger</button>
                            <tippy target="danger" trigger="click" :extra="{ theme: 'danger' }">Danger</tippy>

                            <button type="button" v-tippy:warning class="btn btn-warning">Warning</button>
                            <tippy target="warning" trigger="click" :extra="{ theme: 'warning' }">Warning</tippy>

                            <button type="button" v-tippy:secondary class="btn btn-secondary">Secondary</button>
                            <tippy target="secondary" trigger="click" :extra="{ theme: 'secondary' }">Secondary</tippy>

                            <button type="button" v-tippy:dark class="btn btn-dark">Dark</button>
                            <tippy target="dark" trigger="click" :extra="{ theme: 'dark' }">Dark</tippy>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code5')">
                        <highlight>
                            <pre>
&lt;!-- primary --&gt;
&lt;button type=&quot;button&quot; v-tippy:primary class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;tippy target=&quot;primary&quot; trigger=&quot;click&quot; :extra=&quot;{ theme: 'primary' }&quot;&gt;Primary&lt;/tippy&gt;

&lt;!-- success --&gt;
&lt;button type=&quot;button&quot; v-tippy:success class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
&lt;tippy target=&quot;success&quot; trigger=&quot;click&quot; :extra=&quot;{ theme: 'success' }&quot;&gt;Success&lt;/tippy&gt;

&lt;!-- info --&gt;
&lt;button type=&quot;button&quot; v-tippy:info class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
&lt;tippy target=&quot;info&quot; trigger=&quot;click&quot; :extra=&quot;{ theme: 'info' }&quot;&gt;Info&lt;/tippy&gt;

&lt;!-- danger --&gt;
&lt;button type=&quot;button&quot; v-tippy:danger class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
&lt;tippy target=&quot;danger&quot; trigger=&quot;click&quot; :extra=&quot;{ theme: 'danger' }&quot;&gt;Danger&lt;/tippy&gt;

&lt;!-- warning --&gt;
&lt;button type=&quot;button&quot; v-tippy:warning class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;tippy target=&quot;warning&quot; trigger=&quot;click&quot; :extra=&quot;{ theme: 'warning' }&quot;&gt;Warning&lt;/tippy&gt;

&lt;!-- secondary --&gt;
&lt;button type=&quot;button&quot; v-tippy:secondary class=&quot;btn btn-secondary&quot;&gt;Secondary&lt;/button&gt;
&lt;tippy target=&quot;secondary&quot; trigger=&quot;click&quot; :extra=&quot;{ theme: 'secondary' }&quot;&gt;Secondary&lt;/tippy&gt;

&lt;!-- dark --&gt;
&lt;button type=&quot;button&quot; v-tippy:dark class=&quot;btn btn-dark&quot;&gt;Dark&lt;/button&gt;
&lt;tippy target=&quot;dark&quot; trigger=&quot;click&quot; :extra=&quot;{ theme: 'dark' }&quot;&gt;Dark&lt;/tippy&gt;
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
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Popovers' });

    const store = useAppStore();
    const { codeArr, toggleCode } = codePreview();
</script>
