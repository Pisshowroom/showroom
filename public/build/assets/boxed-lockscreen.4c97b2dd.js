import{d as a,u as o,ad as r,o as l,b as n,e as s,x as c,g as i,i as d}from"./main.c541c6fc.js";const p={class:"flex justify-center items-center min-h-screen bg-[url('/assets/images/map.svg')] dark:bg-[url('/assets/images/map-dark.svg')] bg-cover bg-center"},u={class:"panel sm:w-[480px] m-6 max-w-lg w-full"},m=d('<div class="flex items-center mb-10"><div class="ltr:mr-4 rtl:ml-4"><img src="/assets/images/profile-1.jpeg" class="w-16 h-16 object-cover rounded-full" alt="images"></div><div class="flex-1"><h4 class="text-2xl">Shaun Park</h4><p>Enter your password to unlock your ID</p></div></div>',1),_=s("div",null,[s("label",{for:"password"},"Password"),s("input",{id:"password",type:"password",class:"form-input",placeholder:"Enter Password"})],-1),f=s("button",{type:"submit",class:"btn btn-primary w-full"},"UNLOCK",-1),v=[_,f],x=a({__name:"boxed-lockscreen",setup(b){o({title:"Lockscreen Boxed"});const t=r();return(g,e)=>(l(),n("div",p,[s("div",u,[m,s("form",{class:"space-y-5",onSubmit:e[0]||(e[0]=c(h=>i(t).push("/"),["prevent"]))},v,32)])]))}});export{x as default};
