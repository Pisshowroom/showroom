import{c as m,_ as n}from"./codePreview.e48b254d.js";import{d as b,u,o as r,b as h,e,g as s,Y as a,w as d,p as c,i as l}from"./main.ef0078b2.js";const f=e("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[e("li",null,[e("a",{href:"javascript:;",class:"text-primary hover:underline"},"Forms")]),e("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[e("span",null,"Layouts")])],-1),v={class:"pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6"},x={class:"panel"},w={class:"flex items-center justify-between mb-5"},k=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Stack Forms",-1),y=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),g=[y],_=l('<div class="mb-5"><form class="space-y-5"><div><input type="email" placeholder="Enter Email" class="form-input"><span class="text-white-dark text-[11px] inline-block mt-1">We&#39;ll never share your email with anyone else.</span></div><div><input type="password" placeholder="Enter Password" class="form-input"></div><div><label class="inline-flex items-center mt-1 cursor-pointer"><input type="checkbox" class="form-checkbox"><span class="text-white-dark">Subscribe to weekly newsletter</span></label></div><button type="submit" class="btn btn-primary !mt-6">Submit</button></form></div>',1),C=e("pre",null,`<!-- stack forms -->
<form class="space-y-5">
    <div>
        <input type="email" placeholder="Enter Email" class="form-input" />
        <span class="text-white-dark text-[11px] inline-block mt-1">We'll never share your email with anyone else.</span>
    </div>
    <div>
        <input type="password" placeholder="Enter Password" class="form-input" />
    </div>
    <div>
        <label class="inline-flex items-center mt-1 cursor-pointer">
            <input type="checkbox" class="form-checkbox" />
            <span class="text-white-dark"">Subscribe to weekly newsletter</span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary !mt-6">Submit</button>
</form>
`,-1),E={class:"panel"},L={class:"flex items-center justify-between mb-5"},P=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Horizontal form",-1),S=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),M=[S],A=l('<div class="mb-5"><form class="space-y-5"><div class="flex sm:flex-row flex-col"><label for="horizontalEmail" class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Email</label><input id="horizontalEmail" type="email" placeholder="Enter Email" class="form-input flex-1"></div><div class="flex sm:flex-row flex-col"><label for="horizontalPassword" class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Password</label><input id="horizontalPassword" type="password" placeholder="Enter Password" class="form-input flex-1"></div><div class="flex sm:flex-row flex-col"><label class="sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Choose Segements</label><div class="flex-1"><div class="mb-2"><label class="inline-flex mt-1 cursor-pointer"><input type="radio" name="segements" class="form-radio"><span class="text-white-dark">Segements 1</span></label></div><div class="mb-2"><label class="inline-flex mt-1 cursor-pointer"><input type="radio" name="segements" class="form-radio"><span class="text-white-dark">Segements 2</span></label></div><div><label class="inline-flex mt-1"><input type="radio" name="segements" class="form-radio" disabled><span class="text-white-dark">Segements 3 ( disabled )</span></label></div></div></div><div class="flex sm:flex-row flex-col"><label class="font-semibold sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Apply</label><label class="inline-flex mb-0 cursor-pointer"><input type="checkbox" class="form-checkbox"><span class="text-white-dark">Terms Conditions</span></label></div><button type="submit" class="btn btn-primary !mt-6">Submit</button></form></div>',1),j=e("pre",null,`<!-- horizontal form -->
<form class="space-y-5">
    <div class="flex sm:flex-row flex-col">
        <label for="horizontalEmail" class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Email</label>
        <input id="horizontalEmail" type="email" placeholder="Enter Email" class="form-input flex-1" />
    </div>
    <div class="flex sm:flex-row flex-col">
        <label for="horizontalPassword" class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Password</label>
        <input id="horizontalPassword" type="password" placeholder="Enter Password" class="form-input flex-1" />
    </div>
    <div class="flex sm:flex-row flex-col">
        <label class="sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Choose Segements</label>
        <div class="flex-1">
            <div class="mb-2">
                <label class="inline-flex mt-1 cursor-pointer">
                    <input type="radio" name="segements" class="form-radio" />
                    <span class="text-white-dark"">Segements 1</span>
                </label>
            </div>
            <div class="mb-2">
                <label class="inline-flex mt-1 cursor-pointer">
                    <input type="radio" name="segements" class="form-radio" />
                    <span class="text-white-dark"">Segements 2</span>
                </label>
            </div>
            <div>
                <label class="inline-flex mt-1">
                    <input type="radio" name="segements" class="form-radio" disabled />
                    <span class="text-white-dark"">Segements 3 ( disabled )</span>
                </label>
            </div>
        </div>
    </div>
    <div class="flex sm:flex-row flex-col">
        <label class="font-semibold text-white-dark sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Apply</label>
        <label class="inline-flex mb-0 cursor-pointer">
            <input type="checkbox" class="form-checkbox" />
            <span class="text-white-dark" relative">Terms Conditions</span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary !mt-6">Submit</button>
