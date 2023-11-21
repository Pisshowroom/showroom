import{o as v,u as N,H as b}from"./dom.2e071e66.js";import{d as w}from"./main.a20b77c5.js";class x{constructor(){this.current=this.detect(),this.currentId=0}set(t){this.current!==t&&(this.currentId=0,this.current=t)}reset(){this.set(this.detect())}nextId(){return++this.currentId}get isServer(){return this.current==="server"}get isClient(){return this.current==="client"}detect(){return typeof window>"u"||typeof document>"u"?"server":"client"}}let E=new x;function F(e){if(E.isServer)return null;if(e instanceof Node)return e.ownerDocument;if(e!=null&&e.hasOwnProperty("value")){let t=v(e);if(t)return t.ownerDocument}return document}let f=["[contentEditable=true]","[tabindex]","a[href]","area[href]","button:not([disabled])","iframe","input:not([disabled])","select:not([disabled])","textarea:not([disabled])"].map(e=>`${e}:not([tabindex='-1'])`).join(",");var S=(e=>(e[e.First=1]="First",e[e.Previous=2]="Previous",e[e.Next=4]="Next",e[e.Last=8]="Last",e[e.WrapAround=16]="WrapAround",e[e.NoScroll=32]="NoScroll",e))(S||{}),y=(e=>(e[e.Error=0]="Error",e[e.Overflow=1]="Overflow",e[e.Success=2]="Success",e[e.Underflow=3]="Underflow",e))(y||{}),A=(e=>(e[e.Previous=-1]="Previous",e[e.Next=1]="Next",e))(A||{});function I(e=document.body){return e==null?[]:Array.from(e.querySelectorAll(f)).sort((t,n)=>Math.sign((t.tabIndex||Number.MAX_SAFE_INTEGER)-(n.tabIndex||Number.MAX_SAFE_INTEGER)))}var O=(e=>(e[e.Strict=0]="Strict",e[e.Loose=1]="Loose",e))(O||{});function _(e,t=0){var n;return e===((n=F(e))==null?void 0:n.body)?!1:N(t,{[0](){return e.matches(f)},[1](){let r=e;for(;r!==null;){if(r.matches(f))return!0;r=r.parentElement}return!1}})}function H(e){e==null||e.focus({preventScroll:!0})}let g=["textarea","input"].join(",");function P(e){var t,n;return(n=(t=e==null?void 0:e.matches)==null?void 0:t.call(e,g))!=null?n:!1}function M(e,t=n=>n){return e.slice().sort((n,r)=>{let u=t(n),s=t(r);if(u===null||s===null)return 0;let a=u.compareDocumentPosition(s);return a&Node.DOCUMENT_POSITION_FOLLOWING?-1:a&Node.DOCUMENT_POSITION_PRECEDING?1:0})}function C(e,t,{sorted:n=!0,relativeTo:r=null,skipElements:u=[]}={}){var s;let a=(s=Array.isArray(e)?e.length>0?e[0].ownerDocument:document:e==null?void 0:e.ownerDocument)!=null?s:document,i=Array.isArray(e)?n?M(e):e:I(e);u.length>0&&i.length>1&&(i=i.filter(l=>!u.includes(l))),r=r!=null?r:a.activeElement;let h=(()=>{if(t&5)return 1;if(t&10)return-1;throw new Error("Missing Focus.First, Focus.Previous, Focus.Next or Focus.Last")})(),m=(()=>{if(t&1)return 0;if(t&2)return Math.max(0,i.indexOf(r))-1;if(t&4)return Math.max(0,i.indexOf(r))+1;if(t&8)return i.length-1;throw new Error("Missing Focus.First, Focus.Previous, Focus.Next or Focus.Last")})(),p=t&32?{preventScroll:!0}:{},d=0,c=i.length,o;do{if(d>=c||d+c<=0)return 0;let l=m+d;if(t&16)l=(l+c)%c;else{if(l<0)return 3;if(l>=c)return 1}o=i[l],o==null||o.focus(p),d+=h}while(o!==a.activeElement);return t&6&&P(o)&&o.select(),o.hasAttribute("tabindex")||o.setAttribute("tabindex","0"),2}var T=(e=>(e[e.None=1]="None",e[e.Focusable=2]="Focusable",e[e.Hidden=4]="Hidden",e))(T||{});let G=w({name:"Hidden",props:{as:{type:[Object,String],default:"div"},features:{type:Number,default:1}},setup(e,{slots:t,attrs:n}){return()=>{let{features:r,...u}=e,s={"aria-hidden":(r&2)===2?!0:void 0,style:{position:"fixed",top:1,left:1,width:1,height:0,padding:0,margin:-1,overflow:"hidden",clip:"rect(0, 0, 0, 0)",whiteSpace:"nowrap",borderWidth:"0",...(r&4)===4&&(r&2)!==2&&{display:"none"}}};return b({ourProps:s,theirProps:u,slot:{},attrs:n,slots:t,name:"Hidden"})}}});function U(e){typeof queueMicrotask=="function"?queueMicrotask(e):Promise.resolve().then(e).catch(t=>setTimeout(()=>{throw t}))}export{O as F,H,M as I,S as N,C as O,_ as S,y as T,T as a,G as f,F as m,E as n,U as t};
