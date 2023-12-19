import{c as b,_ as u}from"./codePreview.541183e8.js";import{d as k,u as C,o as i,b as v,e as t,g as o,Y as h,w as p,p as m,i as l,S as n}from"./main.239a2c8c.js";const x=t("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[t("li",null,[t("a",{href:"javascript:;",class:"text-primary hover:underline"},"Components")]),t("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[t("span",null,"Sweet Alerts")])],-1),_={class:"pt-5 space-y-8 sweet-alerts"},y=l('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://www.npmjs.com/package/sweetalert2" target="_blank" class="block hover:underline">https://www.npmjs.com/package/sweetalert2</a></div>',1),L={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},B={class:"panel"},A={class:"flex items-center justify-between mb-5"},S=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Basic message",-1),M=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),j=[M],T={class:"mb-5"},$={class:"flex items-center justify-center"},I=t("pre",null,`<!-- basic message -->
<button type="button" class="btn btn-primary" @click="showAlert()">Basic message</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
        Swal.fire({
            title: 'Saved succesfully',
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
<\/script>
`,-1),Y={class:"panel"},D={class:"flex items-center justify-between mb-5"},q=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Success message",-1),P=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),W=[P],O={class:"mb-5"},H={class:"flex items-center justify-center"},N=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-secondary" @click="showAlert()">Success message!</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
        Swal.fire({
            icon: 'success',
            title: 'Good job!',
            text: 'You clicked the!',
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
<\/script>
`,-1),R={class:"panel"},F={class:"flex items-center justify-between mb-5"},V=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Dynamic queue",-1),U=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Q=[U],G={class:"mb-5"},J={class:"flex items-center justify-center"},E=t("pre",null,`<!-- dynamic queue -->
<button type="button" class="btn btn-success" @click="showAlert()">Dynamic queue</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
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
    }
