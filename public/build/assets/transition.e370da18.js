import{o as C,H as $,u as W,t as V,N as fe,a as qe,S as q,T as Ue}from"./dom.2e071e66.js";import{n as re,S as We,F as Ve,m as J,f as ve,a as pe,t as _e,H as z,O as ae,N as I,T as Ge}from"./micro-task.4d5625c1.js";import{A as O,r as f,c as v,d as F,L as S,F as ze,l as E,I as X,z as R,y as x,B,N as Ye,O as Ke,g as Qe,P as Je,Q as Xe,n as Ze}from"./main.a20b77c5.js";import{p as Oe,l as T,C as et,c as tt}from"./open-closed.ba13e779.js";function de(e,t,l){re.isServer||O(a=>{document.addEventListener(e,t,l),a(()=>document.removeEventListener(e,t,l))})}function nt(e,t,l=v(()=>!0)){function a(n,o){if(!l.value||n.defaultPrevented)return;let i=o(n);if(i===null||!i.getRootNode().contains(i))return;let s=function u(d){return typeof d=="function"?u(d()):Array.isArray(d)||d instanceof Set?d:[d]}(e);for(let u of s){if(u===null)continue;let d=u instanceof HTMLElement?u:C(u);if(d!=null&&d.contains(i)||n.composed&&n.composedPath().includes(d))return}return!We(i,Ve.Loose)&&i.tabIndex!==-1&&n.preventDefault(),t(n,i)}let r=f(null);de("mousedown",n=>{var o,i;l.value&&(r.value=((i=(o=n.composedPath)==null?void 0:o.call(n))==null?void 0:i[0])||n.target)},!0),de("click",n=>{!r.value||(a(n,()=>r.value),r.value=null)},!0),de("blur",n=>a(n,()=>window.document.activeElement instanceof HTMLIFrameElement?window.document.activeElement:null),!0)}function lt(){return/iPhone/gi.test(window.navigator.platform)||/Mac/gi.test(window.navigator.platform)&&window.navigator.maxTouchPoints>0}function at(e,t,l){re.isServer||O(a=>{window.addEventListener(e,t,l),a(()=>window.removeEventListener(e,t,l))})}var Q=(e=>(e[e.Forwards=0]="Forwards",e[e.Backwards=1]="Backwards",e))(Q||{});function rt(){let e=f(0);return at("keydown",t=>{t.key==="Tab"&&(e.value=t.shiftKey?1:0)}),e}function Ae(e,t,l,a){re.isServer||O(r=>{e=e!=null?e:window,e.addEventListener(t,l,a),r(()=>e.removeEventListener(t,l,a))})}var De=(e=>(e[e.None=1]="None",e[e.InitialFocus=2]="InitialFocus",e[e.TabLock=4]="TabLock",e[e.FocusLock=8]="FocusLock",e[e.RestoreFocus=16]="RestoreFocus",e[e.All=30]="All",e))(De||{});let K=Object.assign(F({name:"FocusTrap",props:{as:{type:[Object,String],default:"div"},initialFocus:{type:Object,default:null},features:{type:Number,default:30},containers:{type:Object,default:f(new Set)}},inheritAttrs:!1,setup(e,{attrs:t,slots:l,expose:a}){let r=f(null);a({el:r,$el:r});let n=v(()=>J(r));ot({ownerDocument:n},v(()=>Boolean(e.features&16)));let o=it({ownerDocument:n,container:r,initialFocus:v(()=>e.initialFocus)},v(()=>Boolean(e.features&2)));ut({ownerDocument:n,container:r,containers:e.containers,previousActiveElement:o},v(()=>Boolean(e.features&8)));let i=rt();function s(p){let b=C(r);!b||(h=>h())(()=>{W(i.value,{[Q.Forwards]:()=>{ae(b,I.First,{skipElements:[p.relatedTarget]})},[Q.Backwards]:()=>{ae(b,I.Last,{skipElements:[p.relatedTarget]})}})})}let u=f(!1);function d(p){p.key==="Tab"&&(u.value=!0,requestAnimationFrame(()=>{u.value=!1}))}function c(p){var b;let h=new Set((b=e.containers)==null?void 0:b.value);h.add(r);let L=p.relatedTarget;L instanceof HTMLElement&&L.dataset.headlessuiFocusGuard!=="true"&&(Ce(h,L)||(u.value?ae(C(r),W(i.value,{[Q.Forwards]:()=>I.Next,[Q.Backwards]:()=>I.Previous})|I.WrapAround,{relativeTo:p.target}):p.target instanceof HTMLElement&&z(p.target)))}return()=>{let p={},b={ref:r,onKeydown:d,onFocusout:c},{features:h,initialFocus:L,containers:A,..._}=e;return S(ze,[Boolean(h&4)&&S(ve,{as:"button",type:"button","data-headlessui-focus-guard":!0,onFocus:s,features:pe.Focusable}),$({ourProps:b,theirProps:{...t,..._},slot:p,attrs:t,slots:l,name:"FocusTrap"}),Boolean(h&4)&&S(ve,{as:"button",type:"button","data-headlessui-focus-guard":!0,onFocus:s,features:pe.Focusable})])}}}),{features:De});function ot({ownerDocument:e},t){let l=f(null);function a(){var n;l.value||(l.value=(n=e.value)==null?void 0:n.activeElement)}function r(){!l.value||(z(l.value),l.value=null)}E(()=>{X(t,(n,o)=>{n!==o&&(n?a():r())},{immediate:!0})}),R(r)}function it({ownerDocument:e,container:t,initialFocus:l},a){let r=f(null),n=f(!1);return E(()=>n.value=!0),R(()=>n.value=!1),E(()=>{X([t,l,a],(o,i)=>{if(o.every((u,d)=>(i==null?void 0:i[d])===u)||!a.value)return;let s=C(t);!s||_e(()=>{var u,d;if(!n.value)return;let c=C(l),p=(u=e.value)==null?void 0:u.activeElement;if(c){if(c===p){r.value=p;return}}else if(s.contains(p)){r.value=p;return}c?z(c):ae(s,I.First|I.NoScroll)===Ge.Error&&console.warn("There are no focusable elements inside the <FocusTrap />"),r.value=(d=e.value)==null?void 0:d.activeElement})},{immediate:!0,flush:"post"})}),r}function ut({ownerDocument:e,container:t,containers:l,previousActiveElement:a},r){var n;Ae((n=e.value)==null?void 0:n.defaultView,"focus",o=>{if(!r.value)return;let i=new Set(l==null?void 0:l.value);i.add(t);let s=a.value;if(!s)return;let u=o.target;u&&u instanceof HTMLElement?Ce(i,u)?(a.value=u,z(u)):(o.preventDefault(),o.stopPropagation(),z(s)):z(a.value)},!0)}function Ce(e,t){var l;for(let a of e)if((l=a.value)!=null&&l.contains(t))return!0;return!1}let $e="body > *",G=new Set,j=new Map;function Fe(e){e.setAttribute("aria-hidden","true"),e.inert=!0}function Le(e){let t=j.get(e);!t||(t["aria-hidden"]===null?e.removeAttribute("aria-hidden"):e.setAttribute("aria-hidden",t["aria-hidden"]),e.inert=t.inert)}function st(e,t=f(!0)){O(l=>{if(!t.value||!e.value)return;let a=e.value,r=J(a);if(r){G.add(a);for(let n of j.keys())n.contains(a)&&(Le(n),j.delete(n));r.querySelectorAll($e).forEach(n=>{if(n instanceof HTMLElement){for(let o of G)if(n.contains(o))return;G.size===1&&(j.set(n,{"aria-hidden":n.getAttribute("aria-hidden"),inert:n.inert}),Fe(n))}}),l(()=>{if(G.delete(a),G.size>0)r.querySelectorAll($e).forEach(n=>{if(n instanceof HTMLElement&&!j.has(n)){for(let o of G)if(n.contains(o))return;j.set(n,{"aria-hidden":n.getAttribute("aria-hidden"),inert:n.inert}),Fe(n)}});else for(let n of j.keys())Le(n),j.delete(n)})}})}let Re=Symbol("ForcePortalRootContext");function dt(){return B(Re,!1)}let me=F({name:"ForcePortalRoot",props:{as:{type:[Object,String],default:"template"},force:{type:Boolean,default:!1}},setup(e,{slots:t,attrs:l}){return x(Re,e.force),()=>{let{force:a,...r}=e;return $({theirProps:r,ourProps:{},slot:{},slots:t,attrs:l,name:"ForcePortalRoot"})}}});function ct(e){let t=J(e);if(!t){if(e===null)return null;throw new Error(`[Headless UI]: Cannot find ownerDocument for contextElement: ${e}`)}let l=t.getElementById("headlessui-portal-root");if(l)return l;let a=t.createElement("div");return a.setAttribute("id","headlessui-portal-root"),t.body.appendChild(a)}let Be=F({name:"Portal",props:{as:{type:[Object,String],default:"div"}},setup(e,{slots:t,attrs:l}){let a=f(null),r=v(()=>J(a)),n=dt(),o=B(ke,null),i=f(n===!0||o==null?ct(a.value):o.resolveTarget());return O(()=>{n||o!=null&&(i.value=o.resolveTarget())}),R(()=>{var s,u;let d=(s=r.value)==null?void 0:s.getElementById("headlessui-portal-root");!d||i.value===d&&i.value.children.length<=0&&((u=i.value.parentElement)==null||u.removeChild(i.value))}),()=>{if(i.value===null)return null;let s={ref:a,"data-headlessui-portal":""};return S(Ye,{to:i.value},$({ourProps:s,theirProps:e,slot:{},attrs:l,slots:t,name:"Portal"}))}}}),ke=Symbol("PortalGroupContext"),ft=F({name:"PortalGroup",props:{as:{type:[Object,String],default:"template"},target:{type:Object,default:null}},setup(e,{attrs:t,slots:l}){let a=Ke({resolveTarget(){return e.target}});return x(ke,a),()=>{let{target:r,...n}=e;return $({theirProps:n,ourProps:{},slot:{},attrs:t,slots:l,name:"PortalGroup"})}}}),je=Symbol("StackContext");var ge=(e=>(e[e.Add=0]="Add",e[e.Remove=1]="Remove",e))(ge||{});function vt(){return B(je,()=>{})}function pt({type:e,enabled:t,element:l,onUpdate:a}){let r=vt();function n(...o){a==null||a(...o),r(...o)}E(()=>{X(t,(o,i)=>{o?n(0,e,l):i===!0&&n(1,e,l)},{immediate:!0,flush:"sync"})}),R(()=>{t.value&&n(1,e,l)}),x(je,n)}let xe=Symbol("DescriptionContext");function mt(){let e=B(xe,null);if(e===null)throw new Error("Missing parent");return e}function gt({slot:e=f({}),name:t="Description",props:l={}}={}){let a=f([]);function r(n){return a.value.push(n),()=>{let o=a.value.indexOf(n);o!==-1&&a.value.splice(o,1)}}return x(xe,{register:r,slot:e,name:t,props:l}),v(()=>a.value.length>0?a.value.join(" "):void 0)}let Ut=F({name:"Description",props:{as:{type:[Object,String],default:"p"},id:{type:String,default:()=>`headlessui-description-${V()}`}},setup(e,{attrs:t,slots:l}){let a=mt();return E(()=>R(a.register(e.id))),()=>{let{name:r="Description",slot:n=f({}),props:o={}}=a,{id:i,...s}=e,u={...Object.entries(o).reduce((d,[c,p])=>Object.assign(d,{[c]:Qe(p)}),{}),id:i};return $({ourProps:u,theirProps:s,slot:n.value,attrs:t,slots:l,name:r})}}});function ht(e){let t=Je(e.getSnapshot());return R(e.subscribe(()=>{t.value=e.getSnapshot()})),t}function ye(){let e=[],t=[],l={enqueue(a){t.push(a)},addEventListener(a,r,n,o){return a.addEventListener(r,n,o),l.add(()=>a.removeEventListener(r,n,o))},requestAnimationFrame(...a){let r=requestAnimationFrame(...a);l.add(()=>cancelAnimationFrame(r))},nextFrame(...a){l.requestAnimationFrame(()=>{l.requestAnimationFrame(...a)})},setTimeout(...a){let r=setTimeout(...a);l.add(()=>clearTimeout(r))},add(a){e.push(a)},style(a,r,n){let o=a.style.getPropertyValue(r);return Object.assign(a.style,{[r]:n}),this.add(()=>{Object.assign(a.style,{[r]:o})})},dispose(){for(let a of e.splice(0))a()},async workQueue(){for(let a of t.splice(0))await a()}};return l}function bt(e,t){let l=e(),a=new Set;return{getSnapshot(){return l},subscribe(r){return a.add(r),()=>a.delete(r)},dispatch(r,...n){let o=t[r].call(l,...n);o&&(l=o,a.forEach(i=>i()))}}}function yt(){let e;return{before({doc:t}){var l;let a=t.documentElement;e=((l=t.defaultView)!=null?l:window).innerWidth-a.clientWidth},after({doc:t,d:l}){let a=t.documentElement,r=a.clientWidth-a.offsetWidth,n=e-r;l.style(a,"paddingRight",`${n}px`)}}}function wt(){if(!lt())return{};let e;return{before(){e=window.pageYOffset},after({doc:t,d:l,meta:a}){function r(o){return a.containers.flatMap(i=>i()).some(i=>i.contains(o))}l.style(t.body,"marginTop",`-${e}px`),window.scrollTo(0,0);let n=null;l.addEventListener(t,"click",o=>{if(o.target instanceof HTMLElement)try{let i=o.target.closest("a");if(!i)return;let{hash:s}=new URL(i.href),u=t.querySelector(s);u&&!r(u)&&(n=u)}catch{}},!0),l.addEventListener(t,"touchmove",o=>{o.target instanceof HTMLElement&&!r(o.target)&&o.preventDefault()},{passive:!1}),l.add(()=>{window.scrollTo(0,window.pageYOffset+e),n&&n.isConnected&&(n.scrollIntoView({block:"nearest"}),n=null)})}}}function St(){return{before({doc:e,d:t}){t.style(e.documentElement,"overflow","hidden")}}}function Et(e){let t={};for(let l of e)Object.assign(t,l(t));return t}let U=bt(()=>new Map,{PUSH(e,t){var l;let a=(l=this.get(e))!=null?l:{doc:e,count:0,d:ye(),meta:new Set};return a.count++,a.meta.add(t),this.set(e,a),this},POP(e,t){let l=this.get(e);return l&&(l.count--,l.meta.delete(t)),this},SCROLL_PREVENT({doc:e,d:t,meta:l}){let a={doc:e,d:t,meta:Et(l)},r=[wt(),yt(),St()];r.forEach(({before:n})=>n==null?void 0:n(a)),r.forEach(({after:n})=>n==null?void 0:n(a))},SCROLL_ALLOW({d:e}){e.dispose()},TEARDOWN({doc:e}){this.delete(e)}});U.subscribe(()=>{let e=U.getSnapshot(),t=new Map;for(let[l]of e)t.set(l,l.documentElement.style.overflow);for(let l of e.values()){let a=t.get(l.doc)==="hidden",r=l.count!==0;(r&&!a||!r&&a)&&U.dispatch(l.count>0?"SCROLL_PREVENT":"SCROLL_ALLOW",l),l.count===0&&U.dispatch("TEARDOWN",l)}});function Tt(e,t,l){let a=ht(U),r=v(()=>{let n=e.value?a.value.get(e.value):void 0;return n?n.count>0:!1});return X([e,t],([n,o],[i],s)=>{if(!n||!o)return;U.dispatch("PUSH",n,l);let u=!1;s(()=>{u||(U.dispatch("POP",i!=null?i:n,l),u=!0)})},{immediate:!0}),r}var $t=(e=>(e[e.Open=0]="Open",e[e.Closed=1]="Closed",e))($t||{});let he=Symbol("DialogContext");function Z(e){let t=B(he,null);if(t===null){let l=new Error(`<${e} /> is missing a parent <Dialog /> component.`);throw Error.captureStackTrace&&Error.captureStackTrace(l,Z),l}return t}let ne="DC8F892D-2EBD-447C-A4C8-A03058436FF4",Wt=F({name:"Dialog",inheritAttrs:!1,props:{as:{type:[Object,String],default:"div"},static:{type:Boolean,default:!1},unmount:{type:Boolean,default:!0},open:{type:[Boolean,String],default:ne},initialFocus:{type:Object,default:null},id:{type:String,default:()=>`headlessui-dialog-${V()}`}},emits:{close:e=>!0},setup(e,{emit:t,attrs:l,slots:a,expose:r}){var n;let o=f(!1);E(()=>{o.value=!0});let i=f(0),s=Oe(),u=v(()=>e.open===ne&&s!==null?(s.value&T.Open)===T.Open:e.open),d=f(new Set),c=f(null),p=f(null),b=v(()=>J(c));if(r({el:c,$el:c}),!(e.open!==ne||s!==null))throw new Error("You forgot to provide an `open` prop to the `Dialog`.");if(typeof u.value!="boolean")throw new Error(`You provided an \`open\` prop to the \`Dialog\`, but the value is not a boolean. Received: ${u.value===ne?void 0:e.open}`);let h=v(()=>o.value&&u.value?0:1),L=v(()=>h.value===0),A=v(()=>i.value>1),_=B(he,null)!==null,k=v(()=>A.value?"parent":"leaf"),H=v(()=>s!==null?(s.value&T.Closing)===T.Closing:!1),ee=v(()=>!A.value||H.value?!1:L.value);st(c,ee),pt({type:"Dialog",enabled:v(()=>h.value===0),element:c,onUpdate:(g,m,w)=>{if(m==="Dialog")return W(g,{[ge.Add](){d.value.add(w),i.value+=1},[ge.Remove](){d.value.delete(w),i.value-=1}})}});let te=gt({name:"DialogDescription",slot:v(()=>({open:u.value}))}),M=f(null),D={titleId:M,panelRef:f(null),dialogState:h,setTitleId(g){M.value!==g&&(M.value=g)},close(){t("close",!1)}};x(he,D);function Y(){var g,m,w;return[...Array.from((m=(g=b.value)==null?void 0:g.querySelectorAll("html > *, body > *, [data-headlessui-portal]"))!=null?m:[]).filter(y=>!(y===document.body||y===document.head||!(y instanceof HTMLElement)||y.contains(C(p))||D.panelRef.value&&y.contains(D.panelRef.value))),(w=D.panelRef.value)!=null?w:c.value]}let ie=v(()=>!(!L.value||A.value));nt(()=>Y(),(g,m)=>{D.close(),Xe(()=>m==null?void 0:m.focus())},ie);let ue=v(()=>!(A.value||h.value!==0));Ae((n=b.value)==null?void 0:n.defaultView,"keydown",g=>{!ue.value||g.defaultPrevented||g.key===qe.Escape&&(g.preventDefault(),g.stopPropagation(),D.close())});let se=v(()=>!(H.value||h.value!==0||_));return Tt(b,se,g=>{var m;return{containers:[...(m=g.containers)!=null?m:[],Y]}}),O(g=>{if(h.value!==0)return;let m=C(c);if(!m)return;let w=new IntersectionObserver(y=>{for(let P of y)P.boundingClientRect.x===0&&P.boundingClientRect.y===0&&P.boundingClientRect.width===0&&P.boundingClientRect.height===0&&D.close()});w.observe(m),g(()=>w.disconnect())}),()=>{let{id:g,open:m,initialFocus:w,...y}=e,P={...l,ref:c,id:g,role:"dialog","aria-modal":h.value===0?!0:void 0,"aria-labelledby":M.value,"aria-describedby":te.value},Ee={open:h.value===0};return S(me,{force:!0},()=>[S(Be,()=>S(ft,{target:c.value},()=>S(me,{force:!1},()=>S(K,{initialFocus:w,containers:d,features:L.value?W(k.value,{parent:K.features.RestoreFocus,leaf:K.features.All&~K.features.FocusLock}):K.features.None},()=>$({ourProps:P,theirProps:y,slot:Ee,attrs:l,slots:a,visible:h.value===0,features:fe.RenderStrategy|fe.Static,name:"Dialog"}))))),S(ve,{features:pe.Hidden,ref:p})])}}}),Vt=F({name:"DialogOverlay",props:{as:{type:[Object,String],default:"div"},id:{type:String,default:()=>`headlessui-dialog-overlay-${V()}`}},setup(e,{attrs:t,slots:l}){let a=Z("DialogOverlay");function r(n){n.target===n.currentTarget&&(n.preventDefault(),n.stopPropagation(),a.close())}return()=>{let{id:n,...o}=e;return $({ourProps:{id:n,"aria-hidden":!0,onClick:r},theirProps:o,slot:{open:a.dialogState.value===0},attrs:t,slots:l,name:"DialogOverlay"})}}});F({name:"DialogBackdrop",props:{as:{type:[Object,String],default:"div"},id:{type:String,default:()=>`headlessui-dialog-backdrop-${V()}`}},inheritAttrs:!1,setup(e,{attrs:t,slots:l,expose:a}){let r=Z("DialogBackdrop"),n=f(null);return a({el:n,$el:n}),E(()=>{if(r.panelRef.value===null)throw new Error("A <DialogBackdrop /> component is being used, but a <DialogPanel /> component is missing.")}),()=>{let{id:o,...i}=e,s={id:o,ref:n,"aria-hidden":!0};return S(me,{force:!0},()=>S(Be,()=>$({ourProps:s,theirProps:{...t,...i},slot:{open:r.dialogState.value===0},attrs:t,slots:l,name:"DialogBackdrop"})))}}});let _t=F({name:"DialogPanel",props:{as:{type:[Object,String],default:"div"},id:{type:String,default:()=>`headlessui-dialog-panel-${V()}`}},setup(e,{attrs:t,slots:l,expose:a}){let r=Z("DialogPanel");a({el:r.panelRef,$el:r.panelRef});function n(o){o.stopPropagation()}return()=>{let{id:o,...i}=e,s={id:o,ref:r.panelRef,onClick:n};return $({ourProps:s,theirProps:i,slot:{open:r.dialogState.value===0},attrs:t,slots:l,name:"DialogPanel"})}}});F({name:"DialogTitle",props:{as:{type:[Object,String],default:"h2"},id:{type:String,default:()=>`headlessui-dialog-title-${V()}`}},setup(e,{attrs:t,slots:l}){let a=Z("DialogTitle");return E(()=>{a.setTitleId(e.id),R(()=>a.setTitleId(null))}),()=>{let{id:r,...n}=e;return $({ourProps:{id:r},theirProps:n,slot:{open:a.dialogState.value===0},attrs:t,slots:l,name:"DialogTitle"})}}});function Ft(e){let t={called:!1};return(...l)=>{if(!t.called)return t.called=!0,e(...l)}}function ce(e,...t){e&&t.length>0&&e.classList.add(...t)}function le(e,...t){e&&t.length>0&&e.classList.remove(...t)}var be=(e=>(e.Finished="finished",e.Cancelled="cancelled",e))(be||{});function Lt(e,t){let l=ye();if(!e)return l.dispose;let{transitionDuration:a,transitionDelay:r}=getComputedStyle(e),[n,o]=[a,r].map(i=>{let[s=0]=i.split(",").filter(Boolean).map(u=>u.includes("ms")?parseFloat(u):parseFloat(u)*1e3).sort((u,d)=>d-u);return s});return n!==0?l.setTimeout(()=>t("finished"),n+o):t("finished"),l.add(()=>t("cancelled")),l.dispose}function Pe(e,t,l,a,r,n){let o=ye(),i=n!==void 0?Ft(n):()=>{};return le(e,...r),ce(e,...t,...l),o.nextFrame(()=>{le(e,...l),ce(e,...a),o.add(Lt(e,s=>(le(e,...a,...t),ce(e,...r),i(s))))}),o.add(()=>le(e,...t,...l,...a,...r)),o.add(()=>i("cancelled")),o.dispose}function N(e=""){return e.split(" ").filter(t=>t.trim().length>1)}let we=Symbol("TransitionContext");var Pt=(e=>(e.Visible="visible",e.Hidden="hidden",e))(Pt||{});function Ot(){return B(we,null)!==null}function At(){let e=B(we,null);if(e===null)throw new Error("A <TransitionChild /> is used but it is missing a parent <TransitionRoot />.");return e}function Dt(){let e=B(Se,null);if(e===null)throw new Error("A <TransitionChild /> is used but it is missing a parent <TransitionRoot />.");return e}let Se=Symbol("NestingContext");function oe(e){return"children"in e?oe(e.children):e.value.filter(({state:t})=>t==="visible").length>0}function He(e){let t=f([]),l=f(!1);E(()=>l.value=!0),R(()=>l.value=!1);function a(n,o=q.Hidden){let i=t.value.findIndex(({id:s})=>s===n);i!==-1&&(W(o,{[q.Unmount](){t.value.splice(i,1)},[q.Hidden](){t.value[i].state="hidden"}}),!oe(t)&&l.value&&(e==null||e()))}function r(n){let o=t.value.find(({id:i})=>i===n);return o?o.state!=="visible"&&(o.state="visible"):t.value.push({id:n,state:"visible"}),()=>a(n,q.Unmount)}return{children:t,register:r,unregister:a}}let Me=fe.RenderStrategy,Ct=F({props:{as:{type:[Object,String],default:"div"},show:{type:[Boolean],default:null},unmount:{type:[Boolean],default:!0},appear:{type:[Boolean],default:!1},enter:{type:[String],default:""},enterFrom:{type:[String],default:""},enterTo:{type:[String],default:""},entered:{type:[String],default:""},leave:{type:[String],default:""},leaveFrom:{type:[String],default:""},leaveTo:{type:[String],default:""}},emits:{beforeEnter:()=>!0,afterEnter:()=>!0,beforeLeave:()=>!0,afterLeave:()=>!0},setup(e,{emit:t,attrs:l,slots:a,expose:r}){let n=f(0);function o(){n.value|=T.Opening,t("beforeEnter")}function i(){n.value&=~T.Opening,t("afterEnter")}function s(){n.value|=T.Closing,t("beforeLeave")}function u(){n.value&=~T.Closing,t("afterLeave")}if(!Ot()&&et())return()=>S(Bt,{...e,onBeforeEnter:o,onAfterEnter:i,onBeforeLeave:s,onAfterLeave:u},a);let d=f(null),c=f("visible"),p=v(()=>e.unmount?q.Unmount:q.Hidden);r({el:d,$el:d});let{show:b,appear:h}=At(),{register:L,unregister:A}=Dt(),_={value:!0},k=V(),H={value:!1},ee=He(()=>{!H.value&&c.value!=="hidden"&&(c.value="hidden",A(k),u())});E(()=>{let m=L(k);R(m)}),O(()=>{if(p.value===q.Hidden&&!!k){if(b&&c.value!=="visible"){c.value="visible";return}W(c.value,{hidden:()=>A(k),visible:()=>L(k)})}});let te=N(e.enter),M=N(e.enterFrom),D=N(e.enterTo),Y=N(e.entered),ie=N(e.leave),ue=N(e.leaveFrom),se=N(e.leaveTo);E(()=>{O(()=>{if(c.value==="visible"){let m=C(d);if(m instanceof Comment&&m.data==="")throw new Error("Did you forget to passthrough the `ref` to the actual DOM node?")}})});function g(m){let w=_.value&&!h.value,y=C(d);!y||!(y instanceof HTMLElement)||w||(H.value=!0,b.value&&o(),b.value||s(),m(b.value?Pe(y,te,M,D,Y,P=>{H.value=!1,P===be.Finished&&i()}):Pe(y,ie,ue,se,Y,P=>{H.value=!1,P===be.Finished&&(oe(ee)||(c.value="hidden",A(k),u()))})))}return E(()=>{X([b],(m,w,y)=>{g(y),_.value=!1},{immediate:!0})}),x(Se,ee),tt(v(()=>W(c.value,{visible:T.Open,hidden:T.Closed})|n.value)),()=>{let{appear:m,show:w,enter:y,enterFrom:P,enterTo:Ee,entered:kt,leave:jt,leaveFrom:xt,leaveTo:Ht,...Te}=e,Ne={ref:d},Ie={...Te,...h&&b&&re.isServer?{class:Ze([Te.class,...te,...M])}:{}};return $({theirProps:Ie,ourProps:Ne,slot:{},slots:a,attrs:l,features:Me,visible:c.value==="visible",name:"TransitionChild"})}}}),Rt=Ct,Bt=F({inheritAttrs:!1,props:{as:{type:[Object,String],default:"div"},show:{type:[Boolean],default:null},unmount:{type:[Boolean],default:!0},appear:{type:[Boolean],default:!1},enter:{type:[String],default:""},enterFrom:{type:[String],default:""},enterTo:{type:[String],default:""},entered:{type:[String],default:""},leave:{type:[String],default:""},leaveFrom:{type:[String],default:""},leaveTo:{type:[String],default:""}},emits:{beforeEnter:()=>!0,afterEnter:()=>!0,beforeLeave:()=>!0,afterLeave:()=>!0},setup(e,{emit:t,attrs:l,slots:a}){let r=Oe(),n=v(()=>e.show===null&&r!==null?(r.value&T.Open)===T.Open:e.show);O(()=>{if(![!0,!1].includes(n.value))throw new Error('A <Transition /> is used but it is missing a `:show="true | false"` prop.')});let o=f(n.value?"visible":"hidden"),i=He(()=>{o.value="hidden"}),s=f(!0),u={show:n,appear:v(()=>e.appear||!s.value)};return E(()=>{O(()=>{s.value=!1,n.value?o.value="visible":oe(i)||(o.value="hidden")})}),x(Se,i),x(we,u),()=>{let d=Ue(e,["show","appear","unmount","onBeforeEnter","onBeforeLeave","onAfterEnter","onAfterLeave"]),c={unmount:e.unmount};return $({ourProps:{...c,as:"template"},theirProps:{},slot:{},slots:{...a,default:()=>[S(Rt,{onBeforeEnter:()=>t("beforeEnter"),onAfterEnter:()=>t("afterEnter"),onBeforeLeave:()=>t("beforeLeave"),onAfterLeave:()=>t("afterLeave"),...l,...c,...d},a.default)]},attrs:{},features:Me,visible:o.value==="visible",name:"Transition"})}}});export{Vt as K,Bt as S,_t as _,Ct as h,Wt as j};