</form>
`,-1),F={class:"panel"},B={class:"flex items-center justify-between mb-5"},N=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Registration Forms",-1),z=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),R=[z],$=l('<div class="mb-5"><form class="space-y-5"><div><input type="email" placeholder="Enter Email Address *" class="form-input"></div><div><input type="password" placeholder="Enter Password *" class="form-input"></div><div><input type="password" placeholder="Enter Confirm Password *" class="form-input"></div><div class="!mt-2"><span class="text-white-dark text-[11px] inline-block">*Required Fields</span></div><div><label class="inline-flex cursor-pointer"><input type="checkbox" class="form-checkbox"><span class="text-white-dark">Subscribe to weekly newsletter</span></label></div><button type="submit" class="btn btn-primary !mt-6">Submit</button></form></div>',1),W=e("pre",null,`<!-- registration form -->
<form class="space-y-5">
    <div>
        <input type="email" placeholder="Enter Email Address *" class="form-input" />
    </div>
    <div>
        <input type="password" placeholder="Enter Password *" class="form-input" />
    </div>
    <div>
        <input type="password" placeholder="Enter Confirm Password *" class="form-input" />
    </div>
    <div class="!mt-2">
        <span class="text-white-dark text-[11px] inline-block">*Required Fields</span>
    </div>
    <div>
        <label class="inline-flex cursor-pointer">
            <input type="checkbox" class="form-checkbox" />
            <span class="text-white-dark"">Subscribe to weekly newsletter</span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary !mt-6">Submit</button>
</form>
`,-1),Z={class:"panel"},q={class:"flex items-center justify-between mb-5"},D=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Login Forms",-1),J=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),U=[J],V=l('<div class="mb-5"><form class="space-y-5"><div><input type="text" placeholder="Enter Full Name *" class="form-input"></div><div><input type="email" placeholder="Enter Email Address *" class="form-input"></div><div><input type="password" placeholder="Enter Password *" class="form-input"></div><div class="!mt-2"><span class="text-white-dark text-[11px] inline-block">*Required Fields</span></div><button type="submit" class="btn btn-primary !mt-6">Submit</button></form></div>',1),T=e("pre",null,`<!-- login form -->
<form class="space-y-5">
    <div>
        <input type="text" placeholder="Enter Full Name *" class="form-input" />
    </div>
    <div>
        <input type="email" placeholder="Enter Email address *" class="form-input" />
    </div>
    <div>
        <input type="password" placeholder="Enter Password *" class="form-input" />
    </div>
    <div class="!mt-2">
        <span class="text-white-dark text-[11px] inline-block">*Required Fields</span>
    </div>
    <button type="submit" class="btn btn-primary !mt-6">Submit</button>
