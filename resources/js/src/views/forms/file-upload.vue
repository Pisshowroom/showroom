<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Forms</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>File Upload</span>
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
                ><a href="https://www.npmjs.com/package/file-upload-with-preview" target="_blank" class="block hover:underline"
                    >https://www.npmjs.com/package/file-upload-with-preview</a
                >
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Single File -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Single File Upload</h5>
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
                        <div class="custom-file-container" data-upload-id="myFirstImage">
                            <div class="label-container">
                                <label>Upload </label> <a href="javascript:;" class="custom-file-container__image-clear" title="Clear Image">×</a>
                            </div>
                            <label class="custom-file-container__custom-file">
                                <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" />
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                <span class="custom-file-container__custom-file__custom-file-control ltr:pr-20 rtl:pl-20"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code1')">
                        <highlight>
                            <pre>
&lt;!-- single file --&gt;
&lt;div class=&quot;custom-file-container&quot; data-upload-id=&quot;myFirstImage&quot;&gt;
  &lt;div class=&quot;label-container&quot;&gt;&lt;label&gt;Upload &lt;/label&gt; &lt;a href=&quot;javascript:;&quot; class=&quot;custom-file-container__image-clear&quot; title=&quot;Clear Image&quot;&gt;&times;&lt;/a&gt;&lt;/div&gt;
  &lt;label class=&quot;custom-file-container__custom-file&quot;&gt;
    &lt;input type=&quot;file&quot; class=&quot;custom-file-container__custom-file__custom-file-input&quot; accept=&quot;image/*&quot; /&gt;
    &lt;input type=&quot;hidden&quot; name=&quot;MAX_FILE_SIZE&quot; value=&quot;10485760&quot; /&gt;
    &lt;span class=&quot;custom-file-container__custom-file__custom-file-control ltr:pr-20 rtl:pl-20&quot;&gt;&lt;/span&gt;
  &lt;/label&gt;
  &lt;div class=&quot;custom-file-container__image-preview&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
  import { onMounted } from 'vue';
  import FileUploadWithPreview from 'file-upload-with-preview';
  import 'file-upload-with-preview/dist/file-upload-with-preview.min.css';
  import '@/assets/css/file-upload-with-preview.min.css';

  onMounted(() =&gt; {
    // single image upload
    new FileUploadWithPreview('myFirstImage', {
      images: {
        baseImage: '/assets/images/file-preview.svg',
        backgroundImage: '',
      },
    });
  });
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Multiple File -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Multiple File</h5>
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
                        <div class="custom-file-container" data-upload-id="mySecondImage">
                            <div class="label-container">
                                <label>Upload </label> <a href="javascript:;" class="custom-file-container__image-clear" title="Clear Image">×</a>
                            </div>
                            <label class="custom-file-container__custom-file">
                                <input type="file" class="custom-file-container__custom-file__custom-file-input" multiple />
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                <span class="custom-file-container__custom-file__custom-file-control ltr:pr-20 rtl:pl-20"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code2')">
                        <highlight>
                            <pre>
&lt;!-- multiple file --&gt;
&lt;div class=&quot;custom-file-container&quot; data-upload-id=&quot;mySecondImage&quot;&gt;
  &lt;div class=&quot;label-container&quot;&gt;&lt;label&gt;Upload &lt;/label&gt; &lt;a href=&quot;javascript:;&quot; class=&quot;custom-file-container__image-clear&quot; title=&quot;Clear Image&quot;&gt;&times;&lt;/a&gt;&lt;/div&gt;
  &lt;label class=&quot;custom-file-container__custom-file&quot;&gt;
    &lt;input type=&quot;file&quot; class=&quot;custom-file-container__custom-file__custom-file-input&quot; multiple /&gt;
    &lt;input type=&quot;hidden&quot; name=&quot;MAX_FILE_SIZE&quot; value=&quot;10485760&quot; /&gt;
    &lt;span class=&quot;custom-file-container__custom-file__custom-file-control ltr:pr-20 rtl:pl-20&quot;&gt;&lt;/span&gt;
  &lt;/label&gt;
  &lt;div class=&quot;custom-file-container__image-preview&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script lang=&quot;ts&quot; setup&gt;
  import { onMounted } from 'vue';
  import FileUploadWithPreview from 'file-upload-with-preview';
  import 'file-upload-with-preview/dist/file-upload-with-preview.min.css';
  import '@/assets/css/file-upload-with-preview.min.css';

  onMounted(() =&gt; {
    // multiple image upload
    new FileUploadWithPreview('mySecondImage', {
      images: {
        baseImage: '/assets/images/file-preview.svg',
        backgroundImage: '',
      },
      multiple: true,
    });
  });
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
    import { onMounted } from 'vue';
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import FileUploadWithPreview from 'file-upload-with-preview';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'File Upload' });

    const { codeArr, toggleCode } = codePreview();

    onMounted(() => {
    // single image upload
        new FileUploadWithPreview('myFirstImage', {
            images: {
                baseImage: '/assets/images/file-preview.svg',
                backgroundImage: '',
            },
        });

        // multiple image upload
        new FileUploadWithPreview('mySecondImage', {
            images: {
                baseImage: '/assets/images/file-preview.svg',
                backgroundImage: '',
            },
            multiple: true,
        });
    });
</script>
