<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Components</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Sweet Alerts</span>
            </li>
        </ul>
        <div class="pt-5 space-y-8 sweet-alerts">
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
                ><a href="https://www.npmjs.com/package/sweetalert2" target="_blank" class="block hover:underline">https://www.npmjs.com/package/sweetalert2</a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- basic -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Basic message</h5>
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-primary" @click="showAlert(1)">Basic message</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code1')">
                        <highlight>
                            <pre>
&lt;!-- basic message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; @click=&quot;showAlert()&quot;&gt;Basic message&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        Swal.fire({
            title: 'Saved succesfully',
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- message -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Success message</h5>
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-secondary" @click="showAlert(2)">Success message!</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code2')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; @click=&quot;showAlert()&quot;&gt;Success message!&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        Swal.fire({
            icon: 'success',
            title: 'Good job!',
            text: 'You clicked the!',
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Dynamic -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Dynamic queue</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code3')"
                        >
                            <span class="flex items-center"
                                ><svg
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-success" @click="showAlert(3)">Dynamic queue</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code3')">
                        <highlight>
                            <pre>
&lt;!-- dynamic queue --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; @click=&quot;showAlert()&quot;&gt;Dynamic queue&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        const ipAPI = 'https://api.ipify.org?format=json';
        Swal.fire({
            title: 'Your public IP',
            confirmButtonText: 'Show my public IP',
            text: 'Your public IP will be received ' + 'via AJAX request',
            showLoaderOnConfirm: true,
            customClass: 'sweet-alerts',
            preConfirm: () =&gt; {
                return fetch(ipAPI)
                    .then((response) =&gt; {
                        return response.json();
                    })
                    .then((data) =&gt; {
                        Swal.fire({
                            title: data.ip,
                            customClass: 'sweet-alerts',
                        });
                    })
                    .catch(() =&gt; {
                        Swal.fire({
                            icon: 'error',
                            title: 'Unable to get your public IP',
                            customClass: 'sweet-alerts',
                        });
                    });
            },
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- A title with text -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">A title with a text under</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code5')"
                        >
                            <span class="flex items-center"
                                ><svg
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-danger" @click="showAlert(4)">Title & text</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code5')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; @click=&quot;showAlert()&quot;&gt;Title &amp; text&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        Swal.fire({
            icon: 'question',
            title: 'The Internet?',
            text: 'That thing is still around?',
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Chaining modals -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Chaining modals (queue)</h5>
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-warning" @click="showAlert(5)">Chaining modals (queue)</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code6')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot; @click=&quot;showAlert()&quot;&gt;Chaining modals (queue)&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        const steps = ['1', '2', '3'];
        const swalQueueStep = Swal.mixin({
            confirmButtonText: 'Next &rarr;',
            showCancelButton: true,
            progressSteps: steps,
            input: 'text',
            inputAttributes: {
                required: true,
            },
            validationMessage: 'This field is required',
            padding: '2em',
            customClass: 'sweet-alerts',
        });

        const values = [];
        let currentStep;

        for (currentStep = 0; currentStep &lt; steps.length;) {
            const result = await swalQueueStep.fire({
                title: `Question ${steps[currentStep]}`,
                text: currentStep == 0 ? 'Chaining swal modals is easy.' : '',
                inputValue: values[currentStep],
                showCancelButton: currentStep &gt; 0,
                currentProgressStep: currentStep,
                customClass: 'sweet-alerts',
            });
            if (result.value) {
                values[currentStep] = result.value;
                currentStep++;
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                currentStep--;
            } else {
                break;
            }
        }

        if (currentStep === steps.length) {
            Swal.fire({
                title: 'All done!',
                padding: '2em',
                html: 'Your answers: &lt;pre&gt;' + JSON.stringify(values) + '&lt;/pre&gt;',
                confirmButtonText: 'Lovely!',
                customClass: 'sweet-alerts',
            });
        }
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Animation -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Custom animation</h5>
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-info" @click="showAlert(6)">Custom animation</button>
                        </div>
                        <div class="fixed inset-0 bg-[black]/60 z-[999] transition-all duration-300 px-4 hidden">
                            <div class="panel absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-11/12 sm:w-[480px] text-center">
                                <h3 class="text-[#3b3f5c] dark:text-white-light text-2xl font-bold mb-5">Custom animation with Animate.css</h3>
                                <button type="button" class="btn btn-info">Ok</button>
                            </div>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code7')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; @click=&quot;showAlert()&quot;&gt;Custom animation&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        Swal.fire({
            title: 'Custom animation with Animate.css',
            animation: false,
            showClass: {
                popup: 'animate__animated animate__flip'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            },
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Auto close timer -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Message with auto close timer</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code8')"
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-primary" @click="showAlert(7)">Message timer</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code8')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; @click=&quot;showAlert()&quot;&gt;Message timer&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        let timerInterval;

        Swal.fire({
            title: 'Auto close alert!',
            html: 'I will close in &lt;b&gt;&lt;/b&gt; milliseconds.',
            timer: 2000,
            timerProgressBar: true,
            customClass: 'sweet-alerts',
            didOpen: () =&gt; {
                Swal.showLoading();
                const b = Swal.getHtmlContainer().querySelector('b');
                timerInterval = setInterval(() =&gt; {
                    b.textContent = Swal.getTimerLeft();
                }, 100);
            },
            willClose: () =&gt; {
                clearInterval(timerInterval);
            },
        }).then((result) =&gt; {
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer');
            }
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Custom image -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Message with custom image</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code9')"
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-secondary" @click="showAlert(8)">Message with custom image</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code9')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; @click=&quot;showAlert()&quot;&gt;Message with custom image&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        Swal.fire({
            title: 'Sweet!',
            text: 'Modal with a custom image.',
            imageUrl: ('/assets/images/thumbs-up.jpg'),
            imageWidth: 224,
            imageHeight: 200,
            imageAlt: 'Custom image',
            animation: false,
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Custom HTML -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Custom HTML description and buttons</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code10')"
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-danger" @click="showAlert(9)">Custom Description & buttons</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code10')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; @click=&quot;showAlert()&quot;&gt;Custom Description &amp; buttons&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        Swal.fire({
            icon: 'info',
            title: '&lt;i&gt;HTML&lt;/i&gt; &lt;u&gt;example&lt;/u&gt;',
            html: 'You can use &lt;b&gt;bold text&lt;/b&gt;, ' + '&lt;a href=&quot;//github.com&quot;&gt;links&lt;/a&gt; ' + 'and other HTML tags',
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: '&lt;i class=&quot;flaticon-checked-1&quot;&gt;&lt;/i&gt; Great!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            cancelButtonText: '&lt;i class=&quot;flaticon-cancel-circle&quot;&gt;&lt;/i&gt; Cancel',
            cancelButtonAriaLabel: 'Thumbs down',
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Warning message -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Warning message, with "Confirm" button</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code11')"
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-success" @click="showAlert(10)">Confirm</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code11')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; @click=&quot;showAlert()&quot;&gt;Confirm&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: &quot;You won't be able to revert this!&quot;,
            showCancelButton: true,
            confirmButtonText: 'Delete',
            padding: '2em',
            customClass: 'sweet-alerts',
        }).then((result) =&gt; {
            if (result.value) {
                Swal.fire({ title: 'Deleted!', text: 'Your file has been deleted.', icon: 'success', customClass: 'sweet-alerts' });
            }
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Cancel -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Execute something else for "Cancel".</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code12')"
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-warning" @click="showAlert(11)">Addition else for "Cancel".</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code12')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot; @click=&quot;showAlert()&quot;&gt;Addition else for &quot;Cancel&quot;.&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                popup: 'sweet-alerts',
                confirmButton: 'btn btn-secondary',
                cancelButton: 'btn btn-dark ltr:mr-3 rtl:ml-3',
            },
            buttonsStyling: false,
        });
        swalWithBootstrapButtons
        .fire({
            title: 'Are you sure?',
            text: &quot;You won't be able to revert this!&quot;,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true,
            padding: '2em',
        })
        .then((result) =&gt; {
            if (result.value) {
                swalWithBootstrapButtons.fire('Deleted!', 'Your file has been deleted.', 'success');
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire('Cancelled', 'Your imaginary file is safe :)', 'error');
            }
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Custom Style -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">A message with custom width, padding and background</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code13')"
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-info" @click="showAlert(12)">Custom Message</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code13')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; @click=&quot;showAlert()&quot;&gt;Custom Message&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        Swal.fire({
            title: 'Custom width, padding, background.',
            width: 600,
            padding: '7em',
            customClass: 'background-modal sweet-alerts',
            background: '#fff url(' + ('/assets/images/sweet-bg.jpg') + ') no-repeat 100% 100%',
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Footer -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">With Footer</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code14')"
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-dark" @click="showAlert(13)">With Footer</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code14')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; @click=&quot;showAlert()&quot;&gt;With Footer&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '&lt;a href=&quot;javascript:;&quot;&gt;Why do I have this issue?&lt;/a&gt;',
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- RTL -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">RTL support</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code15')"
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
                        <div class="flex items-center justify-center" id="rtl-container">
                            <button type="button" class="btn btn-primary" @click="showAlert(14)">RTL</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code15')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; @click=&quot;showAlert()&quot;&gt;RTL&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        Swal.fire({
            title: 'هل تريد الاستمرار؟',
            confirmButtonText: 'نعم',
            cancelButtonText: 'لا',
            showCancelButton: true,
            showCloseButton: true,
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
&lt;/script&gt;
</pre
                            >
                        </highlight>
                    </template>
                </div>
                <!-- Mixin -->
                <div class="panel">
                    <div class="flex items-center justify-between mb-5">
                        <h5 class="font-semibold text-lg dark:text-white-light">Mixin</h5>
                        <a
                            class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                            href="javascript:;"
                            @click="toggleCode('code16')"
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
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-secondary" @click="showAlert(15)">Mixin</button>
                        </div>
                    </div>
                    <template v-if="codeArr.includes('code16')">
                        <highlight>
                            <pre>
&lt;!-- success message --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; @click=&quot;showAlert()&quot;&gt;Mixin&lt;/button&gt;

&lt;!-- script --&gt;
&lt;script&gt;
    const showAlert = async (type: number) =&gt; {
        const toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            padding: '2em',
            customClass: 'sweet-alerts',
        });
        toast.fire({
            icon: 'success',
            title: 'Signed in successfully',
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
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
    import highlight from '@/components/plugins/highlight.vue';
    import codePreview from '@/composables/codePreview';
    import Swal from 'sweetalert2';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Sweetalert' });

    const { codeArr, toggleCode } = codePreview();
    const showAlert = async (type: number) => {
        if (type === 1) {
            Swal.fire({
                title: 'Saved succesfully',
                padding: '2em',
                customClass: 'sweet-alerts',
            });
        } else if (type === 2) {
            Swal.fire({
                icon: 'success',
                title: 'Good job!',
                text: 'You clicked the!',
                padding: '2em',
                customClass: 'sweet-alerts',
            });
        } else if (type === 3) {
            const ipAPI = 'https://api.ipify.org?format=json';
            Swal.fire({
                title: 'Your public IP',
                confirmButtonText: 'Show my public IP',
                text: 'Your public IP will be received ' + 'via AJAX request',
                showLoaderOnConfirm: true,
                customClass: 'sweet-alerts',
                preConfirm: () => {
                    return fetch(ipAPI)
                        .then((response) => {
                            return response.json();
                        })
                        .then((data) => {
                            Swal.fire({
                                title: data.ip,
                                customClass: 'sweet-alerts',
                            });
                        })
                        .catch(() => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Unable to get your public IP',
                                customClass: 'sweet-alerts',
                            });
                        });
                },
            });
        } else if (type === 4) {
            Swal.fire({
                icon: 'question',
                title: 'The Internet?',
                text: 'That thing is still around?',
                padding: '2em',
                customClass: 'sweet-alerts',
            });
        } else if (type === 5) {
            const steps = ['1', '2', '3'];
            const swalQueueStep = Swal.mixin({
                confirmButtonText: 'Next →',
                showCancelButton: true,
                progressSteps: steps,
                input: 'text',
                inputAttributes: {
                    required: 'true',
                },
                validationMessage: 'This field is required',
                padding: '2em',
                customClass: 'sweet-alerts',
            });

            const values: any = [];
            let currentStep;

            for (currentStep = 0; currentStep < steps.length; ) {
                const result = await swalQueueStep.fire({
                    title: `Question ${steps[currentStep]}`,
                    text: currentStep == 0 ? 'Chaining swal modals is easy.' : '',
                    inputValue: values[currentStep] || '',
                    showCancelButton: currentStep > 0,
                    currentProgressStep: currentStep,
                    customClass: 'sweet-alerts',
                });
                if (result.value) {
                    values[currentStep] = result.value;
                    currentStep++;
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    currentStep--;
                } else {
                    break;
                }
            }

            if (currentStep === steps.length) {
                Swal.fire({
                    title: 'All done!',
                    padding: '2em',
                    html: 'Your answers: <pre>' + JSON.stringify(values) + '</pre>',
                    confirmButtonText: 'Lovely!',
                    customClass: 'sweet-alerts',
                });
            }
        } else if (type === 6) {
            Swal.fire({
                title: 'Custom animation with Animate.css',
                showClass: {
                    popup: 'animate__animated animate__flip',
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp',
                },
                padding: '2em',
                customClass: 'sweet-alerts',
            });
        } else if (type === 7) {
            let timerInterval;

            Swal.fire({
                title: 'Auto close alert!',
                html: 'I will close in <b></b> milliseconds.',
                timer: 2000,
                timerProgressBar: true,
                customClass: 'sweet-alerts',
                didOpen: () => {
                    Swal.showLoading();
                    const b: any = Swal.getHtmlContainer()?.querySelector('b');
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft();
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                },
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer');
                }
            });
        } else if (type === 8) {
            Swal.fire({
                title: 'Sweet!',
                text: 'Modal with a custom image.',
                imageUrl: '/assets/images/custom-swal.svg',
                imageWidth: 224,
                imageHeight: 'auto',
                imageAlt: 'Custom image',
                padding: '2em',
                customClass: 'sweet-alerts',
            });
        } else if (type === 9) {
            Swal.fire({
                icon: 'info',
                title: '<i>HTML</i> <u>example</u>',
                html: 'You can use <b>bold text</b>, ' + '<a href="//github.com">links</a> ' + 'and other HTML tags',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: '<i class="flaticon-checked-1"></i> Great!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText: '<i class="flaticon-cancel-circle"></i> Cancel',
                cancelButtonAriaLabel: 'Thumbs down',
                padding: '2em',
                customClass: 'sweet-alerts',
            });
        } else if (type === 10) {
            Swal.fire({
                icon: 'warning',
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonText: 'Delete',
                padding: '2em',
                customClass: 'sweet-alerts',
            }).then((result) => {
                if (result.value) {
                    Swal.fire({ title: 'Deleted!', text: 'Your file has been deleted.', icon: 'success', customClass: 'sweet-alerts' });
                }
            });
        } else if (type === 11) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    popup: 'sweet-alerts',
                    confirmButton: 'btn btn-secondary',
                    cancelButton: 'btn btn-dark ltr:mr-3 rtl:ml-3',
                },
                buttonsStyling: false,
            });
            swalWithBootstrapButtons
                .fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true,
                    padding: '2em',
                })
                .then((result) => {
                    if (result.value) {
                        swalWithBootstrapButtons.fire('Deleted!', 'Your file has been deleted.', 'success');
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire('Cancelled', 'Your imaginary file is safe :)', 'error');
                    }
                });
        } else if (type === 12) {
            Swal.fire({
                title: 'Custom width, padding, background.',
                width: 600,
                padding: '7em',
                customClass: 'background-modal sweet-alerts',
                background: '#fff url(' + '/assets/images/sweet-bg.jpg' + ') no-repeat 100% 100%',
            });
        } else if (type === 13) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href="javascript:;">Why do I have this issue?</a>',
                padding: '2em',
                customClass: 'sweet-alerts',
            });
        } else if (type === 14) {
            Swal.fire({
                title: 'هل تريد الاستمرار؟',
                confirmButtonText: 'نعم',
                cancelButtonText: 'لا',
                showCancelButton: true,
                showCloseButton: true,
                padding: '2em',
                customClass: 'sweet-alerts',
            });
        } else if (type === 15) {
            const toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                // timer: 3000,
            });
            toast.fire({
                icon: 'success',
                title: 'Signed in successfully',
                padding: '10px 20px',
            });
        }
    };
</script>
