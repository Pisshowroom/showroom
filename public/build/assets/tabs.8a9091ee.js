import{c as w,_ as b}from"./codePreview.d8601baa.js";import{d as k,u as _,o as u,e as C,f as e,h as t,g as a,w as i,Y as h,p as f,j as c,n as l,k as d}from"./main.d137c7f3.js";import{x as v,I as x,y as r,S as g,g as s}from"./tabs.d90ca235.js";import"./dom.588f4eae.js";import"./micro-task.ede79437.js";import"./use-resolve-button-type.9f7d9614.js";const q=e("ul",{class:"flex space-x-2 rtl:space-x-reverse"},[e("li",null,[e("a",{href:"javascript:;",class:"text-primary hover:underline"},"Components")]),e("li",{class:"before:content-['/'] ltr:before:mr-2 rtl:before:ml-2"},[e("span",null,"Tabs")])],-1),y={class:"pt-5 space-y-8"},T=c('<div class="panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap"><div class="ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"><path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path><path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg></div><span class="ltr:mr-3 rtl:ml-3">Documentation: </span><a href="https://headlessui.com/vue/tabs" target="_blank" class="block hover:underline">https://headlessui.com/vue/tabs</a></div>',1),L={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},j={class:"panel"},P={class:"flex items-center justify-between mb-5"},M=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Simple Tabs",-1),U=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),D=[U],G=e("a",{href:"javascript:;",class:"p-3.5 py-2 -mb-[1px] block pointer-events-none text-white-light dark:text-dark"},"Disabled",-1),B=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),H=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),N=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),W=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),E=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),F=e("pre",null,`<!-- simple tabs -->
<TabGroup as="div" class="mb-5">
  <TabList class="flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]">
    <Tab as="template" v-slot="{ selected }">
      <a
        href="javascript:;"
        class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none transition duration-300"
        :class="{ '!border-white-light !border-b-white  text-primary dark:!border-[#191e3a] dark:!border-b-black': selected }"
        >Home</a
      >
    </Tab>
    <Tab as="template" v-slot="{ selected }">
      <a
        href="javascript:;"
        class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none transition duration-300"
        :class="{ '!border-white-light !border-b-white text-primary dark:!border-[#191e3a] dark:!border-b-black': selected }"
        >Profile</a
      >
    </Tab>
    <Tab as="template" v-slot="{ selected }">
      <a
        href="javascript:;"
        class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none transition duration-300"
        :class="{ '!border-white-light !border-b-white text-primary dark:!border-[#191e3a] dark:!border-b-black': selected }"
        >Contact</a
      >
    </Tab>
    <Tab as="template" disabled>
      <a href="javascript:;" class="p-3.5 py-2 -mb-[1px] block pointer-events-none text-white-light dark:text-dark">Disabled</a>
    </Tab>
  </TabList>
  <TabPanels class="pt-5 flex-1 text-sm">
    <TabPanel>
      <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
      <p class="mb-4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
    </TabPanel>
    <TabPanel>
      <div class="flex items-start">
        <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
          <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
        </div>
        <div class="flex-auto">
          <h5 class="text-xl font-medium mb-4">Media heading</h5>
          <p class="text-white-dark">
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
            nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </p>
        </div>
      </div>
    </TabPanel>
    <TabPanel>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </TabPanel>
    <TabPanel>Disabled</TabPanel>
  </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),V={class:"panel"},$={class:"flex items-center justify-between mb-5"},S=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Simple Pills",-1),Z=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),I=[Z],J=e("a",{href:"javascript:;",class:"p-3.5 py-2 -mb-[1px] block rounded pointer-events-none text-white-light dark:text-dark"},"Disabled",-1),R=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),A=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),z=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Y=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),K=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),O=e("pre",null,`<!-- simple pills -->
