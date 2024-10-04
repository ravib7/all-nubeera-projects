(function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
var k=this||self,aa=function(a,b){a:{var c=["CLOSURE_FLAGS"];for(var d=k,e=0;e<c.length;e++)if(d=d[c[e]],null==d){c=null;break a}c=d}a=c&&c[a];return null!=a?a:b},ba=function(a){return a};var ca=String.prototype.trim?function(a){return a.trim()}:function(a){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]};var da=aa(610401301,!1),ea=aa(516931134,aa(1,!0));var m;const fa=k.navigator;m=fa?fa.userAgentData||null:null;function ha(a){return da?m?m.brands.some(({brand:b})=>b&&-1!=b.indexOf(a)):!1:!1}function p(a){var b;a:{if(b=k.navigator)if(b=b.userAgent)break a;b=""}return-1!=b.indexOf(a)};function q(){return da?!!m&&0<m.brands.length:!1}function ia(){return q()?ha("Chromium"):(p("Chrome")||p("CriOS"))&&!(q()?0:p("Edge"))||p("Silk")};const ka=Array.prototype.map?function(a,b){return Array.prototype.map.call(a,b,void 0)}:function(a,b){const c=a.length,d=Array(c),e="string"===typeof a?a.split(""):a;for(let f=0;f<c;f++)f in e&&(d[f]=b.call(void 0,e[f],f,a));return d};var la=q()?!1:p("Trident")||p("MSIE");!p("Android")||ia();ia();p("Safari")&&(ia()||(q()?0:p("Coast"))||(q()?0:p("Opera"))||(q()?0:p("Edge"))||(q()?ha("Microsoft Edge"):p("Edg/"))||q()&&ha("Opera"));var ma={},r=null;var na="undefined"!==typeof Uint8Array,oa=!la&&"function"===typeof btoa;const t="function"===typeof Symbol&&"symbol"===typeof Symbol()?Symbol():void 0;function u(a,b){if(t)return a[t]|=b;if(void 0!==a.h)return a.h|=b;Object.defineProperties(a,{h:{value:b,configurable:!0,writable:!0,enumerable:!1}});return b}function v(a){let b;t?b=a[t]:b=a.h;return null==b?0:b}function w(a,b){t?a[t]=b:void 0!==a.h?a.h=b:Object.defineProperties(a,{h:{value:b,configurable:!0,writable:!0,enumerable:!1}});return a}function pa(a){u(a,1);return a}function qa(a){u(a,16);return a}
function ra(a,b){w(b,(a|0)&-51)}function x(a,b){w(b,(a|18)&-41)};var y={};function sa(a){return null!==a&&"object"===typeof a&&!Array.isArray(a)&&a.constructor===Object}let ta;var A=Object.freeze(w([],23));function B(a){if(v(a.i)&2)throw Error();}function ua(a){var b=a.length;(b=b?a[b-1]:void 0)&&sa(b)?b.g=1:a.push({g:1})};const C=!ea;function va(a,b,c){let d=!1;if(null!=a&&"object"===typeof a&&!(d=Array.isArray(a))&&a.s===y)return a;if(d)return wa(a,c),new b(a)}function wa(a,b){const c=v(a);let d=c;0===d&&(d|=b&16);d|=b&2;d!==c&&w(a,d)};var xa=function(a){const b=a.l+a.m;return a.j||(a.j=a.i[b]={})},D=function(a,b,c){return-1===b?null:b>=a.l?a.j?a.j[b]:void 0:c&&a.j&&(c=a.j[b],null!=c)?c:a.i[b+a.m]},E=function(a,b,c,d){a.o&&(a.o=void 0);if(b>=a.l||d)return xa(a)[b]=c,a;a.i[b+a.m]=c;(c=a.j)&&b in c&&delete c[b];return a},J=function(a,b,c){return void 0!==F(a,b,H(a,I,c))};
function ya(a,b,c,d){let e=D(a,b);Array.isArray(e)||(e=A);const f=v(e);f&1||pa(e);if(d)f&2||u(e,18),c&1||Object.freeze(e);else{d=!(c&2);const g=f&2;c&1||!g?d&&f&16&&!g&&(a=e,t?a[t]&&(a[t]&=-17):void 0!==a.h&&(a.h&=-17)):(e=pa(Array.prototype.slice.call(e)),E(a,b,e))}return e}var K=function(a,b){a=D(a,b);a=null==a?a:!!a;return null==a?!1:a};function za(a,b,c,d){B(a);c!==d?E(a,b,c):E(a,b,void 0,!1);return a}
var H=function(a,b,c){return L(a,b)===c?c:-1},L=function(a,b){let c=0;for(let d=0;d<b.length;d++){const e=b[d];null!=D(a,e)&&(0!==c&&E(a,c,void 0,!1),c=e)}return c},F=function(a,b,c,d){const e=D(a,c,d);b=va(e,b,v(a.i));b!==e&&null!=b&&E(a,c,b,d);return b},M=function(a,b,c){b=F(a,b,c,!1);if(null==b)return b;if(!(v(a.i)&2)){const d=Aa(b);d!==b&&(b=d,E(a,c,b,!1))}return b},Ca=function(a,b){var c=v(a.i),d=!!(c&2);var e=d?1:2;var f=!!(c&2);C&&!a.h&&(a.h={});var g=C?a.h[b]:void 0,h=ya(a,b,1|(C?2:0),f);
if(C?g:h!==A&&v(h)&4){if(3!==e&&!f)if(C)(f=Object.isFrozen(g),1!==e||f)?2===e&&f&&(g=Array.prototype.slice.call(g),a.h[b]=g):Object.freeze(g);else if(f=Object.isFrozen(h),1===e)f||Object.freeze(h);else{e=v(h);var n=e&-19;f&&(h=Array.prototype.slice.call(h),e=0,E(a,b,h));e!==n&&w(h,n)}e=C?g:h}else{var l=h,G=Ba;g=C?[]:void 0;h=!!(c&2);f=!!(v(l)&2);n=l;!h&&f&&(l=Array.prototype.slice.call(l));var P=c|(f?2:0);c=f;let V=0,ja=0;for(;V<l.length;V++){var z=l[V];if(C){var bb=G;Array.isArray(z)?(wa(z,P),z=
new bb(z)):z=void 0}else z=va(z,G,P);void 0!==z&&(c||(c=!!(2&v(z.i))),C?g.push(z):l[ja++]=z)}C?a.h[b]=g:ja<V&&(l.length=ja);G=l;P=v(G);l=P|1;l=C?l|32:l|4;l=c?l&-9:l|8;P!=l&&(c=G,Object.isFrozen(c)&&(c=Array.prototype.slice.call(c)),w(c,l),G=c);l=G;n!==l&&E(a,b,l);C&&(h||1===e&&f)&&u(g,18);(h||1===e)&&Object.freeze(C?g:l);e=C?g:l}a=C?ya(a,b,3,d):e;if(!(d||v(a)&8)){for(d=0;d<e.length;d++)b=e[d],g=Aa(b),b!==g&&(e[d]=g,C&&(a[d]=g.i));u(a,8)}return e},N=function(a,b){a=D(a,b);return null==a?0:a},O=function(a,
b){a=D(a,b);return null==a?"":a};let Q;function Da(a,b){Q=b;a=new a(b);Q=void 0;return a};function Ea(a,b){return Fa(b)}
function Fa(a){switch(typeof a){case "number":return isFinite(a)?a:String(a);case "object":if(a)if(Array.isArray(a)){if(0!==(v(a)&128))return a=Array.prototype.slice.call(a),ua(a),a}else if(na&&null!=a&&a instanceof Uint8Array){if(oa){for(var b="",c=0,d=a.length-10240;c<d;)b+=String.fromCharCode.apply(null,a.subarray(c,c+=10240));b+=String.fromCharCode.apply(null,c?a.subarray(c):a);a=btoa(b)}else{void 0===b&&(b=0);if(!r){r={};c="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split("");d=
["+/=","+/","-_=","-_.","-_"];for(var e=0;5>e;e++){var f=c.concat(d[e].split(""));ma[e]=f;for(var g=0;g<f.length;g++){var h=f[g];void 0===r[h]&&(r[h]=g)}}}b=ma[b];c=Array(Math.floor(a.length/3));d=b[64]||"";for(e=f=0;f<a.length-2;f+=3){var n=a[f],l=a[f+1];h=a[f+2];g=b[n>>2];n=b[(n&3)<<4|l>>4];l=b[(l&15)<<2|h>>6];h=b[h&63];c[e++]=""+g+n+l+h}g=0;h=d;switch(a.length-f){case 2:g=a[f+1],h=b[(g&15)<<2]||d;case 1:a=a[f],c[e]=""+b[a>>2]+b[(a&3)<<4|g>>4]+h+d}a=c.join("")}return a}}return a};function Ga(a,b,c,d,e,f){if(null!=a){if(Array.isArray(a))a=e&&0==a.length&&v(a)&1?void 0:f&&v(a)&2?a:Ha(a,b,c,void 0!==d,e,f);else if(sa(a)){const g={};for(let h in a)g[h]=Ga(a[h],b,c,d,e,f);a=g}else a=b(a,d);return a}}function Ha(a,b,c,d,e,f){const g=v(a);d=d?!!(g&16):void 0;a=Array.prototype.slice.call(a);for(let h=0;h<a.length;h++)a[h]=Ga(a[h],b,c,d,e,f);c(g,a);return a}function Ia(a){return a.s===y?a.toJSON():Fa(a)}function Ja(a,b){a&128&&ua(b)};function Ka(a,b,c=x){if(null!=a){if(na&&a instanceof Uint8Array)return b?a:new Uint8Array(a);if(Array.isArray(a)){const d=v(a);if(d&2)return a;if(b&&!(d&32)&&(d&16||0===d))return w(a,d|18),a;a=Ha(a,Ka,d&4?x:c,!0,!1,!0);b=v(a);b&4&&b&2&&Object.freeze(a);return a}return a.s===y?La(a):a}}
function Ma(a,b,c,d,e,f,g){if(a=C?a.h&&a.h[c]:void 0){d=v(a);d&2?d=a:(f=ka(a,La),x(d,f),Object.freeze(f),d=f);B(b);g=null==d?A:C?pa([]):d;if(null!=d){f=!!d.length;for(a=0;a<d.length;a++){const h=d[a];f=f&&!(v(h.i)&2);C&&(g[a]=h.i)}f=1|(f?8:0)|(C?0:4);a=v(g);(a&f)!==f&&(Object.isFrozen(g)&&(g=Array.prototype.slice.call(g)),w(g,a|f));C&&(b.h||(b.h={}),b.h[c]=d)}else C&&b.h&&(b.h[c]=void 0);E(b,c,g,e)}else d=Ka(d,f,g),B(b),E(b,c,d,e)}
function La(a){if(v(a.i)&2)return a;a=Na(a,!0);u(a.i,18);return a}function Na(a,b){const c=a.i;var d=qa([]),e=a.constructor.h;e&&d.push(e);e=a.j;if(e){d.length=c.length;var f={};d[d.length-1]=f}0!==(v(c)&128)&&ua(d);b=b||v(a.i)&2?x:ra;d=Da(a.constructor,d);a.u&&(d.u=a.u.slice());f=!!(v(c)&16);const g=e?c.length-1:c.length;for(let h=0;h<g;h++)Ma(a,d,h-a.m,c[h],!1,f,b);if(e)for(const h in e)Ma(a,d,+h,e[h],!0,f,b);return d}function Aa(a){if(!(v(a.i)&2))return a;const b=Na(a,!1);b.o=a;return b};var R=class{constructor(a,b,c){null==a&&(a=Q);Q=void 0;var d=this.constructor.h;if(null==a){a=d?[d]:[];var e=!0;w(a,48)}else{if(!Array.isArray(a))throw Error();if(d&&d!==a[0])throw Error();var f=u(a,0)|32;e=0!==(16&f);if(128&f)throw Error();w(a,f)}this.m=d?0:-1;this.h=void 0;this.i=a;a:{f=this.i.length;d=f-1;if(f&&(f=this.i[d],sa(f))){this.j=f;this.l=d-this.m;break a}void 0!==b&&-1<b?(this.l=Math.max(b,d+1-this.m),this.j=void 0):this.l=Number.MAX_VALUE}if(this.j&&"g"in this.j)throw Error('Unexpected "g" flag in sparse object of message that is not a group type.');
if(c){b=e&&!0;e=this.l;let h;for(d=0;d<c.length;d++)if(f=c[d],f<e){f+=this.m;var g=a[f];g?Oa(g,b):a[f]=A}else h||(h=xa(this)),(g=h[f])?Oa(g,b):h[f]=A}}toJSON(){const a=this.i;var b;ta?b=a:b=Ha(a,Ia,Ja,void 0,!1,!1);return b}};function Oa(a,b){if(Array.isArray(a)){var c=v(a),d=1;!b||c&2||(d|=16);(c&d)!==d&&w(a,c|d)}}R.prototype.s=y;R.prototype.toString=function(){return this.i.toString()};var Ba=class extends R{constructor(a){super(a)}},S=[2,3,4];var T=class extends R{constructor(a){super(a)}};var U=class extends R{constructor(a){super(a)}};var Qa=class extends R{constructor(a){super(a,-1,Pa)}},Pa=[6];var Ra=class extends R{constructor(){super()}};var Sa=class extends R{constructor(){super()}},Ta=[2];var Va=class extends R{constructor(a){super(a,-1,Ua)}},Ua=[2];var Wa=class extends R{constructor(a){super(a)}};var Xa=class extends R{constructor(a){super(a)}};var Ya=class extends R{constructor(a){super(a)}};var Za=function(a){return b=>{if(null==b||""==b)b=new a;else{b=JSON.parse(b);if(!Array.isArray(b))throw Error(void 0);b=Da(a,qa(b))}return b}}(class extends R{constructor(a){super(a)}}),I=[2,3,4,5,6,7];var W;var cb=function(a,b){this.l=a===$a&&b||"";this.h=ab},ab={},$a={};var eb=class{constructor(a,b){this.h=b===db?a:""}toString(){return this.h+""}},db={};var fb=function(){this.h=document||{cookie:""}};
fb.prototype.set=function(a,b,c){let d,e,f,g=!1,h;"object"===typeof c&&(h=c.B,g=c.C||!1,f=c.domain||void 0,e=c.path||void 0,d=c.A);if(/[;=\s]/.test(a))throw Error('Invalid cookie name "'+a+'"');if(/[;\r\n]/.test(b))throw Error('Invalid cookie value "'+b+'"');void 0===d&&(d=-1);this.h.cookie=a+"="+b+(f?";domain="+f:"")+(e?";path="+e:"")+(0>d?"":0==d?";expires="+(new Date(1970,1,1)).toUTCString():";expires="+(new Date(Date.now()+1E3*d)).toUTCString())+(g?";secure":"")+(null!=h?";samesite="+h:"")};
fb.prototype.get=function(a,b){const c=a+"=",d=(this.h.cookie||"").split(";");for(let e=0,f;e<d.length;e++){f=ca(d[e]);if(0==f.lastIndexOf(c,0))return f.slice(c.length);if(f==a)return""}return b};/*

 SPDX-License-Identifier: Apache-2.0
*/
class gb{constructor(){this.l=new fb;this.h="";this.o=a=>{a:{let n;try{n=Za(a.data)}catch(l){break a}if(J(n,Qa,4)){var b=M(n,Qa,H(n,I,4)),c=Ca(b,6),d;c.length&&(d=hb(c));c={event:O(b,1)||void 0,category:O(b,2)||void 0,action:O(b,3)||void 0,label:O(b,4)||void 0,value:N(b,5)||void 0,nonInteraction:K(b,13)?"True":"False",additionalParams:d||void 0};if(void 0!==F(b,U,12,!1)){var e=M(b,U,12);c.recommendations={targetPage:O(e,1),targetType:N(e,2),targetRank:N(e,3),targetIdenticalDescriptions:N(e,4),targetTitleWords:N(e,
5),targetDescriptionWords:N(e,6),experiment:O(e,7)};d="";for(var f of window.dataLayer)if("experiment"in f&&"baseIds"in f.experiment){d=f.experiment.baseIds;break}(d=ib(d,O(e,7)))&&K(e,8)&&(c.experiment={ids:d})}else c.recommendations={targetPage:void 0,targetType:void 0,targetRank:void 0,targetIdenticalDescriptions:void 0,targetTitleWords:void 0,targetDescriptionWords:void 0};if(!("experiment"in c))for(var g of window.dataLayer)if("experiment"in g&&"ids"in g.experiment&&g.experiment.ids){c.experiment=
{ids:g.experiment.ids};break}f=M(b,T,11);if(void 0!==F(b,T,11,!1)&&null!==f){b=jb(f);for(var h of Object.keys(b))c[h]=b[h]}window.dataLayer.push(c)}else if(J(n,Va,3)){b=M(n,Va,H(n,I,3));c=Ca(b,2);let l;c.length&&(l=hb(c));c={event:"trackPageview",pageName:O(b,1),additionalParams:l||void 0,nonInteraction:K(b,3)||void 0,ratingsCount:N(b,4)||void 0,ratingsValue:N(b,5)||void 0};h=M(b,T,6);if(void 0!==F(b,T,6,!1)&&null!==h){b=jb(h);for(e of Object.keys(b))c[e]=b[e]}window.dataLayer.push(c)}else if(J(n,
Wa,7))b=M(n,Wa,H(n,I,7)),window.dataLayer.push({parentContext:{referrer:O(b,2)||"",_ga_devsiteCookie:O(b,1)||""}});else if(J(n,Xa,6))b=M(n,Xa,H(n,I,6)),c=this.h,h=M(b,U,9)||new U,f=O(b,10)||void 0,b={experiment:{ids:(K(h,8)?ib(f,O(h,7)):f)||void 0,baseIds:f||void 0},hostContext:{internalUser:O(b,1)||void 0,pageType:O(b,8)||void 0,projectName:O(b,6)||void 0,signedIn:O(b,2)||void 0,tenant:O(b,5)||void 0,thirdPartyCookieAccepted:c.length?"True":"False"},language:{machineTranslated:O(b,7)||void 0,requested:O(b,
3)||void 0,served:O(b,4)||void 0},recommendations:{sourcePage:O(h,1),sourceType:N(h,2),sourceRank:N(h,3),sourceIdenticalDescriptions:N(h,4),sourceTitleWords:N(h,5),sourceDescriptionWords:N(h,6),experiment:O(h,7)}},window.dataLayer.push(b);else if(J(n,Ya,5))b=M(n,Ya,H(n,I,5)),window.dataLayer.push({originalUrlParameters:{dclid:O(b,1)||void 0,gclid:O(b,2)||void 0,utmCampaign:O(b,3)||void 0,utmContent:O(b,4)||void 0,utmCreativeFormat:O(b,8)||void 0,utmMarketingTactic:O(b,10)||void 0,utmMedium:O(b,5)||
void 0,utmSource:O(b,6)||void 0,utmSourcePlatform:O(b,9)||void 0,utmTerm:O(b,7)||void 0}});else if(2===L(n,I)){window.dataLayer=window.dataLayer||[];window.dataLayer.push({"gtm.start":(new Date).getTime(),event:"gtm.js"});h=document.getElementsByTagName("script")[0];f=document.createElement("script");f.async=!0;g=new cb($a,"//www.googletagmanager.com/gtm.js?id=GTM-PBZPJDG");g=g instanceof cb&&g.constructor===cb&&g.h===ab?g.l:"type_error:Const";if(void 0===W)if(e=null,(d=k.trustedTypes)&&d.createPolicy){try{e=
d.createPolicy("goog#html",{createHTML:ba,createScript:ba,createScriptURL:ba})}catch(l){k.console&&k.console.error(l.message)}W=e}else W=e;g=(e=W)?e.createScriptURL(g):g;e=new eb(g,db);g=f;g.src=e instanceof eb&&e.constructor===eb?e.h:"type_error:TrustedResourceUrl";(b=(e=null==(c=(b=(g.ownerDocument&&g.ownerDocument.defaultView||window).document).querySelector)?void 0:c.call(b,"script[nonce]"))?e.nonce||e.getAttribute("nonce")||"":"")&&g.setAttribute("nonce",b);h.parentNode.insertBefore(f,h)}}};
window.addEventListener("message",this.o)}v(a){this.h=this.l.get("_ga_devsite")||"";var b=new Ra;a=za(b,1,null==a?a:!!a,!1);b=za(a,2,this.h,"");a=new Sa;B(a);null==b&&(b=void 0);B(a);var c=L(a,Ta);c&&2!==c&&null!=b&&E(a,c,void 0,!1);a=E(a,2,b);if(window.parent!==window){b=window.parent;c=b.postMessage;a:{ta=!0;try{var d=JSON.stringify(a.toJSON(),Ea);break a}finally{ta=!1}d=void 0}c.call(b,d,"*")}}}gb.prototype.notifyIframeReady=gb.prototype.v;
function hb(a){const b={};for(const c of a){a=O(c,1);let d;O(c,H(c,S,2))?d=O(c,H(c,S,2)):N(c,H(c,S,3))?d=N(c,H(c,S,3)):4===L(c,S)&&(d=K(c,H(c,S,4))?"True":"False");b[a]=d}return b}
function jb(a){const b={};if(!a)return b;b.hasProfile=K(a,6)?"True":"False";b.practitionerType=O(a,1)||"Property not set";b.profileCreationMethod=O(a,4)||"Property not set";b.profileHasInterests=K(a,12)?"True":"False";b.profileInterests=O(a,13)||"Property not set";b.profileHasJobTitle=K(a,10)?"True":"False";b.profileHasLocation=K(a,7)?"True":"False";b.profileHasPronoun=K(a,9)?"True":"False";b.profileIsPublic=K(a,8)?"True":"False";b.profileSocialLinks=O(a,11)||"Property not set";b.profileBadgeEmailOptIn=
K(a,5)?"True":"False";b.profileFeedbackEmailOptIn=K(a,2)?"True":"False";b.profileNewsletterEmailOptIn=K(a,3)?"True":"False";return b}function ib(a,b){if(a||b){if(a&&!b)return a;if(b&&!a)return b;b=new Set(b.split(","));a=[...(new Set([...(new Set(a.split(","))),...b]))];a.sort();return a.join(",")}}var kb=gb,X=["AnalyticsLibrary"],Y=k;X[0]in Y||"undefined"==typeof Y.execScript||Y.execScript("var "+X[0]);
for(var Z;X.length&&(Z=X.shift());)X.length||void 0===kb?Y[Z]&&Y[Z]!==Object.prototype[Z]?Y=Y[Z]:Y=Y[Z]={}:Y[Z]=kb;}).call(this);
