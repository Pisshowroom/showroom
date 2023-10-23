<template>
    <div>
        <div class="flex xl:flex-row flex-col gap-2.5">
            <div class="panel px-0 flex-1 py-6 ltr:xl:mr-6 rtl:xl:ml-6">
                <div class="flex justify-between flex-wrap px-4">
                    <div class="mb-6 lg:w-1/2 w-full">
                        <div class="flex items-center text-black dark:text-white shrink-0">
                            <img src="/assets/images/logo.svg" alt="" class="w-14" />
                        </div>
                        <div class="space-y-1 mt-6 text-gray-500 dark:text-gray-400">
                            <div>13 Tetrick Road, Cypress Gardens, Florida, 33884, US</div>
                            <div>vristo@gmail.com</div>
                            <div>+1 (070) 123-4567</div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 w-full lg:max-w-fit">
                        <div class="flex items-center">
                            <label for="number" class="flex-1 ltr:mr-2 rtl:ml-2 mb-0">Invoice Number</label>
                            <input
                                id="number"
                                type="text"
                                name="inv-num"
                                class="form-input lg:w-[250px] w-2/3"
                                placeholder="#8801"
                                v-model="params.invoiceNo"
                            />
                        </div>
                        <div class="flex items-center mt-4">
                            <label for="invoiceLabel" class="flex-1 ltr:mr-2 rtl:ml-2 mb-0">Invoice Label</label>
                            <input
                                id="invoiceLabel"
                                type="text"
                                name="inv-label"
                                class="form-input lg:w-[250px] w-2/3"
                                placeholder="Enter Invoice Label"
                                v-model="params.title"
                            />
                        </div>
                        <div class="flex items-center mt-4">
                            <label for="startDate" class="flex-1 ltr:mr-2 rtl:ml-2 mb-0">Invoice Date</label>
                            <input id="startDate" type="date" name="inv-date" class="form-input lg:w-[250px] w-2/3" v-model="params.invoiceDate" />
                        </div>
                        <div class="flex items-center mt-4">
                            <label for="dueDate" class="flex-1 ltr:mr-2 rtl:ml-2 mb-0">Due Date</label>
                            <input id="dueDate" type="date" name="due-date" class="form-input lg:w-[250px] w-2/3" v-model="params.dueDate" />
                        </div>
                    </div>
                </div>
                <hr class="border-[#e0e6ed] dark:border-[#1b2e4b] my-6" />
                <div class="mt-8 px-4">
                    <div class="flex justify-between lg:flex-row flex-col">
                        <div class="lg:w-1/2 w-full ltr:lg:mr-6 rtl:lg:ml-6 mb-6">
                            <div class="text-lg">Bill To :-</div>
                            <div class="mt-4 flex items-center">
                                <label for="reciever-name" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Name</label>
                                <input
                                    id="reciever-name"
                                    type="text"
                                    name="reciever-name"
                                    class="form-input flex-1"
                                    v-model="params.to.name"
                                    placeholder="Enter Name"
                                />
                            </div>
                            <div class="mt-4 flex items-center">
                                <label for="reciever-email" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Email</label>
                                <input
                                    id="reciever-email"
                                    type="email"
                                    name="reciever-email"
                                    class="form-input flex-1"
                                    v-model="params.to.email"
                                    placeholder="Enter Email"
                                />
                            </div>
                            <div class="mt-4 flex items-center">
                                <label for="reciever-address" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Address</label>
                                <input
                                    id="reciever-address"
                                    type="text"
                                    name="reciever-address"
                                    class="form-input flex-1"
                                    v-model="params.to.address"
                                    placeholder="Enter Address"
                                />
                            </div>
                            <div class="mt-4 flex items-center">
                                <label for="reciever-number" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Phone Number</label>
                                <input
                                    id="reciever-number"
                                    type="text"
                                    name="reciever-number"
                                    class="form-input flex-1"
                                    v-model="params.to.phone"
                                    placeholder="Enter Phone number"
                                />
                            </div>
                        </div>
                        <div class="lg:w-1/2 w-full">
                            <div class="text-lg">Payment Details :-</div>
                            <div class="flex items-center mt-4">
                                <label for="acno" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Account Number</label>
                                <input
                                    id="acno"
                                    type="text"
                                    name="acno"
                                    class="form-input flex-1"
                                    v-model="params.bankInfo.no"
                                    placeholder="Enter Account Number"
                                />
                            </div>
                            <div class="flex items-center mt-4">
                                <label for="bank-name" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Bank Name</label>
                                <input
                                    id="bank-name"
                                    type="text"
                                    name="bank-name"
                                    class="form-input flex-1"
                                    v-model="params.bankInfo.name"
                                    placeholder="Enter Bank Name"
                                />
                            </div>
                            <div class="flex items-center mt-4">
                                <label for="swift-code" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">SWIFT Number</label>
                                <input
                                    id="swift-code"
                                    type="text"
                                    name="swift-code"
                                    class="form-input flex-1"
                                    v-model="params.bankInfo.swiftCode"
                                    placeholder="Enter SWIFT Number"
                                />
                            </div>
                            <div class="flex items-center mt-4">
                                <label for="iban-code" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">IBAN Number</label>
                                <input
                                    id="iban-code"
                                    type="text"
                                    name="iban-code"
                                    class="form-input flex-1"
                                    v-model="params.bankInfo.ibanNo"
                                    placeholder="Enter IBAN Number"
                                />
                            </div>
                            <div class="flex items-center mt-4">
                                <label for="country" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Country</label>
                                <select id="country" name="country" class="form-select flex-1" v-model="params.bankInfo.country">
                                    <option value="">Choose Country</option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Norway">Norway</option>
                                    <option value="New-Zealand">New Zealand</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American-Samoa">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Antigua Barbuda">Antigua &amp; Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia">Bosnia &amp; Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British">British Virgin Islands</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Cape">Cape Verde</option>
                                    <option value="Cayman">Cayman Islands</option>
                                    <option value="Central-African">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Costa-Rica">Costa Rica</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czechia">Czechia</option>
                                    <option value="Côte">Côte d'Ivoire</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El-Salvador">El Salvador</option>
                                    <option value="Equatorial-Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong-Kong">Hong Kong SAR China</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar (Burma)</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="North-Korea">North Korea</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian">Palestinian Territories</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Réunion">Réunion</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San-Marino">San Marino</option>
                                    <option value="Saudi-Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra-Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon-Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South-Africa">South Africa</option>
                                    <option value="South-Korea">South Korea</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri-Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Sao-Tome-and-Principe">São Tomé &amp; Príncipe</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad-and-Tobago">Trinidad &amp; Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="UAE">United Arab Emirates</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th class="w-1">Quantity</th>
                                    <th class="w-1">Price</th>
                                    <th>Total</th>
                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-if="items.length <= 0">
                                    <tr>
                                        <td colspan="5" class="!text-center font-semibold">No Item Available</td>
                                    </tr>
                                </template>
                                <template v-for="(item, i) in items" :key="i">
                                    <tr class="align-top">
                                        <td>
                                            <input type="text" class="form-input min-w-[200px]" placeholder="Enter Item Name" v-model="item.title" />
                                            <textarea class="form-textarea mt-4" placeholder="Enter Description" v-model="item.description"></textarea>
                                        </td>
                                        <td><input type="number" class="form-input w-32" placeholder="Quantity" v-model="item.quantity" min="0"/></td>
                                        <td><input type="number" class="form-input w-32" placeholder="Price" v-model="item.amount" min="0"/></td>
                                        <td>${{ item.amount * item.quantity }}</td>
                                        <td>
                                            <button type="button" @click="removeItem(item)">
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
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-between sm:flex-row flex-col mt-6 px-4">
                        <div class="sm:mb-0 mb-6">
                            <button type="button" class="btn btn-primary" @click="addItem()">Add Item</button>
                        </div>
                        <div class="sm:w-2/5">
                            <div class="flex items-center justify-between">
                                <div>Subtotal</div>
                                <div>$0.00</div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <div>Tax(%)</div>
                                <div>0%</div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <div>Shipping Rate($)</div>
                                <div>$0.00</div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <div>Discount(%)</div>
                                <div>0%</div>
                            </div>
                            <div class="flex items-center justify-between mt-4 font-semibold">
                                <div>Total</div>
                                <div>$0.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 px-4">
                    <div>
                        <label for="notes">Notes</label>
                        <textarea id="notes" name="notes" class="form-textarea min-h-[130px]" placeholder="Notes...." v-model="params.notes"></textarea>
                    </div>
                </div>
            </div>
            <div class="xl:w-96 w-full xl:mt-0 mt-6">
                <div class="panel mb-5">
                    <div>
                        <label for="currency">Currency</label>
                        <select id="currency" name="currency" class="form-select" v-model="selectedCurrency">
                            <template v-for="(currency, i) in currencyList" :key="i">
                                <option :value="currency">{{ currency }}</option>
                            </template>
                        </select>
                    </div>
                    <div class="mt-4">
                        <div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
                            <div>
                                <label for="tax">Tax(%) </label>
                                <input v-model="tax" id="tax" type="number" name="tax" class="form-input" placeholder="Tax" />
                            </div>
                            <div>
                                <label for="discount">Discount(%) </label>
                                <input id="discount" type="number" name="discount" class="form-input" placeholder="Discount" v-model="discount" />
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div>
                            <label for="shipping-charge">Shipping Charge($) </label>
                            <input
                                id="shipping-charge"
                                type="number"
                                name="shipping-charge"
                                class="form-input"
                                placeholder="Shipping Charge"
                                v-model="shippingCharge"
                            />
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="payment-method">Accept Payment Via</label>
                        <select id="payment-method" name="payment-method" class="form-select" v-model="paymentMethod">
                            <option value="">Select Payment</option>
                            <option value="bank">Bank Account</option>
                            <option value="paypal">Paypal</option>
                            <option value="upi">UPI Transfer</option>
                        </select>
                    </div>
                </div>
                <div class="panel">
                    <div class="grid xl:grid-cols-1 lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4">
                        <button type="button" class="btn btn-success w-full gap-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                                <path
                                    d="M3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 11.6585 22 11.4878 21.9848 11.3142C21.9142 10.5049 21.586 9.71257 21.0637 9.09034C20.9516 8.95687 20.828 8.83317 20.5806 8.58578L15.4142 3.41944C15.1668 3.17206 15.0431 3.04835 14.9097 2.93631C14.2874 2.414 13.4951 2.08581 12.6858 2.01515C12.5122 2 12.3415 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                                <path
                                    d="M17 22V21C17 19.1144 17 18.1716 16.4142 17.5858C15.8284 17 14.8856 17 13 17H11C9.11438 17 8.17157 17 7.58579 17.5858C7 18.1716 7 19.1144 7 21V22"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                                <path opacity="0.5" d="M7 8H13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            Save
                        </button>

                        <button type="button" class="btn btn-info w-full gap-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                                <path
                                    d="M17.4975 18.4851L20.6281 9.09373C21.8764 5.34874 22.5006 3.47624 21.5122 2.48782C20.5237 1.49939 18.6511 2.12356 14.906 3.37189L5.57477 6.48218C3.49295 7.1761 2.45203 7.52305 2.13608 8.28637C2.06182 8.46577 2.01692 8.65596 2.00311 8.84963C1.94433 9.67365 2.72018 10.4495 4.27188 12.0011L4.55451 12.2837C4.80921 12.5384 4.93655 12.6658 5.03282 12.8075C5.22269 13.0871 5.33046 13.4143 5.34393 13.7519C5.35076 13.9232 5.32403 14.1013 5.27057 14.4574C5.07488 15.7612 4.97703 16.4131 5.0923 16.9147C5.32205 17.9146 6.09599 18.6995 7.09257 18.9433C7.59255 19.0656 8.24576 18.977 9.5522 18.7997L9.62363 18.79C9.99191 18.74 10.1761 18.715 10.3529 18.7257C10.6738 18.745 10.9838 18.8496 11.251 19.0285C11.3981 19.1271 11.5295 19.2585 11.7923 19.5213L12.0436 19.7725C13.5539 21.2828 14.309 22.0379 15.1101 21.9985C15.3309 21.9877 15.5479 21.9365 15.7503 21.8474C16.4844 21.5244 16.8221 20.5113 17.4975 18.4851Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                                <path opacity="0.5" d="M6 18L21 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            Send Invoice
                        </button>

                        <router-link to="/apps/invoice/preview" class="btn btn-primary w-full gap-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                                <path
                                    opacity="0.5"
                                    d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                ></path>
                                <path
                                    d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                ></path>
                            </svg>
                            Preview
                        </router-link>

                        <button type="button" class="btn btn-secondary w-full gap-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                                <path
                                    opacity="0.5"
                                    d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                ></path>
                                <path
                                    d="M12 2L12 15M12 15L9 11.5M12 15L15 11.5"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                            </svg>
                            Download
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref, onMounted } from 'vue';
    import { useMeta } from '@/composables/use-meta';
    useMeta({ title: 'Invoice Add' });

    const items: any = ref([]);
    const selectedFile = ref(null);
    const params = ref({
        title: '',
        invoiceNo: '',
        to: {
            name: '',
            email: '',
            address: '',
            phone: '',
        },

        invoiceDate: '',
        dueDate: '',
        bankInfo: {
            no: '',
            name: '',
            swiftCode: '',
            country: '',
            ibanNo: '',
        },
        notes: '',
    });
    const currencyList = ref([
        'USD - US Dollar',
        'GBP - British Pound',
        'IDR - Indonesian Rupiah',
        'INR - Indian Rupee',
        'BRL - Brazilian Real',
        'EUR - Germany (Euro)',
        'TRY - Turkish Lira',
    ]);
    const selectedCurrency = ref('USD - US Dollar');
    const tax = ref<number>(0);
    const discount = ref<number>(0);
    const shippingCharge = ref<number>(0);
    const paymentMethod = ref('');

    onMounted(() => {
        //set default data
        items.value.push({
            id: 1,
            title: '',
            description: '',
            rate: 0,
            quantity: 0,
            amount: 0,
        });
    });

    const addItem = () => {
        let maxId = 0;
        if (items.value && items.value.length) {
            maxId = items.value.reduce((max: number, character: any) => (character.id > max ? character.id : max), items.value[0].id);
        }
        items.value.push({
            id: maxId + 1,
            title: '',
            description: '',
            rate: 0,
            quantity: 0,
            amount: 0,
        });
    };

    const removeItem = (item: any = null) => {
        items.value = items.value.filter((d: any) => d.id != item.id);
    };
</script>
