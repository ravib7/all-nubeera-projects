(function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
var aa="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(a==Array.prototype||a==Object.prototype)return a;a[b]=c.value;return a},ba=function(a){a=["object"==typeof globalThis&&globalThis,a,"object"==typeof window&&window,"object"==typeof self&&self,"object"==typeof global&&global];for(var b=0;b<a.length;++b){var c=a[b];if(c&&c.Math==Math)return c}throw Error("Cannot find global object");},ca=ba(this),da=function(a,b){if(b)a:{var c=ca;a=a.split(".");for(var d=0;d<
a.length-1;d++){var e=a[d];if(!(e in c))break a;c=c[e]}a=a[a.length-1];d=c[a];b=b(d);b!=d&&null!=b&&aa(c,a,{configurable:!0,writable:!0,value:b})}};
da("String.prototype.matchAll",function(a){return a?a:function(b){if(b instanceof RegExp&&!b.global)throw new TypeError("RegExp passed into String.prototype.matchAll() must have global tag.");var c=new RegExp(b,b instanceof RegExp?void 0:"g"),d=this,e=!1,f={next:function(){if(e)return{value:void 0,done:!0};var g=c.exec(d);if(!g)return e=!0,{value:void 0,done:!0};""===g[0]&&(c.lastIndex+=1);return{value:g,done:!1}}};f[Symbol.iterator]=function(){return f};return f}});var k=this||self;var l,m;a:{for(var n=["CLOSURE_FLAGS"],p=k,q=0;q<n.length;q++)if(p=p[n[q]],null==p){m=null;break a}m=p}var r=m&&m[610401301];l=null!=r?r:!1;var t;const u=k.navigator;t=u?u.userAgentData||null:null;function v(a){return l?t?t.brands.some(({brand:b})=>b&&-1!=b.indexOf(a)):!1:!1}function w(a){var b;a:{if(b=k.navigator)if(b=b.userAgent)break a;b=""}return-1!=b.indexOf(a)};function x(){return l?!!t&&0<t.brands.length:!1}function A(){return x()?v("Chromium"):(w("Chrome")||w("CriOS"))&&!(x()?0:w("Edge"))||w("Silk")};var ea=x()?!1:w("Trident")||w("MSIE");!w("Android")||A();A();w("Safari")&&(A()||(x()?0:w("Coast"))||(x()?0:w("Opera"))||(x()?0:w("Edge"))||(x()?v("Microsoft Edge"):w("Edg/"))||x()&&v("Opera"));var B={},C=null;var fa="undefined"!==typeof Uint8Array,ha=!ea&&"function"===typeof btoa;const D="function"===typeof Symbol&&"symbol"===typeof Symbol()?Symbol():void 0;function E(a,b){if(D)return a[D]|=b;if(void 0!==a.h)return a.h|=b;Object.defineProperties(a,{h:{value:b,configurable:!0,writable:!0,enumerable:!1}});return b}function F(a){let b;D?b=a[D]:b=a.h;return null==b?0:b}function G(a,b){D?a[D]=b:void 0!==a.h?a.h=b:Object.defineProperties(a,{h:{value:b,configurable:!0,writable:!0,enumerable:!1}});return a};var H={};function I(a){return null!==a&&"object"===typeof a&&!Array.isArray(a)&&a.constructor===Object}let J;Object.freeze(G([],23));function K(a){var b=a.length;(b=b?a[b-1]:void 0)&&I(b)?b.g=1:a.push({g:1})};var L=function(a,b){return-1===b?null:b>=a.l?a.h?a.h[b]:void 0:a.j[b+a.i]},M=function(a,b,c,d){a.m&&(a.m=void 0);b>=a.l||d?(d=a.l+a.i,(a.h||(a.h=a.j[d]={}))[b]=c):(a.j[b+a.i]=c,(a=a.h)&&b in a&&delete a[b])};function N(a,b,c,d){if(F(a.j)&2)throw Error();c!==d?M(a,b,c):M(a,b,void 0,!1);return a}function O(a,b){return null==a?b:a};let P;function ia(a,b){return ja(b)}
function ja(a){switch(typeof a){case "number":return isFinite(a)?a:String(a);case "object":if(a)if(Array.isArray(a)){if(0!==(F(a)&128))return a=Array.prototype.slice.call(a),K(a),a}else if(fa&&null!=a&&a instanceof Uint8Array){if(ha){for(var b="",c=0,d=a.length-10240;c<d;)b+=String.fromCharCode.apply(null,a.subarray(c,c+=10240));b+=String.fromCharCode.apply(null,c?a.subarray(c):a);a=btoa(b)}else{void 0===b&&(b=0);if(!C){C={};c="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split("");d=
["+/=","+/","-_=","-_.","-_"];for(var e=0;5>e;e++){var f=c.concat(d[e].split(""));B[e]=f;for(var g=0;g<f.length;g++){var h=f[g];void 0===C[h]&&(C[h]=g)}}}b=B[b];c=Array(Math.floor(a.length/3));d=b[64]||"";for(e=f=0;f<a.length-2;f+=3){var y=a[f],z=a[f+1];h=a[f+2];g=b[y>>2];y=b[(y&3)<<4|z>>4];z=b[(z&15)<<2|h>>6];h=b[h&63];c[e++]=""+g+y+z+h}g=0;h=d;switch(a.length-f){case 2:g=a[f+1],h=b[(g&15)<<2]||d;case 1:a=a[f],c[e]=""+b[a>>2]+b[(a&3)<<4|g>>4]+h+d}a=c.join("")}return a}}return a};function ka(a,b,c,d,e,f){if(null!=a){if(Array.isArray(a))a=e&&0==a.length&&F(a)&1?void 0:f&&F(a)&2?a:la(a,b,c,void 0!==d,e,f);else if(I(a)){const g={};for(let h in a)g[h]=ka(a[h],b,c,d,e,f);a=g}else a=b(a,d);return a}}function la(a,b,c,d,e,f){const g=F(a);d=d?!!(g&16):void 0;a=Array.prototype.slice.call(a);for(let h=0;h<a.length;h++)a[h]=ka(a[h],b,c,d,e,f);c(g,a);return a}function ma(a){return a.s===H?a.toJSON():ja(a)}function na(a,b){a&128&&K(b)};var oa=function(a){J=!0;try{return JSON.stringify(a.toJSON(),ia)}finally{J=!1}},Q=class{constructor(a){null==a&&(a=P);P=void 0;var b=this.constructor.h;if(null==a)a=b?[b]:[],G(a,48);else{if(!Array.isArray(a))throw Error();if(b&&b!==a[0])throw Error();let c=E(a,0)|32;if(128&c)throw Error();G(a,c)}this.i=b?0:-1;this.j=a;a:{b=this.j.length;a=b-1;if(b&&(b=this.j[a],I(b))){this.h=b;this.l=a-this.i;break a}this.l=Number.MAX_VALUE}if(this.h&&"g"in this.h)throw Error('Unexpected "g" flag in sparse object of message that is not a group type.');
}toJSON(){const a=this.j;var b;J?b=a:b=la(a,ma,na,void 0,!1,!1);return b}};Q.prototype.s=H;Q.prototype.toString=function(){return this.j.toString()};function pa(a){return b=>{if(null==b||""==b)b=new a;else{b=JSON.parse(b);if(!Array.isArray(b))throw Error(void 0);E(b,16);P=b;b=new a(b);P=void 0}return b}};var qa=pa(class extends Q{});var ra=[/^https:\/\/cloud.google.com\/blog.*/,/\.mp4$/,/^https:\/\/uberproxy.*/,/livereload(.js)?$/,/clients[0-9]+\.google.com/];let R=null;
var sa=function(a){return a.h?Promise.resolve(a.h):new Promise((b,c)=>{const d=k.indexedDB.open("devsite-index-db",1);d.onerror=c;d.onsuccess=()=>{const e=d.result;a.h=e;b(e)};d.onupgradeneeded=e=>{e=e.target.result;e.objectStoreNames.contains("userPreferences")&&e.deleteObjectStore("userPreferences");e=e.createObjectStore("userPreferences",{keyPath:"name"});e.createIndex("name","name",{unique:!0});e.createIndex("value","value",{unique:!1})}})},ta=class{constructor(){this.h=null}async set(a,b){return sa(this).then(c=>
new Promise((d,e)=>{try{const f=c.transaction(["userPreferences"],"readwrite");f.objectStore("userPreferences").put({name:a,value:b});f.oncomplete=()=>{d()};f.onerror=()=>{e()}}catch(f){console.warn(f)}}))}async get(a){return sa(this).then(b=>new Promise((c,d)=>{try{const e=b.transaction(["userPreferences"],"readwrite").objectStore("userPreferences").get(a);e.onsuccess=()=>{const f=e.result;c(f?f.value:void 0)};e.onerror=()=>{d(void 0)}}catch(e){d(void 0)}}),()=>{})}};var ua=["content-length","etag","last-modified"];function S(a){a=new URL(a);return["fonts.googleapis.com","fonts.gstatic.com","localhost"].includes(a.hostname)?!0:["www.gstatic.com","gstatic.com"].includes(a.hostname)?a.pathname.startsWith("/devrel-devsite/")||a.pathname.startsWith("/external_hosted/"):!1};var wa=function(a){var b=new va;return N(b,1,a,0)},va=class extends Q{},xa=pa(va);var ya=function(a,b){if("GET"!==b.method)return!1;b=new URL(b.url,a.location.origin);return b.hostname===a.location.hostname?!0:S(b.href)},T=function(a){return new URL(a.request.url,a.h.location.origin)},U=function(a){const b=T(a);let c,d;return-1===(null==(d=null!=(c=b.pathname.split("/").pop())?c:"")?void 0:d.indexOf("."))&&b.origin===a.h.location.origin},za=function(a){const b=T(a);return U(a)&&b.searchParams.has("partial")},V=async function(a){return a.h.caches.open("devsite.pwa_RUNTIME_v2.1")},
Aa=async function(a){const b=await a.text();let c;try{c=qa(b)}catch(e){}const d=new Headers(a.headers);d.set("Content-Type","text/html");a={status:a.status,statusText:a.statusText,headers:d};return c?new Response(O(L(c,1),""),a):new Response(b,a)},W=async function(a,b){b=new URL(b);if(b.searchParams.has("hl"))return b;U(a)&&(a=await a.i.get("language_preference"),b.searchParams.set("hl",a||"en"));return b},X=async function(a){const b=await V(a);var c=T(a);c=await W(a,c.href);return U(a)&&!za(a)&&
(a=new URL(c.href),a.searchParams.set("partial","1"),a=await (null==b?void 0:b.match(a.href)))?Aa(a):(null==b?void 0:b.match(c.href))||void 0},Ba=function(a,b){return a&&b?ua.some(c=>a.headers.has(c)&&b.headers.has(c))?ua.every(c=>a.headers.has(c)===b.headers.has(c)&&a.headers.get(c)===b.headers.get(c)):!1:!1},Ca=async function(a,b){b=oa(b);if(a=await a.h.clients.matchAll())for(const c of a)c.postMessage(b)},Y=function(){return new Response("<h1>Service Unavailable</h1>",{status:503,statusText:"Service Unavailable",
headers:new Headers({"Content-Type":"text/html"})})},Da=async function(a){const b=await V(a),c=await W(a,a.request.url),d=await (null==b?void 0:b.match(c.href)),e=a.h.fetch(a.request).then(f=>{if(f&&(null==b||b.put(c.href,f.clone()),d&&T(a).pathname.match(/\.(jpeg|jpg|gif|png|svg|webp|avi|mp4|mov)$/)&&!Ba(d,f)&&[...f.headers.keys()].length)){var g=wa(2);g=N(g,2,a.request.url,"");Ca(a,g)}return f}).catch(()=>Y());return d||e},Ea=async function(a,b){const c=await V(a);if(c)try{const d=await W(a,a.request.url);
b.ok?await c.put(d.href,b.clone()):404===b.status&&await c.delete(d.href)}catch(d){}},Fa=async function(a){try{var b=await a.h.fetch(a.request.clone());if(b)return await Ea(a,b),b;const c=await X(a);return c?c:Y()}catch(c){if(b=await X(a))return b;if(U(a)){let d;if(b=await (null==(d=await V(a))?void 0:d.match("/_static/offline?partial=1")))return za(a)?b:Aa(b)}return Y()}},Ga=class{constructor(a,b){this.h=a;this.request=b;R||(R=new ta);this.i=R}async fetch(){if(!ya(this.h,this.request))return this.h.fetch(this.request);
var a=await X(this),b;if(b=a){b=a.headers.get("date");const c=a.headers.get("expires");let d=!1,e=!1;b&&(d=6E4>Date.now()-(new Date(b)).getTime());c&&(e=0<(new Date(c)).getTime()-Date.now());b=d||e}b||(b=T(this),a=!!b.pathname.match(/\.(jpeg|jpg|gif|png|svg|webp|avi|mp4|mov|css|js)$/),b=b.origin===this.h.location.origin||S(b.href),a=a&&b?Da(this):Fa(this));return a}};const Ha=[/^utm_/,RegExp("^dcb_$")];var Ka=async function(a,b){if(!ya(a.h,b)||Ia(b))return a.h.fetch(b).catch(()=>new Response("<h1>Service Unavailable</h1>",{status:503,statusText:"Service Unavailable",headers:new Headers({"Content-Type":"text/html"})}));b=await Ja(a,b.clone());return(new Ga(a.h,b)).fetch()},La=async function(a){const b=(await a.h.caches.keys()).filter(c=>c!==a.cacheName);await Promise.all(b.map(c=>a.h.caches.delete(c)))},Ma=async function(a,b){const c=a.h.location,d=c.origin,e={};(new URL(b,c.origin)).origin===d?
e.credentials="include":e.mode="no-cors";b=new Request(b,e);try{await Ka(a,b)}catch(f){}},Ia=function(a){const b="navigate"===a.mode,c="1"===a.headers.get("Upgrade-Insecure-Requests");a=-1!==(a.headers.get("Accept")||"").indexOf("text/html");return b&&c&&a},Ja=async function(a,b){const c=b.clone(),d=new URL(b.url,a.h.location.origin);if(Ia(b)||d.origin!==a.h.location.origin&&!S(d.href))return c;d.hash="";var e=[...d.searchParams.keys()];for(var f of e)for(const h of Ha)f.match(h)&&d.searchParams.delete(f);
e=new Headers;for(var g of b.headers.entries())g[1]&&e.append(g[0],g[1]);g=null;if("GET"!==b.method&&"HEAD"!==b.method)try{g=await b.text()}catch(h){return c}f=b.mode;d.origin===a.h.location.origin&&d.pathname.startsWith("/_static/")&&(f="no-cors");a={method:b.method,mode:f,body:g,redirect:b.redirect,headers:e,credentials:b.credentials,cache:b.cache,referrer:b.referrer};try{return new Request(d.href,a)}catch(h){return c}},Z=new class{constructor(a,b){this.h=a;this.i=b}u(a){a.waitUntil(this.h.skipWaiting())}o(a){let b=
"GET"!==a.request.method||a.request.headers.has("range");ra.find(c=>c.test(a.request.url))&&(b=!0);b||a.respondWith(Ka(this.i,a.request))}m(a){a.waitUntil(La(this.i).then(()=>this.h.clients.claim()).then(async()=>{const b=oa(wa(4)),c=await this.h.clients.matchAll({type:"window"});if(c)for(const d of c)d.postMessage(b)}))}async l(a){const b=a.data;try{var c=xa(b)}catch(d){return}switch(O(L(c,1),0)){case 1:await Ma(this.i,O(L(c,2),""));break;case 3:case 5:case 6:if(c=await this.h.clients.matchAll({type:"window"}),
a=a.source,b&&c)for(const d of c)d.id!==a.id&&d.postMessage(b)}}}(self,new class{constructor(a,b="devsite.pwa_RUNTIME_v2.1"){this.h=a;this.cacheName=b;this.caches=new Map}}(self));(async function(a){var b=b?b:a.cacheName;let c=a.caches.get(b);c||(c=await a.h.caches.open(b))&&a.caches.set(b,c)})(Z.i);Z.h.oninstall=Z.u.bind(Z);Z.h.onactivate=Z.m.bind(Z);Z.h.onfetch=Z.o.bind(Z);Z.h.onmessage=Z.l.bind(Z);}).call(this);