</form>
`,-1),G={class:"panel"},H={class:"flex items-center justify-between mb-5"},I=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Forms Grid",-1),Y=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),K=[Y],O=l('<div class="mb-5"><form class="space-y-5"><div class="grid grid-cols-1 sm:grid-cols-2 gap-4"><div><label for="gridEmail">Email</label><input id="gridEmail" type="email" placeholder="Enter Email" class="form-input"></div><div><label for="gridPassword">Password</label><input id="gridPassword" type="Password" placeholder="Enter Password" class="form-input"></div></div><div><label for="gridAddress1">Address</label><input id="gridAddress1" type="text" placeholder="Enter Address" value="1234 Main St" class="form-input"></div><div><label for="gridAddress2">Address2</label><input id="gridAddress2" type="text" placeholder="Enter Address2" value="Apartment, studio, or floor" class="form-input"></div><div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4"><div class="md:col-span-2"><label for="gridCity">City</label><input id="gridCity" type="text" placeholder="Enter City" class="form-input"></div><div><label for="gridState">State</label><select id="gridState" class="form-select text-white-dark"><option>Choose...</option><option>...</option></select></div><div><label for="gridZip">Zip</label><input id="gridZip" type="text" placeholder="Enter Zip" class="form-input"></div></div><div><label class="flex items-center mt-1 cursor-pointer"><input type="checkbox" class="form-checkbox"><span class="text-white-dark">Check me out</span></label></div><button type="submit" class="btn btn-primary !mt-6">Submit</button></form></div>',1),Q=e("pre",null,`<!-- forms grid -->
<form class="space-y-5">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="gridEmail">Email</label>
            <input id="gridEmail" type="email" placeholder="Enter Email" class="form-input" />
        </div>
        <div>
            <label for="gridPassword">Password</label>
            <input id="gridPassword" type="Password" placeholder="Enter Password" class="form-input" />
        </div>
    </div>
    <div>
        <label for="gridAddress1">Address</label>
        <input id="gridAddress1" type="text" placeholder="Enter Address" value="1234 Main St" class="form-input" />
    </div>
    <div>
        <label for="gridAddress2">Address2</label>
        <input id="gridAddress2" type="text" placeholder="Enter Address2" value="Apartment, studio, or floor" class="form-input" />
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <div class="md:col-span-2">
            <label for="gridCity">City</label>
            <input id="gridCity" type="text" placeholder="Enter City" class="form-input" />
        </div>
        <div>
            <label for="gridState">State</label>
            <select id="gridState" class="form-select text-white-dark">
                <option>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div>
            <label for="gridZip">Zip</label>
            <input id="gridZip" type="text" placeholder="Enter Zip" class="form-input" />
        </div>
    </div>
    <div>
        <label class="flex items-center mt-1 cursor-pointer">
            <input type="checkbox" class="form-checkbox" />
            <span class="text-white-dark"">Check me out</span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary !mt-6">Submit</button>
</form>
`,-1),X={class:"panel lg:col-span-2"},ee={class:"flex items-center justify-between mb-5"},te=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Inline Forms",-1),se=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),le=[se],re=l('<div class="mb-5"><form><div class="flex flex-col md:flex-row gap-4 items-center max-w-[900px] mx-auto"><input type="email" placeholder="Jane Doe" class="form-input flex-1"><div class="flex flex-1"><div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"> @ </div><input type="text" placeholder="Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none"></div><div><label class="flex items-center"><input type="checkbox" class="form-checkbox"><span class="text-white-dark">Remember me</span></label></div><button type="submit" class="btn btn-primary py-2.5">Submit</button></div></form></div>',1),oe=e("pre",null,`<!-- inline form -->
<form>
    <div class="flex flex-col md:flex-row gap-4 items-center max-w-[900px] mx-auto">
        <input type="email" placeholder="Jane Doe" class="form-input flex-1" />
        <div class="flex flex-1">
            <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">@</div>
            <input type="text" placeholder="Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
        </div>
        <div>
            <label class="flex items-center">
                <input type="checkbox" class="form-checkbox" />
                <span class="text-white-dark">Remember me</span>
            </label>
        </div>
        <button type="submit" class="btn btn-primary py-2.5">Submit</button>
    </div>
</form>
`,-1),ie={class:"panel lg:col-span-2"},ne={class:"flex items-center justify-between mb-5"},ae=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Auto-sizing",-1),de=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ce=[de],pe=l('<div class="mb-5"><form><div class="flex flex-col md:flex-row gap-4 items-center max-w-[900px] mx-auto"><input type="email" placeholder="Jane Doe" class="form-input flex-1"><div class="flex flex-1"><div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"> @ </div><input type="text" placeholder="Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none"></div><div><label class="flex items-center cursor-pointer"><input type="checkbox" class="form-checkbox"><span class="text-white-dark">Remember me</span></label></div><button type="submit" class="btn btn-primary py-2.5">Submit</button></div></form></div>',1),me=e("pre",null,`<!-- auto sizing-->
<form>
<div class="flex flex-col md:flex-row gap-4 items-center max-w-[900px] mx-auto">
    <input type="email" placeholder="Jane Doe" class="form-input flex-1" />
    <div class="flex flex-1">
        <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">@</div>
        <input type="text" placeholder="Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
    </div>
    <div>
        <label class="flex items-center cursor-pointer">
            <input type="checkbox" class="form-checkbox" />
            <span class="text-white-dark">Remember me</span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary py-2.5">Submit</button>