<\/script>
`,-1),X={class:"panel"},z={class:"flex items-center justify-between mb-5"},Z=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"A title with a text under",-1),K=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),tt=[K],et={class:"mb-5"},st={class:"flex items-center justify-center"},ot=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-danger" @click="showAlert()">Title & text</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
        Swal.fire({
            icon: 'question',
            title: 'The Internet?',
            text: 'That thing is still around?',
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
<\/script>
`,-1),nt={class:"panel"},rt={class:"flex items-center justify-between mb-5"},it=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Chaining modals (queue)",-1),lt=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),at=[lt],ct={class:"mb-5"},dt={class:"flex items-center justify-center"},ut=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-warning" @click="showAlert()">Chaining modals (queue)</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
        const steps = ['1', '2', '3'];
        const swalQueueStep = Swal.mixin({
            confirmButtonText: 'Next \u2192',
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

        for (currentStep = 0; currentStep < steps.length;) {
            const result = await swalQueueStep.fire({
                title: \`Question \${steps[currentStep]}\`,
                text: currentStep == 0 ? 'Chaining swal modals is easy.' : '',
                inputValue: values[currentStep],
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
    }
<\/script>
`,-1),ht={class:"panel"},pt={class:"flex items-center justify-between mb-5"},mt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Custom animation",-1),wt=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ft=[wt],gt={class:"mb-5"},bt={class:"flex items-center justify-center"},kt=t("div",{class:"fixed inset-0 bg-[black]/60 z-[999] transition-all duration-300 px-4 hidden"},[t("div",{class:"panel absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-11/12 sm:w-[480px] text-center"},[t("h3",{class:"text-[#3b3f5c] dark:text-white-light text-2xl font-bold mb-5"},"Custom animation with Animate.css"),t("button",{type:"button",class:"btn btn-info"},"Ok")])],-1),Ct=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-info" @click="showAlert()">Custom animation</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
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
<\/script>
`,-1),vt={class:"panel"},xt={class:"flex items-center justify-between mb-5"},_t=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Message with auto close timer",-1),yt=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Lt=[yt],Bt={class:"mb-5"},At={class:"flex items-center justify-center"},St=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-primary" @click="showAlert()">Message timer</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
        let timerInterval;

        Swal.fire({
            title: 'Auto close alert!',
            html: 'I will close in <b></b> milliseconds.',
            timer: 2000,
            timerProgressBar: true,
            customClass: 'sweet-alerts',
            didOpen: () => {
                Swal.showLoading();
                const b = Swal.getHtmlContainer().querySelector('b');
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
    }
<\/script>
`,-1),Mt={class:"panel"},jt={class:"flex items-center justify-between mb-5"},Tt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Message with custom image",-1),$t=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),It=[$t],Yt={class:"mb-5"},Dt={class:"flex items-center justify-center"},qt=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-secondary" @click="showAlert()">Message with custom image</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
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
<\/script>
`,-1),Pt={class:"panel"},Wt={class:"flex items-center justify-between mb-5"},Ot=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Custom HTML description and buttons",-1),Ht=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Nt=[Ht],Rt={class:"mb-5"},Ft={class:"flex items-center justify-center"},Vt=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-danger" @click="showAlert()">Custom Description & buttons</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
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
    }
<\/script>
`,-1),Ut={class:"panel"},Qt={class:"flex items-center justify-between mb-5"},Gt=t("h5",{class:"font-semibold text-lg dark:text-white-light"},'Warning message, with "Confirm" button',-1),Jt=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Et=[Jt],Xt={class:"mb-5"},zt={class:"flex items-center justify-center"},Zt=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-success" @click="showAlert()">Confirm</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
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
    }
<\/script>
`,-1),Kt={class:"panel"},te={class:"flex items-center justify-between mb-5"},ee=t("h5",{class:"font-semibold text-lg dark:text-white-light"},'Execute something else for "Cancel".',-1),se=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),oe=[se],ne={class:"mb-5"},re={class:"flex items-center justify-center"},ie=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-warning" @click="showAlert()">Addition else for "Cancel".</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
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
    }
<\/script>
`,-1),le={class:"panel"},ae={class:"flex items-center justify-between mb-5"},ce=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"A message with custom width, padding and background",-1),de=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ue=[de],he={class:"mb-5"},pe={class:"flex items-center justify-center"},me=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-info" @click="showAlert()">Custom Message</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
        Swal.fire({
            title: 'Custom width, padding, background.',
            width: 600,
            padding: '7em',
            customClass: 'background-modal sweet-alerts',
            background: '#fff url(' + ('/assets/images/sweet-bg.jpg') + ') no-repeat 100% 100%',
        });
    }
<\/script>
`,-1),we={class:"panel"},fe={class:"flex items-center justify-between mb-5"},ge=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"With Footer",-1),be=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ke=[be],Ce={class:"mb-5"},ve={class:"flex items-center justify-center"},xe=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-dark" @click="showAlert()">With Footer</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href="javascript:;">Why do I have this issue?</a>',
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
<\/script>
`,-1),_e={class:"panel"},ye={class:"flex items-center justify-between mb-5"},Le=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"RTL support",-1),Be=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Ae=[Be],Se={class:"mb-5"},Me={class:"flex items-center justify-center",id:"rtl-container"},je=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-primary" @click="showAlert()">RTL</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
        Swal.fire({
            title: '\u0647\u0644 \u062A\u0631\u064A\u062F \u0627\u0644\u0627\u0633\u062A\u0645\u0631\u0627\u0631\u061F',
            confirmButtonText: '\u0646\u0639\u0645',
            cancelButtonText: '\u0644\u0627',
            showCancelButton: true,
            showCloseButton: true,
            padding: '2em',
            customClass: 'sweet-alerts',
        });
    }
<\/script>
`,-1),Te={class:"panel"},$e={class:"flex items-center justify-between mb-5"},Ie=t("h5",{class:"font-semibold text-lg dark:text-white-light"},"Mixin",-1),Ye=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),De=[Ye],qe={class:"mb-5"},Pe={class:"flex items-center justify-center"},We=t("pre",null,`<!-- success message -->
<button type="button" class="btn btn-secondary" @click="showAlert()">Mixin</button>

