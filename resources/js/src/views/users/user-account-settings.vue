<template>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Users</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Account Settings</span>
            </li>
        </ul>
        <div class="pt-5">
            <div class="flex items-center justify-between mb-5">
                <h5 class="font-semibold text-lg dark:text-white-light">Settings</h5>
            </div>
            <TabGroup>
                <TabList class="flex font-semibold border-b border-[#ebedf2] dark:border-[#191e3a] mb-5 whitespace-nowrap overflow-y-auto">
                    <Tab as="template" v-slot="{ selected }">
                        <a
                            href="javascript:;"
                            class="flex gap-2 p-4 border-b border-transparent hover:border-primary hover:text-primary !outline-none"
                            :class="{ '!border-primary text-primary': selected }"
                        >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                <path
                                    opacity="0.5"
                                    d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                                <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            Home
                        </a>
                    </Tab>
                    <Tab as="template" v-slot="{ selected }">
                        <a
                            href="javascript:;"
                            class="flex gap-2 p-4 border-b border-transparent hover:border-primary hover:text-primary !outline-none"
                            :class="{ '!border-primary text-primary': selected }"
                        >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                <path d="M12 6V18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M15 9.5C15 8.11929 13.6569 7 12 7C10.3431 7 9 8.11929 9 9.5C9 10.8807 10.3431 12 12 12C13.6569 12 15 13.1193 15 14.5C15 15.8807 13.6569 17 12 17C10.3431 17 9 15.8807 9 14.5"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Payment Details
                        </a>
                    </Tab>
                    <Tab as="template" v-slot="{ selected }">
                        <a
                            href="javascript:;"
                            class="flex gap-2 p-4 border-b border-transparent hover:border-primary hover:text-primary !outline-none"
                            :class="{ '!border-primary text-primary': selected }"
                        >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                            Preferences
                        </a>
                    </Tab>
                    <Tab as="template" v-slot="{ selected }">
                        <a
                            href="javascript:;"
                            class="flex gap-2 p-4 border-b border-transparent hover:border-primary hover:text-primary !outline-none"
                            :class="{ '!border-primary text-primary': selected }"
                        >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                <path
                                    d="M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                                <path
                                    opacity="0.5"
                                    d="M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                                <path
                                    opacity="0.5"
                                    d="M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                            Danger Zone
                        </a>
                    </Tab>
                </TabList>
                <TabPanels>
                    <TabPanel>
                        <div>
                            <form class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]">
                                <h6 class="text-lg font-bold mb-5">General Information</h6>
                                <div class="flex flex-col sm:flex-row">
                                    <div class="ltr:sm:mr-4 rtl:sm:ml-4 w-full sm:w-2/12 mb-5">
                                        <img src="/assets//images/profile-34.jpeg" alt="" class="w-20 h-20 md:w-32 md:h-32 rounded-full object-cover mx-auto" />
                                    </div>
                                    <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-5">
                                        <div>
                                            <label for="name">Full Name</label>
                                            <input id="name" type="text" placeholder="Jimmy Turner" class="form-input" />
                                        </div>
                                        <div>
                                            <label for="profession">Profession</label>
                                            <input id="profession" type="text" placeholder="Web Developer" class="form-input" />
                                        </div>
                                        <div>
                                            <label for="country">Country</label>
                                            <select id="country" class="form-select text-white-dark">
                                                <option>All Countries</option>
                                                <option selected>United States</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                                <option>China</option>
                                                <option>Brazil</option>
                                                <option>Norway</option>
                                                <option>Canada</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="address">Address</label>
                                            <input id="address" type="text" placeholder="New York" class="form-input" />
                                        </div>
                                        <div>
                                            <label for="location">Location</label>
                                            <input id="location" type="text" placeholder="Location" class="form-input" />
                                        </div>
                                        <div>
                                            <label for="phone">Phone</label>
                                            <input id="phone" type="text" placeholder="+1 (530) 555-12121" class="form-input" />
                                        </div>
                                        <div>
                                            <label for="email">Email</label>
                                            <input id="email" type="email" placeholder="Jimmy@gmail.com" class="form-input" />
                                        </div>
                                        <div>
                                            <label for="web">Website</label>
                                            <input id="web" type="text" placeholder="Enter URL" class="form-input" />
                                        </div>
                                        <div>
                                            <label class="inline-flex cursor-pointer">
                                                <input type="checkbox" class="form-checkbox" />
                                                <span class="text-white-dark relative checked:bg-none">Make this my default address</span>
                                            </label>
                                        </div>
                                        <div class="sm:col-span-2 mt-3">
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 bg-white dark:bg-[#0e1726]">
                                <h6 class="text-lg font-bold mb-5">Social</h6>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div class="flex">
                                        <div class="bg-[#eee] flex justify-center items-center rounded px-3 font-semibold dark:bg-[#1b2e4b] ltr:mr-2 rtl:ml-2">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24px"
                                                height="24px"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="w-5 h-5"
                                            >
                                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                                <rect x="2" y="9" width="4" height="12"></rect>
                                                <circle cx="4" cy="4" r="2"></circle>
                                            </svg>
                                        </div>
                                        <input type="text" placeholder="jimmy_turner" class="form-input" />
                                    </div>
                                    <div class="flex">
                                        <div class="bg-[#eee] flex justify-center items-center rounded px-3 font-semibold dark:bg-[#1b2e4b] ltr:mr-2 rtl:ml-2">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24px"
                                                height="24px"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="w-5 h-5"
                                            >
                                                <path
                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"
                                                ></path>
                                            </svg>
                                        </div>
                                        <input type="text" placeholder="jimmy_turner" class="form-input" />
                                    </div>
                                    <div class="flex">
                                        <div class="bg-[#eee] flex justify-center items-center rounded px-3 font-semibold dark:bg-[#1b2e4b] ltr:mr-2 rtl:ml-2">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24px"
                                                height="24px"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="w-5 h-5"
                                            >
                                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                            </svg>
                                        </div>
                                        <input type="text" placeholder="jimmy_turner" class="form-input" />
                                    </div>
                                    <div class="flex">
                                        <div class="bg-[#eee] flex justify-center items-center rounded px-3 font-semibold dark:bg-[#1b2e4b] ltr:mr-2 rtl:ml-2">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24px"
                                                height="24px"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="w-5 h-5"
                                            >
                                                <path
                                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"
                                                ></path>
                                            </svg>
                                        </div>
                                        <input type="text" placeholder="jimmy_turner" class="form-input" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </TabPanel>
                    <TabPanel>
                        <div>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
                                <div class="panel">
                                    <div class="mb-5">
                                        <h5 class="font-semibold text-lg mb-4">Billing Address</h5>
                                        <p>
                                            Changes to your <span class="text-primary">Billing</span> information will take effect starting with scheduled
                                            payment and will be refelected on your next invoice.
                                        </p>
                                    </div>
                                    <div class="mb-5">
                                        <div class="border-b border-[#ebedf2] dark:border-[#1b2e4b]">
                                            <div class="flex items-start justify-between py-3">
                                                <h6 class="text-[#515365] font-bold dark:text-white-dark text-[15px]">
                                                    Address #1
                                                    <span class="block text-white-dark dark:text-white-light font-normal text-xs mt-1"
                                                        >2249 Caynor Circle, New Brunswick, New Jersey</span
                                                    >
                                                </h6>
                                                <div class="flex items-start justify-between ltr:ml-auto rtl:mr-auto">
                                                    <button class="btn btn-dark">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-[#ebedf2] dark:border-[#1b2e4b]">
                                            <div class="flex items-start justify-between py-3">
                                                <h6 class="text-[#515365] font-bold dark:text-white-dark text-[15px]">
                                                    Address #2
                                                    <span class="block text-white-dark dark:text-white-light font-normal text-xs mt-1"
                                                        >4262 Leverton Cove Road, Springfield, Massachusetts</span
                                                    >
                                                </h6>
                                                <div class="flex items-start justify-between ltr:ml-auto rtl:mr-auto">
                                                    <button class="btn btn-dark">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-start justify-between py-3">
                                                <h6 class="text-[#515365] font-bold dark:text-white-dark text-[15px]">
                                                    Address #3
                                                    <span class="block text-white-dark dark:text-white-light font-normal text-xs mt-1"
                                                        >2692 Berkshire Circle, Knoxville, Tennessee</span
                                                    >
                                                </h6>
                                                <div class="flex items-start justify-between ltr:ml-auto rtl:mr-auto">
                                                    <button class="btn btn-dark">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Add Address</button>
                                </div>
                                <div class="panel">
                                    <div class="mb-5">
                                        <h5 class="font-semibold text-lg mb-4">Payment History</h5>
                                        <p>
                                            Changes to your <span class="text-primary">Payment Method</span> information will take effect starting with
                                            scheduled payment and will be refelected on your next invoice.
                                        </p>
                                    </div>
                                    <div class="mb-5">
                                        <div class="border-b border-[#ebedf2] dark:border-[#1b2e4b]">
                                            <div class="flex items-start justify-between py-3">
                                                <div class="flex-none ltr:mr-4 rtl:ml-4">
                                                    <img src="/assets/images/card-americanexpress.svg" alt="" />
                                                </div>
                                                <h6 class="text-[#515365] font-bold dark:text-white-dark text-[15px]">
                                                    Mastercard
                                                    <span class="block text-white-dark dark:text-white-light font-normal text-xs mt-1"
                                                        >XXXX XXXX XXXX 9704</span
                                                    >
                                                </h6>
                                                <div class="flex items-start justify-between ltr:ml-auto rtl:mr-auto">
                                                    <button class="btn btn-dark">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-[#ebedf2] dark:border-[#1b2e4b]">
                                            <div class="flex items-start justify-between py-3">
                                                <div class="flex-none ltr:mr-4 rtl:ml-4">
                                                    <img src="/assets/images/card-mastercard.svg" alt="" />
                                                </div>
                                                <h6 class="text-[#515365] font-bold dark:text-white-dark text-[15px]">
                                                    American Express<span class="block text-white-dark dark:text-white-light font-normal text-xs mt-1"
                                                        >XXXX XXXX XXXX 310</span
                                                    >
                                                </h6>
                                                <div class="flex items-start justify-between ltr:ml-auto rtl:mr-auto">
                                                    <button class="btn btn-dark">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-start justify-between py-3">
                                                <div class="flex-none ltr:mr-4 rtl:ml-4">
                                                    <img src="/assets/images/card-visa.svg" alt="" />
                                                </div>
                                                <h6 class="text-[#515365] font-bold dark:text-white-dark text-[15px]">
                                                    Visa<span class="block text-white-dark dark:text-white-light font-normal text-xs mt-1"
                                                        >XXXX XXXX XXXX 5264</span
                                                    >
                                                </h6>
                                                <div class="flex items-start justify-between ltr:ml-auto rtl:mr-auto">
                                                    <button class="btn btn-dark">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Add Payment Method</button>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                                <div class="panel">
                                    <div class="mb-5">
                                        <h5 class="font-semibold text-lg mb-4">Add Billing Address</h5>
                                        <p>Changes your New <span class="text-primary">Billing</span> Information.</p>
                                    </div>
                                    <div class="mb-5">
                                        <form>
                                            <div class="mb-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                <div>
                                                    <label for="billingName">Name</label>
                                                    <input id="billingName" type="text" placeholder="Enter Name" class="form-input" />
                                                </div>
                                                <div>
                                                    <label for="billingEmail">Email</label>
                                                    <input id="billingEmail" type="email" placeholder="Enter Email" class="form-input" />
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <label for="billingAddress">Address</label>
                                                <input id="billingAddress" type="text" placeholder="Enter Address" class="form-input" />
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-5">
                                                <div class="md:col-span-2">
                                                    <label for="billingCity">City</label>
                                                    <input id="billingCity" type="text" placeholder="Enter City" class="form-input" />
                                                </div>
                                                <div>
                                                    <label for="billingState">State</label>
                                                    <select id="billingState" class="form-select text-white-dark">
                                                        <option>Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="billingZip">Zip</label>
                                                    <input id="billingZip" type="text" placeholder="Enter Zip" class="form-input" />
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary">Add</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="mb-5">
                                        <h5 class="font-semibold text-lg mb-4">Add Payment Method</h5>
                                        <p>Changes your New <span class="text-primary">Payment Method</span> Information.</p>
                                    </div>
                                    <div class="mb-5">
                                        <form>
                                            <div class="mb-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                <div>
                                                    <label for="payBrand">Card Brand</label>
                                                    <select id="payBrand" class="form-select text-white-dark">
                                                        <option selected>Mastercard</option>
                                                        <option>American Express</option>
                                                        <option>Visa</option>
                                                        <option>Discover</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="payNumber">Card Number</label>
                                                    <input id="payNumber" type="text" placeholder="Card Number" class="form-input" />
                                                </div>
                                            </div>
                                            <div class="mb-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                <div>
                                                    <label for="payHolder">Holder Name</label>
                                                    <input id="payHolder" type="text" placeholder="Holder Name" class="form-input" />
                                                </div>
                                                <div>
                                                    <label for="payCvv">CVV/CVV2</label>
                                                    <input id="payCvv" type="text" placeholder="CVV" class="form-input" />
                                                </div>
                                            </div>
                                            <div class="mb-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                <div>
                                                    <label for="payExp">Card Expiry</label>
                                                    <input id="payExp" type="text" placeholder="Card Expiry" class="form-input" />
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary">Add</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </TabPanel>
                    <TabPanel>
                        <div class="switch">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Choose Theme</h5>
                                    <div class="flex justify-around">
                                        <label class="inline-flex cursor-pointer">
                                            <input class="form-radio ltr:mr-4 rtl:ml-4 cursor-pointer" type="radio" name="flexRadioDefault" checked />
                                            <span>
                                                <img class="ms-3" width="100" height="68" alt="settings-dark" src="/assets/images/settings-light.svg" />
                                            </span>
                                        </label>

                                        <label class="inline-flex cursor-pointer">
                                            <input class="form-radio ltr:mr-4 rtl:ml-4 cursor-pointer" type="radio" name="flexRadioDefault" />
                                            <span>
                                                <img class="ms-3" width="100" height="68" alt="settings-light" src="/assets/images/settings-dark.svg" />
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Activity data</h5>
                                    <p>Download your Summary, Task and Payment History Data</p>
                                    <button type="button" class="btn btn-primary">Download Data</button>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Public Profile</h5>
                                    <p>Your <span class="text-primary">Profile</span> will be visible to anyone on the network.</p>
                                    <label class="w-12 h-6 relative">
                                        <input
                                            type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox1"
                                        />
                                        <span
                                            for="custom_switch_checkbox1"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"
                                        ></span>
                                    </label>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Show my email</h5>
                                    <p>Your <span class="text-primary">Email</span> will be visible to anyone on the network.</p>
                                    <label class="w-12 h-6 relative">
                                        <input
                                            type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox2"
                                        />
                                        <span
                                            for="custom_switch_checkbox2"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"
                                        ></span>
                                    </label>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Enable keyboard shortcuts</h5>
                                    <p>When enabled, press <span class="text-primary">ctrl</span> for help</p>
                                    <label class="w-12 h-6 relative">
                                        <input
                                            type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox3"
                                        />
                                        <span
                                            for="custom_switch_checkbox3"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"
                                        ></span>
                                    </label>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Hide left navigation</h5>
                                    <p>Sidebar will be <span class="text-primary">hidden</span> by default</p>
                                    <label class="w-12 h-6 relative">
                                        <input
                                            type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox4"
                                        />
                                        <span
                                            for="custom_switch_checkbox4"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"
                                        ></span>
                                    </label>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Advertisements</h5>
                                    <p>Display <span class="text-primary">Ads</span> on your dashboard</p>
                                    <label class="w-12 h-6 relative">
                                        <input
                                            type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox5"
                                        />
                                        <span
                                            for="custom_switch_checkbox5"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"
                                        ></span>
                                    </label>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Social Profile</h5>
                                    <p>Enable your <span class="text-primary">social</span> profiles on this network</p>
                                    <label class="w-12 h-6 relative">
                                        <input
                                            type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox6"
                                        />
                                        <span
                                            for="custom_switch_checkbox6"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"
                                        ></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </TabPanel>
                    <TabPanel>
                        <div class="switch">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Purge Cache</h5>
                                    <p>Remove the active resource from the cache without waiting for the predetermined cache expiry time.</p>
                                    <button class="btn btn-secondary">Clear</button>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Deactivate Account</h5>
                                    <p>You will not be able to receive messages, notifications for up to 24 hours.</p>
                                    <label class="w-12 h-6 relative">
                                        <input
                                            type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox7"
                                        />
                                        <span
                                            for="custom_switch_checkbox7"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"
                                        ></span>
                                    </label>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Delete Account</h5>
                                    <p>Once you delete the account, there is no going back. Please be certain.</p>
                                    <button class="btn btn-danger btn-delete-account">Delete my account</button>
                                </div>
                            </div>
                        </div>
                    </TabPanel>
                </TabPanels>
            </TabGroup>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
    import { useAppStore } from '@/stores/index';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Account Setting' });
    const store = useAppStore();
</script>