</div>
</form>
`,-1),be={class:"panel lg:row-start-3 lg:col-start-2"},ue={class:"flex items-center justify-between mb-5"},he=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Actions Buttons",-1),fe=l('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ve=[fe],xe=l('<div class="mb-5"><form class="space-y-5"><div><label for="actionName">Full Name:</label><input id="actionName" type="text" placeholder="Enter Full Name" class="form-input"></div><div><label for="actionEmail">Email:</label><div class="flex flex-1"><div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"> @ </div><input id="actionEmail" type="email" placeholder="" class="form-input ltr:rounded-l-none rtl:rounded-r-none"></div></div><div><label for="actionWeb">Website:</label><input id="actionWeb" type="text" placeholder="https://" class="form-input"></div><div><label for="actionPassword">Password:</label><input id="actionPassword" type="password" placeholder="Enter Password" class="form-input"></div><div><label for="actionCpass">Confirm Password:</label><input id="actionCpass" type="password" placeholder="Enter Confirm Password" class="form-input"></div><button type="submit" class="btn btn-primary !mt-6">Submit</button></form></div>',1),we=e("pre",null,`<!-- action button -->
<form class="space-y-5">
    <div>
        <label for="actionName">Full Name:</label>
        <input id="actionName" type="text" placeholder="Enter Full Name" class="form-input" />
    </div>
    <div>
        <label for="actionEmail">Email:</label>
        <div class="flex flex-1">
            <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">@</div>
            <input id="actionEmail" type="email" placeholder="" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
        </div>
    </div>
    <div>
        <label for="actionWeb">Website:</label>
        <input id="actionWeb" type="text" placeholder="https://" class="form-input" />
    </div>
    <div>
        <label for="actionPassword">Password:</label>
        <input id="actionPassword" type="password" placeholder="Enter Password" class="form-input" />
    </div>
    <div>
        <label for="actionCpass">Confirm Password:</label>
        <input id="actionCpass" type="password" placeholder="Enter Confirm Password" class="form-input" />
    </div>
    <button type="submit" class="btn btn-primary !mt-6">Submit</button>
</form>
`,-1),Ce=b({__name:"layouts",setup(ke){u({title:"Form Layouts"});const{codeArr:o,toggleCode:i}=m();return(ye,t)=>(r(),h("div",null,[f,e("div",v,[e("div",x,[e("div",w,[k,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[0]||(t[0]=p=>s(i)("code1"))},g)]),_,s(o).includes("code1")?(r(),a(n,{key:0},{default:d(()=>[C]),_:1})):c("",!0)]),e("div",E,[e("div",L,[P,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[1]||(t[1]=p=>s(i)("code2"))},M)]),A,s(o).includes("code2")?(r(),a(n,{key:0},{default:d(()=>[j]),_:1})):c("",!0)]),e("div",F,[e("div",B,[N,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[2]||(t[2]=p=>s(i)("code3"))},R)]),$,s(o).includes("code3")?(r(),a(n,{key:0},{default:d(()=>[W]),_:1})):c("",!0)]),e("div",Z,[e("div",q,[D,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[3]||(t[3]=p=>s(i)("code4"))},U)]),V,s(o).includes("code4")?(r(),a(n,{key:0},{default:d(()=>[T]),_:1})):c("",!0)]),e("div",G,[e("div",H,[I,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[4]||(t[4]=p=>s(i)("code5"))},K)]),O,s(o).includes("code5")?(r(),a(n,{key:0},{default:d(()=>[Q]),_:1})):c("",!0)]),e("div",X,[e("div",ee,[te,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[5]||(t[5]=p=>s(i)("code6"))},le)]),re,s(o).includes("code6")?(r(),a(n,{key:0},{default:d(()=>[oe]),_:1})):c("",!0)]),e("div",ie,[e("div",ne,[ae,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[6]||(t[6]=p=>s(i)("code7"))},ce)]),pe,s(o).includes("code7")?(r(),a(n,{key:0},{default:d(()=>[me]),_:1})):c("",!0)]),e("div",be,[e("div",ue,[he,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:t[7]||(t[7]=p=>s(i)("code8"))},ve)]),xe,s(o).includes("code8")?(r(),a(n,{key:0},{default:d(()=>[we]),_:1})):c("",!0)])])]))}});export{Ce as default};