<TabGroup as="div" class="mb-5">
  <TabList class="flex flex-wrap mt-3">
    <Tab as="template" v-slot="{ selected }">
      <a
        href="javascript:;"
        class="p-3.5 py-2 -mb-[1px] ltr:mr-2 rtl:ml-2 block rounded hover:bg-primary hover:text-white !outline-none transition duration-300"
        :class="{ 'bg-primary text-white': selected === 'home' }"
        >Home</a
      >
    </Tab>
    <Tab as="template" v-slot="{ selected }">
      <a
        href="javascript:;"
        class="p-3.5 py-2 -mb-[1px] ltr:mr-2 rtl:ml-2 block rounded hover:bg-primary hover:text-white !outline-none transition duration-300"
        :class="{ 'bg-primary text-white': selected === 'profile' }"
        >Profile</a
      >
    </Tab>
    <Tab as="template" v-slot="{ selected }">
      <a
        href="javascript:;"
        class="p-3.5 py-2 -mb-[1px] ltr:mr-2 rtl:ml-2 block rounded hover:bg-primary hover:text-white !outline-none transition duration-300"
        :class="{ 'bg-primary text-white': selected === 'contact' }"
        >Contact</a
      >
    </Tab>
    <Tab as="template" disabled>
      <a href="javascript:;" class="p-3.5 py-2 -mb-[1px] block rounded pointer-events-none text-white-light dark:text-dark">Disabled</a>
    </Tab>
  </TabList>
  <TabPanels class="pt-5 flex-1 text-sm">
    <TabPanel>
      <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
      <p class="mb-4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
    </TabPanel>
    <TabPanel>
      <div class="flex items-start">
        <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
          <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
        </div>
        <div class="flex-auto">
          <h5 class="text-xl font-medium mb-4">Media heading</h5>
          <p class="text-white-dark">
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
            nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </p>
        </div>
      </div>
    </TabPanel>
    <TabPanel>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </TabPanel>
    <TabPanel>Disabled</TabPanel>
  </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),Q={class:"panel"},X={class:"flex items-center justify-between mb-5"},ee=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Icon Tabs",-1),te=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ie=[te],ae=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("path",{opacity:"0.5",d:"M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z",stroke:"currentColor","stroke-width":"1.5"}),e("path",{d:"M12 15L12 18",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),oe=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("circle",{cx:"12",cy:"6",r:"4",stroke:"currentColor","stroke-width":"1.5"}),e("ellipse",{opacity:"0.5",cx:"12",cy:"17",rx:"7",ry:"4",stroke:"currentColor","stroke-width":"1.5"})],-1),re=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("path",{d:"M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),se=e("a",{href:"javascript:;",class:"p-3.5 py-2 -mb-[1px] flex items-center pointer-events-none text-white-light dark:text-dark"},[e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("circle",{opacity:"0.5",cx:"12",cy:"12",r:"10",stroke:"currentColor","stroke-width":"1.5"}),e("path",{d:"M12 7V13",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"}),e("circle",{cx:"12",cy:"16",r:"1",fill:"currentColor"})]),d(" Disabled ")],-1),le=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),ne=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),de=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),ue=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),ce=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),me=e("pre",null,`<!-- icon tabs -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300"
                :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }"
            >
                <svg> ... </svg>
                Home
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300"
                :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }"
            >
                <svg> ... </svg>
                Profile
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300"
                :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }"
            >
                <svg> ... </svg>
                Contact
            </a>
        </Tab>
        <Tab as="template" disabled>
            <a href="javascript:;" class="p-3.5 py-2 -mb-[1px] flex items-center pointer-events-none text-white-light dark:text-dark">
                <svg> ... </svg>
                Disabled
            </a>
        </Tab>
    </TabList>
    <TabPanels class="pt-5 flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
        <TabPanel>Disabled</TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),pe={class:"panel"},be={class:"flex items-center justify-between mb-5"},he=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Icon Pills",-1),fe=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ve=[fe],xe=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("path",{opacity:"0.5",d:"M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z",stroke:"currentColor","stroke-width":"1.5"}),e("path",{d:"M12 15L12 18",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),ge=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("circle",{cx:"12",cy:"6",r:"4",stroke:"currentColor","stroke-width":"1.5"}),e("ellipse",{opacity:"0.5",cx:"12",cy:"17",rx:"7",ry:"4",stroke:"currentColor","stroke-width":"1.5"})],-1),we=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("path",{d:"M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),ke=e("a",{href:"javascript:;",class:"p-3.5 py-2 -mb-[1px] flex items-center rounded pointer-events-none text-white-light dark:text-dark"},[e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("circle",{opacity:"0.5",cx:"12",cy:"12",r:"10",stroke:"currentColor","stroke-width":"1.5"}),e("path",{d:"M12 7V13",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"}),e("circle",{cx:"12",cy:"16",r:"1",fill:"currentColor"})]),d(" Disabled ")],-1),_e=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Ce=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),qe=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),ye=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),Te=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),Le=e("pre",null,`<!-- icon pills -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap mt-3 gap-2">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] flex items-center rounded hover:bg-warning hover:text-white !outline-none transition duration-300"
                :class="{ 'bg-warning text-white': selected }"
            >
                <svg> ... </svg>
                Home
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] flex items-center rounded hover:bg-warning hover:text-white !outline-none transition duration-300"
                :class="{ 'bg-warning text-white': selected }"
            >
                <svg> ... </svg>
                Profile
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] flex items-center rounded hover:bg-warning hover:text-white !outline-none transition duration-300"
                :class="{ 'bg-warning text-white': selected }"
            >
                <svg> ... </svg>
                Contact
            </a>
        </Tab>
        <Tab as="template" disabled>
            <a href="javascript:;" class="p-3.5 py-2 -mb-[1px] flex items-center rounded pointer-events-none text-white-light dark:text-dark">
                <svg> ... </svg>
                Disabled
            </a>
        </Tab>
    </TabList>
    <TabPanels class="pt-5 flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
        <TabPanel>Disabled</TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),je={class:"panel"},Pe={class:"flex items-center justify-between mb-5"},Me=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Vertical Bordered",-1),Ue=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),De=[Ue],Ge={class:"mx-10 mb-5 sm:mb-0"},Be=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),He=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Ne=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),We=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),Ee=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),Fe=e("blockquote",{class:"text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"},[e("div",{class:"flex items-start"},[e("p",{class:"not-italic text-[#515365] text-sm dark:text-white-dark m-0"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. ")])],-1),Ve=e("pre",null,`<!-- vertical border -->
<TabGroup as="div" class="mb-5 flex flex-col sm:flex-row">
    <div class="mx-10 mb-5 sm:mb-0">
        <TabList class="w-24 m-auto text-center">
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300"
                    :class="{ 'bg-success text-white': selected }"
                    >Home</a
                >
            </Tab>
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300"
                    :class="{ 'bg-success text-white': selected }"
                    >Profile</a
                >
            </Tab>
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300"
                    :class="{ 'bg-success text-white': selected }"
                    >Messages</a
                >
            </Tab>
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300"
                    :class="{ 'bg-success text-white': selected }"
                    >Settings</a
                >
            </Tab>
        </TabList>
    </div>
    <TabPanels class="flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
        <TabPanel>
            <blockquote
                class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
            >
                <div class="flex items-start">
                    <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </p>
                </div>
            </blockquote>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),$e={class:"panel"},Se={class:"flex items-center justify-between mb-5"},Ze=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Border Tabs",-1),Ie=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Je=[Ie],Re=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("path",{opacity:"0.5",d:"M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z",stroke:"currentColor","stroke-width":"1.5"}),e("path",{d:"M12 15L12 18",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),Ae=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("circle",{cx:"12",cy:"6",r:"4",stroke:"currentColor","stroke-width":"1.5"}),e("ellipse",{opacity:"0.5",cx:"12",cy:"17",rx:"7",ry:"4",stroke:"currentColor","stroke-width":"1.5"})],-1),ze=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("path",{d:"M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),Ye=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Ke=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Oe=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Qe=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),Xe=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),et=e("pre",null,`<!-- border tabs -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300"
                :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }"
            >
                <svg> ... </svg>
                Home
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300"
                :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }"
            >
                <svg> ... </svg>
                Profile
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300"
                :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': selected }"
            >
                <svg> ... </svg>
                Contact
            </a>
        </Tab>
    </TabList>
    <TabPanels class="p-4 flex-1 text-sm border border-white-light border-t-0 dark:border-[#191e3a]">
        <TabPanel class="active">
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),tt={class:"panel"},it={class:"flex items-center justify-between mb-5"},at=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Border Top",-1),ot=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),rt=[ot],st=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("path",{opacity:"0.5",d:"M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z",stroke:"currentColor","stroke-width":"1.5"}),e("path",{d:"M12 15L12 18",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),lt=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("circle",{cx:"12",cy:"6",r:"4",stroke:"currentColor","stroke-width":"1.5"}),e("ellipse",{opacity:"0.5",cx:"12",cy:"17",rx:"7",ry:"4",stroke:"currentColor","stroke-width":"1.5"})],-1),nt=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("path",{d:"M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),dt=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("circle",{cx:"12",cy:"12",r:"3",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z",stroke:"currentColor","stroke-width":"1.5"})],-1),ut=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),ct=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),mt=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),pt=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),bt=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),ht=e("blockquote",{class:"text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"},[e("div",{class:"flex items-start"},[e("p",{class:"not-italic text-[#515365] text-sm dark:text-white-dark m-0"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. ")])],-1),ft=e("pre",null,`<!-- border top -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap mt-3 mb-5">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent border-transparent border-t-2 dark:hover:bg-[#191e3a] hover:border-secondary hover:text-secondary !outline-none transition duration-300"
                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': selected }"
            >
                <svg> ... </svg>
                Home
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent dark:hover:bg-[#191e3a] border-transparent border-t-2 hover:border-secondary hover:text-secondary !outline-none transition duration-300"
                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': selected }"
            >
                <svg> ... </svg>
                Profile
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent dark:hover:bg-[#191e3a] border-transparent border-t-2 hover:border-secondary hover:text-secondary !outline-none transition duration-300"
                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': selected }"
            >
                <svg> ... </svg>
                Contact
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent dark:hover:bg-[#191e3a] border-transparent border-t-2 hover:border-secondary hover:text-secondary !outline-none transition duration-300"
                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': selected }"
            >
                <svg> ... </svg>
                Settings
            </a>
        </Tab>
    </TabList>
    <TabPanels class="flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
        <TabPanel>
            <blockquote
                class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
            >
                <div class="flex items-start">
                    <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </p>
                </div>
            </blockquote>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),vt={class:"panel"},xt={class:"flex items-center justify-between mb-5"},gt=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Line",-1),wt=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),kt=[wt],_t=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("path",{opacity:"0.5",d:"M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z",stroke:"currentColor","stroke-width":"1.5"}),e("path",{d:"M12 15L12 18",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),Ct=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("circle",{cx:"12",cy:"6",r:"4",stroke:"currentColor","stroke-width":"1.5"}),e("ellipse",{opacity:"0.5",cx:"12",cy:"17",rx:"7",ry:"4",stroke:"currentColor","stroke-width":"1.5"})],-1),qt=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("path",{d:"M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),yt=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Tt=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Lt=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),jt=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),Pt=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),Mt=e("pre",null,`<!-- line -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap mt-3 mb-5 border-b border-white-light dark:border-[#191e3a]">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-5 py-3 -mb-[1px] flex items-center hover:border-b border-transparent hover:!border-secondary hover:text-secondary !outline-none transition duration-300"
                :class="{ 'border-b !border-secondary text-secondary': selected }"
            >
                <svg> ... </svg>
                Home
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-5 py-3 -mb-[1px] flex items-center hover:border-b border-transparent hover:!border-secondary hover:text-secondary !outline-none transition duration-300"
                :class="{ 'border-b !border-secondary text-secondary': selected }"
            >
                <svg> ... </svg>
                Profile
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-5 py-3 -mb-[1px] flex items-center hover:border-b border-transparent hover:!border-secondary hover:text-secondary !outline-none transition duration-300"
                :class="{ 'border-b !border-secondary text-secondary': selected }"
            >
                <svg> ... </svg>
                Contact
            </a>
        </Tab>
    </TabList>
    <TabPanels class="flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),Ut={class:"panel"},Dt={class:"flex items-center justify-between mb-5"},Gt=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Animated Line",-1),Bt=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Ht=[Bt],Nt=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("path",{opacity:"0.5",d:"M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z",stroke:"currentColor","stroke-width":"1.5"}),e("path",{d:"M12 15L12 18",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),Wt=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("circle",{cx:"12",cy:"6",r:"4",stroke:"currentColor","stroke-width":"1.5"}),e("ellipse",{opacity:"0.5",cx:"12",cy:"17",rx:"7",ry:"4",stroke:"currentColor","stroke-width":"1.5"})],-1),Et=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 ltr:mr-2 rtl:ml-2"},[e("path",{d:"M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),Ft=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Vt=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),$t=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),St=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover /"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),Zt=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),It=e("pre",null,`<!-- animated line -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap mt-3 mb-5 border-b border-white-light dark:border-[#191e3a]">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-5 py-3 -mb-[1px] flex items-center relative before:transition-all before:duration-700 before:absolute hover:text-secondary before:bottom-0 before:w-0 before:left-0 before:right-0 before:m-auto before:h-[1px] before:bg-secondary hover:before:w-full !outline-none transition duration-300"
                :class="{ 'before:!w-full text-secondary': selected }"
            >
                <svg> ... </svg>
                Home
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-5 py-3 -mb-[1px] flex items-center relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-0 before:bottom-0 before:left-0 before:right-0 before:m-auto before:h-[1px] before:bg-secondary hover:before:w-full !outline-none transition duration-300"
                :class="{ 'before:!w-full text-secondary': selected }"
            >
                <svg> ... </svg>
                Profile
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-5 py-3 -mb-[1px] flex items-center relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-0 before:bottom-0 before:left-0 before:right-0 before:m-auto before:h-[1px] before:bg-secondary hover:before:w-full !outline-none transition duration-300"
                :class="{ 'before:!w-full text-secondary': selected }"
            >
                <svg> ... </svg>
                Contact
            </a>
        </Tab>
    </TabList>
    <TabPanels class="flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover /" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),Jt={class:"panel"},Rt={class:"flex items-center justify-between mb-5"},At=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Vertical Line Tab",-1),zt=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Yt=[zt],Kt={class:"mx-10 mb-5 sm:mb-0"},Ot=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Qt=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Xt=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),ei=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),ti=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),ii=e("blockquote",{class:"text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"},[e("div",{class:"flex items-start"},[e("p",{class:"not-italic text-[#515365] text-sm dark:text-white-dark m-0"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. ")])],-1),ai=e("pre",null,`<!-- Vertical line tabs -->
<TabGroup as="div" class="mb-5 flex flex-col sm:flex-row">
    <div class="mx-10 mb-5 sm:mb-0">
        <TabList class="w-24 m-auto text-center font-semibold">
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300"
                    :class="{ 'text-secondary before:!h-[80%]': selected }"
                    >Home</a
                >
            </Tab>
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300"
                    :class="{ 'text-secondary before:!h-[80%]': selected }"
                    >Profile</a
                >
            </Tab>
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300"
                    :class="{ 'text-secondary before:!h-[80%]': selected }"
                    >Messages</a
                >
            </Tab>
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300"
                    :class="{ 'text-secondary before:!h-[80%]': selected }"
                    >Settings</a
                >
            </Tab>
        </TabList>
    </div>
    <TabPanels class="flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
        <TabPanel>
            <blockquote
                class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
            >
                <div class="flex items-start">
                    <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </p>
                </div>
            </blockquote>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),oi={class:"panel"},ri={class:"flex items-center justify-between mb-5"},si=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Justify Tabs",-1),li=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),ni=[li],di=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),ui=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),ci=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),mi=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),pi=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),bi=e("pre",null,`<!-- justify tabs -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap justify-between mt-3 border-b border-white-light dark:border-[#191e3a] text-center">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="flex-auto p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                :class="{ '!border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                >Home</a
            >
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="flex-auto p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                :class="{ '!border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                >Profile</a
            >
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="flex-auto p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                :class="{ '!border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                >Contact</a
            >
        </Tab>
    </TabList>
    <TabPanels class="pt-5 flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),hi={class:"panel"},fi={class:"flex items-center justify-between mb-5"},vi=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Justify Pills",-1),xi=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),gi=[xi],wi=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),ki=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),_i=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Ci=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),qi=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),yi=e("pre",null,`<!-- justify pills -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap justify-between mt-3 space-x-2 rtl:space-x-reverse text-center">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="flex-auto p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                :class="{ 'bg-info text-white': selected }"
                >Home</a
            >
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="flex-auto p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                :class="{ 'bg-info text-white': selected }"
                >Profile</a
            >
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="flex-auto p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                :class="{ 'bg-info text-white': selected }"
                >Contact</a
            >
        </Tab>
    </TabList>
    <TabPanels class="pt-5 flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),Ti={class:"panel"},Li={class:"flex items-center justify-between mb-5"},ji=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Justify Center Tabs",-1),Pi=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Mi=[Pi],Ui=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Di=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Gi=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Bi=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),Hi=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),Ni=e("pre",null,`<!-- justify center tabs -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap justify-center mt-3 border-b border-white-light dark:border-[#191e3a]">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                :class="{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                >Home</a
            >
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                :class="{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                >Profile</a
            >
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                :class="{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                >Contact</a
            >
        </Tab>
    </TabList>
    <TabPanels class="pt-5 flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),Wi={class:"panel"},Ei={class:"flex items-center justify-between mb-5"},Fi=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Justify Center Pills",-1),Vi=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),$i=[Vi],Si=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Zi=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Ii=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Ji=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),Ri=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),Ai=e("pre",null,`<!-- justify center pills -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap justify-center mt-3 space-x-2 rtl:space-x-reverse">
        <Tab as="template" v-slot="{ selected }"
            ><a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                :class="{ 'bg-info text-white': selected }"
                >Home</a
            >
        </Tab>
        <Tab as="template" v-slot="{ selected }"
            ><a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                :class="{ 'bg-info text-white': selected }"
                >Profile</a
            ></Tab
        >
        <Tab as="template" v-slot="{ selected }"
            ><a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                :class="{ 'bg-info text-white': selected }"
                >Contact</a
            ></Tab
        >
    </TabList>
    <TabPanels class="pt-5 flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),zi={class:"panel"},Yi={class:"flex items-center justify-between mb-5"},Ki=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Justify Right Tabs",-1),Oi=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Qi=[Oi],Xi=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),ea=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),ta=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),ia=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),aa=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),oa=e("pre",null,`<!-- justify right tabs -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap justify-end mt-3 border-b border-white-light dark:border-[#191e3a]">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                :class="{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                >Home</a
            >
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                :class="{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                >Profile</a
            >
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300"
                :class="{ 'text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black': selected }"
                >Contact</a
            >
        </Tab>
    </TabList>
    <TabPanels class="pt-5 flex-1 text-sm">
        <TabPanel class="active">
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),ra={class:"panel"},sa={class:"flex items-center justify-between mb-5"},la=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Justify Right Pills",-1),na=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),da=[na],ua=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),ca=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),ma=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),pa=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),ba=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),ha=e("pre",null,`<!-- justify right pills -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap justify-end mt-3 space-x-2 rtl:space-x-reverse">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                :class="{ 'bg-info text-white': selected }"
                >Home</a
            >
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                :class="{ 'bg-info text-white': selected }"
                >Profile</a
            >
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300"
                :class="{ 'bg-info text-white': selected }"
                >Contact</a
            >
        </Tab>
    </TabList>
    <TabPanels class="pt-5 flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),fa={class:"panel"},va={class:"flex items-center justify-between mb-5"},xa=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Pills with Icon",-1),ga=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),wa=[ga],ka=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 mb-1"},[e("path",{opacity:"0.5",d:"M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z",stroke:"currentColor","stroke-width":"1.5"}),e("path",{d:"M12 15L12 18",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),_a=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 mb-1"},[e("circle",{cx:"12",cy:"6",r:"4",stroke:"currentColor","stroke-width":"1.5"}),e("ellipse",{opacity:"0.5",cx:"12",cy:"17",rx:"7",ry:"4",stroke:"currentColor","stroke-width":"1.5"})],-1),Ca=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 mb-1"},[e("path",{d:"M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),qa=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 mb-1"},[e("circle",{cx:"12",cy:"12",r:"3",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z",stroke:"currentColor","stroke-width":"1.5"})],-1),ya=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Ta=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),La=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),ja=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),Pa=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),Ma=e("blockquote",{class:"text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"},[e("div",{class:"flex items-start"},[e("p",{class:"not-italic text-[#515365] text-sm dark:text-white-dark m-0"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. ")])],-1),Ua=e("pre",null,`<!-- pills with icon -->
<TabGroup as="div" class="mb-5">
    <TabList class="grid grid-cols-4 gap-2 sm:flex sm:flex-wrap sm:justify-center mt-3 mb-5 sm:space-x-3 rtl:space-x-reverse">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300"
                :class="{ '!bg-success text-white': selected }"
            >
                <svg> ... </svg>
                Home
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300"
                :class="{ '!bg-success text-white': selected }"
            >
                <svg> ... </svg>
                Profile
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300"
                :class="{ '!bg-success text-white': selected }"
            >
                <svg> ... </svg>
                Contact
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300"
                :class="{ '!bg-success text-white': selected }"
            >
                <svg> ... </svg>
                Settings
            </a>
        </Tab>
    </TabList>
    <TabPanels class="flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
        <TabPanel>
            <blockquote
                class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
            >
                <div class="flex items-start">
                    <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </p>
                </div>
            </blockquote>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),Da={class:"panel"},Ga={class:"flex items-center justify-between mb-5"},Ba=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Rounded Pills with Icon",-1),Ha=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),Na=[Ha],Wa=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-6 h-6"},[e("path",{opacity:"0.5",d:"M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z",stroke:"currentColor","stroke-width":"1.5"}),e("path",{d:"M12 15L12 18",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),Ea=[Wa],Fa=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-6 h-6"},[e("circle",{cx:"12",cy:"6",r:"4",stroke:"currentColor","stroke-width":"1.5"}),e("ellipse",{opacity:"0.5",cx:"12",cy:"17",rx:"7",ry:"4",stroke:"currentColor","stroke-width":"1.5"})],-1),Va=[Fa],$a=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-6 h-6"},[e("path",{d:"M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),Sa=[$a],Za=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-6 h-6"},[e("circle",{cx:"12",cy:"12",r:"3",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z",stroke:"currentColor","stroke-width":"1.5"})],-1),Ia=[Za],Ja=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Ra=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Aa=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),za=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),Ya=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),Ka=e("blockquote",{class:"text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"},[e("div",{class:"flex items-start"},[e("p",{class:"not-italic text-[#515365] text-sm dark:text-white-dark m-0"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. ")])],-1),Oa=e("pre",null,`<!-- rounded pills with icon -->
<TabGroup as="div" class="mb-5">
    <TabList class="flex flex-wrap justify-center mt-3 mb-5 space-x-3 rtl:space-x-reverse">
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                :class="{ '!bg-info text-white': selected }"
            >
                <svg> ... </svg>
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                :class="{ '!bg-info text-white': selected }"
            >
                <svg> ... </svg>
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                :class="{ '!bg-info text-white': selected }"
            >
                <svg> ... </svg>
            </a>
        </Tab>
        <Tab as="template" v-slot="{ selected }">
            <a
                href="javascript:;"
                class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                :class="{ '!bg-info text-white': selected }"
            >
                <svg> ... </svg>
            </a>
        </Tab>
    </TabList>
    <TabPanels class="flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
        <TabPanel>
            <blockquote
                class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
            >
                <div class="flex items-start">
                    <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </p>
                </div>
            </blockquote>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),Qa={class:"panel"},Xa={class:"flex items-center justify-between mb-5"},eo=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Vertical Rounded With Icon",-1),to=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),io=[to],ao={class:"mx-10 mb-5 sm:mb-0"},oo=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 mb-1"},[e("path",{opacity:"0.5",d:"M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z",stroke:"currentColor","stroke-width":"1.5"}),e("path",{d:"M12 15L12 18",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),ro=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 mb-1"},[e("circle",{cx:"12",cy:"6",r:"4",stroke:"currentColor","stroke-width":"1.5"}),e("ellipse",{opacity:"0.5",cx:"12",cy:"17",rx:"7",ry:"4",stroke:"currentColor","stroke-width":"1.5"})],-1),so=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 mb-1"},[e("path",{d:"M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),lo=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),no=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),uo=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),co=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),mo=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),po=e("pre",null,`<!-- vertical rounded with icon -->
<TabGroup as="div" class="mb-5 flex flex-col sm:flex-row">
    <div class="mx-10 mb-5 sm:mb-0">
        <TabList class="flex flex-col justify-center m-auto space-y-3 w-24">
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                    :class="{ '!bg-success text-white': selected }"
                >
                    <svg> ... </svg>
                    Home
                </a>
            </Tab>
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                    :class="{ '!bg-success text-white': selected }"
                >
                    <svg> ... </svg>
                    Profile
                </a>
            </Tab>
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                    :class="{ '!bg-success text-white': selected }"
                >
                    <svg> ... </svg>
                    Contact
                </a>
            </Tab>
        </TabList>
    </div>
    <TabPanels class="flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),bo={class:"panel"},ho={class:"flex items-center justify-between mb-5"},fo=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Vertical Circle With Icon",-1),vo=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),xo=[vo],go={class:"mx-10 mb-5 sm:mb-0"},wo=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-6 h-6"},[e("path",{opacity:"0.5",d:"M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z",stroke:"currentColor","stroke-width":"1.5"}),e("path",{d:"M12 15L12 18",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),ko=[wo],_o=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-6 h-6"},[e("circle",{cx:"12",cy:"6",r:"4",stroke:"currentColor","stroke-width":"1.5"}),e("ellipse",{opacity:"0.5",cx:"12",cy:"17",rx:"7",ry:"4",stroke:"currentColor","stroke-width":"1.5"})],-1),Co=[_o],qo=e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"w-6 h-6"},[e("path",{d:"M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561",stroke:"currentColor","stroke-width":"1.5"}),e("path",{opacity:"0.5",d:"M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242",stroke:"currentColor","stroke-width":"1.5","stroke-linecap":"round"})],-1),yo=[qo],To=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Lo=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),jo=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Po=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),Mo=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),Uo=e("pre",null,`<!-- vertical circle dith icon -->
<TabGroup as="div" class="mb-5 flex flex-col sm:flex-row">
    <div class="mx-10 mb-5 sm:mb-0">
        <TabList class="flex flex-col justify-center items-center space-y-3">
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                    :class="{ '!bg-info text-white': selected }"
                >
                    <svg> ... </svg>
                </a>
            </Tab>
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                    :class="{ '!bg-info text-white': selected }"
                >
                    <svg> ... </svg>
                </a>
            </Tab>
            <Tab as="template" v-slot="{ selected }">
                <a
                    href="javascript:;"
                    class="w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none"
                    :class="{ '!bg-info text-white': selected }"
                >
                    <svg> ... </svg>
                </a>
            </Tab>
        </TabList>
    </div>
    <TabPanels class="flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),Do={class:"panel"},Go={class:"flex items-center justify-between mb-5"},Bo=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Vertical Pills",-1),Ho=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),No=[Ho],Wo=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Eo=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Fo=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Vo=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),$o=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),So=e("blockquote",{class:"text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"},[e("div",{class:"flex items-start"},[e("p",{class:"not-italic text-[#515365] text-sm dark:text-white-dark m-0"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. ")])],-1),Zo=e("pre",null,`<!-- vertical pills -->
<TabGroup as="div" class="mb-5 flex flex-col sm:flex-row">
    <TabList class="ltr:pr-4 rtl:pl-4 space-y-2 sm:flex-[0_0_20%] mb-5 sm:mb-0">
        <Tab as="template" v-slot="{ selected }"
            ><a
                href="javascript:;"
                class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                :class="{ '!bg-success text-white': selected }"
                >Home</a
            ></Tab
        >
        <Tab as="template" v-slot="{ selected }"
            ><a
                href="javascript:;"
                class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                :class="{ '!bg-success text-white': selected }"
                >Profile</a
            ></Tab
        >
        <Tab as="template" v-slot="{ selected }"
            ><a
                href="javascript:;"
                class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                :class="{ '!bg-success text-white': selected }"
                >Messages</a
            ></Tab
        >
        <Tab as="template" v-slot="{ selected }"
            ><a
                href="javascript:;"
                class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                :class="{ '!bg-success text-white': selected }"
                >Settings</a
            ></Tab
        >
    </TabList>
    <TabPanels class="flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
        <TabPanel>
            <blockquote
                class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
            >
                <div class="flex items-start">
                    <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </p>
                </div>
            </blockquote>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),Io={class:"panel"},Jo={class:"flex items-center justify-between mb-5"},Ro=e("h5",{class:"font-semibold text-lg dark:text-white-light"},"Justify Vertical Pills Right",-1),Ao=c('<span class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2"><path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path opacity="0.5" d="M13.9868 5L10.0132 19.8297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path></svg> Code </span>',1),zo=[Ao],Yo=e("h4",{class:"font-semibold text-2xl mb-4"},"We move your world!",-1),Ko=e("p",{class:"mb-4"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Oo=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",-1),Qo=e("div",{class:"flex items-start"},[e("div",{class:"w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none"},[e("img",{src:"/assets/images/profile-34.jpeg",alt:"",class:"w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover"})]),e("div",{class:"flex-auto"},[e("h5",{class:"text-xl font-medium mb-4"},"Media heading"),e("p",{class:"text-white-dark"}," Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. ")])],-1),Xo=e("p",null," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",-1),er=e("blockquote",{class:"text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"},[e("div",{class:"flex items-start"},[e("p",{class:"not-italic text-[#515365] text-sm dark:text-white-dark m-0"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. ")])],-1),tr=e("pre",null,`<!-- justify vertical pills right -->
<TabGroup as="div" class="mb-5 flex flex-col sm:flex-row">
    <TabList class="ltr:pr-4 rtl:pl-4 space-y-2 sm:flex-[0_0_20%] mb-5 sm:mb-0 sm:order-1">
        <Tab as="template" v-slot="{ selected }"
            ><a
                href="javascript:;"
                class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                :class="{ '!bg-success text-white': selected }"
                >Home</a
            ></Tab
        >
        <Tab as="template" v-slot="{ selected }"
            ><a
                href="javascript:;"
                class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                :class="{ '!bg-success text-white': selected }"
                >Profile</a
            ></Tab
        >
        <Tab as="template" v-slot="{ selected }"
            ><a
                href="javascript:;"
                class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                :class="{ '!bg-success text-white': selected }"
                >Messages</a
            ></Tab
        >
        <Tab as="template" v-slot="{ selected }"
            ><a
                href="javascript:;"
                class="p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none"
                :class="{ '!bg-success text-white': selected }"
                >Settings</a
            ></Tab
        >
    </TabList>
    <TabPanels class="flex-1 text-sm">
        <TabPanel>
            <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </TabPanel>
        <TabPanel>
            <div class="flex items-start">
                <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                    <img src="/assets/images/profile-34.jpeg" alt="" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                </div>
                <div class="flex-auto">
                    <h5 class="text-xl font-medium mb-4">Media heading</h5>
                    <p class="text-white-dark">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
        </TabPanel>
        <TabPanel>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </TabPanel>
        <TabPanel>
            <blockquote
                class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]"
            >
                <div class="flex items-start">
                    <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </p>
                </div>
            </blockquote>
        </TabPanel>
    </TabPanels>
</TabGroup>

<!-- script -->
<script lang="ts" setup>
    import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
<\/script>
`,-1),ur=k({__name:"tabs",setup(ir){_({title:"Tabs"});const{codeArr:m,toggleCode:p}=w();return(ar,n)=>(u(),C("div",null,[q,e("div",y,[T,e("div",L,[e("div",j,[e("div",P,[M,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[0]||(n[0]=o=>t(p)("code1"))},D)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none transition duration-300",{"!border-white-light !border-b-white  text-primary dark:!border-[#191e3a] dark:!border-b-black":o}])},"Home",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none transition duration-300",{"!border-white-light !border-b-white text-primary dark:!border-[#191e3a] dark:!border-b-black":o}])},"Profile",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-transparent hover:text-primary dark:hover:border-b-black !outline-none transition duration-300",{"!border-white-light !border-b-white text-primary dark:!border-[#191e3a] dark:!border-b-black":o}])},"Contact",2)]),_:1}),a(t(r),{as:"template",disabled:""},{default:i(()=>[G]),_:1})]),_:1}),a(t(g),{class:"pt-5 flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[B,H,N]),_:1}),a(t(s),null,{default:i(()=>[W]),_:1}),a(t(s),null,{default:i(()=>[E]),_:1}),a(t(s),null,{default:i(()=>[d("Disabled")]),_:1})]),_:1})]),_:1}),t(m).includes("code1")?(u(),h(b,{key:0},{default:i(()=>[F]),_:1})):f("",!0)]),e("div",V,[e("div",$,[S,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[1]||(n[1]=o=>t(p)("code2"))},I)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap mt-3"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] ltr:mr-2 rtl:ml-2 block rounded hover:bg-primary hover:text-white !outline-none transition duration-300",{"bg-primary text-white":o}])},"Home",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] ltr:mr-2 rtl:ml-2 block rounded hover:bg-primary hover:text-white !outline-none transition duration-300",{"bg-primary text-white":o}])},"Profile",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] ltr:mr-2 rtl:ml-2 block rounded hover:bg-primary hover:text-white !outline-none transition duration-300",{"bg-primary text-white":o}])},"Contact",2)]),_:1}),a(t(r),{as:"template",disabled:""},{default:i(()=>[J]),_:1})]),_:1}),a(t(g),{class:"pt-5 flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[R,A,z]),_:1}),a(t(s),null,{default:i(()=>[Y]),_:1}),a(t(s),null,{default:i(()=>[K]),_:1}),a(t(s),null,{default:i(()=>[d("Disabled")]),_:1})]),_:1})]),_:1}),t(m).includes("code2")?(u(),h(b,{key:0},{default:i(()=>[O]),_:1})):f("",!0)]),e("div",Q,[e("div",X,[ee,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[2]||(n[2]=o=>t(p)("code3"))},ie)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300",{"!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black":o}])},[ae,d(" Home ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300",{"!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black":o}])},[oe,d(" Profile ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300",{"!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black":o}])},[re,d(" Contact ")],2)]),_:1}),a(t(r),{as:"template",disabled:""},{default:i(()=>[se]),_:1})]),_:1}),a(t(g),{class:"pt-5 flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[le,ne,de]),_:1}),a(t(s),null,{default:i(()=>[ue]),_:1}),a(t(s),null,{default:i(()=>[ce]),_:1}),a(t(s),null,{default:i(()=>[d("Disabled")]),_:1})]),_:1})]),_:1}),t(m).includes("code3")?(u(),h(b,{key:0},{default:i(()=>[me]),_:1})):f("",!0)]),e("div",pe,[e("div",be,[he,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[3]||(n[3]=o=>t(p)("code4"))},ve)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap mt-3 gap-2"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] flex items-center rounded hover:bg-warning hover:text-white !outline-none transition duration-300",{"bg-warning text-white":o}])},[xe,d(" Home ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] flex items-center rounded hover:bg-warning hover:text-white !outline-none transition duration-300",{"bg-warning text-white":o}])},[ge,d(" Profile ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] flex items-center rounded hover:bg-warning hover:text-white !outline-none transition duration-300",{"bg-warning text-white":o}])},[we,d(" Contact ")],2)]),_:1}),a(t(r),{as:"template",disabled:""},{default:i(()=>[ke]),_:1})]),_:1}),a(t(g),{class:"pt-5 flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[_e,Ce,qe]),_:1}),a(t(s),null,{default:i(()=>[ye]),_:1}),a(t(s),null,{default:i(()=>[Te]),_:1}),a(t(s),null,{default:i(()=>[d("Disabled")]),_:1})]),_:1})]),_:1}),t(m).includes("code4")?(u(),h(b,{key:0},{default:i(()=>[Le]),_:1})):f("",!0)]),e("div",je,[e("div",Pe,[Me,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[4]||(n[4]=o=>t(p)("code5"))},De)]),a(t(v),{as:"div",class:"mb-5 flex flex-col sm:flex-row"},{default:i(()=>[e("div",Ge,[a(t(x),{class:"w-24 m-auto text-center"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300",{"bg-success text-white":o}])},"Home",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300",{"bg-success text-white":o}])},"Profile",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300",{"bg-success text-white":o}])},"Messages",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-white-light dark:border-[#191e3a] hover:bg-success hover:text-white !outline-none transition duration-300",{"bg-success text-white":o}])},"Settings",2)]),_:1})]),_:1})]),a(t(g),{class:"flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[Be,He,Ne]),_:1}),a(t(s),null,{default:i(()=>[We]),_:1}),a(t(s),null,{default:i(()=>[Ee]),_:1}),a(t(s),null,{default:i(()=>[Fe]),_:1})]),_:1})]),_:1}),t(m).includes("code5")?(u(),h(b,{key:0},{default:i(()=>[Ve]),_:1})):f("",!0)]),e("div",$e,[e("div",Se,[Ze,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[5]||(n[5]=o=>t(p)("code6"))},Je)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300",{"!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black":o}])},[Re,d(" Home ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300",{"!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black":o}])},[Ae,d(" Profile ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-danger !outline-none transition duration-300",{"!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black":o}])},[ze,d(" Contact ")],2)]),_:1})]),_:1}),a(t(g),{class:"p-4 flex-1 text-sm border border-white-light border-t-0 dark:border-[#191e3a]"},{default:i(()=>[a(t(s),{class:"active"},{default:i(()=>[Ye,Ke,Oe]),_:1}),a(t(s),null,{default:i(()=>[Qe]),_:1}),a(t(s),null,{default:i(()=>[Xe]),_:1})]),_:1})]),_:1}),t(m).includes("code6")?(u(),h(b,{key:0},{default:i(()=>[et]),_:1})):f("",!0)]),e("div",tt,[e("div",it,[at,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[6]||(n[6]=o=>t(p)("code7"))},rt)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap mt-3 mb-5"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent border-transparent border-t-2 dark:hover:bg-[#191e3a] hover:border-secondary hover:text-secondary !outline-none transition duration-300",{"!border-secondary text-secondary dark:bg-[#191e3a]":o}])},[st,d(" Home ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent dark:hover:bg-[#191e3a] border-transparent border-t-2 hover:border-secondary hover:text-secondary !outline-none transition duration-300",{"!border-secondary text-secondary dark:bg-[#191e3a]":o}])},[lt,d(" Profile ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent dark:hover:bg-[#191e3a] border-transparent border-t-2 hover:border-secondary hover:text-secondary !outline-none transition duration-300",{"!border-secondary text-secondary dark:bg-[#191e3a]":o}])},[nt,d(" Contact ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent dark:hover:bg-[#191e3a] border-transparent border-t-2 hover:border-secondary hover:text-secondary !outline-none transition duration-300",{"!border-secondary text-secondary dark:bg-[#191e3a]":o}])},[dt,d(" Settings ")],2)]),_:1})]),_:1}),a(t(g),{class:"flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[ut,ct,mt]),_:1}),a(t(s),null,{default:i(()=>[pt]),_:1}),a(t(s),null,{default:i(()=>[bt]),_:1}),a(t(s),null,{default:i(()=>[ht]),_:1})]),_:1})]),_:1}),t(m).includes("code7")?(u(),h(b,{key:0},{default:i(()=>[ft]),_:1})):f("",!0)]),e("div",vt,[e("div",xt,[gt,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[7]||(n[7]=o=>t(p)("code8"))},kt)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap mt-3 mb-5 border-b border-white-light dark:border-[#191e3a]"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-5 py-3 -mb-[1px] flex items-center hover:border-b border-transparent hover:!border-secondary hover:text-secondary !outline-none transition duration-300",{"border-b !border-secondary text-secondary":o}])},[_t,d(" Home ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-5 py-3 -mb-[1px] flex items-center hover:border-b border-transparent hover:!border-secondary hover:text-secondary !outline-none transition duration-300",{"border-b !border-secondary text-secondary":o}])},[Ct,d(" Profile ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-5 py-3 -mb-[1px] flex items-center hover:border-b border-transparent hover:!border-secondary hover:text-secondary !outline-none transition duration-300",{"border-b !border-secondary text-secondary":o}])},[qt,d(" Contact ")],2)]),_:1})]),_:1}),a(t(g),{class:"flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[yt,Tt,Lt]),_:1}),a(t(s),null,{default:i(()=>[jt]),_:1}),a(t(s),null,{default:i(()=>[Pt]),_:1})]),_:1})]),_:1}),t(m).includes("code8")?(u(),h(b,{key:0},{default:i(()=>[Mt]),_:1})):f("",!0)]),e("div",Ut,[e("div",Dt,[Gt,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[8]||(n[8]=o=>t(p)("code9"))},Ht)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap mt-3 mb-5 border-b border-white-light dark:border-[#191e3a]"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-5 py-3 -mb-[1px] flex items-center relative before:transition-all before:duration-700 before:absolute hover:text-secondary before:bottom-0 before:w-0 before:left-0 before:right-0 before:m-auto before:h-[1px] before:bg-secondary hover:before:w-full !outline-none transition duration-300",{"before:!w-full text-secondary":o}])},[Nt,d(" Home ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-5 py-3 -mb-[1px] flex items-center relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-0 before:bottom-0 before:left-0 before:right-0 before:m-auto before:h-[1px] before:bg-secondary hover:before:w-full !outline-none transition duration-300",{"before:!w-full text-secondary":o}])},[Wt,d(" Profile ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-5 py-3 -mb-[1px] flex items-center relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-0 before:bottom-0 before:left-0 before:right-0 before:m-auto before:h-[1px] before:bg-secondary hover:before:w-full !outline-none transition duration-300",{"before:!w-full text-secondary":o}])},[Et,d(" Contact ")],2)]),_:1})]),_:1}),a(t(g),{class:"flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[Ft,Vt,$t]),_:1}),a(t(s),null,{default:i(()=>[St]),_:1}),a(t(s),null,{default:i(()=>[Zt]),_:1})]),_:1})]),_:1}),t(m).includes("code9")?(u(),h(b,{key:0},{default:i(()=>[It]),_:1})):f("",!0)]),e("div",Jt,[e("div",Rt,[At,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[9]||(n[9]=o=>t(p)("code10"))},Yt)]),a(t(v),{as:"div",class:"mb-5 flex flex-col sm:flex-row"},{default:i(()=>[e("div",Kt,[a(t(x),{class:"w-24 m-auto text-center font-semibold"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300",{"text-secondary before:!h-[80%]":o}])},"Home",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300",{"text-secondary before:!h-[80%]":o}])},"Profile",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300",{"text-secondary before:!h-[80%]":o}])},"Messages",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%] !outline-none transition duration-300",{"text-secondary before:!h-[80%]":o}])},"Settings",2)]),_:1})]),_:1})]),a(t(g),{class:"flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[Ot,Qt,Xt]),_:1}),a(t(s),null,{default:i(()=>[ei]),_:1}),a(t(s),null,{default:i(()=>[ti]),_:1}),a(t(s),null,{default:i(()=>[ii]),_:1})]),_:1})]),_:1}),t(m).includes("code10")?(u(),h(b,{key:0},{default:i(()=>[ai]),_:1})):f("",!0)]),e("div",oi,[e("div",ri,[si,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[10]||(n[10]=o=>t(p)("code11"))},ni)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap justify-between mt-3 border-b border-white-light dark:border-[#191e3a] text-center"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["flex-auto p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300",{"!border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black":o}])},"Home",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["flex-auto p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300",{"!border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black":o}])},"Profile",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["flex-auto p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300",{"!border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black":o}])},"Contact",2)]),_:1})]),_:1}),a(t(g),{class:"pt-5 flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[di,ui,ci]),_:1}),a(t(s),null,{default:i(()=>[mi]),_:1}),a(t(s),null,{default:i(()=>[pi]),_:1})]),_:1})]),_:1}),t(m).includes("code11")?(u(),h(b,{key:0},{default:i(()=>[bi]),_:1})):f("",!0)]),e("div",hi,[e("div",fi,[vi,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[11]||(n[11]=o=>t(p)("code12"))},gi)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap justify-between mt-3 space-x-2 rtl:space-x-reverse text-center"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["flex-auto p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300",{"bg-info text-white":o}])},"Home",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["flex-auto p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300",{"bg-info text-white":o}])},"Profile",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["flex-auto p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300",{"bg-info text-white":o}])},"Contact",2)]),_:1})]),_:1}),a(t(g),{class:"pt-5 flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[wi,ki,_i]),_:1}),a(t(s),null,{default:i(()=>[Ci]),_:1}),a(t(s),null,{default:i(()=>[qi]),_:1})]),_:1})]),_:1}),t(m).includes("code12")?(u(),h(b,{key:0},{default:i(()=>[yi]),_:1})):f("",!0)]),e("div",Ti,[e("div",Li,[ji,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[12]||(n[12]=o=>t(p)("code13"))},Mi)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap justify-center mt-3 border-b border-white-light dark:border-[#191e3a]"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300",{"text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black":o}])},"Home",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300",{"text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black":o}])},"Profile",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300",{"text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black":o}])},"Contact",2)]),_:1})]),_:1}),a(t(g),{class:"pt-5 flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[Ui,Di,Gi]),_:1}),a(t(s),null,{default:i(()=>[Bi]),_:1}),a(t(s),null,{default:i(()=>[Hi]),_:1})]),_:1})]),_:1}),t(m).includes("code13")?(u(),h(b,{key:0},{default:i(()=>[Ni]),_:1})):f("",!0)]),e("div",Wi,[e("div",Ei,[Fi,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[13]||(n[13]=o=>t(p)("code14"))},$i)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap justify-center mt-3 space-x-2 rtl:space-x-reverse"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300",{"bg-info text-white":o}])},"Home",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300",{"bg-info text-white":o}])},"Profile",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300",{"bg-info text-white":o}])},"Contact",2)]),_:1})]),_:1}),a(t(g),{class:"pt-5 flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[Si,Zi,Ii]),_:1}),a(t(s),null,{default:i(()=>[Ji]),_:1}),a(t(s),null,{default:i(()=>[Ri]),_:1})]),_:1})]),_:1}),t(m).includes("code14")?(u(),h(b,{key:0},{default:i(()=>[Ai]),_:1})):f("",!0)]),e("div",zi,[e("div",Yi,[Ki,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[14]||(n[14]=o=>t(p)("code15"))},Qi)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap justify-end mt-3 border-b border-white-light dark:border-[#191e3a]"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300",{"text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black":o}])},"Home",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300",{"text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black":o}])},"Profile",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block border border-transparent hover:border-white-light hover:border-b-white dark:hover:border-[#191e3a] dark:hover:border-b-black !outline-none transition duration-300",{"text-primary !border-white-light !border-b-white dark:!border-[#191e3a] dark:!border-b-black":o}])},"Contact",2)]),_:1})]),_:1}),a(t(g),{class:"pt-5 flex-1 text-sm"},{default:i(()=>[a(t(s),{class:"active"},{default:i(()=>[Xi,ea,ta]),_:1}),a(t(s),null,{default:i(()=>[ia]),_:1}),a(t(s),null,{default:i(()=>[aa]),_:1})]),_:1})]),_:1}),t(m).includes("code15")?(u(),h(b,{key:0},{default:i(()=>[oa]),_:1})):f("",!0)]),e("div",ra,[e("div",sa,[la,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[15]||(n[15]=o=>t(p)("code16"))},da)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap justify-end mt-3 space-x-2 rtl:space-x-reverse"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300",{"bg-info text-white":o}])},"Home",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300",{"bg-info text-white":o}])},"Profile",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 -mb-[1px] block hover:bg-info rounded hover:text-white !outline-none transition duration-300",{"bg-info text-white":o}])},"Contact",2)]),_:1})]),_:1}),a(t(g),{class:"pt-5 flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[ua,ca,ma]),_:1}),a(t(s),null,{default:i(()=>[pa]),_:1}),a(t(s),null,{default:i(()=>[ba]),_:1})]),_:1})]),_:1}),t(m).includes("code16")?(u(),h(b,{key:0},{default:i(()=>[ha]),_:1})):f("",!0)]),e("div",fa,[e("div",va,[xa,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[16]||(n[16]=o=>t(p)("code17"))},wa)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"grid grid-cols-4 gap-2 sm:flex sm:flex-wrap sm:justify-center mt-3 mb-5 sm:space-x-3 rtl:space-x-reverse"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300",{"!bg-success text-white":o}])},[ka,d(" Home ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300",{"!bg-success text-white":o}])},[_a,d(" Profile ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300",{"!bg-success text-white":o}])},[Ca,d(" Contact ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] !outline-none transition duration-300",{"!bg-success text-white":o}])},[qa,d(" Settings ")],2)]),_:1})]),_:1}),a(t(g),{class:"flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[ya,Ta,La]),_:1}),a(t(s),null,{default:i(()=>[ja]),_:1}),a(t(s),null,{default:i(()=>[Pa]),_:1}),a(t(s),null,{default:i(()=>[Ma]),_:1})]),_:1})]),_:1}),t(m).includes("code17")?(u(),h(b,{key:0},{default:i(()=>[Ua]),_:1})):f("",!0)]),e("div",Da,[e("div",Ga,[Ba,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[17]||(n[17]=o=>t(p)("code18"))},Na)]),a(t(v),{as:"div",class:"mb-5"},{default:i(()=>[a(t(x),{class:"flex flex-wrap justify-center mt-3 mb-5 space-x-3 rtl:space-x-reverse"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none",{"!bg-info text-white":o}])},Ea,2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none",{"!bg-info text-white":o}])},Va,2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none",{"!bg-info text-white":o}])},Sa,2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none",{"!bg-info text-white":o}])},Ia,2)]),_:1})]),_:1}),a(t(g),{class:"flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[Ja,Ra,Aa]),_:1}),a(t(s),null,{default:i(()=>[za]),_:1}),a(t(s),null,{default:i(()=>[Ya]),_:1}),a(t(s),null,{default:i(()=>[Ka]),_:1})]),_:1})]),_:1}),t(m).includes("code18")?(u(),h(b,{key:0},{default:i(()=>[Oa]),_:1})):f("",!0)]),e("div",Qa,[e("div",Xa,[eo,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[18]||(n[18]=o=>t(p)("code19"))},io)]),a(t(v),{as:"div",class:"mb-5 flex flex-col sm:flex-row"},{default:i(()=>[e("div",ao,[a(t(x),{class:"flex flex-col justify-center m-auto space-y-3 w-24"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none",{"!bg-success text-white":o}])},[oo,d(" Home ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none",{"!bg-success text-white":o}])},[ro,d(" Profile ")],2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-7 py-3 flex flex-col items-center justify-center rounded-lg bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-success hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none",{"!bg-success text-white":o}])},[so,d(" Contact ")],2)]),_:1})]),_:1})]),a(t(g),{class:"flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[lo,no,uo]),_:1}),a(t(s),null,{default:i(()=>[co]),_:1}),a(t(s),null,{default:i(()=>[mo]),_:1})]),_:1})]),_:1}),t(m).includes("code19")?(u(),h(b,{key:0},{default:i(()=>[po]),_:1})):f("",!0)]),e("div",bo,[e("div",ho,[fo,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[19]||(n[19]=o=>t(p)("code20"))},xo)]),a(t(v),{as:"div",class:"mb-5 flex flex-col sm:flex-row"},{default:i(()=>[e("div",go,[a(t(x),{class:"flex flex-col justify-center items-center space-y-3"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none",{"!bg-info text-white":o}])},ko,2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none",{"!bg-info text-white":o}])},Co,2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["w-16 h-16 flex flex-col items-center justify-center rounded-full bg-[#f1f2f3] dark:bg-[#191e3a] hover:!bg-info hover:text-white hover:shadow-[0_5px_15px_0_rgba(0,0,0,0.30)] transition-all duration-300 !outline-none",{"!bg-info text-white":o}])},yo,2)]),_:1})]),_:1})]),a(t(g),{class:"flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[To,Lo,jo]),_:1}),a(t(s),null,{default:i(()=>[Po]),_:1}),a(t(s),null,{default:i(()=>[Mo]),_:1})]),_:1})]),_:1}),t(m).includes("code20")?(u(),h(b,{key:0},{default:i(()=>[Uo]),_:1})):f("",!0)]),e("div",Do,[e("div",Go,[Bo,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[20]||(n[20]=o=>t(p)("code21"))},No)]),a(t(v),{as:"div",class:"mb-5 flex flex-col sm:flex-row"},{default:i(()=>[a(t(x),{class:"ltr:pr-4 rtl:pl-4 space-y-2 sm:flex-[0_0_20%] mb-5 sm:mb-0"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none",{"!bg-success text-white":o}])},"Home",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none",{"!bg-success text-white":o}])},"Profile",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none",{"!bg-success text-white":o}])},"Messages",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none",{"!bg-success text-white":o}])},"Settings",2)]),_:1})]),_:1}),a(t(g),{class:"flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[Wo,Eo,Fo]),_:1}),a(t(s),null,{default:i(()=>[Vo]),_:1}),a(t(s),null,{default:i(()=>[$o]),_:1}),a(t(s),null,{default:i(()=>[So]),_:1})]),_:1})]),_:1}),t(m).includes("code21")?(u(),h(b,{key:0},{default:i(()=>[Zo]),_:1})):f("",!0)]),e("div",Io,[e("div",Jo,[Ro,e("a",{class:"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600",href:"javascript:;",onClick:n[21]||(n[21]=o=>t(p)("code22"))},zo)]),a(t(v),{as:"div",class:"mb-5 flex flex-col sm:flex-row sm:gap-4"},{default:i(()=>[a(t(x),{class:"space-y-2 sm:flex-[0_0_20%] mb-5 sm:mb-0 sm:order-1"},{default:i(()=>[a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none",{"!bg-success text-white":o}])},"Home",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none",{"!bg-success text-white":o}])},"Profile",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none",{"!bg-success text-white":o}])},"Messages",2)]),_:1}),a(t(r),{as:"template"},{default:i(({selected:o})=>[e("a",{href:"javascript:;",class:l(["p-3.5 py-2 block rounded-md hover:bg-success hover:text-white transition-all duration-300 !outline-none",{"!bg-success text-white":o}])},"Settings",2)]),_:1})]),_:1}),a(t(g),{class:"flex-1 text-sm"},{default:i(()=>[a(t(s),null,{default:i(()=>[Yo,Ko,Oo]),_:1}),a(t(s),null,{default:i(()=>[Qo]),_:1}),a(t(s),null,{default:i(()=>[Xo]),_:1}),a(t(s),null,{default:i(()=>[er]),_:1})]),_:1})]),_:1}),t(m).includes("code22")?(u(),h(b,{key:0},{default:i(()=>[tr]),_:1})):f("",!0)])])])]))}});export{ur as default};