<!-- script -->
<script>
    const showAlert = async (type: number) => {
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
<\/script>
`,-1),Re=k({__name:"sweetalert",setup(Oe){C({title:"Sweetalert"});const{codeArr:a,toggleCode:c}=b(),d=async r=>{if(r===1)n.fire({title:"Saved succesfully",padding:"2em",customClass:"sweet-alerts"});else if(r===2)n.fire({icon:"success",title:"Good job!",text:"You clicked the!",padding:"2em",customClass:"sweet-alerts"});else if(r===3){const e="https://api.ipify.org?format=json";n.fire({title:"Your public IP",confirmButtonText:"Show my public IP",text:"Your public IP will be received via AJAX request",showLoaderOnConfirm:!0,customClass:"sweet-alerts",preConfirm:()=>fetch(e).then(s=>s.json()).then(s=>{n.fire({title:s.ip,customClass:"sweet-alerts"})}).catch(()=>{n.fire({icon:"error",title:"Unable to get your public IP",customClass:"sweet-alerts"})})})}else if(r===4)n.fire({icon:"question",title:"The Internet?",text:"That thing is still around?",padding:"2em",customClass:"sweet-alerts"});else if(r===5){const e=["1","2","3"],s=n.mixin({confirmButtonText:"Next \u2192",showCancelButton:!0,progressSteps:e,input:"text",inputAttributes:{required:"true"},validationMessage:"This field is required",padding:"2em",customClass:"sweet-alerts"}),f=[];let w;for(w=0;w<e.length;){const g=await s.fire({title:`Question ${e[w]}`,text:w==0?"Chaining swal modals is easy.":"",inputValue:f[w]||"",showCancelButton:w>0,currentProgressStep:w,customClass:"sweet-alerts"});if(g.value)f[w]=g.value,w++;else if(g.dismiss===n.DismissReason.cancel)w--;else break}w===e.length&&n.fire({title:"All done!",padding:"2em",html:"Your answers: <pre>"+JSON.stringify(f)+"</pre>",confirmButtonText:"Lovely!",customClass:"sweet-alerts"})}else if(r===6)n.fire({title:"Custom animation with Animate.css",showClass:{popup:"animate__animated animate__flip"},hideClass:{popup:"animate__animated animate__fadeOutUp"},padding:"2em",customClass:"sweet-alerts"});else if(r===7){let e;n.fire({title:"Auto close alert!",html:"I will close in <b></b> milliseconds.",timer:2e3,timerProgressBar:!0,customClass:"sweet-alerts",didOpen:()=>{var f;n.showLoading();const s=(f=n.getHtmlContainer())==null?void 0:f.querySelector("b");e=setInterval(()=>{s.textContent=n.getTimerLeft()},100)},willClose:()=>{clearInterval(e)}}).then(s=>{s.dismiss===n.DismissReason.timer&&console.log("I was closed by the timer")})}else if(r===8)n.fire({title:"Sweet!",text:"Modal with a custom image.",imageUrl:"/assets/images/custom-swal.svg",imageWidth:224,imageHeight:"auto",imageAlt:"Custom image",padding:"2em",customClass:"sweet-alerts"});else if(r===9)n.fire({icon:"info",title:"<i>HTML</i> <u>example</u>",html:'You can use <b>bold text</b>, <a href="//github.com">links</a> and other HTML tags',showCloseButton:!0,showCancelButton:!0,focusConfirm:!1,confirmButtonText:'<i class="flaticon-checked-1"></i> Great!',confirmButtonAriaLabel:"Thumbs up, great!",cancelButtonText:'<i class="flaticon-cancel-circle"></i> Cancel',cancelButtonAriaLabel:"Thumbs down",padding:"2em",customClass:"sweet-alerts"});else if(r===10)n.fire({icon:"warning",title:"Are you sure?",text:"You won't be able to revert this!",showCancelButton:!0,confirmButtonText:"Delete",padding:"2em",customClass:"sweet-alerts"}).then(e=>{e.value&&n.fire({title:"Deleted!",text:"Your file has been deleted.",icon:"success",customClass:"sweet-alerts"})});else if(r===11){const e=n.mixin({customClass:{popup:"sweet-alerts",confirmButton:"btn btn-secondary",cancelButton:"btn btn-dark ltr:mr-3 rtl:ml-3"},buttonsStyling:!1});e.fire({title:"Are you sure?",text:"You won't be able to revert this!",icon:"warning",showCancelButton:!0,confirmButtonText:"Yes, delete it!",cancelButtonText:"No, cancel!",reverseButtons:!0,padding:"2em"}).then(s=>{s.value?e.fire("Deleted!","Your file has been deleted.","success"):s.dismiss===n.DismissReason.cancel&&e.fire("Cancelled","Your imaginary file is safe :)","error")})}else r===12?n.fire({title:"Custom width, padding, background.",width:600,padding:"7em",customClass:"background-modal sweet-alerts",background:"#fff url(/assets/images/sweet-bg.jpg) no-repeat 100% 100%"}):r===13?n.fire({icon:"error",title:"Oops...",text:"Something went wrong!",footer:'<a href="javascript:;">Why do I have this issue?</a>',padding:"2em",customClass:"sweet-alerts"}):r===14?n.fire({title:"\u0647\u0644 \u062A\u0631\u064A\u062F \u0627\u0644\u0627\u0633\u062A\u0645\u0631\u0627\u0631\u061F",confirmButtonText:"\u0646\u0639\u0645",cancelButtonText:"\u0644\u0627",showCancelButton:!0,showCloseButton:!0,padding:"2em",customClass:"sweet-alerts"}):r===15&&n.mixin({toast:!0,position:"top-end",showConfirmButton:!1}).fire({icon:"success",title:"Signed in successfully",padding:"10px 20px"})};return(r,e)=>(i(),v("div",null,[x,t("div",_,[y,t("div",L,[t("div",B,[t("div",A,[S,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[0]||(e[0]=s=>o(c)("code1"))},j)]),t("div",T,[t("div",$,[t("button",{type:"button",class:"btn btn-primary",onClick:e[1]||(e[1]=s=>d(1))},"Basic message")])]),o(a).includes("code1")?(i(),h(u,{key:0},{default:p(()=>[I]),_:1})):m("",!0)]),t("div",Y,[t("div",D,[q,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[2]||(e[2]=s=>o(c)("code2"))},W)]),t("div",O,[t("div",H,[t("button",{type:"button",class:"btn btn-secondary",onClick:e[3]||(e[3]=s=>d(2))},"Success message!")])]),o(a).includes("code2")?(i(),h(u,{key:0},{default:p(()=>[N]),_:1})):m("",!0)]),t("div",R,[t("div",F,[V,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[4]||(e[4]=s=>o(c)("code3"))},Q)]),t("div",G,[t("div",J,[t("button",{type:"button",class:"btn btn-success",onClick:e[5]||(e[5]=s=>d(3))},"Dynamic queue")])]),o(a).includes("code3")?(i(),h(u,{key:0},{default:p(()=>[E]),_:1})):m("",!0)]),t("div",X,[t("div",z,[Z,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[6]||(e[6]=s=>o(c)("code5"))},tt)]),t("div",et,[t("div",st,[t("button",{type:"button",class:"btn btn-danger",onClick:e[7]||(e[7]=s=>d(4))},"Title & text")])]),o(a).includes("code5")?(i(),h(u,{key:0},{default:p(()=>[ot]),_:1})):m("",!0)]),t("div",nt,[t("div",rt,[it,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[8]||(e[8]=s=>o(c)("code6"))},at)]),t("div",ct,[t("div",dt,[t("button",{type:"button",class:"btn btn-warning",onClick:e[9]||(e[9]=s=>d(5))},"Chaining modals (queue)")])]),o(a).includes("code6")?(i(),h(u,{key:0},{default:p(()=>[ut]),_:1})):m("",!0)]),t("div",ht,[t("div",pt,[mt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[10]||(e[10]=s=>o(c)("code7"))},ft)]),t("div",gt,[t("div",bt,[t("button",{type:"button",class:"btn btn-info",onClick:e[11]||(e[11]=s=>d(6))},"Custom animation")]),kt]),o(a).includes("code7")?(i(),h(u,{key:0},{default:p(()=>[Ct]),_:1})):m("",!0)]),t("div",vt,[t("div",xt,[_t,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[12]||(e[12]=s=>o(c)("code8"))},Lt)]),t("div",Bt,[t("div",At,[t("button",{type:"button",class:"btn btn-primary",onClick:e[13]||(e[13]=s=>d(7))},"Message timer")])]),o(a).includes("code8")?(i(),h(u,{key:0},{default:p(()=>[St]),_:1})):m("",!0)]),t("div",Mt,[t("div",jt,[Tt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[14]||(e[14]=s=>o(c)("code9"))},It)]),t("div",Yt,[t("div",Dt,[t("button",{type:"button",class:"btn btn-secondary",onClick:e[15]||(e[15]=s=>d(8))},"Message with custom image")])]),o(a).includes("code9")?(i(),h(u,{key:0},{default:p(()=>[qt]),_:1})):m("",!0)]),t("div",Pt,[t("div",Wt,[Ot,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[16]||(e[16]=s=>o(c)("code10"))},Nt)]),t("div",Rt,[t("div",Ft,[t("button",{type:"button",class:"btn btn-danger",onClick:e[17]||(e[17]=s=>d(9))},"Custom Description & buttons")])]),o(a).includes("code10")?(i(),h(u,{key:0},{default:p(()=>[Vt]),_:1})):m("",!0)]),t("div",Ut,[t("div",Qt,[Gt,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[18]||(e[18]=s=>o(c)("code11"))},Et)]),t("div",Xt,[t("div",zt,[t("button",{type:"button",class:"btn btn-success",onClick:e[19]||(e[19]=s=>d(10))},"Confirm")])]),o(a).includes("code11")?(i(),h(u,{key:0},{default:p(()=>[Zt]),_:1})):m("",!0)]),t("div",Kt,[t("div",te,[ee,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[20]||(e[20]=s=>o(c)("code12"))},oe)]),t("div",ne,[t("div",re,[t("button",{type:"button",class:"btn btn-warning",onClick:e[21]||(e[21]=s=>d(11))},'Addition else for "Cancel".')])]),o(a).includes("code12")?(i(),h(u,{key:0},{default:p(()=>[ie]),_:1})):m("",!0)]),t("div",le,[t("div",ae,[ce,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[22]||(e[22]=s=>o(c)("code13"))},ue)]),t("div",he,[t("div",pe,[t("button",{type:"button",class:"btn btn-info",onClick:e[23]||(e[23]=s=>d(12))},"Custom Message")])]),o(a).includes("code13")?(i(),h(u,{key:0},{default:p(()=>[me]),_:1})):m("",!0)]),t("div",we,[t("div",fe,[ge,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[24]||(e[24]=s=>o(c)("code14"))},ke)]),t("div",Ce,[t("div",ve,[t("button",{type:"button",class:"btn btn-dark",onClick:e[25]||(e[25]=s=>d(13))},"With Footer")])]),o(a).includes("code14")?(i(),h(u,{key:0},{default:p(()=>[xe]),_:1})):m("",!0)]),t("div",_e,[t("div",ye,[Le,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[26]||(e[26]=s=>o(c)("code15"))},Ae)]),t("div",Se,[t("div",Me,[t("button",{type:"button",class:"btn btn-primary",onClick:e[27]||(e[27]=s=>d(14))},"RTL")])]),o(a).includes("code15")?(i(),h(u,{key:0},{default:p(()=>[je]),_:1})):m("",!0)]),t("div",Te,[t("div",$e,[Ie,t("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:e[28]||(e[28]=s=>o(c)("code16"))},De)]),t("div",qe,[t("div",Pe,[t("button",{type:"button",class:"btn btn-secondary",onClick:e[29]||(e[29]=s=>d(15))},"Mixin")])]),o(a).includes("code16")?(i(),h(u,{key:0},{default:p(()=>[We]),_:1})):m("",!0)])])])]))}});export{Re as default};
